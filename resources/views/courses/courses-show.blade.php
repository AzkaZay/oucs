@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2>Course Details</h2>
        <div>
            <p><strong>Course Id:</strong> {{ $newCourse->course_id }}</p>
            <p><strong>Course Name:</strong> {{ $newCourse->course_name }}</p>
            <p><strong>HOD:</strong> {{ $newCourse->hod }}</p>
            <p><strong>Year introduced:</strong> {{ $newCourse->year_introduced}}</p>
            <p><strong>Number of Students:</strong> {{ $newCourse->number_of_students }}</p>
        </div>
        <a href="{{ route('courses.list-courses.page') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
