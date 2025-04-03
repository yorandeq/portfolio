<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    <!-- Intro sectie -->
    <div class="bg-white/30 backdrop-blur-sm h-full w-full absolute">
    </div>
    <div id="intro" class="yq-bg-container h-full w-full">
        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                    <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">
                        Welkom! </br> Ik ben Yoran
                    </h1>
                    <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">
                        een ervaren developer met een passie voor webtechnologie
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                            Lees meer
                        </a>
                    </div>
                </div>
            </div>
        </div>    
    </div>

    <!-- Werkervaring sectie -->
    <div id="ervaring" class="overflow-hidden bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pt-4 lg:pr-8">
                    <h2 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-6xl">
                        Werkervaring
                    </h2>
                    <ol class="mt-8 relative border-s border-blue-200 dark:border-blue-700">
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-blue-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-blue-900 dark:bg-blue-700"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Februari 2021 - Juli 2021</time>
                            <h3 class="text-lg font-semibold text-blue-900 dark:text-white">Software Developer bij Koninklijke Landmacht</h3>
                            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Als Software Developer heb ik een quiz-app voor iOS en Android ontwikkeld met behulp van C# en Xamarin.</p>
                        </li>
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-blue-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-blue-900 dark:bg-blue-700"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">September 2019 - Januari 2020</time>
                            <h3 class="text-lg font-semibold text-blue-900 dark:text-white">Applicatieontwikkelaar bij Innovatiers</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Ik heb gewerkt met AngularJS en Ionic om een app te ontwikkelen voor het bedrijf.</p>
                        </li>
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-blue-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-blue-900 dark:bg-blue-700"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">September 2021 - Heden</time>
                            <h3 class="text-lg font-semibold text-blue-900 dark:text-white">Webontwikkelaar bij Peakfort</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Bij Peakfort heb ik WordPress-websites gebouwd, API-koppelingen onderhouden en interne Laravel-projecten ontwikkeld.</p>
                        </li>
                        <li class="ms-4">
                            <div class="absolute w-3 h-3 bg-blue-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-blue-900 dark:bg-blue-700"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Februari 2025 - Heden</time>
                            <h3 class="text-lg font-semibold text-blue-900 dark:text-white">Developer bij PingMedia</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Als developer bij PingMedia werk ik aan uitdagende weboplossingen en het verder ontwikkelen van mijn technische vaardigheden.</p>
                        </li>
                    </ol>

                        
                </div>
                <img src="https://tailwindcss.com/plus-assets/img/component-images/dark-project-app-screenshot.png"
                    alt="Product screenshot"
                    class="w-[48rem] max-w-none rounded-xl ring-1 shadow-xl ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0"
                    width="2432" height="1442">
            </div>
        </div>
    </div>

</x-layout>