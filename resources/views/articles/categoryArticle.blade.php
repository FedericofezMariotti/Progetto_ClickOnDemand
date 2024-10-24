<x-layout>

<div class="container-fluid category-bg justify-content-center align-items-center d-flex text-white" style="background-image: url(http://[::1]:5173{{ $category->img }});">
    <div class="container ">
        <div class="row ">
            <div class="col-12 mt-3 text-center d-flex flex-column justify-content-center align-items-center">
                <h1 class="uppercase">{{ $category->name }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item uppercase text-white"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item text-white"><span>></span></li>
                        <li class="breadcrumb-item uppercase active text-white" aria-current="page">{{ $category->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
    <div class="container mt-5">
        
        <div class="row"> 
            <div class="col-12">
                <div class="row">
                    @forelse ($articles as $article)
                        <x-cardnew :article="$article" />
                    @empty
                    <div class="col-12">
                        <h2 class="text-center mt-5 mb-4">
                            Non sono presenti articoli
                        </h2>
                        <div class=" justify-content-center d-flex ">
                            @auth
                                <a href="{{ route('createArticle') }}" class="btn btn-colorcustom mx-2">Pubblica un articolo</a>
                            @endauth

                            <a href="{{ route('home') }}" class="btn btn-outline-dark mx-2">Torna alla Home</a>
                        </div>
                    </div>
                    @endforelse
                </div>
                
            </div>
            
        </div>

        {{$articles->links()}}

    </div>



</x-layout>
