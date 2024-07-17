<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                @if (Session::get('role_name') === 'Admin')
                <li class="{{ set_active(['setting/page']) }} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                    <a href="{{ route('setting/page') }}"><i class="fas fa-cog"></i> <span>Settings</span></a>
                </li>
                @endif

                <li class="submenu {{ set_active(['home','teacher/dashboard','student/dashboard']) }}">
                    <a href="#"><i class="feather-grid"></i> <span>Dashboard</span> <span class="menu-arrow"></span></a>
                    <ul>
                        @if (Session::get('role_name') === 'Admin')
                        <li class="{{ set_active(['home']) }} {{ (request()->is('view')) ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Admin</a>
                        </li>
                        @endif

                        @if (Session::get('role_name') === 'teacher')
                        <li class="{{ set_active(['teacher/dashboard']) }} {{ (request()->is('view')) ? 'active' : '' }}">
                            <a href="{{ route('teacher/dashboard') }}">Teacher</a>
                        </li>
                        @endif

                        @if(Session::get('role_name') === 'Student')
                        <li class="{{ set_active(['student/dashboard']) }} {{ (request()->is('view')) ? 'active' : '' }}">
                            <a href="{{ route('student/dashboard') }}">Student</a>
                        </li>
                        @endif
                    </ul>
                </li>

                @if (Session::get('role_name') === 'Admin'|| Session::get('role_name') === 'teacher')
                <li class="menu-title">
                    <span>User Management</span>
                </li>
                @endif

                @if (Session::get('role_name') === 'Admin')
                <li class="submenu {{ set_active(['list/users']) }} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-shield-alt"></i> <span>Users</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('list/users') }}" class="{{ set_active(['list/users']) }} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">List Users</a></li>
                    </ul>
                </li>
                @endif

                @if (Session::get('role_name') === 'teacher')
                <li class="submenu {{ set_active(['student.add-student']) }} {{ (request()->is('student.add-student')) ? 'active' : '' }}">
                    <a href="{{ route('student.add-student') }}"><i class="fas fa-graduation-cap"></i><span>Students</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('student.list-students') }}" class="{{ set_active(['student.list-students','student.student-grid']) }}">Student List</a></li>
                    </ul>
                </li>
                @endif

                @if (Session::get('role_name') === 'Admin')
                <li class="submenu {{ set_active(['teacher/add/page','teacher/list/page','teacher/grid/page','teacher/edit']) }} {{ (request()->is('teacher/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span>Teachers</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('teacher/list/page') }}" class="{{ set_active(['teacher/list/page','teacher/grid/page']) }}">Teacher List</a></li>
                        <li><a href="{{ route('teacher/add/page') }}" class="{{ set_active(['teacher/add/page']) }}">Teacher Add</a></li>
                    </ul>
                </li>
                @endif

                <li class="menu-title">
    <span>Curriculum features</span>
</li>

@if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'teacher')
<li class="submenu {{ set_active(['grading/list-grading']) }} {{ (request()->is('grading/list-grading')) ? 'active' : '' }}">
    <a href="#"><i class="fab fa-pied-piper-square"></i> <span>Grade Markings</span> <span class="menu-arrow"></span></a>
    <ul>
        <li class="{{ set_active(['grading/list-grading']) }} {{ (request()->is('grading/list-grading')) ? 'active' : '' }}">
            <a href="{{ route('grading.list-grading') }}">Grading List</a>
        </li>
        @if (Session::get('role_name') === 'teacher')
        <li class="{{ set_active(['grading/add-grading', 'grading/edit-grading']) }} {{ (request()->is('grading/add-grading', 'grading/edit-grading')) ? 'active' : '' }}">
            <a href="{{ route('grading.add-grading') }}">Add Grading</a>
        </li>
        </li>
        @endif
    </ul>
</li>
@endif


                <li class="submenu {{ set_active(['courses.list-courses.page']) }}">
                    <a href="#"><i class="fas fa-book-reader"></i> <span>Courses</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('courses.list-courses.page') }}" class="{{ set_active(['courses.list-courses.page']) }}">View courses</a></li>
                    </ul>
                </li>

                @if (Session::get('role_name') === 'Admin')
                <li class="menu-title">
                    <span>Payments Management</span>
                </li>
                <li class="submenu {{ set_active(['payments']) }} {{ (request()->is('list-fees/add-fees/edit-fees/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span>Payment details</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('payments.list-fees') }}" class="{{ set_active(['payments.list-fees']) }}">List of Fees</a></li>
                        <li><a href="{{ route('payments.add_fees.page') }}" class="{{ set_active(['payments.add_fees.page']) }}">Add Fees</a></li>
                        <li><a href="{{ route('payments.edit_fees.page') }}" class="{{ set_active(['payments.edit_fees.page']) }}">Edit Fees</a></li>
                    </ul>
                </li>
                @endif

                <li class="submenu {{ set_active(['timetable.timetable.page','timetable.teacher-schedules.page','timetable.student-schedules.page']) }}">
                    <a href="#"><i class="fas fa-table"></i> <span>Scheduling Menu</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('timetable.timetable.page') }}" class="{{ set_active(['timetable.timetable.page']) }}">Time Table</a></li>
                        
                        @if (Session::get('role_name') === 'Student')
                        <li class="{{ set_active(['timetable.student-schedules.page']) }} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                            <a href="{{ route('timetable.student-schedules.page') }}">Student's Scheduler</a>
                        </li>
                        @endif

                        @if (Session::get('role_name') === 'teacher')
                        <li class="{{ set_active(['timetable.teacher-schedules.page']) }} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                            <a href="{{ route('timetable.teacher-schedules.page') }}">Teacher's Scheduler</a>
                        </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
