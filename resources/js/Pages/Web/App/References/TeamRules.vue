<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { reactive } from "vue";

const columns = reactive([
    {
        name: "Name",
        value: "name",
    },
    {
        name: "Description",
        value: "description",
    },
])

const props = defineProps({
    regions: Array,
    teamRules: Array,
})

</script>

<template>
    <AppLayout title="Team Special Rules">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Team Special Rules
            </h2>
        </template>
        <div class="border-gray-200 p-4">
            <div class="bg-white shadow-xl sm:rounded-lg pb-5">
                <div class="font-bold text-2xl p-5 pb-2">Regional Special Rules</div>
                <div v-for="region in regions" :key="region.id" class="px-5 pt-5" :class="{ 'pb-0': index === region.length - 1 }">
                    <div class="font-semibold">{{ region.name }}</div>
                    <div class="my-2 italic">{{ region.description }}</div>
                </div>
                <div class="font-bold text-2xl p-5 pb-2">Team Special Rules</div>
                <div v-for="(rule, index) in teamRules" :key="rule.id" class="px-5 pt-5" :class="{ 'pb-0': index === rule.length - 1 }">
                    <div class="font-semibold">{{ rule.name }}</div>
                    <div v-for="description in rule.descriptions">
                        <div v-if="description.indentation === 0" class="my-2" :class="{ 'italic': description.narrative }">{{ description.text }}</div>
                        <div v-if="description.indentation === 1" class="pl-16 mb-1">• {{ description.text }}</div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
