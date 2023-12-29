<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    /* use HasFactory; */

    protected $fillable = [
        'name',
        'is_active',
        'date_joined',
    ];

    protected $rules = [
        'name' => 'required|max:100',
        'is_active' => 'required|boolean',
        'date_joined' => 'required|date',
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
