<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timetable;

class TimetableController extends Controller
{
    // Index method to display all timetables
    public function index()
    {
        $timetables = Timetable::all();
        return view('timetable.list-timetable', ['timetables' => $timetables]);
    }

    // Method to show form for creating a new timetable entry
    public function create()
    {
        return view('timetable.add-timetable');
    }

    // Store a newly created timetable entry in the database
    public function store(Request $request)
    {
        $request->validate([
            'course_code' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'module_name' => 'required|string|max:255',
            'cohort' => 'required|string|max:255',
            'instructor' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'head_of_department' => 'required|string|max:255',
        ]);

        $timetable = new Timetable();
        $timetable->course_code = $request->input('course_code');
        $timetable->course_name = $request->input('course_name');
        $timetable->module_name = $request->input('module_name');
        $timetable->cohort = $request->input('cohort');
        $timetable->instructor = $request->input('instructor');
        $timetable->day = $request->input('day');
        $timetable->date = $request->input('date');
        $timetable->time = $request->input('time');
        $timetable->location = $request->input('location');
        $timetable->head_of_department = $request->input('head_of_department');
        $timetable->save();

        return redirect()->route('timetable.index')->with('success', 'Schedule created successfully.');
    }

    // Show method to display a specific timetable entry
    public function show($id)
    {
        $timetable = Timetable::findOrFail($id);
        return view('timetable.show-record', compact('timetable'));
    }

    // Show form for editing a specific timetable entry
    public function edit($id)
    {
        $timetable = Timetable::findOrFail($id);
        return view('timetable.edit-timetable', compact('timetable'));
    }

    // Update a specific timetable entry in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'course_code' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'module_name' => 'required|string|max:255',
            'cohort' => 'required|string|max:255',
            'instructor' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'head_of_department' => 'required|string|max:255',
        ]);

        $timetable = Timetable::findOrFail($id);
        $timetable->update($request->all());

        return redirect()->route('timetable.index')->with('success', 'Timetable entry updated successfully.');
    }

    // Destroy method to delete a specific timetable entry from the database
    public function destroy($id)
    {
        $timetable = Timetable::findOrFail($id);
        $timetable->delete();

        return redirect()->route('timetable.index')->with('success', 'Timetable entry deleted successfully.');
    }
}
