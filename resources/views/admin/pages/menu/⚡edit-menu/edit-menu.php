<?php

use App\Models\Menu;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts.app-admin')] class extends Component
{
    use WithFileUploads;

    public Menu $menu;
    public string $menu_name = '';
    public string $type_of_menu = '';
    public string $description = '';
    public string $price = '';
    public $image = null;

    public function mount(Menu $menu)
    {
        $this->menu = $menu;
        $this->menu_name    = $menu->menu_name;
        $this->type_of_menu = $menu->type_of_menu;
        $this->description  = $menu->description ?? '';
        $this->price        = $menu->price;
    }

    protected function rules()
    {
        return [
            'menu_name'    => 'required|string|min:3|max:255|unique:menus,menu_name,' . $this->menu->id,
            'type_of_menu' => 'required|string|in:food,drink,dessert',
            'description'  => 'nullable|string|max:500',
            'price'        => 'required|numeric|min:0',
            'image'        => 'nullable|image|max:2048',
        ];
    }

    public function update()
    {
        $validated = $this->validate();

        // Sanitize inputs
        $validated['menu_name']    = $this->sanitizeData($validated['menu_name']);
        $validated['type_of_menu'] = $this->sanitizeData($validated['type_of_menu']);
        $validated['description']  = $this->sanitizeData($validated['description']);

        // Handle image upload
        if ($this->image) {
            $path = $this->image->store('menus', 'public');
            $validated['image'] = $path;
        }

        // Update menu
        $this->menu->update($validated);

        session()->flash('success', 'Menu item updated successfully.');
        return redirect()->route('admin.menu.view');
    }

    protected function sanitizeData($data)
    {
        return is_string($data)
            ? Str::of($data)->stripTags()->trim()->toString()
            : $data;
    }


};
