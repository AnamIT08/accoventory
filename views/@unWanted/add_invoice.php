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
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/systemOwn/plugins/selectize/css/selectize.bootstrap2.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/sweetalert.css" rel="stylesheet" type="text/css" >
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.css" rel="stylesheet" type="text/css" />
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
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                        	<style type="text/css">
								.newSettingsPanel > i {
								    font-size: 24px;
								    color: #62707a;
								    cursor: pointer;
								}
								.newSettingsPanel:hover > .fa-youtube-play {
									color: #E43A45;
								}
								.newSettingsPanel:hover > .icon-settings {
									color: green;
								}
								.newNav > li > a {
									padding: 0px !important;
								}
								.newNav > li > a:hover {
									text-decoration: none;
									background-color: #F3F5F9 !important;
								}
								.dropdown-menuCustom {
									left: -150px !important;
								}
                        	</style>
                            <!-- BEGIN THEME PANEL -->
							<span class="dropdown">
								<span class="newSettingsPanel"  id="menu1" type="button" data-toggle="dropdown"><i class="fa fa-youtube-play"></i></span>
								<ul class="dropdown-menu dropdown-menuCustom" role="menu" aria-labelledby="menu1">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>    
								</ul>
							</span>
                            <a href="<?php echo base_url(); ?>settings/"><span class="newSettingsPanel"><i class="icon-settings"></i></span></a>
                            <!-- END THEME PANEL -->
                        </div>
                        <!-- END PAGE TOOLBAR -->
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
	                                        <span class="caption-subject font-blue-madison bold uppercase">Add New Invoice</span>
	                                        <span class="caption-helper hide">weekly stats...</span>
	                                    </div>
                                        <a href="<?php echo base_url(); ?>invoice/" class="btn green-haze btn-sm" style="float: right;"><i class="fa fa-list"></i> Invoice List </a>
	                                </div>
	                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
	                                <div class="portlet box light bordered">
										<div id="portlet-body" class="portlet-body">
											<div class="row"> 
                                                <div class="col-sm-offset-1 pull-right col-sm-5">
                                                    <div class="row">
                                                        <div class="col-sm-12 newDrop" style="display: none;">
                                                            <div class="uploadFirst">
                                                                <div class="fadeMe"></div>                                                            
                                                                <img class="wave-logo-uploader-dropzone__logo__dropzone__icon" src="<?php echo base_url(); ?>assets/uploadedFile/system/63cc4065e830c9f2e76f19ff398dc73d.svg">
                                                                <div class="wave-logo-uploader-dropzone__logo___dropzone__text"><span class="wv-text wv-text--body"><span class="wave-logo-uploader-dropzone__logo__dropzone__browse-link">Browse</span><span> </span><span> your logo here.</span></span></div>
                                                                <div class="wave-logo-uploader-dropzone__logo__dropzone__hint"><span class="wv-text wv-text--hint"><span>Maximum 5MB in size.</span><br ><span>JPG, PNG, or GIF formats.</span></span></div>
                                                                <div class="wave-logo-uploader-dropzone__logo__dropzone__hint"><span class="wv-text wv-text--hint">Recommended size: 300 x 200 pixels.</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 newDrop newDropUploaded">
                                                            <div class="uploadedLogo">
                                                                <form id="image-form" name="image" enctype="multipart/form-data">
                                                                    <div id="profile" class="profile-userpic">
                                                                        <a href="javascript:void(0);">
                                                                            <?php
                                                                                if($this->session->userdata('picture') != "") {
                                                                                    if (file_exists('./assets/uploadedFile/profilePicture/'.$this->session->userdata('picture'))) {
                                                                                        echo '<img id="profile-img-system" src="'.base_url().'assets/uploadedFile/profilePicture/'.$this->session->userdata('picture').'" class="img-circle img-responsive profile-image" alt="" style="max-width:50px; padding: 5px; border: 1px dashed #54c7c3; border-radius: 5px;"/>';
                                                                                    } else {
                                                                                        echo '<img id="profile-img-system" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" style="max-width:50px; padding: 5px; border: 1px dashed #54c7c3; border-radius: 5px;"/>';
                                                                                    }
                                                                                } else {
                                                                                    echo '<img id="profile-img-system" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" style="max-width:50px; padding: 5px; border: 1px dashed #54c7c3; border-radius: 5px;"/>';
                                                                                }
                                                                            ?>
                                                                            <span id="uploadTrigger"><i class="fa fa-times newCross"></i></span>
                                                                            <input name="document"  type="file"  id="file-id" class="activeFile"/>
                                                                        </a>
                                                                        <div id="status_msg_div"><div id="status_msg" class="error-error" style="font-size: 12px;"></div></div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="divRightText">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-md-line-input">
                                                                <div class="col-md-12">
                                                                    <input id="invoiceNo" class="form-control" placeholder="Invoice #" type="text" value="" />
                                                                    <div class="form-control-focus"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-md-line-input">
                                                                <div class="col-md-12">
                                                                    <input class="form-control" placeholder="P.O # (optional)" type="text" />
                                                                    <div class="form-control-focus"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <br/>
                                                            <div class="col-sm-12">
                                                                <div class="input-group form-group form-md-line-input input-midium date date-picker" data-date="<?php echo date("d-m-Y"); ?>" data-date-format="dd-mm-yyyy" data-date-viewmode="years" data-date-minviewmode="months" style="margin-top: -25px; margin-bottom: -10px;">
                                                                    <input id="invoiceDate" type="text" class="form-control" value="<?php echo date("d-m-Y"); ?>" readonly style="padding-right: 10px;">
                                                                    <span class="input-group-btn">
                                                                        <span class="fadeMe"></span>
                                                                        <button class="btn default" type="button">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <br/>
                                                            <div class="col-sm-12" style="margin-top: 10px">
                                                                <div class="input-group form-group form-md-line-input input-midium date date-picker-custom" data-date="<?php echo date("d-m-Y"); ?>" data-date-format="dd-mm-yyyy" data-date-viewmode="years" data-date-minviewmode="months" data-date-start-date="+0d" style="margin-top: -25px; margin-bottom: -10px;">
                                                                    <input id="pickDate" type="text" class="form-control" value="Payment Due" readonly style="padding-right: 10px;">
                                                                    <span class="input-group-btn">
                                                                        <span class="fadeMe"></span>
                                                                        <button class="btn default" type="button">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                                <label id="dateDifference" style="display: none;">0 Days</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 radioCheck" style="display: none;">
                                                            <div class="md-radio-inline" style="margin-top: 25px; float: right; margin-right: 15px; margin-bottom: -5px;">
                                                                <div class="md-radio">
                                                                    <input id="radio2" name="radio2" checked="" class="md-radiobtn" type="radio">
                                                                    <label for="radio2">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Discount Percentage </label>
                                                                </div>
                                                                <div class="md-radio">
                                                                    <input id="radio1" name="radio2" class="md-radiobtn" type="radio">
                                                                    <label for="radio1">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Discount Amount </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-md-line-input">
                                                                <div class="col-md-12">
                                                                    <input id="discountCheck" class="form-control" placeholder="Discount (optional)" type="text" />
                                                                    <div class="form-control-focus"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                               
                                                <div class="col-md-6 pull-left">
                                                    <div class="col-md-offset-1 col-md-11">
                                                        <div class="form-group form-md-line-input">
                                                            <input class="form-control input-lg" placeholder="Invoice (Optional)" type="text" value="Invoice" />
                                                            <div class="form-control-focus"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-offset-1 col-md-11">
                                                        <label class="companyName"><b>Company Name Here</b></label>
                                                    </div>
                                                    <div class="col-md-offset-1 col-md-11">
                                                        <div class="form-group invoice-estimate-customer">
                                                            <select style="display: none;" tabindex="-1" class="form-control customer" placeholder="Select or Add Customer" name="customer">
                                                                <option value="" selected="selected"></option>
                                                                <option value="Customer">Customer</option>
                                                                <option value="New Customer">New Customer</option>
                                                                <option value="Old Customer">Old Customer</option>
                                                            </select>
                                                            <input name="new_customer" type="hidden">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-offset-1 col-md-11">
                                                        <div class="new-customer-data" style="display:none">
                                                            <div class="form-group form-group-condensed">
                                                                <div class="form-group form-md-line-input">
                                                                    <input class="form-control customFormControl" placeholder="Customer Email (required)" name="customer_email" type="text">
                                                                    <div class="form-control-focus"> </div>
                                                                </div>
                                                                <div class="form-group form-md-line-input">
                                                                    <input class="form-control customFormControl" placeholder="Address Line 1" name="new_customer_address_1" type="text">
                                                                    <div class="form-control-focus"> </div>
                                                                </div>
                                                                <div class="form-group form-md-line-input">
                                                                    <input class="form-control customFormControl" placeholder="Address Line 2" name="new_customer_address_2" type="text">
                                                                    <div class="form-control-focus"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
	                                        </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-responsive table-scrollable-borderless">
                                                        <table class="table" style="margin-top: 50px">
                                                            <thead>
                                                                <tr>
                                                                    <th> # </th>
                                                                    <th width="15%"> Item </th>
                                                                    <th> Table heading </th>
                                                                    <th> Table heading </th>
                                                                    <th width="15%"> Tax/Vat </th>
                                                                    <th> Table heading </th>
                                                                    <th> Table heading </th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="ui-sortable">
                                                                <tr class="item" data-line-id="0">
                                                                    <td> 1 </td>
                                                                    <td>
                                                                        <select style="display: none;" tabindex="-1" class="form-control selectized productOption" placeholder="Select or Add Item" name="customer">
                                                                            <option value="" selected="selected"></option>
                                                                            <option value="Item">Item</option>
                                                                            <option value="New Item">New Item</option>
                                                                            <option value="Old Item">Old Item</option>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <span class="form-group form-md-line-input">
                                                                            <span class="col-md-12">
                                                                                <input class="form-control customInput" placeholder="Invoice #" type="text">
                                                                                <span class="form-control-focus"> </span>
                                                                            </span>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="form-group form-md-line-input">
                                                                            <span class="col-md-12">
                                                                                <input class="form-control customInput" placeholder="Invoice #" type="text">
                                                                                <span class="form-control-focus"> </span>
                                                                            </span>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="form-group">
                                                                            <select style="display: none;" tabindex="-1" class="form-control selectizedTax" placeholder="Add Tax" name="tax">
                                                                                <option value="" selected="selected"></option>
                                                                                <option value="NVR">NVR</option>
                                                                                <option value="TAX">TAX</option>
                                                                                <option value="VAT">VAT</option>
                                                                            </select>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="form-group form-md-line-input">
                                                                            <span class="col-md-12">
                                                                                <input class="form-control customInput" placeholder="Invoice #" type="text">
                                                                                <span class="form-control-focus"> </span>
                                                                            </span>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="form-group form-md-line-input">
                                                                            <span class="col-md-12">
                                                                                <input class="form-control customInput" placeholder="Invoice #" type="text">
                                                                                <span class="form-control-focus"> </span>
                                                                            </span>
                                                                        </span>
                                                                    </td>
                                                                    <td class="moveButton"><i class="fa fa-unsorted grabbable"></i></td>
                                                                    <td class="deleteButton"><i class="glyphicon glyphicon-remove"></i></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <a onClick="addBlankLine();" class="btn green-haze btn-sm"><i class="fa fa-plus"></i> Add Line </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-offset-9 col-md-3">
                                                    <table class="table" id="invoiceTotalTable">
                                                        <tbody>
                                                            <tr class="subtotal-row">
                                                                <th class="text-left">Subtotal:</th>
                                                                <td class="text-right subtotal">0.00</td>
                                                            </tr>
                                                            <tr class="discount-row">
                                                                <th class="text-left">Discount:</th>
                                                                <td class="text-right discount">-0.00</td>
                                                            </tr>
                                                            <script id="taxRowTemplate" type="text/x-template">
                                                                <tr class="tax-row">
                                                                    <th class="text-left tax-name-and-id"></th>
                                                                    <td class="text-right tax-amount"></td>
                                                                </tr>
                                                            </script>

                                                            <tr class="total-row">
                                                                <th class="text-left">Invoice Total:</th>
                                                                <td class="text-right total">$0.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
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
        <!-- BEGIN MODAL -->
        <div id="static" class="modal fade" data-backdrop="static" data-keyboard="false">
            <div class="modal-header">
                <h4>Edit Taxes</h4>
                <div class="row">
                    <div class="col-md-12">
                        <p>Here you can edit taxes you'd like to add to invoices.  Anything you add here can be reused on future invoices.</p>
                    </div>
                </div>
                <div class="dataDiv">
                    <div class="col-md-4 no-margin-padding">
                        <label for="name" class="required">Name</label>
                    </div>
                    <div class="col-md-3 no-margin-padding">
                        <label for="rate" class="required">Rate</label>
                    </div>
                    <div class="col-md-4 no-margin-padding">
                        <label for="number">Number/ID</label>
                    </div>
                    <div class="col-md-1 no-margin-padding">

                    </div>
                </div>
            </div>
            <div class="modal-body scroller" style="height: 180px;" data-always-visible="1" data-rail-visible1="1">
                <div class="taxInfo">
                    <div class="default-tax-row">
                        <div class="col-md-4 no-margin-padding">
                            <div class="form-group customFormGroup" style="">
                                <input name="id" type="hidden" value="">
                                <input class="form-control" placeholder="Sales" name="name" type="text" id="name">
                            </div>
                        </div>
                        <div class="col-md-3 no-margin-padding">
                            <div class="form-group customFormGroup">
                                <input class="form-control numbers-only percent" placeholder="%" name="rate" type="text" id="rate">
                            </div>
                        </div>
                        <div class="col-md-4 no-margin-padding">
                            <div class="form-group customFormGroup">
                                <input class="form-control" placeholder="E.g., Tax ID #" name="number" type="text" id="number">

                            </div>
                        </div>
                        <div class="col-md-1 no-margin-padding">
                            <i class="fa fa-trash tax-delete-button pointer deleteButton"></i>
                        </div>
                    </div>
                </div>
                    
            </div>
            <a onClick="blankTax()" class="btn blue" style="margin-left: 25px; margin-bottom: 10px;"><i class="fa fa-plus"></i> Tax</a>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-outline dark">Cancel</button>
                <button type="button" data-dismiss="modal" class="btn green">Save</button>
            </div>
        </div>
        <!-- END MODAL -->
        <!--[if lt IE 9]>
			<script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 
		<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script type="text/javascript"> 
        	var base_link = "<?php echo base_url(); ?>";
        	var customURL = '';
            var prepend = 0;
            var cprepend = 0;
            var addedCustomerNames = [];                 
        </script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
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
        <script src="<?php echo base_url(); ?>assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-select2.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-date-time-pickers.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/selectize/js/standalone/selectize.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->
        <script type="text/javascript">
            var rowCount = $('.ui-sortable tr').length; 
            $('.customer').selectize({
                placeholder: "Select or Add Item",
                persist: true,
                create: true,
                    sortField: {
                    field: 'text',
                        direction: 'asc'
                },
                hideSelected:true,
                openOnFocus: true,
                selectOnTab: true,
                dropdownParent: null,
                onOptionAdd: function(option){

                    addedCustomerNames.push(option);
                    $('.new-customer-data').slideDown('fast');
                    $('#unbilledNotice').html('');
                    $('input[name=new_customer]').val('1');

                    var suggestedInvoiceNumber = option.replace(/\W/g, '').toUpperCase().substring(0,5) + '-0001';
                    $('#invoiceNo').val(suggestedInvoiceNumber);

                },
                onItemAdd: function(item){
                    if(addedCustomerNames.indexOf(item) > -1){
                        $('.new-customer-data').slideDown('fast');
                        $('input[name=new_customer]').val('1');
                    }

                }
            });
            $('.selectized').selectize({
                placeholder: "Select or Add Item",
                persist: true,
                create: true,
                    sortField: {
                    field: 'text',
                        direction: 'asc'
                },
                hideSelected:true,
                openOnFocus: true,
                selectOnTab: true,
                dropdownParent: null,
                onOptionAdd: function(option){

                    addedCustomerNames.push(option);
                    $('.new-customer-data').slideDown('fast');
                    $('#unbilledNotice').html('');
                    $('input[name=new_customer]').val('1');

                    var suggestedInvoiceNumber = option.replace(/\W/g, '').toUpperCase().substring(0,5) + '-0001';
                    $('#invoiceNo').val(suggestedInvoiceNumber);

                },
                onItemAdd: function(item){
                    if(addedCustomerNames.indexOf(item) > -1){
                        $('.new-customer-data').slideDown('fast');
                        $('input[name=new_customer]').val('1');
                    }

                }
            });
            this.productSelectizeOptions = {
                placeholder: "Select or Add Item",
                persist: true,
                create: true,
                    sortField: {
                    field: 'text',
                        direction: 'asc'
                },
                hideSelected:true,
                openOnFocus: true,
                selectOnTab: true,
                dropdownParent: null,
                onOptionAdd: function(option){

                    addedCustomerNames.push(option);
                    $('.new-customer-data').slideDown('fast');
                    $('#unbilledNotice').html('');
                    $('input[name=new_customer]').val('1');

                    var suggestedInvoiceNumber = option.replace(/\W/g, '').toUpperCase().substring(0,5) + '-0001';
                    $('#invoiceNo').val(suggestedInvoiceNumber);

                },
                onItemAdd: function(item){
                    if(addedCustomerNames.indexOf(item) > -1){
                        $('.new-customer-data').slideDown('fast');
                        $('input[name=new_customer]').val('1');
                    }

                }
            };
            $('.selectizedTax').selectize({
                placeholder: "Add Tax",
                persist: true,
                create: true,
                sortField: {
                    field: 'text',
                        direction: 'asc'
                },
                hideSelected:true,
                openOnFocus: true,
                selectOnTab: true,
                dropdownParent: null,
                create: function(input) {
                    var newTax = '<div class="default-tax-row">'+
                                    '<div class="col-md-4 no-margin-padding">'+
                                        '<div class="form-group customFormGroup" style="">'+
                                            '<input class="form-control" placeholder="Sales" name="name" type="text" value="'+input+'">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-3 no-margin-padding">'+
                                        '<div class="form-group customFormGroup">'+
                                            '<input class="form-control numbers-only percent" placeholder="%" name="rate" type="text" id="rate">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-4 no-margin-padding">'+
                                        '<div class="form-group customFormGroup">'+
                                            '<input class="form-control" placeholder="E.g., Tax ID #" name="number" type="text" id="number">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-1 no-margin-padding">'+
                                        '<i class="fa fa-trash tax-delete-button pointer deleteButton"></i>'+
                                    '</div>'+
                                '</div>';
                    $('.taxInfo').append(newTax);
                    $('#static').modal("show");
                    return {
                        id: 0,
                        value: input
                    };
                }
            });
            this.taxSelectizeOptions = {
                placeholder: "Add Tax",
                persist: true,
                create: true,
                sortField: {
                    field: 'text',
                        direction: 'asc'
                },
                hideSelected:true,
                openOnFocus: true,
                selectOnTab: true,
                dropdownParent: null,
                create: function(input) {
                    var newTax = '<div class="default-tax-row">'+
                                    '<div class="col-md-4 no-margin-padding">'+
                                        '<div class="form-group customFormGroup" style="">'+
                                            '<input class="form-control" placeholder="Sales" name="name" type="text" value="'+input+'">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-3 no-margin-padding">'+
                                        '<div class="form-group customFormGroup">'+
                                            '<input class="form-control numbers-only percent" placeholder="%" name="rate" type="text" id="rate">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-4 no-margin-padding">'+
                                        '<div class="form-group customFormGroup">'+
                                            '<input class="form-control" placeholder="E.g., Tax ID #" name="number" type="text" id="number">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-1 no-margin-padding">'+
                                        '<i class="fa fa-trash tax-delete-button pointer deleteButton"></i>'+
                                    '</div>'+
                                '</div>';
                    $('.taxInfo').append(newTax);
                    $('#static').modal("show");
                    return {
                        id: 0,
                        value: input
                    };
                }
            };
            $('.slimScrollDiv').slimScroll({alwaysVisible: false});
            function showDays() {
                var start = $('.date-picker').datepicker('getDate');
                var end   = $('.date-picker-custom').datepicker('getDate');
                var days   = (end - start)/1000/60/60/24;
                if(!start || !end) {
                    //return;
                } else {
                    if(days < 0) {                        
                        $('#dateDifference').slideDown('slow');
                        $('#dateDifference').addClass('hasError');
                        $('#dateDifference').html('Payment due date must be greater'); 
                    } else {
                        $('#dateDifference').slideDown('slow');
                        $('#dateDifference').removeClass('hasError');
                        $('#dateDifference').html(days+' days');
                    }                   
                }
            }
            function blankTax() {
                var blankTax =  '<div class="default-tax-row">'+
                                    '<div class="col-md-4 no-margin-padding">'+
                                        '<div class="form-group customFormGroup" style="">'+
                                            '<input class="form-control" placeholder="Sales" name="name" type="text" value="">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-3 no-margin-padding">'+
                                        '<div class="form-group customFormGroup">'+
                                            '<input class="form-control numbers-only percent" placeholder="%" name="rate" type="text" id="rate">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-4 no-margin-padding">'+
                                        '<div class="form-group customFormGroup">'+
                                            '<input class="form-control" placeholder="E.g., Tax ID #" name="number" type="text" id="number">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-1 no-margin-padding">'+
                                        '<i class="fa fa-trash tax-delete-button pointer deleteButton"></i>'+
                                    '</div>'+
                                '</div>';
                $('.taxInfo').append(blankTax);
            }
            function addBlankLine() {
                var lastLineItem = $('tr.'+'item').last();
                var oldLineId = lastLineItem.data('line-id');
                var newLineId = oldLineId+1;
                var newLineItem;
                var selectedValues = new Array();
                var tagValues = new Array();

                // Destroy selectize temporarily for clone
                $(lastLineItem).find('select.productOption').each(function(key, value){
                    selectedValues[key] = $(this)[0].selectize.getValue();
                    $(this)[0].selectize.destroy();
                });

                $(lastLineItem).find('select.selectizedTax').each(function(key, value){
                    tagValues[key] = $(this)[0].selectize.getValue();
                    $(this)[0].selectize.destroy();
                });

                newLineItem = lastLineItem.clone().attr('data-line-id', newLineId );

                // Re-selectize everything
                $(lastLineItem).find('select.productOption').each(function(key, value){
                    $(this).selectize(self.productSelectizeOptions);
                });

                $(lastLineItem).find('select.selectizedTax').each(function(key, value){
                    $(this).selectize(self.taxSelectizeOptions);
                });

                // Sync tax options to newly selectized fields; if you don't do this, they revert to original options
                //this.syncTaxOptions();

                // Select the previously selected item
                $(lastLineItem).find('select.productOption').each(function(key, value){
                    $(this)[0].selectize.setValue(selectedValues[key])
                });

                $(lastLineItem).find('select.selectizedTax').each(function(key, value){
                    $(this)[0].selectize.setValue(tagValues[key])
                });

                $(newLineItem).find('select.productOption').each(function(){
                    $(this).selectize(self.productSelectizeOptions);
                });

                $(newLineItem).find('select.selectizedTax').each(function(){
                    $(this).selectize(self.tagSelectizeOptions);
                });

                newLineItem.insertAfter( lastLineItem );
                $('.ui-sortable tr').each(function(idx){
                    $(this).children().first().html(idx + 1);
                });
                return newLineItem;
            }
            $("#discountCheck").click(function(){
                //$(".radioCheck").show("fast");
                $(".radioCheck").slideDown('slow');
                //$(".radioCheck").show("slide", { direction: "right" }, 3000);
            });
            $('#pickDate').click(function () {
                var dateRange = '<div class="ranges">'+
                    '<ul>'+
                        '<li onClick="dateAdd(\'0\')">Due upon receipt</li>'+
                        '<li onClick="dateAdd(\'3\')">Due 3 days</li>'+
                        '<li onClick="dateAdd(\'7\')">Due 7 days</li>'+
                        '<li onClick="dateAdd(\'15\')">Due 15 days</li>'+
                        '<li onClick="dateAdd(\'30\')">Due 30 days</li>'+
                        '<li onClick="dateAdd(\'60\')">Due 60 days</li>'+
                    '</ul>'+
                '</div>';
                if(prepend != 1) {
                    cprepend = 1; 
                    if(cprepend == 1) {
                        prepend = 1;
                        $('.datepicker-dropdown').prepend(dateRange);                    
                    }
                }
            });
            function dateAdd(date) {
                //dateDifference
                $('.datepicker-dropdown').hide();
                if(date == 60) {
                    prepend = 1;
                    $('#pickDate').val(moment($('#invoiceDate').val(), "DD-MM-YYYY").add(2, 'month').format('DD-MM-YYYY'));
                    $('#dateDifference').slideDown('slow');
                    $('#dateDifference').removeClass('hasError');
                    $('#dateDifference').html('60 Days');
                } else if(date == 30) {
                    prepend = 1;
                    $('#pickDate').val(moment($('#invoiceDate').val(), "DD-MM-YYYY").add(1, 'month').format('DD-MM-YYYY'));
                    $('#dateDifference').slideDown('slow');
                    $('#dateDifference').removeClass('hasError');
                    $('#dateDifference').html('30 Days');
                } else if(date == 15) {
                    prepend = 1;
                    $('#pickDate').val(moment($('#invoiceDate').val(), "DD-MM-YYYY").add(15, 'days').format('DD-MM-YYYY'));
                    $('#dateDifference').slideDown('slow');
                    $('#dateDifference').removeClass('hasError');
                    $('#dateDifference').html('15 Days');
                } else if(date == 7) {
                    prepend = 1;
                    $('#pickDate').val(moment($('#invoiceDate').val(), "DD-MM-YYYY").add(7, 'days').format('DD-MM-YYYY'));
                    $('#dateDifference').slideDown('slow');
                    $('#dateDifference').removeClass('hasError');
                    $('#dateDifference').html('7 Days');
                } else if (date == 3) {
                    prepend = 1;
                    $('#pickDate').val(moment($('#invoiceDate').val(), "DD-MM-YYYY").add(3, 'days').format('DD-MM-YYYY'));
                    $('#dateDifference').slideDown('slow');
                    $('#dateDifference').removeClass('hasError');
                    $('#dateDifference').html('3 Days');
                } else {
                    prepend = 1;
                    $('#pickDate').val(moment($('#invoiceDate').val(), "DD-MM-YYYY").format('DD-MM-YYYY'));
                    $('#dateDifference').slideDown('slow');
                    $('#dateDifference').removeClass('hasError');
                    $('#dateDifference').html('0 Days');
                }
            }
            $(function() {
                $(".ui-sortable").sortable({ 
                    opacity: 0.5, cursor: 'move', update: function() {
                    var order = $(this).sortable("serialize") + '&action=update'; 
                    $('.ui-sortable tr').each(function(idx){
                        $(this).children().first().html(idx + 1);
                    });
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