<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Truck extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('UserModel');
            $this->load->model('CustomerModel');
            $this->load->model('DriverModel');
            $this->load->model('TruckModel');
            $this->load->model('AdminModel');
            $this->load->model('BookingModel');
            
    }

// ADMIN SIDE - TRUCK CRUD

    public function insert(){
        $item = array (
            'img' => 'default.jpg',
            'brand' => $this->input->post('brand'),
            'plate_no' => $this->input->post('plate_no'),
            'series' => $this->input->post('series'),
            'mvfile_no' => $this->input->post('mvfile_no'),
            'engine_no' => $this->input->post('engine_no'),
            'chassis_no' => $this->input->post('chassis_no'),
            'grosswt' => $this->input->post('grosswt'),
            'netwt' => $this->input->post('netwt'),
            'netcap' => $this->input->post('netcap'),
            'year' => $this->input->post('year'),
            
            // $test = $_GET['year'] -  YEAR(GETDATE()),
            // $test == ('old') => $this->input->post('old'),
        );

      /*  $data = $this->input->post();
        unset($data['add']); */
        $this->form_validation->set_rules('brand', 'Brand/Make', 'required');
        $this->form_validation->set_rules('plate_no', 'Plate No.', 'required');
        $this->form_validation->set_rules('series', 'MV File No.', 'required');
        $this->form_validation->set_rules('mvfile_no', 'Plate No.', 'required');
        $this->form_validation->set_rules('engine_no', 'Plate No.', 'required');
        $this->form_validation->set_rules('chassis_no', 'Plate No.', 'required');
        $this->form_validation->set_rules('grosswt', 'Plate No.', 'required');
        $this->form_validation->set_rules('netwt', 'Plate No.', 'required');
        $this->form_validation->set_rules('netcap', 'Plate No.', 'required');
        $this->form_validation->set_rules('year', 'Year Model', 'required|exact_length[4]');      
        if ($this->form_validation->run() == FALSE)
      {
          $this->add();
      }
      else
      {
            $this->TruckModel->insert($item);
            redirect('admin/truckdetails');
      }
    }  
    public function add(){
        $data['title'] = 'Truck Details | Angelogistic Forwarder Corporation';
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/truck/truckadd');
        $this->load->view('include/footer');
    }
    public function edit($id){
        $data['title'] = 'Truck Details | Angelogistic Forwarder Corporation';
        $truck = $this->TruckModel->getProd($id);
        $this->load->view('include/header', $data);
        $this->load->view('include/header_nav');
        $this->load->view('admin/truck/truckedit',compact('truck'));
        $this->load->view('include/footer');
    }
    public function del($id){
        $data= $this->input->post();
        unset($data['delete']);
        $truck = $this->uri->segment(4);
        $this->TruckModel->delete($id,$data);
        redirect('admin/truckdetails');
    }

    public function update($id){
        $data = $this->input->post();
        unset($data['submit']);
        $this->form_validation->set_rules('brand', 'Brand/Make', 'required');
        $this->form_validation->set_rules('plate_no', 'Plate No.', 'required');
        $this->form_validation->set_rules('series', 'MV File No.', 'required');
        $this->form_validation->set_rules('mvfile_no', 'Plate No.', 'required');
        $this->form_validation->set_rules('engine_no', 'Plate No.', 'required');
        $this->form_validation->set_rules('chassis_no', 'Plate No.', 'required');
        $this->form_validation->set_rules('grosswt', 'Plate No.', 'required');
        $this->form_validation->set_rules('netwt', 'Plate No.', 'required');
        $this->form_validation->set_rules('netcap', 'Plate No.', 'required');
        $this->form_validation->set_rules('year', 'Year Model', 'required|exact_length[4]');       
            if ($this->form_validation->run() == FALSE)
            {
                $this->edit($id);
            }
            else
            {
                $this->TruckModel->update($id, $data);
                redirect('admin/truckdetails');
            }
    }
    
    public function do_upload(){  
        $id = $this->input->post('id');
        $data['truck'] = $this->TruckModel->getProd($id);
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
            $this->TruckModel->update($id,array('img' => $data['file_name']));
        }
    }
}
?>