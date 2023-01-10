<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'region',
    ];

    // Получить все офисы для этого города
    // public function offices()
    // {
    //     return $this->hasMany(Office::class);
    // }
}
