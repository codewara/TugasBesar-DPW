<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model {
    protected $table = 'carlist';
    protected $fillable = [
        'name', 'brand', 'model', 'year', 'color', 'type', 'seats',
        'transmission', 'fuel_type', 'price', 'notes', 'photo_url',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
