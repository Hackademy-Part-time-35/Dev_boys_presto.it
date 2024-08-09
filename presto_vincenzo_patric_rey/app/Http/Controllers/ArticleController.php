<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticlesRequest;
use App\Models\Article;
use Illuminate\Http\Request;

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

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
    {   $title='Elenco Articoli';
        return view('articles.index',[
            'title'=>$title,
            'articles' =>Article::all(),
        ]);
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
    public function show(StoreArticlesRequest $article)
    {
        //
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
