<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'product_history';

    protected $fillable = [
        'stock_id',
        'product_id',
        'price',
        'available'
    ];

    protected $casts = [
        'available' => 'boolean'
    ];
}
