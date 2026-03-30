<?php

use Livewire\Component;
use App\Models\Menu;
use Livewire\Attributes\Computed;
new class extends Component {

    #[Computed]
    public function drinkMenus()
    {
        return Menu::select('id', 'menu_name', 'image', 'description', 'price')->where('type_of_menu', 'drink')->get();
    }

    #[Computed]
    public function foodMenus()
    {
        return Menu::select('id', 'menu_name', 'image', 'description', 'price')->where('type_of_menu', 'food')->get();
    }

    #[Computed]
    public function dessertMenus()
    {
        return Menu::select('id', 'menu_name', 'image', 'description', 'price')->where('type_of_menu', 'dessert')->get();
    }
};
?>

<div>
    <div class="relative bg-neutral-700">
        <div class="max-w-6xl px-4 py-10 mx-auto bg-neutral-700 sm:px-6 lg:px-8 lg:py-14 dark:bg-neutral-700">
            <button class="flex items-center justify-center transition-colors rounded-full dark:hover:bg-lime-700">
                <a href="/" wire:navigate
                    class="inline-flex items-center gap-2 px-4 py-2 font-medium dark:text-neutral-200">
                    <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.995 4.00409H3.40501L5.70501 1.71409C5.89332 1.52579 5.9991 1.27039 5.9991 1.00409C5.9991 0.73779 5.89332 0.482395 5.70501 0.294091C5.51671 0.105788 5.26132 0 4.99501 0C4.72871 0 4.47332 0.105788 4.28501 0.294091L0.285014 4.29409C0.193973 4.38919 0.122608 4.50134 0.0750135 4.62409C-0.0250045 4.86755 -0.0250045 5.14063 0.0750135 5.38409C0.122608 5.50684 0.193973 5.61899 0.285014 5.71409L4.28501 9.71409C4.37798 9.80782 4.48858 9.88221 4.61044 9.93298C4.7323 9.98375 4.863 10.0099 4.99501 10.0099C5.12703 10.0099 5.25773 9.98375 5.37959 9.93298C5.50145 9.88221 5.61205 9.80782 5.70501 9.71409C5.79874 9.62113 5.87314 9.51053 5.9239 9.38867C5.97467 9.26681 6.00081 9.1361 6.00081 9.00409C6.00081 8.87208 5.97467 8.74137 5.9239 8.61951C5.87314 8.49765 5.79874 8.38706 5.70501 8.29409L3.40501 6.00409H12.995C13.2602 6.00409 13.5146 5.89874 13.7021 5.7112C13.8897 5.52366 13.995 5.26931 13.995 5.00409C13.995 4.73887 13.8897 4.48452 13.7021 4.29698C13.5146 4.10945 13.2602 4.00409 12.995 4.00409Z"
                            fill="white" />
                    </svg>
                    <span class="text-white dark:bg-neutral-50">Back</span>
                </a>
            </button>

            <div class="max-w-2xl mx-auto mb-10 text-center lg:mb-14">
                <h2 class="text-2xl font-bold text-gray-200 md:text-4xl md:leading-tight dark:text-neutral-100">
                    Our Menus
                </h2>
                <p class="mt-1 text-gray-200 dark:text-neutral-200">
                    Explore our signature dishes and popular packages. Found something you love, or have a specific
                    vision in mind? Every menu is a starting point—contact us to craft your bespoke culinary journey.
                </p>
            </div>

            <div class="py-6 ">
                <div class="flex items-center justify-start py-5">
                    <div class="flex items-center justify-between w-[80rem] lg:flex-row flex-col ">
                        <div class="flex space-x-12">
                            <h1 class="text-3xl font-bold text-white">Our Foods</h1>
                        </div>
                    </div>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($this->foodMenus as $food)
                    <div
                        class="flex flex-col overflow-hidden transition shadow-sm -gray-200 rounded-xl hover:shadow-md bg-white dark:bg-neutral-100">
                        <img class="object-cover w-full h-72"
                            src="{{ asset('storage/' . $food->image) }}"
                            alt="Hero">
                        <div class="p-5 ">
                            <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-900">
                              {{ $food->menu_name }}
                            </h3>
                            <div>
                                <span class="text-base font-bold text-neutral-800 dark:text-neutral-900">₱{{ number_format($food->price, 2) }}
                                </span>
                            </div>
                            <p class="mt-2 text-sm text-neutral-800 dark:text-neutral-800">
                                {{ $food->description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="flex items-center justify-start py-5">
                    <div class="flex items-center justify-between w-[80rem] lg:flex-row flex-col ">
                        <div class="flex space-x-12">
                            <h1 class="text-3xl font-bold text-white">Our Drinks</h1>
                        </div>
                    </div>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($this->drinkMenus as $drink)
                    <div
                        class="flex flex-col overflow-hidden transition shadow-sm -gray-200 rounded-xl hover:shadow-md bg-white dark:bg-neutral-100">
                        <img class="object-cover w-full h-72"
                            src="{{ asset('storage/' . $drink->image) }}"
                            alt="Hero">
                        <div class="p-5 ">
                            <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-900">
                              {{ $drink->menu_name }}
                            </h3>
                            <div>
                                <span class="text-base font-bold text-neutral-800 dark:text-neutral-900">₱{{ number_format($drink->price, 2) }}
                                </span>
                            </div>
                            <p class="mt-2 text-sm text-neutral-800 dark:text-neutral-800">
                                {{ $drink->description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="flex items-center justify-start py-5">
                    <div class="flex items-center justify-between w-[80rem] lg:flex-row flex-col ">
                        <div class="flex space-x-12">
                            <h1 class="text-3xl font-bold text-white">Our Desserts</h1>
                        </div>
                    </div>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($this->dessertMenus as $dessert)
                    <div
                        class="flex flex-col overflow-hidden transition shadow-sm -gray-200 rounded-xl hover:shadow-md bg-white dark:bg-neutral-100">
                        <img class="object-cover w-full h-72"
                            src="{{ asset('storage/' . $dessert->image) }}"
                            alt="Hero">
                        <div class="p-5 ">
                            <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-900">
                              {{ $dessert->menu_name }}
                            </h3>
                            <div>
                                <span class="text-base font-bold text-neutral-800 dark:text-neutral-900">₱{{ number_format($dessert->price, 2) }}
                                </span>
                            </div>
                            <p class="mt-2 text-sm text-neutral-800 dark:text-neutral-800">
                                {{ $dessert->description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            <div class="max-w-2xl mx-auto mb-10 space-y-3 text-center lg:mb-14">
                <h2 class="text-2xl font-bold text-gray-200 md:text-4xl md:leading-tight dark:text-neutral-100">
                    Planning a large-scale event?
                </h2>
                <p class="mt-1 text-gray-200 dark:text-neutral-200">
                    For gatherings of 200+ guests, we offer volume pricing and dedicated on-site management. Contact our
                    corporate team to discuss customized bulk packages and full-service staffing options.
                </p>

                <a href="/customize" id="customize"
                    class="inline-block px-6 py-3 mb-6 font-semibold text-white transition rounded-lg shadow-lg ">
                    Reserve Your Custom Menu
                </a>
            </div>
        </div>
    </div>
</div>
