<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index() {
        $articles = Article::limit(5)->orderBy('id', 'desc')->get();
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

        Storage::disk('local')->put('articles/'.$article->id.'.md', $request->get('article'));
        return redirect()->route('admin::home');
    }
}
