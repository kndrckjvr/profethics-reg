<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
  public function __construct() {
    parent::__construct();
  }
  
  public function index() {
      $this->load->view('templates/header', array('title' => 'Home'));
      $this->load->view('pages/home');
      $this->load->view('templates/footer');
  }
}
?>