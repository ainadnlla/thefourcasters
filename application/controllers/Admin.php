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
            $this->load->model('MaintenanceModel');
            $this->load->model("CalendarModel");
    }
//
//     function myFunction() {
//         var d = new Date();
//         var n = d.getFullYear();
//         document.getElementById("demo").innerHTML = n;

// ADMIN SIDE

	 public function logged(){
        $newdata = array(
            'name'  => $user->name,
            'username'     => $user->username,
            'logged_in' => TRUE,
            'isAdmin' => TRUE
    );
}

  
    public function homepage(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Angelogistic Forwarder Corporation';
       
        $this->load->config('myconfig');
        $emps =  $this->UserModel->getBook();
  
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('admin/homepage');
        $this->load->view('admin/graph');
        $this->load->view('admin/bookinglatest',compact('emps'));
        

       
    }else{
        redirect('login/admin');
    }
    }  
    public function truckdetails(){
        if($this->session->userdata('username') !=''){ 
            $data['title'] = 'Truck Details | Angelogistic Forwarder Corporation';
        
            $this->load->config('myconfig');
            $trucks =  $this->TruckModel->getItems();
            
            $this->load->view('include/header', $data);
            $this->load->view('include/header_nav');
            $this->load->view('include/footer');
            $this->load->view('admin/truckdetails',compact('trucks'));
        }else{
            redirect('login/admin');
        }
    }

    
    public function maintenance($id){
        if($this->session->userdata('username') !=''){ 
            $data['title'] = 'Truck Details | Angelogistic Forwarder Corporation';
    
            $this->load->config('myconfig');
            $main =  $this->MaintenanceModel->getProd($id);
            $truck = $this->TruckModel->getProd($id);

            $session_data = array(
                'status'  => $truck->status);
            $this->session->set_userdata($session_data);
            $mains =  $this->MaintenanceModel->getItems();
            $this->load->view('include/header', $data);
            $this->load->view('include/header_nav');
            $this->load->view('include/footer');
            $this->load->view('admin/truck/truckview',compact('truck'));
            $this->load->view('admin/maintenance',compact('mains'));
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
        redirect('login/admin');
    }
    }

// CALENDAR CONTROLLERS

    public function calendar(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Calendar | Angelogistic Forwarder Corporation';

        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav'); 
        $this->load->view('include/footer');
        $this->load->view('admin/calendar');
        
        
}else{
    redirect('login/admin');
}
    }  

    public function get_events()
    {
        // Our Start and End Dates
        $start = $this->input->get("start");
        $end = $this->input->get("end");
   
        $startdt = new DateTime('now'); // setup a local datetime
        $startdt->setTimestamp($start); // Set the date based on timestamp
        $start_format = $startdt->format('Y-m-d H:i:s');
   
        $enddt = new DateTime('now'); // setup a local datetime
        $enddt->setTimestamp($end); // Set the date based on timestamp
        $end_format = $enddt->format('Y-m-d H:i:s');
   
        $events = $this->CalendarModel->get_events($start_format, $end_format);
   
        $data_events = array();
   
        foreach($events->result() as $r) {
   
            $data_events[] = array(
                "id" => $r->id,
                "title" => $r->custname,
                "end" => $r->date,
                "start" => $r->date
            );
        }
   
        echo json_encode(array("events" => $data_events));
        exit();
    }


// END OF CALENDAR CONTROLLERS

    public function profile(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Profile | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/profile');
        $this->load->view('include/footer');
    }else{
        redirect('login/admin');
    }
    }

    public function userdetails_staff(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Staff Details | Angelogistic Forwarder Corporation';

        $this->load->config('myconfig');
        $emps =  $this->UserModel->getItems();
        
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('admin/userdetails_staff',compact('emps'));
    }else{
        redirect('login/admin');
    }
    }


    public function userdetails_customer(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Customer Details | Angelogistic Forwarder Corporation';

        
        $this->load->config('myconfig');
        $custs = $this->CustomerModel->getItems();
        
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('admin/userdetails_customer',compact('custs'));
    }else{
        redirect('login/admin');
    }
    }

    public function userdetails_driver(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Driver Details | Angelogistic Forwarder Corporation';

        $this->load->config('myconfig');
        $drivs = $this->DriverModel->getItems();
        
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('admin/userdetails_driver',compact('drivs'));
    }else{
        redirect('login/admin');
    }
    }

    public function userdetails_helper(){
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'Helper Details | Angelogistic Forwarder Corporation';

        $this->load->config('myconfig');
        $helps = $this->HelperModel->getItems();
        
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('admin/userdetails_helper',compact('helps'));
    }else{
        redirect('login/admin');
    }
    }

    public function booking(){
        if($this->session->userdata('username') !=''){ 
            $data['title'] = 'Booking Information | Angelogistic Forwarder Corporation';

            $this->load->config('myconfig');
            $books =  $this->BookingModel->getItems();

            $this->load->view('include/header', $data);
            $this->load->view('include/header_nav');
            $this->load->view('include/footer');
            $this->load->view('admin/booking',compact('books'));
        }else{
            redirect('login/admin');
        }
    } 
    public function reports(){
        if($this->session->userdata('username') !=''){ 
            $data['title'] = 'Reports Information | Angelogistic Forwarder Corporation';

            $month = $this->input->GET('month');
            $year = $this->input->GET('year');  

            $reps=  $this->UserModel->getreport($month, $year);
            $this->session->set_flashdata('month', $month);
            $this->session->set_flashdata('year', $year);

            $this->load->config('myconfig');
            $this->load->view('include/header', $data);
            $this->load->view('include/header_nav');
            $this->load->view('include/footer');
            $this->load->view('admin/reports',compact('reps'));
        }else{
            redirect('login/admin');
        }
    }
    public function toprint(){
        if($this->session->userdata('username') !=''){ 
            $data['title'] = 'Reports Information | Angelogistic Forwarder Corporation';
            
            $month = $this->session->flashdata('month');
            $year = $this->session->flashdata('year');
            $reps =  $this->UserModel->getreport($month,$year);
            $data['totalprice'] = $this->UserModel->get_sum();
            
            $this->load->config('myconfig');
            $this->load->view('include/header', $data);
            $this->load->view('include/footer');
            $this->load->view('admin/toprint',compact('reps',$data));
            
        }else{
            redirect('login/admin');
        }
     
    }
    public function pdf()
    {
        if($this->session->userdata('username') !=''){ 
        $data['title'] = 'PDF | Angelogistic Forwarder Corporation';
        $month = $this->session->flashdata('month');
        $year = $this->session->flashdata('year');
        $reps =  $this->UserModel->getreport($month,$year);
        $data['totalprice'] = $this->UserModel->get_sum();

        $this->load->config('myconfig');
        $this->load->helper('pdf_helper');
     //  $this->load->view('admin/topdf');
        $this->load->view('admin/pdfreport', compact('reps'));

        }else{
            redirect('login/admin');
        }
    }

    public function sample(){
        if($this->session->userdata('username') !=''){ 
        $month = $this->input->GET('month');
        $year = $this->input->GET('year');  

        $reps=  $this->UserModel->getreport($month, $year);
        $this->session->set_flashdata('month', $month);
        $this->session->set_flashdata('year', $year);

        $this->load->config('myconfig');
        $this->load->view('include/header');
        $this->load->view('include/footer');
        $this->load->view('admin/sampleshit',compact('reps'));
        }else{
            redirect('login/admin');
        }
    }

    public function error(){
        $data['title'] = '404 Error | Angelogistic Forwarder Corporation';

        $this->load->config('myconfig');
        $this->load->view('include/header', $data);
        $this->load->view('include/footer');
        $this->load->view('admin/error');
    }
}
?>