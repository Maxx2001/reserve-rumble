<template>
    <DefaultLayout>
        <div class="pt-12 flex justify-between">
            <div>
                <h1 class="text-3xl">
                    Screen Snack
                </h1>
                <h2 class="text-xl pt-2">
                    Nibble on Hits. Crunch on Classics.
                </h2>
            </div>
            <ApplicationLogo class="h-36"/>
        </div>
        <MediaCollection :mediaCollection="upcomingMedia.data" title="Upcoming Media"/>
    </DefaultLayout>
</template>

<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import MediaCollection from "@/Pages/Media/Partials/MediaCollection.vue";
import ApplicationLogo from "@/Components/Breeze/ApplicationLogo.vue";

defineProps({
    upcomingMedia: {
        type: Object,
        required: true
    }
})
</script>
