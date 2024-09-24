<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentDetail extends Model
{
    use HasFactory;
    protected $table = 'investment_details';
    protected $fillable = [
        'customer_id', 'financial_institute_name', 'type_of_investment', 'investments', 'start_date', 'end_date', 'comments', 'added_by', 'updated_by'
    ];
}
