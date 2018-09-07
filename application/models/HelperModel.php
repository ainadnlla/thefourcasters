<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelperModel extends CI_Model{

//INSERT

    public function insert($data){
        $this->db->insert('helper', $data);
        }

    public function insertUser($data){
        $this->db->insert('helper', $data);
        } 

//UPDATE
    public function update($id ,$data){
        $this->db->where('id' , $id);
        $this->db->update('helper' , $data);
        }   

    public function getProd($id)
    {
  
        $query = $this->db->get_where('helper', array('id' => $id));
        return $query->row();
  
    }

// PAGINATION
   
   public function getItems($norecs, $offset){
    $query = $this->db->get('driver', $norecs, $offset);
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