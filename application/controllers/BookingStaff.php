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
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('destination', 'Destination', 'required');
            $this->form_validation->set_rules('cargo', 'Cargo Type', 'required');
            $this->form_validation->set_rules('product', 'Product Type', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
      if ($this->form_validation->run() == FALSE)
      {
          $this->add();
      }
      else
      {
            $this->BookingModel->insert($data);
            redirect('staff/booking');
      }
    }  
    public function add(){
        // if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/booking/addbooking');
        $this->load->view('include/footer');
    // }else{
    //     redirect('customer/login');
    // }
    }
    public function edit($id){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';
        $book = $this->BookingModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/booking/editbooking',compact('book'));
        $this->load->view('include/footer');
    }else{
        redirect('staff/login');
    }
    }
    public function delete($id){
        if($this->session->userdata('username') !=''){ 
        $book = $this->BookingModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/staff_header');
        $this->load->view('staff/booking/deletebooking',compact('book'));
        $this->load->view('include/footer');
    }else{
        redirect('staff/login');
    }
    } 
    
    public function del($id){
            $data= $this->input->post();
            unset($data['delete']);
            $book = $this->uri->segment(4);
            $this->BookingModel->delete($id,$data);
            redirect('staff/booking');
     }
    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('date','Date', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('destination', 'Destination', 'required');
        $this->form_validation->set_rules('cargo', 'Cargo Type', 'required');
        $this->form_validation->set_rules('product', 'Product Type', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
            
            if ($this->form_validation->run() == FALSE)
            {
                $this->edit($id);
            }
            else
            {
                $this->BookingModel->update($id, $data);
                redirect('staff/booking');
            }
        }
}
?>