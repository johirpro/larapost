<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Articles;

class HomeController extends Controller
{
    //
  public function index() {

    $articles = Articles::take(2)->get();

      return view('home', [
        'articles' => $articles,
      ]);

  }
}
