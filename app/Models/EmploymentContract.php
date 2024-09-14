<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentContract extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_name',
        'employer_address',
        'employee_name',
        'job_title',
        'job_duties',
        'salary',
        'commission',
        'vacation_days',
        'confidentiality_clause',
        'signature_step1',
        'signature_step2',
        'signature_step3',
        'signature_step4',
        'signature_step5',
    ];
}

