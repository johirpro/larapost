<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class ArticlesController extends Controller
{
    public function create() {
      return view('articles.create');
    }

  public function store() {
    $article = new Articles();

    request()->validate([
      'title'=>'required',
      'intro'=>'required',
      'body'=>'required',
      ]
    );

    $article->title = request('title');
    $article->slug  = strtolower(trim(request('title')));
    $article->intro  = request('intro');
    $article->body  = request('body');

    $article->save();

    return redirect('/');
  }

  public function details($id) {
    $article = Articles::find($id);

    return view('articles.details', [
      'article' => $article,
    ]);
  }

  public function edit($id) {
    $article = Articles::find($id);

    return view('articles.edit', [
      'article' => $article,
    ]);
  }

  public function update($id) {
    $article = Articles::find($id);

    request()->validate([
        'title'=>'required',
        'intro'=>'required',
        'body'=>'required',
      ]
    );

    $article->title = request('title');
    $article->slug  = strtolower(trim(request('title')));
    $article->intro  = request('intro');
    $article->body  = request('body');

    $article->save();

    return redirect('/article/' . $article->id);
  }

}
