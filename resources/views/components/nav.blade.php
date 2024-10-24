<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;" data-bs-theme="light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
            aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('indexArticle')}}">Tutti gli articoli</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Categorie
                        </button>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{ route('categoryArticle', ['category' => $category]) }}">{{$category->name}}</a></li>
                            @if (!$loop->last)
                                <hr class="dropdown-divider">
                            @endif
                            @endforeach
                        </ul>
                      </div>
                </li>
    
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="#">Benvenuto{{Auth::user()->name}} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('createArticle')}}">Crea Annuncio</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                @endauth
            </ul>
            <form class="d-flex" role="search">
        
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
