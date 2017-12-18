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
        <title>Report | Accoventory .::.SaaS.::. Accounting & Inventory Software - SaaS</title>
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
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/inputs-ext/address/address.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/css/cubeportfolio.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/sweetalert.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/ad_a_note.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url(); ?>assets/pages/css/portfolio.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/overLay.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.png" /> 
        <style type="text/css">
			#select2-sample_333_length-e7-container, .select2-selection__rendered {
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
			.ibox { box-shadow: none; }
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
        	.select2-container--bootstrap .select2-selection { border-radius: 0px !important; border: none; border-bottom: 2px solid #36C6D3 !important; border-top: none !important; border-left: none !important;border-right: none !important; }
            .select2-container .select2-choice .select2-arrow { border-left: none ; }
            .table-scrollable .dropdown-menu { position: relative !important; }
            .btn-outline.yellish { border: 1px solid #555555 !important; color: #555555 !important; font-weight: bold }
            .yellish:hover i { color: red !important; }
            a { text-decoration: none !important; }
            .select2-container--bootstrap .trueError { border-bottom: 1px solid red !important; }
            .select2-container--bootstrap .trueWarning { border-bottom: 1px solid #C29D0C !important; }
            .select2-container--bootstrap .trueSuccess { border-bottom: 1px solid #27A4B0 !important; }
            /*.btn-outline.dark { border: 1px solid #000000 !important; }
            .btn-outline.yellow { border: 1px solid #C49F47 !important; }
            .btn-outline.green { border: 1px solid #32C5D2 !important; }
            .btn-outline.blue { border: 1px solid #3598DC !important; }
            .more.default { border: 1px solid #000 !important; }*/
            tr td:first-child, th:first-child { display: none !important; }
        </style>
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
            <div class="page-content-wrapper" style="margin-top: -10px;">
                <!-- BEGIN CONTENT BODY -->
                <div  id="js-grid-juicy-projects" style="display: none"></div>
                <div class="page-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row addInvoice" style="display: none;">
                        <div class="col-md-12">
                        	<div class="profile-content">
	                            <!-- BEGIN PORTLET -->
	                            <div class="portlet light bordered">
	                                <div class="portlet-title">
	                                    <div class="caption caption-md">
	                                        <i class="icon-bar-chart theme-font hide"></i>
	                                        <span class="caption-subject font-blue-madison bold" style="color: #9A12B3 !important;">Get Your Customize Report</span>
	                                        <span class="caption-helper hide">weekly stats...</span>
	                                    </div>
                                        <div style="float: right;">
                                            <a class="btn green-haze btn-sm invoiceListVisible"><i class="fa fa-list"></i> Report List </a>
                                            <a href="javascript:;" class="btn default btn-sm invoiceListVisible"><i class="fa fa-times"></i> Cancel </a>
                                        </div>
                                    </div>
	                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
	                                <div class="portlet box light bordered">
										<div id="portlet-body" class="portlet-body">
											<form id="addInvoice" role="form" action="#">
												<div class="row">                                               
	                                                <div class="col-md-4">
	                                                    <br/>
	                                                    <label class="control-label col-md-12">Report Date Range <span aria-required="true" class="required"> * </span></label>
	                                                    <div class="col-md-12">
	                                                        <div id="reportrange" class="btn btn-primary">
																<i class="fa fa-calendar"></i>
																&nbsp; <span>
																</span>
																<b class="fa fa-angle-down" style="margin-left: 15px;"></b>
															</div>
	                                                        <!-- /input-group -->
	                                                        <span class="help-block"> Date range for your customize report. </span>
	                                                    </div>
	                                                </div>
	                                                <div class="col-md-4" style="margin-top: 45px">
	                                                    <div id="reportTypeDiv" class="col-sm-12">
	                                                        <select title="" aria-hidden="true" id="reportType" name="date_format" class="form-control select2">
	                                                            <option value="---">Select Report Type</option>
                                                                <option value="Activities">Activities</option>
                                                                <option value="Balance Sheet">Balance Sheet</option>
                                                                <option value="Bank & Cash">Bank & Cash</option>
                                                                <option value="Expense - Category">Expense - Category</option>
                                                                <option value="Expense - User">Expense - User</option>
                                                                <option value="Expense - Vendor">Expense - Vendor</option>
                                                                <option value="Income - Category">Income - Category</option>
                                                                <option value="Income - Customer">Income - Customer</option>
                                                                <option value="Income - User">Income - User</option>
                                                                <option value="Income Statement">Income Statement</option>
                                                                <option value="Purchase Statement">Purchase Statement</option>
                                                                <option value="Sales Statement">Sales Statement</option>
                                                                <option value="Sales Tax">Sales Tax</option>
                                                                <option value="Short List">Short List</option>
                                                                <option value="Stock Balance">Stock Balance</option>
                                                                <option value="Transactions">Transactions</option>
	                                                        </select>
	                                                    </div>
	                                                </div>
                                                    <div class="col-md-4 chooseType" style="margin-top: 45px; display: none;">
                                                        <div class="col-sm-12">
                                                            <select title="" aria-hidden="true" id="type" name="type" class="form-control select2">
                                                                <option value="0">Daily</option>
                                                                <option value="1">Custom</option>
                                                            </select>
                                                        </div>
                                                    </div>
	                                                <div class="col-md-4 chooseTeam" style="margin-top: 45px; display: none;">
	                                                    <div class="col-sm-12">
	                                                        <select title="" aria-hidden="true" id="team" name="team" class="form-control select2">
	                                                            <option value="0">All Member</option>
                                                                <?php foreach ($listTeams as $listTeam) { ?>
                                                                    <option value="<?php echo $listTeam->id; ?>"><?php echo $listTeam->name; ?></option>
                                                                <?php } ?>
	                                                        </select>
	                                                    </div>
	                                                </div>
	                                                <div class="col-md-4 chooseCustomer" style="margin-top: 45px; display: none;">
	                                                    <div class="col-sm-12">
	                                                        <select title="" aria-hidden="true" id="customer" name="customer" class="form-control select2">
	                                                            <option value="0">All Customer</option>
                                                                <?php foreach ($listCustomers as $listCustomer) { ?>
                                                                    <option value="<?php echo $listCustomer->id; ?>"><?php echo $listCustomer->name; ?></option>
                                                                <?php } ?>
	                                                        </select>
	                                                    </div>
	                                                </div>
                                                    <div class="col-md-4 chooseVendor" style="margin-top: 45px; display: none;">
                                                        <div class="col-sm-12">
                                                            <select title="" aria-hidden="true" id="vendor" name="vendor" class="form-control select2">
                                                                <option value="0">All Vendor</option>
                                                                <?php foreach ($listVendors as $listVendor) { ?>
                                                                    <option value="<?php echo $listVendor->id; ?>"><?php echo $listVendor->name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 chooseIncomeCategory" style="margin-top: 45px; display: none;">
                                                        <div class="col-sm-12">
                                                            <select title="" aria-hidden="true" id="incomeCategory" name="incomeCategory" class="form-control select2">
                                                                <option value="0">All Income</option>
                                                                <?php foreach ($listIncomes as $listIncome) { ?>
                                                                    <option value="<?php echo $listIncome->id; ?>"><?php echo $listIncome->name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 chooseExpenseCategory" style="margin-top: 45px; display: none;">
                                                        <div class="col-sm-12">
                                                            <select title="" aria-hidden="true" id="expenseCategory" name="expenseCategory" class="form-control select2">
                                                                <option value="0">All Expense</option>
                                                                <?php foreach ($listExpenses as $listExpense) { ?>
                                                                    <option value="<?php echo $listExpense->id; ?>"><?php echo $listExpense->name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 chooseCategory" style="margin-top: 45px; display: none;">
                                                        <div class="col-sm-12">
                                                            <select title="" aria-hidden="true" id="category" name="category" class="form-control select2">
                                                                <option value="0">All Category</option>
                                                                <?php foreach ($listCategories as $listCategory) { ?>
                                                                    <option value="<?php echo $listCategory->id; ?>"><?php echo $listCategory->name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
	                                                <div class="col-md-12 margiv-top-10" style="margin: 15px;"><br/>
                                                        <input id="reportDateOriginal" type="hidden" name="reportDateOriginal" value="" />
                                                        <input id="reportDate" type="hidden" name="reportDate" value="" />
                                                        <input id="specification" type="hidden" name="specification" value="" />
                                                        <input id="reportCode" type="hidden" name="reportCode" value="" />
                                                        <input id="reportSystemCode" type="hidden" name="reportSystemCode" value="" />
                                                        <a id="faSave" href="javascript:;" class="btn green"><i class="fa fa-save"></i> Generate </a>
	                                                    <a href="javascript:;" class="btn default invoiceListVisible"><i class="fa fa-times"></i> Cancel </a>
	                                                </div>
		                                        </div>
		                                    </form>
										</div>
									</div>
									<!-- END EXAMPLE TABLE PORTLET-->
	                            </div>
	                            <!-- END PORTLET -->
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row InvoiceList">
                        <div class="col-md-12">
                        	<div class="profile-content">
	                            <!-- BEGIN PORTLET -->
	                            <div class="portlet light bordered">
	                                <div class="portlet-title">
	                                	<a id="remove30" class="dt-button btn btn-outline yellish btn-sm"><i class="glyphicon glyphicon-trash"></i> Clear List Without Last 3 Days</a>
	                                	<a class="btn green-haze btn-sm invoiceAddVisible" style="float: right;"><i class="fa fa-plus"></i> Generate Report </a>
	                                </div>
	                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
									<div class="portlet box light bordered">
										<div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
											<div class="caption">
												<i class="fa fa-th-list" style="color: #9A12B3;"></i><span class="caption-subject font-blue-madison bold" style="color: #9A12B3 !important;">Generated Report List</span>
											</div>
											<div class="actions">
												<div class="btn-group btn-group-solid">
													<a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_333', 'Report List')"><i class="fa fa-print"></i><span>Print</span></a>
													<a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_333', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
													<a class="btn more default" href="#" data-toggle="dropdown">
														<i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
													</a>
													<div id="sample_333_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
														<label><input type="checkbox" checked data-column="1">Date Range</label>
														<label><input type="checkbox" checked data-column="2">Report ID</label>
														<label><input type="checkbox" checked data-column="3">Type</label>
														<label><input type="checkbox" checked data-column="4">View</label>
														<label><input type="checkbox" checked data-column="5">Print</label>
														<label><input type="checkbox" checked data-column="6">Archive</label>
														<label><input type="checkbox" data-column="7">Created By</label>
														<label><input type="checkbox" data-column="8">Entry Date</label>
													</div>
													<a id="tFull" class="fullscreen fullscreen-recent dt-button buttons-csv buttons-html5 btn blue btn-outline"><i id="tFullIcon" class="fa fa-expand"></i></a>
												</div>
											</div>
										</div>
										<div id="portlet-body" class="portlet-body">
											<table class="table table-striped table-bordered table-hover dt-responsive" id="sample_333">
												<thead>
													<tr>
														<th>
															Date Range
														</th>
														<th>
															Report ID
														</th>
														<th>
															Type
														</th>
                                                        <th>
                                                            Specification
                                                        </th>
														<th>
															View
														</th>
														<th>
															Print
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
                                                    <?php foreach ($listReports as $listReport) { ?>
                                                    	<tr id="report<?php echo $listReport->id; ?>">
    														<td>
                                                                <a href="<?php echo base_url(); ?>report/details/<?php echo $listReport->id; ?>" target="_blank">
        															<span class="label label-sm label-primary" style="font-size: 10.5px;">
                                                                        <?php echo date("F m Y", strtotime($listReport->startDate)); ?> - <?php echo date("F m Y", strtotime($listReport->endDate)); ?> 
                                                                    </span>
                                                                </a>
    														</td>
    														<td><?php echo $listReport->reportId; ?></td>
    														<td>
    															<?php
                                                                    if($listReport->type == 'Activities') {
                                                                        echo '<span class="label label-sm" style="background: #E06666"> Activities </span>';
                                                                    } else if($listReport->type == 'Short List') {
                                                                        echo '<span class="label label-sm" style="background: #A64D79"> Short List </span>';
                                                                    } else if($listReport->type == 'Bank & Cash') {
                                                                        echo '<span class="label label-sm" style="background: #4A86E8"> Bank & Cash </span>';
                                                                    } else if($listReport->type == 'Expense - Category') {
                                                                        echo '<span class="label label-sm" style="background: #FF0000"> Expense </span>';
                                                                    } else if($listReport->type == 'Expense - User') {
                                                                        echo '<span class="label label-sm" style="background: #FF0000"> Expense </span>';
                                                                    } else if($listReport->type == 'Expense - Vendor') {
                                                                        echo '<span class="label label-sm" style="background: #FF0000"> Expense </span>';
                                                                    } else if($listReport->type == 'Income - Category') {
                                                                        echo '<span class="label label-sm" style="background: #26C281"> Income  </span>';
                                                                    } else if($listReport->type == 'Income - Customer') {
                                                                        echo '<span class="label label-sm" style="background: #26C281"> Income  </span>';
                                                                    } else if($listReport->type == 'Income - User') {
                                                                        echo '<span class="label label-sm" style="background: #26C281"> Income  </span>';
                                                                    } else if($listReport->type == 'Balance Sheet') {
                                                                        echo '<span class="label label-sm" style="background: #980000"> Balance Sheet </span>';
                                                                    } else if($listReport->type == 'Income Statement') {
                                                                        echo '<span class="label label-sm" style="background: green"> Income Statement </span>';
                                                                    } else if($listReport->type == 'Sales Tax') {
                                                                        echo '<span class="label label-sm" style="background: #CC4125"> Sales Tax </span>';
                                                                    } else if($listReport->type == 'Stock Balance') {
                                                                        echo '<span class="label label-sm" style="background: #0B5394"> Stock Balance </span>';
                                                                    } else if($listReport->type == 'Purchase Statement') {
                                                                        echo '<span class="label label-sm" style="background: #0B5394"> Purchase Statement </span>';
                                                                    } else if($listReport->type == 'Sales Statement') {
                                                                        echo '<span class="label label-sm" style="background: #0B5394"> Sales Statement </span>';
                                                                    } else {
                                                                        echo '<span class="label label-sm" style="background: #45818E"> Transactions </span>';
                                                                    }
                                                                ?>
    														</td>
                                                            <td>
                                                                <?php
                                                                    if($listReport->userId != 0) { 
                                                                        echo $listReport->userName; 
                                                                    } else {                                                                         
                                                                        if(!is_numeric($listReport->userName)) { echo "All "; } else if($listReport->userName === '0') { echo 'Daily'; } else { echo 'Custom'; }
                                                                    }
                                                                ?>
                                                            </td>
    														<td>
                                                                <?php 
                                                                    if($listReport->isView == 1) { 
                                                                        echo '<span class="label label-sm label-success"> Yes </span>';
                                                                    } else {
                                                                        echo '<span class="label label-sm label-warning"> No </span>';
                                                                    }
                                                                ?>
    														</td>
    														<td>
    															<?php 
                                                                    if($listReport->isPrint == 1) { 
                                                                        echo '<span class="label label-sm label-success"> Yes </span>';
                                                                    } else {
                                                                        echo '<span class="label label-sm label-warning"> No </span>';
                                                                    }
                                                                ?>
    														</td>
    														<td>
    															<?php $team = $this->data_model->get_specific_column("name", array("id" => $listReport->createdBy), "list_team"); echo $team[0]->name; ?>
    														</td>
    														<td>
    															<?php echo $listReport->createdDateTime; ?>
    														</td>
    														<td style="display: none;">
    															<div class="col-md-12 col-sm-12">
    																<div class="portlet">
    																	<div class="portlet-body" id="chats">																			
    																		<div class="ibox float-e-margins ui-sortable">
    																			<div style="position: static;" class="ibox-content" id="ibox_form">
    																				<div id="sysfrm_ajaxrender">
    																				<section class="activity-post mb-xlg">
    																					<form id="marking-form" method="get" action="/">
    																						<textarea name="message-text" id="msg" data-plugin-textarea-autosize="" placeholder="Add a note..." rows="1" style="overflow: hidden; word-wrap: break-word; resize: none; height: 50px;"></textarea>
    																						<input id="activity-type" value="fa-hourglass" type="hidden">
    																						<input id="activity-id_user" value="<?php echo $this->uri->segment(3); ?>" type="hidden">
    																					</form>
    																					<div class="compose-box-footer">
    																						<ul class="compose-toolbar">
    																							<li id="fa-hourglass" onClick="iconChange('fa-hourglass');" class="clickable"><a><i class="fa fa-hourglass"></i></a></li>
    																							<li id="fa-hourglass-start" onClick="iconChange('fa-hourglass-start');" class="clickable"><a><i class="fa fa-hourglass-start"></i></a></li>
    																							<li id="fa-hourglass-o" onClick="iconChange('fa-hourglass-o');" class="clickable"><a><i class="fa fa-hourglass-o"></i></a></li>
    																							<li id="fa-balance-scale" onClick="iconChange('fa-balance-scale');" class="clickable"><a><i class="fa fa-balance-scale"></i></a></li>
    																							<li id="fa-adjust" onClick="iconChange('fa-adjust');" class="clickable"><a><i class="fa fa-adjust"></i></a></li>
    																							<li id="fa-certificate" onClick="iconChange('fa-certificate');" class="clickable"><a><i class="fa fa-certificate"></i></a></li>
    																							<li id="fa-check" onClick="iconChange('fa-check');" class="clickable"><a><i class="fa fa-check"></i></a></li>
    																							<li id="fa-times" onClick="iconChange('fa-times');" class="clickable"><a><i class="fa fa-times"></i></a></li>
    																							<li id="fa-exchange" onClick="iconChange('fa-exchange');" class="clickable"><a><i class="fa fa-exchange"></i></a></li>
    																							<li id="fa-cog" onClick="iconChange('fa-cog');" class="clickable"><a><i class="fa fa-cog"></i></a></li>
    																						</ul>
    																						<ul class="compose-btn">
    																							<li>
    																								<a class="btn btn-success btn-xs" id="acf-post"><i class="fa fa-edit"></i> Add Note</a>
    																							</li>
    																						</ul>
    																					</div>
    																					</section>
    																					<div style="margin-top:20px !important;" class="mt-lg"> </div>
    																						<div id="all_timeline_div" class="myScroller" data-always-visible="1" data-rail-visible1="1">
    																							<div id="timeline-item_id_1" class="timeline-item">
    																								<div class="row">
    																									<div class="col-xs-3 date">
    																										<img class="avatar" alt="" src="<?php echo base_url(); ?>assets/uploadedFile/profilePicture/avatar1.jpg" />
    																										<span class="sdate"><b>17-03-16</b></span>
    																										<br>
    																										<small class="text-navy"><span class="mmnt">2 W ago</span></small>
    																									</div>
    																									<div class="col-xs-10 content no-top-border">
    																										<i class="fa fa-cog iconMark"></i>
    																										<a onclick="editMark('1');" class="btn btn-warning editCustom btn-xs"><i class="fa fa-edit"></i> Edit</a> 
    																										<a onclick="deleteMark('1');" class="btn btn-danger deleteCustom btn-xs"><i class="fa fa-trash"></i> Delete</a> 
    																										<p class="m-b-xs"><strong>Md. Arif Dewan</strong></p>
    																										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
    																									</div>
    																								</div>
    																							</div>
    																							<div id="timeline-item_id_2" class="timeline-item">
    																								<div class="row">
    																									<div class="col-xs-3 date">
    																										<img class="avatar" alt="" src="<?php echo base_url(); ?>assets/uploadedFile/profilePicture/avatar2.jpg" />
    																										<span class="sdate"><b>17-03-16</b></span>
    																										<br>
    																										<small class="text-navy"><span class="mmnt">2 W ago</span></small>
    																									</div>
    																									<div class="col-xs-10 content no-top-border">
    																										<i class="fa fa-cog iconMark"></i>
    																										<a onclick="editMark('1');" class="btn btn-warning editCustom btn-xs"><i class="fa fa-edit"></i> Edit</a> 
    																										<a onclick="deleteMark('2');" class="btn btn-danger deleteCustom btn-xs"><i class="fa fa-trash"></i> Delete</a> 
    																										<p class="m-b-xs"><strong>Easmin</strong></p>
    																										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
    																									</div>
    																								</div>
    																							</div>
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
            var userId = <?php echo $this->session->userdata('id'); ?>;
            var userNameFull = '<?php echo $this->session->userdata('userNameFull'); ?>';
            var currentpurchase = '';
            var totalPurchase = "<?php echo $totalPurchase; ?>";
            var currentActivity = '';
            var totalActivity =  "<?php echo $totalActivity; ?>";
        	var customURL = '';
            var currentdate = new Date();
            var getDateTime = currentdate.getFullYear() + "-"
                            + (currentdate.getMonth()+1)  + "-" 
                            + currentdate.getDate() + " "  
                            + (currentdate.getHours() % 12 || 12) + ":"  
                            + currentdate.getMinutes() + ":" 
                            + currentdate.getSeconds();
            var fiscal = (currentdate.getMonth()+1)  + "/" 
                        + currentdate.getDate();
            var settingsFiscal = '<?php echo $basicSettings[0]->fiscalYearEnd; ?>';
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
        <script src="<?php echo base_url(); ?>assets/global/plugins/moment-with-locales.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.mockjax.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/inputs-ext/address/address.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
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
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/table-advanced.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-select2.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-date-time-pickers.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->
        <script>
            $('<audio id="chatAudio"><source src="'+base_link+'assets/uploadedFile/sound/notify.ogg" type="audio/ogg"><source src="'+base_link+'assets/uploadedFile/sound/notify.mp3" type="audio/mpeg"><source src="'+base_link+'assets/uploadedFile/sound/notify.wav" type="audio/wav"></audio>').appendTo('body');
            function setLoadingImage() {
                var loadingImageCollection = ['loading16.gif'];
                var loadingImage = Math.floor(Math.random()*loadingImageCollection.length);
                var ImgSrc = base_link+"assets/uploadedFile/animation/"+loadingImageCollection[loadingImage];
                $('#loading').attr("src", ImgSrc);
            } 
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
            function purchaseListId() {
                if(totalPurchase < 10) {
                    currentpurchase = "00000"+(++totalPurchase);
                } else if(totalPurchase < 100) {
                    currentpurchase = "0000"+(++totalPurchase);                
                } else if(totalPurchase < 1000) {
                    currentpurchase = "000"+(++totalPurchase);                
                } else if(totalPurchase < 10000) {
                    currentpurchase = "00"+(++totalPurchase);                
                } else if(totalPurchase < 100000) {
                    currentpurchase = "0"+(++totalPurchase);                
                }
                $("#reportCode").val("bcre"+(currentpurchase));
                $("#reportSystemCode").val("bcsy"+(currentpurchase));
            }
            purchaseListId();
            $('.invoiceListVisible').live('click', function(e) {
                $('.addInvoice').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                $('#addInvoice').trigger("reset");
                $('.chooseCustomer').slideUp("slow");
                $('.chooseVendor').slideUp("slow");
                $('.chooseTeam').slideUp("slow");
                $('.chooseIncomeCategory').slideUp("slow");
                $('.chooseExpenseCategory').slideUp("slow");
                $('.chooseCategory').slideUp("slow"); 
                $('#reportType').select2('val', '---');
                $('#addInvoice')[0].reset();
                $("html, body").animate({ scrollTop: '0px' }, "slow");
            });
            $('.invoiceAddVisible').live('click', function(e) {
                $('.addInvoice').stop(true, true).fadeIn({ duration: 1500, queue: false }).css('display', 'none').slideDown(1500);    
                $("html, body").animate({ scrollTop: '0px' }, "slow");
            });
			jQuery(document).ready(function() { 
			    TableAdvanced.init();
			    var table = $('#sample_333').DataTable();     
			    $('#tTable').on( 'click', function () {
			        swal("Sum of Engine Version in this Table", table.column( 4 ).data().sum().toFixed(2));
			    });			 
			    $('#cPage').on( 'click', function () {
			    	swal("Sum of Engine Version in this Page", table.column( 4, {page:'current'} ).data().sum().toFixed(2));
			    });
                $("#addInvoice").on('change', '#type', function (e) {  
                    var selectedId = $(this).val();      
                    $('#specification').val(selectedId);
                });
                $("#addInvoice").on('change', '#team', function (e) {  
                    var selectedId = $(this).val();      
                    $.ajax({
                        url: base_link+'report/getTeamInfo',
                        type: 'POST',
                        data: 'id='+$(this).val(),
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
                            $('#specification').val(r.name);
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
                });
                $("#addInvoice").on('change', '#customer', function (e) {  
                    var selectedId = $(this).val();      
                    $.ajax({
                        url: base_link+'report/getCustomerInfo',
                        type: 'POST',
                        data: 'id='+$(this).val(),
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
                            $('#specification').val(r.name);
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
                });
                $("#addInvoice").on('change', '#vendor', function (e) {  
                    var selectedId = $(this).val();      
                    $.ajax({
                        url: base_link+'report/getVendorInfo',
                        type: 'POST',
                        data: 'id='+$(this).val(),
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
                            $('#specification').val(r.name);
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
                });
                $("#addInvoice").on('change', '#incomeCategory', function (e) {  
                    var selectedId = $(this).val();      
                    $.ajax({
                        url: base_link+'report/getInComeCategoryInfo',
                        type: 'POST',
                        data: 'id='+$(this).val(),
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
                            $('#specification').val(r.name);
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
                });
                $("#addInvoice").on('change', '#expenseCategory', function (e) {  
                    var selectedId = $(this).val();      
                    $.ajax({
                        url: base_link+'report/getExpenseCategoryInfo',
                        type: 'POST',
                        data: 'id='+$(this).val(),
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
                            $('#specification').val(r.name);
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
                });
                $("#addInvoice").on('change', '#category', function (e) {  
                    var selectedId = $(this).val();      
                    $.ajax({
                        url: base_link+'report/getCategoryInfo',
                        type: 'POST',
                        data: 'id='+$(this).val(),
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
                            $('#specification').val(r.name);
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
                });
			});
			var counter = 1;					
			function printData(tableName, heading) {
               var divToPrint=document.getElementById(tableName);
               newWin= window.open("");
               newWin.document.write(divToPrint.outerHTML);
               newWin.document.write("<title>"+heading+"</title>");
               newWin.print();
               newWin.close();
            }

			function returnAccess() {}
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
			$(function() {
		        $(".ui-sortable").sortable({ 
		        	opacity: 0.5, cursor: 'move', update: function() {
		            var order = $(this).sortable("serialize") + '&action=update'; 
		            console.log("Yes");
						/*
						$.ajax({
							type: 'post',
							url: base_link+"preReportion/reorder_style_post",
							data: order,
							cache: false,
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
											toastr.success(" New Remark created for task.", "New Remark");
										}, 1000);
									}, 500);
									var acTitle = "Remark new added";
									var acType = "fa-edit";
									var acLabel = "label-success";
									$.ajax({
										url: base_link+'recent_activity/add_activity/',
										data: 'title='+ acTitle+'&type='+ acType +'&label='+ acLabel+'&userId='+ baseId,
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
											toastr.info("ser added now.", "Recent Activity Added");  
										}, 
										error: function(jqXHR, exception) {
											if (jqXHR.status === 0) {
												alert('Not connect.\n Verify Network.');
											} else if (jqXHR.status == 404) {
												alert('Requested page not found. [404]');
											} else if (jqXHR.status == 500) {
												alert('Internal Server Error [500].');
											} else if (exception === 'parsererror') {
												alert('Requested JSON parse failed.');
											} else if (exception === 'timeout') {
												alert('Time out error.');
											} else if (exception === 'abort') {
												alert('Ajax request aborted.');
											} else {
												alert('Uncaught Error.\n' + jqXHR.responseText);
											}
										}
									});
								}
							}
						});
						*/
		        	}
		        });
		    });
			$("#reportType").live('change', function(){
				if(this.value == "Income - User"){
					$('.chooseTeam').css("display", "none");
                    $('.chooseCategory').css("display", "none");
					$('.chooseVendor').css("display", "none");
                    $('.chooseIncomeCategory').css("display", "none");
                    $('.chooseExpenseCategory').css("display", "none");
                    $('.chooseType').css("display", "none");
					$('.chooseCustomer').slideDown("slow");
				} else if(this.value == "Income - Category"){
                    $('.chooseCustomer').css("display", "none");
                    $('.chooseTeam').css("display", "none");
                    $('.chooseVendor').css("display", "none");
                    $('.chooseExpenseCategory').css("display", "none"); 
                    $('.chooseCategory').css("display", "none");                    
                    $('.chooseType').css("display", "none");
                    $('.chooseIncomeCategory').slideDown("slow"); 
                } else if(this.value == "Income - Customer"){
                    $('.chooseTeam').css("display", "none");
                    $('.chooseCategory').css("display", "none");
                    $('.chooseVendor').css("display", "none");
                    $('.chooseIncomeCategory').css("display", "none");
                    $('.chooseExpenseCategory').css("display", "none");
                    $('.chooseType').css("display", "none");
                    $('.chooseCustomer').slideDown("slow"); 
                } else if(this.value == "Expense - User"){
                    $('.chooseVendor').css("display", "none");
                    $('.chooseIncomeCategory').css("display", "none");
                    $('.chooseExpenseCategory').css("display", "none");
                    $('.chooseCustomer').css("display", "none");
                    $('.chooseCategory').css("display", "none");
                    $('.chooseType').css("display", "none");
                    $('.chooseTeam').slideDown("slow");
                } else if(this.value == "Expense - Vendor"){
                    $('.chooseTeam').css("display", "none");
                    $('.chooseIncomeCategory').css("display", "none");
                    $('.chooseExpenseCategory').css("display", "none");
                    $('.chooseCustomer').css("display", "none");
                    $('.chooseCategory').css("display", "none");
                    $('.chooseType').css("display", "none");
                    $('.chooseVendor').slideDown("slow");
                } else if(this.value == "Expense - Category"){
                    $('.chooseCustomer').css("display", "none");
                    $('.chooseTeam').css("display", "none");
                    $('.chooseVendor').css("display", "none");
                    $('.chooseIncomeCategory').css("display", "none");
                    $('.chooseCategory').css("display", "none");
                    $('.chooseType').css("display", "none");
                    $('.chooseExpenseCategory').slideDown("slow");                         
                } else if(this.value == "Short List") {
                    $('.chooseCustomer').css("display", "none");
                    $('.chooseVendor').css("display", "none");
                    $('.chooseExpenseCategory').css("display", "none");
                    $('.chooseIncomeCategory').css("display", "none");
                    $('.chooseTeam').css("display", "none");
                    $('.chooseType').css("display", "none");
                    $('.chooseCategory').slideDown("slow"); 
                } else if(this.value == "Stock Balance") {
                    $('.chooseCustomer').css("display", "none");
                    $('.chooseVendor').css("display", "none");
                    $('.chooseExpenseCategory').css("display", "none");
                    $('.chooseIncomeCategory').css("display", "none");
                    $('.chooseTeam').css("display", "none");
                    $('.chooseType').css("display", "none");
                    $('.chooseCategory').slideDown("slow"); 
                } else if(this.value == "Activities") {
                    $('.chooseCustomer').css("display", "none");
                    $('.chooseVendor').css("display", "none");
                    $('.chooseExpenseCategory').css("display", "none");
                    $('.chooseIncomeCategory').css("display", "none");
                    $('.chooseCategory').css("display", "none");
                    $('.chooseType').css("display", "none");
                    $('.chooseTeam').slideDown("slow"); 
                } else if(this.value == "Purchase Statement") {
                    $('.chooseCustomer').css("display", "none");
                    $('.chooseVendor').css("display", "none");
                    $('.chooseExpenseCategory').css("display", "none");
                    $('.chooseIncomeCategory').css("display", "none");
                    $('.chooseCategory').css("display", "none");
                    $('.chooseTeam').css("display", "none");
                    $('#specification').val(0);
                    $('.chooseType').slideDown("slow"); 
                } else if(this.value == "Sales Statement") {
                    $('.chooseCustomer').css("display", "none");
                    $('.chooseVendor').css("display", "none");
                    $('.chooseExpenseCategory').css("display", "none");
                    $('.chooseIncomeCategory').css("display", "none");
                    $('.chooseCategory').css("display", "none");
                    $('.chooseTeam').css("display", "none");
                    $('#specification').val(0);
                    $('.chooseType').slideDown("slow"); 
                } else {
					$('.chooseCustomer').slideUp("slow");
					$('.chooseVendor').slideUp("slow");
                    $('.chooseTeam').slideUp("slow");
                    $('.chooseIncomeCategory').slideUp("slow");
                    $('.chooseExpenseCategory').slideUp("slow");
                    $('.chooseCategory').slideUp("slow"); 
                    $('.chooseType').css("display", "none");
				}
			});
            $('#faSave').live('click', function(e) {
                var error = false;
                var type = '';
                var specification = '';
                if ($('#reportType').val() == '---') {
                    $('#reportTypeDiv').find('.select2-selection').removeClass('trueSuccess');
                    $('#reportTypeDiv').find('.select2-selection').addClass('trueError');
                    error = true;
                } else {
                    $('#reportTypeDiv').find('.select2-selection').removeClass('trueError');
                    $('#reportTypeDiv').find('.select2-selection').addClass('trueSuccess');
                    if($('#reportType').val() == 'Activities') {
                        type = '<span class="label label-sm" style="background: #E06666"> Activities </span>';
                    } else if($('#reportType').val() == 'Short List') {
                        type = '<span class="label label-sm" style="background: #A64D79"> Short List </span>';
                    } else if($('#reportType').val() == 'Bank & Cash') {
                        type = '<span class="label label-sm" style="background: #4A86E8"> Bank & Cash </span>';
                    } else if($('#reportType').val() == 'Expense - Category') {
                        type = '<span class="label label-sm" style="background: #9900FF"> Expense </span>';
                    } else if($('#reportType').val() == 'Expense - User') {
                        type = '<span class="label label-sm" style="background: #9900FF"> Expense </span>';
                    } else if($('#reportType').val() == 'Expense - Vendor') {
                        type = '<span class="label label-sm" style="background: #9900FF"> Expense </span>';
                    } else if($('#reportType').val() == 'Income - Category') {
                        type = '<span class="label label-sm" style="background: #E06666"> Income  </span>';
                    } else if($('#reportType').val() == 'Income - Customer') {
                        type = '<span class="label label-sm" style="background: #E06666"> Income  </span>';
                    } else if($('#reportType').val() == 'Income - User') {
                        type = '<span class="label label-sm" style="background: #E06666"> Income  </span>';
                    } else if($('#reportType').val() == 'Balance Sheet') {
                        if(fiscal == settingsFiscal) {
                            type = '<span class="label label-sm" style="background: #980000"> Balance Sheet </span>';
                        } else {
                            swal({
                                title: "<span style=\"color:gray\"><?php echo $basicSettings[0]->fiscalYearEnd; ?></span>",
                                text: "Fiscal doesn't match. Please system financial settings.",
                                timer: 3000,
                                html:true,
                                type: 'error',
                                showConfirmButton: false
                            });
                            $('.addInvoice').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                            $('#addInvoice').trigger("reset");
                            $('#reportType').select2('val', '---');
                            error = true;
                        }
                    } else if($('#reportType').val() == 'Income Statement') {
                        type = '<span class="label label-sm" style="background: green"> Income Statement </span>';
                    } else if($('#reportType').val() == 'Sales Tax') {
                        type = '<span class="label label-sm" style="background: #CC4125"> Sales Tax </span>';
                    } else if($('#reportType').val() == 'Stock Balance') {
                        type = '<span class="label label-sm" style="background: #0B5394"> Stock Balance </span>';
                    } else {
                        type = '<span class="label label-sm" style="background: #45818E"> Transactions </span>';
                    }
                }

                if($('#specification').val() == '') {
                    specification = 'All';
                } else {
                    specification = $('#specification').val();
                }

                if(!error) {
                    $.ajax({
                        url: base_link+'report/addReport',
                        type: 'POST',
                        data: $('#addInvoice').serialize(),
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
                                        toastr.success(" You successfully added new report ", "Add Report");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=report'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=product/viewBill/'+totalPurchase,
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
                                        toastr.info("", "Recent activity recorded");
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
                                    $('#sample_333').dataTable().fnAddData( 
                                        [ 
                                            '<span class="row-details row-details-close"></span>',
                                            '<a href="'+base_link+'report/details/'+r.id+'" target="_blank">'+
                                                '<span class="label label-sm label-primary" style="font-size: 10.5px;">'+
                                                    ''+$('#reportDateOriginal').val()+''+
                                                '</span>'+
                                            '</a>',
                                            $('#reportCode').val(),
                                            type,
                                            specification,
                                            '<span class="label label-sm label-warning"> No </span>',
                                            '<span class="label label-sm label-warning"> No </span>',
                                            userNameFull,
                                            getDateTime,
                                            '<div class="col-md-12 col-sm-12">'+
                                                '<div class="portlet">'+
                                                    '<div class="portlet-body" id="chats">                                                                           '+
                                                        '<div class="ibox float-e-margins ui-sortable">'+
                                                            '<div style="position: static;" class="ibox-content" id="ibox_form">'+
                                                                '<div id="sysfrm_ajaxrender">'+
                                                                '<section class="activity-post mb-xlg">'+
                                                                    '<form id="marking-form" method="get" action="/">'+
                                                                        '<textarea name="message-text" id="msg" data-plugin-textarea-autosize="" placeholder="Add a note..." rows="1" style="overflow: hidden; word-wrap: break-word; resize: none; height: 50px;"></textarea>'+
                                                                        '<input id="activity-type" value="fa-hourglass" type="hidden">'+
                                                                        '<input id="activity-id_user" value="<?php echo $this->uri->segment(3); ?>" type="hidden">'+
                                                                    '</form>'+
                                                                    '<div class="compose-box-footer">'+
                                                                        '<ul class="compose-toolbar">'+
                                                                            '<li id="fa-hourglass" onClick="iconChange(\'fa-hourglass\');" class="clickable"><a><i class="fa fa-hourglass"></i></a></li>'+
                                                                            '<li id="fa-hourglass-start" onClick="iconChange(\'fa-hourglass-start\');" class="clickable"><a><i class="fa fa-hourglass-start"></i></a></li>'+
                                                                            '<li id="fa-hourglass-o" onClick="iconChange(\'fa-hourglass-o\');" class="clickable"><a><i class="fa fa-hourglass-o"></i></a></li>'+
                                                                            '<li id="fa-balance-scale" onClick="iconChange(\'fa-balance-scale\');" class="clickable"><a><i class="fa fa-balance-scale"></i></a></li>'+
                                                                            '<li id="fa-adjust" onClick="iconChange(\'fa-adjust\');" class="clickable"><a><i class="fa fa-adjust"></i></a></li>'+
                                                                            '<li id="fa-certificate" onClick="iconChange(\'fa-certificate\');" class="clickable"><a><i class="fa fa-certificate"></i></a></li>'+
                                                                            '<li id="fa-check" onClick="iconChange(\'fa-check\');" class="clickable"><a><i class="fa fa-check"></i></a></li>'+
                                                                            '<li id="fa-times" onClick="iconChange(\'fa-times\');" class="clickable"><a><i class="fa fa-times"></i></a></li>'+
                                                                            '<li id="fa-exchange" onClick="iconChange(\'fa-exchange\');" class="clickable"><a><i class="fa fa-exchange"></i></a></li>'+
                                                                            '<li id="fa-cog" onClick="iconChange(\'fa-cog\');" class="clickable"><a><i class="fa fa-cog"></i></a></li>'+
                                                                        '</ul>'+
                                                                        '<ul class="compose-btn">'+
                                                                            '<li>'+
                                                                                '<a class="btn btn-success btn-xs" id="acf-post"><i class="fa fa-edit"></i> Add Note</a>'+
                                                                            '</li>'+
                                                                        '</ul>'+
                                                                    '</div>'+
                                                                    '</section>'+
                                                                    '<div style="margin-top:20px !important;" class="mt-lg"> </div>'+
                                                                        '<div id="all_timeline_div" class="myScroller" data-always-visible="1" data-rail-visible1="1">'+
                                                                        '</div>'+
                                                                    '</div>'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'
                                        ]
                                    );
                                    $('#sample_333 tbody tr:first').attr('id');
                                    $('#sample_333 tbody tr:first').attr('id','purchase'+totalPurchase);
                                    $('#sample_333 tr td:last-child').css('display', 'none');
                                    $('.addInvoice').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                                    $('#addInvoice').trigger("reset");
                                    $('.chooseCustomer').slideUp("slow");
                                    $('.chooseVendor').slideUp("slow");
                                    $('.chooseTeam').slideUp("slow");
                                    $('.chooseIncomeCategory').slideUp("slow");
                                    $('.chooseExpenseCategory').slideUp("slow");
                                    $('.chooseCategory').slideUp("slow"); 
                                    $('#reportType').select2('val', '---');
                                    $("html, body").animate({ scrollTop: '0px' }, "slow");
                                    $('#addInvoice')[0].reset();
                                    purchaseListId(); 
                                }, 3000);
                                setTimeout(function(){
                                    // window.location.replace(base_link+"report/details/"+r.id);
                                    window.open(base_link+"report/details/"+r.id, '_blank');
                                }, 2000);
                            } else {
                                if(r.response == 'formManipulation') {
                                    sweetAlert("Oops...", "Why you manipulate system.", "error");                                   
                                } else if(r.response == 'Already exist') {
                                    $('#invoiceNoDiv').removeClass('has-warning');
                                    $('#invoiceNoDiv').removeClass('has-success');
                                    $('#invoiceNoDiv').addClass('has-error');
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
            }); 
            $('#remove30').click(function () {
                $.ajax({
                    type: 'post',
                    url: base_link + "report/reportRemove",
                    // data: 'id='+ id + '&status=' + 1,
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
                                    for (var i = 0; i < r.ids.length; i++) {
                                        // console.log(r.ids[i]);
                                        $('#report'+r.ids[i]).remove();
                                    }
                                    toastr.success(" You successfully delete report ", "Delete Report");
                                }, 1500);
                                swal({
                                    title: "Clear !",
                                    text: "Before 3 days all reports are removed",
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
                                data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=remove'+ '&title=report'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=report',
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
                                    toastr.info("", "Recent activity recorded");
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
            });
		</script>
    </body>
</html>