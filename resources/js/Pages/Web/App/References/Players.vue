<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { reactive, ref } from "vue";

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
    teams: Array,
})

const moneyFormat = (value) => {
    return Intl.NumberFormat("en-US").format(value);
};

</script>

<template>
    <AppLayout title="Players">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Players
            </h2>
        </template>
        <div class="border-gray-200 p-4">
            <div class="bg-white shadow-xl sm:rounded-lg pb-5">
                <div v-for="(team, teamIndex) in teams" :key="teamIndex" class="px-5 pt-5" :class="{ 'pb-0': teamIndex === teams.length - 1 }">
                    <div class="font-bold text-2xl pb-1">{{ team.plural_name }}</div>
                    <div v-for="(player, playerIndex) in team.players" :key="playerIndex" class="px-5 grid grid-cols-12">
                        <div class="col-span-2 flex justify-start items-center p-3 rounded"><span class="font-bold">0-{{ player.limit }}</span><span class="ml-2">{{ player.plural_name }}</span></div>
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
                        <div class="col-span-1 flex flex-col p-3 rounded">
                            <div v-if="player.primaries.length > 0">
                                <span class="font-bold">Primary: </span>
                                <span v-for="(primary, primaryIndex) in player.primaries" :key="primaryIndex">
                                    {{ primary.name.substring(0, 1) }}
                                </span>
                            </div>
                            <div v-if="player.secondaries.length > 0">
                                <span class="font-bold">Secondary: </span>
                                <span v-for="(secondary, secondaryIndex) in player.secondaries" :key="secondaryIndex">
                                    {{ secondary.name.substring(0, 1) }}
                                </span>
                            </div>
                        </div>
                        <div class="col-span-6 flex flex-col p-3 rounded">
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
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
