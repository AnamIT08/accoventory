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
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/inputs-ext/address/address.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/sweetalert.css" rel="stylesheet" type="text/css" >
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        <style type="text/css">
			#select2-sample_1_length-e7-container, .select2-selection__rendered {
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
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Closed Sidebar
                                <small>closed sidebar option</small>
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
                            <span class="active">Sidebar Layouts</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                        	<div class="profile-content">
	                            <!-- BEGIN PORTLET -->
	                            <div class="portlet light bordered">
	                                <div class="portlet-title">
	                                    <div class="caption caption-md">
	                                        <i class="icon-bar-chart theme-font hide"></i>
	                                        <span class="caption-subject font-blue-madison bold uppercase">System Icon List</span>
	                                        <span class="caption-helper hide">weekly stats...</span>
	                                    </div>
	                                </div>
	                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
									<div class="portlet box light bordered">
										<div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
											<div class="caption">
												<i class="fa fa-globe"></i>Show/Hide Columns
											</div>
											<div class="actions">
												<div class="btn-group btn-group-solid">
													<a class="dt-button buttons-print btn gray btn-outline" onclick="fnClickAddRow()"><i class="fa fa-plus"></i><span>Add</span></a>
													<a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_1')"><i class="fa fa-print"></i><span>Print</span></a>
													<a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_1', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
													<a class="dt-button buttons-csv buttons-html5 btn red btn-outline" onClick ="$('#sample_1').tableExport({type:'png',escape:'false'});"><i class="fa fa-file-photo-o"></i><span>PNG</span></a>
													<a class="dt-button buttons-csv buttons-html5 btn purple btn-outline" onClick ="$('#sample_1').tableExport({type:'csv',escape:'false'});"><i class="fa fa-file-text"></i><span>CSV</span></a>
													<a class="dt-button buttons-pdf buttons-html5 btn green btn-outline" onClick ="PDFFromHTML();"><i class="fa fa-file-pdf-o"></i><span>PDF</span></a>
													<a class="btn default" href="#" data-toggle="dropdown">
														<i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
													</a>
													<div id="sample_1_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
														<label><input type="checkbox" checked data-column="1">Rendering engine</label>
														<label><input type="checkbox" checked data-column="2">Browser</label>
														<label><input type="checkbox" checked data-column="3">Platform(s)</label>
														<label><input type="checkbox" checked data-column="4">Engine version</label>
														<label><input type="checkbox" checked data-column="5">CSS grade</label>
													</div>
													<a id="tFull" class="fullscreen fullscreen-recent dt-button buttons-csv buttons-html5 btn blue btn-outline"><i id="tFullIcon" class="fa fa-expand"></i></a>
												</div>
											</div>
										</div>
										<div id="portlet-body" class="portlet-body">
											<table class="table table-striped table-bordered table-hover dt-responsive" id="sample_1">
												<thead>
													<tr>
														<th>
															 Rendering engine
														</th>
														<th>
															 Browser
														</th>
														<th>
															 Platform(s)
														</th>
														<th>
															 Engine version
														</th>
														<th>
															 CSS grade
														</th>
													</tr>
												</thead>
												<tbody class="ui-sortable">
													<tr id="id">
														<td>
															 <a href="javascript:;" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-original-title="Enter your firstname">@ Trident</a>
														</td>
														<td>
															 Internet Explorer 4.0
														</td>
														<td>
															 Win 95+
														</td>
														<td>
															 40
														</td>
														<td>
															<div class="btn-group" style="margin: -5px">
																<button type="button" class="btn btn-sm dark">Manage</button>
																<button type="button" class="btn btn-sm dark dropdown-toggle" data-toggle="dropdown">
																	<i class="fa fa-angle-down"></i>
																</button>
																<ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">
																	<li>
																		<a href="javascript:;"><i class="fa fa-search" style="color: #26C281;"></i><span>View</span></a>
																	</li>
																	<li>
																		<a onclick="editData('id')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Edit</span></a>
																	</li>
																	<li>
																		<a href="javascript:;"><i class="fa fa-lock" style="color: #E87E04;"></i><span>Lock</span></a>
																	</li>
																	<li>
																		<a href="javascript:;"><i class="fa fa-unlock" style="color: #E7505A;"></i><span>Unlock</span></a>
																	</li>
																	<li>
																		<a onclick="deleteData(id)"><i class="fa fa-trash-o" style="color: #D91E18;"></i><span>Delete</span></a>
																	</li>
																	<li class="dropdown-submenu">
                                                                        <a href="javascript:;"><i class="fa fa-plus" style="color: #555555;"></i><span>Column Sum</span></a>
                                                                        <ul class="dropdown-menu dropdown-menu-custom-sub" style="">
                                                                            <li>
                                                                                <a id="cPage" href="javascript:;"><i class="fa fa-plus-square-o" style="color: #555555;"></i><span>Current Page</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a id="tTable" href="javascript:;"><i class="fa fa-plus-square" style="color: #555555;"></i><span>Total Table</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
																</ul>
															</div>															
														</td>
													</tr>
													<tr>
														<td>
															 Trident
														</td>
														<td>
															 Internet Explorer 5.0
														</td>
														<td>
															 Win 95+
														</td>
														<td>
															 5
														</td>
														<td>
															 C
														</td>
													</tr>
													<tr>
														<td>
															 Trident
														</td>
														<td>
															 Internet Explorer 5.5
														</td>
														<td>
															 Win 95+
														</td>
														<td>
															 5.5
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Trident
														</td>
														<td>
															 Internet Explorer 6
														</td>
														<td>
															 Win 98+
														</td>
														<td>
															 6
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Trident
														</td>
														<td>
															 Internet Explorer 7
														</td>
														<td>
															 Win XP SP2+
														</td>
														<td>
															 7
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Trident
														</td>
														<td>
															 AOL browser (AOL desktop)
														</td>
														<td>
															 Win XP
														</td>
														<td>
															 6
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Firefox 1.0
														</td>
														<td>
															 Win 98+ / OSX.2+
														</td>
														<td>
															 1.7
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Firefox 1.5
														</td>
														<td>
															 Win 98+ / OSX.2+
														</td>
														<td>
															 1.8
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Firefox 2.0
														</td>
														<td>
															 Win 98+ / OSX.2+
														</td>
														<td>
															 1.8
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Firefox 3.0
														</td>
														<td>
															 Win 2k+ / OSX.3+
														</td>
														<td>
															 1.9
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Camino 1.0
														</td>
														<td>
															 OSX.2+
														</td>
														<td>
															 1.8
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Camino 1.5
														</td>
														<td>
															 OSX.3+
														</td>
														<td>
															 1.8
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Netscape 7.2
														</td>
														<td>
															 Win 95+ / Mac OS 8.6-9.2
														</td>
														<td>
															 1.7
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Netscape Browser 8
														</td>
														<td>
															 Win 98SE+
														</td>
														<td>
															 1.7
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Netscape Navigator 9
														</td>
														<td>
															 Win 98+ / OSX.2+
														</td>
														<td>
															 1.8
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Mozilla 1.0
														</td>
														<td>
															 Win 95+ / OSX.1+
														</td>
														<td>
															 1
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Mozilla 1.1
														</td>
														<td>
															 Win 95+ / OSX.1+
														</td>
														<td>
															 1.1
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Mozilla 1.2
														</td>
														<td>
															 Win 95+ / OSX.1+
														</td>
														<td>
															 1.2
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Mozilla 1.3
														</td>
														<td>
															 Win 95+ / OSX.1+
														</td>
														<td>
															 1.3
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Mozilla 1.4
														</td>
														<td>
															 Win 95+ / OSX.1+
														</td>
														<td>
															 1.4
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Mozilla 1.5
														</td>
														<td>
															 Win 95+ / OSX.1+
														</td>
														<td>
															 1.5
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Mozilla 1.6
														</td>
														<td>
															 Win 95+ / OSX.1+
														</td>
														<td>
															 1.6
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Mozilla 1.7
														</td>
														<td>
															 Win 98+ / OSX.1+
														</td>
														<td>
															 1.7
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Mozilla 1.8
														</td>
														<td>
															 Win 98+ / OSX.1+
														</td>
														<td>
															 1.8
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Seamonkey 1.1
														</td>
														<td>
															 Win 98+ / OSX.2+
														</td>
														<td>
															 1.8
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Gecko
														</td>
														<td>
															 Epiphany 2.20
														</td>
														<td>
															 Gnome
														</td>
														<td>
															 1.8
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Webkit
														</td>
														<td>
															 Safari 1.2
														</td>
														<td>
															 OSX.3
														</td>
														<td>
															 125.5
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Webkit
														</td>
														<td>
															 Safari 1.3
														</td>
														<td>
															 OSX.3
														</td>
														<td>
															 312.8
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Webkit
														</td>
														<td>
															 Safari 2.0
														</td>
														<td>
															 OSX.4+
														</td>
														<td>
															 419.3
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Webkit
														</td>
														<td>
															 Safari 3.0
														</td>
														<td>
															 OSX.4+
														</td>
														<td>
															 522.1
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Webkit
														</td>
														<td>
															 OmniWeb 5.5
														</td>
														<td>
															 OSX.4+
														</td>
														<td>
															 420
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Webkit
														</td>
														<td>
															 iPod Touch / iPhone
														</td>
														<td>
															 iPod
														</td>
														<td>
															 420.1
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Webkit
														</td>
														<td>
															 S60
														</td>
														<td>
															 S60
														</td>
														<td>
															 413
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Presto
														</td>
														<td>
															 Opera 7.0
														</td>
														<td>
															 Win 95+ / OSX.1+
														</td>
														<td>
															 -
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Presto
														</td>
														<td>
															 Opera 7.5
														</td>
														<td>
															 Win 95+ / OSX.2+
														</td>
														<td>
															 -
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Presto
														</td>
														<td>
															 Opera 8.0
														</td>
														<td>
															 Win 95+ / OSX.2+
														</td>
														<td>
															 -
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Presto
														</td>
														<td>
															 Opera 8.5
														</td>
														<td>
															 Win 95+ / OSX.2+
														</td>
														<td>
															 -
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Presto
														</td>
														<td>
															 Opera 9.0
														</td>
														<td>
															 Win 95+ / OSX.3+
														</td>
														<td>
															 -
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Presto
														</td>
														<td>
															 Opera 9.2
														</td>
														<td>
															 Win 88+ / OSX.3+
														</td>
														<td>
															 -
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Presto
														</td>
														<td>
															 Opera 9.5
														</td>
														<td>
															 Win 88+ / OSX.3+
														</td>
														<td>
															 -
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Presto
														</td>
														<td>
															 Opera for Wii
														</td>
														<td>
															 Wii
														</td>
														<td>
															 -
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Presto
														</td>
														<td>
															 Nokia N800
														</td>
														<td>
															 N800
														</td>
														<td>
															 -
														</td>
														<td>
															 A
														</td>
													</tr>
													<tr>
														<td>
															 Presto
														</td>
														<td>
															 Nintendo DS browser
														</td>
														<td>
															 Nintendo DS
														</td>
														<td>
															 8.5
														</td>
														<td>
															 C/A<sup>1</sup>
														</td>
													</tr>
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
        <!--[if lt IE 9]>
			<script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 
		<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script type="text/javascript"> 
        	var base_link = "<?php echo base_url(); ?>";
        	var customURL = '';
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
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.mockjax.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/inputs-ext/address/address.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/pages/scripts/form-editable.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColResize/dataTables.colResize.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/api/sum().js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/api/fnReloadAjax.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
		<!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/table-advanced.js" type="text/javascript"></script>
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
			    var table = $('#sample_1').DataTable();     
			    $('#tTable').on( 'click', function () {
			        swal("Sum of Engine Version in this Table", table.column( 4 ).data().sum().toFixed(2));
			    });			 
			    $('#cPage').on( 'click', function () {
			    	swal("Sum of Engine Version in this Page", table.column( 4, {page:'current'} ).data().sum().toFixed(2));
			    });
			});
			var counter = 1;  			
			function editData(id) {
				//customURL = base_link;
				$('#'+id).confirmation({
					onConfirm: function() { alert('confirm') },
					onCancel: function() { alert('cancel') }
				});
			}
			function fnClickAddRow() {  
				$('#sample_1').dataTable().fnAddData( 
					[ 
						'<span class="row-details row-details-close"></span>',
						"20",  
						"Alice",  
						"Paul",  
						"40,000",  
						"A+"
					]
				);  
				counter++;  
			} 
			function deleteData(id) {
				swal({
					title: "Are you sure?",
					text: "You will not be able to recover this imaginary file!",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "Yes, delete it!",
					cancelButtonText: "No, cancel plx!",
					closeOnConfirm: false,
					closeOnCancel: false
				},
				function(isConfirm){
					if (isConfirm) {
						$("#id").slideUp("normal", function() { $(this).remove(); });
						$('#sample_1').dataTable().fnDraw(false);
						swal({
							title: "Deleted!",
							text: "Your imaginary file has been deleted.",
							timer: 2000,
							type : "success",
							showConfirmButton: false
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
				$("table#sample_1").tableToCSV();
			});
			$(function() {
		        $(".ui-sortable").sortable({ 
		        	opacity: 0.5, cursor: 'move', update: function() {
		            var order = $(this).sortable("serialize") + '&action=update'; 
		            console.log("Yes");
						/*
						$.ajax({
							type: 'post',
							url: base_link+"preproduction/reorder_style_post",
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
			
		</script>
    </body>

</html>