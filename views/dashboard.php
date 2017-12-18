<?php
    $lastYearIncome = 0;
    $lastYearExpense = 0;
    $thisYearIncome = 0;
    $thisYearExpense = 0;
?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Accoventory .::.SaaS.::. Accounting & Inventory Software - SaaS</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN PAGE FIRST SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/pace/pace.min.js" type="text/javascript"></script>
        <!-- END PAGE FIRST SCRIPTS -->
        <!-- BEGIN PAGE TOP STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/pace/themes/pace-theme-flash.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE TOP STYLES -->
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/fonts.googleapis.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/systemOwn/plugins/bootstrap-tour/css/bootstrap-tour.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/css/cubeportfolio.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url(); ?>assets/pages/css/portfolio.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
		<style type="text/css">
			.page-head .page-title {
				width: 100%;
			}            
            #scroll-percent{
                display: none;
                position: fixed;
                right: 1.5%;
                width: 60px;
                z-index: 9999;
                color: white;
                text-shadow: 1px 1px 3px black;
                font-family: Helvetica, sans-serif;
                text-align: center;
            }
            .note { background: #fff !important; }
            .titleSub {
                color: #5e8396;
                font-size: 22px;
                line-height: 32px;
                font-weight: 400;
                padding-left: 15px;
            }
            .titleSubFirst { margin-bottom: 15px; }
            .table-bordered th {
                font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
                font-size: 14px;
                font-weight: 500;
                line-height: 16px;
                color: #fff;
                text-shadow: 0 -1px 0 rgba(0,0,0,0.4);
                -webkit-box-shadow: inset 0 1px 0 0 rgba(255,255,255,0.2);
                -moz-box-shadow: inset 0 1px 0 0 rgba(255,255,255,0.2);
                box-shadow: inset 0 1px 0 0 rgba(255,255,255,0.2);
                background-color: #84969e;
                background-image: -moz-linear-gradient(top,#909fa7,#738791);
                background-image: -ms-linear-gradient(top,#909fa7,#738791);
                background-image: -webkit-gradient(linear,0 0,0 100%,from(#909fa7),to(#738791));
                background-image: -webkit-linear-gradient(top,#909fa7,#738791);
                background-image: -o-linear-gradient(top,#909fa7,#738791);
                background-image: linear-gradient(top,#909fa7,#738791);
                background-repeat: repeat-x;
                border-top: 1px solid rgba(0,0,0,0.1);
                border-bottom: 1px solid rgba(0,0,0,0.2);
            }
            a.tooltipC { outline:none; }
            a.tooltipC strong { line-height:15px; }
            a.tooltipC:hover { text-decoration:none; }
            a.tooltipC .sTooltip { z-index:9999; display:none; padding:6px 6px; margin-top:-6px; margin-left:10px; min-width:130px; height:auto; line-height:0px; }
            a.tooltipC:hover .sTooltip{ display:inline-block !important; position:absolute; border:2px solid #FFF; width:auto; height:auto; color:#fff; background:#000; z-index:9999; }
            a.tooltipC .sTooltip { border-radius:5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; -moz-box-shadow: 0px 0px 1px 1px #666; -webkit-box-shadow: 0px 0px 1px 1px #666; box-shadow: 0px 0px 1px 1px #666; opacity: 0.8; }
            #Chart, .Placeholder {
                background: white;
                position: relative;
                min-height: 100%;
                margin-top: 50px;
                margin-bottom: 50px !important;
            }
            .PlaceholderMessage {
                font-size: 13px;
                border-radius: 5px;
                color: #999;
                z-index: 99;
                background: #F4F2D4;
                padding: 10px;
                position: absolute;
                left: 38%;
                top: 40%;
                width: 295px;
                border: 2px solid #000;
                text-align: center;
            }
            .PlaceholderMessage h5 {
                font-weight: bolder;
                color: #555555;
                margin-bottom: 0px;
            }
            .Placeholder .PlaceholderImage  {
                opacity: .4;
                margin-left: 25%;
            }
            .Placeholder .PlaceholderImageChart{
                opacity: .2 !important;
            }
            @media screen and (max-width: 639px) {
                .PlaceholderMessage {
                    font-size: 8px !important;
                    border-radius: 5px;
                    color: #999;
                    z-index: 99;
                    background: #F4F2D4;
                    padding: 5px;
                    position: absolute;
                    left: 5%;
                    top: 35%;
                    width: 90%;
                }
                .PlaceholderMessage h5 {
                    font-size: 12px;
                }
                .Placeholder img {
                    margin-left: 0% !important;
                    width: 100%;
                }
                .amount { text-align: right !important; }
                /*.display { top: -70px !important; }*/
            }
        </style>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.png" /> 
	</head>
    <!-- END HEAD -->
		

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md  pace-done">
        <!-- BEGIN HEADER -->
        <?php include('partials/top_bar.php'); ?>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <?php include('partials/menu_bar.php'); ?>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper" style="margin-top: -8px;">
                <!-- BEGIN CONTENT BODY -->
                <div  id="js-grid-juicy-projects" style="display: none"></div>
                <div class="page-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <!-- <div class="col-md-4">
                            <div class="note note-info">
                                <div class="box-content">    
                                    <h3 class="titleSub">Settings Tips</h3>        
                                    <div>                
                                        <p>
                                            A small bit of time spent configuring Wave will save you lots of time in the future. Below are the most common settings tasks:
                                        </p>
                                        <ul>
                                            <li>Add a <a href="<?php echo base_url(); ?>customer">customer</a> or <a href="<?php echo base_url(); ?>vendor">vendor</a></li>
                                            <li>Add a <a href="<?php echo base_url(); ?>settings/others/Product">product</a></li>
                                            <li><a href="<?php echo base_url(); ?>settings">Customize your invoices</a></li>
                                            <li><a href="<?php echo base_url(); ?>settings">Customize your email templates</a></li>
                                        </ul>
                                        <p class="wv-text--body">To access all settings, simply click the gear icon in the upper right corner of any page.</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="note note-info" style="padding: 10px;">
                                    <h3 class="titleSub titleSubFirst">Income & Expenses</h3>
                                    <!-- <div class="col-md-4" style="margin-right: 35px; z-index: 100;">
                                        <div id="chartrange" class="btn btn-primary">
                                            <i class="fa fa-calendar"></i>
                                            &nbsp; <span>
                                            </span>
                                            <b class="fa fa-angle-down" style="margin-left: 15px;"></b>
                                        </div>
                                    </div> -->
                                    <?php
                                        $totalCalcalution = 0;
                                        $monthBasedIncome = array();
                                        $monthBasedExpense = array();
                                        for ($i = 0; $i < 12; $i++) {
                                            $startDate = date('Y')."-".($i+1)."-01 00:00:00";
                                            $endDate = date('Y')."-".($i+1)."-31 23:59:59";
                                            $invoiceIncome = $this->data_model->columnSum("calculateTotalLocal", array("type" => "invoice", "date >=" => $startDate, "date <=" => $endDate, 'status' => 1), "list_document");
                                            $receiptIncome = $this->data_model->columnSum("amount", array("docType" => "Transaction", "type" => "Income", "date >=" => $startDate, "date <=" => $endDate, 'status' => 1), "list_transaction");
                                            $invoiceExpense = $this->data_model->columnSum("calculateTotalLocal", array("type" => "purchase", "date >=" => $startDate, "date <=" => $endDate, 'status' => 1), "list_document");
                                            $receiptExpense = $this->data_model->columnSum("amount", array("docType" => "Transaction", "type" => "Expense", "date >=" => $startDate, "date <=" => $endDate, 'status' => 1), "list_transaction");
                                            $monthBasedIncome[$i] = $invoiceIncome[0]->calculateTotalLocal+$receiptIncome[0]->amount;
                                            $monthBasedExpense[$i] = $invoiceExpense[0]->calculateTotalLocal+$receiptExpense[0]->amount;
                                            $totalCalcalution += $monthBasedIncome[$i]+$monthBasedExpense[$i];
                                        }
                                    ?>
                                    <?php if($totalCalcalution > 0) { ?>
                                    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto;"></div>
                                    <?php } else { ?>
                                    <div style="display: block;" class="Placeholder" id="Placeholder">
                                        <div class="PlaceholderMessage" id="PlaceholderMessage">
                                            <h5>There isn't any data to display.</h5>
                                            <p>A chart will appear here if you add some data for this time period.</p>
                                        </div>
                                        <img class="PlaceholderImageChart" id="PlaceholderImage" class="img-responsive" src="<?php echo base_url(); ?>assets/uploadedFile/system/monthly-income-expense.jpg">
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="note note-info" style="padding: 10px; min-height: 300px; color: #485A6A !important;">
                                    <h3 class="titleSub">Payable & Owing</h3>
                                    <div class="col-md-6 half">
                                        <table class="table table-bordered table-striped table-hoverable">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Invoices payable to you</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Coming due</td>
                                                    <td class="amount">
                                                        <?php
                                                            $amountExpense = 0; $amountIncome = 0; $purchasePaid = 0;
                                                            $calculateTotalLocal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "invoice", "dueDate >=" => date("Y-m-d"), 'status' => 1), "list_document");
                                                            $data = $this->data_model->get_all_info("*", array("type" => "invoice", "dueDate >=" => date("Y-m-d"), 'status' => 1), "list_document");
                                                            foreach ($data as $cal) {
                                                                $amountExpense = $this->data_model->columnSum('adjustAmount', array("docType" => "invoice", 'documentId' => $cal->id, 'type' => 'Expense'), 'list_payment'); 
                                                                $amountIncome = $this->data_model->columnSum('adjustAmount', array("docType" => "invoice", 'documentId' => $cal->id, 'type' => 'Income'), 'list_payment'); 
                                                                $purchasePaid += $amountIncome[0]->adjustAmount-$amountExpense[0]->adjustAmount;
                                                            }
                                                            echo "৳ ".number_format($calculateTotalLocal[0]->calculateTotalLocal-$purchasePaid, 2);
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>01-30 days due</td>
                                                    <td class="amount">
                                                        <?php
                                                            $amountExpense = 0; $amountIncome = 0; $purchasePaid = 0;
                                                            $startDate = date("Y-m-d 00:00:00");
                                                            $endDate = date("Y-m-d 23:59:59", strtotime("+30 days"));
                                                            $calculateTotalLocal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "invoice", "dueDate >=" => $startDate, "dueDate <=" => $endDate, 'status' => 1), "list_document");
                                                            $data = $this->data_model->get_all_info("*", array("type" => "invoice", "dueDate >=" => $startDate, "dueDate <=" => $endDate, 'status' => 1), "list_document");
                                                            foreach ($data as $cal) {
                                                                $amountExpense = $this->data_model->columnSum('adjustAmount', array("docType" => "invoice", 'documentId' => $cal->id, 'type' => 'Expense'), 'list_payment'); 
                                                                $amountIncome = $this->data_model->columnSum('adjustAmount', array("docType" => "invoice", 'documentId' => $cal->id, 'type' => 'Income'), 'list_payment'); 
                                                                $purchasePaid += $amountIncome[0]->adjustAmount-$amountExpense[0]->adjustAmount;
                                                            }
                                                            echo "৳ ".number_format($calculateTotalLocal[0]->calculateTotalLocal-$purchasePaid, 2);
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>31-60 days due</td>
                                                    <td class="amount">
                                                        <?php
                                                            $amountExpense = 0; $amountIncome = 0; $purchasePaid = 0;
                                                            $startDate = date("Y-m-d 00:00:00", strtotime("+31 days"));
                                                            $endDate = date("Y-m-d 23:59:59", strtotime("+60 days"));
                                                            $calculateTotalLocal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "invoice", "dueDate >=" => $startDate, "dueDate <=" => $endDate, 'status' => 1), "list_document");
                                                            $data = $this->data_model->get_all_info("*", array("type" => "invoice", "dueDate >=" => $startDate, "dueDate <=" => $endDate, 'status' => 1), "list_document");
                                                            foreach ($data as $cal) {
                                                                $amountExpense = $this->data_model->columnSum('adjustAmount', array("docType" => "invoice", 'documentId' => $cal->id, 'type' => 'Expense'), 'list_payment'); 
                                                                $amountIncome = $this->data_model->columnSum('adjustAmount', array("docType" => "invoice", 'documentId' => $cal->id, 'type' => 'Income'), 'list_payment'); 
                                                                $purchasePaid += $amountIncome[0]->adjustAmount-$amountExpense[0]->adjustAmount;
                                                            }
                                                            echo "৳ ".number_format($calculateTotalLocal[0]->calculateTotalLocal-$purchasePaid, 2);
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>61-90 days due</td>
                                                    <td class="amount">
                                                        <?php
                                                            $amountExpense = 0; $amountIncome = 0; $purchasePaid = 0;
                                                            $startDate = date("Y-m-d 00:00:00", strtotime("+61 days"));
                                                            $endDate = date("Y-m-d 23:59:59", strtotime("+90 days"));
                                                            $calculateTotalLocal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "invoice", "dueDate >=" => $startDate, "dueDate <=" => $endDate, 'status' => 1), "list_document");
                                                            $data = $this->data_model->get_all_info("*", array("type" => "invoice", "dueDate >=" => $startDate, "dueDate <=" => $endDate, 'status' => 1), "list_document");
                                                            foreach ($data as $cal) {
                                                                $amountExpense = $this->data_model->columnSum('adjustAmount', array("docType" => "invoice", 'documentId' => $cal->id, 'type' => 'Expense'), 'list_payment'); 
                                                                $amountIncome = $this->data_model->columnSum('adjustAmount', array("docType" => "invoice", 'documentId' => $cal->id, 'type' => 'Income'), 'list_payment'); 
                                                                $purchasePaid += $amountIncome[0]->adjustAmount-$amountExpense[0]->adjustAmount;
                                                            }
                                                            echo "৳ ".number_format($calculateTotalLocal[0]->calculateTotalLocal-$purchasePaid, 2);
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>&gt;</b> 90 days due</td>
                                                    <td class="amount">
                                                        <?php
                                                            $amountExpense = 0; $amountIncome = 0; $purchasePaid = 0;
                                                            $startDate = date("Y-m-d h:i:s", strtotime("+90 days"));
                                                            $calculateTotalLocal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "invoice", "dueDate >=" => $startDate, 'status' => 1), "list_document");
                                                            $data = $this->data_model->get_all_info("*", array("type" => "invoice", "dueDate >=" => $startDate, 'status' => 1), "list_document");
                                                            foreach ($data as $cal) {
                                                                $amountExpense = $this->data_model->columnSum('adjustAmount', array("docType" => "invoice", 'documentId' => $cal->id, 'type' => 'Expense'), 'list_payment'); 
                                                                $amountIncome = $this->data_model->columnSum('adjustAmount', array("docType" => "invoice", 'documentId' => $cal->id, 'type' => 'Income'), 'list_payment'); 
                                                                $purchasePaid += $amountIncome[0]->adjustAmount-$amountExpense[0]->adjustAmount;
                                                            }
                                                            echo "৳ ".number_format($calculateTotalLocal[0]->calculateTotalLocal-$purchasePaid, 2);
                                                        ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6 half">
                                        <table class="table table-bordered table-striped table-hoverable">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Bill you owe</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Coming due</td>
                                                    <td class="amount">
                                                        <?php
                                                            $amountExpense = 0; $amountIncome = 0; $purchasePaid = 0;
                                                            $calculateTotalLocal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "purchase", "dueDate >=" => date("Y-m-d"), 'status' => 1), "list_document");
                                                            $data = $this->data_model->get_all_info("*", array("type" => "purchase", "dueDate >=" => date("Y-m-d"), 'status' => 1), "list_document");
                                                            foreach ($data as $cal) {
                                                                $amountExpense = $this->data_model->columnSum('adjustAmount', array('docType' => 'purchase', 'documentId' => $cal->id, 'type' => 'Expense'), 'list_payment'); 
                                                                $amountIncome = $this->data_model->columnSum('adjustAmount', array('docType' => 'purchase', 'documentId' => $cal->id, 'type' => 'Income'), 'list_payment'); 
                                                                $purchasePaid += $amountExpense[0]->adjustAmount-$amountIncome[0]->adjustAmount;
                                                            }
                                                            echo "৳ ".number_format($calculateTotalLocal[0]->calculateTotalLocal-$purchasePaid, 2);
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>01-30 days due</td>
                                                    <td class="amount">
                                                        <?php
                                                            $amountExpense = 0; $amountIncome = 0; $purchasePaid = 0;
                                                            $startDate = date("Y-m-d 00:00:00");
                                                            $endDate = date("Y-m-d 23:59:59", strtotime("+30 days"));
                                                            $calculateTotalLocal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "purchase", "dueDate >=" => $startDate, "dueDate <=" => $endDate, 'status' => 1), "list_document");
                                                            $data = $this->data_model->get_all_info("*", array("type" => "purchase", "dueDate >=" => $startDate, "dueDate <=" => $endDate, 'status' => 1), "list_document");
                                                            foreach ($data as $cal) {
                                                                $amountExpense = $this->data_model->columnSum('adjustAmount', array('docType' => 'purchase', 'documentId' => $cal->id, 'type' => 'Expense'), 'list_payment'); 
                                                                $amountIncome = $this->data_model->columnSum('adjustAmount', array('docType' => 'purchase', 'documentId' => $cal->id, 'type' => 'Income'), 'list_payment'); 
                                                                $purchasePaid += $amountExpense[0]->adjustAmount-$amountIncome[0]->adjustAmount;
                                                            }
                                                            echo "৳ ".number_format($calculateTotalLocal[0]->calculateTotalLocal-$purchasePaid, 2);
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>31-60 days due</td>
                                                    <td class="amount">
                                                        <?php
                                                            $amountExpense = 0; $amountIncome = 0; $purchasePaid = 0;
                                                            $startDate = date("Y-m-d h:i:s", strtotime("+31 days"));
                                                            $endDate = date("Y-m-d h:i:s", strtotime("+60 days"));
                                                            $calculateTotalLocal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "purchase", "dueDate >=" => $startDate, "dueDate <=" => $endDate, 'status' => 1), "list_document");
                                                            $data = $this->data_model->get_all_info("*", array("type" => "purchase", "dueDate >=" => $startDate, "dueDate <=" => $endDate, 'status' => 1), "list_document");
                                                            foreach ($data as $cal) {
                                                                $amountExpense = $this->data_model->columnSum('adjustAmount', array('docType' => 'purchase', 'documentId' => $cal->id, 'type' => 'Expense'), 'list_payment'); 
                                                                $amountIncome = $this->data_model->columnSum('adjustAmount', array('docType' => 'purchase', 'documentId' => $cal->id, 'type' => 'Income'), 'list_payment'); 
                                                                $purchasePaid += $amountExpense[0]->adjustAmount-$amountIncome[0]->adjustAmount;
                                                            }
                                                            echo "৳ ".number_format($calculateTotalLocal[0]->calculateTotalLocal-$purchasePaid, 2);
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>61-90 days due</td>
                                                    <td class="amount">
                                                        <?php
                                                            $amountExpense = 0; $amountIncome = 0; $purchasePaid = 0;
                                                            $startDate = date("Y-m-d h:i:s", strtotime("+61 days"));
                                                            $endDate = date("Y-m-d h:i:s", strtotime("+90 days"));
                                                            $calculateTotalLocal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "purchase", "dueDate >=" => $startDate, "dueDate <=" => $endDate, 'status' => 1), "list_document");
                                                            $data = $this->data_model->get_all_info("*", array("type" => "purchase", "dueDate >=" => $startDate, "dueDate <=" => $endDate, 'status' => 1), "list_document");
                                                            foreach ($data as $cal) {
                                                                $amountExpense = $this->data_model->columnSum('adjustAmount', array('docType' => 'purchase', 'documentId' => $cal->id, 'type' => 'Expense'), 'list_payment'); 
                                                                $amountIncome = $this->data_model->columnSum('adjustAmount', array('docType' => 'purchase', 'documentId' => $cal->id, 'type' => 'Income'), 'list_payment'); 
                                                                $purchasePaid += $amountExpense[0]->adjustAmount-$amountIncome[0]->adjustAmount;
                                                            }
                                                            echo "৳ ".number_format($calculateTotalLocal[0]->calculateTotalLocal-$purchasePaid, 2);
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>&gt;</b> 90 days due</td>
                                                    <td class="amount">
                                                        <?php
                                                            $amountExpense = 0; $amountIncome = 0; $purchasePaid = 0;
                                                            $startDate = date("Y-m-d h:i:s", strtotime("+90 days"));
                                                            $calculateTotalLocal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "purchase", "dueDate >=" => $startDate, 'status' => 1), "list_document");
                                                            $data = $this->data_model->get_all_info("*", array("type" => "purchase", "dueDate >=" => $startDate, 'status' => 1), "list_document");
                                                            foreach ($data as $cal) {
                                                                $amountExpense = $this->data_model->columnSum('adjustAmount', array('docType' => 'purchase', 'documentId' => $cal->id, 'type' => 'Expense'), 'list_payment'); 
                                                                $amountIncome = $this->data_model->columnSum('adjustAmount', array('docType' => 'purchase', 'documentId' => $cal->id, 'type' => 'Income'), 'list_payment'); 
                                                                $purchasePaid += $amountExpense[0]->adjustAmount-$amountIncome[0]->adjustAmount;
                                                            }
                                                            echo "৳ ".number_format($calculateTotalLocal[0]->calculateTotalLocal-$purchasePaid, 2);
                                                        ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="note note-info" style="padding: 10px; color: #485A6A !important;">
                                    <h3 class="titleSub">Net Income</h3>
                                    <table class="table table-bordered table-hoverable" style="margin-left: 15px; width: 96%">
                                        <thead>
                                           <tr>
                                               <th width="19%"> Fiscal Year 
                                                    <a class="tooltipC">
                                                        <i class="fa fa-question-circle" style="color: #000; font-size: 16px;"></i>
                                                        <span class="sTooltip"><strong>Fiscal year end is December 31</strong></span>
                                                    </a>
                                                </th>
                                                <th width="26%" class="amount align-right">Income</th>
                                                <th width="26%" class="amount align-right">Expense</th>
                                                <th width="26%" class="amount align-right">Net Income</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td><?php echo date('Y'); ?></td>
                                               <td class="amount">
                                                    <?php
                                                        $startDate = date("Y")."-01-01 00:00:00";
                                                        $endDate = date("Y")."-12-31 23:59:59";
                                                        $invoiceTotal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "invoice", "date >=" => $startDate, "date <=" => $endDate), "list_document");
                                                        $receiptTotal = $this->data_model->columnSum("amount", array("type" => "Income", "docType" => "Transaction", "date >=" => $startDate, "date <=" => $endDate), "list_transaction");
                                                        $thisYearIncome = $invoiceTotal[0]->calculateTotalLocal+$receiptTotal[0]->amount;
                                                        echo "৳ ".number_format(($invoiceTotal[0]->calculateTotalLocal+$receiptTotal[0]->amount), 2);
                                                    ?>
                                               </td>
                                               <td class="amount">
                                                    <?php
                                                        $startDate = date("Y")."-01-01 00:00:00";
                                                        $endDate = date("Y")."-12-31 23:59:59";
                                                        $invoiceTotal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "purchase", "date >=" => $startDate, "date <=" => $endDate), "list_document");
                                                        $receiptTotal = $this->data_model->columnSum("amount", array("type" => "Expense", "docType" => "Transaction", "date >=" => $startDate, "date <=" => $endDate), "list_transaction");
                                                        $thisYearExpense = $invoiceTotal[0]->calculateTotalLocal+$receiptTotal[0]->amount;
                                                        echo "৳ ".number_format(($invoiceTotal[0]->calculateTotalLocal+$receiptTotal[0]->amount), 2);
                                                    ?>
                                               </td>
                                                <td class="amount">
                                                    <?php echo "৳ ".number_format(($thisYearIncome - $thisYearExpense), 2); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?php echo date("Y",strtotime("-1 year")); ?></td>
                                               <td class="amount">
                                                    <?php
                                                        $startDate = date("Y",strtotime("-1 year"))."-01-01 00:00:00";
                                                        $endDate = date("Y",strtotime("-1 year"))."-12-31 23:59:59";
                                                        $invoiceTotal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "invoice", "date >=" => $startDate, "date <=" => $endDate), "list_document");
                                                        $receiptTotal = $this->data_model->columnSum("amount", array("type" => "Income", "docType" => "Transaction", "date >=" => $startDate, "date <=" => $endDate), "list_transaction");
                                                        $lastYearIncome = $invoiceTotal[0]->calculateTotalLocal+$receiptTotal[0]->amount;
                                                        echo "৳ ".number_format(($invoiceTotal[0]->calculateTotalLocal+$receiptTotal[0]->amount), 2);
                                                    ?>
                                                </td>
                                                <td class="amount">
                                                    <?php
                                                        $startDate = date("Y",strtotime("-1 year"))."-01-01 00:00:00";
                                                        $endDate = date("Y",strtotime("-1 year"))."-12-31 23:59:59";
                                                        $invoiceTotal = $this->data_model->columnSum("calculateTotalLocal", array("type" => "purchase", "date >=" => $startDate, "date <=" => $endDate), "list_document");
                                                        $receiptTotal = $this->data_model->columnSum("amount", array("type" => "Expense", "docType" => "Transaction", "date >=" => $startDate, "date <=" => $endDate), "list_transaction");
                                                        $lastYearExpense = $invoiceTotal[0]->calculateTotalLocal+$receiptTotal[0]->amount;
                                                        echo "৳ ".number_format(($invoiceTotal[0]->calculateTotalLocal+$receiptTotal[0]->amount), 2);
                                                    ?>
                                                </td>
                                                <td class="amount">
                                                    <?php echo "৳ ".number_format(($lastYearIncome - $lastYearExpense), 2); ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="note note-info" style="padding: 10px;">
                                    <h3 class="titleSub">Category wise income & expense</h3>
                                    <?php
                                        $totalDrillDown = 0;
                                        $startDate = date("Y")."-01-01 00:00:00";
                                        $endDate = date("Y")."-12-31 23:59:59";
                                        $categoryIncome = array();
                                        $incomeIncrement = 0;
                                        $incomeCategory = $this->data_model->get_all_info('*', array('type' => 'Income'), 'settings_income_expense_category');
                                        foreach ($incomeCategory as $category) {
                                            if($category->name == "Sales") {
                                                $result = $this->data_model->columnSum("calculateTotalLocal", array("type" => "invoice", "createdDateTime >=" => $startDate, "createdDateTime <=" => $endDate, "status" => 1), "list_document");
                                                if($result[0]->calculateTotalLocal != 0) {
                                                    $categoryIncome[$incomeIncrement++] = array($category->name, $result[0]->calculateTotalLocal);
                                                    $totalDrillDown += $result[0]->calculateTotalLocal;
                                                }
                                            } else {
                                                $result = $this->data_model->columnSum("amount", array("docType" => "Transaction", "type" => "Income", "subType" => $category->id, "createdDateTime >=" => $startDate, "createdDateTime <=" => $endDate, "status" => 1), "list_transaction");
                                                if($result[0]->amount != 0) {
                                                    $categoryIncome[$incomeIncrement++] = array($category->name, $result[0]->amount);
                                                    $totalDrillDown += $result[0]->amount;
                                                }
                                            }
                                        }

                                        $categoryExpense = array();
                                        $expenseIncrement = 0;
                                        $expenseCategory = $this->data_model->get_all_info('*', array('type' => 'Expense'), 'settings_income_expense_category');
                                        foreach ($expenseCategory as $category) {
                                            if($category->name == "Purchase") {
                                                $result = $this->data_model->columnSum("calculateTotalLocal", array("type" => "purchase", "createdDateTime >=" => $startDate, "createdDateTime <=" => $endDate, "status" => 1), "list_document");
                                                if($result[0]->calculateTotalLocal != 0) {
                                                    $categoryExpense[$expenseIncrement++] = array($category->name, $result[0]->calculateTotalLocal);
                                                    $totalDrillDown += $result[0]->calculateTotalLocal;
                                                }
                                            } else {
                                                $result = $this->data_model->columnSum("amount", array("docType" => "Transaction", "type" => "Expense", "subType" => $category->id, "createdDateTime >=" => $startDate, "createdDateTime <=" => $endDate, "status" => 1), "list_transaction");
                                                if($result[0]->amount != 0) {
                                                    $categoryExpense[$expenseIncrement++] = array($category->name, $result[0]->amount);
                                                    $totalDrillDown += $result[0]->amount;
                                                }
                                            }
                                        }
                                    ?>
                                    <?php if($totalDrillDown > 0) { ?>
                                    <div id="businessChart" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                                    <?php } else { ?>
                                    <div style="display: block;" class="Placeholder" id="Placeholder">
                                        <div class="PlaceholderMessage" id="PlaceholderMessage">
                                            <h5>There isn't any data to display.</h5>
                                            <p>A chart will appear here if you add some data for this time period.</p>
                                        </div>
                                        <img class="PlaceholderImage" id="PlaceholderImage" class="img-responsive" src="<?php echo base_url(); ?>assets/uploadedFile/system/placeholder-expenses-category.png">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <?php include('partials/quick_side_bar.php'); ?>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php include('partials/footer.php'); ?>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script type="text/javascript">
            var base_link = '<?php echo base_url(); ?>';
            var dataPurhaseCurrency = [];
            var dataPurhaseStatus = [];
            var monthBasedIncome = <?php echo json_encode($monthBasedIncome); ?>;
            var monthBasedExpense = <?php echo json_encode($monthBasedExpense); ?>;
            var categoryIncome = <?php echo json_encode($categoryIncome, JSON_NUMERIC_CHECK); ?>;
            var categoryExpense = <?php echo json_encode($categoryExpense, JSON_NUMERIC_CHECK); ?>;
            var localCurrency = '<?php echo $basicSettings[0]->currencySymbol; ?>';
            var currencyLocal = localCurrency.split('-');
        </script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/highcharts.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/modules/data.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/modules/exporting.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/modules/drilldown.js"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/portfolio-1.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-date-time-pickers.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/bootstrap-tour/js/bootstrap-tour.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/charts-highcharts.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->
        <script type="text/javascript">
            // <!-- Start Page Scroll -->            
            $(function(){            
                var $scrollPercentText = $("#scroll-percent");            
                var $window = $(window);
                var documentHeight = $(document).height();
                var windowHeight = $window.height();
                var scrollTop = $window.scrollTop();
                
                $window.on("resize", function(){
                    windowHeight = $window.height();
                }).resize();
                
                $window.on("scroll", function() {                
                    scrollTop = $(window).scrollTop();              
                    var scrollPercent = (scrollTop) / (documentHeight - windowHeight); //gives us the scroll percent range from 0 to 1
                    if(scrollPercent > 0) {
                        $('#scroll-percent').css('display', 'block');
                    } else {
                        $('#scroll-percent').css('display', 'none');
                    }
                    $scrollPercentText.html( Math.round(scrollPercent*100) + "<span>%</span>" ); //gives us the scroll percent range from 0 to 100                
                });
            });
            jQuery(document).ready(function() {
                // $('.highcharts-container').css("top", "-38px");
            });
            // <!-- End Page Scroll -->
// var tour = new Tour({
//   container: "body",
//   smartPlacement: true,
//   keyboard: true,
//   storage: window.localStorage,
//   autoscroll: true,
//   debug: false,
//   redirect: true,
//   backdrop: true,
//   backdropContainer: 'body',
//   steps: [
//   {
//     element: "#menuAll",
//     title: '<i class="fa fa-edit" style="font-weight: bold; font-size: 18px; color: #000"></i> Title of my step',
//     content: 'Content of my step'
//   },
//   {
//     element: "#videoHelp",
//     placement: 'bottom',
//     title: "Title of my step",
//     content: "Content of my step"
//   },
//   {
//     path:base_link+'invoice/',
//     element: "#videoHelp",
//     placement: 'bottom',
//     title: "Title of my step",
//     content: "Content of my step"
//   }
// ]
// });

// // Initialize the tour
// tour.init();
// tour.restart();
// // Start the tour
// $('#siteTour').on( 'click', function () {
//     tour.restart();
// });

        </script>
    </body>

</html>