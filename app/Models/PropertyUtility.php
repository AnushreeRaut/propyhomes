<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyUtility extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'added_by',
        'updated_by',
    ];

    public function propertyRelatedUtilities()
    {
        return $this->hasMany(PropertyRelatedUtility::class);
    }
// PropertyUtility.php
public function properties()
{
    return $this->belongsToMany(Property::class, 'property_related_utility')
                ->withPivot('value', 'parking_type');
}

}
