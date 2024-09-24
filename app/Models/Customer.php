<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';

    protected $fillable = [
        'name', 'mobile', 'email', 'salary', 'business', 'name_of_organization',
        'job_profile', 'income_slab', 'nature_of_business', 'nature_of_activity',
        'turnover', 'added_by', 'updated_by'
    ];

    public function family()
    {
        return $this->hasMany(Family::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function insurances()
    {
        return $this->hasMany(InsuranceDetail::class);
    }

    public function investments()
    {
        return $this->hasMany(InvestmentDetail::class);
    }
}
