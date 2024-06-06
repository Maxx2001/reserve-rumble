<template>
    <DefaultLayout>
        <div class="pt-24">
            <h1 class="text-3xl">
                Screen Snack
            </h1>
            <h2 class="text-xl pt-2">
                Nibble on Hits. Crunch on Classics.
            </h2>
        </div>
        <div class="py-12">
            <h2 class="text-2xl">
               Upcoming movies
            </h2>
        </div>
        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <li v-for="media in upcomingMedia.results" :key="upcomingMedia.id" class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow">
                <ContentCard :contentObject="media" />
            </li>
        </ul>
        <div>
            <pre>
                {{
                    upcomingMedia
                }}
            </pre>
        </div>
    </DefaultLayout>
</template>

<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";

defineProps({
    upcomingMedia: {
        type: Object,
        required: true
    }
})

import ContentCard from "@/Components/ContentCard.vue";

const people = [
    {
        name: 'Jane Cooper',
        title: 'Paradigm Representative',
        role: 'Admin',
        email: 'janecooper@example.com',
        telephone: '+1-202-555-0170',
        imageUrl:
            'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60',
    },
    // More people...
]
</script>
