@extends('layouts.main')


@section('title', 'List of articles')

@section('content')

@include('partials.header')

<div class="row">
    <div class="col-md-8">
        @foreach($category->articles as $article)
        <div class="card mb-4">
            <a href="{{ route('articles.show', ['article' => $article->id]) }}">
                <img class="card-img-top" src="{{ $article->image }}" alt="{{ $article->title }}">
            </a>
            <div class="card-body">
                <h4 class="card-title">{{ $article->title }}</h4>
                <p class="card-text">{{ $article->content }}</p>
            </div>
        </div>
        @endforeach

        

    </div>
    <div class="col-md-4">
        <h4 class="my-4">Categories</h4>
        <ul class="list-group">
            @foreach($categories as $category)
            <li class="list-group-item">
               <a class="list-group-item list-group-item-action" href="{{ route('categories.show', ['category' => $category->id]) }}">{{ $category->label }}</a> 
            </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection