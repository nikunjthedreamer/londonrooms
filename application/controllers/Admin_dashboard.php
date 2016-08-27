<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends MY_Controller {
	public function __construct() {
        parent::__construct();
 
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');

		//============================================
		//============================================
		$data['property_stat']=$this->Stat_model->get_count_property();
		//echo $data['property_stat']['count_occupied'];
		//exit();
		$data['get_count_expires']=$this->Stat_model->get_count_expires();
		$data['get_count_rooms']=$this->Stat_model->get_count_rooms();
		$data['get_count_tenant']=$this->Stat_model->get_count_tenant();
		$data['get_count_tenant_country']=$this->Stat_model->get_count_tenant_country();
		$data['get_count_tenant_country'] = json_encode($data['get_count_tenant_country']);
		$data['get_count_occupied_rooms'] =$this->Stat_model->get_count_occupied_rooms();
		$data['get_count_offer'] =$this->Stat_model->get_count_offer();


		//$data['get_count_tenant_country'] = json_encode($data['get_count_tenant_country']);

		//print_r($data['get_count_tenant_country']);
		//exit();

		//echo date("Y/m/d");
		//print_r ($data['property_stat']);
		//exit();
		//============================================
		//============================================
	    $data['main_content'] = 'admin/dashboard';
        $this->load->view('includes/template', $data);
	}
}
