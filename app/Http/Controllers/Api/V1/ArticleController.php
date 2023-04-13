<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ArticleResource::collection(Article::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $article = new Article();

        $article->title = $request->title;
        $article->slug = Str::slug($request->title, '-');
        $article->image = $request->image;
        $article->content = $request->content;
        $article->category_id = $request->category_id;
        $article->user_id = $request->user_id;

        $article->save();

        return ArticleResource::make($article);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return new ArticleResource($article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->slug = Str::slug($request->title, '-');
        $article->image = $request->image;
        $article->content = $request->content;
        $article->category_id = $request->category_id;
        $article->user_id = $request->user_id;

        $article->save();

        return new ArticleResource($article);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return Response()->noContent();
    }
}
