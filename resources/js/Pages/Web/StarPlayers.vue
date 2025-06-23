<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import UiInput from "@/UI/UiInput.vue";
import UiInputGroup from "@/UI/UiInputGroup.vue";
import UiTextArea from "@/UI/UiTextArea.vue";
import UiPagination from "@/UI/UiPagination.vue";
import UiTable from "@/UI/UiTable.vue";
import {reactive, ref} from "vue";
import {router} from "@inertiajs/vue3";

const columns = reactive([
    {
        name: "Quantity",
        value: "limit",
    },
    {
        name: "Position",
        value: "name",
    },
    {
        name: "Cost",
        value: "cost",
    },
    {
        name: "MA",
        value: "ma",
    },
    {
        name: "ST",
        value: "st",
    },
    {
        name: "AG",
        value: "ag",
    },
    {
        name: "PA",
        value: "pa",
    },
    {
        name: "AV",
        value: "av",
    },
    {
        name: "Skills",
        value: "skills",
    },
    {
        name: "Traits",
        value: "traits",
    },
])

const props = defineProps({
    starPlayers: Array,
})

const moneyFormat = (value) => {
    return Intl.NumberFormat("en-US").format(value);
};

</script>

<template>
    <AppLayout title="Players">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Star Players
            </h2>
        </template>
        <div class="border-gray-200 p-4">
            <div class="bg-white shadow-xl sm:rounded-lg pb-5">
                <div v-for="(player, playerIndex) in starPlayers" :key="playerIndex" class="px-5 grid grid-cols-12">
                    <div class="col-span-2 flex justify-start items-center p-3 rounded">{{ player.name }}</div>
                    <div class="col-span-1 flex justify-center items-center p-3 rounded">{{ moneyFormat(player.cost) }}</div>
                    <div class="col-span-2 flex flex-col p-3 rounded">
                        <div class="flex justify-center">
                            <div class="flex flex-col items-center mb-2 mr-8">
                                <div class="font-bold">MA</div>
                                <div>{{ player.ma }}</div>
                            </div>
                            <div class="flex flex-col items-center mb-2 mr-8">
                                <div class="font-bold">ST</div>
                                <div>{{ player.st }}</div>
                            </div>
                            <div class="flex flex-col items-center mb-2 mr-8">
                                <div class="font-bold">AG</div>
                                <div>{{ player.ag }}+</div>
                            </div>
                            <div class="flex flex-col items-center mb-2 mr-8">
                                <div class="font-bold">PA</div>
                                <div v-if="player.pa === 0">-</div>
                                <div v-else>{{ player.pa }}+</div>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="font-bold">AV</div>
                                <div>{{ player.av }}+</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3 flex flex-col p-3 rounded">
                        <div v-if="player.skills.length > 0">
                            <span class="font-bold">Skills: </span>
                            <span v-for="(skill, skillIndex) in player.skills" :key="skillIndex">
                                {{ skill.name }}{{ skillIndex !== player.skills.length - 1 ? ', ' : '' }}
                            </span>
                        </div>
                        <div v-if="player.traits.length > 0">
                            <span class="font-bold">Traits: </span>
                            <span v-for="(trait, traitIndex) in player.traits" :key="traitIndex">
                                {{ trait.name }}{{ traitIndex !== player.traits.length - 1 ? ', ' : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="col-span-4 flex flex-col p-3 rounded justify-start">
                        <span class="font-bold">{{ player.special }}:</span><span>{{player.description}}</span>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
