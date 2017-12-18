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
        <title>Reseller List | Business Care</title>
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
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        <style type="text/css">
			#select2-sample_3_length-e7-container, .select2-selection__rendered {
				display: none;
			}
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
            .currency {
                color: black !important;
                font-weight: bold !important;
                font-size: 14px !important;
                padding: 6px !important;
                border-radius:5px !important; 
                -moz-border-radius: 5px !important; 
                -webkit-border-radius: 5px !important;
            }
			button.customButton:hover, button.currency:hover {
				cursor: auto; !important;
			}
			.customButtonLast {
				margin-left : 0%;
			}
			a.tooltipC { outline:none; }
			a.tooltipC strong { line-height:15px; }
			a.tooltipC:hover { text-decoration:none; }
			a.tooltipC .sTooltip { position:relative; z-index:9999; display:none; padding:6px 6px; margin-top:-35px; margin-left:-120px; min-width:130px; height:auto; line-height:10px; }
			a.tooltipC:hover .sTooltip{ display:inline-block; position:absolute; border:2px solid #FFF; min-width:130px !important; height:auto; color:#EEE; background:#000; z-index:9999; }
			a.tooltipC .sTooltip { border-radius:5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; -moz-box-shadow: 0px 0px 2px 2px #666; -webkit-box-shadow: 0px 0px 2px 2px #666; box-shadow: 0px 0px 2px 2px #666; opacity: 0.9; }

            .ibox-title {
                -moz-border-bottom-colors: none;
                -moz-border-left-colors: none;
                -moz-border-right-colors: none;
                -moz-border-top-colors: none;
                background-color: #FFF;
                border-color: #E7EAEC #E7EAEC rgba(0, 0, 0, 1);
                border-image: none;
                border-style: none none dashed;
                border-width: 0px 0px 1px;
                color: inherit;
                margin-bottom: 0px;
                padding: 14px 15px 7px;
                height: 48px;
                margin-top: -30px; 
            }

            #icon_form {
                width: 90%;
                margin: 5%;
            }
            button.btn {
                margin-right: 5px;
            }
            .deleteIcon {
                color: red;
                cursor: pointer !important;
                font-size: 20px;
                position: absolute;;
                margin-left: -15px;
                margin-top: -5px;
            }
            .profile-sidebar-new {
                width: 250px !important;
            }
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
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div style="min-height:1005px" class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>User Profile
                                <small></small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">User</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <?php include('partials/profile_sidebar.php'); ?>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a aria-expanded="false" href="#tab_1_1" data-toggle="tab">Payment Withdraw</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab">Payment Request</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_3" data-toggle="tab">Create Payment Request</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_4" data-toggle="tab">Create Payment Process</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                        <div class="portlet box light bordered">
                                                            <div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
                                                                <div class="caption">
                                                                    <i class="fa fa-globe"></i>Show/Hide Columns
                                                                </div>
                                                                <div class="actions">
                                                                    <div class="btn-group btn-group-solid">
                                                                        <a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_2')"><i class="fa fa-print"></i><span>Print</span></a>
                                                                        <a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_2', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
                                                                        <a class="dt-button buttons-csv buttons-html5 btn red btn-outline" onClick ="$('#sample_2').tableExport({type:'png',escape:'false'});"><i class="fa fa-file-photo-o"></i><span>PNG</span></a>
                                                                        <a class="dt-button buttons-csv buttons-html5 btn purple btn-outline" onClick ="$('#sample_2').tableExport({type:'csv',escape:'false'});"><i class="fa fa-file-text"></i><span>CSV</span></a>
                                                                        <a class="dt-button buttons-pdf buttons-html5 btn green btn-outline"><i class="fa fa-file-pdf-o"></i><span>PDF</span></a>
                                                                        <a class="btn default" href="#" data-toggle="dropdown">
                                                                            <i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
                                                                        </a>
                                                                        <div id="sample_2_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                                                            <label><input type="checkbox" checked data-column="1">Process Name</label>
                                                                            <label><input type="checkbox" checked data-column="2">Withdraw Amount</label>
                                                                            <label><input type="checkbox" checked data-column="3">Requested DateTime</label>
                                                                            <label><input type="checkbox" checked data-column="4">Withdraw DateTime</label>
                                                                        </div>
                                                                        <a id="tFull" class="fullscreen fullscreen-recent dt-button buttons-csv buttons-html5 btn blue btn-outline"><i id="tFullIcon" class="fa fa-expand"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="portlet-body" class="portlet-body">
                                                                <table class="table table-striped table-bordered table-hover" id="sample_2">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            Process Name
                                                                        </th>
                                                                        <th>
                                                                            Withdraw Amount
                                                                        </th>
                                                                        <th>
                                                                            Requested DateTime
                                                                        </th>
                                                                        <th>
                                                                            Withdraw DateTime
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            bKash
                                                                        </td>
                                                                        <td>
                                                                            1000 ৳
                                                                        </td>
                                                                        <td>
                                                                            01-02-2016 12:11:36
                                                                        </td>
                                                                        <td>
                                                                            02-02-2016 12:11:36
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!-- END EXAMPLE TABLE PORTLET-->
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                        <div class="portlet box light bordered">
                                                            <div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
                                                                <div class="caption">
                                                                    <i class="fa fa-globe"></i>Show/Hide Columns
                                                                </div>
                                                                <div class="actions">
                                                                    <div class="btn-group btn-group-solid">
                                                                        <a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_3')"><i class="fa fa-print"></i><span>Print</span></a>
                                                                        <a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_3', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
                                                                        <a class="dt-button buttons-csv buttons-html5 btn red btn-outline" onClick ="$('#sample_3').tableExport({type:'png',escape:'false'});"><i class="fa fa-file-photo-o"></i><span>PNG</span></a>
                                                                        <a class="dt-button buttons-csv buttons-html5 btn purple btn-outline" onClick ="$('#sample_3').tableExport({type:'csv',escape:'false'});"><i class="fa fa-file-text"></i><span>CSV</span></a>
                                                                        <a class="dt-button buttons-pdf buttons-html5 btn green btn-outline"><i class="fa fa-file-pdf-o"></i><span>PDF</span></a>
                                                                        <a class="btn default" href="#" data-toggle="dropdown">
                                                                            <i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
                                                                        </a>
                                                                        <div id="sample_3_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                                                            <label><input type="checkbox" checked data-column="1">Process Name</label>
                                                                            <label><input type="checkbox" checked data-column="2">Requested Amount</label>
                                                                            <label><input type="checkbox" checked data-column="3">Requested DateTime</label>
                                                                            <label><input type="checkbox" checked data-column="4">Requested Status</label>
                                                                        </div>
                                                                        <a id="tFull" class="fullscreen fullscreen-recent dt-button buttons-csv buttons-html5 btn blue btn-outline"><i id="tFullIcon" class="fa fa-expand"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="portlet-body" class="portlet-body">
                                                                <table class="table table-striped table-bordered table-hover" id="sample_3">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            Process Name
                                                                        </th>
                                                                        <th>
                                                                            Requested Amount
                                                                        </th>
                                                                        <th>
                                                                            Requested DateTime
                                                                        </th>
                                                                        <th>
                                                                            Request Status
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            bKash
                                                                        </td>
                                                                        <td>
                                                                            1000 ৳
                                                                        </td>
                                                                        <td>
                                                                            01-02-2016 12:11:36
                                                                        </td>
                                                                        <td>
                                                                            Pending
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!-- END EXAMPLE TABLE PORTLET-->
                                                    </div>
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <!-- PORTLET MAIN -->
                                                                <div class="portlet light profile-sidebar-portlet bordered">
                                                                    <div class="ibox-title">
                                                                        <h5 id="titleBanner" style="font-weight:bold;">Add Payment Process</h5>
                                                                    </div>
                                                                    <form action="javascript:;" class="login-form" method="post" id="icon_form" role="form">
                                                                        <div class="row">
                                                                            <div class="form-group form-group-custom">
                                                                                <label class="control-label col-md-12">Select Process</label>
                                                                                <div class="col-md-12">
                                                                                    <select id="process_selected" name="process_select" class="bs-select form-control" data-show-subtext="true" data-live-search="true">
                                                                                        <option data-icon="fa-search icon-search" value="Select...">Select...</option>
                                                                                        <option data-icon="fa-bank icon-default" selected="selected" value="Banking">Banking</option>
                                                                                        <option data-icon="fa-mobile-phone icon-screen-smartphone" value="Mobile Banking">Mobile Banking</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div><br/><br/>
                                                                            <div id="selectedWaletInfo">
                                                                                <div class="form-group form-group-custom">
                                                                                    <label class="control-label col-md-12">Select Mobile Walet</label>
                                                                                    <div class="col-md-12">
                                                                                        <select name="mbanking_select" class="bs-select form-control" data-show-subtext="true" data-live-search="true">
                                                                                            <option data-icon="fa-search icon-search" value="Select...">Select...</option>
                                                                                            <option data-icon="fa-mobile-phone icon-screen-smartphone" value="bKash">bKash</option>
                                                                                            <option data-icon="fa-mobile-phone icon-screen-smartphone" value="mKash">mKash</option>
                                                                                            <option data-icon="fa-mobile-phone icon-screen-smartphone" value="DBBL">DBBL Mobile Walet</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-12 form-group-custom" id="password_here" style="margin-top:10px;">
                                                                                    <div class="form-group form-md-line-input">
                                                                                        <textarea class="form-control" name="mbanking_details" rows="3"></textarea>
                                                                                        <label for="form_control_1">Mobile Banking Details</label>
                                                                                        <span class="help-block">Type mobile banking details here...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="selectedBankInfo">
                                                                                <div class="form-group form-group-custom">
                                                                                    <label class="control-label col-md-12">Select Bank</label>
                                                                                    <div class="col-md-12">
                                                                                        <select name="banking_select" class="bs-select form-control" data-show-subtext="true" data-live-search="true">
                                                                                            <option data-icon="fa-search icon-search" value="Select...">Select...</option>
                                                                                            <option data-icon="fa-bank icon-default" selected="selected" value="Bangladesh Bank Limited">Bangladesh Bank Limited</option>
                                                                                            <option data-icon="fa-bank icon-default" value="Janata Bank Limited">Janata Bank Limited</option>
                                                                                            <option data-icon="fa-bank icon-default" value="National Bank Limited">National Bank Limited</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-12 form-group-custom" id="password_here" style="margin-top:10px;">
                                                                                    <div class="form-group form-md-line-input">
                                                                                        <textarea class="form-control" name="banking_details" rows="3"></textarea>
                                                                                        <label for="form_control_2">Banking Details</label>
                                                                                        <span class="help-block">Type banking details here...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-12" style="margin-top:10px;">
                                                                                <div class="form-group form-md-line-input form-md-floating-label" id="username_here_status">
                                                                                    <input class="form-control" name="email" autocomplete="off" value="" id="email" type="text">
                                                                                    <label for="email">Request Amount</label>
                                                                                    <span id="email_msg" class="help-block">Enter request amount here...</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12 text-right" style="margin-top:35px;">
                                                                                <button id="password_submit" class="btn blue" type="submit">Add Payment Request</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_4">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <!-- BEGIN PROFILE SIDEBAR -->
                                                                <div class="profile-sidebar profile-sidebar-new">
                                                                    <!-- PORTLET MAIN -->
                                                                    <div class="portlet light profile-sidebar-portlet bordered">
                                                                        <div class="ibox-title">
                                                                            <h5 id="titleBanner" style="font-weight:bold;">Add Payment Process</h5>
                                                                        </div>
                                                                        <form action="javascript:;" class="login-form" method="post" id="icon_form" role="form">
                                                                            <div class="row">
                                                                                <div class="form-group form-group-custom">
                                                                                    <label class="control-label col-md-12">Select Process</label>
                                                                                    <div class="col-md-12">
                                                                                        <select id="process_select" name="process_select" class="bs-select form-control" data-show-subtext="true" data-live-search="true">
                                                                                            <option data-icon="fa-search icon-search" value="Select...">Select...</option>
                                                                                            <option data-icon="fa-bank icon-default" value="Banking">Banking</option>
                                                                                            <option data-icon="fa-mobile-phone icon-screen-smartphone" value="Mobile Banking">Mobile Banking</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div><br/><br/>
                                                                                <div id="waletInfo">
                                                                                    <div class="form-group form-group-custom">
                                                                                        <label class="control-label col-md-12">Select Mobile Walet</label>
                                                                                        <div class="col-md-12">
                                                                                            <select name="mbanking_select" class="bs-select form-control" data-show-subtext="true" data-live-search="true">
                                                                                                <option data-icon="fa-search icon-search" value="Select...">Select...</option>
                                                                                                <option data-icon="fa-mobile-phone icon-screen-smartphone" value="bKash">bKash</option>
                                                                                                <option data-icon="fa-mobile-phone icon-screen-smartphone" value="mKash">mKash</option>
                                                                                                <option data-icon="fa-mobile-phone icon-screen-smartphone" value="DBBL">DBBL Mobile Walet</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12 form-group-custom" id="password_here" style="margin-top:10px;">
                                                                                        <div class="form-group form-md-line-input">
                                                                                            <textarea class="form-control" name="mbanking_details" rows="3"></textarea>
                                                                                            <label for="form_control_1">Mobile Banking Details</label>
                                                                                            <span class="help-block">Type mobile banking details here...</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12" style="margin-top:20px; margin-bottom:-30px;">
                                                                                        <div class="rem-password">
                                                                                            <p>
                                                                                                <input name="default_process" type="checkbox" class="rem-checkbox" /> <b>Default Process</b> 
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="bankInfo">
                                                                                    <div class="form-group form-group-custom">
                                                                                        <label class="control-label col-md-12">Select Bank</label>
                                                                                        <div class="col-md-12">
                                                                                            <select name="banking_select" class="bs-select form-control" data-show-subtext="true" data-live-search="true">
                                                                                                <option data-icon="fa-search icon-search" value="Select...">Select...</option>
                                                                                                <option data-icon="fa-bank icon-default" value="Bangladesh Bank Limited">Bangladesh Bank Limited</option>
                                                                                                <option data-icon="fa-bank icon-default" value="Janata Bank Limited">Janata Bank Limited</option>
                                                                                                <option data-icon="fa-bank icon-default" value="National Bank Limited">National Bank Limited</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12 form-group-custom" id="password_here" style="margin-top:10px;">
                                                                                        <div class="form-group form-md-line-input">
                                                                                            <textarea class="form-control" name="banking_details" rows="3"></textarea>
                                                                                            <label for="form_control_2">Banking Details</label>
                                                                                            <span class="help-block">Type banking details here...</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12" style="margin-top:20px; margin-bottom:-30px;">
                                                                                        <div class="rem-password">
                                                                                            <p>
                                                                                                <input name="default_process" type="checkbox" class="rem-checkbox" /> <b>Default Process</b>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 text-right" style="margin-top:35px;">
                                                                                    <button id="password_submit" class="btn blue" type="submit">Add Payment Process</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- END BEGIN PROFILE SIDEBAR -->
                                                                <!-- BEGIN PROFILE CONTENT -->
                                                                <div class="profile-content">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <!-- BEGIN PORTLET -->
                                                                            <div class="portlet light bordered">
                                                                                <div class="portlet-title">
                                                                                    <div class="caption caption-md">
                                                                                        <i class="icon-bar-chart theme-font hide"></i>
                                                                                        <span class="caption-subject font-blue-madison bold uppercase">List of Payment Process</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="portlet-body">
                                                                                    <div class="table-scrollable table-scrollable-borderless">
                                                                                        <button type="button" class="btn grey-cascade"><i class="fa fa-link"></i> Grey Cascade </button><i class="fa fa-times-circle-o deleteIcon"></i>
                                                                                            <button type="button" class="btn grey-cascade"><i class="fa fa-link"></i> Grey Cascade </button><i class="fa fa-times-circle-o deleteIcon"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- END PORTLET -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- END PROFILE CONTENT -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
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
            var base_link = "<?php echo base_url(); ?>";
            var baseId = <?php echo $this->session->userdata('id'); ?>;
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
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-bootpag/jquery.bootpag.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/holder.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-bootstrap-select.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/profile.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-general.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
		<!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/fileUpload.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/table-advanced.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/tableExport.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jquery.base64.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/html2canvas.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jspdf/jspdf.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jspdf/libs/sprintf.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jspdf/libs/base64.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->
        <script type="text/javascript">
            jQuery(document).ready(function() { 
               TableAdvanced.init();
            });

            $('#waletInfo').hide();
            $('#bankInfo').hide();
            $("#process_select").change(function() {
                if($(this).val() == 'Select...') {
                    $('#waletInfo').hide("slow");
                    $('#bankInfo').hide("slow");
                } else if($(this).val() == 'Banking') {
                    $('#waletInfo').hide("slow");
                    $('#bankInfo').show("slow");
                } else {
                    $('#waletInfo').show("slow");
                    $('#bankInfo').hide("slow");
                }
            });
                    
            function printData(tableName) {
               var divToPrint=document.getElementById(tableName);
               newWin= window.open("");
               newWin.document.write(divToPrint.outerHTML);
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

            $("#export").click(function(){
                $("table#sample_3").tableToCSV();
            });
        </script>
    </body>

</html>