<?php

use App\Models\Menu;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts.app-admin')] class extends Component
{
    use WithPagination; // 🔑 enable pagination methods

    public array $selectedMenus = [];
    public bool $selectAll = false;

    public function deleteSelected()
    {
        Menu::whereIn('id', $this->selectedMenus)->delete();

        $this->selectedMenus = [];
        $this->selectAll = false;

        session()->flash('success', 'Selected menus deleted successfully.');
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            // Grab IDs from the current page
            $this->selectedMenus = $this->menus->getCollection()
                ->pluck('id')
                ->map(fn($id) => (int) $id)
                ->toArray();
        } else {
            $this->selectedMenus = [];
        }
    }

    public function updatedSelectedMenus()
    {
        // Keep header checkbox in sync
        $this->selectAll = count($this->selectedMenus) === $this->totalMenusCount();
    }

    public function toggleSelectAll()
    {
        $allIds = Menu::pluck('id')->map(fn($id) => (int) $id)->toArray();

        $selectedCount = count($this->selectedMenus);
        $totalCount = $this->totalMenusCount();

        if ($selectedCount === $totalCount) {
            $this->selectedMenus = [];
            $this->selectAll = false;
        } else {
            $this->selectedMenus = $allIds;
            $this->selectAll = true;
        }
    }

    public function toggleRowSelection($menuId)
    {
        if (in_array($menuId, $this->selectedMenus)) {
            // Remove if already selected
            $this->selectedMenus = array_values(array_diff($this->selectedMenus, [$menuId]));
        } else {
            // Add if not selected
            $this->selectedMenus[] = $menuId;
        }

        // Sync header checkbox
        $this->selectAll = count($this->selectedMenus) === $this->totalMenusCount();
    }

    #[Computed]
    public function menus()
    {
        return Menu::select('id', 'image', 'menu_name','type_of_menu','price','created_at')
            ->latest()
            ->paginate(5);
    }

    #[Computed]
    public function totalMenusCount()
    {
        return Menu::count();
    }
};
