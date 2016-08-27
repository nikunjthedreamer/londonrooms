<?php
class Management extends MY_Controller {

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
	  $data['list'] = $this->Management_model->get_management();
	  $data['main_content'] = 'admin/management/list';
      $this->load->view('includes/template', $data);
	}
	
	function add_issues()
	{
	$this->load->helper('url');
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
       		
          
            $data_to_store = array(
				'tenants_name' => $this->input->post('tenants_name'),
				'tenants_phone_number' => $this->input->post('tenants_phone_number'),
				'tenants_email' => $this->input->post('tenants_email'),
				'pId' => $this->input->post('property_address'),
				'room_id' => $this->input->post('room'),
				'detail_issues' => $this->input->post('detail_issues'),
				);
			if($query=$this->Management_model->add_issues($data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Saved Successfully');
					redirect('admin/management/');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'Can not save .');
					redirect('admin/management/add_issues/');
					}
					
                }
		}
	  $data['propertylist'] = $this->Property_model->get_property();	
	 $data['main_content'] = 'admin/management/add_issues';
      $this->load->view('includes/template', $data);
	}
	function edit_issues()
	{
		$id = $this->uri->segment(4);
	$this->load->helper('url');
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
       		$data_to_store = array(				
				'status' => $this->input->post('status'),
				);
          
           /*  $data_to_store = array(
				'tenants_name' => $this->input->post('tenants_name'),
				'tenants_phone_number' => $this->input->post('tenants_phone_number'),
				'tenants_email' => $this->input->post('tenants_email'),
				'pId' => $this->input->post('property_address'),
				'room_id' => $this->input->post('room'),
				'detail_issues' => $this->input->post('detail_issues'),
				'status' => $this->input->post('status'),
				); */
			if($query=$this->Management_model->edit_issues($id,$data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Edit Successfully');
					redirect('admin/management/');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'Can not Edit .');
					redirect('admin/management/edit_issues/');
					}
					
                }
		}
	$data['detail'] = $this->Management_model->get_list_by_id($id);
	  $data['propertylist'] = $this->Property_model->get_property();	
	 $data['main_content'] = 'admin/management/edit_issues';
      $this->load->view('includes/template', $data);
	}
	function pid_room()
	{
	$this->load->helper('url');
	$id = $this->uri->segment(4);
	 $data['room_id'] = $this->Room_model->get_rooms_by_id($id);
	  print $this->load->view('admin/management/rooms',$data,true);
     
	}
	function view_issues()
	{
		$id = $this->uri->segment(4);
	$this->load->helper('url');
	$data['timeline'] = $this->Timeline_model->get_timeline_by_id($id);
	$data['detail'] = $this->Management_model->get_list_by_id($id);
	  $data['propertylist'] = $this->Property_model->get_property();	
	 $data['main_content'] = 'admin/management/view_issues';
      $this->load->view('includes/template', $data);
	}
	function view_timeline()
	{
		$id = $this->uri->segment(4);
	$this->load->helper('url');
	$data['timeline'] = $this->Timeline_model->get_timeline_by_id($id);	
	 $data['main_content'] = 'admin/management/view_timeline';
      $this->load->view('includes/template', $data);
	}
	function add_timeline()
	{
		$id = $this->uri->segment(4);
	$this->load->helper('url');
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
       		$timeline_time = date("H:i:s"); 
			
			$timeline_date = date("Y-m-d"); 
          
		   $data_to_store = array(
				'manage_id' => $id,
				'detail' => $this->input->post('detail'),
				'timeline_date' => $timeline_date,
				'timeline_time' => $timeline_time,
				);
          
            
			 if($query=$this->Timeline_model->add($data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Add Successfully');
					redirect('admin/management/');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'Can not Add .');
					redirect('admin/management/add_timeline/');
					}
					
                }
		}
	
	 //$data['timeline'] = $this->Timeline_model->get_timeline_by_id($id);	
	 $data['main_content'] = 'admin/management/add_timeline';
      $this->load->view('includes/template', $data);
	}
	
	function get_pid_room()
	{
	$this->load->helper('url');
	 $id = $this->uri->segment(4);
	$data['rid'] = $this->uri->segment(5);
	 $data['room_id'] = $this->Room_model->get_rooms_by_id($id);
	  print $this->load->view('admin/management/rooms',$data,true);
     
	}
	function timeline()
	{
	$this->load->helper('url');
	$detail=$_GET['detail'];
	$id=$_GET['id'];
	
       		$timeline_time = date("H:i:s"); 
			
			$timeline_date = date("Y-m-d"); 
          
		   $data_to_store = array(
				'manage_id' => $id,
				'detail' => $detail,
				'timeline_date' => $timeline_date,
				'timeline_time' => $timeline_time,
				);
				
			$this->Timeline_model->add($data_to_store);
			
			$data['timeline'] = $this->Timeline_model->get_timeline_by_id($id);
	  
			print $this->load->view('admin/management/timeline',$data,true);
		
	
	  
     
	}
	
	
	
}	?>