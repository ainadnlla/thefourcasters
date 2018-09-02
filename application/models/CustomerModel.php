<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerModel extends CI_Model{

//INSERT

    public function insert($data){
        $this->db->insert('booking', $data);
        }

    public function insertUser($data){
        $this->db->insert('booking', $data);
        } 

//UPDATE
    public function update($id ,$data){
        $this->db->where('id' , $id);
        $this->db->update('booking' , $data);
        }   

    public function editItems($id, $Product){
            $this->db->where('id', $id);
            $this->db->update('booking', $data);
        }

    public function getProd($id)
    {
  
        $query = $this->db->get_where('booking', array('id' => $id));
        return $query->row();
  
    }

// PAGINATION
   
   public function getItems($norecs, $offset){
    $query = $this->db->get('booking', $norecs, $offset);
    return $query->result();
    }

    public function getNumRecs(){
    return $this->db->count_all('booking');
    }

//DELETE    

    public function delete($id,$data){
        $this->db->where('id', $id);
        $this->db->delete('booking');
    }
}

?>