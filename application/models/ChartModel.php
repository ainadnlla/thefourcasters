<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChartModel extends CI_Model{

//Total Number of Booking on Current Month (not sure optional)
public function getBookingPending(){
    $query = $this->db->where('action',0)->like('date', date('Y-m'))->from("booking");
    return $query->count_all_results();
}

public function getBookingDeny(){
    $query = $this->db->where('action',2)->like('date', date('Y-m'))->from("booking");
    return $query->count_all_results();
}

public function getBookingAccepted(){
    $query = $this->db->where('action',1)->like('date', date('Y-m'))->from("booking");
    return $query->count_all_results();
}
 
 //Monthly report

 //Daily report

 //Yearly report

 //Maintenance issue process Duration (slowest process)

 //Maintenance issue process Duration (fastest process)

 //Top 5 Maintenanct issues
 
}