<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('site.home') }}">PMP SERVICES</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('site.home') }}" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
            </li>
            @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('service.index') }}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{ route('articles.index') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('site.about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('site.contact') }}">Contact</a>
            </li>
           
        </ul>

        <ul class="navbar-nav ms-auto mx-2">
        @if(!Auth::check())
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('login') }}" aria-current="page">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('register') }}" aria-current="page">Register</a>
            </li>
            @else 

            <li class="nav-item">
                <a class="nav-link active" href="{{ route('profile.edit') }}" aria-current="page">{{ Auth::user()->name }}</a>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn nav-link btn-link" aria-current="page">Logout</button>
                </form>
            </li>
            
            @endif
        </ul>
       
    </div>
</nav>