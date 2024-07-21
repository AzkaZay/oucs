<?php 

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    // Show all news
    public function index()
    {
        $news = News::all(); // Fetch all news items
        \Log::info('News data:', ['news' => $news]); // Log the news data
        return view('dashboard.home', compact('news')); // Use compact to pass the news variable to the view
    }

    // Show the form to create a new news item
    public function create()
    {
        return view('news.create');
    }

    // Store a new news item
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        News::create([
            'title' => $request->title,
            'message' => $request->message,
            'created_by' => Auth::user()->name,
            'created_at' => $request->created_at,
            // Set the created_by field with the logged-in user's name
        ]);

        return redirect()->route('dashboard.home')->with('success', 'News added successfully!');
    }

    // Delete a news item
    public function destroy($id)
    {
        $news = News::find($id);

        if ($news) {
            $news->delete();
            return redirect()->route('dashboard.home')->with('success', 'News deleted successfully!');
        }

       
    }
}