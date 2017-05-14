<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () {
    return 'Ca marche !!';
});

$app->get('/articles', 'ArticleController@getall');
$app->get('/articles/{id_article}', 'ArticleController@get');
$app->get('/articles/{id_article}/comments', 'CommentController@get_by_article');

$app->group(['middleware' => 'auth'], function () use ($app) {
  $app->post('articles/{id_article}/comments', 'CommentController@create');

  $app->put('articles/{id_article}/comments/{id_comment}', 'CommentController@update');

  $app->delete('articles/{id_article}/comments/{id_comment}', 'CommentController@delete');
});
