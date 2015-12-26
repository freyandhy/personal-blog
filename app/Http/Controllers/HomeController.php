<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('frontend.home', compact('articles'));
    }
}
