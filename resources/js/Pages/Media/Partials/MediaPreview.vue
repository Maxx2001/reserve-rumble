<template>
    <div class="bg-white mt-1">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">
                <div class="flex flex-col-reverse">
                    <div class="aspect-h-1 aspect-w-1 w-full" v-if="media.primaryImageUrl">
                        <img
                            v-lazy="media.primaryImageUrl"
                            class="h-full w-full object-cover object-center sm:rounded-lg" />
                    </div>
                </div>
                <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                        {{ media.title}}
                    </h1>
                    <ReviewStars :ratingsSummary="media.ratingsSummary"/>
                    <MediaDescription :media="media" />
                    <div class="mt-2">
                        <AddToWatchListButton :disabled="true" :media="media"/>
                    </div>
                    <div class="mt-6">
                        <GenreBadgeList :genre-list="media.genres"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import ReviewStars from "@/Components/Reviews/ReviewStars.vue";
import AddToWatchListButton from "@/Components/Buttons/AddToWatchListButton.vue";
import MediaDescription from "@/Pages/Media/Partials/MediaDescription.vue";
import GenreBadgeList from "@/Pages/Genres/Partials/GenreBadgeList.vue";

defineProps({
    media: {
        type: Object,
        required: true
    }
})
</script>
