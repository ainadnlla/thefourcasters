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
        $query = $this->db->query('SELECT plate_no, COUNT(*) AS total FROM maintenance GROUP BY plate_no ORDER BY total desc limit 0,1');
        return $query->result();
    }
    public function getSecond(){
        $query = $this->db->query('SELECT plate_no, COUNT(*) AS total FROM maintenance GROUP BY plate_no ORDER BY total desc limit 1,1');
        return $query->result();
    }
    public function getThird(){
        $query = $this->db->query('SELECT plate_no, COUNT(*) AS total FROM maintenance GROUP BY plate_no ORDER BY total desc limit 2,1');
        return $query->result();
    }
    public function getFourth(){
        $query = $this->db->query('SELECT plate_no, COUNT(*) AS total FROM maintenance GROUP BY plate_no ORDER BY total desc limit 3,1');
        return $query->result();
    }
    public function getFifth(){
        $query = $this->db->query('SELECT plate_no, COUNT(*) AS total FROM maintenance GROUP BY plate_no ORDER BY total desc limit 4,1');
        return $query->result();
    } 

}