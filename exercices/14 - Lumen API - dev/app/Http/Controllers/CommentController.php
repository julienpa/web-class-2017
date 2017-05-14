<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function get_by_article($id_article) {
      $result = app('db')
        ->table('comment as c')
        ->select('c.id', 'c.text', 'u.pseudo')
        ->leftJoin('user as u', 'c.id_user', '=', 'u.id')
        ->where('c.id_article', $id_article)
        ->get();
      return ['data' => $result];
    }

    public function create(Request $request, $id_article) {
      $text = $request->input('text');
      $user = $request->user();

      if (empty($text)) {
        return response('Bad params.', 400);
      }

      $comment = [
        'text' => $text,
        'id_user' => $user['id'],
        'id_article' => $id_article
      ];

      $result = app('db')->table('comment')->insert($comment);

      return ['data' => $result];
    }

    public function update(Request $request, $id_article, $id_comment) {
      $text = $request->input('text');

      if (empty($text)) {
        return response('Bad params.', 400);
      }

      $comment = ['text' => $text];

      $result = app('db')
        ->table('comment')
        ->where('id', $id_comment)
        ->update($comment);

      return ['data' => $result];
    }

    public function delete($id_article, $id_comment) {
      $result = app('db')
        ->table('comment')
        ->where('id', $id_comment)
        ->delete();

      return ['data' => $result];
    }
}
