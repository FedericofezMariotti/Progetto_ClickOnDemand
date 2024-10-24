<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1">
                    Tutti gli articoli
                </h1>
            </div>
        </div>
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
        
    {{$articles->links()}}
</x-layout>