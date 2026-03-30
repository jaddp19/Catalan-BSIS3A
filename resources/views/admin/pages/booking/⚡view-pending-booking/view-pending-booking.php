<?php

use App\Models\Booking;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts.app-admin')] class extends Component
{
    use WithPagination;

    public array $selectedBookings = [];
    public bool $selectAll = false;

    public function deleteSelected()
    {
        Booking::whereIn('id', $this->selectedBookings)->where('status', 'Pending')->delete();

        $this->selectedBookings = [];
        $this->selectAll = false;

        session()->flash('success', 'Selected bookings deleted successfully.');
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selectedBookings = Booking::where('status', 'Pending')
                ->pluck('id')
                ->map(fn($id) => (int) $id)
                ->toArray();
        } else {
            $this->selectedBookings = [];
        }
    }

    public function updatedSelectedBookings()
    {
        $this->selectAll = count($this->selectedBookings) === $this->totalBookingsCount();
    }

    public function toggleSelectAll()
    {
        $allIds = Booking::where('status', 'Pending')->pluck('id')->map(fn($id) => (int) $id)->toArray();

        $selectedCount = count($this->selectedBookings);
        $totalCount = $this->totalBookingsCount();

        if ($selectedCount === $totalCount) {
            $this->selectedBookings = [];
            $this->selectAll = false;
        } else {
            $this->selectedBookings = $allIds;
            $this->selectAll = true;
        }
    }

    public function toggleRowSelection($bookingId)
    {
        if (in_array($bookingId, $this->selectedBookings)) {
            $this->selectedBookings = array_values(array_diff($this->selectedBookings, [$bookingId]));
        } else {
            $this->selectedBookings[] = $bookingId;
        }

        $this->selectAll = count($this->selectedBookings) === $this->totalBookingsCount();
    }

    #[Computed]
    public function bookings()
    {
        return Booking::select('id','full_name','guest_count','reservation_date','reservation_time','status','created_at')
            ->where('status', 'Pending')
            ->latest()
            ->paginate(5);
    }

    public function approveBooking($bookingId)
    {
        $booking = Booking::findOrFail($bookingId);
        $booking->update(['status' => 'Confirmed']);

        session()->flash('success', 'Booking approved successfully.');
    }

    public function cancelBooking($bookingId)
    {
        $booking = Booking::findOrFail($bookingId);
        $booking->update(['status' => 'Cancelled']);

        session()->flash('success', 'Booking cancelled successfully.');
    }


    #[Computed]
    public function totalBookingsCount()
    {
        return Booking::where('status', 'Pending')->count();
    }
};