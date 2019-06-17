<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Crud_model');
    }
    public function index()
    {
	    $this->load->view('welcome_message');
    }

    public function create()   
    {
	    $this->load->view("crud/create");
    }

    public function create_post()
    {
            $NIC = $this->input->post('NIC');
            $Name = $this->input->post('Name');
            $Address = $this->input->post('Address');
            $Contact_num = $this->input->post('Contact_num');
        
            $res = $this->Crud_model->create($NIC,$Name,$Address,$Contact_num);
		if($res == "success"){
			redirect(site_url('Crud/read'));
		}else{
			redirect(site_url('Crud/create_failed'));
		}
    }
    public function create_failed(){
        echo "create operation failed";
    }
    public function read(){
        $data['res_id'] = $this->Crud_model->read();
        $this->load->view('crud/view',$data);
    }
    public function update($NIC){
        $data['crud_data'] = $this->Crud_model->get_record_byID($NIC);
        if(!empty($data['crud_data'])){
            $this->load->view('crud/update',$data);
        }else{
            redirect(site_url());
        }
    }
    public function update_post($NIC){
        //echo "Successfull";
        $data = array(
            'Name' => $this->input->post('Name'),
            'Address' => $this->input->post('Address'),
            'Contact_num' => $this->input->post('Contact_num'),
            );
            $res = $this->Crud_model->update($data,$NIC);
		if($res == "success"){
			redirect(site_url('crud/read'));
		}else{
			redirect(base_url('crud/update_failed'));
		}
    }
    public function update_failed(){
        echo "Update operation failed";
    }
    public function delete($NIC){
        $res = $this->Crud_model->delete($NIC);
        if($res == "success"){
            redirect(site_url('crud/read'));
        }else{
            redirect(site_url('crud/delete_failed'));
        }
    }
    public function delete_failed(){
        echo "Delete operation failed";
    }

}