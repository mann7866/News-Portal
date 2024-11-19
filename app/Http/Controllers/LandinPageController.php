<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class LandinPageController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(3)->get();

        return view('pages.landing-page.welcome', compact('news'));
    }

    public function news()
    {
        $news = News::with('categories')->latest()->paginate(3);

        $galleries = News::latest()->take(6)->get();

        $categories = Category::withCount('news')->get();

        $popularNews = News::orderBy('views', 'desc')->take(3)->get();

        return view('pages.landing-page.news.index', compact('news', 'popularNews', 'categories', 'galleries'));
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
