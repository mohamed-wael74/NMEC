@extends('layouts.user')

@section('content')
    <div class="bg-blue-950 w-full">
        <h1 class=" text-3xl ml-14 py-6 text-white">Museum History</h1>
    </div>

    <div class=" container mx-auto mt-5">
        <div class="grid grid-cols-1 mx-24 gap-14 px-4 py-6 lg:py-8 md:grid-cols-2">
            <div class="mr-4 wow bounceInLeft" data-wow-duration="6s">
                <p class="mb-6 text-sm md:text-md  text-gray-900 dark:text-white">

                    In 1982, UNESCO has launched at the request of the Egyptian government, a global campaign for the
                    establishment of the Nubia Museum in Aswan and NMEC in Cairo. The existing design, by an Egyptian
                    architect, was the winner of an international architectural competition. <br>

                    In 1999, the joint efforts of the Egyptian Government resulted in finding a suitable site at Al-Fustat
                    neighborhood for the birthplace of the NMEC project. This specific site was chosen instead of the
                    previously selected one, currently known as “Opera”. <br>

                    NMEC’s foundation stone was laid in 2002, despite the archeological excavations that took place at the
                    museum’s areas since the early 2000s. The joint efforts of UNESCO, the Egyptian Authorities, and the
                    Ministry of Culture collectively aimed at establishing a museological institution that reflects the
                    various cultural aspects of Egypt’s rich history through adopting aesthetically and technologically
                    advanced methods used at the 21st renowned museums.
                </p>
            </div>
            <div class="">
                <img class=" w-full h-96" src="{{ asset('assets/photos/musuem-Front-1024x682-1.webp') }}" alt="">
            </div>
        </div>
    </div>
    <div class=" container mx-auto mt-5">
        <div class="grid grid-cols-1 mx-24 gap-14 px-4 py-6 lg:py-8 md:grid-cols-2">
            <div class="">
                <img class=" w-full h-96" src="{{ asset('assets/photos/Temp-Hall-1024x682-1.webp') }}" alt="">
            </div>
            <div class="mr-4 wow bounceInRight" data-wow-duration="6s">
                <h6 class="mb-6 text-md  text-gray-900 dark:text-white">In 2017, the temporary
                    Exhibition Hall (“Egyptian Crafts through the Different Eras”) was inaugurated in the presence of Ms.
                    Irina Bokova, Director-General of UNESCO. This hall covers an area of 1000 square meters, and showcases
                    the four main crafts that shaped the Egyptian culture: Pottery, Wood, Textile, and Ornaments.
                    Approximately 400 artifacts from different time periods are displayed, as well as a number of short
                    films highlighting the distinctive characters of these authentic Egyptian crafts.</h6>
            </div>
        </div>
    </div>
@endsection
