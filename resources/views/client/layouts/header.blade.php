<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Nén ảnh</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen bg-gray-50">
    <header>
        <nav
            class="fixed top-0 left-0 w-full z-50 bg-white border-2 border-black-500 px-4 lg:px-6 py-2.5 outline-red-500">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="{{ route('home') }}" class="flex items-center text-blue-700 font-bold">
                    <img src="{{ asset('images/logo1.png') }}" class="mr-3  h-6 w-12 xl:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl whitespace-nowrap dark:text-white">IMAGES PRO</span>
                </a>
                <div class="flex items-center lg:order-2">

                    @if (Route::has('login.google'))
                        @auth
                            <h4>Hello: {{ auth()->user()->name }}</h4>
                            <a href="{{ route('logout') }}">
                                <button onclick="return confirm('Bạn có chắc chắn muốn đăng xuất?')"
                                    class="text-blue-700 hover:text-white border-2 border-blue-600  hover:bg-blue-700 focus:ring-4 font-bold rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-700">
                                    Logout
                                </button>
                            </a>
                        @else
                            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                class="text-blue-700 hover:text-white border-2 border-blue-600  hover:bg-blue-700 focus:ring-4 font-bold rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-700">
                                Log in
                            </button>
                        @endauth
                    @endif




                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden mt-4 justify-center items-center w-full lg:flex lg:w-auto lg:order-1"
                    id="mobile-menu-2">
                    <ul
                        class="flex items-center flex-col mt-4 font-medium lg:flex-row justify-center lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white hover:text-blue-700 hover:bg-white"
                                aria-current="page">Tools</a>
                        </li>

                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white hover:text-blue-700 hover:bg-white"
                                aria-current="page">Upgrade</a>
                        </li>

                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white hover:text-blue-700 hover:bg-white"
                                aria-current="page">Privacy Policy</a>
                        </li>

                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white hover:text-blue-700 hover:bg-white"
                                aria-current="page">Terms of Services</a>
                        </li>

                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white hover:text-blue-700 hover:bg-white"
                                aria-current="page">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <nav class="flex mb-4 mt-24 ml-40 items-center" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                    {{-- </li>
            <li>
              <div class="flex items-center">
                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Projects</a>
              </div>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Flowbite</span>
              </div>
            </li> --}}
            </ol>
        </nav>
        <div class="flex justify-center items-center mt-4">
            <div class=" py-2 px-4 text-black text-center">
                <h1 class="text-3xl text-blue-700 font-bold">COMPRESS PNG</h1>
            </div>
        </div>
        <div class="py-2 px-4 text-black text-center mb-6">
            <p class="font-normal">Compress PNG in seconds without losing its quality and install any software or
                plugins!</p>
        </div>

        <!-- Modal toggle -->
        @include('client.modal.login')

    </header>

    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
    <!-- on mo side -->
