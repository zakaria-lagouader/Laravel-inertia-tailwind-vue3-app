<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto divide-y-2 divide-gray-200">
        <h2 class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl">Questions fréquemment posées</h2>
        <dl class="mt-6 space-y-6 divide-y divide-gray-200">
          <Disclosure as="div" v-for="faq in faqs" :key="faq.question" class="pt-6" v-slot="{ open }">
            <dt class="text-lg">
              <DisclosureButton class="text-left w-full flex justify-between items-start text-gray-400">
                <span class="font-medium text-gray-900">
                  {{ faq.question }}
                </span>
                <span class="ml-6 h-7 flex items-center">
                  <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" />
                </span>
              </DisclosureButton>
            </dt>
            <DisclosurePanel as="dd" class="mt-2 pr-12">
              <p class="text-base text-gray-500">
                {{ faq.answer }}
              </p>
            </DisclosurePanel>
          </Disclosure>
        </dl>
      </div>
    </div>
  </div>
</template>

<script>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/outline'

const faqs = [
  {
    question: "Qui sommes nous ?",
    answer:
      "Nous sommes un musée dédié à la célébration de l'art et de la culture. Avec une collection riche et variée, nous présentons les œuvres d'artistes talentueux du monde entier. Nous sommes fiers de notre engagement envers l'éducation et la découverte, et nous travaillons sans relâche pour offrir une expérience exceptionnelle à chaque visiteur.",
  },
  {
    question: "Pourquoi Nous Choisir ?",
    answer:
      "Si vous êtes à la recherche d'une expérience culturelle enrichissante, alors notre musée est le choix idéal pour vous. Nous sommes fiers de notre collection riche et variée, qui présente les œuvres d'artistes talentueux du monde entier. De plus, notre engagement envers l'éducation et l'apprentissage fait de notre musée un endroit idéal pour les familles, les étudiants et les passionnés d'art.",
  },
  {
    question: "Comment Reserver ?",
    answer:
      "Pour réserver votre visite au musée, il vous suffit de suivre ces étapes simples : accédez à notre site web, naviguez jusqu'à la section de réservation et sélectionnez la date et l'heure de votre choix. Vous pouvez également choisir de participer à une visite guidée ou de découvrir notre collection à votre propre rythme. Une fois que vous avez fait votre choix, il vous suffit de remplir le formulaire de réservation en ligne avec vos informations personnelles et de procéder au paiement en toute sécurité. C'est aussi simple que cela ! Nous vous attendons avec impatience pour vivre une expérience culturelle mémorable",
  },
  {
    question: "comment vais-je obtenir mon billet ?",
    answer:
      "Une fois votre réservation effectuée, vous recevrez un e-mail de confirmation avec tous les détails de votre visite, y compris un lien pour télécharger votre billet. Il vous suffit de présenter votre billet numérique à l'entrée du musée pour accéder à notre collection. Si vous préférez, vous pouvez également imprimer votre billet à la maison. Dans tous les cas, nous vous garantissons un accès rapide et facile à notre musée pour vivre une expérience culturelle inoubliable",
  },
]

export default {
  components: {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    ChevronDownIcon,
  },
  setup() {
    return {
      faqs,
    }
  },
}
</script>