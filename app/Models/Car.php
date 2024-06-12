<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model {
    protected $table = 'carlist';
    protected $fillable = [
        'VIN', 'make', 'model', 'year', 'class', 'mileage', 'fuel',
        'ext_color', 'int_color', 'features', 'photo', 'status', 'location',
    ];
}
