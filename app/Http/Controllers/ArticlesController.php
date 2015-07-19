<?php

namespace Byng\Http\Controllers;

use Illuminate\Http\Request;

use Byng\Http\Requests;
use Byng\Http\Controllers\Controller;
use Byng\Article;

class ArticlesController extends Controller
{

    function __construct()
    {
       $this->middleware('auth');

    }
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }
}
