<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Role;

new #[Layout('layouts.app-admin')] class extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $selectedRoles = [];
    public $roles = [];

    public function mount()
    {
        $this->roles = Role::select('id', 'name')->get();
    }


    protected function rules()
    {
        return [
            'name' => 'unique:users,name|required|string|min:3',
            'email' => ['required', 'email', 'unique:users,email', 'regex:/@gmail\.com$/i'],
            'password' => 'required|string|min:6|confirmed',
            'selectedRoles' => 'array'
        ];
    }
     protected function messages()
    {
        return [
            'name.unique' => 'The name is already exist',
            'email.regex' => 'Only Gmail addresses (@gmail.com) are allowed.',
        ];
    }

    public function save()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        if (!empty($this->selectedRoles)) {
            $user->syncRoles($this->selectedRoles);
        }

        $this->reset(['name', 'email', 'password', 'password_confirmation', 'selectedRoles']);

        session()->flash('success', 'User created successfully with roles assigned!');
    }
};