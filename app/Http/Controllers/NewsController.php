<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\NewsInterface;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    private NewsInterface $news;

    /**
     * Constructor.
     *
     * @param  App\Contracts\Interfaces\NewsInterface  $example
     * @return void
     */
    public function __construct(NewsInterface $news)
    {
        $this->news = $news;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->news->get();

        return view('pages.super-admin.news.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            
        } catch (\Throwable $e) {
            # code...
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
