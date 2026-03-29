<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['menu_name', 'type_of_menu', 'image', 'description', 'price'];

    public function bookingDetails()
    {
        return $this->hasMany(BookingDetail::class, 'menu_id', 'id');
    }
}
