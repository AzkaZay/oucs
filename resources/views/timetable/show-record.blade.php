@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2>Schedule Details</h2>
        <div>
            <p><strong>Course Code:</strong> {{ $timetable->course_code }}</p>
            <p><strong>Course Name:</strong> {{ $timetable->course_name }}</p>
            <p><strong>Module Name:</strong> {{ $timetable->module_name }}</p>
            <p><strong>Cohort:</strong> {{ $timetable->cohort }}</p>
            <p><strong>Instructor:</strong> {{ $timetable->instructor }}</p>
            <p><strong>Day:</strong> {{ $timetable->day }}</p>
            <p><strong>Date:</strong> {{ $timetable->date }}</p>
            <p><strong>Time:</strong> {{ $timetable->time }}</p>
            <p><strong>Location:</strong> {{ $timetable->location }}</p>
            <p><strong>Head of Department:</strong> {{ $timetable->head_of_department }}</p>
        </div>
        <a href="{{ route('timetable.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
