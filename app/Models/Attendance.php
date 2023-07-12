<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';

    protected $fillable = [
        'employee_id',
        'attendance_date',
        'attendance_type',
        'clock_in',
        'clock_in_actual',
        'clock_in_note',
        'clock_out',
        'clock_out_actual',
        'clock_out_note',
        'update_by',
        'update_date',
    ];
}
