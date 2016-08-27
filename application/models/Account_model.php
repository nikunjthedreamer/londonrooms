<?php
class Account_model extends CI_Model {

    function add_transaction( $data)
    {
        $insert=$this->db->insert('money_transaction', $data);
        return $insert;
    }

   function get_tenant_transaction($id)
    {
        //SELECT `TransactionID`, `TenantID`, `PropertyID`, `RoomID`, `DueDate`, `AmounteDue`, `AmountPaid`, `Descrption`, `Category`, `Balance`, `Status`, `Paid`, `UserID`, `AddDate` FROM `money_transaction` WHERE 1
        $this->db->select('mt.*,p.address,r.room_name');
        $this->db->from('money_transaction mt');
        $this->db->join('property p','p.id=mt.PropertyID','Left');
        $this->db->join('rooms r','r.id=mt.RoomID','Left');
        $this->db->where('mt.TenantID',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_transaction()
    {
        //SELECT `TransactionID`, `TenantID`, `PropertyID`, `RoomID`, `DueDate`, `AmounteDue`, `AmountPaid`, `Descrption`, `Category`, `Balance`, `Status`, `Paid`, `UserID`, `AddDate` FROM `money_transaction` WHERE 1
        $this->db->select('mt.*,p.address,r.room_name,t.fname,t.surname,c.ConsName');
        $this->db->from('money_transaction mt');
        $this->db->join('property p','p.id=mt.PropertyID','Left');
        $this->db->join('rooms r','r.id=mt.RoomID','Left');
        $this->db->join('tenant t','t.id=mt.TenantID','Left');
        $this->db->join('constants c','c.ConstantsID=mt.Category','Left');
        $query = $this->db->get();
        return $query->result_array();
    }
    //====================================================================
    //==========================get statistics============================
    //====================================================================

    function get_count_unpaid()
    {
        $this->db->select('mt.*,p.address,r.room_name');
        $this->db->from('money_transaction mt');
        $this->db->join('property p','p.id=mt.PropertyID','Left');
        $this->db->join('rooms r','r.id=mt.RoomID','Left');
        $this->db->where('mt.Status',3);  //unpaid
        $query = $this->db->get();
        $count= $query->num_rows();
        return $count;
    }

    function get_price_unpaid()
    {

        $this->db->select("SUM(Balance) AS MySum");
        $this->db->from("money_transaction");
        $this->db->where('Status',3);  //unpaid
        $query1 = $this->db->get();
        if($query1->num_rows() > 0)
        {
            $res = $query1->row_array();
            return $res['MySum'];
        }
        return 0.00;

        /*$this->db->select('mt.*,p.address,r.room_name');
        $this->db->from('money_transaction mt');
        $this->db->join('property p','p.id=mt.PropertyID','Left');
        $this->db->join('rooms r','r.id=mt.RoomID','Left');
        $query = $this->db->get();
        $count= $query->num_rows();
        return $count;*/
    }
    //=========================================
    function get_count_overdue()
    {
        $this->db->select('mt.*,p.address,r.room_name');
        $this->db->from('money_transaction mt');
        $this->db->join('property p','p.id=mt.PropertyID','Left');
        $this->db->join('rooms r','r.id=mt.RoomID','Left');
        $this->db->where('mt.Status',3);  //unpaid
        $this->db->where('mt.DueDate <',date("Y/m/d"));
        $query = $this->db->get();
        $count= $query->num_rows();
        return $count;
    }


    function get_price_overdue()
    {
        $this->db->select("SUM(Balance) AS MySum");
        $this->db->from('money_transaction mt');
        $this->db->where('mt.Status',3);  //unpaid
        $this->db->where('mt.DueDate <',date("Y/m/d"));
        $query1 = $this->db->get();
        if($query1->num_rows() > 0)
        {
            $res = $query1->row_array();
            return $res['MySum'];
        }
        return 0.00;
    }

    function get_count_paid()
    {
        $this->db->select('mt.*,p.address,r.room_name');
        $this->db->from('money_transaction mt');
        $this->db->join('property p','p.id=mt.PropertyID','Left');
        $this->db->join('rooms r','r.id=mt.RoomID','Left');
        $this->db->where('mt.Status',2);  //paid
        $date = strtotime('-1 months');
        $this->db->where('mt.AddDate >',date('Y-m-d', $date));
        $query = $this->db->get();
        $count= $query->num_rows();
        return $count;
    }
    function get_price_paid()
    {
        $this->db->select("SUM(AmountPaid) AS MySum");
        $this->db->from("money_transaction");
        $this->db->where('Status',2);  //unpaid
        $date = strtotime('-1 months');
        $this->db->where('AddDate >',date('Y-m-d', $date));
        $query1 = $this->db->get();
        if($query1->num_rows() > 0)
        {
            $res = $query1->row_array();
            return $res['MySum'];
        }
        return 0.00;
    }
    //===========================================
}