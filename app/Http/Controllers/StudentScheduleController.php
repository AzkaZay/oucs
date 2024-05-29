<?php
// app/Http/Controllers/StudentScheduleController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentSchedule;

class StudentScheduleController extends Controller
{
    public function index()
    {
        // Fetch all student schedules from the database
        $studentSchedules = StudentSchedule::all();
        
        // Debug output to check if data is fetched
        // dd($studentSchedules);
        // exit;

        // Pass the fetched schedules to the view for display
        return view('timetable.student-schedules', ['studentSchedules' => $studentSchedules]);
    }


    public function create()

        {
            return view('timetable.studentcreate');
        }

        

    public function store(Request $request)
        
        {  // Validate the form data
            $request->validate([
                'module_name' => 'required|string|max:255',
                'class' => 'required|string|max:255',
                'datetime' => 'required|date',
                'number_of_classes' => 'required|integer|min:1',
            ]);

            // Create a new student schedule instance
            $studentSchedule = new StudentSchedule();
            $studentSchedule->module_name = $request->module_name;
            $studentSchedule->class = $request->class;
            $studentSchedule->datetime = $request->datetime;
            $studentSchedule->number_of_classes = $request->number_of_classes;
            $studentSchedule->save();

            // Redirect back to the create page with a success message
            return redirect()->route('student-schedules.create')->with('success', 'Student schedule created successfully!');
        }
    }
