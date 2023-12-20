@extends('layouts.user')

@section('content')
    <div class="bg-blue-950 w-full">
        <h1 class=" text-3xl ml-14 py-6 text-white">Education Center</h1>
    </div>

    <div class=" container mx-auto mt-5">
        <div class="grid grid-cols-1 mx-12 px-4 py-6 lg:py-8 md:grid-cols-1">
            <div class="mr-4 wow bounceInUp mb-6" data-wow-duration="3s">
                <h4 class=" text-sm md:text-lg">
                    The Education center aims to realize and inspire all of the NMEC visitors with the Egyptian civilization
                    and heritage through both the tangible and intangible materials and information to conserve its
                    well-being. That occurs through a number of innovative educational strategies and programs that serve
                    various sectors of the community. These include programs for children in preschool years, school
                    programs that are divided according to the different educational stages in Egypt, university programs,
                    programs for special needs, summer programs, and programs for social interaction.
                </h4>
            </div>
            <img class="mx-auto" src="{{asset('assets/photos/IMG_9358-1024x683.jpg')}}" alt="">
        </div>
    </div>
@endsection
