<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'brand',
        'category',
        'price',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
