<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
    }
	function index()
	{
	  $this->load->helper('url');
	  $data['roomlist'] = $this->Room_model->get_rooms_available();	
	  $data['main_content'] = 'admin/room/list';
      $this->load->view('includes/template', $data);
	}
	
	function add()
	{
	$this->load->helper('url');
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $data_to_store = array(
				'room_name' => $this->input->post('room_name'),
				'pid' => $this->input->post('property_address'),
				'status' => $this->input->post('status'),
				'price' => $this->input->post('price'),
				);
			if($query=$this->Room_model->add($data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Room Saved Successfully');
					redirect('admin/room/');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'Can not save Room.');
					redirect('admin/room/add/');
					}
					
                }
		}
	   $data['propertylist'] = $this->Property_model->get_property();		
	  $data['main_content'] = 'admin/room/add';
      $this->load->view('includes/template', $data);
	}
	
	function status()
	{
	 $id = $this->uri->segment(4);
	$this->load->helper('url');
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
       		
           
            $data_to_store = array(
				'status' => $this->input->post('status'),
				);
			if($query=$this->Room_model->update_room($id,$data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Status Saved Successfully');
					redirect('admin/room/');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'Can not save status.');
					redirect('admin/room/price/'.$id.'');
					}
					
                }
		}
	  //$data['roomlist'] = $this->Room_model->get_rooms_available();	
	  $data['main_content'] = 'admin/room/status';
      $this->load->view('includes/template', $data);
	}
	
	function price(){
	 $id = $this->uri->segment(4);
	$this->load->helper('url');
	  if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
       		
           
            $data_to_store = array(
				'price' => $this->input->post('price'),
				);
			if($query=$this->Room_model->update_room($id,$data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Price Saved Successfully');
					redirect('admin/room/');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'Can not save price.');
					redirect('admin/room/price/'.$id.'');
					}
					
                }
		}else{
				
                
        
	
	  //$data['roomlist'] = $this->Room_model->get_rooms_available();	
	  $data['main_content'] = 'admin/room/price';
      $this->load->view('includes/template', $data);
	}
	}
	//=================================================
	function extend_contract($ContractID,$ToDate){

		if ($this->input->server('REQUEST_METHOD') === 'GET')
		{
             // echo 'ddddddddddddddddokkkkkkkkkkkkkkk';

			/*SELECT `ExtendID`, `Extend_ToDate`,
`Extend_Notes`, `Extend_USER`, `Extend_AddDate`,
`Tenancy_id` FROM `tenancy_extend` WHERE 1*/

			$data_to_store = array(
				'Tenancy_id' => $ContractID,
				'Extend_ToDate' => date("Y-m-d", strtotime($ToDate))
			);
			if($query=$this->Room_model->add_extend_contract($data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
				$this->session->set_flashdata('flash_message', 'Extended Successfully');
				redirect('admin/room/');
			}else{
				if($query==0){
					$this->session->set_flashdata('Type', 'alert-error');
					$this->session->set_flashdata('flash_message', 'Can not Extended Contract.');
					redirect('admin/room/');
				}

			}


		}
		//$data['propertylist'] = $this->Property_model->get_property();
		//$data['main_content'] = 'admin/room/add';
		//$this->load->view('includes/template', $data);

	}
	//=================================================
	//=================================================
	//==================================================



}
