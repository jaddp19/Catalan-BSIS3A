<?php

use App\Models\Service;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts.app-admin')]class extends Component
{
    use WithFileUploads;

    public string $service_name = '';
    public string $description = '';
    public string $price = '';
    public $image; // file upload

    protected function rules()
    {
        return [
            'service_name' => 'required|string|min:3|max:255',
            'description'  => 'nullable|string|max:1000',
            'price'        => 'required|numeric|min:0',
            'image'        => 'nullable|image|max:2048',
        ];
    }

    protected function messages()
    {
        return [
            'service_name.required' => 'Service name is required.',
            'price.required'        => 'Price is required.',
            'price.numeric'         => 'Price must be a number.',
            'image.image'           => 'The file must be an image.',
            'image.max'             => 'Image must not exceed 2MB.',
        ];
    }

    public function create()
    {
        $validated = $this->validate();

        // sanitize text inputs
        $validated['service_name'] = $this->sanitizeData($validated['service_name']);
        $validated['description']  = $this->sanitizeData($validated['description']);

        // handle image upload
        if ($this->image) {
            $validated['image'] = $this->image->store('services', 'public');
        }

        Service::create([
            'service_name' => $validated['service_name'],
            'description'  => $validated['description'],
            'price'        => $validated['price'],
            'image'        => $validated['image'] ?? null,
        ]);

        session()->flash('success', 'Service created successfully.');
        return redirect()->route('admin.service.view');
    }

    protected function sanitizeData($data)
    {
        return is_string($data)
            ? Str::of($data)->stripTags()->trim()->toString()
            : $data;
    }
};