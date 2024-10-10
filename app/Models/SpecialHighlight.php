<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialHighlight extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = ['name', 'added_by', 'updated_by'];

    // If you want to link this to a user, you can add relationships like belongsTo:
    public function addedByUser()
    {
        return $this->belongsTo(User::class, 'added_by');
    }

    public function updatedByUser()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
    // In SpecialHighlight Model
    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_special_highlight');
    }
}
