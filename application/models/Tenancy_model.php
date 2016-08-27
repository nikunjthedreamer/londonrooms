<?php
class Tenancy_model extends CI_Model {

function add( $data)
    {
		
		$insert=$this->db->insert('tenancy', $data);
		return $insert;
	}
function get_tenancy(){
	    $this->db->select('*');
		$this->db->from('tenancy');
		$query = $this->db->get();
		return $query->result_array(); 
	
	
	}
	function delete_tenancy( $id)
    {
			$this->db->where('id', $id);
		    $this->db->delete('tenancy'); 
		
	}
    public function get_tenancy_by_propertyId($pid)
    {
		//$this->db->select('t.id,start_date,finish_date,tenant');
		$this->db->select('*,t.id');
		$this->db->from('tenancy t');
		$this->db->where('property_id', $pid);
		$this->db->join('tenant tn','t.tenant=tn.id','left');
		$query = $this->db->get();
		return $query->result_array(); 
    }
	function get_tenancy_by_id($id,$pid){
		$array = array('t.id' => $id, 't.property_id' => $pid);		
	    $this->db->select('*');
		$this->db->from('tenancy t');		
		$this->db->join('property p','p.id=t.property_id','Left');
		$this->db->join('tenant tn','t.tenant=tn.id','left');
		$this->db->where($array);
		$query = $this->db->get();
		return $query->row(); 
		}
	 function update($id,$data){
			$this->db->where('id', $id);
			$update=$this->db->update('tenancy', $data);		
			return $update;
			} 
			
			function get_status_tenant($id){
				 $this->db->select('*');
				$this->db->from('tenancy');
			$this->db->where('tenant', $id);
			$query = $this->db->get();
		    return $query->result_array(); 
			}

	}