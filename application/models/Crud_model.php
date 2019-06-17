<?php

class Crud_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
    }
    
    public function create($NIC,$Name,$Address,$Contact_num){
        $data= array('NIC'=> $NIC,'Name'=> $Name, 'Address'=>$Address, 'Contact_num'=>$Contact_num);
        $query = $this->db->insert('customer_details',$data);
            if($query){
                return "success";
            }else{
                return "failed";
            }
    }
    public function read(){
        $query = $this->db->get('customer_details');
        return $query;
    }
    public function get_record_byID($NIC){
        $query = $this->db->get_where('customer_details', array('NIC'=> $NIC));
        return $query->row();
    }
    public function update($data,$NIC){
           
        $this->db->where('NIC',$NIC);
        return $this->db->update('customer_details', $data);
    

     }
    public function delete($NIC){
        $query = $this->db->delete('customer_details',array('NIC'=> $NIC));
        if($query){
            return "success";
        }else{
            return "failed";
        }
    }
}