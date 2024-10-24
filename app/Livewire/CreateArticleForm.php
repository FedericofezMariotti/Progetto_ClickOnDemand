<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\SubCategory;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateArticleForm extends Component
{
    use WithFileUploads;

    #[Validate('required', message: 'Non dimenticare il Titolo')]
    public $title;
    #[Validate('required' , message: 'Non dimenticare la descrizione')]
    public $description;
    #[Validate('required')]
    public $price;
    #[Validate('required')]
    public $category;
    public $article;
    public $selectedsubcategory;

    public $images = [];
    public $temporary_images;

    public function createArticle(){
        $this->validate();
        $this->article= Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id(),
            'sub_category_id' => $this->selectedsubcategory
        ]);

        if(count($this->images)>0){
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                
                
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);
                // TODO Ricordati di cambiare sotto le dimensioni del taglio immagine
            // dispatch(new ResizeImage($newImage->path, 700, 700));
            // dispatch(new GoogleVisionSafeSearch($newImage->id));
            // dispatch(new GoogleVisionLabelImage($newImage->id));
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 700, 700),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
                
            }   

            File::deleteDirectory(storage_path('/app/livewire-tmp'));       
        }

        session()->flash('success', 'Articolo creato con successo');
        $this->reset();

    }

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images' => 'max:6'
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
        
            unset($this->images[$key]);
        }
    }

    public function render()
    {
        // $this->subcategories= SubCategory::where('category_id', $this->category)->get();
        return view('livewire.create-article-form');
    }
}
