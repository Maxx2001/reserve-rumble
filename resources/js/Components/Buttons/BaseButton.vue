<template>
    <button
        :disabled=disabled
        :class="
        disabled ? 'cursor-not-allowed bg-gray-500'
        : 'cursor-pointer bg-indigo-600 hover:bg-indigo-700'"
        class="flex max-w-xs flex-1 items-center justify-center rounded-md border border-transparent  px-8 py-3 text-base font-medium text-white sm:w-full"
    >
        {{ title }}
    </button>
</template>

<script setup>
defineProps({
    disabled: {
        type: Boolean,
        default: false,
    },
    title: {
        type: String,
        required: true,
    },
});
</script>
