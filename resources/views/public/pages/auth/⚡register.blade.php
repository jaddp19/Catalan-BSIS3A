<?php

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
new class extends Component
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
            'phone_number' => 'required|string|max:11|min:11',
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

        session()->flash('success', 'User created successfully.');
        return redirect()->route('home');
    }

    protected function sanitizeData($data)
    {
        return is_string($data)
            ? Str::of($data)->stripTags()->trim()->toString()
            : $data;
    }
};
?>

<div>
    <div class="min-h-screen flex items-center justify-center bg-[#0f0f0f] p-4">
  <div class="max-w-4xl w-full bg-[#181818] rounded-2xl shadow-xl overflow-hidden">
    <div class="p-6 sm:p-8 lg:p-12">
      
      <div class="text-center">
        <h3 class="block text-3xl lg:text-4xl font-extrabold bg-gradient-to-r text-neutral-50 bg-clip-text ">
          Registration Form
        </h3>
      </div>

      <form wire:submit.prevent="create" class="mt-6 ">
        <div class="grid gap-y-5">

          <!-- Full Name -->
          <div class="relative">
            <input wire:model.defer="name" type="text" placeholder="Full Name"
              class="py-3 pl-4 pr-4 w-full  border-b placeholder-neutral-300 border-gray-200  text-sm focus:border-green-500 focus:ring-green-200">
          </div>

          <div class="relative">
            <input wire:model.defer="email" type="email" placeholder="Email Address"
              class="py-3 pl-4 pr-4 w-full  border-b placeholder-neutral-300 border-gray-200  text-sm focus:border-green-500 focus:ring-green-200">
          </div>

    
          <div class="relative">
            <input wire:model.defer="phone_number" type="text" placeholder="Phone Number"
              class="py-3 pl-4 pr-4 w-full placeholder-neutral-300 border-b border-gray-200  text-sm focus:border-green-500 focus:ring-green-200">
          </div>
          
          <div class="relative">
            <input wire:model.defer="password" type="password" placeholder="Password"
              class="py-3 pl-4 pr-4 w-full  border-b placeholder-neutral-300 border-gray-200  text-sm focus:border-green-500 focus:ring-green-200">
          </div>

          <div class="relative">
            <input wire:model.defer="password_confirmation" type="password" placeholder="Confirm Password"
              class="py-3 pl-4 pr-4 w-full placeholder-neutral-300  border-b border-gray-200  text-sm focus:border-green-500 focus:ring-green-200">
          </div>

         
          <div class="flex flex-col sm:flex-row gap-4">
            <button type="submit"
              class="w-full py-3 text-white ">
              Register
            </button>

            <a href="{{ route('home') }}" class="w-full py-3 text-white bg-red-600 text-center hover:bg-red-500 transition-colors">
              Cancel
          </a>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>
    {{-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius --}}
</div>