<x-layout>
    <div class="container-fluid justify-content-center align-items-center bg-black d-flex text-white">
        <div class="container ">
            <div class="row ">
                <div class="col-12  mt-1 text-center d-flex flex-column justify-content-center align-items-center">
                    <h1 class="uppercase"></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item uppercase text-white"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item text-white"><span>></span></li>
                            <li class="breadcrumb-item uppercase active text-white" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @if ($article_to_check)
            <div class="row mb-5">
                <div class="col-12 mt-4 mt-md-5">
                    <h3 class="display-5 text-left  font-custom-heigt">Ciao {{ Auth::user()->name }},<br> hai <span
                            class="accent-color">{{ \App\Models\Article::toBeRevisedCount() }} Articolo/i</span> da
                        revisionare.</h3>
                </div>


                <div class="row">
                    @if ($article_to_check->images->count())

                        @foreach ($article_to_check->images as $key => $image)
                            <div class="col-12 col-md-6 mb-5 mt-5">
                                <div class="row">
                                    <div class="col-12 col-md-3 mb-5">
                                        <img src="{{ $image->getUrl(700, 700) }}" class="img-fluid"
                                            alt="immagine {{ $key + 1 }} dell'articolo ' {{ $article_to_check->title }} ">
                                    </div>

                                    <div class="col-6 col-md-4 ps-md-5 ">
                                        <div class="card-body">
                                            <h5>Valutazioni</h5>
                                            <div class="row fustify-content-center">
                                                <div class="col-2">
                                                    <div class="text-center mx-auto {{ $image->adult }}"></div>
                                                </div>
                                                <div class="col-10">Adulti</div>
                                            </div>
                                        </div>
                                        <div class="row fustify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{ $image->violence }}"></div>
                                            </div>
                                            <div class="col-10">Violenza</div>
                                        </div>
                                        <div class="row fustify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{ $image->spoof }}"></div>
                                            </div>
                                            <div class="col-10">Parodia</div>
                                        </div>
                                        <div class="row fustify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{ $image->racy }}"></div>
                                            </div>
                                            <div class="col-10">Osceno</div>
                                        </div>
                                        <div class="row fustify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{ $image->medical }}"></div>
                                            </div>
                                            <div class="col-10">Medico</div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-5">
                                        <div class="card-body pe-5">
                                            <h5>Etichette</h5>
                                            @if ($image->labels)
                                                @foreach ($image->labels as $label)
                                                <span class="badge bg-accent">
                                                    #{{ $label }},
                                                </span>    
                                                @endforeach
                                            @else
                                                <p>Nessuna Etichetta</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach


                        {{-- @foreach ($article_to_check->images as $key => $image)
                                <div class="col-12 col-md-4 mb-5 py-4 px-3">
                                    <img src="{{ $image->getUrl(700, 700) }}" class="img-fluid"
                                        alt="immagine {{ $key + 1 }} dell'articolo ' {{ $article_to_check->title }} ">
                                </div>

                                <div class="col-6 col-md-4 ps-5 pt-5">
                                    <div class="card-body">
                                        <h5>Ratings</h5>
                                        <div class="row fustify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{$image->adult}}"></div>
                                            </div>
                                            <div class="col-10">Adult</div>
                                        </div>
                                    </div>
                                    <div class="row fustify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{$image->violence}}"></div>
                                        </div>
                                        <div class="col-10">Violence</div>
                                    </div>
                                    <div class="row fustify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{$image->spoof}}"></div>
                                        </div>
                                        <div class="col-10">Spoof</div>
                                    </div>
                                    <div class="row fustify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{$image->racy}}"></div>
                                        </div>
                                        <div class="col-10">Racy: </div>
                                    </div>
                                    <div class="row fustify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{$image->medical}}"></div>
                                        </div>
                                        <div class="col-10">Medical</div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4 pt-5">
                                    <div class="card-body pe-5">
                                        <h5>Labels</h5>
                                        @if ($image->labels)
                                            @foreach ($image->labels as $label)
                                            #{{$label}},
                                            @endforeach
                                        @else
                                            <p>Nessuna Label</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12 break-line">
                                
                                </div>
                            @endforeach --}}
                    @else
                        @for ($i = 0; $i < 6; $i++)
                            <div class="col-6 col-md-4 text-center">
                                <img src="https://picsum.photos/200" alt="" class="img-fluid py-3">
                            </div>
                        @endfor
                    @endif
                </div>

            </div>
    </div>
    <div class="container-fluid bg-light altezza-revisor">
        <div class="container pt-3 pt-md-5">
            <div class="row pt-5">
                <div class="col-12 col-md-8">
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-6">                                
                            <h6>Nome:</h6>
                            <h1>{{ $article_to_check->title }}</h1>
                            <div>
                                <h6>Descrizione:</h6>
                                <p>{{ $article_to_check->description }}</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <div class="mb-3">
                                <h6 class="h6-revisor">Prezzo:</h6>
                                <h5>{{ $article_to_check->price }} €</h5>
                            </div>
                            <div class="col-sm-5 mb-3">
                                <h6 class="h6-revisor">Creato Da:</h6>
                                <h5>{{ $article_to_check->user->name }}</h5>
                            </div>
                            <div class="mb-3">
                                <h6 class="h6-revisor">Categoria:</h6>
                                <h5>{{ $article_to_check->category->name }}</h5>
                            </div>
                            
                        </div>

                    </div>
                </div>
                <div class="col-3 ">

                    <div class="mb-3">
                        <form method="POST" action="{{ route('accept', ['article' => $article_to_check]) }}">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn bottone-revisore btn-success">Accetta</button>
                        </form>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('reject', ['article' => $article_to_check]) }}">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn bottone-revisore btn-danger">Rifiuta</button>
                        </form>
                    </div>
                
                    @if (session()->has('message'))
                        <div class="row justify-content-center">
                            <div class="col-12 mt-3 alert alert-succes">
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@else
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-12 mt-md-5">
            <h2 class=" display-4 text-center mt-md-5 mb-5">
                Ciao {{ Auth::user()->name }},<br>non ci sono articoli<br>da revisionare.
            </h2>
            <div class=" justify-content-center d-flex ">
                @auth
                    <a href="{{ route('createArticle') }}" class="btn btn-colorcustom mx-2">Pubblica un articolo</a>
                @endauth

                <a href="{{ route('home') }}" class="btn btn-outline-dark mx-2">Torna alla Home</a>
            </div>
        </div>

    </div>

    @endif
    </div>

</x-layout>
