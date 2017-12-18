<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends BC_Controller {
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

    public function self($id='') {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('profile/self/');
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('profile/self/');
        } else {
            $data['titleHeader'] = 'Own';
            $data['self_info'] = $this->bcare_user->getSelfInfo($this->session->userdata('idLive'));
            $data['self_local'] = $this->data_model->get_all_info('*', array('engineId' => $this->session->userdata('idLive')), 'list_team');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['allTransactionInfo'] = $this->data_model->get_all_info('*', array('docType' => 'Transaction', 'teamMember' => $data['self_local'][0]->id), 'list_transaction');
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['main_content'] = 'user_profile';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function customer($id) {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('profile/customer/'.$id);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('profile/customer/'.$id);
        } else {
            $data['titleHeader'] = 'Customer';
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['self_info'] = $this->data_model->get_all_info('*', array('id' => $id), 'list_business_member');
            $data['allInfo'] = $this->data_model->get_all_info('*', array('customerId' => $id), 'list_document');
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['main_content'] = 'customer_profile';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function vendor($id) {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('profile/vendor/'.$id);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('profile/vendor/'.$id);
        } else {
            $data['titleHeader'] = 'Vendor';
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['self_info'] = $this->data_model->get_all_info('*', array('id' => $id), 'list_business_member');
            $data['allInfo'] = $this->data_model->get_all_info('*', array('customerId' => $id), 'list_document');
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['main_content'] = 'vendor_profile';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function team($id) {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('profile/team/'.$id);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('profile/team/'.$id);
        } else {
            $data['titleHeader'] = 'Team Member';
            $data['self_info'] = $this->bcare_user->getSelfInfo($id);
            $data['self_local'] = $this->data_model->get_all_info('*', array('engineId' => $id), 'list_team');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['allTransactionInfo'] = $this->data_model->get_all_info('*', array('docType' => 'Transaction', 'teamMember' => $data['self_local'][0]->id), 'list_transaction');
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['main_content'] = 'user_profile';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function resellerPeofileImageUpload() {
        $status = "";
        $msg = "";
        $image = "";
        $file_element_name = 'image_data';
        $userId = $this->input->post('userid');
         
        if ($status != "error") {
            $config['upload_path'] = './assets/uploadedFile/profilePicture/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
     
            if (!$this->upload->do_upload($file_element_name)) {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            } else {
                $data = $this->upload->data();
                $file_id = $this->bcare_user->updateResellerProfileImage($data['file_name'], $userId);
                
                if($file_id) {
                    if($file_id->status == "success") {
                        $status = "success";
                        $msg = "File successfully uploaded";
                        $image = $data['file_name']; 
                        if($file_id->oldPicture[0]->picture != "" && file_exists($config['upload_path']."".$this->session->userdata('picture'))) {
                            unlink($config['upload_path']."".$this->session->userdata('picture'));
                        }                       
                    } else {
                        unlink($data['full_path']);
                        $status = "error";
                        $msg = "Something went wrong when saving the file, please try again.";
                    }
                } else {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        echo json_encode(array('status' => $status, 'msg' => $msg, 'image' => $image));
    }

    public function setSesstionByAjax($userValue) {
        $this->session->set_userdata("$userValue", $this->input->post('userInput'));     
        $arrayName = array('response' => 'success');
        echo json_encode($arrayName);
    }

    public function setSesstionPassword() {
        $this->session->set_userdata('ownPass', 'ownPassPermited');     
    }

    public function unsetSesstionPassword() { 
        $this->session->unset_userdata('ownPass');   
    }

    public function unsetSesstionForLock() { 
        $this->session->unset_userdata('generate_token');   
        echo json_encode(array('status' => 'success'));
    }

    public function generateResellerPassword() {
        $password = $this->generateStrongPassword(rand(8,12), FALSE, "luds", TRUE);
        if($password != "") {
            echo json_encode(array('status' => 'success', 'result' => $password));
        } else {
            echo json_encode(array('status' => 'failed'));
        }
    }

    public function liveInputCheck($userValue) {
        $userInput = $this->sanitize($this->input->post('userInput'));
        $result = $this->bcare_user->liveInputCheck($userInput, $userValue);
        echo json_encode($result);
    }

    public function resellerProfile() {
        $formData = $this->sanitize($this->input->post());
        $result = $this->bcare_user->resellerProfile($formData);
        echo json_encode($result);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */