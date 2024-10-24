<x-layout>
<div class="container">

    <div class="row py-5 justify-content-center align-items-center text-center">

        <div class="col-12">
            <h1 class="display-3">Risultati della ricerca {{$query}}</h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center text-center py-5">
        @forelse ($articles as $article)
           
                <x-cardnew :article="$article" />
            
        @empty
            <div class="col-12">
                <h3 class="text-center">
                    Nessun articolo corrisponde alla tua ricerca
                </h3>
            </div>
        @endforelse
    </div>
</div>
<div class="d-flex justify-content-center">
    <div>
        {{ $articles->links() }}
    </div>
</div>




</x-layout>