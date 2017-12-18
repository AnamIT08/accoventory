<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Notfound extends BC_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('user_agent');
        if (!$this->agent->is_referral()) {    
            // $this->session->set_userdata('lastURI', uri_string());    
            // $this->load->view('url_manipulate');        
        }         
        if($_SERVER["SERVER_NAME"] == 'localhost') {
            $CI =& get_instance();
            if($this->input->is_ajax_request()) {
                $CI->output->enable_profiler(FALSE);
            } else {
                $CI->output->enable_profiler(TRUE);
            }
        }  
        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);
        $systemDate = date('Y-m-d');
        $systemDateTime = date('Y-m-d h:i:s');
    }
 
    public function index() { 
        $this->output->set_status_header('404'); // setting header to 404
        $data['main_content']='404';       
	    $this->load->view('template', $data);
    } 
} 
