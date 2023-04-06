@extends('layouts.main')
    
@section('content')

@include('partials.header')

<hr>

<div class="row">
    <div class="col-md-12">

      <div class="text-end mb-4">
        <a href="{{ route('service.create') }}" class="btn btn-warning">New Service</a>
      </div>

        <ol class="list-group list-group-numbered">

            @foreach($myServices as $service)
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold"> 
                  <form action="{{ route('service.destroy', ['id' => $service->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger me-2" href="">Delete</button>
                    <a class="btn btn-warning me-2" href="{{ route('service.edit', ['id' => $service->id]) }}">Edit</a>
                    <a href="{{ route('service.show', ['service' => $service->id]) }}">{{ $service->label }}</a>
                    <img src="{{ asset('storage/'.$service->thumbnail) }}" width="50px" alt="" srcset="">
                    <p>{{ $service->content }}</p> 
                  </form>
                </div>
              </div>
              <span class="badge bg-primary rounded-pill">
                {{ $service->price }} $
              </span>
            </li>
            @endforeach
          </ol>
    </div>
</div>

@endsection



@section('title') {{ $title }} @endsection
