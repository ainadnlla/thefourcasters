<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalendarModel extends CI_Model{

    public function get_events($start, $end)
{
    return $this->db->where("date >=", $start)->where("date <=", $end)->get("booking");
}

public function add_event($data)
{
    $this->db->insert("booking", $data);
}

public function get_event($id)
{
    return $this->db->where("id", $id)->get("booking");
}

public function update_event($id, $data)
{
    $this->db->where("id", $id)->update("booking", $data);
}

public function delete_event($id)
{
    $this->db->where("id", $id)->delete("booking");
}
}
?>
