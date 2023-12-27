<style>
    .hasImage:hover section {
        background-color: rgba(5, 5, 5, 0.4);
    }

    .hasImage:hover button:hover {
        background: rgba(5, 5, 5, 0.45);
    }

    #overlay p,
    i {
        opacity: 0;
    }

    #overlay.draggedover {
        background-color: rgba(255, 255, 255, 0.7);
    }

    #overlay.draggedover p,
    #overlay.draggedover i {
        opacity: 1;
    }

    .group:hover .group-hover\:text-blue-800 {
        color: #2b6cb0;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    ul li {
        margin-bottom: 20px;
        text-align: center;
    }

    ul li a {
        display: inline-block;
        background-color: white;
        color: #000000;
        text-decoration: none;
        border-radius: 4px;
    }

    ul li a:hover {
        color: #1a56db;
    }
</style>


{{-- banner  --}}
<div>
    <main class="container mx-auto max-w-screen-lg h-full">
        <!-- file upload modal -->
        <article aria-label="File Upload Modal" class="relative h-full flex flex-col rounded-md"
            ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);"
            ondragenter="dragEnterHandler(event);">
            <!-- overlay -->
            <div id="overlay"
                class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                <i>
                    <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                    </svg>
                </i>
                <p class="text-lg text-blue-700">Drop files to upload</p>
            </div>

            <!-- scroll area -->
            <section class="h-full overflow-auto p-8 w-full h-full flex flex-col">

                <header
                    class="border-dashed border-2 rounded-lg border-gray-400 py-8 flex flex-col justify-center items-center sm:py-4 md:py-6 lg:py-8 xl:py-10 2xl:py-12">
                    <svg class="w-8 h-8 mb-3 text-blue-700 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2" />
                    </svg>
                    {{-- button ? --}}
                    <button id="button"
                        class="font-semibold w-48 h-16 mb-2 text-xl rounded-lg px-3 py-1 bg-gray-400 hover:bg-blue-700 hover:text-white focus:shadow-outline focus:outline-none">
                        Upload files
                        {{-- <input type="file" id="input-update-file" multiple/> --}}
                    </button>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">(Max 20 files, max file sizes 1GB)</p>
                    <input id="hidden-input" type="file" multiple class="hidden" />
                </header>

                <div class="w-full mx-auto mt-10 mb-2">
                    <div class="flex flex-col md:flex-row justify-between font-semibold text-gray-700">
                        <div class="md:flex md:justify-start mb-4 md:mb-0">
                            <button
                                class="rounded-t-lg md:rounded-l-lg md:rounded-t-none w-full md:w-48 h-12 bg-gray-200 text-blue-600 inline-flex text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                {{-- svg1 --}}
                                <svg viewBox="0 0 24 24" fill="#0066FF" xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 ml-10 mr-2">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M18.5 3.75H8.5C7.77065 3.75 7.07118 4.03973 6.55546 4.55546C6.03973 5.07118 5.75 5.77065 5.75 6.5V6.75H5.5C4.77065 6.75 4.07118 7.03973 3.55546 7.55546C3.03973 8.07118 2.75 8.77065 2.75 9.5V17.5C2.75 18.2293 3.03973 18.9288 3.55546 19.4445C4.07118 19.9603 4.77065 20.25 5.5 20.25H15.5C16.2293 20.25 16.9288 19.9603 17.4445 19.4445C17.9603 18.9288 18.25 18.2293 18.25 17.5V17.25H18.5C19.2293 17.25 19.9288 16.9603 20.4445 16.4445C20.9603 15.9288 21.25 15.2293 21.25 14.5V6.5C21.25 5.77065 20.9603 5.07118 20.4445 4.55546C19.9288 4.03973 19.2293 3.75 18.5 3.75ZM7.25 6.5C7.25 6.16848 7.3817 5.85054 7.61612 5.61612C7.85054 5.3817 8.16848 5.25 8.5 5.25H18.5C18.8315 5.25 19.1495 5.3817 19.3839 5.61612C19.6183 5.85054 19.75 6.16848 19.75 6.5V12.7L17.48 10.79C17.4061 10.7257 17.3201 10.6768 17.2271 10.646C17.1341 10.6152 17.036 10.6032 16.9383 10.6106C16.8406 10.6181 16.7454 10.6448 16.6581 10.6893C16.5709 10.7339 16.4933 10.7953 16.43 10.87L15.36 12.13L11.36 8.25C11.2961 8.17377 11.2166 8.11204 11.127 8.06893C11.0373 8.02582 10.9395 8.00232 10.84 8C10.737 8.00389 10.6358 8.02898 10.5429 8.07372C10.45 8.11845 10.3673 8.18187 10.3 8.26L7.25 11.89V6.5ZM8.5 15.75C8.16848 15.75 7.85054 15.6183 7.61612 15.3839C7.3817 15.1495 7.25 14.8315 7.25 14.5V14.2L10.92 9.88L14.38 13.27L12.28 15.75H8.5ZM16.75 17.5C16.75 17.8315 16.6183 18.1495 16.3839 18.3839C16.1495 18.6183 15.8315 18.75 15.5 18.75H5.5C5.16848 18.75 4.85054 18.6183 4.61612 18.3839C4.3817 18.1495 4.25 17.8315 4.25 17.5V9.5C4.25 9.16848 4.3817 8.85054 4.61612 8.61612C4.85054 8.3817 5.16848 8.25 5.5 8.25H5.75V14.5C5.75 15.2293 6.03973 15.9288 6.55546 16.4445C7.07118 16.9603 7.77065 17.25 8.5 17.25H16.75V17.5ZM18.5 15.75H14.25L17.09 12.41L19.72 14.64C19.6903 14.9433 19.549 15.2247 19.3236 15.4298C19.0982 15.6349 18.8047 15.749 18.5 15.75Z"
                                            fill="#000000"></path>
                                    </g>
                                </svg>

                                All Files
                            </button>

                            <button data-modal-target="setting-modal" data-modal-toggle="setting-modal"
                                class="rounded-lg md:rounded-r-lg md:rounded-t-none w-full md:w-48 h-12 bg-white text-blue-600 inline-flex text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                {{-- svg2 --}}
                                <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#0066FF"
                                    class="w-6 h-6 ml-10 mr-2">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill="#0066FF"
                                            d="M600.704 64a32 32 0 0 1 30.464 22.208l35.2 109.376c14.784 7.232 28.928 15.36 42.432 24.512l112.384-24.192a32 32 0 0 1 34.432 15.36L944.32 364.8a32 32 0 0 1-4.032 37.504l-77.12 85.12a357.12 357.12 0 0 1 0 49.024l77.12 85.248a32 32 0 0 1 4.032 37.504l-88.704 153.6a32 32 0 0 1-34.432 15.296L708.8 803.904c-13.44 9.088-27.648 17.28-42.368 24.512l-35.264 109.376A32 32 0 0 1 600.704 960H423.296a32 32 0 0 1-30.464-22.208L357.696 828.48a351.616 351.616 0 0 1-42.56-24.64l-112.32 24.256a32 32 0 0 1-34.432-15.36L79.68 659.2a32 32 0 0 1 4.032-37.504l77.12-85.248a357.12 357.12 0 0 1 0-48.896l-77.12-85.248A32 32 0 0 1 79.68 364.8l88.704-153.6a32 32 0 0 1 34.432-15.296l112.32 24.256c13.568-9.152 27.776-17.408 42.56-24.64l35.2-109.312A32 32 0 0 1 423.232 64H600.64zm-23.424 64H446.72l-36.352 113.088-24.512 11.968a294.113 294.113 0 0 0-34.816 20.096l-22.656 15.36-116.224-25.088-65.28 113.152 79.68 88.192-1.92 27.136a293.12 293.12 0 0 0 0 40.192l1.92 27.136-79.808 88.192 65.344 113.152 116.224-25.024 22.656 15.296a294.113 294.113 0 0 0 34.816 20.096l24.512 11.968L446.72 896h130.688l36.48-113.152 24.448-11.904a288.282 288.282 0 0 0 34.752-20.096l22.592-15.296 116.288 25.024 65.28-113.152-79.744-88.192 1.92-27.136a293.12 293.12 0 0 0 0-40.256l-1.92-27.136 79.808-88.128-65.344-113.152-116.288 24.96-22.592-15.232a287.616 287.616 0 0 0-34.752-20.096l-24.448-11.904L577.344 128zM512 320a192 192 0 1 1 0 384 192 192 0 0 1 0-384zm0 64a128 128 0 1 0 0 256 128 128 0 0 0 0-256z">
                                        </path>
                                    </g>
                                </svg>
                                Setting
                            </button>
                        </div>

                        <div class="flex justify-end">
                            <button id="cancel"
                                class="rounded-lg md:rounded-l-lg md:rounded-b-none md:rounded-t-none w-full md:w-48 h-12 bg-white text-blue-600 inline-flex text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                {{-- svg3 --}}
                                <svg viewBox="0 0 1024 1024" fill="#FF0000" class="icon w-6 h-6 ml-10 mr-2"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z"
                                            fill=""></path>
                                        <path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z"
                                            fill=""></path>
                                        <path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path>
                                    </g>
                                </svg>
                                Clear Queue
                            </button>

                            <button id="submit"
                                class="rounded-lg md:rounded-r-lg md:rounded-b-lg md:rounded-t-none w-full md:w-48 h-12 bg-blue-700 text-white inline-flex text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                {{-- svg4 --}}
                                <svg fill="#ffffff" class="w-6 h-6 ml-5 mr-1" viewBox="0 0 1920 1920"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M694.018 926.244c-27.296 18.796-27.3 49.269 0 68.067l509.836 351.074c27.296 18.797 49.424 7.18 49.424-25.959V601.13c0-33.133-22.125-44.757-49.424-25.959L694.018 926.244Z"
                                            fill-rule="evenodd"></path>
                                    </g>
                                </svg>
                                Start Compress
                            </button>
                        </div>
                    </div>
                </div>
                <ul id="gallery" class="flex flex-1 flex-wrap -m-1 bg-white rounded-lg">
                    <li id="empty"
                        class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                        <img class="mx-auto w-32"
                            src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png"
                            alt="no data" />
                        <span class="text-small text-gray-500">No files selected</span>
                    </li>
                </ul>

            </section>


        </article>
    </main>
</div>

<!-- using two similar templates for simplicity in js code -->
<template id="file-template">
    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
        <article tabindex="0"
            class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
            <img alt="upload preview"
                class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

            <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                <h1 class="flex-1 group-hover:text-blue-800"></h1>
                <div class="flex">
                    <span class="p-1 text-blue-800">
                        <i>
                            <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                            </svg>
                        </i>
                    </span>
                    <p class="p-1 size text-xs text-gray-700"></p>
                    <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                        <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path class="pointer-events-none"
                                d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                        </svg>
                    </button>
                </div>
            </section>
        </article>
    </li>
</template>

<template id="image-template">
    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
        <article tabindex="0"
            class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-white cursor-pointer relative text-transparent hover:text-white shadow-sm">
            <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

            <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                <h1 class="flex-1"></h1>
                <div class="flex">
                    <span class="p-1">
                        <i>
                            <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                            </svg>
                        </i>
                    </span>

                    <p class="p-1 size text-xs"></p>
                    <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                        <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path class="pointer-events-none"
                                d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                        </svg>
                    </button>
                </div>
            </section>
        </article>
    </li>
</template>

<!-- Main modal -->
@include('client.modal.setting')

<script src="https://unpkg.com/image-compressor.js/dist/image-compressor.min.js"></script>
<script>
    const fileTempl = document.getElementById("file-template");
    const imageTempl = document.getElementById("image-template");
    const empty = document.getElementById("empty");

    // use to store pre-selected files
    let FILES = {};

    // check if file is of type image and prepend the initialized
    // template to the target element
    function addFile(target, file) {
        const isImage = file.type.match("image.*");
        const objectURL = URL.createObjectURL(file);

        const clone = isImage ?
            imageTempl.content.cloneNode(true) :
            fileTempl.content.cloneNode(true);

        clone.querySelector("h1").textContent = file.name;
        clone.querySelector("li").id = objectURL;
        clone.querySelector(".delete").dataset.target = objectURL;
        clone.querySelector(".size").textContent =
            file.size > 1024 ?
            file.size > 1048576 ?
            Math.round(file.size / 1048576) + "mb" :
            Math.round(file.size / 1024) + "kb" :
            file.size + "b";

        isImage &&
            Object.assign(clone.querySelector("img"), {
                src: objectURL,
                alt: file.name,
            });

        empty.classList.add("hidden");
        target.prepend(clone);

        FILES[objectURL] = file;
    }

    const gallery = document.getElementById("gallery");
    const overlay = document.getElementById("overlay");

    // click the hidden input of type file if the visible button is clicked
    // and capture the selected files
    const hidden = document.getElementById("hidden-input");
    document.getElementById("button").onclick = () => hidden.click();
    hidden.onchange = (e) => {
        console.log("🚀 ~ file: main.blade.php:322 ~ e:", e);
        const allowedExtensions = ["png"];
        const invalidFiles = [];

        for (const file of e.target.files) {
            const fileExtension = file.name.split(".").pop().toLowerCase();
            if (!allowedExtensions.includes(fileExtension)) {
                invalidFiles.push(file.name);
            }
        }

        if (invalidFiles.length > 0) {
            const errorMessage = `Các tệp không hợp lệ, phải là ảnh PNG: ${invalidFiles.join(", ")}`;
            alert(errorMessage);
            return;
        }

        if (e.target.files.length > 20) {
            alert('Bạn chỉ được upload tối đa 20 ảnh');
            return;
        }

        for (const file of e.target.files) {
            addFile(gallery, file);
        }
    };

    // use to check if a file is being dragged
    const hasFiles = ({
            dataTransfer: {
                types = []
            }
        }) =>
        types.indexOf("Files") > -1;

    // use to drag dragenter and dragleave events.
    // this is to know if the outermost parent is dragged over
    // without issues due to drag events on its children
    let counter = 0;

    // reset counter and append file to gallery when file is dropped
    function dropHandler(ev) {
        ev.preventDefault();
        for (const file of ev.dataTransfer.files) {
            addFile(gallery, file);
            overlay.classList.remove("draggedover");
            counter = 0;
        }
    }

    // only react to actual files being dragged
    function dragEnterHandler(e) {
        e.preventDefault();
        if (!hasFiles(e)) {
            return;
        }
        ++counter && overlay.classList.add("draggedover");
    }

    function dragLeaveHandler(e) {
        1 > --counter && overlay.classList.remove("draggedover");
    }

    function dragOverHandler(e) {
        if (hasFiles(e)) {
            e.preventDefault();
        }
    }

    // event delegation to capture delete events
    // from the waste buckets in the file preview cards
    gallery.onclick = ({
        target
    }) => {
        if (target.classList.contains("delete")) {
            const ou = target.dataset.target;
            document.getElementById(ou).remove(ou);
            gallery.children.length === 1 && empty.classList.remove("hidden");
            delete FILES[ou];
        }
    };

    document.getElementById("submit").onclick = async () => {
        const compressedFiles = {};
        const compressOptions = {
            quality: 0.8, // Giá trị mặc định
        };



        if (Object.keys(FILES).length === 0) {
            alert('Không có ảnh để nén.');
            return;
        }

        console.log("🚀 ~ file: main.blade.php:388 ~ document.getElementById ~ FILES:", FILES)
        for (const objectURL in FILES) {
            const file = FILES[objectURL];
            const compressedFile = await new Promise((resolve) => {
                new ImageCompressor(file, {
                    ...compressOptions,
                    success(result) {
                        resolve(result);
                    },
                });
            });

            compressedFiles[objectURL] = compressedFile;
        }

        for (const objectURL in compressedFiles) {
            const compressedFile = compressedFiles[objectURL];
            const downloadLink = document.createElement("a");
            downloadLink.href = URL.createObjectURL(compressedFile);
            downloadLink.download = compressedFile.name;
            downloadLink.textContent = "Download";
            gallery.querySelector(`li[id="${objectURL}"]`).appendChild(downloadLink);
        }

        // alert(`Compressed Files:\n${JSON.stringify(compressedFiles)}`);
        alert('Nén ảnh thành công.');
        console.log(compressedFiles);
    };


    // clear entire selection
    document.getElementById("cancel").onclick = () => {
        while (gallery.children.length > 0) {
            gallery.lastChild.remove();
        }
        FILES = {};
        empty.classList.remove("hidden");
        gallery.append(empty);
    };
</script>
