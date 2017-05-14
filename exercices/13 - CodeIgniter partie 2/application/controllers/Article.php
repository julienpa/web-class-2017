<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    public function __construct() {
      parent::__construct();

      $this->load->model('Article_model');
    }

    public function view($id) {
      $article = $this->Article_model->get_article_by_id($id);
      $data = [
        'post' => $article,
        'comments' => $this->Article_model->get_comments_by_article($id),
        'user' => $this->session->user
      ];
      $this->load->view('article', $data);
    }

    public function add_comment($id_article) {
      $comment = $this->input->post('comment');
      if (!empty($comment) && !empty($this->session->user)) {
        $this->Article_model->create_comment($comment, $id_article, $this->session->user['id']);
      }
      redirect('article/view/'.$id_article); // idem: $this->view($id_article);
    }

 }
