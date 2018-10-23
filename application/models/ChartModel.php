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
 public function Jan(){
    //  $query = $this->db->query("SELECT * FROM booking WHERE DATE_FORMAT(date, '%M') = 'January' AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())");
    //  return $query->result();
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'January' AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())")->from("booking");
     return $query->count_all_results();
     }
     public function Feb(){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'February' AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())")->from("booking");
     return $query->count_all_results();
    }
    public function March(){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'March' AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())")->from("booking");
     return $query->count_all_results();
    }
    public function April(){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'April' AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())")->from("booking");
     return $query->count_all_results();
    }
    public function May(){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'May' AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())")->from("booking");
     return $query->count_all_results();
    }
    public function June(){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'June' AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())")->from("booking");
     return $query->count_all_results();
    }
    public function July(){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'July' AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())")->from("booking");
     return $query->count_all_results();
    }
    public function Aug(){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'August' AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())")->from("booking");
     return $query->count_all_results();
    }
    public function Sep(){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'September' AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())")->from("booking");
     return $query->count_all_results();
    }
    public function Oct(){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'October' AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())")->from("booking");
     return $query->count_all_results();
    }
    public function Nov(){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'November' AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())")->from("booking");
     return $query->count_all_results();
    }
    public function Dec(){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'December' AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())")->from("booking");
     return $query->count_all_results();
    }

 //Daily report
 
    

 //Yearly report

 //Maintenance issue process Duration (slowest process)

 //Maintenance issue process Duration (fastest process)
    public function getFirstDate(){
        $query = $this->db->query('SELECT warning, date, enddate FROM maintenance ORDER BY date asc, enddate desc limit 0,1');
        return $query->row();
    }
    public function getFirstWarning(){
        $query = $this->db->query('SELECT warning FROM maintenance ORDER BY date asc, enddate desc limit 0,1');
        return $query->result();
    }
    public function getSecondDate(){
        $query = $this->db->query('SELECT warning, date, enddate FROM maintenance ORDER BY date asc, enddate desc limit 1,1');
        return $query->row();
    }
    public function getThirdDate(){
        $query = $this->db->query('SELECT warning, date, enddate FROM maintenance ORDER BY date asc, enddate desc limit 2,1');
        return $query->row();
    }
    public function getFourthDate(){
        $query = $this->db->query('SELECT warning, date, enddate FROM maintenance ORDER BY date asc, enddate desc limit 3,1');
        return $query->row();
    }
    public function getFifthDate(){
        $query = $this->db->query('SELECT warning, date, enddate FROM maintenance ORDER BY date asc, enddate desc limit 4,1');
        return $query->row();
    }

    public function getFirstEndDate(){
        $query = $this->db->query('SELECT warning, date, enddate FROM maintenance ORDER BY date desc, enddate asc limit 0,1');
        return $query->row();
    }
    public function getSecondEndDate(){
        $query = $this->db->query('SELECT warning, date, enddate FROM maintenance ORDER BY date desc, enddate asc limit 1,1');
        return $query->row();
    }
    public function getThirdEndDate(){
        $query = $this->db->query('SELECT warning, date, enddate FROM maintenance ORDER BY date desc, enddate asc limit 2,1');
        return $query->row();
    }
    public function getFourthEndDate(){
        $query = $this->db->query('SELECT warning, date, enddate FROM maintenance ORDER BY date desc, enddate asc limit 3,1');
        return $query->row();
    }
    public function getFifthEndDate(){
        $query = $this->db->query('SELECT warning, date, enddate FROM maintenance ORDER BY date desc, enddate asc limit 4,1');
        return $query->row();
    }

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