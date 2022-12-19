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
        'category_id',
        'image',
        'text',
        'code',
        'stock',
        'wholesale_price',
        'retail_price',
        'promo_price',
        'sku',
        'weight',
        'brand',
    ];
    
}
