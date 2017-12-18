<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends BC_Controller {
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

    public function index() {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('dashboard');
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->home('dashboard');
        } else if($this->is_logged_in()) {
            if($this->session->userdata('isDashboard') == 1) {
                redirect("dashboard", "location");
            } else {
                redirect("profile/self", "location");
            }
        } else {
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['main_content'] = 'login';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function userLoginCheck() {
        $userName = $this->sanitize($this->input->post('email'));
        $hashData = $this->sanitize($this->input->post('password'));
        $result = $this->bcare_user->userLoginCheck($userName, $hashData);

        if($result->status == 'success') {
            $userDetails = $this->data_model->get_all_info('*', array('id' => $result->session_data->localSystemId), 'list_team');
            $sessionData = array(
                'id'             => $result->session_data->localSystemId,
                'userNameFull'   => $result->session_data->userNameFull,
                'userEmail'      => $result->session_data->userEmail,
                'userMobileNo'   => $result->session_data->userMobileNo,
                'menuSettings'   => $result->session_data->menuSettings,
                'menuSort'       => $result->session_data->menuSort,
                'idLive'         => $userDetails[0]->engineId,
                'staffType'      => $userDetails[0]->staffType,
                'picture'        => $userDetails[0]->picture,
                'isDashboard'    => $result->session_data->isDashboard,
                'generate_token' => $this->generateStrongPassword(63, TRUE, "luds", TRUE),
                'is_logged_in'   => TRUE
            );
            $this->session->set_userdata($sessionData);
            
            $resultArray = array('status' => $result->status, 'isDashboard' => $result->session_data->isDashboard, 'profile' => $userDetails[0]->engineId, 'redirectUrl' => $this->input->post('redirectUrl'));
            echo json_encode($resultArray);
        } else {
            echo json_encode($result);
        }
    }

    public function userLockCheck() {
        $userName = $this->sanitize($this->session->userdata('userEmail'));
        $hashData = $this->sanitize($this->input->post('password'));
        $result = $this->bcare_user->userLoginCheck($userName, $hashData);

        if($result->status == 'success') {
            $sessionData = array(
                'id'             => $result->session_data->id,
                'userNameFull'   => $result->session_data->userNameFull,
                'userEmail'      => $result->session_data->userEmail,
                'userMobileNo'   => $result->session_data->userMobileNo,
                'picture'        => $result->session_data->picture,
                'generate_token' => $this->generateStrongPassword(63, TRUE, "luds", TRUE),
                'is_logged_in'   => TRUE
            );
            $this->session->set_userdata($sessionData);
            
            $resultArray = array('status' => $result->status, 'redirectUrl' => $this->input->post('redirectUrl'));
            echo json_encode($resultArray);
        } else {
            echo json_encode($result);
        }
    }

    public function userLoginCheckOTP () {
        $userName = $this->sanitize($this->input->post('email'));
        $hashData = $this->sanitize($this->input->post('otp'));
        $result = $this->bcare_user->userLoginCheckOTP($userName, $hashData);
        if($result->status == 'success') {
            $userDetails = $this->data_model->get_all_info('*', array('id' => $result->session_data->localSystemId), 'list_team');
            $sessionData = array(
                'id'             => $result->session_data->localSystemId,
                'userNameFull'   => $result->session_data->userNameFull,
                'userEmail'      => $result->session_data->userEmail,
                'userMobileNo'   => $result->session_data->userMobileNo,
                'menuSettings'   => $result->session_data->menuSettings,
                'menuSort'       => $result->session_data->menuSort,
                'idLive'         => $userDetails[0]->engineId,
                'staffType'      => $userDetails[0]->staffType,
                'picture'        => $userDetails[0]->picture,
                'isDashboard'    => $result->session_data->isDashboard,
                'generate_token' => $this->generateStrongPassword(63, TRUE, "luds", TRUE),
                'is_logged_in'   => TRUE
            );
            $this->session->set_userdata($sessionData);
            $resultArray = array('status' => $result->status, 'isDashboard' => $result->session_data->isDashboard, 'profile' => $userDetails[0]->engineId, 'redirectUrl' => $this->input->post('redirectUrl'));
            echo json_encode($resultArray);
        } else {
            echo json_encode($result);
        }
    }

    public function generateOTP() {
        $userEmail = $this->sanitize($this->input->post('email'));
        $result = $this->bcare_user->generateOTP($userEmail);
        echo json_encode($result);
    }

    public function generateActivationCode() {
        $userEmail = $this->sanitize($this->input->post('email'));
        $result = $this->bcare_user->generateActivationCode($userEmail);
        echo json_encode($result);
    }

    public function forget_password() {
        $userEmail = $this->sanitize($this->input->post('email'));
        $url = $this->sanitize($this->input->post('url'));
        $result = $this->bcare_user->forget_password($userEmail, $url);
        echo json_encode($result);
    }

    public function account_status($type='', $code='') {
        $this->benchmark->mark('generate_start');
        $data['account_status'] = $this->account_status_check($type, $code);
        $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
        $data['main_content'] = 'account_status';
        $this->load->view('template', $data);
        $this->benchmark->mark('generate_end');
    }

    public function account_status_check($type, $activationKey) {
        $password = $this->bcare_user->account_status_check($type, $activationKey); 
        return $password->statusOption;
    }

    public function forget_password_change() {
        $password = $this->sanitize($this->input->post('password'));
        $hiddenKey = $this->sanitize($this->input->post('hidden_key'));
        $result = $this->bcare_user->forget_password_change($password, $hiddenKey);
        echo json_encode($result);
    }

    public function activationCodeResend() {
        $type = $this->sanitize($this->input->post('type'));
        $key = $this->sanitize($this->input->post('key'));
        $result = $this->bcare_user->activationCodeResend($type, $key);
        echo json_encode($result);
    }

    public function logout() {
        $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
        $invoiceCustomer = '';
        if($data['totalActivity'] < 10) {
            $systemId = "bclogout-00000".++$data['totalActivity'];
        } else if($data['totalActivity'] < 100) {
            $systemId = "bclogout-0000".++$data['totalActivity'];                
        } else if($data['totalActivity'] < 1000) {
            $systemId = "bclogout-000".++$data['totalActivity'];                
        } else if($data['totalActivity'] < 10000) {
            $systemId = "bclogout-00".++$data['totalActivity'];                
        } else if($data['totalActivity'] < 100000) {
            $systemId = "bclogout-0".++$data['totalActivity'];
        }
        
        $this->session->unset_userdata('is_logged_in');
        $this->session->sess_destroy();
        if($this->session->userdata('id') != '') {
            $data_arr = array(
                'systemId' => $systemId,
                'userId' => $this->session->userdata('id'),
                'workType' => 'Logout',
                'iconType' => 'fa-user',
                'iconLabel' => 'label-success',
                'ip_address' => $this->input->ip_address(),
                'systemDateTime' => $this->systemDateTime
            );
            $this->database_model->data_insert("history_list_recent_activities", $data_arr);
        }
        redirect('', 'refresh');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */