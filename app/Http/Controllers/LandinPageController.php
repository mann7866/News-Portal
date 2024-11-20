<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Employee;
use Illuminate\Http\Request;

class LandinPageController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(3)->get();
        $employees = Employee::latest()->take(3)->get();
        return view('pages.landing-page.welcome', compact('news','employees'));
    }

    public function news(Request $request)
{
    $search = $request->get('search'); // Ambil input pencarian dari request

    // Inisialisasi variabel $news

    $news = News::with('categories')->paginate(3);
    
    if ($search) {
        // Jika ada pencarian, cari berita sesuai keyword
        $news = News::with('categories')
            ->where('title', 'like', "%{$search}%")
            ->orWhereHas('categories', function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->latest() // Batasi jumlah hasil pencarian
            ->paginate(3);
    } else {
        // Jika tidak ada pencarian, ambil berita populer
        $popularNews = News::orderBy('views', 'desc')->paginate(3);
    }
    
    $popularNews = News::orderBy('views', 'desc')->paginate(3);
    $galleries = News::latest()->take(6)->get();
    $categories = Category::withCount('news')->get();

    return view('pages.landing-page.news.index', compact('news', 'popularNews', 'categories', 'galleries', 'search'));
}

    
    
    
    

    public function newsDetail($slug)
    {
        $news = News::where('slug', $slug)->first();
        
        if (!$news) {
            abort(404, 'News not found');
        }

        $popularNews = News::orderBy('views', 'desc')->take(3)->get();

        $galleries = News::latest()->take(6)->get();

        $categories = Category::withCount('news')->get();

        return view('pages.landing-page.news.detail', compact('news', 'popularNews', 'categories', 'galleries'));
    }
}
