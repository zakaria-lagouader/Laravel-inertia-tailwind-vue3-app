<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <div class="bg-gray-50 overflow-hidden">
        <div class="relative max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <svg class="absolute top-0 left-full transform -translate-x-1/2 -translate-y-3/4 lg:left-auto lg:right-full lg:translate-x-2/3 lg:translate-y-1/4"
                width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
                <defs>
                    <pattern id="8b1b5f72-e944-4457-af67-0c6d15a99f38" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#8b1b5f72-e944-4457-af67-0c6d15a99f38)" />
            </svg>

            <div class="relative lg:grid lg:grid-cols-3 lg:gap-x-8">
                <div class="lg:col-span-1">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">On vous Offre</h2>
                </div>
                <dl
                    class="mt-10 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-8 sm:gap-y-10 lg:mt-0 lg:col-span-2">
                    <div v-for="feature in features" :key="feature.name">
                        <dt>
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <component :is="feature.icon" class="h-6 w-6" aria-hidden="true" />
                            </div>
                            <p class="mt-5 text-lg leading-6 font-medium text-gray-900">{{ feature.name }}</p>
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            {{ feature.description }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</template>

<script>
import { GlobeAltIcon, CameraIcon, MailIcon, UserIcon } from '@heroicons/vue/outline'

const features = [
    {
        name: 'Experience digital',
        description: 'Découvrez le monde fascinant des musées grâce à notre expérience digitale immersive.',
        icon: GlobeAltIcon,
    },
    {
        name: 'Accompagement',
        description:
            'Venez explorer nos collections avec l accompagnement de nos guides passionnés.',
        icon: UserIcon,
    },
    {
        name: 'Documentation de votre experience',
        description:
            'Documentez votre visite au musée grâce à notre système de documentation en ligne.',
        icon: CameraIcon,
    },
    {
        name: 'Support 24/7',
        description:
            'Vivez une expérience sans stress au musée grâce à notre support disponible 24/7.',
        icon: MailIcon,
    },
]

export default {
    setup() {
        return {
            features,
        }
    },
}
</script>