<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use App\Models\Article;
use App\Models\Category;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('edit', 'update');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "List of articles";
        $paragraph = "Welcome to our Blog PMP";

        $articles = Article::all();
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
        $this->authorize('create', Article::class);

        $title = "List of articles";
        $paragraph = "Welcome to our Blog PMP";

        $categories = Category::all();

        return view("article.create", ['title' => $title, 'paragraph' => $paragraph, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $this->authorize('create', Article::class);

        $article = new Article();

        $article->title = $request->title;
        $article->slug = Str::slug($request->title, '-');
        $article->image = $request->url;
        $article->content = $request->content;
        $article->category_id = $request->category_id;
        $article->user_id = Auth::id();

        $article->save();

        return to_route('articles.index')->with('status', 'Article is created successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $this->authorize('view', $article);

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
        $this->authorize('update', $article); 

        $title = "Edit article";
        $paragraph = "Welcome to our Blog PMP";

        $categories = Category::all();

        return view("article.edit", ['title' => $title, 'paragraph' => $paragraph, 'categories' => $categories, 'article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $this->authorize('update', $article);
        
        $article->title = $request->title;
        $article->slug = Str::slug($request->title, '-');
        $article->image = $request->url;
        $article->content = $request->content;
        $article->category_id = $request->category_id;
        $article->user_id = Auth::id();

        $article->save();

        return to_route('articles.index')->with('status', 'Article is updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
