<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {
    protected $fillable = [
        'customer_id', 'car_id', 'start_date', 'end_date',
        'include_driver', 'status', 'total_price', 'payment_status',
    ];

    // Relationships
    public function car() {
        return $this->belongsTo(Car::class, 'car_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'customer_id');
    }
}
