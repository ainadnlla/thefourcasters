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

        $this->load->view('include/header', $data);
        // $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('staff/index');
    }  
    public function table($offset=0){
            $data['title'] = 'Truck Details | Angelogistic Forwarder Corporation';

            $this->load->library('pagination');
            $norecs = 5;
    
            $config['base_url'] = base_url().'user/table/';
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
            $this->load->view('include/header_nav');
            $this->load->view('staff/table',compact('trucks'));
            $this->load->view('include/footer');
       
    } 

    public function userprivelege($offset=0){
            $data['title'] = 'User Privelege | Angelogistic Forwarder Corporation';
            $this->load->library('pagination');
            $norecs = 5;
    
            $config['base_url'] = base_url().'user/userprivelege/';
            $config['total_rows'] = $this->UserModel->getNumRecs();
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
            $emps =  $this->UserModel->getItems($norecs, $offset);
            
            $this->load->view('include/header', $data);
            $this->load->view('include/header_nav');
            $this->load->view('include/footer');
            $this->load->view('staff/userprivelege',compact('emps'));
    } 

    public function truckgps(){
        $data['title'] = 'Truck Location | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('staff/truckgps');
        $this->load->view('include/footer');
    }

    public function truckdelivery(){   
        $data['title'] = 'Truck Delivery | Angelogistic Forwarder Corporation';
  
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('adminf/truckdelivery');
        $this->load->view('include/footer');
    }

    public function calendar(){
        $data['title'] = 'Calendar | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/header_nav'); 
        $this->load->view('adminf/calendar');
        $this->load->view('include/calendar_foot');
    }  

    public function inbox(){
        $data['title'] = 'Inbox | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/header_nav'); 
        $this->load->view('adminf/inbox');
        $this->load->view('include/calendar_foot');
    }  

    public function compose(){     
        $data['title'] = 'Compose | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/header_nav'); 
        $this->load->view('adminf/compose');
        $this->load->view('include/calendar_foot');
    }  

    public function stats(){
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('adminf/stats');
        $this->load->view('include/footer');
    }

    public function profile(){
        $data['title'] = 'Profile | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('adminf/profile');
        $this->load->view('include/footer');
    }
 
    public function userdetails($offset=0){
        $data['title'] = 'User Details | Angelogistic Forwarder Corporation';
                
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('adminf/userdetails');
        $this->load->view('include/footer');
    }

    public function userdetails_staff($offset=0){
        $data['title'] = 'Staff Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'user/userdetails_staff/';
        $config['total_rows'] = $this->UserModel->getNumRecs();
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
        $emps =  $this->UserModel->getItems($norecs, $offset);
        
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('adminf/userdetails_staff',compact('emps'));
    }


    public function userdetails_customer($offset=0){
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'user/userdetails_customer/';
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
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('adminf/userdetails_customer',compact('custs'));
    }

    public function userdetails_driver($offset=0){
        $data['title'] = 'Driver Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'user/userdetails_driver/';
        $config['total_rows'] = $this->DriverModel->getNumRecs();
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
        $drivs = $this->DriverModel->getItems($norecs, $offset);
        
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('adminf/userdetails_driver',compact('drivs'));
    }

    public function userdetails_conductor($offset=0){
        $data['title'] = 'Driver Helper Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'user/userdetails_conductor/';
        $config['total_rows'] = $this->ConductorModel->getNumRecs();
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
        $conds = $this->ConductorModel->getItems($norecs, $offset);
        
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('adminf/userdetails_conductor',compact('conds'));
    }

    public function view($id){
        $data['title'] = 'Staff Details | Angelogistic Forwarder Corporation';

        $emp = $this->UserModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('adminf/staff/staffview',compact('emp'));
        $this->load->view('include/footer');
    }
 
    public function insert(){
        $data = $this->input->post();
        unset($data['add']);

            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric');
            $this->form_validation->set_rules('gender', 'Gender', 'required');

      if ($this->form_validation->run() == FALSE)
      {
          $this->add();
      }
      else
      {
            $this->UserModel->insert($data);
            redirect('user/userdetails_staff');
      }
    }

    public function add(){
        $data['title'] = 'Staff Details | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('adminf/staff/staffadd');
        $this->load->view('include/footer');
    }

    public function edit($id){
        $data['title'] = 'Staff Details | Angelogistic Forwarder Corporation';

        $emp = $this->UserModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('adminf/staff/staffedit',compact('emp'));
        $this->load->view('include/footer');
    }

    public function delete($id){
        $emp = $this->UserModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('adminf/staff/staffdelete',compact('emp'));
        $this->load->view('include/footer');
    } 

    public function del($id){

        $data= $this->input->post();
        unset($data['delete']);
        $emp =$this->uri->segment(4);
        $this->UserModel->delete($id,$data);
        redirect('user/userdetails_staff');
     }

    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);

            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            
            if ($this->form_validation->run() == FALSE)
            {
                $this->edit($id);
            }
            else
            {
                $this->UserModel->update($id, $data);
                redirect('user/userdetails_staff');
            }
        }

    }
?>