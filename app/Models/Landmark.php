<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landmark extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'area_id'];

    // Relationship: A landmark belongs to an area
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_landmark');
    }
}
