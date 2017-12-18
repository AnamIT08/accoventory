<?php
if (!defined('BASEPATH'))
	exit ('No direct script access allowed');

class Database_model extends CI_Model {

    public function __construct() {
        parent::__construct();  
        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);
    }

    public function data_insert($table, $datanew) {   
        $this->db->insert($table, $datanew);          
    }

    public function data_insert_return($table, $datanew) {   
        $this->db->insert($table, $datanew);  
        return $this->db->insert_id();        
    }
    
    public function data_update($table, $datanew, $where) {   
        $this->db->update($table, $datanew, $where);              
    }

    public function data_update_return($table, $datanew, $where) {   
        $result = $this->db->update($table, $datanew, $where);              
        return $result;
    }

    public function data_delete($table, $data) {
        $res = $this->db->delete($table, $data);      
        if ($res) echo json_encode (array('response'=>'success'));
        else echo json_encode (array('response'=>'failed'));   
    }

    public function data_delete_without_response($table, $data) {
        $res = $this->db->delete($table, $data);         
    }
}
