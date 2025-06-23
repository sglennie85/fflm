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
        name: "Name",
        value: "name",
    },
    {
        name: "Tier",
        value: "tier",
    },
    {
        name: "Re-roll Cost",
        value: "reroll_cost",
    },
    {
        name: "Regions",
        value: "regions",
    },
    {
        name: "Team Rules",
        value: "rules",
    },
])

const props = defineProps({
    teams: Array
})

const moneyFormat = (value) => {
    return Intl.NumberFormat("en-US").format(value);
};

</script>

<template>
    <AppLayout title="Teams">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Teams
            </h2>
        </template>
        <div class="border-gray-200 p-4">
            <div class="bg-white shadow-xl sm:rounded-lg pb-5">
                <div v-for="team in teams" class="px-5 pt-5" :class="{ 'pb-0': index === teams.length - 1 }">
                    <div class="font-bold text-2xl pb-1">{{team.plural_name}}</div>
                    <div><span class="font-bold">Tier: </span>{{team.tier}}</div>
                    <div><span class="font-bold">Apothecary: </span><span v-if="team.apothecary">YES</span><span v-else>NO</span></div>
                    <div><span class="font-bold">0-{{ team.reroll_limit }} Team Re-Rolls: </span>{{ moneyFormat(team.reroll_cost)}} gold pieces each</div>
                    <div v-if="team.is_norse" class="font-semibold">Choose one from:</div>
                    <div v-if="team.regions.length > 0">
                        <span class="font-bold">Regional Special Rules: </span>
                        <span v-for="(region, index) in team.regions" :key="index">
                            {{region.name}}{{index !== team.regions.length - 1 ? ', ' : ''}}
                        </span>
                    </div>
                    <div v-if="team.is_chaos" class="font-semibold">Choose one from:</div>
                    <div v-if="team.rules.length > 0">
                        <span class="font-bold">Team Special Rules: </span>
                        <span v-for="(rule, index) in team.rules" :key="index">
                            {{rule.name}}{{index !== team.rules.length - 1 ? ', ' : ''}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
