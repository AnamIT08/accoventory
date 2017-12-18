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
        <title>Customer | Accoventory .::.SaaS.::. Accounting & Inventory Software - SaaS</title>
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
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
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
        <link href="<?php echo base_url(); ?>assets/global/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
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
			#select2-sample_6_length-e7-container, .select2-selection__rendered {
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
            .timeline-item .no-top-border .iconMark { position: absolute; top: -10px; right: -20px; padding: 10px; width: 40px; text-align: center; border-top: 1px solid #e7eaec; border-bottom: 1px solid #e7eaec; border-left: 1px solid #e7eaec; background: #f8f8f8; font-size: 20px; border-top-right-radius: 5px; float: right; position: relative; }
            .iconEdit { color: #E87E04; cursor: pointer; }
            .iconDelete { color: #FF0000; cursor: pointer; }
            .no-top-border { width: 87.6% !important; min-height: 110px !important; }
            .avatar { height: 45px; width: 45px; border-radius: 50% !important; border: 2px solid !important; }
            .editCustom { position: absolute !important; top: 5px !important; right: 120px !important; }
            .deleteCustom { position: absolute !important; top: 5px !important; right: 45px !important; }
            #select2-sample_6_length-e7-container, .select2-selection__rendered {
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
            div.fadeMe {
                border-radius: 5px;
                opacity:    0.025; 
                background: #000; 
                width:      100%;
                height:     100%; 
                z-index:    10;
                top:        0; 
                left:       0; 
                position:   absolute;
                cursor: pointer; 
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
                margin-bottom: 20px;
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
            .newCross { right: 0; top: 0; }           
            #profile a {display: table; vertical-align: middle; text-align: center; position: relative;}    
            #profile a {display: table; vertical-align: middle; text-align: center; position: relative;}    
            #profile span {display: none;}  
            #profile a:hover span {position: absolute; right: 40%; top: 40%; display: block; text-align: center; color: red; font-size: 16px; }  
            #profile a:hover span b:hover {background: #000;}
            #profile a:hover span i { font-size: 30px !important; background: none; }
            img { border: none; vertical-align: bottom; cursor: auto}
            #uploadTrigger { margin-left: -10px; }
            .activeFile {display: none !important;}
            #status_msg_div { height: 5px; width: 100%; }
            #status_msg { width:100%; margin: 0 auto !important; text-align: center; }
            .error-error{ font-size:15px; padding-top:5px; color:red; font-weight:bold; -webkit-animation-name: blinker; -webkit-animation-duration: 3s; -webkit-animation-timing-function: linear; -webkit-animation-iteration-count: infinite; -moz-animation-name: blinker; -moz-animation-duration: 3s; -moz-animation-timing-function: linear; -moz-animation-iteration-count: infinite; nimation-name: blinker; animation-duration: 3s; animation-timing-function: linear; animation-iteration-count: infinite; }
            @-moz-keyframes blinker { 0% { opacity: 1.0; } 25% { opacity: 1.0; } 50% { opacity: 0.0; } 100% { opacity: 1.0; } }
            @-webkit-keyframes blinker { 0% { opacity: 1.0; } 25% { opacity: 1.0; } 50% { opacity: 0.0; } 100% { opacity: 1.0; } }
            @keyframes blinker { 0% { opacity: 1.0; } 25% { opacity: 1.0; } 50% { opacity: 0.0; } 100% { opacity: 1.0; } }
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
            .select2-container--bootstrap .select2-selection { border-radius: 0px !important; border: none; border-bottom: 2px solid #36C6D3 !important; border-top: none !important; border-left: none !important;border-right: none !important; }
            .select2-container .select2-choice .select2-arrow { border-left: none ; }
            .table-scrollable .dropdown-menu { position: relative !important; }
            .table-scrollable #sample_66 .dropdown-menu { position: relative !important; margin-top: 30px; margin-left: -100px; }
            .dropzone { border: none !important; padding: 0px !important; background: white; min-height: 135px !important; }
            .dropzone .dz-preview, .dropzone-previews .dz-preview {
                background: rgba(255,255,255,0.8);
                position: relative;
                display: inline-block;
                margin: 0px 5px;
                vertical-align: top;
                border: 1px solid #acacac;
                padding: 3px;
            }
            .dropzone .dz-preview .dz-details, .dropzone-previews .dz-preview .dz-details {
                width: 120px;
                height: 100px;
                position: relative;
                background: #ebebeb;
                padding: 5px;
                margin-bottom: 22px;
            }
            .dropzone .dz-preview.dz-success .dz-progress, .dropzone-previews .dz-preview.dz-success .dz-progress {display: block;opacity: 1;-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";filter: alpha(opacity=1);-webkit-transition: opacity 0.4s ease-in-out;-moz-transition: opacity 0.4s ease-in-out;-o-transition: opacity 0.4s ease-in-out;-ms-transition: opacity 0.4s ease-in-out;transition: opacity 0.4s ease-in-out;}
            .dropzone .dz-preview.dz-success .dz-success-mark, .dropzone-previews .dz-preview.dz-success .dz-success-mark {
                opacity: 1;
                -ms-filter: none;
                filter: none;
                z-index: 10;
            }
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
                    <div class="row addCustomer" style="display: none">
                        <div class="col-md-12">
                        	<div class="profile-content">
	                            <!-- BEGIN PORTLET -->
	                            <div class="portlet light bordered">
	                                <div class="portlet-title">
	                                    <div class="caption caption-md">
	                                        <i class="icon-bar-chart theme-font hide"></i>
	                                        <span class="caption-subject font-blue-madison bold" style="color: #E87E04 !important;">Add New Customer</span>
	                                        <span class="caption-helper hide">weekly stats...</span>
	                                    </div>
                                        <div style="float: right;">
                                            <a class="btn green-haze btn-sm customerListVisible"><i class="fa fa-list"></i> Customer List </a>
                                            <a href="javascript:;" class="btn default btn-sm customerListVisible"><i class="fa fa-times"></i> Cancel </a>
                                        </div>
	                                </div>
	                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
	                                <div class="portlet box light bordered">
										<div id="portlet-body" class="portlet-body">
											<div class="row">
												<div class="col-md-12">
                                                    <div id="productPicture" class="col-md-4 newDrop" style="display: block">
                                                        <form action="<?php echo base_url(); ?>product/file_upload/" class="dropzone dropzone-file-area">                                                                
                                                            <input id="identification" style="display:none;" name="identification" value="customerPicture" type="hiddin"/>
                                                            <div class="uploadFirst uploadFirstFile">                                                         
                                                                <img class="wave-logo-uploader-dropzone__logo__dropzone__icon" src="<?php echo base_url(); ?>assets/uploadedFile/system/63cc4065e830c9f2e76f19ff398dc73d.svg">
                                                                <div class="wave-logo-uploader-dropzone__logo___dropzone__text"><span class="wv-text wv-text--body"><span class="wave-logo-uploader-dropzone__logo__dropzone__browse-link">Browse</span><span> </span><span> customer logo/picture here.</span></span></div>
                                                                <div class="wave-logo-uploader-dropzone__logo__dropzone__hint"><span class="wv-text wv-text--hint"><span>Maximum 500KB in size.</span><br ><span>JPG, PNG, or GIF formats.</span></span></div>
                                                                <div class="wave-logo-uploader-dropzone__logo__dropzone__hint"><span class="wv-text wv-text--hint">Recommended size: 250 x 250 pixels.</span></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="productPictureDiv" class="col-md-offset-1 col-md-2 pull-right" style="margin-top: 25px !important; display: none">
                                                        <div class="uploadedLogo" >
                                                            <form id="image-form" name="image" enctype="multipart/form-data">
                                                                <div id="profile" class="profile-userpic">
                                                                    <a href="javascript:void(0);">
                                                                        <?php
                                                                            if (file_exists('./assets/uploadedFile/customerPicture/'.$basicSettings[0]->defaultLogo)) {
                                                                                echo '<img id="productPictureImg" src="'.base_url().'assets/uploadedFile/customerPicture/'.$basicSettings[0]->defaultLogo.'" class="img-circle img-responsive profile-image" alt="" style="max-height:none; padding: 5px; border: 1px dashed #54c7c3; border-radius: 5px;"/>';
                                                                            } else {
                                                                                echo '<img id="productPictureImg" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" style="max-height:none; padding: 5px; border: 1px dashed #54c7c3; border-radius: 5px;"/>';
                                                                            }
                                                                        ?>
                                                                        <span id="uploadTrigger" onclick="removeLogo('customerPicture', 'productImg')"><i class="fa fa-times newCross"></i></span>
                                                                        <label id="logoName" style="display:none;"><?php echo $basicSettings[0]->bDefaultLogo; ?></label>
                                                                    </a>
                                                                    <div id="status_msg_div"><div id="status_msg" class="error-error" style="font-size: 12px;"></div></div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
		                                        <div class="row">
			                                        <div class="col-md-12">
				                                        <form id="addCustomer" role="form" action="#">
				                                            <div class="col-md-6">
				                                                <div id="nameCompanyDiv" class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input id="nameCompany" class="form-control" name="nameCompany" type="text" value="" />
				                                                        <label for="form_control_1">Customer/Company Name <span aria-required="true" class="required"> * </span></label>
				                                                        <span class="help-block">Customer/Company name here...</span>
				                                                        <i class="icon-wallet"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="col-md-6">
				                                                <div id="nameUserDiv" class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input id="nameUser" class="form-control" name="nameUser" type="text" value="" />
				                                                        <label for="form_control_1">Name of Contact</label>
				                                                        <span class="help-block">Full name here...</span>
				                                                        <i class="icon-user"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
			                                                <div class="col-md-6">
			                                                    <div id="address1Div" class="form-group form-md-line-input form-md-floating-label">
			                                                        <div class="input-icon">
			                                                            <textarea id="address1" class="form-control" name="address1" type="text"></textarea>
			                                                            <label for="form_control_1">Address Line 1<span aria-required="true" class="required"> * </span></label>
			                                                            <span class="help-block">Customer/Company address here...</span>
			                                                            <i class="icon-pointer"></i>
			                                                        </div>
			                                                    </div>
			                                                </div>
			                                                <div class="col-md-6">
			                                                    <div id="address2Div" class="form-group form-md-line-input form-md-floating-label">
			                                                        <div class="input-icon">
			                                                            <textarea id="address2" class="form-control" name="address2" type="text"></textarea>
			                                                            <label for="form_control_1">Address Line 2</label>
			                                                            <span class="help-block">Customer/Company address here...</span>
			                                                            <i class="icon-pointer"></i>
			                                                        </div>
			                                                    </div>
			                                                </div>
				                                            <div class="col-md-4">
				                                                <div id="emailDiv" class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input id="email" class="form-control" name="email" type="text" value="" />
				                                                        <label for="form_control_1">Email <span aria-required="true" class="required"> * </span></label>
				                                                        <span class="help-block">Customer/Company email here...</span>
				                                                        <i class="icon-envelope"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="col-md-4">
				                                                <div id="phoneDiv" class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input id="phone" class="form-control ibacor_fi" data-prefix="+" name="phone" type="text" value="" />
				                                                        <label for="form_control_1">Phone <span aria-required="true" class="required"> * </span></label>
				                                                        <span class="help-block">Customer/Company phone here...</span>
				                                                        <i class="icon-call-end"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="col-md-4">
				                                                <div id="webUrlDiv" class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input id="webUrl" class="form-control" name="webUrl" type="text" value="" />
				                                                        <label for="form_control_1">Web URL</label>
				                                                        <span class="help-block">Customer/Company web url here...</span>
				                                                        <i class="icon-link"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="col-md-12 margiv-top-10"><br/>
				                                                <input id="productImg" type="hidden" name="picture" value="" />
                                                                <input id="editId" class="form-control" type="hidden" name="editId" value="" />
                                                                <input id="systemCode" class="form-control" type="hidden" name="systemCode" value="" />
                                                                <a id="insertData" href="javascript:;" class="btn btn-primary"><i class="fa fa-save"></i> Save </a>
				                                                <a id="insertDataNew" href="javascript:;" class="btn green"><i class="fa fa-newspaper-o"></i> Save & New </a>
				                                                <a href="javascript:;" class="btn default customerListVisible"><i class="fa fa-times"></i> Cancel </a>
				                                            </div>
				                                        </form>
			                                        </div>
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
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row customerList">
                        <div class="col-md-12">
                        	<div class="profile-content">
	                            <!-- BEGIN PORTLET -->
	                            <div class="portlet light bordered">
	                                <div class="portlet-title">
                                        <div class="col-md-6 md-radio-inline" style="margin-top: 10px;">
                                            <div class="md-radio">
                                                <input id="radio11" name="radio11" value="active" checked="" class="md-radiobtn" type="radio">
                                                <label for="radio11">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> <b>Active List</b> </label>
                                            </div>
                                            <div class="md-radio">
                                                <input id="radio12" name="radio11" value="archive" class="md-radiobtn" type="radio">
                                                <label for="radio12">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Archive List </label>
                                            </div>
                                        </div>
	                                    <a class="btn green-haze btn-sm customerAddVisible" style="float: right;"><i class="fa fa-plus"></i> New Customer </a>
	                                </div>
	                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
									<div class="portlet box light bordered">
										<div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
											<div class="caption">
												<i class="fa fa-th-list" style="color: #E87E04;"></i><span class="caption-subject font-blue-madison bold" style="color: #E87E04 !important;">Active Customer List</span>
											</div>
											<div class="actions">
												<div class="btn-group btn-group-solid">
													<a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_6', 'Customer List Active')"><i class="fa fa-print"></i><span>Print</span></a>
													<a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_6', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
													<a class="btn default" href="#" data-toggle="dropdown">
														<i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
													</a>
													<div id="sample_6_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
														<label><input type="checkbox" checked data-column="0">Show Notes</label>
                                                        <label><input type="checkbox" checked data-column="1">Manage</label>
														<label><input type="checkbox" checked data-column="2">Company</label>
														<label><input type="checkbox" checked data-column="3">Invoices</label>
														<label><input type="checkbox" checked data-column="4">Total Amount</label>
														<label><input type="checkbox" checked data-column="5">Total Due</label>
														<label><input type="checkbox" data-column="6">Email</label>
                                                        <label><input type="checkbox" data-column="7">Phone</label>
                                                        <label><input type="checkbox" data-column="8">Address</label>
														<label><input type="checkbox" data-column="9">Customer ID</label>
                                                        <label><input type="checkbox" data-column="10">Created By</label>
                                                        <label><input type="checkbox" data-column="11">Entry Date</label>
													</div>
													<a id="tFull" class="fullscreen fullscreen-recent dt-button buttons-csv buttons-html5 btn blue btn-outline"><i id="tFullIcon" class="fa fa-expand"></i></a>
												</div>
											</div>
										</div>
										<div id="portlet-body" class="portlet-body">
											<table class="table table-striped table-bordered table-hover dt-responsive" id="sample_6">
												<thead>
													<tr>
                                                        <th>
                                                            Manage
                                                        </th>
                                                        <th>
                                                            Company
                                                        </th>
                                                        <th>
                                                            Invoices
                                                        </th>
														<th>
															Total Amount
														</th>
														<th>
															Total Due
														</th>
														<th>
															Email
														</th>
														<th>
															Phone
														</th>
														<th>
															Address
														</th>
                                                        <th>
                                                            Customer ID
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
                                                    <?php foreach ($activeCustomer as $activeCustomerResult) { 
                                                        $allComments = $this->data_model->get_all_info('*', array('docType' => 'customer', 'docId' => $activeCustomerResult->id), 'list_all_comment');
                                                    ?>
                                                        <tr id="user<?php echo $activeCustomerResult->id; ?>">
                                                            <td>                                                            
                                                                <div class="btn-group" style="margin: -5px">
                                                                    <button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">
                                                                        <li id="view<?php echo $activeCustomerResult->id; ?>">
                                                                            <a target="_blank" href="<?php echo base_url(); ?>profile/customer/<?php echo $activeCustomerResult->id; ?>"><i class="fa fa-search" style="color: #26C281;"></i><span>View Profile</span></a>
                                                                        </li>
                                                                        <li id="edit<?php echo $activeCustomerResult->id; ?>">
                                                                            <a onclick="editData('<?php echo $activeCustomerResult->id; ?>')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Edit</span></a>
                                                                        </li>
                                                                        <li id="delete<?php echo $activeCustomerResult->id; ?>">
                                                                            <a onclick="deleteData('<?php echo $activeCustomerResult->id; ?>')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>                                                      
                                                            </td>
                                                            <td>
                                                                <span id="companyName<?php echo $activeCustomerResult->id; ?>"><?php echo ucfirst($activeCustomerResult->name); ?></span>
                                                                <span id="companyUser<?php echo $activeCustomerResult->id; ?>" style="display: none;"><?php echo ucfirst($activeCustomerResult->nameOfContact); ?></span>
                                                                <span id="address1<?php echo $activeCustomerResult->id; ?>" style="display: none"><?php echo $activeCustomerResult->address1; ?></span>
                                                                <span id="address2<?php echo $activeCustomerResult->id; ?>" style="display: none;"><?php echo $activeCustomerResult->address2; ?></span>
                                                                <span id="web<?php echo $activeCustomerResult->id; ?>" style="display: none;"><?php echo $activeCustomerResult->web; ?></span>
                                                                <span id="systemId<?php echo $activeCustomerResult->id; ?>" style="display: none;"><?php echo $activeCustomerResult->systemId; ?></span>
                                                                <span id="customerId<?php echo $activeCustomerResult->id; ?>" style="display: none;"><?php echo $activeCustomerResult->id; ?></span>
                                                                <span id="phone<?php echo $activeCustomerResult->id; ?>" style="display: none;"><?php echo $activeCustomerResult->phone; ?></span>
                                                                <span id="email<?php echo $activeCustomerResult->id; ?>" style="display: none;"><?php echo $activeCustomerResult->email; ?></span>
                                                                <span id="logo<?php echo $activeCustomerResult->id; ?>" style="display: none;"><?php echo $activeCustomerResult->logo; ?></span>
                                                            </td>
                                                            <td>
                                                                <?php $result = $this->data_model->get_specific_column('*', array('customerId' => $activeCustomerResult->id), 'list_document'); echo count($result); ?>
                                                            </td>
    														<td>
    															<?php 
                                                                    $result = $this->data_model->columnSum('calculateTotalLocal', array('customerId' => $activeCustomerResult->id), 'list_document'); 
                                                                    if($result[0]->calculateTotalLocal != '') {
                                                                        echo "৳ ".number_format($result[0]->calculateTotalLocal, 2);
                                                                    } else {
                                                                        echo "৳ 0.00";
                                                                    }
                                                                ?>
    														</td>
    														<td>
    															<?php 
                                                                    $result = $this->data_model->columnSum('calculateTotalLocal', array('customerId' => $activeCustomerResult->id), 'list_document'); 
                                                                    $amountExpense = $this->data_model->columnSum('adjustAmount', array('docType' => 'invoice', 'customerId' => $activeCustomerResult->id, 'type' => 'Expense'), 'list_payment'); 
                                                                    $amountIncome = $this->data_model->columnSum('adjustAmount', array('docType' => 'invoice', 'customerId' => $activeCustomerResult->id, 'type' => 'Income'), 'list_payment'); 
                                                                    $purchasePaid = $amountIncome[0]->adjustAmount-$amountExpense[0]->adjustAmount;
                                                                    if(count($result) > 0) {
                                                                        if($result[0]->calculateTotalLocal != '') {
                                                                            echo "৳ ".number_format($result[0]->calculateTotalLocal-$purchasePaid, 2);
                                                                        } else {
                                                                            echo "৳ 0.00";
                                                                        }
                                                                    } else {
                                                                        echo "৳ 0.00";
                                                                    }
                                                                ?>
    														</td>
    														<td>
    															<?php echo $activeCustomerResult->email; ?>
    														</td>
    														<td>
    															<?php echo $activeCustomerResult->phone; ?>
    														</td>
    														<td>
                                                                <?php echo $activeCustomerResult->address1; ?><br/>
                                                                <?php echo $activeCustomerResult->address2; ?>
    														</td>
                                                            <td>
                                                                <?php echo $activeCustomerResult->systemId; ?>
                                                            </td>
    														<td>
    															<?php $team = $this->data_model->get_specific_column("name", array("id" => $activeCustomerResult->createdBy), "list_team"); echo $team[0]->name; ?>
    														</td>
    														<td>
    															<?php echo $activeCustomerResult->createdDateTime; ?>
    														</td>
    														<td style="display: none;">
    															<div class="col-md-12 col-sm-12 hiddenComment<?php echo $activeCustomerResult->id; ?>">
                                                                    <div class="portlet">
                                                                        <div class="portlet-body">                                                                          
                                                                            <div class="ibox float-e-margins ui-sortable">
                                                                                <div style="position: static;" class="ibox-content">
                                                                                    <div id="sysfrm_ajaxrender">
                                                                                        <section class="activity-post mb-xlg">
                                                                                            <form id="commentForm<?php echo $activeCustomerResult->id; ?>">
                                                                                                <textarea name="messageText<?php echo $activeCustomerResult->id; ?>" onkeyup="getValueComment(this.value, <?php echo $activeCustomerResult->id; ?>);" id="messageText<?php echo $activeCustomerResult->id; ?>" class="msg messageText<?php echo $activeCustomerResult->id; ?>" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>
                                                                                                <input id="hiddenMessage<?php echo $activeCustomerResult->id; ?>" class="hiddenMessage<?php echo $activeCustomerResult->id; ?>" name="hiddenMessage<?php echo $activeCustomerResult->id; ?>" value="" type="hidden">
                                                                                                <input id="activityType<?php echo $activeCustomerResult->id; ?>" name="activityType<?php echo $activeCustomerResult->id; ?>" value="fa-check" type="hidden">
                                                                                                <input id="activityId" name="activityId" value="<?php echo $activeCustomerResult->id; ?>" type="hidden">
                                                                                                <input id="commentType<?php echo $activeCustomerResult->id; ?>" name="commentType<?php echo $activeCustomerResult->id; ?>" value="customer" type="hidden">
                                                                                                <input id="commentCode<?php echo $activeCustomerResult->id; ?>" name="commentCode<?php echo $activeCustomerResult->id; ?>" value="" type="hidden">
                                                                                                <input id="commentId<?php echo $activeCustomerResult->id; ?>" name="commentId<?php echo $activeCustomerResult->id; ?>" value="" type="hidden">
                                                                                                <input id="commentProcess<?php echo $activeCustomerResult->id; ?>" name="commentProcess<?php echo $activeCustomerResult->id; ?>" value="0" type="hidden">
                                                                                            </form>
                                                                                            <div class="compose-box-footer">
                                                                                                <ul class="compose-toolbar compose-toolbar-success">
                                                                                                    <li onClick="iconChange('fa-hourglass', <?php echo $activeCustomerResult->id; ?>);" class="clickable fa-hourglass<?php echo $activeCustomerResult->id; ?>"><a><i class="fa fa-hourglass"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-hourglass-start', <?php echo $activeCustomerResult->id; ?>);" class="clickable fa-hourglass-start<?php echo $activeCustomerResult->id; ?>"><a><i class="fa fa-hourglass-start"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-hourglass-o', <?php echo $activeCustomerResult->id; ?>);" class="clickable fa-hourglass-o<?php echo $activeCustomerResult->id; ?>"><a><i class="fa fa-hourglass-o"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-balance-scale', <?php echo $activeCustomerResult->id; ?>);" class="clickable fa-balance-scale<?php echo $activeCustomerResult->id; ?>"><a><i class="fa fa-balance-scale"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-adjust', <?php echo $activeCustomerResult->id; ?>);" class="clickable fa-adjust<?php echo $activeCustomerResult->id; ?>"><a><i class="fa fa-adjust"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-certificate', <?php echo $activeCustomerResult->id; ?>);" class="clickable fa-certificate<?php echo $activeCustomerResult->id; ?>"><a><i class="fa fa-certificate"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-check', <?php echo $activeCustomerResult->id; ?>);" class="clickable fa-check<?php echo $activeCustomerResult->id; ?> action-active"><a><i class="fa fa-check"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-times', <?php echo $activeCustomerResult->id; ?>);" class="clickable fa-times<?php echo $activeCustomerResult->id; ?>"><a><i class="fa fa-times"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-exchange', <?php echo $activeCustomerResult->id; ?>);" class="clickable fa-exchange<?php echo $activeCustomerResult->id; ?>"><a><i class="fa fa-exchange"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-cog', <?php echo $activeCustomerResult->id; ?>);" class="clickable fa-cog<?php echo $activeCustomerResult->id; ?>"><a><i class="fa fa-cog"></i></a></li>
                                                                                                </ul>
                                                                                                <ul class="compose-btn">
                                                                                                    <li>
                                                                                                        <a class="save<?php echo $activeCustomerResult->id; ?> btn btn-success btn-xs" onClick="commentProcess('sample_6', <?php echo $activeCustomerResult->id; ?>)"><i class="fa fa-edit"></i> Add Note</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a class="cancle<?php echo $activeCustomerResult->id; ?> btn btn-warning btn-xs" onClick="clickCancle(<?php echo $activeCustomerResult->id; ?>)" style="display: none"><i class="fa fa-times"></i> Cancle</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </section>
                                                                                        <div style="margin-top:20px !important;" class="mt-lg"> </div>
                                                                                            <div id="all_timeline_div" class="all_timeline_div<?php echo $activeCustomerResult->id ?>" data-always-visible="1" data-rail-visible1="1">
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
                                                                                                                        <i onclick="editComment('vendor', <?php echo $activeCustomerResult->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-edit permission iconEdit iconMark"></i>
                                                                                                                        <i onclick="deleteComment('sample_66', <?php echo $activeCustomerResult->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-trash permission iconDelete iconMark"></i>
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
	                            <!-- END PORTLET -->
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row customerListArchive" style="display: none">
                        <div class="col-md-12">
                            <div class="profile-content">
                                <!-- BEGIN PORTLET -->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="col-md-6 md-radio-inline" style="margin-top: 10px;">
                                            <div class="md-radio">
                                                <input id="radio13" name="radio12" value="active" class="md-radiobtn" type="radio">
                                                <label for="radio13">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Active List </label>
                                            </div>
                                            <div class="md-radio">
                                                <input id="radio14" name="radio12" checked="" value="archive" class="md-radiobtn" type="radio">
                                                <label for="radio14">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> <b>Archive List</b> </label>
                                            </div>
                                        </div>
                                        <a class="btn green-haze btn-sm customerAddVisible" style="float: right;"><i class="fa fa-plus"></i> New Customer </a>
                                    </div>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet box light bordered">
                                        <div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
                                            <div class="caption">
                                                <i class="fa fa-th-list" style="color: #E87E04;"></i><span class="caption-subject font-blue-madison bold" style="color: #E87E04 !important;">Archive Customer List</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group btn-group-solid">
                                                    <a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_66', 'Customer List Inactive')"><i class="fa fa-print"></i><span>Print</span></a>
                                                    <a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_66', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
                                                    <a class="btn default" href="#" data-toggle="dropdown">
                                                        <i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div id="sample_66_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                                        <label><input type="checkbox" checked data-column="0">Show Notes</label>
                                                        <label><input type="checkbox" checked data-column="1">Manage</label>
                                                        <label><input type="checkbox" checked data-column="2">Company</label>
                                                        <label><input type="checkbox" checked data-column="3">Invoices</label>
                                                        <label><input type="checkbox" checked data-column="4">Total Amount</label>
                                                        <label><input type="checkbox" checked data-column="5">Total Due</label>
                                                        <label><input type="checkbox" data-column="6">Email</label>
                                                        <label><input type="checkbox" data-column="7">Phone</label>
                                                        <label><input type="checkbox" data-column="8">Address</label>
                                                        <label><input type="checkbox" data-column="9">Customer ID</label>
                                                        <label><input type="checkbox" data-column="10">Created By</label>
                                                        <label><input type="checkbox" data-column="11">Entry Date</label>
                                                    </div>
                                                    <a id="tFull" class="fullscreen fullscreen-recent dt-button buttons-csv buttons-html5 btn blue btn-outline"><i id="tFullIcon" class="fa fa-expand"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="portlet-body" class="portlet-body">
                                            <table class="table table-striped table-bordered table-hover dt-responsive" id="sample_66">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Manage
                                                        </th>
                                                        <th>
                                                            Company
                                                        </th>
                                                        <th>
                                                            Invoices
                                                        </th>
                                                        <th>
                                                            Total Amount
                                                        </th>
                                                        <th>
                                                            Total Due
                                                        </th>
                                                        <th>
                                                            Email
                                                        </th>
                                                        <th>
                                                            Phone
                                                        </th>
                                                        <th>
                                                            Address
                                                        </th>
                                                        <th>
                                                            Customer ID
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
                                                    <?php foreach ($inActiveCustomer as $inActiveCustomerResult) { 
                                                        $allComments = $this->data_model->get_all_info('*', array('docType' => 'customer', 'docId' => $inActiveCustomerResult->id), 'list_all_comment');
                                                    ?>
                                                        <tr id="user<?php echo $inActiveCustomerResult->id; ?>">
                                                            <td>  
                                                                <div class="btn-group" style="margin: -5px">
                                                                    <button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">
                                                                        <li id="view<?php echo $inActiveCustomerResult->id; ?>">
                                                                            <a target="_blank" href="<?php echo base_url(); ?>profile/customer/<?php echo $inActiveCustomerResult->id; ?>"><i class="fa fa-search" style="color: #26C281;"></i><span>View Profile</span></a>
                                                                        </li>
                                                                        <li id="active<?php echo $inActiveCustomerResult->id; ?>">
                                                                            <a onclick="activeData('<?php echo $inActiveCustomerResult->id; ?>')"><i class="fa fa-recycle" style="color: green;"></i><span>Active</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>                                                      
                                                            </td>
                                                            <td>
                                                                <span id="companyName<?php echo $inActiveCustomerResult->id; ?>"><?php echo ucfirst($inActiveCustomerResult->name); ?></span>
                                                                <span id="companyUser<?php echo $inActiveCustomerResult->id; ?>" style="display: none;"><?php echo ucfirst($inActiveCustomerResult->nameOfContact); ?></span>
                                                                <span id="address1<?php echo $inActiveCustomerResult->id; ?>" style="display: none;"><?php echo $inActiveCustomerResult->address1; ?></span>
                                                                <span id="address2<?php echo $inActiveCustomerResult->id; ?>" style="display: none;"><?php echo $inActiveCustomerResult->address2; ?></span>
                                                                <span id="web<?php echo $inActiveCustomerResult->id; ?>" style="display: none;"><?php echo $inActiveCustomerResult->web; ?></span>
                                                                <span id="systemId<?php echo $inActiveCustomerResult->id; ?>" style="display: none;"><?php echo $inActiveCustomerResult->systemId; ?></span>
                                                                <span id="customerId<?php echo $inActiveCustomerResult->id; ?>" style="display: none;"><?php echo $inActiveCustomerResult->id; ?></span>
                                                                <span id="email<?php echo $inActiveCustomerResult->id; ?>" style="display: none;"><?php echo $inActiveCustomerResult->email; ?></span>
                                                                <span id="phone<?php echo $inActiveCustomerResult->id; ?>" style="display: none;"><?php echo $inActiveCustomerResult->phone; ?></span>
                                                                <span id="logo<?php echo $inActiveCustomerResult->id; ?>" style="display: none;"><?php echo $inActiveCustomerResult->logo; ?></span>
                                                            </td>
                                                            <td>
                                                                <?php $result = $this->data_model->get_specific_column('*', array('customerId' => $inActiveCustomerResult->id), 'list_document'); echo count($result); ?>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                    $result = $this->data_model->columnSum('calculateTotalLocal', array('customerId' => $inActiveCustomerResult->id), 'list_document'); 
                                                                    if($result[0]->calculateTotalLocal != '') {
                                                                        echo "৳ ".number_format($result[0]->calculateTotalLocal, 2);
                                                                    } else {
                                                                        echo "৳ 0.00";
                                                                    }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                    $result = $this->data_model->columnSum('calculateTotalLocal', array('customerId' => $inActiveCustomerResult->id), 'list_document'); 
                                                                    $amountExpense = $this->data_model->columnSum('adjustAmount', array('docType' => 'invoice', 'customerId' => $inActiveCustomerResult->id, 'type' => 'Expense'), 'list_payment'); 
                                                                    $amountIncome = $this->data_model->columnSum('adjustAmount', array('docType' => 'invoice', 'customerId' => $inActiveCustomerResult->id, 'type' => 'Income'), 'list_payment'); 
                                                                    $purchasePaid = $amountIncome[0]->adjustAmount-$amountExpense[0]->adjustAmount;
                                                                    if(count($result) > 0) {
                                                                        if($result[0]->calculateTotalLocal != '') {
                                                                            echo "৳ ".number_format($result[0]->calculateTotalLocal-$purchasePaid, 2);
                                                                        } else {
                                                                            echo "৳ 0.00";
                                                                        }
                                                                    } else {
                                                                        echo "৳ 0.00";
                                                                    }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $inActiveCustomerResult->email; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $inActiveCustomerResult->phone; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $inActiveCustomerResult->address1; ?><br/>
                                                                <?php echo $inActiveCustomerResult->address2; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $inActiveCustomerResult->systemId; ?>
                                                            </td>
                                                            <td>
                                                                <?php $team = $this->data_model->get_specific_column("name", array("id" => $inActiveCustomerResult->createdBy), "list_team"); echo $team[0]->name; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $inActiveCustomerResult->createdDateTime; ?>
                                                            </td>
                                                            <td style="display: none;">
                                                                <div class="col-md-12 col-sm-12 hiddenComment<?php echo $inActiveCustomerResult->id; ?>">
                                                                    <div class="portlet">
                                                                        <div class="portlet-body">                                                                          
                                                                            <div class="ibox float-e-margins ui-sortable">
                                                                                <div style="position: static;" class="ibox-content">
                                                                                    <div id="sysfrm_ajaxrender">
                                                                                        <section class="activity-post mb-xlg">
                                                                                            <form id="commentForm<?php echo $inActiveCustomerResult->id; ?>">
                                                                                                <textarea name="messageText<?php echo $inActiveCustomerResult->id; ?>" onkeyup="getValueComment(this.value, <?php echo $inActiveCustomerResult->id; ?>);" id="messageText<?php echo $inActiveCustomerResult->id; ?>" class="msg messageText<?php echo $inActiveCustomerResult->id; ?>" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>
                                                                                                <input id="hiddenMessage<?php echo $inActiveCustomerResult->id; ?>" class="hiddenMessage<?php echo $inActiveCustomerResult->id; ?>" name="hiddenMessage<?php echo $inActiveCustomerResult->id; ?>" value="" type="hidden">
                                                                                                <input id="activityType<?php echo $inActiveCustomerResult->id; ?>" name="activityType<?php echo $inActiveCustomerResult->id; ?>" value="fa-check" type="hidden">
                                                                                                <input id="activityId" name="activityId" value="<?php echo $inActiveCustomerResult->id; ?>" type="hidden">
                                                                                                <input id="commentType<?php echo $inActiveCustomerResult->id; ?>" name="commentType<?php echo $inActiveCustomerResult->id; ?>" value="customer" type="hidden">
                                                                                                <input id="commentCode<?php echo $inActiveCustomerResult->id; ?>" name="commentCode<?php echo $inActiveCustomerResult->id; ?>" value="" type="hidden">
                                                                                                <input id="commentId<?php echo $inActiveCustomerResult->id; ?>" name="commentId<?php echo $inActiveCustomerResult->id; ?>" value="" type="hidden">
                                                                                                <input id="commentProcess<?php echo $inActiveCustomerResult->id; ?>" name="commentProcess<?php echo $inActiveCustomerResult->id; ?>" value="0" type="hidden">
                                                                                            </form>
                                                                                            <div class="compose-box-footer">
                                                                                                <ul class="compose-toolbar compose-toolbar-success">
                                                                                                    <li onClick="iconChange('fa-hourglass', <?php echo $inActiveCustomerResult->id; ?>);" class="clickable fa-hourglass<?php echo $inActiveCustomerResult->id; ?>"><a><i class="fa fa-hourglass"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-hourglass-start', <?php echo $inActiveCustomerResult->id; ?>);" class="clickable fa-hourglass-start<?php echo $inActiveCustomerResult->id; ?>"><a><i class="fa fa-hourglass-start"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-hourglass-o', <?php echo $inActiveCustomerResult->id; ?>);" class="clickable fa-hourglass-o<?php echo $inActiveCustomerResult->id; ?>"><a><i class="fa fa-hourglass-o"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-balance-scale', <?php echo $inActiveCustomerResult->id; ?>);" class="clickable fa-balance-scale<?php echo $inActiveCustomerResult->id; ?>"><a><i class="fa fa-balance-scale"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-adjust', <?php echo $inActiveCustomerResult->id; ?>);" class="clickable fa-adjust<?php echo $inActiveCustomerResult->id; ?>"><a><i class="fa fa-adjust"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-certificate', <?php echo $inActiveCustomerResult->id; ?>);" class="clickable fa-certificate<?php echo $inActiveCustomerResult->id; ?>"><a><i class="fa fa-certificate"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-check', <?php echo $inActiveCustomerResult->id; ?>);" class="clickable fa-check<?php echo $inActiveCustomerResult->id; ?> action-active"><a><i class="fa fa-check"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-times', <?php echo $inActiveCustomerResult->id; ?>);" class="clickable fa-times<?php echo $inActiveCustomerResult->id; ?>"><a><i class="fa fa-times"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-exchange', <?php echo $inActiveCustomerResult->id; ?>);" class="clickable fa-exchange<?php echo $inActiveCustomerResult->id; ?>"><a><i class="fa fa-exchange"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-cog', <?php echo $inActiveCustomerResult->id; ?>);" class="clickable fa-cog<?php echo $inActiveCustomerResult->id; ?>"><a><i class="fa fa-cog"></i></a></li>
                                                                                                </ul>
                                                                                                <ul class="compose-btn">
                                                                                                    <li>
                                                                                                        <a class="save<?php echo $inActiveCustomerResult->id; ?> btn btn-success btn-xs" onClick="commentProcess('sample_66', <?php echo $inActiveCustomerResult->id; ?>)"><i class="fa fa-edit"></i> Add Note</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a class="cancle<?php echo $inActiveCustomerResult->id; ?> btn btn-warning btn-xs" onClick="clickCancle(<?php echo $inActiveCustomerResult->id; ?>)" style="display: none"><i class="fa fa-times"></i> Cancle</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </section>
                                                                                        <div style="margin-top:20px !important;" class="mt-lg"> </div>
                                                                                            <div id="all_timeline_div" class="all_timeline_div<?php echo $inActiveCustomerResult->id ?>" data-always-visible="1" data-rail-visible1="1">
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
                                                                                                                        <i onclick="editComment('vendor', <?php echo $inActiveCustomerResult->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-edit permission iconEdit iconMark"></i>
                                                                                                                        <i onclick="deleteComment('sample_66', <?php echo $inActiveCustomerResult->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-trash permission iconDelete iconMark"></i>
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
            var userPicture = '<?php echo $this->session->userdata('picture'); ?>';
            var customPicture = '<img class="avatar" alt="" src="'+base_link+'assets/uploadedFile/profilePicture/photo3.jpg" />';
            var mobileOperator = ['011', '015', '016', '017', '018', '019'];
            var currentCustomer = '';
            var totalCustomer = "<?php echo $totalCustomer; ?>";
            var currentActivity = '';
            var totalActivity =  "<?php echo $totalActivity; ?>";
            var currentComment = '';
            var totalComment = "<?php echo $totalComment; ?>";
            var currentdate = new Date();
            var getDateTime = currentdate.getFullYear() + "-"
                            + (currentdate.getMonth()+1)  + "-" 
                            + currentdate.getDate() + " "  
                            + (currentdate.getHours() % 12 || 12) + ":"  
                            + currentdate.getMinutes() + ":" 
                            + currentdate.getSeconds();
            var uriSegment = '<?php echo $this->uri->segment(2); ?>';
            var error = false;
            var countCustomers = <?php echo $countCustomer; ?>;
        	var customURL = '';
            var liveSystemCode = '';
            var getDate = currentdate.getDate() + "-"
                            + (currentdate.getMonth()+1)  + "-" 
                            + currentdate.getFullYear().toString().substr(2,2)
            var getMiliseconds = currentdate.getTime();
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
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.mockjax.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/inputs-ext/address/address.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
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
        <script src="<?php echo base_url(); ?>assets/pages/scripts/form-dropzone.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/jquery.prefix-input.js" type="text/javascript"></script>
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
            if(uriSegment == 'edit') {
                //$('#edit<?php echo $this->uri->segment(3) ?>');
                window.onload = function() {
                    editData(<?php echo $this->uri->segment(3) ?>);
                };
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
            function customerListId() {
                if(totalCustomer < 10) {
                    currentCustomer = "00000"+(++totalCustomer);
                } else if(totalCustomer < 100) {
                    currentCustomer = "0000"+(++totalCustomer);                
                } else if(totalCustomer < 1000) {
                    currentCustomer = "000"+(++totalCustomer);                
                } else if(totalCustomer < 10000) {
                    currentCustomer = "00"+(++totalCustomer);                
                } else if(totalCustomer < 100000) {
                    currentCustomer = "0"+(++totalCustomer);                
                }
                $("#systemCode").val("bcc"+(currentCustomer));
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
            customerListId();
            function fileExists(file) {
                $.post(base_link+"team/fileExists",{
                  file: file
                },
                function(data, status){
                    r = $.parseJSON(data);
                    return r.response;
                });
            }
            $('<audio id="chatAudio"><source src="'+base_link+'assets/uploadedFile/sound/notify.ogg" type="audio/ogg"><source src="'+base_link+'assets/uploadedFile/sound/notify.mp3" type="audio/mpeg"><source src="'+base_link+'assets/uploadedFile/sound/notify.wav" type="audio/wav"></audio>').appendTo('body');
            function setLoadingImage() {
                var loadingImageCollection = ['loading16.gif'];
                var loadingImage = Math.floor(Math.random()*loadingImageCollection.length);
                var ImgSrc = base_link+"assets/uploadedFile/animation/"+loadingImageCollection[loadingImage];
                $('#loading').attr("src", ImgSrc);
            }          
            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test( $email );
            }
        	$('.customerListVisible').live('click', function(e) {
                $('#updateData').attr('id', 'insertData');
                $('#insertData').html('<i class="fa fa-save"></i> Save');
                $('#updateDataNew').attr('id', 'insertDataNew');
                $('#insertDataNew').html('<i class="fa fa-newspaper-o"></i> Save & New');
                $('#addCustomer')[0].reset();
                $('#productPicture').css('display', 'block');
                $('#productPictureDiv').css('display', 'none');
                $('#productPictureImg').attr('src', base_link +'assets/uploadedFile/customerPicture/logo.jpg');
                $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
				$('.addCustomer').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
				$('#addCustomer').trigger("reset");
				$("html, body").animate({ scrollTop: '0px' }, "slow");
			});
        	$('.customerAddVisible').live('click', function(e) {
        		$('.addCustomer').stop(true, true).fadeIn({ duration: 1500, queue: false }).css('display', 'none').slideDown(1500);    
        		$("html, body").animate({ scrollTop: '0px' }, "slow");
			});
			jQuery(document).ready(function() { 
			    TableAdvanced.init();
			});
			var counter = 1;  
			function editData(id) {
				var table = $('#sample_6').DataTable();
                $('#insertData').attr('id', 'updateData');
                $('#updateData').html('<i class="fa fa-save"></i> Update');
                $('#insertDataNew').attr('id', 'updateDataNew');
                $('#updateDataNew').html('<i class="fa fa-newspaper-o"></i> Update & New');
                $('#nameCompany').addClass('edited');
                $('#nameCompany').val($('#user'+id).closest('tr').find('td:eq(2) #companyName'+id).text().trim());
                $('#nameUser').addClass('edited');
                $('#nameUser').val($('#user'+id).closest('tr').find('td:eq(2) #companyUser'+id).text().trim());
                $('#address1').addClass('edited');
                $('#address1').val($('#user'+id).closest('tr').find('td:eq(2) #address1'+id).text().trim());
                $('#address2').addClass('edited');
                $('#address2').val($('#user'+id).closest('tr').find('td:eq(2) #address2'+id).text().trim());
                $('#webUrl').addClass('edited');
                $('#webUrl').val($('#user'+id).closest('tr').find('td:eq(2) #web'+id).text().trim());
                $('#phone').addClass('edited');
                $('#phone').val($('#user'+id).closest('tr').find('td:eq(2) #phone'+id).text().trim());
                $('#email').addClass('edited');
                $('#email').val($('#user'+id).closest('tr').find('td:eq(2) #email'+id).text().trim());
                $('#productImg').val($('#user'+id).closest('tr').find('td:eq(2) #logo'+id).text().trim());
                if($('#productImg').val() != '') {
                    $('#productPicture').css('display', 'none');
                    $('#productPictureDiv').css('display', 'block');
                    $('#productPictureImg').attr('src', base_link +'assets/uploadedFile/customerPicture/'+$('#user'+id).closest('tr').find('td:eq(2) #logo'+id).text().trim());
                }
                $('#editId').val($('#user'+id).closest('tr').find('td:eq(2) #customerId'+id).text().trim());
                $('.addCustomer').stop(true, true).fadeIn({ duration: 1500, queue: false }).css('display', 'none').slideDown(1500);    
                $("html, body").animate({ scrollTop: '0px' }, "slow");
			}
			function deleteData(id) {
				swal({
					title: "Are you sure?",
					text: "The system will not be calculated any data within the archive.",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "Yes, archive it!",
					cancelButtonText: "No, cancel please!",
					closeOnConfirm: false,
					closeOnCancel: false
				},
				function(isConfirm){
                    var table = $('#sample_6').DataTable();
					if (isConfirm) {
                        $('#user'+id).closest('tr').find('td:eq(1) #edit'+id).remove();
                        $('#user'+id).closest('tr').find('td:eq(1) #delete'+id).remove();
                        var activeTd =  '<li id="active'+id+'">'+
                                            '<a onclick="activeData(\''+id+'\')"><i class="fa fa-recycle" style="color: green;"></i><span>Active</span></a>'+
                                        '</li>';
                        $(activeTd).insertAfter('#view'+id);
                        var remarks = $('#user'+id).closest('tr').find('td:eq(6)').html();
                        var rowIndex = $('#sample_66').dataTable().fnAddData( 
                            [ 
                                '<span class="row-details row-details-close"></span>',
                                $('#user'+id).closest('tr').find('td:eq(1)').html(),
                                table.row('#user'+id).data()[2],
                                table.row('#user'+id).data()[3],
                                table.row('#user'+id).data()[4],
                                table.row('#user'+id).data()[5],
                                table.row('#user'+id).data()[6],
                                table.row('#user'+id).data()[7],
                                table.row('#user'+id).data()[8],
                                table.row('#user'+id).data()[9],
                                table.row('#user'+id).data()[10],
                                table.row('#user'+id).data()[11],
                                remarks
                            ]
                        );
                        var row = $('#sample_66').dataTable().fnGetNodes(rowIndex);
                        $(row).attr('id', 'user'+id);
                        $('#sample_66 tr td:last-child').css('display', 'none');
						  
						$.ajax({
                            type: 'post',
                            url: base_link + "customer/customerStatus",
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
                                            $('.countCustomers').text(--countCustomers);
                                            $("#user"+id).slideUp("normal", function() { $(this).remove(); table.draw(); });
                                            toastr.error(" You successfully archive customer ", "Archive Customer");
                                        }, 1500);
                                        swal({
                                            title: "Archive!",
                                            text: "This customer has been archived.",
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
                                        data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=archive'+ '&title=customer'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/customer/'+totalCustomer,
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
            function activeData(id) {
                swal({
                    title: "Are you sure?",
                    text: "The system will be calculated all data within the active.",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, active it!",
                    cancelButtonText: "No, cancel please!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    var table = $('#sample_66').DataTable();
                    if (isConfirm) {
                        $('#user'+id).closest('tr').find('td:eq(1) #active'+id).remove();
                        var editTd      =  '<li id="edit'+id+'">'+
                                                '<a onclick="editData(\''+id+'\')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Edit</span></a>'+
                                            '</li>';
                        var deleteTd    =  '<li id="delete'+id+'">'+
                                                '<a onclick="deleteData(\''+id+'\')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>'+
                                            '</li>';
                        $(editTd).insertAfter('#view'+id);
                        $(deleteTd).insertAfter('#edit'+id);
                        var remarks = $('#user'+id).closest('tr').find('td:eq(6)').html();                        
                        var rowIndex = $('#sample_6').dataTable().fnAddData( 
                            [ 
                                '<span class="row-details row-details-close"></span>',
                                $('#user'+id).closest('tr').find('td:eq(1)').html(),
                                table.row('#user'+id).data()[2],
                                table.row('#user'+id).data()[3],
                                table.row('#user'+id).data()[4],
                                table.row('#user'+id).data()[5],
                                table.row('#user'+id).data()[6],
                                table.row('#user'+id).data()[7],
                                table.row('#user'+id).data()[8],
                                table.row('#user'+id).data()[9],
                                table.row('#user'+id).data()[10],
                                table.row('#user'+id).data()[11],
                                remarks
                            ]
                        );
                        var row = $('#sample_6').dataTable().fnGetNodes(rowIndex);
                        $(row).attr('id', 'user'+id);
                        $('#sample_6 tr td:last-child').css('display', 'none');
                          
                        $.ajax({
                            type: 'post',
                            url: base_link + "customer/customerStatus",
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
                                            $('.countCustomers').text(++countCustomers);
                                            $("#sample_66 #user"+id).slideUp("normal", function() { $(this).remove(); });
                                            toastr.success(" You successfully active customer ", "Active Customer");
                                        }, 1500);
                                        swal({
                                            title: "Activate!",
                                            text: "This customer has been activate.",
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
                                        data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=archive'+ '&title=customer'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/customer/'+totalCustomer,
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
							url: base_link+"preCustomerion/reorder_style_post",
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
									var acType = "fa-plus";
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
            $("input[name='radio11']").click(function(){
                if($('input:radio[name=radio11]:checked').val() == "archive"){                    
                    $(".customerList").css('display', 'none'); 
                    $(".customerListArchive").css('display', 'block');
                    $('#radio11').prop('checked', true);
                } else {
                    $(".customerList").css('display', 'block'); 
                    $(".customerListArchive").css('display', 'none');
                }
            });
            $("input[name='radio12']").click(function(){
                if($('input:radio[name=radio12]:checked').val() == "active"){
                    $(".customerList").css('display', 'block'); 
                    $(".customerListArchive").css('display', 'none');
                    $('#radio14').prop('checked', true);
                } else {                  
                    $(".customerList").css('display', 'none'); 
                    $(".customerListArchive").css('display', 'block');
                }
            });

            $("#phone").keydown(function (e) {
                // Prevent if already dot
                // if(e.which == 46 && $(this).val().indexOf('.') != -1) {
                //     e.preventDefault();
                // } 
                // Allow: delete, backspace, tab, escape, enter and (. 110, 190)
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
                     // Allow: Ctrl+A, Command+A
                    (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
                     // Allow: Ctrl+C, Command+C
                    (e.keyCode == 67 && ( e.ctrlKey === true || e.metaKey === true ) ) ||
                     // Allow: Ctrl+R, Command+R
                    (e.keyCode == 82 && ( e.ctrlKey === true || e.metaKey === true ) ) ||
                     // Allow: Ctrl+V, Command+V
                    (e.keyCode == 86 && ( e.ctrlKey === true || e.metaKey === true ) ) ||
                     // Allow: Ctrl+X, Command+X
                    (e.keyCode == 88 && ( e.ctrlKey === true || e.metaKey === true ) ) ||  
                     // Allow: home, end, left, right, down, up
                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                         // let it happen, don't do anything
                         return true;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });

            $("#email").blur(function() {
                var userValue = $('#email').val();
                if(!validateEmail(userValue)) {
                    $('#emailDiv').removeClass('has-success');
                    $('#emailDiv').addClass('has-error');
                } else {
                    $.post(base_link+"customer/live_email", {
                        email: $('#email').val()
                    }, function(response){
                        if(response == 'exist') {                        
                            $('#emailDiv').removeClass('has-success');
                            $('#emailDiv').addClass('has-error');
                        } else {                        
                            $('#emailDiv').removeClass('has-success has-error');
                        }
                    });
                    return false;
                }
            });

            $('#insertData').live('click', function(e) {
                var error = false;
                var nameCompany = $('#nameCompany').val();
                var nameUser = $('#nameUser').val();
                var address1 = $('#address1').val();
                var address2 = $('#address2').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var webUrl = $('#webUrl').val();
                if (nameCompany != '') {
                    $('#nameCompanyDiv').addClass('has-success');
                    $('#nameCompanyDiv').removeClass('has-error');
                } else {
                    $('#nameCompanyDiv').removeClass('has-success');
                    $('#nameCompanyDiv').addClass('has-error');
                    error = true;
                }
                if (nameUser != '') {
                    $('#nameUserDiv').addClass('has-success');
                    $('#nameUserDiv').removeClass('has-warning');
                } else {
                    $('#nameUserDiv').removeClass('has-success');
                    $('#nameUserDiv').addClass('has-warning');
                }
                if (address1 != '') {
                    $('#address1Div').addClass('has-success');
                    $('#address1Div').removeClass('has-error');
                } else {
                    $('#address1Div').removeClass('has-success');
                    $('#address1Div').addClass('has-error');
                    error = true;
                }
                if (address2 != '') {
                    $('#address2Div').addClass('has-success');
                    $('#address2Div').removeClass('has-warning');
                } else {
                    $('#address2Div').removeClass('has-success');
                    $('#address2Div').addClass('has-warning');
                }
                if(email == '' || !validateEmail(email)) {
                    $('#emailDiv').removeClass('has-success');
                    $('#emailDiv').addClass('has-error');
                    error = true;
                } else {
                    $('#emailDiv').addClass('has-success');
                    $('#emailDiv').removeClass('has-error');
                }
                if(phone != '' && phone.length < 15) {
                    $('#phoneDiv').removeClass('has-warning');
                    $('#phoneDiv').removeClass('has-error');
                    $('#phoneDiv').addClass('has-success');
                } else {
                    $('#phoneDiv').removeClass('has-success');
                    $('#phoneDiv').removeClass('has-warning');
                    $('#phoneDiv').addClass('has-error');
                    error = true;
                }
                if (webUrl != '') {
                    $('#webUrlDiv').addClass('has-success');
                    $('#webUrlDiv').removeClass('has-warning');
                } else {
                    $('#webUrlDiv').removeClass('has-success');
                    $('#webUrlDiv').addClass('has-warning');
                }
                if(!error) {
                    $.ajax({
                        url: base_link+'customer/addCustomer',
                        type: 'POST',
                        data: $('form').serialize(),
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
                                        toastr.success(" You successfully added customer "+nameCompany, "Add Customer");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=customer'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/customer/'+totalCustomer,
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
                                    fnClickAddRow();
                                    $('.countCustomers').text(++countCustomers);
                                    $('#sample_6 tbody tr:first').attr('id');
                                    $('#sample_6 tbody tr:first').attr('id','user'+totalCustomer);
                                    $('#sample_6 tr td:last-child').css('display', 'none');
                                    $('.addCustomer').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                                    $('#addCustomer').trigger("reset");
                                    $("html, body").animate({ scrollTop: '0px' }, "slow");
                                    $('#addCustomer')[0].reset();
                                    $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                                    customerListId();
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
            });
            $('#insertDataNew').live('click', function(e) {
                var error = false;
                var nameCompany = $('#nameCompany').val();
                var nameUser = $('#nameUser').val();
                var address1 = $('#address1').val();
                var address2 = $('#address2').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var webUrl = $('#webUrl').val();
                if (nameCompany != '') {
                    $('#nameCompanyDiv').addClass('has-success');
                    $('#nameCompanyDiv').removeClass('has-error');
                } else {
                    $('#nameCompanyDiv').removeClass('has-success');
                    $('#nameCompanyDiv').addClass('has-error');
                    error = true;
                }
                if (nameUser != '') {
                    $('#nameUserDiv').addClass('has-success');
                    $('#nameUserDiv').removeClass('has-warning');
                } else {
                    $('#nameUserDiv').removeClass('has-success');
                    $('#nameUserDiv').addClass('has-warning');
                }
                if (address1 != '') {
                    $('#address1Div').addClass('has-success');
                    $('#address1Div').removeClass('has-error');
                } else {
                    $('#address1Div').removeClass('has-success');
                    $('#address1Div').addClass('has-error');
                    error = true;
                }
                if (address2 != '') {
                    $('#address2Div').addClass('has-success');
                    $('#address2Div').removeClass('has-warning');
                } else {
                    $('#address2Div').removeClass('has-success');
                    $('#address2Div').addClass('has-warning');
                }
                if(email == '' || !validateEmail(email)) {
                    $('#emailDiv').removeClass('has-success');
                    $('#emailDiv').addClass('has-error');
                    error = true;
                } else {
                    $('#emailDiv').addClass('has-success');
                    $('#emailDiv').removeClass('has-error');
                }
                if(phone != '' && phone.length < 15) {
                    $('#phoneDiv').removeClass('has-warning');
                    $('#phoneDiv').removeClass('has-error');
                    $('#phoneDiv').addClass('has-success');
                } else {
                    $('#phoneDiv').removeClass('has-success');
                    $('#phoneDiv').removeClass('has-warning');
                    $('#phoneDiv').addClass('has-error');
                    error = true;
                }
                if (webUrl != '') {
                    $('#webUrlDiv').addClass('has-success');
                    $('#webUrlDiv').removeClass('has-warning');
                } else {
                    $('#webUrlDiv').removeClass('has-success');
                    $('#webUrlDiv').addClass('has-warning');
                }
                if(!error) {
                    $.ajax({
                        url: base_link+'customer/addCustomer',
                        type: 'POST',
                        data: $('form').serialize(),
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
                                        toastr.success(" You successfully added customer "+nameCompany, "Add Customer");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=customer'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/customer/'+totalCustomer,
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
                                    fnClickAddRow();
                                    $('.countCustomers').text(++countCustomers);
                                    $('#sample_6 tbody tr:first').attr('id');
                                    $('#sample_6 tbody tr:first').attr('id','user'+totalCustomer);
                                    $('#sample_6 tr td:last-child').css('display', 'none');
                                    $('#addCustomer').trigger("reset");
                                    $("html, body").animate({ scrollTop: '0px' }, "slow");
                                    $('#addCustomer')[0].reset();
                                    $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                                    customerListId();
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
            });
            function fnClickAddRow() {                  
                var nameCompany = $('#nameCompany').val();
                var nameUser = $('#nameUser').val();
                var address1 = $('#address1').val();
                var address2 = $('#address2').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var webUrl = $('#webUrl').val(); 
                var dateTime = getDateTime;

                $('#sample_6').dataTable().fnAddData( 
                    [ 
                        '<span class="row-details row-details-close"></span>',
                        '<div class="btn-group" style="margin: -5px">'+
                            '<button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage'+
                                '<i class="fa fa-angle-down"></i>'+
                            '</button>'+
                            '<ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">'+
                                '<li id="view'+totalCustomer+'">'+
                                    '<a href="<?php echo base_url(); ?>profile/customer/'+totalCustomer+'"><i class="fa fa-search" style="color: #26C281;"></i><span>View Profile</span></a>'+
                                '</li>'+
                                '<li id="edit'+totalCustomer+'">'+
                                    '<a onclick="editData(\''+totalCustomer+'\')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Edit</span></a>'+
                                '</li>'+
                                '<li id="delete'+totalCustomer+'">'+
                                    '<a onclick="deleteData(\''+totalCustomer+'\')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>'+
                                '</li>'+
                            '</ul>'+
                        '</div>',  
                        '<span id="companyName'+totalCustomer+'">'+nameCompany+'</span><span id="companyUser'+totalCustomer+'" style="display:none;">'+nameUser+'</span>',
                        '0',  
                        '0',  
                        '0',
                        ''+email+'',  
                        ''+phone+'',   
                        '<span id="address1'+totalCustomer+'">'+address1+'</span><span id="address2'+totalCustomer+'" style="display:none;">'+address2+'</span><span id="web'+totalCustomer+'" style="display:none;">'+webUrl+'</span>', 
                        '<span id="systemId'+totalCustomer+'">bcc'+currentCustomer+'</span><span id="customerId'+totalCustomer+'" style="display:none;">'+totalCustomer+'</span>',
                        ''+userNameFull+'',  
                        dateTime,
                        '<div class="col-md-12 col-sm-12 hiddenComment'+totalCustomer+'">'+
                            '<div class="portlet">'+
                                '<div class="portlet-body">                                                                          '+
                                    '<div class="ibox float-e-margins ui-sortable">'+
                                        '<div style="position: static;" class="ibox-content">'+
                                            '<div id="sysfrm_ajaxrender">'+
                                                '<section class="activity-post mb-xlg">'+
                                                    '<form id="commentForm'+totalCustomer+'">'+
                                                        '<textarea name="messageText'+totalCustomer+'" onkeyup="getValueComment(this.value, '+totalCustomer+');" id="messageText'+totalCustomer+'" class="msg messageText'+totalCustomer+'" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>'+
                                                        '<input id="hiddenMessage'+totalCustomer+'" class="hiddenMessage'+totalCustomer+'" name="hiddenMessage'+totalCustomer+'" value="" type="hidden">'+
                                                        '<input id="activityType'+totalCustomer+'" name="activityType'+totalCustomer+'" value="" type="hidden">'+
                                                        '<input id="activityId" name="activityId" value="'+totalCustomer+'" type="hidden">'+
                                                        '<input id="commentType'+totalCustomer+'" name="commentType'+totalCustomer+'" value="customer" type="hidden">'+
                                                        '<input id="commentCode'+totalCustomer+'" name="commentCode'+totalCustomer+'" value="" type="hidden">'+
                                                        '<input id="commentId'+totalCustomer+'" name="commentId'+totalCustomer+'" value="" type="hidden">'+
                                                        '<input id="commentProcess'+totalCustomer+'" name="commentProcess'+totalCustomer+'" value="0" type="hidden">'+
                                                    '</form>'+
                                                    '<div class="compose-box-footer">'+
                                                        '<ul class="compose-toolbar">'+
                                                            '<li onClick="iconChange(\'fa-hourglass\', '+totalCustomer+');" class="clickable fa-hourglass'+totalCustomer+'"><a><i class="fa fa-hourglass"></i></a></li>'+
                                                            '<li onClick="iconChange(\'fa-hourglass-start\', '+totalCustomer+');" class="clickable fa-hourglass-start'+totalCustomer+'"><a><i class="fa fa-hourglass-start"></i></a></li>'+
                                                            '<li onClick="iconChange(\'fa-hourglass-o\', '+totalCustomer+');" class="clickable fa-hourglass-o'+totalCustomer+'"><a><i class="fa fa-hourglass-o"></i></a></li>'+
                                                            '<li onClick="iconChange(\'fa-balance-scale\', '+totalCustomer+');" class="clickable fa-balance-scale'+totalCustomer+'"><a><i class="fa fa-balance-scale"></i></a></li>'+
                                                            '<li onClick="iconChange(\'fa-adjust\', '+totalCustomer+');" class="clickable fa-adjust'+totalCustomer+'"><a><i class="fa fa-adjust"></i></a></li>'+
                                                            '<li onClick="iconChange(\'fa-certificate\', '+totalCustomer+');" class="clickable fa-certificate'+totalCustomer+'"><a><i class="fa fa-certificate"></i></a></li>'+
                                                            '<li onClick="iconChange(\'fa-check\', '+totalCustomer+');" class="clickable fa-check'+totalCustomer+'"><a><i class="fa fa-check"></i></a></li>'+
                                                            '<li onClick="iconChange(\'fa-times\', '+totalCustomer+');" class="clickable fa-times'+totalCustomer+'"><a><i class="fa fa-times"></i></a></li>'+
                                                            '<li onClick="iconChange(\'fa-exchange\', '+totalCustomer+');" class="clickable fa-exchange'+totalCustomer+'"><a><i class="fa fa-exchange"></i></a></li>'+
                                                            '<li onClick="iconChange(\'fa-cog\', '+totalCustomer+');" class="clickable fa-cog'+totalCustomer+'"><a><i class="fa fa-cog"></i></a></li>'+
                                                        '</ul>'+
                                                        '<ul class="compose-btn">'+
                                                            '<li>'+
                                                                '<a class="save'+totalCustomer+' btn btn-success btn-xs" onClick="commentProcess(\'sample_6\', '+totalCustomer+')"><i class="fa fa-edit"></i> Add Note</a>'+
                                                            '</li>'+
                                                            '<li>'+
                                                                '<a class="cancle'+totalCustomer+' btn btn-warning btn-xs" onClick="clickCancle('+totalCustomer+')" style="display: none"><i class="fa fa-times"></i> Cancle</a>'+
                                                            '</li>'+
                                                        '</ul>'+
                                                    '</div>'+
                                                '</section>'+
                                                '<div style="margin-top:20px !important;" class="mt-lg"> </div>'+
                                                    '<div id="all_timeline_div" class="all_timeline_div'+totalCustomer+'" data-always-visible="1" data-rail-visible1="1">'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>',
                    ]
                );  
                counter++;   
            } 
            $('#updateData').live('click', function(e) {
                var error = false;
                var nameCompany = $('#nameCompany').val();
                var nameUser = $('#nameUser').val();
                var address1 = $('#address1').val();
                var address2 = $('#address2').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var webUrl = $('#webUrl').val();
                if (nameCompany != '') {
                    $('#nameCompanyDiv').addClass('has-success');
                    $('#nameCompanyDiv').removeClass('has-error');
                } else {
                    $('#nameCompanyDiv').removeClass('has-success');
                    $('#nameCompanyDiv').addClass('has-error');
                    error = true;
                }
                if (nameUser != '') {
                    $('#nameUserDiv').addClass('has-success');
                    $('#nameUserDiv').removeClass('has-warning');
                } else {
                    $('#nameUserDiv').removeClass('has-success');
                    $('#nameUserDiv').addClass('has-warning');
                }
                if (address1 != '') {
                    $('#address1Div').addClass('has-success');
                    $('#address1Div').removeClass('has-error');
                } else {
                    $('#address1Div').removeClass('has-success');
                    $('#address1Div').addClass('has-error');
                    error = true;
                }
                if (address2 != '') {
                    $('#address2Div').addClass('has-success');
                    $('#address2Div').removeClass('has-warning');
                } else {
                    $('#address2Div').removeClass('has-success');
                    $('#address2Div').addClass('has-warning');
                }
                if(email == '' || !validateEmail(email)) {
                    $('#emailDiv').removeClass('has-success');
                    $('#emailDiv').addClass('has-error');
                    error = true;
                } else {
                    $('#emailDiv').addClass('has-success');
                    $('#emailDiv').removeClass('has-error');
                }
                if(phone != '' && phone.length < 15) {
                    $('#phoneDiv').removeClass('has-warning');
                    $('#phoneDiv').removeClass('has-error');
                    $('#phoneDiv').addClass('has-success');
                } else {
                    $('#phoneDiv').removeClass('has-success');
                    $('#phoneDiv').removeClass('has-warning');
                    $('#phoneDiv').addClass('has-error');
                    error = true;
                }
                if (webUrl != '') {
                    $('#webUrlDiv').addClass('has-success');
                    $('#webUrlDiv').removeClass('has-warning');
                } else {
                    $('#webUrlDiv').removeClass('has-success');
                    $('#webUrlDiv').addClass('has-warning');
                }
                if(!error) {
                    $.ajax({
                        url: base_link+'customer/updateCustomer',
                        type: 'POST',
                        data: $('form').serialize(),
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
                                        toastr.warning(" You successfully update customer "+nameCompany, "Update Customer");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-edit";
                                var acLabel = "label-warning";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=edit'+ '&title=customer'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/customer/'+$('#editId').val(),
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
                                    var table = $('#sample_6').DataTable();
                                    var id = $('#editId').val();
                                    var cell = table.cell($('#user'+id), 6);
                                    cell.data(email);
                                    var cell = table.cell($('#user'+id), 7);
                                    cell.data(phone);
                                    var cell = table.cell($('#user'+id), 8);
                                    cell.data(address1);
                                    $('#user'+id).closest('tr').find('td:eq(2) #companyName'+id).text(nameCompany);
                                    $('#user'+id).closest('tr').find('td:eq(2) #companyUser'+id).text(nameUser);
                                    $('#user'+id).closest('tr').find('td:eq(2) #email'+id).text(email);
                                    $('#user'+id).closest('tr').find('td:eq(2) #phone'+id).text(phone);
                                    $('#user'+id).closest('tr').find('td:eq(2) #address1'+id).text(address1);
                                    $('#user'+id).closest('tr').find('td:eq(2) #address2'+id).text(address2);
                                    $('#user'+id).closest('tr').find('td:eq(2) #web'+id).text(webUrl);
                                    $('#productPicture').css('display', 'block');
                                    $('#productPictureDiv').css('display', 'none');
                                    $('#productPictureImg').attr('src', base_link +'assets/uploadedFile/customerPicture/logo.jpg');
                                    $('.addCustomer').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                                    $('#addCustomer').trigger("reset");
                                    $("html, body").animate({ scrollTop: '0px' }, "slow");
                                    $('#updateData').attr('id', 'insertData');
                                    $('#insertData').html('<i class="fa fa-save"></i> Save');
                                    $('#updateDataNew').attr('id', 'insertDataNew');
                                    $('#insertDataNew').html('<i class="fa fa-newspaper-o"></i> Save & New');
                                    $('#addCustomer')[0].reset();
                                    $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                                }, 2000);
                            } else {
                                if(r.response == 'formManipulation') {
                                    sweetAlert("Oops...", "Why you manipulate system.", "error");                                   
                                } else if(r.response == 'Already exist') {
                                    $('#emailDiv').removeClass('has-success');
                                    $('#emailDiv').addClass('has-error');
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
            $('#updateDataNew').live('click', function(e) {
                var error = false;
                var nameCompany = $('#nameCompany').val();
                var nameUser = $('#nameUser').val();
                var address1 = $('#address1').val();
                var address2 = $('#address2').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var webUrl = $('#webUrl').val();
                if (nameCompany != '') {
                    $('#nameCompanyDiv').addClass('has-success');
                    $('#nameCompanyDiv').removeClass('has-error');
                } else {
                    $('#nameCompanyDiv').removeClass('has-success');
                    $('#nameCompanyDiv').addClass('has-error');
                    error = true;
                }
                if (nameUser != '') {
                    $('#nameUserDiv').addClass('has-success');
                    $('#nameUserDiv').removeClass('has-warning');
                } else {
                    $('#nameUserDiv').removeClass('has-success');
                    $('#nameUserDiv').addClass('has-warning');
                }
                if (address1 != '') {
                    $('#address1Div').addClass('has-success');
                    $('#address1Div').removeClass('has-error');
                } else {
                    $('#address1Div').removeClass('has-success');
                    $('#address1Div').addClass('has-error');
                    error = true;
                }
                if (address2 != '') {
                    $('#address2Div').addClass('has-success');
                    $('#address2Div').removeClass('has-warning');
                } else {
                    $('#address2Div').removeClass('has-success');
                    $('#address2Div').addClass('has-warning');
                }
                if(email == '' || !validateEmail(email)) {
                    $('#emailDiv').removeClass('has-success');
                    $('#emailDiv').addClass('has-error');
                    error = true;
                } else {
                    $('#emailDiv').addClass('has-success');
                    $('#emailDiv').removeClass('has-error');
                }
                if(phone != '' && phone.length < 15) {
                    $('#phoneDiv').removeClass('has-warning');
                    $('#phoneDiv').removeClass('has-error');
                    $('#phoneDiv').addClass('has-success');
                } else {
                    $('#phoneDiv').removeClass('has-success');
                    $('#phoneDiv').removeClass('has-warning');
                    $('#phoneDiv').addClass('has-error');
                    error = true;
                }
                if (webUrl != '') {
                    $('#webUrlDiv').addClass('has-success');
                    $('#webUrlDiv').removeClass('has-warning');
                } else {
                    $('#webUrlDiv').removeClass('has-success');
                    $('#webUrlDiv').addClass('has-warning');
                }
                if(!error) {
                    $.ajax({
                        url: base_link+'customer/updateCustomer',
                        type: 'POST',
                        data: $('form').serialize(),
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
                                        toastr.warning(" You successfully update customer "+nameCompany, "Update Customer");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-edit";
                                var acLabel = "label-warning";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=edit'+ '&title=customer'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/customer/'+$('#editId').val(),
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
                                    var table = $('#sample_6').DataTable();
                                    var id = $('#editId').val();
                                    var cell = table.cell($('#user'+id), 6);
                                    cell.data(email);
                                    var cell = table.cell($('#user'+id), 7);
                                    cell.data(phone);
                                    var cell = table.cell($('#user'+id), 8);
                                    cell.data(address1);
                                    $('#user'+id).closest('tr').find('td:eq(2) #companyName'+id).text(nameCompany);
                                    $('#user'+id).closest('tr').find('td:eq(2) #companyUser'+id).text(nameUser);
                                    $('#user'+id).closest('tr').find('td:eq(2) #email'+id).text(email);
                                    $('#user'+id).closest('tr').find('td:eq(2) #phone'+id).text(phone);
                                    $('#user'+id).closest('tr').find('td:eq(2) #address1'+id).text(address1);
                                    $('#user'+id).closest('tr').find('td:eq(2) #address2'+id).text(address2);
                                    $('#user'+id).closest('tr').find('td:eq(2) #web'+id).text(webUrl);
                                    $('#productPicture').css('display', 'block');
                                    $('#productPictureDiv').css('display', 'none');
                                    $('#productPictureImg').attr('src', base_link +'assets/uploadedFile/customerPicture/logo.jpg');
                                    $('#addCustomer')[0].reset();
                                    $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                                }, 2000);
                            } else {
                                if(r.response == 'formManipulation') {
                                    sweetAlert("Oops...", "Why you manipulate system.", "error");                                   
                                } else if(r.response == 'Already exist') {
                                    $('#emailDiv').removeClass('has-success');
                                    $('#emailDiv').addClass('has-error');
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
            function removeLogo(id, hiddenInput) {
                if($('#productImg').text() == '') {
                    $('.productPictureDiv').slideUp(1000);
                    $('#productPicture').delay(1200).slideDown();
                    return false;
                } else {
                    $.ajax({
                        url: base_link+'settings/removeFile',
                        type: 'POST',
                        data: 'identification='+id+'&file='+$('#'+hiddenInput).val(),
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
                                        toastr.success(" You successfully update customer logo", "Update Customer Logo");
                                    }, 1000);
                                }, 500); 
                                if(id == 'customerPicture') {
                                    $('#productPictureDiv').slideUp(1000);
                                    $('#productPicture').delay(1200).slideDown(); 
                                    $('#productImg').val('');
                                } 
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=update'+ '&title=purchase note'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=product/viewBill/',
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
                                $('.saveDefault').css('display', 'none');
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
                                    data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=customer comments'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/customer/'+totalComment,
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
                                                                            '<i onclick="editComment(\'customer\', '+id+', '+r.commentId+')" class="fa fa-edit permission iconEdit iconMark"></i>'+
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
                                    var cell = $('#'+tableName+' tr:eq('+id+') td:last-child').html();
                                    var tblData = table.row('#user'+id).data();
                                    tblData[13] = cell;
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
                                    toastr.success(" You successfully remove comment ", "Remove Comment");
                                }, 1000);
                            }, 500);
                            var activityId = activityListId();
                            var acType = "fa-plus";
                            var acLabel = "label-success";
                            $.ajax({
                                url: base_link+'recent_activity/add_activity/',
                                data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=delete'+ '&title=customer comments'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/customer/'+totalComment,
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
                                $('.timeline-item_id_'+cId).remove();
                                var cell = $('#'+tableName+' tr:eq('+id+') td:last-child').html();
                                var tblData = table.row('#user'+id).data();
                                tblData[12] = cell;
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
		</script>
    </body>

</html>