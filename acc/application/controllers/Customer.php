<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends BC_Controller {
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
            $this->home('customer/');
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('customer/');
        } else {
            $data['totalCustomer'] = $this->data_model->count_specific_table_without_where('list_business_member');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities');
            $data['activeCustomer'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'customer', 'status' => 1), 'id', 'desc', 'list_business_member');            
            $data['inActiveCustomer'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'customer', 'status' => 0), 'id', 'desc', 'list_business_member');            
            $data['countCustomer'] = $this->data_model->count_specific_table_array('list_business_member', array('type' => 'customer', 'status' => 1));
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['main_content'] = 'customer_list';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function edit($id) {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('customer/edit/'.$id);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('customer/edit/'.$id);
        } else {
            $data['totalCustomer'] = $this->data_model->count_specific_table_without_where('list_business_member');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities');
            $data['activeCustomer'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'customer', 'status' => 1), 'id', 'desc', 'list_business_member');            
            $data['inActiveCustomer'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'customer', 'status' => 0), 'id', 'desc', 'list_business_member');            
            $data['countCustomer'] = $this->data_model->count_specific_table_array('list_business_member', array('type' => 'customer', 'status' => 1));
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['main_content'] = 'customer_list';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function add() {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('customer/add/');
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('customer/add/');
        } else {
            $data['totalCustomer'] = $this->data_model->count_specific_table_without_where('list_business_member');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities');
            $data['activeCustomer'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'customer', 'status' => 1), 'id', 'desc', 'list_business_member');            
            $data['inActiveCustomer'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'customer', 'status' => 0), 'id', 'desc', 'list_business_member');            
            $data['countCustomer'] = $this->data_model->count_specific_table_array('list_business_member', array('type' => 'customer', 'status' => 1));
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['main_content'] = 'add_customer';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function live_email() {
        $get_result = $this->data_model->count_specific_column('email', 'email', $this->input->post('email'), 'list_business_member');  
        if($get_result > 0) {
            echo 'exist';
        } else {
            echo 'not exist';
        }
    } 

    public function addCustomer($parameter = '') {
        //print_r($this->input->post());
        $this->form_validation->set_rules('nameCompany', 'Company Name', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('nameUser', 'User Name', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('address1', 'Company Address 1', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('address2', 'Company Address 2', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'strip_tags|trim|xss_clean|valid_email|required');
        $this->form_validation->set_rules('phone', 'Phone', 'strip_tags|trim|xss_clean|numeric');
        $this->form_validation->set_rules('webUrl', 'Web Url', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $insertData = array(
                'type' => 'customer',
                'systemId' => $this->sanitize($this->input->post('systemCode')),
                'name' => $this->sanitize($this->input->post('nameCompany')),
                'nameOfContact' => $this->sanitize($this->input->post('nameUser')),
                'address1' => $this->sanitize($this->input->post('address1')),
                'address2' => $this->sanitize($this->input->post('address2')),
                'email' => $this->sanitize($this->input->post('email')),
                'phone' => $this->sanitize($this->input->post('phone')),
                'web' => $this->sanitize($this->input->post('webUrl')),
                'logo' => $this->sanitize($this->input->post('picture')),
                'createdBy' => $this->session->userdata('id'),
                'createdDateTime' => $this->systemDateTime
            );
            $where = array("email" => $this->input->post('email'), "type" => 'customer');
            $count = $this->data_model->count_specific_table_array("list_business_member", $where);
            if($count > 0) {
                $arrayName = array('response' => 'Already exist');
                echo json_encode($arrayName);
            } else {
                $statusId = $this->database_model->data_insert_return("list_business_member", $insertData);
                if($statusId) {
                    $arrayName = array('response' => 'success');
                    echo json_encode($arrayName);
                } else {
                    $arrayName = array('response' => 'failed');
                    echo json_encode($arrayName);
                }
            }
        }
    } 

    public function updateCustomer() {
        //print_r($this->input->post());
        $this->form_validation->set_rules('nameCompany', 'Company Name', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('nameUser', 'User Name', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('address1', 'Company Address 1', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('address2', 'Company Address 2', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'strip_tags|trim|xss_clean|valid_email|required');
        $this->form_validation->set_rules('phone', 'Phone', 'strip_tags|trim|xss_clean|numeric');
        $this->form_validation->set_rules('webUrl', 'Web Url', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'type' => 'customer',
                'name' => $this->sanitize($this->input->post('nameCompany')),
                'nameOfContact' => $this->sanitize($this->input->post('nameUser')),
                'address1' => $this->sanitize($this->input->post('address1')),
                'address2' => $this->sanitize($this->input->post('address2')),
                'email' => $this->sanitize($this->input->post('email')),
                'phone' => $this->sanitize($this->input->post('phone')),
                'web' => $this->sanitize($this->input->post('webUrl')),
                'logo' => $this->sanitize($this->input->post('picture')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array("email" => $this->input->post('email'), "type" => 'customer');
            $count = $this->data_model->get_all_info("id", $where, "list_business_member");
            if(isset($count[0]->id) && $count[0]->id != $this->input->post('editId')) {
                $arrayName = array('response' => 'Already exist');
                echo json_encode($arrayName);
            } else {
                $where = array('id' => $this->input->post('editId'));
                $statusId = $this->database_model->data_update_return("list_business_member", $updateData, $where);
                if($statusId) {
                    $arrayName = array('response' => 'success');
                    echo json_encode($arrayName);
                } else {
                    $arrayName = array('response' => 'failed');
                    echo json_encode($arrayName);
                }
            }
        }
    } 

    public function customerStatus() {
        $this->form_validation->set_rules('id', 'Customer Id', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            return;
        } else {
            $where = array('id' => $this->input->post('id'));
            if($this->input->post('status') == 0) {
                $updateData = array(
                    'status' => $this->input->post('status'),
                    'lastArchiveBy' => $this->session->userdata('id'),
                    'lastArchiveDateTime' => $this->systemDateTime
                );
            } else {
                $updateData = array(
                    'status' => $this->input->post('status'),
                    'lastActiveBy' => $this->session->userdata('id'),
                    'lastActiveDateTime' => $this->systemDateTime
                );
            }
            $result = $this->database_model->data_update_return("list_business_member", $updateData, $where);
            if($result == 1) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            }
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */