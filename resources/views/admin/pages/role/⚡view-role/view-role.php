<?php

use Livewire\Attributes\Computed;
use Livewire\Component;
use Spatie\Permission\Models\Role;

new class extends Component
{
     #[Computed()]
    public function roles()
    {
        return Role::with('permissions')->select('id','name','created_at')->get();
    }
    public function deleteRole(int $id)
    {
        Role::findOrFail($id)->delete();
        session()->flash('message', 'Role deleted successfully.');
    }
    
};