<template>
    <DefaultLayout>
        <div class="pt-12 pb-4">
            <h1 class="text-3xl">
                Genres
            </h1>
        </div>
        <div class="pt-2">
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <li
                    v-for="genre in genres.results"
                    :key="genre"
                    class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow-md hover:shadow-lg hover:bg-gray-50"
                >
                    <Link :href="route('genres.show', genre)">
                        <div class="flex flex-1 flex-col p-8">
                            <h3 class="text-sm font-medium text-gray-900">
                                {{ genre }}
                            </h3>
                        </div>
                    </Link>
                </li>
            </ul>
        </div>
    </DefaultLayout>
</template>

<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import { Link} from "@inertiajs/vue3";

defineProps({
    genres: {
        type: Object,
        required: true
    }
})
</script>
