<?php

namespace App\Http\Controllers;
use app\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
       $articles=Article::take(6)->onderBy('created_at','desc')->get();
       return view('homepage', compact('articles'));
        
    }

    public function account(){
        return view ('auth.account');
    }
}
