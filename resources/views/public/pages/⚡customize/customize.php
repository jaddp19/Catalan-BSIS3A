<?php

use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Menu;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{
    public string $full_name = '';
    public int $guest_count = 1;
    public string $reservation_date = '';
    public string $reservation_time = '';
    public string $special_instructions = '';
    public array $foods = [];
    public array $desserts = [];
    public array $drinks = [];
    public int $foods_quantity = 1;
    public int $desserts_quantity = 1;
    public int $drinks_quantity = 1;
    public bool $showReceipt = false;
    public ?Booking $currentBooking = null;

    protected function rules()
    {
        return [
            'full_name'        => 'required|string|min:3|max:255',
            'guest_count'      => 'required|integer|min:1',
            'reservation_date' => 'required|date|after_or_equal:today',
            'reservation_time' => 'required',
            'foods'            => 'array',
            'desserts'         => 'array',
            'drinks'           => 'array',
            'foods_quantity'   => 'integer|min:1',
            'desserts_quantity'=> 'integer|min:1',
            'drinks_quantity'  => 'integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'full_name.required'        => 'Please enter your full name.',
            'full_name.min'             => 'Full name must be at least 3 characters.',
            'full_name.max'             => 'Full name cannot exceed 255 characters.',

            'guest_count.required'      => 'Guest count is required.',
            'guest_count.integer'       => 'Guest count must be a number.',
            'guest_count.min'           => 'Guest count must be at least 1.',

            'reservation_date.required' => 'Reservation date is required.',
            'reservation_date.date'     => 'Reservation date must be a valid date.',
            'reservation_date.after_or_equal' => 'Reservation date cannot be in the past.',

            'reservation_time.required' => 'Reservation time is required.',

            'foods.array'               => 'Foods must be a valid selection.',
            'desserts.array'            => 'Desserts must be a valid selection.',
            'drinks.array'              => 'Drinks must be a valid selection.',

            'foods_quantity.integer'    => 'Foods quantity must be a number.',
            'foods_quantity.min'        => 'Foods quantity must be at least 1.',

            'desserts_quantity.integer' => 'Desserts quantity must be a number.',
            'desserts_quantity.min'     => 'Desserts quantity must be at least 1.',

            'drinks_quantity.integer'   => 'Drinks quantity must be a number.',
            'drinks_quantity.min'       => 'Drinks quantity must be at least 1.',
        ];
    }

    public function saveBooking()
    {
        $validated = $this->validate();

        $booking = Booking::create([
            'full_name'        => Str::of($validated['full_name'])->stripTags()->trim(),
            'guest_count'      => $validated['guest_count'],
            'reservation_date' => $validated['reservation_date'],
            'reservation_time' => $validated['reservation_time'],
            'special_instructions' => Str::of($this->special_instructions)->stripTags()->trim(),
            'status'           => 'pending',
        ]);

        // Foods
        foreach ($this->selectedFoods as $foodId) {
            BookingDetail::create([
                'booking_id' => $booking->id,
                'menu_id'    => $foodId,
                'quantity'   => $this->foods_quantity,
            ]);
        }

        // Desserts
        foreach ($this->selectedDesserts as $dessertId) {
            BookingDetail::create([
                'booking_id' => $booking->id,
                'menu_id'    => $dessertId,
                'quantity'   => $this->desserts_quantity,
            ]);
        }

        // Drinks
        foreach ($this->selectedDrinks as $drinkId) {
            BookingDetail::create([
                'booking_id' => $booking->id,
                'menu_id'    => $drinkId,
                'quantity'   => $this->drinks_quantity,
            ]);
        }

        session()->flash('success', 'Booking created successfully!');

        $this->currentBooking = $booking->load('bookingDetails.menu');
        $this->showReceipt = true; // trigger modal
        
    }

    public array $selectedFoods = [];
    public array $selectedDesserts = [];
    public array $selectedDrinks = [];

    public function toggleFoodSelection($menuId)
    {
        if (in_array($menuId, $this->selectedFoods)) {
            $this->selectedFoods = array_values(array_diff($this->selectedFoods, [$menuId]));
        } else {
            $this->selectedFoods[] = $menuId;
        }
    }

    public function toggleDessertSelection($menuId)
    {
        if (in_array($menuId, $this->selectedDesserts)) {
            $this->selectedDesserts = array_values(array_diff($this->selectedDesserts, [$menuId]));
        } else {
            $this->selectedDesserts[] = $menuId;
        }
    }

    public function toggleDrinkSelection($menuId)
    {
        if (in_array($menuId, $this->selectedDrinks)) {
            $this->selectedDrinks = array_values(array_diff($this->selectedDrinks, [$menuId]));
        } else {
            $this->selectedDrinks[] = $menuId;
        }
    }

    #[Computed]
    public function totalItems(): int
    {
        return (count($this->selectedFoods) * $this->foods_quantity)
            + (count($this->selectedDesserts) * $this->desserts_quantity)
            + (count($this->selectedDrinks) * $this->drinks_quantity);
    }

    #[Computed]
    public function totalAmount(): float
    {
        $foodsTotal = Menu::whereIn('id', $this->selectedFoods)->get()
            ->sum(fn($menu) => $menu->price * $this->foods_quantity);

        $dessertsTotal = Menu::whereIn('id', $this->selectedDesserts)->get()
            ->sum(fn($menu) => $menu->price * $this->desserts_quantity);

        $drinksTotal = Menu::whereIn('id', $this->selectedDrinks)->get()
            ->sum(fn($menu) => $menu->price * $this->drinks_quantity);

        return $foodsTotal + $dessertsTotal + $drinksTotal;
    }

    #[Computed]
    public function menus()
    {
        return Menu::select('menu_name', 'type_of_menu', 'price', 'id')->get();
    }


    public function payFullBookingCOD($bookingId)
    {
        $booking = Booking::with('bookingDetails.menu')->findOrFail($bookingId);

        if ($booking->bookingDetails->isEmpty()) {
            session()->flash('error', 'No booking details found for this booking.');
            return;
        }

        foreach ($booking->bookingDetails as $detail) {

            Payment::create([
                'booking_detail_id' => $detail->id,
                'amount'            => $detail->quantity * $detail->menu->price,
                'payment_date'      => now(),
                'payment_status'    => 'COD',
            ]);
        }

        $booking->update(['status' => 'Pending']);
        session()->flash('success', 'Booking reserved. Payment will be collected on delivery.');
        $this->currentBooking = $booking->fresh('bookingDetails.menu');

        return redirect()->route('home');
    }


};
