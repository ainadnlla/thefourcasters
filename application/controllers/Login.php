<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

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
        $this->load->model('MaintenanceModel');
    }

    public function admin(){
         $this->load->view('include/login_header');
         $this->load->view('admin/login');
         $this->load->view('include/footer');
        if($this->session->userdata('username') !=''){ 
             redirect('admin/homepage');
        }else{} 
    }
  
    public function signinadmin(){
        $admin = array(
        'username' => $this->input->post('username'),
        'password' => sha1($this->input->post('password')));
        $user = $this->AdminModel->getAdmin($admin);

        if(!$user == null){
            $newdata = array(
                'name'  => $user->name,
                'username' => $user->username,
                'logged_in' => TRUE,
                'isAdmin' => TRUE
            );
            $this->session->set_userdata($newdata);
            redirect('admin/homepage');
        }
        else{
            $this->session->set_flashdata('error','Invalid Username or Password');  
            redirect('login/admin');
        }
    }
 
    public function logoutadmin(){
        $this->session->sess_destroy();
        redirect('login/admin');
    }

    //STAFF LOGIN
    public function staff(){
        $data['title'] = 'Angelogistic Forwarder Corporation';
        $this->load->view('include/login_header');
        $this->load->view('staff/login');
        $this->load->view('include/footer');
        if($this->session->userdata('email') !=''){ 
            redirect('staff/homepage');
        }else{} 
    }

    public function signinstaff(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $user = $this->AdminModel->getStaff($email, $password);
        
        if(!($user == null)){             
            if($user->status == 1) {
                $session_data = array(
                    'name'  => $user->fname,
                    'picpath' => $user->img,
                    'email'     => $email,
                    'priv' => $user->priv,
                    'logged_in' => TRUE,
                    'isAdmin' => TRUE
                    );
                $this->session->set_userdata($session_data);
                redirect('staff/homepage');
            }
            else{
                $this->session->set_flashdata('error','Unauthorized Access');
                redirect('login/staff');
            }
        }else {
            $this->session->set_flashdata('error','Invalid Username or Password');
            redirect('login/staff');
        }
    }
       
    public function logoutstaff(){
        $this->session->sess_destroy();
        redirect('login/staff');
    }

    
    public function customer(){
        $this->load->view('include/login_header');
        $this->load->view('customer/login');
        $this->load->view('include/footer');
        if($this->session->userdata('emailad') !=''){ 
            redirect('customer/booking');
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
                    'since'  => $user->date,
                    'contact'  => $user->contact,
                    'emailad'  => $email,
                    'password' => $password,
                    'repass'  => $user->repass,
                    'logged_in' => TRUE,
                    'isAdmin' => TRUE
                );
                $this->session->set_userdata($session_data);
                redirect('customer/booking');
            }
            else{
                $this->session->set_flashdata('error','Unauthorized Access');
                redirect('login/customer');
            }
        }else {
            $this->session->set_flashdata('error','Invalid Username or Password');
        redirect('login/customer');
        }
    }

    public function logoutcustomer(){
        $this->session->sess_destroy();
        redirect('login/customer');
    }
}
?>