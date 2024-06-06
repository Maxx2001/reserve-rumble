<template>
    <div class="flex flex-1 flex-col shadow p-2">
        <img class="mx-auto max-h-80 h-auto object-fit w-56 flex-shrink-0 rounded" :src="contentObject.primaryImage.url" alt="" />
        <h3 class="mt-6 text-sm font-medium text-gray-900">{{ contentObject.titleText.text }}</h3>
        <dl class="mt-1 flex flex-grow flex-col justify-around">
            <dd class="text-sm text-gray-500">{{ contentObject.primaryImage.caption.plainText }}</dd>
        </dl>
    </div>
</template>

<script setup>
import { EnvelopeIcon, PhoneIcon } from '@heroicons/vue/20/solid'
defineProps({
    contentObject: {
        type: Object,
        required: true
    }
})
</script>
