<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'title',
        'address',
        'coords',
        'description',
        'time_weekday',
        'time_saturday',
        'time_sunday'
    ];

    /**
     * Получить город, которому принадлежит офис.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
