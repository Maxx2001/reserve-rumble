<template>
    <span
        class="inline-flex items-center rounded-md bg-indigo-50 px-4 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-700/10"
    >
        {{ genre.text }}
    </span>
</template>

<script setup>
import { defineProps } from 'vue';

defineProps({
    genre: {
        type: Object,
        required: true,
    },
});
</script>
