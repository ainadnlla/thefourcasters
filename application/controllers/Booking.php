<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Booking extends CI_Controller {
    
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

// CUSTOMER SIDE - BOOKING
    
    public function insert(){
        $data = $this->input->post();
        unset($data['add']);
            $this->form_validation->set_rules('product', 'Product', 'required');       
            $this->form_validation->set_rules('pieces', 'Pieces', 'required');
            $this->form_validation->set_rules('date','Date', 'required');
            $this->form_validation->set_rules('destinationid', 'Destination', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->add();
        }
        else
        {
                $this->BookingModel->insert($data);
                redirect('customer/booking');
        }
    }  
    public function add(){
        if($this->session->userdata('emailad') !=''){ 
            $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';

            $session_data = array(
                'date' =>'date',
            );
            $this->session->set_userdata($session_data);

            $data['location'] = $this->BookingModel->getDestination();
            $data['recomdriver'] = $this->BookingModel->getRecommendDriver();

            $this->load->view('include/header', $data);
            $this->load->view('include/customer_header');
            $this->load->view('customer/booking/addbooking');
            $this->load->view('include/footer');
        }else{
            redirect('login/customer');
        }
    }
    public function edit($id){
        if($this->session->userdata('emailad') !=''){ 
            $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';
            $books = $this->BookingModel->getProd($id);

            $session_data = array(
                'destinationid' => $books->destinationid,
            );
            $this->session->set_userdata($session_data);

            $data['destination'] = $this->BookingModel->getDestination();
            $data['destinationname'] = $this->BookingModel->getDestinationname();
            
            $this->load->view('include/header', $data);
            $this->load->view('include/customer_header');
            $this->load->view('customer/booking/editbooking',compact('books'));
            $this->load->view('include/footer');
        }else{
            redirect('login/customer');
        }
    }
    public function delete($id){
        if($this->session->userdata('emailad') !=''){ 
            $books = $this->BookingModel->getProd($id);
            $this->load->view('include/header');
            $this->load->view('include/customer');
            $this->load->view('customer/booking/deletebooking',compact('books'));
            $this->load->view('include/footer');
        }else{
            redirect('login/customer');
        }
    } 
    
    public function del($id){
        $data= $this->input->post();
        unset($data['delete']);
        $books = $this->uri->segment(4);
        $this->BookingModel->delete($id,$data);
        redirect('customer/booking');
    }
     
    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);
        $this->form_validation->set_rules('product', 'Product', 'required');               
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('pieces', 'Pieces', 'required|integer');
        $this->form_validation->set_rules('date','Date', 'required');
        $this->form_validation->set_rules('destination', 'Destination', 'required');
            
        if ($this->form_validation->run() == FALSE)
        {
            $this->edit($id);
        }
        else
        {
            $this->BookingModel->update($id, $data);
            redirect('customer/booking');
        }
    }
        
    public function view($id){
        if($this->session->userdata('emailad') !=''){ 
            $data['title'] = 'Booking Information | Angelogistic Forwarder Corporation';
            $books = $this->BookingModel->getProd($id);
            $session_data = array(
                'action'  => $books->action);
            $this->session->set_userdata($session_data);

    
            $this->load->view('include/header', $data);
            $this->load->view('include/customer_header');
            $this->load->view('customer/booking/viewbooking', compact('books'));
            $this->load->view('include/footer');
        }else{
            redirect('login/customer');
        }
    }

}
?>