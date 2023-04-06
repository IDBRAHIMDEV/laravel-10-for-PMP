@extends('layouts.main')

@section('content')

@include('partials.header')

<hr>

<div class="row">
    <div class="col-md-12">

        <div class="text-end mb-4">
            <a href="{{ route('service.index') }}" class="btn btn-warning">Go Back</a>
          </div>

        <h3>{{ $service->label }}</h3>
        <p>{{ $service->content }}</p>
        <span>{{ $service->created_at }}</span>
    </div>
</div>

@endsection

@section('title') Service | @endsection