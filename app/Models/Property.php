<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'property_type', 'recent_property', 'newly_added_property', 'top_projects', 'bhk_type', 'price_range_start', 'price_range_end', 'possession_status', 'size', 'video', 'added_by', 'updated_by', 'is_delete', 'flat_area', 'project_completion_date', 'rera', 'no_of_flats', 'no_of_floors'];

    public function propertyLocation()
    {
        return $this->belongsTo(PropertyLocation::class);
    }

    public function locations()
    {
        return $this->belongsToMany(PropertyLocation::class, 'property_related_locations', 'property_id', 'property_location_id')->with(['country', 'state', 'city', 'area', 'landmark']);
    }

    // Property.php
    public function amenities()
    {
        return $this->belongsToMany(PropertyAmenity::class, 'property_related_amenities')
            ->withPivot('is_true')
            ->withTimestamps();
    }

    // Property.php
    public function utilities()
    {
        return $this->belongsToMany(PropertyUtility::class, 'property_related_utility')->withPivot('value', 'parking_type'); // Include pivot columns 'value' and 'parking_type'
    }

    public function images()
    {
        return $this->hasMany(PropertyRelatedImage::class, 'property_id');
    }

    // Accessor for price_range_start
    public function getFormattedPriceRangeStartAttribute()
    {
        return $this->formatPrice($this->price_range_start);
    }

    // Accessor for price_range_end
    public function getFormattedPriceRangeEndAttribute()
    {
        return $this->formatPrice($this->price_range_end);
    }

    // Helper method to format the price
    private function formatPrice($price)
    {
        if ($price >= 10000000) {
            return number_format($price / 10000000, 2) . ' Cr';
        } elseif ($price >= 100000) {
            return number_format($price / 100000, 2) . ' L';
        } else {
            return number_format($price);
        }
    }
    // public function landmarks()
    // {
    //     return $this->belongsToMany(Landmark::class, 'property_landmark');
    // }
    public function landmarks()
    {
        return $this->belongsToMany(Landmark::class, 'property_landmark', 'property_id', 'landmark_id');
    }
    // In Property Model
    public function specialHighlights()
    {
        return $this->belongsToMany(SpecialHighlight::class, 'property_special_highlight');
    }
}
