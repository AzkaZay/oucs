@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="mt-5 mb-3 clearfix">
                            <h2 class="pull-left">University Timetable</h2>
                            <br>
                            @if (Session::get('role_name') === 'Admin')
                            <a href="{{ route('timetable.create') }}" class="btn btn-success pull-right">
                                <i class="fa fa-plus"></i> Add Schedule</a>
                            @endif
                        </div>

                        @if($timetables->isNotEmpty())
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Module Name</th>
                                        <th>Cohort</th>
                                        <th>Instructor</th>
                                        <th>Day</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Location</th>
                                        <th>Head of Department</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($timetables as $timetable)
                                    <tr>
                                        <td>{{ $timetable->id }}</td>
                                        <td>{{ $timetable->course_code }}</td>
                                        <td>{{ $timetable->course_name }}</td>
                                        <td>{{ $timetable->module_name }}</td>
                                        <td>{{ $timetable->cohort }}</td>
                                        <td>{{ $timetable->instructor }}</td>
                                        <td>{{ $timetable->day }}</td>
                                        <td>{{ $timetable->date }}</td>
                                        <td>{{ $timetable->time }}</td>
                                        <td>{{ $timetable->location }}</td>
                                        <td>{{ $timetable->head_of_department }}</td>
                                        <td>
                                        @if (Session::get('role_name') === 'Admin')
                                            <a href="{{ route('timetable.show', $timetable->id) }}" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>
                                            <a href="{{ route('timetable.edit', $timetable->id) }}" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="far fa-edit"></span></a>
                                            <form action="{{ route('timetable.destroy', $timetable->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Delete Record" style="border: none; background-color:transparent;">
                                                    <span class="fa fa-trash"></span>
                                                </button>
                                            </form>
                                        @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
