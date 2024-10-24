<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $articles= Article::where('is_accepted',true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('home',compact('articles'));
    }

    public function searchArticle(Request $request){
        $query = $request->input('query');
        $articles= Article::search($query)
        ->where('is_accepted',true)
        ->paginate(6);
        return view ('articles.searched', ['articles' => $articles, 'query' => $query]);
    }


    public function authForm() {
        return view ('auth.auth-form')->layout('layout.auth');
    }
    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
