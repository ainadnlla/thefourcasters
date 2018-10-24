<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bookingstaff extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('UserModel');
            $this->load->model('CustomerModel');
            $this->load->model('DriverModel');
            $this->load->model('TruckModel');
            $this->load->model('AdminModel');
            $this->load->model('BookingModel');
    }
    
    // STAFF SIDE - BOOKING
    
    public function insert(){
        $data = $this->input->post();
        unset($data['add']);

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
        if($this->session->userdata('email') !=''){ 
        $data['title'] = 'Booking Information | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/booking/addbooking');
        $this->load->view('include/footer');
        }else{
            redirect('staff/login');
        }
    }

    public function view($id){
        if($this->session->userdata('email') !=''){ 
        $data['title'] = 'Booking Information | Angelogistic Forwarder Corporation';
        $books = $this->BookingModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/booking/viewbooking', compact('books'));
        $this->load->view('include/footer');
        }else{
            redirect('staff/login');
        }
    }

    public function edit($id){
        if($this->session->userdata('email') !=''){ 
            $data['title'] = 'Booking Information | Angelogistic Forwarder Corporation';
            $books = $this->BookingModel->getProd($id);
    
            $session_data = array(
                'date' => $books->date,
                'driverid' => $books->driverid
            );
            $this->session->set_userdata($session_data);
    
            $data['plate_nos'] = $this->BookingModel->getPlateNo();
            $data['drivernames'] = $this->BookingModel->getDrivers();
            $data['drivername'] = $this->BookingModel->getDrivername();
            $data['helpernames'] = $this->BookingModel->getHelpers();
            $data['helperid'] = $this->BookingModel->getHelperid();
            $data['location'] = $this->BookingModel->getDestination();

        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/booking/editbooking',compact('books'));
        $this->load->view('include/footer');
        }else{
            redirect('staff/login');
        }
    }
    public function delete($id){
        if($this->session->userdata('email') !=''){ 
        $books = $this->BookingModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/staff_header');
        $this->load->view('staff/booking/deletebooking',compact('books'));
        $this->load->view('include/footer');
    }else{
        redirect('staff/login');
    }
    } 
    
    public function del($id){
            $data= $this->input->post();
            unset($data['delete']);
            $books = $this->uri->segment(4);
            $this->BookingModel->delete($id,$data);
            redirect('staff/booking');
     }
    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);
        $this->form_validation->set_rules('waybill', 'Waybill', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('cargo', 'Cargo', 'required');
        $this->form_validation->set_rules('product', 'Product', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('pieces', 'Pieces', 'required');
        // $this->form_validation->set_rules('driver_name','Driver', 'required');
        //$this->form_validation->set_rules('helper_name', 'Helper', 'required');
        $this->form_validation->set_rules('destination', 'Destination', 'required');

            
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