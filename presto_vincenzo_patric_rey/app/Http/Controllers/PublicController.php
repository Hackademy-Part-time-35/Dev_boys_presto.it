<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
       $articles = Article::all();
       return view('homepage', compact('articles'));
        
    }

    public function account(){
        return view ('auth.account');
    }
}
