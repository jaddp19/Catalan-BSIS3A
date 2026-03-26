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
    public User $user;
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public ?string $phone_number = null;
    public string $password_confirmation = '';
    public ?string $selectedRole = null; // allow null values

    protected function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'password' => 'nullable|string|min:6|confirmed',
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

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone_number = $user->phone_number;
        $this->selectedRole = $user->roles->pluck('name')->first(); 
    }

    public function update()
    {
        $validated = $this->validate();

        $validated['name'] = $this->sanitizeData($validated['name']);
        $validated['email'] = $this->sanitizeData($validated['email']);
        $validated['phone_number'] = $this->sanitizeData($validated['phone_number']);

        $this->user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'password' => $validated['password'] 
                ? Hash::make($validated['password']) 
                : $this->user->password,
        ]);

        $this->user->syncRoles($this->selectedRole);

        session()->flash('success', 'User updated successfully.');
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