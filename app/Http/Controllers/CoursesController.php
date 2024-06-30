<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CoursesController extends Controller
{
    public function indexCourse()
    {
        $newCourse = Courses::all();
        return view('courses.add-courses', ['newCourse' => $newCourse]);
    }

    public function CourseList()
    {
        $newCourse = Courses::all();
        return view('courses.list-courses', ['newCourse' => $newCourse]);
    }

    public function show($id)
    {
        $newCourse = Courses::findOrFail($id);
        return view('courses.courses-show', compact('newCourse'));
    }

    public function store(Request $request)
    {
        $rules = [
            'course_id' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'hod' => 'required|string|max:255',
            'year_introduced' => 'required|date_format:Y-m-d',
            'number_of_students' => 'required|integer',
        ];

        $request->validate($rules);

        $newCourse = new Courses();
        $newCourse->course_id = $request->input('course_id');
        $newCourse->course_name = $request->input('course_name');
        $newCourse->hod = $request->input('hod');
        $newCourse->year_introduced = $request->input('year_introduced');
        $newCourse->number_of_students = $request->input('number_of_students');
        $newCourse->save();

        return redirect()->route('courses.list-courses.page')->with('success', 'Course created successfully.');
    }

    public function editCourse($id)
    {
        $newCourse = Courses::findOrFail($id);
        return view('courses.edit-courses', compact('newCourse'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_id' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'hod' => 'required|string|max:255',
            'year_introduced' => 'required|date_format:Y-m-d',
            'number_of_students' => 'required|integer',
        ]);

        $newCourse = Courses::findOrFail($id);
        $newCourse->update($request->all());

        return redirect()->route('courses.list-courses.page')->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        $newCourse = Courses::findOrFail($id);
        $newCourse->delete();

        return redirect()->route('courses.list-courses.page')->with('success', 'Course deleted successfully.');
    }
}
