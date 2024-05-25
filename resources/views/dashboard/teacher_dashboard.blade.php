
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
                            <h3 class="page-title">Welcome Jonathan!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Teacher</li>
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
                                    <h6>Total Classes</h6>
                                    <h3>04/06</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ URL::to('assets/img/icons/laptop.svg') }}" alt="Dashboard Icon">
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
                                    <h6>Total Students</h6>
                                    <h3>40/60</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ URL::to('assets/img/icons/education.svg') }}" alt="Dashboard Icon">
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
                                    <h6>Total Lessons</h6>
                                    <h3>30/50</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ URL::to('assets/img/icons/homework.svg') }}" alt="Dashboard Icon">
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
                                    <h6>Total Hours</h6>
                                    <h3>15/20</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ URL::to('assets/img/icons/hours.svg') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 col-lg-12 col-xl-8">
                    <div class="row">
                        <div class="col-12 col-lg-8 col-xl-8 d-flex">
                            <div class="card flex-fill comman-shadow">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <h5 class="card-title">Upcoming Lesson</h5>
                                        </div>
                                        <div class="col-6">
                                            <span class="float-end view-link"><a href="#">View All
                                                    Courses</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-3 pb-3">
                                    <div class="table-responsive lesson">
                                        <table class="table table-center">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="date">
                                                            <b>Lessons 30</b>
                                                            <p>3.1 Ipsuum dolor</p>
                                                            <ul class="teacher-date-list">
                                                                <li><i class="fas fa-calendar-alt me-2"></i>Sep 5,
                                                                    2022</li>
                                                                <li>|</li>
                                                                <li><i class="fas fa-clock me-2"></i>09:00 - 10:00
                                                                    am</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="lesson-confirm">
                                                            <a href="#">Confirmed</a>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-info">Reschedule</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="date">
                                                            <b>Lessons 30</b>
                                                            <p>3.1 Ipsuum dolor</p>
                                                            <ul class="teacher-date-list">
                                                                <li><i class="fas fa-calendar-alt me-2"></i>Sep 5,
                                                                    2022</li>
                                                                <li>|</li>
                                                                <li><i class="fas fa-clock me-2"></i>09:00 - 10:00
                                                                    am</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="lesson-confirm">
                                                            <a href="#">Confirmed</a>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-info">Reschedule</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                <div class="col-12 col-lg-12 col-xl-8">
                    <div class="row">
                        <div class="col-12 col-lg-8 col-xl-8 d-flex">
                            <div class="card flex-fill comman-shadow">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <h5 class="card-title">Testing Teacher</h5>
                                        </div>
                                        <div class="col-6">
                                            <span class="float-end view-link"><a href="#">View All
                                                    working hours</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-3 pb-3">
                                    <div class="table-responsive lesson">
                                        <table class="table table-center">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="date">
                                                            <b>Lessons 30Guava juice</p>
                                                            <p>Guava juice</p>
                                                            <p>Guava juice</p>
                                                            <p>Guava juice</p>
                                                            <p>Guava juice</p>
                                                            <p>Guava juice</p>
                                                            <p>Guava juice</p>
                                                            <p>Guava juice</b>
                                                            <p>nopppp</p>
                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-lg-12 col-xl-4 d-flex">
                    <div class="card flex-fill comman-shadow">
                        <div class="card-body">
                            <div id="calendar-doctor" class="calendar-container"></div>
                            <div class="calendar-info calendar-info1">
                                <div class="up-come-header">
                                    <h2>Upcoming Events</h2>
                                    <span><a href="javascript:;"><i class="feather-plus"></i></a></span>
                                </div>
                                <div class="upcome-event-date">
                                    <h3>10 Jan</h3>
                                    <span><i class="fas fa-ellipsis-h"></i></span>
                                </div>
                                <div class="calendar-details">
                                    <p>08:00 am</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>Botony</h4>
                                            <h5>Lorem ipsum sit amet</h5>
                                        </div>
                                        <span>08:00 - 09:00 am</span>
                                    </div>
                                </div>
                                <div class="calendar-details">
                                    <p>09:00 am</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>Botony</h4>
                                            <h5>Lorem ipsum sit amet</h5>
                                        </div>
                                        <span>09:00 - 10:00 am</span>
                                    </div>
                                </div>
                                <div class="calendar-details">
                                    <p>10:00 am</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>Botony</h4>
                                            <h5>Lorem ipsum sit amet</h5>
                                        </div>
                                        <span>10:00 - 11:00 am</span>
                                    </div>
                                </div>
                                <div class="upcome-event-date">
                                    <h3>10 Jan</h3>
                                    <span><i class="fas fa-ellipsis-h"></i></span>
                                </div>
                                <div class="calendar-details">
                                    <p>08:00 am</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>English</h4>
                                            <h5>Lorem ipsum sit amet</h5>
                                        </div>
                                        <span>08:00 - 09:00 am</span>
                                    </div>
                                </div>
                                <div class="calendar-details">
                                    <p>09:00 am</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>Mathematics </h4>
                                            <h5>Lorem ipsum sit amet</h5>
                                        </div>
                                        <span>09:00 - 10:00 am</span>
                                    </div>
                                </div>
                                <div class="calendar-details">
                                    <p>10:00 am</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>History</h4>
                                            <h5>Lorem ipsum sit amet</h5>
                                        </div>
                                        <span>10:00 - 11:00 am</span>
                                    </div>
                                </div>
                                <div class="calendar-details">
                                    <p>11:00 am</p>
                                    <div class="calendar-box break-bg">
                                        <div class="calandar-event-name">
                                            <h4>Break</h4>
                                            <h5>Lorem ipsum sit amet</h5>
                                        </div>
                                        <span>11:00 - 12:00 am</span>
                                    </div>
                                </div>
                                <div class="calendar-details">
                                    <p>11:30 am</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>History</h4>
                                            <h5>Lorem ipsum sit amet</h5>
                                        </div>
                                        <span>11:30 - 12:00 am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
