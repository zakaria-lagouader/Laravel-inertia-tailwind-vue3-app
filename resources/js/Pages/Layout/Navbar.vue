<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <div class="bg-white">
        <header>
            <Popover class="relative bg-white">
                <div
                    class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <Link href="/">
                            <span class="sr-only">Workflow</span>
                            <img class="h-8 w-auto sm:h-10"
                                src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="" />
                        </Link>
                    </div>
                    <div class="-mr-2 -my-2 md:hidden">
                        <PopoverButton
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Open menu</span>
                            <MenuIcon class="h-6 w-6" aria-hidden="true" />
                        </PopoverButton>
                    </div>
                    <PopoverGroup as="nav" class="hidden md:flex space-x-10">

                        <Link v-for="item in navigation" :key="item.name" :href="item.href"
                            class="text-base font-medium text-gray-500 hover:text-gray-900">
                        {{ item.name }}
                        </Link>
                    </PopoverGroup>
                    <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0" v-if="client === null">
                        <Link href="/client/login" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                            Sign in </Link>
                        <Link href="/client/register"
                            class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                            Sign up </Link>
                    </div>
                    <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0" v-else>
                        <p class="font-semibold text-gray-500">Bonjour {{ client.nom }} {{ client.prenom }}</p>
                        <Link href="/client/logout" as="button" method="post"
                            class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                            Logout </Link>
                    </div>
                </div>

                <transition enter-active-class="duration-200 ease-out" enter-from-class="opacity-0 scale-95"
                    enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
                    leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
                    <PopoverPanel focus
                        class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                        <div
                            class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                            <div class="pt-5 pb-6 px-5">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <img class="h-8 w-auto"
                                            src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                                            alt="Workflow" />
                                    </div>
                                    <div class="-mr-2">
                                        <PopoverButton
                                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                            <span class="sr-only">Close menu</span>
                                            <XIcon class="h-6 w-6" aria-hidden="true" />
                                        </PopoverButton>
                                    </div>
                                </div>
                            </div>
                            <div class="py-6 px-5">
                                <div class="grid grid-cols-2 gap-4">
                                    <Link v-for="item in navigation" :key="item.name" :href="item.href"
                                        class="text-base font-medium text-gray-900 hover:text-gray-700">
                                    {{ item.name }}
                                    </Link>
                                </div>
                                <div class="mt-6" v-if="client === null">
                                    <Link href="/client/register"
                                        class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                        Sign up </Link>
                                    <p class="mt-6 text-center text-base font-medium text-gray-500">
                                        Existing customer?
                                        <Link href="/client/login" class="text-gray-900"> Sign in </Link>
                                    </p>
                                </div>
                                <div class="mt-6" v-else>
                                    <Link href="/client/logout" as="button" method="post"
                                        class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                        Logout </Link>
                                </div>
                            </div>
                        </div>
                    </PopoverPanel>
                </transition>
            </Popover>
        </header>
    </div>
</template>

<script setup>
import { Popover, PopoverButton, PopoverGroup, PopoverPanel } from '@headlessui/vue'
import { MenuIcon, XIcon } from '@heroicons/vue/outline'
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'


const client = computed(() => usePage().props.client)


const navigation = ref([
    { name: 'Reservation', href: '/reservation' },
    { name: 'Partners', href: '#' },
    { name: 'Company', href: '#' },
])

</script>