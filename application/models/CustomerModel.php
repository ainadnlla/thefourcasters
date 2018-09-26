<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerModel extends CI_Model{

//INSERT

    public function insert($data){
        $this->db->insert('customer', $data);
        }

    public function insertUser($data){
        $this->db->insert('customer', $data);
        } 

//UPDATE
    public function update($id ,$data){
        $this->db->where('id' , $id);
        $this->db->update('customer' , $data);
        }  

        
    public function getProd($id)
    {
  
        $query = $this->db->get_where('customer', array('id' => $id));
        return $query->row();
  
    }

// PAGINATION
   
   public function getItems(){
    $query = $this->db->get('customer');
    return $query->result();
    }

    public function getNumRecs(){
    return $this->db->count_all('customer');
    }

//DELETE    

    public function delete($id,$data){
        $this->db->where('id', $id);
        $this->db->delete('customer');
    }

//Registration
public function signup($data){
    $this->db->insert('customer', $data);
    }
    public function getCustomer($email,$password){
        $query = $this->db->query("SELECT * FROM customer WHERE email = '$email' && password = '$password'");
        
             return $query->row();
      }
    
}
//Login



?>