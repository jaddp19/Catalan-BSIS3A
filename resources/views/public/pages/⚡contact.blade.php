<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
      <div class="bg-[#0f0f0f]">
     <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-bold mb-6 text-white">Contact Us</h1>
        <p class="mb-8 text-white">
            We’d love to hear from you! Whether it’s a catering inquiry, feedback, or a special request,
            please fill out the form below and our team will get back to you promptly.
        </p>

        <div class="bg-[#181818] rounded-lg shadow-lg p-6 sm:p-8">
            <form action=""  class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-300">Full Name</label>
                    <input type="text" id="name" name="name"
                        class="mt-1 p-2 block w-full rounded-md border border-gray-600 bg-transparent text-white placeholder-gray-400 focus:border-lime-500 focus:ring-lime-500 sm:text-sm"
                        placeholder="Your name" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300">Email Address</label>
                    <input type="email" id="email" name="email"
                        class="mt-1 block p-2 w-full rounded-md border border-gray-600 bg-transparent text-white placeholder-gray-400 focus:border-lime-500 focus:ring-lime-500 sm:text-sm"
                        placeholder="you@example.com" required>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-300">Message</label>
                    <textarea id="message" name="message" rows="5"
                        class="mt-1 block w-full p-2 rounded-md border border-gray-600 bg-transparent text-white placeholder-gray-400 focus:border-lime-500 focus:ring-lime-500 sm:text-sm"
                        placeholder="Write your message here..." required></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="inline-flex items-center px-6 py-2 rounded-md bg-lime-600 text-white font-semibold hover:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500">
                        Send Message
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-10 text-gray-300">
            <h2 class="text-xl font-semibold text-white mb-4">Other Ways to Reach Us</h2>
            <p><strong>Email:</strong> is3a@3acaretoring.com</p>
            <p><strong>Phone:</strong> +639213229667</p>
            <p><strong>Address:</strong> Pablo St. Good Item, Victorias City, Negros Occidental, Philippines</p>
        </div>
    </div>
    </div>
    {{-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead --}}
</div>