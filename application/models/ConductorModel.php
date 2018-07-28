<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConductorModel extends CI_Model{

//INSERT

    public function insert($data){
        $this->db->insert('conductor', $data);
        }

    public function insertUser($data){
        $this->db->insert('conductor', $data);
        } 

//UPDATE
    public function update($id ,$data){
        $this->db->where('id' , $id);
        $this->db->update('conductor' , $data);
        }   

    public function editItems($id, $Product){
            $this->db->where('id', $id);
            $this->db->update('conductor', $data);
        }

    public function getProd($id)
    {
  
        $query = $this->db->get_where('conductor', array('id' => $id));
        return $query->row();
  
    }

// PAGINATION
   
   public function getItems($norecs, $offset){
    $query = $this->db->get('conductor', $norecs, $offset);
    return $query->result();
    }

    public function getNumRecs(){
    return $this->db->count_all('conductor');
    }

//DELETE    

    public function delete($id,$data){
        $this->db->where('id', $id);
        $this->db->delete('conductor');
    }
}

?>