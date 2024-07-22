<!-- resources/views/grading/show.blade.php -->

@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2>Grading Details</h2>
        @if($studentGrades->isEmpty())
            <p>No grades available.</p>
        @else
            @foreach($studentGrades as $newGrading)
                <div>
                    <p><strong>Created by:</strong> {{ $newGrading->teacher_id }}</p>
                    <p><strong>Student Id:</strong> {{ $newGrading->student_id }}</p>
                    <p><strong>Student Name:</strong> {{ $newGrading->full_name }}</p>
                    <p><strong>Module Name:</strong> {{ $newGrading->module_name }}</p>
                    <p><strong>Grading:</strong> {{ $newGrading->grading }}</p>
                    <p><strong>Semester:</strong> {{ $newGrading->semester }}</p>
                </div>
                <hr>
            @endforeach
        @endif
        <a href="{{ route('student/dashboard') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
