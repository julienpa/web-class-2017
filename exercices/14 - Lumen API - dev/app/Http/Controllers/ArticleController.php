<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getall() {
      $results = app('db')->table('article')->get();
      return ['data' => $results];
    }

    public function get($id_article) {
      $result = app('db')->table('article')->where('id', $id_article)->first();
      return ['data' => $result];
    }
}
