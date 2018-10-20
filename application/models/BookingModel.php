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
        
// GET

    public function getProd($id){
        $query = $this->db->get_where('booking', array('id' => $id));
        return $query->row();  
    }

    public function getItems(){
        $query = $this->db->get('booking');
        return $query->result();
    }

    public function getCustBook(){
        $query = $this->db->get_where('booking', array('custname' => $this->session->name));
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

    function getPlateNo()
    {
        $query = $this->db->query('SELECT plate_no FROM truck where status="1"');
        return $query->result();
    }

    function getDriver()
    {
        $query = $this->db->query('SELECT id, fname, lname FROM driver WHERE status ="1"');
        return $query->result();
    }
    function getDrivers(){
        $weekdays = explode(",", 'weekday');        
        $bookingdate = $this->session->userdata('date');
        $query = $this->db->query("SELECT id, fname, lname from driver where status= '1' AND DATE_FORMAT('$bookingdate', '%W') = weekday", array('weekday'=>$weekdays));
             return $query->result();
    }

    function getDrivername(){
        $driverid = $this->session->userdata('driverid');
        $query = $this->db->query("SELECT CONCAT(fname, ' ', lname) AS drivername FROM driver WHERE id = '$driverid'");
        return $query->row();
    }

    function getWeek()
    {
        $query = $this->db->query('SELECT weekday FROM driver');
        return $query->result();
    }

    function getHelper()
    {
        $query = $this->db->query('SELECT fname, lname FROM helper WHERE status = "1"');
        return $query->result();
    }
    function getHelpers(){
        $bookingdateh = $this->session->userdata('date');
        $query = $this->db->query("SELECT id,fname, lname from helper where status= '1' AND DATE_FORMAT('$bookingdateh', '%W') = weekday ");
             return $query->result();
    }
    function getHelperid(){
    
            $bookingdateh = $this->session->userdata('date');
         //   $helperid = $this->session->userdata('hid');
            $query = $this->db->query("SELECT id,fname, lname from helper where status= '1' AND DATE_FORMAT('$bookingdateh', '%W') = weekday limit  1 ");
                 return $query->result();
    }

    function getDestination()
    {
        $query = $this->db->query('SELECT destination FROM destination');
        return $query->result();
    }


}

?>