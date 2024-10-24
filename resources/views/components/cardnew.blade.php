<div class="col-12 col-md-4 ">
    <div class="card cardnew-custom">
        <div class="mt-4 mx-4" style="height: 300px; background-size: cover; background-image:url({{$article->images->isNotEmpty() ? $article->images->first()->getUrl(700, 700): 'https://picsum.photos/200'}});">
            {{-- <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(700, 700): 'https://picsum.photos/200'}}" alt="{{$article->title}}" class="img-fluid"> --}}
        </div>
        <div class="card-body">

                        <h3 class="text-center card-title fs-5">
                            {{ $article->title }}
                        </h3>
                        <div class="card-icon-reviews my-2 text-center">
                            <i class="bi bi-star-fill bi-card-icon"></i>
                            <i class="bi bi-star-fill bi-card-icon"></i>
                            <i class="bi bi-star bi-card-icon"></i>
                            <i class="bi bi-star bi-card-icon"></i>
                        </div>
                        <div class="card-price text-center">
                            <h3 class="card-price-text mb-3 fs-4">
                                € {{ $article->price }}
                            </h3>
                            <div class="badge bg-accent mb-3">
                                <a  href="{{ route('categoryArticle', ['category' => $article->category]) }}">
                                    #{{ $article->category->name }}
                                </a>
                            </div>
                            {{-- @dd($article->subcategory()->get()) --}}
                            @if ($article->subcategory)

                            <span class="badge bg-black bg-black-custom">
                                #{{ $article->subcategory->name }}
                            </span>
                            @endif
                        </div>


            
            <a href="{{ route('detailArticle', compact('article')) }}" class="btn btn-custom-color">Vedi Ora</a>
        </div>
        </div>
        
</div>
{{-- <div class="col-12 col-md-4 card-container-2 d-flex justify-content-center mx-3 ">
    
    <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
    
    
    <div class="row w-100  justify-content-center">
        <div class="col-10 card-img-column mt-4" style="background-image:url({{$article->images->isNotEmpty() ? $article->images->first()->getUrl(700, 700): 'https://picsum.photos/200'}});">
            <img src="{{$article->images->isNotEmpty() ? Storage::url($article->images->first()->path): 'https://picsum.photos/200'}}" alt="{{$article->title}}" class="img-fluid">
        </div>

        <div class="col-12 card-tabs-column d-flex justify-content-center ">
            <div class="row">
                <div class="col-12 card-text-column text-center">
                    <span class="d-inline-block card-title fs-5 ">
                        {{ $article->title }}
                    </span>
                    <div class="card-icon-reviews my-2 text-center">
                        <i class="bi bi-star-fill bi-card-icon"></i>
                        <i class="bi bi-star-fill bi-card-icon"></i>
                        <i class="bi bi-star bi-card-icon"></i>
                        <i class="bi bi-star bi-card-icon"></i>
                    </div>
                    <div class="card-price text-center">
                        <span class="d-inline-block card-price-text">
                            € {{ $article->price }}
                        </span>
                        <p class="card-descr mt-2"> {{Str::limit($article->description, 100, '...')}} </p>
                        <a class="btn btn-custom-color" href="{{ route('detailArticle', compact('article')) }}" class="mb-3">Vedi Ora</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12  card-tabs-icon-column card-buttons  ">
            <div class="d-flex justify-content-center flex-column align-items-end fw-bold ">
                <a href="{{ route('detailArticle', compact('article')) }}" class="mb-3"><i
                        class="bi bi-link icon mb-2"></i></a>
                
            </div>
        </div>
    </div>
</div> --}}