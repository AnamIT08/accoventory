<?php
if (!defined('BASEPATH'))
	exit ('No direct script access allowed');

class Data_model extends CI_Model {

    public function __construct() {
        parent::__construct();  
        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);
    }

    public function get_specific_column($column, $where='', $table='') {
    	$this->db->select($column);
		$this->db->where($where);
		$this->db->from($table);
		$query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function getMinValue($column, $where='', $table='') {
        $this->db->select_min($column);
        $this->db->where($where);
        $this->db->from($table);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function count_specific_column($column, $whereColumn='', $whereValue='', $table='') {
        $this->db->select($column);        
        $this->db->where($whereColumn, $whereValue);
        $this->db->from($table);
        $query = $this->db->get();
        $rowcount = $query->num_rows();
        return $rowcount;
    }

    public function count_specific_table_array($table, $where) {
        $this->db->select('*');        
        $this->db->where($where);
        $this->db->from($table);
        $query = $this->db->get();
        $rowcount = $query->num_rows();
        return $rowcount;
    }

    public function groupByCount($id, $table) {
        $this->db->select($id.', COUNT('.$id.') as total');
        $this->db->group_by($id); 
        $this->db->order_by('total', 'desc'); 
        $this->db->from($table);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function countGroupWhere($id, $where='', $table) {
        $this->db->select(''.$id.', COUNT('.$id.') as total');
        $this->db->group_by($id); 
        if($where != '') {
            $this->db->where($where);
        }
        $this->db->from($table);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function count_specific_table($table, $whereColumn='', $whereValue='') {
        $this->db->select('*');        
        $this->db->where($whereColumn, $whereValue);
        $this->db->from($table);
        $query = $this->db->get();
        $rowcount = $query->num_rows();
        return $rowcount;
    }

    public function count_specific_table_without_where($table) {
        $this->db->select('*');        
        $this->db->from($table);
        $query = $this->db->get();
        $rowcount = $query->num_rows();
        return $rowcount;
    }

    public function get_all_info($column, $where='', $table='') {
        $this->db->select($column);
        if($where != '') {
            $this->db->where($where);
        }
        $this->db->from($table);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_all_info_where_with_order($column, $where='', $orderColumn='', $orderType='', $table='') {
        $this->db->select($column);
        if($where != '') {
            $this->db->where($where);
        }
        $this->db->from($table);        
        $this->db->order_by($orderColumn, $orderType);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_all_info_without_where_with_order($column, $orderColumn='', $orderType='', $table='') {
        $this->db->select($column);
        $this->db->from($table);        
        $this->db->order_by($orderColumn, $orderType);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_all_info_without_where($column, $table='') {
        $this->db->select($column);
        $this->db->from($table);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_user_info_by_id($id) {
        $this->db->select('company');
        $this->db->from('users');
        $this->db->where('users.id', $id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        if($result[0]->company != "") {
            $this->db->select('*');
            $this->db->from('companies');
            $this->db->where('users.id', $id);
            $this->db->join('users', 'users.company = companies.full_name', 'right'); 
            $query_result = $this->db->get();
            $result_join = $query_result->result();
            return $result_join;
        } else {
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('id', $id);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        }
    }

    public function limitQuery($column, $where='', $limit, $table='') {
        $this->db->select($column);
        if($where != '') {
            $this->db->where($where);
        }
        $this->db->order_by("id", "desc");
        $this->db->limit($limit);
        $this->db->from($table);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function limitQueryASC($column, $where='', $limit, $table='') {
        $this->db->select($column);
        if($where != '') {
            $this->db->where($where);
        }
        $this->db->order_by("id", 'asc');
        $this->db->limit($limit);
        $this->db->from($table);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function limitQueryCustom($column, $where='', $orderColumn, $order_by, $limit, $table='') {
        $this->db->select($column);
        if($where != '') {
            $this->db->where($where);
        }
        $this->db->order_by($orderColumn, $order_by);
        $this->db->limit($limit);
        $this->db->from($table);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }    

    public function columnSum($column, $where='', $table='') {
        $this->db->select_sum($column);
        if($where != '') {
            $this->db->where($where);
        }
        $this->db->from($table);        
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function reportData($column, $where, $orderColumn, $orderType, $table) {
        $this->db->select($column);
        $this->db->from($table);
        if($where != '') {
            $this->db->where($where);
        }  
        $this->db->order_by($orderColumn, $orderType);
        $query_result = $this->db->get();
        $result = $query_result->result();        
        return $result;
    }

    public function reportDataSum($column, $where, $group_by, $orderColumn, $orderType, $table) {
        $this->db->select($column);
        $this->db->from($table);
        if($where != '') {
            $this->db->where($where);
        }          
        $this->db->group_by($group_by); 
        $this->db->order_by($orderColumn, $orderType);
        $query_result = $this->db->get();
        $result = $query_result->result();        
        return $result;
    }

    public function get_all_info_like($column, $like='', $table='') {
        $this->db->select($column);
        if($like != '') {
            $this->db->or_like($like);
        }
        $this->db->from($table);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchListDocument($search) {
        $LinkeListDocument = array('list_document.systemId' => $search,'list_document.date' => date("Y-m-d", strtotime($search)),'list_document.dueDate' => date("Y-m-d", strtotime($search)),'list_document.type' => $search,'list_document.documentId' => $search,'list_document.title' => $search,'list_document.po' => $search,'list_document.discountType' => $search,'list_document.discountAmount' => $search,'list_document.currencyType' => $search,'list_document.currencyRate' => $search,'list_document.calculateTotal' => $search);
        $this->db->or_like($LinkeListDocument);
        $this->db->from('list_document');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchListTransaction($search) {
        $LinkeListTransaction = array('list_transaction.systemId' => $search,'list_transaction.docType' => $search,'list_transaction.date' => date("Y-m-d", strtotime($search)),'list_transaction.receiptTitle' => $search,'list_transaction.refferenceId' => $search,'list_transaction.note' => $search,'list_transaction.particular' => $search);
        $this->db->or_like($LinkeListTransaction);
        $this->db->from('list_transaction');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchDocument($search) {
        $customer = $this->get_all_info_like('id', array('name' => $search, 'phone' => $search, 'nameOfContact' => $search), 'list_business_member');
        $result = array(); $i = 0;
        foreach ($customer as $key) {
            $LinkeListDocument = array('list_document.customerId' => $key->id);
            // $LinkeListTransaction = array('list_transaction.teamMember' => $key->id);
            $this->db->or_like($LinkeListDocument);
            // $this->db->or_like($LinkeListTransaction);
            $this->db->from('list_document');
            $query_result = $this->db->get();
            $result[$i++] = $query_result->result();
        }
        return $result;
    }
    public function searchTransaction($search) {
        $customer = $this->get_all_info_like('id', array('name' => $search, 'nameOfContact' => $search), 'list_business_member');
        $result = array(); $i = 0;
        foreach ($customer as $key) {
            $LinkeListTransaction = array('list_transaction.teamMember' => $key->id);
            $this->db->or_like($LinkeListTransaction);
            $this->db->from('list_transaction');
            $query_result = $this->db->get();
            $result[$i++] = $query_result->result();
        }
        return $result;
    }
}
