<template>
    <DefaultLayout>
        <MediaPreview :media="media"/>
    </DefaultLayout>
</template>

<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import MediaPreview from "@/Pages/Media/Partials/MediaPreview.vue";

defineProps({
    media: {
        type: Object,
        required: true
    }
})
</script>
