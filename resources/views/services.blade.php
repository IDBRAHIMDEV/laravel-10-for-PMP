@extends('layouts.main')
    
@section('content')

@include('partials.header')

<hr>

<div class="row">
    <div class="col-md-12">
        <ol class="list-group list-group-numbered">

            @foreach($myServices as $service)
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">{{ $service['label'] }}</div>
              </div>
              <span class="badge bg-primary rounded-pill">
                {{ $service['price'] }} $
              </span>
            </li>
            @endforeach
          </ol>
    </div>
</div>

@endsection



@section('title') {{ $title }} @endsection
