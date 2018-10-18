<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TruckModel extends CI_Model{

//INSERT

    public function insert($data){
        $this->db->insert('truck' , $data);
    }

//UPDATE
    public function update($id ,$data){
        $this->db->where('id' , $id);
        $this->db->update('truck' , $data);
    }   

// GET

    public function getProd($id){  
        $query = $this->db->get_where('truck', array('id' => $id));
        return $query->row();
    }
   
   public function getItems(){
    $query = $this->db->get('truck');
    return $query->result();
    }

    public function getNumRecs(){
        return $this->db->count_all('truck');
    }

//DELETE    

    public function delete($id,$data){
        $this->db->where('id', $id);
        $this->db->delete('truck',$data);
    }   

}

?>