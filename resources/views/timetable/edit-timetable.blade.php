@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2>Edit Schedule</h2>
        <form action="{{ route('timetable.update', $timetable->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="course_code">Course Code</label>
                <input type="text" name="course_code" class="form-control" value="{{ $timetable->course_code }}" required>
            </div>
            <div class="form-group">
                <label for="course_name">Course Name</label>
                <input type="text" name="course_name" class="form-control" value="{{ $timetable->course_name }}" required>
            </div>
            <div class="form-group">
                <label for="module_name">Module Name</label>
                <input type="text" name="module_name" class="form-control" value="{{ $timetable->module_name }}">
            </div>
            <div class="form-group">
                <label for="cohort">Cohort</label>
                <input type="text" name="cohort" class="form-control" value="{{ $timetable->cohort }}" required>
            </div>
            <div class="form-group">
                <label for="instructor">Instructor</label>
                <input type="text" name="instructor" class="form-control" value="{{ $timetable->instructor }}" required>
            </div>
            <div class="form-group">
                <label for="day">Day</label>
                <input type="text" name="day" class="form-control" value="{{ $timetable->day }}" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" value="{{ $timetable->date }}" required>
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" name="time" class="form-control" value="{{ $timetable->time }}" required>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" class="form-control" value="{{ $timetable->location }}" required>
            </div>
            <div class="form-group">
                <label for="head_of_department">Head of Department</label>
                <input type="text" name="head_of_department" class="form-control" value="{{ $timetable->head_of_department }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('timetable.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
