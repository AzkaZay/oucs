@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2>Schedule Details</h2>
        <br>
        <div>
            <p><strong>Created by:</strong> {{ $teacherSchedule->created_by }}</p>
            <p><strong>Course Name:</strong> {{ $teacherSchedule->course_name }}</p>
            <p><strong>Module Name:</strong> {{ $teacherSchedule->module_name }}</p>
            <p><strong>Class:</strong> {{ $teacherSchedule->class }}</p>
            <p><strong>Date/Time:</strong> {{ $teacherSchedule->datetime }}</p>
            <p><strong>Number of Students:</strong> {{ $teacherSchedule->number_of_students }}</p>
        </div>
        <a href="{{ route('timetable.teacher-schedules.page', ['teacher_id' => Session::get('user_id')]) }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
