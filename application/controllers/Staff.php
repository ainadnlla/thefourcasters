<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
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
            $this->load->helper('captcha');
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
        'status' => $this->input->post('status'),
        'birthday' => $this->input->post('birthday'),
        'gender' => $this->input->post('gender'),
        'contact' => $this->input->post('contact'),
        'date' => $this->input->post('date'),
    );

        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'required');
        $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
        $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('birthday', 'Birth Date', 'required');
        $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');
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
    $this->form_validation->set_rules('email', 'Email Address', 'required');
    $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
    $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('birthday', 'Birth Date', 'required');
    $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');
    $this->form_validation->set_rules('email', 'Email Address', 'required');
    $this->form_validation->set_rules('date', 'Employment Date', 'required');
        
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
            $this->UserModel->update($id,array('img' => $data['file_name']));
        }
    }
  
// STAFF SIDE
public function logged(){
    $session_data = array(
        'name'  => $user->fname,
        'picpath' => $user->img,
        'email'     => $email,
        'priv' => $user->priv,
        'logged_in' => TRUE,
        'isAdmin' => TRUE
        );
}

    public function homepage(){
        if($this->session->userdata('email') !=''){  

            $data['title'] = 'Angelogistic Forwarder Corporation';
            
             $this->load->config('myconfig');
             $emps =  $this->UserModel->getBook();
       
             $this->load->view('include/header', $data);
             $this->load->view('include/staff_header');
             $this->load->view('include/footer');
             $this->load->view('staff/homepage');
             $this->load->view('admin/graph');
             $this->load->view('staff/bookinglatest',compact('emps'));
            
           
        }else{
            redirect('login/staff');
        }
    }

    public function truckdetails($offset=0){
        if($this->session->userdata('email') !=''){  
            if($this->session->userdata('priv') =='3'OR $this->session->userdata('priv')=='1' ){
                
        $data['title'] = 'Truck Details | Angelogistic Forwarder Corporation';

        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'staff/truckdetails/';
        $config['total_rows'] = $this->TruckModel->getNumRecs();
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
        $trucks =  $this->TruckModel->getItems($norecs, $offset);

        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/truckdetails', compact('trucks'));
        $this->load->view('include/footer');
    } else{
        redirect('staff/homepage');
    }        
    }else{
        redirect('login/staff');
    }
    }

    public function customerdetails(){
      
        if($this->session->userdata('email') !=''){
            if($this->session->userdata('priv') =='5' OR $this->session->userdata('priv')=='1') {
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';

       

        $this->load->config('myconfig');
        $custs = $this->CustomerModel->getItems();
        
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('include/footer');
        $this->load->view('staff/customerdetails',compact('custs'));
            
             } else{
                redirect('staff/homepage');
              
          }    
    }else{
            redirect('login/staff');
        }
    }
    public function driverdetails(){
            if($this->session->userdata('email') !=''){ 
                if($this->session->userdata('priv') =='4' OR $this->session->userdata('priv')=='1') {
            $data['title'] = 'Driver Details | Angelogistic Forwarder Corporation';
    
        
            $this->load->config('myconfig');
            $drivs = $this->DriverModel->getItems();
            
            $this->load->view('include/header', $data);
            $this->load->view('include/staff_header');
            $this->load->view('include/footer');
            $this->load->view('staff/driverdetails',compact('drivs'));
                }else{
                    redirect('staff/homepage');
                }
        }else{
            redirect('login/staff');
        }
        }
    public function truckgps(){
        if($this->session->userdata('email') !=''){
        $data['title'] = 'Truck Location | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/truckgps');
        $this->load->view('include/footer');
        }else{
            redirect('login/staff');
        }
    }

    public function stat(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Truck Location | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/stats');
        $this->load->view('include/footer');
    }else{
        redirect('login/staff');
        }
    }

    public function calendar(){
        if($this->session->userdata('email') !=''){
        $data['title'] = 'Calendar | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/staff_header'); 
        $this->load->view('staff/calendar');
        $this->load->view('include/calendar_foot');
        }else{
            redirect('login/staff');
        }
    }  

    public function inbox(){
        if($this->session->userdata('email') !=''){
        $data['title'] = 'Inbox | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/staff_header'); 
        $this->load->view('staff/inbox');
        $this->load->view('include/calendar_foot');
        }else{
            redirect('login/staff');
        }
    }  

    public function compose(){   
        if($this->session->userdata('email') !=''){
        $data['title'] = 'Compose | Angelogistic Forwarder Corporation';
        $this->load->view('include/calendar_head', $data);
        $this->load->view('include/staff_header'); 
        $this->load->view('staff/compose');
        $this->load->view('include/calendar_foot');
        }else{
            redirect('login/staff');
        }
    }

    public function booking(){
        if($this->session->userdata('email') !=''){ 
            if($this->session->userdata('priv') =='1'OR $this->session->userdata('priv')=='2') {
                
            $data['title'] = 'Booking Information | Angelogistic Forwarder Corporation';
    
            $this->load->config('myconfig');
            $books =  $this->BookingModel->getItems();

            $this->load->view('include/header', $data);
            $this->load->view('include/staff_header');
            $this->load->view('include/footer');
            $this->load->view('staff/booking',compact('books'));
         
            }else{
                redirect('staff/homepage');
            }
        }else{
            redirect('login/staff');
        }
    }
    public function staff_registration(){
        $data['title'] = 'Staff Registration | Angelogistic Forwarder Corporation';
        
        $this->load->view('include/header',$data);
        $this->load->view('staff/staffregis');
        $this->load->view('include/footer');
          

      }
      public function registration(){
          
        $data = array (
            'img' => 'default.jpg',
            'fname' => $this->input->post('fname'),
            'mname' => $this->input->post('mname'),
            'lname' => $this->input->post('lname'),
            'password' => $this->input->post('password'),
            'repass' => $this->input->post('repass'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'gender' => $this->input->post('gender'),
            'date' => $this->input->post('date'),
            // 'user_id'=> $this->input->post('user_type')
        );
      /*  $data = $this->input->post();
        unset($data['add']);*/

            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');
            $this->form_validation->set_rules('gender', 'Gender', 'required');

      if ($this->form_validation->run() == FALSE)
      {
          $this->staff_registration();
      }
      else
      {
            $this->UserModel->regis($data);
            redirect('login/staff');
      }
      
    }
    //userdetails
    public function userdetails($offset=0){
        if($this->session->userdata('email') !=''){ 
        $data['title'] = 'User Accounts | Angelogistic Forwarder Corporation';
                
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/userdetails');
        $this->load->view('include/footer');
    }else{
        redirect('login/staff');
    }
    }
    //driver crud
    public function driverinsert(){
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
            'timein' => $this->input->post('timein'),
            'timeout' => $this->input->post('timeout')
        );

    /*    $data = $this->input->post();
        unset($data['add']); */
            $this->form_validation->set_rules('driver_no', 'License No.', 'required');
            $this->form_validation->set_rules('expire', 'License Expiry Date', 'required');
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('birthday', 'Birth Day', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');
            $this->form_validation->set_rules('experience', 'Years of Experience', 'required');

      if ($this->form_validation->run() == FALSE)
      {
          $this->driveradd();
      }
      else
      {
            $this->DriverModel->insert($data);
            redirect('staff/driverdetails');
      }
    }  
    public function driveradd(){
        if($this->session->userdata('email') !=''){ 
        $data['title'] = 'Driver Details | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/driver/driveradd');
        $this->load->view('include/footer');
    }else{
        redirect('login/staff');
    }
    }
    public function driveredit($id){
        if($this->session->userdata('email') !=''){ 
        $data['title'] = 'Driver Details | Angelogistic Forwarder Corporation';
        $driv = $this->DriverModel->getProd($id);       
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/driver/driveredit',compact('driv'));
        $this->load->view('include/footer');
    }else{
        redirect('login/staff');
    }
    }
    public function driverupdate($id){
        
   
      $data = $this->input->post();
           unset($data['submit']); 
           $this->form_validation->set_rules('img', 'Image', 'required');
           $this->form_validation->set_rules('driver_no', 'License No.', 'required');
           $this->form_validation->set_rules('expire', 'License Expiry Date', 'required');
           $this->form_validation->set_rules('fname', 'First Name', 'required');
           $this->form_validation->set_rules('lname', 'Last Name', 'required');
           $this->form_validation->set_rules('email', 'Email Address', 'required');
           $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
           $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
           $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');
           $this->form_validation->set_rules('experience', 'Years of Experience', 'required');
           $this->form_validation->set_rules('birthday', 'Birth Date', 'required');
           $this->form_validation->set_rules('timein', 'Time In', 'required');
           $this->form_validation->set_rules('timeout', 'Time Out', 'required');
           
           $weekdays = implode(',', $this->input->post('weekday'));
          echo $weekdays;
           $days = array(
               //'id'=> $this->input->get('id'),  //MALI TONG LINE
               'weekday'=> $weekdays
           );
          $this->db->insert('driver', $days);
   
               if ($this->form_validation->run() == FALSE)
               {
                   $this->driveredit($id);
               }
               else
               {
                   $this->DriverModel->update($id, $data);
                   redirect('staff/driverdetails');
               }    
           }
           //HELPER
           public function helperdetails(){
               
            if($this->session->userdata('email') !=''){ 
                if($this->session->userdata('priv') =='4' OR $this->session->userdata('priv')=='1') {
                
            $data['title'] = 'Helper Details | Angelogistic Forwarder Corporation';
           
            $this->load->config('myconfig');
            $helps = $this->HelperModel->getItems();
            
            $this->load->view('include/header', $data);
            $this->load->view('include/staff_header');
            $this->load->view('include/footer');
            $this->load->view('staff/helperdetails',compact('helps'));
                }else{
                    redirect('staff/homepage');
                }
    }else{
        redirect('login/staff');
    }
        }
        public function helperadd(){
            if($this->session->userdata('email') !=''){ 
            $data['title'] = 'Helper Details | Angelogistic Forwarder Corporation';
            $this->load->view('include/header', $data);
            $this->load->view('include/staff_header');
            $this->load->view('staff/helper/helperadd');
            $this->load->view('include/footer');
        }else{
            redirect('login/staff');
        }
        }
    public function helperinsert(){
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
            'date' => $this->input->post('date'),            
        );

    /*    $data = $this->input->post();
        unset($data['add']); */
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('birthday', 'Birth Day', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');
            $this->form_validation->set_rules('date', 'Employement Date', 'required');

      if ($this->form_validation->run() == FALSE)
      {
          $this->helperadd();
      }
      else
      {
            $this->HelperModel->insert($data);
            redirect('staff/helperdetails');
      }
    }  
    public function helperedit($id){
        if($this->session->userdata('email') !=''){ 
        $data['title'] = 'Helper Details | Angelogistic Forwarder Corporation';
        $help = $this->HelperModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/staff_header');
        $this->load->view('staff/helper/helperedit',compact('help'));
        $this->load->view('include/footer');
    }else{
        redirect('login/staff');
    }
    }
    public function helperupdate($id){
      $data = $this->input->post();
           unset($data['submit']); 
           $this->form_validation->set_rules('img', 'Image', 'required');
           $this->form_validation->set_rules('fname', 'First Name', 'required');
           $this->form_validation->set_rules('lname', 'Last Name', 'required');
           $this->form_validation->set_rules('email', 'Email Address', 'required');
           $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
           $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
           $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');
   
                   $days = implode(",", $this->input->post('weekday'));
                   $data = array(
                       'id'=> $this->input->post('id'),
                       'weekday'=> $days
                   );
   
               if ($this->form_validation->run() == FALSE)
               {
                   $this->helperedit($id);
               }
               else
               {
                   $this->HelperModel->update($id, $data);
                   redirect('staff/helperdetails');
               }
           }

    public function register(){

        $vals = array(	
            'img_path'      => './captcha/',
            'img_url'       => base_url().'captcha/',
            'img_width'     => '100',
            'img_height'    => 25,
            'expiration'    => 7200,
            'word_length'   => 5,
            'font_size'     => 20,
            'img_id'        => 'Imageid',
            'pool'          => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',

            // White background and border, black text and red grid
            'colors'        => array(
                    'background' => array(255, 255, 255),
                    'border' => array(255, 255, 255),
                    'text' => array(0, 0, 0),
                    'grid' => array(0, 0, 255)
            )
    );

    $cap = create_captcha($vals);
    $data2 = array(
            'captcha_time'  => $cap['time'],
            'ip_address'    => $this->input->ip_address(),
            'word'          => $cap['word']
    );

    $query = $this->db->insert_string('captcha', $data2);
    $this->db->query($query);

    $data['image'] = $cap['image'];
    $data['captchainput'] = '<input type="text" name="captcha" value="" class="form-control" placeholder="Enter Captcha">';

        $this->load->view('include/login_header');
        $this->load->view('staff/register', $data);
        $this->load->view('include/footer');
    }
        
    public function regis(){
        
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
        
                );
        
              /*  $data = $this->input->post();
                unset($data['add']); */
                $this->form_validation->set_rules('fname', 'First Name', 'required');
                $this->form_validation->set_rules('lname', 'Last Name', 'required');
                $this->form_validation->set_rules('email', 'Email Address', 'required');
                $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
                $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
                $this->form_validation->set_rules('gender', 'Gender', 'required');
                $this->form_validation->set_rules('birthday', 'Birth Date', 'required');
                $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric|exact_length[11]');
                $this->form_validation->set_rules('email', 'Email Address', 'required');
                $this->form_validation->set_rules('date', 'Employment Date', 'required');
              if ($this->form_validation->run() == FALSE)
              {
                  $this->register();
              }
              else
              {
                    $this->CustomerModel->signup($data);
                    redirect('staff/login');
              }
            }  
    

}
?>