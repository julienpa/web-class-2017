<?php
$mysqli = new mysqli('localhost', 'root', '', 'blog');
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL :
    ($mysqli->connect_errno) $mysqli->connect_error";
}

// Force l'encodage des requêtes/résultats en utf8
$mysqli->set_charset('utf8');

function get_articles() {
  global $mysqli;
  $query = $mysqli->query('SELECT * FROM article');
  $articles = [];
  while ($obj = $query->fetch_object()) {
    $articles[] = $obj;
  }
  return $articles;
}

function get_article_by_id($id) {
  global $mysqli;
  $query = $mysqli->query("SELECT * FROM article WHERE id = $id");
  return $query->fetch_object();
}

function add_comment($text, $id_article, $id_user) {
  global $mysqli;
  $result = $mysqli->query("INSERT INTO comment(`text`,`id_article`,`id_user`) VALUES ('$text', '$id_article', $id_user)");
  echo "INSERT INTO comment(`text`,`id_article`,`id_user`) VALUES ('$text', '$id_article', $id_user)";
  return $result;
}

function get_comments_by_article($id_article) {
  global $mysqli;
  $query = $mysqli->query("SELECT c.text, u.pseudo FROM comment c LEFT JOIN user u ON c.id_user = u.id WHERE c.id_article = $id_article");
  $comments = [];
  while ($obj = $query->fetch_object()) {
    $comments[] = $obj;
  }
  return $comments;
}

function login($pseudo, $password) {
  global $mysqli;
  $query = $mysqli->query("SELECT id,pseudo FROM user WHERE pseudo = '$pseudo' AND password = '$password'");
  return $query->fetch_object();
}
