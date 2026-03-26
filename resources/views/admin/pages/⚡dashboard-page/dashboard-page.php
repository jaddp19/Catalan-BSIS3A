<?php

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Role;

new #[Layout('layouts.app-admin')] class extends Component
{
    public int $totalUsers;
    public int $totalRoles;


    public function mount()
    {
        $this->totalUsers = User::count();
        $this->totalRoles = Role::count();
    }
};