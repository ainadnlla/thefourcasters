<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Staff_Customer extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('UserModel');
            $this->load->model('CustomerModel');
            $this->load->model('DriverModel');
            $this->load->model('ConductorModel');
            $this->load->model('TruckModel');
            $this->load->model('AdminModel');
            $this->load->model('BookingModel');
    }
    
    // STAFF SIDE - CUSTOMER CRUD

    public function insert(){
        $item = array (
            'img' => 'default.jpg',
            'name' => $this->input->post('name'),
            'password' => $this->input->post('password'),
            'repass' => $this->input->post('repass'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
        );


     /*   $data = $this->input->post();
        unset($data['add']);*/
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
            redirect('staff/customerdetails');
      }
    }  
    public function add(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/customer/customeradd');
        $this->load->view('include/footer');
    }else{
        redirect('staff/login');
    }
    }
    public function edit($id){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';
        $cust = $this->CustomerModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/customer/customeredit',compact('cust'));
        $this->load->view('include/footer');
    }else{
        redirect('staff/login');
    }
    }
    public function delete($id){
        if($this->session->userdata('username') !=''){ 
        $cust = $this->CustomerModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/staff_header');
        $this->load->view('staff/customer/customerdelete',compact('cust'));
        $this->load->view('include/footer');
    }else{
        redirect('staff/login');
    }
    } 
    
    public function del($id){
            $data= $this->input->post();
            unset($data['delete']);
            $cust = $this->uri->segment(4);
            $this->CustomerModel->delete($id,$data);
            redirect('staff/customerdetails');
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
                redirect('staff/customerdetails');
            }
        }
    
    public function homepage(){
               // if($this->session->userdata('email') !=''){   
        $data['title'] = 'Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/homepage');
        $this->load->view('include/footer');
            //     }else{
            //        redirect('staff/login');
            //    }
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
            
}
?>