<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChartModel extends CI_Model{
//Total Number of Booking on Current Month (not sure optional)
    function bookingaccept(){
   $query= $this->db->query("SELECT COUNT(*) FROM BOOKING WHERE action= 1");
   return $query->result();
}
function bookingdeny(){
    $query= $this->db->query("SELECT COUNT(*) FROM BOOKING WHERE action= 2");
    return $query->result();
 }
 function bookingpending(){
    $query= $this->db->query("SELECT COUNT(*) FROM BOOKING WHERE action= 0");
    return $query->result();
 }
 //Monthly report

 //Daily report

 //Yearly report

 //Maintenance issue process Duration (slowest process)

 //Maintenance issue process Duration (fastest process)

 //Top 5 Maintenanct issues
 
}