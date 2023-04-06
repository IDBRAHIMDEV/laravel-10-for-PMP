@extends('layouts.main')

@section('title', 'Create a Service Form')
  
@section('content')

@include('partials.header')

<div class="row"></div>
    <div class="col-md-12 text-end">
       
        <a href="{{ route('service.index') }}" class="btn btn-warning">Go Back</a>
          
    </div>
</div>

<div class="row my-5">
    <div class="col-md-4 mx-auto">

        <form action="{{ route('service.update', ['id' => $service->id]) }}" method="POST">

            @csrf
            @method('PUT')

            @include('partials.service.form')
            
            <div class="d-grid my-2">
                <button class="btn btn-danger">Update a service</button>
            </div>

        </form>
    </div>
</div>

@endsection