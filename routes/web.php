<?php

use App\Http\Controllers\TeacherScheduleController;
use App\Http\Controllers\TimetableController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\TypeFormController;
use App\Http\Controllers\Setting;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\StudentScheduleController;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** for side bar menu active */
function set_active( $route ) {
    if( is_array( $route ) ){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

// ----------------------------login ------------------------------//
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('change/password', 'changePassword')->name('change/password');
});

// ----------------------------- register -------------------------//
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register','storeUser')->name('register');    
});

// -------------------------- main dashboard ----------------------//
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->middleware('auth')->name('home');
    Route::get('user/profile/page', 'userProfile')->middleware('auth')->name('user/profile/page');
    Route::get('teacher/dashboard', 'teacherDashboardIndex')->middleware('auth')->name('teacher/dashboard');
    Route::get('student/dashboard', 'studentDashboardIndex')->middleware('auth')->name('student/dashboard');
});

// ----------------------------- user controller -------------------------//
Route::controller(UserManagementController::class)->group(function () {
    Route::get('list/users', 'index')->middleware('auth')->name('list/users');
    Route::post('change/password', 'changePassword')->name('change/password');
    Route::get('view/user/edit/{id}', 'userView')->middleware('auth');
    Route::post('user/update', 'userUpdate')->name('user/update');
    Route::post('user/delete', 'userDelete')->name('user/delete');
});

// ------------------------ setting -------------------------------//
Route::controller(Setting::class)->group(function () {
    Route::get('setting/page', 'index')->middleware('auth')->name('setting/page');
});

// ------------------------ student -------------------------------//
Route::controller(StudentController::class)->group(function () {
    Route::get('student/list', 'student')->middleware('auth')->name('student/list'); // list student
    Route::get('student/grid', 'studentGrid')->middleware('auth')->name('student/grid'); // grid student
    Route::get('student/add/page', 'studentAdd')->middleware('auth')->name('student/add/page'); // page student
    Route::post('student/add/save', 'studentSave')->name('student/add/save'); // save record student
    Route::get('student/edit/{id}', 'studentEdit'); // view for edit
    Route::post('student/update', 'studentUpdate')->name('student/update'); // update record student
    Route::post('student/delete', 'studentDelete')->name('student/delete'); // delete record student
    Route::get('student/profile/{id}', 'studentProfile')->middleware('auth'); // profile student
});

// ------------------------ teacher -------------------------------//
Route::controller(TeacherController::class)->group(function () {
    Route::get('teacher/add/page', 'teacherAdd')->middleware('auth')->name('teacher/add/page'); // page teacher
    Route::get('teacher/list/page', 'teacherList')->middleware('auth')->name('teacher/list/page'); // page teacher
    Route::get('teacher/grid/page', 'teacherGrid')->middleware('auth')->name('teacher/grid/page'); // page grid teacher
    Route::post('teacher/save', 'saveRecord')->middleware('auth')->name('teacher/save'); // save record
    Route::get('teacher/edit/{id}', 'editRecord'); // view teacher record
    Route::post('teacher/update', 'updateRecordTeacher')->middleware('auth')->name('teacher/update'); // update record
    Route::post('teacher/delete', 'teacherDelete')->name('teacher/delete'); // delete record teacher
});

// ----------------------- department -----------------------------//
Route::controller(DepartmentController::class)->group(function () {
    Route::get('department/list/page', 'departmentList')->middleware('auth')->name('department/list/page'); // department/list/page
    Route::get('department/add/page', 'indexDepartment')->middleware('auth')->name('department/add/page'); // page add department
    Route::get('department/edit/page', 'editDepartment')->middleware('auth')->name('department/edit/page'); // page add department
});

// ----------------------- payments -----------------------------//
Route::controller(PaymentsController::class)->group(function () {
    Route::get('payments/add-fees/page', 'indexPayments')->middleware('auth')->name('payments.add_fees.page');
    Route::get('payments/edit-fees/page', 'editFees')->middleware('auth')->name('payments.edit_fees.page');
    Route::get('payments/list-fees/page', 'feesList')->middleware('auth')->name('payments.list_fees.page');
});

// ----------------------- timetable -----------------------------//
Route::controller(TimetableController::class)->group(function () {
    Route::get('timetable/timetable/page', 'timetableview')->middleware('auth')->name('timetable.timetable.page');
    Route::get('timetable/student-schedules/page', 'studenttimetableview')->middleware('auth')->name('timetable.student-schedules.page');
    Route::get('timetable/teacher-schedules/page', 'teachertimetableview')->middleware('auth')->name('timetable.teacher-schedules.page');
});

// ----------------------- student-schedules -----------------------------//
Route::controller(StudentScheduleController::class)->group(function () {
    Route::get('timetable/student-schedules/page', 'index')->middleware('auth')->name('timetable.student-schedules.page');
    Route::get('timetable/student-schedules/create', 'create')->middleware('auth')->name('student-schedules.create');
    Route::post('timetable/student-schedules', 'store')->middleware('auth')->name('student-schedules.store');
    Route::get('timetable/student-schedules/{id}', 'show')->middleware('auth')->name('student-schedules.show');
    Route::get('timetable/student-schedules/{id}/edit', 'edit')->middleware('auth')->name('student-schedules.edit');
    Route::put('timetable/student-schedules/{id}', 'update')->middleware('auth')->name('student-schedules.update');
    Route::delete('timetable/student-schedules/{id}', 'destroy')->middleware('auth')->name('student-schedules.destroy');
});

// ----------------------- teacher-schedules -----------------------------//
Route::controller(TeacherScheduleController::class)->group(function () {
    Route::get('timetable/teacher-schedules/page', 'index')->middleware('auth')->name('timetable.teacher-schedules.page');
    Route::get('timetable/teacher-schedules/create', 'create')->middleware('auth')->name('teacher-schedules.create');
    Route::post('timetable/teacher-schedules', 'store')->middleware('auth')->name('teacher-schedules.store');
    Route::get('timetable/teacher-schedules/{id}', 'show')->middleware('auth')->name('teacher-schedules.show');
    Route::get('timetable/teacher-schedules/{id}/edit', 'edit')->middleware('auth')->name('teacher-schedules.edit');
    Route::put('timetable/teacher-schedules/{id}', 'update')->middleware('auth')->name('teacher-schedules.update');
    Route::delete('timetable/teacher-schedules/{id}', 'destroy')->middleware('auth')->name('teacher-schedules.destroy');
});
