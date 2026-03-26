<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <div class="min-h-screen flex items-center justify-center bg-[#0f0f0f] p-4">
  <div class="max-w-4xl w-full bg-[#181818] rounded-2xl shadow-xl overflow-hidden">
    <div class="p-6 sm:p-8 lg:p-12">
      
      <div class="text-center">
        <h3 class="block text-3xl lg:text-4xl font-extrabold bg-gradient-to-r text-neutral-50 bg-clip-text ">
          Registration Form
        </h3>
      </div>

      <form class="mt-6 ">
        <div class="grid gap-y-5">

          <!-- Full Name -->
          <div class="relative">
            <input typ
e="text" placeholder="Full Name"
              class="py-3 pl-4 pr-4 w-full  border-b placeholder-neutral-300 border-gray-200  text-sm focus:border-green-500 focus:ring-green-200">
          </div>

          <div class="relative">
            <input type="email" placeholder="Email Address"
              class="py-3 pl-4 pr-4 w-full  border-b placeholder-neutral-300 border-gray-200  text-sm focus:border-green-500 focus:ring-green-200">
          </div>

    
          <div class="relative">
            <input type="text" placeholder="Phone Number"
              class="py-3 pl-4 pr-4 w-full placeholder-neutral-300 border-b border-gray-200  text-sm focus:border-green-500 focus:ring-green-200">
          </div>

          <div class="relative">
            <input type="text" placeholder="Address"
              class="py-3 pl-4 pr-4 w-full border-b  placeholder-neutral-300 border-gray-200  text-sm focus:border-green-500 focus:ring-green-200">
          </div>

          
          <div class="relative">
            <input type="password" placeholder="Password"
              class="py-3 pl-4 pr-4 w-full  border-b placeholder-neutral-300 border-gray-200  text-sm focus:border-green-500 focus:ring-green-200">
          </div>

          <div class="relative">
            <input type="password" placeholder="Confirm Password"
              class="py-3 pl-4 pr-4 w-full placeholder-neutral-300  border-b border-gray-200  text-sm focus:border-green-500 focus:ring-green-200">
          </div>

         
          <div class="flex flex-col sm:flex-row gap-4">
            <button type="submit"
              class="w-full py-3 text-white ">
              Register
            </button>

            <button id="btn-cancel" type="reset"
              class="w-full py-3 text-white bg-red-500  ">
              Cancel
            </button>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>
    {{-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius --}}
</div>