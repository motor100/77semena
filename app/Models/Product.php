<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;

class Product extends Model
{
    use HasFactory;

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    protected $fillable = [
        'title',
        'slug',
        'image',
        'text',
        'code',
        'quantity',
        'wholesale_price',
        'retail_price',
        'sku',
        'weight',
        'brand',
    ];
    
}
