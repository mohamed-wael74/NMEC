@extends('layouts.user')

@section('content')
    <div class="bg-blue-950 w-full">
        <h1 class=" text-3xl ml-14 py-6 text-white">Eco Friendly</h1>
    </div>

    <div class=" container mx-auto mt-5">
        <div class="grid grid-cols-1 mx-24 gap-14 px-4 py-6 lg:py-8 md:grid-cols-2">
            <div class="mr-4 wow bounceInLeft" data-wow-duration="6s">
                <p class="mb-6 text-md  text-gray-900  dark:text-white">
                    Our museum cares deeply for the environment therefore we always work to lower our environmental impact.
                    Starting with small steps, we recycle and separate our rubbish and donate it to businesses that deal
                    with different types of waste. But also, we choose the best equipment and machinery that has high
                    efficacy with the lowest electricity and water usage. We always strive to lower our carbon footprint and
                    impact on the environment, it’s a learning process and we aim to benefit from it every day to achieve
                    the best results.
                </p>
            </div>
            <div class="">
                <img class=" w-full h-96" src="{{ asset('assets/photos/20210321-DSC_9862-1-1024x643-1.webp') }}" alt="">
            </div>
        </div>
    </div>
@endsection
