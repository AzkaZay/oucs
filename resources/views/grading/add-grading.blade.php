@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Add Grading</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Grading</a></li>
                            <li class="breadcrumb-item active">Add Grading</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                        <form method="POST" action="{{ route('list-grading.store') }}">
                            @csrf        
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Grading Details</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Student ID <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="student_id" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Full Name <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="full_name" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Module Name <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="module_name" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Grading <span class="login-danger">*</span></label>
                                            <select class="form-control select @error('grading') is-invalid @enderror" name="grading" required>
                                                <option selected disabled>Select Grading</option>
                                                <option value="A" {{ old('grading') == 'A' ? 'selected' : '' }}>A</option>
                                                <option value="B" {{ old('grading') == 'B' ? 'selected' : '' }}>B</option>
                                                <option value="C" {{ old('grading') == 'C' ? 'selected' : '' }}>C</option>
                                                <option value="D" {{ old('grading') == 'D' ? 'selected' : '' }}>D</option>
                                                <option value="F" {{ old('grading') == 'F' ? 'selected' : '' }}>F</option>
                                                <option value="Ungraded" {{ old('grading') == 'Ungraded' ? 'selected' : '' }}>Ungraded</option>
                                            </select>
                                            @error('grading')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Semester <span class="login-danger">*</span></label>
                                            <select class="form-control select @error('semester') is-invalid @enderror" name="semester" required>
                                                <option selected disabled>Select Year-Semester</option>
                                                <option value="year1_semester1" {{ old('semester') == 'year1_semester1' ? 'selected' : '' }}>year1-semester1</option>
                                                <option value="year1_semester2" {{ old('semester') == 'year1_semester2' ? 'selected' : '' }}>year1-semester2</option>
                                                <option value="year2_semester1" {{ old('semester') == 'year2_semester1' ? 'selected' : '' }}>year2-semester1</option>
                                                <option value="year2_semester2" {{ old('semester') == 'year2_semester2' ? 'selected' : '' }}>year2-semester2</option>
                                                <option value="year3_semester1" {{ old('semester') == 'year3_semester1' ? 'selected' : '' }}>year3-semester1</option>
                                                <option value="year3_semester2" {{ old('semester') == 'year3_semester2' ? 'selected' : '' }}>year3-semester2</option>
                                            </select>
                                            @error('semester')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
