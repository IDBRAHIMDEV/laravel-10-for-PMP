<nav class="navbar navbar-expand-sm navbar-dark bg-warning">
    <a class="navbar-brand" href="{{ route('site.home') }}">PMP SERVICES</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('site.home') }}" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('service.index') }}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
            </li>
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
       
    </div>
</nav>