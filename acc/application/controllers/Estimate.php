<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estimate extends BC_Controller {
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
        $this->load->library('email');
        $this->load->library('zip');
    }

    public function index() {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('estimate/');
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('estimate/');
        } else {
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['basicInvoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['columnSettings'] = $this->data_model->get_all_info('*', '', 'settings_column');
            $data['anotherSettings'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['totalPurchase'] = $this->data_model->count_specific_table_without_where('list_document');
            $data['local'] = $this->data_model->count_specific_column('isCurrencyConvert', 'isCurrencyConvert', 0, 'list_document'); 
            $data['foreign'] = $this->data_model->count_specific_column('isCurrencyConvert', 'isCurrencyConvert', 1, 'list_document'); 
            $data['overDue'] = $this->data_model->count_specific_column('paymentStatus', 'paymentStatus', 0, 'list_document'); 
            $data['partial'] = $this->data_model->count_specific_column('paymentStatus', 'paymentStatus', 1, 'list_document'); 
            $data['paid'] = $this->data_model->count_specific_column('paymentStatus', 'paymentStatus', 2, 'list_document'); 
            $data['purchaseTotal'] = $this->data_model->columnSum('calculateTotalLocal', array('status' => 1, 'type' => 'estimate'), 'list_document'); 
            $data['purchasePaid'] = $this->data_model->columnSum('paidAmount', array('status' => 1, 'type' => 'estimate'), 'list_document'); 
            $data['listProducts'] = $this->data_model->get_all_info('*', array('status' => 1), 'list_product_enrollment');
            $data['listTaxs'] = $this->data_model->get_all_info('*', array('status' => 1), 'settings_tax');
            $data['listVendors'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'customer', 'status' => 1), 'id', 'desc', 'list_business_member');            
            $data['activePurchase'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'estimate', 'status' => 1), 'id', 'desc', 'list_document');
            $data['inActivePurchase'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'estimate', 'status' => 0), 'id', 'desc', 'list_document');
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['main_content'] = 'estimate_list';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function edit($id) {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('estimate/edit/'.$id);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('estimate/edit/'.$id);
        } else {
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['basicInvoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['columnSettings'] = $this->data_model->get_all_info('*', '', 'settings_column');
            $data['anotherSettings'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['totalPurchase'] = $this->data_model->count_specific_table_without_where('list_document');
            $data['local'] = $this->data_model->count_specific_column('isCurrencyConvert', 'isCurrencyConvert', 0, 'list_document'); 
            $data['foreign'] = $this->data_model->count_specific_column('isCurrencyConvert', 'isCurrencyConvert', 1, 'list_document'); 
            $data['overDue'] = $this->data_model->count_specific_column('paymentStatus', 'paymentStatus', 0, 'list_document'); 
            $data['partial'] = $this->data_model->count_specific_column('paymentStatus', 'paymentStatus', 1, 'list_document'); 
            $data['paid'] = $this->data_model->count_specific_column('paymentStatus', 'paymentStatus', 2, 'list_document'); 
            $data['listProducts'] = $this->data_model->get_all_info('*', array('status' => 1), 'list_product_enrollment');
            $data['listTaxs'] = $this->data_model->get_all_info('*', array('status' => 1), 'settings_tax');
            $data['listVendors'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'customer', 'status' => 1), 'id', 'desc', 'list_business_member');            
            $data['activePurchase'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'estimate', 'status' => 1), 'id', 'desc', 'list_document');
            $data['inActivePurchase'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'estimate', 'status' => 0), 'id', 'desc', 'list_document');
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['main_content'] = 'estimate_list';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    } 

    public function add($id='') {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('estimate/add/'.$id);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('estimate/add/'.$id);
        } else {
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['basicInvoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['columnSettings'] = $this->data_model->get_all_info('*', '', 'settings_column');
            $data['anotherSettings'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['totalPurchase'] = $this->data_model->count_specific_table_without_where('list_document');
            $data['local'] = $this->data_model->count_specific_column('isCurrencyConvert', 'isCurrencyConvert', 0, 'list_document'); 
            $data['foreign'] = $this->data_model->count_specific_column('isCurrencyConvert', 'isCurrencyConvert', 1, 'list_document'); 
            $data['overDue'] = $this->data_model->count_specific_column('paymentStatus', 'paymentStatus', 0, 'list_document'); 
            $data['partial'] = $this->data_model->count_specific_column('paymentStatus', 'paymentStatus', 1, 'list_document'); 
            $data['paid'] = $this->data_model->count_specific_column('paymentStatus', 'paymentStatus', 2, 'list_document'); 
            $data['listProducts'] = $this->data_model->get_all_info('*', array('status' => 1), 'list_product_enrollment');
            $data['listTaxs'] = $this->data_model->get_all_info('*', array('status' => 1), 'settings_tax');
            $data['listVendors'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'customer', 'status' => 1), 'id', 'desc', 'list_business_member');            
            $data['activePurchase'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'estimate', 'status' => 1), 'id', 'desc', 'list_document');
            $data['inActivePurchase'] = $this->data_model->get_all_info_where_with_order('*', array('type' => 'estimate', 'status' => 0), 'id', 'desc', 'list_document');
            $data['totalComment'] = $this->data_model->count_specific_table_without_where('list_all_comment'); 
            $data['main_content'] = 'estimate_list';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function memeberCount() {
        $data = $this->data_model->count_specific_table_array('list_document', array('type' => 'estimate', 'customerId'=> $this->input->post('id'))); 
        $arrayName = array('count' => $data);
        echo json_encode($arrayName);
    }

    public function addProduct() {
        //print_r($this->input->post()); die();
        $checkCode = $this->input->post('checkCode');
        $product = $this->input->post('product');
        $unitInput = $this->input->post('unitInput');
        $priceInput = $this->input->post('priceInput');
        $tax = $this->input->post('tax');
        $taxVat = $this->input->post('taxVat');
        $totalInput = $this->input->post('totalInput');
        $warrantyInput = $this->input->post('warrantyInput');
        $descriptionInput = $this->input->post('descriptionInput');
        $productNameInput = $this->input->post('productNameInput');
        $taxNameInput = $this->input->post('taxNameInput');
        $unitWeight = $this->input->post('unitWeight');
        $addData = '';
        for ($i = 0; $i < count($checkCode); $i++) { 
            $addData .= $checkCode[$i]."*".$product[$i]."*".$unitInput[$i]."*".$priceInput[$i]."*".$tax[$i]."*".$taxVat[$i]."*".$totalInput[$i]."*".$warrantyInput[$i]."*".$descriptionInput[$i]."*".$productNameInput[$i]."*".$taxNameInput[$i]."*".$unitWeight[$i]."::";
        }
        $addDataTrim = trim($addData, "::");
        $customerId = '';
        $isCurrency = 0;
        if($this->input->post('new_customer') == 1) {
            $insertCustomer = array(
                'type' => 'customer',
                'name' => $this->input->post('customer'),
                'address1' => $this->input->post('new_customer_address_1'),
                'email' => $this->input->post('customer_email'),
                'createdBy' => $this->session->userdata('id')
            );
            $customerId = $this->database_model->data_insert_return("list_business_member", $insertCustomer);
        } else {
            $customerId = $this->input->post('customer');
        }
        $calculateTotalLocal = $this->sanitize($this->input->post('productTotal'));
        $currencyType = 'local';
        if($this->input->post('radio6') != "") {
            if($this->input->post('radio6') != "local") {
                $isCurrency = 1;
                $currencyType = 'foreign';
                $calculateTotalLocal = $this->sanitize($this->input->post('productTotal'))*$this->sanitize($this->input->post('currencyRate'));
            } else {
                $isCurrency = 0;
                $currencyType = 'local';
                $calculateTotalLocal = $this->sanitize($this->input->post('productTotal'));
            }
        } else {
            $currencyType = 'local';
        }         
        $dStart = new DateTime($this->input->post('invoiceDate'));
        $dEnd  = new DateTime($this->input->post('pickDate'));
        $dDiff = $dStart->diff($dEnd);

        $insertData = array(
            'systemId' => $this->sanitize($this->input->post('productSystemCode')),
            'type' => 'estimate',
            'documentId' => $this->sanitize($this->input->post('invoiceNo')),
            'title' => $this->sanitize($this->input->post('title')),
            'customerId' => $customerId,
            'po' => $this->sanitize($this->input->post('poOptional')),
            'date' => $this->sanitize(date("Y-m-d", strtotime($this->input->post('invoiceDate')))),
            'dueDate' => $this->sanitize(date("Y-m-d", strtotime($this->input->post('pickDate')))),
            'dateDifference' => $dDiff->days,
            'discountType' => $this->sanitize($this->input->post('radio2')),
            'discountAmount' => $this->sanitize($this->input->post('discountCheck')),
            'isCurrencyConvert' => $isCurrency,
            'currencyType' => $currencyType,
            'currencyRate' => $this->sanitize($this->input->post('currencyRate')),
            'attachFile' => trim($this->sanitize($this->input->post('productfiles')), '::'),
            'noteS' => $this->sanitize($this->input->post('noteProduct')),
            'remarks' => $this->sanitize($this->input->post('remarkProduct')),
            'documentData' => $addDataTrim,
            'calculateTotal' => $this->sanitize($this->input->post('productTotal')),
            'calculateTotalLocal' => $calculateTotalLocal,
            'createdBy' => $this->session->userdata('id'),
            'createdDateTime' => $this->systemDateTime
        );
        $where = array("documentId" => $this->input->post('invoiceNo'), 'type' => 'estimate');
        $count = $this->data_model->count_specific_table_array("list_document", $where);
        if($count > 0) {
            $arrayName = array('response' => 'Already exist');
            echo json_encode($arrayName);
        } else {
            $statusId = $this->database_model->data_insert_return("list_document", $insertData);            
            for ($i = 0; $i < count($product); $i++) {
                $productInfo = $this->data_model->get_all_info('*', array('id' => $product[$i]), 'list_product_enrollment');
                $saveRate = 0;
                if($isCurrency == 1) {
                    $saveRate = number_format($productInfo[0]->lastPurchasePrice*$this->sanitize($this->input->post('currencyRate')), 2);
                } else {
                    $saveRate = $productInfo[0]->lastPurchasePrice;
                }
                $newInsertData = array(
                    'documentId' => $statusId,
                    'productId' => $product[$i],
                    'type' => 'estimate',
                    'totalProduct' => $unitInput[$i],
                    'adjustProduct' => $unitInput[$i],
                    'purchasePrice' => $saveRate,
                    'SellingPrice' => $priceInput[$i],
                    'taxId' => $tax[$i],
                    'taxAmount' => round(($priceInput[$i]*$taxVat[$i])/100, 2),
                    'createdBy' => $this->session->userdata('id'),
                    'createdDateTime' => $this->systemDateTime
                );
                $this->database_model->data_insert_return("list_product_adjust", $newInsertData);
            }
            if($statusId) {
                $insertShortHistory = array(
                    'documentId' => $statusId,
                    'userId' => $this->session->userdata('id'),
                    'documentType' => "Estimate",
                    'workType' => "Create",
                    'dateTime' => $this->systemDateTime
                );
                $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
                $data['local'] = $this->data_model->count_specific_column('isCurrencyConvert', 'isCurrencyConvert', 0, 'list_document'); 
                $data['foreign'] = $this->data_model->count_specific_column('isCurrencyConvert', 'isCurrencyConvert', 1, 'list_document'); 
                $dataCurrency = $data['local']."::".$data['foreign'];
                $arrayName = array('response' => 'success', 'customer' => $customerId, 'dataCurrency' => $dataCurrency);
                echo json_encode($arrayName);
            } else {
                $arrayName = array('response' => 'failed');
                echo json_encode($arrayName);
            }
        }
    }

    public function updateProduct() {
        $specificPurchaseInfo = $this->data_model->get_all_info('*', array('id' => $this->input->post('productEditId'), 'type' => "estimate"), 'list_document');
        $updateHistory = array(
            'type' => "Estimate",
            'typeWork' => "Edit",
            'documentId' => $specificPurchaseInfo[0]->id,
            'title' => $specificPurchaseInfo[0]->title,
            'customerId' => $specificPurchaseInfo[0]->customerId,
            'po' => $specificPurchaseInfo[0]->po,
            'date' => $specificPurchaseInfo[0]->date,
            'dueDate' => $specificPurchaseInfo[0]->dueDate,
            'dateDifference' => $specificPurchaseInfo[0]->dateDifference,
            'discountType' => $specificPurchaseInfo[0]->discountType,
            'discountAmount' => $specificPurchaseInfo[0]->discountAmount,
            'isCurrencyConvert' => $specificPurchaseInfo[0]->isCurrencyConvert,
            'currencyType' => $specificPurchaseInfo[0]->currencyType,
            'currencyRate' => $specificPurchaseInfo[0]->currencyRate,
            'attachFile' => $specificPurchaseInfo[0]->attachFile,
            'noteS' => $specificPurchaseInfo[0]->noteS,
            'remarks' => $specificPurchaseInfo[0]->remarks,
            'documentData' => $specificPurchaseInfo[0]->documentData,
            'calculateTotal' => $specificPurchaseInfo[0]->calculateTotal,
            'calculateTotalLocal' => $specificPurchaseInfo[0]->calculateTotalLocal,
            'paidAmount' => $specificPurchaseInfo[0]->paidAmount,
            'stockAdjust' => $specificPurchaseInfo[0]->stockAdjust,
            'paymentStatus' => $specificPurchaseInfo[0]->paymentStatus,
            'lastChangeBy' => $this->session->userdata('id'),
            'lastChangeDateTime' => $this->systemDateTime
        );
        $this->database_model->data_insert_return("history_list_document", $updateHistory);  
        $checkCode = $this->input->post('checkCode');
        $product = $this->input->post('product');
        $unitInput = $this->input->post('unitInput');
        $priceInput = $this->input->post('priceInput');
        $tax = $this->input->post('tax');
        $taxVat = $this->input->post('taxVat');
        $totalInput = $this->input->post('totalInput');
        $warrantyInput = $this->input->post('warrantyInput');
        $descriptionInput = $this->input->post('descriptionInput');
        $productNameInput = $this->input->post('productNameInput');
        $taxNameInput = $this->input->post('taxNameInput');
        $unitWeight = $this->input->post('unitWeight');
        $addData = '';
        for ($i = 0; $i < count($checkCode); $i++) { 
            $addData .= $checkCode[$i]."*".$product[$i]."*".$unitInput[$i]."*".$priceInput[$i]."*".$tax[$i]."*".$taxVat[$i]."*".$totalInput[$i]."*".$warrantyInput[$i]."*".$descriptionInput[$i]."*".$productNameInput[$i]."*".$taxNameInput[$i]."*".$unitWeight[$i]."::";
        }
        $addDataTrim = trim($addData, "::");
        $customerId = '';
        $isCurrency = 0;
        if($this->input->post('new_customer') == 1) {
            $insertCustomer = array(
                'type' => 'customer',
                'name' => $this->input->post('customer'),
                'address1' => $this->input->post('new_customer_address_1'),
                'email' => $this->input->post('customer_email'),
                'createdBy' => $this->session->userdata('id')
            );
            $customerId = $this->database_model->data_insert_return("list_business_member", $insertCustomer);
        } else {
            $customerId = $this->input->post('customer');
        }
        $calculateTotalLocal = $this->sanitize($this->input->post('productTotal'));
        $currencyType = 'local';
        if($this->input->post('radio6') != "") {
            if($this->input->post('radio6') != "local") {
                $isCurrency = 1;
                $currencyType = 'foreign';
                $calculateTotalLocal = $this->sanitize($this->input->post('productTotal'))*$this->sanitize($this->input->post('currencyRate'));
            } else {
                $isCurrency = 0;
                $currencyType = 'local';
                $calculateTotalLocal = $this->sanitize($this->input->post('productTotal'));
            }
        } else {
            $currencyType = 'local';
        } 
        $dStart = new DateTime($this->input->post('invoiceDate'));
        $dEnd  = new DateTime($this->input->post('pickDate'));
        $dDiff = $dStart->diff($dEnd);
        $updateData = array(
            'systemId' => $this->sanitize($this->input->post('productSystemCode')),
            'type' => 'estimate',
            'documentId' => $this->sanitize($this->input->post('invoiceNo')),
            'title' => $this->sanitize($this->input->post('title')),
            'customerId' => $customerId,
            'po' => $this->sanitize($this->input->post('poOptional')),
            'date' => $this->sanitize(date("Y-m-d", strtotime($this->input->post('invoiceDate')))),
            'dueDate' => $this->sanitize(date("Y-m-d", strtotime($this->input->post('pickDate')))),
            'dateDifference' => $dDiff->days,
            'discountType' => $this->sanitize($this->input->post('radio2')),
            'discountAmount' => $this->sanitize($this->input->post('discountCheck')),
            'isCurrencyConvert' => $isCurrency,
            'currencyType' => $currencyType,
            'currencyRate' => $this->sanitize($this->input->post('currencyRate')),
            'attachFile' => trim($this->sanitize($this->input->post('productfiles')), '::'),
            'noteS' => $this->sanitize($this->input->post('noteProduct')),
            'remarks' => $this->sanitize($this->input->post('remarkProduct')),
            'documentData' => $addDataTrim,
            'calculateTotal' => $this->sanitize($this->input->post('productTotal')),
            'calculateTotalLocal' => $calculateTotalLocal,
            'lastUpdateBy' => $this->session->userdata('id'),
            'lastUpdateDateTime' => $this->systemDateTime
        );
        $where = array('id' => $this->input->post('productEditId'));
        $statusId = $this->database_model->data_update_return("list_document", $updateData, $where);
        if($statusId) {
            for ($i = 0; $i < count($product); $i++) {
                $where = array('documentId' => $this->input->post('productEditId'), 'productId' => $product[$i]);
                $count = $this->data_model->count_specific_table_array('list_product_adjust', $where);
                if($count > 0) {
                    $oldProduct = $this->data_model->get_all_info('*', $where, 'list_product_adjust');
                    if($unitInput[$i] > $oldProduct[0]->totalProduct) {
                        $adProduct = $oldProduct[0]->totalProduct-$unitInput[$i];
                        $adjProduct = $oldProduct[0]->totalProduct-($adProduct);
                    } else if($unitInput[$i] < $oldProduct[0]->totalProduct) {
                        $adProduct = $unitInput[$i]-$oldProduct[0]->totalProduct;
                        $adjProduct = $oldProduct[0]->totalProduct+($adProduct);
                    } else {
                        $adjProduct = $unitInput[$i];
                    }
                    $newupdateData = array(
                        'documentId' => $this->input->post('productEditId'),
                        'productId' => $product[$i],
                        'totalProduct' => $unitInput[$i],
                        'adjustProduct' => $adjProduct,
                        'SellingPrice' => $priceInput[$i],
                        'taxId' => $tax[$i],
                        'taxAmount' => round(($priceInput[$i]*$taxVat[$i])/100, 2),
                        'createdBy' => $this->session->userdata('id'),
                        'createdDateTime' => $this->systemDateTime
                    );
                    $this->database_model->data_update_return("list_product_adjust", $newupdateData, $where);
                } else {
                    $productInfo = $this->data_model->get_all_info('*', array('id' => $product[$i]), 'list_product_enrollment');
                    $saveRate = 0;
                    if($isCurrency == 1) {
                        $saveRate = number_format($productInfo[0]->lastPurchasePrice*$this->sanitize($this->input->post('currencyRate')), 2);
                    } else {
                        $saveRate = $productInfo[0]->lastPurchasePrice;
                    }
                    $newInsertData = array(
                        'documentId' => $statusId,
                        'productId' => $product[$i],
                        'type' => 'estimate',
                        'totalProduct' => $unitInput[$i],
                        'adjustProduct' => $unitInput[$i],
                        'purchasePrice' => $saveRate,
                        'SellingPrice' => $priceInput[$i],
                        'taxId' => $tax[$i],
                        'taxAmount' => round(($priceInput[$i]*$taxVat[$i])/100, 2),
                        'createdBy' => $this->session->userdata('id'),
                        'createdDateTime' => $this->systemDateTime
                    );
                    $this->database_model->data_insert_return("list_product_adjust", $newInsertData);
                }
            }
            $allProductAdjust = $this->data_model->get_specific_column('productId', array('documentId' => $this->input->post('productEditId')), 'list_product_adjust');
            $productIdArray = array(); $increment = 0;
            $updateProductId = explode("::", trim($this->sanitize($this->input->post('productsIds')), '::'));
            foreach ($allProductAdjust as $productData) {
                $productIdArray[$increment++] = $productData->productId;
            }
            for ($i = 0; $i < count($productIdArray); $i++) { 
                if (!in_array($productIdArray[$i], $updateProductId)) {
                    $this->database_model->data_delete('list_product_adjust', array('documentId' => $this->input->post('productEditId'), 'productId' => $productIdArray[$i]));
                }
            }
            $insertShortHistory = array(
                'documentId' => $this->input->post('productEditId'),
                'userId' => $this->session->userdata('id'),
                'documentType' => "Estimate",
                'workType' => "Update",
                'dateTime' => $this->systemDateTime
            );
            $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
            if($this->sanitize($this->input->post('productTotal')) > $specificPurchaseInfo[0]->calculateTotal && $specificPurchaseInfo[0]->calculateTotal != 0.00) {
                $updateData = array('paymentStatus' => 1);
                $where = array('id' => $this->input->post('productEditId'));
                $this->database_model->data_update_return("list_document", $updateData, $where);  
            }
            $data['local'] = $this->data_model->count_specific_column('isCurrencyConvert', 'isCurrencyConvert', 0, 'list_document'); 
            $data['foreign'] = $this->data_model->count_specific_column('isCurrencyConvert', 'isCurrencyConvert', 1, 'list_document'); 
            $dataCurrency = $data['local']."::".$data['foreign'];
            $arrayName = array('response' => 'success', 'customer' => $customerId, 'dataCurrency' => $dataCurrency);
            echo json_encode($arrayName);
        } else {
            $arrayName = array('response' => 'failed');
            echo json_encode($arrayName);
        }
    }  

    public function viewEstimate($id) {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('estimate/viewEstimate/'.$id);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('estimate/viewEstimate/'.$id);
        } else {
            $insertShortHistory = array(
                'documentId' => $id,
                'userId' => $this->session->userdata('id'),
                'documentType' => "estimate",
                'workType' => "Viewed",
                'dateTime' => $this->systemDateTime
            );
            $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['basicInvoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['columnSettings'] = $this->data_model->get_all_info('*', '', 'settings_column');
            $data['anotherSettings'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['listBankAccount'] = $this->data_model->get_all_info_where_with_order('*', '', 'id', 'asc', 'settings_bank_account');            
            $data['totalActivity'] = $this->data_model->count_specific_table_without_where('history_list_recent_activities'); 
            $data['lastBank'] = $this->data_model->limitQueryASC('*', '', 1, 'settings_bank_account');
            $data['purchaseInfo'] = $this->data_model->get_all_info('*', array('id' => $id), 'list_document');
            $data['customerInfo'] = $this->data_model->get_all_info('*', array('id' => $data['purchaseInfo'][0]->customerId), 'list_business_member');
            $data['allProductAdjust'] = $this->data_model->get_specific_column('*', array('documentId' => $id), 'list_product_adjust');
            $data['purchaseHistory'] = $this->data_model->get_all_info_where_with_order('*', array('documentId' => $id, 'documentType' => 'estimate'), 'id', 'desc', 'history_list_short');
            $data['purchaseVersion'] = $this->data_model->get_all_info_where_with_order('*', array('documentId' => $id, 'type' => 'estimate'), 'id', 'desc', 'history_list_document');
            $data['amountExpense'] = $this->data_model->columnSum('adjustAmount', array('docType' => 'estimate', 'documentId' => $id, 'type' => 'Expense'), 'list_payment'); 
            $data['amountIncome'] = $this->data_model->columnSum('adjustAmount', array('docType' => 'estimate', 'documentId' => $id, 'type' => 'Income'), 'list_payment'); 
            $data['purchasePaid'] = $data['amountExpense'][0]->adjustAmount-$data['amountIncome'][0]->adjustAmount;
            $data['main_content'] = 'view_estimate';                    
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function viewVersion($root, $version) {
        $this->benchmark->mark('generate_start');
        if(!$this->is_logged_in()) {
            $this->home('estimate/viewVersion/'.$root."/".$version);
        } else if($this->is_logged_in() && $this->session->userdata('generate_token') == "") {
            $this->lock('estimate/viewVersion/'.$root."/".$version);
        } else {
            $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
            $data['basicInvoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['columnSettings'] = $this->data_model->get_all_info('*', '', 'settings_column');
            $data['anotherSettings'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
            $data['purchaseInfo'] = $this->data_model->get_all_info('*', array('documentId' => $root, 'id' => $version), 'history_list_document');
            $lastChangeDate = $data['purchaseInfo'][0]->lastChangeDateTime;
            $data['allProductAdjust'] = $this->data_model->get_specific_column('*', array('documentId' => $root), 'list_product_adjust');
            $data['amountExpense'] = $this->data_model->columnSum('adjustAmount', array('docType' => 'estimate', 'documentId' => $root, 'type' => 'Expense', 'createdDateTime <=' => $lastChangeDate), 'list_payment'); 
            $data['amountIncome'] = $this->data_model->columnSum('adjustAmount', array('docType' => 'estimate', 'documentId' => $root, 'type' => 'Income', 'createdDateTime <=' => $lastChangeDate), 'list_payment'); 
            $data['purchasePaid'] = $data['amountExpense'][0]->adjustAmount-$data['amountIncome'][0]->adjustAmount;
            //print_r($data['purchaseInfo']); die();
            $data['main_content'] = 'view_estimate_version';
            $this->load->view('template', $data);
        }
        $this->benchmark->mark('generate_end');
    }

    public function previewEstimate($id) {
        $this->benchmark->mark('generate_start');
        $specificPurchaseInfo = $this->data_model->get_all_info('*', array('id' => $id), 'list_document');
        if($this->session->userdata('id') != '') {
            $insertShortHistory = array(
                'documentId' => $id,
                'userId' => $this->session->userdata('id'),
                'documentType' => "estimate",
                'workType' => "Viewed",
                'dateTime' => $this->systemDateTime
            );
            $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
        }
        $updateData = array('cStatus' => 3);
        $where = array('id' => $id);
        if($specificPurchaseInfo[0]->cStatus != 4) {
            if($this->session->userdata('id') == '') {
                $this->database_model->data_update_return("list_document", $updateData, $where); 
            }
        } 
        $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
        $data['basicInvoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
        $data['columnSettings'] = $this->data_model->get_all_info('*', '', 'settings_column');
        $data['anotherSettings'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
        $data['purchaseInfo'] = $this->data_model->get_all_info('*', array('id' => $id), 'list_document');
        $data['purchaseHistory'] = $this->data_model->get_all_info_where_with_order('*', array('documentId' => $id, 'documentType' => 'estimate'), 'id', 'desc', 'history_list_short');
        $data['allProductAdjust'] = $this->data_model->get_specific_column('*', array('documentId' => $id), 'list_product_adjust');
        $data['amountExpense'] = $this->data_model->columnSum('adjustAmount', array('docType' => 'estimate', 'documentId' => $id, 'type' => 'Expense'), 'list_payment'); 
        $data['amountIncome'] = $this->data_model->columnSum('adjustAmount', array('docType' => 'estimate', 'documentId' => $id, 'type' => 'Income'), 'list_payment'); 
        $data['purchasePaid'] = $data['amountExpense'][0]->adjustAmount-$data['amountIncome'][0]->adjustAmount;
        if($specificPurchaseInfo[0]->status != 0) {
            $data['main_content'] = 'preview_estimate';
        } else {
            $data['archive_message'] = 'Estimate';
            $data['main_content'] = 'archive_message';
        }
        $this->load->view('template', $data);
        $this->benchmark->mark('generate_end');
    }

    public function printEstimate($id) {
        $this->benchmark->mark('generate_start');
        if($this->session->userdata('id') != '') {
            $insertShortHistory = array(
                'documentId' => $id,
                'userId' => $this->session->userdata('id'),
                'documentType' => "estimate",
                'workType' => "Print",
                'dateTime' => $this->systemDateTime
            );
            $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
        }
        $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
        $data['basicInvoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
        $data['columnSettings'] = $this->data_model->get_all_info('*', '', 'settings_column');
        $data['anotherSettings'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
        $data['purchaseInfo'] = $this->data_model->get_all_info('*', array('id' => $id), 'list_document');
        $data['purchaseHistory'] = $this->data_model->get_all_info_where_with_order('*', array('documentId' => $id, 'documentType' => 'estimate'), 'id', 'desc', 'history_list_short');
        $data['amountExpense'] = $this->data_model->columnSum('adjustAmount', array('docType' => 'estimate', 'documentId' => $id, 'type' => 'Expense'), 'list_payment'); 
        $data['amountIncome'] = $this->data_model->columnSum('adjustAmount', array('docType' => 'estimate', 'documentId' => $id, 'type' => 'Income'), 'list_payment'); 
        $data['purchasePaid'] = $data['amountExpense'][0]->adjustAmount-$data['amountIncome'][0]->adjustAmount;
        $data['main_content'] = 'print_estimate';
        $this->load->view('template', $data);
        $this->benchmark->mark('generate_end');
    } 

    public function pdfEstimate($id, $mode, $attach='') {
        $this->benchmark->mark('generate_start');
        if($this->session->userdata('id') != '') {
            $insertShortHistory = array(
                'documentId' => $id,
                'userId' => $this->session->userdata('id'),
                'documentType' => "estimate",
                'workType' => "PDF",
                'dateTime' => $this->systemDateTime
            );
            $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
        }
        $data['basicSettings'] = $this->data_model->get_all_info('*', '', 'settings_basic');
        $data['basicInvoiceEstimate'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
        $data['columnSettings'] = $this->data_model->get_all_info('*', '', 'settings_column');
        $data['anotherSettings'] = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
        $data['purchaseInfo'] = $this->data_model->get_all_info('*', array('id' => $id), 'list_document');
        $data['amountExpense'] = $this->data_model->columnSum('adjustAmount', array('docType' => 'estimate', 'documentId' => $id, 'type' => 'Expense'), 'list_payment'); 
        $data['amountIncome'] = $this->data_model->columnSum('adjustAmount', array('docType' => 'estimate', 'documentId' => $id, 'type' => 'Income'), 'list_payment'); 
        $data['purchasePaid'] = $data['amountExpense'][0]->adjustAmount-$data['amountIncome'][0]->adjustAmount;
        $page = $this->load->view('pdf_view_estimate', $data, true);
        $pdfFilePath = 'estimate-'.$data['purchaseInfo'][0]->documentId . date('Y-m-d') . rand(time(), time()) . '.pdf';
        $this->load->library('M_pdf');
        $pdf = $this->m_pdf->load();
        $dStart = new DateTime(date("Y-m-d"));
        $dEnd  = new DateTime($data['purchaseInfo'][0]->dueDate);
        $dDiff = $dStart->diff($dEnd);
        $diff = $dDiff->format("%R%a");
        $textColor = '';
        if($diff > 0) {
            $textColor = '';
            if($data['purchaseInfo'][0]->paidAmount > $data['purchaseInfo'][0]->paymentStatus) {
                if($data['purchaseInfo'][0]->paymentStatus == 0) {
                    $status = 'Unpaid';
                } else if($data['purchaseInfo'][0]->paymentStatus == 1) {
                    $status = 'Partial';
                } else {
                    $status = 'Paid';
                }
            } else {
                $status = 'Overpaid';
            }
        } else {
            $textColor = '';
            if($data['purchaseInfo'][0]->paymentStatus == 2) {
                if($data['purchaseInfo'][0]->paidAmount > $data['purchaseInfo'][0]->paymentStatus) {
                    $status = 'Paid';
                } else {
                    $status = 'Overpaid';
                }
            } else {
                $textColor = '#D91E18';
                $status = 'Overdue';
            }
        }
        // $wm = $status;
        // $pdf->SetWatermarkText($wm, 0.1);
        //$pdf->watermark_font = “Font Name”;
        $pdf->showWatermarkText = true;

        //$pdf ->SetWatermarkImage(“/image/personal.jpg ”);
        //$pdf ->showWatermarkImage = true;
        $pdf->SetHTMLHeader('<div style="text-align: center;">'.$data['purchaseInfo'][0]->documentId.'</div>', 'O', true);
        $pdf->SetHTMLFooter('<div style="text-align: right; font-size: 9px"></div>', 'O', true);
        $pdf->WriteHTML($page);
        if ($mode == "download") {
            $pdf->Output($pdfFilePath, "D");
        } else if($mode == "view") {
            $pdf->Output($pdfFilePath, "I");
        } else {
            $pdf->Output($attach.$pdfFilePath, "F");
            return $pdfFilePath;
        }
        $this->benchmark->mark('generate_end');
    } 

    public function getProductInfo() {
        if($this->input->post('id') != 0) {
            $product = $this->data_model->get_all_info('*', array('id' => $this->input->post('id')), 'list_product_enrollment');
            $arrayName = array('code' => $product[0]->code, 'name' => $product[0]->name, 'description' => $product[0]->description, 'warranty' => $product[0]->warrantyPeriod." ".$product[0]->warrantyTime, 'unit' => $product[0]->unit, 'lastSellingPrice' =>$product[0]->lastSellingPrice, 'lastPurchasePrice' =>$product[0]->lastPurchasePrice, 'lastTax' =>$product[0]->lastTax, 'quantity' => ($product[0]->balanceQuantity-$product[0]->sellingQuantity));
            echo json_encode($arrayName);
        } else {
            $arrayName = array('description' => '');
            echo json_encode($arrayName);
        }
    }

    public function updateNotePurchase() {
        $this->form_validation->set_rules('note', 'Purchase Note', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $arrayName = array('response' => 'formManipulation');
            return;
        } else { 
            $updateData = array(
                'noteEstimate' => $this->sanitize($this->input->post('note'))
            );
            $where = array("id" => 1);
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

    public function file_upload() {
        $tr_td = "";    
        $identification = $this->input->post('identification');

        $this->load->library('upload');
        if($identification === "purchaseLogo") {
            $config['upload_path'] = './assets/uploadedFile/system/';
        }
        if($identification === "invoiceLogo") {
            $config['upload_path'] = './assets/uploadedFile/system/';
        }
        if($identification === "purchaseFile") {
            $config['upload_path'] = './assets/uploadedFile/files/';
        }
        if($identification === "productPicture") {
            $config['upload_path'] = './assets/uploadedFile/productPicture/';
        }
        if($identification === "baseLogo") {
            $config['upload_path'] = './assets/layouts/layout4/img/';
        }
        $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf|txt';
        $config['max_size'] = '*';
        $config['remove_spaces']= TRUE;
        $config['encrypt_name'] = TRUE;
        $i = 1;
        foreach($_FILES as $key => $value) {

            if(isset($value['name'])) {
                $this->upload->initialize($config);
                if (!$this->upload->do_upload($key)) {
                    $invalid=$this->upload->display_errors();
                //print_r($invalid);
                } else {
                    $image_data = $this->upload->data(); 
                }
            }
            $i++;
        }
        if($identification === "purchaseLogo") {
            $updateData = array("bDefaultLogo" => $image_data['file_name']);
            $where = array('id' => 1);
            $this->database_model->data_update_return("settings_basic", $updateData, $where);
            $arrayName = array('identification' => $identification, 'file_name' => $image_data['file_name']);
            echo json_encode($arrayName);
        }
        if($identification === "invoiceLogo") {
            $updateData = array("bDefaultLogo" => $image_data['file_name']);
            $where = array('id' => 1);
            $this->database_model->data_update_return("settings_basic", $updateData, $where);
            $arrayName = array('identification' => $identification, 'file_name' => $image_data['file_name']);
            echo json_encode($arrayName);
        }
        if($identification === "purchaseFile") {
            $arrayName = array('identification' => $identification, 'file_name' => $image_data['file_name']);
            echo json_encode($arrayName);
        }
        if($identification === "productPicture") {
            $arrayName = array('identification' => $identification, 'file_name' => $image_data['file_name']);
            echo json_encode($arrayName);
        }
        if($identification === "baseLogo") {
            $resize = $this->resize($image_data['full_path'], $image_data['file_name']);
            $file_name_part = explode(".",$image_data['file_name']);
            $full_image = $image_data['file_name'];
            $order_data = $file_name_part[0].$image_data['file_ext'];
            $arrayName = array('identification' => $identification, 'file_name' => $order_data);
            echo json_encode($arrayName);
        }
    }

    public function downloadAllZip($data) {
        //$this->load->helper('download');
        $filePath = './assets/uploadedFile/files/';
        $zip_file_name = "allUploadedPurchaseFiles";
        $selected_files = explode("::", $data);
        foreach($selected_files as $file){
            $this->zip->read_file($filePath.$file);
        }
        // //$this->zip->archive($zip_file_name.'.zip');
        $this->zip->download($zip_file_name.'.zip');
    }

    public function removeAll($data, $id) {
        $selected_files = explode("::", $data);
        foreach($selected_files as $file){
            unlink('./assets/uploadedFile/files/'.$file);
        }
        $updateData = array(
                'attachFile' => '',
        );
        $where = array('id' => $this->input->post('id'));
        $this->database_model->data_update_return("list_document", $updateData, $where);
    }

    public function resize($path, $file) {
        $this->load->library('image_lib');  
        $config1 = array(
            'image_library' => 'gd2',
            'quality' => '100%',
            'source_image' => $path,
            'new_image' => './assets/layouts/layout4/img/'.$file,
            'maintain_ratio' => FALSE,
            //'create_thumb' => TRUE,
            //'width' => 106,
            'height' => 17                     
        );
        //print_r($config1);
        $this->image_lib->initialize($config1);
        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
            //print_r($invalid1);
        } else {
        }       
    }

    public function removeFile(){
        $identification = $this->input->post('identification');
        if($identification === "purchaseLogo") {
            $updateData = array("bDefaultLogo" => '');
            $where = array('id' => 1);
            $this->database_model->data_update_return("settings_basic", $updateData, $where);
            unlink('./assets/uploadedFile/system/'.$this->input->post('file'));
        } else {
            unlink('./assets/uploadedFile/files/'.$this->input->post('file'));
            $updateData = array(
                'attachFile' => trim($this->sanitize($this->input->post('file')), '::'),
            );
            $where = array('id' => $this->input->post('id'));
            $this->database_model->data_update_return("list_document", $updateData, $where);
        }
        $arrayName = array('response' => 'success');
        echo json_encode($arrayName);
    }

    public function updateAttachFile() {
        $updateData = array(
            'attachFile' => trim($this->sanitize($this->input->post('file')), '::'),
        );
        $where = array('id' => $this->input->post('id'));
        $this->database_model->data_update_return("list_document", $updateData, $where);
    }

    public function updateAdjust() {
        // print_r($this->input->post()); die();
        $insertShortHistory = array(
            'documentId' => $this->input->post('editId'),
            'userId' => $this->session->userdata('id'),
            'documentType' => "estimate",
            'workType' => "Payment",
            'dateTime' => $this->systemDateTime
        );
        $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
        $inputAmount = 0;
        if($this->input->post('adjustAmount') != '') {
            if($this->input->post('amountSign') != '') {
                $inputAmount = "-".$this->input->post('adjustAmount');
            } else {
                $inputAmount = $this->input->post('adjustAmount');
            }
        }
        $updateData = array(
            'paidAmount' => ($this->input->post('currentPaidAmount')+$inputAmount)
        );
        $where = array('id' => $this->input->post('editId'));
        $this->database_model->data_update_return("list_document", $updateData, $where);
        $insertData = array(
            'docType' => "purchase",
            'documentId' => $this->input->post('editId'),
            'bankId' => $this->input->post('bankAccount'),
            'lastAmountBeforeChange' => $this->input->post('bankInitial').'::'.$this->input->post('bankTotal'),
            'adjustAmount' => $this->input->post('adjustAmount'),
            'adjustStock' => 0,
            'note' => $this->input->post('note'),
            'createdBy' => $this->session->userdata('id'),
            'createdDateTime' => $this->systemDateTime
        );
        $this->database_model->data_insert_return("list_payment", $insertData);
        $updateData = array(
            'totalBalance' => ($this->input->post('bankTotal')+$this->input->post('adjustAmount'))
        );
        $where = array('id' => $this->input->post('bankAccount'));
        $this->database_model->data_update_return("settings_bank_account", $updateData, $where);
        $status = 0;
        if($this->input->post('adjustAmount') != 0 && $this->input->post('adjustAmount') < $this->input->post('dueAmountOld')) {
            $updateData = array(
                'paymentStatus' => 1
            );
            $status = 1;
            // print_r($updateData); die();
            $where = array('id' => $this->input->post('editId'));
            $this->database_model->data_update_return("list_document", $updateData, $where);
        } else {
            $updateData = array(
                'paymentStatus' => 2
            );
            $status = 2;
            // print_r($updateData); die();
            $where = array('id' => $this->input->post('editId'));
            $this->database_model->data_update_return("list_document", $updateData, $where);
        }
        $arrayName = array('response' => 'success', 'paymentStatus' => $status);
        echo json_encode($arrayName);
    }

    public function updateCstatus() {
        // print_r($this->input->post());
        $insertShortHistory = array(
            'documentId' => $this->input->post('editId'),
            'userId' => $this->session->userdata('id'),
            'documentType' => "estimate",
            'workType' => "Accepted",
            'dateTime' => $this->systemDateTime
        );
        $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
        $updateData = array('cStatus' => 4);
        $where = array('id' => $this->input->post('editId'));
        $res = $this->database_model->data_update_return("list_document", $updateData, $where);
        // echo json_encode($res); die();
        $arrayName = array('response' => 'success');
        echo json_encode($arrayName);
    }

    public function updateType() {
        $basicInvoiceEstimate = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
        $estimateData = $this->data_model->get_all_info('*', array('id' => $this->input->post('editId')), 'list_document');
        $invoiceData = $this->data_model->count_specific_table_array('list_document', array('customerId' => $estimateData[0]->customerId));
        $estimateCustomer = explode("-", $estimateData[0]->documentId);
        $estimateDocument = explode("::", $estimateData[0]->documentData);
        for ($i = 0; $i < count($estimateDocument); $i++) { 
            $result = explode("*", $estimateDocument[$i]);
            $specificProductInfo = $this->data_model->get_all_info('*', array('id' => $result[1]), 'list_product_enrollment');
            $updateData = array('sellingQuantity' => $result[2]+$specificProductInfo[0]->sellingQuantity, 'lastSellingPrice' => $result[3], 'lastTax' => $result[4]);
            $where = array('id' => $result[1]);
            $this->database_model->data_update("list_product_enrollment", $updateData, $where);
        }
        $invoiceCustomer = '';
        if($invoiceData < 10) {
            $invoiceCustomer = $estimateCustomer[0]."-00000".($invoiceData-1);
        } else if($invoiceData < 100) {
            $invoiceCustomer = $estimateCustomer[0]."-0000".($invoiceData-1);                
        } else if($invoiceData < 1000) {
            $invoiceCustomer = $estimateCustomer[0]."-000".($invoiceData-1);                
        } else if($invoiceData < 10000) {
            $invoiceCustomer = $estimateCustomer[0]."-00".($invoiceData-1);                
        } else if($invoiceData < 100000) {
            $invoiceCustomer = $estimateCustomer[0]."-0".($invoiceData-1);
        }
        
        $insertShortHistory = array(
            'documentId' => $this->input->post('editId'),
            'userId' => $this->session->userdata('id'),
            'documentType' => "estimate",
            'workType' => "Convert To Invoice",
            'dateTime' => $this->systemDateTime
        );
        $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
        $updateData = array('systemId' => substr_replace($estimateData[0]->systemId, 'bpin', 0, 4),'type' => 'invoice', 'documentId' => $invoiceCustomer, 'title' => $basicInvoiceEstimate[0]->titleInvoice, 'cStatus' => 1);
        $where = array('id' => $this->input->post('editId'));
        $res = $this->database_model->data_update_return("list_document", $updateData, $where);
        $updateData = array('type' => 'invoice');
        $where = array('documentId' => $this->input->post('editId'));
        $this->database_model->data_update_return("list_product_adjust", $updateData, $where);
        $deleteData = array('type' => 'Estimate', 'documentId' => $this->input->post('editId'));
        $this->database_model->data_delete_without_response("history_list_document", $deleteData);
        // echo json_encode($res); die();
        $arrayName = array('response' => 'success');
        echo json_encode($arrayName);
    }

    public function productStatus() {
        $this->form_validation->set_rules('id', 'Product Id', 'strip_tags|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            return;
        } else {
            $documentId = $this->data_model->get_all_info('documentId', array('id' => $this->input->post('id'), 'type' => 'estimate'), 'list_document');
            $where = array('id' => $this->input->post('id'));
            $whereTransaction = array('docType' => 'Estimate', 'receiptId' => $documentId[0]->documentId);
            $wherePayment = array('docType' => 'estimate', 'documentId' => $this->input->post('id'));
            if($this->input->post('status') == 0) {
                $updateData = array(
                    'status' => $this->input->post('status'),
                    'lastArchiveBy' => $this->session->userdata('id'),
                    'lastArchiveDateTime' => $this->systemDateTime
                );
                $insertShortHistory = array(
                    'documentId' => $this->input->post('id'),
                    'userId' => $this->session->userdata('id'),
                    'documentType' => "estimate",
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
                    'documentType' => "estimate",
                    'workType' => "Active",
                    'dateTime' => $this->systemDateTime
                );
                $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
            }
            $result = $this->database_model->data_update_return("list_document", $updateData, $where);
            if($result == 1) {
                // $updateData = array(
                //     'status' => $this->input->post('status')
                // );
                // $this->database_model->data_update_return("list_transaction", $updateData, $whereTransaction);
                // $this->database_model->data_update_return("list_payment", $updateData, $wherePayment);
                // $this->database_model->data_update_return("list_product_adjust", $updateData, $where);
                $arrayName = array('response' => 'success');
                echo json_encode($arrayName);
            } else {
               $arrayName = array('response' => 'failed');
                echo json_encode($arrayName); 
            }
        }
    }

    public function statusCustomer($id, $type, $status){
        $insertShortHistory = array(
            'documentId' => $id,
            'userId' => 0,
            'documentType' => $type,
            'workType' => $status,
            'dateTime' => $this->systemDateTime
        );
        $this->database_model->data_insert_return("history_list_short", $insertShortHistory);
    }

    public function mailSend() {
        // print_r($this->input->post()); die();
        $basicSettings = $this->data_model->get_all_info('*', '', 'settings_basic');
        $config = array();
        $filePath = FCPATH."/assets/downloadableFile/"; 
        $fileName = $this->pdfEstimate($this->input->post('invoiceId'), "F", $filePath);
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
                    $mailData .= "<br/>Please check attach estimate copy<br/>";                    
                }
                $mailData .= $postMail[$i]."<br/>";
            } else {
                $mailData .= $postMail[$i]."<br/>";
            }
        }
        $data['emailTemplates'] = $mailData;
        $data['copyright'] = 'Copyright <a href="" style="text-decoration: none; color: #000;">'.ucfirst($this->input->post("companyName")).'</a> All rights reserved.';
        $this->email->from($this->input->post("emailSender"), ucfirst($this->input->post("companyName")));
        $this->email->reply_to($this->input->post("emailSender"), ucfirst($this->input->post("companyName")));
        $this->email->to($this->input->post("emailReceiver"));
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
            $specificPurchaseInfo = $this->data_model->get_all_info('*', array('id' => $this->input->post('invoiceId'), 'type' => "estimate"), 'list_document');
            $updateData = array('cStatus' => 3);
            $where = array('id' => $this->input->post('invoiceId'));
            if($specificPurchaseInfo[0]->cStatus != 4) {
                $this->database_model->data_update_return("list_document", $updateData, $where); 
            }
            unlink('./assets/downloadableFile/'.$fileName);
            $insertShortHistory = array(
                'documentId' => $this->input->post('invoiceId'),
                'userId' => $this->session->userdata('id'),
                'documentType' => "estimate",
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