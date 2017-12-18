<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Bcare Class
 *
 * @package     Bcare
 * @subpackage  Libraries
 * @category    Login Gateway
 * @author      Business Care
 */
class Bcare_user {
    const APP_ID = 2;
    const ERR_NONE                     = 0;
    const ERR_SYSTEM_AUTH_FAIL         = 1;
    const ERR_user_AUTH_FAIL       = 2;
    // const ERR_SEND_MESSAGE_FAIL        = 2;
    // const ERR_SESSION_EXPIRED          = 3;
    // const ERR_PING_FAIL                = 4;
    // const ERR_CALL_FAIL                = 5;

    // public vars
    public $error = SELF::ERR_NONE;
    public $error_message = '';
    public $app_name = '';

    // private vars
    private $ci;
    private $session_id = FALSE;
    private $user_id;
    // const BASEURL = "http://www.api.accoventory.vertexit.org/";
    const BASEURL = "http://www.demoapi.accoventory.vertexit.org/";
    // const BASEURL = "http://www.devapi.accoventory.vertexit.org/";
    // const BASEURL = "http://localhost/bengine/";
    

    /**
     * Class constructor - loads CodeIgnighter and Configs
     */
    public function __construct() {
        $this->ci =& get_instance();
        $this->ci->config->load('bcare_system_user');
        $this->username = $this->ci->config->item('bcare_username');
        $this->password = $this->ci->config->item('bcare_password');
        $this->api_id   = $this->ci->config->item('bcare_api_id');
        $this->app_name = 'AccounTingFirsT';
    }

    public function _isCurl(){
        return function_exists('curl_version');
    }

    /**
     * Method for Authentication with Bcare
     *
     * @return string $session_id
     */
    public function authenticateCore() {
        $responseResult = '';
        if($this->_iscurl()) {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => self::BASEURL.'api/api_login_user/user_authentication_check',
                CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => array(
                    'bcare_username' => $this->username,
                    'bcare_password' => $this->password,
                    'bcare_api_id' => $this->api_id,
                    'app_name' => $this->app_name
                )
            ));
            $result = curl_exec($curl);
            if($result === FALSE) {
                $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                return $responseResult;
            } else {
                $responseResult = json_decode($result);
                if ($responseResult->status == 'success') {
                    return $responseResult;
                } else {
                    $this->error = self::ERR_user_AUTH_FAIL;
                    $this->error_message = $responseResult->status;
                    return $responseResult;
                }
            }
            curl_close($curl);
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }   
    }

    public function userLoginCheck($userName, $hashData) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/user_login_check',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'email' => $userName,
                        'password' => $hashData
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function userLoginCheckOTP($userName, $hashData) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/user_login_check_OTP',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'email' => $userName,
                        'otp' => $hashData
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function generateOTP($userEmail) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/generateOTP',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'email' => $userEmail
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function forget_password($userEmail, $url) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/forget_password',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'email' => $userEmail,
                        'url' => $url
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function forget_password_change($password, $hiddenKey) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/forget_password_change',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'password' => $password,
                        'hidden_key' => $hiddenKey
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function account_status_check($type, $activationCode) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/account_status_check',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'activationKey' => $activationCode
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result); 
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function getSelfInfo($userId) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/getSelfInfo',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'userId' => $userId
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function liveInputCheck($userInput, $userValue) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/liveInputCheck',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'userInput' => $userInput,
                        'userValue' => $userValue
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function liveInputCheckEdit($userInput, $userValue, $idValue) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/liveInputCheckEdit',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'userInput' => $userInput,
                        'userValue' => $userValue,
                        'idValue' => $idValue
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }      

    public function create_team($inputName, $email, $phone, $pass, $isDashboard, $settingsMenu, $sortMenu, $insertId, $active, $createdBy) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/create_team',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_RETURNTRANSFER => TRUE,
                    CURLOPT_POST => TRUE,
                    CURLOPT_POSTFIELDS => array(
                        'app_id'        => self::APP_ID,
                        'name'          => $inputName,
                        'email'         => $email,
                        'phone'         => $phone,
                        'pass'          => $pass,
                        'settingsMenu'  => $settingsMenu,
                        'sortMenu'      => $sortMenu,
                        'isDashboard'   => $isDashboard,
                        'insertId'      => $insertId,
                        'active'        => $active,
                        'createdBy'     => $createdBy 
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function update_team($inputName, $email, $phone, $pass, $isDashboard, $settingsMenu, $sortMenu, $active, $isOwn, $update) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/update_team',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_RETURNTRANSFER => TRUE,
                    CURLOPT_POST => TRUE,
                    CURLOPT_POSTFIELDS => array(
                        'app_id'        => self::APP_ID,
                        'name'          => $inputName,
                        'email'         => $email,
                        'phone'         => $phone,
                        'pass'          => $pass,
                        'settingsMenu'  => $settingsMenu,
                        'sortMenu'      => $sortMenu,
                        'isDashboard'   => $isDashboard,
                        'active'        => $active,
                        'isOwn'         => $isOwn,
                        'updateId'      => $update 
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function resetPass($userValue, $idValue) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/resetPass',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'app_id' => self::APP_ID,
                        'userValue' => $userValue,
                        'idValue' => $idValue
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function menuSort($userId, $idValue) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/menuSort',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'userId' => $userId,
                        'idValue' => $idValue
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function checkPass($userEmail, $userPass) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/checkPass',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'email' => $userEmail,
                        'oldPass' => $userPass
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function teamStatus($userId, $idStatus) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/teamStatus',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'userId' => $userId,
                        'idStatus' => $idStatus
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function teamAll($idStatus) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/teamAll',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'app_id' => self::APP_ID,
                        'idStatus' => $idStatus
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function getAllTeamMembar($status) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/getAllTeamMembar',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'app_id' => self::APP_ID,
                        'userStatus' => $status
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function getAllVideos($status) {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/getAllVideos',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'app_id' => self::APP_ID,
                        'status' => $status
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }

    public function getSpecificVideo($page, $function, $position='', $status='') {
        $responseResult = '';
        if ($this->session_id == FALSE) {
            $this->authenticateCore();
        }
        if($this->_iscurl()) {
            if ($this->error == self::ERR_NONE) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => self::BASEURL.'api/api_login_user/getSpecificVideo',
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => array(
                        'app_id' => self::APP_ID,
                        'pageController' => $page,
                        'controllerFunction' => $function,
                        'location' => $position,
                        'status' => $status
                    )
                ));
                $result = curl_exec($curl);
                if($result === FALSE) {
                    $responseResult = array('status' => 'failed', 'errorReason' => 'cURLexecution');
                    return $responseResult;
                } else {
                    $responseResult = json_decode($result);
                    if ($responseResult->status == 'success') {
                        return $responseResult;
                    } else {
                        $this->error = self::ERR_user_AUTH_FAIL;
                        $this->error_message = $responseResult->status;
                        return $responseResult;
                    }
                }
                curl_close($curl);
            } else {
                $responseResult = array('status' => 'failed', 'errorReason' => 'systemError');
                return $responseResult;
            }
        } else {
            $responseResult = array('status' => 'failed', 'errorReason' => 'cURLdisabled');
            return $responseResult;
        }
    }
}

/* End of file Bcare.php */
/* Location: ./application/libraries/Bcare.php */