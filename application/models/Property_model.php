<?php
class Property_model extends CI_Model {

function add( $data)
    {
		
		$insert=$this->db->insert('property', $data);
		$insert_id = $this->db->insert_id();

   return  $insert_id;
		//return $insert;
	}
function get_property(){
	    $this->db->select('*');
		$this->db->from('property');
		$query = $this->db->get();
		return $query->result_array(); 
	
	
	}
public function get_property_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('property');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }
function delete_property($id){
		$this->db->where('id', $id);
		$this->db->delete('property'); 
	}
function update_property($id, $data)
    {
		$this->db->where('id', $id);
		$insert=$this->db->update('property', $data);
		return $insert;
	}

}