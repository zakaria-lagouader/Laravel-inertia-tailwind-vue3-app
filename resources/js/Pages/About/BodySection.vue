<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/typography'),
    ],
  }
  ```
-->
<template>
  <div class="relative bg-white">
    <div class="lg:absolute lg:inset-0">
      <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
        <img class="h-56 w-full object-cover lg:absolute lg:h-full" src="https://images.pexels.com/photos/208636/pexels-photo-208636.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=10" alt="" />
      </div>
    </div>
    <div class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
      <div class="lg:col-start-2 lg:pl-8">
        <div class="text-base max-w-prose mx-auto lg:max-w-lg lg:ml-auto lg:mr-0">
          <h2 class="leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Musée</h2>
          <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">De nous, Pour vous</h3>
          <p class="mt-8 text-lg text-gray-500">Venez explorer les merveilles de l'art et de la culture au sein de notre musée. Avec une collection riche et variée, nous sommes fiers de présenter les œuvres d'artistes talentueux du monde entier. Que vous soyez un passionné d'art, un étudiant ou simplement en quête d'une activité enrichissante, notre musée offre quelque chose pour tout le monde.</p>
          <p class="mt-8 text-lg text-gray-500">Rejoignez-nous pour des visites guidées, des programmes d'apprentissage interactifs et des événements spéciaux tout au long de l'année. Découvrez l'histoire et la signification des œuvres d'art avec nos guides passionnés, ou explorez notre collection à votre propre rythme avec notre audio-guide.</p>
          <p class="mt-8 text-lg text-gray-500">Ne manquez pas cette occasion unique de découvrir les merveilles de l'art et de la culture. Nous vous attendons avec impatience pour vivre une expérience mémorable au sein de notre musée.</p>
        </div>
      </div>
    </div>
  </div>
</template>
