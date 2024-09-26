<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'title',
        'value',
        'added_by',
        'updated_by',
    ];

    // Relationships
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
