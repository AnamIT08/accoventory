<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BC_Controller extends CI_Controller {

    // blowfish
    private static $algo = '$2a99#';
    // cost parameter
    private static $cost = '$13';

	public function __construct() {
		/*
		if (isset($_SERVER['REMOTE_ADDR'])) {
            die('Command Line Only!');
        } 
        */   
        parent::__construct();	  
		if($_SERVER["SERVER_NAME"] == 'localhost') {
			$CI =& get_instance();
			$CI->output->enable_profiler(TRUE);
		} 
	}
	
	public function is_logged_in() {
    	if($this->session->userdata('is_logged_in') == TRUE)
    		return TRUE;
    	else 
			return FALSE;
    }
 
    // mainly for internal use
    public static function unique_salt() {
        return substr(sha1(mt_rand()),0,22);
    }
 
    // this will be used to generate a hash
    public static function hash($password) {
        return crypt($password, self::$algo . self::$cost . '$' . self::unique_salt());
    } 
 
    // this will be used to compare a password against a hash
    public static function check_password($hash, $password) {
        $full_salt = substr($hash, 0, 29);
        $new_hash = crypt($password, $full_salt);
        return ($hash == $new_hash);
    }

	public function modified_password($password) {
		$array = str_split($password);
		$i = 0;
		$a = $b =NULL;
		foreach ($array as $ar) {
			if($i%2==0){
				$a .= $ar;
			} else {
				$b .= $ar;
			}
			$i++;
		}
		//echo "<b>Normal Pass: </b>".$password."<br/>";
		$mid = $this->hash_password($password);
		//echo "<b>Hashed Pass: </b>".$mid."<br/>";
		$password = md5($a).$mid.md5($b);
		//echo "<b>Another encrypt: </b>".$password."<br/>";
		$new_password = md5($password);
		//echo "<b>New Pass: </b>".$new_password."<br/>";
		return $new_password;
	}

	public function hashed_password($password) {
		$ultimate_password = $this->hash($this->modified_password($password));
		//echo "<b>Ultimate Pass: </b>".$ultimate_password."<br/>";
		return $ultimate_password;
	}

	public function hash_password($password) {
		$salt = bin2hex($password);
		//echo "<b>Salt: </b>".$salt."<br/>";
		$hash = hash('sha512', $salt);
		//echo "<b>Hash: </b>".$hash."<br/>";
		return $salt.$hash;
	}

	//Generate Password
	public function generateStrongPassword($length, $add_dashes, $available_sets) {
		$sets = array();
		if(strpos($available_sets, 'l') !== false)
			$sets[] = 'abcdefghjkmnpqrstuvwxyz';
		if(strpos($available_sets, 'u') !== false)
			$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
		if(strpos($available_sets, 'd') !== false)
			$sets[] = '0123456789';
		if(strpos($available_sets, 's') !== false)
			$sets[] = '!@#$%&*?';
			$all = '';
			$password = '';
			foreach($sets as $set) {
				$password .= $set[array_rand(str_split($set))];
				$all .= $set;
			}
			$all = str_split($all);
			for($i = 0; $i < $length - count($sets); $i++)
				$password .= $all[array_rand($all)];
				$password = str_shuffle($password);
			if(!$add_dashes)
				return $password;
			$dash_len = floor(sqrt($length));
			$dash_str = '';
			while(strlen($password) > $dash_len) {
				$dash_str .= substr($password, 0, $dash_len) . '-';
				$password = substr($password, $dash_len);
			}
		$dash_str .= $password;
		return $dash_str;
	}

	//data senitization
	public function sanitize($input) {
		if (is_array($input)) {
			foreach($input as $var=>$val) {
				$output[$var] = $this->sanitize($val);
			}
		} else {
			if (get_magic_quotes_gpc()) {
				$input = stripslashes($input);
			}
				$input  = $this->cleanInput($input);
				//$output = mysqli_real_escape_string($this->get_mysqli(), $input);
				$output = $input; //mysqli_real_escape_string($this->get_mysqli(), $input);
			}
			return $output;
		}


	//data senitization
	public function cleanInput($input) {

		$search = array(
		'@<script[^>]*?>.*?</script>@si',   // Strip out javascript
		'@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
		'@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
		'@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
		);

		$output = preg_replace($search, '', $input);
		return $output;
	}

	public function show_all_events($uid) {
		$jsonevents = array();
		$this->load->model('calendar_model'); 
		$event = $this->calendar_model->get_events($uid);
		foreach($event as $entry) {
	        $jsonevents[] = array(
	            'id' => $entry->id,
	            'title' => $entry->title,
	            'start' => $entry->start,
	            'end' => $entry->end,
	            'description' => $entry->url,
	            'allDay' => $entry->allDay,
	            'color' => $entry->priority,
	        );
	    }
	    return json_encode($jsonevents);
	}

	public function home($page=''){
		$this->benchmark->mark('generate_start');
        $data['redirectUrl'] = $page;
		$this->load->view('login', $data);
		$this->benchmark->mark('generate_end');
	}
	
	public function lock($page=''){
		$this->benchmark->mark('generate_start');
		$data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
		$data['redirectUrl'] = $page;
		$this->load->view('lock', $data);
		$this->benchmark->mark('generate_end');
	}

	public function emailMessageSend($mailTo, $fromMail='', $fromName='', $subject='', $message='') {
		$this->load->library('email');
		$this->email->set_mailtype("html");
		$this->email->from($fromMail, $fromName);
		$this->email->to($mailTo);
		$this->email->subject($subject);
		$this->email->message($message);
		if($this->email->send()) {
			return "SENT";
		} else {
			return "NOT SENT";
		}
	}

	public function generatePassword() {
        $need_return = TRUE;
		$dataPass = $this->generateStrongPassword(rand(8,12), FALSE, "luds", $need_return);
		echo $dataPass;
	}

	public function get_mysqli() { 
		$db = (array)get_instance()->db;
		return mysqli_connect('localhost', $db['username'], $db['password'], $db['database']);
	}

	public function formatNumber($number, $decimal=0, $decimalSeperator='.', $numberSeperator=',') {
	    return number_format($number, $decimal, $decimalSeperator, $numberSeperator);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */