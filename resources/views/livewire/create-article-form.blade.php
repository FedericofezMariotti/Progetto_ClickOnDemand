<div> 
    {{-- 'title', 'description', 'price', 'category_id', 'user_id' --}}
    <form wire:submit="createArticle">
        <div class="input-group mb-4 auth-border-focus">
            {{-- <label  class="form-label">Titolo</label> --}}
            <input type="text" class="form-control auth-form-control" placeholder="Titolo" wire:model.blur="title">
            <div>@error('title') {{ $message }} @enderror</div>
        </div>
        <div class="input-group my-4 auth-border-focus">
            
            <div class="form-floating">
                <textarea class="form-control auth-form-control" placeholder="Descrizione" id="floatingTextarea2" style="height: 100px"  wire:model.blur="description"></textarea>
                <label for="floatingTextarea2 ColorTextarea">Descrizione</label>
            </div>
            <div>@error('description') {{ $message }} @enderror</div>
        </div>
        <div class="input-group my-4 auth-border-focus">
            {{-- <label  class="form-label">Prezzo</label> --}}
            <input type="number" step="0.01" class="form-control auth-form-control" placeholder="Prezzo" wire:model.blur="price">
            <div>@error('price') {{ $message }} @enderror</div>
        </div>
        <div class="">

            <select class="form-select input-group my-4 auth-border-focus SelectCategoryForm" wire:model.live="category" aria-label="Default select example">
                <option selected>Seleziona la Categoria</option>
                @foreach ($categories as $element)
                <option value="{{ $element->id }}" >{{ $element->name }}</option>
                @endforeach
                <div>@error('category') {{ $message }} @enderror</div>
            </select>
        </div>
        
        @if($category)
        <select class="form-select input-group my-4 auth-border-focus SelectCategoryForm" wire:model="selectedsubcategory" aria-label="Default select example">
            <option selected>Seleziona la Sotto Categoria</option>
            @foreach (App\Models\Category::find($category)->subcategories as $subcategory)
            <option value="{{ $subcategory->id }}">{{ $subcategory->name}}</option>
            @endforeach
            <div>@error('subcategories') {{ $message }} @enderror</div>
        </select>
        @endif

        <div class="input-group my-4 SelectCategoryForm">
            <input type="file" wire:model.live="temporary_images" multiple class="form-control SelectCategoryForm shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
            @error('temporary_images.*')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
            @error('temporary_images')
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        @if(!empty($images))
        <div class="row my-3">
            <div class="col-12 mb-3">
                <p>Anteprima Foto:</p>
                <div class="row  rounded shadow py-4">
                    @foreach($images as $key => $image)
                    <div wire:key="{{ $key }}" class="col-6 col-md-3 d-flex flex-column align-items-center my-3 position-relative">
                        <div class="img-preview mx-auto shadow rounded " style="background-image: url({{ $image->temporaryUrl() }});"></div>
                        <button type="button" class="btn mt-1 btn-danger customButtonPhotos" wire:click="removeImage({{ $key }})">X</button>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
        
        @endif
        

        <button type="submit" class=" mt-3 btn btn-colorcustom  w-100">Crea <i class="bi bi-send"></i></button>
    </form>
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</div>
