<?php
class Tenant_model extends CI_Model {

	function add( $data)
    {
		
		$insert=$this->db->insert('tenant', $data);
		return $insert;
	}
	function get_tenant(){
		/* $this->db->select('*,t.id');
		$this->db->from('tenant t');
		$this->db->join('tenancy tn','tn.tenant=t.id','left'); */
		$this->db->select('*');
		$this->db->from('tenant');
		$query = $this->db->get();
		return $query->result_array(); 
	}
	function delete_tenant($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tenant'); 
	}
	function approve_tenant($id)
	{
	
		$data=array('status'=>'approved',);
		$this->db->where('id',$id);
		$this->db->update('tenant',$data);
		
	}
	function view_tenant_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('tenant');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result_array(); 
	}

}