<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Role;

new #[Layout('layouts.app-admin')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $phone_number = '';
    public string $password_confirmation = '';
    public string $selectedRole = '';


    protected function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'phone_number' => 'nullable|string|max:11|min:11',
            'selectedRole' => 'exists:roles,name',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'The password is required.',
            'password.confirmed' => 'Confirmation password does not match the password.',
            'email.unique' => 'The email address is already registered.',
            'email.required' => 'The email address is required.',
            'phone_number.max' => 'The phone number must not exceed 11 characters. Use only 09XXXXXXXXX format.',
            'phone_number.min' => 'The phone number must be at least 11 characters. Use only 09XXXXXXXXX format.',
        ];
    }


    public function create()
    {
        $validated = $this->validate();

        $validated['name'] = $this->sanitizeData($validated['name']);
        $validated['email'] = $this->sanitizeData($validated['email']);
        $validated['phone_number'] = $this->sanitizeData($validated['phone_number']);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'phone_number' => $validated['phone_number'],
        ]);

        $user->syncRoles($validated['selectedRole']);

        session()->flash('success', 'User created successfully.');
        return redirect()->route('admin.user.view');
    }

    protected function sanitizeData($data)
    {
        return is_string($data)
            ? Str::of($data)->stripTags()->trim()->toString()
            : $data;
    }

    #[Computed()]
    public function roles()
    {
        return Role::select('id', 'name')->get();
    }
};