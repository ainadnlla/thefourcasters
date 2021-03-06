<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportsModel extends CI_Model{


    public function getreport($month, $year){
        
        $query = $this->db->query("SELECT * FROM booking WHERE EXTRACT(MONTH FROM date) = '$month' && EXTRACT(YEAR FROM date) = '$year'");
        return $query->result();

    }
    public function getdayreport($day,$month,$year){
        $query = $this->db->query("SELECT * FROM booking WHERE EXTRACT(MONTH FROM date) = '$month' && EXTRACT(DAY FROM date) = '$day' && EXTRACT(YEAR FROM date) = '$year'");
        return $query->result();

    }
    public function getyeareport($year){
        
        $query = $this->db->query("SELECT * FROM booking WHERE EXTRACT(YEAR FROM date) = '$year'");
        return $query->result();

    }


    public function getmain($month, $year){
        
        $query = $this->db->query("SELECT * FROM maintenance WHERE EXTRACT(MONTH FROM date) = '$month' && EXTRACT(YEAR FROM date) = '$year'");
        return $query->result();

    }
    public function getmainday($day,$month, $year){
         $query = $this->db->query("SELECT * FROM maintenance WHERE EXTRACT(MONTH FROM date) = '$month' && EXTRACT(DAY FROM date) = '$day' && EXTRACT(YEAR FROM date) = '$year'");
        return $query->result();

    }
    public function getmainyear($year){
        
        $query = $this->db->query("SELECT * FROM maintenance WHERE EXTRACT(YEAR FROM date) = '$year'");
        return $query->result();

    }


    public function getBook(){
        $query = $this->db->query("SELECT * FROM booking WHERE EXTRACT(MONTH FROM date) = EXTRACT(MONTH from CURDATE()) AND EXTRACT(YEAR from date) = EXTRACT(YEAR from CURDATE())");
        return $query->result(); 
    }

    public function get_sum($month, $year){
        $sql = "SELECT SUM(price) as totalprice FROM booking WHERE action = 1 and EXTRACT(MONTH FROM date) = '$month' AND EXTRACT(YEAR from date) = '$year'";
        $result = $this->db->query($sql);
        return $result->row()->totalprice;
    }
    public function get_sumdaily($day,$month, $year){
        $sql = "SELECT SUM(price) as totalprice FROM booking WHERE action = 1 and EXTRACT(MONTH FROM date) = '$month' && EXTRACT(day FROM date) = '$day' AND EXTRACT(YEAR from date) = '$year'";
        $result = $this->db->query($sql);
        return $result->row()->totalprice;
    }
    public function get_sumyear($year){
        $sql = "SELECT SUM(price) as totalprice FROM booking where action = 1 and EXTRACT(YEAR from date) = '$year'";
        $result = $this->db->query($sql);
        return $result->row()->totalprice;
    }
    
    public function get_sum_mainte($month, $year){
        $sql = "SELECT SUM(amount) as totalprice FROM maintenance WHERE EXTRACT(MONTH FROM date) = '$month' AND EXTRACT(YEAR from date) = '$year'";
        $result = $this->db->query($sql);
        return $result->row()->totalprice;
    }
    public function get_sum_maintedaily($day,$month, $year){
        $sql = "SELECT SUM(amount) as totalprice FROM maintenance WHERE EXTRACT(MONTH FROM date) = '$month' AND EXTRACT(DAY FROM date) = '$day' AND EXTRACT(YEAR from date) = '$year'";
        $result = $this->db->query($sql);
        return $result->row()->totalprice;
    }
    public function get_sum_mainteyear($year){
        $sql = "SELECT SUM(amount) as totalprice FROM maintenance WHERE EXTRACT(YEAR from date) = '$year'";
        $result = $this->db->query($sql);
        return $result->row()->totalprice;
    }

}

?>