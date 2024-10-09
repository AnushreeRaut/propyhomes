<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyRelatedLocation extends Model
{
    use HasFactory;
    protected $table = 'property_related_locations';

    protected $fillable = [
        'property_id',
        'property_location_id',
    ];

    /**
     * Get the property associated with the PropertyRelatedLocation.
     */
    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    /**
     * Get the location associated with the PropertyRelatedLocation.
     */
    public function propertyLocation()
    {
        return $this->belongsTo(PropertyLocation::class);
    }
}
