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
    public function maintenance($offset=0){
        if($this->session->userdata('username') !=''){ 
            $data['title'] = 'Truck Details | Angelogistic Forwarder Corporation';
    
            $this->load->library('pagination');
            $norecs = 5;
    
            $config['base_url'] = base_url().'admin/maintenance/';
            $config['total_rows'] = $this->MaintenanceModel->getNumRecs();
            $config['per_page'] = $norecs;
    
            $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] ="</ul>";
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = "<li>";
            $config['next_tagl_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tagl_close'] = "</li>";
            $config['first_tag_open'] = "<li>";
            $config['first_tagl_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tagl_close'] = "</li>";
    
            $this->pagination->initialize($config);
    
            $this->load->config('myconfig');
            $trucks =  $this->MaintenanceModel->getItems($norecs, $offset);
            
            $this->load->view('include/header', $data);
            $this->load->view('include/header_nav');
            $this->load->view('include/footer');
            $this->load->view('admin/maintenance/maintenancedetails',compact('main'));
        }else{
            redirect('admin/login');
        }
    }
}