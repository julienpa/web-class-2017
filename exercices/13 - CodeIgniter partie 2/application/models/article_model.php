<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function get_nb_articles() {
    return $this->db->count_all('article');
  }

  public function get_articles($nb_articles, $start) {
    return $this->db->get('article', $nb_articles, $start)->result();
  }

  public function get_article_by_id($id) {
    return $this->db->get_where('article', ['id' => $id])->row();
  }

  public function get_comments_by_article($id_article) {
    return $this->db
      ->select('c.text, u.pseudo')
      ->join('user u', 'c.id_user = u.id', 'left')
      ->get_where('comment c', ['id_article' => $id_article])
      ->result();
  }

  public function create_comment($text, $id_article, $id_user) {
    $comment = [
      'text' => $text,
      'id_article' => $id_article,
      'id_user' => $id_user
    ];
    return $this->db->insert('comment', $comment);
  }

}
