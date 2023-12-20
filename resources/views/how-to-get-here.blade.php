@extends('layouts.user')

@section('content')
    <div class="bg-blue-950 w-full">
        <h1 class=" text-3xl ml-14 py-6 text-white">How To Get Here</h1>
    </div>

    <div class=" container mx-auto mt-5">
        <div class="grid grid-cols-1 mx-24 gap-14 px-4 py-6 lg:py-8 md:grid-cols-1">
            <div class=" bg-slate-200">
                <div class="mr-4 p-4">
                    <h2 class=" text-xl font-semibold  uppercase dark:text-white">Address</h2>
                    <p class="wow flash mt-5 text-md font-thin" data-wow-duration="3s">
                        El-Fustat Road, Ein Elsira, Cairo <br>
                        Postal code: 17611 <br>
                        info@nmec.gov.eg
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
