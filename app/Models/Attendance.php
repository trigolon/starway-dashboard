<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    /* use HasFactory; */

    protected $fillable = [
        'employee_id',
        'date',
        'clock_in',
        'clock_out',
        'is_absent',
    ];

    protected $rules = [
        'employee_id' => 'required|exists:employees,id',
        'date' => 'required|date',
        'clock_in' => 'required|datetime',
        'clock_out' => 'nullable|datetime',
        'is_absent' => 'required|boolean',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
