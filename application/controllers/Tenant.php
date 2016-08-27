<?php
class Tenant extends MY_Controller {

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
	
	  $data['tenantlist'] = $this->Tenant_model->get_tenant();	

    foreach($data['tenantlist'] as  $key => $tenant){
    $ten_id=$tenant['id'];
       $data['tenantlist'][$key]['status_tenant'] = $this->Tenancy_model->get_status_tenant($ten_id);
    }

	  $data['main_content'] = 'admin/tenant/list';
      $this->load->view('includes/template', $data);
	}

	function offer()
	{
	
	$this->load->helper('url');
	
	  $data['tenantlist'] = $this->Tenant_model->get_tenant();	

    foreach($data['tenantlist'] as  $key => $tenant){
    $ten_id=$tenant['id'];
       $data['tenantlist'][$key]['status_tenant'] = $this->Tenancy_model->get_status_tenant($ten_id);

    }

	  $data['main_content'] = 'admin/tenant/offer';
      $this->load->view('includes/template', $data);
	}
	function add()
	{

		//echo 'ttttt';

	 if ($this->input->server('REQUEST_METHOD') === 'POST') {

		 //=============================================================
		 /*echo 'ggggggggggggggg';
		 $name = $_FILES['contract']['name'];
		 echo $name.'anaaaa';*/

 if ($_FILES['contract']['name'] != '') {
			 //echo 'infile';
	         $file_contract_name = $_FILES['contract']['name'];
			 $tmpName = $_FILES['contract']['tmp_name'];
			 $error = $_FILES['contract']['error'];
			 $size = $_FILES['contract']['size'];
			 $ext = strtolower(pathinfo($file_contract_name, PATHINFO_EXTENSION));

			 //================================================

			 switch ($error) {
				 case UPLOAD_ERR_OK:
					 $valid = true;
					 //validate file extensions
					 if (!in_array($ext, array('jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx'))) {
						 $valid = false;
						 $response = 'Invalid file extension.';
					 }
					 //validate file size
					 if ($size / 5120 / 5120 > 2) {
						 $valid = false;
						 $response = 'File size is exceeding maximum allowed size.';
					 }
					 //upload file
					 if ($valid) {
						 $targetPath = './uploads/contract_file/'.$file_contract_name; //Use relative or absolute path
							 //dirname(__FILE__) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $name;
						 move_uploaded_file($tmpName, $targetPath);
						 //echo $targetPath;
						 //header('Location: index.php');
						 //exit;
					 }
					 break;
				 default:
					 $response = 'Unknown error';
					 break;
			 }
	 		echo $response;
		 }
		 	//exit();
		 //=============================================================
		 if($_FILES['signature']['name']!=""){

			 //load library
			 $this->load->library('upload');
			 //Set the config
			 $config['upload_path'] = './uploads/'; //Use relative or absolute path
			 $config['allowed_types'] = 'gif|jpg|png';
			 $config['max_size'] = '100';
			 $config['max_width'] = '200';
			 $config['max_height'] = '170';
			 $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended

			//Initialize
			$this->upload->initialize($config);

			//Upload file
			if( ! $this->upload->do_upload("signature")){
				//echo the errors
				echo $this->upload->display_errors();
			}
				$file_name = $this->upload->file_name;
		} // signature


		 $dob=date("Y-m-d", strtotime
		 (str_replace('/', '-', $this->input->post('dob'))));
		 $agreement=date("Y-m-d", strtotime
		 (str_replace('/', '-', $this->input->post('agreement'))));
		 $date_commencement=date("Y-m-d",
			 strtotime(str_replace('/', '-', $this->input->post
			 ('date_commencement'))));
		 $rent_payment=date("Y-m-d",
			 strtotime(str_replace('/', '-', $this->input->post
			 ('rent_payment'))));
		 $nxt_pymnt=date("Y-m-d", strtotime
		 (str_replace('/', '-', $this->input->post('nxt_pymnt'))));
		 $nights_to=date("Y-m-d", strtotime
		 (str_replace('/', '-', $this->input->post('nights_to'))));
		 $months_to=date("Y-m-d", strtotime
		 (str_replace('/', '-', $this->input->post('months_to'))));

		 $data_to_store = array(
				 'status' => 'pending',
				 'title' => $this->input->post('title'),
				'fname' => $this->input->post('fname'),
				'surname' => $this->input->post('surname'),
				'dob' => $dob,
				'nationality' => $this->input->post('nationality'),
				'mobile' => $this->input->post('mobile'),
				'email' => $this->input->post('email'),
				'passport_no' => $this->input->post('passport_no'),
				'address' => $this->input->post('address'),
				'postcode' => $this->input->post('postcode'),
				'city_country' => $this->input->post('city_country'),
				'property_ref' => $this->input->post('property_ref'),
				'room_no' => $this->input->post('room_no'),
				'room_type' => $this->input->post('room_type'),
				'no_people' => $this->input->post('no_people'),
				'price_weekly' => $this->input->post('price_weekly'),
				'price_monthly' => $this->input->post('price_monthly'),
				'agreement' => $agreement,
				'date_commencement' => $date_commencement,
				'nights_to_end' => $this->input->post('nights_to_end'),
				'nights_to' => $nights_to,
				'agrmnt_for' => $this->input->post('agrmnt_for'),
				'months_to' => $months_to,
				'deposit' => $this->input->post('deposit'),
				'deposit_month' => $this->input->post('deposit_month'),
				'contract_fee' => $this->input->post('contract_fee'),
				'rent_payment' =>$rent_payment,
				'total_nights' => $this->input->post('total_nights'),
				'total_months' => $this->input->post('total_months'),
				'nxt_pymnt' => $nxt_pymnt,
				'other_costs' => $this->input->post('other_costs'),
				'cost_desc' => $this->input->post('cost_desc'),
				'deposit2' => $this->input->post('deposit2'),
				'contrctfee' => $this->input->post('contrctfee'),
				'rentpay' => $this->input->post('rentpay'),
				'net_total' => $this->input->post('net_total'),
				'holding_deposit' => $this->input->post('holding_deposit'),
				'outstanding_balance' => $this->input->post('outstanding_balance'),
				'signature' => $file_name,
			    'contract_file' => $file_contract_name,
			);
			if($query=$this->Tenant_model->add($data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
				$this->session->set_flashdata('flash_message', 'Saved Successfully');
				redirect('admin/tenant');
            }
			else
			{
				if($query==0){
					$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata
					('flash_message', 'Can not save.');
					redirect
					('admin/tenant/add');
					}

			}

		 //=============================================================
	 }
		else {

			$data['main_content'] = 'admin/tenant/add';
			$this->load->view('includes/template', $data);
		}
	}
	public function tenant_delete()
	{
		$id = $this->uri->segment(4);
        $this->Tenant_model->delete_tenant($id);
		$this->session->set_flashdata('Type', 'alert-success');
		$this->session->set_flashdata('flash_message', 'Tenant successfully deleted.');
        redirect('admin/tenant');
	}
	public function approve()
	{
		$id = $this->uri->segment(4);
        $this->Tenant_model->approve_tenant($id);
		$this->session->set_flashdata('Type', 'alert-success');
		$this->session->set_flashdata('flash_message', 'Tenant successfully approved.');
        redirect('admin/tenant');
	}
	public function detail()
	{
		$id = $this->uri->segment(4);        
		$data['tenantdetail'] = $this->Tenant_model->view_tenant_by_id($id);	
		$data['main_content'] = 'admin/tenant/detail';
		$this->load->view('includes/template', $data);			
	}
	public function profile()
	{
		$id = $this->uri->segment(4);
		$data['profiledetail'] = $this->Tenant_model->view_tenant_by_id($id);
		$data['transactionlist'] = $this->Account_model->get_tenant_transaction($id);
		$data['main_content'] = 'admin/tenant/profile';
		$this->load->view('includes/template', $data);			
	}
}	?>