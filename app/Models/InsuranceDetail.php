<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceDetail extends Model
{
    use HasFactory;

    protected $table = 'insurance_details';
    protected $fillable = [
        'customer_id', 'type_of_insurance_company', 'type_of_policy', 'premium', 'policy_start_date', 'policy_end_date', 'comment', 'added_by', 'updated_by'
    ];
}
