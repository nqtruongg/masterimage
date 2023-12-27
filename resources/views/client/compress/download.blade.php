@extends('client.layouts.app')
@section('content')'



<div class="w-10/12 mx-auto ">
    <div class="flex justify-between font-semibold text-gray-700">
        <div>
            <button class=" rounded-t-lg w-48 h-12 bg-gray-200 text-blue-600 inline-flex text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg viewBox="0 0 24 24" fill="#0066FF" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-10 mr-2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.5 3.75H8.5C7.77065 3.75 7.07118 4.03973 6.55546 4.55546C6.03973 5.07118 5.75 5.77065 5.75 6.5V6.75H5.5C4.77065 6.75 4.07118 7.03973 3.55546 7.55546C3.03973 8.07118 2.75 8.77065 2.75 9.5V17.5C2.75 18.2293 3.03973 18.9288 3.55546 19.4445C4.07118 19.9603 4.77065 20.25 5.5 20.25H15.5C16.2293 20.25 16.9288 19.9603 17.4445 19.4445C17.9603 18.9288 18.25 18.2293 18.25 17.5V17.25H18.5C19.2293 17.25 19.9288 16.9603 20.4445 16.4445C20.9603 15.9288 21.25 15.2293 21.25 14.5V6.5C21.25 5.77065 20.9603 5.07118 20.4445 4.55546C19.9288 4.03973 19.2293 3.75 18.5 3.75ZM7.25 6.5C7.25 6.16848 7.3817 5.85054 7.61612 5.61612C7.85054 5.3817 8.16848 5.25 8.5 5.25H18.5C18.8315 5.25 19.1495 5.3817 19.3839 5.61612C19.6183 5.85054 19.75 6.16848 19.75 6.5V12.7L17.48 10.79C17.4061 10.7257 17.3201 10.6768 17.2271 10.646C17.1341 10.6152 17.036 10.6032 16.9383 10.6106C16.8406 10.6181 16.7454 10.6448 16.6581 10.6893C16.5709 10.7339 16.4933 10.7953 16.43 10.87L15.36 12.13L11.36 8.25C11.2961 8.17377 11.2166 8.11204 11.127 8.06893C11.0373 8.02582 10.9395 8.00232 10.84 8C10.737 8.00389 10.6358 8.02898 10.5429 8.07372C10.45 8.11845 10.3673 8.18187 10.3 8.26L7.25 11.89V6.5ZM8.5 15.75C8.16848 15.75 7.85054 15.6183 7.61612 15.3839C7.3817 15.1495 7.25 14.8315 7.25 14.5V14.2L10.92 9.88L14.38 13.27L12.28 15.75H8.5ZM16.75 17.5C16.75 17.8315 16.6183 18.1495 16.3839 18.3839C16.1495 18.6183 15.8315 18.75 15.5 18.75H5.5C5.16848 18.75 4.85054 18.6183 4.61612 18.3839C4.3817 18.1495 4.25 17.8315 4.25 17.5V9.5C4.25 9.16848 4.3817 8.85054 4.61612 8.61612C4.85054 8.3817 5.16848 8.25 5.5 8.25H5.75V14.5C5.75 15.2293 6.03973 15.9288 6.55546 16.4445C7.07118 16.9603 7.77065 17.25 8.5 17.25H16.75V17.5ZM18.5 15.75H14.25L17.09 12.41L19.72 14.64C19.6903 14.9433 19.549 15.2247 19.3236 15.4298C19.0982 15.6349 18.8047 15.749 18.5 15.75Z" fill="#000000"></path> </g></svg>
                All Files</button>

            <button data-modal-target="setting-modal" data-modal-toggle="setting-modal" class=" rounded-lg w-48 h-12 bg-white text-blue-600 inline-flex text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#0066FF" class="w-6 h-6 ml-10 mr-2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#0066FF" d="M600.704 64a32 32 0 0 1 30.464 22.208l35.2 109.376c14.784 7.232 28.928 15.36 42.432 24.512l112.384-24.192a32 32 0 0 1 34.432 15.36L944.32 364.8a32 32 0 0 1-4.032 37.504l-77.12 85.12a357.12 357.12 0 0 1 0 49.024l77.12 85.248a32 32 0 0 1 4.032 37.504l-88.704 153.6a32 32 0 0 1-34.432 15.296L708.8 803.904c-13.44 9.088-27.648 17.28-42.368 24.512l-35.264 109.376A32 32 0 0 1 600.704 960H423.296a32 32 0 0 1-30.464-22.208L357.696 828.48a351.616 351.616 0 0 1-42.56-24.64l-112.32 24.256a32 32 0 0 1-34.432-15.36L79.68 659.2a32 32 0 0 1 4.032-37.504l77.12-85.248a357.12 357.12 0 0 1 0-48.896l-77.12-85.248A32 32 0 0 1 79.68 364.8l88.704-153.6a32 32 0 0 1 34.432-15.296l112.32 24.256c13.568-9.152 27.776-17.408 42.56-24.64l35.2-109.312A32 32 0 0 1 423.232 64H600.64zm-23.424 64H446.72l-36.352 113.088-24.512 11.968a294.113 294.113 0 0 0-34.816 20.096l-22.656 15.36-116.224-25.088-65.28 113.152 79.68 88.192-1.92 27.136a293.12 293.12 0 0 0 0 40.192l1.92 27.136-79.808 88.192 65.344 113.152 116.224-25.024 22.656 15.296a294.113 294.113 0 0 0 34.816 20.096l24.512 11.968L446.72 896h130.688l36.48-113.152 24.448-11.904a288.282 288.282 0 0 0 34.752-20.096l22.592-15.296 116.288 25.024 65.28-113.152-79.744-88.192 1.92-27.136a293.12 293.12 0 0 0 0-40.256l-1.92-27.136 79.808-88.128-65.344-113.152-116.288 24.96-22.592-15.232a287.616 287.616 0 0 0-34.752-20.096l-24.448-11.904L577.344 128zM512 320a192 192 0 1 1 0 384 192 192 0 0 1 0-384zm0 64a128 128 0 1 0 0 256 128 128 0 0 0 0-256z"></path></g></svg>
                Setting</button>

        </div>
        <div>
            <button class=" rounded-lg w-48 h-12 bg-white text-blue-600 inline-flex text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg  viewBox="0 0 1024 1024" fill="#FF0000" class="icon w-6 h-6 ml-10 mr-2" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                Clear All
            </button>

            <button class=" rounded-lg w-48 h-12 bg-blue-700 text-white inline-flex text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg fill="#ffffff" class="w-6 h-6 ml-5 mr-1" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M694.018 926.244c-27.296 18.796-27.3 49.269 0 68.067l509.836 351.074c27.296 18.797 49.424 7.18 49.424-25.959V601.13c0-33.133-22.125-44.757-49.424-25.959L694.018 926.244Z" fill-rule="evenodd"></path> </g></svg>
                Download All
            </button>
        </div>
    </div>
</div>



<article class="w-10/12 mx-auto px-2 py-2 mb-8 border rounded-lg bg-white">
    <div class="flex mb-4 mt-2">
        <div class="w-1/2 flex items-center pl-10">
            <div>
                <img src="{{asset('images/audio.png')}}" class="w-12 h-12">
            </div>
            <div class="ml-12">
                <p class="font-semibold">test.png</p>
                <p class="flex items-center text-green-700">
                    Ready to download
                    <svg fill="#008000" class="w-4 h-4 ml-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 400 400" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M199.996,0C89.713,0,0,89.72,0,200s89.713,200,199.996,200S400,310.28,400,200S310.279,0,199.996,0z M199.996,373.77 C104.18,373.77,26.23,295.816,26.23,200c0-95.817,77.949-173.769,173.766-173.769c95.817,0,173.771,77.953,173.771,173.769 C373.768,295.816,295.812,373.77,199.996,373.77z"></path> <path d="M272.406,134.526L169.275,237.652l-41.689-41.68c-5.123-5.117-13.422-5.12-18.545,0.003 c-5.125,5.125-5.125,13.425,0,18.548l50.963,50.955c2.561,2.558,5.916,3.838,9.271,3.838s6.719-1.28,9.279-3.842 c0.008-0.011,0.014-0.022,0.027-0.035L290.95,153.071c5.125-5.12,5.125-13.426,0-18.546 C285.828,129.402,277.523,129.402,272.406,134.526z"></path> </g> </g> </g></svg>
                </p>
            </div>
        </div>

        {{--                cot phai--}}

        <div class="w-1/2 flex items-center ml-40 pl-80">
            <div>
                <button>
                    <svg fill="#FF0000" class="w-6 h-6" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="" d="M439.114,69.747c0,0,2.977,2.1-43.339-11.966c-41.52-12.604-80.795-15.309-80.795-15.309l-2.722-19.297 C310.387,9.857,299.484,0,286.642,0h-30.651h-30.651c-12.825,0-23.729,9.857-25.616,23.175l-2.722,19.297 c0,0-39.258,2.705-80.778,15.309C69.891,71.848,72.868,69.747,72.868,69.747c-10.324,2.849-17.536,12.655-17.536,23.864v16.695 h200.66h200.677V93.611C456.669,82.402,449.456,72.596,439.114,69.747z"></path> <path class="" d="M88.593,464.731C90.957,491.486,113.367,512,140.234,512h231.524c26.857,0,49.276-20.514,51.64-47.269 l25.642-327.21H62.952L88.593,464.731z M342.016,209.904c0.51-8.402,7.731-14.807,16.134-14.296 c8.402,0.51,14.798,7.731,14.296,16.134l-14.492,239.493c-0.51,8.402-7.731,14.798-16.133,14.288 c-8.403-0.51-14.806-7.722-14.296-16.125L342.016,209.904z M240.751,210.823c0-8.42,6.821-15.241,15.24-15.241 c8.42,0,15.24,6.821,15.24,15.241v239.492c0,8.42-6.821,15.24-15.24,15.24c-8.42,0-15.24-6.821-15.24-15.24V210.823z M153.833,195.608c8.403-0.51,15.624,5.894,16.134,14.296l14.509,239.492c0.51,8.403-5.894,15.615-14.296,16.125 c-8.403,0.51-15.624-5.886-16.134-14.288l-14.509-239.493C139.026,203.339,145.43,196.118,153.833,195.608z"></path> </g> </g></svg>
                </button>
            </div>
            <div>
                <button class="border-2 border-blue-600 rounded-lg ml-10 w-32 h-10 text-blue-600 font-semibold">
                    Download
                </button>
            </div>
        </div>




    </div>

    <div class="flex mb-4 mt-2">
        <div class="w-1/2 flex items-center pl-10">
            <div>
                <img src="{{asset('images/excel.png')}}" class="w-12 h-12">
            </div>
            <div class="ml-12">
                <p class="font-semibold">test2.png</p>
                <p class="flex items-center text-red-500">
                    Fail to load
                    <svg viewBox="0 0 1024 1024"  fill="#FF0000" class="w-4 h-4 ml-2" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                </p>
            </div>
        </div>

        {{--                cot phai--}}

        <div class="w-1/2 flex items-center ml-40 pl-80">
            <div>
                <button>
                    <svg fill="#FF0000" class="w-6 h-6" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="" d="M439.114,69.747c0,0,2.977,2.1-43.339-11.966c-41.52-12.604-80.795-15.309-80.795-15.309l-2.722-19.297 C310.387,9.857,299.484,0,286.642,0h-30.651h-30.651c-12.825,0-23.729,9.857-25.616,23.175l-2.722,19.297 c0,0-39.258,2.705-80.778,15.309C69.891,71.848,72.868,69.747,72.868,69.747c-10.324,2.849-17.536,12.655-17.536,23.864v16.695 h200.66h200.677V93.611C456.669,82.402,449.456,72.596,439.114,69.747z"></path> <path class="" d="M88.593,464.731C90.957,491.486,113.367,512,140.234,512h231.524c26.857,0,49.276-20.514,51.64-47.269 l25.642-327.21H62.952L88.593,464.731z M342.016,209.904c0.51-8.402,7.731-14.807,16.134-14.296 c8.402,0.51,14.798,7.731,14.296,16.134l-14.492,239.493c-0.51,8.402-7.731,14.798-16.133,14.288 c-8.403-0.51-14.806-7.722-14.296-16.125L342.016,209.904z M240.751,210.823c0-8.42,6.821-15.241,15.24-15.241 c8.42,0,15.24,6.821,15.24,15.241v239.492c0,8.42-6.821,15.24-15.24,15.24c-8.42,0-15.24-6.821-15.24-15.24V210.823z M153.833,195.608c8.403-0.51,15.624,5.894,16.134,14.296l14.509,239.492c0.51,8.403-5.894,15.615-14.296,16.125 c-8.403,0.51-15.624-5.886-16.134-14.288l-14.509-239.493C139.026,203.339,145.43,196.118,153.833,195.608z"></path> </g> </g></svg>
                </button>
            </div>
            <div>
                <button class="border-2 border-blue-600 rounded-lg ml-10 w-32 h-10 text-blue-600 font-semibold">
                    Try Again
                </button>
            </div>
        </div>




    </div>
</article>
<!-- Main modal -->
@include('client.modal.setting')

@endsection
