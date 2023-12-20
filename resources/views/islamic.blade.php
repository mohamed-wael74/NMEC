@extends('layouts.user')

@section('content')
    <div class="bg-blue-950 w-full">
        <h1 class=" text-3xl ml-14 py-6 text-white">Islamic Gallary</h1>
    </div>
    <div class=" container mx-auto mt-5">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-y-4 gap-4 mx-5 my-5 py-5 ">
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{ asset('assets/photos/islamic/1.1.jpeg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{ asset('assets/photos/islamic/1.2.jpeg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{ asset('assets/photos/islamic/1.3.jpeg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{ asset('assets/photos/islamic/1.4.jpeg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{ asset('assets/photos/islamic/1.5.jpeg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{ asset('assets/photos/islamic/1.6.jpeg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{ asset('assets/photos/islamic/1.7.jpeg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{ asset('assets/photos/islamic/1.8.jpeg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{ asset('assets/photos/islamic/1.9.jpeg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{ asset('assets/photos/islamic/1.10.jpeg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{ asset('assets/photos/islamic/1.11.jpeg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg hover:scale-110 duration-500"
                    src="{{ asset('assets/photos/islamic/1.12.jpeg') }}" alt="">
            </div>
        </div>
    </div>
@endsection
