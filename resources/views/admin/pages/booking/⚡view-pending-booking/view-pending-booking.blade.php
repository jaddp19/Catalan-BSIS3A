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
                                    Pending Bookings
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Manage reservations
                                </p>
                                @can('deleteAny', App\Models\Booking::class)
                                <!-- Delete Selected -->
                                @if(!empty($selectedBookings))
                                    <div class="py-2">
                                        <button 
                                            x-data 
                                            @click="
                                                if (confirm('Are you sure you want to delete ' + {{ count($selectedBookings) }} + ' booking(s)?')) {
                                                    $wire.deleteSelected()
                                                }
                                            "
                                            id="btn-cancel"
                                            class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                                            Delete Selected ({{ count($selectedBookings) }})
                                        </button>
                                    </div>
                                @endif
                                @endcan
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
                                        x-init="$watch('$wire.selectedBookings', value => {
                                            const total = {{ $this->totalBookingsCount }};
                                            const selected = value.length;
                                            $el.indeterminate = selected > 0 && selected < total;
                                            $el.checked = selected === total;
                                        })"
                                        class="border-gray-300 rounded-sm text-blue-600">
                                    </th>
                                    <th class="ps-2 sm:ps-6 py-3 text-start font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                        Customer
                                    </th>
                                    <th class="px-2 sm:px-6 py-3 text-start font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                        Guests
                                    </th>
                                    <th class="px-2 sm:px-6 py-3 text-start font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                        Date
                                    </th>
                                    <th class="px-2 sm:px-6 py-3 text-start font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                        Time
                                    </th>
                                    <th class="px-2 sm:px-6 py-3 text-start font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                        Status
                                    </th>
                                    <th class="px-2 sm:px-6 py-3 text-center text-gray-800 dark:text-neutral-200">Action</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                @forelse ($this->bookings as $booking)
                                    <tr>
                                        <td class="w-4 ps-2 sm:ps-6 py-3 text-center align-middle">
                                            <input type="checkbox"
                                                wire:click="toggleRowSelection({{ $booking->id }})"
                                                x-data
                                                x-bind:checked="@js($selectedBookings).includes({{ $booking->id }})"
                                                class="border-gray-300 rounded-sm text-blue-600 align-middle">
                                        </td>
                                        <td class="px-2 sm:px-6 py-3">
                                            <span class="block font-semibold text-gray-800 dark:text-neutral-200">
                                                {{ $booking->full_name }}
                                            </span>
                                        </td>
                                        <td class="px-2 sm:px-6 py-3">
                                            <span class="block text-gray-500 dark:text-neutral-500">
                                                {{ $booking->guest_count }}
                                            </span>
                                        </td>
                                        <td class="px-2 sm:px-6 py-3">
                                            <span class="block text-gray-500 dark:text-neutral-500">
                                                {{ $booking->reservation_date }}
                                            </span>
                                        </td>
                                        <td class="px-2 sm:px-6 py-3">
                                            <span class="block text-gray-500 dark:text-neutral-500">
                                                {{ $booking->reservation_time }}
                                            </span>
                                        </td>
                                        <td class="px-2 sm:px-6 py-3">
                                            <span class="block text-gray-500 dark:text-neutral-500">
                                                {{ ucfirst($booking->status) }}
                                            </span>
                                        </td>
                                        @can('update', $booking)
                                        <td class="px-2 sm:px-6 py-1.5 text-center space-x-2">
                                            <button 
                                                wire:click="approveBooking({{ $booking->id }})"
                                                class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">
                                                Approve
                                            </button>

                                            <button id="btn-cancel" 
                                                wire:click="cancelBooking({{ $booking->id }})"
                                                class="px-3 py-1 btn-cancel bg-red-600 text-white rounded hover:bg-red-700">
                                                Cancel
                                            </button>
                                        </td>
                                        @endcan
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="px-2 sm:px-6 py-4 text-center text-gray-500 dark:text-neutral-400">
                                            No bookings found.
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
                                        {{ $this->bookings->total() }}
                                    </span>
                                    results
                                </p>
                            </div>
                            <div>
                                <div class="inline-flex gap-x-2">
                                    {{-- Prev Button --}}
                                    @if($this->bookings->onFirstPage())
                                        <button disabled class="px-4 py-2 inline-flex items-center justify-center gap-x-1 text-sm font-medium rounded-md border bg-gray-100 text-gray-400 cursor-not-allowed">
                                            Prev
                                        </button>
                                    @else
                                        <button wire:click="previousPage" class="px-4 py-2 inline-flex items-center justify-center gap-x-1 text-sm font-medium rounded-md border bg-white text-gray-800 hover:bg-gray-100 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                            Prev
                                        </button>
                                    @endif

                                    {{-- Next Button --}}
                                    @if($this->bookings->hasMorePages())
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
