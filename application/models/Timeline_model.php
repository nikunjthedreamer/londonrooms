<?php
class Timeline_model extends CI_Model {

function add( $data)
    {
		
		$insert=$this->db->insert('timeline', $data);
		return $insert;
	}
	
	
	public function get_timeline_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('timeline');
		$this->db->where('manage_id', $id);
		$this->db->order_by("id", "desc");
		$query = $this->db->get();
		return $query->result_array(); 
    }
	
	
}