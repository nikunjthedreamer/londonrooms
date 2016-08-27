<?php
class Calendar_model extends CI_Model {

function add( $data)
    {
		
		$insert=$this->db->insert('calendar', $data);
		return $insert;
	}
	function delete_calendar( $id)
    {
			$this->db->where('id', $id);
		    $this->db->delete('calendar'); 
		
	}
	function get_calender(){
	    $this->db->select('*');
		$this->db->from('calendar');
		$query = $this->db->get();
		return $query->result_array(); 
	
	
	}
	function get_calender_by_property_id($id){
	    $this->db->select('*');
		$this->db->from('calendar');
		$this->db->where('pid',$id);		
		$query = $this->db->get();
		return $query->result_array(); 
	
	
	}
	
	function get_cal_by_id($id,$pid){
		$array = array('id' => $id, 'pid' => $pid);
		
	    $this->db->select('*');
		$this->db->from('calendar');
		$this->db->where($array);
		$query = $this->db->get();
		return $query->row(); 
		}
	 function update($id,$data){
			$this->db->where('id', $id);
			$update=$this->db->update('calendar', $data);		
			return $update;
			}
}