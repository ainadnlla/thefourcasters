<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
    }
	public function index()
	{

        show_404();
    }
    
    public function do_login(){
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        // $data['request'] = $request;
        // $data = array('success' => FALSE, 'message' => '');
        if($this->input->server('REQUEST_METHOD') == 'POST'){
            // $email = $this->input->post('email', TRUE);
            // $password = $this->input->post('password', TRUE);
            $where_data = array(
                'email' => $request->email,
                'password' => $request->password,
            );
            $data['where'] = $where_data;
            $user = $this->mobile->fetch('driver',$where_data);
            $data['sample'] = $user;
            if($user){
                $user = $user[0];
                $data['success'] = TRUE;
                $data['msg'] = 'Login Success';
                $data['user'] = $user;
                $sess_data = array(
                    'id' => $user->id,
                    'email' => $user->email,
                    'logged_in' => TRUE,
                );
                // $data['id'] = $user->id;
                $this->session->set_userdata($sess_data);
            }
            else{
                $data['success'] = FALSE;
                $data['msg'] = 'No Driver Found!';
            }
            echo json_encode($data);
        }
        else{
            show_404();
            // $data['success'] = FALSE;
            // $data['message'] = 'You have no right to access this page';

            // echo json$data['message'];
        }
    }
    
    public function fetch_user(){
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        // $user_id = $request->id;
        $data['request'] = $request;
        $data['post'] = $_POST;
        if($request != NULL){
            $user = $this->mobile->fetch('driver',array('id' => $request->user_id));
            if($user){
                $user = $user[0];
                $data['success'] = TRUE;
                $data['msg'] = 'Fetching User Details Success';
                $data['user'] = $user;
                $data['id'] = $user->id;
            }
            else{
                $data['success'] = FALSE;
                $data['msg'] = 'User Not Found!';
            }
        }
        else if($_POST != NULL){
            $user = $this->mobile->fetch('driver',array('id' => $this->input->post('user_id')));
            if($user){
                $user = $user[0];
                $data['success'] = TRUE;
                $data['msg'] = 'Fetching User Details Success';
                $data['user'] = $user;
                $data['id'] = $user->id;
            }
            else{
                $data['success'] = FALSE;
                $data['msg'] = 'User Not Found!';
            }
        }
        else{
                $data['success'] = FALSE;
                $data['msg'] = 'User Not Found!';
        }

        echo json_encode($data);
    }
    
    public function fetch_booking(){
        
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        // $user_id = $request->id;
        $data['request'] = $request;
        $data['post'] = $_POST;
        if($request != NULL){
            $booking = $this->mobile->fetch_booking_destination($request->user_id);
            // $booking = $this->mobile->fetch('booking',array('driverid' => $request->user_id));
            if($booking){
                $data['success'] = TRUE;
                $data['msg'] = 'Fetching Booking List Success';
                $data['booking'] = $booking;
            }
            else{
                $data['success'] = FALSE;
                $data['msg'] = 'Bookings Not Found!';
            }
        }
        else if($_POST != NULL){
            $booking = $this->mobile->fetch_booking_destination($this->input->post('user_id'));
            // $booking = $this->mobile->fetch('booking',array('driverid' => $this->input->post('user_id')));
            if($booking){
                $data['success'] = TRUE;
                $data['msg'] = 'Fetching Booking List Success';
                $data['booking'] = $booking;
            }
            else{
                $data['success'] = FALSE;
                $data['msg'] = 'Bookings Not Found!';
            }
        }
        else{
                $data['success'] = FALSE;
                $data['msg'] = 'Bookings Not Found!';
        }

        echo json_encode($data);
    }
    
    public function fetch_destination(){
        
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        // $user_id = $request->id;
        $data['request'] = $request;
        $data['post'] = $_POST;
        if($request != NULL){
            
            $booking = $this->mobile->fetch_booking_destination($request->user_id);
            // $booking = $this->mobile->fetch('booking',array('driverid' => $request->user_id));
            if($booking){
                $booking = $booking[0];
                $data['success'] = TRUE;
                $data['msg'] = 'Fetching Booking List Success';
                $data['booking'] = $booking;
            }
            else{
                $data['success'] = FALSE;
                $data['msg'] = 'Bookings Not Found!';
            }
        }
        else if($_POST != NULL){
            
            $booking = $this->mobile->fetch_booking_destination($this->input->post('user_id'));
            // $booking = $this->mobile->fetch('booking',array('driverid' => $this->input->post('user_id')));
            if($booking){
                $booking = $booking[0];
                $data['success'] = TRUE;
                $data['msg'] = 'Fetching Booking List Success';
                $data['booking'] = $booking;
            }
            else{
                $data['success'] = FALSE;
                $data['msg'] = 'Bookings Not Found!';
            }
        }
        else{
                $data['success'] = FALSE;
                $data['msg'] = 'Bookings Not Found!';
        }

        echo json_encode($data);
    }
    
    public function fetch_driver(){
        $id = $this->input->post('driver_id', true);
        $driver = $this->mobile->fetch('driver', array('id'=>$id));
        if($driver){
            $data['success'] = TRUE;
            $data['driver'] = $driver[0];
        }
        else{
            $data['driver'] = NULL;
            $data['success'] = TRUE;
        }
        
        echo json_encode($data);
    }
    
    public function update_booking(){
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        // $user_id = $request->id;
        $data['request'] = $request;
        $data['post'] = $_POST;
        if($_POST != NULL){
            
            if( $this->mobile->update('booking', array('action' => $this->input->post('action')), array('id' => $this->input->post('book_id'))) ){
                $booking = $this->mobile->fetch('booking',array('id' => $this->input->post('book_id')));
                if($booking){
                    $booking = $booking[0];
                    $data['success'] = TRUE;
                    $data['msg'] = 'Update Booking Status Success';
                    $data['booking'] = $booking;
                }
                else{
                    $data['success'] = FALSE;
                    $data['msg'] = 'Bookings Not Found!';
                }
            }
            else{
                    $data['success'] = FALSE;
                    $data['msg'] = 'Update Booking Status Failed';
                
            }
        }
        else{
                $data['success'] = FALSE;
                $data['msg'] = 'Bookings Not Found!';
        }

        echo json_encode($data);
    }
    
    public function upload_image(){
        
        $target_dir = 'uploads/waybill/';
        if($_POST != NULL){
            $image = $this->input->post('image',true);
            $booking_id = $this->input->post('booking_id', true);
            $action = $this->input->post('action', true);
            if(!file_exists($target_dir)){
            	mkdir($target_dir, 0777, true);
            }
            $file_name = "waybill_" . time() . ".jpg";
            $target_dir = $target_dir . "/" . $file_name;
            
            if(file_put_contents($target_dir, base64_decode($image) ) ) {
            
            	$update_data = array('image_path' => $file_name, 'action' => $action);
            	$where_data = array('id' => (int)$booking_id);
            	if($this->mobile->update('booking', $update_data, $where_data)){
                    $data['where'] = $where_data;
                    $data['update'] = $update_data;
            		$data['success'] = true;
            		$data['message'] = "Image was uploaded";
            		$data['status'] = "OK";
            	}
            	else{
            		$data['success'] = false;
            		$data['message'] = "Upload Failed";
            		$data['status'] = "error";
            	}
            
            }
            else{
        		$data['success'] = false;
        		$data['message'] = "Upload Failed";
        		$data['status'] = "error";
                
            }
            
            echo json_encode($data);
        }
    }
    
}
