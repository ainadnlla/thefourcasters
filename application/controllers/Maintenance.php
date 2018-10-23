<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('UserModel');
            $this->load->model('CustomerModel');
            $this->load->model('DriverModel');
            $this->load->model('TruckModel');
            $this->load->model('AdminModel');
            $this->load->model('BookingModel');
            $this->load->model('HelperModel');
            $this->load->model('MaintenanceModel');
    }

    public function insert(){
        $data = array (
            'plate_no' => $this->session->userdata('plate_no'),
            'warning' => $this->input->post('warning'),
            'date' => $this->input->post('date'),
        );

        unset($data['add']);
        $this->form_validation->set_rules('warning', 'Description', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->add($id);
        }
        else
        {
            $this->MaintenanceModel->insert($data);
            // redirect('admin/truckdetails');
            $referred_from = $this->session->userdata('referred_from');
            redirect($referred_from, 'refresh');
        }
    }
    
    public function add(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Maintenance Information | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('admin/maintenance/maintenanceadd');
        
        }else{
        redirect('login/admin');
        }
    }

    public function edit($id){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Maintenance Information | Angelogistic Forwarder Corporation';
        $amount = $this->MaintenanceModel->getAmount($id);
        $main = $this->MaintenanceModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/maintenance/maintenanceedit',compact('main', 'amount'));
        $this->load->view('include/footer');

        }else{
            redirect('login/admin');
        }
    }

    public function update($id){
    $data = $this->input->post();
    
    unset($data['submit']);

    $this->form_validation->set_rules('supplier', 'Supplier', 'required');
    $this->form_validation->set_rules('description', 'Item Description', 'required');
    $this->form_validation->set_rules('purchased', 'Date', 'required');
    $this->form_validation->set_rules('price', 'Price', 'required');
    $this->form_validation->set_rules('unit', 'Unit', 'required');
    $this->form_validation->set_rules('quantity', 'Quantity', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->edit($id);
        }
        else
        {
            $this->MaintenanceModel->update($id, $data);
            $referred_from = $this->session->userdata('referred_from');
            redirect($referred_from, 'refresh');
        }
    }

    function user_action(){  
        if($_POST["action"] == "add")  
        {  
             $data = array(  
                  'warning'   =>     $this->input->post('warning'),  
             );  
             $this->load->model('MaintenanceModal');  
             $this->MaintenanceModal->insert($data);  
             echo 'Data Inserted';  
        }  
   }
    
}