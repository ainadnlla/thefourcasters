<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{

//INSERT

    public function insert($data){
        $this->db->insert('staff' , $data);
        }

    public function insertUser($data){
        $this->db->insert('staff', $data);
        } 

//UPDATE
    public function update($id ,$data){
        $this->db->where('id' , $id);
        $this->db->update('staff' , $data);
        }   

    public function getProd($id)
    {
  
        $query = $this->db->get_where('staff', array('id' => $id));
        return $query->row();
  
    }

// PAGINATION
   
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

//UPLOAD

public function getItem($id){
        $q = $this->db->get_where('truck',array('id'=>$id));
        return $q->row();
    }

//status
//registration
public function regis($data){
    $this->db->insert('staff' , $data);
}
public function countbooking(){
    return $this->db->count_all('booking');
    }

 

    public function getBook(){
        $query = $this->db->query("SELECT * FROM booking WHERE EXTRACT(MONTH FROM date) = EXTRACT(MONTH from CURDATE()) AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())");
        return $query->result(); 
    }

    public function getbookcount()
    {

        $query = $this->db->query("SELECT * FROM booking WHERE EXTRACT(MONTH FROM date) = EXTRACT(MONTH from CURDATE()) AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())");
        return $query->num_rows();

    }

}

?>