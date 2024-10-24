<x-layout>

    @if (session()->has('errorMessage'))
    <div class="alert alert-danger text-center w-100">
        {{ session('errorMessage') }}
    </div>
    @endif
    @if (session()->has('Message'))
    <div class="alert alert-success text-center w-100">
        {{ session('Message') }}
    </div>
    @endif
    {{-- SEZIONE HEADER SLIDE --}}
    <header>
        <div class="container-fluid hero-section">
            <div class="row position-relative">
                <div class="col-5 column2">
                    <div class="row">
                        <div class="col-10 column3">
                            {{-- <img src="/images/hero1.jpg" alt="" class="img-fluid"> --}}
                        </div>
                        <div class="col-12 column4"></div>
                    </div>
                </div>
                <div class="col-7 column1">
                    <div class="row">
                        <div class="col-12 column5"></div>
                        <div class="col-5"></div>
                        <div class="col-7 column6">

                        </div>
                    </div>
                </div>
                <div class="col-6 titolo-slide">
                    <h1 class="headerTitle2 text-white">
                        WelcomeTo<br><span class="colore-titolo">ClickOn</span>Demand
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        {{-- SEZIONE ICONE CATEGORIE --}}
        {{-- <div class="container-fluid bg-black pb-5">
            <div class="container  pb-5">
                <div class="row">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row justify-content-around">
                                    <div class="col-6 col-md-3 text-center">
                                        <div class="altezza-icone">
                                            <a href="{{ route('categoryArticle', ['category' => $categories[0]]) }}"><img
                                                class="immagine-icona" src="/images/icons/abbigliamento-v1-bianco.png"
                                                alt=""></a>
                                        </div>
                                        <h2 class="fs-4">Abbigliamento<br>& Scarpe</h2>
                                    </div>
                                    <div class="col-6 col-md-3 text-center">
                                        <div class="altezza-icone">
                                        <a href="{{ route('categoryArticle', ['category' => $categories[1]]) }}"><img
                                                class="immagine-icona" src="/images/icon/auto.png"
                                                alt=""></a>
                                        </div>
                                        <h2 class="text-white fs-4">Auto & Moto</h2>
                                    </div>
                                    <div class="col-6 col-md-3 text-center">
                                        <div class="altezza-icone">
                                        <a href="{{ route('categoryArticle', ['category' => $categories[2]]) }}"><img
                                                class="immagine-icona" src="/images/icon/bellezza.png"
                                                alt=""></a>
                                        </div>
                                        <h2 class="text-white fs-4">Bellezza & Salute</h2>
                                    </div>
                                    <div class="col-6 col-md-3 text-center">
                                        <div class="altezza-icone">
                                            <a href="{{ route('categoryArticle', ['category' => $categories[3]]) }}"><img
                                                class="immagine-icona" src="/images/icon/casa.png"
                                                alt=""></a>
                                        </div>
                                        <h2 class="text-white fs-4">Casa, Giardino<br>& Fai Da Te</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-around">
                                    
                                    <div class="col-6 col-md-3 text-center">
                                        <div class="altezza-icone">
                                        <a href="{{ route('categoryArticle', ['category' => $categories[4]]) }}"><img
                                                class="immagine-icona" src="/images/icon/informatica_1.png"
                                                alt=""></a>
                                        </div>
                                        <h2 class="text-white fs-4">Elettronica<br>& Informatica</h2>
                                    </div>
                                    <div class="col-6 col-md-3 text-center">
                                        <div class="altezza-icone">
                                        <a href="{{ route('categoryArticle', ['category' => $categories[5]]) }}"><img
                                                class="immagine-icona" src="/images/icon/fotografia.png"
                                                alt=""></a>
                                        </div>
                                        <h2 class="text-white fs-4">Fotografia</h2>
                                    </div>
                                    <div class="col-6 col-md-3 text-center">
                                        <div class="altezza-icone">
                                        <a href="{{ route('categoryArticle', ['category' => $categories[6]]) }}"><img
                                                class="immagine-icona" src="/images/icon/gioielli.png"
                                                alt=""></a>
                                        </div>
                                        <h2 class="text-white fs-4">Gioielli</h2>
                                    </div>
                                    <div class="col-6 col-md-3 text-center">
                                        <div class="altezza-icone">
                                        <a href="{{ route('categoryArticle', ['category' => $categories[7]]) }}"><img
                                                class="immagine-icona" src="/images/icon/musica.png"
                                                alt=""></a>
                                        </div>
                                        <h2 class="text-white fs-4">Musica, Film,<br>TV & Libri</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-around">
                                    <div class="col-6 col-md-3 text-center">
                                        <div class="altezza-icone">
                                        <a href="{{ route('categoryArticle', ['category' => $categories[8]]) }}"><img
                                                class="immagine-icona" src="/images/icon/console.png"
                                                alt=""></a>
                                        </div>
                                        <h2 class="text-white fs-4">Videogiochi<br>& Console</h2>
                                    </div>
                                    <div class="col-6 col-md-3 text-center">
                                    <div class="altezza-icone">
                                        <a href="{{ route('categoryArticle', ['category' => $categories[9]]) }}"><img
                                                class="immagine-icona" src="/images/icon/sport.png"
                                                alt=""></a>
                                        </div>
                                                <h2 class="text-white fs-4">Sport<br>& Tempo Libero</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="container-fluid bg-black pb-5">
            <div class="container pb-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h3 class="text-white text-start home-section-text ">Le categorie più popolari</h3>
                    </div>
                    {{-- categoria auto --}}
                    <div class="col-6 col-md-3 custom-card d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="altezza-icone d-flex justify-content-center align-items-center">
                            <a href="{{ route('categoryArticle', ['category' => $categories[1]]) }}">
                                <img class="immagine-icona" src="/images/icons/auto-v1-bianco.png" alt="">
                                <h2 class="font-card">Auto & Moto</h2>
                            </a>
                        </div>
                    </div>
                    {{-- categoria casa --}}
                    <div class="col-6 col-md-3 custom-card d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="altezza-icone d-flex justify-content-center align-items-center">
                            <a href="{{ route('categoryArticle', ['category' => $categories[3]]) }}">
                                <img class="immagine-icona" src="/images/icons/casa-v1-bianco.png" alt="">
                                <h2 class="font-card">Casa & Fai Da Te</h2>
                            </a>
                        </div>
                    </div>
                    {{-- categoria elettronica --}}
                    <div class="col-6 col-md-3 custom-card d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="altezza-icone d-flex justify-content-center align-items-center">
                            <a href="{{ route('categoryArticle', ['category' => $categories[4]]) }}">
                                <img class="immagine-icona" src="/images/icons/infromatica-v1-bianco.png" alt="">
                                <h2 class="font-card">Elettronica</h2>
                            </a>
                        </div>
                    </div> 
                    {{-- categoria fotografia --}}
                    <div class="col-6 col-md-3 custom-card d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="altezza-icone d-flex justify-content-center align-items-center">
                            <a href="{{ route('categoryArticle', ['category' => $categories[5]]) }}">
                                <img class="immagine-icona" src="/images/icons/fotografia-v1-bianco.png" alt="">
                                <h2 class="font-card">Fotografia</h2>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        {{-- SEZIONE TESTO DECORATIVO --}}
        <div class="container-fluid decorative pb-4">
        </div>

        {{-- SEZIONE ARTICOLI + CTA CREA ARTICOLO--}}
        <div class="container pb-5">
            <div class="row">
                <div class="col-12 pt-5">
                    <h5>Ultimi Articoli</h5>
                    <h2 class="text-title">NON PERDERE GLI<br>ULTIMI ARRIVI</h2>
                    <div class="row pt-5">
                        @forelse ($articles as $article)
                        <x-cardnew :article="$article"/>
                        @empty
                            <div class="col-12">
                                <h3 class="text-center">
                                    Non sono presenti articoli
                                </h3>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex  justify-content-around">
                <div class="row bordo-custom align-items-center">
                    <div class="col-9 custom-banner">
                        <h3>NON TROVI IL TUO ARTICOLO?<br>COSA ASPETTI, CREALO ORA</h3>
                    </div>
                    <div class="col-3 text-right">
                        <a href="{{ route('createArticle') }}" class="btn btn-dark">Nuovo Articolo</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- SEZIONE GALLERY --}}
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-12 p-0">
                    <img class="w-100" src="/images/gallery-img-new.png" alt="">
                </div>
            </div>
        </div>
        {{-- SEZIONE FORM CONTATTI --}}
        
    </main>
</x-layout>
