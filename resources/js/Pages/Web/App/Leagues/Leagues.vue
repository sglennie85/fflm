<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref } from 'vue';
import { Tab, TabList, TabPanel, TabPanels, Tabs } from "primevue";

const tab = ref('0');

const props = defineProps({
    active: Array,
    inactive: Array,
});

</script>

<template>
    <AppLayout title="Leagues">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Leagues
            </h2>
        </template>
        <div class="border-gray-200 p-4">
            <div class="bg-white shadow-xl sm:rounded-lg pb-5">
                <Tabs v-model:value="tab">
                    <div class="flex justify-center pt-2">
                        <TabList>
                            <Tab value="0" class="mx-3">Active</Tab>
                            <Tab value="1" class="mx-3">Inactive</Tab>
                        </TabList>
                    </div>
                    <TabPanels>
                        <TabPanel value="0">
                            <div v-for="league in active" :key="league.id">
                                <div class="py-2">{{league.name}}</div>
                            </div>
                        </TabPanel>
                        <TabPanel value="1">
                            <div v-for="league in inactive" :key="league.id">
                                <div class="py-2">{{league.name}}</div>
                            </div>
                        </TabPanel>
                    </TabPanels>
                </Tabs>
            </div>
        </div>
    </AppLayout>
</template>
