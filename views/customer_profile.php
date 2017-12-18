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
        <title><?php echo $titleHeader; ?> Profile | Accoventory .::.SaaS.::. Accounting & Inventory Software - SaaS</title>
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
        <link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/css/cubeportfolio.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/pages/css/portfolio.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" /> 
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/sweetalert.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/ad_a_note.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/overLay.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.png" /> 
        <style type="text/css">
            .select2-container--bootstrap .select2-selection { border-radius: 0px !important; border: none; border-bottom: 2px solid #36C6D3 !important; border-top: none !important; border-left: none !important;border-right: none !important; }
            .starColor {
                color:red;
            }
            .number-stats .stat-number .numberText {
                font-size: 20px !important; 
            }
            .customButton {
                width: 90%;
                margin-left : 2%;
                margin-bottom : 2%;
                text-transform : lowercase !important;
                font-size: 13px !important;
            }
            button.customButton:hover, button.currency:hover {
                cursor: auto; !important;
            }
            .customButtonLast {
                margin-left : 0%;
            }
            .select2-container--bootstrap .select2-selection--single .select2-selection__arrow b {
                padding: 0px !important;
                background: none;
            }
            .table-scrollable .dropdown-menu { position: relative !important; }
            .dropdown-menu-custom {
                min-width: 120px !important;
                max-width: 125px !important;
            }
            span b { font-size: 10px !important; font-weight: bold !important; background: none !important; padding: 0px !important }
            #all_timeline_div { border: 1px solid #e8e8e8; border-radius: 5px; padding: 10px; margin-top: 10px; }
            .timeline-item { margin: 0 auto; margin-bottom: 5px; border: 1px solid #e8e8e8; border-radius: 5px; background: #fff; }
            .timeline-item .date { width: 95px; padding-top: 5px; }
            .timeline-item .no-top-border .iconMark { position: absolute; top: -10px; right: -20px; padding: 10px; width: 40px; text-align: center; border-top: 1px solid #e7eaec; border-bottom: 1px solid #e7eaec; border-left: 1px solid #e7eaec; background: #f8f8f8; font-size: 20px; border-top-right-radius: 5px; float: right; position: relative; }
            .iconEdit { color: #E87E04; cursor: pointer; }
            .iconDelete { color: #FF0000; cursor: pointer; }
            .no-top-border { width: 84.6% !important; min-height: 110px !important; }
            .avatar { height: 45px; width: 45px; border-radius: 50% !important; border: 2px solid !important; }
            .editCustom { position: absolute !important; top: 5px !important; right: 120px !important; }
            .deleteCustom { position: absolute !important; top: 5px !important; right: 45px !important; }
            .myRow { border-right: 2px dashed #555555 !important; }
            .permission { display: none !important; }
            .myPermission:hover .permission { display: block !important; }
            .clickable a .fa { margin-right: 0px !important; }
            textarea.has-success { border: 1px dashed #26C281 !important; }
            textarea.has-error { border: 1px dashed #FF0000 !important; }
            ul.compose-toolbar-success li a i { color: #26C281 !important }
            ul.compose-toolbar-error li a i { color: #E87E04 !important }
            ul.compose-btn li { position: relative; float: right; margin-left: 5px; }
            .allAccess { width: 45px; height: 45px; float: right; }
            span.sdate b { color: #34495E !important; font-size: 12px !important; font-weight: bolder !important; }
            a.tooltipC { outline:none; color: inherit; }
            a.tooltipC strong { line-height:17px; }
            a.tooltipC:hover { text-decoration:none; }
            a.tooltipC .sTooltip { z-index: 9999;display: none;padding: 6px 6px;margin-top: -45px;margin-left: -50px !important;min-width: 130px;height: auto;line-height: 0px;position: relative; }
            a.tooltipC:hover .sTooltip{ display:inline-block !important; position:absolute; border:2px solid #FFF; width:auto; height:auto; color:#EEE; background:#000; z-index:9999; }
            a.tooltipC .sTooltip { border-radius:5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; -moz-box-shadow: 0px 0px 1px 1px #666; -webkit-box-shadow: 0px 0px 1px 1px #666; box-shadow: 0px 0px 1px 1px #666; opacity: 0.8; }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed page-md">
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
            <div class="page-content-wrapper" style="margin-top: -10px;">
            <div  id="js-grid-juicy-projects" style="display: none"></div>
                <!-- BEGIN CONTENT BODY -->
                <div style="min-height:1005px" class="page-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <?php include('partials/profile_sidebar_user.php'); ?>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Summary</span>
                                                </div>
                                                <div class="pull-right">
                                                    <?php 
                                                        $menus = explode(',', $this->session->userdata('menuSettings'));
                                                        if(in_array(1, $menus)) {
                                                            echo   '<a href="'.base_url().'invoice/add/'.$this->uri->segment(3).'" class="btn green-haze btn-sm" style="background: #26C281"><i class="fa fa-plus"></i> New Invoice </a>';
                                                        }
                                                        if(in_array(2, $menus)) {
                                                            echo   '<a href="'.base_url().'estimate/add/'.$this->uri->segment(3).'" class="btn green-haze btn-sm" style="background: #C5BF66"><i class="fa fa-plus"></i> New Estimate </a>';
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="portlet-body">                                                
                                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <div class="portlet box light bordered">
                                                    <div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
                                                        <div class="actions">
                                                            <div class="btn-group btn-group-solid">
                                                                <a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_111')"><i class="fa fa-print"></i><span>Print</span></a>
                                                                <a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_111', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
                                                                <a class="btn default" href="#" data-toggle="dropdown">
                                                                    <i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <div id="sample_111_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                                                    <label><input type="checkbox" checked data-column="1">Date</label>
                                                                    <label><input type="checkbox" checked data-column="2">Type</label>
                                                                    <label><input type="checkbox" checked data-column="3">Status</label>
                                                                    <label><input type="checkbox" checked data-column="4">Invoice ID</label>
                                                                    <label><input type="checkbox" checked data-column="5">Amount Due</label>
                                                                    <label><input type="checkbox" checked data-column="6">Total</label>
                                                                    <label><input type="checkbox" checked data-column="7">Manage</label>
                                                                    <label><input type="checkbox" data-column="8">Created by</label>
                                                                    <label><input type="checkbox" data-column="9">Entry Date</label>
                                                                </div>
                                                                <a id="tFull" class="fullscreen fullscreen-recent dt-button buttons-csv buttons-html5 btn blue btn-outline"><i id="tFullIcon" class="fa fa-expand"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="portlet-body" class="portlet-body">
                                                        <table class="table table-striped table-bordered table-hover dt-responsive" id="sample_111">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Date
                                                                    </th>
                                                                    <th>
                                                                        Type
                                                                    </th>
                                                                    <th>
                                                                        Status
                                                                    </th>
                                                                    <th>
                                                                        Invoice ID
                                                                    </th>
                                                                    <th>
                                                                        Amount Due
                                                                    </th>
                                                                    <th>
                                                                        Total
                                                                    </th>
                                                                    <th>
                                                                        Manage
                                                                    </th>
                                                                    <th>
                                                                        Created By
                                                                    </th>
                                                                    <th>
                                                                        Entry Date
                                                                    </th>
                                                                    <th style="display: none;">
                                                                        inputChat
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="ui-sortable">
                                                                <?php foreach ($allInfo as $info) {
                                                                    $allComments = $this->data_model->get_all_info('*', array('docType' => $info->type, 'docId' => $info->id), 'list_all_comment');
                                                                ?>
                                                                    <tr id="receipt<?php echo $info->id; ?>">
                                                                        <td>
                                                                            <?php echo date("d-m-Y", strtotime($info->date)); ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php 
                                                                                if($info->type == 'invoice') {
                                                                                    if($info->status == 1) {
                                                                                        echo '<span class="label label-sm label-primary" style="background: #26C281; font-weight: bold;"> Invoice - <label style="color: green; font-weight: bold;">Active</label> </span>';
                                                                                    } else { 
                                                                                        echo '<span class="label label-sm label-primary" style="background: #26C281; font-weight: bold;"> Invoice - <label style="color: yellow; font-weight: bold;">Archive</label> </span>';
                                                                                    } 
                                                                                } else {
                                                                                    if($info->status == 1) {
                                                                                        echo '<span class="label label-sm label-primary" style="background: #C5BF66; font-weight: bold;"> Estimate - <label style="color: green; font-weight: bold;">Active</label> </span>';
                                                                                    } else { 
                                                                                        echo '<span class="label label-sm label-primary" style="background: #C5BF66; font-weight: bold;"> Estimate - <label style="color: yellow; font-weight: bold;">Archive</label> </span>';
                                                                                    } 
                                                                                }
                                                                            ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php
                                                                                $dStart = new DateTime(date("Y-m-d"));
                                                                                $dEnd  = new DateTime($info->dueDate);
                                                                                $dDiff = $dStart->diff($dEnd);
                                                                                $diff = $dDiff->format("%R%a");
                                                                                if($diff > 0) {
                                                                                    $textColor = '';
                                                                                    if($info->paidAmount <= $info->calculateTotalLocal) {
                                                                                        if($info->paymentStatus == 0) {
                                                                                            echo '<span class="label label-sm" style="background: #3598DC"> Draft </span>';
                                                                                        } else if($info->paymentStatus == 1) {
                                                                                            echo '<span class="label label-sm label-success"> Sent </span>';
                                                                                        } else if($info->paymentStatus == 2) {
                                                                                            echo '<span class="label label-sm label-warning"> Viewed </span>';
                                                                                        } else if($info->paymentStatus == 3) {
                                                                                            echo '<span class="label label-sm label-danger"> Partial </span>';
                                                                                        } else {
                                                                                            echo '<span class="label label-sm" style="background: green"> Paid </span>';
                                                                                        }
                                                                                    } else {
                                                                                        echo '<span class="label label-sm" style="background: red"> <b style="color: #000 !important">Overpaid</b> </span>';
                                                                                    }
                                                                                } else {
                                                                                    if($info->paymentStatus == 2) {
                                                                                        if($info->paidAmount <= $info->calculateTotalLocal) {
                                                                                            echo '<span class="label label-sm" style="background: green"> Paid </span>';
                                                                                        } else {
                                                                                            echo '<span class="label label-sm" style="background: red"> <b style="color: #000 !important">Overpaid</b> </span>';
                                                                                        }
                                                                                    } else {
                                                                                        echo '<span class="label label-sm" style="background: red"> <b style="color: #000 !important">Overpaid</b> </span>';
                                                                                    }
                                                                                }
                                                                            ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $info->systemId;  ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php 
                                                                                $amountExpense = $this->data_model->columnSum('adjustAmount', array('docType' => 'invoice', 'documentId' => $info->id, 'type' => 'Expense'), 'list_payment'); 
                                                                                $amountIncome = $this->data_model->columnSum('adjustAmount', array('docType' => 'invoice', 'documentId' => $info->id, 'type' => 'Income'), 'list_payment'); 
                                                                                $purchasePaid = $amountIncome[0]->adjustAmount-$amountExpense[0]->adjustAmount;
                                                                                $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                                $localSymbol = $currencySysmbol[1];
                                                                                if($info->currencyType == 'local') {
                                                                                    $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                                    echo $currencySysmbol[1]." ".number_format($info->calculateTotalLocal - $purchasePaid, 2);
                                                                                } else {
                                                                                    $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                                    echo $currencySysmbol[1];
                                                                                    echo    '<a class="tooltipC">
                                                                                                <span> '.number_format($info->calculateTotal - ($purchasePaid/$info->currencyRate), 2).' </span>
                                                                                                <span class="sTooltip"><strong>'.$localSymbol." ".number_format(($info->calculateTotal*$info->currencyRate) - $purchasePaid, 2).'</strong></span>
                                                                                            </a>';
                                                                                }
                                                                            ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php 
                                                                                $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                                $localSymbol = $currencySysmbol[1];
                                                                                if($info->currencyType == 'local') {
                                                                                    $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                                    echo $currencySysmbol[1]." ".number_format($info->calculateTotalLocal, 2);
                                                                                } else {
                                                                                    $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                                    echo $currencySysmbol[1];
                                                                                    echo    '<a class="tooltipC">
                                                                                                <span> '.number_format($info->calculateTotal, 2).' </span>
                                                                                                <span class="sTooltip"><strong>'.$localSymbol." ".number_format($info->calculateTotal*$info->currencyRate, 2).'</strong></span>
                                                                                            </a>';
                                                                                }
                                                                            ?>
                                                                        </td>
                                                                        <td> 
                                                                            <div class="btn-group" style="margin: -5px">
                                                                                <button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage
                                                                                    <i class="fa fa-angle-down"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu" style="position: absolute;">
                                                                                    <?php 
                                                                                        if($info->type == 'invoice') { ?>
                                                                                            <li id="view<?php echo $info->id; ?>">
                                                                                                <a href="<?php echo base_url(); ?>invoice/viewInvoice/<?php echo $info->id; ?>" class="liveLink" target="_blank"><i class="fa fa-search" style="color: #26C281;"></i><span>View</span></a>
                                                                                            </li>
                                                                                            <li id="history<?php echo $info->id; ?>">
                                                                                                <a href="<?php echo base_url(); ?>invoice/viewInvoice/<?php echo $info->id; ?>/history" class="liveLink"><i class="fa fa-history" style="color: gray;"></i><span>History</span></a>
                                                                                            </li>
                                                                                            <?php if($info->status == 1) {  ?>
                                                                                                <li id="edit<?php echo $info->id; ?>">
                                                                                                    <a href="<?php echo base_url(); ?>invoice/edit/<?php echo $info->id; ?>" target="_blank"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Return & Edit</span></a>
                                                                                                </li>
                                                                                            <?php } ?>
                                                                                            <li id="print<?php echo $info->id; ?>">
                                                                                                <a href="<?php echo base_url(); ?>invoice/printInvoice/<?php echo $info->id; ?>" class="liveLink" target="_blank"><i class="fa fa-print" style="color: #000000;"></i><span>Print</span></a>
                                                                                            </li>
                                                                                            <?php if($info->status == 1) {  ?>
                                                                                                <li id="delete<?php echo $info->id; ?>">
                                                                                                    <a onclick="deleteData('<?php echo $info->id; ?>', '<?php echo $info->type; ?>')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>
                                                                                                </li>
                                                                                            <?php } else { ?>
                                                                                                <li id="active<?php echo $info->id; ?>">
                                                                                                    <a onclick="activeData('<?php echo $info->id; ?>', '<?php echo $info->type; ?>')"><i class="fa fa-recycle" style="color: green;"></i><span> Active</span></a>
                                                                                                </li>
                                                                                            <?php } ?>                                                                 
                                                                                    <?php } else { ?>
                                                                                                <li id="view<?php echo $info->id; ?>">
                                                                                                    <a href="<?php echo base_url(); ?>estimate/viewEstimate/<?php echo $info->id; ?>" class="liveLink" target="_blank"><i class="fa fa-search" style="color: #26C281;"></i><span>View</span></a>
                                                                                                </li>
                                                                                                <li id="history<?php echo $info->id; ?>">
                                                                                                    <a href="<?php echo base_url(); ?>estimate/viewEstimate/<?php echo $info->id; ?>/history" class="liveLink"><i class="fa fa-history" style="color: gray;"></i><span>History</span></a>
                                                                                                </li>
                                                                                                <?php if($info->status == 1) {  ?>
                                                                                                    <li id="edit<?php echo $info->id; ?>">
                                                                                                        <a href="<?php echo base_url(); ?>estimate/edit/<?php echo $info->id; ?>" target="_blank"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Return & Edit</span></a>
                                                                                                    </li>
                                                                                                <?php } ?>
                                                                                                <li id="print<?php echo $info->id; ?>">
                                                                                                    <a href="<?php echo base_url(); ?>estimate/printEstimate/<?php echo $info->id; ?>" class="liveLink" target="_blank"><i class="fa fa-print" style="color: #000000;"></i><span>Print</span></a>
                                                                                                </li>
                                                                                                <?php if($info->status == 1) {  ?>
                                                                                                    <li id="delete<?php echo $info->id; ?>">
                                                                                                        <a onclick="deleteData('<?php echo $info->id; ?>', '<?php echo $info->type; ?>')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>
                                                                                                    </li>
                                                                                                <?php } else { ?>
                                                                                                    <li id="active<?php echo $info->id; ?>">
                                                                                                        <a onclick="activeData('<?php echo $info->id; ?>', '<?php echo $info->type; ?>')"><i class="fa fa-recycle" style="color: green;"></i><span> Active</span></a>
                                                                                                    </li>
                                                                                                <?php } ?>
                                                                                    <?php }
                                                                                    ?>
                                                                                </ul>
                                                                            </div>                                                        
                                                                        </td>
                                                                        <td>
                                                                            <?php $team = $this->data_model->get_specific_column("name", array("id" => $info->createdBy), "list_team"); echo $team[0]->name; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $info->createdDateTime; ?>                                                                            
                                                                        </td>
                                                                        <td style="display: none;">
                                                                            <div class="col-md-12 col-sm-12 hiddenComment<?php echo $info->id; ?>">
                                                                                <div class="portlet">
                                                                                    <div class="portlet-body">                                                                          
                                                                                        <div class="ibox float-e-margins ui-sortable">
                                                                                            <div style="position: static;" class="ibox-content">
                                                                                                <div id="sysfrm_ajaxrender">
                                                                                                    <section class="activity-post mb-xlg">
                                                                                                        <form id="commentForm<?php echo $info->id; ?>">
                                                                                                            <textarea name="messageText<?php echo $info->id; ?>" onkeyup="getValueComment(this.value, <?php echo $info->id; ?>);" id="messageText<?php echo $info->id; ?>" class="msg messageText<?php echo $info->id; ?>" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>
                                                                                                            <input id="hiddenMessage<?php echo $info->id; ?>" class="hiddenMessage<?php echo $info->id; ?>" name="hiddenMessage<?php echo $info->id; ?>" value="" type="hidden">
                                                                                                            <input id="activityType<?php echo $info->id; ?>" name="activityType<?php echo $info->id; ?>" value="fa-check" type="hidden">
                                                                                                            <input id="activityId" name="activityId" value="<?php echo $info->id; ?>" type="hidden">
                                                                                                            <input id="commentType<?php echo $info->id; ?>" name="commentType<?php echo $info->id; ?>" value="<?php echo $info->type; ?>" type="hidden">
                                                                                                            <input id="commentCode<?php echo $info->id; ?>" name="commentCode<?php echo $info->id; ?>" value="" type="hidden">
                                                                                                            <input id="commentId<?php echo $info->id; ?>" name="commentId<?php echo $info->id; ?>" value="" type="hidden">
                                                                                                            <input id="commentProcess<?php echo $info->id; ?>" name="commentProcess<?php echo $info->id; ?>" value="0" type="hidden">
                                                                                                        </form>
                                                                                                        <div class="compose-box-footer">
                                                                                                            <ul class="compose-toolbar compose-toolbar-success">
                                                                                                                <li onClick="iconChange('fa-hourglass', <?php echo $info->id; ?>);" class="clickable fa-hourglass<?php echo $info->id; ?>"><a><i class="fa fa-hourglass"></i></a></li>
                                                                                                                <li onClick="iconChange('fa-hourglass-start', <?php echo $info->id; ?>);" class="clickable fa-hourglass-start<?php echo $info->id; ?>"><a><i class="fa fa-hourglass-start"></i></a></li>
                                                                                                                <li onClick="iconChange('fa-hourglass-o', <?php echo $info->id; ?>);" class="clickable fa-hourglass-o<?php echo $info->id; ?>"><a><i class="fa fa-hourglass-o"></i></a></li>
                                                                                                                <li onClick="iconChange('fa-balance-scale', <?php echo $info->id; ?>);" class="clickable fa-balance-scale<?php echo $info->id; ?>"><a><i class="fa fa-balance-scale"></i></a></li>
                                                                                                                <li onClick="iconChange('fa-adjust', <?php echo $info->id; ?>);" class="clickable fa-adjust<?php echo $info->id; ?>"><a><i class="fa fa-adjust"></i></a></li>
                                                                                                                <li onClick="iconChange('fa-certificate', <?php echo $info->id; ?>);" class="clickable fa-certificate<?php echo $info->id; ?>"><a><i class="fa fa-certificate"></i></a></li>
                                                                                                                <li onClick="iconChange('fa-check', <?php echo $info->id; ?>);" class="clickable fa-check<?php echo $info->id; ?> action-active"><a><i class="fa fa-check"></i></a></li>
                                                                                                                <li onClick="iconChange('fa-times', <?php echo $info->id; ?>);" class="clickable fa-times<?php echo $info->id; ?>"><a><i class="fa fa-times"></i></a></li>
                                                                                                                <li onClick="iconChange('fa-exchange', <?php echo $info->id; ?>);" class="clickable fa-exchange<?php echo $info->id; ?>"><a><i class="fa fa-exchange"></i></a></li>
                                                                                                                <li onClick="iconChange('fa-cog', <?php echo $info->id; ?>);" class="clickable fa-cog<?php echo $info->id; ?>"><a><i class="fa fa-cog"></i></a></li>
                                                                                                            </ul>
                                                                                                            <ul class="compose-btn">
                                                                                                                <li>
                                                                                                                    <a class="save<?php echo $info->id; ?> btn btn-success btn-xs" onClick="commentProcess('sample_111', <?php echo $info->id; ?>)"><i class="fa fa-edit"></i> Add Note</a>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <a class="cancle<?php echo $info->id; ?> btn btn-warning btn-xs" onClick="clickCancle(<?php echo $info->id; ?>)" style="display: none"><i class="fa fa-times"></i> Cancle</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </section>
                                                                                                    <div style="margin-top:20px !important;" class="mt-lg"> </div>
                                                                                                        <div id="all_timeline_div" class="all_timeline_div<?php echo $info->id ?>" data-always-visible="1" data-rail-visible1="1">
                                                                                                            <?php foreach ($allComments as $comment) { ?>
                                                                                                                <?php $team = $this->data_model->get_specific_column("*", array("id" => $comment->createdBy), "list_team"); ?>
                                                                                                                <div id="timeline-item_id_<?php echo $comment->id; ?>" class="timeline-item timeline-item_id_<?php echo $comment->id; ?> <?php if($this->session->userdata('id') == $comment->createdBy) { echo "myRow"; } ?>">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-xs-3 date">
                                                                                                                            <?php
                                                                                                                                if($team[0]->picture != "") {
                                                                                                                                    if (file_exists('./assets/uploadedFile/profilePicture/'.$team[0]->picture)) {
                                                                                                                                        echo '<img class="avatar" alt="" src="'.base_url().'assets/uploadedFile/profilePicture/'.$team[0]->picture.'" />';
                                                                                                                                    } else {
                                                                                                                                        echo '<img class="avatar" alt="" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" />';
                                                                                                                                    }
                                                                                                                                } else {
                                                                                                                                    echo '<img class="avatar" alt="" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" />';
                                                                                                                                }
                                                                                                                            ?>
                                                                                                                            
                                                                                                                            <span class="sdate"><b><?php echo date("d-m-y", strtotime($comment->createdDateTime)); ?></b></span>
                                                                                                                            <br>
                                                                                                                            <small class="text-navy"><span class="mmnt timeago" data-livestamp="<?php echo strtotime($comment->createdDateTime); ?>"></span></small>
                                                                                                                        </div>
                                                                                                                        <div class="col-xs-10 content no-top-border myPermission">
                                                                                                                            <div class="allAccess">
                                                                                                                                <i class="fa<?php echo $comment->id; ?> fa <?php echo $comment->commentIcon; ?> iconMark"></i>
                                                                                                                                <?php if($this->session->userdata('id') == $comment->createdBy) { ?>
                                                                                                                                    <i onclick="editComment('purchase', <?php echo $info->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-edit permission iconEdit iconMark"></i>
                                                                                                                                    <i onclick="deleteComment('sample_1', <?php echo $info->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-trash permission iconDelete iconMark"></i>
                                                                                                                                <?php } ?>
                                                                                                                            </div>
                                                                                                                            <p class="m-b-xs"><strong><?php echo $team[0]->name; ?></strong></p>
                                                                                                                            <p class="text<?php echo $comment->id; ?>"><?php echo $comment->comments ?></p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            <?php } ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- END EXAMPLE TABLE PORTLET-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                    <!-- START PAGE OBERLAY -->                
                    <div id="overlay" style="display: none;">
                        <img id="loading" alt="" class="img-responsive" src="" />
                    </div>
                    <!-- END PAGE OBERLAY --> 
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
        <!-- START MODAL GENERATED PASSWORD -->
        <div class="modal fade bs-modal-sm" id="small" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Generated Password</h4>
                    </div>
                    <div class="modal-body"> <div class="generatePassword"></div> </div>
                    <div class="modal-footer">
                        <button id="closeModal" type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                        <button id="iCopy" type="button" class="btn green iCopy" data-clipboard-action="copy" data-clipboard-target="div.generatePassword">Copy Password</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- END MODAL GENERATED PASSWORD -->     
        <div id="overlay" style="display: none;">
            <img id="loading" alt="" class="img-responsive" src="" />
        </div>
        <!--[if lt IE 9]>
            <script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script type="text/javascript">
            var base_link = "<?php echo base_url(); ?>";
            var userId = <?php echo $this->session->userdata('id'); ?>;
            var userNameFull = '<?php echo $this->session->userdata('userNameFull'); ?>';
            var userPicture = '<?php echo $this->session->userdata('picture'); ?>';
            var customPicture = '<img class="avatar" alt="" src="'+base_link+'assets/uploadedFile/profilePicture/photo3.jpg" />';
            var currentComment = '';
            var totalComment = "<?php echo $totalComment; ?>";
            var liveSystemCode = '';
            var currentdate = new Date();
            var getDate = currentdate.getDate() + "-"
                            + (currentdate.getMonth()+1)  + "-" 
                            + currentdate.getFullYear().toString().substr(2,2)
            var getMiliseconds = currentdate.getTime();
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
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-bootpag/jquery.bootpag.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/portfolio-1.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColResize/dataTables.colResize.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/profile.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-general.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-select2.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/fileUpload.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/table-advanced.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->
        <script type="text/javascript">
            var currentActivity = '';
            var totalActivity =  "<?php echo $totalActivity; ?>";
            $('#customer').addClass('active');
            jQuery(document).ready(function() {
                TableAdvanced.init();
            });
            function activityListId() {
                if(totalActivity < 10) {
                    currentActivity = "00000"+(++totalActivity);
                    return currentActivity;
                } else if(totalActivity < 100) {
                    currentActivity = "0000"+(++totalActivity);  
                    return currentActivity;              
                } else if(totalActivity < 1000) {
                    currentActivity = "000"+(++totalActivity);
                    return currentActivity;                
                } else if(totalActivity < 10000) {
                    currentActivity = "00"+(++totalActivity); 
                    return currentActivity;               
                } else if(totalActivity < 100000) {
                    currentActivity = "0"+(++totalActivity); 
                    return currentActivity;               
                }
            }
            function commentListId() {
                if(totalComment < 10) {
                    currentComment = "00000"+(++totalComment);
                } else if(totalComment < 100) {
                    currentComment = "0000"+(++totalComment);                
                } else if(totalComment < 1000) {
                    currentComment = "000"+(++totalComment);                
                } else if(totalComment < 10000) {
                    currentComment = "00"+(++totalComment);                
                } else if(totalComment < 100000) {
                    currentComment = "0"+(++totalComment);                
                }
                liveSystemCode = "bcc"+currentComment;
            }
            commentListId();
            $('<audio id="chatAudio"><source src="'+base_link+'assets/uploadedFile/sound/notify.ogg" type="audio/ogg"><source src="'+base_link+'assets/uploadedFile/sound/notify.mp3" type="audio/mpeg"><source src="'+base_link+'assets/uploadedFile/sound/notify.wav" type="audio/wav"></audio>').appendTo('body');
            function setLoadingImage() {
                var loadingImageCollection = ['loading16.gif'];
                var loadingImage = Math.floor(Math.random()*loadingImageCollection.length);
                var ImgSrc = base_link+"assets/uploadedFile/animation/"+loadingImageCollection[loadingImage];
                $('#loading').attr("src", ImgSrc);
            }  
            function fileExists(file) {
                $.post(base_link+"team/fileExists",{
                  file: file
                },
                function(data, status){
                    r = $.parseJSON(data);
                    return r.response;
                });
            }
            function returnAccess() {}
            function deleteData(id, type) {
                var upperType = type.toUpperCase();
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, archive it!",
                    cancelButtonText: "No, cancel please!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    if (isConfirm) {
                        $.ajax({
                            type: 'post',
                            url: base_link + type+"/productStatus",
                            data: 'id='+ id + '&status=' + 0,
                            success: function(response) {
                                r = $.parseJSON(response);
                                if(r.response == "success") {
                                    toastr.options = {
                                        "closeButton": true,
                                        "debug": true,
                                        "positionClass": "toast-top-right",
                                        "showDuration": "1000",
                                        "hideDuration": "1000",
                                        "timeOut": "5000",
                                        "extendedTimeOut": "1000",
                                        "showEasing": "swing",
                                        "hideEasing": "linear",
                                        "showMethod": "fadeIn",
                                        "hideMethod": "fadeOut"
                                    }
                                    setTimeout(function() {
                                        setTimeout(function() {                                            
                                            if(type == 'invoice') {
                                                var active = '<span class="label label-sm label-primary" style="background: #26C281; font-weight: bold;"> '+upperType+' - <label style="color: yellow; font-weight: bold;">Archive</label> </span>';
                                            } else {
                                                var active = '<span class="label label-sm label-primary" style="background: #C5BF66; font-weight: bold;"> '+upperType+' - <label style="color: green; font-weight: bold;">Archive</label> </span>';
                                            }
                                            var menu = '<div class="btn-group" style="margin: -5px">'+
                                                            '<button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage'+
                                                                '<i class="fa fa-angle-down"></i>'+
                                                            '</button>'+
                                                            '<ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">'+
                                                                '<li id="view"'+id+'>'+
                                                                    '<a href="'+base_link+ type+'/view'+upperType+'/'+id+'"><i class="fa fa-search" style="color: #26C281;"></i><span>View</span></a>'+
                                                                '</li>'+                                                    
                                                                '<li>'+
                                                                    '<a href="'+base_link+ type+'/view'+upperType+'/'+id+'/history" class="liveLink"><i class="fa fa-history" style="color: gray;"></i><span>History</span></a>'+
                                                                '</li>'+
                                                                '<li id="print"'+id+'>'+
                                                                    '<a href="'+base_link+ type+'/print'+upperType+'/'+id+'"><i class="fa fa-print" style="color: #000000;"></i><span>Print</span></a>'+
                                                                '</li>'+
                                                                '<li id="delete"'+id+'>'+
                                                                    '<a onclick="activeData('+id+',\''+type+'\')" href="javascript:;"><i class="fa fa-recycle" style="color: #F1C40F;"></i><span>Active</span></a>'+
                                                                '</li>'+
                                                            '</ul>'+
                                                        '</div>';
                                            $('#receipt'+id).closest('tr').find('td:eq(2)').html(active); 
                                            $('#receipt'+id).closest('tr').find('td:eq(7)').html(menu); 
                                            toastr.error(" You successfully archive receipt ", "Archive Receipt");
                                        }, 1500);
                                        swal({
                                            title: "Archive!",
                                            text: "This receipt has been archived.",
                                            timer: 3000,
                                            type : "success",
                                            showConfirmButton: false
                                        });
                                    }, 1000);
                                    var activityId = activityListId();
                                    var acType = "fa-trash-o";
                                    var acLabel = "label-danger";
                                    $.ajax({
                                        url: base_link+'recent_activity/add_activity/',
                                        data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=archive'+ '&title=receipt'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=settings',
                                        type: "POST",
										dataType: 'json',
										contentType: 'json',
                                        success: function(json) {
                                            toastr.options = {
                                                "closeButton": true,
                                                "debug": true,
                                                "positionClass": "toast-top-right",
                                                "showDuration": "1000",
                                                "hideDuration": "1000",
                                                "timeOut": "5000",
                                                "extendedTimeOut": "1000",
                                                "showEasing": "swing",
                                                "hideEasing": "linear",
                                                "showMethod": "fadeIn",
                                                "hideMethod": "fadeOut"
                                            }
                                            toastr.info("Your recent activity added...", "Recent Activity");  
                                        }, 
                                        error: function(jqXHR, exception) {
                                            if (jqXHR.status === 0) {
                                                sweetAlert("Oops...", "Not connect.\n Verify Network.", "error");
                                            } else if (jqXHR.status == 404) {
                                                sweetAlert("Oops...", "Requested page not found. [404]", "error");
                                            } else if (jqXHR.status == 500) {
                                                sweetAlert("Oops...", "Internal Server Error [500].", "error");
                                            } else if (exception === 'parsererror') {
                                                sweetAlert("Oops...", "Requested JSON parse failed.", "error");
                                            } else if (exception === 'timeout') {
                                                sweetAlert("Oops...", "Time out error.", "error");
                                            } else if (exception === 'abort') {
                                                sweetAlert("Oops...", "Ajax request aborted.", "error");
                                            } else {
                                                sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.statusText, "error");
                                            }
                                        }
                                    });
                                }
                            }
                        });
                    } else {
                        swal({
                            title: "Cancelled",
                            text: "I will close in 2 seconds.",
                            timer: 2000,
                            type : "error",
                            showConfirmButton: false
                        });
                    }
                });
            }
            function activeData(id, type) {
                var upperType = type.toUpperCase();
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, active it!",
                    cancelButtonText: "No, cancel please!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    var table = $('#sample_1010').DataTable();
                    if (isConfirm) {
                        $.ajax({
                            type: 'post',
                            url: base_link + type+"/productStatus",
                            data: 'id='+ id + '&status=' + 1,
                            success: function(response) {
                                r = $.parseJSON(response);
                                if(r.response == "success") {
                                    toastr.options = {
                                        "closeButton": true,
                                        "debug": true,
                                        "positionClass": "toast-top-right",
                                        "showDuration": "1000",
                                        "hideDuration": "1000",
                                        "timeOut": "5000",
                                        "extendedTimeOut": "1000",
                                        "showEasing": "swing",
                                        "hideEasing": "linear",
                                        "showMethod": "fadeIn",
                                        "hideMethod": "fadeOut"
                                    }
                                    setTimeout(function() {
                                        setTimeout(function() {
                                            if(type == 'invoice') {
                                                var active = '<span class="label label-sm label-primary" style="background: #26C281; font-weight: bold;"> '+upperType+' - <label style="color: green; font-weight: bold;">Active</label> </span>';
                                            } else {
                                                var active = '<span class="label label-sm label-primary" style="background: #C5BF66; font-weight: bold;"> '+upperType+' - <label style="color: green; font-weight: bold;">Active</label> </span>';
                                            }
                                            var menu = '<div class="btn-group" style="margin: -5px">'+
                                                            '<button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage'+
                                                                '<i class="fa fa-angle-down"></i>'+
                                                            '</button>'+
                                                            '<ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">'+
                                                                '<li id="view"'+id+'>'+
                                                                    '<a href="'+base_link+ type+'/view'+upperType+'/'+id+'"><i class="fa fa-search" style="color: #26C281;"></i><span>View</span></a>'+
                                                                '</li>'+                                                    
                                                                '<li>'+
                                                                    '<a href="'+base_link+ type+'/view'+upperType+'/'+id+'/history" class="liveLink"><i class="fa fa-history" style="color: gray;"></i><span>History</span></a>'+
                                                                '</li>'+
                                                                '<li id="edit"'+id+'>'+
                                                                    '<a onclick="editData('+id+')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Return & Edit</span></a>'+
                                                                '</li>'+ 
                                                                '<li id="print"'+id+'>'+
                                                                    '<a href="'+base_link+ type+'/print'+upperType+'/'+id+'"><i class="fa fa-print" style="color: #000000;"></i><span>Print</span></a>'+
                                                                '</li>'+
                                                                '<li id="delete"'+id+'>'+
                                                                    '<a onclick="deleteData('+id+',\''+type+'\')" href="javascript:;"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>'+
                                                                '</li>'+
                                                            '</ul>'+
                                                        '</div>';
                                            $('#receipt'+id).closest('tr').find('td:eq(2)').html(active); 
                                            $('#receipt'+id).closest('tr').find('td:eq(7)').html(menu); 
                                            toastr.success(" You successfully active receipt ", "Active Receipt");
                                        }, 1500);
                                        swal({
                                            title: "Activate!",
                                            text: "This receipt has been activate.",
                                            timer: 3000,
                                            type : "success",
                                            showConfirmButton: false
                                        });
                                    }, 1000);
                                    var activityId = activityListId();
                                    var acType = "fa-trash-o";
                                    var acLabel = "label-danger";
                                    $.ajax({
                                        url: base_link+'recent_activity/add_activity/',
                                        data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=active'+ '&title=receipt'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=settings',
                                        type: "POST",
										dataType: 'json',
										contentType: 'json',
                                        success: function(json) {
                                            toastr.options = {
                                                "closeButton": true,
                                                "debug": true,
                                                "positionClass": "toast-top-right",
                                                "showDuration": "1000",
                                                "hideDuration": "1000",
                                                "timeOut": "5000",
                                                "extendedTimeOut": "1000",
                                                "showEasing": "swing",
                                                "hideEasing": "linear",
                                                "showMethod": "fadeIn",
                                                "hideMethod": "fadeOut"
                                            }
                                            toastr.info("Your recent activity added...", "Recent Activity");  
                                        }, 
                                        error: function(jqXHR, exception) {
                                            if (jqXHR.status === 0) {
                                                sweetAlert("Oops...", "Not connect.\n Verify Network.", "error");
                                            } else if (jqXHR.status == 404) {
                                                sweetAlert("Oops...", "Requested page not found. [404]", "error");
                                            } else if (jqXHR.status == 500) {
                                                sweetAlert("Oops...", "Internal Server Error [500].", "error");
                                            } else if (exception === 'parsererror') {
                                                sweetAlert("Oops...", "Requested JSON parse failed.", "error");
                                            } else if (exception === 'timeout') {
                                                sweetAlert("Oops...", "Time out error.", "error");
                                            } else if (exception === 'abort') {
                                                sweetAlert("Oops...", "Ajax request aborted.", "error");
                                            } else {
                                                sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.statusText, "error");
                                            }
                                        }
                                    });
                                }
                            }
                        });
                    } else {
                        swal({
                            title: "Cancelled",
                            text: "I will close in 2 seconds.",
                            timer: 2000,
                            type : "error",
                            showConfirmButton: false
                        });
                    }
                });
            } 
            function iconChange(value, id) {
                $('#activityType'+id).val(value);
                $(".clickable").removeClass('action-active');
                $("."+value+id).addClass('action-active'); 
                $('.compose-toolbar').removeClass('compose-toolbar-error');                
                $('.compose-toolbar').addClass('compose-toolbar-success');
            }
            var lastId = 0;
            var liveId = 0;
            var liveIcon = '';
            function commentProcess(tableName, id) {
                var error = false;
                var message = $('#hiddenMessage'+id).val();
                var type = $('#activityType'+id).val();
                var cId = $('#commentId'+id).val();
                if(message != "") {
                    $('.messageText'+id).removeClass('has-error');
                    $('.messageText'+id).addClass('has-success');
                } else {
                    $('.messageText'+id).removeClass('has-success');
                    $('.messageText'+id).addClass('has-error');
                    error = true;
                } 
                if(type != "") {
                    $('.compose-toolbar').removeClass('compose-toolbar-error');
                    $('.compose-toolbar').addClass('compose-toolbar-success');
                } else {                    
                    $('.compose-toolbar').removeClass('compose-toolbar-success');
                    $('.compose-toolbar').addClass('compose-toolbar-error');
                    error = true;
                }
                var picture = '';
                if(userPicture != '') {
                    if(fileExists(userPicture) == 'success') {
                        picture = '<img class="avatar" alt="" src="'+base_link+'assets/uploadedFile/profilePicture/'+userPicture+'" />';
                    } else {
                        picture = customPicture;
                    }
                } else {
                    picture = customPicture;
                }
                $('#commentCode'+id).val(liveSystemCode);
                var table = $('#'+tableName).DataTable();
                // table.destroy();
                if(!error) {
                    $.ajax({
                        url: base_link+'comment/processComment',
                        type: 'POST',
                        data: $('#commentForm'+id).serialize(),
                        async: false,
                        beforeSend: function() {
                            $('#overlay').css('display', 'block');
                            setLoadingImage();
                        },
                        complete: function() {
                            $('#overlay').css('display', 'none');
                            $('#loadingSpinner').remove();
                            $('#chatAudio')[0].play();
                        },
                        success: function (response) { 
                            r = $.parseJSON(response);
                            if(r.response == "success") {
                                toastr.options = {
                                    "closeButton": true,
                                    "debug": true,
                                    "positionClass": "toast-top-right",
                                    "showDuration": "1000",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
                                    "extendedTimeOut": "1000",
                                    "showEasing": "swing",
                                    "hideEasing": "linear",
                                    "showMethod": "fadeIn",
                                    "hideMethod": "fadeOut"
                                }
                                setTimeout(function() {
                                    setTimeout(function() {
                                        toastr.success(" You successfully added comment ", "Add Comment");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=customer'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/customer/'+totalComment,
                                    type: "POST",
                                    dataType: 'json',
                                    contentType: 'json',
                                    success: function(json) {
                                        toastr.options = {
                                            "closeButton": true,
                                            "debug": true,
                                            "positionClass": "toast-top-right",
                                            "showDuration": "1000",
                                            "hideDuration": "1000",
                                            "timeOut": "5000",
                                            "extendedTimeOut": "1000",
                                            "showEasing": "swing",
                                            "hideEasing": "linear",
                                            "showMethod": "fadeIn",
                                            "hideMethod": "fadeOut"
                                        }
                                        toastr.info("Your recent activity added...", "Recent Activity");  
                                    }, 
                                    error: function(jqXHR, exception) {
                                        if (jqXHR.status === 0) {
                                            sweetAlert("Oops...", "Not connect.\n Verify Network.", "error");
                                        } else if (jqXHR.status == 404) {
                                            sweetAlert("Oops...", "Requested page not found. [404]", "error");
                                        } else if (jqXHR.status == 500) {
                                            sweetAlert("Oops...", "Internal Server Error [500].", "error");
                                        } else if (exception === 'parsererror') {
                                            sweetAlert("Oops...", "Requested JSON parse failed.", "error");
                                        } else if (exception === 'timeout') {
                                            sweetAlert("Oops...", "Time out error.", "error");
                                        } else if (exception === 'abort') {
                                            sweetAlert("Oops...", "Ajax request aborted.", "error");
                                        } else {
                                            sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.statusText, "error");
                                        }
                                    }
                                });
                                setTimeout(function(){
                                    if($('#commentProcess'+id).val() == 0) {
                                        var liveComment =   '<div id="timeline-item_id_'+r.commentId+'" class="timeline-item timeline-item_id_'+r.commentId+' myRow">'+
                                                                '<div class="row">'+
                                                                    '<div class="col-xs-3 date">'+
                                                                        picture+
                                                                        '<span class="sdate"><b>'+getDate+'</b></span>'+
                                                                        '<br>'+
                                                                        '<small class="text-navy"><span class="mmnt timeago" data-livestamp="'+new Date().getTime()+'"></span></small>'+
                                                                    '</div>'+
                                                                    '<div class="col-xs-10 content no-top-border myPermission">'+
                                                                        '<div class="allAccess">'+
                                                                            '<i class="fa'+r.commentId+' fa '+type+' iconMark"></i>'+
                                                                            '<i onclick="editComment(\'receipt\', '+id+', '+r.commentId+')" class="fa fa-edit permission iconEdit iconMark"></i>'+
                                                                            '<i onclick="deleteComment("'+tableName+'", '+id+', '+r.commentId+')" class="fa fa-trash permission iconDelete iconMark"></i>'+
                                                                        '</div>'+
                                                                        '<p class="m-b-xs"><strong>'+userNameFull+'</strong></p>'+
                                                                        '<p class="text'+r.commentId+'">'+message+'</p>'+
                                                                    '</div>'+
                                                                '</div>'+
                                                            '</div>';
                                        $('.all_timeline_div'+id).append(liveComment);
                                    } else {
                                        $('.fa'+cId).removeClass(liveIcon);
                                        $('.fa'+cId).addClass(type);
                                        $('.text'+cId).html(message);
                                    }
                                    $('#commentForm'+id)[0].reset();
                                    $('.messageText'+id).val(''); 
                                    $('.messageText'+id).removeClass('has-success');
                                    $('.messageText'+id).removeClass('has-error');
                                    $('.clickable').removeClass('action-active');
                                    $('.compose-toolbar').removeClass('compose-toolbar-success');          
                                    $('#commentProcess'+id).val(0);
                                    $('.cancle'+id).css('display', 'none');
                                    $('.save'+id).html('<i class="fa fa-edit"></i> Add Note');
                                    $('.save'+id).removeClass('btn-primary');
                                    $('.save'+id).addClass('btn-success'); 
                                    $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                                    var cell = $('#'+tableName+' tr#receipt'+id+' td:last-child').html();
                                    var tblData = table.row('#receipt'+id).data();
                                    tblData[10] = cell;
                                    table.data(tblData).draw();
                                }, 2000);
                            } else {
                                if(r.response == 'formManipulation') {
                                    sweetAlert("Oops...", "Why you manipulate system.", "error");                                   
                                } else if(r.response == 'Already exist') {
                                    sweetAlert("Oops...", "This email address already exist.", "error");                                   
                                } else {
                                    sweetAlert("Oops...", "Syatem is busy now or please contact with your administrator.", "error");                                   
                                }
                            }
                        }, 
                        error: function(jqXHR, exception) {
                            if (jqXHR.status === 0) {
                                sweetAlert("Oops...", "Not connect. Verify Network.", "error");
                            } else if (jqXHR.status == 404) {
                                sweetAlert("Oops...", "Requested page not found. [404]", "error");
                            } else if (jqXHR.status == 500) {
                                sweetAlert("Oops...", "Internal Server Error [500].", "error");
                            } else if (exception === 'parsererror') {
                                sweetAlert("Oops...", "Requested JSON parse failed.", "error");
                            } else if (exception === 'timeout') {
                                sweetAlert("Oops...", "Time out error.", "error");
                            } else if (exception === 'abort') {
                                sweetAlert("Oops...", "Ajax request aborted.", "error");
                            } else {
                                sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.statusText, "error");
                            }
                        }
                    });
                    return false;
                }
            }
            function getValueComment(message, id) {
                $('#hiddenMessage'+id).val(message);
            }
            function editComment(type, id, cId) {
                lastId = id;
                var icon = $('.fa'+cId).attr('class');
                var commentIcon = icon.split(' ');
                liveIcon = commentIcon[2];
                $('#activityType'+id).val(commentIcon[2]);           
                $('textarea.messageText'+id).val($('.text'+cId).first().text());
                getValueComment($('.text'+cId).first().text(), id);
                $(".clickable").removeClass('action-active');     
                $("."+commentIcon[2]+id).addClass('action-active');
                $('#commentId'+id).val(cId);              
                $('#commentProcess'+id).val(1);
                $('.save'+id).html('<i class="fa fa-edit"></i> Update Note');
                $('.save'+id).removeClass('btn-success');
                $('.save'+id).addClass('btn-primary');                
                $('.compose-toolbar').addClass('compose-toolbar-success');
                $('.cancle'+id).css('display', 'block');
            }
            function clickCancle(id) {
                $('.cancle'+id).css('display', 'none');
                $('.save'+id).html('<i class="fa fa-edit"></i> Add Note');
                $('.save'+id).removeClass('btn-primary');
                $('.save'+id).addClass('btn-success'); 
                $('.messageText'+id).val(''); 
                $('.clickable').removeClass('action-active');
                $('.compose-toolbar').removeClass('compose-toolbar-success');          
                $('#commentProcess'+id).val(0);
            }
            $('.row-details-open').click(function () {
                $('.save'+lastId).html('<i class="fa fa-edit"></i> Add Note');
                $('.save'+lastId).removeClass('btn-primary');
                $('.save'+lastId).addClass('btn-success');           
                $('#commentProcess'+id).val(0);
            });
            function deleteComment(table, id, cId) {
                var table = $('#'+table).DataTable();
                                
                $.ajax({
                    url: base_link+'comment/removeComment',
                    type: 'POST',
                    data: 'id='+cId,
                    async: false,
                    beforeSend: function() {
                        $('#overlay').css('display', 'block');
                        setLoadingImage();
                    },
                    complete: function() {
                        $('#overlay').css('display', 'none');
                        $('#loadingSpinner').remove();
                        $('#chatAudio')[0].play();
                    },
                    success: function (response) { 
                        r = $.parseJSON(response);
                        if(r.response == "success") {
                            toastr.options = {
                                "closeButton": true,
                                "debug": true,
                                "positionClass": "toast-top-right",
                                "showDuration": "1000",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            }
                            setTimeout(function() {
                                setTimeout(function() {
                                    toastr.success(" You successfully added comment ", "Add Comment");
                                }, 1000);
                            }, 500);
                            var activityId = activityListId();
                            var acType = "fa-plus";
                            var acLabel = "label-success";
                            $.ajax({
                                url: base_link+'recent_activity/add_activity/',
                                data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=customer'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/customer/'+totalComment,
                                type: "POST",
								dataType: 'json',
								contentType: 'json',
                                success: function(json) {
                                    toastr.options = {
                                        "closeButton": true,
                                        "debug": true,
                                        "positionClass": "toast-top-right",
                                        "showDuration": "1000",
                                        "hideDuration": "1000",
                                        "timeOut": "5000",
                                        "extendedTimeOut": "1000",
                                        "showEasing": "swing",
                                        "hideEasing": "linear",
                                        "showMethod": "fadeIn",
                                        "hideMethod": "fadeOut"
                                    }
                                    toastr.info("Your recent activity added...", "Recent Activity");  
                                }, 
                                error: function(jqXHR, exception) {
                                    if (jqXHR.status === 0) {
                                        sweetAlert("Oops...", "Not connect.\n Verify Network.", "error");
                                    } else if (jqXHR.status == 404) {
                                        sweetAlert("Oops...", "Requested page not found. [404]", "error");
                                    } else if (jqXHR.status == 500) {
                                        sweetAlert("Oops...", "Internal Server Error [500].", "error");
                                    } else if (exception === 'parsererror') {
                                        sweetAlert("Oops...", "Requested JSON parse failed.", "error");
                                    } else if (exception === 'timeout') {
                                        sweetAlert("Oops...", "Time out error.", "error");
                                    } else if (exception === 'abort') {
                                        sweetAlert("Oops...", "Ajax request aborted.", "error");
                                    } else {
                                        sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.statusText, "error");
                                    }
                                }
                            });
                            setTimeout(function(){
                                $('.timeline-item_id_'+cId).remove();
                                var cell = $('#'+tableName+' tr:eq('+id+') td:last-child').html();
                                var tblData = table.row('#receipt'+id).data();
                                tblData[10] = cell;
                                table.data(tblData).draw();
                            }, 2000);
                        } else {
                            if(r.response == 'formManipulation') {
                                sweetAlert("Oops...", "Why you manipulate system.", "error");                                   
                            } else if(r.response == 'Already exist') {
                                sweetAlert("Oops...", "This email address already exist.", "error");                                   
                            } else {
                                sweetAlert("Oops...", "Syatem is busy now or please contact with your administrator.", "error");                                   
                            }
                        }
                    }, 
                    error: function(jqXHR, exception) {
                        if (jqXHR.status === 0) {
                            sweetAlert("Oops...", "Not connect. Verify Network.", "error");
                        } else if (jqXHR.status == 404) {
                            sweetAlert("Oops...", "Requested page not found. [404]", "error");
                        } else if (jqXHR.status == 500) {
                            sweetAlert("Oops...", "Internal Server Error [500].", "error");
                        } else if (exception === 'parsererror') {
                            sweetAlert("Oops...", "Requested JSON parse failed.", "error");
                        } else if (exception === 'timeout') {
                            sweetAlert("Oops...", "Time out error.", "error");
                        } else if (exception === 'abort') {
                            sweetAlert("Oops...", "Ajax request aborted.", "error");
                        } else {
                            sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.statusText, "error");
                        }
                    }
                });
            }
            function printData(tableName, heading) {
               var divToPrint=document.getElementById(tableName);
               newWin= window.open("");
               newWin.document.write(divToPrint.outerHTML);
               newWin.document.write("<title>"+heading+"</title>");
               newWin.print();
               newWin.close();
            }
            var tableToExcel = (function() {
              var uri = 'data:application/vnd.ms-excel;base64,'
                , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
                , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
                , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
              return function(table, name) {
                if (!table.nodeType) table = document.getElementById(table)
                var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
                window.location.href = uri + base64(format(template, ctx))
              }
            })()
        </script>
    </body>

</html>