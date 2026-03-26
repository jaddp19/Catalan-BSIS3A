<?php

use App\Models\Service;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts.app-admin')] class extends Component
{
    use WithPagination; // 🔑 enable pagination methods

    public $selectedServices = []; // IDs of selected services
    public $selectAll = false;     // Whether all services are selected
    
    /**
     * Delete all selected services.
     * Resets selection after deletion.
     */
    public function deleteSelected()
    {
        Service::whereIn('id', $this->selectedServices)->delete();

        $this->selectedServices = [];
        $this->selectAll = false;

        session()->flash('success', 'Selected services deleted successfully.');
    }

    public function updatedSelectAll($value) 
    { 
        if ($value) { 
            // Grab IDs from the current page
            $this->selectedServices = $this->services->getCollection()
                ->pluck('id')
                ->map(fn($id) => (int) $id)
                ->toArray(); 
        } else { 
            $this->selectedServices = []; 
        } 
    } 
                     
    public function updatedSelectedServices() 
    { 
        // Keep header checkbox in sync 
        $this->selectAll = count($this->selectedServices) === $this->totalServicesCount(); 
    }

    /**
     * Toggle selection of all services across pages.
     */
    public function toggleSelectAll()
    {
        $allIds = Service::pluck('id')->map(fn($id) => (int) $id)->toArray();

        if (count($this->selectedServices) === $this->totalServicesCount()) { 
            $this->selectedServices = []; 
            $this->selectAll = false; 
        } else { 
            $this->selectedServices = $allIds; 
            $this->selectAll = true; 
        }
    }

    /**
     * Toggle selection of a single service.
     */
    public function toggleRowSelection($serviceId)
    {
        if (in_array($serviceId, $this->selectedServices)) {
            // Remove if already selected
            $this->selectedServices = array_values(array_diff($this->selectedServices, [$serviceId]));
        } else {
            // Add if not selected
            $this->selectedServices[] = $serviceId;
        }

        // Sync header checkbox
        $this->selectAll = count($this->selectedServices) === $this->totalServicesCount();
    }
    
    /**
     * Computed property: total number of services.
     */
    #[Computed]
    public function totalServicesCount()
    {
        return Service::count();
    }
    
    /**
     * Computed property: paginated services.
     */
    #[Computed()]
    public function services()
    {
        return Service::select('id', 'service_name', 'price', 'description', 'created_at')
            ->latest()
            ->paginate(5);
    }
};
