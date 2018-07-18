<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{

    //LOGIN
    
    public function getAdmin($admin){
		$q = $this->db->get_where('admin', $admin);
		return $q->row();
    }
}

?>