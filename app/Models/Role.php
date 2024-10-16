<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_name',
        'description',
        'added_by',
        'updated_by',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role');
    }
}
