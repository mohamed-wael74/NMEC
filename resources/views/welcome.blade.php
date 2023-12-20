<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NMEC</title>
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" w-full h-96 md:h-full bg-no-repeat bg-cover" style="background-image:url({{ asset('assets/back.png') }}) ">

    <nav
        class=" md:bg-transparent dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <div
                    class="wow bounceInLeft self-center text-white text-2xl font-semibold whitespace-nowrap dark:text-white">
                    NMEC</div>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a type="button" href="{{route('login')}}"
                    class="text-white text-center bg-amber-600 hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</a>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class=" bg-white md:bg-transparent flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-3 px-4 md:text-white rounded-md md:bg-transparent sm:hover:text-gray-800  md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:text-white rounded-md md:bg-transparent sm:hover:text-gray-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:text-white rounded-md md:bg-transparent sm:hover:text-gray-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:text-white rounded-md md:bg-transparent sm:hover:text-gray-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-28 md:mt-64">
        <div class="row">
            <div class="wow bounceInDown" data-wow-duration="4s">
                <h2 class=" text-lg md:text-4xl text-white text-center font-semibold">Welcome to the museum</h2>
            </div>
            <p class="wow bounceOut mt-5 text-center text-white font-semibold text-md md:text-3xl"
                data-wow-duration="3s" data-wow-delay="2s">
                To see the museum press on get started
            </p>
            <div class="text-center mt-7">
                <a type="button" href="{{route('index')}}"
                    class="text-white text-center bg-amber-600 hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get Started</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
