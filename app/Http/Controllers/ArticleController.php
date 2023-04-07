<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "List of articles";
        $paragraph = "Welcome to our Blog PMP";

        $articles = Article::paginate(5);
        $categories = Category::take(6)->get();
        return view('article.index', [
            'articles' => $articles, 
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $title = "PMP Blog";
        $paragraph = "Welcome to our Blog PMP";

        $categories = Category::take(6)->get();
        return view('article.show', [
            'article' => $article, 
            'categories' => $categories,
            'title' => $title,
            'paragraph' => $paragraph
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
