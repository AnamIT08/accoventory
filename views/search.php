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
        <title>Search <?php echo $search; ?> | Accoventory .::.SaaS.::. Accounting & Inventory Software - SaaS</title>
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
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/inputs-ext/address/address.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/css/cubeportfolio.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/systemOwn/plugins/selectize/css/selectize.bootstrap2.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/sweetalert.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/ad_a_note.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url(); ?>assets/pages/css/portfolio.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/overLay.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.png" /> 
        <style type="text/css">
            .form-group.form-md-line-input.form-md-floating-label .input-icon > label { display: inline-block; font-weight: normal; }
            .input-inline { border: 1px solid #cbcbcb; border-radius: 5px; }
            #select2-sample_8_length-e7-container, .select2-selection__rendered {
                display: none;
            }
            tr td:first-child {
                cursor: move;
            }
            .table .btn {
                margin-right: 0px;
            }
            .dropdown-menu-custom {
                min-width: 120px !important;
                max-width: 125px !important;
            }
            .dropdown-submenu > .dropdown-menu {
                left: 0 !important;
            }
            .dropdown-menu-custom-sub {
                min-width: 135px !important;
                max-width: 145px !important;
            }
            .fa {
                margin-right: 5px; 
            }
            span.fadeMe {
                border-radius: 2px;
                opacity:    0.01; 
                background: #000; 
                width:      100%;
                height:     100%; 
                z-index:    10;
                top:        0; 
                left:       0; 
                position:   absolute;
                cursor: default; 
            }
            .newDrop {
                cursor: pointer;
                min-height: 180px;
                padding: 20px 0;
                text-align: center;
                border: 1px dashed;
                border-radius: 5px;
                border-color: #54c7c3;
                margin: 0 auto;
                background: #fff;
                float: right;
            }
            .uploadedLogo {
                float: right;
                margin-right: 10%;
            }
            .newDropUploaded {
                border: 1px none;
                min-height: 10px;
                float: right;
            }
            .wave-logo-uploader-dropzone__logo__dropzone__hint {
                line-height: 20px;
                color: gray;
            }
            .wv-text, .wv-text--body, .wv-generated-content p:not([class*="wv-"]) {
                margin: 16px 0;
            }
            .wave-logo-uploader-dropzone__logo__dropzone__browse-link {
                color: #54c7c3;
            }
            #profile-img-system {
                max-width: 130px;
            }
            #profile a{
                margin: auto;
            }
            .col-md-4, .col-md-6 { margin-bottom: 20px; }
            .profile-image-loading { cursor:pointer;margin-top: 101px;width: 100%; height: 100%; margin-left: 25% !important;}
            .hidden {display:none;}
            #profile a {display: table; vertical-align: middle; text-align: center; position: relative;}    
            #profile span {display: none;}  
            #profile a:hover span {position: absolute; right: -20%; top: -25%; display: block; text-align: center; color: red; font-size: 16px; }  
            #profile a:hover span b:hover {background: #000;}
            img { border: none; vertical-align: bottom; cursor: auto}
            #uploadTrigger { right: 0px; }
            .newCross { right: 0; top: 0; }
            .activeFile {display: none !important;}
            #status_msg_div { height: 5px; width: 100%; }
            #status_msg { width:100%; margin: 0 auto !important; text-align: center; }
            .error-error{ font-size:15px; padding-top:5px; color:red; font-weight:bold; -webkit-animation-name: blinker; -webkit-animation-duration: 3s; -webkit-animation-timing-function: linear; -webkit-animation-iteration-count: infinite; -moz-animation-name: blinker; -moz-animation-duration: 3s; -moz-animation-timing-function: linear; -moz-animation-iteration-count: infinite; nimation-name: blinker; animation-duration: 3s; animation-timing-function: linear; animation-iteration-count: infinite; }
            @-moz-keyframes blinker { 0% { opacity: 1.0; } 25% { opacity: 1.0; } 50% { opacity: 0.0; } 100% { opacity: 1.0; } }
            @-webkit-keyframes blinker { 0% { opacity: 1.0; } 25% { opacity: 1.0; } 50% { opacity: 0.0; } 100% { opacity: 1.0; } }
            @keyframes blinker { 0% { opacity: 1.0; } 25% { opacity: 1.0; } 50% { opacity: 0.0; } 100% { opacity: 1.0; } }
            .divRightText input { text-align: right !important; }
            .form-group.form-md-line-input { padding-top: 12px !important; }
            .customInput { margin-top: -5px; }
            .ranges { display: block !important; }
            .ranges li { list-style:  none; background: #F1F1F1; margin: 3px; margin-left: -40px; padding: 3px 3px 3px 15px; padding-left: 15px; font-weight: bolder; cursor: pointer; border-radius: 3px; }
            .ranges li:hover { background: #32C5D2; }
            .customFormControl { margin-top: -25px !important; margin-bottom: -20px; }
            .companyName { margin-bottom: 20px; margin-top: 10px; }
            .selectizedTax { margin-top: -5px; }
            .customFormGroup { margin-right: 5px; }
            #static .modal-header .dataDiv { margin-bottom: 10px }
            #static .modal-body { overflow: hidden; margin-top: 10px; }
            #static .slimScrollDiv { width: 99% !important; }
            .modal-header h4 { margin-bottom: -10px; border-bottom: 1px solid; padding-bottom: 8px !important; }
            .modal-body, .modal-header h4, .modal-header label { font-weight: bold !important; }
            #dateDifference { float: right; margin-top: 15px; margin-bottom: -15px; margin-right: 15%; color: gray; font-weight: bold; }
            .moveButton, .deleteButton { opacity: 0.3; }
            .moveButton:hover { color: #E87E04; }
            .deleteButton:hover { color: red;  cursor: pointer; }
            .moveButton:hover, .deleteButton:hover { opacity: 1.0; }
            .hasError { color: red !important; }
            #select2-sample_8_length-e7-container, .select2-selection__rendered {
                display: none;
            }
            tr td:first-child {
                cursor: move;
            }
            .table .btn {
                margin-right: 0px;
            }
            .dropdown-menu-custom {
                min-width: 130px !important;
                max-width: 135px !important;
            }
            .dropdown-submenu > .dropdown-menu {
                left: 0 !important;
            }
            .dropdown-menu-custom-sub {
                min-width: 135px !important;
                max-width: 145px !important;
            }
            .fa {
                margin-right: 5px; 
            }
            tr.details { cursor: default; }
            #innerTable td {
                cursor: default !important;
            }
            .ibox { box-shadow: none; margin-bottom: 5px !important; }
            .ibox-content { background: none; }
            .activity-post { border: 1px dashed #e8e8e8; }
            #msg { border-bottom: 1px solid #e8e8e8; }
            #all_timeline_div { border: 1px solid #e8e8e8; border-radius: 5px; padding: 10px; margin-top: 10px; }
            .timeline-item { margin: 0 auto; margin-bottom: 5px; border: 1px solid #e8e8e8; border-radius: 5px; background: #fff; }
            .timeline-item .date { width: 95px; padding-top: 5px; }
            .timeline-item .no-top-border .iconMark { position: absolute; top: -1px; right: -6px; padding: 10px; width: 40px; text-align: center; border-top: 1px solid #e7eaec; border-bottom: 1px solid #e7eaec; border-left: 1px solid #e7eaec; background: #f8f8f8; font-size: 20px; border-top-right-radius: 5px; }
            .no-top-border { width: 87.6% !important; min-height: 95px !important; }
            .avatar { height: 45px; width: 45px; border-radius: 50% !important; border: 2px solid !important; }
            .editCustom { position: absolute !important; top: 5px !important; right: 120px !important; }
            .deleteCustom { position: absolute !important; top: 5px !important; right: 45px !important; }
            ​.loadMore { margin-top: 10px !important; }
            a.tooltipC { outline:none; }
            a.tooltipC strong { line-height:17px; }
            a.tooltipC:hover { text-decoration:none; }
            a.tooltipC .sTooltip { z-index:9999; display:none; padding:6px 6px; margin-top:-40px; margin-left:8px; min-width:130px; height:auto; line-height:0px; right: 0; }
            a.tooltipC:hover .sTooltip{ display:inline-block !important; position:absolute; border:2px solid #FFF; width:auto; height:auto; color:#EEE; background:#000; z-index:9999; }
            a.tooltipC .sTooltip { border-radius:5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; -moz-box-shadow: 0px 0px 1px 1px #666; -webkit-box-shadow: 0px 0px 1px 1px #666; box-shadow: 0px 0px 1px 1px #666; opacity: 0.8; }
            .table-scrollable .dropdown-menu { position: relative !important; }
            td .liveLink { display: block; width: 100%; height: 100%; text-decoration: none; }
            .bootstrap-switch-container { color: #000 !important; font-weight: 600; }
            .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-success { color: #000 !important; }
            .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-warning { color: #000 !important; }
            .table tbody td .form-md-line-input input { display: inline-block !important; margin-top: 0px !important; }
            .bootstrap-switch-id-currencyChange { float: right; margin-top: -8px; }
            .select2-container--bootstrap .select2-selection { border-radius: 0px !important; border: none; border-bottom: 2px solid #36C6D3 !important; border-top: none !important; border-left: none !important;border-right: none !important; }
            .select2-container .select2-choice .select2-arrow { border-left: none ; }
            /*.toogleTable { font-weight: 700 !important; color: #000 !important; text-transform: unset; font-size: 13px !important; }*/
            a { text-decoration: none !important; }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md pace-done page-sidebar-closed">
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
                <!-- BEGIN CONTENT BODY -->
                <div  id="js-grid-juicy-projects" style="display: none"></div>
                <div class="page-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row InvoiceList">
                        <div class="col-md-12">
                            <div class="profile-content">
                                <!-- BEGIN PORTLET -->
                                <div class="portlet light bordered">
                                   <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet box light bordered">
                                        <div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
                                            <div class="caption">
                                                <i class="fa fa-th-list"></i><span class="caption-subject font-blue-madison bold">Search Result</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group btn-group-solid">
                                                    <a id="tFull" class="fullscreen fullscreen-recent dt-button buttons-csv buttons-html5 btn blue btn-outline"><i id="tFullIcon" class="fa fa-expand"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <table class="table table-striped table-bordered table-hover dt-responsive" id="sample_8">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Document ID
                                                        </th>
                                                        <th>
                                                            Date
                                                        </th>
                                                        <th>
                                                            To
                                                        </th>
                                                        <th>
                                                            Type
                                                        </th>
                                                        <th>
                                                            Transaction Amount
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
                                                <tbody class="uiSortableList">
                                                    <?php  foreach ($searchListDocument as $search) { ?>
                                                        <tr>
                                                            <td>
                                                                <?php   if($search->type == "invoice") { ?>
                                                                    <a><span class="label label-sm label-success"> <?php echo $search->systemId; ?> </span></a>
                                                                <?php   } else if($search->type == "estimate") { ?>
                                                                    <a><span class="label label-sm label-warning"> <?php echo $search->systemId; ?> </span></a>
                                                                <?php   } else { ?>
                                                                    <a><span class="label label-sm label-danger"> <?php echo $search->systemId; ?> </span></a>
                                                                <?php   } ?>
                                                            </td>
                                                            <td>
                                                                <?php echo date("d-m-Y", strtotime($search->date)); ?>
                                                            </td>
                                                            <td>
                                                                <?php   
                                                                    $user = $this->data_model->get_specific_column("name", array("id" => $search->customerId), "list_business_member"); echo $user[0]->name;
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php   if($search->type == "invoice") { ?>
                                                                    <a><span class="label label-sm label-success"> Invoice </span></a>
                                                                <?php   } else if($search->type == "estimate") { ?>
                                                                    <a><span class="label label-sm label-warning"> Estimate </span></a>
                                                                <?php   } else  { ?>
                                                                    <a><span class="label label-sm label-danger"> Bill </span></a>
                                                                <?php   } ?>
                                                            </td>
                                                            <td>
                                                                <?php   
                                                                    echo $search->calculateTotal;
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php   if($search->type == "invoice") { ?>
                                                                    <a href="<?php echo base_url(); ?>invoice/viewInvoice/<?php echo $search->id ?>" class="liveLink" target="_blank"><span class="label label-sm" style="background: green"><i class="fa fa-search"></i> View </span></a>
                                                                <?php   } else if($search->type == "estimate") { ?>
                                                                    <a href="<?php echo base_url(); ?>estimate/viewEstimate/<?php echo $search->id ?>" class="liveLink" target="_blank"><span class="label label-sm" style="background: green"><i class="fa fa-search"></i> View </span></a>
                                                                <?php   } else { ?>
                                                                    <a href="<?php echo base_url(); ?>product/viewBill/<?php echo $search->id ?>" class="liveLink" target="_blank"><span class="label label-sm" style="background: green"><i class="fa fa-search"></i> View </span></a>
                                                                <?php   } ?>
                                                            </td>
                                                            <td>
                                                                <?php $team = $this->data_model->get_specific_column("name", array("id" => $search->createdBy), "list_team"); echo $team[0]->name; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $search->createdDateTime; ?>
                                                                
                                                            </td>
                                                            <td style="display: none;">
                                                            
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php  foreach ($searchListTransaction as $search) { ?>
                                                        <tr>
                                                            <td>
                                                                <a><span class="label label-sm" style="background: #3598DC"> <?php echo $search->systemId; ?> </span></a>
                                                            </td>
                                                            <td>
                                                                <?php echo date("d-m-Y", strtotime($search->date)); ?>
                                                            </td>
                                                            <td>
                                                                <?php  
                                                                    if($search->docType == 'Transaction') {
                                                                        $user = $this->data_model->get_specific_column("name", array("id" => $search->teamMember), "list_team"); echo $user[0]->name;
                                                                    } else {
                                                                        $user = $this->data_model->get_specific_column("name", array("id" => $search->teamMember), "list_business_member"); echo $user[0]->name;
                                                                    }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a><span class="label label-sm" style="background: #3598DC"> Receipt </span></a>
                                                            </td>
                                                            <td>
                                                                <?php   
                                                                    echo $search->amount;
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo base_url(); ?>transaction/viewReceipt/<?php echo $search->id ?>" class="liveLink" target="_blank"><span class="label label-sm" style="background: green"><i class="fa fa-search"></i> View </span></a>
                                                            </td>
                                                            <td>
                                                                <?php $team = $this->data_model->get_specific_column("name", array("id" => $search->createdBy), "list_team"); echo $team[0]->name; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $search->createdDateTime; ?>
                                                                
                                                            </td>
                                                            <td style="display: none;">
                                                            
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php  
                                                        foreach ($searchDocument as $searches) {
                                                            foreach ($searches as $search) { 
                                                    ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php   if($search->type == "invoice") { ?>
                                                                            <a><span class="label label-sm label-success"> <?php echo $search->systemId; ?> </span></a>
                                                                        <?php   } else if($search->type == "estimate") { ?>
                                                                            <a><span class="label label-sm label-warning"> <?php echo $search->systemId; ?> </span></a>
                                                                        <?php   } else { ?>
                                                                            <a><span class="label label-sm label-danger"> <?php echo $search->systemId; ?> </span></a>
                                                                        <?php   } ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo date("d-m-Y", strtotime($search->date)); ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php   
                                                                            $user = $this->data_model->get_specific_column("name", array("id" => $search->customerId), "list_business_member"); echo $user[0]->name;
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php   if($search->type == "invoice") { ?>
                                                                            <a><span class="label label-sm label-success"> Invoice </span></a>
                                                                        <?php   } else if($search->type == "estimate") { ?>
                                                                            <a><span class="label label-sm label-warning"> Estimate </span></a>
                                                                        <?php   } else  { ?>
                                                                            <a><span class="label label-sm label-danger"> Bill </span></a>
                                                                        <?php   } ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php   
                                                                            echo $search->calculateTotal;
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php   if($search->type == "invoice") { ?>
                                                                            <a href="<?php echo base_url(); ?>invoice/viewInvoice/<?php echo $search->id ?>" class="liveLink" target="_blank"><span class="label label-sm" style="background: green"><i class="fa fa-search"></i> View </span></a>
                                                                        <?php   } else if($search->type == "estimate") { ?>
                                                                            <a href="<?php echo base_url(); ?>estimate/viewEstimate/<?php echo $search->id ?>" class="liveLink" target="_blank"><span class="label label-sm" style="background: green"><i class="fa fa-search"></i> View </span></a>
                                                                        <?php   } else { ?>
                                                                            <a href="<?php echo base_url(); ?>product/viewBill/<?php echo $search->id ?>" class="liveLink" target="_blank"><span class="label label-sm" style="background: green"><i class="fa fa-search"></i> View </span></a>
                                                                        <?php   } ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php $team = $this->data_model->get_specific_column("name", array("id" => $search->createdBy), "list_team"); echo $team[0]->name; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $search->createdDateTime; ?>
                                                                        
                                                                    </td>
                                                                    <td style="display: none;">
                                                                    
                                                                    </td>
                                                                </tr>
                                                    <?php } } ?>
                                                    <?php  
                                                        foreach ($searchTransaction as $searches) {
                                                            foreach ($searches as $search) { 
                                                    ?>
                                                                <tr>
                                                                    <td>
                                                                        <a><span class="label label-sm" style="background: #3598DC"> <?php echo $search->systemId; ?> </span></a>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo date("d-m-Y", strtotime($search->date)); ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php  
                                                                            if($search->docType == 'Transaction') {
                                                                                $user = $this->data_model->get_specific_column("name", array("id" => $search->teamMember), "list_team"); echo $user[0]->name;
                                                                            } else {
                                                                                $user = $this->data_model->get_specific_column("name", array("id" => $search->teamMember), "list_business_member"); echo $user[0]->name;
                                                                            }
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <a><span class="label label-sm" style="background: #3598DC"> Receipt </span></a>
                                                                    </td>
                                                                    <td>
                                                                        <?php   
                                                                            echo $search->amount;
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <a href="<?php echo base_url(); ?>transaction/viewReceipt/<?php echo $search->id ?>" class="liveLink" target="_blank"><span class="label label-sm" style="background: green"><i class="fa fa-search"></i> View </span></a>
                                                                    </td>
                                                                    <td>
                                                                        <?php $team = $this->data_model->get_specific_column("name", array("id" => $search->createdBy), "list_team"); echo $team[0]->name; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $search->createdDateTime; ?>
                                                                        
                                                                    </td>
                                                                    <td style="display: none;">
                                                                    
                                                                    </td>
                                                                </tr>
                                                    <?php } } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                </div>
                                <!-- END PORTLET -->
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
        </script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/jquery.tabletoCSV.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.js"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/moment-with-locales.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.mockjax.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/inputs-ext/address/address.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColResize/dataTables.colResize.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/api/sum().js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/highcharts.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/highcharts-3d.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/highcharts-more.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/portfolio-1.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/bootstrap-tour/js/bootstrap-tour.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/charts-highcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-select2.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-date-time-pickers.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/selectize/js/standalone/selectize.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/table-advanced.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/form-editable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/tableExport.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jquery.base64.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/html2canvas.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jspdf/jspdf.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jspdf/libs/sprintf.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jspdf/libs/base64.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jspdf.debug.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->
        <script>
            jQuery(document).ready(function() {
                TableAdvanced.init();
            });
        </script>
    </body>

</html>