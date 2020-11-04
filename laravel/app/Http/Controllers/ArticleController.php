<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

use App\Article;

class ArticleController extends Controller
{
    // 記事一覧
    public function index()
    {
        $articles = Article::all()->sortByDesc('created_at');
        
        return view('articles.index', ['articles' => $articles]);
    }
    //記事登録ビュー
    public function create() {
        return view('articles.create');
    }
    //記事登録
    public function store(ArticleRequest $request, Article $article) {
        //通常のAricleモデルのプロパティへの格納方法
        // $article->title = $request->title;
        // $article->body = $request->body;

        //モデルに$fillable変数に値を宣言することでfillメソッドが使える
        dd($request->all());
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect()->route('articles.index');
    }
}
