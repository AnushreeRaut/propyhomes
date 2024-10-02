<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['cover_image', 'address', 'title', 'banner_image', 'video', 'floor_plan_image', 'location', 'description', 'price_range_start', 'price_range_end', 'google_link', 'added_by', 'updated_by'];

    // Define the relationship with PropertyDetail
    // Project.php (Model)
    public function propertyDetail()
    {
        return $this->hasMany(PropertyDetail::class);
    }

    // Define the relationship with OutdoorFeature
    public function outdoorFeatures()
    {
        return $this->hasMany(OutdoorFeature::class);
    }

    // Define the relationship with PropertyUnit
    public function propertyUnits()
    {
        return $this->hasMany(PropertyUnit::class);
    }

    public function getFormattedPriceRangeStartAttribute()
    {
        return $this->formatPrice($this->price_range_start);
    }

    public function getFormattedPriceRangeEndAttribute()
    {
        return $this->formatPrice($this->price_range_end);
    }

    private function formatPrice($price)
    {
        if ($price >= 10000000) {
            return round($price / 10000000, 2) . ' Cr';
        } elseif ($price >= 100000) {
            return round($price / 100000, 2) . ' Lakh';
        } elseif ($price >= 1000) {
            return round($price / 1000, 2) . ' Thousand';
        } else {
            return $price;
        }
    }
}
