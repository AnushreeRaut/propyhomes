<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'image_category_id',
        'added_by',
        'updated_by',
    ];

    // public function imageCategory()
    // {
    //     return $this->belongsTo(ImageCategory::class);
    // }

    public function propertyRelatedImages()
    {
        return $this->hasMany(PropertyRelatedImage::class);
    }

    public function imageCategory()
    {
        return $this->belongsTo(ImageCategory::class, 'image_category_id');
    }
}
