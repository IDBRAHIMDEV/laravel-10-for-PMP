@extends('layouts.main')

@section('title', 'List of categories')


@section('content')

@include('partials.header')

<div class="row">
    <div class="col-md-12">
            <div class="text-end mb-4">
                <a href="" class="btn btn-danger ">New Category</a>
            </div>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Label</th>
                            <th>Active</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>
                                <a class="btn btn-link" href="{{ route('categories.show', ['category' => $category->id]) }}">{{ $category->label }}</a> 
                            </td>
                            <td>{{ $category->active }}</td>
                            <td>
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        
    </div>
</div>

@endsection