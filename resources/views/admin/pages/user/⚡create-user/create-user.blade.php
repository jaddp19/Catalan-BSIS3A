<div>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="mt-12 max-w-full mx-auto">
            <!-- Card -->
            <div class="flex flex-col border border-gray-200 rounded-xl p-4 sm:p-6 lg:p-8 dark:border-neutral-700">

                <!-- Back Button -->
                <div class="mb-4">
                    <a href="{{ route('admin.user.view') }}"
                        class="inline-flex items-center gap-x-2 px-3 py-2 text-sm font-medium
                            border border-gray-200 rounded-lg bg-white text-gray-700
                            hover:bg-gray-50 hover:text-blue-600
                            dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800">
                        <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 15l-6-6 6-6" />
                        </svg>
                        <span>Back</span>
                    </a>
                </div>

                <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-neutral-200">
                    Create User
                </h2>

                <form wire:submit.prevent="create">
                    <div class="grid gap-4 lg:gap-6">
                        <!-- Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label for="hs-name"
                                    class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Name</label>
                                <input wire:model.defer="name" type="text" id="hs-name"
                                    class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm 
                                    focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 
                                    dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="hs-email"
                                    class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Email</label>
                                <input wire:model.defer="email" type="email" id="hs-email"
                                    class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm 
                                    focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 
                                    dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <!-- Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label for="hs-phone"
                                    class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Phone Number</label>
                                <input wire:model.defer="phone_number" type="text" id="hs-phone"
                                    class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm 
                                    focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 
                                    dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="e.g. 09123456789">
                                @error('phone_number') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="hs-password"
                                    class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Password</label>
                                <input wire:model.defer="password" type="password" id="hs-password"
                                    class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm 
                                    focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 
                                    dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="hs-password-confirmation"
                                    class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Confirm Password</label>
                                <input wire:model.defer="password_confirmation" type="password" id="hs-password-confirmation"
                                    class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm 
                                    focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 
                                    dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                @error('password_confirmation') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mt-5">
                            <h2 class="mb-1 text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Assign Role
                            </h2>
                        </div>
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-2">
                            @foreach($this->roles as $role)
                                <label class="flex items-center p-3 w-full border dark:border-neutral-700 rounded-lg text-sm">
                                    <input type="checkbox" 
                                        value="{{ $role->name }}"
                                        x-data
                                        x-init="$watch('$wire.selectedRole', value => {
                                            $el.checked = value === '{{ $role->name }}';
                                        })"
                                        @click="$wire.set('selectedRole', '{{ $role->name }}')"
                                        class="shrink-0 size-4 rounded-sm text-primary">
                                    <span class="ms-3 text-muted-foreground-1 dark:text-amber-50">
                                        {{ Str::ucfirst($role->name) }}
                                    </span>
                                </label>
                            @endforeach
                            @error('selectedRole') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!-- End Grid -->

                    <div class="mt-6 grid">
                        <button type="submit"
                            class="w-50 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium 
                            rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 
                            focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Save
                        </button>
                    </div>
                </form>
            </div>
            <!-- End Card -->
        </div>
    </div>
</div>
