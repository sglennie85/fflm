<script setup>

const props = defineProps({
    skill: Object,
});

const handleIndentation = (indentation) => {
    switch (indentation) {
        case 1:
            return 'pl-6';
        case 2:
            return 'pl-12';
        default:
            return 'pl-0';
    }
};

</script>

<template>
    <div class="text-center text-xl font-semibold mb-4 pt-5">
        {{skill.name}}
    </div>
    <div
        v-for="(description, index) in skill.descriptions"
        :key="index"
        :class="['py-1.5', handleIndentation(description.indentation)]"
    >
        {{ description.text }}
    </div>
</template>
