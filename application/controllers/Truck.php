<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Truck extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('UserModel');
            $this->load->model('TruckModel');
            
    }
    public function insert(){
        $data = $this->input->post();
        unset($data['add']);
        $this->form_validation->set_rules('license_no', 'License Number', 'required');
        $this->form_validation->set_rules('insurance', 'Insurance Date', 'required');
      if ($this->form_validation->run() == FALSE)
      {
          $this->add();
      }
      else
      {
            $this->TruckModel->insert($data);
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
            $this->form_validation->set_rules('license_no', 'License Number', 'required');
            $this->form_validation->set_rules('insurance', 'Insurance Date', 'required');
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
        $data['truck'] = $this->TruckModel->getItem($id);
        $config['upload_path']          = './images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
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
                $this->TruckModel->insert($data);
                $this->index();
                }
        }
}
?>