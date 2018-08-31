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
    public function insert(){
        $data = $this->input->post();
        unset($data['add']);
            $this->form_validation->set_rules('name', 'First Name', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric');
      if ($this->form_validation->run() == FALSE)
      {
          $this->add();
      }
      else
      {
            $this->CustomerModel->insert($data);
            redirect('customer/booking');
      }
    }  
    public function add(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('customer/addbooking');
        $this->load->view('include/footer');
    }else{
        redirect('customer/login');
    }
}
?>