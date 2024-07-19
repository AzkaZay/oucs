@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Welcome {{ Session::get('name') }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">{{ Session::get('name') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Students</h6>
                                <h3 id="student-count">Loading...</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/education.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Lecturers</h6>
                                <h3>32</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/teamwork.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Department</h6>
                                <h3>4</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/city.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Revenue</h6>
                                <h3>$505</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/hand.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 d-flex">
                <div class="card flex-fill student-space comman-shadow">
                    <div class="card-header d-flex align-items-center">
                        <h5>News here</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetchStudentCount();

        // Function to fetch student count from the API
        function fetchStudentCount() {
            fetch('/student-count')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('student-count').innerText = data.count;
                })
                .catch(error => {
                    console.error('Error fetching student count:', error);
                    document.getElementById('student-count').innerText = 'Error';
                });
        }

        // Optionally, refresh count every half minute (30000 ms)
        setInterval(fetchStudentCount, 30000);
    });
</script>
@endsection
