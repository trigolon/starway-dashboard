<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;

class AttendancesController extends Controller
{
    public function show()
    {
        $targetDate = '2021-01-01';

        $attendance = Attendance::with('employee')
            ->whereDate('clock_in', $targetDate)
            ->get();

        return view('sections.attendance', ['attendance' => $attendance]);
    }
}
