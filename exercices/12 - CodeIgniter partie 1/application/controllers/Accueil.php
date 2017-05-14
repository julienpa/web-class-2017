<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

  /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/accueil
	 *	- or -
	 * 		http://example.com/accueil/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

  public function __construct() {
    parent::__construct();
    // charger libraries ou helpers, initaliser variables

    $this->load->model('Article_model');

    $this->load->library('pagination');
  }

  public function index() {
    $this->page();
  }

  public function page($start = 0) {
    $nb_articles = 3;
    $config = [
      'base_url' => base_url('accueil/page'),
      'total_rows' => $this->Article_model->get_nb_articles(),
      'per_page' => $nb_articles
    ];
    $this->pagination->initialize($config);
    $pagination = $this->pagination->create_links();

    $posts = $this->Article_model->get_articles($nb_articles, $start);

    $params = [
      'posts' => $posts,
      'pagination' => $pagination
    ];
    $this->load->view('accueil', $params);
  }
}
