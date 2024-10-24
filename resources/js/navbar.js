let mediaQuery = window.matchMedia('(max-width: 768px)');

/* Errore navbar1. Non viene richiamata in tutte le viste. Ci da null  */
let navbar1=document.querySelector('#navbar1');
let navbar2=document.querySelector('#navbar2');
let navbar3=document.querySelector('#navbar3');




function managedVisibility(e) {
        if (e.matches) { 
            navbar1.classList.add('d-none');
            navbar2.classList.add('d-none');
            navbar3.classList.remove('d-none');

        } else {
            navbar1.classList.remove('d-none'); 
            navbar2.classList.remove('d-none'); 
            navbar3.classList.add('d-none');
        }
}
if (navbar1) {
    managedVisibility(mediaQuery);
    mediaQuery.addEventListener('change', managedVisibility);
}


let searchIcon = document.querySelector('#searchIcon');
let rowNavbar = document.querySelector('#rowNavbar');
if (searchIcon) {
    searchIcon.addEventListener('click', () => {
        let searchDiv = rowNavbar.querySelector('.search-div');
        if (!searchDiv) {
            let div = document.createElement('div');
            div.classList.add('col-12', 'search-div', 'search-custom');
            div.innerHTML = `<form class="d-flex me-2" role="search" action="{{ route('article.search') }}" method="GET">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="query">
                            <button class="btn btn-colorcustom" type="submit" >Cerca</button>
                            </form>`;
            rowNavbar.appendChild(div);
        } else {
    
            searchDiv.classList.toggle('d-none');
        }
    });

    
}

