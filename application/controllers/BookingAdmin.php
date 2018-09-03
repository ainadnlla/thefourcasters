<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BookingAdmin extends CI_Controller {

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
    
    // ADMIN SIDE - BOOKING
    
    public function insert(){
        $data = $this->input->post();
        unset($data['add']);
            $this->form_validation->set_rules('id', 'ID', 'required');

      if ($this->form_validation->run() == FALSE)
      {
          $this->add();
      }
      else
      {
            $this->BookingModel->insert($data);
            redirect('admin/booking');
      }
    }  
    public function add(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Booking Information | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/booking/addbooking');
        $this->load->view('include/footer');
        }else{
            redirect('admin/login');
        }
    }

    public function view($id){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Booking Information | Angelogistic Forwarder Corporation';
        $books = $this->BookingModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/booking/viewbooking', compact('books'));
        $this->load->view('include/footer');
        }else{
            redirect('admin/login');
        }
    }

    public function edit($id){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Booking Information | Angelogistic Forwarder Corporation';
        $data['models'] = $this->BookingModel->getModel();
        $data['license_nos'] = $this->BookingModel->getLicense();
        $data['drivernames'] = $this->BookingModel->getDriver();
        $data['drivernums'] = $this->BookingModel->getDriverNo();
        $data['helpernames'] = $this->BookingModel->getHelper();
        $data['helpernums'] = $this->BookingModel->getHelperNo();
        $books = $this->BookingModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/booking/editbooking',compact('books'));
        $this->load->view('include/footer');
        }else{
            redirect('admin/login');
        }
    }
    public function delete($id){
        if($this->session->userdata('username') !=''){ 
        $books = $this->BookingModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('admin/booking/deletebooking',compact('books'));
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
    }
    } 
    
    public function del($id){
            $data= $this->input->post();
            unset($data['delete']);
            $books = $this->uri->segment(4);
            $this->BookingModel->delete($id,$data);
            redirect('admin/booking');
     }
    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);
        $this->form_validation->set_rules('id', 'ID', 'required');

            
            if ($this->form_validation->run() == FALSE)
            {
                $this->edit($id);
            }
            else
            {
                $this->BookingModel->update($id, $data);
                redirect('admin/booking');
            }
        }
}
?>