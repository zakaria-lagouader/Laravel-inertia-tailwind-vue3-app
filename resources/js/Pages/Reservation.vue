<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center">
                <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase">Reservation</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                    Reservation</p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Start building for free, then add a site plan to
                    go live. Account plans unlock additional features.</p>
            </div>
            <!-- Form -->

            <form @submit.prevent="submit" class="flex flex-col w-full max-w-2xl space-y-4 mt-12 mx-auto">
                <div>
                    <label for="type" class="block font-medium text-gray-700">Type</label>
                    <select id="type" name="type" v-model="type"
                        class="mt-2 block w-full pl-4 pr-11 py-3 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">

                        <option value="" disabled selected>Selectionner un type ...</option>
                        <option value="Evenement">Evenement</option>
                        <option value="Conference">Conference</option>
                        <option value="Manifistation">Manifistation</option>
                    </select>
                </div>
                <div>
                    <fieldset class="mt-2" v-if="type === 'Conference'">
                        <div class="divide-y divide-gray-200">
                            <div v-for="(conference, conferenceIdx) in conferences" :key="conferenceIdx"
                                class="relative flex items-start py-4">
                                <div class="min-w-0 flex-1 text-sm">
                                    <label :for="`conference-${conference.id}`" class="font-medium text-gray-700">{{
                                    `Conferencier : ${conference.conferencier}`
                                    }}</label>
                                    <p :id="`conference-${conference.id}-sujet`" class="text-gray-500">{{
                                    `Sujet : ${conference.sujet}, Date: ${conference.date}, Salle:
                                    ${conference.salle.numero}`
                                    }}</p>
                                </div>
                                <div class="ml-3 flex items-center h-5">
                                    <input :id="`conference-${conference.id}`" name="reservation_id" type="checkbox"
                                        :value="conference.id"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="mt-2" v-else-if="type === 'Evenement'">
                        <div class="divide-y divide-gray-200">
                            <div v-for="(evenment, evenmentIdx) in evenments" :key="evenmentIdx"
                                class="relative flex items-start py-4">
                                <div class="min-w-0 flex-1 text-sm">
                                    <label :for="`evenment${evenment.id}`" class="font-medium text-gray-700">{{
                                    `Type : ${evenment.type}`
                                    }}</label>
                                    <p :id="`evenment${evenment.id}-sujet`" class="text-gray-500">{{
                                    `Date: ${evenment.date}, Salle: ${evenment.salle.numero}`
                                    }}</p>
                                </div>
                                <div class="ml-3 flex items-center h-5">
                                    <input :id="`evenment${evenment.id}`" name="reservation_id" type="checkbox"
                                        :value="evenment.id"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="mt-2" v-else-if="type === 'Manifistation'">
                        <div class="divide-y divide-gray-200">
                            <div v-for="(manifestation, manifestationIdx) in manifestations" :key="manifestationIdx"
                                class="relative flex items-start py-4">
                                <div class="min-w-0 flex-1 text-sm">
                                    <label :for="`manifestation-${manifestation.id}`"
                                        class="font-medium text-gray-700">{{
                                        `Titre : ${manifestation.titre}`
                                        }}</label>
                                    <p :id="`manifestation-${manifestation.id}-sujet`" class="text-gray-500">{{
                                    `Date: ${manifestation.date}, theme: ${manifestation.theme}, Oeuvre:
                                    ${manifestation.oeuvre.nom}, Salle: ${manifestation.salle.numero}
                                    Date debut: ${manifestation.date_debut}, Date fin: ${manifestation.date_fin}
                                    `
                                    }}</p>
                                </div>
                                <div class="ml-3 flex items-center h-5">
                                    <input :id="`manifestation-${manifestation.id}`" name="reservation_id" type="checkbox"
                                        :value="manifestation.id"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <button type="submit"
                    class="px-6 py-3 border border-transparent text-center font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Reserver</button>

            </form>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3'
const props = defineProps({ conferences: Array, evenments: Array, manifestations: Array })

const type = ref("");

function submit(e) {
    const myFormData = new FormData(e.target);
    const formDataObj = Object.fromEntries(myFormData.entries());
    formDataObj.reservation_id = myFormData.getAll('reservation_id');

    router.post("/reservation", formDataObj);
}
</script>
