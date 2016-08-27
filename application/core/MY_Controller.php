<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('gv_helper');
		  $this->load->model('Users_model');
        $this->load->model('Tenant_model');
        $this->load->model('Property_model');
		$this->load->model('Tenancy_model');
		$this->load->model('Mortgage_model');
		$this->load->model('Note_model');
		$this->load->model('Calendar_model');
		$this->load->model('Room_model');
		$this->load->model('Management_model');
		$this->load->model('Bill_model');
		$this->load->model('Timeline_model');
		$this->load->model('Account_model');
		$this->load->model('Stat_model');
		$this->load->helper(array('form', 'url'));
		$count_room = $this->Room_model->get_rooms_available();
		
		$user_id=$this->session->userdata('user_id');
		$this->data['userdata'] = $this->Users_model->get_user_by_id($user_id);
		foreach($count_room as $room){
		if($room['status']=="" ||  $room['status']=="AVAILABLE" ){
			$new[]=$room;
			}
		}
	   if(isset($new)){
		$list=count($new);   
	    }else{
		  $list='';
	   }
	   $this->data['list']=$list;
	}
}
