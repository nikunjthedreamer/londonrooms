<?php 
class Bill_model extends CI_Model {
	function add( $data)
    {
		
		$insert=$this->db->insert('bills', $data);
		return $insert;
	}
	function update($bid,$data)
    {
		
		$this->db->where('id', $bid);
		$update=$this->db->update('bills', $data);		
		return $update;
	}
	function get_bill($id,$pid){
		$array = array('id' => $id, 'pid' => $pid);		
	    $this->db->select('*');
		$this->db->from('bills');
		$this->db->where($array);
		$query = $this->db->get();
		return $query->row(); 
	}
	public function get_bills_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->where('pid', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }
	public function delete_bill($id){		
		$this->db->where('id', $id);
		$this->db->delete('bills'); 
	}
	
}


?>