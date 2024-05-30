@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2>Schedule Details</h2>
        <div>
            <p><strong>Course Name:</strong> {{ $teacherSchedule->course_name }}</p>
            <p><strong>Module Name:</strong> {{ $teacherSchedule->module_name }}</p>
            <p><strong>Class:</strong> {{ $teacherSchedule->class }}</p>
            <p><strong>Date/Time:</strong> {{ $teacherSchedule->datetime }}</p>
            <p><strong>Number of Students:</strong> {{ $teacherSchedule->number_of_students }}</p>
        </div>
        <a href="{{ route('timetable.teacher-schedules.page') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
