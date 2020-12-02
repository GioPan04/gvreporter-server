<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $lastArticle = Article::orderBy('id', 'desc')->first();
        return view('pages.index', ['lastArticle' => $lastArticle]);
    }
}
