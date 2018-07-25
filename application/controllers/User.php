<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('UserModel');
    }
    
    //anewuzhere
    public function index(){
        
    //    $items =  $this->UserModel->getItems();
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('mode/index',compact('items'));
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
        $config['total_rows'] = $this->UserModel->getNumRecs();
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
        $items =  $this->UserModel->getItems($norecs, $offset);

        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('include/footer');
        $this->load->view('mode/manageuser',compact('items'));
    }

    public function view($id){
        $item = $this->UserModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('mode/view',compact('item'));
        $this->load->view('include/footer');
       // $this->debug($item);
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
            $this->UserModel->insert($data);
            $this->index();
      }
    }

    public function add(){
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('mode/add');
        $this->load->view('include/footer');
    }

    public function edit($id){
        $item =$this->UserModel->getProd($id);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('mode/edit',compact('item'));
        $this->load->view('include/footer');

    }
    public function delete($Product_ID){
        $item =$this->UserModel->getProd($Product_ID);
        $this->load->view('include/header');
        $this->load->view('include/header_nav');
        $this->load->view('mode/delete',compact('item'));
        $this->load->view('include/footer');
    } 
    public function del($id){
        // $this->debug($item);
        $data= $this->input->post();
        unset($data['delete']);
         $item =$this->uri->segment(4);
         $this->UserModel->delete($id,$data);
         redirect('user/manageuser');
     
        // return Redirect::route('item');
     }

     public function register(){
        $data = $this->input->post();
        
        unset($data['add']);

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('repass', 'Password Confirmation', 'required|matches[password]');
        
  

      if ($this->form_validation->run() == FALSE)
      {
          $this->add();
          echo "error";
      }
      else
      {
            $this->UserModel->insertUser($data);
       
          redirect('user/manageuser');
      }    
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
                $this->UserModel->update($id, $data);
                redirect('user/manageuser');
            }
        }


//  public function update($id){
//         $data= $this->input->post();
//        //$this->debug($data);
//         unset($data['submit']);
//         $this->UserModel-> update($id,$data);
//         $this->index();
       
       
//     }
    }
?>