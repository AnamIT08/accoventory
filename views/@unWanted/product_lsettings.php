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
        <title>Product | Business Care</title>
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
			/*.select2-container--bootstrap .select2-selection { border-radius: 0px !important; border: none; border-bottom: 1px solid #E5E5E5 !important; border-top: none !important; border-left: none !important;border-right: none !important; }*/
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
                <div class="page-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row addProduct" style="display: none">
                        <div class="col-md-12">
                        	<div class="profile-content">
	                            <!-- BEGIN PORTLET -->
	                            <div class="portlet light bordered">
	                                <div class="portlet-title">
	                                    <div class="caption caption-md">
	                                        <i class="icon-bar-chart theme-font hide"></i>
	                                        <span class="caption-subject font-blue-madison bold uppercase">Add New Product</span>
	                                        <span class="caption-helper hide">weekly stats...</span>
	                                    </div>
                                        <div style="float: right;">
                                            <a class="btn green-haze btn-sm productListVisible"><i class="fa fa-list"></i> Product List </a>
    	                                	<a href="javascript:;" class="btn default btn-sm productListVisible"><i class="fa fa-times"></i> Cancel </a>
                                        </div>
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
				                                        <form id="addProduct" role="form" action="#">
				                                            <div class="col-md-4">
				                                                <div class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input class="form-control" type="text">
				                                                        <label for="form_control_1">Product Name <span aria-required="true" class="required"> * </span></label>
				                                                        <span class="help-block">Product name here...</span>
				                                                        <i class="fa fa-building"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="col-md-4">
				                                                <div class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input class="form-control" type="text">
				                                                        <label for="form_control_1">Unit of Measure</label>
				                                                        <span class="help-block">Example (kg,Inch,Gallon,Pound,Ton)</span>
				                                                        <i class="fa fa-phone"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="col-md-4">
				                                                <div class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input class="form-control" value="0.00" type="text">
				                                                        <label for="form_control_1">Selling Price</label>
				                                                        <span class="help-block">Selling price here...</span>
				                                                        <i class="fa fa-mobile"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="col-md-6">
				                                                <div class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input class="form-control" value="0" type="text">
				                                                        <label for="form_control_1">Initial Quantity</label>
				                                                        <span class="help-block">Add present stock here...</span>
				                                                        <i class="fa fa-mobile"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="col-md-6">
				                                                <div class="form-group form-md-line-input form-md-floating-label">
				                                                    <div class="input-icon">
				                                                        <input class="form-control" value="0" type="text">
				                                                        <label for="form_control_1">Alert Quantity</label>
				                                                        <span class="help-block">Minimum alert quantity here...</span>
				                                                        <i class="fa fa-mobile"></i>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="col-md-6" style="margin-top: 15px;">
		                                                        <label for="account" class="col-sm-12 control-label custom-control-label">Category</label>
		                                                        <div class="col-sm-9">
		                                                            <select title="" aria-hidden="true" tabindex="-1" id="category" name="category" class="form-control select2">
		                                                                <option value="Choose Category">Choose Category</option>
		                                                                <option value="Man">Man</option>
		                                                                <option value="WoMan">WoMan</option>
		                                                            </select>
		                                                            <span class="help-block">This will be displayed at the bottom of each invoice.</span>
		                                                        </div>
		                                                        <div class="col-sm-3"><a class="btn green-haze btn-sm" style="float: right;"><i class="fa fa-plus"></i> NEW</a></div>
		                                                    </div>
				                                            <div class="col-md-6" style="margin-top: 15px;">
		                                                        <label for="account" class="col-sm-12 control-label custom-control-label">Sub Category</label>
		                                                        <div class="col-sm-9">
		                                                            <select title="" aria-hidden="true" tabindex="-1" id="sub_category" name="sub_category" class="form-control select2">
		                                                                <option value="Choose Category">Choose Category</option>
		                                                                <option value="Man">Man</option>
		                                                                <option value="WoMan">WoMan</option>
		                                                            </select>
		                                                            <span class="help-block">This will be displayed at the bottom of each invoice.</span>
		                                                        </div>
		                                                        <div class="col-sm-3"><a class="btn green-haze btn-sm" style="float: right;"><i class="fa fa-plus"></i> NEW</a></div>
		                                                    </div>
				                                            <div class="col-md-6" style="margin-top: 25px;">
		                                                        <label for="account" class="col-sm-12 control-label custom-control-label">Tax Rate (%)</label>
		                                                        <div class="col-sm-9">
		                                                            <select title="" aria-hidden="true" tabindex="-1" id="currency" name="currency" class="form-control select2">
		                                                                <option value="Add Tax Rate">Add Tax Rate</option>
		                                                                <option value="Man">Man</option>
		                                                                <option value="WoMan">WoMan</option>
		                                                            </select>
		                                                            <span class="help-block">This will be displayed at the bottom of each invoice.</span>
		                                                        </div>
		                                                        <div class="col-sm-3"><a class="btn green-haze btn-sm" style="float: right;"><i class="fa fa-plus"></i> NEW</a></div>
		                                                    </div>
		                                                    <div class="col-md-6">
			                                                    <div class="form-group form-md-line-input form-md-floating-label">
			                                                        <div class="input-icon">
			                                                            <textarea class="form-control" type="text"></textarea>
			                                                            <label for="form_control_1">Product Description</label>
			                                                            <span class="help-block">Product description here...</span>
			                                                            <i class="fa fa-mobile"></i>
			                                                        </div>
			                                                    </div>
			                                                </div>		
			                                                <div class="col-sm-6">	                                                
		                                                        <div class="col-sm-12 radioCheck" style="display: none;">
		                                                            <div class="md-radio-inline" style="margin-top: 25px; float: right; margin-right: 15px; margin-bottom: -5px;">
		                                                                <div class="md-radio">
		                                                                    <input id="radio3" name="radio2" checked="" class="md-radiobtn" type="radio">
		                                                                    <label for="radio3">
		                                                                        <span></span>
		                                                                        <span class="check"></span>
		                                                                        <span class="box"></span> Day </label>
		                                                                </div>
		                                                                <div class="md-radio">
		                                                                    <input id="radio2" name="radio2" checked="" class="md-radiobtn" type="radio">
		                                                                    <label for="radio2">
		                                                                        <span></span>
		                                                                        <span class="check"></span>
		                                                                        <span class="box"></span> Month </label>
		                                                                </div>
		                                                                <div class="md-radio">
		                                                                    <input id="radio1" name="radio2" class="md-radiobtn" type="radio">
		                                                                    <label for="radio1">
		                                                                        <span></span>
		                                                                        <span class="check"></span>
		                                                                        <span class="box"></span> Year </span>
		                                                                    </label>
		                                                                </div>
		                                                            </div>
		                                                        </div>
		                                                        <div class="col-sm-offset-5 col-sm-7">
		                                                            <div class="form-group form-md-line-input">
		                                                                <div class="col-md-12">
		                                                                    <input id="discountCheck" class="form-control" placeholder="Warranty Period" type="text" />
		                                                                    <div class="form-control-focus"> </div>
		                                                                </div>
		                                                            </div>
		                                                        </div>
	                                                        </div>
				                                            <div class="col-md-12 margiv-top-10"><br/>
				                                                <a href="javascript:;" class="btn btn-primary"><i class="fa fa-save"></i> Save </a>
				                                                <a href="javascript:;" class="btn green"><i class="fa fa-newspaper-o"></i> Save & New </a>
				                                                <a href="javascript:;" class="btn default productListVisible"><i class="fa fa-times"></i> Cancel </a>
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
                    <div class="row productList">
                        <div class="col-md-12">
                        	<div class="profile-content">
	                            <!-- BEGIN PORTLET -->
	                            <div class="portlet light bordered">
	                                <div class="portlet-title">
	                                    <a class="btn green-haze btn-sm productAddVisible" style="float: right;"><i class="fa fa-plus"></i> New Product </a>
	                                </div>
	                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
									<div class="portlet box light bordered">
										<div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
											<div class="caption">
												<i class="fa fa-th-list" style="color: #D05454;"></i><span class="caption-subject font-blue-madison bold uppercase">Product List</span>
											</div>
											<div class="actions">
												<div class="btn-group btn-group-solid">
													<a class="dt-button buttons-print btn gray btn-outline" onclick="fnClickAddRow()"><i class="fa fa-plus"></i><span>Add</span></a>
													<a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_1')"><i class="fa fa-print"></i><span>Print</span></a>
													<a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_1', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
													<a class="dt-button buttons-csv buttons-html5 btn purple btn-outline" onClick ="$('#sample_1').tableExport({type:'csv',escape:'false'});"><i class="fa fa-file-text"></i><span>CSV</span></a>
													<a class="dt-button buttons-pdf buttons-html5 btn green btn-outline" onClick ="PDFFromHTML();"><i class="fa fa-file-pdf-o"></i><span>PDF</span></a>
													<a class="btn default" href="#" data-toggle="dropdown">
														<i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
													</a>
													<div id="sample_1_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
														<label><input type="checkbox" checked data-column="1">Alert Status</label>
														<label><input type="checkbox" checked data-column="2">Name</label>
														<label><input type="checkbox" checked data-column="3">Warranty Status</label>
														<label><input type="checkbox" checked data-column="4">Selling Price</label>
														<label><input type="checkbox" checked data-column="5">Tax</label>
														<label><input type="checkbox" checked data-column="6">Quantity</label>
														<label><input type="checkbox" checked data-column="7">Manage</label>
														<label><input type="checkbox" data-column="8">Category</label>
														<label><input type="checkbox" data-column="9">Sub Category</label>
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
															Alert Status
														</th>
														<th>
															Name
														</th>
														<th>
															Warranty Status
														</th>
														<th>
															Selling Price
														</th>
														<th>
															Tax
														</th>
														<th>
															Quantity
														</th>
														<th>
															Manage
														</th>
														<th>
															Category
														</th>
														<th>
															Sub Category
														</th>
														<th style="display: none;">
															inputChat
														</th>
													</tr>
												</thead>
												<tbody class="ui-sortable">
													<tr id="id">
														<td>
															 ABC
														</td>
														<td>
															 ABC
														</td>
														<td>
															2 Months 3 Days Left
														</td>
														<td>
															 Win 95+
														</td>
														<td>
															 40
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
                                                                        <a href="javascript:;"><i class="fa fa-clone" style="color: #E87E04;"></i><span>Duplicate</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;"><i class="fa fa-print" style="color: #000000;"></i><span>Print</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a onclick="deleteData(id)"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Delete</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a onclick="deleteData(id)"><i class="fa fa-recycle" style="color: green;"></i><span>Active</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>															
														</td>
														<td>
															<a class="btn yellow-haze btn-sm" style="float: right;"><i class="fa fa-copy"></i> Duplicate </a>
														</td>
														<td>
															<a class="btn red-haze btn-sm" style="float: right;"><i class="fa fa-remove"></i> Delete </a>
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
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.js"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/moment-with-locales.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.mockjax.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/inputs-ext/address/address.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColResize/dataTables.colResize.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/api/sum().js"></script>
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
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-select2.js" type="text/javascript"></script>
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
        	$('.productListVisible').live('click', function(e) {
				$('.addProduct').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
				$('#addProduct').trigger("reset");
				$("html, body").animate({ scrollTop: '0px' }, "slow");
			});
        	$('.productAddVisible').live('click', function(e) {
        		$('.addProduct').stop(true, true).fadeIn({ duration: 1500, queue: false }).css('display', 'none').slideDown(1500);    
        		$("html, body").animate({ scrollTop: '0px' }, "slow");
			});
            $("#discountCheck").click(function(){
                //$(".radioCheck").show("fast");
                $(".radioCheck").slideDown('slow');
                //$(".radioCheck").show("slide", { direction: "right" }, 3000);
            });
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
						'<a class="btn yellow-haze btn-sm" style="float: right;"><i class="fa fa-dot-circle-o"></i> Pending </a>',
						'<a href="javascript:;" id="vacation" data-type="date" data-viewformat="dd.mm.yyyy" data-pk="1" data-placement="right" data-original-title="When you want vacation to start?"> 25.02.2013 </a>',
						'<a href="javascript:;" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-original-title="Enter your firstname"> </a>',  
						'<a href="javascript:;" id="country" data-type="select2" data-pk="1" data-value="" data-original-title="Select country"> </a>',  
						'<a href="javascript:;" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-original-title="Enter your firstname"> </a>',  
						'<a href="javascript:;" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-original-title="Enter your firstname"> </a>',  
						'<div class="btn-group" style="margin: -5px">'+
							'<button type="button" class="btn btn-sm dark">Manage</button>'+
							'<button type="button" class="btn btn-sm dark dropdown-toggle" data-toggle="dropdown">'+
								'<i class="fa fa-angle-down"></i>'+
							'</button>'+
							'<ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">'+
								'<li>'+
									'<a href="javascript:;"><i class="fa fa-search" style="color: #26C281;"></i><span>View</span></a>'+
								'</li>'+
								'<li>'+
									'<a onclick="editData(\'id\')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Edit</span></a>'+
								'</li>'+
								'<li>'+
									'<a href="javascript:;"><i class="fa fa-lock" style="color: #E87E04;"></i><span>Lock</span></a>'+
								'</li>'+
								'<li>'+
									'<a href="javascript:;"><i class="fa fa-unlock" style="color: #E7505A;"></i><span>Unlock</span></a>'+
								'</li>'+
								'<li>'+
									'<a onclick="deleteData(id)"><i class="fa fa-trash-o" style="color: #D91E18;"></i><span>Delete</span></a>'+
								'</li>'+
								'<li class="dropdown-submenu">'+
                                    '<a href="javascript:;"><i class="fa fa-plus" style="color: #555555;"></i><span>Column Sum</span></a>'+
                                    '<ul class="dropdown-menu dropdown-menu-custom-sub" style="">'+
                                        '<li>'+
                                            '<a id="cPage" href="javascript:;"><i class="fa fa-plus-square-o" style="color: #555555;"></i><span>Current Page</span></a>'+
                                        '</li>'+
                                        '<li>'+
                                            '<a id="tTable" href="javascript:;"><i class="fa fa-plus-square" style="color: #555555;"></i><span>Total Table</span></a>'+
                                        '</li>'+
                                    '</ul>'+
                               ' </li>'+
							'</ul>'+
						'</div>',  
						'<a class="btn yellow-haze btn-sm" style="float: right;"><i class="fa fa-copy"></i> Duplicate </a>',  
						'<a class="btn red-haze btn-sm" style="float: right;"><i class="fa fa-remove"></i> Delete </a>'
					]
				);  
				counter++; 
				returnAccess();	 
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

			function returnAccess() {
				$('#sample_1 #firstname').editable({
				    type: 'text',
				    name: 'username',
				    //url: '/post',
				    title: 'Enter username'
				});
			    var countries = [];
			    $.each({"BD": "Bangladesh", "BE": "Belgium", "BF": "Burkina Faso", "BG": "Bulgaria", "BA": "Bosnia and Herzegovina", "BB": "Barbados", "WF": "Wallis and Futuna", "BL": "Saint Bartelemey", "BM": "Bermuda", "BN": "Brunei Darussalam", "BO": "Bolivia", "BH": "Bahrain", "BI": "Burundi", "BJ": "Benin", "BT": "Bhutan", "JM": "Jamaica", "BV": "Bouvet Island", "BW": "Botswana", "WS": "Samoa", "BR": "Brazil", "BS": "Bahamas", "JE": "Jersey", "BY": "Belarus", "O1": "Other Country", "LV": "Latvia", "RW": "Rwanda", "RS": "Serbia", "TL": "Timor-Leste", "RE": "Reunion", "LU": "Luxembourg", "TJ": "Tajikistan", "RO": "Romania", "PG": "Papua New Guinea", "GW": "Guinea-Bissau", "GU": "Guam", "GT": "Guatemala", "GS": "South Georgia and the South Sandwich Islands", "GR": "Greece", "GQ": "Equatorial Guinea", "GP": "Guadeloupe", "JP": "Japan", "GY": "Guyana", "GG": "Guernsey", "GF": "French Guiana", "GE": "Georgia", "GD": "Grenada", "GB": "United Kingdom", "GA": "Gabon", "SV": "El Salvador", "GN": "Guinea", "GM": "Gambia", "GL": "Greenland", "GI": "Gibraltar", "GH": "Ghana", "OM": "Oman", "TN": "Tunisia", "JO": "Jordan", "HR": "Croatia", "HT": "Haiti", "HU": "Hungary", "HK": "Hong Kong", "HN": "Honduras", "HM": "Heard Island and McDonald Islands", "VE": "Venezuela", "PR": "Puerto Rico", "PS": "Palestinian Territory", "PW": "Palau", "PT": "Portugal", "SJ": "Svalbard and Jan Mayen", "PY": "Paraguay", "IQ": "Iraq", "PA": "Panama", "PF": "French Polynesia", "BZ": "Belize", "PE": "Peru", "PK": "Pakistan", "PH": "Philippines", "PN": "Pitcairn", "TM": "Turkmenistan", "PL": "Poland", "PM": "Saint Pierre and Miquelon", "ZM": "Zambia", "EH": "Western Sahara", "RU": "Russian Federation", "EE": "Estonia", "EG": "Egypt", "TK": "Tokelau", "ZA": "South Africa", "EC": "Ecuador", "IT": "Italy", "VN": "Vietnam", "SB": "Solomon Islands", "EU": "Europe", "ET": "Ethiopia", "SO": "Somalia", "ZW": "Zimbabwe", "SA": "Saudi Arabia", "ES": "Spain", "ER": "Eritrea", "ME": "Montenegro", "MD": "Moldova, Republic of", "MG": "Madagascar", "MF": "Saint Martin", "MA": "Morocco", "MC": "Monaco", "UZ": "Uzbekistan", "MM": "Myanmar", "ML": "Mali", "MO": "Macao", "MN": "Mongolia", "MH": "Marshall Islands", "MK": "Macedonia", "MU": "Mauritius", "MT": "Malta", "MW": "Malawi", "MV": "Maldives", "MQ": "Martinique", "MP": "Northern Mariana Islands", "MS": "Montserrat", "MR": "Mauritania", "IM": "Isle of Man", "UG": "Uganda", "TZ": "Tanzania, United Republic of", "MY": "Malaysia", "MX": "Mexico", "IL": "Israel", "FR": "France", "IO": "British Indian Ocean Territory", "FX": "France, Metropolitan", "SH": "Saint Helena", "FI": "Finland", "FJ": "Fiji", "FK": "Falkland Islands (Malvinas)", "FM": "Micronesia, Federated States of", "FO": "Faroe Islands", "NI": "Nicaragua", "NL": "Netherlands", "NO": "Norway", "NA": "Namibia", "VU": "Vanuatu", "NC": "New Caledonia", "NE": "Niger", "NF": "Norfolk Island", "NG": "Nigeria", "NZ": "New Zealand", "NP": "Nepal", "NR": "Nauru", "NU": "Niue", "CK": "Cook Islands", "CI": "Cote d'Ivoire", "CH": "Switzerland", "CO": "Colombia", "CN": "China", "CM": "Cameroon", "CL": "Chile", "CC": "Cocos (Keeling) Islands", "CA": "Canada", "CG": "Congo", "CF": "Central African Republic", "CD": "Congo, The Democratic Republic of the", "CZ": "Czech Republic", "CY": "Cyprus", "CX": "Christmas Island", "CR": "Costa Rica", "CV": "Cape Verde", "CU": "Cuba", "SZ": "Swaziland", "SY": "Syrian Arab Republic", "KG": "Kyrgyzstan", "KE": "Kenya", "SR": "Suriname", "KI": "Kiribati", "KH": "Cambodia", "KN": "Saint Kitts and Nevis", "KM": "Comoros", "ST": "Sao Tome and Principe", "SK": "Slovakia", "KR": "Korea, Republic of", "SI": "Slovenia", "KP": "Korea, Democratic People's Republic of", "KW": "Kuwait", "SN": "Senegal", "SM": "San Marino", "SL": "Sierra Leone", "SC": "Seychelles", "KZ": "Kazakhstan", "KY": "Cayman Islands", "SG": "Singapore", "SE": "Sweden", "SD": "Sudan", "DO": "Dominican Republic", "DM": "Dominica", "DJ": "Djibouti", "DK": "Denmark", "VG": "Virgin Islands, British", "DE": "Germany", "YE": "Yemen", "DZ": "Algeria", "US": "United States", "UY": "Uruguay", "YT": "Mayotte", "UM": "United States Minor Outlying Islands", "LB": "Lebanon", "LC": "Saint Lucia", "LA": "Lao People's Democratic Republic", "TV": "Tuvalu", "TW": "Taiwan", "TT": "Trinidad and Tobago", "TR": "Turkey", "LK": "Sri Lanka", "LI": "Liechtenstein", "A1": "Anonymous Proxy", "TO": "Tonga", "LT": "Lithuania", "A2": "Satellite Provider", "LR": "Liberia", "LS": "Lesotho", "TH": "Thailand", "TF": "French Southern Territories", "TG": "Togo", "TD": "Chad", "TC": "Turks and Caicos Islands", "LY": "Libyan Arab Jamahiriya", "VA": "Holy See (Vatican City State)", "VC": "Saint Vincent and the Grenadines", "AE": "United Arab Emirates", "AD": "Andorra", "AG": "Antigua and Barbuda", "AF": "Afghanistan", "AI": "Anguilla", "VI": "Virgin Islands, U.S.", "IS": "Iceland", "IR": "Iran, Islamic Republic of", "AM": "Armenia", "AL": "Albania", "AO": "Angola", "AN": "Netherlands Antilles", "AQ": "Antarctica", "AP": "Asia/Pacific Region", "AS": "American Samoa", "AR": "Argentina", "AU": "Australia", "AT": "Austria", "AW": "Aruba", "IN": "India", "AX": "Aland Islands", "AZ": "Azerbaijan", "IE": "Ireland", "ID": "Indonesia", "UA": "Ukraine", "QA": "Qatar", "MZ": "Mozambique"}, function(k, v) {
			        countries.push({id: k, text: v});
			    }); 
			    $('#sample_1 #country').editable({
			        source: countries,
			        select2: {
			            width: 200,
			            placeholder: 'Select country',
			            allowClear: true
			        } 
			    });
			    $('#sample_1 #vacation').editable({
				    type: 'text'
				});
			}
			// trigger function in the begining 
			returnAccess();
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
							url: base_link+"preProduction/reorder_style_post",
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