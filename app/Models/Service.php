<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $fillable = [
        'service_name',
        'description',
        'price',
    ];

    public function bookingDetails(): HasMany
{
    return $this->hasMany(BookingDetail::class, 'event_id');
}
}
