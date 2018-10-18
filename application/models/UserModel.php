<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{

//INSERT

    public function insert($data){
        $this->db->insert('staff' , $data);
        }

//UPDATE
    public function update($id ,$data){
        $this->db->where('id' , $id);
        $this->db->update('staff' , $data);
        }   

// GET

    public function getProd($id)
    {
        $query = $this->db->get_where('staff', array('id' => $id));
        return $query->row();
    }
   
   public function getItems(){
    $query = $this->db->get('staff');
    return $query->result();
    }

    public function getNumRecs(){
    return $this->db->count_all('staff');
    }

//DELETE    

    public function delete($id,$data){
        $this->db->where('id', $id);
        $this->db->delete('staff',$data);
    }

//registration

    public function regis($data){
        $this->db->insert('staff' , $data);
    }

}
?>