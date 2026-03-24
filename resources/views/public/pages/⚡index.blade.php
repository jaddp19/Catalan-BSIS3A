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
               <a href="#menu"
                  class="px-6 py-3 font-semibold text-white transition rounded-lg shadow-lg bg-lime-700 hover:bg-lime-600">
                  Explore Our Menu
               </a>
               <a href="/learnmore" wire::navigate
                  class="px-6 py-3 text-white transition border rounded-lg shadow-lg border-lime-700 hover:bg-lime-600">
                  Learn More
               </a>
            </div>

            <div class="flex items-center p-4 space-x-4 lg:p-0">
               <span class="text-lg text-white">Follow us on:</span>
               <a class="inline-block text-white transition hover:text-lime-400" href="#">
                  <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M17.641 3.979C17.3681 3.979 17.1013 4.05994 16.8743 4.21157C16.6474 4.36321 16.4705 4.57873 16.366 4.8309C16.2616 5.08306 16.2343 5.36053 16.2875 5.62822C16.3408 5.89592 16.4722 6.14181 16.6652 6.33481C16.8582 6.5278 17.1041 6.65924 17.3718 6.71248C17.6395 6.76573 17.9169 6.7384 18.1691 6.63395C18.4213 6.5295 18.6368 6.35263 18.7884 6.12569C18.9401 5.89875 19.021 5.63194 19.021 5.359C19.021 4.993 18.8756 4.64199 18.6168 4.38319C18.358 4.12439 18.007 3.979 17.641 3.979ZM22.931 6.762C22.9086 5.80784 22.7299 4.86381 22.402 3.9675C22.1096 3.2006 21.6545 2.50617 21.068 1.932C20.4985 1.34254 19.8025 0.890303 19.0325 0.6095C18.1386 0.271585 17.1935 0.0887915 16.238 0.0689999C15.019 -6.42613e-08 14.628 0 11.5 0C8.372 0 7.981 -6.42613e-08 6.762 0.0689999C5.80653 0.0887915 4.86144 0.271585 3.9675 0.6095C3.19893 0.893146 2.50347 1.34499 1.932 1.932C1.34254 2.50145 0.890303 3.19751 0.6095 3.9675C0.271585 4.86144 0.0887915 5.80653 0.0689999 6.762C-6.42613e-08 7.981 0 8.372 0 11.5C0 14.628 -6.42613e-08 15.019 0.0689999 16.238C0.0887915 17.1935 0.271585 18.1386 0.6095 19.0325C0.890303 19.8025 1.34254 20.4985 1.932 21.068C2.50347 21.655 3.19893 22.1069 3.9675 22.3905C4.86144 22.7284 5.80653 22.9112 6.762 22.931C7.981 23 8.372 23 11.5 23C14.628 23 15.019 23 16.238 22.931C17.1935 22.9112 18.1386 22.7284 19.0325 22.3905C19.8025 22.1097 20.4985 21.6575 21.068 21.068C21.6571 20.496 22.1126 19.8009 22.402 19.0325C22.7299 18.1362 22.9086 17.1922 22.931 16.238C22.931 15.019 23 14.628 23 11.5C23 8.372 23 7.981 22.931 6.762ZM20.861 16.1C20.8526 16.83 20.7204 17.5533 20.47 18.239C20.2864 18.7395 19.9915 19.1917 19.6075 19.5615C19.2345 19.9416 18.7832 20.2359 18.285 20.424C17.5993 20.6744 16.876 20.8066 16.146 20.815C14.996 20.8725 14.5705 20.884 11.546 20.884C8.5215 20.884 8.096 20.884 6.946 20.815C6.18802 20.8292 5.43328 20.7125 4.715 20.47C4.23865 20.2723 3.80806 19.9787 3.45 19.6075C3.0683 19.2381 2.77707 18.7855 2.599 18.285C2.31823 17.5894 2.16251 16.8497 2.139 16.1C2.139 14.95 2.07 14.5245 2.07 11.5C2.07 8.4755 2.07 8.05 2.139 6.9C2.14415 6.15371 2.28039 5.41414 2.5415 4.715C2.74395 4.2296 3.0547 3.79691 3.45 3.45C3.79939 3.05459 4.23118 2.74056 4.715 2.53C5.41598 2.27705 6.1548 2.14484 6.9 2.139C8.05 2.139 8.4755 2.07 11.5 2.07C14.5245 2.07 14.95 2.07 16.1 2.139C16.83 2.14737 17.5533 2.27958 18.239 2.53C18.7616 2.72395 19.2306 3.03927 19.6075 3.45C19.9844 3.80326 20.2788 4.23514 20.47 4.715C20.7256 5.41527 20.8579 6.15455 20.861 6.9C20.9185 8.05 20.93 8.4755 20.93 11.5C20.93 14.5245 20.9185 14.95 20.861 16.1ZM11.5 5.6005C10.3337 5.60277 9.19421 5.9507 8.22555 6.60033C7.2569 7.24996 6.50254 8.17213 6.05778 9.25032C5.61302 10.3285 5.49783 11.5143 5.72676 12.658C5.95569 13.8016 6.51847 14.8517 7.34399 15.6756C8.1695 16.4995 9.22071 17.0603 10.3648 17.287C11.5089 17.5137 12.6945 17.3962 13.7718 16.9493C14.8491 16.5025 15.7698 15.7463 16.4175 14.7764C17.0653 13.8065 17.411 12.6663 17.411 11.5C17.4125 10.7239 17.2606 9.9551 16.9639 9.2379C16.6673 8.5207 16.2317 7.86923 15.6824 7.32096C15.1331 6.77269 14.4807 6.33843 13.763 6.04317C13.0452 5.74791 12.2761 5.59747 11.5 5.6005ZM11.5 15.3295C10.7426 15.3295 10.0022 15.1049 9.37244 14.6841C8.74269 14.2633 8.25185 13.6652 7.962 12.9655C7.67216 12.2657 7.59632 11.4958 7.74408 10.7529C7.89184 10.0101 8.25657 9.3277 8.79213 8.79213C9.3277 8.25657 10.0101 7.89184 10.7529 7.74408C11.4958 7.59632 12.2657 7.67216 12.9655 7.962C13.6652 8.25185 14.2633 8.74269 14.6841 9.37244C15.1049 10.0022 15.3295 10.7426 15.3295 11.5C15.3295 12.0029 15.2304 12.5009 15.038 12.9655C14.8455 13.4301 14.5635 13.8523 14.2079 14.2079C13.8523 14.5635 13.4301 14.8455 12.9655 15.038C12.5009 15.2304 12.0029 15.3295 11.5 15.3295Z"
                        fill="white" />
                  </svg>

               </a>
               <a class="inline-block text-white transition hover:text-amber-400" href="#">
                  <svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M8.86458 3.45836H10.8229V0.145865C9.87474 0.0472677 8.92204 -0.00141071 7.96875 3.11084e-05C5.13542 3.11084e-05 3.19792 1.7292 3.19792 4.89586V7.62503H0V11.3334H3.19792V20.8334H7.03125V11.3334H10.2187L10.6979 7.62503H7.03125V5.26045C7.03125 4.1667 7.32292 3.45836 8.86458 3.45836Z"
                        fill="white" />
                  </svg>

               </a>
               <a class="inline-block text-white transition hover:text-amber-400" href="#">
                  <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M23 2.39613C22.1356 2.79671 21.2214 3.06152 20.286 3.18232C21.2729 2.55254 22.0125 1.56178 22.3675 0.393828C21.4401 0.983542 20.4249 1.39903 19.366 1.62224C18.6582 0.802362 17.7157 0.25661 16.6863 0.0705742C15.6568 -0.115462 14.5987 0.0687402 13.6779 0.594292C12.757 1.11984 12.0255 1.95702 11.598 2.97451C11.1706 3.99201 11.0714 5.13228 11.316 6.21649C9.44084 6.11517 7.60661 5.59363 5.93245 4.68572C4.2583 3.77781 2.78167 2.50386 1.5985 0.946612C1.18351 1.72072 0.965447 2.59738 0.966 3.48942C0.964528 4.31784 1.15485 5.13379 1.52002 5.86463C1.88519 6.59546 2.41387 7.21851 3.059 7.67829C2.30917 7.6565 1.57537 7.44158 0.92 7.0518V7.11322C0.92562 8.27394 1.30639 9.39695 1.99791 10.2923C2.68943 11.1877 3.64924 11.8004 4.715 12.0269C4.30474 12.1602 3.87881 12.2305 3.45 12.2357C3.15317 12.232 2.85709 12.2032 2.5645 12.1497C2.868 13.1482 3.45532 14.0207 4.24474 14.646C5.03416 15.2713 5.98641 15.6182 6.969 15.6384C5.30978 17.033 3.26127 17.7941 1.15 17.8004C0.765596 17.8017 0.381496 17.7771 0 17.7267C2.15559 19.2134 4.66763 20.0026 7.2335 19.9992C9.00415 20.0189 10.7607 19.6614 12.4006 18.9478C14.0405 18.2342 15.5308 17.1787 16.7845 15.8429C18.0382 14.5072 19.0302 12.9179 19.7024 11.1681C20.3747 9.41824 20.7138 7.54283 20.7 5.65142C20.7 5.44259 20.7 5.22147 20.7 5.00036C21.6024 4.28151 22.3807 3.40027 23 2.39613Z"
                        fill="white" />
                  </svg>

               </a>
            </div>

         </div>
      </div>
   </div>

   <section class="w-full min-h-screen px-4 py-4 lg:px-8 lg:py-8 bg-neutral-800">
        <div class="flex items-center justify-around gap-12 space-x-12 rounded">
    <h1 class="text-3xl font-bold text-white">Our Packages</h1>
    <a href="#" class="px-8 py-4 text-sm font-medium transition rounded-lg dark:text-white bg-lime-700 hover:text-lime-400 ">
      View more
    </a>
  </div>
      <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
         <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card -->
            <div
               class="flex flex-col h-full bg-white border border-gray-200 group dark:bg-neutral-800 dark:border-neutral-700 shadow-2xs rounded-xl">
               <div class="flex flex-col items-center justify-center bg-blue-600 h-52 rounded-t-xl">
                  <svg class="size-28" width="56" height="56" viewBox="0 0 56 56" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <rect width="56" height="56" rx="10" fill="white" />
                     <path
                        d="M20.2819 26.7478C20.1304 26.5495 19.9068 26.4194 19.6599 26.386C19.4131 26.3527 19.1631 26.4188 18.9647 26.5698C18.848 26.6622 18.7538 26.78 18.6894 26.9144L10.6019 43.1439C10.4874 43.3739 10.4686 43.6401 10.5496 43.884C10.6307 44.1279 10.805 44.3295 11.0342 44.4446C11.1681 44.5126 11.3163 44.5478 11.4664 44.5473H22.7343C22.9148 44.5519 23.0927 44.5037 23.2462 44.4084C23.3998 44.3132 23.5223 44.1751 23.5988 44.011C26.0307 38.9724 24.5566 31.3118 20.2819 26.7478Z"
                        fill="url(#paint0_linear_2204_541)" />
                     <path
                        d="M28.2171 11.9791C26.201 15.0912 25.026 18.6755 24.8074 22.3805C24.5889 26.0854 25.3342 29.7837 26.9704 33.1126L32.403 44.0113C32.4833 44.1724 32.6067 44.3079 32.7593 44.4026C32.912 44.4973 33.088 44.5475 33.2675 44.5476H44.5331C44.6602 44.5479 44.7861 44.523 44.9035 44.4743C45.0209 44.4257 45.1276 44.3543 45.2175 44.2642C45.3073 44.1741 45.3785 44.067 45.427 43.9492C45.4755 43.8314 45.5003 43.7052 45.5 43.5777C45.5001 43.4274 45.4659 43.2791 45.3999 43.1441L29.8619 11.9746C29.7881 11.8184 29.6717 11.6864 29.5261 11.594C29.3805 11.5016 29.2118 11.4525 29.0395 11.4525C28.8672 11.4525 28.6984 11.5016 28.5529 11.594C28.4073 11.6864 28.2908 11.8184 28.2171 11.9746V11.9791Z"
                        fill="#2684FF" />
                     <defs>
                        <linearGradient id="paint0_linear_2204_541" x1="24.734" y1="29.2284" x2="16.1543" y2="44.0429"
                           gradientUnits="userSpaceOnUse">
                           <stop offset="0%" stop-color="#0052CC" />
                           <stop offset="0.92" stop-color="#2684FF" />
                        </linearGradient>
                     </defs>
                  </svg>
               </div>
               <div class="p-4 md:p-6">
                  <span class="block mb-1 text-xs font-semibold text-blue-600 uppercase dark:text-blue-500">
                     Atlassian API
                  </span>
                  <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                     Atlassian
                  </h3>
                  <p class="mt-3 text-gray-500 dark:text-neutral-400">
                     A software that develops products for software developers and developments.
                  </p>
               </div>
               <div
                  class="flex mt-auto border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                  <a class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-gray-800 bg-white gap-x-2 rounded-es-xl dark:bg-neutral-800 dark:text-neutral-200 shadow-2xs hover:bg-gray-100 dark:hover:bg-neutral-700 focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none"
                     href="#">
                     View sample
                  </a>
                  <a class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-gray-800 bg-white gap-x-2 rounded-ee-xl dark:bg-neutral-800 dark:text-neutral-200 shadow-2xs hover:bg-gray-100 dark:hover:bg-neutral-700 focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none"
                     href="#">
                     View API
                  </a>
               </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div
               class="flex flex-col h-full bg-white border border-gray-200 group dark:bg-neutral-800 dark:border-neutral-700 shadow-2xs rounded-xl">

               <div class="flex flex-col items-center justify-center h-52 bg-rose-500 rounded-t-xl">
                  <svg class="size-28" width="56" height="56" viewBox="0 0 56 56" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <rect width="56" height="56" rx="10" fill="white" />
                     <g clip-path="url(#clip0_2204_541)">
                        <path
                           d="M37.0409 28.8697C33.1968 28.8697 30.0811 31.9854 30.0811 35.8288C30.0811 39.6726 33.1968 42.789 37.0409 42.789C40.8843 42.789 44 39.6726 44 35.8288C44 31.9854 40.8843 28.8697 37.0409 28.8697ZM18.9594 28.8701C15.116 28.8704 12 31.9854 12 35.8292C12 39.6726 15.116 42.7886 18.9594 42.7886C22.8032 42.7886 25.9192 39.6726 25.9192 35.8292C25.9192 31.9854 22.8032 28.8701 18.9591 28.8701H18.9594ZM34.9595 20.1704C34.9595 24.0138 31.8438 27.1305 28.0004 27.1305C24.1563 27.1305 21.0406 24.0138 21.0406 20.1704C21.0406 16.3269 24.1563 13.2109 28.0003 13.2109C31.8438 13.2109 34.9591 16.3269 34.9591 20.1704H34.9595Z"
                           fill="url(#paint0_radial_2204_541)" />
                     </g>
                     <defs>
                        <radialGradient id="paint0_radial_2204_541" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                           gradientTransform="translate(28.0043 29.3944) scale(21.216 19.6102)">
                           <stop offset="0%" stop-color="#FFB900" />
                           <stop offset="0.6" stop-color="#F95D8F" />
                           <stop offset="0.999" stop-color="#F95353" />
                        </radialGradient>
                        <clipPath id="clip0_2204_541">
                           <rect width="32" height="29.5808" fill="white" transform="translate(12 13.2096)" />
                        </clipPath>
                     </defs>
                  </svg>
               </div>
               <div class="p-4 md:p-6">
                  <span class="block mb-1 text-xs font-semibold uppercase text-rose-600 dark:text-rose-500">
                     Asana API
                  </span>
                  <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                     Asana
                  </h3>
                  <p class="mt-3 text-gray-500 dark:text-neutral-400">
                     Track tasks and projects, use agile boards, measure progress.
                  </p>
               </div>
               <div
                  class="flex mt-auto border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                  <a class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-gray-800 bg-white gap-x-2 rounded-es-xl dark:bg-neutral-800 dark:text-neutral-200 shadow-2xs hover:bg-gray-100 dark:hover:bg-neutral-700 focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none"
                     href="#">
                     View sample
                  </a>
                  <a class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-gray-800 bg-white gap-x-2 rounded-ee-xl dark:bg-neutral-800 dark:text-neutral-200 shadow-2xs hover:bg-gray-100 dark:hover:bg-neutral-700 focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none"
                     href="#">
                     View API
                  </a>
               </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div
               class="flex flex-col bg-white border border-gray-200 h-140 group dark:bg-neutral-800 dark:border-neutral-700 shadow-2xs rounded-xl">
               <div class="flex flex-col items-center justify-center h-52 bg-amber-500 rounded-t-xl">
                  <svg class="size-28" width="56" height="56" viewBox="0 0 56 56" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <rect width="56" height="56" rx="10" fill="white" />
                     <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M23.7326 11.968C21.9637 11.9693 20.5321 13.4049 20.5334 15.1738C20.5321 16.9427 21.965 18.3782 23.7339 18.3795H26.9345V15.1751C26.9358 13.4062 25.5029 11.9706 23.7326 11.968C23.7339 11.968 23.7339 11.968 23.7326 11.968M23.7326 20.5184H15.2005C13.4316 20.5197 11.9987 21.9553 12 23.7242C11.9974 25.4931 13.4303 26.9286 15.1992 26.9312H23.7326C25.5016 26.9299 26.9345 25.4944 26.9332 23.7255C26.9345 21.9553 25.5016 20.5197 23.7326 20.5184V20.5184Z"
                        fill="#36C5F0" />
                     <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M44.0001 23.7242C44.0014 21.9553 42.5684 20.5197 40.7995 20.5184C39.0306 20.5197 37.5977 21.9553 37.599 23.7242V26.9312H40.7995C42.5684 26.9299 44.0014 25.4944 44.0001 23.7242ZM35.4666 23.7242V15.1738C35.4679 13.4062 34.0363 11.9706 32.2674 11.968C30.4985 11.9693 29.0656 13.4049 29.0669 15.1738V23.7242C29.0643 25.4931 30.4972 26.9286 32.2661 26.9312C34.035 26.9299 35.4679 25.4944 35.4666 23.7242Z"
                        fill="#2EB67D" />
                     <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.2661 44.0322C34.035 44.0309 35.4679 42.5953 35.4666 40.8264C35.4679 39.0575 34.035 37.622 32.2661 37.6207H29.0656V40.8264C29.0642 42.594 30.4972 44.0295 32.2661 44.0322ZM32.2661 35.4804H40.7995C42.5684 35.4791 44.0013 34.0436 44 32.2747C44.0026 30.5058 42.5697 29.0702 40.8008 29.0676H32.2674C30.4985 29.0689 29.0656 30.5045 29.0669 32.2734C29.0656 34.0436 30.4972 35.4791 32.2661 35.4804V35.4804Z"
                        fill="#ECB22E" />
                     <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 32.2746C11.9987 34.0435 13.4316 35.479 15.2005 35.4804C16.9694 35.479 18.4024 34.0435 18.401 32.2746V29.0688H15.2005C13.4316 29.0702 11.9987 30.5057 12 32.2746ZM20.5334 32.2746V40.825C20.5308 42.5939 21.9637 44.0295 23.7326 44.0321C25.5016 44.0308 26.9345 42.5952 26.9332 40.8263V32.2772C26.9358 30.5083 25.5029 29.0728 23.7339 29.0702C21.9637 29.0702 20.5321 30.5057 20.5334 32.2746C20.5334 32.2759 20.5334 32.2746 20.5334 32.2746Z"
                        fill="#E01E5A" />
                  </svg>
               </div>
               <div class="p-4 md:p-6">
                  <span class="block mb-1 text-xs font-semibold uppercase text-amber-500">
                     Slack API
                  </span>
                  <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                     Slack
                  </h3>
                  <p class="mt-3 text-gray-500 dark:text-neutral-400">
                     Email collaboration and email service desk made easy.
                  </p>
               </div>
               <div
                  class="flex mt-auto border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                  <a class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-gray-800 bg-white gap-x-2 rounded-es-xl dark:bg-neutral-800 dark:text-neutral-200 shadow-2xs hover:bg-gray-100 dark:hover:bg-neutral-700 focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none"
                     href="#">
                     View sample
                  </a>
                  <a class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-gray-800 bg-white gap-x-2 rounded-ee-xl dark:bg-neutral-800 dark:text-neutral-200 shadow-2xs hover:bg-gray-100 dark:hover:bg-neutral-700 focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none"
                     href="#">
                     View API
                  </a>
               </div>
            </div>
            <!-- End Card -->
         </div>
         <!-- End Grid -->
      </div>

   </section>
   <div class="relative w-full bg-center bg-cover h-150"
      style="background-image: url('https://copilot.microsoft.com/th/id/BCO.399810a3-9e38-40c2-8f9c-ce2b036950ca.png');">
      <div class="absolute inset-0 flex items-center justify-center px-4 sm:px-6 lg:px-8">
         <div class="max-w-2xl text-center text-white">
            <h1 class="mb-6 text-4xl font-bold sm:text-5xl">Reserve A Table Now</h1>

            <a href="#"
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