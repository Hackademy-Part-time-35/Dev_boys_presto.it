<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticlesRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    {   $title ='Creazione articoli';
        return view('articles.create',['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticlesRequest $request)

    {
       $article=Article::create($request->all());
       
       if($request->hasFile('image') && $request->file('image')->isValid()){
        $fileName='articleImage .' . $request->file('image')->extension();

        $article->image= $request->file('image')->storeAs('public/images/article/' . $article->id, $fileName);
       }

       $article->save();

       return redirect()->route('articles.index')->with(['success' => 'Articolo inserito con successo']);

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
        return view('articles.edit',['article'=>$article,
    'title'=>'Modifica Articolo']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article=Article::create($request->all());
       
        if($request->hasFile('image') && $request->file('image')->isValid()){
         $fileName='articleImage .' . $request->file('image')->extension();
 
         $article->image= $request->file('image')->storeAs('public/images/article/' . $article->id, $fileName);

         $article->save();
        }
 
        
 
        return redirect()->route('articles.index')->with(['success' => 'Articolo inserito con successo']);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->back()->with(['error' => 'Articolo eliminato con succeso']);
    }
}
