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
        <title>Team | Accoventory .::.SaaS.::. Accounting & Inventory Software - SaaS</title>
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
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
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
        <link href="<?php echo base_url(); ?>assets/systemOwn/plugins/bootstrap-star-rating/css/star-rating.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url(); ?>assets/systemOwn/plugins/bootstrap-star-rating/css/star-rating.min.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url(); ?>assets/global/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
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
            #select2-sample_3_length-e7-container, .select2-selection__rendered {
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
            tr.details { cursor: default; }
            #innerTable td {
                cursor: default !important;
            }
            .ibox { box-shadow: none; }
            .ibox-content { background: none; }
            .activity-post { border: 1px dashed #e8e8e8; }
            #msg { border-bottom: 1px solid #e8e8e8; }
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
            .select2-container--bootstrap .select2-selection { border-radius: 0px !important; border: none; border-bottom: 2px solid #36C6D3 !important; border-top: none !important; border-left: none !important;border-right: none !important; }
            .select2-container .select2-choice .select2-arrow { border-left: none ; }
            .table-scrollable .dropdown-menu { position: relative !important; }
            .modal-header, .modal-footer { padding: 5px 10px; }
            .modal-header h4 { font-weight: bold; }
            .bodyModal { padding: 20px; font-size: 13px; font-weight: bold; }
            .generatePassword, .generatePasswordIs{ float: right; padding: 5px; margin: 5px; font-size: 15px; font-weight: bold; border: 1px dashed rgb(38, 193, 130); border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; min-width: 170px; text-align: center; margin-top: -5px; }
            .has-warning .md-checkbox label { color: #000 !important; }
            .has-success .md-checkbox label { color: #34495e !important; }
            .plasty { border: 1px solid #000 !important; }
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
            .btnActiove { color: #FF0000 !important; }
            .ownBtn { margin-left: 5px; border: 1px solid #000; padding: 5px 5px 5px 10px !important; }
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
                    <div class="row addTeam" style="display: none">
                        <div class="col-md-12">
                            <div class="profile-content">
                                <!-- BEGIN PORTLET -->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <i class="icon-bar-chart theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold" style="color: #C5B96B !important;">Add New Team Member</span>
                                            <span class="caption-helper hide">weekly stats...</span>
                                        </div>
                                        <div style="float: right;">
                                            <a class="btn green-haze btn-sm teamListVisible"><i class="fa fa-list"></i> Team Member List </a>
                                            <a href="javascript:;" class="btn default btn-sm teamListVisible"><i class="fa fa-times"></i> Cancel </a>
                                        </div>
                                    </div>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet box light bordered">
                                        <div id="portlet-body" class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="productPicture" class="col-md-4 newDrop" style="display: block">
                                                        <form action="<?php echo base_url(); ?>product/file_upload/" class="dropzone dropzone-file-area">                                                                
                                                            <input id="identification" style="display:none;" name="identification" value="profilePicture" type="hiddin"/>
                                                            <div class="uploadFirst uploadFirstFile">                                                         
                                                                <img class="wave-logo-uploader-dropzone__logo__dropzone__icon" src="<?php echo base_url(); ?>assets/uploadedFile/system/63cc4065e830c9f2e76f19ff398dc73d.svg">
                                                                <div class="wave-logo-uploader-dropzone__logo___dropzone__text"><span class="wv-text wv-text--body"><span class="wave-logo-uploader-dropzone__logo__dropzone__browse-link">Browse</span><span> </span><span> your logo here.</span></span></div>
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
                                                                            if (file_exists('./assets/uploadedFile/profilePicture/'.$basicSettings[0]->defaultLogo)) {
                                                                                echo '<img id="productPictureImg" src="'.base_url().'assets/uploadedFile/profilePicture/'.$basicSettings[0]->defaultLogo.'" class="img-circle img-responsive profile-image" alt="" style="max-height:none; padding: 5px; border: 1px dashed #54c7c3; border-radius: 5px;"/>';
                                                                            } else {
                                                                                echo '<img id="productPictureImg" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" style="max-height:none; padding: 5px; border: 1px dashed #54c7c3; border-radius: 5px;"/>';
                                                                            }
                                                                        ?>
                                                                        <span id="uploadTrigger" onclick="removeLogo('profilePicture', 'productImg')"><i class="fa fa-times newCross"></i></span>
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
                                                        <form action="javascript:;" class="login-form" method="post"  id="newSubmit" autocomplete="off" role="form">
                                                            <div class="col-md-6">
                                                                <div id="nameDiv" class="form-group form-md-line-input form-md-floating-label">
                                                                    <div class="input-icon">
                                                                        <input id="name" class="form-control" name="name" type="text" value="" />
                                                                        <label for="form_control_1">Name <span aria-required="true" class="required"> * </span></label>
                                                                        <span class="help-block">Name here...</span>
                                                                        <i class="icon-user"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div id="emailDiv" class="form-group form-md-line-input form-md-floating-label">
                                                                    <div class="input-icon">
                                                                        <input id="email" class="form-control" name="email" type="text" value="" />
                                                                        <label for="form_control_1">Email <span aria-required="true" class="required"> * </span></label>
                                                                        <span id="emailHelp" class="help-block">Email here...</span>
                                                                        <i class="icon-envelope"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 35px">
                                                                <div id="phoneDiv" class="form-group form-md-line-input form-md-floating-label">
                                                                    <div class="input-icon">
                                                                        <input id="phone" class="form-control" name="phone" type="text" value="" />
                                                                        <label for="form_control_1">Phone <span aria-required="true" class="required"> * </span></label>
                                                                        <span id="phoneHelp" class="help-block">Phone here...</span>
                                                                        <i class="icon-call-end"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 35px">
                                                                <div id="staffDiv" class="form-group form-md-line-input form-md-floating-label">
                                                                    <div class="input-icon">
                                                                        <input id="staff" class="form-control" name="staff" type="text" value="" />
                                                                        <label for="form_control_1">Staff Type</label>
                                                                        <span class="help-block">Example (sales executive,Manager)...</span>
                                                                        <i class="fa fa-phone"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 35px">
                                                                <div id="passDiv" class="form-group form-md-line-input form-md-floating-label">
                                                                    <input id="pass" class="form-control" name="pass" placeholder="" reauired="required" name="pass" type="password"> 
                                                                    <label for="new_pass">New Password</label>
                                                                    <span id="new_pass_msg" class="help-block">Type your new password here...</span>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: 5px">
                                                                    <div style="margin-bottom:10px; margin-left: -15px;">
                                                                        <a id="cRrandom" class="btn btn-default success btn-sm"><i class="fa fa-random"></i>Generate Password</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 35px">
                                                                <div id="cPassDiv" class="form-group form-md-line-input form-md-floating-label">
                                                                    <input id="cPass" class="form-control" placeholder="" name="cPass" reauired="required" name="cpass" type="password"> 
                                                                    <label for="con_pass">Re-type New Password</label>
                                                                    <span id="con_pass_msg" class="help-block">Type your confirm password here...</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 30px">
                                                                <input id="activityStatus" type="checkbox" class="make-switch" checked data-on-color="success" data-on-text="Active" data-off-color="warning" data-off-text="Inactive" />
                                                            </div>
                                                            <!-- <div class="col-md-5">
                                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                                    <div class="input-icon">
                                                                        <textarea class="form-control" type="text"></textarea>
                                                                        <label for="form_control_1">Remarks<span aria-required="true" class="required"> * </span></label>
                                                                        <span class="help-block">Remarks here...</span>
                                                                        <i class="icon-drawer"></i>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="col-md-4" style="margin-top: 35px">
                                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                                    <input id="input-1-ltr-alt-xs" class="kv-ltr-theme-fa-alt rating-loading" value="0" dir="ltr" data-size="xs"> 
                                                                </div>
                                                            </div> -->                                                            
                                                            <div class="col-md-12" style="margin-top: 35px">
                                                                <div class="col-md-12">
                                                                    <label for="col-sm-12" style="margin-bottom: 20px;"><i class="icon-check"></i> User Permissions</label>
                                                                </div>
                                                                <?php foreach ($allMenus as $menu) { ?>
                                                                    <div class="col-md-3">
                                                                        <div class="md-checkbox">
                                                                            <?php if($menu->baseMenuTitle != "team" && $menu->baseMenuTitle != "reports") { ?>
                                                                                <input id="checkbox<?php echo $menu->id; ?>" name="menuSettings[]" class="md-check" checked="checked" type="checkbox" value="<?php echo $menu->id; ?>" />
                                                                            <?php } else { ?>
                                                                                <input id="checkbox<?php echo $menu->id; ?>" name="menuSettings[]" class="md-check" type="checkbox" value="<?php echo $menu->id; ?>" />
                                                                            <?php } ?>
                                                                            <label for="checkbox<?php echo $menu->id; ?>">
                                                                                <span></span>
                                                                                <span class="check"></span>
                                                                                <span class="box"></span> <i class="<?php echo $menu->menuIcon; ?>" style="color: <?php echo $menu->menuColor; ?>;"></i> Manage <?php echo ucfirst($menu->baseMenuTitle); ?> </label>
                                                                        </div>
                                                                    </div> 
                                                                <?php } ?>
                                                                <div class="col-md-3">
                                                                    <div class="md-checkbox">
                                                                        <input id="checkbox9" name="menuSettings[]" class="md-check" type="checkbox" value="9" />
                                                                        <label for="checkbox9">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> <i class="icon-settings" style="color: green;"></i> Manage Settings </label>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3">
                                                                    <div class="md-checkbox">
                                                                        <input id="checkbox10" name="menuSettings[]" class="md-check" type="checkbox" value="10" />
                                                                        <label for="checkbox10">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> <i class="fa fa-dashboard" style="color: gray"></i>Dashboard Access </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 margiv-top-10"><br/>
                                                                <input id="productImg" type="hidden" name="picture" value="" />
                                                                <input id="activeTeam" type="hidden" name="activeTeam" value="1" />
                                                                <input id="teamSystemCode" type="hidden" name="teamSystemCode" value="" />
                                                                <input id="teamEditId" type="hidden" name="teamEditId" value="" />
                                                                <input id="teamLiveId" type="hidden" name="teamLiveId" value="" />
                                                                <a id="save" href="javascript:;" class="btn btn-primary"><i class="fa fa-save"></i> Save </a>
                                                                <a id="saveNew" href="javascript:;" class="btn green"><i class="fa fa-newspaper-o"></i> Save & New </a>
                                                                <a href="javascript:;" class="btn default teamListVisible"><i class="fa fa-times"></i> Cancel </a>
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
                    <div class="row TeamList">
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
                                        <!-- <span class="btn-sm ownBtn" style="float: right;"><i class="fa fa-th-large"></i></span>
                                        <span class="btn-sm ownBtn btnActiove" style="float: right;"><i class="fa fa-th-list"></i></span> -->
                                        <a class="btn green-haze btn-sm teamAddVisible" style="float: right;"><i class="fa fa-plus"></i> New Team Member </a>
                                        <?php if($this->session->userdata('staffType') == 'BCSadmin') { ?>
                                            <i class="icon-lock inactiveAll" style="float: right; font-size: 25px; margin:3px; margin-top: 8px; margin-right: 15px; cursor: pointer; color: red"></i>
                                            <i class="icon-lock-open activeAll" style="float: right; font-size: 25px; margin:3px; margin-top: 8px; cursor: pointer; color: green"></i>
                                        <?php } ?>
                                    </div>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet box light bordered">
                                        <div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
                                            <div class="caption">
                                                <i class="fa fa-th-list" style="color: #C5B96B;"></i><span class="caption-subject font-blue-madison bold" style="color: #C5B96B !important;">Active Team Member List</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group btn-group-solid">
                                                    <a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_3', 'Team List Active')"><i class="fa fa-print"></i><span>Print</span></a>
                                                    <a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_3', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
                                                    <a class="btn default" href="#" data-toggle="dropdown">
                                                        <i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div id="sample_3_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                                        <label><input type="checkbox" checked data-column="0">Show Notes</label>
                                                        <label><input type="checkbox" checked data-column="1">Manage</label>
                                                        <label><input type="checkbox" checked data-column="2">Name</label>
                                                        <label><input type="checkbox" checked data-column="3">Member ID</label>
                                                        <label><input type="checkbox" checked data-column="4">Email</label>
                                                        <label><input type="checkbox" checked data-column="5">Phone</label>
                                                        <label><input type="checkbox" checked data-column="6">Staff Type</label>
                                                        <label><input type="checkbox" data-column="7">Created by</label>
                                                        <label><input type="checkbox" data-column="8">Entry Date</label>
                                                    </div>
                                                    <a id="tFull" class="fullscreen fullscreen-recent dt-button buttons-csv buttons-html5 btn blue btn-outline"><i id="tFullIcon" class="fa fa-expand"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="portlet-body" class="portlet-body">
                                            <table class="table table-striped table-bordered table-hover dt-responsive" id="sample_3">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Manage
                                                        </th>
                                                        <th>
                                                            Name
                                                        </th>
                                                        <th>
                                                            Member ID
                                                        </th>
                                                        <th>
                                                            Email
                                                        </th>
                                                        <th>
                                                            Phone
                                                        </th>
                                                        <th>
                                                            Staff Type
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
                                                    <?php    
                                                        $data = $this->bcare_user->getAllTeamMembar(1); 
                                                        $sessionStaffType = $this->session->userdata('staffType');
                                                        $allComments = '';
                                                        foreach ($data->allData as $team) {
                                                            $localData = $this->data_model->get_all_info('*', array('id' => $team->localSystemId), 'list_team');
                                                            if($sessionStaffType == 'BCSadmin') {
                                                            $allComments = $this->data_model->get_all_info('*', array('docType' => 'team', 'docId' => $localData[0]->id), 'list_all_comment');
                                                    ?>
                                                        <tr id="team<?php echo $team->id; ?>">
                                                            <td>
                                                                <div class="btn-group" style="margin: -5px">
                                                                    <button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">
                                                                        <li id="view<?php echo $team->id; ?>">
                                                                            <a target="_blank" target="_blank" href="<?php echo base_url(); ?>profile/team/<?php echo $team->id; ?>"><i class="fa fa-search" style="color: #26C281;"></i><span>View Profile</span></a>
                                                                        </li>
                                                                        <?php if($teamPermission == 1) { ?>
                                                                        <li id="edit<?php echo $team->id; ?>">
                                                                            <a onclick="editData(<?php echo $team->id; ?>)" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Edit</span></a>
                                                                        </li>
                                                                        <li id="key<?php echo $team->id; ?>">
                                                                            <a onclick="keysChange(<?php echo $team->id; ?>)" href="javascript:;"><i class="fa fa-key" style="color: #FF0000;"></i><span>Reset Pass</span></a>
                                                                        </li>
                                                                        <li id="delete<?php echo $team->id; ?>">
                                                                            <a onclick="deleteData(<?php echo $team->id; ?>)"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>
                                                                        </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </div>                                                          
                                                            </td>
                                                            <td>
                                                                <span id="tName<?php echo $team->id; ?>"><?php echo $team->userNameFull; ?></span>
                                                                <span id="tEmail<?php echo $team->id; ?>" style="display:none;"><?php echo $team->userEmail; ?></span>
                                                                <span id="tPhone<?php echo $team->id; ?>" style="display:none;"><?php echo $team->userMobileNo; ?></span>
                                                                <span id="tStaff<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->staffType; ?></span>
                                                                <span id="tPicture<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->picture; ?></span>
                                                                <span id="tMenuSettings<?php echo $team->id; ?>" style="display:none;"><?php echo $team->menuSettings; ?></span>
                                                                <span id="tMenuSort<?php echo $team->id; ?>" style="display:none;"><?php echo $team->menuSort; ?></span>
                                                                <span id="tIsDashboard<?php echo $team->id; ?>" style="display:none;"><?php echo $team->isDashboard; ?></span>
                                                                <span id="tStatus<?php echo $team->id; ?>" style="display:none;"><?php echo $team->userStatus; ?></span>
                                                                <span id="tUserId<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->id; ?></span>
                                                                <span id="tEngineId<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->engineId; ?></span>
                                                            </td>
                                                            <td>
                                                                <?php echo $localData[0]->systemId; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $team->userEmail; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $team->userMobileNo; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $localData[0]->staffType; ?>
                                                            </td>
                                                            <td>
                                                                <?php $team = $this->data_model->get_specific_column("name", array("id" => $team->createdBy), "list_team"); echo $team[0]->name; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $localData[0]->createdDateTime; ?>
                                                            </td>
                                                            <td style="display: none;">
                                                                <div class="col-md-12 col-sm-12 hiddenComment<?php echo $localData[0]->id; ?>">
                                                                    <div class="portlet">
                                                                        <div class="portlet-body">                                                                          
                                                                            <div class="ibox float-e-margins ui-sortable">
                                                                                <div style="position: static;" class="ibox-content">
                                                                                    <div id="sysfrm_ajaxrender">
                                                                                        <section class="activity-post mb-xlg">
                                                                                            <form id="commentForm<?php echo $localData[0]->id; ?>">
                                                                                                <textarea name="messageText<?php echo $localData[0]->id; ?>" onkeyup="getValueComment(this.value, <?php echo $localData[0]->id; ?>);" id="messageText<?php echo $localData[0]->id; ?>" class="msg messageText<?php echo $localData[0]->id; ?>" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>
                                                                                                <input id="hiddenMessage<?php echo $localData[0]->id; ?>" class="hiddenMessage<?php echo $localData[0]->id; ?>" name="hiddenMessage<?php echo $localData[0]->id; ?>" value="" type="hidden">
                                                                                                <input id="activityType<?php echo $localData[0]->id; ?>" name="activityType<?php echo $localData[0]->id; ?>" value="fa-check" type="hidden">
                                                                                                <input id="activityId" name="activityId" value="<?php echo $localData[0]->id; ?>" type="hidden">
                                                                                                <input id="commentType<?php echo $localData[0]->id; ?>" name="commentType<?php echo $localData[0]->id; ?>" value="team" type="hidden">
                                                                                                <input id="commentCode<?php echo $localData[0]->id; ?>" name="commentCode<?php echo $localData[0]->id; ?>" value="" type="hidden">
                                                                                                <input id="commentId<?php echo $localData[0]->id; ?>" name="commentId<?php echo $localData[0]->id; ?>" value="" type="hidden">
                                                                                                <input id="commentProcess<?php echo $localData[0]->id; ?>" name="commentProcess<?php echo $localData[0]->id; ?>" value="0" type="hidden">
                                                                                            </form>
                                                                                            <div class="compose-box-footer">
                                                                                                <ul class="compose-toolbar compose-toolbar-success">
                                                                                                    <li onClick="iconChange('fa-hourglass', <?php echo $localData[0]->id; ?>);" class="clickable fa-hourglass<?php echo $localData[0]->id; ?>"><a><i class="fa fa-hourglass"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-hourglass-start', <?php echo $localData[0]->id; ?>);" class="clickable fa-hourglass-start<?php echo $localData[0]->id; ?>"><a><i class="fa fa-hourglass-start"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-hourglass-o', <?php echo $localData[0]->id; ?>);" class="clickable fa-hourglass-o<?php echo $localData[0]->id; ?>"><a><i class="fa fa-hourglass-o"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-balance-scale', <?php echo $localData[0]->id; ?>);" class="clickable fa-balance-scale<?php echo $localData[0]->id; ?>"><a><i class="fa fa-balance-scale"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-adjust', <?php echo $localData[0]->id; ?>);" class="clickable fa-adjust<?php echo $localData[0]->id; ?>"><a><i class="fa fa-adjust"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-certificate', <?php echo $localData[0]->id; ?>);" class="clickable fa-certificate<?php echo $localData[0]->id; ?>"><a><i class="fa fa-certificate"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-check', <?php echo $localData[0]->id; ?>);" class="clickable fa-check<?php echo $localData[0]->id; ?> action-active"><a><i class="fa fa-check"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-times', <?php echo $localData[0]->id; ?>);" class="clickable fa-times<?php echo $localData[0]->id; ?>"><a><i class="fa fa-times"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-exchange', <?php echo $localData[0]->id; ?>);" class="clickable fa-exchange<?php echo $localData[0]->id; ?>"><a><i class="fa fa-exchange"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-cog', <?php echo $localData[0]->id; ?>);" class="clickable fa-cog<?php echo $localData[0]->id; ?>"><a><i class="fa fa-cog"></i></a></li>
                                                                                                </ul>
                                                                                                <ul class="compose-btn">
                                                                                                    <li>
                                                                                                        <a class="save<?php echo $localData[0]->id; ?> btn btn-success btn-xs" onClick="commentProcess('sample_3', <?php echo $localData[0]->id; ?>)"><i class="fa fa-edit"></i> Add Note</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a class="cancle<?php echo $localData[0]->id; ?> btn btn-warning btn-xs" onClick="clickCancle(<?php echo $localData[0]->id; ?>)" style="display: none"><i class="fa fa-times"></i> Cancle</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </section>
                                                                                        <div style="margin-top:20px !important;" class="mt-lg"> </div>
                                                                                            <div id="all_timeline_div" class="all_timeline_div<?php echo $localData[0]->id ?>" data-always-visible="1" data-rail-visible1="1">
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
                                                                                                                        <i onclick="editComment('team', <?php echo $localData[0]->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-edit permission iconEdit iconMark"></i>
                                                                                                                        <i onclick="deleteComment('sample_3', <?php echo $localData[0]->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-trash permission iconDelete iconMark"></i>
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
                                                    <?php } else { if($localData[0]->staffType != 'BCSadmin') { ?>
                                                        <tr id="team<?php echo $team->id; ?>">
                                                            <td>
                                                                <div class="btn-group" style="margin: -5px">
                                                                    <button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">
                                                                        <li id="view<?php echo $team->id; ?>">
                                                                            <a target="_blank" target="_blank" href="<?php echo base_url(); ?>profile/team/<?php echo $team->id; ?>"><i class="fa fa-search" style="color: #26C281;"></i><span>View Profile</span></a>
                                                                        </li>
                                                                        <?php if($teamPermission == 1) { ?>
                                                                        <li id="edit<?php echo $team->id; ?>">
                                                                            <a onclick="editData(<?php echo $team->id; ?>)" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Edit</span></a>
                                                                        </li>
                                                                        <li id="key<?php echo $team->id; ?>">
                                                                            <a onclick="keysChange(<?php echo $team->id; ?>)" href="javascript:;"><i class="fa fa-key" style="color: #FF0000;"></i><span>Reset Pass</span></a>
                                                                        </li>
                                                                        <li id="delete<?php echo $team->id; ?>">
                                                                            <a onclick="deleteData(<?php echo $team->id; ?>)"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>
                                                                        </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </div>                                                          
                                                            </td>
                                                            <td>
                                                                <span id="tName<?php echo $team->id; ?>"><?php echo $team->userNameFull; ?></span>
                                                                <span id="tEmail<?php echo $team->id; ?>" style="display:none;"><?php echo $team->userEmail; ?></span>
                                                                <span id="tPhone<?php echo $team->id; ?>" style="display:none;"><?php echo $team->userMobileNo; ?></span>
                                                                <span id="tStaff<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->staffType; ?></span>
                                                                <span id="tPicture<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->picture; ?></span>
                                                                <span id="tMenuSettings<?php echo $team->id; ?>" style="display:none;"><?php echo $team->menuSettings; ?></span>
                                                                <span id="tMenuSort<?php echo $team->id; ?>" style="display:none;"><?php echo $team->menuSort; ?></span>
                                                                <span id="tIsDashboard<?php echo $team->id; ?>" style="display:none;"><?php echo $team->isDashboard; ?></span>
                                                                <span id="tStatus<?php echo $team->id; ?>" style="display:none;"><?php echo $team->userStatus; ?></span>
                                                                <span id="tUserId<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->id; ?></span>
                                                                <span id="tEngineId<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->engineId; ?></span>
                                                            </td>
                                                            <td>
                                                                <?php echo $localData[0]->systemId; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $team->userEmail; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $team->userMobileNo; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $localData[0]->staffType; ?>
                                                            </td>
                                                            <td>
                                                                <?php $team = $this->data_model->get_specific_column("name", array("id" => $team->createdBy), "list_team"); echo $team[0]->name; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $localData[0]->createdDateTime; ?>
                                                            </td>
                                                            <td style="display: none;">
                                                                <div class="col-md-12 col-sm-12 hiddenComment<?php echo $localData[0]->id; ?>">
                                                                    <div class="portlet">
                                                                        <div class="portlet-body">                                                                          
                                                                            <div class="ibox float-e-margins ui-sortable">
                                                                                <div style="position: static;" class="ibox-content">
                                                                                    <div id="sysfrm_ajaxrender">
                                                                                        <section class="activity-post mb-xlg">
                                                                                            <form id="commentForm<?php echo $localData[0]->id; ?>">
                                                                                                <textarea name="messageText<?php echo $localData[0]->id; ?>" onkeyup="getValueComment(this.value, <?php echo $localData[0]->id; ?>);" id="messageText<?php echo $localData[0]->id; ?>" class="msg messageText<?php echo $localData[0]->id; ?>" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>
                                                                                                <input id="hiddenMessage<?php echo $localData[0]->id; ?>" class="hiddenMessage<?php echo $localData[0]->id; ?>" name="hiddenMessage<?php echo $localData[0]->id; ?>" value="" type="hidden">
                                                                                                <input id="activityType<?php echo $localData[0]->id; ?>" name="activityType<?php echo $localData[0]->id; ?>" value="fa-check" type="hidden">
                                                                                                <input id="activityId" name="activityId" value="<?php echo $localData[0]->id; ?>" type="hidden">
                                                                                                <input id="commentType<?php echo $localData[0]->id; ?>" name="commentType<?php echo $localData[0]->id; ?>" value="team" type="hidden">
                                                                                                <input id="commentCode<?php echo $localData[0]->id; ?>" name="commentCode<?php echo $localData[0]->id; ?>" value="" type="hidden">
                                                                                                <input id="commentId<?php echo $localData[0]->id; ?>" name="commentId<?php echo $localData[0]->id; ?>" value="" type="hidden">
                                                                                                <input id="commentProcess<?php echo $localData[0]->id; ?>" name="commentProcess<?php echo $localData[0]->id; ?>" value="0" type="hidden">
                                                                                            </form>
                                                                                            <div class="compose-box-footer">
                                                                                                <ul class="compose-toolbar compose-toolbar-success">
                                                                                                    <li onClick="iconChange('fa-hourglass', <?php echo $localData[0]->id; ?>);" class="clickable fa-hourglass<?php echo $localData[0]->id; ?>"><a><i class="fa fa-hourglass"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-hourglass-start', <?php echo $localData[0]->id; ?>);" class="clickable fa-hourglass-start<?php echo $localData[0]->id; ?>"><a><i class="fa fa-hourglass-start"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-hourglass-o', <?php echo $localData[0]->id; ?>);" class="clickable fa-hourglass-o<?php echo $localData[0]->id; ?>"><a><i class="fa fa-hourglass-o"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-balance-scale', <?php echo $localData[0]->id; ?>);" class="clickable fa-balance-scale<?php echo $localData[0]->id; ?>"><a><i class="fa fa-balance-scale"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-adjust', <?php echo $localData[0]->id; ?>);" class="clickable fa-adjust<?php echo $localData[0]->id; ?>"><a><i class="fa fa-adjust"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-certificate', <?php echo $localData[0]->id; ?>);" class="clickable fa-certificate<?php echo $localData[0]->id; ?>"><a><i class="fa fa-certificate"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-check', <?php echo $localData[0]->id; ?>);" class="clickable fa-check<?php echo $localData[0]->id; ?> action-active"><a><i class="fa fa-check"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-times', <?php echo $localData[0]->id; ?>);" class="clickable fa-times<?php echo $localData[0]->id; ?>"><a><i class="fa fa-times"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-exchange', <?php echo $localData[0]->id; ?>);" class="clickable fa-exchange<?php echo $localData[0]->id; ?>"><a><i class="fa fa-exchange"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-cog', <?php echo $localData[0]->id; ?>);" class="clickable fa-cog<?php echo $localData[0]->id; ?>"><a><i class="fa fa-cog"></i></a></li>
                                                                                                </ul>
                                                                                                <ul class="compose-btn">
                                                                                                    <li>
                                                                                                        <a class="save<?php echo $localData[0]->id; ?> btn btn-success btn-xs" onClick="commentProcess('sample_3', <?php echo $localData[0]->id; ?>)"><i class="fa fa-edit"></i> Add Note</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a class="cancle<?php echo $localData[0]->id; ?> btn btn-warning btn-xs" onClick="clickCancle(<?php echo $localData[0]->id; ?>)" style="display: none"><i class="fa fa-times"></i> Cancle</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </section>
                                                                                        <div style="margin-top:20px !important;" class="mt-lg"> </div>
                                                                                            <div id="all_timeline_div" class="all_timeline_div<?php echo $localData[0]->id ?>" data-always-visible="1" data-rail-visible1="1">
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
                                                                                                                        <i onclick="editComment('team', <?php echo $localData[0]->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-edit permission iconEdit iconMark"></i>
                                                                                                                        <i onclick="deleteComment('sample_3', <?php echo $localData[0]->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-trash permission iconDelete iconMark"></i>
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
                                                    <?php } } } ?>
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
                    <div class="row TeamListArchive" style="display: none;">
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
                                        <!-- <span class="btn-sm ownBtn" style="float: right;"><i class="fa fa-th-large"></i></span>
                                        <span class="btn-sm ownBtn btnActiove" style="float: right;"><i class="fa fa-th-list"></i></span> -->
                                        <a class="btn green-haze btn-sm teamAddVisible" style="float: right;"><i class="fa fa-plus"></i> New Team Member </a>
                                        <?php if($this->session->userdata('staffType') == 'BCSadmin') { ?>
                                            <i class="icon-lock inactiveAll" style="float: right; font-size: 25px; margin:3px; margin-top: 8px; margin-right: 15px; cursor: pointer; color: red"></i>
                                            <i class="icon-lock-open activeAll" style="float: right; font-size: 25px; margin:3px; margin-top: 8px; cursor: pointer; color: green"></i>
                                        <?php } ?>
                                    </div>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet box light bordered">
                                        <div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
                                            <div class="caption">
                                                <i class="fa fa-th-list" style="color: #C5B96B;"></i><span class="caption-subject font-blue-madison bold" style="color: #C5B96B !important;">Archive Team Member List</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group btn-group-solid">
                                                    <a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_33', 'Team List Inactive')"><i class="fa fa-print"></i><span>Print</span></a>
                                                    <a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_33', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
                                                    <a class="btn default" href="#" data-toggle="dropdown">
                                                        <i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div id="sample_33_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                                        <label><input type="checkbox" checked data-column="0">Show Notes</label>
                                                        <label><input type="checkbox" checked data-column="1">Name</label>
                                                        <label><input type="checkbox" checked data-column="2">Member ID</label>
                                                        <label><input type="checkbox" checked data-column="3">Email</label>
                                                        <label><input type="checkbox" checked data-column="4">Phone</label>
                                                        <label><input type="checkbox" checked data-column="5">Staff Type</label>
                                                        <label><input type="checkbox" checked data-column="6">Manage</label>
                                                        <label><input type="checkbox" data-column="7">Created by</label>
                                                        <label><input type="checkbox" data-column="8">Entry Date</label>
                                                    </div>
                                                    <a id="tFull" class="fullscreen fullscreen-recent dt-button buttons-csv buttons-html5 btn blue btn-outline"><i id="tFullIcon" class="fa fa-expand"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="portlet-body" class="portlet-body">
                                            <table class="table table-striped table-bordered table-hover dt-responsive" id="sample_33">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Name
                                                        </th>
                                                        <th>
                                                            Member ID
                                                        </th>
                                                        <th>
                                                            Email
                                                        </th>
                                                        <th>
                                                            Phone
                                                        </th>
                                                        <th>
                                                            Staff Type
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
                                                    <?php    
                                                        $data = $this->bcare_user->getAllTeamMembar(0);  
                                                        $allComments = '';
                                                        foreach ($data->allData as $team) {
                                                            $localData = $this->data_model->get_all_info('*', array('id' => $team->localSystemId), 'list_team');
                                                            if($sessionStaffType == 'BCSadmin') {
                                                            $allComments = $this->data_model->get_all_info('*', array('docType' => 'team', 'docId' => $localData[0]->id), 'list_all_comment');
                                                    ?>
                                                        <tr id="team<?php echo $team->id; ?>">
                                                            <td>
                                                                <div class="btn-group" style="margin: -5px">
                                                                    <button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">
                                                                        <li id="view<?php echo $team->id; ?>">
                                                                            <a target="_blank" target="_blank" href="<?php echo base_url(); ?>profile/team/<?php echo $team->id; ?>"><i class="fa fa-search" style="color: #26C281;"></i><span>View Profile</span></a>
                                                                        </li>
                                                                        <?php if($teamPermission == 1) { ?>
                                                                        <li id="active<?php echo $team->id; ?>">
                                                                            <a onclick="activeData(<?php echo $team->id; ?>)"><i class="fa fa-recycle" style="color: #008800;"></i><span>Active</span></a>
                                                                        </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </div>                                                          
                                                            </td>
                                                            <td>
                                                                <span id="tName<?php echo $team->id; ?>"><?php echo $team->userNameFull; ?></span>
                                                                <span id="tEmail<?php echo $team->id; ?>" style="display:none;"><?php echo $team->userEmail; ?></span>
                                                                <span id="tPhone<?php echo $team->id; ?>" style="display:none;"><?php echo $team->userMobileNo; ?></span>
                                                                <span id="tStaff<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->staffType; ?></span>
                                                                <span id="tPicture<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->picture; ?></span>
                                                                <span id="tMenuSettings<?php echo $team->id; ?>" style="display:none;"><?php echo $team->menuSettings; ?></span>
                                                                <span id="tMenuSort<?php echo $team->id; ?>" style="display:none;"><?php echo $team->menuSort; ?></span>
                                                                <span id="tIsDashboard<?php echo $team->id; ?>" style="display:none;"><?php echo $team->isDashboard; ?></span>
                                                                <span id="tStatus<?php echo $team->id; ?>" style="display:none;"><?php echo $team->userStatus; ?></span>
                                                                <span id="tUserId<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->id; ?></span>
                                                                <span id="tEngineId<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->engineId; ?></span>
                                                            </td>
                                                            <td>
                                                                <?php echo $localData[0]->systemId; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $team->userEmail; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $team->userMobileNo; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $localData[0]->staffType; ?>
                                                            </td>
                                                            <td>
                                                                <?php $team = $this->data_model->get_specific_column("name", array("id" => $team->createdBy), "list_team"); echo $team[0]->name; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $localData[0]->createdDateTime; ?>
                                                            </td>
                                                            <td style="display: none;">
                                                                <div class="col-md-12 col-sm-12 hiddenComment<?php echo $localData[0]->id; ?>">
                                                                    <div class="portlet">
                                                                        <div class="portlet-body">                                                                          
                                                                            <div class="ibox float-e-margins ui-sortable">
                                                                                <div style="position: static;" class="ibox-content">
                                                                                    <div id="sysfrm_ajaxrender">
                                                                                        <section class="activity-post mb-xlg">
                                                                                            <form id="commentForm<?php echo $localData[0]->id; ?>">
                                                                                                <textarea name="messageText<?php echo $localData[0]->id; ?>" onkeyup="getValueComment(this.value, <?php echo $localData[0]->id; ?>);" id="messageText<?php echo $localData[0]->id; ?>" class="msg messageText<?php echo $localData[0]->id; ?>" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>
                                                                                                <input id="hiddenMessage<?php echo $localData[0]->id; ?>" class="hiddenMessage<?php echo $localData[0]->id; ?>" name="hiddenMessage<?php echo $localData[0]->id; ?>" value="" type="hidden">
                                                                                                <input id="activityType<?php echo $localData[0]->id; ?>" name="activityType<?php echo $localData[0]->id; ?>" value="fa-check" type="hidden">
                                                                                                <input id="activityId" name="activityId" value="<?php echo $localData[0]->id; ?>" type="hidden">
                                                                                                <input id="commentType<?php echo $localData[0]->id; ?>" name="commentType<?php echo $localData[0]->id; ?>" value="team" type="hidden">
                                                                                                <input id="commentCode<?php echo $localData[0]->id; ?>" name="commentCode<?php echo $localData[0]->id; ?>" value="" type="hidden">
                                                                                                <input id="commentId<?php echo $localData[0]->id; ?>" name="commentId<?php echo $localData[0]->id; ?>" value="" type="hidden">
                                                                                                <input id="commentProcess<?php echo $localData[0]->id; ?>" name="commentProcess<?php echo $localData[0]->id; ?>" value="0" type="hidden">
                                                                                            </form>
                                                                                            <div class="compose-box-footer">
                                                                                                <ul class="compose-toolbar compose-toolbar-success">
                                                                                                    <li onClick="iconChange('fa-hourglass', <?php echo $localData[0]->id; ?>);" class="clickable fa-hourglass<?php echo $localData[0]->id; ?>"><a><i class="fa fa-hourglass"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-hourglass-start', <?php echo $localData[0]->id; ?>);" class="clickable fa-hourglass-start<?php echo $localData[0]->id; ?>"><a><i class="fa fa-hourglass-start"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-hourglass-o', <?php echo $localData[0]->id; ?>);" class="clickable fa-hourglass-o<?php echo $localData[0]->id; ?>"><a><i class="fa fa-hourglass-o"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-balance-scale', <?php echo $localData[0]->id; ?>);" class="clickable fa-balance-scale<?php echo $localData[0]->id; ?>"><a><i class="fa fa-balance-scale"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-adjust', <?php echo $localData[0]->id; ?>);" class="clickable fa-adjust<?php echo $localData[0]->id; ?>"><a><i class="fa fa-adjust"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-certificate', <?php echo $localData[0]->id; ?>);" class="clickable fa-certificate<?php echo $localData[0]->id; ?>"><a><i class="fa fa-certificate"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-check', <?php echo $localData[0]->id; ?>);" class="clickable fa-check<?php echo $localData[0]->id; ?> action-active"><a><i class="fa fa-check"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-times', <?php echo $localData[0]->id; ?>);" class="clickable fa-times<?php echo $localData[0]->id; ?>"><a><i class="fa fa-times"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-exchange', <?php echo $localData[0]->id; ?>);" class="clickable fa-exchange<?php echo $localData[0]->id; ?>"><a><i class="fa fa-exchange"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-cog', <?php echo $localData[0]->id; ?>);" class="clickable fa-cog<?php echo $localData[0]->id; ?>"><a><i class="fa fa-cog"></i></a></li>
                                                                                                </ul>
                                                                                                <ul class="compose-btn">
                                                                                                    <li>
                                                                                                        <a class="save<?php echo $localData[0]->id; ?> btn btn-success btn-xs" onClick="commentProcess('sample_3', <?php echo $localData[0]->id; ?>)"><i class="fa fa-edit"></i> Add Note</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a class="cancle<?php echo $localData[0]->id; ?> btn btn-warning btn-xs" onClick="clickCancle(<?php echo $localData[0]->id; ?>)" style="display: none"><i class="fa fa-times"></i> Cancle</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </section>
                                                                                        <div style="margin-top:20px !important;" class="mt-lg"> </div>
                                                                                            <div id="all_timeline_div" class="all_timeline_div<?php echo $localData[0]->id ?>" data-always-visible="1" data-rail-visible1="1">
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
                                                                                                                        <i onclick="editComment('team', <?php echo $localData[0]->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-edit permission iconEdit iconMark"></i>
                                                                                                                        <i onclick="deleteComment('sample_3', <?php echo $localData[0]->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-trash permission iconDelete iconMark"></i>
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
                                                    <?php } else { if($localData[0]->staffType != 'BCSadmin') { ?>
                                                        <tr id="team<?php echo $team->id; ?>">
                                                            <td>
                                                                <div class="btn-group" style="margin: -5px">
                                                                    <button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">
                                                                        <li id="view<?php echo $team->id; ?>">
                                                                            <a target="_blank" target="_blank" href="<?php echo base_url(); ?>profile/team/<?php echo $team->id; ?>"><i class="fa fa-search" style="color: #26C281;"></i><span>View Profile</span></a>
                                                                        </li>
                                                                        <?php if($teamPermission == 1) { ?>
                                                                        <li id="active<?php echo $team->id; ?>">
                                                                            <a onclick="activeData(<?php echo $team->id; ?>)"><i class="fa fa-recycle" style="color: #008800;"></i><span>Active</span></a>
                                                                        </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </div>                                                          
                                                            </td>
                                                            <td>
                                                                <span id="tName<?php echo $team->id; ?>"><?php echo $team->userNameFull; ?></span>
                                                                <span id="tEmail<?php echo $team->id; ?>" style="display:none;"><?php echo $team->userEmail; ?></span>
                                                                <span id="tPhone<?php echo $team->id; ?>" style="display:none;"><?php echo $team->userMobileNo; ?></span>
                                                                <span id="tStaff<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->staffType; ?></span>
                                                                <span id="tPicture<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->picture; ?></span>
                                                                <span id="tMenuSettings<?php echo $team->id; ?>" style="display:none;"><?php echo $team->menuSettings; ?></span>
                                                                <span id="tMenuSort<?php echo $team->id; ?>" style="display:none;"><?php echo $team->menuSort; ?></span>
                                                                <span id="tIsDashboard<?php echo $team->id; ?>" style="display:none;"><?php echo $team->isDashboard; ?></span>
                                                                <span id="tStatus<?php echo $team->id; ?>" style="display:none;"><?php echo $team->userStatus; ?></span>
                                                                <span id="tUserId<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->id; ?></span>
                                                                <span id="tEngineId<?php echo $team->id; ?>" style="display:none;"><?php echo $localData[0]->engineId; ?></span>
                                                            </td>
                                                            <td>
                                                                <?php echo $localData[0]->systemId; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $team->userEmail; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $team->userMobileNo; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $localData[0]->staffType; ?>
                                                            </td>
                                                            <td>
                                                                <?php $team = $this->data_model->get_specific_column("name", array("id" => $team->createdBy), "list_team"); echo $team[0]->name; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $localData[0]->createdDateTime; ?>
                                                            </td>
                                                            <td style="display: none;">
                                                                <div class="col-md-12 col-sm-12 hiddenComment<?php echo $localData[0]->id; ?>">
                                                                    <div class="portlet">
                                                                        <div class="portlet-body">                                                                          
                                                                            <div class="ibox float-e-margins ui-sortable">
                                                                                <div style="position: static;" class="ibox-content">
                                                                                    <div id="sysfrm_ajaxrender">
                                                                                        <section class="activity-post mb-xlg">
                                                                                            <form id="commentForm<?php echo $localData[0]->id; ?>">
                                                                                                <textarea name="messageText<?php echo $localData[0]->id; ?>" onkeyup="getValueComment(this.value, <?php echo $localData[0]->id; ?>);" id="messageText<?php echo $localData[0]->id; ?>" class="msg messageText<?php echo $localData[0]->id; ?>" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>
                                                                                                <input id="hiddenMessage<?php echo $localData[0]->id; ?>" class="hiddenMessage<?php echo $localData[0]->id; ?>" name="hiddenMessage<?php echo $localData[0]->id; ?>" value="" type="hidden">
                                                                                                <input id="activityType<?php echo $localData[0]->id; ?>" name="activityType<?php echo $localData[0]->id; ?>" value="fa-check" type="hidden">
                                                                                                <input id="activityId" name="activityId" value="<?php echo $localData[0]->id; ?>" type="hidden">
                                                                                                <input id="commentType<?php echo $localData[0]->id; ?>" name="commentType<?php echo $localData[0]->id; ?>" value="team" type="hidden">
                                                                                                <input id="commentCode<?php echo $localData[0]->id; ?>" name="commentCode<?php echo $localData[0]->id; ?>" value="" type="hidden">
                                                                                                <input id="commentId<?php echo $localData[0]->id; ?>" name="commentId<?php echo $localData[0]->id; ?>" value="" type="hidden">
                                                                                                <input id="commentProcess<?php echo $localData[0]->id; ?>" name="commentProcess<?php echo $localData[0]->id; ?>" value="0" type="hidden">
                                                                                            </form>
                                                                                            <div class="compose-box-footer">
                                                                                                <ul class="compose-toolbar compose-toolbar-success">
                                                                                                    <li onClick="iconChange('fa-hourglass', <?php echo $localData[0]->id; ?>);" class="clickable fa-hourglass<?php echo $localData[0]->id; ?>"><a><i class="fa fa-hourglass"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-hourglass-start', <?php echo $localData[0]->id; ?>);" class="clickable fa-hourglass-start<?php echo $localData[0]->id; ?>"><a><i class="fa fa-hourglass-start"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-hourglass-o', <?php echo $localData[0]->id; ?>);" class="clickable fa-hourglass-o<?php echo $localData[0]->id; ?>"><a><i class="fa fa-hourglass-o"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-balance-scale', <?php echo $localData[0]->id; ?>);" class="clickable fa-balance-scale<?php echo $localData[0]->id; ?>"><a><i class="fa fa-balance-scale"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-adjust', <?php echo $localData[0]->id; ?>);" class="clickable fa-adjust<?php echo $localData[0]->id; ?>"><a><i class="fa fa-adjust"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-certificate', <?php echo $localData[0]->id; ?>);" class="clickable fa-certificate<?php echo $localData[0]->id; ?>"><a><i class="fa fa-certificate"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-check', <?php echo $localData[0]->id; ?>);" class="clickable fa-check<?php echo $localData[0]->id; ?> action-active"><a><i class="fa fa-check"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-times', <?php echo $localData[0]->id; ?>);" class="clickable fa-times<?php echo $localData[0]->id; ?>"><a><i class="fa fa-times"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-exchange', <?php echo $localData[0]->id; ?>);" class="clickable fa-exchange<?php echo $localData[0]->id; ?>"><a><i class="fa fa-exchange"></i></a></li>
                                                                                                    <li onClick="iconChange('fa-cog', <?php echo $localData[0]->id; ?>);" class="clickable fa-cog<?php echo $localData[0]->id; ?>"><a><i class="fa fa-cog"></i></a></li>
                                                                                                </ul>
                                                                                                <ul class="compose-btn">
                                                                                                    <li>
                                                                                                        <a class="save<?php echo $localData[0]->id; ?> btn btn-success btn-xs" onClick="commentProcess('sample_3', <?php echo $localData[0]->id; ?>)"><i class="fa fa-edit"></i> Add Note</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a class="cancle<?php echo $localData[0]->id; ?> btn btn-warning btn-xs" onClick="clickCancle(<?php echo $localData[0]->id; ?>)" style="display: none"><i class="fa fa-times"></i> Cancle</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </section>
                                                                                        <div style="margin-top:20px !important;" class="mt-lg"> </div>
                                                                                            <div id="all_timeline_div" class="all_timeline_div<?php echo $localData[0]->id ?>" data-always-visible="1" data-rail-visible1="1">
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
                                                                                                                        <i onclick="editComment('team', <?php echo $localData[0]->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-edit permission iconEdit iconMark"></i>
                                                                                                                        <i onclick="deleteComment('sample_3', <?php echo $localData[0]->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-trash permission iconDelete iconMark"></i>
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
                                                    <?php } } } ?>
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
        <!-- START MODAL GENERATED PASSWORD -->
        <div class="modal fade bs-modal-sm modalPass" id="small" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Generated Password</h4>
                </div>
                <div class="modal-body bodyModal">Your generated password is: <span class="generatePassword"></span> </div>
                <div class="modal-footer">
                    <button id="closeModal" type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    <a id="reRandom" class="btn btn-default success btn-sm"><i class="fa fa-random"></i>Re-generate Password</a>
                    <button id="iCopy" type="button" class="btn green iCopy" data-clipboard-action="copy" data-clipboard-target="span.generatePassword">Copy Password</button>
                </div>
            </div>
        </div>
        <!-- END MODAL GENERATED PASSWORD -->   
        <!-- START MODAL GENERATED PASSWORD -->
        <div class="modal fade bs-modal-sm modalPass" id="keysChange" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Generated Password</h4>
                </div>
                <div class="modal-body bodyModal">
                    <div class="col-md-12" style="margin-bottom: 25px; margin-top: -15px;">
                        <div id="rePassDiv" class="form-group form-md-line-input form-md-floating-label">
                            <input id="rePass" class="form-control" placeholder="" name="rePass" reauired="required" name="rePass" type="password"> 
                            <label for="con_pass">Type New Password</label>
                            <span id="con_pass_msg" class="help-block">Type your password with special charecter (minimum 8)</span>
                        </div>
                    </div>
                    Your generated password is: <span class="generatePasswordIs"></span> 
                </div>
                <div class="modal-footer">
                    <input id="passUser" type="hidden" name="passUser" value="" />
                    <button id="closeModal" type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    <a id="reRandomIs" class="btn btn-default success btn-sm"><i class="fa fa-random"></i>Re-generate</a>
                    <button id="iCopyIs" type="button" class="btn green iCopyIs" data-clipboard-action="copy" data-clipboard-target="span.generatePasswordIs">Copy Password & Change</button>
                </div>
            </div>
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
            var currentTeam = '';
            var totalTeam = "<?php echo $totalTeam; ?>";
            var currentComment = '';
            var totalComment = "<?php echo $totalComment; ?>";
            var currentActivity = '';
            var totalActivity =  "<?php echo $totalActivity; ?>";
            var currentdate = new Date();
            var staffType = '<?php echo $this->session->userdata('staffType'); ?>';
            var purchaseTerms = '<?php echo $basicInvoiceEstimate[0]->paymentTermPurchase; ?>';
            var getDateTime = currentdate.getFullYear() + "-"
                            + (currentdate.getMonth()+1)  + "-" 
                            + currentdate.getDate() + " "  
                            + (currentdate.getHours() % 12 || 12) + ":"  
                            + currentdate.getMinutes() + ":" 
                            + currentdate.getSeconds();
            var uriSegment = '<?php echo $this->uri->segment(2); ?>';
            var unknownSubmit = 0;
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
        <script src="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-bootstrap-switch.min.js" type="text/javascript"></script>
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
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/form-dropzone.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/table-advanced.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/form-editable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/bootstrap-star-rating/js/star-rating.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/tableExport.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jquery.base64.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/html2canvas.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jspdf/jspdf.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jspdf/libs/sprintf.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jspdf/libs/base64.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/tableExport/jspdf.debug.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/clipboard.min.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->
        <script>
            var clipboard = new Clipboard('#iCopy');
            var clipboard_iCopyIs = new Clipboard('#iCopyIs');
            if(uriSegment == 'edit') {
                //$('#edit<?php echo $this->uri->segment(3) ?>');
                window.onload = function() {
                    editData(<?php echo $this->uri->segment(3) ?>);
                };
            }
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
            function teamListId() {
                if(totalTeam < 10) {
                    currentTeam = "00000"+(++totalTeam);
                } else if(totalTeam < 100) {
                    currentTeam = "0000"+(++totalTeam);                
                } else if(totalTeam < 1000) {
                    currentTeam = "000"+(++totalTeam);                
                } else if(totalTeam < 10000) {
                    currentTeam = "00"+(++totalTeam);                
                } else if(totalTeam < 100000) {
                    currentTeam = "0"+(++totalTeam);                
                }
                $("#teamSystemCode").val("bcte"+(currentTeam));
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
            teamListId();
            commentListId();
            function fileExists(file) {
                $.post(base_link+"team/fileExists",{
                  file: file
                },
                function(data, status){
                    r = $.parseJSON(data);
                    return r.response;
                });
            }
            $('.kv-ltr-theme-fa-alt').rating({
                defaultCaption: '{rating} hearts',
                starCaptions: function (rating) {
                    return rating == 1 ? 'One heart' : rating + ' hearts';
                },
                filledStar: '<i class="fa fa-heart"></i>',
                emptyStar: '<i class="fa fa-heart-o"></i>',
                'color': "#000000"
            });
            $('.teamListVisible').live('click', function(e) {
                $('.addTeam').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                $('#productPicture').css('display', 'block');
                $('#productPictureDiv').css('display', 'none');
                $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                $('#productPictureImg').attr('src', base_link +'assets/uploadedFile/profilePicture/photo3.jpg');
                $('#save').html('<i class="fa fa-save"></i> Save');
                $('#saveNew').html('<i class="fa fa-newspaper-o"></i> Save & New');
                $('#newSubmit').trigger("reset");
                $('#activityStatus').bootstrapSwitch('state', true);
                $("html, body").animate({ scrollTop: '0px' }, "slow");
                for (var i = 0; i < 10; i++) {
                    $('#checkbox'+(i+1)).removeAttr('checked');
                }
                for (var i = 0; i < 7; i++) {
                    $('#checkbox'+i).attr('checked', true);
                }
            });
            $('.teamAddVisible').live('click', function(e) {
                $('.addTeam').stop(true, true).fadeIn({ duration: 1500, queue: false }).css('display', 'none').slideDown(1500);    
                $("html, body").animate({ scrollTop: '0px' }, "slow");
            });
            jQuery(document).ready(function() { 
                TableAdvanced.init();
            });
            var counter = 1;  
            function editData(id) { 
                $('.addTeam').stop(true, true).fadeIn({ duration: 1500, queue: false }).css('display', 'none').slideDown(1500);    
                $("html, body").animate({ scrollTop: '0px' }, "slow");
                $('#save').html('<i class="fa fa-save"></i> Update');
                $('#saveNew').html('<i class="fa fa-newspaper-o"></i> Update & New');
                for (var i = 0; i < 10; i++) {
                    $('#checkbox'+(i+1)).removeAttr('checked');
                }
                var menuSettings = $('#tMenuSettings'+id).text().trim();
                var settingsMenu = menuSettings.split(',');
                for (var i = 0; i < settingsMenu.length; i++) {
                    $('#checkbox'+settingsMenu[i]).attr('checked', true);
                }
                var teamPermission = '<?php echo $teamPermission; ?>';
                if(id == "<?php echo $this->session->userdata('id'); ?>" && teamPermission != 1) {
                    for (var i = 0; i < 10; i++) {
                        $('#checkbox'+(i+1)).attr('disabled', true);
                    }
                }
                if($('#tStatus'+id).text() == 1) {
                    $('#activeTeam').val(1);
                    $('#activityStatus').bootstrapSwitch('state', true);
                } else {
                    $('#activeTeam').val(0);
                    $('#activityStatus').bootstrapSwitch('state', false);
                }
                $('#name').addClass('edited');
                $('#name').val($('#tName'+id).text().trim());
                $('#email').addClass('edited');
                $('#email').val($('#tEmail'+id).text().trim());
                $('#phone').addClass('edited');
                $('#phone').val($('#tPhone'+id).text().trim());
                $('#staff').addClass('edited');
                $('#staff').val($('#tStaff'+id).text().trim());
                $('#productImg').val($('#tPicture'+id).text().trim());
                if($('#productImg').val() != '') {
                    $('#productPicture').css('display', 'none');
                    $('#productPictureDiv').css('display', 'block');
                    $('#productPictureImg').attr('src', base_link +'assets/uploadedFile/profilePicture/'+$('#tPicture'+id).text().trim());
                }
                $('#activeTeam').val($('#tStatus'+id).text().trim());
                $('#teamEditId').val($('#tUserId'+id).text().trim());
                $('#teamLiveId').val($('#tEngineId'+id).text().trim());
            }  
            function duplicateData(id) { 
                $('.addTeam').stop(true, true).fadeIn({ duration: 1500, queue: false }).css('display', 'none').slideDown(1500);    
                $("html, body").animate({ scrollTop: '0px' }, "slow");
                for (var i = 0; i < 10; i++) {
                    $('#checkbox'+(i+1)).removeAttr('checked');
                }
                var menuSettings = $('#tMenuSettings'+id).text().trim();
                var settingsMenu = menuSettings.split(',');
                for (var i = 0; i < settingsMenu.length; i++) {
                    $('#checkbox'+settingsMenu[i]).attr('checked', true);
                }
                if($('#tStatus'+id).text() == 1) {
                    $('#activeTeam').val(1);
                    $('#activityStatus').bootstrapSwitch('state', true);
                } else {
                    $('#activeTeam').val(0);
                    $('#activityStatus').bootstrapSwitch('state', false);
                }
                $('#name').addClass('edited');
                $('#name').val($('#tName'+id).text().trim());
                $('#email').addClass('edited');
                $('#email').val($('#tEmail'+id).text().trim());
                $('#phone').addClass('edited');
                $('#phone').val($('#tPhone'+id).text().trim());
                $('#staff').addClass('edited');
                $('#staff').val($('#tStaff'+id).text().trim());
                $('#productImg').val($('#tPicture'+id).text().trim());
                if($('#productImg').val() != '') {
                    $('#productPicture').css('display', 'none');
                    $('#productPictureDiv').css('display', 'block');
                    $('#productPictureImg').attr('src', base_link +'assets/uploadedFile/profilePicture/'+$('#tPicture'+id).text().trim());
                }
                $('#activeTeam').val($('#tStatus'+id).text().trim());
                $('#teamEditId').val($('#tUserId'+id).text().trim());
                $('#teamLiveId').val($('#tEngineId'+id).text().trim());
                $("#email").trigger("blur");
                $("#phone").trigger("blur");
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
                    var table = $('#sample_3').DataTable();
                    if (isConfirm) {
                        $('#team'+id).closest('tr').find('td:eq(1) #edit'+id).remove();
                        $('#team'+id).closest('tr').find('td:eq(1) #key'+id).remove();
                        $('#team'+id).closest('tr').find('td:eq(1) #delete'+id).remove();
                        var activeTd =  '<li id="active'+id+'">'+
                                            '<a onclick="activeData(\''+id+'\')"><i class="fa fa-recycle" style="color: green;"></i><span>Active</span></a>'+
                                        '</li>';
                        $(activeTd).insertAfter('#view'+id);
                        var remarks = $('#team'+id).closest('tr').find('td:eq(7)').html();
                        var rowIndex = $('#sample_33').dataTable().fnAddData( 
                            [ 
                                '<span class="row-details row-details-close"></span>',
                                $('#team'+id).closest('tr').find('td:eq(1)').html(),
                                table.row('#team'+id).data()[2],
                                table.row('#team'+id).data()[3],
                                table.row('#team'+id).data()[4],
                                table.row('#team'+id).data()[5],
                                table.row('#team'+id).data()[6],
                                table.row('#team'+id).data()[7],
                                table.row('#team'+id).data()[8],
                                remarks
                            ]
                        );
                        var row = $('#sample_33').dataTable().fnGetNodes(rowIndex);
                        $(row).attr('id', 'team'+id);
                        $('#sample_33 tr td:last-child').css('display', 'none');
                          
                        $.ajax({
                            type: 'post',
                            url: base_link + "team/teamStatus",
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
                                            $("#team"+id).slideUp("normal", function() { $(this).remove(); table.draw(); });
                                            toastr.error(" You successfully archive team member ", "Archive Team Member");
                                        }, 1500);
                                        swal({
                                            title: "Archive!",
                                            text: "This team member has been archived.",
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
                                        data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=archive'+ '&title=team member'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/team/'+id,
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
                    text: "The system will be calculated any data within the active.",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, active it!",
                    cancelButtonText: "No, cancel please!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    var table = $('#sample_33').DataTable();
                    $('#team'+id).closest('tr').find('td:eq(1) #active'+id).remove();
                    if (isConfirm) {
                        var editTd      =  '<li id="edit'+id+'">'+
                                                '<a onclick="editData(\''+id+'\')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Edit</span></a>'+
                                            '</li>';
                        var keyTd       =  '<li id="key'+id+'">'+
                                                '<a onclick="keysChange('+id+')" href="javascript:;"><i class="fa fa-key" style="color: #FF0000;"></i><span>Reset Pass</span></a>'+
                                            '</li>';
                        var deleteTd    =  '<li id="delete'+id+'">'+
                                                '<a onclick="deleteData(\''+id+'\')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>'+
                                            '</li>';
                        $(editTd).insertAfter('#view'+id);
                        $(keyTd).insertAfter('#edit'+id); 
                        $(deleteTd).insertAfter('#key'+id);
                        var remarks = $('#team'+id).closest('tr').find('td:eq(7)').html();                        
                        var rowIndex = $('#sample_3').dataTable().fnAddData( 
                            [ 
                                '<span class="row-details row-details-close"></span>',
                                $('#team'+id).closest('tr').find('td:eq(1)').html(),
                                table.row('#team'+id).data()[2],
                                table.row('#team'+id).data()[3],
                                table.row('#team'+id).data()[4],
                                table.row('#team'+id).data()[5],
                                table.row('#team'+id).data()[6],
                                table.row('#team'+id).data()[7],
                                table.row('#team'+id).data()[8],
                                remarks
                            ]
                        );
                        var row = $('#sample_3').dataTable().fnGetNodes(rowIndex);
                        $(row).attr('id', 'team'+id);
                        $('#sample_3 tr td:last-child').css('display', 'none');
                          
                        $.ajax({
                            type: 'post',
                            url: base_link + "team/teamStatus",
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
                                            $("#sample_33 #team"+id).slideUp("normal", function() { $(this).remove(); });
                                            toastr.success(" You successfully active team member ", "Active Team Member");
                                        }, 1500);
                                        swal({
                                            title: "Activate!",
                                            text: "This team member has been activate.",
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
                                        data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=archive'+ '&title=team member'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/team/'+id,
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
                    }
                });
            });
            $("input[name='radio11']").click(function(){
                if($('input:radio[name=radio11]:checked').val() == "archive"){                    
                    $(".TeamList").css('display', 'none'); 
                    $(".TeamListArchive").css('display', 'block');
                    $('#radio11').prop('checked', true);
                } else {
                    $(".TeamList").css('display', 'block'); 
                    $(".TeamListArchive").css('display', 'none');
                }
            });
            $("input[name='radio12']").click(function(){
                if($('input:radio[name=radio12]:checked').val() == "active"){
                    $(".TeamList").css('display', 'block'); 
                    $(".TeamListArchive").css('display', 'none');
                    $('#radio14').prop('checked', true);
                } else {                  
                    $(".TeamList").css('display', 'none'); 
                    $(".TeamListArchive").css('display', 'block');
                }
            });
            $('#cRrandom').click(function () {
                $.get(base_link+"profile/generateResellerPassword",{
                },
                function(data, status){
                    r = $.parseJSON(data);
                    $('#pass').focus();
                    $('#pass').val(r.result);
                    $('#cPass').focus();
                    $('#cPass').val(r.result);
                    $('.plasty').removeClass('plasty');
                    $('.generatePassword').text(r.result);
                    $('#small').modal('show');
                });
            });
            $('#reRandom').click(function () {
                $.get(base_link+"profile/generateResellerPassword",{
                },
                function(data, status){
                    r = $.parseJSON(data);
                    r = $.parseJSON(data);
                    $('#pass').focus();
                    $('#pass').val(r.result);
                    $('#cPass').focus();
                    $('#cPass').val(r.result);
                    $('.plasty').removeClass('plasty');
                    $('.generatePassword').text(r.result);
                });
            });
            function keysChange(id) {
                $.get(base_link+"profile/generateResellerPassword",{
                },
                function(data, status){
                    r = $.parseJSON(data);
                    $('#keysChange').on('shown.bs.modal', function () {
                        $('#rePass').focus();
                    });
                    $('#rePass').val(r.result);
                    $('#passUser').val(id);
                    $('.generatePasswordIs').text(r.result);
                    $('#keysChange').modal('show');
                });
            }
            $('#reRandomIs').click(function () {
                $.get(base_link+"profile/generateResellerPassword",{
                },
                function(data, status){
                    r = $.parseJSON(data);
                    r = $.parseJSON(data);
                    $('#rePass').val(r.result);
                    $('.generatePasswordIs').text(r.result);
                    $('#keysChange').modal('show');
                });
            });
            $('#rePass').keyup(function () {
                var pass = $('#rePass').val();
                if(pass != "" ) {
                    var regx = /^[A-Za-z0-9]+$/;
                    if (regx.test(pass) || pass.length < 8) {
                        $('#rePassDiv').removeClass('has-success');
                        $('#rePassDiv').addClass('has-error');
                        $('.generatePasswordIs').text(pass);
                    } else {
                        $('#rePassDiv').removeClass('has-error');
                        $('#rePassDiv').addClass('has-success');
                        $('.generatePasswordIs').text(pass);
                    }
                }
            });
            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test( $email );
            }
            var mobileOperator = ['011', '015', '016', '017', '018', '019'];
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
            $('#activityStatus').on('switchChange.bootstrapSwitch', function (event, state) {
                if(state) {
                    $('#activeTeam').val(1);
                    $(".bootstrap-switch-wrapper").css('border', '1px solid #3FC9C5');
                } else {
                    $('#activeTeam').val(0);
                    $(".bootstrap-switch-wrapper").css('border', '1px solid yellow');
                }
            });
            $("#email").on('blur', function () {
                var error = false;
                var email = $('#email').val();
                var id = $('#teamLiveId').val();
                if(id == '') {
                    if(email == '' || !validateEmail(email)) {
                        $('#emailDiv').removeClass('has-success');
                        $('#emailDiv').addClass('has-error');
                        error = true;
                    } else {
                        var info = ['userEmail', email, id];
                        if(!error) {
                            $.ajax({
                                url: base_link+'team/liveInputCheck',
                                type: 'POST',
                                data: {column: info},
                                async: false,
                                beforeSend: function() {
                                    $('#overlay').css('display', 'block');
                                    setLoadingImage();
                                },
                                complete: function() {
                                    $('#overlay').css('display', 'none');
                                },
                                success: function (response) { 
                                    r = $.parseJSON(response);
                                    if(r.response == "success") {
                                        $('#emailDiv').removeClass('has-error');
                                        $('#emailDiv').addClass('has-success'); 
                                        $('#emailHelp').text("Email here...");
                                    } else {
                                        $('#emailDiv').removeClass('has-success');
                                        $('#emailDiv').addClass('has-error');
                                        $('#emailHelp').text("Email address already exists");
                                                                           
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
                } else {
                    if(email == '' || !validateEmail(email)) {
                        $('#emailDiv').removeClass('has-success');
                        $('#emailDiv').addClass('has-error');
                        error = true;
                    } else {
                        var info = ['userEmail', email, id];
                        if(!error) {
                            $.ajax({
                                url: base_link+'team/liveInputCheckEdit',
                                type: 'POST',
                                data: {column: info},
                                async: false,
                                beforeSend: function() {
                                    $('#overlay').css('display', 'block');
                                    setLoadingImage();
                                },
                                complete: function() {
                                    $('#overlay').css('display', 'none');
                                },
                                success: function (response) { 
                                    r = $.parseJSON(response);
                                    if(r.response == "success") {
                                        $('#emailDiv').removeClass('has-error');
                                        $('#emailDiv').addClass('has-success'); 
                                        $('#emailHelp').text("Email here...");
                                    } else {
                                        $('#emailDiv').removeClass('has-success');
                                        $('#emailDiv').addClass('has-error');
                                        $('#emailHelp').text("Email address already exists");
                                                                           
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
                }
            });

            $("#phone").on('blur', function () {
                var error = false;
                var phone = $('#phone').val();
                var id = $('#teamLiveId').val();
                if(id == '') {
                    if(phone == '' || phone.length == 11) {
                        var foundOperator = $.inArray(phone.substring(0, 3), mobileOperator);
                        if(foundOperator <= 0) {
                            $('#phoneDiv').removeClass('has-success');
                            $('#phoneDiv').addClass('has-error');
                            $('#phoneHelp').text('Mobile operator not valid');
                            error = true;
                        } else {
                            var info = ['userMobileNo', phone];
                            if(!error) {
                                $.ajax({
                                    url: base_link+'team/liveInputCheck',
                                    type: 'POST',
                                    data: {column: info},
                                    async: false,
                                    beforeSend: function() {
                                        $('#overlay').css('display', 'block');
                                        setLoadingImage();
                                    },
                                    complete: function() {
                                        $('#overlay').css('display', 'none');
                                    },
                                    success: function (response) { 
                                        r = $.parseJSON(response);
                                        if(r.response == "success") {                                        
                                            $('#phoneDiv').removeClass('has-error');
                                            $('#phoneDiv').addClass('has-success');
                                            $('#phoneHelp').text("phone here...");
                                        } else {
                                            $('#phoneDiv').removeClass('has-success');
                                            $('#phoneDiv').addClass('has-error');
                                            $('#phoneHelp').text("phone number already exists");
                                                                               
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
                    } else {
                        $('#phoneDiv').removeClass('has-success');
                        $('#phoneDiv').addClass('has-error');
                        $('#phoneHelp').text('Check mobile number length');                    
                    }
                } else {
                    if(phone == '' || phone.length == 11) {
                        var foundOperator = $.inArray(phone.substring(0, 3), mobileOperator);
                        if(foundOperator <= 0) {
                            $('#phoneDiv').removeClass('has-success');
                            $('#phoneDiv').addClass('has-error');
                            $('#phoneHelp').text('Mobile operator not valid');
                            error = true;
                        } else {
                            var info = ['userMobileNo', phone, id];
                            if(!error) {
                                $.ajax({
                                    url: base_link+'team/liveInputCheckEdit',
                                    type: 'POST',
                                    data: {column: info},
                                    async: false,
                                    beforeSend: function() {
                                        $('#overlay').css('display', 'block');
                                        setLoadingImage();
                                    },
                                    complete: function() {
                                        $('#overlay').css('display', 'none');
                                    },
                                    success: function (response) { 
                                        r = $.parseJSON(response);
                                        if(r.response == "success") {                                        
                                            $('#phoneDiv').removeClass('has-error');
                                            $('#phoneDiv').addClass('has-success');
                                            $('#phoneHelp').text("phone here...");
                                        } else {
                                            $('#phoneDiv').removeClass('has-success');
                                            $('#phoneDiv').addClass('has-error');
                                            $('#phoneHelp').text("phone number already exists");
                                                                               
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
                    } else {
                        $('#phoneDiv').removeClass('has-success');
                        $('#phoneDiv').addClass('has-error');
                        $('#phoneHelp').text('Check mobile number length');                    
                    }
                }
            });
            
            var passError = false;
            $("#pass").on('blur', function trimText() {
                var pass = $('#pass').val();
                if(pass != "" ) {
                    var regx = /^[A-Za-z0-9]+$/;
                    if (regx.test(pass) || pass.length < 8) {
                        $('#passDiv').removeClass('has-success');
                        $('#passDiv').addClass('has-error');
                        passError = true;
                    } else {
                        $('#passDiv').removeClass('has-error');
                        $('#passDiv').addClass('has-success');
                    }
                }
            });
            $('#save').click(function(e) {
                var id = $('#teamLiveId').val();
                if(id == '') {
                    var error = false;
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var phone = $('#phone').val();
                    var staff = $('#staff').val();
                    var pass = $('#pass').val();
                    var cPass = $('#cPass').val();
                    if(name != ""){                    
                        $('#nameDiv').removeClass('has-error');
                        $('#nameDiv').addClass('has-success');
                    } else { 
                        $('#nameDiv').removeClass('has-success');
                        $('#nameDiv').addClass('has-error');
                        error = true;
                    }
                    if(email == '' || !validateEmail(email)) {
                        $('#emailDiv').removeClass('has-success');
                        $('#emailDiv').addClass('has-error');
                        error = true;
                    } else {
                        $('#emailDiv').addClass('has-success');
                        $('#emailDiv').removeClass('has-error');
                    }
                    $("#email").trigger("blur");
                    if(phone == '' || phone.length == 11) {
                        var foundOperator = $.inArray(phone.substring(0, 3), mobileOperator);
                        if(foundOperator <= 0) {
                            $('#phoneDiv').removeClass('has-success');
                            $('#phoneDiv').removeClass('has-warning');
                            $('#phoneDiv').addClass('has-error');
                            error = true;
                        } else {
                            $('#phoneDiv').removeClass('has-warning');
                            $('#phoneDiv').removeClass('has-error');
                            $('#phoneDiv').addClass('has-success');
                        }
                    } else {
                        $('#phoneDiv').removeClass('has-success');
                        $('#phoneDiv').removeClass('has-warning');
                        $('#phoneDiv').addClass('has-error');
                        error = true;
                    }                
                    $("#phone").trigger("blur");
                    if(staff != ""){ 
                        if(staffType != 'BCSadmin' && staff == 'BCSadmin')  {                            
                            $('#staffDiv').removeClass('has-success');
                            $('#staffDiv').removeClass('has-warning');
                            $('#staffDiv').addClass('has-error');
                            error = true;
                        } else {               
                            $('#staffDiv').removeClass('has-warning');
                            $('#staffDiv').removeClass('has-error');
                            $('#staffDiv').addClass('has-success');
                        }
                    } else { 
                        $('#staffDiv').removeClass('has-success');
                        $('#staffDiv').removeClass('has-error');
                        $('#staffDiv').addClass('has-warning');
                    }
                    if(pass != ""){                    
                        $('#passDiv').removeClass('has-error');
                        $('#passDiv').addClass('has-success');
                    } else { 
                        $('#passDiv').removeClass('has-success');
                        $('#passDiv').addClass('has-error');
                        error = true;
                    }
                    if(cPass != ""){                    
                        $('#cPassDiv').removeClass('has-error');
                        $('#cPassDiv').addClass('has-success');
                    } else { 
                        $('#cPassDiv').removeClass('has-success');
                        $('#cPassDiv').addClass('has-error');
                        error = true;
                    }
                    if(pass != '' && cPass != '' && pass != cPass){ 
                        $('#passDiv').removeClass('has-success');
                        $('#passDiv').addClass('has-error');
                        $('#cPassDiv').removeClass('has-success');
                        $('#cPassDiv').addClass('has-error');
                        $('#cRrandom').addClass('plasty');
                        error = true;   
                    } else {
                        if(pass == '' || cPass == '') {                     
                            $('#cRrandom').addClass('plasty');
                        } else {
                            $('#passDiv').removeClass('has-error');
                            $('#passDiv').addClass('has-success');
                            $('#cPassDiv').removeClass('has-error');
                            $('#cPassDiv').addClass('has-success');
                            $('#cRrandom').removeClass('plasty');                       
                        }
                    }                
                    $("#pass").trigger("blur");
                    var permission = '';
                    $(".md-check").each(function() {
                        if($(this).is(':checked')) {
                            permission += $(this).val()+",";
                            $(this).closest('.col-md-3').removeClass('has-warning'); 
                            $(this).closest('.col-md-3').addClass('has-success');                       
                        } else {
                            $(this).closest('.col-md-3').removeClass('has-success');
                            $(this).closest('.col-md-3').addClass('has-warning');
                        }
                    });
                    permission = permission.replace(/(^,)|(,$)/g, "");
                    var whichTable = 'sample_3';
                    if($('#activityStatus').bootstrapSwitch('state') == true) {
                        $('#activeTeam').val(1);
                        $(".bootstrap-switch-wrapper").css('border', '1px solid #3FC9C5');
                        whichTable = 'sample_3';
                    } else {
                        $('#activeTeam').val(0);
                        $(".bootstrap-switch-wrapper").css('border', '1px solid yellow');
                        whichTable = 'sample_33';
                    }
                    if(!error && !passError) {
                        $.ajax({
                            url: base_link+'team/createTeam',
                            type: 'POST',
                            data: $('#newSubmit').serialize(),
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
                                            toastr.success(" You successfully added new team member ", "Add Team Member");
                                        }, 1000);
                                    }, 500);
                                    var activityId = activityListId();
                                    var acType = "fa-plus";
                                    var acLabel = "label-success";
                                    $.ajax({
                                        url: base_link+'recent_activity/add_activity/',
                                        data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=team member'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=product/viewBill/'+totalTeam,
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
                                        $('#'+whichTable).dataTable().fnAddData( 
                                            [ 
                                                '<span class="row-details row-details-close"></span>',
                                                '<div class="btn-group" style="margin: -5px">'+
                                                    '<button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage'+
                                                        '<i class="fa fa-angle-down"></i>'+
                                                    '</button>'+
                                                    '<ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">'+
                                                        '<li id="view'+totalTeam+'">'+
                                                            '<a target="_blank" target="_blank" href="<?php echo base_url(); ?>profile/team/'+totalTeam+'"><i class="fa fa-search" style="color: #26C281;"></i><span>View Profile</span></a>'+
                                                        '</li>'+
                                                        '<li id="edit'+totalTeam+'">'+
                                                            '<a onclick="editData('+totalTeam+')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Edit</span></a>'+
                                                        '</li>'+
                                                        '<li id="key'+totalTeam+'">'+
                                                            '<a onclick="keysChange('+totalTeam+')" href="javascript:;"><i class="fa fa-key" style="color: #FF0000;"></i><span>Reset Pass</span></a>'+
                                                        '</li>'+
                                                        '<li id="delete'+totalTeam+'">'+
                                                            '<a onclick="deleteData('+totalTeam+')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>'+
                                                        '</li>'+
                                                    '</ul>'+
                                                '</div>',
                                                '<span id="tName'+totalTeam+'">'+name+'</span>'+
                                                '<span id="tEmail'+totalTeam+'" style="display:none;">'+email+'</span>'+
                                                '<span id="tPhone'+totalTeam+'" style="display:none;">'+phone+'</span>'+
                                                '<span id="tStaff'+totalTeam+'" style="display:none;">'+staff+'</span>'+
                                                '<span id="tMenuSettings'+totalTeam+'" style="display:none;">'+permission+'</span>'+
                                                '<span id="tStatus'+totalTeam+'" style="display:none;">'+$('#activeTeam').val()+'</span>'+
                                                '<span id="iPicture'+totalTeam+'" style="display:none;">'+$('#productImg').val()+'</span>',
                                                $("#teamSystemCode").val(),
                                                email,
                                                phone,
                                                staff,
                                                userNameFull,
                                                getDateTime,
                                                '<div class="col-md-12 col-sm-12 hiddenComment'+totalTeam+'">'+
                                                    '<div class="portlet">'+
                                                        '<div class="portlet-body">                                                                          '+
                                                            '<div class="ibox float-e-margins ui-sortable">'+
                                                                '<div style="position: static;" class="ibox-content">'+
                                                                    '<div id="sysfrm_ajaxrender">'+
                                                                        '<section class="activity-post mb-xlg">'+
                                                                            '<form id="commentForm'+totalTeam+'">'+
                                                                                '<textarea name="messageText'+totalTeam+'" onkeyup="getValueComment(this.value, '+totalTeam+');" id="messageText'+totalTeam+'" class="msg messageText'+totalTeam+'" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>'+
                                                                                '<input id="hiddenMessage'+totalTeam+'" class="hiddenMessage'+totalTeam+'" name="hiddenMessage'+totalTeam+'" value="" type="hidden">'+
                                                                                '<input id="activityType'+totalTeam+'" name="activityType'+totalTeam+'" value="" type="hidden">'+
                                                                                '<input id="activityId" name="activityId" value="'+totalTeam+'" type="hidden">'+
                                                                                '<input id="commentType'+totalTeam+'" name="commentType'+totalTeam+'" value="team" type="hidden">'+
                                                                                '<input id="commentCode'+totalTeam+'" name="commentCode'+totalTeam+'" value="" type="hidden">'+
                                                                                '<input id="commentId'+totalTeam+'" name="commentId'+totalTeam+'" value="" type="hidden">'+
                                                                                '<input id="commentProcess'+totalTeam+'" name="commentProcess'+totalTeam+'" value="0" type="hidden">'+
                                                                            '</form>'+
                                                                            '<div class="compose-box-footer">'+
                                                                                '<ul class="compose-toolbar">'+
                                                                                    '<li onClick="iconChange(\'fa-hourglass\', '+totalTeam+');" class="clickable fa-hourglass'+totalTeam+'"><a><i class="fa fa-hourglass"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-hourglass-start\', '+totalTeam+');" class="clickable fa-hourglass-start'+totalTeam+'"><a><i class="fa fa-hourglass-start"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-hourglass-o\', '+totalTeam+');" class="clickable fa-hourglass-o'+totalTeam+'"><a><i class="fa fa-hourglass-o"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-balance-scale\', '+totalTeam+');" class="clickable fa-balance-scale'+totalTeam+'"><a><i class="fa fa-balance-scale"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-adjust\', '+totalTeam+');" class="clickable fa-adjust'+totalTeam+'"><a><i class="fa fa-adjust"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-certificate\', '+totalTeam+');" class="clickable fa-certificate'+totalTeam+'"><a><i class="fa fa-certificate"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-check\', '+totalTeam+');" class="clickable fa-check'+totalTeam+'"><a><i class="fa fa-check"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-times\', '+totalTeam+');" class="clickable fa-times'+totalTeam+'"><a><i class="fa fa-times"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-exchange\', '+totalTeam+');" class="clickable fa-exchange'+totalTeam+'"><a><i class="fa fa-exchange"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-cog\', '+totalTeam+');" class="clickable fa-cog'+totalTeam+'"><a><i class="fa fa-cog"></i></a></li>'+
                                                                                '</ul>'+
                                                                                '<ul class="compose-btn">'+
                                                                                    '<li>'+
                                                                                        '<a class="save'+totalTeam+' btn btn-success btn-xs" onClick="commentProcess(\''+whichTable+'\', '+totalTeam+')"><i class="fa fa-edit"></i> Add Note</a>'+
                                                                                    '</li>'+
                                                                                    '<li>'+
                                                                                        '<a class="cancle'+totalTeam+' btn btn-warning btn-xs" onClick="clickCancle('+totalTeam+')" style="display: none"><i class="fa fa-times"></i> Cancle</a>'+
                                                                                    '</li>'+
                                                                                '</ul>'+
                                                                            '</div>'+
                                                                        '</section>'+
                                                                        '<div style="margin-top:20px !important;" class="mt-lg"> </div>'+
                                                                            '<div id="all_timeline_div" class="all_timeline_div'+totalTeam+'" data-always-visible="1" data-rail-visible1="1">'+
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
                                        $('#'+whichTable+' tbody tr:first').attr('id');
                                        $('#'+whichTable+' tbody tr:first').attr('id','team'+totalTeam);
                                        $('#'+whichTable+' tr td:last-child').css('display', 'none');
                                        $('.addTeam').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                                        $('#newSubmit').trigger("reset");
                                        $("html, body").animate({ scrollTop: '0px' }, "slow");
                                        $('#newSubmit')[0].reset();
                                        $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                                        teamListId(); 
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
                } else {
                    var error = false;
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var phone = $('#phone').val();
                    var staff = $('#staff').val();
                    var pass = $('#pass').val();
                    var cPass = $('#cPass').val();
                    if(name != ""){                    
                        $('#nameDiv').removeClass('has-error');
                        $('#nameDiv').addClass('has-success');
                    } else { 
                        $('#nameDiv').removeClass('has-success');
                        $('#nameDiv').addClass('has-error');
                        error = true;
                    }
                    if(email == '' || !validateEmail(email)) {
                        $('#emailDiv').removeClass('has-success');
                        $('#emailDiv').addClass('has-error');
                        error = true;
                    } else {
                        $('#emailDiv').addClass('has-success');
                        $('#emailDiv').removeClass('has-error');
                    }
                    $("#email").trigger("blur");
                    if(phone == '' || phone.length == 11) {
                        var foundOperator = $.inArray(phone.substring(0, 3), mobileOperator);
                        if(foundOperator <= 0) {
                            $('#phoneDiv').removeClass('has-success');
                            $('#phoneDiv').removeClass('has-warning');
                            $('#phoneDiv').addClass('has-error');
                            error = true;
                        } else {
                            $('#phoneDiv').removeClass('has-warning');
                            $('#phoneDiv').removeClass('has-error');
                            $('#phoneDiv').addClass('has-success');
                        }
                    } else {
                        $('#phoneDiv').removeClass('has-success');
                        $('#phoneDiv').removeClass('has-warning');
                        $('#phoneDiv').addClass('has-error');
                        error = true;
                    }                
                    $("#phone").trigger("blur");
                    if(staff != ""){ 
                        if(staffType != 'BCSadmin' && staff == 'BCSadmin')  {                            
                            $('#staffDiv').removeClass('has-success');
                            $('#staffDiv').removeClass('has-warning');
                            $('#staffDiv').addClass('has-error');
                            error = true;
                        } else {               
                            $('#staffDiv').removeClass('has-warning');
                            $('#staffDiv').removeClass('has-error');
                            $('#staffDiv').addClass('has-success');
                        }
                    } else { 
                        $('#staffDiv').removeClass('has-success');
                        $('#staffDiv').removeClass('has-error');
                        $('#staffDiv').addClass('has-warning');
                    }
                    if(pass != ""){                    
                        $('#passDiv').removeClass('has-error');
                        $('#passDiv').addClass('has-success');
                    } else { 
                        $('#passDiv').removeClass('has-success');
                        $('#passDiv').addClass('has-error');
                    }
                    if(cPass != ""){                    
                        $('#cPassDiv').removeClass('has-error');
                        $('#cPassDiv').addClass('has-success');
                    } else { 
                        $('#cPassDiv').removeClass('has-success');
                        $('#cPassDiv').addClass('has-error');
                    }
                    if(pass != '' && cPass != '' && pass != cPass){ 
                        $('#passDiv').removeClass('has-success');
                        $('#passDiv').addClass('has-error');
                        $('#cPassDiv').removeClass('has-success');
                        $('#cPassDiv').addClass('has-error');
                        $('#cRrandom').addClass('plasty');
                        error = true;   
                    } else {
                        if(pass == '' || cPass == '') {                     
                            $('#cRrandom').addClass('plasty');
                            $('#passDiv').removeClass('has-success');
                            $('#passDiv').removeClass('has-error');
                            $('#passDiv').addClass('has-warning');
                            $('#cPassDiv').removeClass('has-success');
                            $('#cPassDiv').removeClass('has-error');
                            $('#cPassDiv').addClass('has-warning');
                        } else {
                            $('#passDiv').removeClass('has-error');
                            $('#passDiv').addClass('has-success');
                            $('#cPassDiv').removeClass('has-error');
                            $('#cPassDiv').addClass('has-success');
                            $('#cRrandom').removeClass('plasty');                       
                        }
                    }
                    // $("#pass").trigger("blur");
                    var permission = '';
                    $(".md-check").each(function() {
                        if($(this).is(':checked')) {
                            permission += $(this).val()+",";
                            $(this).closest('.col-md-3').removeClass('has-warning'); 
                            $(this).closest('.col-md-3').addClass('has-success');                       
                        } else {
                            $(this).closest('.col-md-3').removeClass('has-success');
                            $(this).closest('.col-md-3').addClass('has-warning');
                        }
                    });
                    permission = permission.replace(/(^,)|(,$)/g, "");
                    var whichTable = 'sample_3';
                    if($('#activityStatus').bootstrapSwitch('state') == true) {
                        $('#activeTeam').val(1);
                        $(".bootstrap-switch-wrapper").css('border', '1px solid #3FC9C5');
                        whichTable = 'sample_3';
                    } else {
                        $('#activeTeam').val(0);
                        $(".bootstrap-switch-wrapper").css('border', '1px solid yellow');
                        whichTable = 'sample_33';
                    }
                    if(!error && !passError) {
                        $.ajax({
                            url: base_link+'team/updateTeam',
                            type: 'POST',
                            data: $('#newSubmit').serialize(),
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
                                            toastr.success(" You successfully added new purchase ", "Add purchase");
                                        }, 1000);
                                    }, 500);
                                    var activityId = activityListId();
                                    var acType = "fa-plus";
                                    var acLabel = "label-success";
                                    $.ajax({
                                        url: base_link+'recent_activity/add_activity/',
                                        data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=purchase'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=product/viewBill/'+totalTeam,
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
                                        if($('#activeTeam').val() == 0) {
                                            var remarks = $('#team'+id).closest('tr').find('td:eq(7)').html();
                                            var rowIndex = $('#'+whichTable).dataTable().fnAddData( 
                                                [ 
                                                    '<span class="row-details row-details-close"></span>',
                                                    '<div class="btn-group" style="margin: -5px">'+
                                                        '<button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage'+
                                                            '<i class="fa fa-angle-down"></i>'+
                                                        '</button>'+
                                                        '<ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">'+
                                                            '<li id="view'+totalTeam+'">'+
                                                                '<a target="_blank" target="_blank" href="<?php echo base_url(); ?>profile/team/'+totalTeam+'"><i class="fa fa-search" style="color: #26C281;"></i><span>View Profile</span></a>'+
                                                            '</li>'+
                                                            '<li id="delete'+totalTeam+'">'+
                                                                '<a onclick="activeData('+totalTeam+')"><i class="fa fa-recycle" style="color: #008800;"></i><span>Active</span></a>'+
                                                            '</li>'+
                                                        '</ul>'+
                                                    '</div>',
                                                    '<span id="tName'+totalTeam+'">'+name+'</span>'+
                                                    '<span id="tEmail'+totalTeam+'" style="display:none;">'+email+'</span>'+
                                                    '<span id="tPhone'+totalTeam+'" style="display:none;">'+phone+'</span>'+
                                                    '<span id="tStaff'+totalTeam+'" style="display:none;">'+staff+'</span>'+
                                                    '<span id="tMenuSettings'+totalTeam+'" style="display:none;">'+permission+'</span>'+
                                                    '<span id="tStatus'+totalTeam+'" style="display:none;">'+$('#activeTeam').val()+'</span>'+
                                                    '<span id="iPicture'+totalTeam+'" style="display:none;">'+$('#productImg').val()+'</span>',
                                                    $("#teamSystemCode").val(),
                                                    email,
                                                    phone,
                                                    staff,
                                                    userNameFull,
                                                    getDateTime,
                                                    remarks
                                                ]
                                            );     
                                            var row = $('#'+whichTable).dataTable().fnGetNodes(rowIndex);
                                            $(row).attr('id', 'team'+id);
                                            $('#'+whichTable+' tr td:last-child').css('display', 'none'); 
                                            $('#team'+id).slideUp("normal", function() { $('#team'+id).remove(); });
                                            $('#radio11').prop('checked', false); 
                                            $('#radio12').prop('checked', true); 
                                            $(".TeamList").css('display', 'none'); 
                                            $(".TeamListArchive").css('display', 'block');
                                        } else {
                                            var td2 =   '<span id="tName'+id+'">'+name+'</span>'+
                                                        '<span id="tEmail'+id+'" style="display:none;">'+email+'</span>'+
                                                        '<span id="tPhone'+id+'" style="display:none;">'+phone+'</span>'+
                                                        '<span id="tStaff'+id+'" style="display:none;">'+staff+'</span>'+
                                                        '<span id="tMenuSettings'+id+'" style="display:none;">'+permission+'</span>'+
                                                        '<span id="tStatus'+id+'" style="display:none;">'+$('#activeTeam').val()+'</span>'+
                                                        '<span id="iPicture'+id+'" style="display:none;">'+$('#productImg').val()+'</span>';
                                            $('#team'+id).closest('tr').find('td:eq(2)').html(td2);
                                            $('#team'+id).closest('tr').find('td:eq(4)').text(email);
                                            $('#team'+id).closest('tr').find('td:eq(5)').text(phone);
                                            $('#team'+id).closest('tr').find('td:eq(6)').text(staff);
                                        }
                                        $('.addTeam').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                                        $('#newSubmit').trigger("reset");
                                        $('#save').html('<i class="fa fa-save"></i> Save');
                                        $('#saveNew').html('<i class="fa fa-newspaper-o"></i> Save & New');
                                        $("html, body").animate({ scrollTop: '0px' }, "slow");
                                        $('#newSubmit')[0].reset();
                                        $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
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
            });
            $('#saveNew').click(function(e) {
                var id = $('#teamLiveId').val();
                if(id == '') {
                    var error = false;
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var phone = $('#phone').val();
                    var staff = $('#staff').val();
                    var pass = $('#pass').val();
                    var cPass = $('#cPass').val();
                    if(name != ""){                    
                        $('#nameDiv').removeClass('has-error');
                        $('#nameDiv').addClass('has-success');
                    } else { 
                        $('#nameDiv').removeClass('has-success');
                        $('#nameDiv').addClass('has-error');
                        error = true;
                    }
                    if(email == '' || !validateEmail(email)) {
                        $('#emailDiv').removeClass('has-success');
                        $('#emailDiv').addClass('has-error');
                        error = true;
                    } else {
                        $('#emailDiv').addClass('has-success');
                        $('#emailDiv').removeClass('has-error');
                    }
                    $("#email").trigger("blur");
                    if(phone == '' || phone.length == 11) {
                        var foundOperator = $.inArray(phone.substring(0, 3), mobileOperator);
                        if(foundOperator <= 0) {
                            $('#phoneDiv').removeClass('has-success');
                            $('#phoneDiv').removeClass('has-warning');
                            $('#phoneDiv').addClass('has-error');
                            error = true;
                        } else {
                            $('#phoneDiv').removeClass('has-warning');
                            $('#phoneDiv').removeClass('has-error');
                            $('#phoneDiv').addClass('has-success');
                        }
                    } else {
                        $('#phoneDiv').removeClass('has-success');
                        $('#phoneDiv').removeClass('has-warning');
                        $('#phoneDiv').addClass('has-error');
                        error = true;
                    }                
                    $("#phone").trigger("blur");
                    if(staff != ""){ 
                        if(staffType != 'BCSadmin' && staff == 'BCSadmin')  {                            
                            $('#staffDiv').removeClass('has-success');
                            $('#staffDiv').removeClass('has-warning');
                            $('#staffDiv').addClass('has-error');
                            error = true;
                        } else {               
                            $('#staffDiv').removeClass('has-warning');
                            $('#staffDiv').removeClass('has-error');
                            $('#staffDiv').addClass('has-success');
                        }
                    } else { 
                        $('#staffDiv').removeClass('has-success');
                        $('#staffDiv').removeClass('has-error');
                        $('#staffDiv').addClass('has-warning');
                    }
                    if(pass != ""){                    
                        $('#passDiv').removeClass('has-error');
                        $('#passDiv').addClass('has-success');
                    } else { 
                        $('#passDiv').removeClass('has-success');
                        $('#passDiv').addClass('has-error');
                        error = true;
                    }
                    if(cPass != ""){                    
                        $('#cPassDiv').removeClass('has-error');
                        $('#cPassDiv').addClass('has-success');
                    } else { 
                        $('#cPassDiv').removeClass('has-success');
                        $('#cPassDiv').addClass('has-error');
                        error = true;
                    }
                    if(pass != '' && cPass != '' && pass != cPass){ 
                        $('#passDiv').removeClass('has-success');
                        $('#passDiv').addClass('has-error');
                        $('#cPassDiv').removeClass('has-success');
                        $('#cPassDiv').addClass('has-error');
                        $('#cRrandom').addClass('plasty');
                        error = true;   
                    } else {
                        if(pass == '' || cPass == '') {                     
                            $('#cRrandom').addClass('plasty');
                        } else {
                            $('#passDiv').removeClass('has-error');
                            $('#passDiv').addClass('has-success');
                            $('#cPassDiv').removeClass('has-error');
                            $('#cPassDiv').addClass('has-success');
                            $('#cRrandom').removeClass('plasty');                       
                        }
                    }                
                    $("#pass").trigger("blur");
                    var permission = '';
                    $(".md-check").each(function() {
                        if($(this).is(':checked')) {
                            permission += $(this).val()+",";
                            $(this).closest('.col-md-3').removeClass('has-warning'); 
                            $(this).closest('.col-md-3').addClass('has-success');                       
                        } else {
                            $(this).closest('.col-md-3').removeClass('has-success');
                            $(this).closest('.col-md-3').addClass('has-warning');
                        }
                    });
                    permission = permission.replace(/(^,)|(,$)/g, "");
                    var whichTable = 'sample_3';
                    if($('#activityStatus').bootstrapSwitch('state') == true) {
                        $('#activeTeam').val(1);
                        $(".bootstrap-switch-wrapper").css('border', '1px solid #3FC9C5');
                        whichTable = 'sample_3';
                    } else {
                        $('#activeTeam').val(0);
                        $(".bootstrap-switch-wrapper").css('border', '1px solid yellow');
                        whichTable = 'sample_33';
                    }
                    if(!error && !passError) {
                        $.ajax({
                            url: base_link+'team/createTeam',
                            type: 'POST',
                            data: $('#newSubmit').serialize(),
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
                                            toastr.success(" You successfully added new team member ", "Add Team Member");
                                        }, 1000);
                                    }, 500);
                                    var activityId = activityListId();
                                    var acType = "fa-plus";
                                    var acLabel = "label-success";
                                    $.ajax({
                                        url: base_link+'recent_activity/add_activity/',
                                        data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=team member'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=product/viewBill/'+totalTeam,
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
                                        $('#'+whichTable).dataTable().fnAddData( 
                                            [ 
                                                '<span class="row-details row-details-close"></span>',
                                                '<div class="btn-group" style="margin: -5px">'+
                                                    '<button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage'+
                                                        '<i class="fa fa-angle-down"></i>'+
                                                    '</button>'+
                                                    '<ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">'+
                                                        '<li id="view'+totalTeam+'">'+
                                                            '<a target="_blank" target="_blank" href="<?php echo base_url(); ?>profile/team/'+totalTeam+'"><i class="fa fa-search" style="color: #26C281;"></i><span>View Profile</span></a>'+
                                                        '</li>'+
                                                        '<li id="edit'+totalTeam+'">'+
                                                            '<a onclick="editData('+totalTeam+')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Edit</span></a>'+
                                                        '</li>'+
                                                        '<li id="key'+totalTeam+'">'+
                                                            '<a onclick="keysChange('+totalTeam+')" href="javascript:;"><i class="fa fa-key" style="color: #FF0000;"></i><span>Reset Pass</span></a>'+
                                                        '</li>'+
                                                        '<li id="delete'+totalTeam+'">'+
                                                            '<a onclick="deleteData('+totalTeam+')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>'+
                                                        '</li>'+
                                                    '</ul>'+
                                                '</div>',
                                                '<span id="tName'+totalTeam+'">'+name+'</span>'+
                                                '<span id="tEmail'+totalTeam+'" style="display:none;">'+email+'</span>'+
                                                '<span id="tPhone'+totalTeam+'" style="display:none;">'+phone+'</span>'+
                                                '<span id="tStaff'+totalTeam+'" style="display:none;">'+staff+'</span>'+
                                                '<span id="tMenuSettings'+totalTeam+'" style="display:none;">'+permission+'</span>'+
                                                '<span id="tStatus'+totalTeam+'" style="display:none;">'+$('#activeTeam').val()+'</span>'+
                                                '<span id="iPicture'+totalTeam+'" style="display:none;">'+$('#productImg').val()+'</span>',
                                                $("#teamSystemCode").val(),
                                                email,
                                                phone,
                                                staff,
                                                userNameFull,
                                                getDateTime,
                                                '<div class="col-md-12 col-sm-12 hiddenComment'+totalTeam+'">'+
                                                    '<div class="portlet">'+
                                                        '<div class="portlet-body">                                                                          '+
                                                            '<div class="ibox float-e-margins ui-sortable">'+
                                                                '<div style="position: static;" class="ibox-content">'+
                                                                    '<div id="sysfrm_ajaxrender">'+
                                                                        '<section class="activity-post mb-xlg">'+
                                                                            '<form id="commentForm'+totalTeam+'">'+
                                                                                '<textarea name="messageText'+totalTeam+'" onkeyup="getValueComment(this.value, '+totalTeam+');" id="messageText'+totalTeam+'" class="msg messageText'+totalTeam+'" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>'+
                                                                                '<input id="hiddenMessage'+totalTeam+'" class="hiddenMessage'+totalTeam+'" name="hiddenMessage'+totalTeam+'" value="" type="hidden">'+
                                                                                '<input id="activityType'+totalTeam+'" name="activityType'+totalTeam+'" value="" type="hidden">'+
                                                                                '<input id="activityId" name="activityId" value="'+totalTeam+'" type="hidden">'+
                                                                                '<input id="commentType'+totalTeam+'" name="commentType'+totalTeam+'" value="team" type="hidden">'+
                                                                                '<input id="commentCode'+totalTeam+'" name="commentCode'+totalTeam+'" value="" type="hidden">'+
                                                                                '<input id="commentId'+totalTeam+'" name="commentId'+totalTeam+'" value="" type="hidden">'+
                                                                                '<input id="commentProcess'+totalTeam+'" name="commentProcess'+totalTeam+'" value="0" type="hidden">'+
                                                                            '</form>'+
                                                                            '<div class="compose-box-footer">'+
                                                                                '<ul class="compose-toolbar">'+
                                                                                    '<li onClick="iconChange(\'fa-hourglass\', '+totalTeam+');" class="clickable fa-hourglass'+totalTeam+'"><a><i class="fa fa-hourglass"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-hourglass-start\', '+totalTeam+');" class="clickable fa-hourglass-start'+totalTeam+'"><a><i class="fa fa-hourglass-start"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-hourglass-o\', '+totalTeam+');" class="clickable fa-hourglass-o'+totalTeam+'"><a><i class="fa fa-hourglass-o"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-balance-scale\', '+totalTeam+');" class="clickable fa-balance-scale'+totalTeam+'"><a><i class="fa fa-balance-scale"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-adjust\', '+totalTeam+');" class="clickable fa-adjust'+totalTeam+'"><a><i class="fa fa-adjust"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-certificate\', '+totalTeam+');" class="clickable fa-certificate'+totalTeam+'"><a><i class="fa fa-certificate"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-check\', '+totalTeam+');" class="clickable fa-check'+totalTeam+'"><a><i class="fa fa-check"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-times\', '+totalTeam+');" class="clickable fa-times'+totalTeam+'"><a><i class="fa fa-times"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-exchange\', '+totalTeam+');" class="clickable fa-exchange'+totalTeam+'"><a><i class="fa fa-exchange"></i></a></li>'+
                                                                                    '<li onClick="iconChange(\'fa-cog\', '+totalTeam+');" class="clickable fa-cog'+totalTeam+'"><a><i class="fa fa-cog"></i></a></li>'+
                                                                                '</ul>'+
                                                                                '<ul class="compose-btn">'+
                                                                                    '<li>'+
                                                                                        '<a class="save'+totalTeam+' btn btn-success btn-xs" onClick="commentProcess(\''+whichTable+'\', '+totalTeam+')"><i class="fa fa-edit"></i> Add Note</a>'+
                                                                                    '</li>'+
                                                                                    '<li>'+
                                                                                        '<a class="cancle'+totalTeam+' btn btn-warning btn-xs" onClick="clickCancle('+totalTeam+')" style="display: none"><i class="fa fa-times"></i> Cancle</a>'+
                                                                                    '</li>'+
                                                                                '</ul>'+
                                                                            '</div>'+
                                                                        '</section>'+
                                                                        '<div style="margin-top:20px !important;" class="mt-lg"> </div>'+
                                                                            '<div id="all_timeline_div" class="all_timeline_div'+totalTeam+'" data-always-visible="1" data-rail-visible1="1">'+
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
                                        $('#'+whichTable+' tbody tr:first').attr('id');
                                        $('#'+whichTable+' tbody tr:first').attr('id','team'+totalTeam);
                                        $('#'+whichTable+' tr td:last-child').css('display', 'none');
                                        // $('.addTeam').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                                        $('#newSubmit').trigger("reset");
                                        $("html, body").animate({ scrollTop: '0px' }, "slow");
                                        $('#newSubmit')[0].reset();
                                        $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                                        teamListId(); 
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
                } else {
                    var error = false;
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var phone = $('#phone').val();
                    var staff = $('#staff').val();
                    var pass = $('#pass').val();
                    var cPass = $('#cPass').val();
                    if(name != ""){                    
                        $('#nameDiv').removeClass('has-error');
                        $('#nameDiv').addClass('has-success');
                    } else { 
                        $('#nameDiv').removeClass('has-success');
                        $('#nameDiv').addClass('has-error');
                        error = true;
                    }
                    if(email == '' || !validateEmail(email)) {
                        $('#emailDiv').removeClass('has-success');
                        $('#emailDiv').addClass('has-error');
                        error = true;
                    } else {
                        $('#emailDiv').addClass('has-success');
                        $('#emailDiv').removeClass('has-error');
                    }
                    $("#email").trigger("blur");
                    if(phone == '' || phone.length == 11) {
                        var foundOperator = $.inArray(phone.substring(0, 3), mobileOperator);
                        if(foundOperator <= 0) {
                            $('#phoneDiv').removeClass('has-success');
                            $('#phoneDiv').removeClass('has-warning');
                            $('#phoneDiv').addClass('has-error');
                            error = true;
                        } else {
                            $('#phoneDiv').removeClass('has-warning');
                            $('#phoneDiv').removeClass('has-error');
                            $('#phoneDiv').addClass('has-success');
                        }
                    } else {
                        $('#phoneDiv').removeClass('has-success');
                        $('#phoneDiv').removeClass('has-warning');
                        $('#phoneDiv').addClass('has-error');
                        error = true;
                    }                
                    $("#phone").trigger("blur");
                    if(staff != ""){ 
                        if(staffType != 'BCSadmin' && staff == 'BCSadmin')  {                            
                            $('#staffDiv').removeClass('has-success');
                            $('#staffDiv').removeClass('has-warning');
                            $('#staffDiv').addClass('has-error');
                            error = true;
                        } else {               
                            $('#staffDiv').removeClass('has-warning');
                            $('#staffDiv').removeClass('has-error');
                            $('#staffDiv').addClass('has-success');
                        }
                    } else { 
                        $('#staffDiv').removeClass('has-success');
                        $('#staffDiv').removeClass('has-error');
                        $('#staffDiv').addClass('has-warning');
                    }
                    if(pass != ""){                    
                        $('#passDiv').removeClass('has-error');
                        $('#passDiv').addClass('has-success');
                    } else { 
                        $('#passDiv').removeClass('has-success');
                        $('#passDiv').addClass('has-error');
                    }
                    if(cPass != ""){                    
                        $('#cPassDiv').removeClass('has-error');
                        $('#cPassDiv').addClass('has-success');
                    } else { 
                        $('#cPassDiv').removeClass('has-success');
                        $('#cPassDiv').addClass('has-error');
                    }
                    if(pass != '' && cPass != '' && pass != cPass){ 
                        $('#passDiv').removeClass('has-success');
                        $('#passDiv').addClass('has-error');
                        $('#cPassDiv').removeClass('has-success');
                        $('#cPassDiv').addClass('has-error');
                        $('#cRrandom').addClass('plasty');
                        error = true;   
                    } else {
                        if(pass == '' || cPass == '') {                     
                            $('#cRrandom').addClass('plasty');
                            $('#passDiv').removeClass('has-success');
                            $('#passDiv').removeClass('has-error');
                            $('#passDiv').addClass('has-warning');
                            $('#cPassDiv').removeClass('has-success');
                            $('#cPassDiv').removeClass('has-error');
                            $('#cPassDiv').addClass('has-warning');
                        } else {
                            $('#passDiv').removeClass('has-error');
                            $('#passDiv').addClass('has-success');
                            $('#cPassDiv').removeClass('has-error');
                            $('#cPassDiv').addClass('has-success');
                            $('#cRrandom').removeClass('plasty');                       
                        }
                    }
                    // $("#pass").trigger("blur");
                    var permission = '';
                    $(".md-check").each(function() {
                        if($(this).is(':checked')) {
                            permission += $(this).val()+",";
                            $(this).closest('.col-md-3').removeClass('has-warning'); 
                            $(this).closest('.col-md-3').addClass('has-success');                       
                        } else {
                            $(this).closest('.col-md-3').removeClass('has-success');
                            $(this).closest('.col-md-3').addClass('has-warning');
                        }
                    });
                    permission = permission.replace(/(^,)|(,$)/g, "");
                    var whichTable = 'sample_3';
                    if($('#activityStatus').bootstrapSwitch('state') == true) {
                        $('#activeTeam').val(1);
                        $(".bootstrap-switch-wrapper").css('border', '1px solid #3FC9C5');
                        whichTable = 'sample_3';
                    } else {
                        $('#activeTeam').val(0);
                        $(".bootstrap-switch-wrapper").css('border', '1px solid yellow');
                        whichTable = 'sample_33';
                    }
                    if(!error && !passError) {
                        $.ajax({
                            url: base_link+'team/updateTeam',
                            type: 'POST',
                            data: $('#newSubmit').serialize(),
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
                                            toastr.success(" You successfully added new purchase ", "Add purchase");
                                        }, 1000);
                                    }, 500);
                                    var activityId = activityListId();
                                    var acType = "fa-plus";
                                    var acLabel = "label-success";
                                    $.ajax({
                                        url: base_link+'recent_activity/add_activity/',
                                        data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=purchase'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=product/viewBill/'+totalTeam,
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
                                        if($('#activeTeam').val() == 0) {
                                            var remarks = $('#team'+id).closest('tr').find('td:eq(7)').html();
                                            var rowIndex = $('#'+whichTable).dataTable().fnAddData( 
                                                [ 
                                                    '<span class="row-details row-details-close"></span>',
                                                    '<div class="btn-group" style="margin: -5px">'+
                                                        '<button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage'+
                                                            '<i class="fa fa-angle-down"></i>'+
                                                        '</button>'+
                                                        '<ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">'+
                                                            '<li id="view'+totalTeam+'">'+
                                                                '<a target="_blank" target="_blank" href="<?php echo base_url(); ?>profile/team/'+totalTeam+'"><i class="fa fa-search" style="color: #26C281;"></i><span>View Profile</span></a>'+
                                                            '</li>'+
                                                            '<li id="delete'+totalTeam+'">'+
                                                                '<a onclick="activeData('+totalTeam+')"><i class="fa fa-recycle" style="color: #008800;"></i><span>Active</span></a>'+
                                                            '</li>'+
                                                        '</ul>'+
                                                    '</div>',
                                                    '<span id="tName'+totalTeam+'">'+name+'</span>'+
                                                    '<span id="tEmail'+totalTeam+'" style="display:none;">'+email+'</span>'+
                                                    '<span id="tPhone'+totalTeam+'" style="display:none;">'+phone+'</span>'+
                                                    '<span id="tStaff'+totalTeam+'" style="display:none;">'+staff+'</span>'+
                                                    '<span id="tMenuSettings'+totalTeam+'" style="display:none;">'+permission+'</span>'+
                                                    '<span id="tStatus'+totalTeam+'" style="display:none;">'+$('#activeTeam').val()+'</span>'+
                                                    '<span id="iPicture'+totalTeam+'" style="display:none;">'+$('#productImg').val()+'</span>',
                                                    $("#teamSystemCode").val(),
                                                    email,
                                                    phone,
                                                    staff,
                                                    userNameFull,
                                                    getDateTime,
                                                    remarks
                                                ]
                                            );     
                                            var row = $('#'+whichTable).dataTable().fnGetNodes(rowIndex);
                                            $(row).attr('id', 'team'+id);
                                            $('#'+whichTable+' tr td:last-child').css('display', 'none'); 
                                            $('#team'+id).slideUp("normal", function() { $('#team'+id).remove(); });
                                            $('#radio11').prop('checked', false); 
                                            $('#radio12').prop('checked', true); 
                                            $(".TeamList").css('display', 'none'); 
                                            $(".TeamListArchive").css('display', 'block');
                                        } else {
                                            var td2 =   '<span id="tName'+id+'">'+name+'</span>'+
                                                        '<span id="tEmail'+id+'" style="display:none;">'+email+'</span>'+
                                                        '<span id="tPhone'+id+'" style="display:none;">'+phone+'</span>'+
                                                        '<span id="tStaff'+id+'" style="display:none;">'+staff+'</span>'+
                                                        '<span id="tMenuSettings'+id+'" style="display:none;">'+permission+'</span>'+
                                                        '<span id="tStatus'+id+'" style="display:none;">'+$('#activeTeam').val()+'</span>'+
                                                        '<span id="iPicture'+id+'" style="display:none;">'+$('#productImg').val()+'</span>';
                                            $('#team'+id).closest('tr').find('td:eq(2)').html(td2);
                                            $('#team'+id).closest('tr').find('td:eq(4)').text(email);
                                            $('#team'+id).closest('tr').find('td:eq(5)').text(phone);
                                            $('#team'+id).closest('tr').find('td:eq(6)').text(staff);
                                        }
                                        // $('.addTeam').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                                        $('#newSubmit').trigger("reset");
                                        $('#save').html('<i class="fa fa-save"></i> Save');
                                        $('#saveNew').html('<i class="fa fa-newspaper-o"></i> Save & New');
                                        $("html, body").animate({ scrollTop: '0px' }, "slow");
                                        $('#newSubmit')[0].reset();
                                        $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
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
            });
            clipboard_iCopyIs.on('success', function(e) {
                var error = false;
                var id = $('#passUser').val();
                var pass = $('#rePass').val();
                if(pass != "" ) {
                    var regx = /^[A-Za-z0-9]+$/;
                    if (regx.test(pass) || pass.length < 8) {
                        $('#rePassDiv').removeClass('has-success');
                        $('#rePassDiv').addClass('has-error');
                        error = true;
                    } else {
                        $('#rePassDiv').removeClass('has-error');
                        $('#rePassDiv').addClass('has-success');
                    }
                }
                if(!error) {
                    var info = [pass, id];
                    $.ajax({
                        url: base_link+'team/resetPass',
                        type: 'POST',
                        data: {column: info},
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
                                $('#keysChange').modal('toggle');
                                setTimeout(function() {
                                    setTimeout(function() {
                                        toastr.success(" You successfully added new purchase ", "Add purchase");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=purchase'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=product/viewBill/'+totalTeam,
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
                                setTimeout(function() {
                                    $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                                    $('#modal').modal('toggle');
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
                            $('#overlay').css('display', 'none');
                            $('#loadingSpinner').remove();
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
                                        toastr.success(" You successfully update team member photo", "Update Team Member");
                                    }, 1000);
                                }, 500); 
                                if(id == 'profilePicture') {
                                    $('#productPictureDiv').slideUp(1000);
                                    $('#productPicture').delay(1200).slideDown(); 
                                    $('#productImg').val('');
                                } 
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=update'+ '&title=team member photo'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=product/viewBill/',
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
                                    data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=comment'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/customer/'+totalComment,
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
                                                                            '<i onclick="editComment(\'team\', '+id+', '+r.commentId+')" class="fa fa-edit permission iconEdit iconMark"></i>'+
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
                                    var tblData = table.row('#team'+id).data();
                                    tblData[9] = cell;
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
            function deleteComment(tableName, id, cId) {
                var table = $('#'+tableName).DataTable();
                                
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
                                    toastr.success(" You successfully delete comment ", "Delete Comment");
                                }, 1000);
                            }, 500);
                            var activityId = activityListId();
                            var acType = "fa-plus";
                            var acLabel = "label-success";
                            $.ajax({
                                url: base_link+'recent_activity/add_activity/',
                                data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=delete'+ '&title=comment'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=profile/customer/'+totalComment,
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
                                var tblData = table.row('#team'+id).data();
                                tblData[9] = cell;
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
            $('.inactiveAll').click(function() {
                $.ajax({
                    type: 'post',
                    url: base_link + "team/teamAll",
                    data: 'status=' + 0,
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
                                    toastr.error(" You successfully in-active team member ", "In-Active Team Member");
                                }, 1500);
                                swal({
                                    title: "In-Activate!",
                                    text: "All team member has been in-activate.",
                                    timer: 3000,
                                    type : "success",
                                    showConfirmButton: false
                                });
                            }, 1000);
                            location.reload(); 
                        }
                    }
                });
            });
            $('.activeAll').click(function() {
                $.ajax({
                    type: 'post',
                    url: base_link + "team/teamAll",
                    data: 'status=' + 1,
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
                                    toastr.success(" You successfully active team member ", "Active Team Member");
                                }, 1500);
                                swal({
                                    title: "Activate!",
                                    text: "All team member has been activate.",
                                    timer: 3000,
                                    type : "success",
                                    showConfirmButton: false
                                });
                            }, 1000);
                            location.reload(); 
                        }
                    }
                });
            });
        </script>
    </body>

</html> 