<?php
class Account extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

	}

	function index()
	{
		$this->load->helper('url');
		$data['unpaid_transaction'] = $this->Account_model->get_count_unpaid();
		$data['get_price_unpaid'] = $this->Account_model->get_price_unpaid();
		$data['transactionlist'] = $this->Account_model->get_transaction();
		$data['get_count_overdue'] = $this->Account_model->get_count_overdue();
		$data['get_price_overdue'] = $this->Account_model->get_price_overdue();
		$data['get_count_paid'] = $this->Account_model->get_count_paid();
		$data['get_price_paid'] = $this->Account_model->get_price_paid();
		$data['main_content'] = 'admin/account/transactions';
		$this->load->view('includes/template', $data);
	}

	//------------------------------Calendar Section End--------------------------------------------------//

	function edit_transaction()
	{

		$Property_id = $this->uri->segment(4);
		$tenancy_id = $this->uri->segment(5);
		$data['tenancy'] = $this->Tenancy_model->get_tenancy_by_id($tenancy_id, $Property_id);
		$data['main_content'] = 'admin/account/edit_transaction';
		$this->load->view('includes/template', $data);
	}

	//=========================================add new transaction================================

	function add_transaction()
	{
		$this->load->helper('url');
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			foreach ($_POST as $innerArray) {
				if (is_array($innerArray)) {
					//  Scan through inner loop
					foreach ($innerArray as $income) {
						//echo $income{'DueDate'}.'<br>';
						$Balance = $income['AmounteDue'] - $income['AmountPaid'];
						$data_to_store = array(
							'TenantID' => $this->input->post('TenantID'),
							'PropertyID' => $this->input->post('PropertyID'),
							'RoomID' => $this->input->post('room'),
							'DueDate' => date("Y-m-d", strtotime($income['DueDate'])),
							'AmounteDue' => $income['AmounteDue'],
							'AmountPaid' => $income['AmountPaid'],
							'Descrption' => $income['Descrption'],
							'Category' => $income['Category'],
							'Balance' => $Balance,
							'Status' => $income['Status'],
							'Paid' => $income['Paid'],
							'UserID' => $income['UserID']
						);

						$query=$this->Account_model->add_transaction($data_to_store);
					}
				}
			}

			if($query ){
				$this->session->set_flashdata('Type', 'alert-success');
				$this->session->set_flashdata('flash_message', 'Saved Successfully');
				redirect('admin/transactions/');
			}else {
				if ($query == 0) {
					$this->session->set_flashdata('Type', 'alert-error');
					$this->session->set_flashdata('flash_message', 'Can not save .');
					redirect('admin/account/add_transaction');
				}
			}
		} // end post

			$data['propertylist'] = $this->Property_model->get_property();
			$data['tenantlist'] = $this->Tenant_model->get_tenant();
			$data['main_content'] = 'admin/account/add_transaction';
			$this->load->view('includes/template', $data);

	} // end function

	function add_out_transaction()
	{
		$this->load->helper('url');
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			foreach ($_POST as $innerArray) {
				if (is_array($innerArray)) {
					//  Scan through inner loop
					foreach ($innerArray as $income) {
						//echo $income{'DueDate'}.'<br>';
						$Balance = $income['AmounteDue'] - $income['AmountPaid'];
						$data_to_store = array(
							'TenantID' => $this->input->post('TenantID'),
							'PropertyID' => $this->input->post('PropertyID'),
							'RoomID' => $this->input->post('room'),
							'DueDate' => date("Y-m-d", strtotime($income['DueDate'])),
							'AmounteDue' => $income['AmounteDue'],
							'AmountPaid' => $income['AmountPaid'],
							'Descrption' => $income['Descrption'],
							'Category' => $income['Category'],
							'Balance' => $Balance,
							'Status' => $income['Status'],
							'Paid' => $income['Paid'],
							'UserID' => $income['UserID']
						);

						$query=$this->Account_model->add_transaction($data_to_store);
					}
				}
			}

			if($query ){
				$this->session->set_flashdata('Type', 'alert-success');
				$this->session->set_flashdata('flash_message', 'Saved Successfully');
				redirect('admin/transactions/');
			}else {
				if ($query == 0) {
					$this->session->set_flashdata('Type', 'alert-error');
					$this->session->set_flashdata('flash_message', 'Can not save .');
					redirect('admin/account/add_out_transaction');
				}
			}
		} // end post

		$data['propertylist'] = $this->Property_model->get_property();
		$data['tenantlist'] = $this->Tenant_model->get_tenant();
		$data['main_content'] = 'admin/account/add_out_transaction';
		$this->load->view('includes/template', $data);

	} // end function


}

?>