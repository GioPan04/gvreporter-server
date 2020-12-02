<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController extends Controller
{
    public function show($id) {
        $article = Article::find($id);
        $article->increment('views');
        return view('articles.show', ['article' => $article]);
    }
}
