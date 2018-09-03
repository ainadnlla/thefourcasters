<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingModel extends CI_Model{

//INSERT

    public function insert($data){
        $this->db->insert('booking' , $data);
        } 

//UPDATE
    public function update($id ,$data){
        $this->db->where('id' , $id);
        $this->db->update('booking' , $data);
        }   

    public function editItems($id, $data){
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
        $this->db->delete('booking',$data);
    }


//DROPDOWN
    function getModel()
    {
        $query = $this->db->query('SELECT model FROM truck');
        return $query->result();
    }

    function getLicense()
    {
        $query = $this->db->query('SELECT license_no FROM truck');
        return $query->result();
    }

    function getDriver()
    {
        $query = $this->db->query('SELECT fname, lname FROM driver WHERE position = "1"');
        return $query->result();
    }

    function getDriverNo()
    {
        $query = $this->db->query('SELECT drivernum FROM driver WHERE position = "1"');
        return $query->result();
    }

    function getHelper()
    {
        $query = $this->db->query('SELECT fname, lname FROM driver WHERE position = "2"');
        return $query->result();
    }

    function getHelperNo()
    {
        $query = $this->db->query('SELECT drivernum FROM driver WHERE position = "2"');
        return $query->result();
    }


}

?>