<div class="nav-responsive">
  <div class="container" id="navbar3">
    <div class="row align-items-center" id="rowNavbar">
        <div class="col-6">
            <a class="navbar-brand" href="{{ route('home') }}"><img class="logo" src="/images/logo-navbar.png"
                    alt="Logo Click On Demand"></a>
        </div>
        <div class="col-1">

        </div>
        <div class="col-1 d-flex justify-content-end search-navbar">
            <i class="bi bi-search" id="searchIcon"></i>
        </div>
        <div class="col-1 d-flex justify-content-center padding-nav">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight"><i class="bi bi-list fs-4"></i></button>

            <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <div class="col-10 mt-2 d-flex justify-content-start">
                        <div class="dropdown">
                            {{-- <i class="bi bi-flag-fill"></i> --}}
                            @if (app()->getLocale() == 'it')
                            {{-- Se la lingua è italiana, mostra il componente per l'italiano --}}
                            <x-_locale lang="it" /> 
                            <p class="d-inline">Italiano</p>
                            @elseif(app()->getLocale() == 'en')
                            {{-- Se la lingua è inglese, mostra il componente per l'inglese --}}
                            <x-_locale lang="en" />
                            <p class="d-inline">English</p>

                            @elseif(app()->getLocale() == 'es')
                            {{-- Se la lingua è spagnola, mostra il componente per lo spagnolo --}}
                            <x-_locale lang="es" />
                            <p class="d-inline">Español</p>

                            @endif
                            
                            <button class="Bottonecustom dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu custom-flag">
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
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="accordion" id="accordionExample">
                            <div class="text-center mb-3">
                                <a href="{{ route('categoryArticle', ['category' => $categories[0]]) }}">
                                    <img class="icon-nav-offmenu" src="/images/icon/abbigliamento-black.png" alt="">
                                    <h2 class="font-offmenu d-inline">{{ __('ui.abbigliamento') }} & {{ __('ui.scarpe') }}</h2>
                                </a>
                                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-arrow-down-short"></i></button>
                                <div class="collapse" id="collapseExample"  data-bs-parent="#accordionExample">
                                    <div>
                                        @foreach ($categories[0]->subcategories as $subcategory)
                                        <a class="dropdown-item" href="{{route('subcategoryArticle', ['subcategory' => $subcategory])}}">{{ __("ui.$subcategory->name") }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                    <div class="text-center mb-3">
                        <a href="{{ route('categoryArticle', ['category' => $categories[1]]) }}">
                            <img class="icon-nav-offmenu" src="/images/icon/auto-black.png" alt="">
                            <h2 class="font-offmenu d-inline">{{ __('ui.auto') }} & {{ __('ui.moto') }}</h2>
                        </a>
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><i class="bi bi-arrow-down-short"></i></button>
                        <div class="collapse" id="collapseExample1"  data-bs-parent="#accordionExample">
                            <div>
                                @foreach ($categories[1]->subcategories as $subcategory)
                                <a class="dropdown-item" href="{{route('subcategoryArticle', ['subcategory' => $subcategory])}}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <a href="{{ route('categoryArticle', ['category' => $categories[2]]) }}">
                            <img class="icon-nav-offmenu" src="/images/icon/bellezza-black.png" alt="">
                            <h2 class="font-offmenu d-inline">{{ __('ui.bellezza') }} & {{ __('ui.salute') }}</h2>
                        </a>
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><i class="bi bi-arrow-down-short"></i></button>
                        <div class="collapse" id="collapseExample2" data-bs-parent="#accordionExample">
                            <div>
                                @foreach ($categories[2]->subcategories as $subcategory)
                                <a class="dropdown-item" href="{{route('subcategoryArticle', ['subcategory' => $subcategory])}}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <a href="{{ route('categoryArticle', ['category' => $categories[3]]) }}">
                            <img class="icon-nav-offmenu" src="/images/icon/casa-black.png" alt="">
                            <h2 class="font-offmenu d-inline">{{ __('ui.casa') }}, {{ __('ui.giardino') }} & {{ __('ui.fai da te') }}</h2>
                        </a>
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3"><i class="bi bi-arrow-down-short"></i></button>
                        <div class="collapse" id="collapseExample3" data-bs-parent="#accordionExample">
                            <div>
                                @foreach ($categories[3]->subcategories as $subcategory)
                                <a class="dropdown-item" href="{{route('subcategoryArticle', ['subcategory' => $subcategory])}}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <a href="{{ route('categoryArticle', ['category' => $categories[4]]) }}">
                            <img class="icon-nav-offmenu" src="/images/icon/informatica-black.png" alt="">
                            <h2 class="font-offmenu d-inline">{{ __('ui.elettronica') }} & {{ __('ui.informatica') }}</h2>
                        </a>
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4"><i class="bi bi-arrow-down-short"></i></button>
                        <div class="collapse" id="collapseExample4" data-bs-parent="#accordionExample">
                            <div>
                                @foreach ($categories[4]->subcategories as $subcategory)
                                <a class="dropdown-item" href="{{route('subcategoryArticle', ['subcategory' => $subcategory])}}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <a href="{{ route('categoryArticle', ['category' => $categories[5]]) }}">
                            <img class="icon-nav-offmenu" src="/images/icon/fotografia-black.png" alt="">
                            <h2 class="font-offmenu d-inline">{{ __('ui.fotografia') }}</h2>
                        </a>
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5"><i class="bi bi-arrow-down-short"></i></button>
                        <div class="collapse" id="collapseExample5" data-bs-parent="#accordionExample">
                            <div>
                                @foreach ($categories[5]->subcategories as $subcategory)
                                <a class="dropdown-item" href="{{route('subcategoryArticle', ['subcategory' => $subcategory])}}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <a href="{{ route('categoryArticle', ['category' => $categories[6]]) }}">
                            <img class="icon-nav-offmenu" src="/images/icon/gioielli-black.png" alt="">
                            <h2 class="font-offmenu d-inline">{{ __('ui.gioielli') }}</h2>
                        </a>
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample6"><i class="bi bi-arrow-down-short"></i></button>
                        <div class="collapse" id="collapseExample6" data-bs-parent="#accordionExample">
                            <div>
                                @foreach ($categories[6]->subcategories as $subcategory)
                                <a class="dropdown-item" href="{{route('subcategoryArticle', ['subcategory' => $subcategory])}}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <a href="{{ route('categoryArticle', ['category' => $categories[7]]) }}">
                            <img class="icon-nav-offmenu" src="/images/icon/abbigliamento-black.png" alt="">
                            <h2 class="font-offmenu d-inline">{{ __('ui.musica') }}, {{ __('ui.film') }}, {{ __('ui.tv') }} & {{ __('ui.libri') }}</h2>
                        </a>
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample7"><i class="bi bi-arrow-down-short"></i></button>
                        <div class="collapse" id="collapseExample7" data-bs-parent="#accordionExample">
                            <div>
                                @foreach ($categories[7]->subcategories as $subcategory)
                                <a class="dropdown-item" href="{{route('subcategoryArticle', ['subcategory' => $subcategory])}}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <a href="{{ route('categoryArticle', ['category' => $categories[8]]) }}">
                            <img class="icon-nav-offmenu" src="/images/icon/sport-black.png" alt="">
                            <h2 class="font-offmenu d-inline">{{ __('ui.sport') }} & {{ __('ui.tempo libero') }}</h2>
                        </a>
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample8" aria-expanded="false" aria-controls="collapseExample8"><i class="bi bi-arrow-down-short"></i></button>
                        <div class="collapse" id="collapseExample8" data-bs-parent="#accordionExample">
                            <div>
                                @foreach ($categories[8]->subcategories as $subcategory)
                                <a class="dropdown-item" href="{{route('subcategoryArticle', ['subcategory' => $subcategory])}}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <a href="{{ route('categoryArticle', ['category' => $categories[9]]) }}">
                            <img class="icon-nav-offmenu" src="/images/icon/console-black.png" alt="">
                            <h2 class="font-offmenu d-inline">{{ __('ui.videogiochi') }} & {{ __('ui.console') }}</h2>
                        </a>
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample9" aria-expanded="false" aria-controls="collapseExample9"><i class="bi bi-arrow-down-short"></i></button>
                        <div class="collapse" id="collapseExample9" data-bs-parent="#accordionExample">
                            <div>
                                @foreach ($categories[9]->subcategories as $subcategory)
                                <a class="dropdown-item" href="{{route('subcategoryArticle', ['subcategory' => $subcategory])}}">{{ __("ui.$subcategory->name") }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
        <div class="col-1  d-flex justify-content-end">
            @auth
            <div class="dropdown">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-5"></i>
                    </button>
            @if (Auth::user()->is_revisor)
                <ul class="dropdown-menu custom-user ">
                    <h6 class="mt-2 dropdown-font">Benvenuto {{ Auth::user()->name }}</h6>
                    <a class="dropdown-font d-block position-relative" href="{{route('indexRevisor')}}"> Dashboard Revisore
                        <span class="incremento-articoli translate-middle badge rounded-pill bg-danger">
                            {{ \App\Models\Article::toBeRevisedCount() }}
                        </span>
                    </a>
                    <form class="dropdown-button" method="POST" action="{{route('logout')}}">
                        @csrf
                        <button type="submit" class="btn text-danger">Logout</button>
                    </form>
                    
                    </ul>
                    
                    @else
                    <ul class="dropdown-menu custom-user ">
                        <h6 class="mt-2 dropdown-font">Benvenuto {{ Auth::user()->name }}</h6>
                        <a class="dropdown-font d-block " href="{{route('createArticle')}}"> Crea Articolo</a>
                        <form class="dropdown-button" method="POST" action="{{route('logout')}}">
                            @csrf
                            <button type="submit" class="btn text-danger">Logout</button>
                        </form>
                        
                    </ul>
                    @endif
                    @else
                    <a class="nav-link" href="{{ route('auth.form') }}"><i class="bi bi-person-circle fs-5 ms-3"></i></a>
                    @endauth
                </div>
        </div>
    </div>
</div>
</div>
