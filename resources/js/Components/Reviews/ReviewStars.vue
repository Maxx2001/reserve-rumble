<template>
    <div class="mt-3" >
        <h3 class="sr-only">Reviews</h3>
        <div class="flex items-center">
            <div class="flex items-center">
                <StarIcon v-for="rating in [0, 1, 2, 3, 4]" :key="rating" :class="[ratingsSummary.aggregateRating > rating ? 'text-indigo-500' : 'text-gray-300', 'h-5 w-5 flex-shrink-0']" aria-hidden="true" />
            </div>
            <p class="pl-1">{{ ratingsSummary.aggregateRating }} out of 5 stars</p>
        </div>
        <p class="text-sm pt-1"> {{ ratingsSummary.voteCount}} votes</p>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';
import { StarIcon } from '@heroicons/vue/20/solid'

defineProps({
    ratingsSummary: {
        type: Object,
        default: () => ({
            aggregateRating: 0,
            voteCount: 0,
        })
    }
})
</script>
