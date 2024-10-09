<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'areas';

    // Mass assignable attributes.
    protected $fillable = ['area_name'];
}
