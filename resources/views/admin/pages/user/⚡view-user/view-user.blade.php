<div>
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-md [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div class="min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                        
                        <!-- Header -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Users</h2>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">Manage and view all users</p>
                                @can('deleteAny', App\Models\User::class)
                                <!-- Only shows if the checkbox in thead or td is clicked -->
                                @if(!empty($selectedUsers))
                                    <div class="py-2">
                                        <button 
                                            x-data 
                                            @click="
                                                if (confirm('Are you sure you want to delete ' + {{ count($selectedUsers) }} + ' post(s)?')) {
                                                    $wire.deleteSelected()
                                                }
                                            "
                                            id="btn-cancel"
                                            class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                                            Delete Selected ({{ count($selectedUsers) }})
                                        </button>
                                    </div>
                                @endif
                                @endcan
                            </div>
                            <div>
                                <div class="inline-flex gap-x-2">
                                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800"
                                       href="{{ route('admin.user.view') }}">
                                        View all
                                    </a>
                                    @can('create', App\Models\User::class)
                                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                        href="{{ route('admin.user.create') }}">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Add User
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
                                            x-data
                                            x-init="$watch('$wire.selectedUsers', value => {
                                                const total = {{ $this->totalUsersCount }};
                                                const selected = value.length;
                                                $el.indeterminate = selected > 0 && selected < total;
                                                $el.checked = selected === total;
                                            })"
                                            class="border-gray-300 rounded-sm text-blue-600">
                                    </th>
                                    <th class="ps-6 py-3 text-start text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">Name</th>
                                    <th class="hidden sm:table-cell px-6 py-3 text-start text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">Email</th>
                                    <th class="hidden sm:table-cell px-6 py-3 text-start text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">Role</th>
                                    <th class="hidden md:table-cell px-6 py-3 text-start text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">Created</th>
                                    <th class="px-6 py-3 text-end"></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                @forelse($this->users as $user)
                                    <tr>
                                        <td class="w-4 ps-2 sm:ps-6 py-3 text-center align-middle">
                                            <input type="checkbox"
                                                wire:click="toggleRowSelection({{ $user->id }})"
                                                x-data
                                                x-bind:checked="@js($selectedUsers).includes({{ $user->id }})"
                                                class="border-gray-300 rounded-sm text-blue-600 align-middle">
                                        </td>
                                        <td class="px-6 py-3">
                                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">
                                                {{ $user->name }}
                                            </span>
                                        </td>
                                        <td class="hidden sm:table-cell px-6 py-3">
                                            <span class="block text-sm text-gray-500 dark:text-neutral-500">
                                                {{ $user->email }}
                                            </span>
                                        </td>
                                        <td class="hidden sm:table-cell px-6 py-3">
                                            <span class="block text-sm text-gray-500 dark:text-neutral-500">
                                                {{ \Illuminate\Support\Str::ucfirst($user->roles->pluck('name')->join(', ') ?: 'No role') }}
                                            </span>
                                        </td>
                                        <td class="hidden md:table-cell px-6 py-3">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                {{ $user->created_at->diffForHumans() }}
                                            </span>
                                        </td>
                                        @can('update', $user)
                                        <td class="px-6 py-1.5">
                                            <div class="flex items-center justify-start gap-6">
                                                <a href="{{ route('admin.user.edit', $user->id) }}"
                                                class="text-sm text-blue-600 hover:underline dark:text-blue-500">
                                                    Edit
                                                </a>
                                            </div>
                                        </td>
                                        @endcan
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-4 text-center text-gray-500 dark:text-neutral-400">
                                            No users found.
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
                                        {{ $this->users->total() }}
                                    </span>
                                    results
                                </p>  
                            </div>
                            <div>
                                <div class="inline-flex gap-x-2">
                                    
                                    {{-- Prev Button --}}
                                    @if($this->users->onFirstPage()) 
                                        <button disabled
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-1 text-sm font-medium rounded-md border bg-gray-100 text-gray-400 cursor-not-allowed">
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 15l-6-6 6-6" />
                                            </svg>
                                            Prev
                                        </button>
                                    @else
                                        <button wire:click="previousPage"
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-1 text-sm font-medium rounded-md border bg-white text-gray-800 hover:bg-gray-100 hover:shadow-md transition-all duration-200 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700">
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 15l-6-6 6-6" />
                                            </svg>
                                            Prev
                                        </button>
                                    @endif

                                    {{-- Next Button --}}
                                    @if($this->users->hasMorePages())
                                        <button wire:click="nextPage"
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-0 text-sm font-medium rounded-md border bg-white text-gray-800 hover:bg-gray-100 hover:shadow-md transition-all duration-200 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700">
                                            Next
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 3l6 6-6 6" />
                                            </svg>
                                        </button>
                                    @else
                                        <button disabled
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-0 text-sm font-medium rounded-md border bg-gray-100 text-gray-400 cursor-not-allowed">
                                            Next
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 3l6 6-6 6" />
                                            </svg>
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
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
</div>
