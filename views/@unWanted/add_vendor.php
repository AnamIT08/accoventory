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
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
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
            #profile a {display: table; vertical-align: middle; text-align: center; position: relative;}    
            #profile span {display: none;}  
            #profile a:hover span {position: absolute; left: 45%; top: -11%; display: block; text-align: center; background: rgba(67,81,96,0.7); }  
            #profile a:hover span b:hover {background: #000;}
            img { border: none; vertical-align: bottom; cursor: auto}
            #uploadTrigger { margin-left: -10px; }
            .activeFile {display: none !important;}
            #status_msg_div { height: 5px; width: 100%; }
            #status_msg { width:100%; margin: 0 auto !important; text-align: center; }
            .error-error{ font-size:15px; padding-top:5px; color:red; font-weight:bold; -webkit-animation-name: blinker; -webkit-animation-duration: 3s; -webkit-animation-timing-function: linear; -webkit-animation-iteration-count: infinite; -moz-animation-name: blinker; -moz-animation-duration: 3s; -moz-animation-timing-function: linear; -moz-animation-iteration-count: infinite; nimation-name: blinker; animation-duration: 3s; animation-timing-function: linear; animation-iteration-count: infinite; }
            @-moz-keyframes blinker { 0% { opacity: 1.0; } 25% { opacity: 1.0; } 50% { opacity: 0.0; } 100% { opacity: 1.0; } }
            @-webkit-keyframes blinker { 0% { opacity: 1.0; } 25% { opacity: 1.0; } 50% { opacity: 0.0; } 100% { opacity: 1.0; } }
            @keyframes blinker { 0% { opacity: 1.0; } 25% { opacity: 1.0; } 50% { opacity: 0.0; } 100% { opacity: 1.0; } }
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
	                                        <span class="caption-subject font-blue-madison bold uppercase">Add New Vendor</span>
	                                        <span class="caption-helper hide">weekly stats...</span>
	                                    </div>
                                        <a href="<?php echo base_url(); ?>vendor/" class="btn green-haze btn-sm" style="float: right;"><i class="fa fa-list"></i> Vendor List </a>
	                                </div>
	                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
	                                <div class="portlet box light bordered">
										<div id="portlet-body" class="portlet-body">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
			                                            <div class="col-md-4 newDrop">
			                                                <div class="uploadFirst">
			                                                    <div class="fadeMe"></div>                                                            
			                                                    <img class="wave-logo-uploader-dropzone__logo__dropzone__icon" src="<?php echo base_url(); ?>assets/uploadedFile/system/63cc4065e830c9f2e76f19ff398dc73d.svg">
			                                                    <div class="wave-logo-uploader-dropzone__logo___dropzone__text"><span class="wv-text wv-text--body"><span class="wave-logo-uploader-dropzone__logo__dropzone__browse-link">Browse</span><span> </span><span> your logo here.</span></span></div>
			                                                    <div class="wave-logo-uploader-dropzone__logo__dropzone__hint"><span class="wv-text wv-text--hint"><span>Maximum 5MB in size.</span><br ><span>JPG, PNG, or GIF formats.</span></span></div>
			                                                    <div class="wave-logo-uploader-dropzone__logo__dropzone__hint"><span class="wv-text wv-text--hint">Recommended size: 300 x 200 pixels.</span></div>
			                                                </div>
			                                                <div class="uploadedLogo" style="display: none;">
			                                                    <form id="image-form" name="image" enctype="multipart/form-data">
			                                                        <div id="profile" class="profile-userpic">
			                                                            <a href="javascript:void(0);">
			                                                                <?php
			                                                                    if($this->session->userdata('picture') != "") {
			                                                                        if (file_exists('./assets/uploadedFile/profilePicture/'.$this->session->userdata('picture'))) {
			                                                                            echo '<img id="profile-img-system" src="'.base_url().'assets/uploadedFile/profilePicture/'.$this->session->userdata('picture').'" class="img-circle img-responsive profile-image" alt="" />';
			                                                                        } else {
			                                                                            echo '<img id="profile-img-system" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" />';
			                                                                        }
			                                                                    } else {
			                                                                        echo '<img id="profile-img-system" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" />';
			                                                                    }
			                                                                ?>
			                                                                <span id="uploadTrigger" class="img-responsive"><i style="font-size:35px;" class="fa fa-camera"></i></span>
			                                                                <input name="document"  type="file"  id="file-id" class="activeFile"/>
			                                                            </a>
			                                                            <div id="status_msg_div"><div id="status_msg" class="error-error" style="font-size: 12px;"></div></div>
			                                                        </div>
			                                                    </form>
			                                                </div>
			                                            </div>
			                                        </div>
		                                        </div>
		                                        <div class="row">
			                                        <div class="col-md-12">
				                                        <form role="form" action="#">
				                                            <div class="col-md-6">
				                                                <div class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input class="form-control" type="text">
				                                                        <label for="form_control_1">Vendor/Company Name <span aria-required="true" class="required"> * </span></label>
				                                                        <span class="help-block">Vendor/Company name here...</span>
				                                                        <i class="fa fa-building"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="col-md-6">
				                                                <div class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input class="form-control" type="text">
				                                                        <label for="form_control_1">Name of Contact</label>
				                                                        <span class="help-block">Full name here...</span>
				                                                        <i class="fa fa-phone"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
			                                                <div class="col-md-6">
			                                                    <div class="form-group form-md-line-input form-md-floating-label">
			                                                        <div class="input-icon">
			                                                            <textarea class="form-control" type="text"></textarea>
			                                                            <label for="form_control_1">Address Line 1<span aria-required="true" class="required"> * </span></label>
			                                                            <span class="help-block">Vendor/Company address here...</span>
			                                                            <i class="fa fa-mobile"></i>
			                                                        </div>
			                                                    </div>
			                                                </div>
			                                                <div class="col-md-6">
			                                                    <div class="form-group form-md-line-input form-md-floating-label">
			                                                        <div class="input-icon">
			                                                            <textarea class="form-control" type="text"></textarea>
			                                                            <label for="form_control_1">Address Line 2</label>
			                                                            <span class="help-block">Vendor/Company address here...</span>
			                                                            <i class="fa fa-mobile"></i>
			                                                        </div>
			                                                    </div>
			                                                </div>
				                                            <div class="col-md-4">
				                                                <div class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input class="form-control" type="text">
				                                                        <label for="form_control_1">Email <span aria-required="true" class="required"> * </span></label>
				                                                        <span class="help-block">Vendor/Company email here...</span>
				                                                        <i class="fa fa-mobile"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="col-md-4">
				                                                <div class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input class="form-control" type="text">
				                                                        <label for="form_control_1">Phone</label>
				                                                        <span class="help-block">Vendor/Company phone here...</span>
				                                                        <i class="fa fa-mobile"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="col-md-4">
				                                                <div class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input class="form-control" type="text">
				                                                        <label for="form_control_1">Web URL</label>
				                                                        <span class="help-block">Vendor/Company web url here...</span>
				                                                        <i class="fa fa-mobile"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="col-md-12 margiv-top-10"><br/>
				                                                <a href="javascript:;" class="btn green"> Save Changes </a>
				                                                <a href="javascript:;" class="btn default"> Cancel </a>
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
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.js"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-select2.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->

    </body>

</html>