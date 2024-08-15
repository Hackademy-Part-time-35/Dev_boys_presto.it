<?php

namespace App\Http\Controllers;
use  App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){

        $article=Article::all();

       $articles=Article::take(6)->orderBy('created_at','desc')->get();
       return view('homepage', [compact('articles'),]);
        
    }

    public function account(){
        return view ('auth.account');
    }
}
