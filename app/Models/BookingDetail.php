<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingDetail extends Model
{
    #[Fillable(['booking_id','service_id','quantity',])]

    public function booking(): BelongsTo
{
    return $this->belongsTo(Booking::class, 'booking_id', 'id');
}

public function service(): BelongsTo
{
    return $this->belongsTo(Service::class, 'service_id', 'id');
}

}
