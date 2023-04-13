@extends('layouts.main')


@section('title', 'Create article')

@section('content')

@include('partials.header')

<div class="row">
    <div class="col-md-8 mx-auto">
       
        <form action="{{ route('articles.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" id="category" class="form-control">
                    <option value=""></option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->label }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="30" rows="4" class="form-control">{{ old('content') }}</textarea>
                @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="url">Image url</label>
                <input type="url" name="url" id="slug" class="form-control" value="{{ old('url') }}">
                @error('url')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-grid mt-3">
                <button class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection