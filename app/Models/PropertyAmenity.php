<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAmenity extends Model
{
    use HasFactory;
    protected $table = 'property_amenities';

    protected $fillable = [
        'icon_image', 'name', 'added_by', 'updated_by', 'is_delete'
    ];

    // Relationship with properties through the pivot table
    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_related_amenities')
                    ->withPivot('is_true')
                    ->withTimestamps();
    }

    // Relationship to the user who added the amenity
    public function addedByUser()
    {
        return $this->belongsTo(User::class, 'added_by');
    }

    // Relationship to the user who updated the amenity
    public function updatedByUser()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
