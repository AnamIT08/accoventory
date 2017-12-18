<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends BC_Controller {
    private $timezone;
    private $systemDate;
    private $systemDateTime;
    private $serverMilisecons;

    public function __construct() {
        parent::__construct();

        $this->timezone = "Asia/Dhaka";
        date_default_timezone_set($this->timezone);
        $this->systemDate = date('Y-m-d');
        $this->systemDateTime = date('Y-m-d h:i:s A');
        $this->serverMilisecons = $_SERVER["REQUEST_TIME"];

        $this->load->library('user_agent');
        if (!$this->agent->referrer()) {    
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

    public function index() {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('report/');
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('report/');
        } else {
            $search = $this->sanitize($this->input->get('query'));
            $data['search'] = $search;
            $data['searchListDocument'] = $this->data_model->searchListDocument($search);
            $data['searchListTransaction'] = $this->data_model->searchListTransaction($search);
            $data['searchDocument'] = $this->data_model->searchDocument($search);
            $data['searchTransaction'] = $this->data_model->searchTransaction($search);
            $data['main_content'] = 'search';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }  

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */