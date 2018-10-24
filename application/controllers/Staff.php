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
        $this->load->model('MaintenanceModel');
        $this->load->model("CalendarModel");
        $this->load->model("ChartModel");
        $this->load->model("ReportsModel");
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
    redirect('login/admin');
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
        redirect('login/admin');
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
        redirect('login/admin');
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
        $data['emps'] = $this->UserModel->getProd($id);
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
    $books =  $this->ReportsModel->getBook();
    //total booking status for curdate
    $accept =  $this->ChartModel->getBookingAccepted();
    $pending =  $this->ChartModel->getBookingPending();
    $deny =  $this->ChartModel->getBookingDeny();
    //Pie chart 
    $first = $this->ChartModel->getFirst();
    $second = $this ->ChartModel->getSecond();
    $third = $this->ChartModel->getThird();
    $fourth = $this->ChartModel->getFourth();
    $fifth = $this->ChartModel->getFifth();
    //Longest - Line Graph
    //First longest
    $date1 = $this->ChartModel->getFirstDate();
    $date1 = new DateTime($date1->date);
    $enddate1 = $this->ChartModel->getFirstDate();
    $enddate1 = new DateTime($enddate1->enddate);
    $days = date_diff($date1,$enddate1);
    //Second longest
    $date2 = $this->ChartModel->getSecondDate();
    $date2 = new DateTime($date2->date);
    $enddate2 = $this->ChartModel->getSecondDate();
    $enddate2 = new DateTime($enddate2->enddate);
    $days2 = date_diff($date2,$enddate2);
    //third longest
    $date3 = $this->ChartModel->getThirdDate();
    $date3 = new DateTime($date3->date);
    $enddate3 = $this->ChartModel->getThirdDate();
    $enddate3 = new DateTime($enddate3->enddate);
    $days3 = date_diff($date3,$enddate3);
    //fourth longest
    $date4 = $this->ChartModel->getFourthDate();
    $date4 = new DateTime($date4->date);
    $enddate4 = $this->ChartModel->getFourthDate();
    $enddate4 = new DateTime($enddate4->enddate);
    $days4 = date_diff($date4,$enddate4);
    //fifth longest
    $date5 = $this->ChartModel->getFifthDate();
    $date5 = new DateTime($date5->date);
    $enddate5 = $this->ChartModel->getFifthDate();
    $enddate5 = new DateTime($enddate5->enddate);
    $days5 = date_diff($date5,$enddate5);

    //first shortest
    $date6 = $this->ChartModel->getFirstEndDate();
    $date6 = new DateTime($date6->date);
    $enddate6 = $this->ChartModel->getFirstEndDate();
    $enddate6 = new DateTime($enddate6->enddate);
    $days6 = date_diff($date6,$enddate6);
    //Second shortest
    $date7 = $this->ChartModel->getSecondEndDate();
    $date7 = new DateTime($date7->date);
    $enddate7 = $this->ChartModel->getSecondEndDate();
    $enddate7 = new DateTime($enddate7->enddate);
    $days7 = date_diff($date7,$enddate7);
    //third shortest
    $date8 = $this->ChartModel->getThirdEndDate();
    $date8 = new DateTime($date8->date);
    $enddate8 = $this->ChartModel->getThirdEndDate();
    $enddate8 = new DateTime($enddate8->enddate);
    $days8 = date_diff($date8,$enddate8);
    //fourth shortest
    $date9 = $this->ChartModel->getFourthEndDate();
    $date9 = new DateTime($date9->date);
    $enddate9 = $this->ChartModel->getFourthEndDate();
    $enddate9 = new DateTime($enddate9->enddate);
    $days9 = date_diff($date9,$enddate9);
    //fifth shortest
    $date10 = $this->ChartModel->getFifthEndDate();
    $date10 = new DateTime($date10->date);
    $enddate10 = $this->ChartModel->getFifthEndDate();
    $enddate10 = new DateTime($enddate10->enddate);
    $days10 = date_diff($date10,$enddate10);

    $warning = $this->ChartModel->getFirstWarning();
    $warning2 = $this->ChartModel->getSecondWarning();
    $warning3 = $this->ChartModel->getThirdWarning();
    $warning4 = $this->ChartModel->getFourthWarning();
    $warning5 = $this->ChartModel->getFifthWarning();
    $warning6 = $this->ChartModel->getFirstEndWarning();
    $warning7 = $this->ChartModel->getSecondEndWarning();
    $warning8 = $this->ChartModel->getThirdEndWarning();
    $warning9 = $this->ChartModel->getFourthEndWarning();
    $warning10 = $this->ChartModel->getFifthEndWarning();

    $this->load->view('include/header', $data);
    $this->load->view('include/staff_header');
    $this->load->view('include/footer');
    $this->load->view('staff/homepage');
    $this->load->view('staff/graph',
    compact('accept', 'pending','deny', 'first', 'second','third','fourth','fifth',
    'days', 'days2', 'days3','days4','days5', 'days6', 'days7', 'days8', 'days9', 'days10',
    'warning', 'warning2','warning3','warning4','warning5','warning6', 'warning7','warning8','warning9','warning10'));
    $this->load->view('staff/bookinglatest',compact('books'));

    }else{
        redirect('login/staff');
    }
    }  


    public function truckdetails(){
        if($this->session->userdata('email') !=''){  
            if($this->session->userdata('priv') =='3'OR $this->session->userdata('priv')=='1' ){
            $data['title'] = 'Truck Details | Angelogistic Forwarder Corporation';
        
            $this->load->config('myconfig');
            $trucks =  $this->TruckModel->getItems();
            
            $this->load->view('include/header', $data);
            $this->load->view('include/staff_header');
            $this->load->view('include/footer');
            $this->load->view('staff/truckdetails',compact('trucks'));
    } else{
        redirect('staff/homepage');
    }        
    }else{
        redirect('login/staff');
    }
    }

    
    public function maintenance($id){
        if($this->session->userdata('email') !=''){ 
            if($this->session->userdata('priv') =='3'OR $this->session->userdata('priv')=='1' ){
            $data['title'] = 'Truck Details | Angelogistic Forwarder Corporation';
            
            //GO BACK TO PREVIOUS PAGE
            $this->session->set_userdata('referred_from', current_url());

            $this->load->config('myconfig'); 
            $truck = $this->TruckModel->getProd($id);

            $session_data = array(
                'status'  => $truck->status,
                'plate_no'  => $truck->plate_no);
            $this->session->set_userdata($session_data);

            $hists =  $this->MaintenanceModel->getHistory();
            $mains =  $this->MaintenanceModel->getMain();

            $this->load->view('include/header', $data);
            $this->load->view('include/staff_header');
            $this->load->view('include/footer');
            $this->load->view('staff/truck/truckview',compact('truck', 'mains'));
            $this->load->view('staff/maintenance',compact('mains', 'hists'));
        } else{
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

// DRIVER CRUD
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
            'timeout' => $this->input->post('timeout'),
            'weekday'=> implode(",", $this->input->post('weekday')),
            'status' => $this->input->post('status')
        );
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
        $this->form_validation->set_rules('gender', 'Gender', 'required');

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
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('date', 'Employement Date', 'required');

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

//HELPER CRUD

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
            'experience' => $this->input->post('experience'),
            'date' => $this->input->post('date'), 
            'timein' =>$this->input->post('timein'),
            'timeout' => $this->input->post('timeout'),
            'weekday'=> implode(",", $this->input->post('weekday'))   
        );
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
                   $this->helperedit($id);
               }
               else
               {
                   $this->HelperModel->update($id, $data);
                   redirect('staff/helperdetails');
               }
           }
}
?>