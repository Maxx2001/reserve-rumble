<template>
    <BaseButton
        :disabled="disabled"
        title="Add to Watch List"
    />
    <Link :href="route('login')" v-if="disabled">
        <i class="text-sm text-gray-500 pt-1 underline">
            Please login to add this movie to your watch list.
        </i>
    </Link>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
import BaseButton from "@/Components/Buttons/BaseButton.vue";

defineProps({
    // callback: {
    //     type: String,
    //     required: true,
    // },
    disabled: {
        type: Boolean,
        default: false,
    },
});
</script>
