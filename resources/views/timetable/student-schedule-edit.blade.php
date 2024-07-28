@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2>Edit Student Schedule</h2>
        <form action="{{ route('student-schedules.update', ['id' => $studentSchedule->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <input hidden type="text" name="created_by" class="form-control" value="{{ $studentSchedule->created_by??intval(Session::get('user_id')) }}" required>
            <div class="form-group">
                <label for="module_name">Module Name</label>
                <input type="text" name="module_name" class="form-control" value="{{ $studentSchedule->module_name }}" required>
            </div>
            <div class="form-group">
                <label for="class">Class</label>
                <input type="text" name="class" class="form-control" value="{{ $studentSchedule->class }}" required>
            </div>
            <div class="form-group">
                <label for="datetime">Date/Time</label>
                <input type="datetime-local" name="datetime" class="form-control" value="{{ $studentSchedule->datetime }}" required>
            </div>
            <div class="form-group">
                <label for="number_of_classes">Number of Classes</label>
                <input type="number" name="number_of_classes" class="form-control" value="{{ $studentSchedule->number_of_classes }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('timetable.student-schedules.page', ['student_id' => Session::get('user_id')]) }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
