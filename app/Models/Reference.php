<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'mobile', 'real_estate', 'loan', 'real_estate_type', 'loan_type', 'comment', 'added_by', 'updated_by','is_delete'];

    /**
     * Get the user that added the reference.
     */
    public function addedBy()
    {
        return $this->belongsTo(User::class, 'added_by');
    }

    /**
     * Get the user that updated the reference.
     */
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    // Add a scope for soft deletes
    public function scopeActive($query)
    {
        return $query->where('is_delete', false);
    }
}
