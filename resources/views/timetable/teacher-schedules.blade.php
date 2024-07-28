@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="mt-5 mb-3 clearfix">
                            <h2 class="pull-left">Teacher's Schedule</h2>
                            </br>
                            <a href="{{ route('teacher-schedules.create', ['teacher_id' => Session::get('user_id')]) }}" class="btn btn-success pull-right">
                                <i class="fa fa-plus"></i> Add Module
                            </a>
                        </div>

                        @if($teacherSchedules->isNotEmpty())
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course Name</th>
                                    <th>Module Name</th>
                                    <th>Class</th>
                                    <th>Date/Time</th>
                                    <th>Number of Students</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teacherSchedules as $schedule)
                                <tr>
                                    <td hidden>{{ $schedule->id }}</td>
                                    <td></td>
                                    <td>{{ $schedule->course_name }}</td>
                                    <td>{{ $schedule->module_name }}</td>
                                    <td>{{ $schedule->class }}</td>
                                    <td>{{ $schedule->datetime }}</td>
                                    <td>{{ $schedule->number_of_students }}</td>
                                    <td>
                                        <a href="{{ route('teacher-schedules.show', $schedule->id) }}" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>
                                        <a href="{{ route('teacher-schedules.edit', $schedule->id) }}" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="far fa-edit"></span></a>
                                        <form action="{{ route('teacher-schedules.destroy', $schedule->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="Delete Record" style="border: none; background-color:transparent;">
                                                <span class="fa fa-trash"></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-danger"><em>No records were found.</em></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
