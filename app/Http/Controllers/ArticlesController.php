<?php

namespace Byng\Http\Controllers;

use Illuminate\Http\Request;

use Byng\Http\Requests;
use Byng\Http\Controllers\Controller;
use Byng\Article;

class ArticlesController extends Controller
{
    /**
     * Ensuring that Articles page can't be accessed without
     * authentication
     */
    function __construct()
    {
       $this->middleware('auth');

    }

    /**
     * Articles Page accessed at /articles
     * @return view
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }
}
