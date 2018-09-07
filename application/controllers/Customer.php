<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('UserModel');
            $this->load->model('CustomerModel');
            $this->load->model('DriverModel');
            $this->load->model('TruckModel');
            $this->load->model('AdminModel');
            $this->load->model('BookingModel');
    }

// ADMIN SIDE - CRUD CUSTOMER

    public function logged(){
        $newdata = array(
            'name'  => $user->name,
            'username'     => $user->username,
            'logged_in' => TRUE,
            'isAdmin' => TRUE
    );}
  
    public function insert(){

        $data = array (
            'img' => 'default.jpg',
            'name' => $this->input->post('name'),
            'password' => $this->input->post('password'),
            'repass' => $this->input->post('repass'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'cust_type' => $this->input->post('cust_type'),
            'date' => $this->input->post('date'),
            //'user_id' => $this->input->post('user_id')

        );

      /*  $data = $this->input->post();
        unset($data['add']); */
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
        if($this->session->userdata('emailad') !=''){ 
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/customer/customeradd');
        $this->load->view('include/footer');
        }else{
            redirect('customer/login');
        }
    }
    public function edit($id){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';
        $cust = $this->CustomerModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/customer/customeredit',compact('cust'));
        $this->load->view('include/footer');
        }else{
            redirect('admin/login');
        }
    }
    public function delete($id){
        if($this->session->userdata('username') !=''){ 
        $cust = $this->CustomerModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('admin/customer/customerdelete',compact('cust'));
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
        }
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
            $this->form_validation->set_rules('img', 'Image', 'required');
            
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
    
    public function do_upload(){  
        $id = $this->input->post('id');
        $data['cust'] = $this->CustomerModel->getItem($id);
        $config['upload_path']          = './images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;
        $config['file_name']            = $data['cust']->id;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('itemfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->debug($error);
        }
        else
        {
            $data = $this->upload->data();
            $this->CustomerModel->update($id,array('img' => $data['file_name']));
            $this->index();  
            /*    $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/'.$upload_data['file_name'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width']         = 100;
                $config['height']       = 100;
                $config['thumb_marker'] = '';
                $config['new_image'] = './uploads_thumbs/';
                $this->load->library('image_lib');
                $this->load->lib->initialize($config2);
                
                if ( ! $this->image_lib->resize())
                {
                    echo $this->image_lib->display_errors(); die();
                }
                $data['image']=$upload_data[file_name];
                $this->CustomerModel->insert($data);
                $this->index(); */
                }
        }

//CUSTOMER SIDE

    public function homepage(){
        if($this->session->userdata('emailad') !=''){ 
        $data['title'] = 'Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/customer_header');
        $this->load->view('customer/homepage');
        $this->load->view('include/footer');
       
        }else {
            redirect('customer/login');
        } 
        }

    public function login(){
        $data['title'] = 'Angelogistic Forwarder Corporation';
        $this->load->view('include/login_header');
        $this->load->view('customer/login');
        $this->load->view('include/footer');
        if($this->session->userdata('emailad') !=''){ 
                redirect('customer/homepage');
            }
            else {
            } 
        }
        
    public function signin(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $user = $this->CustomerModel->getCustomer($email,$password);

        if(!$user == null){
            if($user->status == 1){
            $session_data = array(
                'picpath' => $user->img,
                'name'=>$user->name,
                'cust'  => $user->cust_type,
                'emailad'     => $email,
                'logged_in' => TRUE,
                'isAdmin' => TRUE
            );
            $this->session->set_userdata($session_data);
            redirect('customer/homepage');
            }      
        }else{
            $this->session->set_flashdata('error','Invalid Username and Password');
            redirect('customer/login');
        }        
    } 
    public function logout(){
        $this->session->sess_destroy();
        redirect('customer/login');
    }

    public function inbox(){
        if($this->session->userdata('emailad') !=''){
            $data['title'] = 'Inbox | Angelogistic Forwarder Corporation';
            $this->load->view('include/calendar_head', $data);
            $this->load->view('include/customer_header'); 
            $this->load->view('customer/inbox');
            $this->load->view('include/calendar_foot');
        }else{
            redirect('customer/login');
        }
    }  
    
    public function compose(){   
        if($this->session->userdata('emailad') !=''){
            $data['title'] = 'Compose | Angelogistic Forwarder Corporation';
            $this->load->view('include/calendar_head', $data);
            $this->load->view('include/customer_header'); 
            $this->load->view('customer/compose');
            $this->load->view('include/calendar_foot');
        }else{
            redirect('customer/login');
        }
    }  
    
    public function calendar(){
        if($this->session->userdata('emailad') !=''){
            $data['title'] = 'Calendar | Angelogistic Forwarder Corporation';
            $this->load->view('include/calendar_head', $data);
            $this->load->view('include/customer_header'); 
            $this->load->view('customer/calendar');
            $this->load->view('include/calendar_foot');
        }else{
            redirect('customer/login');
        }
    }  

    public function booking($offset=0){
         if($this->session->userdata('emailad') !=''){ 
            $data['title'] = 'Booking Information | Angelogistic Forwarder Corporation';

            $this->load->library('pagination');
            $norecs = 5;
    
            $config['base_url'] = base_url().'customer/booking/';
            $config['total_rows'] = $this->BookingModel->getNumRecs();
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
            $books =  $this->BookingModel->getItems($norecs, $offset);

            $this->load->view('include/header', $data);
            $this->load->view('include/customer_header');
            $this->load->view('customer/booking',compact('books'));
            $this->load->view('include/footer');
        }else{
             redirect('customer/login');
         }
    } 
    public function registration(){
        $data['title'] = 'Customer Registration | Angelogistic Forwarder Corporation';
        
        $this->load->view('include/header',$data);
        $this->load->view('customer/customerregis');
        $this->load->view('include/footer');
    }
        
    public function regis(){
        
                $data = array (
                    'img' => 'default.jpg',
                    'name' => $this->input->post('name'),
                    'password' => $this->input->post('password'),
                    'repass' => $this->input->post('repass'),
                    'email' => $this->input->post('email'),
                    'contact' => $this->input->post('contact'),
                    'cust_type' => $this->input->post('cust_type'),
                    'date' => $this->input->post('date'),
                    //'user_id' => $this->input->post('user_id')
        
                );
        
              /*  $data = $this->input->post();
                unset($data['add']); */
                    $this->form_validation->set_rules('name', 'First Name', 'required');
                    $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
                    $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
                    $this->form_validation->set_rules('email', 'Email Address', 'required');
                    $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric');
              if ($this->form_validation->run() == FALSE)
              {
                  $this->registration();
              }
              else
              {
                    $this->CustomerModel->signup($data);
                    redirect('customer/login');
              }
            }  

}
?>