<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Role;

new #[Layout('layouts.app-admin')] class extends Component
{
    public $user;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $selectedRoles = [];
    public $roles = [];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->selectedRoles = $user->roles->pluck('name')->toArray();
        $this->roles = Role::select('id', 'name')->get();
    }

    protected function rules()
    {
        return [
            'name'          => 'required|string|min:3',
            'email'         => ['required', 'email', 'unique:users,email,' . $this->user->id, 'regex:/@gmail\.com$/i'],
            'password'      => 'nullable|string|min:6|confirmed',
            'selectedRoles' => 'array',
        ];
    }

    protected function messages()
    {
        return [
            'email.regex' => 'Only Gmail addresses (@gmail.com) are allowed.',
        ];
    }

    public function save()
    {
        $this->validate();

        $this->user->update([
            'name'  => $this->name,
            'email' => $this->email,
        ]);

        if (!empty($this->password)) {
            $this->user->update([
                'password' => Hash::make($this->password),
            ]);
        }

        $this->user->syncRoles($this->selectedRoles);

        $this->reset(['password', 'password_confirmation']);

        session()->flash('success', 'User updated successfully.');
    }
};