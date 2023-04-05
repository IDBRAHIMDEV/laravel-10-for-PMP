@extends('layouts.main')
    
@section('content')


@include('partials.header')

@endsection


@section('title') {{ $title }} @endsection

@section('stylesheets')

<style>
body {
    background-color: red;
}
</style>

@endsection
