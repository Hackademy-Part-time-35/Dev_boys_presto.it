<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use  App\Models\Article;
=======
use App\Models\Article;
>>>>>>> 84ea495d459193e2871e6a1657b199cc870ed375
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
<<<<<<< HEAD

        $article=Article::all();

       $articles=Article::take(6)->orderBy('created_at','desc')->get();
       return view('homepage', [compact('articles'),]);
=======
       $articles = Article::take(6)->orderBy('created_at','desc')->get();
       return view('homepage', compact('articles'));
>>>>>>> 84ea495d459193e2871e6a1657b199cc870ed375
        
    }

    public function account(){
        return view ('auth.account');
    }
}
