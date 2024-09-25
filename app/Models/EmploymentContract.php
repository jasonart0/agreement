<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentContract extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_day',
        'contract_month',
        'contract_year',
        'employee_name',
        'commencement_day',
        'commencement_month',
        'commencement_year',
        'salary',
        'gross_profit_commission',
        'employee_hours',
        'vacations',
        'sales_revenue',
        'employee_address',
        'sin_number',
        'drivers_license',
        'widtness_day',
        'widtness_month',
        'widtness_year',
        'fitness_field_one',
        'witness_name_1',
        'witness_username',
        'witness_person',
        'witness_person_name',
        'witness_field2',
        'signature_step1',
        'signature_step2',
        'signature_step3',
        'signature_step4',
        'signature_step5',
        'signature_step6',
        'signature_step7',
        'signature_step8',
        'signature_step9',
        'signature_step10',
    ];
}

