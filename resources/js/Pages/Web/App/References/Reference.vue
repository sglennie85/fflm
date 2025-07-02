<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { ref } from 'vue';
import { Tab, TabList, TabPanel, TabPanels, Tabs } from "primevue";
import Dialog from 'primevue/dialog';
import SkillTraitReference from "@/Components/Reference/SkillTraitReference.vue";
import TeamReference from "@/Components/Reference/TeamReference.vue";
import StarPlayerReference from "@/Components/Reference/StarPlayerReference.vue";

const props = defineProps({
    teams: Array,
    skillCategories: Array,
    traits: Array,
    starPlayers: Array,
});

const tab = ref('0');

const selectedSkill = ref(null);
const openSkillDialog = ref(false);

const onOpenSkillDialog = (skill) => {
    selectedSkill.value = skill;
    openSkillDialog.value = true;
};

const selectedTeam = ref(null);
const openTeamDialog = ref(false);

const onOpenTeamDialog = (team) => {
    selectedTeam.value = team;
    openTeamDialog.value = true;
};

const selectedStar = ref(null);
const openStarDialog = ref(false);

const onOpenStarDialog = (star) => {
    selectedStar.value = star;
    openStarDialog.value = true;
};
</script>

<template>
    <AppLayout title="Reference">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Reference
            </h2>
        </template>
        <div class="border-gray-200 p-4">
            <div class="bg-white shadow-xl sm:rounded-lg pb-5">
                <Tabs v-model:value="tab">
                    <div class="flex justify-center pt-2">
                        <TabList>
                            <Tab value="0" class="mx-3">Teams</Tab>
                            <Tab value="1" class="mx-3">Skills</Tab>
                            <Tab value="2" class="mx-3">Traits</Tab>
                            <Tab value="3" class="mx-3">Star Players</Tab>
                        </TabList>
                    </div>
                    <TabPanels>
                        <TabPanel value="0">
                            <div class="pt-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                                <div
                                    v-for="team in teams"
                                    :key="team.id"
                                    @click="onOpenTeamDialog(team)"
                                    class="py-0.5 cursor-pointer hover:font-semibold hover:underline transition"
                                >
                                    {{team.plural_name}}
                                </div>
                            </div>
                        </TabPanel>
                        <TabPanel value="1">
                            <div class="pt-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                                <div class="pt-5" v-for="category in skillCategories">
                                    <div class="font-semibold underline pb-2">{{category.name}}</div>
                                    <div
                                        v-for="skill in category.skills"
                                        :key="skill.id"
                                        @click="onOpenSkillDialog(skill)"
                                        class="py-0.5 cursor-pointer hover:font-semibold hover:underline transition"
                                    >
                                        {{skill.name}}
                                    </div>
                                </div>
                            </div>
                        </TabPanel>
                        <TabPanel value="2">
                            <div class="pt-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                                <div
                                    v-for="trait in traits"
                                    :key="trait.id"
                                    @click="onOpenSkillDialog(trait)"
                                    class="py-0.5 cursor-pointer hover:font-semibold hover:underline transition"
                                >
                                    {{trait.name}}
                                </div>
                            </div>
                        </TabPanel>
                        <TabPanel value="3">
                            <div class="pt-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                                <div v-for="star in starPlayers">
                                    <div
                                        v-if="star.display"
                                        :key="star.id"
                                        @click="onOpenStarDialog(star)"
                                        class="py-0.5 cursor-pointer hover:font-semibold hover:underline transition"
                                    >
                                        {{star.name}}
                                    </div>
                                </div>
                            </div>
                        </TabPanel>
                    </TabPanels>
                </Tabs>
            </div>
        </div>
    </AppLayout>
    <Dialog
        v-model:visible="openSkillDialog"
        :closable="false"
        position="center"
        modal
        dismissableMask
        :show-header="false"
        :style="{ width: '700px' }"
    >
        <SkillTraitReference :skill="selectedSkill" />
    </Dialog>
    <Dialog
        v-model:visible="openTeamDialog"
        :closable="false"
        position="center"
        modal
        dismissableMask
        :show-header="false"
        :style="{ width: '700px' }"
    >
        <TeamReference :team="selectedTeam" />
    </Dialog>
    <Dialog
        v-model:visible="openStarDialog"
        :closable="false"
        position="center"
        modal
        dismissableMask
        :show-header="false"
        :style="{ width: '700px' }"
    >
        <StarPlayerReference :star="selectedStar" />
    </Dialog>
</template>
