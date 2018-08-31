<?php
    class Email extends CI_Controller{
        function index(){
            $this->load->view('mode/compose');
        }
        function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('form');
        }
        public function index() {
            $this->load->helper('form');
            $this->load->view('contact_email_form');
        }
        public function send_mail() {
            $from_email = "rrynlene@gmail.com";
            $to_email = $this->input->post('email');
            //Load email library
            $this->load->library('Email');
            $this->email->from($from_email, 'Identification');
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);
            //Send mail
            if($this->email->send())
                $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
            else
                $this->session->set_flashdata("email_sent","You have encountered an error");
            $this->load->view('contact_email_form');
        }
        function upload_file(){
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'doc|docs|jpeg|png';
            $this->load->library('upload', $config);
            if($this->upload->do_upload('resume'))
            {
                return $this->upload->data();
            }
            else
            {
                return $this->upload->display_errors();
            }
        }
        $this->load->library('email');
        
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'xxx';
        $config['smtp_user'] = 'xxx';
        $config['smtp_pass'] = 'xxx';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['smtp_port'] = 25;
        $this->email->initialize($config);
        
        $this->email->set_newline("\r\n");
    }
?>