<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <div class="p-6 dark:bg-neutral-700">
        <div class="p-6 dark:bg-neutral-800 max-w-[90rem] mx-auto overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 max-w-[85rem] mx-auto p-5">
                <div class="relative">
                    <img src="https://i.pinimg.com/736x/6e/5a/00/6e5a002d8cc07ad5e7af4200abfb8d9a.jpg"
                        alt="Reservation Food" class="object-cover ">

                  <div class="p-6 space-y-2">
                    
  <h4 class="text-lg font-semibold text-gray-800 sm:text-xl md:text-2xl dark:text-neutral-300">
    Executive Roast Service
  </h4>
  <p class="text-base font-bold text-gray-800 sm:text-lg md:text-xl dark:text-neutral-300">
    ₱280.00
  </p>
  <p class="text-sm leading-relaxed text-gray-600 sm:text-base md:text-lg dark:text-neutral-300">
    Tonkatsu broth, wonton dumplings, ramen noodles, bamboo shoots, menma
  </p>
</div>

                </div>

                <div class="p-6 text-center sm:p-8">
                    <div class="flex flex-col">
                        <h3 class="mb-2 text-4xl font-bold text-gray-800 dark:text-neutral-200">Online Reservation</h3>
                        <p class="mb-4 text-sm text-gray-600 dark:text-neutral-300">
                            <span>Reservation Request: +639812392667</span>
                            <span> Email: comevisit@3acatering.com <br>
                                or fill out the order form.</span>
                        </p>
                    </div>
                    <form class="grid grid-cols-1 lg:grid-cols-2 gap-x-5 gap-y-6">

                        <div>
                            <input type="text" placeholder="Full name"
                                class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-transparent border-b border-gray-300 dark:border-neutral-500 dark:text-neutral-50 dark:placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm"
                                required>
                        </div>

                        <div>
                            <input type="tel" placeholder="Phone Number"
                                class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-transparent border-b border-gray-300 dark:border-neutral-500 dark:text-neutral-50 dark:placeholder-gray-400 sm:text-sm focus:outline-none focus:ring-0 focus:border-gray-400"
                                required>
                        </div>

                        <div>
                            <select
                                class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-transparent border-b border-gray-300 dark:border-neutral-500 dark:text-neutral-200 dark:placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm dark:bg-neutral-800">
                                <option value="" disabled selected>Guest</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4+</option>
                            </select>
                        </div>

                        <div>
                            <input type="number" min="1" placeholder="Quantity" class="appearance-none w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-transparent border-b border-gray-300 
             dark:border-neutral-500 dark:text-neutral-200 dark:placeholder-gray-400 
             focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm 
             dark:[&::-webkit-inner-spin-button]:filter dark:[&::-webkit-inner-spin-button]:invert 
             dark:[&::-webkit-outer-spin-button]:filter dark:[&::-webkit-outer-spin-button]:invert" required>
                        </div>

                        <div>
                            <input type="date" class="appearance-none w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-transparent border-b border-gray-300 
             dark:border-neutral-500 dark:text-neutral-200 dark:placeholder-gray-400 
             focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm 
             dark:[&::-webkit-calendar-picker-indicator]:filter dark:[&::-webkit-calendar-picker-indicator]:invert"
                                required>
                        </div>

                        <div>
                            <input type="time" class="appearance-none w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-transparent border-b border-gray-300 
             dark:border-neutral-500 dark:text-neutral-200 dark:placeholder-gray-400 
             focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm 
             dark:[&::-webkit-calendar-picker-indicator]:filter dark:[&::-webkit-calendar-picker-indicator]:invert"
                                required>
                        </div>

                        <div class="lg:col-span-2">
                            <textarea rows="3" placeholder="Message"
                                class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-transparent border-b border-gray-300 dark:border-neutral-500 dark:text-neutral-200 dark:placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm"></textarea>
                        </div>
                    </form>

                    <div class="flex gap-3 pt-4">
                        <button id="btn-reserve" type="submit"
                            class="flex-1 px-4 py-3 text-sm font-medium text-white transition bg-green-600 hover:bg-green-700 focus:ring-2 focus:ring-green-500">
                            Reserve
                        </button>
                        <button id="btn-cancel" type="reset"
                            class="flex-1 px-4 py-3 text-sm font-medium text-white transition bg-red-600 hover:bg-red-700 focus:ring-2 focus:ring-red-500">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Nothing worth having comes easy. - Theodore Roosevelt --}}
</div>