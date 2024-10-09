<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyRelatedAmenity extends Model
{
    use HasFactory;
    protected $table = 'property_related_amenities';

    protected $fillable = [
        'property_id', 'property_amenity_id', 'is_true'
    ];

    // Relationship with Property
    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    // Relationship with PropertyAmenity
    public function amenity()
    {
        return $this->belongsTo(PropertyAmenity::class);
    }
}
