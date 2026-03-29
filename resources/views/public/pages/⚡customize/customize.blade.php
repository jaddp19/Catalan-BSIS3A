<div>
  <div class="py-12 bg-neutral-50 dark:bg-[#0f0f0f]">
    <div class="max-w-4xl px-12 py-6 mx-auto dark:bg-[#181818] shadow-[0_20px_50px_rgba(0,0,0,0.5)] ">
      <h2 class="mb-8 text-3xl font-bold text-center text-black dark:text-white">
        Customize Your Menu
      </h2>

      <form wire:submit.prevent="saveBooking" class="grid grid-cols-1 gap-6 md:grid-cols-2 ">
        <!-- Full Name -->
        <div class="md:col-span-2">
          <label class="block mb-2 text-sm font-medium text-black dark:text-white">Full Name</label>
          <input type="text" wire:model="full_name" placeholder="Enter your name"
            class="w-full px-4 py-3 text-black bg-transparent border-b border-gray-300 dark:border-neutral-600 dark:text-white focus:outline-none focus:ring-0 focus:border-gray-400"
            required>
          @error('full_name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div>
          <label class="block mb-2 text-sm font-medium text-black dark:text-white">
            Number of Guests
          </label>
          <input type="number" wire:model="guest_count" min="1" placeholder="Guests"
            class="w-full px-4 py-3 text-black bg-transparent border-b border-gray-300 
                  dark:border-neutral-600 dark:text-white focus:outline-none"
            required>
          @error('guest_count')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div><br>

        <!-- Foods -->
        <div>
          <label class="block mb-2 text-sm font-medium text-black dark:text-white">Foods</label>
          <div class="space-y-2">
            @foreach (($this->menus)->where('type_of_menu', 'food') as $food)
              <label>
                <input type="checkbox"
                    wire:click="toggleFoodSelection({{ $food->id }})"
                    x-data
                    x-init="$watch('$wire.selectedFoods', value => {
                        $el.checked = value.includes({{ $food->id }});
                    })">
                {{ $food->menu_name }}
              </label><br>
            @endforeach
          </div>
        </div>

        <div>
          <label class="block mb-2 text-sm font-medium text-black dark:text-white">Foods Quantity</label>
          <input type="number" wire:model="foods_quantity" min="1" placeholder="Quantity"
            class="w-full px-4 py-3 text-black bg-transparent border-b border-gray-300 dark:border-neutral-600 dark:text-white focus:outline-none"
            required>
          @error('foods_quantity')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <!-- Desserts -->
        <div>
          <label class="block mb-2 text-sm font-medium text-black dark:text-white">Desserts</label>
          <div class="space-y-2">
            @foreach (($this->menus)->where('type_of_menu', 'dessert') as $dessert)
              <label>
                <input type="checkbox"
                    wire:click="toggleDessertSelection({{ $dessert->id }})"
                    x-data
                    x-init="$watch('$wire.selectedDesserts', value => {
                        $el.checked = value.includes({{ $dessert->id }});
                    })">
                {{ $dessert->menu_name }}
              </label><br>
            @endforeach
          </div>
        </div>

        <div>
          <label class="block mb-2 text-sm font-medium text-black dark:text-white">Dessert Quantity</label>
          <input type="number" wire:model="desserts_quantity" min="1" placeholder="Quantity"
            class="w-full px-4 py-3 text-black bg-transparent border-b border-gray-300 dark:border-neutral-600 dark:text-white focus:outline-none"
            required>
          @error('desserts_quantity')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <!-- Drinks -->
        <div>
          <label class="block mb-2 text-sm font-medium text-black dark:text-white">Drinks</label>
          <div class="space-y-2">
            @foreach (($this->menus)->where('type_of_menu', 'drink') as $drink)
              <label>
                <input type="checkbox"
                    wire:click="toggleDrinkSelection({{ $drink->id }})"
                    x-data
                    x-init="$watch('$wire.selectedDrinks', value => {
                        $el.checked = value.includes({{ $drink->id }});
                    })">
                {{ $drink->menu_name }}
              </label><br>
            @endforeach
          </div>
        </div>

        <div>
          <label class="block mb-2 text-sm font-medium text-black dark:text-white">Drink Quantity</label>
          <input type="number" wire:model="drinks_quantity" min="1" placeholder="Quantity"
            class="w-full px-4 py-3 text-black bg-transparent border-b border-gray-300 dark:border-neutral-600 dark:text-white focus:outline-none"
            required>
          @error('drinks_quantity')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <!-- Reservation -->
        <div>
          <label class="block mb-2 text-sm font-medium text-black dark:text-white">Reservation Date</label>
          <input type="date" wire:model="reservation_date"
            class="appearance-none w-full px-4 py-3 border-b dark:border-neutral-500 focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm"
            required>
          @error('reservation_date')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div>
          <label class="block mb-2 text-sm font-medium text-black dark:text-white">Reservation Time</label>
          <input type="time" wire:model="reservation_time"
            class="appearance-none w-full px-4 py-3 border-b dark:border-neutral-500 focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm"
            required>
          @error('reservation_time')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

          <!-- Special Instructions -->
          <div class="md:col-span-2">
            <label class="block mb-2 text-sm font-medium text-black dark:text-white">Special Instructions</label>
            <textarea wire:model="special_instructions" rows="4" placeholder="Any special requests?"
              class="w-full px-4 py-3 text-black bg-transparent border-b border-gray-300 dark:border-neutral-600 dark:text-white focus:outline-none focus:ring-0 focus:border-gray-400 sm:text-sm"></textarea>
            @error('special_instructions')
              <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
          </div>

        <x-total />

        <!-- Buttons -->
        <div class="flex gap-4 pt-6 md:col-span-2">
          <button type="submit"
            class="flex-1 px-6 py-3 text-sm font-medium text-white transition fucos:ring-0 ">
            Reserve
          </button>
          <button id="btn-cancel" type="reset"
            class="flex-1 px-6 py-3 text-sm font-medium text-white transition fucos:ring-0">
            Cancel
          </button>
        </div>
      </form>

      <!-- Receipt Modal -->
      <div x-data="{ open: @entangle('showReceipt') }">
          <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50">
              <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 w-3/4 max-w-lg">
                  <h2 class="text-xl font-bold mb-4">Reservation Receipt</h2>

                  @if($currentBooking)
                      <p><strong>Name:</strong> {{ $currentBooking->full_name }}</p>
                      <p><strong>Guests:</strong> {{ $currentBooking->guest_count }}</p>
                      <p><strong>Date:</strong> {{ $currentBooking->reservation_date }}</p>
                      <p><strong>Time:</strong> {{ $currentBooking->reservation_time }}</p>

                      <h3 class="mt-4 font-semibold">Items:</h3>
                      <ul>
                          @foreach($currentBooking->bookingDetails as $detail)
                              <li>{{ $detail->menu->menu_name }} × {{ $detail->quantity }} — ₱{{ $detail->menu->price * $detail->quantity }}</li>
                          @endforeach
                      </ul>

                      <div class="mt-4 font-bold">
                          Total: ₱{{ $currentBooking->totalAmount() }}
                      </div>
                  @endif

                  @if($currentBooking)
                    <div class="mt-6 flex justify-end space-x-4">
                        <button wire:click="payFullBookingCOD({{ $currentBooking->id }})"
                            class="px-6 py-3 bg-yellow-600 text-white rounded">
                            Reserve with COD
                        </button>
                        <button @click="open = false" class="px-6 py-2 bg-gray-400 text-white rounded">
                            Close
                        </button>
                    </div>
                  @endif
              </div>
          </div>
      </div>

    </div>
  </div>
</div>
