<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({
    categories: Array,
})
</script>

<template>
    <AppLayout title="Skills">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Skills
            </h2>
        </template>
        <div class="border-gray-200 p-4">
            <div class="bg-white shadow-xl sm:rounded-lg pb-5">
                <div v-for="category in categories" class="p-5">
                    <div class="font-bold text-2xl pb-5">{{ category.name }}<span v-if="category.id !==3"> Skills</span></div>
                    <div class="px-2" v-for="skill in category.skills">
                        <div class="font-semibold">{{ skill.name }}</div>
                        <div v-for="description in skill.descriptions" :key="description.id">
                            <div v-if="description.indentation === 0" class="my-2">{{ description.text }}</div>
                            <div v-if="description.indentation === 1" class="pl-16 mb-1">• {{ description.text }}</div>
                            <div v-if="description.indentation === 2" class="pl-32 mb-0.5">- {{ description.text }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
