<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Staff_customer extends CI_Controller {
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
    
    // STAFF SIDE - CUSTOMER CRUD

    public function insert(){
        $data = $this->input->post();
        unset($data['add']);
            $this->form_validation->set_rules('name', 'First Name', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');
        if ($this->form_validation->run() == FALSE)
        {
            $this->add();
        }
        else
        {
            $this->CustomerModel->insert($data);
            redirect('staff/customerdetails');
        }
    }  
    public function add(){
        if($this->session->userdata('email') !=''){ 
            $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';
            $this->load->view('include/header', $data);
            $this->load->view('include/staff_header');
            $this->load->view('staff/customer/customeradd');
            $this->load->view('include/footer');
        }else{
            redirect('staff/login');
        }
    }

    public function edit($id){
        if($this->session->userdata('email') !=''){ 
            $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';
            $cust = $this->CustomerModel->getProd($id);
            $this->load->view('include/header', $data);
            $this->load->view('include/staff_header');
            $this->load->view('staff/customer/customeredit',compact('cust'));
            $this->load->view('include/footer');
        }else{
            redirect('staff/login');
        }
    }

    public function delete($id){
        if($this->session->userdata('email') !=''){ 
            $cust = $this->CustomerModel->getProd($id);
            $this->load->view('include/header');
            $this->load->view('include/staff_header');
            $this->load->view('staff/customer/customerdelete',compact('cust'));
            $this->load->view('include/footer');
        }else{
            redirect('staff/login');
        }
    } 
    
    public function del($id){
        $data= $this->input->post();
        unset($data['delete']);
        $cust = $this->uri->segment(4);
        $this->CustomerModel->delete($id,$data);
        redirect('staff/customerdetails');
    }
    
    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);
        $this->form_validation->set_rules('name', 'Customer/Brokerage', 'required');
        $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
        $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email Address', 'required');
        $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');
        $this->form_validation->set_rules('img', 'Image', 'required');
    
        if ($this->form_validation->run() == FALSE)
        {
            $this->edit($id);
        }
        else
        {
            $this->CustomerModel->update($id, $data);
            redirect('staff/customerdetails');
        }
    }

    public function do_upload(){  
        $id = $this->input->post('id');
        $data['cust'] = $this->CustomerModel->getItem($id);
        $config['upload_path']          = './images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 20000;
        $config['max_width']            = 20000;
        $config['max_height']           = 10000;
        $config['file_name']           = $this->input->post('img');
    
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('file_name'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->debug($error);
        }
        else
        {   
            $data['img'] = $this->upload->data();
            $this->Customerodel->update($id,array('img' => $data['file_name']));
        }
    }
    
}
?>