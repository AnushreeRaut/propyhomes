<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'city_id',
        'state_id',
        'country_id',
        'area_id',
        'landmark_id',
    ];

    // public function properties()
    // {
    //     return $this->hasMany(Property::class);
    // }
    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_related_locations', 'property_location_id', 'property_id');
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function landmark()
    {
        return $this->belongsTo(Landmark::class);
    }
}
