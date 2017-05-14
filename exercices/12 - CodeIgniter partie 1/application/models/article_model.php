<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {

  /* Voir : https://www.codeigniter.com/user_guide/database/query_builder.html */

  public function __construct() {
    parent::__construct();
  }

  public function get_nb_articles() {
    return $this->db->count_all('article');
  }

  public function get_articles($nb_articles, $start) {
    return $this->db->get('article', $nb_articles, $start)->result();
  }

}
