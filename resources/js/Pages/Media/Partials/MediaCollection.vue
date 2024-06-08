<template>
    <div v-if="title" class="pt-8 pb-2">
        <h2 class="text-2xl ">
            {{ title }}
        </h2>
    </div>
    <hr class="border-b w-full pb-4">
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <li
            v-for="media in mediaCollection"
            :key="media.id"
            class="col-span-1 "
        >
            <MediaContentCard :contentObject="media" />
        </li>
    </ul>
</template>
<script setup>
import MediaContentCard from "@/Pages/Media/Partials/MediaContentCard.vue";

defineProps({
    mediaCollection: {
        type: Object,
        required: true,
    },
    title: {
        type: String,
        required: false,
    },
});
</script>
