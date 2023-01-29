<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <footer class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
            <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
                <div v-for="item in navigation.main" :key="item.name" class="px-5 py-2">
                    <a :href="item.href" class="text-base text-gray-500 hover:text-gray-900">
                        {{ item.name }}
                    </a>
                </div>
            </nav>
            <p class="mt-8 text-center text-base text-gray-400">&copy; 2023 , All rights reserved.</p>
        </div>
    </footer>
</template>

<script setup>
import { ref } from 'vue'

const navigation = ref({
    main: [
        { name: 'Acceuil', href: '/' },
        { name: 'Reservation', href: '/reservation' },
        { name: 'A-Propos', href: '/a-propos' },
        { name: 'Contact', href: '/contact' },
    ],
})

</script>