<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\Menu;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BookingDetail extends Model
{
    protected $fillable = ['booking_id', 'menu_id', 'quantity'];

        public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, 'booking_detail_id', 'id');
    }
}
