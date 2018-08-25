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

    public function index(){
        $data['title'] = 'Angelogistic Forwarder Corporation';
        $this->load->view('include/admin_header');
        $this->load->view('staff/index');
        $this->load->view('include/admin_footer');
       }
         
       public function homepage(){
           
        $this->load->view('include/admin_header');
        $this->load->view('include/header');
        $this->load->view('staff/homepage');
        $this->load->view('include/footer');
        $this->load->view('include/admin_footer');
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
    redirect('staff/index');
            // $this->load->view('include/admin_header');
            // $this->load->view('staff/index');
            // $this->load->view('include/admin_footer');
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('staff/index');
    }
    }
?>