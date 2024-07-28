<?php
// app/Http/Controllers/StudentScheduleController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentSchedule;

class StudentScheduleController extends Controller
{
    // Index method to display all student schedules
    public function index($studentId = null)
    {
        if($studentId){

            $studentSchedules = StudentSchedule::whereRaw('CAST(student_id AS UNSIGNED) = ?', [$studentId])
            ->get();

            return view('timetable.student-schedules', ['studentSchedules' => $studentSchedules, 'student_id' => $studentId]);
        }
        else{
            $studentSchedules = StudentSchedule::all();
            return view('timetable.student-schedules', ['studentSchedules' => $studentSchedules]);
        
        }
    }

    public function create()
    {
        // Return the studentcreate.blade.php view for creating a new student schedule
        return view('timetable.studentcreate');
    }


    // Show method to display a specific student schedule
    public function show($id)
    {
        $studentSchedule = StudentSchedule::findOrFail($id);
        return view('timetable.student-schedule-show', compact('studentSchedule'));
    }

    public function store(Request $request)
    {
        // Validation rules for the incoming request data
        $rules = [
            'module_name' => 'required',
            'class' => 'required',
            'datetime' => 'required',
            'number_of_classes' => 'required|numeric',
            
        ];

        // Validate the request data
        $request->validate($rules);

        // Create a new student schedule using the request data
        $studentSchedule = new StudentSchedule();
        $studentSchedule->student_id = auth()->user()->id; // Get the authenticated user's ID
        $studentSchedule->module_name = $request->input('module_name');
        $studentSchedule->class = $request->input('class');
        $studentSchedule->datetime = $request->input('datetime');
        $studentSchedule->number_of_classes = $request->input('number_of_classes');
        $studentSchedule->created_by = auth()->user()->id; // Get the authenticated user's ID
        $studentSchedule->save();

        // Redirect the user after successfully storing the student schedule
        return redirect()->route('timetable.student-schedules.page', ['student_id' => auth()->user()->id])->with('success', 'Student Schedule created successfully.');
    }


    // Edit method to show the form for editing a specific student schedule
    public function edit($id)
    {
        $studentSchedule = StudentSchedule::findOrFail($id);
        return view('timetable.student-schedule-edit', compact('studentSchedule'));
    }

    // Update method to update a specific student schedule in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'module_name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'datetime' => 'required|date',
            'number_of_classes' => 'required|integer',
            'created_by'=>'required|integer',
        ]);

        $studentSchedule = StudentSchedule::findOrFail($id);
        $studentSchedule->update($request->all());

        return redirect()->route('timetable.student-schedules.page', ['student_id' => intval(auth()->user()->id)])->with('success', 'Student Schedule updated successfully.');
    }

    // Destroy method to delete a specific student schedule from the database
    public function destroy($id)
    {
        $studentSchedule = StudentSchedule::findOrFail($id);
        $studentSchedule->delete();

        return redirect()->route('timetable.student-schedules.page', ['student_id' => auth()->user()->id])->with('success', 'Student Schedule deleted successfully.');
    }
}
