<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Helper extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('UserModel');
            $this->load->model('CustomerModel');
            $this->load->model('DriverModel');
            $this->load->model('TruckModel');
            $this->load->model('AdminModel');
            $this->load->model('BookingModel');
            $this->load->model('HelperModel');
    }

// ADMIN SIDE - CRUD HELPER

    public function logged(){
        $newdata = array(
            'name'  => $user->name,
            'username'     => $user->username,
            'logged_in' => TRUE,
            'isAdmin' => TRUE
    );
    $this->session->set_userdata($newdata);
    }

    public function insert(){
        $data = array (
            'img' => 'default.jpg',
            'driver_no' => $this->input->post('driver_no'),
            'expire' => $this->input->post('expire'),
            'fname' => $this->input->post('fname'),
            'mname' => $this->input->post('mname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'repass' => $this->input->post('repass'),
            'birthday' => $this->input->post('birthday'),
            'gender' => $this->input->post('gender'),
            'contact' => $this->input->post('contact'),
            'experience' => $this->input->post('experience'),
            'date' => $this->input->post('date'), 
            'timein' =>$this->input->post('timein'),
            'timeout' => $this->input->post('timeout'),
            'weekday'=> implode(",", $this->input->post('weekday'))   
                   
        );

    /*    $data = $this->input->post();
        unset($data['add']); */
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('birthday', 'Birth Day', 'required');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');
            $this->form_validation->set_rules('date', 'Employement Date', 'required');
            $this->form_validation->set_rules('experience', 'Years of Experience', 'required');
            $this->form_validation->set_rules('weekday', 'Weekdays', 'required');
            $this->form_validation->set_rules('timein', 'Time In', 'required');
            $this->form_validation->set_rules('timeout', 'Time Out', 'required');
    

      if ($this->form_validation->run() == FALSE)
      {
          $this->add();
      }
      else
      {
            $this->HelperModel->insert($data);
            redirect('admin/userdetails_helper');
      }
    }  
    public function add(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Helper Details | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/helper/helperadd');
        $this->load->view('include/footer');
    }else{
        redirect('login/admin');
    }
    }
    public function edit($id){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Helper Details | Angelogistic Forwarder Corporation';
        $help = $this->HelperModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/helper/helperedit',compact('help'));
        $this->load->view('include/footer');
    }else{
        redirect('login/admin');
    }
    }
    public function delete($Product_ID){
        if($this->session->userdata('username') !=''){ 
        $help = $this->HelperModel->getProd($Product_ID);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('admin/helper/helperdelete',compact('help'));
        $this->load->view('include/footer');
    }else{
        redirect('login/admin');
    }
    } 
    public function del($id){
        $data= $this->input->post();
        unset($data['delete']);
        $helper = $this->uri->segment(4);
        $this->HelperModel->delete($id,$data);
        redirect('admin/userdetails_helper');
    }

    public function update($id){
        $data = array (
            'img' => $this->input->post('img'),
            'driver_no' => $this->input->post('driver_no'),
            'expire' => $this->input->post('expire'),
            'fname' => $this->input->post('fname'),
            'mname' => $this->input->post('mname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'repass' => $this->input->post('repass'),
            'birthday' => $this->input->post('birthday'),
            'gender' => $this->input->post('gender'),
            'contact' => $this->input->post('contact'),
            'experience' => $this->input->post('experience'),
            'date' => $this->input->post('date'),            
            'timein' => $this->input->post('timein'),
            'timeout' => $this->input->post('timeout'),
            'status' => $this->input->post('status'),
            'weekday'=> implode(",", $this->input->post('weekday'))
        );
        unset($data['submit']); 
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'required');
        $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
        $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');
        $this->form_validation->set_rules('birthday', 'Birth Day', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('date', 'Employement Date', 'required');
        $this->form_validation->set_rules('experience', 'Years of Experience', 'required');
        $this->form_validation->set_rules('timein', 'Time In', 'required');
        $this->form_validation->set_rules('timeout', 'Time Out', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->edit($id);
            }
            else
            {
                $this->HelperModel->update($id, $data);
                redirect('admin/userdetails_helper');
            }
        }

    public function do_upload(){  
        $id = $this->input->post('id');
        $data['help'] = $this->HelperModel->getItem($id);
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
            $this->HelperModel->update($id,array('img' => $data['file_name']));
        }
    }
    
    }
?>