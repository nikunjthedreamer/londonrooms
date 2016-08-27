<?php
class Room_model extends CI_Model {

function add( $data)
    {
		$insert=$this->db->insert('rooms', $data);
		return $insert;
	}
	
	function update( $id, $data)
    {
		$this->db->where('id', $id);
		$update=$this->db->update('rooms', $data);		
		return $update;
	}
	function update_room( $id, $data)
    {
		$this->db->where('id', $id);
		$update=$this->db->update('rooms', $data);		
		return $update;
	}
	function delete_room( $room_id)
    {
			$this->db->where('id', $room_id);
		    $this->db->delete('rooms'); 
		
	}
	
	function get_rooms(){
	    $this->db->select('*');
		$this->db->from('rooms');
		$query = $this->db->get();
		return $query->result_array(); 
	}
	function get_rooms_available(){
		$date = date("Y-m-d", strtotime(" +1 months"));
		$this->db->select('*,t.id as tid,r.id,r.pid,r.room_name,r.status,r.price');
		$this->db->from('rooms r');
		$this->db->join('property p','p.id=r.pid','Left');	
		$this->db->join('tenancy t','t.property_room_id=r.id','Left');	
		$this->db->where('r.id NOT IN (select property_room_id from tenancy ) or r.id  IN (select property_room_id from tenancy WHERE finish_date  BETWEEN "'.date("Y-m-d").'" AND "'.$date.'")',NULL,FALSE);
		$query = $this->db->get();
	 	return $query->result_array(); 
	}
	function get_rooms_by_id($id){
	    $this->db->select('*,r.id,r.pid,r.room_name,r.status,r.price','tn.title,tn.fname,tn.surname');
		$this->db->from('rooms r');
		$this->db->join('tenancy t','t.property_room_id=r.id','Left');
		$this->db->join('tenant tn','t.tenant=tn.id','Left');
		$this->db->where('pid',$id);
		$query = $this->db->get();
		return $query->result_array();
	}	
	function get_property_by_roomid($id,$rid){
		$array = array('id' => $rid, 'pid' => $id);
		
	    $this->db->select('*');
		$this->db->from('rooms');
		$this->db->where($array);
		$query = $this->db->get();
		return $query->result_array();
		}
	//==================================================
	//==================================================
	function Check_extend($RoomID){
		$date = date("Y-m-d", strtotime(" +1 months"));
		$this->db->select('*,r.id,r.pid,r.room_name,r.status,r.price');
		$this->db->from('rooms r');
		$this->db->join('tenancy t','t.property_room_id=r.id','Left');
		$this->db->where('r.id',$RoomID);
		$this->db->where('r.id',$RoomID);
		$this->db->where('t.finish_date <',$date);
		$query = $this->db->get();
		$count= $query->num_rows();
		return $count;
		//return $query->result_array();
	}
	//==================================================
	//==================================================
	function add_extend_contract($data){
		$insert=$this->db->insert('tenancy_extend',$data);
		return $insert;
	}
	//==================================================
	
}