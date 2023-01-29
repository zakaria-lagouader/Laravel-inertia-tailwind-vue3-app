<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <div class="bg-white">
        <main>
            <div>
                <!-- Hero card -->
                <div class="relative">
                    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100" />
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                            <div class="absolute inset-0">
                                <img class="h-full w-full object-cover"
                                    src="https://images.pexels.com/photos/20967/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="People working on laptops" />
                                <div class="absolute inset-0 bg-indigo-700 mix-blend-multiply" />
                            </div>
                            <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                                <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                                    <span class="block text-white">Musée Elite</span>
                                    <span class="block text-indigo-200">Une Nouvelle Experience</span>
                                </h1>
                                <p class="mt-6 max-w-lg mx-auto text-center text-xl text-indigo-200 sm:max-w-3xl">Venez voir un nouveau monde et explorer des anciens civilisation</p>
                                <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                                    <div
                                        class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                                        <a href="/reservation"
                                            class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8">
                                            Reserver Maintenant !!</a>
                                        <a href="/contact"
                                            class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-500 bg-opacity-60 hover:bg-opacity-70 sm:px-8">
                                            Contacter Nous </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo cloud -->
                <div class="bg-gray-100">
                    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                        <p class="text-center text-sm font-semibold uppercase text-gray-500 tracking-wide">Nos Partenaires</p>
                        <div class="mt-6 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img class="h-12" src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_339,h_150/https://www.uit.ac.ma/wp-content/uploads/2020/05/logo-scale.png"
                                    alt="Tuple" />
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img class="h-12" src="http://www.umi.ac.ma/wp-content/uploads/2015/05/logo-UMI-Amazigh.jpg"
                                    alt="Mirage" />
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img class="h-12" src="https://cdn-07.9rayti.com/rsrc/cache/widen_292/uploads/2012/06/logo-universite-ibn-zohr-agadir-uiz.png"
                                    alt="StaticKit" />
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 md:col-start-2 lg:col-span-1">
                                <img class="h-12" src="http://www.mapexpress.ma/wp-content/uploads/2020/07/univercit%C3%A9-m5-504x300-504x300.jpg"
                                    alt="Transistor" />
                            </div>
                            <div class="col-span-2 flex justify-center md:col-span-2 md:col-start-4 lg:col-span-1">
                                <img class="h-12" src="https://seeklogo.com/images/U/universite-chouaib-doukkali-maroc-logo-7298E82552-seeklogo.com.png"
                                    alt="Workcation" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More main page content here... -->
        </main>
    </div>
</template>
