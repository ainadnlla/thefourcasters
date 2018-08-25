<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('AdminModel');
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->helper(array('form', 'url'));
    }


    public function login(){

        $this->load->view('include/admin_header');
        $this->load->view('admin/login');
        $this->load->view('include/admin_footer');
    }

    public function signin(){
		$admin = array(
			'username' => $this->input->post('username'),
			'password' => sha1($this->input->post('password'))
			);

		$user = $this->AdminModel->getAdmin($admin);

		if(!$user == null){


			$newdata = array(
			        'name'  => $user->name,
			        'username'     => $user->username,
			        'logged_in' => TRUE,
			        'isAdmin' => TRUE
			);

			$this->session->set_userdata($newdata);
			redirect('user/homepage');
		}
		else{
redirect('staff/index');
			// $this->load->view('include/admin_header');
	        // $this->load->view('staff/index');
	        // $this->load->view('include/admin_footer');
		}
	}

    public function logout(){
		$this->session->sess_destroy();
		redirect('admin/login');
    }
}

?>