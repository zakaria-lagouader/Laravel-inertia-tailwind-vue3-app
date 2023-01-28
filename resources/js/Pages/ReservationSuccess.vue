<template>
    <div class="minh-screen pt-16 pb-12 flex flex-col bg-white">
      <main class="flex-grow flex flex-col justify-center max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex-shrink-0 flex justify-center">
          <a href="/" class="inline-flex">
            <span class="sr-only">Workflow</span>
            <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="" />
          </a>
        </div>
        <div class="py-16">
          <div class="text-center">
            <p class="text-sm font-semibold text-indigo-600 uppercase tracking-wide">Reservation Avec Success</p>
            <h1 class="mt-2 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Reservation Avec Success</h1>
            <div class="mt-6">
              <Link href="/" class="text-base font-medium text-indigo-600 hover:text-indigo-500">Go back home<span aria-hidden="true"> &rarr;</span></Link>
            </div>
          </div>
        </div>
      </main>
    </div>
  </template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<script>
import Layout from './Layout/Layout.vue'

export default {
  // Using shorthand syntax...
  layout: Layout,
}
</script>
  