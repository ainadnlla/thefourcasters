<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('DriverModel');
            $this->load->model('CustomerModel');
            $this->load->model('UserModel');
            $this->load->model('AdminModel');
    }
public function logged(){
    $newdata = array(
        'name'  => $user->name,
        'username'     => $user->username,
        'logged_in' => TRUE,
        'isAdmin' => TRUE
);

$this->session->set_userdata($newdata);
}
    public function userdetails_driver($offset=0){
        if($this->session->userdata('username') !=''){ 
            
        $data['title'] = 'Driver Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'admin/userdetails_driver/';
        $config['total_rows'] = $this->DriverModel->getNumRecs();
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
        $drivs = $this->DriverModel->getItems($norecs, $offset);
        
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('admin/userdetails',compact('drivs'));
        
}else{
    redirect('admin/login');
}
    }

    public function insert(){
        $data = $this->input->post();
        unset($data['add']);
            $this->form_validation->set_rules('drivernum', 'Driver #', 'required');
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
            $this->DriverModel->insert($data);
            redirect('admin/userdetails_driver');
      }
    }  

    public function add(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Driver Details | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/driver/driveradd');
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
    }
    }

    public function edit($id){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Driver Details | Angelogistic Forwarder Corporation';

        $driv = $this->DriverModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/driver/driveredit',compact('driv'));
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
    }
    }

    public function delete($Product_ID){
        if($this->session->userdata('username') !=''){ 
        $driv = $this->DriverModel->getProd($Product_ID);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('admin/driver/driverdelete',compact('driv'));
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
    }
    } 

    public function del($id){
        $data= $this->input->post();
        unset($data['delete']);
        $driv = $this->uri->segment(4);
        $this->DriverModel->delete($id,$data);
        redirect('admin/userdetails_driver');
    }

    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);
            $this->form_validation->set_rules('drivernum', 'Driver #', 'required');
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
                $this->DriverModel->update($id, $data);
                redirect('admin/userdetails_driver');
            }
        }
    }
?>