<?php
class Management_model extends CI_Model {

function add_issues( $data)
    {
		
		$insert=$this->db->insert('management', $data);
		return $insert;
	}
	function get_management()
    {
		
		 $this->db->select('m.*,p.address,r.room_name');
		$this->db->from('management m');
		$this->db->join('property p','p.id=m.pId','Left');
		$this->db->join('rooms r','r.id=m.room_id','Left');
		$query = $this->db->get();
		return $query->result_array(); 
	}
	function edit_issues( $id, $data)
    {
		
		$this->db->where('id', $id);
		$update=$this->db->update('management', $data);		
		return $update;
	}
	function get_list_by_id($id){
	    $this->db->select('m.*,p.address,r.room_name');
		$this->db->from('management m');
		$this->db->join('property p','p.id=m.pId','Left');
		$this->db->join('rooms r','r.id=m.room_id','Left');
		$this->db->where('m.id',$id);
		$query = $this->db->get();
		return $query->row(); 
	
	
	}	
}