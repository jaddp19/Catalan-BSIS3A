<?php

use Livewire\Component;

new class extends Component {};

?>

<div>
    <div class="relative h-screen bg-center bg-cover"
        style="background-image: url('https://copilot.microsoft.com/th/id/BCO.9116c325-f94c-4a64-99f5-3fd7b142998f.png'); ">
        <div class="z-10 items-center h-full p-0 lg:py-12 ">
            <div class=" text-center lg:text-left max-w-[80rem] lg:py-20 py-5 mx-auto ">
                <h1 class="mb-4 font-serif text-5xl font-bold leading-tight text-white md:text-6xl">
                    Delicious Moments,<br>
                    <span>Perfectly Catered</span>
                </h1>

                <p class="mb-6 text-lg text-gray-200 md:text-lg">
                    From intimate gatherings to grand celebrations, Food Catering<br> delivers exceptional flavors and
                    seamless service tailored to your event.
                </p>

                <div class="flex flex-col gap-4 p-4 mb-8 lg:p-0 lg:flex-row">
                    <a href="/menulist" id="btn-explore"
                        class="px-6 py-3 font-semibold text-white transition rounded-lg shadow-lg ">
                        Explore Our Menu
                    </a>
                    <a href="/learnmore" wire::navigate id="btn-learnmore"
                        class="px-6 py-3 text-white transition border rounded-lg shadow-lg border-lime-700">
                        Learn More
                    </a>
                </div>

                <div class="flex items-center p-4 space-x-4 lg:p-0">
                    <span class="text-lg text-white">Follow us on:</span>
                    <a class="inline-block text-white transition hover:text-lime-400" href="#">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.641 3.979C17.3681 3.979 17.1013 4.05994 16.8743 4.21157C16.6474 4.36321 16.4705 4.57873 16.366 4.8309C16.2616 5.08306 16.2343 5.36053 16.2875 5.62822C16.3408 5.89592 16.4722 6.14181 16.6652 6.33481C16.8582 6.5278 17.1041 6.65924 17.3718 6.71248C17.6395 6.76573 17.9169 6.7384 18.1691 6.63395C18.4213 6.5295 18.6368 6.35263 18.7884 6.12569C18.9401 5.89875 19.021 5.63194 19.021 5.359C19.021 4.993 18.8756 4.64199 18.6168 4.38319C18.358 4.12439 18.007 3.979 17.641 3.979ZM22.931 6.762C22.9086 5.80784 22.7299 4.86381 22.402 3.9675C22.1096 3.2006 21.6545 2.50617 21.068 1.932C20.4985 1.34254 19.8025 0.890303 19.0325 0.6095C18.1386 0.271585 17.1935 0.0887915 16.238 0.0689999C15.019 -6.42613e-08 14.628 0 11.5 0C8.372 0 7.981 -6.42613e-08 6.762 0.0689999C5.80653 0.0887915 4.86144 0.271585 3.9675 0.6095C3.19893 0.893146 2.50347 1.34499 1.932 1.932C1.34254 2.50145 0.890303 3.19751 0.6095 3.9675C0.271585 4.86144 0.0887915 5.80653 0.0689999 6.762C-6.42613e-08 7.981 0 8.372 0 11.5C0 14.628 -6.42613e-08 15.019 0.0689999 16.238C0.0887915 17.1935 0.271585 18.1386 0.6095 19.0325C0.890303 19.8025 1.34254 20.4985 1.932 21.068C2.50347 21.655 3.19893 22.1069 3.9675 22.3905C4.86144 22.7284 5.80653 22.9112 6.762 22.931C7.981 23 8.372 23 11.5 23C14.628 23 15.019 23 16.238 22.931C17.1935 22.9112 18.1386 22.7284 19.0325 22.3905C19.8025 22.1097 20.4985 21.6575 21.068 21.068C21.6571 20.496 22.1126 19.8009 22.402 19.0325C22.7299 18.1362 22.9086 17.1922 22.931 16.238C22.931 15.019 23 14.628 23 11.5C23 8.372 23 7.981 22.931 6.762ZM20.861 16.1C20.8526 16.83 20.7204 17.5533 20.47 18.239C20.2864 18.7395 19.9915 19.1917 19.6075 19.5615C19.2345 19.9416 18.7832 20.2359 18.285 20.424C17.5993 20.6744 16.876 20.8066 16.146 20.815C14.996 20.8725 14.5705 20.884 11.546 20.884C8.5215 20.884 8.096 20.884 6.946 20.815C6.18802 20.8292 5.43328 20.7125 4.715 20.47C4.23865 20.2723 3.80806 19.9787 3.45 19.6075C3.0683 19.2381 2.77707 18.7855 2.599 18.285C2.31823 17.5894 2.16251 16.8497 2.139 16.1C2.139 14.95 2.07 14.5245 2.07 11.5C2.07 8.4755 2.07 8.05 2.139 6.9C2.14415 6.15371 2.28039 5.41414 2.5415 4.715C2.74395 4.2296 3.0547 3.79691 3.45 3.45C3.79939 3.05459 4.23118 2.74056 4.715 2.53C5.41598 2.27705 6.1548 2.14484 6.9 2.139C8.05 2.139 8.4755 2.07 11.5 2.07C14.5245 2.07 14.95 2.07 16.1 2.139C16.83 2.14737 17.5533 2.27958 18.239 2.53C18.7616 2.72395 19.2306 3.03927 19.6075 3.45C19.9844 3.80326 20.2788 4.23514 20.47 4.715C20.7256 5.41527 20.8579 6.15455 20.861 6.9C20.9185 8.05 20.93 8.4755 20.93 11.5C20.93 14.5245 20.9185 14.95 20.861 16.1ZM11.5 5.6005C10.3337 5.60277 9.19421 5.9507 8.22555 6.60033C7.2569 7.24996 6.50254 8.17213 6.05778 9.25032C5.61302 10.3285 5.49783 11.5143 5.72676 12.658C5.95569 13.8016 6.51847 14.8517 7.34399 15.6756C8.1695 16.4995 9.22071 17.0603 10.3648 17.287C11.5089 17.5137 12.6945 17.3962 13.7718 16.9493C14.8491 16.5025 15.7698 15.7463 16.4175 14.7764C17.0653 13.8065 17.411 12.6663 17.411 11.5C17.4125 10.7239 17.2606 9.9551 16.9639 9.2379C16.6673 8.5207 16.2317 7.86923 15.6824 7.32096C15.1331 6.77269 14.4807 6.33843 13.763 6.04317C13.0452 5.74791 12.2761 5.59747 11.5 5.6005ZM11.5 15.3295C10.7426 15.3295 10.0022 15.1049 9.37244 14.6841C8.74269 14.2633 8.25185 13.6652 7.962 12.9655C7.67216 12.2657 7.59632 11.4958 7.74408 10.7529C7.89184 10.0101 8.25657 9.3277 8.79213 8.79213C9.3277 8.25657 10.0101 7.89184 10.7529 7.74408C11.4958 7.59632 12.2657 7.67216 12.9655 7.962C13.6652 8.25185 14.2633 8.74269 14.6841 9.37244C15.1049 10.0022 15.3295 10.7426 15.3295 11.5C15.3295 12.0029 15.2304 12.5009 15.038 12.9655C14.8455 13.4301 14.5635 13.8523 14.2079 14.2079C13.8523 14.5635 13.4301 14.8455 12.9655 15.038C12.5009 15.2304 12.0029 15.3295 11.5 15.3295Z"
                                fill="white" />
                        </svg>

                    </a>
                    <a class="inline-block text-white transition hover:text-amber-400" href="#">
                        <svg width="11" height="21" viewBox="0 0 11 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.86458 3.45836H10.8229V0.145865C9.87474 0.0472677 8.92204 -0.00141071 7.96875 3.11084e-05C5.13542 3.11084e-05 3.19792 1.7292 3.19792 4.89586V7.62503H0V11.3334H3.19792V20.8334H7.03125V11.3334H10.2187L10.6979 7.62503H7.03125V5.26045C7.03125 4.1667 7.32292 3.45836 8.86458 3.45836Z"
                                fill="white" />
                        </svg>

                    </a>
                    <a class="inline-block text-white transition hover:text-amber-400" href="#">
                        <svg width="23" height="20" viewBox="0 0 23 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23 2.39613C22.1356 2.79671 21.2214 3.06152 20.286 3.18232C21.2729 2.55254 22.0125 1.56178 22.3675 0.393828C21.4401 0.983542 20.4249 1.39903 19.366 1.62224C18.6582 0.802362 17.7157 0.25661 16.6863 0.0705742C15.6568 -0.115462 14.5987 0.0687402 13.6779 0.594292C12.757 1.11984 12.0255 1.95702 11.598 2.97451C11.1706 3.99201 11.0714 5.13228 11.316 6.21649C9.44084 6.11517 7.60661 5.59363 5.93245 4.68572C4.2583 3.77781 2.78167 2.50386 1.5985 0.946612C1.18351 1.72072 0.965447 2.59738 0.966 3.48942C0.964528 4.31784 1.15485 5.13379 1.52002 5.86463C1.88519 6.59546 2.41387 7.21851 3.059 7.67829C2.30917 7.6565 1.57537 7.44158 0.92 7.0518V7.11322C0.92562 8.27394 1.30639 9.39695 1.99791 10.2923C2.68943 11.1877 3.64924 11.8004 4.715 12.0269C4.30474 12.1602 3.87881 12.2305 3.45 12.2357C3.15317 12.232 2.85709 12.2032 2.5645 12.1497C2.868 13.1482 3.45532 14.0207 4.24474 14.646C5.03416 15.2713 5.98641 15.6182 6.969 15.6384C5.30978 17.033 3.26127 17.7941 1.15 17.8004C0.765596 17.8017 0.381496 17.7771 0 17.7267C2.15559 19.2134 4.66763 20.0026 7.2335 19.9992C9.00415 20.0189 10.7607 19.6614 12.4006 18.9478C14.0405 18.2342 15.5308 17.1787 16.7845 15.8429C18.0382 14.5072 19.0302 12.9179 19.7024 11.1681C20.3747 9.41824 20.7138 7.54283 20.7 5.65142C20.7 5.44259 20.7 5.22147 20.7 5.00036C21.6024 4.28151 22.3807 3.40027 23 2.39613Z"
                                fill="white" />
                        </svg>

                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="py-10 bg-neutral-800 dark:bg-neutral-800">
        <div class="max-w-[80rem] mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="flex flex-col gap-4 py-5 mt-10 sm:flex-row sm:items-center sm:justify-between">
                <h1 class="text-2xl font-bold text-center text-white sm:text-3xl sm:text-left">
                    Our Packages
                </h1>
                <a href="#" id="btn-view"
                    class="px-6 py-3 text-sm font-medium text-center text-white transition bg-green-600 rounded-lg sm:px-8 sm:py-4 hover:bg-green-700">
                    View more
                </a>
            </div>

            <div class="grid gap-6 mb-12 md:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col overflow-hidden transition bg-white shadow-sm hover:shadow-md">
                    <!-- Image with overlay title -->
                    <div class="relative w-full">
                        <img class="object-cover w-full h-64 sm:h-72 md:h-80 lg:h-96"
                            src="https://i.pinimg.com/736x/b4/19/ee/b419eee03532953fb7eb8200e8481d30.jpg"
                            alt="Shoyu Ramen with Pork Wontons">

                        <div class="relative flex items-center justify-center bg-white">
                            <span id="title"
                                class="absolute px-3 py-2 text-lg  text-center font-medium text-white sm:text-md w-[17rem]">
                                Premium Feast
                            </span>
                        </div>
                    </div>

                    <!-- Details section -->
                    <div class="flex items-center justify-center w-full h-full">
                        <div class="flex flex-col px-4 py-12 space-y-2 text-left w-full max-w-[22rem] ">
                            <h1 class="text-sm font-bold">Price: <span class="font-normal">$280.74</span></h1>
                            <h1 class="text-sm font-bold">Pax range: <span class="font-normal">21–26 Guest</span></h1>
                            <p class="text-sm font-bold">Description:
                                <span class="block mt-1 text-sm font-normal">
                                    An expansive, top-tier culinary journey designed for high-end celebrations and large
                                    gatherings of 21–26 guests. This package focuses on artisanal ingredients and a
                                    sophisticated
                                    presentation style.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="flex flex-col overflow-hidden transition bg-white shadow-sm hover:shadow-md">
                    <div class="relative w-full">
                        <img class="object-cover w-full h-64 sm:h-72 md:h-80 lg:h-96"
                            src="https://i.pinimg.com/736x/b4/19/ee/b419eee03532953fb7eb8200e8481d30.jpg"
                            alt="Shoyu Ramen with Pork Wontons">

                        <div class="relative flex items-center justify-center bg-white">
                            <span id="title"
                                class="absolute px-3 py-2 text-lg  text-center font-medium text-white sm:text-md w-[17rem]">
                                Premium Feast
                            </span>
                        </div>
                    </div>

                    <!-- Details section -->
                    <div class="flex items-center justify-center w-full h-full">
                        <div class="flex flex-col px-4 py-12 space-y-2 text-left w-full max-w-[22rem] ">
                            <h1 class="text-sm font-bold">Price: <span class="font-normal">$280.74</span></h1>
                            <h1 class="text-sm font-bold">Pax range: <span class="font-normal">21–26 Guest</span></h1>
                            <p class="text-sm font-bold">Description:
                                <span class="block mt-1 text-sm font-normal">
                                    An expansive, top-tier culinary journey designed for high-end celebrations and large
                                    gatherings of 21–26 guests. This package focuses on artisanal ingredients and a
                                    sophisticated
                                    presentation style.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="flex flex-col overflow-hidden transition bg-white shadow-sm hover:shadow-md">
                    <!-- Image with overlay title -->
                    <div class="relative w-full">
                        <img class="object-cover w-full h-64 sm:h-72 md:h-80 lg:h-96"
                            src="https://i.pinimg.com/736x/b4/19/ee/b419eee03532953fb7eb8200e8481d30.jpg"
                            alt="Shoyu Ramen with Pork Wontons">

                        <div class="relative flex items-center justify-center bg-white">
                            <span id="title"
                                class="absolute px-3 py-2 text-lg  text-center font-medium text-white sm:text-md w-[17rem]">
                                Premium Feast
                            </span>
                        </div>
                    </div>

                    <!-- Details section -->
                    <div class="flex items-center justify-center w-full h-full">
                        <div class="flex flex-col px-4 py-12 space-y-2 text-left w-full max-w-[22rem] ">
                            <h1 class="text-sm font-bold">Price: <span class="font-normal">$280.74</span></h1>
                            <h1 class="text-sm font-bold">Pax range: <span class="font-normal">21–26 Guest</span></h1>
                            <p class="text-sm font-bold">Description:
                                <span class="block mt-1 text-sm font-normal">
                                    An expansive, top-tier culinary journey designed for high-end celebrations and large
                                    gatherings of 21–26 guests. This package focuses on artisanal ingredients and a
                                    sophisticated
                                    presentation style.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="relative w-full bg-center bg-cover h-150"
        style="background-image: url('https://copilot.microsoft.com/th/id/BCO.399810a3-9e38-40c2-8f9c-ce2b036950ca.png');">
        <div class="absolute inset-0 flex items-center justify-center px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl text-center text-white">
                <h1 class="mb-6 text-4xl font-bold sm:text-5xl">Reserve A Table Now</h1>

                <a href="menulist"
                    class="inline-block px-6 py-3 mb-6 font-semibold text-white transition rounded-lg shadow-lg bg-lime-700 hover:bg-lime-600">
                    MAKE A RESERVATION
                </a>
                <p class="text-gray-200 text-md sm:text-lg">
                    Thank you for choosing 3A CareTering. We are honored to be a part of your special moments.
                    Once you submit your reservation, our event coordination team will reach out within 24 hours
                    to finalize every delicious detail.
                </p>
            </div>
        </div>
    </div>
</div>
