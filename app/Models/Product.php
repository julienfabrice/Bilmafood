<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'main_image', 'other_images', 'categorie_id'
    ];

    protected $casts = [
        'other_images' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
