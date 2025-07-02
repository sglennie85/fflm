<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({
    traits: Array
})
</script>

<template>
    <AppLayout title="Player Traits">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Player Traits
            </h2>
        </template>
        <div class="border-gray-200 p-4">
            <div class="bg-white shadow-xl sm:rounded-lg pb-5">
                <div v-for="(trait, index) in traits" :key="trait.id" class="px-5 pt-5" :class="{ 'pb-0': index === traits.length - 1 }">
                    <div class="font-bold pb-2">{{ trait.name }}</div>
                    <div v-for="description in trait.descriptions" :key="description.id">
                        <div v-if="description.indentation === 0" class="my-2">{{ description.text }}</div>
                        <div v-if="description.indentation === 1" class="pl-16 mb-1">• {{ description.text }}</div>
                        <div v-if="description.indentation === 2" class="pl-32 mb-0.5">- {{ description.text }}</div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
