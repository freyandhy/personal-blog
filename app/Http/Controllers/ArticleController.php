<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        
        return view('dashboard.article.index',compact('articles'));
    }

    public function create()
    {
        return view('dashboard.article.create');
    }

    public function store(Request $request)
    {
        Article::create($request->all());

        return redirect('article');
    }

    public function show($id = '')
    {
        if(empty($id))
        {
            $articles = Article::latest()->get();

            return view('frontend.post', compact('articles'));
        }
        else
        {
            $article = Article::findOrFail($id);

            return view('frontend.post-detail', compact('article'));
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
