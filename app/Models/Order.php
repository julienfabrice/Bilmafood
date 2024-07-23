<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'total', 'delivery_price', 'delivery_method', 'city', 'neighborhood', 'status',
    ];

    public function details()
    {
        return $this->hasMany(OrderDetail::class);
    }
}

