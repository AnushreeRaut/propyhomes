<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'cover_image',
        'address',
        'title',
        'banner_image',
        'video',
        'floor_plan_image',
        'location',
        'description',
        'price_range_start',
        'price_range_end',
        'google_link',
        'added_by',
        'updated_by',
    ];
}
