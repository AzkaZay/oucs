@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Course List</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <a href="{{ route('courses.add-courses.page') }}" class="btn btn-primary"><i class="fa fa-plus"></i></i>  Add New Course</a>
                        </br>
                        </br>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Course Name</th>
                                        <th>Head of Department</th>
                                        <th>Year Introduced</th>
                                        <th>Number of Students</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($newCourse as $course)
                                    <tr>
                                        <td>{{ $course->id }}</td>
                                        <td>{{ $course->course_name }}</td>
                                        <td>{{ $course->hod }}</td>
                                        <td>{{ $course->year_introduced }}</td>
                                        <td>{{ $course->number_of_students }}</td>
                                        <td class="text-end">
                                            <a href="{{ route('list-courses.show', $course->id) }}" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>
                                            <a href="{{ route('list-courses.edit', $course->id) }}" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="far fa-edit"></span></a>
                                            <form action="{{ route('list-courses.destroy', $course->id) }}" method="POST" style="display: inline;">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
