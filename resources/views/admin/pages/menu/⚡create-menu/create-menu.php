<?php

use App\Models\Menu;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts.app-admin')] class extends Component
{
    use WithFileUploads;

    public string $menu_name = '';
    public string $type_of_menu = '';
    public string $description = '';
    public string $price = '';
    public $image = null;

    protected function rules()
    {
        return [
            'menu_name'    => 'required|string|min:3|max:255|unique:menus,menu_name',
            'type_of_menu' => 'required|string|in:food,drink,dessert',
            'description'  => 'nullable|string|max:500',
            'price'        => 'required|numeric|min:0',
            'image'        => 'nullable|image|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'menu_name.required' => 'The menu name is required.',
            'menu_name.unique'   => 'The menu name is already registered.',
            'type_of_menu.required' => 'The menu type is required.',
            'type_of_menu.in'    => 'Type must be food, drink, or dessert.',
            'price.required'     => 'The price is required.',
            'price.numeric'      => 'The price must be a valid number.',
            'image.image'        => 'The file must be an image.',
            'image.max'          => 'Image must not exceed 2MB.',
        ];
    }

    public function create()
    {
        $validated = $this->validate();

        // Sanitize inputs
        $validated['menu_name']    = $this->sanitizeData($validated['menu_name']);
        $validated['type_of_menu'] = $this->sanitizeData($validated['type_of_menu']);
        $validated['description']  = $this->sanitizeData($validated['description']);

        // Handle image upload
        $path = null;
        if ($this->image) {
            $path = $this->image->store('menus', 'public');
        }

        // Save menu
        Menu::create([
            'menu_name'    => $validated['menu_name'],
            'type_of_menu' => $validated['type_of_menu'],
            'description'  => $validated['description'],
            'price'        => $validated['price'],
            'image'   => $path,
        ]);

        session()->flash('success', 'Menu item created successfully.');
        return redirect()->route('admin.menu.view');
    }

    protected function sanitizeData($data)
    {
        return is_string($data)
            ? Str::of($data)->stripTags()->trim()->toString()
            : $data;
    }
};
