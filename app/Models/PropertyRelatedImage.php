<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyRelatedImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'image_id',
        'is_active',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function propertyImage()
    {
        return $this->belongsTo(PropertyImage::class, 'image_id');
    }

 // Access the image category through PropertyImage
    // Access the image category through PropertyImage
    public function imageCategory()
    {
        return $this->propertyImage ? $this->propertyImage->belongsTo(ImageCategory::class, 'image_category_id') : null;
    }
}
