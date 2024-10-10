<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_name', 'added_by', 'updated_by'];

    public function propertyImages()
    {
        return $this->hasMany(PropertyImage::class);
    }
    // Relationship to the user who added the category
    public function addedByUser()
    {
        return $this->belongsTo(User::class, 'added_by');
    }

    // Relationship to the user who updated the category
    public function updatedByUser()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
