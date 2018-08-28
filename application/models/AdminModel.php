<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{

    //LOGIN
    
    public function getAdmin($admin){
		$q = $this->db->get_where('admin', $admin);
		return $q->row();
    }

  //STAFF ACC
    public function getStaff($email,$password){
     $this->db->where('email',$email);
     $this->db->where('password',$password);
     $query=$this->db->get('staff');
     if($query->num_rows()>0){
      return true;
    }
    else{
      return false;
    }
    }
  }
  
?>
