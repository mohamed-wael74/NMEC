@extends('layouts.user')

@section('content')
    <div class="bg-blue-950">
        <div class="grid grid-cols-1 mx-24 gap-8 px-3 py-3 lg:py-8 text-white md:grid-cols-3">
            <div>
                <h4 class=" text-md md:text-3xl font-semibold mt-3 md:mt-8 ">
                    NMEC
                </h4>
            </div>
            <div>
                <h4 class="text-md md:text-3xl font-semibold mt-3 md:mt-8">
                    Opening Hours
                </h4>
                <p class="text-sm mt-4">
                    9:00 AM - 5:00 PM
                </p>
            </div>
            <div>
                <h4 class="text-md md:text-3xl font-semibold mt-3 md:mt-8">
                    Address
                </h4>
                <p class="text-sm mt-4">
                    El-Fustat Road, Ein Elsira, Cairo
                </p>
            </div>
        </div>
    </div>
    <div class=" bg-amber-100">
        <div class="mx-auto w-full max-w-screen-xl">
            <div class="grid grid-cols-1 gap-8 px-4 py-6 lg:py-8 md:grid-cols-3">
                <div class="mr-4 wow bounceInLeft" data-wow-duration="6s">
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">The National Museum of
                        Egyptian Civilization</h2>
                    <p>
                        WELCOME TO
                        The National Museum of Egyptian Civilization
                        NMEC is the first museum in the Arab world focusing on the earliest civilization in history - the
                        ancient Egyptian civilization. It is the only museum in Egypt that offers the visitor a general
                        overview of all the different historical periods that encompass Egypt. This has been approached as a
                        layered cumulative product regarding the interaction of the Egyptian people with their land
                        throughout history. This has been created via a multidisciplinary thematic approach designed to
                        highlight Egypt’s tangible and intangible heritage. In addition, NMEC is an important cultural,
                        educational, recreational, and research center for local and international visitors and scholars.
                    </p>
                </div>
                <div class="">
                    <img class=" w-96 h-96" src="{{ asset('assets/photos/Temp-Hall-1024x682-1.webp') }}" alt="">
                </div>
                <div class="wow bounceInRight" data-wow-duration="6s">
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                        About NMEC
                    </h2>
                    <p>
                        NMEC exhibits several objects intended to educate the visitor about the Egyptian civilization across
                        various key historical phases, starting with the Predynastic and Ancient Egyptian periods, and
                        continuing across the Graeco-Roman, Coptic, Islamic and contemporary modern times. NMEC is located
                        at the heart of Al-Fustat, the ancient Islamic capital of Egypt, and is surrounded by several
                        religious complexes.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-blue-950">
        <h2 class=" text-center text-3xl uppercase pt-4 text-white font-thin "> Our Highlights</h2>
        <div id="indicators-carousel" class="relative mt-4 w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('assets/photos/clepsydra-TB.webp') }}"
                        class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/photos/Relief_of_maat.webp') }}"
                        class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/photos/Islamic-Vase-1.webp') }}"
                        class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/photos/astrolabe.webp') }}"
                        class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/photos/luster-bowl.webp') }}"
                        class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/photos/Habi-1.webp') }}"
                        class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/photos/Statue-1.webp') }}"
                        class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    <div class="bg-amber-100">
        <div class="grid grid-cols-1 mx-24 gap-8 px-3 py-3 lg:py-8 text-sky-950 md:grid-cols-3">
            <div>
                <h4 class="text-xl md:text-2xl font-semibold mt-3 md:mt-8 ">
                    03 April Saturday
                </h4>
            </div>
            <div>
                <img class=" rounded-full" src="{{ asset('assets/photos/opening-1-q0sllwwth682gwhx3ydprr2pet01r90v4ywhf8qb0g.webp') }}"
                    alt="">
            </div>
            <div>
                <h4 class="text-xl md:text-2xl font-semibold mt-3 md:mt-8">
                    The Pharaohs’ Golden Parade of 22 Royal Mummies
                </h4>
                <p class="text-sm mt-4">
                    Do not take off your visit up to chance. Reserve tickets for this prevalent occasion nowadays
                </p>
            </div>
        </div>
    </div>
    <div class="bg-blue-950">
        <h2 class=" text-center text-3xl uppercase pt-4 text-white font-thin "> Inside the museum</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-4 mx-5  py-10 ">
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{asset('assets/photos/1.png')}}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{asset('assets/photos/2.png')}}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{asset('assets/photos/4.png')}}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{asset('assets/photos/5.png')}}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{asset('assets/photos/6.png')}}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{asset('assets/photos/7.png')}}" alt="">
            </div>
        </div>
    </div>
@endsection
