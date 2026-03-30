<?php

use App\Models\Booking;
use App\Models\Payment;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Role;

new #[Layout('layouts.app-admin')] class extends Component
{
    public int $totalUsers;
    public int $totalRoles;
    public int $totalPayment;
    public int $totalBookings;
    public int $totalCancelledBookings;
    public int $totalApprovedBookings;
    public int $totalPendingBookings;

    public function mount()
    {
        $this->totalUsers = User::count();
        $this->totalRoles = Role::count();
        $this->totalPayment = Payment::count();
        $this->totalBookings = Booking::count();
        $this->totalCancelledBookings = Booking::where('status', 'cancelled')->count();
        $this->totalApprovedBookings = Booking::where('status', 'approved')->count();
        $this->totalPendingBookings = Booking::where('status', 'pending')->count();

    }   

};