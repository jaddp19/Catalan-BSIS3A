<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{
    protected $fillable = [
        'full_name',
        'guest_count',
        'reservation_date',
        'reservation_time',
        'special_instructions',
        'status',
    ];

    public function totalAmount(): float
    {
        return $this->bookingDetails->sum(function ($detail) {
            return $detail->quantity * $detail->menu->price;
        });
    }

    public function bookingDetails(): HasMany
    {
        return $this->hasMany(BookingDetail::class, 'booking_id', 'id');
    }
    public function payments()
    {
        return $this->hasManyThrough(
            Payment::class,
            BookingDetail::class,
            'booking_id',          // Foreign key on booking_details
            'booking_detail_id',   // Foreign key on payments
            'id',                  // Local key on bookings
            'id'                   // Local key on booking_details
        );
    }
}
