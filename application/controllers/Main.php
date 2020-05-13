<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

  public function __construct() {
          parent::__construct();
            $this->load->model('WelcomeDAO');
            $this->load->helper('url');
            $this->load->database();
            $this->load->library('session');
    }
  public function index()
    {
      $loggedin = $this->session->userdata('loggedin');
      if($loggedin == 1)
      {
        $this->load->view('templates/header');
        $this->load->view('pages/mainpage/logout');
        $this->load->view('pages/mainpage/mainpage');
        $this->load->view('templates/footer');
      }
    else redirect('Welcome', 'index');
    }
  public function logout()
  {
    session_destroy();

  }

}
