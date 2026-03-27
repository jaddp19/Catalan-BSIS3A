<?php

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

    public function mount()
    {
        $this->totalUsers = User::count();
        $this->totalRoles = Role::count();
        $this->totalPayment = Payment::count();
    }   

};