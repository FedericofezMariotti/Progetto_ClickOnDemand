{{-- annunciament bar --}}
<div class="container-fluid annunciament-bar ">
    <p id="moving-text">Pubblica il tuo annuncio!</p>
</div>
{{-- prima navbar --}}
<nav id="navbar1">
    <div class="container">
        <div class="row  altezza-menu justify-content-center align-items-center">
            <div class="col-3">
                <a class="navbar-brand" href="{{ route('home') }}"><img class="logo" src="/images/logo-navbar.png"
                        alt="Logo Click On Demand"></a>
            </div>
            <div class="col-6 d-flex  justify-content-center">
                <form class="d-flex input-custom" role="search" action="{{ route('article.search') }}" method="GET">
                    <input class="form-control me-2" type="search" name='query' placeholder="{{ __("ui.cerca") }}"
                        aria-label="Search">
                    <button class="btn btn-colorcustom" type="submit">{{ __("ui.cerca") }}</button>
                </form>
            </div>
            <div class="col-1 d-flex justify-content-end">
                @auth
                    <div class="dropdown">
                        @if (Auth::user()->is_revisor)
                        <button class="btn dropdown " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-5">
                                <span class="incremento-revisore translate-middle badge rounded-pill bg-danger">
                                {{ \App\Models\Article::toBeRevisedCount() }}
                            </span></i>
                        </button>
                            <ul class="dropdown-menu custom-user ">
                                <h6 class="mt-2 dropdown-font">Benvenuto {{ Auth::user()->name }}</h6>
                                <a class="dropdown-font pt-1 d-block position-relative" href="{{ route('indexRevisor') }}">
                                    Dashboard Revisore
                                    <span class="incremento-articoli translate-middle badge rounded-pill bg-danger">
                                        {{ \App\Models\Article::toBeRevisedCount() }}
                                    </span>
                                </a>
                                <a class="dropdown-font d-block pt-2" href="{{ route('createArticle') }}"> Crea Articolo</a>
                                <form class="dropdown-button" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn text-danger">Logout</button>
                                </form>

                            </ul>
                        @else
                        <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-5"></i>
                        </button>
                            <ul class="dropdown-menu custom-user ">
                                <h6 class="mt-2 dropdown-font">Benvenuto {{ Auth::user()->name }}</h6>
                                <a class="dropdown-font d-block " href="{{ route('createArticle') }}"> Crea Articolo</a>
                                <form class="dropdown-button" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn text-danger">Logout</button>
                                </form>

                            </ul>
                        @endif
                    </div>
                @else
                    <i class="fs-5 bi bi-heart"></i>
                    <i class="fs-5 bi bi-bag ms-3"></i>
                    <a class="nav-link" href="{{ route('auth.form') }}"><i class="bi bi-person-circle fs-5 ms-3"></i></a>
                @endauth

            </div>
            {{-- dropdown bandierine --}}
            <div class="col-2 mt-2">
                <div class="dropdown">
                    {{-- <i class="bi bi-flag-fill"></i> --}}
                    @if (app()->getLocale() == 'it')
                    {{-- Se la lingua è italiana, mostra il componente per l'italiano --}}
                    <x-_locale lang="it" />
                    @elseif(app()->getLocale() == 'en')
                    {{-- Se la lingua è inglese, mostra il componente per l'inglese --}}
                    <x-_locale lang="en" />
                    @elseif(app()->getLocale() == 'es')
                    {{-- Se la lingua è spagnola, mostra il componente per lo spagnolo --}}
                    <x-_locale lang="es" />
                    @endif
                    
                    <button class="Bottonecustom dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu custom-dropdown-flag custom-flag">
                        <li class="custom-flag ms-2">
                            <x-_locale lang="it" />
                        </li>
                        <li class="custom-flag ms-2">
                            <x-_locale lang="en" />
                        </li>
                        <li class="custom-flag ms-2">
                            <x-_locale lang="es" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
{{-- seconda navbar --}}
<div class="sticky-nav d-flex justify-content-center align-items-center" id="navbar2">
    <div class="container position-relative">
        <div class="row align-items-center justify-content-center">
            <div class="col-1">
                <div class="dropdown">
                    <a href="{{ route('categoryArticle', ['category' => $categories[0]]) }}"
                        class="d-flex align-items-center flex-column">
                        <img class="icon-nav" src="/images/icons/abbigliamento-v1.png" alt="">
                        <h3 class="h3-nav">{{ __('ui.abbigliamento') }}</h3>
                    </a>
                    <div class="container dropdown-menu dropdown-menu-custom dropcustom "
                        aria-labelledby="dropdownMenuButton">

                        <div class="row">
                            <div class="col-6  ">
                                @foreach ($categories[0]->subcategories as $subcategory)
                                    <a class="dropdown-item"
                                        href="{{ route('subcategoryArticle', ['subcategory' => $subcategory]) }}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach

                            </div>
                            <div class="col-6">
                                <img class="img-fluid img-megamenu img-megamenu-custom" src="/images/prova-banner-menu.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="dropdown">
                    <a href="{{ route('categoryArticle', ['category' => $categories[1]]) }}"
                        class="d-flex align-items-center flex-column">
                        <img class="icon-nav" src="/images/icons/auto-v1.png" alt="">
                        <h3 class="h3-nav">{{ __('ui.auto') }} & {{ __('ui.moto') }} </h3>

                    </a>
                    <div class="container dropdown-menu dropdown-menu-custom dropcustom "
                        aria-labelledby="dropdownMenuButton">

                        <div class="row">
                            <div class="col-6 ">
                                @foreach ($categories[1]->subcategories as $subcategory)
                                    <a class="dropdown-item"
                                        href="{{ route('subcategoryArticle', ['subcategory' => $subcategory]) }}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach

                            </div>
                            <div class="col-6">
                                <img class="img-fluid img-megamenu-custom img-megamenu" src="/images/car-banner.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="dropdown">
                    <a href="{{ route('categoryArticle', ['category' => $categories[2]]) }}"
                        class="d-flex align-items-center flex-column">
                        <img class="icon-nav" src="/images/icons/bellezza-v1.png" alt="">
                        <h3 class="h3-nav">{{ __('ui.bellezza') }}</h3>

                    </a>
                    <div class="container dropdown-menu dropdown-menu-custom dropcustom "
                        aria-labelledby="dropdownMenuButton">

                        <div class="row">
                            <div class="col-6 ">
                                @foreach ($categories[2]->subcategories as $subcategory)
                                    <a class="dropdown-item"
                                        href="{{ route('subcategoryArticle', ['subcategory' => $subcategory]) }}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach

                            </div>
                            <div class="col-6">
                                <img class="img-fluid img-megamenu-custom  img-megamenu" src="/images/mackup-banner.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="dropdown">
                    <a href="{{ route('categoryArticle', ['category' => $categories[3]]) }}"
                        class="d-flex align-items-center flex-column">
                        <img class="icon-nav" src="/images/icons/casa-v1.png" alt="">
                        <h3 class="h3-nav">{{ __('ui.casa') }}</h3>

                    </a>
                    <div class="container dropdown-menu dropdown-menu-custom dropcustom "
                        aria-labelledby="dropdownMenuButton">

                        <div class="row">
                            <div class="col-6 ">
                                @foreach ($categories[3]->subcategories as $subcategory)
                                    <a class="dropdown-item"
                                        href="{{ route('subcategoryArticle', ['subcategory' => $subcategory]) }}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach

                            </div>
                            <div class="col-6">
                                <img class="img-fluid  img-megamenu-custom-2  img-megamenu" src="/images/casa-banner.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="dropdown">
                    <a href="{{ route('categoryArticle', ['category' => $categories[4]]) }}"
                        class="d-flex align-items-center flex-column">
                        <img class="icon-nav" src="/images/icons/informatica-v1.png" alt="">
                        <h3 class="h3-nav">{{ __('ui.elettronica') }}</h3>

                    </a>
                    <div class="container dropdown-menu dropdown-menu-custom dropcustom "
                        aria-labelledby="dropdownMenuButton">

                        <div class="row">
                            <div class="col-6 ">
                                @foreach ($categories[4]->subcategories as $subcategory)
                                    <a class="dropdown-item"
                                        href="{{ route('subcategoryArticle', ['subcategory' => $subcategory]) }}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach

                            </div>
                            <div class="col-6">
                                <img class="img-fluid img-megamenu img-megamenu-custom-2 " src="/images/phone-banner-menu.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="dropdown">
                    <a href="{{ route('categoryArticle', ['category' => $categories[5]]) }}"
                        class="d-flex align-items-center flex-column">
                        <img class="icon-nav" src="/images/icons/fotografia-v1.png" alt="">
                        <h3 class="h3-nav">{{ __('ui.fotografia') }}</h3>

                    </a>
                    <div class="container dropdown-menu dropdown-menu-custom rigth-menu dropcustom "
                        aria-labelledby="dropdownMenuButton">

                        <div class="row">
                            <div class="col-6 ">
                                @foreach ($categories[5]->subcategories as $subcategory)
                                    <a class="dropdown-item"
                                        href="{{ route('subcategoryArticle', ['subcategory' => $subcategory]) }}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach

                            </div>
                            <div class="col-6">
                                <img class="img-fluid img-megamenu img-megamenu-custom-3" src="/images/camera1-banner.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="dropdown">
                    <a href="{{ route('categoryArticle', ['category' => $categories[6]]) }}"
                        class="d-flex align-items-center flex-column">
                        <img class="icon-nav" src="/images/icons/gioielli-v1.png" alt="">
                        <h3 class="h3-nav">{{ __('ui.gioielli') }}</h3>

                    </a>
                    <div class="container dropdown-menu dropdown-menu-custom rigth-menu dropcustom "
                        aria-labelledby="dropdownMenuButton">

                        <div class="row">
                            <div class="col-6 ">
                                @foreach ($categories[6]->subcategories as $subcategory)
                                    <a class="dropdown-item"
                                        href="{{ route('subcategoryArticle', ['subcategory' => $subcategory]) }}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach

                            </div>
                            <div class="col-6">
                                <img class="img-fluid img-megamenu img-megamenu-custom-4" src="/images/gioielli-banner.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="dropdown">
                    <a href="{{ route('categoryArticle', ['category' => $categories[7]]) }}"
                        class="d-flex align-items-center flex-column">
                        <img class="icon-nav" src="/images/icons/musica-v1.png" alt="">
                        <h3 class="h3-nav">{{ __('ui.musica') }} & {{ __('ui.film') }}</h3>
                    </a>
                    <div class="container dropdown-menu dropdown-menu-custom rigth-menu dropcustom "
                        aria-labelledby="dropdownMenuButton">

                        <div class="row">
                            <div class="col-6 ">
                                @foreach ($categories[7]->subcategories as $subcategory)
                                    <a class="dropdown-item"
                                        href="{{ route('subcategoryArticle', ['subcategory' => $subcategory]) }}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach

                            </div>
                            <div class="col-6">
                                <img class="img-fluid img-megamenu img-megamenu-custom-5" src="/images/music-banner1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="dropdown">
                    <a href="{{ route('categoryArticle', ['category' => $categories[8]]) }}"
                        class="d-flex align-items-center flex-column">
                        <img class="icon-nav" src="/images/icons/sport-v1.png" alt="">
                        <h3 class="h3-nav">{{ __('ui.sport') }}</h3>
                    </a>
                    <div class="container dropdown-menu dropdown-menu-custom rigth-menu dropcustom "
                        aria-labelledby="dropdownMenuButton">

                        <div class="row">
                            <div class="col-6 ">
                                @foreach ($categories[8]->subcategories as $subcategory)
                                    <a class="dropdown-item"
                                        href="{{ route('subcategoryArticle', ['subcategory' => $subcategory]) }}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach

                            </div>
                            <div class="col-6">
                                <img class="img-fluid img-megamenu img-megamenu-custom-6" src="/images/sport-banner1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="dropdown ">
                    <a href="{{ route('categoryArticle', ['category' => $categories[9]]) }}"
                        class="d-flex align-items-center flex-column">
                        <img class="icon-nav" src="/images/icons/console-v1.png" alt="">
                        <h3 class="h3-nav">{{ __('ui.console') }}</h3>
                    </a>
                    <div class="container dropdown-menu dropdown-menu-custom rigth-menu dropcustom "
                        aria-labelledby="dropdownMenuButton">

                        <div class="row">
                            <div class="col-6 ">
                                @foreach ($categories[9]->subcategories as $subcategory)
                                    <a class="dropdown-item"
                                        href="{{ route('subcategoryArticle', ['subcategory' => $subcategory]) }}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach

                            </div>
                            <div class="col-6">
                                <img class="img-fluid img-megamenu img-megamenu-custom-7" src="/images/console-banner.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
