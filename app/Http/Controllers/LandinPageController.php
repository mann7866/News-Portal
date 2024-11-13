<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class LandinPageController extends Controller
{
    public function getNews()
    {
        $news = News::latest()->take(3)->get();

        return view('welcome', compact('news'));
    }
}
