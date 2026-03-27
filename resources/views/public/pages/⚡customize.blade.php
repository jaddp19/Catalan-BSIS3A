<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <div class="py-12 bg-neutral-50 dark:bg-[#0f0f0f]">
  <div class="max-w-4xl px-12 py-6 mx-auto dark:bg-[#181818] shadow-[0_20px_50px_rgba(0,0,0,0.5)] ">
    <h2 class="mb-8 text-3xl font-bold text-center text-black dark:text-white">
      Customize Your Menu
    </h2>

    <form class="grid grid-cols-1 gap-6 md:grid-cols-2 ">
      <div class="md:col-span-2">
        <label class="block mb-2 text-sm font-medium text-black dark:text-white">Full Name</label>
        <input type="text" placeholder="Enter your name"
          class="w-full px-4 py-3 text-black bg-transparent border-b border-gray-300 dark:border-neutral-600 dark:text-white focus:outline-none focus:ring-0 focus:border-gray-400"
          required>
      </div>

      <div>
        <label class="block mb-2 text-sm font-medium text-black dark:text-white">Number of Guests</label>
       <input type="text" placeholder="Guest quantity"
          class="w-full px-4 py-3 text-black bg-transparent border-b border-gray-300 dark:border-neutral-600 dark:text-white fucos:ring-0 focus:outline-none"
          required>
      </div>

      <div>
        <label class="block mb-2 text-sm font-medium text-black dark:text-white">Choose Package</label>
        <select
          class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-transparent border-b border-gray-300 dark:border-neutral-500 dark:text-neutral-200 dark:placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm dark:bg-[#181818]"
          required>
          <option value="" disabled selected>Select a package</option>
          <option>Wedding Package</option>
          <option>Corporate Package</option>
          <option>Private Party Package</option>
          <option>Custom Package</option>
        </select>
      </div>
      <div>
        <label class="block mb-2 text-sm font-medium text-black dark:text-white">Package Quantity</label>
        <input type="number" min="1" placeholder="Quantity"
          class="w-full px-4 py-3 text-black bg-transparent border-b border-gray-300 dark:border-neutral-600 dark:text-white fucos:ring-0 focus:outline-none"
          required>
      </div>

      <div>
        <label class="block mb-2 text-sm font-medium text-black dark:text-white">Dessert</label>
        <select
          class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-transparent border-b border-gray-300 dark:border-neutral-500 dark:text-neutral-200 dark:placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm dark:bg-[#181818]"
          required>
          <option value="" disabled selected>Select dessert</option>
          <option>Cake</option>
          <option>Ice Cream</option>
          <option>Fruit Platter</option>
          <option>Pastries</option>
        </select>
      </div>
      <div>
        <label class="block mb-2 text-sm font-medium text-black dark:text-white">Dessert Quantity</label>
        <input type="number" min="1" placeholder="Quantity"
          class="w-full px-4 py-3 text-black bg-transparent border-b border-gray-300 dark:border-neutral-600 dark:text-white fucos:ring-0 focus:outline-none"
          required>
      </div>
      
      <div>
        <label class="block mb-2 text-sm font-medium text-black dark:text-white">Drinks</label>
        <select
          class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-transparent border-b border-gray-300 dark:border-neutral-500 dark:text-neutral-200 dark:placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm dark:bg-[#181818]"
          required>
          <option value="" disabled selected>Select drink</option>
          <option>Juice</option>
          <option>Soda</option>
          <option>Coffee</option>
          <option>Tea</option>
          <option>Wine</option>
        </select>
      </div>
      <div>
        <label class="block mb-2 text-sm font-medium text-black dark:text-white">Drink Quantity</label>
        <input type="number" min="1" placeholder="Quantity"
          class="w-full px-4 py-3 text-black bg-transparent border-b border-gray-300 dark:border-neutral-600 dark:text-white fucos:ring-0 focus:outline-none"
          required>
      </div>

      <div class="md:col-span-2">
        <label class="block mb-2 text-sm font-medium text-black dark:text-white">Extras</label>
        <div class="grid grid-cols-2 gap-3 sm:grid-cols-3">
          <label class="flex items-center gap-2 dark:text-neutral-50">
            <input type="checkbox" class="rounded "> Extra Sauce
          </label>
          <label class="flex items-center gap-2 dark:text-neutral-50">
            <input type="checkbox" class="rounded "> Side Salad
          </label>
          <label class="flex items-center gap-2 dark:text-neutral-50">
            <input type="checkbox" class="rounded "> Bread Rolls
          </label>
          <label class="flex items-center gap-2 dark:text-neutral-50">
            <input type="checkbox" class="rounded "> Cheese Platter
          </label>
              <label class="flex items-center gap-2 dark:text-neutral-50">
            <input type="checkbox" class="rounded "> Extra Sugar
          </label>
        </div>
      </div>

      <div>
        <label class="block mb-2 text-sm font-medium text-black dark:text-white">Reservation Date</label>
         <input type="date" class="appearance-none w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-transparent border-b border-gray-300 
             dark:border-neutral-500 dark:text-neutral-200 dark:placeholder-gray-400 
             focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm 
             dark:[&::-webkit-calendar-picker-indicator]:filter dark:[&::-webkit-calendar-picker-indicator]:invert"
                                required>
      </div>

      <div>
        <label class="block mb-2 text-sm font-medium text-black dark:text-white">Reservation Time</label>
      <input type="time" class="appearance-none w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-transparent border-b border-gray-300 
             dark:border-neutral-500 dark:text-neutral-200 dark:placeholder-gray-400 
             focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm 
             dark:[&::-webkit-calendar-picker-indicator]:filter dark:[&::-webkit-calendar-picker-indicator]:invert"
            required>
      </div>

      <div class="md:col-span-2">
        <label class="block mb-2 text-sm font-medium text-black dark:text-white">Special Instructions</label>
        <textarea rows="3" placeholder="Add any notes here..."
          class="w-full px-4 py-3 text-black bg-transparent border-b border-gray-300 dark:border-neutral-600 dark:text-white fucos:ring-0 focus:outline-none"></textarea>
      </div>
    </form>
    
    <div class="flex gap-4 pt-6">
      <button type="submit"
        class="flex-1 px-6 py-3 text-sm font-medium text-white transition fucos:ring-0 ">
        Reserve
      </button>
      <button id="btn-cancel" type="reset"
        class="flex-1 px-6 py-3 text-sm font-medium text-white transition fucos:ring-0">
        Cancel
      </button>
    </div>
  </div>
</div>
    {{-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca --}}
</div>