<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "List of categoris";
        $paragraph = "Manage the of categories for using in articles";

        $categories = Category::all();

        return view('category.index', 
        [
            'categories' => $categories, 
            'title' => $title, 
            'paragraph' => $paragraph
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category->label = $request->label;

        $category->save();

        return to_route('categories.index')->with('status', 'Category is created.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $title = $category->label;
        $paragraph = "List of articles associate a " . $title . " Category";

        $categories = Category::all();

        return view('category.show', [
            'category' => $category,
            'categories' => $categories,
            'title' => $title,
            'paragraph' => $paragraph
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->label = $request->label;

        $category->save();

        return to_route('categories.index')->with('status', 'Category is updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return to_route('categories.index')->with('status', 'Category is deleted.');
    }
}
