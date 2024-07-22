@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Grades Markings</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">GradingList</a></li>
                        <li class="breadcrumb-item active">Grades</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        @if (Session::get('role_name') === 'teacher'|| Session::get('role_name') === 'Teacher' || Session::get('role_name') === 'Teachers')
                            <a href="{{ route('grading.add-grading') }}" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Add Grading
                            </a>
                            @endif
                            <br><br>
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Full Name</th>
                                        <th>Module Name</th>
                                        <th>Grading</th>
                                        <th>Year-Semester</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($newGrading as $grade)
                                    <tr>
                                        <td>{{ $grade->student_id }}</td>
                                        <td>{{ $grade->full_name }}</td>
                                        <td>{{ $grade->module_name }}</td>
                                        <td>{{ $grade->grading }}</td>
                                        <td>{{ $grade->semester }}</td>
                                        <td class="text-end">
                                        @if (Session::get('role_name') === 'teacher'|| Session::get('role_name') === 'Teacher' || Session::get('role_name') === 'Teachers')
                                            <a href="{{ route('list-grading.edit', $grade->id) }}" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="far fa-edit"></span></a>
                                            <form action="{{ route('list-grading.destroy', $grade->id) }}" method="POST" style="display: inline;">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
