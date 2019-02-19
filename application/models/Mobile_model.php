<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile_model extends CI_Model{

    function insert($table,$data){
        $this->db->insert($table,$data);
        return $this->db->affected_rows();
    }
    function insert_batch($table, $data){
        $this->db->insert_batch($table, $data); 
        return $this->db->affected_rows();
     }
 
     function update($table,$data,$where=NULL){
        if(!empty($where)){
            $this->db->where($where);
        }
        return $this->db->update($table,$data);
    }
            
    function fetch($table,$where=NULL,$order = NULL){  
        if($where !== NULL){
            $this->db->where($where);
        }
        if($order !== NULL){
            $this->db->order_by($order, 'desc');
        }
        $query = $this->db->get($table);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }
    
    function delete($table,$where=NULL){
       if($where !== NULL){
            $this->db->where($where);
        }
        return $this->db->delete($table);
    }
    
    function fetch_booking_destination($driver_id){
        $this->db->select("booking.id AS id, booking.waybill AS waybill, booking.custname AS custname, booking.driverid AS driverid, booking.destination as destination ,booking.helperid AS helperid, destination.latitude AS lat, destination.longitude AS lng, destination.id AS destinationid");
        $this->db->from("booking");
        $this->db->join("destination", "booking.destinationid = destination.id");
        $this->db->where("booking.driverid", $driver_id);
        $this->db->where("booking.action", 1);
            
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : false;
    }


}

?>