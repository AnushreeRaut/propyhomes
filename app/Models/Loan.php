<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id', 'type_of_bank', 'loan_type', 'loan_amount', 'EMI', 'start_date', 'comment', 'added_by', 'updated_by'
    ];
}
