<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalendarModel extends CI_Model{

    public function get_events($start, $end)
    {
        return $this->db->where("date >=", $start)->where("date <=", $end)->get("booking");
    }
}
?>
