<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Booking extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('UserModel');
            $this->load->model('CustomerModel');
            $this->load->model('DriverModel');
            $this->load->model('ConductorModel');
            $this->load->model('TruckModel');
            $this->load->model('AdminModel');
            $this->load->model('BookingModel');
    }
    
    public function insert(){
        $data = $this->input->post();
        unset($data['add']);
            $this->form_validation->set_rules('id', 'ID', 'required');
            $this->form_validation->set_rules('date','Date', 'required');
            $this->form_validation->set_rules('cust_type', 'Customer Type', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('Destination', 'Destination', 'required');
      if ($this->form_validation->run() == FALSE)
      {
          $this->add();
      }
      else
      {
            $this->CustomerModel->insert($data);
            redirect('admin/booking');
      }
    }  
    public function add(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/booking/addbooking');
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
    }
    }
    public function edit($id){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';
        $cust = $this->CustomerModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/customer/customeredit',compact('cust'));
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
    }
    }
    public function delete($id){
        if($this->session->userdata('username') !=''){ 
        $cust = $this->CustomerModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('admin/customer/customerdelete',compact('cust'));
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
    }
    } 
    
    public function del($id){
            $data= $this->input->post();
            unset($data['delete']);
            $cust = $this->uri->segment(4);
            $this->CustomerModel->delete($id,$data);
            redirect('admin/customerdetails');
     }
    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);
            $this->form_validation->set_rules('name', 'Customer/Brokerage', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric');
            
            if ($this->form_validation->run() == FALSE)
            {
                $this->edit($id);
            }
            else
            {
                $this->CustomerModel->update($id, $data);
                redirect('admin/customerdetails');
            }
        }
}
?>