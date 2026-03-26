<?php

use App\Models\Service;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts.app-admin')] class extends Component
{
    use WithFileUploads;

    public Service $service; // bind the service being edited
    public string $service_name = '';
    public string $description = '';
    public string $price = '';
    public $image; // file upload

    public function mount(Service $service)
    {
        $this->service = $service;
        $this->service_name = $service->service_name;
        $this->description  = $service->description;
        $this->price        = $service->price;
        $this->image        = $service->image; // keep current image path
    }

    protected function rules()
    {
        return [
            'service_name' => 'required|string|min:3|max:255',
            'description'  => 'nullable|string|max:1000',
            'price'        => 'required|numeric|min:0',
            'image'        => 'nullable|image|max:2048',
        ];
    }

    public function update()
{
    $validated = $this->validate();

    // sanitize text inputs
    $validated['service_name'] = $this->sanitizeData($validated['service_name']);
    $validated['description']  = $this->sanitizeData($validated['description']);

    // handle image upload (replace if new file uploaded)
    // if ($this->image instanceof \Livewire\TemporaryUploadedFile) {
    //     $validated['image'] = $this->image->store('services', 'public');
    // } else {
    //     $validated['image'] = $this->service->image;
    // }

    $this->service->update($validated);

    session()->flash('success', 'Service updated successfully.');
    return redirect()->route('admin.service.view');
}


    protected function sanitizeData($data)
    {
        return is_string($data)
            ? Str::of($data)->stripTags()->trim()->toString()
            : $data;
    }
};
