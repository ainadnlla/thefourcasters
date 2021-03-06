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

    public function getBookingIntransit(){
        $query = $this->db->where('action',3)->like('date', date('Y-m'))->from("booking");
        return $query->count_all_results();
    }

    public function getBookingArrived(){
        $query = $this->db->where('action',4)->like('date', date('Y-m'))->from("booking");
        return $query->count_all_results();
    }

    public function getBookingFinished(){
        $query = $this->db->where('action',5)->like('date', date('Y-m'))->from("booking");
        return $query->count_all_results();
    }
 
 //Monthly report
 public function jan($year){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'January' AND EXTRACT(YEAR from date) = '$year'")->from("booking");
     return $query->count_all_results();
     }
     public function feb($year){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'February' AND EXTRACT(YEAR from date) ='$year' ")->from("booking");
     return $query->count_all_results();
    }
    public function march($year){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'March' AND EXTRACT(YEAR from date) = '$year'")->from("booking");
     return $query->count_all_results();
    }
    public function april($year){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'April' AND EXTRACT(YEAR from date) = '$year'")->from("booking");
     return $query->count_all_results();
    }
    public function may($year){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'May' AND EXTRACT(YEAR from date) = '$year'")->from("booking");
     return $query->count_all_results();
    }
    public function june($year){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'June' AND EXTRACT(YEAR from date) = '$year'")->from("booking");
     return $query->count_all_results();
    }
    public function july($year){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'July' AND EXTRACT(YEAR from date) = '$year'")->from("booking");
     return $query->count_all_results();
    }
    public function aug($year){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'August' AND EXTRACT(YEAR from date) = '$year'")->from("booking");
     return $query->count_all_results();
    }
    public function sep($year){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'September' AND EXTRACT(YEAR from date) = '$year'")->from("booking");
     return $query->count_all_results();
    }
    public function oct($year){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'October' AND EXTRACT(YEAR from date) = '$year'")->from("booking");
     return $query->count_all_results();
    }
    public function nov($year){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'November' AND EXTRACT(YEAR from date) = '$year'")->from("booking");
     return $query->count_all_results();
    }
    public function dec($year){
     $query = $this->db->where(" DATE_FORMAT(date, '%M') = 'December' AND EXTRACT(YEAR from date) = '$year'")->from("booking");
     return $query->count_all_results();
    }

 //Daily report
    public function daily($day,$month,$year){
        $query = $this->db->where("EXTRACT(DAY from date) = '$day' AND EXTRACT(MONTH from date) = '$month'  AND EXTRACT(YEAR from date) = '$year'")->from("booking");
        return $query->count_all_results();  
    }
    

 //Yearly report
 public function currentyear(){
    $query = $this->db->where(" EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())")->from("booking");
    return $query->count_all_results();
 }
 public function lastyear(){
    $query = $this->db->where(" EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())-1")->from("booking");
    return $query->count_all_results();
 }
 public function llastyear(){
    $query = $this->db->where(" EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())-2")->from("booking");
    return $query->count_all_results();
 }
 public function lllastyear(){
    $query = $this->db->where(" EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())-3")->from("booking");
    return $query->count_all_results();
 }
 public function llllastyear(){
    $query = $this->db->where(" EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())-4")->from("booking");
    return $query->count_all_results();
 }

 //Maintenance issue process Duration (fastest process)
    public function getFirstDate(){
        $query = $this->db->query('SELECT date, enddate FROM maintenance ORDER BY date asc, enddate desc limit 0,1');
        return $query->row();
    }
    public function getSecondDate(){
        $query = $this->db->query('SELECT date, enddate FROM maintenance ORDER BY date asc, enddate desc limit 1,1');
        return $query->row();
    }
    public function getThirdDate(){
        $query = $this->db->query('SELECT date, enddate FROM maintenance ORDER BY date asc, enddate desc limit 2,1');
        return $query->row();
    }
    public function getFourthDate(){
        $query = $this->db->query('SELECT date, enddate FROM maintenance ORDER BY date asc, enddate desc limit 3,1');
        return $query->row();
    }
    public function getFifthDate(){
        $query = $this->db->query('SELECT date, enddate FROM maintenance ORDER BY date asc, enddate desc limit 4,1');
        return $query->row();
    }
    //LABEL
    public function getFirstWarning(){
        $query = $this->db->query('SELECT plate_no, warning, id FROM maintenance ORDER BY date asc, enddate desc limit 0,1');
        return $query->row();
    }
    public function getSecondWarning(){
        $query = $this->db->query('SELECT plate_no, warning, id FROM maintenance ORDER BY date asc, enddate desc limit 1,1');
        return $query->row();
    }
    public function getThirdWarning(){
        $query = $this->db->query('SELECT plate_no, warning, id FROM maintenance ORDER BY date asc, enddate desc limit 2,1');
        return $query->row();
    }
    public function getFourthWarning(){
        $query = $this->db->query('SELECT plate_no, warning, id FROM maintenance ORDER BY date asc, enddate desc limit 3,1');
        return $query->row();
    }
    public function getFifthWarning(){
        $query = $this->db->query('SELECT plate_no, warning, id FROM maintenance ORDER BY date asc, enddate desc limit 4,1');
        return $query->row();
    }

 //Maintenance issue process Duration (slowest process)
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
    //LABEL
    public function getFirstEndWarning(){
        $query = $this->db->query('SELECT plate_no, warning, id FROM maintenance ORDER BY date desc, enddate asc limit 0,1');
        return $query->row();
    }
    public function getSecondEndWarning(){
        $query = $this->db->query('SELECT plate_no, warning, id FROM maintenance ORDER BY date desc, enddate asc limit 1,1');
        return $query->row();
    }
    public function getThirdEndWarning(){
        $query = $this->db->query('SELECT plate_no, warning, id FROM maintenance ORDER BY date desc, enddate asc limit 2,1');
        return $query->row();
    }
    public function getFourthEndWarning(){
        $query = $this->db->query('SELECT plate_no, warning, id FROM maintenance ORDER BY date desc, enddate asc limit 3,1');
        return $query->row();
    }
    public function getFifthEndWarning(){
        $query = $this->db->query('SELECT plate_no, warning, id FROM maintenance ORDER BY date desc, enddate asc limit 4,1');
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
// Maintenance monthly
public function mjan($year){
    $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where DATE_FORMAT(date, '%M') = 'January' AND EXTRACT(YEAR from date) = '$year' ");
    $result = $this->db->query($sql);
    return $result->row()->total;  
    
     }
    public function mfeb($year){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where DATE_FORMAT(date, '%M') = 'February' AND EXTRACT(YEAR from date) = '$year' ");
        $result = $this->db->query($sql);
        return $result->row()->total;  
    
    }
    public function mmarch($year){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where DATE_FORMAT(date, '%M') = 'March' AND EXTRACT(YEAR from date) = '$year' ");
        $result = $this->db->query($sql);
        return $result->row()->total;  
   
    }
    public function mapril($year){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where DATE_FORMAT(date, '%M') = 'April' AND EXTRACT(YEAR from date) = '$year' ");
        $result = $this->db->query($sql);
        return $result->row()->total;  
     
    }
    public function mmay($year){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where DATE_FORMAT(date, '%M') = 'May' AND EXTRACT(YEAR from date) = '$year' ");
        $result = $this->db->query($sql);
        return $result->row()->total;  
  
    }
    public function mjune($year){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where DATE_FORMAT(date, '%M') = 'June' AND EXTRACT(YEAR from date) = '$year' ");
        $result = $this->db->query($sql);
        return $result->row()->total;  
    
    }
    public function mjuly($year){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where DATE_FORMAT(date, '%M') = 'July' AND EXTRACT(YEAR from date) = '$year' ");
        $result = $this->db->query($sql);
        return $result->row()->total;  
    
    }
    public function maug($year){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where DATE_FORMAT(date, '%M') = 'August' AND EXTRACT(YEAR from date) = '$year' ");
        $result = $this->db->query($sql);
        return $result->row()->total;   
    
    }
    public function msep($year){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where DATE_FORMAT(date, '%M') = 'September' AND EXTRACT(YEAR from date) = '$year' ");
        $result = $this->db->query($sql);
        return $result->row()->total;   
     
    }
    public function moct($year){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where DATE_FORMAT(date, '%M') = 'October' AND EXTRACT(YEAR from date) = '$year' ");
        $result = $this->db->query($sql);
        return $result->row()->total;   
    
    }
    public function mnov($year){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where DATE_FORMAT(date, '%M') = 'November' AND EXTRACT(YEAR from date) = '$year' ");
        $result = $this->db->query($sql);
        return $result->row()->total;   
    
    }
    public function mdec($year){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where DATE_FORMAT(date, '%M') = 'December' AND EXTRACT(YEAR from date) = '$year' ");
        $result = $this->db->query($sql);
        return $result->row()->total;
     
    }
    //Maintenance Yearly Report
    public function mcurrentyear(){
       
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE()) ");
        $result = $this->db->query($sql);
        return $result->row()->total;
       
     }
     public function mlastyear(){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())-1 ");
        $result = $this->db->query($sql);
        return $result->row()->total;
      
     }
     public function mllastyear(){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())-2 ");
        $result = $this->db->query($sql);
        return $result->row()->total;
      
     }
     public function mlllastyear(){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())-3 ");
        $result = $this->db->query($sql);
        return $result->row()->total;
       
     }
     public function mllllastyear(){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())-4 ");
        $result = $this->db->query($sql);
        return $result->row()->total;
       
     }
     //Maintenance Daily Report
     public function mdaily($day,$month,$year){
        $sql = ("SELECT COUNT(DISTINCT plate_no) as total from maintenance where EXTRACT(DAY from date) = '$day' AND EXTRACT(MONTH from date) = '$month'  AND EXTRACT(YEAR from date) = '$year' ");
      
        $result = $this->db->query($sql);
        return $result->row()->total;
    }
}