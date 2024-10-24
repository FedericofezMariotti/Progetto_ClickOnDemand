<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth',only: ['createArticle']),
        ];
    }
    public function createArticle()
    {
        
        return view('articles.createArticle');
    }

    public function indexArticle()
    {
        $articles=Article::where('is_accepted',true)->orderBy('created_at', 'desc')->paginate(6);
        return view('articles.indexArticle',compact('articles'));
    }
    // public function detailArticle(Article $article){
    //     $articles= Article::where('is_accepted',true)->orderBy('created_at', 'desc')->take(3)->get();
    //     return view('articles.detailArticle',compact('article', 'articles'));
    // }
    public function detailArticle(Article $article) {
        // Prendo la categoria dell'articolo corrente
        $category = $article->category;
    
        // Prendo gli ultimi 3 articoli accettati della stessa categoria dell'articolo corrente
        $articles = Article::where('category_id', $category->id)
                            ->where('is_accepted', true)
                            ->orderBy('created_at', 'desc')
                            ->take(3)
                            ->get();
    
        return view('articles.detailArticle', compact('article', 'articles'));
    }

    public function categoryArticle(Category $category)
    {
        
        $articles=$category->articles()->where('is_accepted',true)->orderBy('created_at', 'desc')->paginate(6);
        return view ('articles.categoryArticle',['articles'=> $articles, 'category'=> $category]);
    }

    public function subcategoryArticle(SubCategory $subcategory)
    {
        $articles=$subcategory->articles()->where('is_accepted',true)->orderBy('created_at', 'desc')->paginate(6);
        return view ('articles.subcategoryArticle', ['articles'=> $articles, 'subcategory'=> $subcategory]);
    }
    
}
