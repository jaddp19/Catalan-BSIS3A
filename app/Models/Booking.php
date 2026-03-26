<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{
    protected $fillable = ['user_id', 'event_date', 'event_location', 'status'];

    public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}

public function bookingDetails(): HasMany
{
    return $this->hasMany(BookingDetail::class, 'booking_id', 'id');
}

public function payments(): HasMany
{
    return $this->hasMany(Payment::class, 'booking_id', 'id');
}
}
