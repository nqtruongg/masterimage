<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true"
     class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">SIGN IN TO IMAGES PRO</h3>
                <a href="{{ route('login.github') }}">
                <button
                    class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    <svg class="w-4 h-4 mr-2" aria-hidden="true" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                    </svg>
                    Continue with Github
                </button>
            </a>
                <button
                    class="flex items-center justify-center w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    <svg class="w-4 h-4 mr-2" aria-hidden="true" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/>
                    </svg>
                    Continue with Twitter
                </button>

               <a href="{{ route('login.google') }}"> <button
                    class="flex items-center justify-center w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         class="w-4 h-4 mr-2">
                        <g clip-path="url(#clip0_59_100)">
                            <path
                                d="M5.13758 14.0092L4.33065 17.0216L1.38136 17.084C0.499949 15.4491 0 13.5787 0 11.5911C0 9.669 0.46744 7.85647 1.29601 6.2605H1.29664L3.92235 6.74188L5.07256 9.35183C4.83182 10.0537 4.70061 10.8071 4.70061 11.5911C4.7007 12.4419 4.85482 13.2571 5.13758 14.0092Z"
                                fill="#FBBB00"/>
                            <path
                                d="M22.9793 9.42529C23.1124 10.1265 23.1818 10.8506 23.1818 11.5906C23.1818 12.4205 23.0945 13.2299 22.9283 14.0107C22.3641 16.6677 20.8897 18.9878 18.8473 20.6296L18.8467 20.629L15.5395 20.4602L15.0714 17.5383C16.4266 16.7435 17.4858 15.4997 18.0437 14.0107H11.8457V9.42529H18.1341H22.9793Z"
                                fill="#518EF8"/>
                            <path
                                d="M18.8467 20.6293L18.8473 20.63C16.861 22.2266 14.3377 23.1819 11.5909 23.1819C7.1768 23.1819 3.33908 20.7147 1.38135 17.0839L5.13757 14.0092C6.11642 16.6215 8.63649 18.4812 11.5909 18.4812C12.8608 18.4812 14.0505 18.1379 15.0713 17.5386L18.8467 20.6293Z"
                                fill="#28B446"/>
                            <path
                                d="M18.9895 2.66844L15.2345 5.74257C14.178 5.08216 12.9291 4.70066 11.591 4.70066C8.56975 4.70066 6.00255 6.64562 5.07274 9.35169L1.29678 6.26036H1.29614C3.22521 2.54108 7.11134 0 11.591 0C14.4034 0 16.9821 1.0018 18.9895 2.66844Z"
                                fill="#F14336"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_59_100">
                                <rect width="23.1818" height="23.1818" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Continue with Google
                </button>
            </a>

            <a href="{{ route('login.facebook') }}">
                <button
                    class="flex items-center justify-center w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                         text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                         fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 509 509" fill="none"
                         class="w-4 h-4 mr-2">
                        <g fill-rule="nonzero">
                            <path fill="#0866FF"
                                  d="M509 254.5C509 113.94 395.06 0 254.5 0S0 113.94 0 254.5C0 373.86 82.17 474 193.02 501.51V332.27h-52.48V254.5h52.48v-33.51c0-86.63 39.2-126.78 124.24-126.78 16.13 0 43.95 3.17 55.33 6.33v70.5c-6.01-.63-16.44-.95-29.4-.95-41.73 0-57.86 15.81-57.86 56.91v27.5h83.13l-14.28 77.77h-68.85v174.87C411.35 491.92 509 384.62 509 254.5z"/>
                            <path fill="#fff"
                                  d="M354.18 332.27l14.28-77.77h-83.13V227c0-41.1 16.13-56.91 57.86-56.91 12.96 0 23.39.32 29.4.95v-70.5c-11.38-3.16-39.2-6.33-55.33-6.33-85.04 0-124.24 40.16-124.24 126.78v33.51h-52.48v77.77h52.48v169.24c19.69 4.88 40.28 7.49 61.48 7.49 10.44 0 20.72-.64 30.83-1.86V332.27h68.85z"/>
                        </g>
                    </svg>
                    Continue with Facebook
                </button>
            </a>
                <p class="text-sm mt-5 font-medium text-black-400 ">By continuing, you agree to NQT Compress's <a
                        href="#" class="text-blue-700"> Terms of Services </a> and <a href="#" class="text-blue-700">
                        Privacy Policy </a> .</p>

            </div>
        </div>
    </div>
</div>
