<?php
class MainDAO extends CI_Model
{
/*  public function getdata()
  {
    $this->db->select( '*' );
    $this->db->from('finances');
    $this->db->where('user_id=', $_SESSION['id']);
    $query=$this->db->get('data');
    $data=$query->result_array();
    return $data;
  }*/
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
