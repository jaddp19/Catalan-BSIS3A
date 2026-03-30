<div>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="flex flex-col">
        <div class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-md [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
            <div class="min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">

                    <!-- Header -->
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                Menus
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                Manage menu items
                            </p>
                            @can('deleteAny', App\Models\Menu::class)
                            <!-- Delete Selected -->
                            @if(!empty($selectedMenus))
                                <div class="py-2">
                                    <button 
                                        x-data 
                                        @click="
                                            if (confirm('Are you sure you want to delete ' + {{ count($selectedMenus) }} + ' menu item(s)?')) {
                                                $wire.deleteSelected()
                                            }
                                        "
                                        id="btn-cancel"
                                        class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                                        Delete Selected ({{ count($selectedMenus) }})
                                    </button>
                                </div>
                            @endif
                            @endcan
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                @can('create', \App\Models\Menu::class)
                                <a href="{{ route('admin.menu.create') }}"
                                   class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                    Add Menu
                                </a>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700 text-xs sm:text-sm">
                        <thead class="bg-gray-50 dark:bg-neutral-800">
                            <tr>
                                <th class="ps-2 sm:ps-6 py-3">
                                    <input type="checkbox"
                                        wire:click="toggleSelectAll"
                                        @checked($selectAll)
                                        x-data
                                        x-init="$watch('$wire.selectedMenus', value => {
                                            const total = {{ $this->totalMenusCount }};
                                            const selected = value.length;
                                            $el.indeterminate = selected > 0 && selected < total;
                                            $el.checked = selected === total;
                                        })"
                                        class="border-gray-300 rounded-sm text-blue-600">
                                </th>
                                <th class="ps-2 sm:ps-6 py-3 text-start font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                    Menu Item
                                </th>
                                <th class="px-2 sm:px-6 py-3 text-start font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                    Type
                                </th>
                                <th class="px-2 sm:px-6 py-3 text-start font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                    Price
                                </th>
                                <th class="hidden md:table-cell px-2 sm:px-6 py-3 text-center font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                    Image
                                </th>
                                <th class="px-2 sm:px-6 py-3 text-end"></th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @forelse ($this->menus as $menu)
                                <tr>
                                    <td class="w-4 ps-2 sm:ps-6 py-3 text-center align-middle">
                                        <input type="checkbox"
                                            wire:click="toggleRowSelection({{ $menu->id }})"
                                            wire:click="toggleRowSelection({{ $menu->id }})"
                                            x-data
                                            x-bind:checked="@js($selectedMenus).includes({{ $menu->id }})"
                                            class="border-gray-300 rounded-sm text-blue-600 align-middle">
                                    </td>
                                    <td class="px-2 sm:px-6 py-3">
                                        <span class="block font-semibold text-gray-800 dark:text-neutral-200">
                                            {{ $menu->menu_name }}
                                        </span>
                                    </td>
                                    <td class="px-2 sm:px-6 py-3">
                                        <span class="block text-gray-500 dark:text-neutral-500">
                                            {{ ucfirst($menu->type_of_menu) }}
                                        </span>
                                    </td>
                                    <td class="px-2 sm:px-6 py-3">
                                        <span class="block text-gray-500 dark:text-neutral-500">
                                            ₱{{ number_format($menu->price, 2) }}
                                        </span>
                                    </td>
                                    <td class="px-2 sm:px-6 py-3 text-center">
                                        @if($menu->image)
                                            <img src="{{ asset('storage/' . $menu->image) }}" 
                                                alt="{{ $menu->menu_name }}" 
                                                class="w-16 h-16 object-cover rounded-lg border border-gray-300 dark:border-neutral-600 mx-auto">
                                        @else
                                            <span class="text-gray-400 text-sm">No image</span>
                                        @endif
                                    </td>

                                    @can('update', $menu)
                                    <td class="px-2 sm:px-6 py-1.5 text-center">
                                        <a href="{{ route('admin.menu.edit', $menu->id) }}"
                                           class="text-blue-600 hover:underline dark:text-blue-500">
                                            Edit
                                        </a>
                                    </td>
                                    @endcan
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-2 sm:px-6 py-4 text-center text-gray-500 dark:text-neutral-400">
                                        No menus found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                        <div>
                            <p class="text-sm text-gray-500 dark:text-neutral-400">
                                <span class="font-semibold text-gray-600 dark:text-neutral-200">
                                    {{ $this->menus->total() }}
                                </span>
                                results
                            </p>
                        </div>
                        <div>
                            <div class="inline-flex gap-x-2">
                                {{-- Prev Button --}}
                                @if($this->menus->onFirstPage())
                                    <button disabled class="px-4 py-2 inline-flex items-center justify-center gap-x-1 text-sm font-medium rounded-md border bg-gray-100 text-gray-400 cursor-not-allowed">
                                        Prev
                                    </button>
                                @else
                                    <button wire:click="previousPage" class="px-4 py-2 inline-flex items-center justify-center gap-x-1 text-sm font-medium rounded-md border bg-white text-gray-800 hover:bg-gray-100 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                        Prev
                                    </button>
                                @endif

                                {{-- Next Button --}}
                                @if($this->menus->hasMorePages())
                                    <button wire:click="nextPage" class="px-4 py-2 inline-flex items-center justify-center gap-x-0 text-sm font-medium rounded-md border bg-white text-gray-800 hover:bg-gray-100 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                        Next
                                    </button>
                                @else
                                    <button disabled class="px-4 py-2 inline-flex items-center justify-center gap-x-0 text-sm font-medium rounded-md border bg-gray-100 text-gray-400 cursor-not-allowed">
                                        Next
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- End Footer -->

                </div>
            </div>
        </div>
    </div>
</div>

</div>