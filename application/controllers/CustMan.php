<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CustMan extends CI_Controller {
    
    public function homepage()
    {
            $data['page_title'] = 'Angelogistics Forwarder Corporation';
            $this->load->view('include/customer_header');
            //$this->load->view('include/header');
            $this->load->view('customer/homepage');
            //$this->load->view('include/footer');
            $this->load->view('include/customer_footer');
    }
}
?>