<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function get_user_by_login($user_data) {
    return $this->db->select('id, pseudo')->where($user_data)->get('user', 1)->row();
  }

}
