<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sendmails extends BC_Controller {
    
    public function __construct() {
        parent::__construct();

        // $this->timezone = "Asia/Dhaka";
        // date_default_timezone_set($this->timezone);
        $this->systemDate = date('Y-m-d');
        $this->systemDateTime = date('Y-m-d h:i:s A');
        $this->serverMilisecons = $_SERVER["REQUEST_TIME"];

        $this->load->library('user_agent');
        if (!$this->agent->is_referral()) {    
            //$this->session->set_userdata('lastURI', uri_string());    
            //$this->load->view('url_manipulate');        
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
        $this->load->library('email');
        $this->load->model('database_model');
        $this->load->model('data_model'); 
    }

    public function index(){
        $this->load->view('report_balance_sheet');
    }

    public function mailSend() {
        $config = array();
        $config['wordwrap'] = TRUE; // TRUE or FALSE (boolean)    Enable word-wrap.
        $config['wrapchars'] = 76; // Character count to wrap at.
        $config['mailtype'] = 'html'; // text or html Type of mail. If you send HTML email you must send it as a complete web page. Make sure you don't have any relative links or relative image paths otherwise they will not work.
        $config['charset'] = 'utf-8'; // Character set (utf-8, iso-8859-1, etc.).
        $config['validate'] = FALSE; // TRUE or FALSE (boolean)    Whether to validate the email address.
        $config['priority'] = 1; // 1, 2, 3, 4, 5    Email Priority. 1 = highest. 5 = lowest. 3 = normal.
        $config['crlf'] = "\r\n"; // "\r\n" or "\n" or "\r" Newline character. (Use "\r\n" to comply with RFC 822).
        $config['newline'] = "\r\n";
        $this->email->initialize($config);    
        $this->email->set_newline("\r\n"); 
        $data['logo'] = '<img width="50" border="0" style="display: block; width: 50px; border-radius:50%" src="'.base_url().'assets/uploadedFile/customerPicture/'.$this->input->post("customerPicture").'" alt="'.ucfirst($this->input->post("companyName")).'" />';
        $data['emailTemplates'] = $this->input->post("emailMessage");
        $data['copyright'] = 'Copyright <a href="" style="text-decoration: none; color: #000;">'.ucfirst($this->input->post("companyName")).'</a> All rights reserved.';
        $this->email->from($this->input->post("emailSender"), ucfirst($this->input->post("companyName")));
        $this->email->reply_to($this->input->post("emailSender"), ucfirst($this->input->post("companyName")));
        $this->email->to($this->input->post("emailReceiver"));
        $this->email->subject($this->input->post("emailSubject"));
        $message = $this->load->view('email_templates',$data,TRUE);
        $this->email->message($message);
        if($this->email->send()) {
            $arrayName = array('response' => 'success');
            echo json_encode($arrayName);
        } else {
            $arrayName = array('response' => 'failed');
            echo json_encode($arrayName);
        }
    }
}
?>