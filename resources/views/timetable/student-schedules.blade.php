@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-body">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Student's Schedule</h2>
                    <a href="{{ route('student-schedules.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add Module</a>
                </div>
                <!-- @if(!empty($studentSchedules)) -->
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Module Name</th>
                            <th>Class</th>
                            <th>Date/Time</th>
                            <th>Number of Classes</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($studentSchedules as $schedule)
                        <tr>
                            <td>{{ $schedule->id }}</td>
                            <td>{{ $schedule->module_name }}</td>
                            <td>{{ $schedule->class }}</td>
                            <td>{{ $schedule->datetime }}</td>
                            <td>{{ $schedule->number_of_classes }}</td>
                            <td>
                                <a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>
                                <a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="far fa-edit"></span></a>
                                <a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>
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
