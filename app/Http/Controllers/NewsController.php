<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CategoryInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Repositories\CategoryRepository;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Services\FilterService;
use App\Services\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    private NewsInterface $news;
    private NewsService $service;
    private FilterService $filterService;

    /**
     * Constructor.
     *
     * @param  App\Contracts\Interfaces\NewsInterface  $example
     * @return void
     */
    public function __construct(
        NewsInterface $news,
        NewsService $service,
        FilterService $filterService,
        private CategoryInterface $categories
    ) {
        $this->news = $news;
        $this->service = $service;
        $this->filterService = $filterService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filters = $request->only(['category_ids', 'search', 'date', 'status']);

        $data = News::query();

        $data = $this->filterService->applyFilter(
            $data,
            $filters,
            ['title', 'description'], // Kolom
            'user',                   // Relasi
            'name'                    // Kolom pada relasi
        );

        $categories = $this->categories->get();

        $data = $data->orderBy('created_at', 'desc')->paginate(9);

        return view('pages.super-admin.news.index', compact('data', 'categories', 'filters'));
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
            $result = $this->service->store($request);

            $news = $this->news->store($result['data']);

            $news->categories()->sync($result['category_ids']);

            return to_route('news.index')->with('success', 'Berhasil menambahkan berita!');
        } catch (\Throwable $e) {
            return to_route('news.create')->with('error', 'Gagal tambah berita. ' . $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(String $slug)
    {
        $news = News::where('slug', $slug)->first();

        return view('pages.super-admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $slug)
    {
        $categories = $this->categories->get();

        $news = News::where('slug', $slug)->first();

        return view('pages.super-admin.news.edit', compact('categories', 'news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, News $news)
    {
        try {
            $result = $this->service->update($request, $news);

            $this->news->update($news->id, $result['data']);

            $news->categories()->sync($result['category_ids']);

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
        try {
            $news->categories()->detach();

            $this->news->delete($news->id);

            $this->service->remove($news->image);

            return to_route('news.index')->with('success', 'Berita berhasil dihapus!');
        } catch (\Throwable $e) {
            return to_route('news.index')->with('error', 'Gagal menghapus berita. ' . $e->getMessage());
        }
    }
}
