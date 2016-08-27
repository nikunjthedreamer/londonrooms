<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MY_Controller {

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
	public function logo()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			set_gv('comp_address',addslashes($this->input->post('comp_address')));
			set_gv('comp_phone',addslashes($this->input->post('comp_phone')));
			
			if($_FILES['comp_logo']['name']!=""){

			//load library
			$this->load->library('upload');

			//Set the config
			$config['upload_path'] = './uploads/'; //Use relative or absolute path
			$config['allowed_types'] = 'gif|jpg|png'; 
			$config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended

			//Initialize
			$this->upload->initialize($config);

			//Upload file
			if( ! $this->upload->do_upload("comp_logo")){

				//echo the errors
				echo $this->upload->display_errors();
			}
				$file_name = $this->upload->file_name;
		}else{
			
			
			$file_name =  $this->input->post('user_pic_old');
			
		}
		set_gv('comp_logo',addslashes($file_name));
			
		}
		
		
		
		 $data['comp_info']['comp_address']=get_gv('comp_address');
		 $data['comp_info']['comp_phone']=get_gv('comp_phone');
		$data['comp_info']['comp_logo']=get_gv('comp_logo');
		
		$data['main_content'] = 'admin/setting/comp_logo';
      $this->load->view('includes/template', $data);
	}
}
