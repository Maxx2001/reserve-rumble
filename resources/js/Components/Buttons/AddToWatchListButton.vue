<template>
    <BaseButton
        v-if="mediaStatus && mediaStatus.data.status === 'watchlist'"
        :is-Loading="isSubmitting"
        :disabled="!$page.props.auth.user"
        title="Remove from Watch List"
        @click="removeMediaFromWatchList"
    />
    <BaseButton
        v-else
        :is-Loading="isSubmitting"
        :disabled="!$page.props.auth.user"
        title="Add to Watch List"
        @click="addMediaToWatchList"
    />
    <Link :href="route('login')" v-if="!$page.props.auth.user">
        <i class="text-sm text-gray-500 pt-1 underline">
            Please login to add this movie to your watch list.
        </i>
    </Link>
   <SuccessFeedbackMessage
       :message="successMessage"
       @dismiss="successMessage = ''"
       class="mt-4"
   />
</template>
<script setup>
import { Link, router } from "@inertiajs/vue3";
import BaseButton from "@/Components/Buttons/BaseButton.vue";
import { ref, toRefs } from "vue";
import SuccessFeedbackMessage from "@/Components/Feedback/SuccessFeedbackMessage.vue";

const props = defineProps({
    media: {
        type: Object,
        required: true,
    },
    mediaStatus: {
        type: String,
        required: true
    }
});

const { mediaStatus } = toRefs(props);

const { media } = toRefs(props);
const isSubmitting = ref(false);
const successMessage = ref("");

const addMediaToWatchList = () => {
    successMessage.value = "";
    isSubmitting.value = true;

    const requestData =
        {
            mediaId: media.value.mediaId,
            title: media.value.title,
            captionText: media.value.captionText,
            imageUrl: media.value.primaryImageUrl,
        };

    router.post(
        route("user-media.store"),
        requestData,
        {
            onFinish: () => isSubmitting.value = false,
            onSuccess: () => {
                successMessage.value = "Movie added to watch list!";
            },
        });
};

const removeMediaFromWatchList = () => {
    successMessage.value = "";
    isSubmitting.value = true;

    router.delete(
        route("user-media.destroy", { user_medium: mediaStatus.value.data.media_id }),
        {
            onFinish: () => isSubmitting.value = false,
            onSuccess: () => {
                successMessage.value = "Movie removed from watch list!";
            },
        });
};
</script>
