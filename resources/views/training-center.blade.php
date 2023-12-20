@extends('layouts.user')

@section('content')
    <div class="bg-blue-950 w-full">
        <h1 class=" text-3xl ml-14 py-6 text-white">Training Center</h1>
    </div>

    <div class=" container mx-auto mt-5">
        <div class="grid grid-cols-1 mx-24 gap-14 px-4 py-6 lg:py-8 md:grid-cols-2">
            <div class="mr-4 wow bounceInLeft" data-wow-duration="6s">
                <p class="mb-6 text-sm md:text-xl  dark:text-white">
                    The training center contributes to serving various sectors of the Ministry of Tourism and Antiques and
                    the museums’ staff. This is through providing training courses that aim to enhance their environments
                    and raising the efficiency of the workers inside and outside the museum; in terms of education and
                    archaeological awareness. That in return contributes to the upgrading of their social, cultural, and
                    economic awareness to meet the standards of international museums.
                </p>
            </div>
            <div class="">
                <img class=" w-full h-96" src="{{ asset('assets/photos/Training-1-1024x768.jpg') }}" alt="">
            </div>
        </div>
    </div>
    </div>
@endsection
