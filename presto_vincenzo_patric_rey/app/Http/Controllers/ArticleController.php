<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticlesRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
// use Illuminate\Paginator\Paginator;

class ArticleController extends Controller implements HasMiddleware
{
    // metodo che consente solo ai registrati di creare un articolo
    public static function middleware(): array
    {
        return[
            new Middleware('auth', only: ['create']),
        ];
    }


    public function index()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at','desc')->paginate(10);
        return view('articles.index', compact('articles'));
    }

    public function byCategory(Category $category)
    {
        $articles = $category->articles()->where('is_accepted', true);
        return view('articles.byCategory', compact('articles', 'category'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
         $title ='Creazione articoli';
        // return view('articles.create',['title'=>$title]);
        return view('articles.create', ['categories' => \App\Models\Category::all(), 'title' => $title]);
    }


   
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticlesRequest $request)

    {


    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        
    }
}
