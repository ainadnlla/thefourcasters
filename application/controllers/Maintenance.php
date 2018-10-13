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
        $data = $this->input->post();

        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('description', 'Item Description', 'required');
        $this->form_validation->set_rules('purchased', 'Date', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('quantity', 'Quantity', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->add();
        }
        else
        {
            $this->UserModel->insert($data);
            redirect('admin/userdetails_staff');
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
        redirect('admin/login');
        }
    }

    public function edit($id){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Maintenance Information | Angelogistic Forwarder Corporation';

        $main = $this->MaintenanceModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/staff/staffedit',compact('main'));
        $this->load->view('include/footer');

        }else{
            redirect('admin/login');
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
            $this->UserModel->update($id, $data);
            redirect('admin/userdetails_staff');
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

   function fetch_user(){  
    $this->load->model("MaintenanceModel");  
    $fetch_data = $this->MaintenanceModal->make_datatables();  
    $data = array();  
    foreach($fetch_data as $row)  
    {  
         $sub_array = array();  
         $sub_array[] = $row->warning;  
         $data[] = $sub_array;  
    }  
    $output = array(  
         "recordsTotal"          =>      $this->MaintenanceModal->getItems(),  
         "recordsFiltered"     =>     $this->MaintenanceModal->get_filtered_data(),  
         "data"                    =>     $data 
    );  
    echo json_encode($output);  
}  

    
}