<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_upload extends BC_Controller {
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

    public function profilePicture() {
        $status = "";
        $msg = "";
        $image = "";
        $file_element_name = 'image_data';
        if($this->input->post('userType') == 'self') {
            $userId = $this->session->userdata('id');
            $userType = 'team';
        } else {
            $userId = $this->input->post('userid');
            $userType = $this->input->post('userType');
        }
         
        if ($status != "error") {
            if($userType == 'team') {
                $config['upload_path'] = './assets/uploadedFile/profilePicture/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 1024 * 8;
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
            }
            if($userType == 'customer') {
                $config['upload_path'] = './assets/uploadedFile/customerPicture/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 1024 * 8;
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
            }
            if($userType == 'vendor') {
                $config['upload_path'] = './assets/uploadedFile/vendorPicture/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 1024 * 8;
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
            }
     
            if (!$this->upload->do_upload($file_element_name)) {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            } else {
                $data = $this->upload->data();
                if($userType == 'team') {
                    $where = array('engineId' => $userId);
                    $updateData = array('picture' => $data['file_name']);
                    $oldPicture = $this->data_model->get_specific_column('picture', $where, 'list_team');
                    $file_id = $this->database_model->data_update_return('list_team', $updateData, $where);
                } else {
                    $where = array('id' => $userId);
                    $updateData = array('logo' => $data['file_name']);
                    $oldPicture = $this->data_model->get_specific_column('logo', $where, 'list_business_member');
                    $file_id = $this->database_model->data_update_return('list_business_member', $updateData, $where);
                }
                if($file_id) {
                    $status = "success";
                    $msg = "File successfully uploaded";
                    $image = $data['file_name']; 
                    if($userType == 'team') {
                        if($this->session->userdata('picture') != "" && file_exists($config['upload_path']."".$this->session->userdata('picture'))) {
                            // unlink($config['upload_path']."".$this->session->userdata('picture'));
                        }
                        // else {
                        //     if($oldPicture[0]->picture != "" && file_exists($config['upload_path']."".$oldPicture[0]->picture)) {
                        //         unlink($config['upload_path']."".$oldPicture[0]->picture);
                        //     }
                        // }
                    } else {
                        if($oldPicture[0]->logo != "" && file_exists($config['upload_path']."".$oldPicture[0]->logo)) {
                            unlink($config['upload_path']."".$oldPicture[0]->logo);
                        }
                    }
                } else {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        if($userId == $this->session->userdata('id')) {
            echo json_encode(array('status' => $status, 'baseId' => $userId, 'msg' => $msg, 'image' => $image));
        } else {
            echo json_encode(array('status' => $status, 'baseId' => $userId, 'msg' => $msg, 'image' => $image));
        }
    }

    public function setSesstionByAjax($userValue) {
        $this->session->set_userdata("$userValue", $this->input->post('userInput'));   
        print_r($this->session->userdata());  
        $arrayName = array('response' => 'success');
        echo json_encode($arrayName);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */