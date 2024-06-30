@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Course</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                        <form action="{{ route('list-courses.update', $newCourse->id) }}" method="POST">
                        @csrf
                            @method('PUT')
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Course Details</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Course Id <span class="login-danger">*</span></label>
                                            <input type="text" name="course_id" class="form-control" value="{{ $newCourse->course_id }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Course Name <span class="login-danger">*</span></label>
                                            <input type="text" name="course_name" class="form-control" value="{{ $newCourse->course_name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Head of Department<span class="login-danger">*</span></label>
                                            <input type="text" name="hod" class="form-control" value="{{ $newCourse->hod }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Year Introduced<span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text" name="year_introduced"
                                                placeholder="YYYY-MM-DD" value="{{ $newCourse->year_introduced }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Number of Students<span class="login-danger">*</span></label>
                                            <input type="text" name="number_of_students" class="form-control" value="{{ $newCourse->number_of_students }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="{{ route('courses.list-courses.page') }}" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
