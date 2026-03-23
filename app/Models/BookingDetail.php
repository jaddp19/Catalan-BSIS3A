<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingDetail extends Model
{
    protected $fillable = [
        'booking_id',
        'event_id',
        'quantity',
    ];

    public function booking(): BelongsTo
{
    return $this->belongsTo(Booking::class);
}

public function service(): BelongsTo
{
    return $this->belongsTo(Service::class, 'event_id');
}

}
