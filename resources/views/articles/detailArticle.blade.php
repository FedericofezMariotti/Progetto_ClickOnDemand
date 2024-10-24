<x-layout>
    <div class="container-fluid category-bg justify-content-center align-items-center d-flex text-white"
        style="background-image: url(http://[::1]:5173{{ $article->category->img }});">
        <div class="container ">
            <div class="row ">
                <div class="col-12 mt-3 text-center d-flex flex-column justify-content-center align-items-center">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item uppercase text-white"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item text-white px-md-3"><span>></span></li>
                            <li class="breadcrumb-item uppercase active text-white" aria-current="page">
                                {{ $article->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid product-section">
        <div class="row justify-content-center  product-col-image p-4">
            {{-- Colonna da non modificare --}}
            <div class="col-12  col-md-6">
                <div class="row colonne-inverse">
                    <div class="col-12 col-md-2 mt-3 detail-custom">

                        @foreach ($article->images as $key => $image)
                            <div
                                class="thumbnail-container-image mb-3 d-flex justify-content-center align-items-center">
                                <img src="{{ $image->getUrl(700, 700) }}" alt="" width="80" height="80"
                                    onmouseover="changeImage(this)"
                                    class=" p-2 @if ($loop->first) active @endif  ">
                            </div>
                        @endforeach

                    </div>

                    <div class=" col-12 col-md-10 pt-3">


                        <div class="main-image">
                            <img src="{{ $article->images->first()->getUrl(700, 700) }}" id="mainImage" alt=""
                                class="img-fluid  active  product-image-an">
                        </div>

                    </div>
                </div>
            </div>

            {{-- Colonna da modificare --}}
            <div class="col-12 col-md-6  product-col-section mt-md-3 ">

                <div class="row ">
                    <div class=" col-12 col-md-10  product-card py-2 py-md-5 ">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <span class=" d-inline-block product-title-card px-md-5 mt-3 fs-1">
                                    {{ $article->title }}</span>
                            </div>
                            <div class=" col-12 col-md-12">
                                <span class=" product-price-card d-block ps-md-5 fs-1"> € {{ $article->price }}</span>
                                <span class="d-inline-block ms-md-5 pb-2"> <i
                                        class="bi bi-star-fill bi-card-icon fill-product"></i></span>
                                <span> <i class="bi bi-star-fill bi-card-icon fill-product pt-3"></i></span>
                                <span> <i class="bi bi-star-fill bi-card-icon fill-product pt-3"></i></span>
                                <span> <i class="bi bi-star-fill bi-card-icon fill-product pt-3"></i></span>
                            </div>
                        </div>
                        <div class=" ms-md-5 badge bg-accent mb-3">
                            <a href="{{ route('categoryArticle', ['category' => $article->category]) }}">
                                #{{ $article->category->name }}
                            </a>
                        </div>

                        @if ($article->subcategory)
                            <span class="badge bg-black bg-black-custom">
                                #{{ $article->subcategory->name }}
                            </span>
                        @endif
                        <p class=" px-md-5 product-descr-card">{{ $article->description }}</p>

                        <a href="mailto:{{ $article->user->email }}"
                            class="btn btn-custom-color-2 ms-md-5 mt-3">Contatta L'autore</a>
                    </div>
                </div>

            </div>

            <div class="container-fluid product-review-section mt-5">
                <div class="row">
                    <div class="col-12">
                        <div class="container product-review-section1">
                            {{-- <h5 class="product-review-title pt-3">Recensioni per: {{ $article->title }}</h5> --}}
                            <div class="product-review-container my-3 d-flex justify-content-center">
                                <div class="row border-primary w-100">
                                    <div class="col-12 col-md-8 product-review-col1  d-flex align-items-center">
                                        <i class="bi bi-person-circle fs-3 ps-md-3 bi-persone-circle"></i>
                                        <span class="d-inline-block product-review-span ps-md-3 fw-bold">Tester
                                            Copyrighter</span>
                                        <span class="ps-md-3 ps-2 product-review-span1"> June 17, 2022</span>
                                    </div>

                                    <div class=" col-12 col-md-4 product-review-col2">
                                        <i class="bi bi-star-fill bi-card-icon pe-2"></i>
                                        <i class="bi bi-star-fill bi-card-icon pe-2"></i>
                                        <i class="bi bi-star-fill bi-card-icon pe-2"></i>
                                        <i class="bi bi-star-fill bi-card-icon pe-2"></i>
                                        <i class="bi bi-star-fill bi-card-icon pe-4"></i>
                                    </div>
                                    <div class="col-12 d-flex align-items-center  product-review-col12 border-top">
                                        <p class="product-review-comment px-4 py-3">Lorem diam habitant fermentum fusce
                                            potenti adipiscing magnis praesent aptent eget ex at bibendum placerat
                                            senectus fringilla viverra lectus vehicula</p>
                                    </div>
                                </div>
                            </div>

                            <div class="container product-add-review py-4">
                                <span class="d-inline-block product-add-review-link add-review-color">Aggiungi una
                                    Recensione</span>
                                @guest
                                    <span class="d-inline-block product-add-review-link1">Devi essere loggato<a
                                            href="{{ route('auth.form') }}" class="product-link-log">login</a>.</span>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container product-related-section pb-4">
                <div class="row ">
                    <div class="col-12 d-flex justify-content-center flex-column">
                        <h5 class="text-center product-related-title py-2">Prodotti Correlati</h5>
                        <div class="row">
                            @forelse ($articles as $article)
                                <x-cardnew :article="$article" />
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
            </div>



        </div>
    </div>


    <script>
        function changeImage(clickedImage) {
            const thumbnailImages = document.querySelectorAll('.thumbnail-container-image img');
            const mainImage = document.getElementById('mainImage');

            // Rimuovi la classe active da tutte le thumbnail
            thumbnailImages.forEach(img => {
                img.classList.remove('active');
            });

            // Ottieni l'src dell'immagine cliccata
            const src = clickedImage.getAttribute('src');

            // Aggiorna l'src dell'immagine principale
            setTimeout(() => {

                mainImage.setAttribute('src', src);
                mainImage.classList.add('product-image-an');

            }, 100)

            mainImage.classList.remove('product-image-an');
            // Aggiungi la classe active all'immagine cliccata
            clickedImage.classList.add('active');
        }
    </script>







</x-layout>
