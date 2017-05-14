<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->model('User_model');
  }

  public function index() {
    $this->login();
  }

  public function login() {
    $this->load->view('login');
  }

  public function check_login() {
    $user_data = [
      'pseudo' => $this->input->post('pseudo'),
      'password' => $this->input->post('password')
    ];
    $user = $this->User_model->get_user_by_login($user_data);

    if (!empty($user)) {
      $this->session->user = [
        'id' => $user->id,
        'pseudo' => $user->pseudo
      ];
    }

    redirect('accueil');
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('accueil');
  }
}
