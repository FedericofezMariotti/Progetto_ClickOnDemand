<div class="container">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col-12 col-md-5 mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                <img src="/images/logo-navbar.png" class="logo-footer" alt="">
            </a>
            <p class="text-body-secondary">©Gatani Mariotti Riva 2024</p>
        </div>


        <div class="col-6 col-md-2 mb-5">
            <h5>Categorie</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="{{ route('categoryArticle', ['category' => $categories[0]]) }}" class="nav-link p-0 text-body-secondary">{{ __('ui.abbigliamento') }}</a></li>
                <li class="nav-item mb-2"><a href="{{ route('categoryArticle', ['category' => $categories[1]]) }}" class="nav-link p-0 text-body-secondary">{{ __('ui.auto') }} & {{ __('ui.moto') }}</a></li>
                <li class="nav-item mb-2"><a href="{{ route('categoryArticle', ['category' => $categories[2]]) }}" class="nav-link p-0 text-body-secondary">{{ __('ui.bellezza') }}</a></li>
                <li class="nav-item mb-2"><a href="{{ route('categoryArticle', ['category' => $categories[3]]) }}" class="nav-link p-0 text-body-secondary">{{ __('ui.casa') }}</a></li>
                <li class="nav-item mb-2"><a href="{{ route('categoryArticle', ['category' => $categories[4]]) }}" class="nav-link p-0 text-body-secondary">{{ __('ui.elettronica') }}</a></li>
            </ul>
        </div>

        <div class="col-6 col-md-2 mb-5 mt-1">
            
            <ul class="nav flex-column mt-4">
                <li class="nav-item mb-2"><a href="{{ route('categoryArticle', ['category' => $categories[5]]) }}" class="nav-link p-0 text-body-secondary">{{ __('ui.fotografia') }}</a></li>
                <li class="nav-item mb-2"><a href="{{ route('categoryArticle', ['category' => $categories[6]]) }}" class="nav-link p-0 text-body-secondary">{{ __('ui.gioielli') }}</a></li>
                <li class="nav-item mb-2"><a href="{{ route('categoryArticle', ['category' => $categories[7]]) }}" class="nav-link p-0 text-body-secondary">{{ __('ui.musica') }} & {{ __('ui.film') }}</a></li>
                <li class="nav-item mb-2"><a href="{{ route('categoryArticle', ['category' => $categories[8]]) }}" class="nav-link p-0 text-body-secondary">{{ __('ui.sport') }}</a></li>
                <li class="nav-item mb-2"><a href="{{ route('categoryArticle', ['category' => $categories[9]]) }}" class="nav-link p-0 text-body-secondary">{{ __('ui.console') }}</a></li>
            </ul>
        </div>

        <div class="col-12 col-md-3 mb-5">
            <h5>Entra nel team</h5>
            <p>Clicca il bottone e fai richiesta al nostro admin</p>
            <a href="{{route('become.revisor')}}" class="btn btn-colorcustom">Entra nel team</a>
        </div>
    </footer>
</div>
