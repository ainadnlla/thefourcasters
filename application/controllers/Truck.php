<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('UserModel');
            $this->load->model('TruckModel');
            
    }
    
    public function view($id){
        $driv = $this->DriverModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('admin/truck/truckview',compact('truck'));
        $this->load->view('include/footer'); 
    }

    public function insert(){
        $data = $this->input->post();
        unset($data['add']);
        $this->form_validation->set_rules('license_no', 'License Number', 'required');
        $this->form_validation->set_rules('insurance', 'Insurance Date', 'required');

      if ($this->form_validation->run() == FALSE)
      {
          $this->add();
      }
      else
      {
            $this->DriverModel->insert($data);
            redirect('admin/truckdetails');
      }
    }  

    public function add(){
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('admin/truck/truckadd');
        $this->load->view('include/footer');
    }

    public function edit($id){
        $driv = $this->DriverModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('admin/truck/truckedit',compact('truck'));
        $this->load->view('include/footer');
    }


    public function del($id){
        $data= $this->input->post();
        unset($data['delete']);
        $driv = $this->uri->segment(4);
        $this->DriverModel->delete($id,$data);
        redirect('admin/truckdetails');
    }

    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);
            $this->form_validation->set_rules('license_no', 'License Number', 'required');
            $this->form_validation->set_rules('insurance', 'Insurance Date', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                $this->edit($id);
            }
            else
            {
                $this->DriverModel->update($id, $data);
                redirect('admin/truckdetails');
            }
        }
    }
   
    }
?>