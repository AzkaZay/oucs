@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-body">
                        <h2>Create New Schedule</h2>
                        <form method="POST" action="{{ route('timetable.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="course_code">Course Code:</label>
                                <input type="text" class="form-control" id="course_code" name="course_code" required>
                            </div>
                            <div class="form-group">
                                <label for="course_name">Course Name:</label>
                                <input type="text" class="form-control" id="course_name" name="course_name" required>
                            </div>
                            <div class="form-group">
                                <label for="module_name">Module Name:</label>
                                <input type="text" class="form-control" id="module_name" name="module_name" required>
                            </div>
                            <div class="form-group">
                                <label for="cohort">Cohort:</label>
                                <input type="text" class="form-control" id="cohort" name="cohort" required>
                            </div>
                            <div class="form-group">
                                <label for="instructor">Instructor:</label>
                                <input type="text" class="form-control" id="instructor" name="instructor" required>
                            </div>
                            <div class="form-group">
                                <label for="day">Day:</label>
                                <input type="text" class="form-control" id="day" name="day" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="time">Time:</label>
                                <input type="text" class="form-control" id="time" name="time" required>
                            </div>
                            <div class="form-group">
                                <label for="location">Location:</label>
                                <input type="text" class="form-control" id="location" name="location" required>
                            </div>
                            <div class="form-group">
                                <label for="head_of_department">Head of Department:</label>
                                <input type="text" class="form-control" id="head_of_department" name="head_of_department" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
