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
  public function getid($login)
  {
    $this->db->select('id');
    $this->db->from('users');
    $this->db->where('login=', $login);
    $query=$this->db->get();
    return $query;

  }
  public function getdata()
  {
  /*  $this->db->select('*');
    $this->db->where('user_id=', $_SESSION['id']);
    $query=$this->db->get('finances');
    $data=$query->result_array();
    return $data;*/

   $this->db->select( 'date, amount, category, description, after_balance' );
    $query=$this->db->get('finances');
    $user=$query->result_array();
    return $user;
  }

}
?>
