<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function homepage(){
       $articles = Article::where('is_accepted', true)->orderBy('created_at','desc')->take(6)->get();
       return view('homepage', compact('articles'));
        
    }

    public function account(Article $article){
        
        $articles = auth()->user()->articles()->orderBy('created_at','desc')->where('is_accepted', true)->paginate(8);
        if($article->user_id !== auth()->user()->id){
            return view ('auth.account', ['articles' => $articles]);
        }
 
    }

    public function categoryArticles (Request $request){
        // inizio prova filtro
        $categories = Category::all();

        // filtro in base alla categoria
        $query = Article::query();

        if ($request->filled('category_id')){
            $query->where('category_id', $request->input('category_id'));
        }
        
        $articles = $query->get();

        return view('category.category', compact('articles', 'categories'));
        // return view ('category.category');
    }

    public function searchArticles(Request $request){

        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->paginate(9);
        return view('articles.searched', ['articles' => $articles, 'query' => $query]);

    }
     public function setLanguage($lang)
     {
        session()->put('locale', $lang);
        return redirect()->back();
     }
}

