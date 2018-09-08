<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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

// ADMIN SIDE - STAFF CRUD

    public function insert(){
        $data = array (
            'img' => 'default.jpg',
            'fname' => $this->input->post('fname'),
            'mname' => $this->input->post('mname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'repass' => $this->input->post('repass'),
            'birthday' => $this->input->post('birthday'),
            'gender' => $this->input->post('gender'),
            'contact' => $this->input->post('contact'),
            'date' => $this->input->post('date'),
            // 'user_id'=> $this->input->post('user_type')
        );
      /*  $data = $this->input->post();
        unset($data['add']);*/

            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
           // $this->form_validation->set_rules('birthday', 'Birth Date', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('date', 'Employment Date', 'required');

      if ($this->form_validation->run() == FALSE)
      {
          $this->add();
      }
      else
      {
            $this->UserModel->insert($data);
            redirect('admin/userdetails_staff');
      }
    }

    public function add(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Staff Details | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/staff/staffadd');
        $this->load->view('include/footer');
        
}else{
    redirect('admin/login');
}
    }

    public function edit($id){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Staff Details | Angelogistic Forwarder Corporation';

        $emp = $this->UserModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/staff/staffedit',compact('emp'));
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
    }
    }

    public function delete($id){
        if($this->session->userdata('username') !=''){ 
        $emp = $this->UserModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('admin/staff/staffdelete',compact('emp'));
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
    }
    } 

    public function del($id){

        $data= $this->input->post();
        unset($data['delete']);
        $emp =$this->uri->segment(4);
        $this->UserModel->delete($id,$data);
        redirect('admin/userdetails_staff');
     }

    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);

            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            // $this->form_validation->set_rules('img', 'Image', 'required');
            
            if ($this->form_validation->run() == FALSE)
            {
                $this->edit($id);
            }
            else
            {
                $this->UserModel->update($id, $data);
                redirect('admin/userdetails_staff');
            }
        }

        public function do_upload(){  
        $id = $this->input->post('id');
        $data['emps'] = $this->UserModel->getItem($id);
        $config['upload_path']          = './images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;
        $config['file_name']           = $this->input->post('img');
    
        $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('itemfile'))
            {
                $error = array('error' => $this->upload->display_errors());
    
                $this->debug($error);
            }
            else
            {
                $upload_data = $this->upload->data();
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
                $this->UserModel->insert($data);
                $this->index();
            }
        }


// ADMIN SIDE

	public function login(){

        $this->load->view('include/login_header');
        $this->load->view('admin/login');
        $this->load->view('include/footer');
        if($this->session->userdata('username') !=''){ 
            redirect('admin/homepage');
        }else{
         
        } 
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
			redirect('admin/homepage');
		}
		else{
            $this->session->set_flashdata('error','Invalid Username and Password');
		redirect('admin/login');
			
		}
	}

    public function logout(){
		$this->session->sess_destroy();
		redirect('admin/login');
    }

    public function homepage(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('admin/homepage',compact('emps'));
    }else{
        redirect('admin/login');
    }
    }  
    public function truckdetails($offset=0){
        if($this->session->userdata('username') !=''){ 
            $data['title'] = 'Truck Details | Angelogistic Forwarder Corporation';

            $this->load->library('pagination');
            $norecs = 5;
    
            $config['base_url'] = base_url().'admin/truckdetails/';
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
            $this->load->view('admin/truckdetails',compact('trucks'));
            $this->load->view('include/footer');
        }else{
            redirect('admin/login');
        }
    } 

    public function userprivelege($offset=0){
        if($this->session->userdata('username') !=''){ 
            $data['title'] = 'User Privelege | Angelogistic Forwarder Corporation';
            $this->load->library('pagination');
            $norecs = 5;
    
            $config['base_url'] = base_url().'admin/userprivelege/';
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
            $this->load->view('admin/userprivelege',compact('emps'));
        }else{
                redirect('admin/login');
            }
    } 

    public function truckgps(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Truck Location | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/truckgps');
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
    }
    }

    public function calendar(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Calendar | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/header_nav'); 
        $this->load->view('admin/calendar');
        $this->load->view('include/calendar_foot');
        
}else{
    redirect('admin/login');
}
    }  

    public function inbox(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Inbox | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/header_nav'); 
        $this->load->view('admin/inbox');
        $this->load->view('include/calendar_foot');
        
}else{
    redirect('admin/login');
}
    }  

    public function compose(){  
        
        if($this->session->userdata('username') !=''){    
        $data['title'] = 'Compose | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/header_nav'); 
        $this->load->view('admin/compose');
        $this->load->view('include/calendar_foot');
    }else{
        redirect('admin/login');
    }
    }  

    public function stats(){
        
        if($this->session->userdata('username') !=''){    
        $data['title'] = 'Compose | Angelogistic Forwarder Corporation';
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('admin/stats');
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
    }
    }

    public function profile(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Profile | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/profile');
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
    }
    }
 
    public function userdetails($offset=0){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'User Accounts | Angelogistic Forwarder Corporation';
                
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/userdetails');
        $this->load->view('include/footer');
    }else{
        redirect('admin/login');
    }
    }

    public function userdetails_staff($offset=0){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Staff Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'admin/userdetails_staff/';
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
        $this->load->view('admin/userdetails_staff',compact('emps'));
    }else{
        redirect('admin/login');
    }
    }


    public function userdetails_customer($offset=0){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'admin/userdetails_customer/';
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
        $this->load->view('admin/userdetails_customer',compact('custs'));
    }else{
        redirect('admin/login');
    }
    }

    public function userdetails_driver($offset=0){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Driver Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'admin/userdetails_driver/';
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
        $this->load->view('admin/userdetails_driver',compact('drivs'));
    }else{
        redirect('admin/login');
    }
    }

    public function userdetails_helper($offset=0){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Helper Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'admin/userdetails_Helper/';
        $config['total_rows'] = $this->HelperModel->getNumRecs();
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
        $helps = $this->HelperModel->getItems($norecs, $offset);
        
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('admin/userdetails_helper',compact('helps'));
    }else{
        redirect('admin/login');
    }
    }

    public function booking($offset=0){
        if($this->session->userdata('username') !=''){ 
            $data['title'] = 'Booking Information | Angelogistic Forwarder Corporation';

            $this->load->library('pagination');
            $norecs = 5;
    
            $config['base_url'] = base_url().'admin/booking/';
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
            $this->load->view('include/header_nav');
            $this->load->view('admin/booking',compact('books'));
            $this->load->view('include/footer');
        }else{
            redirect('admin/login');
        }
    } 
    }
?>