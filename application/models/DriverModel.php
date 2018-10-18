<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DriverModel extends CI_Model{

//INSERT

    public function insert($data){
        $this->db->insert('driver', $data);
        }


//UPDATE
    public function update($id ,$data){
        $this->db->where('id' , $id);
        $this->db->update('driver' , $data);
        }   

// GET

    public function getProd($id){
        $query = $this->db->get_where('driver', array('id' => $id));
        return $query->row();
    }

   
    public function getItems(){
        $query = $this->db->get('driver');
        return $query->result();
    }

    public function getNumRecs(){
        return $this->db->count_all('driver');
    }

//DELETE    

    public function delete($id,$data){
        $this->db->where('id', $id);
        $this->db->delete('driver');
    }
    
}

?>