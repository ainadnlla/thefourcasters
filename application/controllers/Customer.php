<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('CustomerModel');
            $this->load->model('UserModel');
    }
    

    public function index(){
            $this->load->view('include/header');
            $this->load->view('include/header_nav');
            $this->load->view('include/footer');
            $this->load->view('mode/index',compact('values'));
        } 

        public function table(){
            $this->load->view('include/header');
            $this->load->view('include/header_nav');
            $this->load->view('mode/table');
            $this->load->view('include/footer');
        } 

        public function manageprivelege(){
            $this->load->view('include/header');
            $this->load->view('include/header_nav');
            $this->load->view('mode/manageprivelege');
            $this->load->view('include/footer');
        } 

        public function truckgps(){
            $this->load->view('include/header');
            $this->load->view('include/header_nav');
            $this->load->view('mode/truckgps');
            $this->load->view('include/footer');
        }

        public function truckdelivery(){
            $this->load->view('include/header');
            $this->load->view('include/header_nav');
            $this->load->view('mode/truckdelivery');
            $this->load->view('include/footer');
        }

        public function form(){
            $this->load->view('include/header');
            $this->load->view('include/header_nav');
            $this->load->view('mode/form');
            $this->load->view('include/footer');
        }

        public function calendar(){  
            $this->load->view('include/calendar_head');
            $this->load->view('include/header_nav'); 
            $this->load->view('mode/calendar');
            $this->load->view('include/calendar_foot');
        }  

        public function inbox(){
            $this->load->view('include/calendar_head');
            $this->load->view('include/header_nav'); 
            $this->load->view('mode/inbox');
            $this->load->view('include/calendar_foot');
        }  

        public function compose(){     
            $this->load->view('include/calendar_head');
            $this->load->view('include/header_nav'); 
            $this->load->view('mode/compose');
            $this->load->view('include/calendar_foot');
        }  

        public function stats(){
            $this->load->view('include/header');
            $this->load->view('include/header_nav');
            $this->load->view('mode/stats');
            $this->load->view('include/footer');
        }
    
        public function profile(){
            $this->load->view('include/header');
            $this->load->view('include/header_nav');
            $this->load->view('mode/profile');
            $this->load->view('include/footer');
        }

    public function manageuser($offset=0){
        $this->load->library('pagination');
        $norecs = 5;

        $config['base_url'] = base_url().'user/manageuser/';
        $config['total_rows'] = $this->CustomerModel->getNumRecs();
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
        $data['values']  =  $this->CustomerModel->getItems($norecs, $offset);
        
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('mode/manageuser',compact('values'));
    }

    public function view($id){
        $data['values'] = $this->CustomerModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('mode/customerview',compact('value'));
        $this->load->view('include/footer'); 
    }

    public function insert(){
        $data = $this->input->post();
        unset($data['add']);

            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('mname', 'Middle Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('password','Password', 'required');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric');
            $this->form_validation->set_rules('gender', 'Gender', 'required');

      if ($this->form_validation->run() == FALSE)
      {
          $this->add();
      }
      else
      {
            $this->CustomerModel->insert($data);
            $this->index();
      }
    }  

    public function add(){
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('mode/customeradd');
        $this->load->view('include/footer');
    }

    public function edit($id){
        $value = $this->CustomerModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('mode/customeredit',compact('value'));
        $this->load->view('include/footer');
    }

    public function delete($Product_ID){
        $value = $this->CustomerModel->getProd($Product_ID);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('mode/customerdelete',compact('value'));
        $this->load->view('include/footer');
    } 
    
    public function del($id){
            $data= $this->input->post();
            unset($data['delete']);
            $value = $this->uri->segment(4);
            $this->CustomerModel->delete($id,$data);
            redirect('user/manageuser');
     }

    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);

            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('mname', 'Middle Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('password','Password', 'required');
            $this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('contact', 'Contact No.', 'required|numeric');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            
            if ($this->form_validation->run() == FALSE)
            {
                $this->edit($id);
            }
            else
            {
                $this->CustomerModel->update($id, $data);
                redirect('user/manageuser');
            }
        }

}
?>