<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyRelatedUtility extends Model
{
    use HasFactory;

protected $table = "property_related_utility";
    protected $fillable = [
        'property_id',
        'property_utility_id',
        'value',
        'parking_type',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function propertyUtility()
    {
        return $this->belongsTo(PropertyUtility::class);
    }
}
