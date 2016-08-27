<?php

class User extends MY_Controller {

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	 public function __construct()
    {
        parent::__construct();
        
       

        /* if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        } */
    }
	function index()
	{
	if($this->session->userdata('is_logged_in')!=""){
			redirect('admin/dashboard');
        }else{ 
        	$this->load->view('admin/login');	
        }
	}

    /**
    * encript the password 
    * @return mixed
    */	
    function __encrip_password($password) {
        return md5($password);
    }	

    /**
    * check the username and the password with the database
    * @return void
    */
	function validate_credentials()
	{	

		$this->load->model('Users_model');

		$user_name = $this->input->post('user_name');
		
		$password = $this->__encrip_password($this->input->post('password'));

		$is_valid = $this->Users_model->validate($user_name, $password);
		
		if($is_valid)
		{
			$user_data = $this->Users_model->get_user_by_username($user_name, $password);
			$data = array(
				'user_name' => $user_name,
				'is_logged_in' => true,
				'role'=>$user_data->role,
				'user_id'=>$user_data->id
			);
			$this->session->set_userdata($data);
			redirect('admin/dashboard');
		}
		else // incorrect username or password
		{
			
			$data['message_error'] = TRUE;
			$this->load->view('admin/login', $data);	
		}
	}	

    /**
    * The method just loads the signup view
    * @return void
    */
	function signup()
	{
	$data['main_content'] = 'admin/signup_form';
      $this->load->view('includes/template', $data);
		//$this->load->view('admin/signup_form');	
	}
	

    /**
    * Create new user and store it in the database
    * @return void
    */	
	function create_member()
	{
	
		$this->load->library('form_validation');
		$this->load->model('Users_model');
		$this->load->library('email');
if($query = $this->Users_model->create_member())
			{
		$useremail=	$this->input->post('email_address');
$username=	$this->input->post('username');
$password=	$this->input->post('password');
$this->email->from('info@renttracker.com', 'Rent Tracker');
$this->email->to($useremail);
$this->email->subject('Registered');
$this->email->message('Your account has been created, here is a reminder of your login details:\n
Username:' .$username.'\n
Password:' . $password);
$this->email->send();
			redirect('admin/userlist');
					
			}
			else
			{
			if($query==0){
			$this->session->set_flashdata('flash_message', 'Username already taken.');
			}
			//redirect('admin/userlist');
			//$data['message']=
				redirect('admin/signup');			
			}
		
	}
	
	/**
    * Destroy the session, and logout the user.
    * @return void
    */		
	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
public function userlist()
	{
	  $this->load->helper('url');
	  $this->load->model('Users_model');
	   $data['Userlist'] = $this->Users_model->get_users(); 
	  $data['main_content'] = 'admin/userlist';
      $this->load->view('includes/template', $data);	
	}
	public function user_delete()
    {
        //product id 
        $id = $this->uri->segment(4);
        $this->Users_model->delete_user($id);
		$this->session->set_flashdata('Type', 'alert-success');
		$this->session->set_flashdata('flash_message', 'User successfully delete.');
        redirect('admin/userlist');
    }//delete
	/**
    * Update item by his id
    * @return void
    */
    public function edit()
    {
        //product id 
        $id = $this->uri->segment(4);
  
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			
            if($this->input->post('password')==""){
			
			$password=$this->input->post('password_old');
			
			}else{
			$password=md5($this->input->post('password'));
			}
			if($this->input->post('status')=="on"){
			$status="1";
			}else{
			$status="0";
			}
			if($_FILES['user_pic']['name']!=""){

			//load library
			$this->load->library('upload');

			//Set the config
			$config['upload_path'] = './uploads/'; //Use relative or absolute path
			$config['allowed_types'] = 'gif|jpg|png'; 
			$config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended

			//Initialize
			$this->upload->initialize($config);

			//Upload file
			if( ! $this->upload->do_upload("user_pic")){

				//echo the errors
				echo $this->upload->display_errors();
			}
				$file_name = $this->upload->file_name;
		}else{
			
			
			$file_name =  $this->input->post('user_pic_old');
			
		}
			$data_to_store = array(
				'full_name' => $this->input->post('full_name'),
				'email_address' => $this->input->post('email_address'),
				'surname' => $this->input->post('surname'),		
				'phone_number' => $this->input->post('phone_number'),		
				'role' => $this->input->post('role'),		
				'user_name' => $this->input->post('username'),
				'status' => $status,
				'user_pic' => $file_name,
				'pass_word' =>$password 						
			);
        //if the insert has returned true then we show the flash message
                if($query=$this->Users_model->update_user($id, $data_to_store) ){
				$this->session->set_flashdata('Type', 'alert-success');
                    $this->session->set_flashdata('flash_message', 'updated');
					redirect('admin/userlist');
                }else{
				if($query==0){
				$this->session->set_flashdata('Type', 'alert-error');
                    $this->session->set_flashdata('flash_message', 'not_updated');
					redirect('admin/edit/'.$id.'');
					}
					
                }
                
        }

       
        //product data 
        $data['user'] = $this->Users_model->get_user_by_id($id);
        //fetch manufactures data to populate the select field
      
        //load the view
        $data['main_content'] = 'admin/edit';
        $this->load->view('includes/template', $data);            

    }//update

}