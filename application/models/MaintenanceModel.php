<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaintenanceModel extends CI_Model{

//INSERT

    public function insert($data){
        $this->db->insert('maintenance' , $data);
        } 

//UPDATE
    public function update($id ,$data){
        $this->db->where('id' , $id);
        $this->db->update('maintenance' , $data);
        }   

// GET
    public function getProd($id)
    {
        $query = $this->db->get_where('maintenance', array('id' => $id));
        return $query->row();
    }

    public function getItems(){
    $query = $this->db->get('maintenance');
    return $query->result();
    }

    public function getMain(){
        $plate = $this->session->userdata('plate_no');
        $query = $this->db->select('*')->order_by('date',"desc")->limit(1)->where(array('plate_no' => $plate))->get('maintenance');
        return $query->result();
    }

    public function getHistory(){
        $plate = $this->session->userdata('plate_no');
        $query = $this->db->select('*')->where(array('plate_no' => $plate))->get('maintenance');
        return $query->result();
    }

    public function getNumRecs(){
    return $this->db->count_all('maintenance');
    }

    function getAmount()
    {
        $query = $this->db->query('UPDATE maintenance SET amount=price*quantity');
        return $query->result();
    }

//DELETE    

    public function delete($id,$data){
        $this->db->where('id', $id);
        $this->db->delete('maintenance',$data);
    }
}

?>