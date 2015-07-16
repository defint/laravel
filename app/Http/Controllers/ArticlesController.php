<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth',['only' => 'create']);
  }

  public function create()
  {
    return view('articles.create');
  }

  public function edit(Article $article)
  {
    return view('articles.edit',compact('article'));
  }

  public function index()
  {
    $articles = Article::latest('published_at')->published()->get();

    return view('articles.index',compact('articles'));
  }

  public function show(Article $article)
  {
    return view('articles.show',compact('article'));
  }

  public function store(ArticleRequest $request)
  {
    $article = new Article($request->all());
    \Auth::user()->articles()->save($article);

    return redirect('articles');
  }

  public function update(Article $article, ArticleRequest $request)
  {
    $article->update($request->all());

    return redirect('articles');
  }
}
