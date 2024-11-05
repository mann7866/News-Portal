<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Repositories\CategoryRepository;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Services\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    private NewsInterface $news;
    private NewsService $service;
    private CategoryRepository $categories;

    /**
     * Constructor.
     *
     * @param  App\Contracts\Interfaces\NewsInterface  $example
     * @return void
     */
    public function __construct(
        NewsInterface $news,
        NewsService $service,
        CategoryRepository $categories
    ) {
        $this->news = $news;
        $this->service = $service;
        $this->categories = $categories;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->news->get();

        // dd($data);

        return view('pages.super-admin.news.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->categories->get();

        return view('pages.super-admin.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        try {
            $this->service->store($request);

            return to_route('news.index')->with('success', 'Berhasil menambahkan berita!');
        } catch (\Throwable $e) {
            return to_route('news.create')->with('error', 'Gagal tambah berita. ' . $e->getMessage());
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
        $categories = $this->categories->get();

        return view('pages.super-admin.news.edit', compact('categories', 'news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, News $news)
    {
        try {
            $this->service->update($request, $news);

            return to_route('news.index')->with('success', 'Berita berhasil diperbarui!');
        } catch (\Throwable $e) {
            return to_route('news.edit', $news->id)->with('error', 'Gagal memperbarui berita. ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
