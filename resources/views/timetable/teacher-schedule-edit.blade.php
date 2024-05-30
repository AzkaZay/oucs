@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2>Edit Schedule</h2>
        <form action="{{ route('teacher-schedules.update', $teacherSchedule->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="course_name">Course Name</label>
                <input type="text" name="course_name" class="form-control" value="{{ $teacherSchedule->course_name }}" required>
            </div>
            <div class="form-group">
                <label for="module_name">Module Name</label>
                <input type="text" name="module_name" class="form-control" value="{{ $teacherSchedule->module_name }}" required>
            </div>
            <div class="form-group">
                <label for="class">Class</label>
                <input type="text" name="class" class="form-control" value="{{ $teacherSchedule->class }}" required>
            </div>
            <div class="form-group">
                <label for="datetime">Date/Time</label>
                <input type="datetime-local" name="datetime" class="form-control" value="{{ $teacherSchedule->datetime }}" required>
            </div>
            <div class="form-group">
                <label for="number_of_students">Number of Students</label>
                <input type="number" name="number_of_students" class="form-control" value="{{ $teacherSchedule->number_of_students }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('timetable.teacher-schedules.page') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
