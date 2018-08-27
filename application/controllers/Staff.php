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
    }

    public function login(){
        $data['title'] = 'Angelogistic Forwarder Corporation';
        $this->load->view('include/admin_header');
        $this->load->view('staff/login');
        $this->load->view('include/admin_footer');
       }
         
       public function homepage(){
        $data['title'] = 'Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/homepage');
        $this->load->view('include/footer');
       }
       public function staff(){
        $staff = array(
            'email' => $this->input->post('email'),
            'password' => sha1($this->input->post('password'))
            );
    
        $user = $this->AdminModel->getstaff($staff);
    
        if(!$user == null){
    
    
            $newdata = array(
                    'name'  => $user->fname,
                    'email' => $user->email,
                    'logged_in' => TRUE,
                    'isAdmin' => TRUE
            );
    
            $this->session->set_userdata($newdata);
            redirect('staff/homepage');
        }
        else{
    redirect('staff/login');
            // $this->load->view('include/admin_header');
            // $this->load->view('staff/login');
            // $this->load->view('include/admin_footer');
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('staff/login');
    }

    public function truckdetails($offset=0){
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
    }

    public function customerdetails($offset=0){
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
    }

    public function truckgps(){
        $data['title'] = 'Truck Location | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/truckgps');
        $this->load->view('include/footer');
    }

    public function calendar(){
        $data['title'] = 'Calendar | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/staff_header'); 
        $this->load->view('staff/calendar');
        $this->load->view('include/calendar_foot');
    }  

    public function inbox(){
        $data['title'] = 'Inbox | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/staff_header'); 
        $this->load->view('staff/inbox');
        $this->load->view('include/calendar_foot');
    }  

    public function compose(){     
        $data['title'] = 'Compose | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/staff_header'); 
        $this->load->view('staff/compose');
        $this->load->view('include/calendar_foot');
    }  

    public function booking(){   
        $data['title'] = 'Booking | Angelogistic Forwarder Corporation';
  
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/booking');
        $this->load->view('include/footer');
    }


}
?>