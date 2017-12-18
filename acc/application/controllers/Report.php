<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends BC_Controller {
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
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['totalPurchase'] = $this->data_model->count_specific_table_without_where('list_report');
            $data['listCustomers'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'customer'), 'id', 'desc', 'list_business_member');
            $data['listVendors'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'vendor'), 'id', 'desc', 'list_business_member');
            $data['listTeams'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 1, 'id >' => 3), 'id', 'desc', 'list_team');
            $data['listIncomes'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'Income'), 'id', 'desc', 'settings_income_expense_category'); 
            $data['listExpenses'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'Expense'), 'id', 'desc', 'settings_income_expense_category'); 
            $data['listCategories'] = $this->data_model->get_all_info_where_with_order('*', array('parent' => 0), 'id', 'desc', 'settings_product_category'); 
            $data['listReports'] = $this->data_model->get_all_info_where_with_order('*', '', 'id', 'DESC', 'list_report'); 
            $data['main_content'] = 'report_list';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function addReport() {
        $userId = 0;
        if($this->sanitize($this->input->post('date_format')) == 'Activities') {
            $userId = $this->sanitize($this->input->post('team'));
        } else if($this->sanitize($this->input->post('date_format')) == 'Expense - Category') {
            $userId = $this->sanitize($this->input->post('expenseCategory'));
        } else if($this->sanitize($this->input->post('date_format')) == 'Expense - User') {
            $userId = $this->sanitize($this->input->post('vendor'));
        } else if($this->sanitize($this->input->post('date_format')) == 'Expense - Vendor') {
            $userId = $this->sanitize($this->input->post('vendor'));
        } else if($this->sanitize($this->input->post('date_format')) == 'Income - Category') {
            $userId = $this->sanitize($this->input->post('incomeCategory'));
        } else if($this->sanitize($this->input->post('date_format')) == 'Income - Customer') {
            $userId = $this->sanitize($this->input->post('customer'));
        } else if($this->sanitize($this->input->post('date_format')) == 'Income - User') {
            $userId = $this->sanitize($this->input->post('customer'));
        } else if($this->sanitize($this->input->post('date_format')) == 'Short List') {
            $userId = $this->sanitize($this->input->post('category'));
        } else if($this->sanitize($this->input->post('date_format')) == 'Stock Balance') {
            $userId = $this->sanitize($this->input->post('category'));
        } else if($this->sanitize($this->input->post('date_format')) == 'Purchase Statement') {
            $userId = $this->sanitize($this->input->post('Customer'));
        } else if($this->sanitize($this->input->post('date_format')) == 'Sales Statement') {
            $userId = $this->sanitize($this->input->post('Customer'));
        } else {
            $userId = 0;
        }
        $date = explode(':', $this->sanitize($this->input->post('reportDate')));
        $dateCheck = 0;
        if($this->sanitize($this->input->post('specification')) == 0 && $this->sanitize($this->input->post('date_format')) == 'Sales Statement' || $this->sanitize($this->input->post('date_format')) == 'Purchase Statement') {
            $dateCheck = date("Y-m-d");
        } else {
            $dateCheck = $date[0];
        }
        $insertData = array(
            'systemId' => $this->sanitize($this->input->post('reportSystemCode')),
            'reportId' => $this->sanitize($this->input->post('reportCode')),
            'startDate' => $dateCheck,
            'endDate' => $date[1],
            'type' => $this->sanitize($this->input->post('date_format')),
            'userId' => $userId,
            'userName' => $this->sanitize($this->input->post('specification')),
            'createdBy' => $this->session->userdata('id'),
            'createdDateTime' => $this->systemDateTime
        );
        $resultId = $this->database_model->data_insert_return("list_report", $insertData);
        $arrayName = array('response' => 'success', 'id' => $resultId);
        echo json_encode($arrayName);
    }

    public function details($id) {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('report/details/'.$id);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('report/details/'.$id);
        } else {
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['dataId'] = $this->data_model->get_all_info('*', array('id' => $id), 'list_report');
            $updateData = array('isView' => 1);
            $where = array('id' => $id);
            if($data['dataId'][0]->isView != 1) {
                $this->database_model->data_update_return("list_report", $updateData, $where); 
            }
            if($data['dataId'][0]->type == 'Activities'){
                if($data['dataId'][0]->userId != 0) {
                    $data['details'] = $this->data_model->reportData('*', array('userId' => $data['dataId'][0]->userId, 'systemDateTime >=' => date("Y-m-d", strtotime("-1days", strtotime($data['dataId'][0]->startDate))), 'systemDateTime <=' => date("Y-m-d", strtotime("+1days", strtotime($data['dataId'][0]->endDate)))), 'id', 'DESC', 'history_list_recent_activities');
                } else {
                    $data['details'] = $this->data_model->reportData('*', '', 'id', 'DESC', 'history_list_recent_activities');
                }
                $data['main_content'] = 'report_activities';
            } else if($data['dataId'][0]->type == 'Short List'){
                if($data['dataId'][0]->userId != 0) {
                    $data['details'] = $this->data_model->reportData('*', array('category' => $data['dataId'][0]->userId, 'createdDateTime >=' => date("Y-m-d", strtotime("-1days", strtotime($data['dataId'][0]->startDate))), 'createdDateTime <=' => date("Y-m-d", strtotime("+1days", strtotime($data['dataId'][0]->endDate)))), 'id', 'DESC', 'list_product_enrollment');
                } else {
                    $data['details'] = $this->data_model->reportData('*', array('createdDateTime >=' => date("Y-m-d", strtotime("-1days", strtotime($data['dataId'][0]->startDate))), 'createdDateTime <=' => date("Y-m-d", strtotime("+1days", strtotime($data['dataId'][0]->endDate)))), 'id', 'DESC', 'list_product_enrollment');
                }
                $data['main_content'] = 'report_short_list';
            } else if($data['dataId'][0]->type == 'Stock Balance'){
                if($data['dataId'][0]->userId != 0) {
                    $data['details'] = $this->data_model->reportData('*', array('category' => $data['dataId'][0]->userId), 'id', 'DESC', 'list_product_enrollment');
                } else {
                    $data['details'] = $this->data_model->reportData('*', '', 'id', 'DESC', 'list_product_enrollment');
                }
                $data['main_content'] = 'report_stock_balance';
            } else if($data['dataId'][0]->type == 'Bank & Cash'){
                $data['details'] = $this->data_model->reportData('*', '', 'id', 'DESC', 'settings_bank_account');
                $data['main_content'] = 'report_bank_cash';
            } else if($data['dataId'][0]->type == 'Sales Tax') {  
                $data['details'] = $this->data_model->reportDataSum('taxId, SUM(taxAmount) AS amount', array('type' => 'invoice', 'createdDateTime >=' => date("Y-m-d", strtotime("-1days", strtotime($data['dataId'][0]->startDate))), 'createdDateTime <=' => date("Y-m-d", strtotime("+1days", strtotime($data['dataId'][0]->endDate)))), 'taxId', 'id', 'DESC', 'list_product_adjust');                          
                $data['main_content'] = 'report_sales_tax';
            } else if($data['dataId'][0]->type == 'Expense - User') {
                if($data['dataId'][0]->userId != 0) {
                    // $data['details'] = $this->data_model->reportData('*', array('type' => 'purchase', 'createdBy' => $data['dataId'][0]->userId), 'id', 'DESC', 'list_document');
                    $data['detailsT'] = $this->data_model->reportData('*', array('type' => 'Expense', 'docType =' => 'Transaction', 'createdBy' => $data['dataId'][0]->userId, 'status' => 1), 'id', 'DESC', 'list_transaction');
                } else {
                    // $data['details'] = $this->data_model->reportData('*', array('type' => 'purchase'), 'id', 'DESC', 'list_document');
                    $data['detailsT'] = $this->data_model->reportData('*', array('type' => 'Expense',  'docType =' => 'Transaction','status' => 1), 'id', 'DESC', 'list_transaction');
                }                                 
                $data['main_content'] = 'report_expense_user';
            } else if($data['dataId'][0]->type == 'Expense - Vendor') {
                if($data['dataId'][0]->userId != 0) {
                    $data['details'] = $this->data_model->reportData('*', array('type' => 'purchase', 'customerId' => $data['dataId'][0]->userId), 'id', 'DESC', 'list_document');
                    // $data['detailsT'] = $this->data_model->reportData('*', array('type' => 'Expense', 'docType !=' => 'Purchase', 'customerId' => $data['dataId'][0]->userId, 'status' => 1), 'id', 'DESC', 'list_transaction');
                } else {
                    $data['details'] = $this->data_model->reportData('*', array('type' => 'purchase'), 'id', 'DESC', 'list_document');
                    // $data['detailsT'] = $this->data_model->reportData('*', array('type' => 'Expense',  'docType !=' => 'Purchase','status' => 1), 'id', 'DESC', 'list_transaction');
                }                                 
                $data['main_content'] = 'report_expense_vendor';
            } else if($data['dataId'][0]->type == 'Income - Customer') { 
                if($data['dataId'][0]->userId != 0) {
                    $data['details'] = $this->data_model->reportData('*', array('type' => 'invoice', 'customerId' => $data['dataId'][0]->userId), 'id', 'DESC', 'list_document');
                    // $data['detailsT'] = $this->data_model->reportData('*', array('type' => 'Income', 'docType !=' => 'Invoice', 'customerId' => $data['dataId'][0]->userId, 'status' => 1), 'id', 'DESC', 'list_transaction');
                } else {
                    $data['details'] = $this->data_model->reportData('*', array('type' => 'invoice'), 'id', 'DESC', 'list_document');
                    // $data['detailsT'] = $this->data_model->reportData('*', array('type' => 'Income', 'docType !=' => 'Invoice', 'status' => 1), 'id', 'DESC', 'list_transaction');
                }                 
                $data['main_content'] = 'report_income_customer';
            } else if($data['dataId'][0]->type == 'Income - User') { 
                if($data['dataId'][0]->userId != 0) {
                    // $data['details'] = $this->data_model->reportData('*', array('type' => 'invoice', 'createdBy' => $data['dataId'][0]->userId), 'id', 'DESC', 'list_document');
                    $data['detailsT'] = $this->data_model->reportData('*', array('type' => 'Income', 'docType !=' => 'Transaction', 'createdBy' => $data['dataId'][0]->userId, 'status' => 1), 'id', 'DESC', 'list_transaction');
                } else {
                    // $data['details'] = $this->data_model->reportData('*', array('type' => 'invoice'), 'id', 'DESC', 'list_document');
                    $data['detailsT'] = $this->data_model->reportData('*', array('type' => 'Income', 'docType !=' => 'Transaction', 'status' => 1), 'id', 'DESC', 'list_transaction');
                }                 
                $data['main_content'] = 'report_income_user';
            } else if($data['dataId'][0]->type == 'Income - Category') {
                if($data['dataId'][0]->userId != 0) {
                    if($data['dataId'][0]->userId == 2) {
                        $data['details'] = $this->data_model->reportData('*', array('type' => 'invoice'), 'id', 'DESC', 'list_document');
                    } else {
                        $data['detailsT'] = $this->data_model->reportData('*', array('type' => 'Income', 'docType !=' => 'Invoice', 'subType' => $data['dataId'][0]->userId, 'status' => 1), 'id', 'DESC', 'list_transaction');
                    }
                } else {
                    $data['details'] = $this->data_model->reportData('*', array('type' => 'invoice'), 'id', 'DESC', 'list_document');
                    $data['detailsT'] = $this->data_model->reportData('*', array('type' => 'Income', 'docType !=' => 'Invoice', 'status' => 1), 'id', 'DESC', 'list_transaction');
                }                 
                $data['main_content'] = 'report_income_category';
            } else if($data['dataId'][0]->type == 'Expense - Category') {
                if($data['dataId'][0]->userId != 0) {
                    if($data['dataId'][0]->userId == 1) {
                        $data['details'] = $this->data_model->reportData('*', array('type' => 'purchase'), 'id', 'DESC', 'list_document');
                    } else {
                       $data['detailsT'] = $this->data_model->reportData('*', array('type' => 'Expense', 'docType !=' => 'Purchase', 'subType' => $data['dataId'][0]->userId, 'status' => 1), 'id', 'DESC', 'list_transaction');
                    }
                } else {
                    $data['details'] = $this->data_model->reportData('*', array('type' => 'purchase'), 'id', 'DESC', 'list_document');
                    $data['detailsT'] = $this->data_model->reportData('*', array('type' => 'Expense', 'docType !=' => 'Purchase', 'status' => 1), 'id', 'DESC', 'list_transaction');
                }                
                $data['main_content'] = 'report_expense_category';
            } else if($data['dataId'][0]->type == 'Purchase Statement'){
                if($data['dataId'][0]->userName != 0) {
                    $data['details'] = $this->data_model->reportData('*', array('type' => 'purchase', 'date >=' => date("Y-m-d", strtotime("-1days", strtotime($data['dataId'][0]->startDate." 00:00:00"))), 'date <=' => date("Y-m-d", strtotime("+1days", strtotime($data['dataId'][0]->endDate." 23:59:59")))), 'id', 'DESC', 'list_document');
                } else {
                    $data['details'] = $this->data_model->reportData('*', array('type' => 'purchase', 'date >=' => date("Y-m-d", strtotime($data['dataId'][0]->startDate." 00:00:00")), 'date <=' => date("Y-m-d", strtotime("+1days", strtotime($data['dataId'][0]->startDate." 23:59:59")))), 'id', 'DESC', 'list_document');
                }
                $data['main_content'] = 'report_statement_stock';
            } else if($data['dataId'][0]->type == 'Sales Statement'){
                if($data['dataId'][0]->userName != 0) {
                    $data['details'] = $this->data_model->reportData('*', array('type' => 'invoice', 'date >=' => date("Y-m-d", strtotime("-1days", strtotime($data['dataId'][0]->startDate." 00:00:00"))), 'date <=' => date("Y-m-d", strtotime("+1days", strtotime($data['dataId'][0]->endDate." 23:59:59")))), 'id', 'DESC', 'list_document');
                } else {
                    $data['details'] = $this->data_model->reportData('*', array('type' => 'invoice', 'date >=' => date("Y-m-d", strtotime($data['dataId'][0]->startDate." 00:00:00")), 'date <=' => date("Y-m-d", strtotime("+1days", strtotime($data['dataId'][0]->startDate." 23:59:59")))), 'id', 'DESC', 'list_document');
                }
                $data['main_content'] = 'report_statement_stock';
            } else if($data['dataId'][0]->type == 'Balance Sheet') {                
                $data['main_content'] = 'report_balance_sheet';
            } else if($data['dataId'][0]->type == 'Income Statement') {                
                $data['main_content'] = 'report_income_statement';
            } else {   
                $data['details'] = $this->data_model->reportData('*', array('createdDateTime >=' => date("Y-m-d", strtotime("-1days", strtotime($data['dataId'][0]->startDate))), 'createdDateTime <=' => date("Y-m-d", strtotime("+1days", strtotime($data['dataId'][0]->endDate))), 'status' => 1), 'id', 'DESC', 'list_transaction');            
                $data['main_content'] = 'report_transaction';                
            }
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    } 

    public function getTeamInfo() {
        if($this->input->post('id') != 0) {
            $product = $this->data_model->get_all_info('*', array('id' => $this->input->post('id')), 'list_team');
            $arrayName = array('name' => $product[0]->name);
            echo json_encode($arrayName);
        } else {
            $arrayName = array('name' => '');
            echo json_encode($arrayName);
        }
    }

    public function getCustomerInfo() {
        if($this->input->post('id') != 0) {
            $product = $this->data_model->get_all_info('*', array('id' => $this->input->post('id'), 'type' => 'customer'), 'list_business_member');
            $arrayName = array('name' => $product[0]->name);
            echo json_encode($arrayName);
        } else {
            $arrayName = array('name' => '');
            echo json_encode($arrayName);
        }
    }

    public function getVendorInfo() {
        if($this->input->post('id') != 0) {
            $product = $this->data_model->get_all_info('*', array('id' => $this->input->post('id'), 'type' => 'vendor'), 'list_business_member');
            $arrayName = array('name' => $product[0]->name);
            echo json_encode($arrayName);
        } else {
            $arrayName = array('name' => '');
            echo json_encode($arrayName);
        }
    }

    public function getIncomeCategoryInfo() {
        if($this->input->post('id') != 0) {
            $product = $this->data_model->get_all_info('*', array('id' => $this->input->post('id'), 'type' => 'Income'), 'settings_income_expense_category');
            $arrayName = array('name' => $product[0]->name);
            echo json_encode($arrayName);
        } else {
            $arrayName = array('name' => '');
            echo json_encode($arrayName);
        }
    }

    public function getExpenseCategoryInfo() {
        if($this->input->post('id') != 0) {
            $product = $this->data_model->get_all_info('*', array('id' => $this->input->post('id'), 'type' => 'Expense'), 'settings_income_expense_category');
            $arrayName = array('name' => $product[0]->name);
            echo json_encode($arrayName);
        } else {
            $arrayName = array('name' => '');
            echo json_encode($arrayName);
        }
    }

    public function getCategoryInfo() {
        if($this->input->post('id') != 0) {
            $product = $this->data_model->get_all_info('*', array('id' => $this->input->post('id')), 'settings_product_category');
            $arrayName = array('name' => $product[0]->name);
            echo json_encode($arrayName);
        } else {
            $arrayName = array('name' => '');
            echo json_encode($arrayName);
        }
    }

    public function reportRemove() {
        $ids = array(); $i = 0;
        $reportList = $this->data_model->get_specific_column('id', array('createdDateTime <=' => date("Y-m-d", strtotime("-3 days"))), 'list_report');
        foreach ($reportList as $report) {
            $this->database_model->data_delete_without_response('list_report', array('id' => $report->id));
            $ids[$i++] = $report->id;
        }
        $arrayName = array('response' => 'success', 'ids' => $ids);
        echo json_encode($arrayName);
    }

    public function printStatus() {
        $this->form_validation->set_rules('id', 'Product Id', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            return;
        } else {
            // print_r($this->input->post()); die();
            $whereReport = array('id' => $this->input->post('id'));
            $updateData = array('isPrint' => 1);
            $documentId = $this->database_model->data_update_return("list_report", $updateData, $whereReport);
            if($documentId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
               $arrayName = array('response' => 'failed');
                echo json_encode($arrayName); 
            }
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */