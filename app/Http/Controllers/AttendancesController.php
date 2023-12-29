<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;

class AttendancesController extends Controller
{
    public function show()
    {
        /* $today_attendance = Attendance::with('employee')->where('date', date('Y-m-d'))->get(); */
        $today_attendance = 'asd';
        return view('pages.attendance', ['asd' => $today_attendance]);
    }
}
