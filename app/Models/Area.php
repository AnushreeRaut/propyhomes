<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'areas';

    // Mass assignable attributes.
    protected $fillable = ['area_name'];

    // Define the relationship with PropertyLocation
    public function propertyLocations()
    {
        return $this->hasMany(PropertyLocation::class);
    }

    // Define a relationship to get properties through propertyLocations
    public function properties()
    {
        return $this->hasManyThrough(Property::class, PropertyLocation::class, 'area_id', 'id', 'id', 'property_id');
    }
}
