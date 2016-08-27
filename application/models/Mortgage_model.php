<?php
class Mortgage_model extends CI_Model {

function add( $data)
    {
		
		$insert=$this->db->insert('mortgage', $data);
		return $insert;
	}
	function get_mortgage(){
	    $this->db->select('*');
		$this->db->from('mortgage');
		$query = $this->db->get();
		return $query->result_array(); 
	
	
	}
	function delete_mortgage( $id)
    {
			$this->db->where('id', $id);
		    $this->db->delete('mortgage'); 
		
	}
	public function get_mortgage_by_propertyId($pid)
    {
		$this->db->select('*');
		$this->db->from('mortgage');
		$this->db->where('pid', $pid);
		$query = $this->db->get();
		return $query->result_array(); 
    }
   function get_mortgage_by_id($id,$pid){
		$array = array('id' => $id, 'pid' => $pid);
		
	    $this->db->select('*');
		$this->db->from('mortgage');
		$this->db->where($array);
		$query = $this->db->get();
		return $query->row(); 
		}
	 function update($id,$data){
			$this->db->where('id', $id);
			$update=$this->db->update('mortgage', $data);		
			return $update;
			}
}