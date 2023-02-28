<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'slug',
        'description',
        'availability',
        'brand',
        'category',
        'price',
        'image',
        'size',
        'color',
        'stock',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
