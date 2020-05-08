<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

  public function __construct() {
          parent::__construct();
            $this->load->model('WelcomeDAO');
            $this->load->helper('url');
            $this->load->database();
            $this->load->library('form_validation');


  }

  public function index()
	{
    $this->load->view('templates/header');
 $this->load->view('pages/welcome/firstpage');
 $this->load->view('pages/welcome/login');
 $this->load->view('pages/welcome/register');
 $this->load->view('templates/footer');
  }

public function Register()
  {
  $flag = 0;
  $emailTest = '/^[a-zA-Z0-9][a-zA-Z0-9\._\-&!?#=]+@[a-zA-Z0-9][a-zA-Z0-9\._\-&!?#=]+\.[a-zA-Z0-9][a-zA-Z0-9\._\-&!?#=]/';
  $loginTest = '/[a-zA-Z0-9]{6,32}/';
  $passTest = '/[a-zA-Z0-9]{8,32}/';

if(!preg_match($emailTest, $this->input->post('mail'))) $flag++;
if(!preg_match($loginTest, $this->input->post('login'))) $flag++;
if(!preg_match($passTest, $this->input->post('pass'))) $flag++;

if($flag == 0){
         $user = array(
                      'id'=>NULL,
                      'login'=> $this->input->post('login'),
                      'pass'=> $this->input->post('pass'),
                      'e-mail'=>$this->input->post('mail'),
                      'startup'=> date('d-m-y')
        );
        echo $this->WelcomeDAO->Register($user);
      }
      else echo 'Bledne dane';
}

  public function Login()
  {
    $user = array(
  'login'=>$this->input->post('login'),
  'pass'=>$this->input->post('pass')
);

$flag = $this->WelcomeDAO->Login($user);
if($flag == 1)
{
  session_start();
  $_SESSION['id'] = session_id();
  echo json_encode($_SESSION['id']);

}
else echo 'bledne dane';
  }
}
