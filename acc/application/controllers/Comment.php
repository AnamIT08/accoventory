<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends BC_Controller {
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

    public function processComment() {
        $id = $this->sanitize($this->input->post('activityId'));
        $where = array('id' => $this->sanitize($this->input->post('commentId'.$id)));
        if($this->sanitize($this->input->post('commentProcess'.$id)) == 0) {
            $insertData = array(
                'systemId' => $this->sanitize($this->input->post('commentCode'.$id)),
                'docType' => $this->sanitize($this->input->post('commentType'.$id)),
                'docId' => $id,
                'commentIcon' => $this->sanitize($this->input->post('activityType'.$id)),
                'comments' => $this->sanitize($this->input->post('hiddenMessage'.$id)),
                'createdBy' => $this->session->userdata('id'),
                'createdDateTime' => $this->systemDateTime
            );
            $statusId = $this->database_model->data_insert_return("list_all_comment", $insertData);
            if($statusId) {
                $arrayName = array('response' => 'success', 'commentId' => $statusId);
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        } else {
            $updateData = array(
                'commentIcon' => $this->sanitize($this->input->post('activityType'.$id)),
                'comments' => $this->sanitize($this->input->post('hiddenMessage'.$id)),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $statusId = $this->database_model->data_update_return("list_all_comment", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function removeComment() {
        $this->database_model->data_delete('list_all_comment', array('id' => $this->sanitize($this->input->post('id'))));
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */