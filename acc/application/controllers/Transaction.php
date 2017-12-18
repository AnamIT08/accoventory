<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaction extends BC_Controller {
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
        $this->load->library('email');
    }

    public function index() {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('transaction/');
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('transaction/');
        } else {
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['totalReceipt'] = $this->data_model->count_specific_table_without_where('list_transaction');
            $data['listBankAccount'] = $this->data_model->get_all_info_where_with_order('*', '', 'id', 'desc', 'settings_bank_account');
            $data['incomeCategory'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'Income', 'status' => 1), 'id', 'desc', 'settings_income_expense_category');
            $data['expenseCategory'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'Expense', 'status' => 1), 'id', 'desc', 'settings_income_expense_category');
            $data['activeReceipt'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 1), 'id', 'desc', 'list_transaction');
            $data['inActiveReceipt'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 0), 'id', 'desc', 'list_transaction');
            $data['listTeam'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 1, 'id >' => 3), 'id', 'desc', 'list_team');            
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['main_content'] = 'transaction_list';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function edit($id) {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('transaction/edit/'.$id);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('transaction/edit/'.$id);
        } else {
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['totalReceipt'] = $this->data_model->count_specific_table_without_where('list_transaction');
            $data['listBankAccount'] = $this->data_model->get_all_info_where_with_order('*', '', 'id', 'desc', 'settings_bank_account');
            $data['incomeCategory'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'Income', 'status' => 1), 'id', 'desc', 'settings_income_expense_category');
            $data['expenseCategory'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'Expense', 'status' => 1), 'id', 'desc', 'settings_income_expense_category');
            $data['activeReceipt'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 1), 'id', 'desc', 'list_transaction');
            $data['inActiveReceipt'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 0), 'id', 'desc', 'list_transaction');
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['listTeam'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 1, 'id >' => 3), 'id', 'desc', 'list_team');            
            $data['main_content'] = 'transaction_list';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function add($id) {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('transaction/add/'.$id);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('transaction/add/'.$id);
        } else {
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['totalReceipt'] = $this->data_model->count_specific_table_without_where('list_transaction');
            $data['listBankAccount'] = $this->data_model->get_all_info_where_with_order('*', '', 'id', 'desc', 'settings_bank_account');
            $data['incomeCategory'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'Income', 'status' => 1), 'id', 'desc', 'settings_income_expense_category');
            $data['expenseCategory'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'Expense', 'status' => 1), 'id', 'desc', 'settings_income_expense_category');
            $data['activeReceipt'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 1), 'id', 'desc', 'list_transaction');
            $data['inActiveReceipt'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 0), 'id', 'desc', 'list_transaction');
            $data['listTeam'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 1, 'id >' => 3), 'id', 'desc', 'list_team');            
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['main_content'] = 'transaction_list';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    } 

    public function addTransaction() {
        $this->form_validation->set_rules('receiptTitlle', 'Receipt Title', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('teamMember', 'Team Memeber ID', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('receiptNo', 'Receipt No', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('receiptReff', 'Receipt Refference', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('receiptNote', 'Receipt Note', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('receiptDate', 'Receipt Date', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('receiptParticuler', 'Receipt Particular', 'strip_tags|trim|xss_clean|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            if($this->sanitize($this->input->post('radio2')) == "Income") {
                $subType = $this->sanitize($this->input->post('chooseIncome'));
            } else {
                $subType = $this->sanitize($this->input->post('chooseExpense'));
            }
            $insertData = array(
                'systemId' => $this->sanitize($this->input->post('receiptSystemCode')),
                'docType' => 'Transaction',
                'receiptTitle' => $this->sanitize($this->input->post('receiptTitlle')),
                'receiptId' => $this->sanitize($this->input->post('receiptNo')),
                'refferenceId' => $this->sanitize($this->input->post('receiptReff')),
                'teamMember' => $this->sanitize($this->input->post('teamMember')),
                'note' => $this->sanitize($this->input->post('receiptNote')),
                'particular' => $this->sanitize($this->input->post('receiptParticuler')),
                'date' => $this->sanitize(date("Y-m-d", strtotime($this->input->post('receiptDate')))),
                'type' => $this->sanitize($this->input->post('radio2')),
                'subType' => $subType,
                'account' => $this->sanitize($this->input->post('chooseAccount')),
                'amount' => $this->sanitize($this->input->post('receiptAmount')),
                'attachment' => $this->sanitize($this->input->post('receiptfiles')),
                'createdBy' => $this->session->userdata('id'),
                'createdDateTime' => $this->systemDateTime
            );
            $where = array("docType" => "Transaction", "receiptId" => $this->input->post('receiptNo'));
            $count = $this->data_model->count_specific_table_array("list_transaction", $where);
            if($count > 0) {
                $arrayName = array('response' => 'Already exist');
                echo json_encode($arrayName);
            } else {
                $statusId = $this->database_model->data_insert_return("list_transaction", $insertData);
                if($statusId) {
                    $insertShortHistory = array(
                        'documentId' => $statusId,
                        'userId' => $this->session->userdata('id'),
                        'documentType' => "Receipt",
                        'workType' => "Create",
                        'dateTime' => $this->systemDateTime
                    );
                    $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
                    $arrayName = array('response' => 'success');
                    echo json_encode($arrayName);
                } else {
                    $arrayName = array('response' => 'failed');
                    echo json_encode($arrayName);
                }
            }
        }
    }

    public function updateTransaction() {
        $this->form_validation->set_rules('receiptTitlle', 'Receipt Title', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('teamMember', 'Team Memeber ID', 'strip_tags|trim|xss_clean|numeric|required');
        $this->form_validation->set_rules('receiptNo', 'Receipt No', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('receiptReff', 'Receipt Refference', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('receiptNote', 'Receipt Note', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('receiptDate', 'Receipt Date', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('receiptParticuler', 'Receipt Particular', 'strip_tags|trim|xss_clean|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            if($this->sanitize($this->input->post('radio2')) == "Income") {
                $subType = $this->sanitize($this->input->post('chooseIncome'));
            } else {
                $subType = $this->sanitize($this->input->post('chooseExpense'));
            }
            $specificReceiptInfo = $this->data_model->get_all_info('*', array('id' => $this->input->post('receiptEditId')), 'list_transaction');
            $oldData = $specificReceiptInfo[0]->id."::".$specificReceiptInfo[0]->systemId."::".$specificReceiptInfo[0]->receiptTitle."::".$specificReceiptInfo[0]->receiptId."::".$specificReceiptInfo[0]->refferenceId."::".$specificReceiptInfo[0]->teamMember."::".$specificReceiptInfo[0]->note."::".$specificReceiptInfo[0]->particular."::".$specificReceiptInfo[0]->date."::".$specificReceiptInfo[0]->type."::".$specificReceiptInfo[0]->subType."::".$specificReceiptInfo[0]->account."::".$specificReceiptInfo[0]->amount."::".$specificReceiptInfo[0]->attachment;
            $updateHistory = array(
                'type' => "Receipt",
                'typeWork' => "Edit",
                'documentId' => $specificReceiptInfo[0]->id,
                'documentData' => $oldData,
                'lastChangeBy' => $this->session->userdata('id'),
                'lastChangeDateTime' => $this->systemDateTime
            );
            $this->database_model->data_insert_return("history_list_document", $updateHistory);  
            $updateData = array(
                'systemId' => $this->sanitize($this->input->post('receiptSystemCode')),
                'receiptTitle' => $this->sanitize($this->input->post('receiptTitlle')),
                'receiptId' => $this->sanitize($this->input->post('receiptNo')),
                'refferenceId' => $this->sanitize($this->input->post('receiptReff')),
                'teamMember' => $this->sanitize($this->input->post('teamMember')),
                'note' => $this->sanitize($this->input->post('receiptNote')),
                'particular' => $this->sanitize($this->input->post('receiptParticuler')),
                'date' => $this->sanitize(date("Y-m-d", strtotime($this->input->post('receiptDate')))),
                'type' => $this->sanitize($this->input->post('radio2')),
                'subType' => $subType,
                'account' => $this->sanitize($this->input->post('chooseAccount')),
                'amount' => $this->sanitize($this->input->post('receiptAmount')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array("receiptId" => $this->input->post('receiptSystemCode'));
            $count = $this->data_model->count_specific_table_array("list_transaction", $where);
            if(isset($count[0]->id) && $count[0]->id != $this->input->post('receiptEditId')) {
                $arrayName = array('response' => 'Already exist');
                echo json_encode($arrayName);
            } else {
                $where = array('id' => $this->input->post('receiptEditId'));
                $statusId = $this->database_model->data_update_return("list_transaction", $updateData, $where);
                if($statusId) {
                    $insertShortHistory = array(
                        'documentId' => $this->input->post('receiptEditId'),
                        'userId' => $this->session->userdata('id'),
                        'documentType' => "Receipt",
                        'workType' => "Update",
                        'dateTime' => $this->systemDateTime
                    );
                    $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
                    $arrayName = array('response' => 'success');
                    echo json_encode($arrayName);
                } else {
                    $arrayName = array('response' => 'failed');
                    echo json_encode($arrayName);
                }
            }
        }
    }

    public function transactionAdjust() {
        $receiptInfo = $this->data_model->get_all_info('*', array('id' => $this->input->post('id')), 'list_transaction');
        $insertData = array(
            'docType' => 'transaction',
            'documentId' => $this->session->userdata('id'),
            'bankId' => $receiptInfo[0]->account,
            'customerId' => $receiptInfo[0]->teamMember,
            'type' => $receiptInfo[0]->type,
            'category' => $receiptInfo[0]->subType,
            'adjustAmount' => $receiptInfo[0]->amount,
            'createdBy' => $this->session->userdata('id'),
            'createdDateTime' => $this->systemDateTime
        );
        $this->database_model->data_insert_return("list_payment", $insertData); 
        $updateData = array(
            'accepted' => 1,
            'lastUpdateBy' => $this->session->userdata('id'),
            'lastUpdateDateTime' => $this->systemDateTime
        );
        $where = array("id" => $this->input->post('id'));
        $statusId = $this->database_model->data_update_return("list_transaction", $updateData, $where);
        if($statusId) {
            $arrayName = array('response' => 'success', 'type' => $receiptInfo[0]->type);
            echo json_encode($arrayName);
        } else {
            $arrayName = array('response' => 'failed');
            echo json_encode($arrayName);
        }
    }

    public function viewReceipt($id) {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('transaction/viewReceipt/'.$id);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('transaction/viewReceipt/'.$id);
        } else {
            $insertShortHistory = array(
                'documentId' => $id,
                'userId' => $this->session->userdata('id'),
                'documentType' => "Receipt",
                'workType' => "Viewed",
                'dateTime' => $this->systemDateTime
            );
            $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['basicInvoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['receiptInfo'] = $this->data_model->get_all_info('*', array('id' => $id), 'list_transaction');
            $data['customerInfo'] = $this->data_model->get_all_info('*', array('id' => $data['receiptInfo'][0]->teamMember), 'list_team');
            $data['teamMembarInfo'] = $this->bcare_user->getSelfInfo($data['customerInfo'][0]->engineId);
            $data['receiptHistory'] = $this->data_model->get_all_info_where_with_order('*', array('documentId' => $id, 'documentType' => 'Receipt'), 'id', 'desc', 'history_list_short');
            $data['receiptVersion'] = $this->data_model->get_all_info_where_with_order('*', array('documentId' => $id, 'type' => 'Receipt'), 'id', 'desc', 'history_list_document');
            $data['archive_message'] = 'Receipt';
            $data['main_content'] = 'view_receipt';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function viewVersion($root, $version) {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('transaction/viewVersion/'.$root."/".$version);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('transaction/viewVersion/'.$root."/".$version);
        } else {
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['basicInvoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['receiptVersionInfo'] = $this->data_model->get_all_info('*', array('documentId' => $root, 'id' => $version), 'history_list_document');
            $data['main_content'] = 'view_receipt_version';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function printReceipt($id) {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('transaction/printReceipt/'.$id);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('transaction/printReceipt/'.$id);
        } else {
            $insertShortHistory = array(
                'documentId' => $id,
                'userId' => $this->session->userdata('id'),
                'documentType' => "Receipt",
                'workType' => "Print",
                'dateTime' => $this->systemDateTime
            );
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['basicInvoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['receiptInfo'] = $this->data_model->get_all_info('*', array('id' => $id), 'list_transaction');
            $data['main_content'] = 'print_receipt';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function pdfReceipt($id, $mode, $attach='') {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('transaction/pdfReceipt/'.$id);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('transaction/pdfReceipt/'.$id);
        } else {
            $insertShortHistory = array(
                'documentId' => $id,
                'userId' => $this->session->userdata('id'),
                'documentType' => "Receipt",
                'workType' => "PDF",
                'dateTime' => $this->systemDateTime
            );
            $this->database_model->data_insert_return("history_list_short", $insertShortHistory); 

            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['basicInvoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['receiptInfo'] = $this->data_model->get_all_info('*', array('id' => $id), 'list_transaction');
            $page = $this->load->view('pdf_view_receipt', $data, true);
            $pdfFilePath = 'receipt-receiptId' . date('Y-m-d') . rand(time(), time()) . '.pdf';
            $this->load->library('m_pdf');
            $pdf = $this->m_pdf->load();
            $wm = "STATUS";
            //$pdf->SetWatermarkText($wm, 0.1);
            //$pdf->watermark_font = “Font Name”;
            //$pdf->showWatermarkText = true;

            //$pdf ->SetWatermarkImage(“/image/personal.jpg ”);
            //$pdf ->showWatermarkImage = true;
            $pdf->SetHTMLHeader('<div style="text-align: center;">Receipt '.$data['receiptInfo'][0]->receiptId.'</div>', 'O', true);
            $pdf->SetHTMLFooter('<div style="text-align: right; font-size: 9px"><b>Created By: </b> User Name '.date($data['basicSettings'][0]->dateFormate." H:i:s").'</div>', 'O', true);
            $pdf->WriteHTML($page);
            if ($mode == "download") {
                $pdf->Output($pdfFilePath, "D");
            } else if($mode == "view") {
                $pdf->Output($pdfFilePath, "I");
            } else {
                $pdf->Output($attach.$pdfFilePath, "F");
                return $pdfFilePath;
            }
        }
        $this->benchmark->mark('generate_end');
    }

    public function transactionStatus() {
        $this->form_validation->set_rules('id', 'Transaction Id', 'strip_tags|trim|xss_clean');
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
                $insertShortHistory = array(
                    'documentId' => $this->input->post('id'),
                    'userId' => $this->session->userdata('id'),
                    'documentType' => "Receipt",
                    'workType' => "Archive",
                    'dateTime' => $this->systemDateTime
                );
                $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
            } else {
                $updateData = array(
                    'status' => $this->input->post('status'),
                    'lastActiveBy' => $this->session->userdata('id'),
                    'lastActiveDateTime' => $this->systemDateTime
                );
                $insertShortHistory = array(
                    'documentId' => $this->input->post('id'),
                    'userId' => $this->session->userdata('id'),
                    'documentType' => "Receipt",
                    'workType' => "Active",
                    'dateTime' => $this->systemDateTime
                );
                $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
            }
            $result = $this->database_model->data_update_return("list_transaction", $updateData, $where);
            if($result == 1) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            }
        }
    }

    public function updateShort($statusId, $workType) {
        $insertShortHistory = array(
            'documentId' => $statusId,
            'userId' => $this->session->userdata('id'),
            'documentType' => "Receipt",
            'workType' => $workType,
            'dateTime' => $this->systemDateTime
        );
        $this->database_model->data_insert_return("history_list_short", $insertShortHistory);        
    }

    public function memeberCount(){
        $data = $this->data_model->count_specific_table('list_transaction', 'teamMember', $this->input->post('id')); 
        $arrayName = array('count' => $data);
        echo json_encode($arrayName);
    }

    public function loadMoreData($offset) {
        $data['activities'] = $this->data_model->limitQuery('*', array('userId' => $this->session->userdata('id')), $offset, 'history_list_recent_activities');
        echo $this->load->view('activities', $data, TRUE);
    }

    public function getBankAccount() {
        $name     = $this->data_model->get_all_info('*', array('id' => $this->input->post('id')), 'settings_bank_account');
        $tIncome  = $this->data_model->columnSum('amount', array('type' => 'Income', 'account' => $this->input->post('id')), 'list_transaction');
        $tExpense = $this->data_model->columnSum('amount', array('type' => 'Expense', 'account' => $this->input->post('id')), 'list_transaction');
        $pIncome  = $this->data_model->columnSum('adjustAmount', array('type' => 'Income', 'bankId' => $this->input->post('id')), 'list_payment');
        $pExpense = $this->data_model->columnSum('adjustAmount', array('type' => 'Expense', 'bankId' => $this->input->post('id')), 'list_payment');
        $allTransaction = (($tIncome[0]->amount+$pIncome[0]->adjustAmount)-($tExpense[0]->amount+$pExpense[0]->adjustAmount));
        $arrayName = array('balance' => ($name[0]->balance+$allTransaction));
        echo json_encode($arrayName);
    }

    public function mailSend() {
        $basicSettings = $this->data_model->get_all_info('*', '', 'settings_basic');
        $recipients = array();
        $config = array();
        $filePath = FCPATH."/assets/downloadableFile/"; 
        $fileName = $this->pdfReceipt($this->input->post('invoiceId'), "F", $filePath);
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
        $data['logo'] = '<img width="50" border="0" style="display: block; width: 50px;" src="'.base_url().'assets/uploadedFile/system/'.$basicSettings[0]->bDefaultLogo.'" alt="'.ucfirst($this->input->post("customerName")).'" />';
        $postMail = explode("\n", $this->input->post("emailMessage"));
        $mailData = '';
        for ($i=0; $i < count($postMail) ; $i++) {
            if($i == count($postMail)-2) {
                if($this->input->post('isPDF') == 1) {
                    $mailData .= "<br/>Please check attach receipt copy<br/>";                    
                }
                $mailData .= $postMail[$i]."<br/>";
            } else {
                $mailData .= $postMail[$i]."<br/>";
            }
        }
        $data['emailTemplates'] = $mailData;
        $emailTo = $this->input->post('emailTo');
        
        $data['copyright'] = 'Copyright <a href="" style="text-decoration: none; color: #000;">'.ucfirst($this->input->post("companyName")).'</a> All rights reserved.';
        $this->email->from($this->input->post("emailSender"), ucfirst($this->input->post("companyName")));
        $this->email->reply_to($this->input->post("emailSender"), ucfirst($this->input->post("companyName")));
        $this->email->to(implode(",", $emailTo));
        if($this->input->post('isBCC') == 1) {
            $this->email->bcc($this->input->post('bccEmail'));
        }
        $this->email->subject($this->input->post("emailSubject"));
        $data['pdfLink'] = '';
        if($this->input->post('isPDF') == 1) {
            $this->email->attach($filePath.$fileName);
        }
        $message = $this->load->view('email_templates',$data,TRUE);
        $this->email->message($message);
        if($this->email->send()) {
            unlink('./assets/downloadableFile/'.$fileName);
            $insertShortHistory = array(
                'documentId' => $this->input->post('invoiceId'),
                'userId' => $this->session->userdata('id'),
                'documentType' => "receipt",
                'workType' => "Sent",
                'dateTime' => $this->systemDateTime
            );
            $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
            $arrayName = array('response' => 'success');
            echo json_encode($arrayName);
        } else {
            $arrayName = array('response' => 'failed');
            echo json_encode($arrayName);
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */