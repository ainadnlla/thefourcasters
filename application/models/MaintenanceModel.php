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

    public function getWarning()
    {
        $plate = $this->session->userdata('plate_no');
        $query = $this->db->select('warning')->where(array('plate_no' => $plate))->get('maintenance');
        return $query->result();
    }

    public function getItems(){
    $query = $this->db->get('maintenance');
    return $query->result();
    }

    public function getMain(){
        $plate = $this->session->userdata('plate_no');
        $query = $this->db->select('*')->where(array('plate_no' => $plate))->get('maintenance');

        return $query->result();
    }

    public function getNumRecs(){
    return $this->db->count_all('maintenance');
    }

//DELETE    

    public function delete($id,$data){
        $this->db->where('id', $id);
        $this->db->delete('maintenance',$data);
    }


//DROPDOWN

    function getPlateNo()
    {
        $query = $this->db->query('SELECT plate_no FROM truck');
        return $query->result();
    }

    function getDriver()
    {
        
    }

    function getHelper()
    {
        $query = $this->db->query('SELECT fname, lname FROM driver WHERE status = "1"');
        return $query->result();
    }

    function getDriverNo()
    {
        $query = $this->db->query('SELECT driver_no FROM driver');
        return $query->result();
    }

    function getDestination()
    {
        $query = $this->db->query('SELECT destination FROM destination');
        return $query->result();
    }

//MODAL

}

?>