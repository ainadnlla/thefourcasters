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

 //Top 5 Maintenance issues
 //LIMIT 19,1 19 QUERY , 1 GET 1ST ROW
 public function getFirst(){
    $query = $this->db->query("SELECT `plate_no`, COUNT(*) AS `total` FROM maintenance GROUP BY `plate_no` ORDER BY plate_no desc limit 1,1");
    return $query->result();
 }
 public function getSecond(){
    $second= $this->session->userdata('plateno');
    $query = $this->db->query("SELECT `plate_no`, COUNT(*) AS `total` FROM maintenance GROUP BY `plate_no` ORDER BY plate_no desc limit 1,2");
    return $query->result();
 }
 public function getThird(){
    $three= $this->session->userdata('plateno');
    $query = $this->db->query("SELECT `plate_no`, COUNT(*) AS `total` FROM maintenance GROUP BY `plate_no` ORDER BY plate_no desc limit 1,3");
    return $query->result();
 }
 public function getFourth(){
    $fourth= $this->session->userdata('plateno');
    $query = $this->db->query("SELECT `plate_no`, COUNT(*) AS `total` FROM maintenance GROUP BY `plate_no` ORDER BY plate_no desc limit 1,4");
    return $query->result();
 }
 public function getFifth(){
    $fifth= $this->session->userdata('plateno');
    $query = $this->db->query("SELECT `plate_no`, COUNT(*) AS `total` FROM maintenance GROUP BY `plate_no` ORDER BY plate_no desc limit 1,5");
    return $query->result();
 }
 
}