<div class="bg-white dark:bg-black">
<!-- ========== HEADER ========== -->
<header
    class="fixed top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-48 lg:z-61 w-full bg-zinc-100 text-sm py-2.5 dark:bg-neutral-900">
    <nav class="px-4 sm:px-5.5 flex basis-full items-center w-full mx-auto">
        <div class="w-full flex items-center gap-x-1.5">
            <ul class="flex items-center gap-1.5">
                <li
                    class="inline-flex items-center relative text-gray-200 pe-1.5 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:w-px after:h-3.5 after:bg-gray-300 after:rounded-full after:-translate-y-1/2 after:rotate-12 dark:text-neutral-200 dark:after:bg-neutral-700">
                    <a class="shrink-0 inline-flex justify-center items-center bg-indigo-700 size-8 rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80"
                        href="{{ route('admin.dashboard') }}" aria-label="Preline">
                        <svg class="shrink-0 size-5" width="36" height="36" viewBox="0 0 36 36" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M18.0835 3.23358C9.88316 3.23358 3.23548 9.8771 3.23548 18.0723V35.5832H0.583496V18.0723C0.583496 8.41337 8.41851 0.583252 18.0835 0.583252C27.7485 0.583252 35.5835 8.41337 35.5835 18.0723C35.5835 27.7312 27.7485 35.5614 18.0835 35.5614H16.7357V32.911H18.0835C26.2838 32.911 32.9315 26.2675 32.9315 18.0723C32.9315 9.8771 26.2838 3.23358 18.0835 3.23358Z"
                                class="fill-white" fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M18.0833 8.62162C12.8852 8.62162 8.62666 12.9245 8.62666 18.2879V35.5833H5.97468V18.2879C5.97468 11.5105 11.3713 5.97129 18.0833 5.97129C24.7954 5.97129 30.192 11.5105 30.192 18.2879C30.192 25.0653 24.7954 30.6045 18.0833 30.6045H16.7355V27.9542H18.0833C23.2815 27.9542 27.54 23.6513 27.54 18.2879C27.54 12.9245 23.2815 8.62162 18.0833 8.62162Z"
                                class="fill-white" fill="currentColor" />
                            <path
                                d="M24.8225 18.1012C24.8225 21.8208 21.8053 24.8361 18.0833 24.8361C14.3614 24.8361 11.3442 21.8208 11.3442 18.1012C11.3442 14.3815 14.3614 11.3662 18.0833 11.3662C21.8053 11.3662 24.8225 14.3815 24.8225 18.1012Z"
                                class="fill-white" fill="currentColor" />
                        </svg>
                    </a>

                    <div class="hidden sm:block ms-1">

                    </div>

                    <!-- Sidebar Toggle -->
                    <button type="button"
                        class="p-1.5 size-7.5 inline-flex items-center gap-x-1 text-xs rounded-md border border-transparent text-gray-500 hover:text-gray-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-pro-sidebar"
                        data-hs-overlay="#hs-pro-sidebar">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect width="18" height="18" x="3" y="3" rx="2" />
                            <path d="M15 3v18" />
                            <path d="m10 15-3-3 3-3" />
                        </svg>
                        <span class="sr-only">Sidebar Toggle</span>
                    </button>
                    <!-- End Sidebar Toggle -->
                </li>
            </ul>

            <ul class="flex flex-row items-center gap-x-3 ms-auto">
                

                <li
                    class="inline-flex items-center gap-1.5 relative text-gray-500 pe-3 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:w-px after:h-3.5 after:bg-gray-300 after:rounded-full after:-translate-y-1/2 after:rotate-12 dark:text-neutral-200 dark:after:bg-neutral-700">
                    

                    <div class="h-8">
                        <!-- Account Dropdown -->
                        <div
                            class="hs-dropdown inline-flex [--strategy:absolute] [--auto-close:inside] [--placement:bottom-right] relative text-start">
                            <button id="hs-dnad" type="button"
                                class="p-0.5 inline-flex shrink-0 items-center gap-x-3 text-start rounded-full hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 dark:hover:bg-neutral-800 dark:hover:text-neutral-200 dark:focus:bg-neutral-800 dark:focus:text-neutral-200 dark:text-neutral-500"
                                aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                <img class="shrink-0 size-7 rounded-full"
                                    src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                                    alt="Avatar">
                            </button>

                            <!-- Account Dropdown -->
                            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-60 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-white border border-gray-200 rounded-xl shadow-xl dark:bg-neutral-900 dark:border-neutral-700"
                                role="menu" aria-orientation="vertical" aria-labelledby="hs-dnad">
                                <div class="py-2 px-3.5">
                                    <span class="font-medium text-gray-800 dark:text-neutral-300">
                                        {{-- {{ Auth::user()->name }} --}}
                                    </span>
                                    <p class="text-sm text-gray-500 dark:text-neutral-500">
                                        {{-- {{ Auth::user()->email }} --}}
                                    </p>
                                    <div class="mt-1.5">

                                    </div>
                                </div>
                                <div class="px-4 py-2 border-t border-gray-200 dark:border-neutral-800">
                                    <!-- Switch/Toggle -->
                                    <div class="flex flex-wrap justify-between items-center gap-2">
                                        <span
                                            class="flex-1 cursor-pointer text-sm text-gray-600 dark:text-neutral-400">Theme</span>
                                        <div
                                            class="p-0.5 inline-flex cursor-pointer bg-gray-100 rounded-full dark:bg-neutral-800">
                                            <button type="button"
                                                class="size-7 flex justify-center items-center bg-white shadow-sm text-gray-800 rounded-full dark:text-neutral-200 hs-auto-mode-active:bg-transparent hs-auto-mode-active:shadow-none hs-dark-mode-active:bg-transparent hs-dark-mode-active:shadow-none"
                                                data-hs-theme-click-value="default">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="4" />
                                                    <path d="M12 3v1" />
                                                    <path d="M12 20v1" />
                                                    <path d="M3 12h1" />
                                                    <path d="M20 12h1" />
                                                    <path d="m18.364 5.636-.707.707" />
                                                    <path d="m6.343 17.657-.707.707" />
                                                    <path d="m5.636 5.636.707.707" />
                                                    <path d="m17.657 17.657.707.707" />
                                                </svg>
                                                <span class="sr-only">Default (Light)</span>
                                            </button>
                                            <button type="button"
                                                class="size-7 flex justify-center items-center text-gray-800 rounded-full dark:text-neutral-200 hs-dark-mode-active:bg-white hs-dark-mode-active:shadow-sm hs-dark-mode-active:text-neutral-800"
                                                data-hs-theme-click-value="dark">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
                                                </svg>
                                                <span class="sr-only">Dark</span>
                                            </button>
                                            <button type="button"
                                                class="size-7 flex justify-center items-center text-gray-800 rounded-full dark:text-neutral-200 hs-auto-light-mode-active:bg-white hs-auto-dark-mode-active:bg-red-800 hs-auto-mode-active:shadow-sm"
                                                data-hs-theme-click-value="auto">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <rect width="20" height="14" x="2" y="3" rx="2" />
                                                    <line x1="8" x2="16" y1="21" y2="21" />
                                                    <line x1="12" x2="12" y1="17" y2="21" />
                                                </svg>
                                                <span class="sr-only">Auto (System)</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- End Switch/Toggle -->
                                </div>
                                <div class="p-1 border-t border-gray-200 dark:border-neutral-800">
                                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                        href="#">
                                        <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                            <circle cx="12" cy="7" r="4" />
                                        </svg>
                                        Profile
                                    </a>

                                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                        href="{{ route('login') }}">
                                        <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m16 17 5-5-5-5" />
                                            <path d="M21 12H9" />
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                        </svg>
                                        Log out
                                    </a>
                                </div>
                            </div>
                            <!-- End Account Dropdown -->
                        </div>
                        <!-- End Account Dropdown -->
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ========== END HEADER ========== -->
</div>