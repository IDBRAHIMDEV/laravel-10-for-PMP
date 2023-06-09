<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    @yield('stylesheets')
    <title>@yield('title')</title>
</head>
<body>

@include('partials.nav')

@include('partials.info')
    
<div class="container">
    @yield('content')
</div>

<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@yield('scripts')
</body>
</html>