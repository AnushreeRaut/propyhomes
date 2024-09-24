<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $table = 'family';

    protected $fillable = [
        'customer_id', 'name', 'DOB', 'profession', 'relation', 'is_delete', 'added_by', 'updated_by'
    ];
}
