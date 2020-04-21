<?php
class WelcomeDAO extends CI_Model
{
  public function Register($user)
  {
    $query = $this->db->get_where('users', 'login =', $user['login'],'OR', 'e-mail =', $user['e-mail']);
    echo $query->num_rows();
    //$insert = $this->db->insert('users', $user);
  }
  public function Login($user)
  {
    $array = array('login' => $user['login'], 'pass' => $user['pass']);
    $query = $this->db->get_where('users',$array);
    if($query->num_rows()==1){
      return 1;
    }
  }

}
?>
