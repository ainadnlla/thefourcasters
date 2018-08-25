<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductor extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('ConductorModel');
            $this->load->model('DriverModel');
            $this->load->model('CustomerModel');
            $this->load->model('UserModel');
    }

    public function userdetails_conductor($offset=0){
        $data['title'] = 'Driver Helper Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'user/userdetails_conductor/';
        $config['total_rows'] = $this->ConductorModel->getNumRecs();
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
        $conds = $this->ConductorModel->getItems($norecs, $offset);
        
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('adminf/userdetails',compact('conds'));
    }

    public function view($id){
        $data['title'] = 'Driver Helper Details | Angelogistic Forwarder Corporation';

        $cond = $this->ConductorModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('adminf/conductor/conductorview',compact('cond'));
        $this->load->view('include/footer'); 
    }

    public function insert(){
        $data = $this->input->post();
        unset($data['add']);
            $this->form_validation->set_rules('conductornum', 'Helper #', 'required');
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric');

      if ($this->form_validation->run() == FALSE)
      {
          $this->add();
      }
      else
      {
            $this->ConductorModel->insert($data);
            redirect('user/userdetails_conductor');
      }
    }  

    public function add(){
        $data['title'] = 'Driver Helper Details | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('adminf/conductor/conductoradd');
        $this->load->view('include/footer');
    }

    public function edit($id){
        $data['title'] = 'Driver Helper Details | Angelogistic Forwarder Corporation';

        $cond = $this->ConductorModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('adminf/conductor//conductoredit',compact('cond'));
        $this->load->view('include/footer');
    }

    

    public function del($id){
        $data= $this->input->post();
        unset($data['delete']);
        $cond = $this->uri->segment(4);
        $this->ConductorModel->delete($id,$data);
        redirect('user/userdetails_conductor');
    }

    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);
            $this->form_validation->set_rules('conductornum', 'Helper #', 'required');
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('password','Password', 'required');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric');
            
            if ($this->form_validation->run() == FALSE)
            {
                $this->edit($id);
            }
            else
            {
                $this->ConductorModel->update($id, $data);
                redirect('user/userdetails_conductor');
            }
        }
    }
?>