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
            $this->load->helper('captcha');
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
            $this->form_validation->set_rules('name', 'Customer/Brokerage', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('cust_type', 'Customer Type', 'required');
            $this->form_validation->set_rules('date', 'Expiration Date', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');
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
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/customer/customeradd');
        $this->load->view('include/footer');
        
    }else{
        redirect('login/admin');
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
        redirect('login/admin');
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
        redirect('login/admin');
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
        $this->form_validation->set_rules('date', 'Expiration Date', 'required');
        $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');            
        
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
        $config['max_size']             = 20000;
        $config['max_width']            = 20000;
        $config['max_height']           = 10000;
        $config['file_name']           = $this->input->post('img');
    
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('file_name'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->debug($error);
        }
        else
        {   
            $data['img'] = $this->upload->data();
            $this->Customerodel->update($id,array('img' => $data['file_name']));
        }
    }

//CUSTOMER SIDE

    public function profile(){
        if($this->session->userdata('emailad') !=''){
            $data['title'] = 'Profile | Angelogistic Forwarder Corporation';

            $cust = $this->session->userdata();
            $this->load->view('include/header', $data);
            $this->load->view('include/customer_header');
            $this->load->view('customer/profile');
            $this->load->view('include/footer');
        }else{
            redirect('login/customer');
        }
    }  

    public function booking(){
         if($this->session->userdata('emailad') !=''){ 
            $data['title'] = 'Booking Information | Angelogistic Forwarder Corporation';

            $this->load->config('myconfig');
            $books =  $this->BookingModel->getCustBook();

            $this->load->view('include/header', $data);
            $this->load->view('include/customer_header');
            $this->load->view('include/footer');
            $this->load->view('customer/booking',compact('books'));
            
        }else{
             redirect('login/customer');
         }
    } 

    public function logistics(){
        $data['title'] = 'Logistics Tracking | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/customer_header');
        $this->load->view('include/footer');
        $this->load->view('customer/timeline');
            }

}
?>