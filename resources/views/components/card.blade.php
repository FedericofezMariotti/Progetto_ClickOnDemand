<div class="col-12 col-md-4 card-container d-flex justify-content-center mx-3 ">
    <div class="row w-100  justify-content-center">
        <div class="col-10 card-img-column mt-4" style="background-image:url({{$article->images->isNotEmpty() ? $article->images->first()->getUrl(700, 700): 'https://picsum.photos/200'}});">
      {{--       <img src="{{$article->images->isNotEmpty() ? Storage::url($article->images->first()->path): 'https://picsum.photos/200'}}" alt="{{$article->title}}" class="img-fluid"> --}}
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
</div>
