<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard with news.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::all(); // Fetch all news items
        return view('dashboard.home', ['news' => $news]); // Pass the news variable to the view
    }

    /** profile user */
    public function userProfile()
    {
        return view('dashboard.profile');
    }

    /** admin dashboard */
    public function adminDashboardIndex()
    {
        return view('dashboard.admin_dashboard');
    }

    /** teacher dashboard */
    public function teacherDashboardIndex()
    {
        return view('dashboard.teacher_dashboard');
    }

    /** student dashboard */
    public function studentDashboardIndex()
    {
        return view('dashboard.student_dashboard');
    }
    
}
