<?php

namespace Byng\Http\Controllers;

use Byng\Article;
use Illuminate\Http\Request;

use Byng\Http\Requests;
use Byng\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        $articles = Article::whereType('youtube')->get();
        return view('home',compact('articles'));
    }
}
