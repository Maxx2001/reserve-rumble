<template>
    <Disclosure as="nav" class="bg-white shadow" v-slot="{ open }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 justify-between">
                <div class="flex">
                    <Link
                        :href="route('home')"
                        class="mt-5"
                    >
                        Screen Snack
                    </Link>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <Link
                            v-for="menuItem in menuItems"
                            :key="menuItem.name"
                            :href="menuItem.route"
                            :class="menuItem.active ? 'border-b-2 border-indigo-500' : 'text-gray-900'"
                            class="inline-flex items-center  px-1 pt-1 text-sm font-medium"
                        >
                            {{ menuItem.name }}
                        </Link>
                    </div>
                </div>
                <AuthControl/>
                <div class="-mr-2 flex items-center sm:hidden">
                    <!-- Mobile menu button -->
                    <DisclosureButton class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="absolute -inset-0.5" />
                        <span class="sr-only">Open main menu</span>
                        <Bars3Icon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
                        <XMarkIcon v-else class="block h-6 w-6" aria-hidden="true" />
                    </DisclosureButton>
                </div>
            </div>
        </div>
        <DisclosurePanel class="sm:hidden">
            <div class="space-y-1 pb-3 pt-2">
                <DisclosureButton as="a" href="#" class="block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700">Dashboard</DisclosureButton>
                <DisclosureButton as="a" href="#" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Team</DisclosureButton>
                <DisclosureButton as="a" href="#" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Projects</DisclosureButton>
                <DisclosureButton as="a" href="#" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Calendar</DisclosureButton>
            </div>
        </DisclosurePanel>
    </Disclosure>
</template>

<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue';
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline'
import { Link, usePage } from "@inertiajs/vue3";
import AuthControl from "@/Layouts/Partials/AuthControl.vue";
import ApplicationLogo from "@/Components/Breeze/ApplicationLogo.vue";
const user = usePage().props.auth.user;
const menuItems = [
    {
        name: "Home",
        route: route('home'),
        active: route().current('home'),
        show: true
    },
    {
        name: "Series",
        route: route('series'),
        active: route().current('series'),
        show: true
    },
    {
        name: "Top boxoffice",
        route: route('topBoxoffice'),
        active: route().current('topBoxoffice'),
        show: true
    },
    {
        name: "Genres",
        route: route('genres.index'),
        active: route().current('genres.*'),
        show: true
    },
    {
        name: "Watchlist",
        route: route('user-media.index'),
        active: route().current('user-media.*'),
        show: usePage().props.auth.user !== null
    },
];

</script>
