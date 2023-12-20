@extends('layouts.user')

@section('content')
    <div class="bg-blue-950 w-full">
        <h1 class=" text-3xl ml-14 py-6 text-white">Mission&Vision</h1>
    </div>

    <div class=" container mx-auto mt-5">
        <div class="bg-blue-950 mx-8">
            <h3 class=" text-2xl ml-14 py-4 text-white">NMEC’S Vision</h3>
        </div>
        <div class="grid grid-cols-1 mx-24 gap-14 px-4 py-6 lg:py-8 md:grid-cols-2">
            <div class="mr-4 wow bounceInLeft" data-wow-duration="4s">
                <h2 class="mb-6 text-xl font-semibold text-gray-900 uppercase dark:text-white">The National Museum of
                    Egyptian Civilization</h2>
                <h4 class=" text-sm md:text-md">
                    Presenting the tangible and intangible Egyptian heritage within a cultural framework that allows
                    visitors from different backgrounds to easily relate to the objects in the display while acquiring a
                    deeper understanding of the Egyptian culture in a welcoming and exciting environment. Moreover, NMEC
                    aims at becoming a unique cultural hub in the region mixing antiquities with other aspects of culture
                    including music and art.
                </h4>
            </div>
            <div class="">
                <img class=" w-96 h-96" src="{{ asset('assets/photos/Temp-Hall-1024x682-1.webp') }}" alt="">
            </div>
        </div>
    </div>
    <div class=" container mx-auto mt-5">
        <div class="bg-blue-950 mx-8">
            <h3 class=" text-2xl ml-14 py-4 text-white">NMEC’S Mission</h3>
        </div>
        <div class="grid grid-cols-1 mx-24 px-4 py-6 lg:py-8 md:grid-cols-1">
            <div class="mr-4 wow bounceInRight" data-wow-duration="4s">
                <h2 class="mb-6 text-xl font-semibold text-gray-900 uppercase dark:text-white">As a major New National
                    Egyptian Institution, the NMEC will:</h2>
                <li>
                    <ol>Provide a dynamic and innovative vision of past and current Egyptian civilization.</ol>
                </li>
                <li>
                    <ol>Serve as a world-wide communication center on Egyptian civilization.</ol>
                </li>
                <li>
                    <ol>Display and preserve for future generations exceptional collections belonging to the history of
                        humankind.</ol>
                </li>
                <li>
                    <ol>Develop close cooperation with other Egyptian and international institutions.</ol>
                </li>
                <li>
                    <ol>Promote a new kind of museum with an integrated approach to cultural heritage.</ol>
                </li>
                <li>
                    <ol>Develop national and international exhibitions programs.</ol>
                </li>
                <li>
                    <ol>Host films, concerts, and theatre-like events reflecting the Egyptian civilization.</ol>
                </li>
                <li>
                    <ol>Offer on-site facilities and services: green parks, lakeside cafés, restaurants, handicrafts
                        centers, and bazaars.</ol>
                </li>
                <li>
                    <ol>Host a documentation and collection center for Egypt’s ‘tangible’ and ‘intangible’ heritage.</ol>
                </li>
                <li>
                    <ol>Provide access to educational and research resources through a library, study centers, online data,
                        photographs, archives, teaching resources, and publications</ol>
                </li>
                </li>
            </div>
        </div>
    </div>
@endsection
