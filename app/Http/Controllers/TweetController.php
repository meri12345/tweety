<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function store(){

       $attr= \request()->validate([
            'body'=>'required|max:255'
        ]);
        Tweet::create([
           'user_id'=>auth()->user()->id,
           'body'=>$attr['body']
        ]);
        return redirect('/home');
    }

    public function index()
    {
        $tweets = Tweet::latest()->get();
        return view('tweets.index',[
            'tweets'=>auth()->user()->timeline()
        ]);
    }
}
