<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{

    //LOGIN
    
    public function getAdmin($admin){
		$q = $this->db->get_where('admin', $admin);
		return $q->row();
    }

  //STAFF ACC
    public function getStaff($email, $password){
    //   //$this->db->where('status',$status);
    //  $this->db->where('email',$email);
    //  $this->db->where('password',$password);
    //  $query=$this->db->get('staff');

    $query = $this->db->query("SELECT * FROM staff WHERE email = '$email' && password = '$password'");

     return $query->row();
    }  
  
  public function getCustomer($email,$password){
    $query = $this->db->query("SELECT * FROM customer WHERE email = '$email' && password = '$password'");
    
         return $query->row();
  }
}
  
?>
