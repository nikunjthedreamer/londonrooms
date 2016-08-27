<?php
class Tenancy extends MY_Controller {

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	 public function __construct()
    {
        parent::__construct();
        
    }
	function index()
	{
	
	$this->load->helper('url');
	
	  $data['propertylist'] = $this->Property_model->get_property();	
	  $data['main_content'] = 'admin/property/list';
      $this->load->view('includes/template', $data);
	}
	function tenancy_detail()
	{
	
	$Property_id = $this->uri->segment(4);
	$tenancy_id = $this->uri->segment(5);
	
	
	$data['tenancy'] = $this->Tenancy_model->get_tenancy_by_id($tenancy_id,$Property_id);
	$data['main_content'] = 'admin/tenancy/detail';
      $this->load->view('includes/template', $data);
	}
	
	
}	?>