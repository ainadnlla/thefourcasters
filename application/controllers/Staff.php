<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('UserModel');
            $this->load->model('CustomerModel');
            $this->load->model('DriverModel');
            $this->load->model('ConductorModel');
            $this->load->model('TruckModel');
            $this->load->model('AdminModel');
    }

    public function login(){
        
        $data['title'] = 'Angelogistic Forwarder Corporation';
        $this->load->view('include/admin_header');
        $this->load->view('staff/login');
        $this->load->view('include/admin_footer');
        if($this->session->userdata('email') !=''){ 
            redirect('staff/homepage');
        }else{
         
        } 
       }
       public function staff(){
           $email=$this->input->post('email');
           $password=$this->input->post('password');
           $user = $this->AdminModel->getStaff($email, $password);
           if(!($user == null))
           {            
            
                if($user->status == 1)
                {
                        $session_data = array(
                                // 'status' =>$status,
                                'email'     => $email,
                                'logged_in' => TRUE,
                                'isAdmin' => TRUE
                        );
            
                        $this->session->set_userdata($session_data);
                        redirect('staff/homepage');
                }

                else
                {

                    $this->session->set_flashdata('error','Unauthorized Access');
                    redirect('staff/login');

                }

        

                    }else{
                        $this->session->set_flashdata('error','Invalid Username and Password');
               redirect('staff/login');
           }
           
    
    } 
       public function homepage(){
        if($this->session->userdata('email') !=''){   
        $data['title'] = 'Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/homepage');
        $this->load->view('include/footer');
        }else{
           redirect('staff/login');
       }
       }
       
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('staff/login');
    }

    public function truckdetails($offset=0){
        if($this->session->userdata('email') !=''){   
        $data['title'] = 'Truck Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'staff/truckdetails/';
        $config['total_rows'] = $this->TruckModel->getNumRecs();
        $config['per_page'] = $norecs;

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $this->load->config('myconfig');
        $trucks =  $this->TruckModel->getItems($norecs, $offset);

        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/truckdetails');
        $this->load->view('include/footer');
    }else{
        redirect('staff/login');
    }
    }

    public function customerdetails($offset=0){
        if($this->session->userdata('email') !=''){
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'staff/customerdetails/';
        $config['total_rows'] = $this->CustomerModel->getNumRecs();
        $config['per_page'] = $norecs;

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $this->load->config('myconfig');
        $custs = $this->CustomerModel->getItems($norecs, $offset);
        
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('include/footer');
        $this->load->view('staff/customerdetails',compact('custs'));
    }else{
        redirect('staff/login');
    }
    }

    public function truckgps(){
        if($this->session->userdata('email') !=''){
        $data['title'] = 'Truck Location | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/truckgps');
        $this->load->view('include/footer');
    }else{
        redirect('staff/login');
    }
    }

    public function calendar(){
        if($this->session->userdata('email') !=''){
        $data['title'] = 'Calendar | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/staff_header'); 
        $this->load->view('staff/calendar');
        $this->load->view('include/calendar_foot');
    }else{
        redirect('staff/login');
    }
    }  

    public function inbox(){
        if($this->session->userdata('email') !=''){
        $data['title'] = 'Inbox | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/staff_header'); 
        $this->load->view('staff/inbox');
        $this->load->view('include/calendar_foot');
    }else{
        redirect('staff/login');
    }
    }  

    public function compose(){   
        if($this->session->userdata('email') !=''){
        $data['title'] = 'Compose | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/staff_header'); 
        $this->load->view('staff/compose');
        $this->load->view('include/calendar_foot');
    }else{
        redirect('staff/login');
    }
    }  

    public function booking(){  
        if($this->session->userdata('email') !=''){ 
        $data['title'] = 'Booking | Angelogistic Forwarder Corporation';
  
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/booking');
        $this->load->view('include/footer');
    }else{
        redirect('staff/login');
    }
    }

    

}
?>