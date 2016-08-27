<?php
class Stat_model extends CI_Model {

    //====================================================================
    //==========================get statistics============================
    //====================================================================

    function get_count_property()
    {
        $property_stat=array();
        $this->db->select('*');
        $this->db->from('property');
        $query = $this->db->get();
        $property_stat['count_property']= $query->num_rows();
        //==========================================================
        $this->db->distinct();
        $this->db->select('property_id');
        $this->db->from('tenancy');
        $this->db->where('finish_date >',date("Y/m/d"));
       // $this->db->group_by('column_name');
        $query = $this->db->get();
        $property_stat['count_occupied']= $query->num_rows();
        //============================================================
        $property_stat['count_vacant']=$property_stat['count_property']-$property_stat['count_occupied'];
        $property_stat['percent']= ($property_stat['count_occupied']/$property_stat['count_property'])*100;
        return $property_stat;
    }

    function get_count_expires()
    {
        $this->db->select('*');
        $this->db->from('tenancy');
        $date = strtotime('+1 months');
        $this->db->where('finish_date <',date('Y-m-d', $date));
        $this->db->where('finish_date >',date('Y-m-d'));
        $query = $this->db->get();
        $count= $query->num_rows();
        return $count;
    }
  //=============================================
    function get_count_rooms()
    {
        $this->db->select('*');
        $this->db->from('rooms');
        $query = $this->db->get();
        $count= $query->num_rows();
        return $count;
    }
    //===========================================
    function get_count_tenant()
    {
        $this->db->select('*');
        $this->db->from('tenant');
        $query = $this->db->get();
        $count= $query->num_rows();
        return $count;
    }
    //==========================================
    function get_count_offer()
    {
        $this->db->select('*');
        $this->db->from('tenant');
        $this->db->where('status="pending"');
        $query = $this->db->get();
        $count= $query->num_rows();
        return $count;
    }
    //===========================================
    //===========================================

    function get_count_tenant_country()
    {
        $select =   array(
            'tenant.nationality as country',
            'count(tenant.nationality) as visits',
            'country.Color as color'
        );

        $this->db->select($select);
        $this->db->from('tenant');
        $this->db->join('country','country.Code=tenant.nationality','Left');
        $this->db->group_by('tenant.nationality');
        $query = $this->db->get();
        return $query->result_array();
           }

    function get_count_occupied_rooms()
    {
        $this->db->distinct();
        $this->db->select('property_room_id');
        $this->db->from('tenancy');
        $this->db->where('finish_date >',date("Y/m/d"));
        $query = $this->db->get();
        $count= $query->num_rows();
        return $count;
    }


}