<?php
class WelcomeDAO extends CI_Model
{
  public function Register($user)
  {
    //$query = $this->db->get_where('users', 'login =', $user['login']);
    $this->db->select('login,e-mail');
    $this->db->from('users');
    $this->db->where('login=', $user['login']);
    $this->db->or_where('e-mail=',$user['e-mail']);
    $query=$this->db->get();
    $flag=$query->num_rows();

    if($query->num_rows()==0)
    $insert = $this->db->insert('users', $user);
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
