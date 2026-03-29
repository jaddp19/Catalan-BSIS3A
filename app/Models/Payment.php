<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    
    protected $fillable = [
        'booking_detail_id',
        'amount',
        'payment_date',
        'payment_status'
    ];

    public function bookingDetail(): BelongsTo
    {
        return $this->belongsTo(BookingDetail::class, 'booking_detail_id', 'id');
    }
}
