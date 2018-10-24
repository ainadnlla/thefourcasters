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
            $this->load->model("ChartModel");
            $this->load->model("ReportsModel");
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

        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('admin/homepage');
        $this->load->view('admin/graph',
        compact('accept', 'pending','deny', 'first', 'second','third','fourth','fifth',
        'days', 'days2', 'days3','days4','days5', 'days6', 'days7', 'days8', 'days9', 'days10',
        'warning'));
        $this->load->view('admin/bookinglatest',compact('books'));
    
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
            $this->load->view('include/header_nav');
            $this->load->view('include/footer');
            $this->load->view('admin/truck/truckview',compact('truck', 'mains'));
            $this->load->view('admin/maintenance',compact('mains', 'hists'));
        }else{
            redirect('login/admin');
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
            //Monthly Report Graph
           $jan= $this->ChartModel->jan();
           $feb= $this->ChartModel->feb();
           $march= $this->ChartModel->march();
           $april= $this->ChartModel->april();
           $may= $this->ChartModel->may();
           $june= $this->ChartModel->june();
           $july= $this->ChartModel->july();
           $aug= $this->ChartModel->aug();
           $sep= $this->ChartModel->sep();
           $oct= $this->ChartModel->oct();
           $nov= $this->ChartModel->nov();
           $dec= $this->ChartModel->dec();
            //Yearly Report Graph
           $currentyear= $this->ChartModel->currentyear();
           $lastyear = $this->ChartModel->lastyear();
           $llastyear =$this->ChartModel->llastyear();
           $lllastyear= $this->ChartModel->lllastyear();
           $llllastyear = $this->ChartModel->llllastyear();
           //Daily Report Graph
           $daily = $this->ChartModel->daily();
            //Maintenance Monthly Graph
            $mjan= $this->ChartModel->mjan();
            $mfeb= $this->ChartModel->mfeb();
            $mmarch= $this->ChartModel->mmarch();
            $mapril= $this->ChartModel->mapril();
            $mmay= $this->ChartModel->mmay();
            $mjune= $this->ChartModel->mjune();
            $mjuly= $this->ChartModel->mjuly();
            $maug= $this->ChartModel->maug();
            $msep= $this->ChartModel->msep();
            $moct= $this->ChartModel->moct();
            $mnov= $this->ChartModel->mnov();
            $mdec= $this->ChartModel->mdec();
            //Maintenance Yearly Graph
            $mcurrentyear= $this->ChartModel->mcurrentyear();
            $mlastyear = $this->ChartModel->mlastyear();
            $mllastyear =$this->ChartModel->mllastyear();
            $mlllastyear= $this->ChartModel->mlllastyear();
            $mllllastyear = $this->ChartModel->mllllastyear();
            //Maintenance Daily Graph
            $mdaily = $this->ChartModel->mdaily();


            $month = $this->input->GET('month');
            $year = $this->input->GET('year');  
            $day = $this->input->GET('day');  
            $days = $this->ReportsModel->getdayreport($month,$day,$year);
            $reps=  $this->ReportsModel->getreport($month, $year);
            $years = $this->ReportsModel->getyeareport($year);
            $days = $this->ReportsModel->getdayreport($day,$month,$year);
            //Maintenance
            $mains =  $this->ReportsModel->getMain($month, $year);
            $maindays = $this->ReportsModel->getmainday($day,$month, $year);
            $mainyears = $this->ReportsModel->getmainyear($year);
            $this->session->set_flashdata('month', $month);
            $this->session->set_flashdata('year', $year);
            $this->session->set_flashdata('day', $day);
            

            $this->load->config('myconfig');
            $this->load->view('include/header', $data);
            $this->load->view('include/header_nav');
            $this->load->view('include/footer');
            $this->load->view('admin/reports',compact('maindays','mainyears','daily','mdaily','currentyear','lastyear','llastyear','lllastyear','llllastyear','mcurrentyear','mlastyear','mllastyear','mlllastyear','mllllastyear','mjan','mfeb','mmarch','mapril','mmay','mjune','mjuly','maug','msep','moct','mnov','mdec','jan','feb','march','april','may','june','july','aug','sep','oct','nov','dec','days','years','reps', 'mains'));
        }else{
            redirect('login/admin');
        }
    }

    public function toprint(){
        if($this->session->userdata('username') !=''){ 
            $data['title'] = 'Reports Information | Angelogistic Forwarder Corporation';
            
            $month = $this->session->flashdata('month');
            $year = $this->session->flashdata('year');
            $reps =  $this->ReportsModel->getreport($month,$year);
            $data['totalprice'] = $this->ReportsModel->get_sum($month, $year);
            
            $this->load->config('myconfig');
            $this->load->view('include/header', $data);
            $this->load->view('include/footer');
            $this->load->view('admin/toprint',compact('reps',$data));
            
        }else{
            redirect('login/admin');
        }
    }

    public function toprint_maintenance(){
        if($this->session->userdata('username') !=''){ 
            $data['title'] = 'Reports Information | Angelogistic Forwarder Corporation';
            
            $month = $this->session->flashdata('month');
            $year = $this->session->flashdata('year');
            $mains =  $this->ReportsModel->getmain($month,$year);
            $data['totalprice'] = $this->ReportsModel->get_sum_mainte($month, $year);
            
            $this->load->config('myconfig');
            $this->load->view('include/header', $data);
            $this->load->view('include/footer');
            $this->load->view('admin/toprint_maintenance',compact('mains',$data));
            
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
        $reps =  $this->ReportsModel->getreport($month,$year);
        $data['totalprice'] = $this->ReportsModel->get_sum($month, $year);

        $this->load->config('myconfig');
        $this->load->helper('pdf_helper');
     //  $this->load->view('admin/topdf');
        $this->load->view('admin/pdfreport', compact('reps', $data));

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
    public function chart(){
        $data['title'] = 'Charts Sample | Angelogistic Forwarder Corporation';
       
        $this->load->config('myconfig');
       
        $this->load->view('include/chart_header',$data);
        // $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('admin/chart');
    }
   
}
?>