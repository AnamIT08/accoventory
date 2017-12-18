<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends BC_Controller {
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
            $this->home('settings/');
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('settings/');
        } else {
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['totalBank'] = $this->data_model->count_specific_table_without_where('settings_bank_account');
            $data['totalCategory'] = $this->data_model->count_specific_table_without_where('settings_income_expense_category');
            $data['totalTax'] = $this->data_model->count_specific_table_without_where('settings_tax');
            $data['totalProduct'] = $this->data_model->count_specific_table_without_where('list_product_enrollment');
            $data['activeCategory'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 1), 'id', 'desc', 'settings_income_expense_category');
            $data['inActiveCategory'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 0), 'id', 'desc', 'settings_income_expense_category');
            $data['activeTax'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 1), 'id', 'desc', 'settings_tax');
            $data['inActiveTax'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 0), 'id', 'desc', 'settings_tax');
            $data['activeProduct'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 1), 'id', 'desc', 'list_product_enrollment');
            $data['inActiveProduct'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 0), 'id', 'desc', 'list_product_enrollment');
            $data['listBankAccount'] = $this->data_model->get_all_info_where_with_order('*', '', 'id', 'desc', 'settings_bank_account');            
            $data['invoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['columnSettings'] = $this->data_model->get_all_info('*', '', 'settings_column');
            $data['productCategories'] = $this->data_model->get_all_info_where_with_order('*', array('parent' => 0), 'sortOrder', '', 'settings_product_category'); 
            $data['productSubCategories'] = $this->data_model->get_all_info_where_with_order('*', array('parent !=' => 0), 'id', 'desc', 'settings_product_category');
            $data['main_content'] = 'settings';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    } 

    public function others($parameter="") {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('settings/');
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('settings/');
        } else {
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['totalBank'] = $this->data_model->count_specific_table_without_where('settings_bank_account');
            $data['totalCategory'] = $this->data_model->count_specific_table_without_where('settings_income_expense_category');
            $data['totalTax'] = $this->data_model->count_specific_table_without_where('settings_tax');
            $data['totalProduct'] = $this->data_model->count_specific_table_without_where('list_product_enrollment');
            $data['activeCategory'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 1), 'id', 'desc', 'settings_income_expense_category');
            $data['inActiveCategory'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 0), 'id', 'desc', 'settings_income_expense_category');
            $data['activeTax'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 1), 'id', 'desc', 'settings_tax');
            $data['inActiveTax'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 0), 'id', 'desc', 'settings_tax');
            $data['activeProduct'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 1), 'id', 'desc', 'list_product_enrollment');
            $data['inActiveProduct'] = $this->data_model->get_all_info_where_with_order('*', array('status' => 0), 'id', 'desc', 'list_product_enrollment');
            $data['listBankAccount'] = $this->data_model->get_all_info_where_with_order('*', '', 'id', 'desc', 'settings_bank_account');            
            $data['invoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['columnSettings'] = $this->data_model->get_all_info('*', '', 'settings_column');
            $data['productCategories'] = $this->data_model->get_all_info_where_with_order('*', array('parent' => 0), 'sortOrder', '', 'settings_product_category'); 
            $data['productSubCategories'] = $this->data_model->get_all_info_where_with_order('*', array('parent !=' => 0), 'id', 'desc', 'settings_product_category');
            $data['main_content'] = 'settings';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    } 

    public function updateBasic() {
        $this->form_validation->set_rules('companyName', 'Company Name', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('phone', 'Company Phone', 'strip_tags|trim|xss_clean|numeric');
        $this->form_validation->set_rules('mobile', 'Company Mobile', 'strip_tags|trim|xss_clean|numeric');
        $this->form_validation->set_rules('address1', 'Company Address Line 1', 'trim|required');
        $this->form_validation->set_rules('address2', 'Company Address Line 2', 'trim');
        $this->form_validation->set_rules('email', 'Company Email', 'strip_tags|trim|xss_clean|valid_email|required');
        $this->form_validation->set_rules('webUrl', 'Company Website', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'companyName' => $this->sanitize($this->input->post('companyName')),
                'defaultLogo' => $this->sanitize($this->input->post('defaultLogo')),
                'phone' => $this->sanitize($this->input->post('phone')),
                'mobile' => $this->sanitize($this->input->post('mobile')),
                'addressLine1' => $this->sanitize($this->input->post('address1')),
                'addressLine2' => $this->sanitize($this->input->post('address2')),
                'email' => $this->sanitize($this->input->post('email')),
                'web' => $this->sanitize($this->input->post('webUrl')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('id' => 1);
            $statusId = $this->database_model->data_update_return("settings_basic", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    } 

    public function updateFinancial() {
        $this->form_validation->set_rules('date_format', 'System Date Format', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('currency', 'System Currency Format', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('fiscalYearEnd', 'System Year End Calculation', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('currencyLocal', 'System Currency Code', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('currencyForeign', 'Foreign Currency Code', 'required');
        $this->form_validation->set_rules('currencyRate', 'System Currency Rate', 'strip_tags|trim|xss_clean|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'dateFormate' => $this->sanitize($this->input->post('date_format')),
                'currencyFormate' => $this->sanitize($this->input->post('currency')),
                'fiscalYearEnd' => $this->sanitize($this->input->post('fiscalYearEnd')),
                'currencySymbol' => $this->sanitize($this->input->post('currencyLocal')),
                'foreignCurrencySymbol' => $this->input->post('currencyForeign'),
                'foreignCurrencyRate' => $this->sanitize($this->input->post('currencyRate')),
                'isInstallment' => $this->sanitize($this->input->post('isInstallmentCheck')),
                'installmentSchedule' => $this->sanitize($this->input->post('installmentTime')),
                'installmentPeriod' => $this->sanitize($this->input->post('radio2')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('id' => 1);
            $statusId = $this->database_model->data_update_return("settings_basic", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        } 
    }

    public function addBankCash($parameter = '') {
        $this->form_validation->set_rules('bankAccountTitle', 'Account Name', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('bankInitial', 'Account Initial Balance', 'strip_tags|trim|xss_clean|numeric|required');
        $this->form_validation->set_rules('bankDescription', 'Account Description', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $insertData = array(
                'systemId' => $this->sanitize($this->input->post('bankSystemCode')),
                'title' => $this->sanitize($this->input->post('bankAccountTitle')),
                'description' => $this->sanitize($this->input->post('bankDescription')),
                'balance' => $this->sanitize($this->input->post('bankInitial')),
                'createdBy' => $this->session->userdata('id'),
                'createdDateTime' => $this->systemDateTime
            );
            $where = array("title" => $this->input->post('bankAccountTitle'));
            if($parameter != 'duplicate') {
                $count = $this->data_model->count_specific_table_array("settings_bank_account", $where);
            } else {
                $count = 0;
            }
            if($count > 0) {
                $arrayName = array('response' => 'Already exist');
                echo json_encode($arrayName);
            } else {
                $statusId = $this->database_model->data_insert_return("settings_bank_account", $insertData);
                if($statusId) {
                    $arrayName = array('response' => 'success');
                    echo json_encode($arrayName);
                } else {
                    $arrayName = array('response' => 'failed');
                    echo json_encode($arrayName);
                }
            }
        }
    }

    public function updateBankCash() {
        $this->form_validation->set_rules('bankAccountTitle', 'Account Name', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('bankInitial', 'Account Initial Balance', 'strip_tags|trim|xss_clean|numeric|required');
        $this->form_validation->set_rules('bankDescription', 'Account Description', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'title' => $this->sanitize($this->input->post('bankAccountTitle')),
                'description' => $this->sanitize($this->input->post('bankDescription')),
                'balance' => $this->sanitize($this->input->post('bankInitial')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array("title" => $this->input->post('bankAccountTitle'));
            $count = $this->data_model->get_all_info("id", $where, "settings_bank_account");
            if(isset($count[0]->id) && $count[0]->id != $this->input->post('bankEditId')) {
                $arrayName = array('response' => 'Already exist');
                echo json_encode($arrayName);
            } else {
                $where = array('id' => $this->input->post('bankEditId'));
                $statusId = $this->database_model->data_update_return("settings_bank_account", $updateData, $where);
                if($statusId) {
                    $arrayName = array('response' => 'success');
                    echo json_encode($arrayName);
                } else {
                    $arrayName = array('response' => 'failed');
                    echo json_encode($arrayName);
                }
            }
        }
    }

    public function getBankInfo() {
        if($this->input->post('id') != 0) {
            $bankInfo = $this->data_model->get_all_info('*', array('id' => $this->input->post('id')), 'settings_bank_account');
            $arrayName = array('initial' => $bankInfo[0]->balance, 'total' => $bankInfo[0]->totalBalance);
            echo json_encode($arrayName);
        } else {
            $arrayName = array('rate' => '');
            echo json_encode($arrayName);
        }
    }

    public function updateInvoiceLogo() {
        $this->form_validation->set_rules('radio2', 'Display Logo Invoice', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('invoiceDefaultLogoSize', 'Default Logo Size', 'strip_tags|trim|xss_clean|numeric|required');
        $this->form_validation->set_rules('invoiceDefaultLogo', 'Logo', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'defaultLogoSettings' => $this->sanitize($this->input->post('radio2')),
                'logoSize' => $this->sanitize($this->input->post('invoiceDefaultLogoSize')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('id' => 1);
            $statusId = $this->database_model->data_update_return("settings_invoice_estimate", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updateInvoiceBasic() {
        $this->form_validation->set_rules('invoiceTitle', 'Invoice Title', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('invoiceTerms', 'Payment Terms', 'strip_tags|trim|xss_clean|numeric|required');
        $this->form_validation->set_rules('invoiceNote', 'Invoice Note', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'titleInvoice' => $this->sanitize($this->input->post('invoiceTitle')),
                'paymentTermInvoice' => $this->sanitize($this->input->post('invoiceTerms')),
                'noteInvoice' => $this->sanitize($this->input->post('invoiceNote')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('id' => 1);
            $statusId = $this->database_model->data_update_return("settings_invoice_estimate", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updateEstimateBasic() {
        $this->form_validation->set_rules('estimateTitle', 'Estimate Title', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('estimateTerms', 'Payment Terms', 'strip_tags|trim|xss_clean|numeric|required');
        $this->form_validation->set_rules('estimateNote', 'Estimate Note', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'titleEstimate' => $this->sanitize($this->input->post('estimateTitle')),
                'paymentTermEstimate' => $this->sanitize($this->input->post('estimateTerms')),
                'noteEstimate' => $this->sanitize($this->input->post('estimateNote')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('id' => 1);
            $statusId = $this->database_model->data_update_return("settings_invoice_estimate", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updatePurchaseBasic() {
        $this->form_validation->set_rules('purchaseTitle', 'Purchase Title', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('purchaseTerms', 'Payment Terms', 'strip_tags|trim|xss_clean|numeric|required');
        $this->form_validation->set_rules('purchaseNote', 'Purchase Note', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'titlePurchase' => $this->sanitize($this->input->post('purchaseTitle')),
                'paymentTermPurchase' => $this->sanitize($this->input->post('purchaseTerms')),
                'notePurchase' => $this->sanitize($this->input->post('purchaseNote')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('id' => 1);
            $statusId = $this->database_model->data_update_return("settings_invoice_estimate", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updateColumnSettings() {
        $this->form_validation->set_rules('pName', 'Name', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('messure', 'Unit', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('priceSet', 'Price', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('amountSet', 'Amount', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('itemCode', 'Code', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('warrantyStatus', 'Warranty', 'strip_tags|trim|xss_clean|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'name' => $this->sanitize($this->input->post('pName')),
                'unitName' => $this->sanitize($this->input->post('messure')),
                'priceName' => $this->sanitize($this->input->post('priceSet')),
                'amountName' => $this->sanitize($this->input->post('amountSet')),
                'itemCode' => $this->sanitize($this->input->post('itemCode')),
                'warrantyName' => $this->sanitize($this->input->post('warrantyStatus')),
                'isDescription' => $this->sanitize($this->input->post('descriptionIs')),
                'isUnit' => $this->sanitize($this->input->post('unitIs')),
                'isCode' => $this->sanitize($this->input->post('codeIs')),
                'isWarranty' => $this->sanitize($this->input->post('warrantyIs')),
                'isProductPicture' => $this->sanitize($this->input->post('imageIs')),
                'isLink' => $this->sanitize($this->input->post('linkIs')),
                'isInstallment' => $this->sanitize($this->input->post('installmentIs')),
                'isCurrencyShow' => $this->sanitize($this->input->post('currencyIs')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('id' => 1);
            $statusId = $this->database_model->data_update_return("settings_column", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updateInvoiceCreate() {
        $this->form_validation->set_rules('invoiceCreateSubject', 'Subject', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('invoiceCreateEmail', 'Email', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('invoiceCreateBody', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'systemId' => $this->sanitize($this->input->post('systemId')),
                'emailType' => $this->sanitize($this->input->post('type')),
                'emailSubject' => $this->sanitize($this->input->post('invoiceCreateSubject')),
                'bccEmailAddress' => $this->sanitize($this->input->post('invoiceCreateEmail')),
                'emailBody' => $this->input->post('invoiceCreateBody'),
                'isAttachPDF' => $this->sanitize($this->input->post('invoiceCreatePDF')),
                'isAttachLink' => $this->sanitize($this->input->post('invoiceCreateLink')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('systemId' => $this->sanitize($this->input->post('systemId')), 'emailType' => $this->sanitize($this->input->post('type')));
            $statusId = $this->database_model->data_update_return("settings_email_template", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updatePaymentReminder() {
        $this->form_validation->set_rules('paymentReminderSubject', 'Subject', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('paymentReminderEmail', 'Email', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('paymentReminderBody', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'systemId' => $this->sanitize($this->input->post('systemId')),
                'emailType' => $this->sanitize($this->input->post('type')),
                'emailSubject' => $this->sanitize($this->input->post('paymentReminderSubject')),
                'bccEmailAddress' => $this->sanitize($this->input->post('paymentReminderEmail')),
                'emailBody' => $this->input->post('paymentReminderBody'),
                'isAttachPDF' => $this->sanitize($this->input->post('paymentReminderPDF')),
                'isAttachLink' => $this->sanitize($this->input->post('paymentReminderLink')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('systemId' => $this->sanitize($this->input->post('systemId')), 'emailType' => $this->sanitize($this->input->post('type')));
            $statusId = $this->database_model->data_update_return("settings_email_template", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updateOverdueNotice() {
        $this->form_validation->set_rules('overdueNoticeSubject', 'Subject', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('overdueNoticeEmail', 'Email', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('overdueNoticeBody', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'systemId' => $this->sanitize($this->input->post('systemId')),
                'emailType' => $this->sanitize($this->input->post('type')),
                'emailSubject' => $this->sanitize($this->input->post('overdueNoticeSubject')),
                'bccEmailAddress' => $this->sanitize($this->input->post('overdueNoticeEmail')),
                'emailBody' => $this->input->post('overdueNoticeBody'),
                'isAttachPDF' => $this->sanitize($this->input->post('overdueNoticePDF')),
                'isAttachLink' => $this->sanitize($this->input->post('overdueNoticeLink')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('systemId' => $this->sanitize($this->input->post('systemId')), 'emailType' => $this->sanitize($this->input->post('type')));
            $statusId = $this->database_model->data_update_return("settings_email_template", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updatePaymentConfirmation() {
        $this->form_validation->set_rules('paymentConfirmationSubject', 'Subject', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('paymentConfirmationEmail', 'Email', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('paymentConfirmationBody', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'systemId' => $this->sanitize($this->input->post('systemId')),
                'emailType' => $this->sanitize($this->input->post('type')),
                'emailSubject' => $this->sanitize($this->input->post('paymentConfirmationSubject')),
                'bccEmailAddress' => $this->sanitize($this->input->post('paymentConfirmationEmail')),
                'emailBody' => $this->input->post('paymentConfirmationBody'),
                'isAttachPDF' => $this->sanitize($this->input->post('paymentConfirmationPDF')),
                'isAttachLink' => $this->sanitize($this->input->post('paymentConfirmationLink')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('systemId' => $this->sanitize($this->input->post('systemId')), 'emailType' => $this->sanitize($this->input->post('type')));
            $statusId = $this->database_model->data_update_return("settings_email_template", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updateRefundConfirmation() {
        $this->form_validation->set_rules('refundConfirmationSubject', 'Subject', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('refundConfirmationEmail', 'Email', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('refundConfirmationBody', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'systemId' => $this->sanitize($this->input->post('systemId')),
                'emailType' => $this->sanitize($this->input->post('type')),
                'emailSubject' => $this->sanitize($this->input->post('refundConfirmationSubject')),
                'bccEmailAddress' => $this->sanitize($this->input->post('refundConfirmationEmail')),
                'emailBody' => $this->input->post('refundConfirmationBody'),
                'isAttachPDF' => $this->sanitize($this->input->post('refundConfirmationPDF')),
                'isAttachLink' => $this->sanitize($this->input->post('refundConfirmationLink')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('systemId' => $this->sanitize($this->input->post('systemId')), 'emailType' => $this->sanitize($this->input->post('type')));
            $statusId = $this->database_model->data_update_return("settings_email_template", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updateEstimateCreate() {
        // print_r($this->input->post()); die();
        $this->form_validation->set_rules('estimateCreateSubject', 'Subject', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('estimateCreateEmail', 'Email', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('estimateCreateBody', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'systemId' => $this->sanitize($this->input->post('systemId')),
                'emailType' => $this->sanitize($this->input->post('type')),
                'emailSubject' => $this->sanitize($this->input->post('estimateCreateSubject')),
                'bccEmailAddress' => $this->sanitize($this->input->post('estimateCreateEmail')),
                'emailBody' => $this->input->post('estimateCreateBody'),
                'isAttachPDF' => $this->sanitize($this->input->post('estimateCreatePDF')),
                'isAttachLink' => $this->sanitize($this->input->post('estimateCreateLink')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('systemId' => $this->sanitize($this->input->post('systemId')), 'emailType' => $this->sanitize($this->input->post('type')));
            $statusId = $this->database_model->data_update_return("settings_email_template", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updateBillCreate() {
        // print_r($this->input->post()); die();
        $this->form_validation->set_rules('billCreateSubject', 'Subject', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('billCreateEmail', 'Email', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('billCreateBody', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'systemId' => $this->sanitize($this->input->post('systemId')),
                'emailType' => $this->sanitize($this->input->post('type')),
                'emailSubject' => $this->sanitize($this->input->post('billCreateSubject')),
                'bccEmailAddress' => $this->sanitize($this->input->post('billCreateEmail')),
                'emailBody' => $this->input->post('billCreateBody'),
                'isAttachPDF' => $this->sanitize($this->input->post('billCreatePDF')),
                'isAttachLink' => $this->sanitize($this->input->post('billCreateLink')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('systemId' => $this->sanitize($this->input->post('systemId')), 'emailType' => $this->sanitize($this->input->post('type')));
            $statusId = $this->database_model->data_update_return("settings_email_template", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updateReceiptCreate() {
        // print_r($this->input->post()); die();
        $this->form_validation->set_rules('receiptCreateSubject', 'Subject', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('receiptCreateBody', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'systemId' => $this->sanitize($this->input->post('systemId')),
                'emailType' => $this->sanitize($this->input->post('type')),
                'emailSubject' => $this->sanitize($this->input->post('receiptCreateSubject')),
                'emailBody' => $this->input->post('receiptCreateBody'),
                'isAttachPDF' => $this->sanitize($this->input->post('receiptCreatePDF')),
                'isAttachLink' => $this->sanitize($this->input->post('receiptCreateLink')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('systemId' => $this->sanitize($this->input->post('systemId')), 'emailType' => $this->sanitize($this->input->post('type')));
            $statusId = $this->database_model->data_update_return("settings_email_template", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updateNotification() {
        $this->form_validation->set_rules('notificationSubject', 'Subject', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('notificationBody', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'systemId' => $this->sanitize($this->input->post('systemId')),
                'emailType' => $this->sanitize($this->input->post('type')),
                'emailSubject' => $this->sanitize($this->input->post('notificationSubject')),
                'emailBody' => $this->input->post('notificationBody'),
                'isAttachPDF' => 1,
                'isAttachLink' => 1,
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('systemId' => $this->sanitize($this->input->post('systemId')), 'emailType' => $this->sanitize($this->input->post('type')));
            $statusId = $this->database_model->data_update_return("settings_email_template", $updateData, $where);
            if($statusId) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function addIncomeExpenseCategory() {
        $this->form_validation->set_rules('categoryName', 'Category Name', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('incomeExpenseRadio', 'Type', 'strip_tags|trim|xss_clean|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $insertData = array(
                'systemId' => $this->sanitize($this->input->post('categorySystemCode')),
                'name' => $this->sanitize($this->input->post('categoryName')),
                'type' => $this->sanitize($this->input->post('incomeExpenseRadio')),
                'isNotify' => $this->sanitize($this->input->post('notificationCheck')),
                'amount' => $this->sanitize($this->input->post('notificationCategoryAmount')),
                'email' => $this->sanitize($this->input->post('notificationCategoryEmail')),
                'description' => $this->sanitize($this->input->post('categoryDescription')),
                'createdBy' => $this->session->userdata('id'),
                'createdDateTime' => $this->systemDateTime
            );
            $where = array("name" => $this->input->post('categoryName'));
            $count = $this->data_model->count_specific_table_array("settings_income_expense_category", $where);
            if($count > 0) {
                $arrayName = array('response' => 'Already exist');
                echo json_encode($arrayName);
            } else {
                $statusId = $this->database_model->data_insert_return("settings_income_expense_category", $insertData);
                if($statusId) {
                    $arrayName = array('response' => 'success');
                    echo json_encode($arrayName);
                } else {
                    $arrayName = array('response' => 'failed');
                    echo json_encode($arrayName);
                }
            }
        }
    }

    public function updateIncomeExpenseCategory() {
        $this->form_validation->set_rules('categoryName', 'Category Name', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('incomeExpenseRadio', 'Type', 'strip_tags|trim|xss_clean|required');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'systemId' => $this->sanitize($this->input->post('categorySystemCode')),
                'name' => $this->sanitize($this->input->post('categoryName')),
                'type' => $this->sanitize($this->input->post('incomeExpenseRadio')),
                'isNotify' => $this->sanitize($this->input->post('notificationCheck')),
                'amount' => $this->sanitize($this->input->post('notificationCategoryAmount')),
                'email' => $this->sanitize($this->input->post('notificationCategoryEmail')),
                'description' => $this->sanitize($this->input->post('categoryDescription')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array("name" => $this->input->post('categoryName'));
            $count = $this->data_model->get_all_info("id", $where, "settings_income_expense_category");
            if(isset($count[0]->id) && $count[0]->id != $this->input->post('categoryEditId')) {
                $arrayName = array('response' => 'Already exist');
                echo json_encode($arrayName);
            } else {
                $where = array('id' => $this->input->post('categoryEditId'));
                $statusId = $this->database_model->data_update_return("settings_income_expense_category", $updateData, $where);
                if($statusId) {
                    $arrayName = array('response' => 'success');
                    echo json_encode($arrayName);
                } else {
                    $arrayName = array('response' => 'failed');
                    echo json_encode($arrayName);
                }
            }
        }
    }

    public function categoryStatus() {
        $this->form_validation->set_rules('id', 'Category Id', 'strip_tags|trim|xss_clean');
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
            } else {
                $updateData = array(
                    'status' => $this->input->post('status'),
                    'lastActiveBy' => $this->session->userdata('id'),
                    'lastActiveDateTime' => $this->systemDateTime
                );
            }
            $result = $this->database_model->data_update_return("settings_income_expense_category", $updateData, $where);
            if($result == 1) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            }
        }
    }

    public function addTax() {
        // print_r($this->input->post()); die();
        $this->form_validation->set_rules('taxName', 'Tax Name', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('taxRate', 'Tax Rate', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('taxDescription', 'Tax Description', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $insertData = array(
                'systemId' => $this->sanitize($this->input->post('taxSystemCode')),
                'name' => $this->sanitize($this->input->post('taxName')),
                'taxRate' => $this->sanitize($this->input->post('taxRate')),
                'description' => $this->sanitize($this->input->post('taxDescription')),
                'createdBy' => $this->session->userdata('id'),
                'createdDateTime' => $this->systemDateTime
            );
            $where = array("name" => $this->input->post('taxName'));
            $count = $this->data_model->count_specific_table_array("settings_tax", $where);
            if($count > 0) {
                $arrayName = array('response' => 'Already exist');
                echo json_encode($arrayName);
            } else {
                $statusId = $this->database_model->data_insert_return("settings_tax", $insertData);
                if($statusId) {
                    $arrayName = array('response' => 'success');
                    echo json_encode($arrayName);
                } else {
                    $arrayName = array('response' => 'failed');
                    echo json_encode($arrayName);
                }
            }
        }
    }

    public function updateTax() {
        $this->form_validation->set_rules('taxName', 'Tax Name', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('taxRate', 'Tax Rate', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('taxDescription', 'Tax Description', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'name' => $this->sanitize($this->input->post('taxName')),
                'taxRate' => $this->sanitize($this->input->post('taxRate')),
                'description' => $this->sanitize($this->input->post('taxDescription')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array("name" => $this->input->post('taxName'));
            $count = $this->data_model->get_all_info("id", $where, "settings_tax");
            if(isset($count[0]->id) && $count[0]->id != $this->input->post('taxEditId')) {
                $arrayName = array('response' => 'Already exist');
                echo json_encode($arrayName);
            } else {
                $where = array('id' => $this->input->post('taxEditId'));
                $statusId = $this->database_model->data_update_return("settings_tax", $updateData, $where);
                if($statusId) {
                    $arrayName = array('response' => 'success');
                    echo json_encode($arrayName);
                } else {
                    $arrayName = array('response' => 'failed');
                    echo json_encode($arrayName);
                }
            }
        }
    }

    public function taxStatus() {
        $this->form_validation->set_rules('id', 'Category Id', 'strip_tags|trim|xss_clean');
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
            } else {
                $updateData = array(
                    'status' => $this->input->post('status'),
                    'lastActiveBy' => $this->session->userdata('id'),
                    'lastActiveDateTime' => $this->systemDateTime
                );
            }
            $result = $this->database_model->data_update_return("settings_tax", $updateData, $where);
            if($result == 1) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            }
        }
    }

    public function addProduct() {
        $this->form_validation->set_rules('codeProduct', 'Product Code', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('nameProduct', 'Product Name', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('unitProduct', 'Product Unit', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('initialProduct', 'Product Initial', 'strip_tags|trim|xss_clean|numeric');
        $this->form_validation->set_rules('alertProduct', 'Product Alert', 'strip_tags|trim|xss_clean|numeric');
        $this->form_validation->set_rules('categoryProduct', 'Product Category', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('subCategoryProduct', 'Product Sub Category', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('descriptionProduct', 'Product description', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('warrantyYes', 'Product Warranty', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('discountCheck', 'Product discount', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('radio2Product', 'Product Time', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            echo json_encode($arrayName);
            return;
        } else {
            $insertData = array(
                'systemId' => $this->sanitize($this->input->post('productSystemCode')),
                'code' => $this->sanitize($this->input->post('codeProduct')),
                'name' => $this->sanitize($this->input->post('nameProduct')),
                'unit' => $this->sanitize($this->input->post('unitProduct')),
                'initialQuantity' => $this->sanitize($this->input->post('initialProduct')),
                'balanceQuantity' => $this->sanitize($this->input->post('initialProduct')),
                'alertQuantity' => $this->sanitize($this->input->post('alertProduct')),
                'category' => $this->sanitize($this->input->post('categoryProduct')),
                'subCategory' => $this->sanitize($this->input->post('subCategoryProduct')),
                'description' => $this->sanitize($this->input->post('descriptionProduct')),
                'isWarranty' => $this->sanitize($this->input->post('warrantyYes')),
                'warrantyPeriod' => $this->sanitize($this->input->post('discountCheck')),
                'warrantyTime' => $this->sanitize($this->input->post('radio2Product')),
                'picture' => $this->sanitize($this->input->post('productImg')),
                'initialPurchasePrice' => $this->sanitize($this->input->post('priceProduct')),
                'lastPurchasePrice' => $this->sanitize($this->input->post('priceProduct')),
                'lastSellingPrice' => $this->sanitize($this->input->post('saleProduct')),
                'createdBy' => $this->session->userdata('id'),
                'createdDateTime' => $this->systemDateTime
            );
            $where = array("name" => $this->input->post('nameProduct'));
            $count = $this->data_model->count_specific_table_array("list_product_enrollment", $where);
            if($count > 0) {
                $arrayName = array('response' => 'Already exist');
                echo json_encode($arrayName);
            } else {
                $statusId = $this->database_model->data_insert_return("list_product_enrollment", $insertData);
                if($statusId) {
                    $newInsertData = array(
                        'documentId' => 0,
                        'productId' => $statusId,
                        'type' => 'purchase',
                        'totalProduct' => $this->sanitize($this->input->post('initialProduct')),
                        'adjustProduct' => $this->sanitize($this->input->post('initialProduct')),
                        'purchasePrice' => $this->sanitize($this->input->post('priceProduct')),
                        'SellingPrice' => "0.00",
                        'taxId' => 1,
                        'taxAmount' => "0.00",
                        'createdBy' => $this->session->userdata('id'),
                        'createdDateTime' => $this->systemDateTime
                    );
                    $productInsert = $this->database_model->data_insert_return("list_product_adjust", $newInsertData);
                    $updateData = array('initialId' => $productInsert);
                    $where = array('id' => $statusId);
                    $this->database_model->data_update_return("list_product_enrollment", $updateData, $where);
                    $arrayName = array('response' => 'success');
                    echo json_encode($arrayName);
                } else {
                    $arrayName = array('response' => 'failed');
                    echo json_encode($arrayName);
                }
            }
        }
    }

    public function updateProduct() {
        $this->form_validation->set_rules('codeProduct', 'Product Code', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('nameProduct', 'Product Name', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('unitProduct', 'Product Unit', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('initialProduct', 'Product Initial', 'strip_tags|trim|xss_clean|numeric');
        $this->form_validation->set_rules('alertProduct', 'Product Alert', 'strip_tags|trim|xss_clean|numeric');
        $this->form_validation->set_rules('categoryProduct', 'Product Category', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('subCategoryProduct', 'Product Sub Category', 'strip_tags|trim|xss_clean|required');
        $this->form_validation->set_rules('descriptionProduct', 'Product description', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('warrantyYes', 'Product Warranty', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('discountCheck', 'Product discount', 'strip_tags|trim|xss_clean');
        $this->form_validation->set_rules('radio2Product', 'Product Time', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            //echo validation_errors();
            echo json_encode($arrayName);
            return;
        } else {
            $updateData = array(
                'code' => $this->sanitize($this->input->post('codeProduct')),
                'name' => $this->sanitize($this->input->post('nameProduct')),
                'unit' => $this->sanitize($this->input->post('unitProduct')),
                'initialQuantity' => $this->sanitize($this->input->post('initialProduct')),
                'alertQuantity' => $this->sanitize($this->input->post('alertProduct')),
                'category' => $this->sanitize($this->input->post('categoryProduct')),
                'subCategory' => $this->sanitize($this->input->post('subCategoryProduct')),
                'description' => $this->sanitize($this->input->post('descriptionProduct')),
                'isWarranty' => $this->sanitize($this->input->post('warrantyYes')),
                'warrantyPeriod' => $this->sanitize($this->input->post('discountCheck')),
                'warrantyTime' => $this->sanitize($this->input->post('radio2Product')),
                'picture' => $this->sanitize($this->input->post('productImg')),
                'initialPurchasePrice' => $this->sanitize($this->input->post('priceProduct')),
                // 'lastPurchasePrice' => $this->sanitize($this->input->post('priceProduct')),
                'lastSellingPrice' => $this->sanitize($this->input->post('saleProduct')),
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array("name" => $this->input->post('nameProduct'));
            $count = $this->data_model->get_all_info("id", $where, "list_product_enrollment");
            if(isset($count[0]->id) && $count[0]->id != $this->input->post('productEditId')) {
                $arrayName = array('response' => 'Already exist');
                echo json_encode($arrayName);
            } else {
                $where = array('id' => $this->input->post('productEditId'));
                $productInfo = $this->data_model->get_all_info('*', $where, 'list_product_enrollment');
                $statusId = $this->database_model->data_update_return("list_product_enrollment", $updateData, $where);
                if($statusId) {
                    $updateData = array(
                        'balanceQuantity' => $productInfo[0]->balanceQuantity+$this->input->post('initialProduct')-$productInfo[0]->initialQuantity
                    );
                    $this->database_model->data_update_return("list_product_enrollment", $updateData, $where);
                    $updateData = array(
                        'totalProduct' => $this->sanitize($this->input->post('initialProduct')),
                        'adjustProduct' => $this->sanitize($this->input->post('initialProduct')),
                        'lastUpdateBy' => $this->session->userdata('id'),
                        'lastUpdateDateTime' => $this->systemDateTime
                    );
                    $where = array('id' => $productInfo[0]->initialId);
                    $this->database_model->data_update_return("list_product_adjust", $updateData, $where);
                    $arrayName = array('response' => 'success');
                    echo json_encode($arrayName);
                } else {
                    $arrayName = array('response' => 'failed');
                    echo json_encode($arrayName);
                }
            }
        }
    }

    public function productStatus() {
        $this->form_validation->set_rules('id', 'Product Id', 'strip_tags|trim|xss_clean');
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
            } else {
                $updateData = array(
                    'status' => $this->input->post('status'),
                    'lastActiveBy' => $this->session->userdata('id'),
                    'lastActiveDateTime' => $this->systemDateTime
                );
            }
            $result = $this->database_model->data_update_return("list_product_enrollment", $updateData, $where);
            if($result == 1) {
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            }
        }
    }

    public function getTaxInfo() {
        if($this->input->post('id') != 0) {
            $product = $this->data_model->get_all_info('*', array('id' => $this->input->post('id')), 'settings_tax');
            $arrayName = array('rate' => $product[0]->taxRate, 'name' => $product[0]->name);
            echo json_encode($arrayName);
        } else {
            $arrayName = array('rate' => '');
            echo json_encode($arrayName);
        }
    }

    public function removeFile(){
        $identification = $this->input->post('identification');
        if($identification === "baseLogo") {
            $updateData = array("defaultLogo" => 'defaultLogo.png');
            $where = array('id' => 1);
            $this->database_model->data_update_return("settings_basic", $updateData, $where);
            unlink('./assets/layouts/layout4/img/'.$this->input->post('file'));
        }
        if($identification === "invoiceLogo") {
            $updateData = array("bDefaultLogo" => '');
            $where = array('id' => 1);
            $this->database_model->data_update_return("settings_basic", $updateData, $where);
            unlink('./assets/uploadedFile/system/'.$this->input->post('file'));
        }
        if($identification === "productPicture") {
            unlink('./assets/uploadedFile/productPicture/'.$this->input->post('file'));
        }        
        if($identification === "customerPicture") {
            unlink('./assets/uploadedFile/customerPicture/'.$this->input->post('file'));
        }        
        if($identification === "profilePicture") {
            unlink('./assets/uploadedFile/profilePicture/'.$this->input->post('file'));
        }        
        if($identification === "vendorPicture") {
            unlink('./assets/uploadedFile/vendorPicture/'.$this->input->post('file'));
        }
        if($identification === "receiptPicture") {
            unlink('./assets/uploadedFile/receiptPicture/'.$this->input->post('file'));
        }
        $arrayName = array('response' => 'success');
        echo json_encode($arrayName);
    }

    public function addCategory() {
        $insertData = array(
            'name' => $this->sanitize($this->input->post('value')),
            'parent' => 0,
            'createdBy' => $this->session->userdata('id'),
            'createdDateTime' => $this->systemDateTime
        );
        $statusId = $this->database_model->data_insert_return("settings_product_category", $insertData);
        if($statusId) {
            $arrayName = array('response' => 'success', 'dataIndex' => $statusId);
            echo json_encode($arrayName);
        } else {
            $arrayName = array('response' => 'failed');
            echo json_encode($arrayName);
        }
    }

    public function updateCategory() {
        $updateData = array(
            'name' => $this->sanitize($this->input->post('value')),
            'updateBy' => $this->session->userdata('id'),
            'updateDateTime' => $this->systemDateTime
        );
        $where = array('id' => $this->sanitize($this->input->post('id')));
        $statusId = $this->database_model->data_update_return("settings_product_category", $updateData, $where);
        $result = $this->data_model->get_specific_column("parent", array('id' => $this->sanitize($this->input->post('id'))), 'settings_product_category');
        if($statusId) {
            $arrayName = array('response' => 'success', 'dataIndex' => $statusId, 'dataParent' => $result[0]->parent);
            echo json_encode($arrayName);
        } else {
            $arrayName = array('response' => 'failed');
            echo json_encode($arrayName);
        }
    }

    public function deleteCategory() {
        $result = $this->data_model->get_specific_column("*", array('id' => $this->sanitize($this->input->post('id'))), 'settings_product_category');
        if($result[0]->parent > 0) {
            $updateData = array(
                'subCategory' => '---',
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('subCategory' => $this->sanitize($this->input->post('id')));
            $this->database_model->data_update_return("list_product_enrollment", $updateData, $where);
        } else {
            $updateData = array(
                'category' => 1,
                'subCategory' => 1,
                'lastUpdateBy' => $this->session->userdata('id'),
                'lastUpdateDateTime' => $this->systemDateTime
            );
            $where = array('category' => $this->sanitize($this->input->post('id')));
            $this->database_model->data_update_return("list_product_enrollment", $updateData, $where);
        }
        $subRes = $this->data_model->get_specific_column("*", array('parent' => $this->sanitize($this->input->post('id'))), 'settings_product_category');
        $this->database_model->data_delete('settings_product_category', array('id' =>$this->sanitize($this->input->post('id'))));
        foreach ($subRes as $resSub) {
            $this->database_model->data_delete('settings_product_category', array('id' => $resSub->id));
        }
    }

    public function parseJsonArray($jsonArray, $parentID = 0) {
      $return = array();
      foreach ($jsonArray as $subArray) {
        $returnSubSubArray = array();
        if (isset($subArray->children)) {
            $returnSubSubArray = $this->parseJsonArray($subArray->children, $subArray->id);
        }

        $return[] = array('id' => $subArray->id, 'parentID' => $parentID);
        $return = array_merge($return, $returnSubSubArray);
      }
      return $return;
    }

    public function sortProductCategory() {
        $inputData = json_decode($this->input->post('data')); 
        $i = 1;
        foreach ($inputData as $subArray) {
            if (isset($subArray->children)) {
                foreach ($subArray->children as $childrenArray) {
                    $where = array('id' => $childrenArray->id);
                    $data_new_arr = array(
                        'sortOrder' => $i,
                        'parent' => $subArray->id
                    );
                    $this->database_model->data_update_return("settings_product_category", $data_new_arr, $where);
                    $productScList = $this->data_model->get_specific_column("*", array('subCategory' => $childrenArray->id), 'list_product_enrollment');
                    $productClist = $this->data_model->get_specific_column("*", array('category' => $childrenArray->id), 'list_product_enrollment');
                    foreach ($productScList as $listProduct) {
                        if($listProduct->subCategory == $childrenArray->id) {
                            $this->database_model->data_update_return("list_product_enrollment", array('category' => $subArray->id), array('subCategory' => $childrenArray->id));
                        }
                    }
                    foreach ($productClist as $listProduct) {
                        if($listProduct->category == $childrenArray->id) {
                            $this->database_model->data_update_return("list_product_enrollment", array('category' => $subArray->id, 'subCategory' => $childrenArray->id), array('category' => $childrenArray->id));
                        }
                    }
                    $i++;
                }
            }
            $where = array('id' => $subArray->id);
            $data_new_arr = array(
                'sortOrder' => $i,
                'parent' => 0
            );
            $this->database_model->data_update_return("settings_product_category", $data_new_arr, $where);
            $result = $this->data_model->get_specific_column("*", array('id' => $subArray->id), 'settings_product_category');
            $this->database_model->data_update_return("list_product_enrollment", array('subCategory' => '---'), array('subCategory' => $subArray->id));
            $i++;
        }
    }

    public function getNameCategory() {
        $name = $this->data_model->get_all_info('*', array('id' => $this->input->post('id')), 'settings_product_category');
        $arrayName = array('response' => $name[0]->name);
        echo json_encode($arrayName);
    }

    public function getEmailtemplate() {
        $name = $this->data_model->get_all_info('*', array('id' => $this->input->post('id')), 'settings_email_template');
        $arrayName = array('emailSubject' => $name[0]->emailSubject, 'bccEmailAddress' => $name[0]->bccEmailAddress, 'emailBody' => $name[0]->emailBody, 'isAttachPDF' => $name[0]->isAttachPDF, 'isAttachLink' => $name[0]->isAttachLink);
        echo json_encode($arrayName);
    }

    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */