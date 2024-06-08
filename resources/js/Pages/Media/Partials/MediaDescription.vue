<template>
    <div class="py-4">
        <h3 class="text-xl">
            Description
        </h3>
        <div>
            <div
                v-if="media.plot"
                class="space-y-6 text-base text-gray-700 py-3"
            >
                {{  media.plot }}
            </div>
            <div v-else>
                <i class="text-sm">
                    No description available.
                </i>
            </div>
        </div>

        <div class="space-y-6 text-base text-gray-700 py-3" v-if="media.captionText">
            {{  media.captionText }}
        </div>
        <div v-if="media.episodes">
            {{  media.episodes.episodeCount }} episodes over {{ media.episodes.seasonCount }} seasons.
        </div>
    </div>
    <ReleaseDateInformation :release-year="media.releaseYear"/>
</template>

<script setup>
import ReleaseDateInformation from "@/Pages/Genres/Partials/ReleaseDateInformation.vue";

defineProps({
    media: {
        type: Object,
        required: true
    }
})
</script>
