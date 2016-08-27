<?php

class Property extends MY_Controller {

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
	function add()
	{
	 if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
		if($this->input->post('address')!=""){
		if($this->input->post('block')=="on"){
			$block="1";
			}else{
			$block="0";
			}
			
            $Contract_start_date=date("Y-m-d", strtotime($this->input->post('Contract_start_date')));
			$Contract_end_date=date("Y-m-d", strtotime($this->input->post('Contract_end_date')));
            $data_to_store = array(
				'address' => $this->input->post('address'),
				'postcode' => $this->input->post('postcode'),
				'landlord_name' => $this->input->post('landlord_name'),
				'landlord_address' => $this->input->post('landlord_address'),
				'landlord_phone' => $this->input->post('landlord_phone'),
				'landlord_email' => $this->input->post('landlord_email'),
				'property_price' => $this->input->post('property_price'),
				'Contract_start_date' => $Contract_start_date,		
				'Contract_end_date' => $Contract_end_date,
				);
			if($query=$this->Property_model->add( $data_to_store) ){
		
			$rooms = $this->input->post('no_of_rooms');
			for($i=1; $i<=$rooms; $i++){
			$room_data_to_store = array(
				'pid' => $query,
                 'room_name' => 'Room'.' '.$i,
				'disable' => '0',		
				);
				$this->Room_model->add($room_data_to_store);
				}
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Saved Successfully');
					redirect('admin/property/');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'Can not save.');
					redirect('admin/property/add');
					}
					
                }
		}else{
		$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'Address cannot empty.');
					redirect('admin/property/add/');
		
		}
		}else{
	  $data['main_content'] = 'admin/property/add';
      $this->load->view('includes/template', $data);
	  }
	
	}

	function detail()
	{
	$id = $this->uri->segment(4);
	
	$data['property'] = $this->Property_model->get_property_by_id($id);
	$data['tenancy'] = $this->Tenancy_model->get_tenancy_by_propertyId($id);
	$data['mortgage'] = $this->Mortgage_model->get_mortgage_by_propertyId($id);	
	$data['notes'] = $this->Note_model->get_notes_by_id($id);
	$data['calendar'] = $this->Calendar_model->get_calender_by_property_id($id);
	$data['rooms'] = $this->Room_model->get_rooms_by_id($id);
	$data['bills'] = $this->Bill_model->get_bills_by_id($id);
	
	
	$data['main_content'] = 'admin/property/detail';
      $this->load->view('includes/template', $data);
	}
	
	public function property_delete()
    {
       
        $id = $this->uri->segment(4);
        $this->Property_model->delete_property($id);
		$this->session->set_flashdata('Type', 'alert-success');
		$this->session->set_flashdata('flash_message', 'Property successfully delete.');
        redirect('admin/property');
    }
	
	
	public function edit()
    {
        //product id 
        $id = $this->uri->segment(4);
  
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
       		if($this->input->post('address')!=""){
			if($this->input->post('block')=="on"){
			$block="1";
			}else{
			$block="0";
			}
            $Contract_start_date=date("Y-m-d", strtotime($this->input->post('Contract_start_date')));
			$Contract_end_date=date("Y-m-d", strtotime($this->input->post('Contract_end_date')));
            $data_to_store = array(
				'address' => $this->input->post('address'),
				'postcode' => $this->input->post('postcode'),
				'landlord_name' => $this->input->post('landlord_name'),
				'landlord_address' => $this->input->post('landlord_address'),
				'landlord_phone' => $this->input->post('landlord_phone'),
				'landlord_email' => $this->input->post('landlord_email'),
				'property_price' => $this->input->post('property_price'),
				'Contract_start_date' => $Contract_start_date,		
				'Contract_end_date' => $Contract_end_date,
				);
			if($query=$this->Property_model->update_property($id,$data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Saved Successfully');
					redirect('admin/property/');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'Can not save.');
					redirect('admin/property/add');
					}
					
                }
		}else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'not_updated');
					redirect('admin/property/edit/'.$id.'');
					}
					
                }
                
        }

       
        //product data 
        $data['property'] = $this->Property_model->get_property_by_id($id);
        //fetch manufactures data to populate the select field
      
        //load the view
        $data['main_content'] = 'admin/property/edit';
        $this->load->view('includes/template', $data);            

    }//update
	
//------------------------------Tenancy Section start--------------------------------------------------//

	public function add_tenancy()
    {
        //product id 
        $id = $this->uri->segment(4);
  
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            if($this->input->post('furnished_letting')=="on"){
			$furnished_letting="1";
			}else{
			$furnished_letting="0";
			}
			if($this->input->post('assured_tenancy')=="on"){
			$assured_tenancy="1";
			}else{
			$assured_tenancy="0";
			}
			$start_date=date("Y-m-d", strtotime($this->input->post('start_date')));
			$finish_date=date("Y-m-d", strtotime($this->input->post('finish_date')));			
            $data_to_store = array(
				'property_id' => $id,
				'property_room_id'=>$this->input->post('property_room_id'),
				'tenant' => $this->input->post('tenant'),
				'start_date' => $start_date,		
				'initial_rent' => $this->input->post('initial_rent'),		
				'rent_plan' => $this->input->post('rent_plan'),	
				'finish_date' => $finish_date,
				'furnished_letting' =>$furnished_letting,
				'assured_tenancy' =>$assured_tenancy,
				'ast_duration' => $this->input->post('ast_duration'),
				'deposit' => $this->input->post('deposit'),
				);
        //if the insert has returned true then we show the flash message
                if($query=$this->Tenancy_model->add($data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'New tenancy Successfully Added');
					redirect('admin/property/detail/'.$id.'/?tab=tenancies');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'not_updated');
					redirect('admin/property/add_tenancy/'.$id.'');
					}
					
                }
                
        }

            
        //load the view
		$data['property'] = $this->Property_model->get_property_by_id($id);
		$data['rooms'] = $this->Room_model->get_rooms_by_id($id);
        $data['tenantlist'] = $this->Tenant_model->get_tenant();	
        $data['main_content'] = 'admin/property/add_tenancy';
        $this->load->view('includes/template', $data);            

    }
	public function delete_tenancy(){
		
	
	$Property_id = $this->uri->segment(4);
	$tenancy_id = $this->uri->segment(5);
	
	 $this->Tenancy_model->delete_tenancy($tenancy_id);
		$this->session->set_flashdata('Type', 'alert-success');
		$this->session->set_flashdata('flash_message', 'Tenancies successfully delete.');
        redirect('admin/property/detail/'.$Property_id.'/?tab=tenancies');
	
	
	}
	public function edit_tenancy(){
	
	$Property_id = $this->uri->segment(4);
	$tenancy_id = $this->uri->segment(5);
	
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			if($this->input->post('furnished_letting')=="on"){
			$furnished_letting="1";
			}else{
			$furnished_letting="0";
			}
			if($this->input->post('assured_tenancy')=="on"){
			$assured_tenancy="1";
			}else{
			$assured_tenancy="0";
			}
			$start_date=date("Y-m-d", strtotime($this->input->post('start_date')));
			$finish_date=date("Y-m-d", strtotime($this->input->post('finish_date')));			
            $data_to_store = array(
				'property_id' => $Property_id,
				'property_room_id'=>$this->input->post('property_room_id'),
				'tenant' => $this->input->post('tenant'),
				'start_date' => $start_date,		
				'initial_rent' => $this->input->post('initial_rent'),		
				'rent_plan' => $this->input->post('rent_plan'),	
				'finish_date' => $finish_date,
				'furnished_letting' =>$furnished_letting,
				'assured_tenancy' =>$assured_tenancy,
				'ast_duration' => $this->input->post('ast_duration'),
				'deposit' => $this->input->post('deposit'),
				);
                if($query=$this->Tenancy_model->update($tenancy_id,$data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Successfully Updated');
					redirect('admin/property/detail/'.$Property_id.'/?tab=tenancies');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'not_updated');
					redirect('admin/property/edit_tenancy/'.$tenancy_id.'/'.$Property_id.'');
					}
					
                }
                
        }
	$data['property'] = $this->Property_model->get_property_by_id($Property_id);
	$data['tenancy'] = $this->Tenancy_model->get_tenancy_by_id($tenancy_id,$Property_id);
	$data['tenantlist'] = $this->Tenant_model->get_tenant();
	$data['rooms'] = $this->Room_model->get_rooms_by_id($Property_id);
	$data['main_content'] = 'admin/property/edit_tenancy';
    $this->load->view('includes/template', $data);	 
		
	}
	
//------------------------------Tenancy Section End--------------------------------------------------//

//------------------------------Mortgage Section start--------------------------------------------------//
	public function add_mortgage()
	{
	$id = $this->uri->segment(4);
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $mrtg_startDate=date("Y-m-d", strtotime($this->input->post('mrtg_startDate')));
			$finish_date=date("Y-m-d", strtotime($this->input->post('finish_date')));			
            $data_to_store = array(
				'pid' => $id,
				'mrtg_startDate' => $mrtg_startDate,
				'm_value' => $this->input->post('m_value'),		
				'notes' => $this->input->post('notes'),	
				);
        //if the insert has returned true then we show the flash message
                if($query=$this->Mortgage_model->add($data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'New Mortgage Successfully Added');
					redirect('admin/property/detail/'.$id.'/?tab=Mortgages');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'not_updated');
					redirect('admin/property/add_mortgage/'.$id.'');
					}
					
                }
                
        }
	$data['main_content'] = 'admin/property/add_mortgage';
      $this->load->view('includes/template', $data);
	}	
	
	public function edit_mortgage(){
	
	$Property_id = $this->uri->segment(4);
	$m_id = $this->uri->segment(5);
	
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			$mrtg_startDate=date("Y-m-d", strtotime($this->input->post('mrtg_startDate')));
			$finish_date=date("Y-m-d", strtotime($this->input->post('finish_date')));			
            $data_to_store = array(
				'pid' => $Property_id,
				'mrtg_startDate' => $mrtg_startDate,
				'm_value' => $this->input->post('m_value'),		
				'notes' => $this->input->post('notes'),	
				);
        //if the insert has returned true then we show the flash message
                if($query=$this->Mortgage_model->update($m_id,$data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Successfully Updated');
					redirect('admin/property/detail/'.$Property_id.'/?tab=Mortgages');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'not_updated');
					redirect('admin/property/edit_mortgage/'.$m_id.'/'.$Property_id.'');
					}
					
                }
                
        }
	
	$data['mortgage'] = $this->Mortgage_model->get_mortgage_by_id($m_id,$Property_id);
	
	$data['main_content'] = 'admin/property/edit_mortgage';
    $this->load->view('includes/template', $data);	 
	
	
	}
	
	public function delete_mortgage(){
	
	$Property_id = $this->uri->segment(4);
	$mortgage_id = $this->uri->segment(5);
	
	 $this->Mortgage_model->delete_mortgage($mortgage_id);
		$this->session->set_flashdata('Type', 'alert-success');
		$this->session->set_flashdata('flash_message', 'Mortgage successfully delete.');
        redirect('admin/property/detail/'.$Property_id.'/?tab=Mortgages');
	
	
	}
	//------------------------------Mortgage Section End--------------------------------------------------//
//------------------------------Notes Section Start--------------------------------------------------//

	public function add_note()
	{
	$id = $this->uri->segment(4);
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $date=date("Y-m-d", strtotime($this->input->post('note_date')));
			$data_to_store = array(
				'pid' => $id,
				'note_date' => $date,
				'note_type' => $this->input->post('note_type'),
				'content' => $this->input->post('content'),		
				);
        //if the insert has returned true then we show the flash message
                if($query=$this->Note_model->add($data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'New Note Successfully Added');
					redirect('admin/property/detail/'.$id.'/?tab=Notes');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'not_updated');
					redirect('admin/property/add_note/'.$id.'');
					}
					
                }
                
        }
	$data['main_content'] = 'admin/property/add_note';
      $this->load->view('includes/template', $data);	
	}
	public function edit_note(){
	
	$Property_id = $this->uri->segment(4);
	$notes_id = $this->uri->segment(5);
	
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			$date=date("Y-m-d", strtotime($this->input->post('note_date')));
			$data_to_store = array(
				'pid' => $Property_id,
				'note_date' => $date,
				'note_type' => $this->input->post('note_type'),
				'content' => $this->input->post('content'),		
				);
        //if the insert has returned true then we show the flash message
                if($query=$this->Note_model->update($notes_id,$data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Successfully Updated');
					redirect('admin/property/detail/'.$Property_id.'/?tab=Notes');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'not_updated');
					redirect('admin/property/edit_note/'.$notes_id.'/'.$Property_id.'');
					}
					
                }
                
        }
	
	$data['note'] = $this->Note_model->get_note_by_id($notes_id,$Property_id);
	
	$data['main_content'] = 'admin/property/edit_note';
    $this->load->view('includes/template', $data);	 
	
	
	}
	public function delete_note(){
	
	$Property_id = $this->uri->segment(4);
	$note_id = $this->uri->segment(5);
	
	 $this->Note_model->delete_note($note_id);
		$this->session->set_flashdata('Type', 'alert-success');
		$this->session->set_flashdata('flash_message', 'Note successfully delete.');
        redirect('admin/property/detail/'.$Property_id.'/?tab=Notes');
	
	
	}
	//------------------------------Notes Section End--------------------------------------------------//
//------------------------------Calendar Section Start--------------------------------------------------//

	public function add_calendar()
	{
	$id = $this->uri->segment(4);
		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $calender_date=date("Y-m-d", strtotime($this->input->post('calender_date')));
			$data_to_store = array(
				'pid' => $id,
				'calender_date' => $calender_date,
				'event' => $this->input->post('event'),
				'description' => $this->input->post('description'),		
				'Note' => $this->input->post('Note'),		
				);
        //if the insert has returned true then we show the flash message
                if($query=$this->Calendar_model->add($data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'New Entry Successfully Added');
					redirect('admin/property/detail/'.$id.'/?tab=Calendar');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'not_updated');
					redirect('admin/property/add_note/'.$id.'');
					}
					
                }
                
        }
	
	$data['main_content'] = 'admin/property/add_calendar';
    $this->load->view('includes/template', $data);	
	
	}
	public function edit_calender(){
	
	$Property_id = $this->uri->segment(4);
	$c_id = $this->uri->segment(5);
	
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			 $calender_date=date("Y-m-d", strtotime($this->input->post('calender_date')));
			$data_to_store = array(
				'pid' => $Property_id,
				'calender_date' => $calender_date,
				'event' => $this->input->post('event'),
				'description' => $this->input->post('description'),		
				'Note' => $this->input->post('Note'),		
				);
        //if the insert has returned true then we show the flash message
                if($query=$this->Calendar_model->update($c_id,$data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Successfully Updated');
					redirect('admin/property/detail/'.$Property_id.'/?tab=Calendar');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'not_updated');
					redirect('admin/property/edit_calender/'.$c_id.'/'.$Property_id.'');
					}
					
                }
                
        }
	
	$data['calendar'] = $this->Calendar_model->get_cal_by_id($c_id,$Property_id);
	
	$data['main_content'] = 'admin/property/edit_calender';
    $this->load->view('includes/template', $data);	 
	
	
	}
	public function delete_calendar(){
	
	$Property_id = $this->uri->segment(4);
	$calendar_id = $this->uri->segment(5);
	
	 $this->Calendar_model->delete_calendar($calendar_id);
		$this->session->set_flashdata('Type', 'alert-success');
		$this->session->set_flashdata('flash_message', 'Calendar successfully delete.');
        redirect('admin/property/detail/'.$Property_id.'/?tab=Calendar');
	
	
	}
	//------------------------------Calendar Section End--------------------------------------------------//

	public function add_room()
	{
			$id = $this->uri->segment(4);
		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			 if($this->input->post('disable')=="on"){
			$disable="1";
			}else{
			$disable="0";
			}
           	$data_to_store = array(
				'pid' => $id,
				'room_name' => $this->input->post('room_name'),
				'disable' => $disable,		
				);
        //if the insert has returned true then we show the flash message
                if($query=$this->Room_model->add($data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'New Entry Successfully Added');
					redirect('admin/property/detail/'.$id.'/?tab=rooms');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'not_updated');
					redirect('admin/property/add_room/'.$id.'');
					}
					
                }
                
        }
	
	$data['main_content'] = 'admin/property/add_room';
    $this->load->view('includes/template', $data);	
	}
	public function edit_room()
	{
		 	$id = $this->uri->segment(4);
		 	$rid = $this->uri->segment(5);
		
			
		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			 if($this->input->post('disable')=="on"){
			$disable="1";
			}else{
			$disable="0";
			}
           	$data_to_store = array(
				'pid' => $id,
				'room_name' => $this->input->post('room_name'),
				'disable' => $disable,		
				);
        //if the insert has returned true then we show the flash message
                if($query=$this->Room_model->update($rid,$data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Successfully Updated');
					redirect('admin/property/detail/'.$id.'/?tab=rooms');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'not_updated');
					redirect('admin/property/edit_room/'.$id.'/'.$rid.'');
					}
					
                }
                
        }
	
	$data['rooms'] = $this->Room_model->get_property_by_roomid($id,$rid);
	
	$data['main_content'] = 'admin/property/edit_room';
    $this->load->view('includes/template', $data);	
	}
	
	public function delete_room(){
	
	$Property_id = $this->uri->segment(4);
	$room_id = $this->uri->segment(5);
	
	 $this->Room_model->delete_room($room_id);
		$this->session->set_flashdata('Type', 'alert-success');
		$this->session->set_flashdata('flash_message', 'Room successfully delete.');
        redirect('admin/property/detail/'.$Property_id.'/?tab=rooms');
	
	}
/*-------------------------- Bills Section Starts Here -------------*/

	public function add_bill()
	{
	$id = $this->uri->segment(4);
	
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
           	$data_to_store = array(
				'pid' => $id,
				'service' => $this->input->post('service'),
				'supplier' => $this->input->post('supplier'),
				'acc_number' => $this->input->post('acc_number'),
				'acc_holder' => $this->input->post('acc_holder'),
				'pay_method' => $this->input->post('pay_method'),
					
				);
        //if the insert has returned true then we show the flash message
                if($query=$this->Bill_model->add($data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'New Entry Successfully Added');
					redirect('admin/property/detail/'.$id.'/?tab=Bills');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'Not Added');
					redirect('admin/property/add_bill/'.$id.'');
					}
					
                }
                
        }
	  $data['main_content'] = 'admin/property/add_bill';
      $this->load->view('includes/template', $data);	
	}
	public function edit_bill()
	{
	$pid = $this->uri->segment(4);
	$bid = $this->uri->segment(5);
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
           	$data_to_store = array(
				'pid' => $pid,
				'service' => $this->input->post('service'),
				'supplier' => $this->input->post('supplier'),
				'acc_number' => $this->input->post('acc_number'),
				'acc_holder' => $this->input->post('acc_holder'),
				'pay_method' => $this->input->post('pay_method'),
					
				);
        //if the insert has returned true then we show the flash message
                if($query=$this->Bill_model->update($bid,$data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'Successfully Updated');
					redirect('admin/property/detail/'.$pid.'/?tab=Bills');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'Not Added');
					redirect('admin/property/edit_bill/'.$pid.'');
					}
					
                }
                
        }
		$data['bill'] = $this->Bill_model->get_bill($bid,$pid);
	  $data['main_content'] = 'admin/property/edit_bill';
      $this->load->view('includes/template', $data);	
	}
	public function delete_bill(){
	
	$pid = $this->uri->segment(4);
	$bid = $this->uri->segment(5);
	
	 $this->Bill_model->delete_bill($bid);
		$this->session->set_flashdata('Type', 'alert-success');
		$this->session->set_flashdata('flash_message', 'Bill successfully deleted.');
        redirect('admin/property/detail/'.$pid.'/?tab=Bills');
	
	}
/*-------------------------- Bills Section Ends Here -------------*/
}	







?>