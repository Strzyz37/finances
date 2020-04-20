<?php
class WelcomeDAO extends CI_Model
{
  public function Register($user)
  {
    $insert = $this->db->insert('users', $user);
  }
  public function Login($user)
  {
    $array = array('login' => $user['login'], 'pass' => $user['pass']);
    $query = $this->db->where($array);
   echo $query->num_rows();
  }

}
?>
