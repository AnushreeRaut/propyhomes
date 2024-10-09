<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'added_by',
        'updated_by',
    ];

    public function propertyImages()
    {
        return $this->hasMany(PropertyImage::class);
    }
}
