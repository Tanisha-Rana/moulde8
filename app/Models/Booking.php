<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'category_id',
        'package_id',
        'slot_id',
        'appointment_date',
        'total_amount',
        'advance_amount',
        'remaining_amount',
        'booking_status',
        'payment_status'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    public function slot()
    {
        return $this->belongsTo(Slot::class, 'slot_id');
    }
}
