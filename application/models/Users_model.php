<?php

class Users_model extends CI_Model {

    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */
	function validate($user_name, $password)
	{
		$this->db->where('user_name', $user_name);
		$this->db->where('pass_word', $password);
		$query = $this->db->get('user');
		
		if($query->num_rows == 1)
		{
			return true;
		}		
	}

    /**
    * Serialize the session data stored in the database, 
    * store it in a new array and return it to the controller 
    * @return array
    */
	function get_db_session_data()
	{
		$query = $this->db->select('user_data')->get('ci_sessions');
		$user = array(); /* array to store the user data we fetch */
		foreach ($query->result() as $row)
		{
		    $udata = unserialize($row->user_data);
			
		    /* put data in array using username as key */
		    $user['user_name'] = $udata['user_name']; 
		     
		    $user['is_logged_in'] = $udata['is_logged_in']; 
		}
		return $user;
	}
	
    /**
    * Store the new user's data into the database
    * @return boolean - check the insert
    */	
	function create_member()
	{

		$this->db->where('user_name', $this->input->post('username'));
		$query = $this->db->get('user');

        if($query->num_rows > 0){
        	//echo '<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>';
			 // echo "Username already taken";	
			//echo '</strong></div>';
			return 0;
		}else{
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
		}
			$new_member_insert_data = array(
				'full_name' => $this->input->post('full_name'),
				'email_address' => $this->input->post('email_address'),
				'surname' => $this->input->post('surname'),		
				'phone_number' => $this->input->post('phone_number'),		
				'role' => $this->input->post('role'),		
				'user_name' => $this->input->post('username'),
				'status' => $status,
				'user_pic' => $file_name,
				'pass_word' => md5($this->input->post('password'))						
			);
			$insert = $this->db->insert('user', $new_member_insert_data);
		    return $insert;
		}
	      
	}//create_member
	function get_users(){
	    $this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result_array(); 
	
	
	}
	function delete_user($id){
		$this->db->where('id', $id);
		$this->db->delete('user'); 
	}
	 public function get_user_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }
	 public function get_user_by_username($username,$password)
    {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_name', $username);
		$this->db->where('pass_word', $password);		
		$query = $this->db->get();
		return $query->row(); 
    }
	function update_user($id, $data)
    {
		$this->db->where('id', $id);
		$insert=$this->db->update('user', $data);
		return $insert;
	}
}

