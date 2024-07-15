@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Edit Grades</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('list-grading.update', $newGrading->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Grade Markings</span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Student Id <span class="login-danger">*</span></label>
                                        <input type="text" name="student_id" class="form-control" value="{{ $newGrading->student_id }}" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Full Name <span class="login-danger">*</span></label>
                                        <input type="text" name="full_name" class="form-control" value="{{ $newGrading->full_name }}" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Module Name <span class="login-danger">*</span></label>
                                        <input type="text" name="module_name" class="form-control" value="{{ $newGrading->module_name }}" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Grading<span class="login-danger">*</span></label>
                                        <select class="form-control select @error('grading') is-invalid @enderror" name="grading" value="{{ $newGrading->grading }}" required>
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
                                        <label>Semester<span class="login-danger">*</span></label>
                                        <select class="form-control select @error('semester') is-invalid @enderror" name="semester" value="{{ $newGrading->semester }}" required>
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
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="{{ route('grading.list-grading') }}" class="btn btn-secondary">Cancel</a>
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
