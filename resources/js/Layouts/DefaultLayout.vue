<template>
    <Navbar/>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <slot></slot>
    </div>
</template>

<script setup>
import Navbar from "@/Layouts/Partials/Navbar.vue";
</script>
