<?php

use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

new #[Layout('layouts.app-admin')] class extends Component
{
    public Role $role;
    public $name;
    public $selectedPermissions = [];

    public function mount(Role $role)
    {
        $this->role = $role;
        $this->name = $role->name;
        $this->selectedPermissions = $role->permissions->pluck('name')->toArray(); 
    }

    #[Computed()]
    public function permissions()
    {
        return Permission::select('id','name')->get();
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|unique:roles,name,' . $this->role->id,
            'selectedPermissions' => 'required|array|min:1',
            'selectedPermissions.*' => 'exists:permissions,name',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The role name is required.',
            'name.unique' => 'The role name must be unique/already taken.',
            'selectedPermissions.required' => 'Please select at least one permission.',
        ];
    }

    public function update()
    {
        $this->validate();

        // sanitize role name
        $roleName = Str::of($this->name)->trim();

        // 1. update role
        $this->role->update([
            'name' => $roleName
        ]);

        // 2. sync permissions
        $this->role->syncPermissions($this->selectedPermissions);

        session()->flash('success', 'Role updated successfully.');
        return redirect()->route('admin.role.view');
    }

};