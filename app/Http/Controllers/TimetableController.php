<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /** index timetable*/
    public function timetableview()
    {
        return view('timetable.timetable');
    }

        /** student timetable */
        public function studenttimetableview()
        {
            return view('timetable.student-schedules');
        }

            /** teacher timetable*/
    public function teachertimetableview()
    {
        return view('timetable.teacher-schedules');
    }
}
