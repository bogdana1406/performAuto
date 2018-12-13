<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['name', 'brand_id', 'model', 'seats',
       'mileage', 'doors', 'transmission_types', 'year', 'body_type',
        'engine_id', 'price', 'image', 'about', 'descriptions'];

    protected $casts = [
        'about' => 'array',
        'descriptions' =>'array',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function engine()
    {
        return $this->belongsTo(Engine::class);
    }

    public function carsImage()
    {
        return $this->hasMany(CarsImage::class);
    }
}
