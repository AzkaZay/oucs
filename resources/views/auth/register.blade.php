
@extends('layouts.app')
@section('content')
    <div class="login-right">
        <div class="login-right-wrap">
            <h1>Sign Up</h1>
            <p class="account-subtitle">Enter details to create your account</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Full Name <span class="login-danger">*</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                </div>
                
                <div class="form-group">
                    <label>Phone<span class="login-danger">*</span></label>
                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number">
                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                </div>
                
                <div class="form-group">
                    <label>Address<span class="login-danger">*</span></label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address">
                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                </div>

                <div class="form-group">
                    <label>DOB<span class="login-danger">*</span></label>
                    <input type="text" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth">
                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                </div>

                <div class="form-group">
                    <label>Email <span class="login-danger">*</span></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                </div>
                {{-- insert defaults --}}
                <input type="hidden" class="image" name="image" value="user.jpg">
                <div class="form-group local-forms">
                    <label>Role Name <span class="login-danger">*</span></label>
                    <select class="form-control select @error('role_name') is-invalid @enderror" name="role_name" id="role_name">
                        <option selected disabled></option>
                        <option value="student" {{ old('role_name') == 'student' ? 'selected' : '' }}>Student</option>

                        @foreach ($role as $name)
                            <option value="{{ $name->role_type }}">{{ $name->role_type }}</option>
                        @endforeach
                    </select>
                    @error('role_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                
                <div class="form-group">
                    <label>Password <span class="login-danger">*</span></label>
                    <input type="password" class="form-control pass-input  @error('password') is-invalid @enderror" name="password">
                    <span class="profile-views feather-eye toggle-password"></span>
                </div>
                <div class="form-group">
                    <label>Confirm password <span class="login-danger">*</span></label>
                    <input type="password" class="form-control pass-confirm @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                    <span class="profile-views feather-eye reg-toggle-password"></span>
                </div>
                <div class=" dont-have">Already Registered? <a href="{{ route('login') }}">Login</a></div>
                <div class="form-group mb-0">
                    <button class="btn btn-danger btn-block" type="submit">Register</button>
                </div>
            </form>
            <div class="login-or">
                <span class="or-line"></span>
                <span class="span-or">OUCS</span>
            </div>
        </div>
    </div>
@endsection
