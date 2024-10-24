<x-layout>
    <div class="container-fluid justify-content-center align-items-center bg-black d-flex text-white">
        <div class="container ">
            <div class="row ">
                <div class="col-12  mt-1 text-center d-flex flex-column justify-content-center align-items-center">
                    
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item uppercase text-white"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item  text-white"><span>></span></li>
                            <li class="breadcrumb-item uppercase active text-white" aria-current="page">Crea Articolo</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 m-3 ColumnDnone">
                <div class="row">
                    <div class="col-12  ColumnDnone article-img mt-5">
                        
                    </div>
                    <div class=" p-3 shadow  bg-light mt-3 col-12 ColumnDnone  ">
                        <h5>Entra nel team</h5>
                        <p>Clicca il bottone e fai richiesta al nostro admin</p>
                        <a href="{{route('become.revisor')}}" class="btn btn-colorcustom">Entra nel team</a>
                    </div>
                </div>
            </div>
        <div class="col-12 col-md-7 rounded mt-3 p-4">
            <h1 class="my-3">Crea un nuovo <span class=" ColorTextForm">Articolo</span></h1>
            <livewire:create-article-form/>
        </div>
    </div>
    </div>
</x-layout>