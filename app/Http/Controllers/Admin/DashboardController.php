<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $articles = Article::limit(5)->get();
        return view('admin.dashboard', ['articles' => $articles]);
    }

    public function createArticle() {
        return view('admin.newarticle');
    }

    public function storeArticle(Request $request) {
        $article = new Article;
        $article->title = $request->get('title');
        $article->author_id = Auth::id();
        //$article->thumbnail_url = '';
        $article->publish_at = now();
        $article->save();

        return redirect()->route('admin::home');
    }
}
