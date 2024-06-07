<template>
    <div>
        Released in {{ releaseYear }}
    </div>
</template>

<script setup>
defineProps({
    releaseYear: {
        type: Number,
        required: true,
    },
})
</script>
