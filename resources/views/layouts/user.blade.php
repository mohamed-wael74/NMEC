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

<body>
    <nav class="bg-amber-100 border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <div
                    class="wow bounceInLeft text-blue-950 self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                    NMEC
                </div>
            </a>
            <button data-collapse-toggle="navbar-multi-level" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border  rounded-lg bg-amber-100 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-amber-100 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-950 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">NMEC
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{ route('mission-and-vision') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mission
                                        & Vision</a>
                                </li>
                                <li>
                                    <a href="{{ route('museum-history') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Museum
                                        History</a>
                                </li>
                                <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Organiazation<svg
                                            class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="doubleDropdown"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="doubleDropdownButton">
                                            <li>
                                                <a href="{{ route('board-of-directors') }}"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Board
                                                    of Directors</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{ route('eco-friendly') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Eco
                                        Frendily</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar1"
                            class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-950 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Visit
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar1"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownLargeButton">
                                <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown1"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Map<svg
                                            class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="doubleDropdown1"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="doubleDropdownButton">
                                            <li>
                                                <a href="{{ route('how-to-get-here') }}"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">How
                                                    to get here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{ route('special-needs') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Special
                                        Needs</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar2"
                            class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-950 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Media
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar2"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{ route('islamic') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Islamic</a>
                                </li>
                                <li>
                                    <a href="{{ route('mummies') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mummies</a>
                                </li>
                                <li>
                                    <a href="{{ route('multiple') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Multiple</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar3"
                            class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-950 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Learn
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar3"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{ route('education-center') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Education
                                        Center</a>
                                </li>
                                <li>
                                    <a href="{{ route('training-center') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Training
                                        Center</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <a class="dropdown-item ml-2" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class=" bg-amber-100 dark:bg-gray-900 mx-auto items-center">
        <div class="mx-auto w-full max-w-screen-xl items-center">
            <div class="grid grid-cols-1 gap-8 px-4 md:py-6 lg:py-8 md:grid-cols-4 ">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Connect with us</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-5">
                            <span href="#" class=" hover:underline">The address</span>
                        </li>
                        <li class="mb-5">
                            <span href="#" class="hover:underline">Al Fustat Street – Ain Al Sira – Cairo</span>
                        </li>
                        <li class="mb-5">
                            <span href="#" class="hover:underline">Postal Code: 17611</span>
                        </li>
                        <li class="mb-5">
                            <span href="#" class="hover:underline">info@nmec.gov.eg</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Working hours</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-3">
                            <span href="#" class="">Saturday – Thursday</span>
                        </li>
                        <li class="mb-3">
                            <span href="#" class="">from 9:00 AM – 5:00 PM</span>
                        </li>
                        <li class="mb-3">
                            <span href="#" class="">Last ticket admission at 4:00 PM</span>
                        </li>
                    </ul>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-3">
                            <span href="#" class="">Friday </span>
                        </li>
                        <li class="mb-3">
                            <span href="#" class="">from 9:00 AM – 5:00 PM</span>
                        </li>
                        <li class="mb-3">
                            <span href="#" class="">Last ticket admission at 4:00 PM</span>
                        </li>
                        <li class="mb-3">
                            <span href="#" class="">from 6:00 PM – 9:00 PM</span>
                        </li>
                        <li class="mb-3">
                            <span href="#" class="">Last ticket admission at 8:00 PM</span>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto py-6 dark:bg-gray-700 md:flex md:items-center md:justify-between">
                    <img src="{{ asset('assets/photos/nmec-logo-dec.png') }}" alt="">
                    <img src="{{ asset('assets/photos/unesco-1-150x150.png') }}" alt="">
                    <img src="{{ asset('assets/photos/ministry-of-tourism-150x150.png') }}" alt="">
                </div>
            </div>
            <div class="px-4 py-6 bg-white dark:bg-gray-700 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2023 <a
                        href="https://nmec.gov.eg/">NMEC</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
                    <a href="https://www.facebook.com/nmec.gov.eg/"
                        class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
