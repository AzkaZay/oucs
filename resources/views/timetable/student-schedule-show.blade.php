@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2>Student Schedule Details</h2>
        <div>
            <p><strong>Created by:</strong> {{ $studentSchedule->created_by }}</p>
            <p><strong>Module Name:</strong> {{ $studentSchedule->module_name }}</p>
            <p><strong>Class:</strong> {{ $studentSchedule->class }}</p>
            <p><strong>Date/Time:</strong> {{ $studentSchedule->datetime }}</p>
            <p><strong>Number of Classes:</strong> {{ $studentSchedule->number_of_classes }}</p>
        </div>
        <a href="{{ route('timetable.student-schedules.page', ['student_id' => Session::get('user_id')]) }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
