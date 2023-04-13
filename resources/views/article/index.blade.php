@extends('layouts.main')


@section('title', 'List of articles')

@section('content')

@include('partials.header')

<div class="row my-3">
    <div class="col-md-12 text-end">
        <a href="{{ route('articles.create') }}" class="btn btn-dark">Add article</a>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        @foreach($articles as $article)
        
        <div class="card mb-4">
            <a href="{{ route('articles.show', ['article' => $article->id]) }}">
                <img class="card-img-top" src="{{ $article->image }}" alt="{{ $article->title }}">
            </a>
            <div class="card-body">
                <h4 class="card-title">{{ $article->title }}</h4>
                <p class="card-text">{{ $article->content }}</p>
                <div>
                    @can('view',  $article)
                    <a href="{{ route('articles.show', ['article' => $article->id]) }}" class="me-2 btn btn-dark">Show</a>
                    @endcan

                    @can('update',  $article)
                    <a href="{{ route('articles.edit',[ 'article' => $article->id]) }}" class="me-2 btn btn-warning">Edit</a>
                    @endcan

                    <a href="" class="me-2 btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
     
        @endforeach

        

    </div>
    <div class="col-md-4">
        <h4 class="my-4">Categories</h4>
        <ul class="list-group">
            @foreach($categories as $category)
            <li class="list-group-item">
                <a class="list-group-item list-group-item-action" href="{{ route('categories.show', ['category' => $category->id]) }}"> {{ $category->label }}</a>
             </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection