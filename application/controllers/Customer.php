<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
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
    
    public function userdetails_customer($offset=0){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'admin/userdetails_customer/';
        $config['total_rows'] = $this->CustomerModel->getNumRecs();
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
        $custs = $this->CustomerModel->getItems($norecs, $offset);
        
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('admin/userdetails',compact('custs'));
    }else{
        redirect('admin/login');
    }
    }

    public function insert(){
        $data = $this->input->post();
        unset($data['add']);

            $this->form_validation->set_rules('name', 'First Name', 'required');
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
            $this->CustomerModel->insert($data);
            redirect('admin/userdetails_customer');
      }
    }  

    public function add(){
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/customer/customeradd');
        $this->load->view('include/footer');
    }

    public function edit($id){
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';

        $cust = $this->CustomerModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/customer/customeredit',compact('cust'));
        $this->load->view('include/footer');
    }

    public function delete($id){
        $cust = $this->CustomerModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('admin/customer/customerdelete',compact('cust'));
        $this->load->view('include/footer');
    } 
    
    public function del($id){
            $data= $this->input->post();
            unset($data['delete']);
            $cust = $this->uri->segment(4);
            $this->CustomerModel->delete($id,$data);
            redirect('admin/userdetails_customer');
     }

    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);

            $this->form_validation->set_rules('name', 'Customer/Brokerage', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric');
            
            if ($this->form_validation->run() == FALSE)
            {
                $this->edit($id);
            }
            else
            {
                $this->CustomerModel->update($id, $data);
                redirect('admin/userdetails_customer');
            }
        }
        
        
     public function login(){
            $data['title'] = 'Angelogistic Forwarder Corporation';
            $this->load->view('include/admin_header');
            $this->load->view('customer/login');
            $this->load->view('include/admin_footer');
            if($this->session->userdata('email') !=''){ 
                    redirect('customer/homepage');
            }else{
                 
            } 
            }
            public function signin(){
                   $email=$this->input->post('email');
                   $password=$this->input->post('password');
                   $user = $this->AdminModel->getCustomer($email,$password);
                   if(!$user == null){
                    
                    
                                $session_data = array(
                                        'email'     => $email,
                                        'logged_in' => TRUE,
                                        'isAdmin' => TRUE
                                );
                    
                                $this->session->set_userdata($session_data);
                                redirect('customer/homepage');
                            }else{
                                $this->session->set_flashdata('error','Invalid Username and Password');
                       redirect('customer/login');
                   }
                   
            
            } 
               public function homepage(){
               // if($this->session->userdata('email') !=''){   
                $data['title'] = 'Angelogistic Forwarder Corporation';
                $this->load->view('include/header', $data);
                $this->load->view('include/staff_header');
                $this->load->view('customer/homepage');
                $this->load->view('include/footer');
            //     }else{
            //        redirect('staff/login');
            //    }
               }
               
            

}
?>