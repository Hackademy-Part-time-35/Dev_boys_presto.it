<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
       $articles = Article::take(6)->orderBy('created_at','desc')->get();
       return view('homepage', compact('articles'));
        
    }

    public function account(){
        return view ('auth.account');
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
}

