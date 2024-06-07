<template>
    <h3 class="text-xl">
        Genres
    </h3>
    <div class="flex flex-wrap mt-1">
        <GenreBadge v-for="genre in genreList" :genre="genre" class="mr-6 mb-2"/>
    </div>
</template>
<script setup>
import GenreBadge from "@/Pages/Genres/Partials/GenreBadge.vue";

defineProps({
    genreList: {
        type: Object,
        required: true,
    },
});
</script>
