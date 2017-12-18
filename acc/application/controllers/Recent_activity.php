<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recent_activity extends BC_Controller {

	public function __construct() {
        parent::__construct();

        $this->timezone = "Asia/Dhaka";
        date_default_timezone_set($this->timezone);
        $this->systemDate = date('Y-m-d');
        $this->systemDateTime = date('Y-m-d h:i:s A');
        $this->serverMilisecons = $_SERVER["REQUEST_TIME"];

        $this->load->library('user_agent');
        $this->load->library('bcare_user');
        if (!$this->agent->referrer()) {    
            // $this->session->set_userdata('lastURI', uri_string());    
            // $this->load->view('url_manipulate');        
        }        
        if($_SERVER["SERVER_NAME"] == 'localhost') {
            $CI =& get_instance();
            if($this->input->is_ajax_request()) {
                $CI->output->enable_profiler(FALSE);
            } else {
                $CI->output->enable_profiler(FALSE);
            }
        }  
        if ($this->agent->is_browser()) {
            $agent = $this->agent->browser();
        } elseif ($this->agent->is_robot()) {
            $agent = $this->agent->robot();
        } elseif ($this->agent->is_mobile()) {
            $agent = $this->agent->mobile();
        } else {
            $agent = 'Unidentified User Agent';
        }
        $userAgent = $agent." ".$this->agent->platform();
        $this->load->model('database_model');
        $this->load->model('data_model');    
    }

	public function add_activity() {
		$this->form_validation->set_rules('title', 'Title', 'strip_tags|trim|xss_clean|required');
		if ($this->form_validation->run() == FALSE) {
			return;
        } else {
        	$data_arr = array(
        		'systemId' => $this->input->post('systemId'),
        		'userId' => $this->session->userdata('id'),
        		'workType' => $this->input->post('workType'),
        		'docType' => $this->input->post('title'),
				'iconType' => $this->input->post('type'),
	            'iconLabel' => $this->input->post('label'),
	            'fullLink' => $this->input->post('fullLink'),
                'ip_address' => $this->input->ip_address(),
				'systemDateTime' => $this->systemDateTime
			);
        	$this->database_model->data_insert("history_list_recent_activities", $data_arr);
        	echo json_encode(array('status' => 'success'));
        }
	}

	public function add_activity_without_toastr() {
        $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
        $invoiceCustomer = '';
        if($data['totalActivity'] < 10) {
            $systemId = "bclogin-00000".++$data['totalActivity'];
        } else if($data['totalActivity'] < 100) {
            $systemId = "bclogin-0000".++$data['totalActivity'];                
        } else if($data['totalActivity'] < 1000) {
            $systemId = "bclogin-000".++$data['totalActivity'];                
        } else if($data['totalActivity'] < 10000) {
            $systemId = "bclogin-00".++$data['totalActivity'];                
        } else if($data['totalActivity'] < 100000) {
            $systemId = "bclogin-0".++$data['totalActivity'];
        }
		$this->form_validation->set_rules('title', 'Title', 'strip_tags|trim|xss_clean|required');
		if ($this->form_validation->run() == FALSE) {
			return;
        } else {
        	$data_arr = array(
        		'systemId' => $systemId,
                'userId' => $this->session->userdata('id'),
        		'workType' => $this->input->post('workType'),
        		'docType' => $this->input->post('title'),
				'iconType' => $this->input->post('type'),
	            'iconLabel' => $this->input->post('label'),
	            'fullLink' => $this->input->post('fullLink'),
                'ip_address' => $this->input->ip_address(),
				'systemDateTime' => $this->systemDateTime
			);
        	$this->database_model->data_insert("history_list_recent_activities", $data_arr);
        }
	}

	public function login_activity() {
		$data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
		$invoiceCustomer = '';
        if($data['totalActivity'] < 10) {
            $systemId = "bclogin-00000".++$data['totalActivity'];
        } else if($data['totalActivity'] < 100) {
            $systemId = "bclogin-0000".++$data['totalActivity'];                
        } else if($data['totalActivity'] < 1000) {
            $systemId = "bclogin-000".++$data['totalActivity'];                
        } else if($data['totalActivity'] < 10000) {
            $systemId = "bclogin-00".++$data['totalActivity'];                
        } else if($data['totalActivity'] < 100000) {
            $systemId = "bclogin-0".++$data['totalActivity'];
        }
		$this->form_validation->set_rules('title', 'Title', 'strip_tags|trim|xss_clean|required');
		if ($this->form_validation->run() == FALSE) {
			return;
        } else {
        	$data_arr = array(
        		'systemId' => $systemId,
        		'userId' => $this->session->userdata('id'),
        		'workType' => 'Login',
				'iconType' => $this->input->post('type'),
	            'iconLabel' => $this->input->post('label'),
                'ip_address' => $this->input->ip_address(),
				'systemDateTime' => $this->systemDateTime
			);
        	$this->database_model->data_insert("history_list_recent_activities", $data_arr);
        	echo json_encode(array('status' => 'success'));
        }
	}
	
}