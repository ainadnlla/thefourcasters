<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('UserModel');
    }
    
    
    public function index(){
        
        //$items =  $this->UserModel->getItems();
         $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('staff/index');
        $this->load->view('include/footer');
    }    
  
    }
?>