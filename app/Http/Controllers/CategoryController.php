<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Contracts\Interfaces\CategoryInterface;

class CategoryController extends Controller
{

    public function __construct(
        private CategoryInterface $category
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->category->get();

        return view('pages.super-admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        try {
            $this->category->store($request->validated());

            return to_route('categories.index')->with('success', 'Berhasil manambah category!');
        } catch (\Throwable $e) {
            return to_route('categories.index')->with('error', 'Gagal menambah category. ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        try {
            $this->category->update($category->id, $request->validated());

            return to_route('categories.index')->with('success', 'Berhasil memperbarui category!');
        } catch (\Throwable $e) {
            return to_route('categories.index')->with('error', 'Gagal memperbarui category. ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $this->category->delete($category->id);
            return to_route('categories.index')->with('success', 'Berhasil menghapus category!');
        } catch (\Throwable $e) {
            return to_route('categories.index')->with('error', 'Gagal menghapus category. ' . $e->getMessage());
        }
    }
}
