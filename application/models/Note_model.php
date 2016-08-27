<?php
class Note_model extends CI_Model {

function add( $data)
    {
		
		$insert=$this->db->insert('notes', $data);
		return $insert;
	}
	function delete_note( $id)
    {
			$this->db->where('id', $id);
		    $this->db->delete('notes'); 
		
	}
	function get_notes(){
	    $this->db->select('*');
		$this->db->from('notes');
		$query = $this->db->get();
		return $query->result_array(); 
	
	
	}
	public function get_notes_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('notes');
		$this->db->where('pid', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }
	function get_note_by_id($id,$pid){
		$array = array('id' => $id, 'pid' => $pid);
		
	    $this->db->select('*');
		$this->db->from('notes');
		$this->db->where($array);
		$query = $this->db->get();
		return $query->row(); 
		}
	 function update($id,$data){
			$this->db->where('id', $id);
			$update=$this->db->update('notes', $data);		
			return $update;
			}
}