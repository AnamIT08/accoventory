<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team extends BC_Controller {
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
            $this->home('team/');
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('team/');
        } else {
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['totalTeam'] = $this->data_model->count_specific_table_without_where('list_team');
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['allMenus'] = $this->data_model->get_all_info('*', array('menuPosition' => 0), 'settings_menu');
            $data['main_content'] = 'team_list';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function edit($parameter='') {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('team/');
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('team/');
        } else {
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['totalTeam'] = $this->data_model->count_specific_table_without_where('list_team');
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['allMenus'] = $this->data_model->get_all_info('*', array('menuPosition' => 0), 'settings_menu');
            $data['main_content'] = 'team_list';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }  

    public function createTeam() {
        $inputName = $this->sanitize($this->input->post('name'));
        $email = $this->sanitize($this->input->post('email'));
        $phone = $this->sanitize($this->input->post('phone'));
        $staff = $this->sanitize($this->input->post('staff'));
        $pass = $this->sanitize($this->input->post('pass'));
        $picture = $this->sanitize($this->input->post('picture'));
        $isDashboard = 0;
        $settingsMenu = '';
        $sortMenu = '';
        $menuSettings = $this->sanitize($this->input->post('menuSettings'));
        $active = $this->sanitize($this->input->post('activeTeam'));
        if($menuSettings != '') {
            for ($i = 0; $i < count($menuSettings); $i++) { 
                if($menuSettings[$i] == 10) {
                    $isDashboard = 1;
                }
                $name = $this->data_model->get_all_info('baseMenuTitle', array('id' => $menuSettings[$i]), 'settings_menu');
                $settingsMenu .= $menuSettings[$i].",";
                $sortMenu .= $name[0]->baseMenuTitle.",";
            }
        }
        $settingsMenu = trim($settingsMenu, ',');
        $sortMenu = trim($sortMenu, ',');
        $insertData = array(
            'systemId' => $this->sanitize($this->input->post('teamSystemCode')),
            'name' => $inputName,
            'engineId' => 0,
            'staffType' => $staff,
            'picture' => $picture,
            'status' => $active,
            'picture' => $picture,
            'createdBy' => $this->session->userdata('id'),
            'createdDateTime' => $this->systemDateTime
        );
        $insertId = $this->database_model->data_insert_return('list_team', $insertData);
        $resultLive = $this->bcare_user->create_team($inputName, $email, $phone, $pass, $isDashboard, $settingsMenu, $sortMenu, $insertId, $active, $this->session->userdata('id'));
        $updateData = array(
            'engineId' => $resultLive->idLive
        );
        $where = array('id' => $insertId);
        $result = $this->database_model->data_update_return('list_team', $updateData, $where);
        if($result) {
            $resultArray = array('response' => 'success', 'idLive' => $resultLive->idLive);
            echo json_encode($resultArray);
        } else {
            $resultArray = array('response' => 'failed', 'errorReason' => 'syatemError');
            echo json_encode($resultArray);
        }
    }

    public function updateTeam() {
        $inputName = $this->sanitize($this->input->post('name'));
        $email = $this->sanitize($this->input->post('email'));
        $phone = $this->sanitize($this->input->post('phone'));
        $staff = $this->sanitize($this->input->post('staff'));
        $pass = $this->sanitize($this->input->post('pass'));
        $picture = $this->sanitize($this->input->post('picture'));
        $isDashboard = 0;
        $settingsMenu = '';
        $sortMenu = '';
        $isOwn = 0;
        $menuSettings = $this->sanitize($this->input->post('menuSettings'));
        $active = $this->sanitize($this->input->post('activeTeam'));
        
        if($this->session->userdata('id') == $this->input->post('teamLiveId')) {
            $isOwn = 1;
        } else {
            $isOwn = 0;
            if($menuSettings != '') {
                for ($i = 0; $i < count($menuSettings); $i++) { 
                    if($menuSettings[$i] == 10) {
                        $isDashboard = 1;
                    }
                    $name = $this->data_model->get_all_info('baseMenuTitle', array('id' => $menuSettings[$i]), 'settings_menu');
                    $settingsMenu .= $menuSettings[$i].",";
                    $sortMenu .= $name[0]->baseMenuTitle.",";
                } 
            }           
            $settingsMenu = trim($settingsMenu, ',');
        }
        $sortMenu = trim($sortMenu, ',');
        $updateData = array(
            'name' => $inputName,
            'picture' => $picture,
            'status' => $active,
            'lastUpdateBy' => $this->session->userdata('id'),
            'lastUpdateDateTime' => $this->systemDateTime
        );
        $where = array('id' => $this->input->post('teamEditId'));
        $updateId = $this->database_model->data_update_return('list_team', $updateData, $where);
        $resultLive = $this->bcare_user->update_team($inputName, $email, $phone, $pass, $isDashboard, $settingsMenu, $sortMenu, $active, $isOwn, $this->input->post('teamLiveId'));
        if($resultLive) {
            $resultArray = array('response' => 'success');
            echo json_encode($resultArray);
        } else {
            $resultArray = array('response' => 'failed', 'errorReason' => 'syatemError');
            echo json_encode($resultArray);
        }
    }

    public function resetPass() {
        $data = $this->input->post('column');
        $result = $this->bcare_user->resetPass($data[0], $data[1]);
        if($result) {
            $resultArray = array('response' => 'success');
            echo json_encode($resultArray);
        } else {
            $resultArray = array('response' => 'failed', 'errorReason' => 'syatemError');
            echo json_encode($resultArray);
        }
    }

    public function menuSort() {
        $menuSort = implode(',', $this->input->post('sort'));
        $sessionMenu = explode(',', $this->session->userdata('menuSort'));
        if(in_array('settings', $sessionMenu)) {
            $menuSort .= ',settings';
        }
        if(in_array('dashboard', $sessionMenu)) {
            $menuSort .= ',dashboard';
        }
        $result = $this->bcare_user->menuSort($this->session->userdata('id'), strtolower($menuSort));
        if($result) {
            $this->session->set_userdata('menuSort', $menuSort);
            $resultArray = array('response' => 'success');
            echo json_encode($resultArray);
        } else {
            $resultArray = array('response' => 'failed', 'errorReason' => 'syatemError');
            echo json_encode($resultArray);
        }
    }

    public function liveInputCheck() {
        $data = $this->input->post('column');
        $result = $this->bcare_user->liveInputCheck($data[0], $data[1]);
        if($result->status == 'success') {
            $resultArray = array('response' => 'success');
            echo json_encode($resultArray);
        } else {
            $resultArray = array('response' => 'faild');
            echo json_encode($resultArray);
        }
    }

    public function liveInputCheckEdit() {
        $data = $this->input->post('column');
        $result = $this->bcare_user->liveInputCheckEdit($data[0], $data[1], $data[2]);
        if($result->status == 'success') {
            $resultArray = array('response' => 'success');
            echo json_encode($resultArray);
        } else {
            $resultArray = array('response' => 'faild');
            echo json_encode($resultArray);
        }
    }

    public function fileExists() {
        if($this->input->post('file') != "") {
            if (file_exists('./assets/uploadedFile/profilePicture/'.$this->input->post('file'))) {
                $resultArray = array('response' => 'success');
                echo json_encode($resultArray);
            } else {
                $resultArray = array('response' => 'faild');
                echo json_encode($resultArray);
            }
        } else {
            $resultArray = array('response' => 'faild');
            echo json_encode($resultArray);
        }
    }

    public function getTeam() {
        $name = $this->data_model->get_all_info('*', array('id' => $this->input->post('id')), 'list_team');
        $arrayName = array('response' => $name[0]->name);
        echo json_encode($arrayName);
    }

    public function teamStatus() {
        $this->form_validation->set_rules('id', 'Customer Id', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            return;
        } else {
            $result = $this->bcare_user->teamStatus($this->input->post('id'), $this->input->post('status'));
            if($result) {
                $where = array('engineId' => $this->input->post('id'));
                if($this->input->post('status') == 0) {
                    $updateData = array(
                        'status' => $this->input->post('status'),
                        'lastArchiveBy' => $this->session->userdata('id'),
                        'lastArchiveDateTime' => $this->systemDateTime
                    );
                } else {
                    $updateData = array(
                        'status' => $this->input->post('status'),
                        'lastActiveBy' => $this->session->userdata('engineId'),
                        'lastActiveDateTime' => $this->systemDateTime
                    );
                }
                $this->database_model->data_update_return("list_team", $updateData, $where);
                $resultArray = array('response' => 'success');
                echo json_encode($resultArray);
            } else {
                $resultArray = array('response' => 'failed', 'errorReason' => 'syatemError');
                echo json_encode($resultArray);
            }
        }
    }

    public function checkPass() {
        $data = $this->input->post('column');
        $result = $this->bcare_user->checkPass($this->session->userdata('userEmail'), $data[0]);
        if($result->status == 'success') {
            $resultArray = array('response' => 'success');
            echo json_encode($resultArray);
        } else {
            $resultArray = array('response' => 'failed', 'errorReason' => 'syatemError');
            echo json_encode($resultArray);
        }
    }

    public function teamAll() {
        $this->form_validation->set_rules('id', 'Customer Id', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            return;
        } else {
            $result = $this->bcare_user->teamAll($this->input->post('status'));
            if($result) {
                $where = array('staffType !=' => 'BCSadmin');
                $updateData = array(
                    'status' => $this->input->post('status')
                );
                $this->database_model->data_update_return("list_team", $updateData, $where);
                $resultArray = array('response' => 'success');
                echo json_encode($resultArray);
            } else {
                $resultArray = array('response' => 'failed', 'errorReason' => 'syatemError');
                echo json_encode($resultArray);
            }
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */