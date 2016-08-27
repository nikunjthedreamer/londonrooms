<?php


if ( ! function_exists('get_gv'))
{
	function get_gv($var){
	
		$ci =& get_instance();
		$q=$ci->db->query("select value from global_vars where nom='$var'");
		if ($q->num_rows()>0)
			return $q->first_row()->value;
		else
			return null;
	}
}

if ( ! function_exists('set_gv'))
{
	function set_gv($var,$val){
		$ci =& get_instance();
		$q=$ci->db->query("select value from global_vars where nom='$var'");
		if ($q->num_rows()>0)
			$ci->db->query("update global_vars set value='$val' where nom='$var'");
		else
			$ci->db->query("insert into global_vars(nom,value) values('$var','$val')");
	}
}

/*
if ( ! function_exists('get_filetype_property'))
{
	function get_filetype_property($filetype_id,$key){
		$ci =& get_instance();
		$q=$ci->db->query("select value from PH_filetypes_properties where `key`='$key' and filetype_id='$filetype_id' ");
		if ($q->num_rows()>0)
			return $q->first_row()->value;
		else
			return null;
	}
}

if ( ! function_exists('set_filetype_property'))
{
	function set_filetype_property($filetype_id,$key,$val){
		$ci =& get_instance();
		$q=$ci->db->query("select value from PH_filetypes_properties where `key`='$key' and filetype_id='$filetype_id'");
		if ($q->num_rows()>0)
			$ci->db->query("update PH_filetypes_properties set value='$val' where `key`='$key' and filetype_id='$filetype_id'");
		else
			$ci->db->query("insert into PH_filetypes_properties(filetype_id,`key`,value) values('$filetype_id','$key','$val')");
	}
}
*/