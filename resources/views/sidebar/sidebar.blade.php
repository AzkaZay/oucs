<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="{{set_active(['setting/page'])}}">
                    <a href="{{ route('setting/page') }}">
                        <i class="fas fa-cog"></i> 
                        <span>Settings</span>
                    </a>
                </li>
                <li class="submenu {{set_active(['home','teacher/dashboard','student/dashboard'])}}">
                    <a href="#"><i class="feather-grid"></i>
                        <span> Dashboard</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('home') }}" class="{{set_active(['home'])}}">Admin Dashboard</a></li>
                        <li><a href="{{ route('teacher/dashboard') }}" class="{{set_active(['teacher/dashboard'])}}">Teacher Dashboard</a></li>
                        <li><a href="{{ route('student/dashboard') }}" class="{{set_active(['student/dashboard'])}}">Student Dashboard</a></li>
                    </ul>
                </li>

                <li class="menu-title">
                    <span>User Management</span>
                </li>
                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="submenu {{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-shield-alt"></i>
                        <span>Users</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('list/users') }}" class="{{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">List Users</a></li>
                    </ul>
                </li>
                @endif

                <li class="submenu {{set_active(['student.list-students','student.student-grid','student.add-student'])}} {{ (request()->is('student/edit/*')) ? 'active' : '' }} {{ (request()->is('student/profile/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-graduation-cap"></i>
                        <span> Students</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('student.list-students') }}"  class="{{set_active(['student.list-students','student.student-grid'])}}">Student List</a></li>
                        <li><a href="{{ route('student.add-student') }}" class="{{set_active(['student.add-student'])}}">Student Add</a></li>
                    </ul>
                </li>

                <li class="submenu  {{set_active(['teacher/add/page','teacher/list/page','teacher/grid/page','teacher/edit'])}} {{ (request()->is('teacher/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i>
                        <span> Teachers</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('teacher/list/page') }}" class="{{set_active(['teacher/list/page','teacher/grid/page'])}}">Teacher List</a></li>
                        <li><a href="{{ route('teacher/add/page') }}" class="{{set_active(['teacher/add/page'])}}">Teacher Add</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Curriculum features</span>
                </li>
                <li class="submenu {{set_active(['grading/add-grading/page','grading/edit-grading/page'])}}">
                    <a href="#"><i class="fas fa-building"></i>
                        <span> Grade Markings</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('grading.list-grading') }}" class="{{set_active(['department/list-grading/page'])}}">Grading List</a></li>
                    </ul>
                </li>
                <li class="submenu {{set_active(['courses.list-courses.page'])}}">
                    <a href="#"><i class="fas fa-book-reader"></i>
                        <span>Courses</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('courses.list-courses.page') }}" class="{{set_active(['courses.list-courses.page'])}}">View courses</a></li>
                    </ul>
                </li>
                
                <li class="menu-title">
                    <span>Management</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i>
                        <span>Payment details</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                    <li><a href="{{ route('payments.list_fees.page') }}" class="{{ set_active(['payments.list_fees.page']) }}">List of Fees</a></li>
                    <li><a href="{{ route('payments.add_fees.page') }}" class="{{ set_active(['payments.add_fees.page']) }}">Add Fees</a></li>
                    <li><a href="{{ route('payments.edit_fees.page') }}" class="{{ set_active(['payments.edit_fees.page']) }}">Edit Fees</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-table"></i>
                        <span>Scheduling Menu</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                    <li><a href="{{ route('timetable.timetable.page') }}" class="{{ set_active(['timetable.timetable.page']) }}">Time Table</a></li>
                    <li><a href="{{ route('timetable.student-schedules.page') }}" class="{{ set_active(['timetable.student-schedules.page']) }}">Student's Scheduler</a></li>
                    <li><a href="{{ route('timetable.teacher-schedules.page') }}" class="{{ set_active(['timetable.teacher-schedules.page']) }}">Teacher's Scheduler</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>