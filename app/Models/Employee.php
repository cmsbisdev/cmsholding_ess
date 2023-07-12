<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'employee_id',
        'employee_name',
        'employee_photo',
        'employee_phone',
        'employee_email',
        'company_id',
        'branch_id',
        'organization_id',
        'employee_status',
        'updated_by',
        'nik'
    ];
}
