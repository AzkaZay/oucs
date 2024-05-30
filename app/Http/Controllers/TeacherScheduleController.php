<?php
// app/Http/Controllers/TeacherScheduleController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherSchedule;

class TeacherScheduleController extends Controller
{
    // Index method to display all teacher schedules
    public function index()
    {
        $teacherSchedules = TeacherSchedule::all();
        return view('timetable.teacher-schedules', ['teacherSchedules' => $teacherSchedules]);
    }

    public function create()
    {
        // Return the teachercreate.blade.php view for creating a new teacher schedule
        return view('timetable.teachercreate');
    }


    // Show method to display a specific teacher schedule
    public function show($id)
    {
        $teacherSchedule = TeacherSchedule::findOrFail($id);
        return view('timetable.teacher-schedule-show', compact('teacherSchedule'));
    }

    public function store(Request $request)
{
    // Validation rules for the incoming request data
    $rules = [
        'course_name' => 'required',
        'module_name' => 'required',
        'class' => 'required',
        'datetime' => 'required',
        'number_of_students' => 'required|numeric',
    ];

    // Validate the request data
    $request->validate($rules);

    // Create a new teacher schedule using the request data
    $teacherSchedule = new TeacherSchedule();
    $teacherSchedule->course_name = $request->input('course_name');
    $teacherSchedule->module_name = $request->input('module_name');
    $teacherSchedule->class = $request->input('class');
    $teacherSchedule->datetime = $request->input('datetime');
    $teacherSchedule->number_of_students = $request->input('number_of_students');
    $teacherSchedule->save();

    // Redirect the user after successfully storing the teacher schedule
    return redirect()->route('timetable.teacher-schedules.page')->with('success', ' Schedule created successfully.');
}


    // Edit method to show the form for editing a specific teacher schedule
    public function edit($id)
    {
        $teacherSchedule = TeacherSchedule::findOrFail($id);
        return view('timetable.teacher-schedule-edit', compact('teacherSchedule'));
    }

    // Update method to update a specific teacher schedule in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'module_name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'datetime' => 'required|date',
            'number_of_students' => 'required|integer',
        ]);

        $teacherSchedule = TeacherSchedule::findOrFail($id);
        $teacherSchedule->update($request->all());

        return redirect()->route('timetable.teacher-schedules.page')->with('success', ' Schedule updated successfully.');
    }

    // Destroy method to delete a specific teacher schedule from the database
    public function destroy($id)
    {
        $teacherSchedule = TeacherSchedule::findOrFail($id);
        $teacherSchedule->delete();

        return redirect()->route('timetable.teacher-schedules.page')->with('success', ' Schedule deleted successfully.');
    }
}
