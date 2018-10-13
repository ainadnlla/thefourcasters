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

    public function getProd($id)
    {
        $query = $this->db->get_where('maintenance', array('id' => $id));
        return $query->row();
  
    }


// GET
   
    public function getItems(){
    $query = $this->db->get('maintenance');
    return $query->result();
    }

    public function getMain(){
        $plate = $this->session->userdata('plate_no');
        // $this->db->select('*');
        // $this->db->get('maintenance');
        // $this->db->where('plate_no' = $plate);
        $id = $this->uri->segment(4);
        $query = $this->db->select('plate_no')->where(array('plate_no' => $plate))->get('truck');
        
        // $query = $this->db->query('SELECT maintenance.id, maintenance.supplier, maintenance.description, maintenance.purchased,maintenance.price,maintenance.unit,maintenance.quantity,maintenance.amount
        // FROM maintenance JOIN truck ON truck.plate_no=maintenance.plate_no
        // WHERE maintenance.plate_no = truck.plate_no', array('truck.plate_no' => $plates));
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