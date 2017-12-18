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
        <title>Estimate | Accoventory .::.SaaS.::. Accounting & Inventory Software - SaaS</title>
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
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/jquery-nestable/jquery.nestable.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/systemOwn/plugins/selectize/css/selectize.bootstrap2.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/sweetalert.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/ad_a_note.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
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
            .form-group.form-md-line-input.form-md-floating-label .input-icon > label { display: inline-block; font-weight: normal; }
            .input-inline { border: 1px solid #cbcbcb; border-radius: 5px; }
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
            #profile a:hover span {position: absolute; right: 40%; top: 40%; display: block; text-align: center; color: red; font-size: 16px; }  
            #profile a:hover span b:hover {background: #000;}
            #profile a:hover span i { font-size: 30px !important; }
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
            .ibox { box-shadow: none; margin-bottom: 5px !important; }
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
            .loadMore { margin-top: 10px !important; }
            a.tooltipCc { outline:none; }
            a.tooltipCc strong { line-height:17px; }
            a.tooltipCc:hover { text-decoration:none; }
            a.tooltipCc .sTooltip { z-index:9999; display:none; padding:6px 6px; margin-top:-40px; margin-left:8px; min-width:130px; height:auto; line-height:0px; right: 0; }
            a.tooltipCc:hover .sTooltip{ display:inline-block !important; position:absolute; border:2px solid #FFF; width:auto; height:auto; color:#EEE; background:#000; z-index:9999; }
            a.tooltipCc .sTooltip { border-radius:5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; -moz-box-shadow: 0px 0px 1px 1px #666; -webkit-box-shadow: 0px 0px 1px 1px #666; box-shadow: 0px 0px 1px 1px #666; opacity: 0.8; }
            a.tooltipC { outline:none; color: inherit; }
            a.tooltipC strong { line-height:17px; }
            a.tooltipC:hover { text-decoration:none; }
            a.tooltipC .sTooltip { z-index: 9999;display: none;padding: 6px 6px;margin-top: -45px;margin-left: -50px !important;min-width: 130px;height: auto;line-height: 0px;position: relative; }
            a.tooltipC:hover .sTooltip{ display:inline-block !important; position:absolute; border:2px solid #FFF; width:auto; height:auto; color:#EEE; background:#000; z-index:9999; }
            a.tooltipC .sTooltip { border-radius:5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; -moz-box-shadow: 0px 0px 1px 1px #666; -webkit-box-shadow: 0px 0px 1px 1px #666; box-shadow: 0px 0px 1px 1px #666; opacity: 0.8; }
            .table-scrollable .dropdown-menu { position: relative !important; }
            .bootstrap-switch-container { color: #000 !important; font-weight: 600; }
            .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-success { color: #000 !important; }
            .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-warning { color: #000 !important; }
            .table tbody td .form-md-line-input input { display: inline-block !important; margin-top: 0px !important; }
            .bootstrap-switch-id-currencyChange { float: right; margin-top: -8px; }
            .input-large { max-width: 400px !important; width: 400px !important; }
            .select2-container--bootstrap .select2-selection { border-radius: 0px !important; border: none; border-bottom: 1px solid #c2cad8 !important; border-top: none !important; border-left: none !important;border-right: none !important; }
            .select2-container .select2-choice .select2-arrow { border-left: none ; }
            .productTable > tbody > tr > td {
                padding: 5px 0px !important;
            }.productTable > tbody > tr > td:first-child {
                padding: 10px !important;
            }
            .unitInput { text-align: left; padding-right: 25px !important; padding-left: 10px; }
            .priceInput { text-align: right; padding-left: 15px !important; padding-right: 00px !important; }
            .selectize-dropdown-content {
                overflow-y: auto;
                overflow-x: hidden;
                max-height: 100px;
            }
            .has-errorr .selectize-input {
                border-color: #a94442 !important;
            }
            .has-success .selectize-input {
                border-color: #36C6D3 !important;
            }
            .has-warning .selectize-input {
                border-color: #C29D0B !important;
            }
            .priceInput:-moz-read-only { /* For Firefox */
                cursor: auto !important;
            }

            .priceInput:read-only { 
                cursor: auto !important;
            }
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
            .select2-container--bootstrap { width: 100% !important; }
            .dd3-content { padding: 5px 10px }
            .deleteFileIcon { float: right; font-size: 18px; color: #E87E04 !important; cursor: pointer; margin-right: -8px; }
            a { text-decoration: none !important; }
            .select2-container--bootstrap .trueError { border-bottom: 1px solid red !important; }
            .select2-container--bootstrap .trueWarning { border-bottom: 1px solid #C29D0C !important; }
            .select2-container--bootstrap .trueSuccess { border-bottom: 1px solid #27A4B0 !important; }
            .knownSortable tr:first-child td:last-child .glyphicon { display: none !important }
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
                    <div class="row addPurchase" style="display: none;">
                        <div class="col-md-12">
                            <div class="profile-content">
                                <!-- BEGIN PORTLET -->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <i class="icon-bar-chart theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold" style="color: #D05454 !important;">Add New Estimate</span>
                                            <span class="caption-helper hide">weekly stats...</span>
                                        </div>
                                        <div style="float: right;">
                                            <a class="btn green-haze btn-sm PurchaseListVisible"><i class="fa fa-list"></i> Estimate List </a>
                                            <a href="javascript:;" class="btn default btn-sm PurchaseListVisible"><i class="fa fa-times"></i> Cancel </a>
                                        </div>
                                    </div>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet box light bordered">
                                        <div id="portlet-body" class="portlet-body">
                                            <div class="row"> 
                                                <div class="col-sm-offset-1 pull-right col-sm-5">
                                                    <div class="row">                                                        
                                                        <div id="purchaseLogo" class="col-sm-11 col-sm-offset-1 pull-left newDrop" style="display: <?php if($basicInvoiceEstimate[0]->defaultLogoSettings != "No" && $basicSettings[0]->bDefaultLogo == "") { echo "block"; } else { echo "none"; } ?>;">
                                                            <form action="<?php echo base_url(); ?>estimate/file_upload/" class="dropzone dropzone-file-area">                                                                
                                                                <input id="identification" style="display:none;" name="identification" value="purchaseLogo" type="hiddin"/>
                                                                <div class="uploadFirst">
                                                                    <div class="fadeMe"></div>                                                            
                                                                    <img class="wave-logo-uploader-dropzone__logo__dropzone__icon" src="<?php echo base_url(); ?>assets/uploadedFile/system/63cc4065e830c9f2e76f19ff398dc73d.svg">
                                                                    <div class="wave-logo-uploader-dropzone__logo___dropzone__text"><span class="wv-text wv-text--body"><span class="wave-logo-uploader-dropzone__logo__dropzone__browse-link">Browse</span><span> </span><span> customer logo/picture here.</span></span></div>
                                                                    <div class="wave-logo-uploader-dropzone__logo__dropzone__hint"><span class="wv-text wv-text--hint"><span>Maximum 500KB in size.</span><br ><span>JPG, PNG, or GIF formats.</span></span></div>
                                                                    <div class="wave-logo-uploader-dropzone__logo__dropzone__hint"><span class="wv-text wv-text--hint">Recommended size: 300 x 200 pixels.</span></div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-12 newDrop newDropUploaded purchaseLogoDiv" style="display: <?php if($basicInvoiceEstimate[0]->defaultLogoSettings != 'No' && $basicSettings[0]->bDefaultLogo === ''){ echo 'none'; } else { echo "block"; } ?>">
                                                            <div class="uploadedLogo">
                                                                <form id="image-form" name="image" enctype="multipart/form-data">
                                                                    <div id="profile" class="profile-userpic">
                                                                        <a href="javascript:void(0);">
                                                                            <?php
                                                                                if($basicSettings[0]->bDefaultLogo != "") {
                                                                                    if (file_exists('./assets/uploadedFile/system/'.$basicSettings[0]->bDefaultLogo)) {
                                                                                        echo '<img id="profile-img-system" src="'.base_url().'assets/uploadedFile/system/'.$basicSettings[0]->bDefaultLogo.'" class="img-circle img-responsive profile-image" alt="" style="width: '.$basicInvoiceEstimate[0]->logoSize.'px !important; max-height:none; padding: 5px; border: 1px dashed #54c7c3; border-radius: 5px;"/>';
                                                                                    } else {
                                                                                        echo '<img id="profile-img-system" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/customerPicture/logo.jpg" style="width: '.$basicInvoiceEstimate[0]->logoSize.'px !important; max-height:none; padding: 5px; border: 1px dashed #54c7c3; border-radius: 5px;"/>';
                                                                                    }
                                                                                } else {
                                                                                    echo '<img id="profile-img-system" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/customerPicture/logo.jpg" style="width: '.$basicInvoiceEstimate[0]->logoSize.'px !important; max-height:none; padding: 5px; border: 1px dashed #54c7c3; border-radius: 5px;"/>';
                                                                                }
                                                                            ?>
                                                                            <span id="uploadTrigger" onclick="removeLogo('purchaseLogo')"><i class="fa fa-times newCross"></i></span>
                                                                            <label id="logoName" style="display:none;"><?php echo $basicSettings[0]->bDefaultLogo; ?></label>
                                                                        </a>
                                                                        <div id="status_msg_div"><div id="status_msg" class="error-error" style="font-size: 12px;"></div></div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>                              
                                                <form id="addProduct" role="form" action="#">
                                                    <div class="row"> 
                                                        <div class="col-md-6">
                                                            <div class="col-md-offset-1 col-md-11">
                                                                <div id="titleDiv" class="form-group form-md-line-input">
                                                                    <input id="title" class="form-control" placeholder="Estimate (Optional)" name="title" type="text" value="<?php echo $basicInvoiceEstimate[0]->titleEstimate; ?>" style="font-size: 20px" />
                                                                    <div class="form-control-focus"> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-offset-1 col-md-11" style="margin-top: 50px; ">
                                                                <div class="form-group invoice-estimate-customer has-error">
                                                                    <select style="display: none;" tabindex="-1" class="form-control customer" placeholder="Select or Add Customer" name="customer">
                                                                        <option value="" selected="selected"></option>
                                                                        <?php foreach ($listVendors as $vendorList) { ?>
                                                                            <option value="<?php echo $vendorList->id; ?>"><?php echo ucfirst($vendorList->name)." - ".$vendorList->email; ?> </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <input class="new_customer" name="new_customer" type="hidden" value="" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-offset-1 col-md-11 oldVendorInfo" style="display: none">
                                                                <span class="nameOfContract"></span><br/>
                                                                <span class="companyAddress"></span><br/>
                                                                <span class="companyAddress1"></span>
                                                            </div>
                                                            <div class="col-md-offset-1 col-md-11">
                                                                <div class="new-customer-data" style="display:none">
                                                                    <div class="form-group form-group-condensed">
                                                                        <div id="customer_emailDiv" class="form-group form-md-line-input">
                                                                            <input id="customer_email" class="form-control customFormControl" placeholder="Customer Email (required)" name="customer_email" type="text">
                                                                            <div class="form-control-focus"> </div>
                                                                        </div>
                                                                        <div id="new_customer_address_1Div" class="form-group form-md-line-input">
                                                                            <input id="new_customer_address_1" class="form-control customFormControl" placeholder="Address Line 1" name="new_customer_address_1" type="text">
                                                                            <div class="form-control-focus"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                           
                                                        <div class="divRightText pull-right col-sm-6">
                                                            <div class="col-sm-12">
                                                                <div id="invoiceNoDiv" class="form-group form-md-line-input">
                                                                    <div class="col-md-12">
                                                                        <input id="invoiceNo" class="form-control" name="invoiceNo" placeholder="Estimate #" type="text" value="" />
                                                                        <div class="form-control-focus"> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div id="poOptionalDiv" class="form-group form-md-line-input">
                                                                    <div class="col-md-12">
                                                                        <input id="poOptional" class="form-control" name="poOptional" value="" placeholder="P.O # (optional)" type="text" />
                                                                        <div class="form-control-focus"> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <br/>
                                                                <div class="col-sm-12">
                                                                    <div class="input-group invoiceDate form-group form-md-line-input input-midium date date-picker" data-date="<?php echo date("d-m-Y"); ?>" data-date-format="dd-mm-yyyy" data-date-viewmode="years" data-date-minviewmode="months" style="margin-top: -25px; margin-bottom: -10px;">
                                                                        <input id="invoiceDate" name="invoiceDate" type="text" class="form-control" value="<?php echo date("d-m-Y"); ?>" readonly style="padding-right: 10px;">
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
                                                                    <div class="input-group pickDate form-group form-md-line-input input-midium date date-picker-custom" data-date="<?php echo date("d-m-Y"); ?>" data-date-format="dd-mm-yyyy" data-date-viewmode="years" data-date-minviewmode="months" data-date-start-date="+0d" style="margin-top: -25px; margin-bottom: -10px;">
                                                                        <input id="pickDate" type="text" name="pickDate" class="form-control" value="Payment Due" readonly style="padding-right: 10px;">
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
                                                                        <input id="radio2" name="radio2" checked="" class="md-radiobtn" value="percent" type="radio">
                                                                        <label for="radio2">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Discount Percentage </label>
                                                                    </div>
                                                                    <div class="md-radio">
                                                                        <input id="radio1" name="radio2" class="md-radiobtn" value="amount" type="radio">
                                                                        <label for="radio1">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Discount Amount </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div id="discountCheckDiv" class="form-group form-md-line-input">
                                                                    <div class="col-md-12">
                                                                        <input id="discountCheck" name="discountCheck" class="form-control" placeholder="Discount (optional)" type="text" />
                                                                        <div class="form-control-focus"> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 currencyRate" style="display: none">
                                                                <div id="currencyRateDiv" class="form-group form-md-line-input">
                                                                    <div class="col-md-12">
                                                                        <input id="currencyRate" class="form-control" name="currencyRate" placeholder="Currency Rate" value="<?php echo $basicSettings[0]->foreignCurrencyRate; ?>" type="text" />
                                                                        <div class="form-control-focus"> </div>
                                                                    </div>
                                                                    <label class="help-block" style="position: relative; opacity: 1; display: block; text-transform: capitalize; font-size: 15px; color: gray; margin-top: -25px; margin-left: 15px; float: left; font-weight: bold !important;"><?php $currency = explode("-", $basicSettings[0]->foreignCurrencySymbol); echo $currency[1]; ?></label>
                                                                    <label class="help-block" style="position: relative; opacity: 1; display: block; text-transform: capitalize; font-size: 13px; color: #36C6D3; float: right; font-weight: bold !important;">Currency Conversion Rate</label>
                                                                </div>
                                                            </div>
                                                            <?php if($columnSettings[0]->isCurrencyShow == 1) { ?>
                                                                <div class="col-sm-9 pull-right currencyChange" style="margin: 20px 15px 10px 0px;">
                                                                    <div class="md-radio-inline pull-right" style="margin-top: 0px;">
                                                                        <div class="md-radio">
                                                                            <input id="radio6" name="radio6" value="local" checked="" class="md-radiobtn" type="radio">
                                                                            <label for="radio6">
                                                                                <span></span>
                                                                                <span class="check"></span>
                                                                                <span class="box"></span> Local Currency </label>
                                                                        </div>
                                                                        <div class="md-radio">
                                                                            <input id="radio5" name="radio6" value="foreign" class="md-radiobtn" type="radio">
                                                                            <label for="radio5">
                                                                                <span></span>
                                                                                <span class="check"></span>
                                                                                <span class="box"></span> Foreign Currency </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="table-responsive table-scrollable-borderless">
                                                            <table class="table productTable" style="margin-top: 5px">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="2%"></th>
                                                                        <th width="15%"></th>
                                                                        <th width="33%"></th>
                                                                        <th width="12%"></th>
                                                                        <th width="12%"></th>
                                                                        <th width="10%"></th>
                                                                        <th width="12%"></th>
                                                                        <th width="2%"></th>
                                                                        <th width="2%"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="ui-sortable knownSortable">
                                                                    <tr class="item item0" data-line-id="0" onmouseover="trRow('item0')">
                                                                        <td>1</td>
                                                                        <td>
                                                                            <span class="form-group form-md-line-input checkCodeDiv">
                                                                                <span class="col-md-12">
                                                                                    <input class="form-control customInput checkCode" readonly="" name="checkCode[]" placeholder="<?php echo $columnSettings[0]->itemCode; ?>" value="" type="text">
                                                                                    <span class="form-control-focus"> </span>
                                                                                </span>
                                                                            </span>
                                                                            <?php if($columnSettings[0]->isWarranty == 1) { ?>
                                                                                <br/><span class="warrantySpan" style="color: gray; display: none;"><?php echo $columnSettings[0]->warrantyName; ?>: <span class="checkWarranty"></span></span>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <select tabindex="-1" class="form-control selectized purchaseOption" placeholder="Select <?php echo $columnSettings[0]->name; ?>" name="product[]">
                                                                                <option value="---" selected="selected">Select <?php echo $columnSettings[0]->name; ?></option>
                                                                                <?php foreach ($listProducts as $productList) { ?>
                                                                                    <option value="<?php echo $productList->id; ?>"><?php echo $productList->name; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                            <?php if($columnSettings[0]->isDescription == 1) { ?>
                                                                                <span style="color: gray" class="checkDescription"></span>
                                                                            <?php } ?>
                                                                            <input class="form-control unitWeight" name="unitWeight[]" placeholder="" value="<?php echo $columnSettings[0]->unitName; ?>" type="hidden" />
                                                                        </td>
                                                                        <td>
                                                                            <span class="form-group form-md-line-input unitInputDiv">
                                                                                <span class="col-md-12">
                                                                                    <input class="form-control customInput unitInput numericExpresion" name="unitInput[]" placeholder="<?php echo $columnSettings[0]->unitName; ?>" value="1" type="text">
                                                                                    <span class="form-control-focus"> </span>
                                                                                </span>
                                                                                <?php if($columnSettings[0]->isUnit == 1) { ?>
                                                                                    <span style="float: right; margin-top: -28px; margin-right: 15px; font-weight: bold" class="checkUnit"><?php echo $columnSettings[0]->unitName; ?></span>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="form-group form-md-line-input priceInputDiv">
                                                                                <span class="col-md-12">
                                                                                    <input class="form-control customInput priceInput pricePInput numericFloat" name="priceInput[]" placeholder="<?php echo $columnSettings[0]->priceName; ?>" value="0.00" type="text">
                                                                                    <span class="form-control-focus"> </span>
                                                                                </span>
                                                                                <span style="float: left; margin-top: -28px; margin-left: 15px; font-weight: bold" class="checkCurrency"><?php $currency = explode("-", $basicSettings[0]->currencySymbol); echo $currency[1]; ?> </span>
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="form-group">
                                                                                <select tabindex="-1" class="form-control selectizedTax" placeholder="" name="tax[]">
                                                                                    <option value="---" selected="selected">Add Tax</option>
                                                                                    <?php foreach ($listTaxs as $taxList) { ?>
                                                                                        <option value="<?php echo $taxList->id; ?>"><?php echo $taxList->name." (".$taxList->taxRate."%)"; ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </span><br/>
                                                                            <input type="hidden" name="taxVat[]" value="0" class="checkTax" />
                                                                        </td>
                                                                        <td>
                                                                            <span class="form-group form-md-line-input">
                                                                                <span class="col-md-12">
                                                                                    <input class="form-control customInput priceInput totalInput" name="totalInput[]" readonly="" placeholder="<?php echo $columnSettings[0]->amountName; ?>" value="0.00" type="text">
                                                                                    <span class="form-control-focus"> </span>
                                                                                </span>
                                                                                <span style="float: left; margin-top: -28px; margin-left: 15px; font-weight: bold" class="checkCurrency"><?php $currency = explode("-", $basicSettings[0]->currencySymbol); echo $currency[1]; ?> </span>
                                                                            </span>
                                                                            <input class="form-control warrantyInput" name="warrantyInput[]" placeholder="warranty" value="" type="hidden">
                                                                            <input class="form-control descriptionInput" name="descriptionInput[]" placeholder="desctiption" value="" type="hidden">
                                                                            <input class="form-control productNameInput" name="productNameInput[]" placeholder="desctiption" value="" type="hidden">
                                                                            <input class="form-control taxNameInput" name="taxNameInput[]" placeholder="desctiption" value="" type="hidden">
                                                                        </td>
                                                                        <td class="moveButton"><i class="fa fa-unsorted grabbable" style="padding-top: 10px !important"></i></td>
                                                                        <td class="deleteButton"><i class="glyphicon glyphicon-remove" style="padding-top: 8px !important"></i></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <a id="tiggerClick" onClick="addBlankLine();" class="btn green-haze btn-sm"><i class="fa fa-plus"></i> Add Line </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-offset-8 col-md-4">
                                                        <table class="table" id="PurchaseTotalTable">
                                                            <tbody>
                                                                <tr class="subtotal-row">
                                                                    <th class="text-left">Subtotal: <span class="checkCurrency" style="float: right;"><?php $currency = explode("-", $basicSettings[0]->currencySymbol); echo $currency[1]; ?></span></th>
                                                                    <td class="text-right subtotal"> 0.00</td>
                                                                </tr>
                                                                <tr class="discount-row">
                                                                    <th class="text-left">Discount: <span class="checkSymbol"></span> <span class="checkCurrency" style="float: right;"><?php $currency = explode("-", $basicSettings[0]->currencySymbol); echo $currency[1]; ?></span></th></th>
                                                                    <td class="text-right discount discountAmount"> 0.00</td>
                                                                </tr>
                                                                <tr class="total-row">
                                                                    <th class="text-left">Estimate Total: <span class="checkCurrency" style="float: right;"><?php $currency = explode("-", $basicSettings[0]->currencySymbol); echo $currency[1]; ?></span></th></th>
                                                                    <td class="text-right total pTotal"> 0.00</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 25px;">
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <div class="input-icon">
                                                                <textarea class="form-control noteProduct" type="text" name="noteProduct"><?php echo $anotherSettings[0]->noteEstimate; ?></textarea>
                                                                <label for="form_control_1">NOTES</label>                                                            
                                                                <span class="saveDefault" style="display: <?php if($anotherSettings[0]->noteEstimate != '') echo "none" ?>">
                                                                    <a class="tooltipCc">
                                                                        <i class="fa fa-plus-circle noteSubmit" style="color: #44B6AE; float: right; font-size: 15px; margin:5px;"></i>
                                                                        <span class="sTooltip"><strong>Save as default</strong></span>
                                                                    </a>
                                                                </span>
                                                                <span class="help-block">Appears on each estimate. Notes that are visible to your customer.</span>
                                                                <i class="icon-speech"></i>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                    <div class="col-md-6 pull-right" style="margin-top: 25px;">
                                                        <div id="remarkDiv" class="form-group form-md-line-input form-md-floating-label">
                                                            <div class="input-icon">
                                                                <textarea class="form-control remarkProduct" type="text" name="remarkProduct"></textarea>
                                                                <label for="form_control_1">Remarks</label>                                                            
                                                                <span class="help-block">Add your remarks.</span>
                                                                <i class="icon-speech"></i>
                                                            </div>
                                                        </div>
                                                    </div>                                           
                                                    <div class="col-md-12 margiv-top-10"><br/>
                                                        <input id="purchaseSystemCode" name="productSystemCode" value="" type="hidden" />
                                                        <input id="purchaseEditId" name="productEditId" value="" type="hidden" />
                                                        <input id="purchasefiles" name="productfiles" value="" type="hidden" />
                                                        <input id="purchaseTotal" name="productTotal" value="" type="hidden" />
                                                        <input id="productsIds" type="hidden" name="productsIds" value="" />
                                                        <input id="purchaseDueAmount" name="productDueAmount" value="" type="hidden" />
                                                        <a id="purchaseSave" href="javascript:;" class="btn btn-primary"><i class="fa fa-save"></i> Save </a>
                                                        <a id="purchaseSaveNew" href="javascript:;" class="btn green"><i class="fa fa-newspaper-o"></i> Save & New </a>
                                                        <a href="javascript:;" class="btn default PurchaseListVisible"><i class="fa fa-times"></i> Cancel </a>
                                                    </div>
                                                </form>                                                                 
                                                
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
                    <div class="row PurchaseList">
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
                                        <div style="float: right;">
                                            <a class="btn green-haze btn-sm PurchaseAddVisible"><i class="fa fa-plus"></i> New Estimate </a>
                                        </div>
                                    </div>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet box light bordered">
                                        <div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
                                            <div class="caption">
                                                <i class="fa fa-th-list" style="color: #C5BF66;"></i><span class="caption-subject font-blue-madison bold" style="color: #C5BF66 !important;">Active Estimate List</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group btn-group-solid">
                                                    <!-- <a id="cPage" class="dt-button buttons-print btn gray btn-outline"><i class="fa fa-plus-square-o" style="color: #555555;"></i><span>Current Page</span></a>
                                                    <a id="tTable" class="dt-button buttons-print btn gray btn-outline"><i class="fa fa-plus-square" style="color: #555555;"></i><span>Total Table</span></a> -->
                                                    <a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_1', 'Estimate List Active')"><i class="fa fa-print"></i><span>Print</span></a>
                                                    <a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_1', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
                                                    <a class="btn default" href="#" data-toggle="dropdown">
                                                        <i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div id="sample_1_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                                        <label><input type="checkbox" checked data-column="0">Show Notes</label>
                                                        <label><input type="checkbox" checked data-column="1">Manage</label>
                                                        <label><input type="checkbox" checked data-column="2">Status</label>
                                                        <label><input type="checkbox" checked data-column="3">Date</label>
                                                        <label><input type="checkbox" checked data-column="4">Offer Until Date</label>
                                                        <label><input type="checkbox" checked data-column="5">Total</label>
                                                        <label><input type="checkbox" data-column="6">Customer</label>
                                                        <label><input type="checkbox" data-column="7">Estimate ID</label>
                                                        <label><input type="checkbox" data-column="8">Created By</label>
                                                        <label><input type="checkbox" data-column="9">Entry Date</label>
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
                                                            Manage
                                                        </th>
                                                        <th>
                                                            Status
                                                        </th>
                                                        <th>
                                                            Date
                                                        </th>
                                                        <th>
                                                            Offer Until Date
                                                        </th>
                                                        <th>
                                                            Total
                                                        </th>
                                                        <th>
                                                            Customer
                                                        </th>
                                                        <th>
                                                            Estimate ID
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
                                                    <?php foreach ($activePurchase as $activePurchaseResult) { 
                                                        $allComments = $this->data_model->get_all_info('*', array('docType' => 'estimate', 'docId' => $activePurchaseResult->id), 'list_all_comment');
                                                    ?>
                                                    <tr id="receipt<?php echo $activePurchaseResult->id; ?>">
                                                        <td>
                                                            <div class="btn-group" style="margin: -5px">
                                                                <button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu" style="position: absolute;">
                                                                    <li id="view<?php echo $activePurchaseResult->id; ?>">
                                                                        <a target="_blank" href="<?php echo base_url(); ?>estimate/viewEstimate/<?php echo $activePurchaseResult->id; ?>" class="liveLink"><i class="fa fa-search" style="color: #26C281;"></i><span>View</span></a>
                                                                    </li>
                                                                    <li id="history<?php echo $activePurchaseResult->id; ?>">
                                                                        <a target="_blank" href="<?php echo base_url(); ?>estimate/viewEstimate/<?php echo $activePurchaseResult->id; ?>/history" class="liveLink"><i class="fa fa-history" style="color: gray;"></i><span>History</span></a>
                                                                    </li>
                                                                    <li id="convert<?php echo $activePurchaseResult->id; ?>">
                                                                        <a onclick="convert('<?php echo $activePurchaseResult->id; ?>')" href="javascript:;" class="liveLink"><i class="fa fa-rotate-left" style="color: #26C281;"></i><span>Make Invoice</span></a>
                                                                    </li>
                                                                    <li id="edit<?php echo $activePurchaseResult->id; ?>">
                                                                        <a onclick="editData('<?php echo $activePurchaseResult->id; ?>')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Return & Edit</span></a>
                                                                    </li>
                                                                    <li id="duplicate<?php echo $activePurchaseResult->id; ?>">
                                                                        <a onclick="duplicateData(<?php echo $activePurchaseResult->id; ?>)" href="javascript:;"><i class="fa fa-clone" style="color: #E87E04;"></i><span>Duplicate</span></a>
                                                                    </li>
                                                                    <li id="print<?php echo $activePurchaseResult->id; ?>">
                                                                        <a target="_blank" href="<?php echo base_url(); ?>estimate/printEstimate/<?php echo $activePurchaseResult->id; ?>" class="liveLink"><i class="fa fa-print" style="color: #000000;"></i><span>Print</span></a>
                                                                    </li>
                                                                    <li id="delete<?php echo $activePurchaseResult->id; ?>">
                                                                        <a onclick="deleteData('<?php echo $activePurchaseResult->id; ?>')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div> 
                                                        </td>
                                                        <td>
                                                            <?php if($activePurchaseResult->cStatus == 2){ ?>                                                            
                                                            <span class="label label-sm label-success"> Sent </span>
                                                            <?php } else if($activePurchaseResult->cStatus == 3) { ?>
                                                            <span class="label label-sm label-warning"> Viewed </span>
                                                            <?php } else if($activePurchaseResult->cStatus == 4) { ?>
                                                            <span class="label label-sm" style="background: green"> Accepted </span>
                                                            <?php } else if($activePurchaseResult->cStatus == 5) { ?>
                                                            <span class="label label-sm" style="background: red"> Expire </span>
                                                            <?php } else { ?>                                     
                                                            <span class="label label-sm" style="background: #3598DC"> Draft </span>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <span id="date<?php echo $activePurchaseResult->id; ?>"><?php echo date("d-m-Y", strtotime($activePurchaseResult->date)); ?></span>
                                                            <span id="title<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->title; ?></span>
                                                            <span id="member<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->customerId; ?></span>
                                                            <span id="invoiceNo<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->documentId; ?></span>
                                                            <span id="poOptional<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->po; ?></span>
                                                            <span id="invoiceDate<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo date("d-m-Y", strtotime($activePurchaseResult->date)); ?></span>
                                                            <span id="pickDate<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo date("d-m-Y", strtotime($activePurchaseResult->dueDate)); ?></span>
                                                            <span id="discountType<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->discountType; ?></span>
                                                            <span id="discountRate<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->discountAmount; ?></span>
                                                            <span id="currencyType<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->currencyType; ?></span>
                                                            <span id="note<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->noteS; ?></span>
                                                            <span id="currencyRate<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->currencyRate; ?></span>
                                                            <span id="allData<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->documentData; ?></span>  
                                                            <span id="attachFile<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->attachFile; ?></span>                                                       
                                                            <span id="duePurchase<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo round(($activePurchaseResult->paidAmount), 2); ?></span>
                                                            <span id="cStatus<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->cStatus; ?></span>
                                                        </td>
                                                        <td>
                                                            <?php echo date("d-m-Y", strtotime($activePurchaseResult->dueDate)); ?>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                                $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                $localSymbol = $currencySysmbol[1];
                                                                if($activePurchaseResult->currencyType == 'local') {
                                                                    $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                    echo $currencySysmbol[1]." ".number_format($activePurchaseResult->calculateTotal, 2);
                                                                } else {
                                                                    $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                    echo $currencySysmbol[1];
                                                                    echo    '<a class="tooltipC">
                                                                                <span> '.number_format($activePurchaseResult->calculateTotal, 2).' </span>
                                                                                <span class="sTooltip"><strong>'.$localSymbol." ".number_format($activePurchaseResult->calculateTotal*$activePurchaseResult->currencyRate, 2).'</strong></span>
                                                                            </a>';
                                                                }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php $vendor = $this->data_model->get_specific_column("name", array("id" => $activePurchaseResult->customerId), "list_business_member"); echo $vendor[0]->name; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $activePurchaseResult->documentId; ?>
                                                        </td>
                                                        <td>
                                                            <?php $team = $this->data_model->get_specific_column("name", array("id" => $activePurchaseResult->createdBy), "list_team"); echo $team[0]->name; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $activePurchaseResult->createdDateTime; ?>
                                                        </td>
                                                        <td style="display: none;">
                                                            <div class="col-md-12 col-sm-12 hiddenComment<?php echo $activePurchaseResult->id; ?>">
                                                                <div class="portlet">
                                                                    <div class="portlet-body">                                                                          
                                                                        <div class="ibox float-e-margins ui-sortable">
                                                                            <div style="position: static;" class="ibox-content">
                                                                                <div id="sysfrm_ajaxrender">
                                                                                    <section class="activity-post mb-xlg">
                                                                                        <form id="commentForm<?php echo $activePurchaseResult->id; ?>">
                                                                                            <textarea name="messageText<?php echo $activePurchaseResult->id; ?>" onkeyup="getValueComment(this.value, <?php echo $activePurchaseResult->id; ?>);" id="messageText<?php echo $activePurchaseResult->id; ?>" class="msg messageText<?php echo $activePurchaseResult->id; ?>" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>
                                                                                            <input id="hiddenMessage<?php echo $activePurchaseResult->id; ?>" class="hiddenMessage<?php echo $activePurchaseResult->id; ?>" name="hiddenMessage<?php echo $activePurchaseResult->id; ?>" value="" type="hidden">
                                                                                            <input id="activityType<?php echo $activePurchaseResult->id; ?>" name="activityType<?php echo $activePurchaseResult->id; ?>" value="fa-check" type="hidden">
                                                                                            <input id="activityId" name="activityId" value="<?php echo $activePurchaseResult->id; ?>" type="hidden">
                                                                                            <input id="commentType<?php echo $activePurchaseResult->id; ?>" name="commentType<?php echo $activePurchaseResult->id; ?>" value="estimate" type="hidden">
                                                                                            <input id="commentCode<?php echo $activePurchaseResult->id; ?>" name="commentCode<?php echo $activePurchaseResult->id; ?>" value="" type="hidden">
                                                                                            <input id="commentId<?php echo $activePurchaseResult->id; ?>" name="commentId<?php echo $activePurchaseResult->id; ?>" value="" type="hidden">
                                                                                            <input id="commentProcess<?php echo $activePurchaseResult->id; ?>" name="commentProcess<?php echo $activePurchaseResult->id; ?>" value="0" type="hidden">
                                                                                        </form>
                                                                                        <div class="compose-box-footer">
                                                                                            <ul class="compose-toolbar compose-toolbar-success">
                                                                                                <li onClick="iconChange('fa-hourglass', <?php echo $activePurchaseResult->id; ?>);" class="clickable fa-hourglass<?php echo $activePurchaseResult->id; ?>"><a><i class="fa fa-hourglass"></i></a></li>
                                                                                                <li onClick="iconChange('fa-hourglass-start', <?php echo $activePurchaseResult->id; ?>);" class="clickable fa-hourglass-start<?php echo $activePurchaseResult->id; ?>"><a><i class="fa fa-hourglass-start"></i></a></li>
                                                                                                <li onClick="iconChange('fa-hourglass-o', <?php echo $activePurchaseResult->id; ?>);" class="clickable fa-hourglass-o<?php echo $activePurchaseResult->id; ?>"><a><i class="fa fa-hourglass-o"></i></a></li>
                                                                                                <li onClick="iconChange('fa-balance-scale', <?php echo $activePurchaseResult->id; ?>);" class="clickable fa-balance-scale<?php echo $activePurchaseResult->id; ?>"><a><i class="fa fa-balance-scale"></i></a></li>
                                                                                                <li onClick="iconChange('fa-adjust', <?php echo $activePurchaseResult->id; ?>);" class="clickable fa-adjust<?php echo $activePurchaseResult->id; ?>"><a><i class="fa fa-adjust"></i></a></li>
                                                                                                <li onClick="iconChange('fa-certificate', <?php echo $activePurchaseResult->id; ?>);" class="clickable fa-certificate<?php echo $activePurchaseResult->id; ?>"><a><i class="fa fa-certificate"></i></a></li>
                                                                                                <li onClick="iconChange('fa-check', <?php echo $activePurchaseResult->id; ?>);" class="clickable fa-check<?php echo $activePurchaseResult->id; ?> action-active"><a><i class="fa fa-check"></i></a></li>
                                                                                                <li onClick="iconChange('fa-times', <?php echo $activePurchaseResult->id; ?>);" class="clickable fa-times<?php echo $activePurchaseResult->id; ?>"><a><i class="fa fa-times"></i></a></li>
                                                                                                <li onClick="iconChange('fa-exchange', <?php echo $activePurchaseResult->id; ?>);" class="clickable fa-exchange<?php echo $activePurchaseResult->id; ?>"><a><i class="fa fa-exchange"></i></a></li>
                                                                                                <li onClick="iconChange('fa-cog', <?php echo $activePurchaseResult->id; ?>);" class="clickable fa-cog<?php echo $activePurchaseResult->id; ?>"><a><i class="fa fa-cog"></i></a></li>
                                                                                            </ul>
                                                                                            <ul class="compose-btn">
                                                                                                <li>
                                                                                                    <a class="save<?php echo $activePurchaseResult->id; ?> btn btn-success btn-xs" onClick="commentProcess('sample_1', <?php echo $activePurchaseResult->id; ?>)"><i class="fa fa-edit"></i> Add Note</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a class="cancle<?php echo $activePurchaseResult->id; ?> btn btn-warning btn-xs" onClick="clickCancle(<?php echo $activePurchaseResult->id; ?>)" style="display: none"><i class="fa fa-times"></i> Cancle</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </section>
                                                                                    <div style="margin-top:20px !important;" class="mt-lg"> </div>
                                                                                        <div id="all_timeline_div" class="all_timeline_div<?php echo $activePurchaseResult->id ?>" data-always-visible="1" data-rail-visible1="1">
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
                                                                                                                    <i onclick="editComment('estimate', <?php echo $activePurchaseResult->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-edit permission iconEdit iconMark"></i>
                                                                                                                    <i onclick="deleteComment('sample_10', <?php echo $activePurchaseResult->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-trash permission iconDelete iconMark"></i>
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
                    <div class="row PurchaseListArchive" style="display: none">
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
                                        <div style="float: right;">
                                            <a class="btn green-haze btn-sm PurchaseAddVisible"><i class="fa fa-plus"></i> New Estimate </a>
                                        </div>
                                    </div>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet box light bordered">
                                        <div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
                                            <div class="caption">
                                                <i class="fa fa-th-list" style="color: #C5BF66;"></i><span class="caption-subject font-blue-madison bold" style="color: #C5BF66 !important;">Archive Estimate List</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group btn-group-solid">
                                                    <!-- <a id="cPage" class="dt-button buttons-print btn gray btn-outline"><i class="fa fa-plus-square-o" style="color: #555555;"></i><span>Current Page</span></a>
                                                    <a id="tTable" class="dt-button buttons-print btn gray btn-outline"><i class="fa fa-plus-square" style="color: #555555;"></i><span>Total Table</span></a> -->
                                                    <a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_11', 'Estimate List Inactive')"><i class="fa fa-print"></i><span>Print</span></a>
                                                    <a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_11', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
                                                    <a class="btn default" href="#" data-toggle="dropdown">
                                                        <i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div id="sample_11_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                                        <label><input type="checkbox" checked data-column="0">Show Notes</label>
                                                        <label><input type="checkbox" checked data-column="1">Manage</label>
                                                        <label><input type="checkbox" checked data-column="2">Status</label>
                                                        <label><input type="checkbox" checked data-column="3">Date</label>
                                                        <label><input type="checkbox" checked data-column="4">Offer Until Date</label>
                                                        <label><input type="checkbox" checked data-column="5">Total</label>
                                                        <label><input type="checkbox" data-column="6">Customer</label>
                                                        <label><input type="checkbox" data-column="7">Estimate ID</label>
                                                        <label><input type="checkbox" data-column="8">Created By</label>
                                                        <label><input type="checkbox" data-column="9">Entry Date</label>
                                                    </div>
                                                    <a id="tFull" class="fullscreen fullscreen-recent dt-button buttons-csv buttons-html5 btn blue btn-outline"><i id="tFullIcon" class="fa fa-expand"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="portlet-body" class="portlet-body">
                                            <table class="table table-striped table-bordered table-hover dt-responsive" id="sample_11">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Manage
                                                        </th>
                                                        <th>
                                                            Status
                                                        </th>
                                                        <th>
                                                            Date
                                                        </th>
                                                        <th>
                                                            Offer Until Date
                                                        </th>
                                                        <th>
                                                            Total
                                                        </th>
                                                        <th>
                                                            Customer
                                                        </th>
                                                        <th>
                                                            Estimate ID
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
                                                    <?php foreach ($inActivePurchase as $inActivePurchaseResult) { 
                                                        $allComments = $this->data_model->get_all_info('*', array('docType' => 'estimate', 'docId' => $inActivePurchaseResult->id), 'list_all_comment');
                                                    ?>
                                                    <tr id="receipt<?php echo $inActivePurchaseResult->id; ?>">
                                                        <td>                                                            
                                                            <div class="btn-group" style="margin: -5px">
                                                                <button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu" style="position: absolute;">
                                                                    <li id="view<?php echo $inActivePurchaseResult->id; ?>">
                                                                        <a target="_blank" href="<?php echo base_url(); ?>estimate/viewEstimate/<?php echo $inActivePurchaseResult->id; ?>" class="liveLink"><i class="fa fa-search" style="color: #26C281;"></i><span>View</span></a>
                                                                    </li>
                                                                    <li id="history<?php echo $inActivePurchaseResult->id; ?>">
                                                                        <a target="_blank" href="<?php echo base_url(); ?>estimate/viewEstimate/<?php echo $inActivePurchaseResult->id; ?>/history" class="liveLink"><i class="fa fa-history" style="color: gray;"></i><span>History</span></a>
                                                                    </li>
                                                                    <li id="print<?php echo $inActivePurchaseResult->id; ?>">
                                                                        <a target="_blank" href="<?php echo base_url(); ?>estimate/printEstimate/<?php echo $inActivePurchaseResult->id; ?>" class="liveLink"><i class="fa fa-print" style="color: #000000;"></i><span>Print</span></a>
                                                                    </li>
                                                                    <li id="active<?php echo $inActivePurchaseResult->id; ?>">
                                                                        <a onclick="activeData('<?php echo $inActivePurchaseResult->id; ?>')"><i class="fa fa-recycle" style="color: #008800;"></i><span>Active</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div> 
                                                        </td>
                                                        <td>
                                                            <?php if($inActivePurchaseResult->cStatus == 2){ ?>                                                            
                                                            <span class="label label-sm label-success"> Sent </span>
                                                            <?php } else if($inActivePurchaseResult->status == 3) { ?>
                                                            <span class="label label-sm label-warning"> Viewed </span>
                                                            <?php } else if($inActivePurchaseResult->status == 4) { ?>
                                                            <span class="label label-sm" style="background: green"> Accepted </span>
                                                            <?php } else if($inActivePurchaseResult->status == 5) { ?>
                                                            <span class="label label-sm" style="background: red"> Expire </span>
                                                            <?php } else { ?>                                     
                                                            <span class="label label-sm" style="background: #3598DC"> Draft </span>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <span id="date<?php echo $inActivePurchaseResult->id; ?>"><?php echo date("d-m-Y", strtotime($inActivePurchaseResult->date)); ?></span>
                                                            <span id="title<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo $inActivePurchaseResult->title; ?></span>
                                                            <span id="member<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo $inActivePurchaseResult->customerId; ?></span>
                                                            <span id="invoiceNo<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo $inActivePurchaseResult->documentId; ?></span>
                                                            <span id="poOptional<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo $inActivePurchaseResult->po; ?></span>
                                                            <span id="invoiceDate<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo date("d-m-Y", strtotime($inActivePurchaseResult->date)); ?></span>
                                                            <span id="pickDate<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo date("d-m-Y", strtotime($inActivePurchaseResult->dueDate)); ?></span>
                                                            <span id="discountType<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo $inActivePurchaseResult->discountType; ?></span>
                                                            <span id="discountRate<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo $inActivePurchaseResult->discountAmount; ?></span>
                                                            <span id="currencyType<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo $inActivePurchaseResult->currencyType; ?></span>
                                                            <span id="note<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo $inActivePurchaseResult->noteS; ?></span>
                                                            <span id="currencyRate<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo $inActivePurchaseResult->currencyRate; ?></span>
                                                            <span id="allData<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo $inActivePurchaseResult->documentData; ?></span>  
                                                            <span id="attachFile<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo $inActivePurchaseResult->attachFile; ?></span>                                                       
                                                            <span id="duePurchase<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo round(($inActivePurchaseResult->paidAmount), 2); ?></span>
                                                            <span id="cStatus<?php echo $inActivePurchaseResult->id; ?>" style="display:none;"><?php echo $inActivePurchaseResult->cStatus; ?></span>
                                                        </td>
                                                        <td>
                                                            <?php echo date("d-m-Y", strtotime($inActivePurchaseResult->dueDate)); ?>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                                $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                $localSymbol = $currencySysmbol[1];
                                                                if($inActivePurchaseResult->currencyType == 'local') {
                                                                    $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                    echo $currencySysmbol[1]." ".number_format($inActivePurchaseResult->calculateTotal, 2);
                                                                } else {
                                                                    $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                    echo $currencySysmbol[1];
                                                                    echo    '<a class="tooltipC">
                                                                                <span> '.number_format($inActivePurchaseResult->calculateTotal, 2).' </span>
                                                                                <span class="sTooltip"><strong>'.$localSymbol." ".number_format($inActivePurchaseResult->calculateTotal*$inActivePurchaseResult->currencyRate, 2).'</strong></span>
                                                                            </a>';
                                                                }
                                                            ?> 
                                                            
                                                        </td>
                                                        <td>
                                                            <?php $vendor = $this->data_model->get_specific_column("name", array("id" => $inActivePurchaseResult->customerId), "list_business_member"); echo $vendor[0]->name; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $inActivePurchaseResult->documentId; ?>
                                                        </td>
                                                        <td>
                                                            <?php $team = $this->data_model->get_specific_column("name", array("id" => $inActivePurchaseResult->createdBy), "list_team"); echo $team[0]->name; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $inActivePurchaseResult->createdDateTime; ?>
                                                        </td>
                                                        <td style="display: none;">
                                                            <div class="col-md-12 col-sm-12 hiddenComment<?php echo $inActivePurchaseResult->id; ?>">
                                                                <div class="portlet">
                                                                    <div class="portlet-body">                                                                          
                                                                        <div class="ibox float-e-margins ui-sortable">
                                                                            <div style="position: static;" class="ibox-content">
                                                                                <div id="sysfrm_ajaxrender">
                                                                                    <section class="activity-post mb-xlg">
                                                                                        <form id="commentForm<?php echo $inActivePurchaseResult->id; ?>">
                                                                                            <textarea name="messageText<?php echo $inActivePurchaseResult->id; ?>" onkeyup="getValueComment(this.value, <?php echo $inActivePurchaseResult->id; ?>);" id="messageText<?php echo $inActivePurchaseResult->id; ?>" class="msg messageText<?php echo $inActivePurchaseResult->id; ?>" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>
                                                                                            <input id="hiddenMessage<?php echo $inActivePurchaseResult->id; ?>" class="hiddenMessage<?php echo $inActivePurchaseResult->id; ?>" name="hiddenMessage<?php echo $inActivePurchaseResult->id; ?>" value="" type="hidden">
                                                                                            <input id="activityType<?php echo $inActivePurchaseResult->id; ?>" name="activityType<?php echo $inActivePurchaseResult->id; ?>" value="fa-check" type="hidden">
                                                                                            <input id="activityId" name="activityId" value="<?php echo $inActivePurchaseResult->id; ?>" type="hidden">
                                                                                            <input id="commentType<?php echo $inActivePurchaseResult->id; ?>" name="commentType<?php echo $inActivePurchaseResult->id; ?>" value="estimate" type="hidden">
                                                                                            <input id="commentCode<?php echo $inActivePurchaseResult->id; ?>" name="commentCode<?php echo $inActivePurchaseResult->id; ?>" value="" type="hidden">
                                                                                            <input id="commentId<?php echo $inActivePurchaseResult->id; ?>" name="commentId<?php echo $inActivePurchaseResult->id; ?>" value="" type="hidden">
                                                                                            <input id="commentProcess<?php echo $inActivePurchaseResult->id; ?>" name="commentProcess<?php echo $inActivePurchaseResult->id; ?>" value="0" type="hidden">
                                                                                        </form>
                                                                                        <div class="compose-box-footer">
                                                                                            <ul class="compose-toolbar compose-toolbar-success">
                                                                                                <li onClick="iconChange('fa-hourglass', <?php echo $inActivePurchaseResult->id; ?>);" class="clickable fa-hourglass<?php echo $inActivePurchaseResult->id; ?>"><a><i class="fa fa-hourglass"></i></a></li>
                                                                                                <li onClick="iconChange('fa-hourglass-start', <?php echo $inActivePurchaseResult->id; ?>);" class="clickable fa-hourglass-start<?php echo $inActivePurchaseResult->id; ?>"><a><i class="fa fa-hourglass-start"></i></a></li>
                                                                                                <li onClick="iconChange('fa-hourglass-o', <?php echo $inActivePurchaseResult->id; ?>);" class="clickable fa-hourglass-o<?php echo $inActivePurchaseResult->id; ?>"><a><i class="fa fa-hourglass-o"></i></a></li>
                                                                                                <li onClick="iconChange('fa-balance-scale', <?php echo $inActivePurchaseResult->id; ?>);" class="clickable fa-balance-scale<?php echo $inActivePurchaseResult->id; ?>"><a><i class="fa fa-balance-scale"></i></a></li>
                                                                                                <li onClick="iconChange('fa-adjust', <?php echo $inActivePurchaseResult->id; ?>);" class="clickable fa-adjust<?php echo $inActivePurchaseResult->id; ?>"><a><i class="fa fa-adjust"></i></a></li>
                                                                                                <li onClick="iconChange('fa-certificate', <?php echo $inActivePurchaseResult->id; ?>);" class="clickable fa-certificate<?php echo $inActivePurchaseResult->id; ?>"><a><i class="fa fa-certificate"></i></a></li>
                                                                                                <li onClick="iconChange('fa-check', <?php echo $inActivePurchaseResult->id; ?>);" class="clickable fa-check<?php echo $inActivePurchaseResult->id; ?> action-active"><a><i class="fa fa-check"></i></a></li>
                                                                                                <li onClick="iconChange('fa-times', <?php echo $inActivePurchaseResult->id; ?>);" class="clickable fa-times<?php echo $inActivePurchaseResult->id; ?>"><a><i class="fa fa-times"></i></a></li>
                                                                                                <li onClick="iconChange('fa-exchange', <?php echo $inActivePurchaseResult->id; ?>);" class="clickable fa-exchange<?php echo $inActivePurchaseResult->id; ?>"><a><i class="fa fa-exchange"></i></a></li>
                                                                                                <li onClick="iconChange('fa-cog', <?php echo $inActivePurchaseResult->id; ?>);" class="clickable fa-cog<?php echo $inActivePurchaseResult->id; ?>"><a><i class="fa fa-cog"></i></a></li>
                                                                                            </ul>
                                                                                            <ul class="compose-btn">
                                                                                                <li>
                                                                                                    <a class="save<?php echo $inActivePurchaseResult->id; ?> btn btn-success btn-xs" onClick="commentProcess('sample_11', <?php echo $inActivePurchaseResult->id; ?>)"><i class="fa fa-edit"></i> Add Note</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a class="cancle<?php echo $inActivePurchaseResult->id; ?> btn btn-warning btn-xs" onClick="clickCancle(<?php echo $inActivePurchaseResult->id; ?>)" style="display: none"><i class="fa fa-times"></i> Cancle</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </section>
                                                                                    <div style="margin-top:20px !important;" class="mt-lg"> </div>
                                                                                        <div id="all_timeline_div" class="all_timeline_div<?php echo $inActivePurchaseResult->id ?>" data-always-visible="1" data-rail-visible1="1">
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
                                                                                                                    <i onclick="editComment('estimate', <?php echo $inActivePurchaseResult->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-edit permission iconEdit iconMark"></i>
                                                                                                                    <i onclick="deleteComment('sample_1010', <?php echo $inActivePurchaseResult->id; ?>, <?php echo $comment->id; ?>)" class="fa fa-trash permission iconDelete iconMark"></i>
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
            var vendorName = '';
            var counterUpload = 0;
            var isEditNow = 0;
            var customURL = '';
            var prepend = 0;
            var cprepend = 0;
            var addedCustomerNames = [];  
            var showChart = 0;
            var localCurrency = '<?php echo $basicSettings[0]->currencySymbol; ?>';
            var currencyLocal = localCurrency.split('-');;
            var foreignCurrency = '<?php echo $basicSettings[0]->foreignCurrencySymbol; ?>';
            var currencyForeign = foreignCurrency.split('-');
            var discountRate = 0;
            var discountType = 'percent';
            var notePurchase = '<?php echo $anotherSettings[0]->notePurchase ?>';
            var currentpurchase = '';
            var totalPurchase = "<?php echo $totalPurchase; ?>";
            var currentActivity = '';
            var totalActivity =  "<?php echo $totalActivity; ?>";
            var currentComment = '';
            var totalComment = "<?php echo $totalComment; ?>";
            var currentdate = new Date();
            var purchaseTerms = '<?php echo $basicInvoiceEstimate[0]->paymentTermEstimate; ?>';
            var systemUnit = "<?php echo $columnSettings[0]->unitName; ?>";
            var rateCurrency = "<?php echo $basicSettings[0]->foreignCurrencyRate; ?>";
            var getDateTime = currentdate.getFullYear() + "-"
                            + (currentdate.getMonth()+1)  + "-" 
                            + currentdate.getDate() + " "  
                            + (currentdate.getHours() % 12 || 12) + ":"  
                            + currentdate.getMinutes() + ":" 
                            + currentdate.getSeconds();
            var uriSegment = '<?php echo $this->uri->segment(2); ?>';
            <?php $dataPurhaseCurrency = array(array('name' => $local." Local", 'color' => "#F1C40F", 'y' => $local), array('name' => $foreign." Foreign", 'color' => "#36C6D3", 'y' => $foreign)); ?>
            var dataPurhaseCurrency = <?php echo json_encode($dataPurhaseCurrency); ?>;
            <?php $dataPurhaseStatus = array(array('name' => $paid." Paid", 'color' => "#36C6D3", 'y' => $paid), array('name' => $partial." Partial", 'color' => "#337AB7", 'y' => $partial), array('name' => $overDue." Overdue", 'color' => "#ED6B75", 'y' => $overDue)); ?>
            var dataPurhaseStatus = <?php echo json_encode($dataPurhaseStatus); ?>;
            var monthBasedIncome = [];
            var monthBasedExpense = [];
            var categoryIncome = [];
            var categoryExpense = [];
            var editCalled = 0;
            var productListLive = [];
            var selectError = false; 
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
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.mockjax.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/inputs-ext/address/address.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
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
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/highcharts.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/highcharts-3d.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/highcharts-more.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/modules/exporting.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/portfolio-1.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/form-dropzone.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/charts-highcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-select2.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-date-time-pickers.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-bootstrap-switch.min.js" type="text/javascript"></script>
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
            if(uriSegment == 'edit') {
                //$('#edit<?php echo $this->uri->segment(3) ?>');
                window.onload = function() {
                    editData(<?php echo $this->uri->segment(3) ?>);
                };
            }
            if(uriSegment == 'add') {
                window.onload = function() {
                    var id = '<?php echo $this->uri->segment(3) ?>';
                    if(id != '') {
                        addData(<?php echo $this->uri->segment(3) ?>); 
                    } else {
                        addDataBlank();
                    }
                }
            }
            function addDataBlank() {}            
            function addData(id) {
                var id = '<?php echo $this->uri->segment(3) ?>';
                customerSelect[0].selectize.setValue(id, true);
                $.ajax({
                    url: base_link+'vendor/getVendor',
                    type: 'POST',
                    data: 'id='+id,
                    async: false,
                    beforeSend: function() {
                        $('#overlay').css('display', 'block');
                        setLoadingImage();
                    },
                    complete: function() {
                        $('#overlay').css('display', 'none');
                        $('#loadingSpinner').remove();
                        // $('#chatAudio')[0].play();
                    },
                    success: function (response) { 
                        r = $.parseJSON(response);
                        res = r.response;
                        $('.oldVendorInfo').slideDown('fast');
                        $('.new-customer-data').slideUp('fast');
                        vendorName = r.response;
                        $('.nameOfContract').text(r.nameOfContact);
                        $('.companyAddress').text(r.address1);
                        $('.companyAddress1').text(r.address2);
                        OrText = res.replace(/ /g,'');
                        if(res.length > 4) {
                            nameId = OrText.substring(0, 4);
                            idName = nameId.toUpperCase();
                        } else {
                            idName = OrText.toUpperCase(); 
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
                $.ajax({
                    url: base_link+'invoice/memeberCount',
                    type: 'POST',
                    data: 'id='+id,
                    async: false,
                    beforeSend: function() {
                        $('#overlay').css('display', 'block');
                        setLoadingImage();
                    },
                    complete: function() {
                        $('#overlay').css('display', 'none');
                        $('#loadingSpinner').remove();
                        // $('#chatAudio')[0].play();
                    },
                    success: function (response) { 
                        r = $.parseJSON(response);
                        if(r.count < 10) {
                            $('#invoiceNo').val(idName+"-"+"00000"+(++r.count));
                        } else if(r.count < 100) {
                            $('#invoiceNo').val(idName+"-"+"0000"+(++r.count));                
                        } else if(r.count < 1000) {
                            $('#invoiceNo').val(idName+"-"+"000"+(++r.count));                
                        } else if(r.count < 10000) {
                            $('#invoiceNo').val(idName+"-"+"00"+(++r.count));                
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
                $("#purchaseSystemCode").val("bces"+(currentpurchase));
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
            purchaseListId();
            function fileExists(file) {
                $.post(base_link+"team/fileExists",{
                  file: file
                },
                function(data, status){
                    r = $.parseJSON(data);
                    return r.response;
                });
            }
            var pagePosition = '<?php echo $this->uri->segment(2); ?>';
            if(pagePosition == 'add') {
                $('.addPurchase').stop(true, true).fadeIn({ duration: 1500, queue: false }).css('display', 'none').slideDown(1500);    
                $("html, body").animate({ scrollTop: '0px' }, "slow");
            }
            $('.PurchaseListVisible').live('click', function(e) {
                editCalled = 1;
                $('.addPurchase').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                $('#addPurchase').trigger("reset");
                $('#addProduct')[0].reset();
                $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                $('.noteProduct').addClass("edited");
                $('.oldVendorInfo').slideUp("slow");
                $("#dateDifference").slideUp("slow");
                $(".radioCheck").slideUp("slow");
                $('.currencyRate').slideUp("slow");
                $('.productTable').find("tr:gt(1)").remove();
                $('#radio1').prop('checked', false);
                $('#radio2').prop('checked', true);
                $('#radio5').prop('checked', false);
                $('#radio6').prop('checked', true);
                var control = customerSelect[0].selectize;
                control.clear(true);
                $('.purchaseOption').select2('val', '---');
                $('.selectizedTax').select2('val', '---');
                $('.warrantySpan').css("display", "none");
                $('.checkDescription').css("display", "none");
                $('.checkCurrency').text(currencyLocal[1]);
                $('.checkUnit').text('<?php echo $columnSettings[0]->unitName; ?>');
                $("html, body").animate({ scrollTop: '0px' }, "slow");
                editCalled = 0;
            });
            $('.PurchaseAddVisible').live('click', function(e) {
                $('.addPurchase').stop(true, true).fadeIn({ duration: 1500, queue: false }).css('display', 'none').slideDown(1500);    
                $("html, body").animate({ scrollTop: '0px' }, "slow");
            });
            $(".clickChart").click(function() {
                ++showChart;
                if(showChart == 2) {
                    showChart = 0;
                    $('.clickChart').html('<i class="fa fa-pie-chart"></i> Show Chart');
                } else {
                    $('.clickChart').html('<i class="fa fa-pie-chart"></i> Hide Chart');
                }
                $(".showChart").animate({
                    height: "toggle",
                    opacity: "toggle"
                }, "slow");
            });
            function addDays() {
                $('#pickDate').val(moment($('#invoiceDate').val(), "DD-MM-YYYY").add(purchaseTerms, 'days').format('DD-MM-YYYY'));
                var start = moment($('#invoiceDate').val(), "DD-MM-YYYY");
                var end   = moment($('#pickDate').val(), "DD-MM-YYYY");
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
                        $('#dateDifference').html('Within '+days+' days');
                    }                   
                }
            }
            addDays();
            $('#invoiceDate').on("change", function() {
                addDays();
            });
            jQuery(document).ready(function() {
                $(".showChart").hide();
                TableAdvanced.init();
                var table = $('#sample_1').DataTable();
                $('#tTable').on( 'click', function () {
                    swal("Sum of Engine Version in this Table", parseFloat(table.column( 5 ).data().sum()).toFixed(2));
                });          
                $('#cPage').on( 'click', function () {
                    swal("Sum of Engine Version in this Page", parseFloat(table.column( 5, {page:'current'} ).data().sum()).toFixed(2));
                });
                $(".productTable").on('focus', '.priceInput', function (e) {
                    if($(this).val() == "0.00") {
                        $(this).val("");
                    }
                });
                $(".productTable").on('blur', '.priceInput', function (e) {
                    if($(this).val() == "") {
                        $(this).val("0.00");
                    }
                });
                $("body").on('blur', '#currencyRate', function (e) {
                    if($(this).val() == "") {
                        $(this).val(rateCurrency);
                    }
                });
                $(".purchaseOption").select2({
                    theme: "bootstrap",
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                });                
                $(".productTable").on('change', '.purchaseOption', function (e) {  
                    var currencyCheck = $('input:radio[name=radio6]:checked').val();
                    if(editCalled != 1) {
                        var selectedId = $(this).val();
                        if ($.inArray(selectedId, productListLive) == -1) {
                            selectError = false;
                            productListLive = [];
                            $('[name="product[]"]').each(function() {
                                productListLive.push($(this).val());                            
                            });
                            $(this).closest('td').find('.select2-selection').removeClass('trueError');
                            $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                        } else {
                            selectError = true;                            
                            productListLive = [];
                            $('[name="product[]"]').each(function() {
                                productListLive.push($(this).val());                            
                            });
                            $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                            $(this).closest('td').find('.select2-selection').addClass('trueError');
                        }       
                        $.ajax({
                            url: base_link+'estimate/getProductInfo',
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
                                // $('#chatAudio')[0].play();
                            },
                            success: function (response) {
                                r = $.parseJSON(response);
                                $('.'+trRowId).closest('tr').find('.checkCode').val(r.code);
                                $('.'+trRowId).closest('tr').find('.checkDescription').text(r.description);
                                $('.'+trRowId).closest('tr').find('.descriptionInput').val(r.description);
                                $('.'+trRowId).closest('tr').find('.warrantySpan').css("display", "block");
                                $('.'+trRowId).closest('tr').find('.checkWarranty').text(r.warranty);
                                $('.'+trRowId).closest('tr').find('.warrantyInput').val(r.warranty);
                                if(r.unit != '') {
                                    $('.'+trRowId).closest('tr').find('.checkUnit').text(r.unit);
                                    $('.'+trRowId).closest('tr').find('.unitWeight').val(r.unit);
                                } else {
                                    $('.'+trRowId).closest('tr').find('.checkUnit').text(systemUnit);
                                    $('.'+trRowId).closest('tr').find('.unitWeight').val(systemUnit);
                                }
                                $('.'+trRowId).closest('tr').find('.productNameInput').val(r.name);
                                $('.'+trRowId).closest('tr').find('.unitInput').val(r.quantity);
                                if(r.lastTax == 0) {
                                    $('.'+trRowId).find('.selectizedTax').select2('val', '---');
                                } else{
                                    $('.'+trRowId).find('.selectizedTax').select2('val', r.lastTax);                                    
                                }
                                if(currencyCheck == "foreign") {
                                    var cRate = $('#currencyRate').val();
                                    // $('.'+trRowId).closest('tr').find('.pricePInput').val(parseFloat(r.lastSellingPrice/cRate).toPrecision(2));
                                } else {
                                    $('.'+trRowId).closest('tr').find('.pricePInput').val(r.lastSellingPrice);
                                }
                                $('.unitInput').trigger("keyup");
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
                });
                $(".selectizedTax").select2({
                    theme: "bootstrap",
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                });
                $(".productTable").on('change', '.selectizedTax', function (e) {
                    if(editCalled != 1) {
                        if($(this).val() != '---') {
                            $.ajax({
                                url: base_link+'settings/getTaxInfo',
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
                                    // $('#chatAudio')[0].play();
                                },
                                success: function (response) {
                                    r = $.parseJSON(response);
                                    $('.'+trRowId).closest('tr').find('.checkTax').val(r.rate);
                                    $('.'+trRowId).closest('tr').find('.taxNameInput').val(r.name);
                                    var u_qty = $('.'+trRowId).closest('tr').find('.unitInput').val();
                                    var u_price = $('.'+trRowId).closest('tr').find(".priceInput").val();
                                    //var u_tax = parseFloat($('.'+trRowId).closest('tr').find(".checkTax").val());
                                    var u_tax = parseFloat(r.rate);
                                    if( !isNaN( u_qty ) ) {
                                        var n_ltotal = u_qty*u_price;
                                        if(u_tax != 0) {
                                            u_tax = (n_ltotal*u_tax)/100;
                                        }
                                        n_ltotal = n_ltotal+u_tax;
                                        n_ltotal = parseFloat(n_ltotal).toFixed(2);
                                        $('.'+trRowId).closest('tr').find(".totalInput").val(n_ltotal);
                                        calculateTotal();
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
                        } else {
                            $('.'+trRowId).closest('tr').find('.checkTax').val(0);
                            $('.'+trRowId).closest('tr').find('.taxNameInput').val('Add Tax');
                            var u_qty = $('.'+trRowId).closest('tr').find('.unitInput').val();
                            var u_price = $('.'+trRowId).closest('tr').find(".priceInput").val();
                            //var u_tax = parseFloat($('.'+trRowId).closest('tr').find(".checkTax").val());
                            var u_tax = parseFloat(0);
                            if( !isNaN( u_qty ) ) {
                                var n_ltotal = u_qty*u_price;
                                if(u_tax != 0) {
                                    u_tax = (n_ltotal*u_tax)/100;
                                }
                                n_ltotal = n_ltotal+u_tax;
                                n_ltotal = parseFloat(n_ltotal).toFixed(2);
                                $('.'+trRowId).closest('tr').find(".totalInput").val(n_ltotal);
                                calculateTotal();
                            }
                        } 
                    }                        
                });
            });
            var counter = 1;
            function editData(id) {
                isEditNow = 1; editCalled = 1;
                $('.addPurchase').stop(true, true).fadeIn({ duration: 1500, queue: false }).css('display', 'none').slideDown(1500);    
                $("html, body").animate({ scrollTop: '0px' }, "slow");
                
                $('#purchaseSave').attr('id', 'purchaseUpdate');
                $('#purchaseUpdate').html('<i class="fa fa-save"></i> Update');
                $('#purchaseSaveNew').attr('id', 'purchaseUpdateNew');
                $('#purchaseUpdateNew').html('<i class="fa fa-newspaper-o"></i> Update & New');
                $('#purchaseSavePrint').attr('id', 'purchaseUpdatePrint');
                $('#purchaseUpdatePrint').html('<i class="fa fa-print"></i> Update & Print');
                $('#purchaseEditId').val(id);
                $('#title').addClass('edited');
                $('#title').val($('#receipt'+id).closest('tr').find('td:eq(3) #title'+id).text().trim());
                customerSelect[0].selectize.setValue($('#receipt'+id).closest('tr').find('td:eq(3) #member'+id).text().trim(), true);
                $('.oldVendorInfo').slideDown('fast');
                $.post(base_link+"vendor/getVendor",{
                  id: $('#receipt'+id).closest('tr').find('td:eq(3) #member'+id).text().trim()
                },
                function(data, status){
                    r = $.parseJSON(data);
                    vendorName = r.response;
                    $('.nameOfContract').text(r.nameOfContact);
                    $('.companyAddress').text(r.address1);
                    $('.companyAddress1').text(r.address2);
                });
                $('#invoiceNo').val($('#receipt'+id).closest('tr').find('td:eq(3) #invoiceNo'+id).text().trim());
                $('#poOptional').val($('#receipt'+id).closest('tr').find('td:eq(3) #poOptional'+id).text().trim());
                $('#invoiceDate').val($('#receipt'+id).closest('tr').find('td:eq(3) #invoiceDate'+id).text().trim());
                $('#pickDate').val($('#receipt'+id).closest('tr').find('td:eq(3) #pickDate'+id).text().trim());
                var disAmnt = $('#receipt'+id).closest('tr').find('td:eq(3) #discountRate'+id).text().trim();
                var disTyp = $('#receipt'+id).closest('tr').find('td:eq(3) #discountType'+id).text().trim();
                var curTyp = $('#receipt'+id).closest('tr').find('td:eq(3) #currencyType'+id).text().trim();
                if(disAmnt != '0.00') {
                    $('.radioCheck').slideDown("slow");
                    $('#discountCheck').val($('#receipt'+id).closest('tr').find('td:eq(3) #discountRate'+id).text().trim());
                    if(disTyp == 'percent') {
                        discountType = 'percent';
                        $('#radio2').prop('checked', true);
                    } else {                        
                        discountType = 'amount';
                        $('#radio1').prop('checked', true);                       
                    }
                    $( "#discountCheck" ).trigger("change");
                }
                if(curTyp != 'local') {
                    $('.currencyRate').slideDown("slow");
                    $('#radio5').prop('checked', true);
                    $('#currencyRate').val($('#receipt'+id).closest('tr').find('td:eq(3) #currencyRate'+id).text().trim());
                    $('.checkCurrency').text(currencyForeign[1]);
                } else {
                    $('.checkCurrency').text(currencyLocal[1]);
                }
                $('.noteProduct').val($('#receipt'+id).closest('tr').find('td:eq(3) #note'+id).text().trim());
                $('.remarkProduct').addClass('edited');
                $('.remarkProduct').val($('#receipt'+id).closest('tr').find('td:eq(2) #remarks'+id).text().trim());
                $('#purchaseEditId').val(id);
                $('#purchasefiles').val($('#receipt'+id).closest('tr').find('td:eq(3) #attachFile'+id).text().trim());
                var fileAll = $('#receipt'+id).closest('tr').find('td:eq(3) #attachFile'+id).text().trim().split("::");
                if(fileAll != '') {
                    counterUpload = (fileAll.length);
                    if(counterUpload > 0) {
                        $('.fileList').css("display", "block");
                    }
                }
                for (var i = 0; i< fileAll.length; i++) {
                    var fileExt = fileAll[i].split(".");
                    var liHtml =  '<li id="attachFileLive'+fileExt[0]+'" class="dd-item dd3-item has-sub ui-sortable-handle">'+
                                  '<div class="dd3-content">'+
                                      '<a href="<?php echo base_url(); ?>assets/uploadedFile/files/'+fileAll[i]+'" target="_blank">Attached '+fileExt[1]+' File</a>'+
                                      '<i class="deleteFileIcon fa fa-remove" onclick="removeFile(\''+fileAll[i]+'\', \'attachFileLive'+fileExt[0]+'\')"></i>'+
                                  '</div>'+
                                '</li>';
                    $(liHtml).insertBefore(".removeAll"); 
                    if(counterUpload > 1) {
                        $('.removeAll').css("display", "block");
                        $('.downloadAll').css("display", "block");
                    }
                }

                var dataAll = $('#receipt'+id).closest('tr').find('td:eq(3) #allData'+id).text();
                var dataArr = dataAll.split('::');
                //$('#tiggerClick').trigger("click");
                var j = 0; 
                for (var i = 0; i < (dataArr.length-1); i++) {
                    addBlankLine();
                    returnAccess();
                }
                var productsIds = '';
                for (var i = 0; i < dataArr.length; i++) {
                    // var l = 0; var m = 0;              
                    var splitData = dataArr[i].split('*');
                    $('.item'+i).closest('tr').find('.checkCode').val(splitData[0]);
                    $('.item'+i).closest('tr').find('.unitInput').val(splitData[2]);
                    $('.item'+i).closest('tr').find('.pricePInput').val(splitData[3]);
                    $('.item'+i).closest('tr').find('.checkTax').val(splitData[5]);
                    $('.warrantySpan').css("display", "block");
                    $('.item'+i).closest('tr').find('.totalInput').val(splitData[6]);
                    $('.item'+i).closest('tr').find('.checkWarranty').text(splitData[7]);
                    $('.item'+i).closest('tr').find('.warrantyInput').val(splitData[7]);
                    $('.item'+i).closest('tr').find('.checkDescription').text(splitData[8]);
                    $('.item'+i).closest('tr').find('.descriptionInput').val(splitData[8]);
                    $('.item'+i).closest('tr').find('.unitWeight').val(splitData[11]);
                    $('.item'+i).closest('tr').find('.checkUnit').text(splitData[11]);

                    $('.item'+i).find('.purchaseOption').select2('val', splitData[1]);
                    productListLive.push(splitData[1]);
                    if(splitData[4] != '') {
                        $('.item'+i).find('.selectizedTax').select2('val', splitData[4]);
                    } else {
                        $('.item'+i).find('.selectizedTax').select2('val', 0);
                    }
                }
                $('#purchaseDueAmount').val($('#receipt'+id).closest('tr').find('td:eq(3) #cStatus'+id).text().trim());
                var start = moment($('#invoiceDate').val(), "DD-MM-YYYY");
                var end   = moment($('#pickDate').val(), "DD-MM-YYYY");
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
                        $('#dateDifference').html('Within '+days+' days');
                    }                   
                }
                calculateTotal();
                editCalled = 0;
            }
            function duplicateData(id) {
                isEditNow = 1; editCalled = 1;
                $('.addPurchase').stop(true, true).fadeIn({ duration: 1500, queue: false }).css('display', 'none').slideDown(1500);    
                $("html, body").animate({ scrollTop: '0px' }, "slow");

                $('#title').val($('#receipt'+id).closest('tr').find('td:eq(3) #title'+id).text().trim());
                customerSelect[0].selectize.setValue($('#receipt'+id).closest('tr').find('td:eq(3) #member'+id).text().trim(), true);
                $('.oldVendorInfo').slideDown('fast');
                $.post(base_link+"vendor/getVendor",{
                  id: $('#receipt'+id).closest('tr').find('td:eq(3) #member'+id).text().trim()
                },
                function(data, status){
                    r = $.parseJSON(data);
                    vendorName = r.response;
                    $('.nameOfContract').text(r.nameOfContact);
                    $('.companyAddress').text(r.address1);
                    $('.companyAddress1').text(r.address2);
                });
                $('#invoiceNo').val($('#receipt'+id).closest('tr').find('td:eq(3) #invoiceNo'+id).text().trim());
                $('#poOptional').val($('#receipt'+id).closest('tr').find('td:eq(3) #poOptional'+id).text().trim());
                $('#invoiceDate').val($('#receipt'+id).closest('tr').find('td:eq(3) #invoiceDate'+id).text().trim());
                $('#pickDate').val($('#receipt'+id).closest('tr').find('td:eq(3) #pickDate'+id).text().trim());
                var disAmnt = $('#receipt'+id).closest('tr').find('td:eq(3) #discountRate'+id).text().trim();
                var disTyp = $('#receipt'+id).closest('tr').find('td:eq(3) #discountType'+id).text().trim();
                var curTyp = $('#receipt'+id).closest('tr').find('td:eq(3) #currencyType'+id).text().trim();
                if(disAmnt != '0.00') {
                    $('.radioCheck').slideDown("slow");
                    $('#discountCheck').val($('#receipt'+id).closest('tr').find('td:eq(3) #discountRate'+id).text().trim());
                    if(disTyp == 'percent') {
                        discountType = 'percent';
                        $('#radio2').prop('checked', true);
                    } else {                        
                        discountType = 'amount';
                        $('#radio1').prop('checked', true);                       
                    }
                    $( "#discountCheck" ).trigger("change");
                }
                if(curTyp != 'local') {
                    $('.currencyRate').slideDown("slow");
                    $('#radio5').prop('checked', true);
                    $('#currencyRate').val($('#receipt'+id).closest('tr').find('td:eq(3) #currencyRate'+id).text().trim());
                    $('.checkCurrency').text(currencyForeign[1]);
                } else {
                    $('.checkCurrency').text(currencyLocal[1]);
                }
                $('.noteProduct').val($('#receipt'+id).closest('tr').find('td:eq(3) #note'+id).text().trim());
                $('.remarkProduct').addClass('edited');
                $('.remarkProduct').val($('#receipt'+id).closest('tr').find('td:eq(2) #remarks'+id).text().trim());
                $('#purchaseEditId').val(id);
                $('#purchasefiles').val($('#receipt'+id).closest('tr').find('td:eq(3) #attachFile'+id).text().trim());
                var fileAll = $('#receipt'+id).closest('tr').find('td:eq(3) #attachFile'+id).text().trim().split("::");
                if(fileAll != '') {
                    counterUpload = (fileAll.length);
                    if(counterUpload > 0) {
                        $('.fileList').css("display", "block");
                    }
                }
                for (var i = 0; i< fileAll.length; i++) {
                    var fileExt = fileAll[i].split(".");
                    var liHtml =  '<li id="attachFileLive'+fileExt[0]+'" class="dd-item dd3-item has-sub ui-sortable-handle">'+
                                  '<div class="dd3-content">'+
                                      '<a href="<?php echo base_url(); ?>assets/uploadedFile/files/'+fileAll[i]+'" target="_blank">Attached '+fileExt[1]+' File</a>'+
                                      '<i class="deleteFileIcon fa fa-remove" onclick="removeFile(\''+fileAll[i]+'\', \'attachFileLive'+fileExt[0]+'\')"></i>'+
                                  '</div>'+
                                '</li>';
                    $(liHtml).insertBefore(".removeAll"); 
                    if(counterUpload > 1) {
                        $('.removeAll').css("display", "block");
                        $('.downloadAll').css("display", "block");
                    }
                }

                var dataAll = $('#receipt'+id).closest('tr').find('td:eq(3) #allData'+id).text();
                var dataArr = dataAll.split('::');
                //$('#tiggerClick').trigger("click");
                var j = 0; 
                for (var i = 0; i < (dataArr.length-1); i++) {
                    addBlankLine();
                    returnAccess();
                }
                var productsIds = '';
                for (var i = 0; i < dataArr.length; i++) {
                    // var l = 0; var m = 0;              
                    var splitData = dataArr[i].split('*');
                    $('.item'+i).closest('tr').find('.checkCode').val(splitData[0]);
                    $('.item'+i).closest('tr').find('.unitInput').val(splitData[2]);
                    $('.item'+i).closest('tr').find('.pricePInput').val(splitData[3]);
                    $('.item'+i).closest('tr').find('.checkTax').val(splitData[5]);
                    $('.warrantySpan').css("display", "block");
                    $('.item'+i).closest('tr').find('.totalInput').val(splitData[6]);
                    $('.item'+i).closest('tr').find('.checkWarranty').text(splitData[7]);
                    $('.item'+i).closest('tr').find('.warrantyInput').val(splitData[7]);
                    $('.item'+i).closest('tr').find('.checkDescription').text(splitData[8]);
                    $('.item'+i).closest('tr').find('.descriptionInput').val(splitData[8]);
                    $('.item'+i).closest('tr').find('.unitWeight').val(splitData[11]);
                    $('.item'+i).closest('tr').find('.checkUnit').text(splitData[11]);

                    $('.item'+i).find('.purchaseOption').select2('val', splitData[1]);
                    productListLive.push(splitData[1]);
                    if(splitData[4] != '') {
                        $('.item'+i).find('.selectizedTax').select2('val', splitData[4]);
                    } else {
                        $('.item'+i).find('.selectizedTax').select2('val', 0);
                    }
                }
                $('#purchaseDueAmount').val($('#receipt'+id).closest('tr').find('td:eq(3) #duePurchase'+id).text().trim());
                var start = moment($('#invoiceDate').val(), "DD-MM-YYYY");
                var end   = moment($('#pickDate').val(), "DD-MM-YYYY");
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
                        $('#dateDifference').html('Within '+days+' days');
                    }                   
                }
                calculateTotal();
                editCalled = 0;
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
                    var table = $('#sample_1').DataTable();
                    if (isConfirm) {
                        var activeTd =  '<li id="active'+id+'">'+
                                            '<a onclick="activeData(\''+id+'\')"><i class="fa fa-recycle" style="color: green;"></i><span> Active</span></a>'+
                                        '</li>';
                        $(activeTd).insertAfter('#print'+id);
                        $('#receipt'+id).closest('tr').find('td:eq(1) #edit'+id).remove();
                        $('#receipt'+id).closest('tr').find('td:eq(1) #duplicate'+id).remove();
                        $('#receipt'+id).closest('tr').find('td:eq(1) #delete'+id).remove();
                        // $('#receipt'+id).closest('tr').find('td:eq(1) #return'+id).remove();
                        var remarks = $('#receipt'+id).closest('tr').find('td:eq(6)').html();
                        var rowIndex = $('#sample_11').dataTable().fnAddData( 
                            [ 
                                '<span class="row-details row-details-close"></span>',
                                $('#receipt'+id).closest('tr').find('td:eq(1)').html(),
                                table.row('#receipt'+id).data()[2],
                                table.row('#receipt'+id).data()[3],
                                table.row('#receipt'+id).data()[4],
                                table.row('#receipt'+id).data()[5],
                                table.row('#receipt'+id).data()[6],
                                table.row('#receipt'+id).data()[7],
                                table.row('#receipt'+id).data()[8],
                                table.row('#receipt'+id).data()[9],
                                remarks
                            ]
                        );
                        var row = $('#sample_11').dataTable().fnGetNodes(rowIndex);
                        $(row).attr('id', 'receipt'+id);
                        $('#sample_11 tr td:last-child').css('display', 'none');
                                      
                        $.ajax({
                            type: 'post',
                            url: base_link + "estimate/productStatus",
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
                                            $("#receipt"+id).slideUp("normal", function() { $(this).remove(); });
                                            toastr.error(" You successfully archive estimate ", "Archive Estimate");
                                        }, 1500);
                                        swal({
                                            title: "Archive!",
                                            text: "This estimate has been archived.",
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
                                        data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=archive'+ '&title=estimate'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=settings',
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
                    var table = $('#sample_11').DataTable();
                    if (isConfirm) {
                        var editTd      =  '<li id="edit'+id+'">'+
                                                '<a onclick="editData(\''+id+'\')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span> Edit</span></a>'+
                                            '</li>';
                        var duplicateTd    =  '<li id="duplicate'+id+'">'+
                                                '<a onclick="duplicateData(\''+id+'\')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span> Archive</span></a>'+
                                            '</li>';
                        var deleteTd    =  '<li id="delete'+id+'">'+
                                                '<a onclick="deleteData(\''+id+'\')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span> Archive</span></a>'+
                                            '</li>';
                        // var returnTd    =  '<li id="return'+id+'">'+
                        //                         '<a onclick="returnData(\''+id+'\')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span> Archive</span></a>'+
                        //                     '</li>';
                        $(editTd).insertAfter('#view'+id);
                        $(duplicateTd).insertAfter('#edit'+id);
                        $(deleteTd).insertAfter('#duplicate'+id);
                        // $(returnTd).insertAfter('#print'+id);
                        $('#receipt'+id).closest('tr').find('td:eq(1) #active'+id).remove();
                        var remarks = $('#receipt'+id).closest('tr').find('td:eq(6)').html();                        
                        var rowIndex = $('#sample_1').dataTable().fnAddData( 
                            [ 
                                '<span class="row-details row-details-close"></span>',
                                $('#receipt'+id).closest('tr').find('td:eq(1)').html(),
                                table.row('#receipt'+id).data()[2],
                                table.row('#receipt'+id).data()[3],
                                table.row('#receipt'+id).data()[4],
                                table.row('#receipt'+id).data()[5],
                                table.row('#receipt'+id).data()[6],
                                table.row('#receipt'+id).data()[7],
                                table.row('#receipt'+id).data()[8],
                                table.row('#receipt'+id).data()[9],
                                remarks
                            ]
                        );
                        var row = $('#sample_1').dataTable().fnGetNodes(rowIndex);
                        $(row).attr('id', 'receipt'+id);
                        $('#sample_1 tr td:last-child').css('display', 'none');
                          
                        $.ajax({
                            type: 'post',
                            url: base_link + "estimate/productStatus",
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
                                            $("#sample_11 #receipt"+id).slideUp("normal", function() { $(this).remove(); });
                                            toastr.success(" You successfully active estimate ", "Active Estimate");
                                        }, 1500);
                                        swal({
                                            title: "Activate!",
                                            text: "This estimate has been activate.",
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
                                        data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=active'+ '&title=estimate'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=settings',
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
            function convert(id) {
                $.ajax({
                    url: base_link+'estimate/updateType',
                    type: 'POST',
                    data: 'editId='+id,
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
                                    toastr.success(" You successfully converted estimate ", "Convert Estimate");
                                }, 1000);
                                window.open(base_link+'invoice/viewInvoice/'+id, '_blank');
                            }, 500);
                            var activityId = activityListId();
                            var acType = "fa-plus";
                            var acLabel = "label-success";
                            $.ajax({
                                url: base_link+'recent_activity/add_activity/',
                                data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=estimate'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=estimate/viewEstimate/'+id,
                                type: "POST",
								dataType: 'json',
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
                               $("#sample_1 #receipt"+id).slideUp("normal", function() { $(this).remove(); });
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
            function returnAccess() {                
                $(".purchaseOption").select2({
                    theme: "bootstrap",
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }                   
                });
                $(".selectizedTax").select2({
                    theme: "bootstrap",
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                });
            }
            // trigger function in the begining 
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
                $(".uiSortableList").sortable({ 
                    opacity: 0.5, cursor: 'move', update: function() {
                    var order = $(this).sortable("serialize") + '&action=update';                         
                    }
                });
            });
            var rowCount = $('.ui-sortable tr').length;
            var trRowId = '';
            function trRow(argument) {
                trRowId = argument;
            }   
            var optionAddedValue = '';
            var customerSelect = $('.customer').selectize({
                placeholder: "Select or Add Customer",
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
                onChange: function (value) {
                    var res = '';
                    var OrText = '';
                    var nameId = '';
                    var idName = '';                    
                    if(value != '' && !isNaN(value)) {                        
                        $.ajax({
                            url: base_link+'vendor/getVendor',
                            type: 'POST',
                            data: 'id='+value,
                            async: false,
                            beforeSend: function() {
                                $('#overlay').css('display', 'block');
                                setLoadingImage();
                            },
                            complete: function() {
                                $('#overlay').css('display', 'none');
                                $('#loadingSpinner').remove();
                                // $('#chatAudio')[0].play();
                            },
                            success: function (response) { 
                                r = $.parseJSON(response);
                                res = r.response;
                                $('.oldVendorInfo').slideDown('fast');
                                $('.new-customer-data').slideUp('fast');
                                vendorName = r.response;
                                $('.nameOfContract').text(r.nameOfContact);
                                $('.companyAddress').text(r.address1);
                                $('.companyAddress1').text(r.address2);
                                OrText = res.replace(/ /g,'');
                                if(res.length > 4) {
                                    nameId = OrText.substring(0, 4);
                                    idName = nameId.toUpperCase();
                                } else {
                                    idName = OrText.toUpperCase(); 
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
                        $.ajax({
                            url: base_link+'estimate/memeberCount',
                            type: 'POST',
                            data: 'id='+value,
                            async: false,
                            beforeSend: function() {
                                $('#overlay').css('display', 'block');
                                setLoadingImage();
                            },
                            complete: function() {
                                $('#overlay').css('display', 'none');
                                $('#loadingSpinner').remove();
                                // $('#chatAudio')[0].play();
                            },
                            success: function (response) { 
                                r = $.parseJSON(response);
                                if(r.count < 10) {
                                    $('#invoiceNo').val(idName+"-"+"00000"+(++r.count));
                                } else if(r.count < 100) {
                                    $('#invoiceNo').val(idName+"-"+"0000"+(++r.count));                
                                } else if(r.count < 1000) {
                                    $('#invoiceNo').val(idName+"-"+"000"+(++r.count));                
                                } else if(r.count < 10000) {
                                    $('#invoiceNo').val(idName+"-"+"00"+(++r.count));                
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
                },
                onOptionAdd: function(option){
                    optionAddedValue = option;
                    addedCustomerNames.push(option);
                    $('.new-customer-data').slideDown('fast');
                    $('.oldVendorInfo').slideUp('fast');
                    $('#unbilledNotice').html('');
                    $('input[name=new_customer]').val('1');

                    var suggestedPurchaseNumber = option.replace(/\W/g, '').toUpperCase().substring(0,4) + '-00001';
                    $('#invoiceNo').val(suggestedPurchaseNumber);

                },
                onItemAdd: function(item){
                    if(addedCustomerNames.indexOf(item) > -1){
                        $('.new-customer-data').slideDown('fast');
                        $('.oldVendorInfo').slideUp('fast');
                        $('input[name=new_customer]').val('1');
                    }

                }
            });            
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
                        $('#dateDifference').html('Within '+days+' days');
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
                
                lastLineItem.find('.purchaseOption').select2('destroy'); 
                lastLineItem.find('.selectizedTax').select2('destroy');  
                newLineItem = lastLineItem.clone().attr('data-line-id', newLineId );
                newLineItem.insertAfter( lastLineItem );  
                returnAccess();           
                // lastLineItem.find('.purchaseOption').select2();    
                // attachProductSelect2(newLineItem);       
                // lastLineItem.find('.selectizedTax').select2();    
                // attachTaxSelect2(newLineItem);
                $('.productTable tr:last-child').removeClass('item'+(newLineId-1));
                $('.productTable tr:last-child').addClass('item'+newLineId);
                $('.productTable tr:last-child').removeAttr("onmouseover");
                $('.productTable tr:last-child').attr("onmouseover", "trRow('item"+newLineId+"')");
                $('.knownSortable tr').each(function(idx){
                    $(this).children().first().html(idx + 1);
                });
                $('.item'+newLineId).closest('tr').find('.warrantySpan').css("display", "none");
                $('.item'+newLineId).closest('tr').find('.checkDescription').text("");
                $('.item'+newLineId).closest('tr').find('.checkCode').val("");
                $('.item'+newLineId).closest('tr').find('.pricePInput').val("0.00");
                $('.item'+newLineId).closest('tr').find('.totalInput').val("0.00");
                $('.item'+newLineId).closest('tr').find('.checkTax').val("0");
                $('.item'+newLineId).closest('tr').find('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                calculateTotal();
                return newLineItem;
            }
            $("#discountCheck").click(function(){
                //$(".radioCheck").show("fast");
                $(".radioCheck").slideDown('slow');
                if($("#discountCheck").val() != '') {
                    if($('input:radio[name=radio2]:checked').val() == "percent"){
                        discountType = 'percent';
                        discountRate = $('#discountCheck').val();
                        $('.checkSymbol').html('<b>('+discountRate+'%)</b>');
                        var subTotal = parseFloat($('.subtotal').html());
                        if(subTotal == 0) {
                            $('.discountAmount').html("0.00");
                        } else {
                            $('.discountAmount').html('-'+ parseFloat((subTotal*discountRate)/100).toFixed(2));
                        }
                    } else {
                        $('.checkSymbol').html('');
                        discountType = 'amount';
                        discountRate = $('#discountCheck').val();
                        $('.discountAmount').html('-'+ parseFloat(discountRate).toFixed(2));
                    }
                } else {
                    $('.checkSymbol').html('<b>(%)</b>');
                }
                //$(".radioCheck").show("slide", { direction: "right" }, 3000);
            });
            $('#pickDate').click(function () {
                var dateRange = '<div class="ranges">'+
                    '<ul>'+
                        '<li onClick="dateAdd(\'0\')">Due upon product</li>'+
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
                    $('#dateDifference').html('Within 60 Days');
                } else if(date == 30) {
                    prepend = 1;
                    $('#pickDate').val(moment($('#invoiceDate').val(), "DD-MM-YYYY").add(1, 'month').format('DD-MM-YYYY'));
                    $('#dateDifference').slideDown('slow');
                    $('#dateDifference').removeClass('hasError');
                    $('#dateDifference').html('Within 30 Days');
                } else if(date == 15) {
                    prepend = 1;
                    $('#pickDate').val(moment($('#invoiceDate').val(), "DD-MM-YYYY").add(15, 'days').format('DD-MM-YYYY'));
                    $('#dateDifference').slideDown('slow');
                    $('#dateDifference').removeClass('hasError');
                    $('#dateDifference').html('Within 15 Days');
                } else if(date == 7) {
                    prepend = 1;
                    $('#pickDate').val(moment($('#invoiceDate').val(), "DD-MM-YYYY").add(7, 'days').format('DD-MM-YYYY'));
                    $('#dateDifference').slideDown('slow');
                    $('#dateDifference').removeClass('hasError');
                    $('#dateDifference').html('Within 7 Days');
                } else if (date == 3) {
                    prepend = 1;
                    $('#pickDate').val(moment($('#invoiceDate').val(), "DD-MM-YYYY").add(3, 'days').format('DD-MM-YYYY'));
                    $('#dateDifference').slideDown('slow');
                    $('#dateDifference').removeClass('hasError');
                    $('#dateDifference').html('Within 3 Days');
                } else {
                    prepend = 1;
                    $('#pickDate').val(moment($('#invoiceDate').val(), "DD-MM-YYYY").format('DD-MM-YYYY'));
                    $('#dateDifference').slideDown('slow');
                    $('#dateDifference').removeClass('hasError');
                    $('#dateDifference').html('Within 0 Days');
                }
            }
            $(function() {
                $(".ui-sortable").sortable({ 
                    opacity: 0.5, cursor: 'move', update: function() {
                    var order = $(this).sortable("serialize") + '&action=update'; 
                    $('.knownSortable tr').each(function(idx){
                        $(this).children().first().html(idx + 1);
                    });
                    }
                });
            });
            $("input[name='radio11']").click(function(){
                if($('input:radio[name=radio11]:checked').val() == "archive"){                    
                    $(".PurchaseList").css('display', 'none'); 
                    $(".PurchaseListArchive").css('display', 'block');
                    $('#radio11').prop('checked', true);
                } else {
                    $(".PurchaseList").css('display', 'block'); 
                    $(".PurchaseListArchive").css('display', 'none');
                }
            });
            $("input[name='radio12']").click(function(){
                if($('input:radio[name=radio12]:checked').val() == "active"){
                    $(".PurchaseList").css('display', 'block'); 
                    $(".PurchaseListArchive").css('display', 'none');
                    $('#radio14').prop('checked', true);
                } else {                  
                    $(".PurchaseList").css('display', 'none'); 
                    $(".PurchaseListArchive").css('display', 'block');
                }
            });
            $("input[name='radio6']").click(function(){
                if($('input:radio[name=radio6]:checked').val() == "foreign") {
                    $('.currencyRate').slideDown('slow');
                    $('.checkCurrency').text(currencyForeign[1]);
                } else {
                    $('#currencyRate').val('<?php echo $basicSettings[0]->foreignCurrencyRate; ?>');
                    $('.currencyRate').slideUp('slow');
                    $('.checkCurrency').text(currencyLocal[1]);
                }
            });  
            $("input[name='radio2']").click(function(){
                if($('input:radio[name=radio2]:checked').val() == "percent"){
                    discountType = 'percent';
                    discountRate = $('#discountCheck').val();
                    $('.checkSymbol').html('<b>('+discountRate+'%)</b>');
                    var subTotal = parseFloat($('.subtotal').html());
                    if(subTotal == 0) {
                        $('.discountAmount').html(" 0.00");
                    } else {
                        $('.discountAmount').html('- '+ parseFloat((subTotal*discountRate)/100).toFixed(2));
                    }
                } else {
                    $('.checkSymbol').html('');
                    discountType = 'amount';
                    discountRate = $('#discountCheck').val();
                    if(discountRate != '') {
                        $('.discountAmount').html('- '+ parseFloat(discountRate).toFixed(2));
                    } else {
                        $('.discountAmount').html('- 0.00');
                    }
                }
                calculateTotal();
            });  
            $("#discountCheck").on('change keypress keyup', function (e) { 
                if($('input:radio[name=radio2]:checked').val() == "percent"){
                    discountType = 'percent';
                    discountRate = $('#discountCheck').val();
                    $('.checkSymbol').html('<b>('+discountRate+'%)</b>');
                    var subTotal = parseFloat($('.subtotal').html());
                    if(subTotal == 0) {
                        $('.discountAmount').html(" 0.00");
                    } else {
                        $('.discountAmount').html('- '+ parseFloat((subTotal*discountRate)/100).toFixed(2));
                    }
                } else {
                    $('.checkSymbol').html('');
                    discountType = 'amount';
                    discountRate = $('#discountCheck').val();
                    if(discountRate != '') {
                        $('.discountAmount').html('- '+ parseFloat(discountRate).toFixed(2));
                    } else {
                        $('.discountAmount').html('- 0.00');
                    }
                }                
                calculateTotal();
            });

            //$("#").on('', function(){ });
            $(".noteProduct").keyup(function() {
                var existNote = $('.noteProduct').val();
                if(existNote == '') {
                    $(".saveDefault").css("display", "block");
                } else {
                    if(existNote.toLowerCase() === notePurchase.toLowerCase()) {
                        $(".saveDefault").css("display", "none");
                    } else {
                        $(".saveDefault").css("display", "block");
                    }
                }
            });
            $(".productTable").on('keyup', '.unitInput', function (e) {
                var u_qty = $(this).val();
                //var u_price = $(this).closest('tr').find(".item_price").val().replace(',', '.');
                var u_price = $(this).closest('tr').find(".priceInput").val();
                var u_tax = parseFloat($(this).closest('tr').find(".checkTax").val());
                if( !isNaN( u_qty ) ) {
                    var n_ltotal = u_qty*u_price;
                    if(u_tax != 0) {
                        u_tax = (n_ltotal*u_tax)/100;
                    }
                    n_ltotal = n_ltotal+u_tax;
                    n_ltotal = parseFloat(n_ltotal).toFixed(2);
                    $(this).closest('tr').find(".totalInput").val(n_ltotal);
                    calculateTotal();
                }
            });
            $(".productTable").on('keyup', '.priceInput', function (e) {
                $('.unitInput').trigger("keyup");
            });      
            function calculateTotal() {
                var sum = 0;
                $(".productTable").find('.totalInput').each(function( index, elem ) {
                    var val = parseFloat($(elem).val());
                    if( !isNaN( val ) ) {
                        sum += val;
                    }
                });
                $(".subtotal").html(sum.toFixed(2));
                if(discountType == "percent") {
                    var discount = (sum*discountRate)/100;
                    $('.discountAmount').html('- '+parseFloat(discount).toFixed(2));
                    $('.pTotal').html(parseFloat((sum-discount)).toFixed(2));
                    $("#purchaseTotal").val($('.pTotal').text());
                } else {
                    if(discountRate != '') {
                        $('.discountAmount').html('- '+parseFloat(discountRate).toFixed(2));
                        $('.pTotal').html(parseFloat((sum-discountRate)).toFixed(2));
                        $("#purchaseTotal").val($('.pTotal').text());
                    } 
                }
            }
            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test( $email );
            }
            $('#purchaseSave').live('click', function(e) {
                var error = false;
                var title = $('#title').val();
                var vendor = $('.customer').val();
                var invoiceNo = $('#invoiceNo').val();
                var discountCheck = $('#discountCheck').val();
                var currencyCheck = $('input:radio[name=radio6]:checked').val();
                var new_customer = $('.new_customer').val();
                var remarks = $('.remarkProduct').val();

                if (title != '') {
                    $('#titleDiv').addClass('has-success');
                    $('#titleDiv').removeClass('has-warning');
                } else {
                    $('#titleDiv').removeClass('has-success');
                    $('#titleDiv').addClass('has-warning');
                }
                if (remarks != '' && remarks != 'undefined') {
                    $('#remarkDiv').addClass('has-success');
                    $('#titleDiv').removeClass('has-warning');
                } else {
                    $('#remarkDiv').removeClass('has-success');
                    $('#remarkDiv').addClass('has-warning');
                }
                if ($('#poOptional').val() != '') {
                    $('#poOptionalDiv').addClass('has-success');
                    $('#poOptionalDiv').removeClass('has-warning');
                } else {
                    $('#poOptionalDiv').removeClass('has-success');
                    $('#poOptionalDiv').addClass('has-warning');
                }
                if (vendor != '') {
                    $('.invoice-estimate-customer').addClass('has-success');
                    $('.invoice-estimate-customer').removeClass('has-errorr');
                } else {
                    $('.invoice-estimate-customer').removeClass('has-success');
                    $('.invoice-estimate-customer').addClass('has-errorr');
                    error = true;
                }
                if (invoiceNo != '') {
                    $('#invoiceNoDiv').addClass('has-success');
                    $('#invoiceNoDiv').removeClass('has-errorr');
                } else {
                    $('#invoiceNoDiv').removeClass('has-success');
                    $('#invoiceNoDiv').addClass('has-errorr');
                    error = true;
                }                
                var dateFormat = "DD-MM-YYYY";
                var datePick = moment($('#pickDate').val(), dateFormat, true).isValid();
                
                if (datePick) {
                    $('.pickDate').addClass('has-success');
                    $('.invoiceDate').addClass('has-success');
                    $('.pickDate').removeClass('has-error');
                } else {
                    $('.pickDate').removeClass('has-success');
                    $('.pickDate').addClass('has-error');
                    error = true;
                }
                if (discountCheck != '') {
                    $('#discountCheckDiv').addClass('has-success');
                    $('#discountCheckDiv').removeClass('has-warning');
                } else {
                    $('#discountCheckDiv').removeClass('has-success');
                    $('#discountCheckDiv').addClass('has-warning');
                }
                var totalRate = 0;
                if(currencyCheck == "foreign") {
                    if($('#currencyRate').val() != '') {
                        $('#currencyRateDiv').addClass('has-success');
                        $('#currencyRateDiv').removeClass('has-error');
                        totalRate = '<a class="tooltipC">'+
                                        '<span> '+currencyForeign[1]+" "+$("#purchaseTotal").val()+' </span>'+
                                        '<span class="sTooltip"><strong>'+currencyLocal[1]+" "+parseFloat(parseFloat($("#purchaseTotal").val())*parseFloat($('#currencyRate').val())).toFixed(2)+'</strong></span>'+
                                    '</a>';
                    } else {
                        $('#currencyRateDiv').removeClass('has-success');
                        $('#currencyRateDiv').addClass('has-error');
                        error = true;
                    }
                } else {
                    totalRate = currencyLocal[1]+" "+$("#purchaseTotal").val();
                }
                if(new_customer != '') {
                    if($('#customer_email').val() != '') {
                        $('#customer_emailDiv').addClass('has-success');
                        $('#customer_emailDiv').removeClass('has-error');
                    } else {
                        $('#customer_emailDiv').removeClass('has-success');
                        $('#customer_emailDiv').addClass('has-error');
                        error = true;
                    }
                    if($('#new_customer_address_1').val() != '') {
                        $('#new_customer_address_1Div').addClass('has-success');
                        $('#new_customer_address_1Div').removeClass('has-error');
                    } else {
                        $('#new_customer_address_1Div').removeClass('has-success');
                        $('#new_customer_address_1Div').addClass('has-error');
                        error = true;
                    }
                    var userValue = $('#customer_email').val();
                    if(!validateEmail(userValue)) {
                        $('#customer_emailDiv').removeClass('has-success');
                        $('#customer_emailDiv').addClass('has-error');
                        error = true;
                    } else {
                        $.post(base_link+"customer/live_email", {
                            email: userValue
                        }, function(response){
                            if(response == 'exist') {                        
                                $('#customer_emailDiv').removeClass('has-success');
                                $('#customer_emailDiv').addClass('has-error');
                                error = true;
                            } else {                        
                                $('#customer_emailDiv').removeClass('has-error');
                                $('#customer_emailDiv').addClass('has-success');
                            }
                        });
                    }
                }

                var type = '<span class="label label-sm" style="background: #3598DC"> Draft </span>';

                var checkCode = []; var checkCodeI = 0;
                $(".checkCode").each(function() {
                    if(($(this).val()) != '') {
                        checkCode[checkCodeI++] = $(this).val();
                        $(this).closest('.checkCodeDiv').addClass('has-success');
                        $(this).closest('.checkCodeDiv').removeClass('has-warning');                        
                    } else {
                        checkCode[checkCodeI++] = $(this).val();
                        $(this).closest('.checkCodeDiv').removeClass('has-success');
                        $(this).closest('.checkCodeDiv').addClass('has-warning');
                    }
                });

                var productC = []; var productI = 0;
                $('[name="product[]"]').each(function() {
                    if($(this).val() == '---') {
                        productC[productI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                        $(this).closest('td').find('.select2-selection').addClass('trueError');
                        error = true;                      
                    } else {
                        productC[productI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').removeClass('trueError');
                        $(this).closest('td').find('.select2-selection').addClass('trueSuccess');
                    }
                });

                var unitInput = []; var unitInputI = 0;
                $(".unitInput").each(function() {
                    if(($(this).val()) != '') {
                        unitInput[unitInputI++] = $(this).val();
                        $(this).closest('.unitInputDiv').addClass('has-success');
                        $(this).closest('.unitInputDiv').removeClass('has-error');                        
                    } else {
                        unitInput[unitInputI++] = $(this).val();
                        $(this).closest('.unitInputDiv').removeClass('has-success');
                        $(this).closest('.unitInputDiv').addClass('has-error');
                        error = true;
                    }
                });

                var pricePInput = []; var pricePInputI = 0;
                $(".pricePInput").each(function() {
                    if(($(this).val()) != '') {
                        pricePInput[pricePInputI++] = $(this).val();
                        $(this).closest('.priceInputDiv').addClass('has-success');
                        $(this).closest('.priceInputDiv').removeClass('has-error');                        
                    } else {
                        pricePInput[pricePInputI++] = $(this).val();
                        $(this).closest('.priceInputDiv').removeClass('has-success');
                        $(this).closest('.priceInputDiv').addClass('has-error');
                        error = true;
                    }
                });

                var tax = []; var taxI = 0;
                $('[name="tax[]"]').each(function() {
                    if($(this).val() == '---') {
                        tax[taxI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                        $(this).closest('td').find('.select2-selection').addClass('trueWarning');
                    } else {
                        tax[taxI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').addClass('trueWarning');
                        $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                    }
                });

                var taxVat = []; var taxVatI = 0;
                $('[name="taxVat[]"]').each(function() {
                    taxVat[taxVatI++] = $(this).val();
                });

                var totalInput = []; var totalInputI = 0;
                $('[name="totalInput[]"]').each(function() {
                    totalInput[totalInputI++] = $(this).val();
                });

                var warrantyInput = []; var warrantyInputI = 0;
                $('[name="warrantyInput[]"]').each(function() {
                    warrantyInput[warrantyInputI++] = $(this).val();
                });

                var descriptionInput = []; var descriptionInputI = 0;
                $('[name="descriptionInput[]"]').each(function() {
                    descriptionInput[descriptionInputI++] = $(this).val();
                });

                var productNameInput = []; var productNameInputI = 0;
                $('[name="productNameInput[]"]').each(function() {
                    productNameInput[productNameInputI++] = $(this).val();
                });

                var taxNameInput = []; var taxNameInputI = 0;
                $('[name="taxNameInput[]"]').each(function() {
                    taxNameInput[taxNameInputI++] = $(this).val();
                });

                var unitWeight = []; var unitWeightI = 0;
                $('[name="unitWeight[]"]').each(function() {
                    unitWeight[unitWeightI++] = $(this).val();
                });

                var allData = '';
                for (var i = 0; i < checkCode.length; i++) {
                    allData += checkCode[i]+"*"+productC[i]+"*"+unitInput[i]+"*"+pricePInput[i]+"*"+tax[i]+"*"+taxVat[i]+"*"+totalInput[i]+"*"+warrantyInput[i]+"*"+descriptionInput[i]+"*"+productNameInput[i]+"*"+taxNameInput[i]+"*"+unitWeight[i]+"::";
                }

                allData = allData.replace(/(^::)|(::$)/g, "");
                
                if(!error) {
                    $.ajax({
                        url: base_link+'estimate/addProduct',
                        type: 'POST',
                        data: $('#addProduct').serialize(),
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
                                        toastr.success(" You successfully added new estimate ", "Add Estimate");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=estimate'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=estimate/viewEstimate/'+totalPurchase,
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
                                if(new_customer == 1) {
                                    var control = customerSelect[0].selectize;
                                    control.removeOption(optionAddedValue);
                                    control.addOption({
                                        value: r.customer,
                                        text: optionAddedValue+' - '+$('#customer_email').val()
                                    });
                                }
                                setTimeout(function(){
                                    $('#sample_1').dataTable().fnAddData( 
                                        [ 
                                            '<span class="row-details row-details-close"></span>',
                                            '<div class="btn-group" style="margin: -5px">'+
                                                '<button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage'+
                                                    '<i class="fa fa-angle-down"></i>'+
                                                '</button>'+
                                                '<ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">'+
                                                    '<li id="view"'+totalPurchase+'>'+
                                                        '<a href="'+base_link+'estimate/viewEstimate/'+totalPurchase+'"><i class="fa fa-search" style="color: #26C281;"></i><span>View</span></a>'+
                                                    '</li>'+                                                    
                                                    '<li>'+
                                                        '<a href="'+base_link+'estimate/viewEstimate/'+totalPurchase+'/history" class="liveLink"><i class="fa fa-history" style="color: gray;"></i><span>History</span></a>'+
                                                    '</li>'+
                                                    '<li id="convert"'+totalPurchase+'">'+
                                                        '<a onclick="convert('+totalPurchase+')" href="javascript:;" class="liveLink"><i class="fa fa-rotate-left" style="color: #26C281;"></i><span>Make Invoice</span></a>'+
                                                    '</li>'+
                                                    '<li id="edit"'+totalPurchase+'>'+
                                                        '<a onclick="editData('+totalPurchase+')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Return & Edit</span></a>'+
                                                    '</li>'+ 
                                                    '<li id="print"'+totalPurchase+'>'+
                                                        '<a href="'+base_link+'estimate/printEstimate/'+totalPurchase+'"><i class="fa fa-print" style="color: #000000;"></i><span>Print</span></a>'+
                                                    '</li>'+
                                                    '<li id="delete"'+totalPurchase+'>'+
                                                        '<a onclick="deleteData('+totalPurchase+')" href="javascript:;"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>'+
                                                    '</li>'+
                                                '</ul>'+
                                            '</div>',
                                            type,
                                            '<span id="date'+totalPurchase+'">'+$("#invoiceDate").val()+'</span>'+
                                            '<span id="title'+totalPurchase+'" style="display:none;">'+$("#title").val()+'</span>'+
                                            '<span id="member'+totalPurchase+'" style="display:none;">'+r.customer+'</span>'+
                                            '<span id="invoiceNo'+totalPurchase+'" style="display:none;">'+$("#invoiceNo").val()+'</span>'+
                                            '<span id="poOptional'+totalPurchase+'" style="display:none;">'+$("#poOptional").val()+'</span>'+
                                            '<span id="invoiceDate'+totalPurchase+'" style="display:none;">'+$("#invoiceDate").val()+'</span>'+
                                            '<span id="pickDate'+totalPurchase+'" style="display:none;">'+$("#pickDate").val()+'</span>'+
                                            '<span id="discountType'+totalPurchase+'" style="display:none;">'+$('input[name="radio2"]:checked', '#addProduct').val()+'</span>'+
                                            '<span id="discountRate'+totalPurchase+'" style="display:none;">'+$("#discountCheck").val()+'</span>'+
                                            '<span id="currencyType'+totalPurchase+'" style="display:none;">'+$('input[name="radio6"]:checked', '#addProduct').val()+'</span>'+
                                            '<span id="note'+totalPurchase+'" style="display:none;">'+$(".noteProduct").val()+'</span>'+
                                            '<span id="currencyRate'+totalPurchase+'" style="display:none;">'+$("#currencyRate").val()+'</span>'+
                                            '<span id="allData'+totalPurchase+'" style="display:none;">'+allData+'</span>'+
                                            '<span id="cStatus'+totalPurchase+'" style="display:none;">1</span>',
                                            $("#pickDate").val(),
                                            totalRate,
                                            vendorName,
                                            $("#invoiceNo").val(),
                                            userNameFull,
                                            getDateTime,
                                            '<div class="col-md-12 col-sm-12 hiddenComment'+totalPurchase+'">'+
                                                '<div class="portlet">'+
                                                    '<div class="portlet-body">                                                                          '+
                                                        '<div class="ibox float-e-margins ui-sortable">'+
                                                            '<div style="position: static;" class="ibox-content">'+
                                                                '<div id="sysfrm_ajaxrender">'+
                                                                    '<section class="activity-post mb-xlg">'+
                                                                        '<form id="commentForm'+totalPurchase+'">'+
                                                                            '<textarea name="messageText'+totalPurchase+'" onkeyup="getValueComment(this.value, '+totalPurchase+');" id="messageText'+totalPurchase+'" class="msg messageText'+totalPurchase+'" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>'+
                                                                            '<input id="hiddenMessage'+totalPurchase+'" class="hiddenMessage'+totalPurchase+'" name="hiddenMessage'+totalPurchase+'" value="" type="hidden">'+
                                                                            '<input id="activityType'+totalPurchase+'" name="activityType'+totalPurchase+'" value="" type="hidden">'+
                                                                            '<input id="activityId" name="activityId" value="'+totalPurchase+'" type="hidden">'+
                                                                            '<input id="commentType'+totalPurchase+'" name="commentType'+totalPurchase+'" value="estimate" type="hidden">'+
                                                                            '<input id="commentCode'+totalPurchase+'" name="commentCode'+totalPurchase+'" value="" type="hidden">'+
                                                                            '<input id="commentId'+totalPurchase+'" name="commentId'+totalPurchase+'" value="" type="hidden">'+
                                                                            '<input id="commentProcess'+totalPurchase+'" name="commentProcess'+totalPurchase+'" value="0" type="hidden">'+
                                                                        '</form>'+
                                                                        '<div class="compose-box-footer">'+
                                                                            '<ul class="compose-toolbar">'+
                                                                                '<li onClick="iconChange(\'fa-hourglass\', '+totalPurchase+');" class="clickable fa-hourglass'+totalPurchase+'"><a><i class="fa fa-hourglass"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-hourglass-start\', '+totalPurchase+');" class="clickable fa-hourglass-start'+totalPurchase+'"><a><i class="fa fa-hourglass-start"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-hourglass-o\', '+totalPurchase+');" class="clickable fa-hourglass-o'+totalPurchase+'"><a><i class="fa fa-hourglass-o"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-balance-scale\', '+totalPurchase+');" class="clickable fa-balance-scale'+totalPurchase+'"><a><i class="fa fa-balance-scale"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-adjust\', '+totalPurchase+');" class="clickable fa-adjust'+totalPurchase+'"><a><i class="fa fa-adjust"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-certificate\', '+totalPurchase+');" class="clickable fa-certificate'+totalPurchase+'"><a><i class="fa fa-certificate"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-check\', '+totalPurchase+');" class="clickable fa-check'+totalPurchase+'"><a><i class="fa fa-check"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-times\', '+totalPurchase+');" class="clickable fa-times'+totalPurchase+'"><a><i class="fa fa-times"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-exchange\', '+totalPurchase+');" class="clickable fa-exchange'+totalPurchase+'"><a><i class="fa fa-exchange"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-cog\', '+totalPurchase+');" class="clickable fa-cog'+totalPurchase+'"><a><i class="fa fa-cog"></i></a></li>'+
                                                                            '</ul>'+
                                                                            '<ul class="compose-btn">'+
                                                                                '<li>'+
                                                                                    '<a class="save'+totalPurchase+' btn btn-success btn-xs" onClick="commentProcess(\'sample_1\', '+totalPurchase+')"><i class="fa fa-edit"></i> Add Note</a>'+
                                                                                '</li>'+
                                                                                '<li>'+
                                                                                    '<a class="cancle'+totalPurchase+' btn btn-warning btn-xs" onClick="clickCancle('+totalPurchase+')" style="display: none"><i class="fa fa-times"></i> Cancle</a>'+
                                                                                '</li>'+
                                                                            '</ul>'+
                                                                        '</div>'+
                                                                    '</section>'+
                                                                    '<div style="margin-top:20px !important;" class="mt-lg"> </div>'+
                                                                        '<div id="all_timeline_div" class="all_timeline_div'+totalPurchase+'" data-always-visible="1" data-rail-visible1="1">'+
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
                                    $('#sample_1 tbody tr:first').attr('id');
                                    $('#sample_1 tbody tr:first').attr('id','receipt'+totalPurchase);
                                    $('#sample_1 tr td:last-child').css('display', 'none');
                                    $('.addPurchase').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                                    $('#addProduct').trigger("reset");
                                    $("html, body").animate({ scrollTop: '0px' }, "slow");
                                    editCalled = 1;
                                    $('#addProduct')[0].reset();
                                    $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                                    $('.noteProduct').addClass("edited");
                                    $('.oldVendorInfo').slideUp("slow");
                                    $("#dateDifference").slideUp("slow");
                                    $(".radioCheck").slideUp("slow");
                                    $('.currencyRate').slideUp("slow");
                                    $('.productTable').find("tr:gt(1)").remove();
                                    $('#radio1').prop('checked', false);
                                    $('#radio2').prop('checked', true);
                                    $('#radio5').prop('checked', false);
                                    $('#radio6').prop('checked', true);
                                    var control = customerSelect[0].selectize;
                                    control.clear(true);
                                    $('.purchaseOption').select2('val', '---');
                                    $('.selectizedTax').select2('val', '---');
                                    $('.warrantySpan').css("display", "none");
                                    $('.checkDescription').css("display", "none");
                                    $('.checkCurrency').text(currencyLocal[1]);
                                    editCalled = 0;
                                    purchaseListId(); 
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
            $('#purchaseSaveNew').live('click', function(e) {
                var error = false;
                var title = $('#title').val();
                var vendor = $('.customer').val();
                var invoiceNo = $('#invoiceNo').val();
                var discountCheck = $('#discountCheck').val();
                var currencyCheck = $('input:radio[name=radio6]:checked').val();
                var new_customer = $('.new_customer').val();
                var remarks = $('.remarkProduct').val();

                if (title != '') {
                    $('#titleDiv').addClass('has-success');
                    $('#titleDiv').removeClass('has-warning');
                } else {
                    $('#titleDiv').removeClass('has-success');
                    $('#titleDiv').addClass('has-warning');
                }
                if (remarks != '' && remarks != 'undefined') {
                    $('#remarkDiv').addClass('has-success');
                    $('#titleDiv').removeClass('has-warning');
                } else {
                    $('#remarkDiv').removeClass('has-success');
                    $('#remarkDiv').addClass('has-warning');
                }
                if ($('#poOptional').val() != '') {
                    $('#poOptionalDiv').addClass('has-success');
                    $('#poOptionalDiv').removeClass('has-warning');
                } else {
                    $('#poOptionalDiv').removeClass('has-success');
                    $('#poOptionalDiv').addClass('has-warning');
                }
                if (vendor != '') {
                    $('.invoice-estimate-customer').addClass('has-success');
                    $('.invoice-estimate-customer').removeClass('has-errorr');
                } else {
                    $('.invoice-estimate-customer').removeClass('has-success');
                    $('.invoice-estimate-customer').addClass('has-errorr');
                    error = true;
                }
                if (invoiceNo != '') {
                    $('#invoiceNoDiv').addClass('has-success');
                    $('#invoiceNoDiv').removeClass('has-errorr');
                } else {
                    $('#invoiceNoDiv').removeClass('has-success');
                    $('#invoiceNoDiv').addClass('has-errorr');
                    error = true;
                }                
                var dateFormat = "DD-MM-YYYY";
                var datePick = moment($('#pickDate').val(), dateFormat, true).isValid();
                
                if (datePick) {
                    $('.pickDate').addClass('has-success');
                    $('.invoiceDate').addClass('has-success');
                    $('.pickDate').removeClass('has-error');
                } else {
                    $('.pickDate').removeClass('has-success');
                    $('.pickDate').addClass('has-error');
                    error = true;
                }
                if (discountCheck != '') {
                    $('#discountCheckDiv').addClass('has-success');
                    $('#discountCheckDiv').removeClass('has-warning');
                } else {
                    $('#discountCheckDiv').removeClass('has-success');
                    $('#discountCheckDiv').addClass('has-warning');
                }
                var totalRate = 0;
                if(currencyCheck == "foreign") {
                    if($('#currencyRate').val() != '') {
                        $('#currencyRateDiv').addClass('has-success');
                        $('#currencyRateDiv').removeClass('has-error');
                        totalRate = '<a class="tooltipC">'+
                                        '<span> '+currencyForeign[1]+" "+$("#purchaseTotal").val()+' </span>'+
                                        '<span class="sTooltip"><strong>'+currencyLocal[1]+" "+parseFloat(parseFloat($("#purchaseTotal").val())*parseFloat($('#currencyRate').val())).toFixed(2)+'</strong></span>'+
                                    '</a>';
                    } else {
                        $('#currencyRateDiv').removeClass('has-success');
                        $('#currencyRateDiv').addClass('has-error');
                        error = true;
                    }
                } else {
                    totalRate = currencyLocal[1]+" "+$("#purchaseTotal").val();
                }
                if(new_customer != '') {
                    if($('#customer_email').val() != '') {
                        $('#customer_emailDiv').addClass('has-success');
                        $('#customer_emailDiv').removeClass('has-error');
                    } else {
                        $('#customer_emailDiv').removeClass('has-success');
                        $('#customer_emailDiv').addClass('has-error');
                        error = true;
                    }
                    if($('#new_customer_address_1').val() != '') {
                        $('#new_customer_address_1Div').addClass('has-success');
                        $('#new_customer_address_1Div').removeClass('has-error');
                    } else {
                        $('#new_customer_address_1Div').removeClass('has-success');
                        $('#new_customer_address_1Div').addClass('has-error');
                        error = true;
                    }
                    var userValue = $('#customer_email').val();
                    if(!validateEmail(userValue)) {
                        $('#customer_emailDiv').removeClass('has-success');
                        $('#customer_emailDiv').addClass('has-error');
                        error = true;
                    } else {
                        $.post(base_link+"customer/live_email", {
                            email: userValue
                        }, function(response){
                            if(response == 'exist') {                        
                                $('#customer_emailDiv').removeClass('has-success');
                                $('#customer_emailDiv').addClass('has-error');
                                error = true;
                            } else {                        
                                $('#customer_emailDiv').removeClass('has-error');
                                $('#customer_emailDiv').addClass('has-success');
                            }
                        });
                    }
                }

                var type = '<span class="label label-sm" style="background: #3598DC"> Draft </span>';

                var checkCode = []; var checkCodeI = 0;
                $(".checkCode").each(function() {
                    if(($(this).val()) != '') {
                        checkCode[checkCodeI++] = $(this).val();
                        $(this).closest('.checkCodeDiv').addClass('has-success');
                        $(this).closest('.checkCodeDiv').removeClass('has-warning');                        
                    } else {
                        checkCode[checkCodeI++] = $(this).val();
                        $(this).closest('.checkCodeDiv').removeClass('has-success');
                        $(this).closest('.checkCodeDiv').addClass('has-warning');
                    }
                });

                var productC = []; var productI = 0;
                $('[name="product[]"]').each(function() {
                    if($(this).val() == '---') {
                        productC[productI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                        $(this).closest('td').find('.select2-selection').addClass('trueError');
                        error = true;                      
                    } else {
                        productC[productI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').removeClass('trueError');
                        $(this).closest('td').find('.select2-selection').addClass('trueSuccess');
                    }
                });

                var unitInput = []; var unitInputI = 0;
                $(".unitInput").each(function() {
                    if(($(this).val()) != '') {
                        unitInput[unitInputI++] = $(this).val();
                        $(this).closest('.unitInputDiv').addClass('has-success');
                        $(this).closest('.unitInputDiv').removeClass('has-error');                        
                    } else {
                        unitInput[unitInputI++] = $(this).val();
                        $(this).closest('.unitInputDiv').removeClass('has-success');
                        $(this).closest('.unitInputDiv').addClass('has-error');
                        error = true;
                    }
                });

                var pricePInput = []; var pricePInputI = 0;
                $(".pricePInput").each(function() {
                    if(($(this).val()) != '') {
                        pricePInput[pricePInputI++] = $(this).val();
                        $(this).closest('.priceInputDiv').addClass('has-success');
                        $(this).closest('.priceInputDiv').removeClass('has-error');                        
                    } else {
                        pricePInput[pricePInputI++] = $(this).val();
                        $(this).closest('.priceInputDiv').removeClass('has-success');
                        $(this).closest('.priceInputDiv').addClass('has-error');
                        error = true;
                    }
                });

                var tax = []; var taxI = 0;
                $('[name="tax[]"]').each(function() {
                    if($(this).val() == '---') {
                        tax[taxI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                        $(this).closest('td').find('.select2-selection').addClass('trueWarning');
                    } else {
                        tax[taxI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').addClass('trueWarning');
                        $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                    }
                });

                var taxVat = []; var taxVatI = 0;
                $('[name="taxVat[]"]').each(function() {
                    taxVat[taxVatI++] = $(this).val();
                });

                var totalInput = []; var totalInputI = 0;
                $('[name="totalInput[]"]').each(function() {
                    totalInput[totalInputI++] = $(this).val();
                });

                var warrantyInput = []; var warrantyInputI = 0;
                $('[name="warrantyInput[]"]').each(function() {
                    warrantyInput[warrantyInputI++] = $(this).val();
                });

                var descriptionInput = []; var descriptionInputI = 0;
                $('[name="descriptionInput[]"]').each(function() {
                    descriptionInput[descriptionInputI++] = $(this).val();
                });

                var productNameInput = []; var productNameInputI = 0;
                $('[name="productNameInput[]"]').each(function() {
                    productNameInput[productNameInputI++] = $(this).val();
                });

                var taxNameInput = []; var taxNameInputI = 0;
                $('[name="taxNameInput[]"]').each(function() {
                    taxNameInput[taxNameInputI++] = $(this).val();
                });

                var unitWeight = []; var unitWeightI = 0;
                $('[name="unitWeight[]"]').each(function() {
                    unitWeight[unitWeightI++] = $(this).val();
                });

                var allData = '';
                for (var i = 0; i < checkCode.length; i++) {
                    allData += checkCode[i]+"*"+productC[i]+"*"+unitInput[i]+"*"+pricePInput[i]+"*"+tax[i]+"*"+taxVat[i]+"*"+totalInput[i]+"*"+warrantyInput[i]+"*"+descriptionInput[i]+"*"+productNameInput[i]+"*"+taxNameInput[i]+"*"+unitWeight[i]+"::";
                }

                allData = allData.replace(/(^::)|(::$)/g, "");
                
                if(!error) {
                    $.ajax({
                        url: base_link+'estimate/addProduct',
                        type: 'POST',
                        data: $('#addProduct').serialize(),
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
                                        toastr.success(" You successfully added new estimate ", "Add Estimate");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=estimate'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=estimate/viewEstimate/'+totalPurchase,
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
                                if(new_customer == 1) {
                                    var control = customerSelect[0].selectize;
                                    control.removeOption(optionAddedValue);
                                    control.addOption({
                                        value: r.customer,
                                        text: optionAddedValue+' - '+$('#customer_email').val()
                                    });
                                }
                                setTimeout(function(){
                                    $('#sample_1').dataTable().fnAddData( 
                                        [ 
                                            '<span class="row-details row-details-close"></span>',
                                            '<div class="btn-group" style="margin: -5px">'+
                                                '<button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage'+
                                                    '<i class="fa fa-angle-down"></i>'+
                                                '</button>'+
                                                '<ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">'+
                                                    '<li id="view"'+totalPurchase+'>'+
                                                        '<a href="'+base_link+'estimate/viewEstimate/'+totalPurchase+'"><i class="fa fa-search" style="color: #26C281;"></i><span>View</span></a>'+
                                                    '</li>'+                                                    
                                                    '<li>'+
                                                        '<a href="'+base_link+'estimate/viewEstimate/'+totalPurchase+'/history" class="liveLink"><i class="fa fa-history" style="color: gray;"></i><span>History</span></a>'+
                                                    '</li>'+
                                                    '<li id="convert"'+totalPurchase+'">'+
                                                        '<a onclick="convert('+totalPurchase+')" href="javascript:;" class="liveLink"><i class="fa fa-rotate-left" style="color: #26C281;"></i><span>Make Invoice</span></a>'+
                                                    '</li>'+
                                                    '<li id="edit"'+totalPurchase+'>'+
                                                        '<a onclick="editData('+totalPurchase+')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Return & Edit</span></a>'+
                                                    '</li>'+ 
                                                    '<li id="print"'+totalPurchase+'>'+
                                                        '<a href="'+base_link+'estimate/printEstimate/'+totalPurchase+'"><i class="fa fa-print" style="color: #000000;"></i><span>Print</span></a>'+
                                                    '</li>'+
                                                    '<li id="delete"'+totalPurchase+'>'+
                                                        '<a onclick="deleteData('+totalPurchase+')" href="javascript:;"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>'+
                                                    '</li>'+
                                                '</ul>'+
                                            '</div>',
                                            type,
                                            '<span id="date'+totalPurchase+'">'+$("#invoiceDate").val()+'</span>'+
                                            '<span id="title'+totalPurchase+'" style="display:none;">'+$("#title").val()+'</span>'+
                                            '<span id="member'+totalPurchase+'" style="display:none;">'+r.customer+'</span>'+
                                            '<span id="invoiceNo'+totalPurchase+'" style="display:none;">'+$("#invoiceNo").val()+'</span>'+
                                            '<span id="poOptional'+totalPurchase+'" style="display:none;">'+$("#poOptional").val()+'</span>'+
                                            '<span id="invoiceDate'+totalPurchase+'" style="display:none;">'+$("#invoiceDate").val()+'</span>'+
                                            '<span id="pickDate'+totalPurchase+'" style="display:none;">'+$("#pickDate").val()+'</span>'+
                                            '<span id="discountType'+totalPurchase+'" style="display:none;">'+$('input[name="radio2"]:checked', '#addProduct').val()+'</span>'+
                                            '<span id="discountRate'+totalPurchase+'" style="display:none;">'+$("#discountCheck").val()+'</span>'+
                                            '<span id="currencyType'+totalPurchase+'" style="display:none;">'+$('input[name="radio6"]:checked', '#addProduct').val()+'</span>'+
                                            '<span id="note'+totalPurchase+'" style="display:none;">'+$(".noteProduct").val()+'</span>'+
                                            '<span id="currencyRate'+totalPurchase+'" style="display:none;">'+$("#currencyRate").val()+'</span>'+
                                            '<span id="allData'+totalPurchase+'" style="display:none;">'+allData+'</span>'+
                                            '<span id="cStatus'+totalPurchase+'" style="display:none;">1</span>',
                                            $("#pickDate").val(),
                                            totalRate,
                                            vendorName,
                                            $("#invoiceNo").val(),
                                            userNameFull,
                                            getDateTime,
                                            '<div class="col-md-12 col-sm-12 hiddenComment'+totalPurchase+'">'+
                                                '<div class="portlet">'+
                                                    '<div class="portlet-body">                                                                          '+
                                                        '<div class="ibox float-e-margins ui-sortable">'+
                                                            '<div style="position: static;" class="ibox-content">'+
                                                                '<div id="sysfrm_ajaxrender">'+
                                                                    '<section class="activity-post mb-xlg">'+
                                                                        '<form id="commentForm'+totalPurchase+'">'+
                                                                            '<textarea name="messageText'+totalPurchase+'" onkeyup="getValueComment(this.value, '+totalPurchase+');" id="messageText'+totalPurchase+'" class="msg messageText'+totalPurchase+'" placeholder="Add a note..." rows="1" style="overflow: hidden; resize: none; height: 90px;"></textarea>'+
                                                                            '<input id="hiddenMessage'+totalPurchase+'" class="hiddenMessage'+totalPurchase+'" name="hiddenMessage'+totalPurchase+'" value="" type="hidden">'+
                                                                            '<input id="activityType'+totalPurchase+'" name="activityType'+totalPurchase+'" value="" type="hidden">'+
                                                                            '<input id="activityId" name="activityId" value="'+totalPurchase+'" type="hidden">'+
                                                                            '<input id="commentType'+totalPurchase+'" name="commentType'+totalPurchase+'" value="estimate" type="hidden">'+
                                                                            '<input id="commentCode'+totalPurchase+'" name="commentCode'+totalPurchase+'" value="" type="hidden">'+
                                                                            '<input id="commentId'+totalPurchase+'" name="commentId'+totalPurchase+'" value="" type="hidden">'+
                                                                            '<input id="commentProcess'+totalPurchase+'" name="commentProcess'+totalPurchase+'" value="0" type="hidden">'+
                                                                        '</form>'+
                                                                        '<div class="compose-box-footer">'+
                                                                            '<ul class="compose-toolbar">'+
                                                                                '<li onClick="iconChange(\'fa-hourglass\', '+totalPurchase+');" class="clickable fa-hourglass'+totalPurchase+'"><a><i class="fa fa-hourglass"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-hourglass-start\', '+totalPurchase+');" class="clickable fa-hourglass-start'+totalPurchase+'"><a><i class="fa fa-hourglass-start"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-hourglass-o\', '+totalPurchase+');" class="clickable fa-hourglass-o'+totalPurchase+'"><a><i class="fa fa-hourglass-o"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-balance-scale\', '+totalPurchase+');" class="clickable fa-balance-scale'+totalPurchase+'"><a><i class="fa fa-balance-scale"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-adjust\', '+totalPurchase+');" class="clickable fa-adjust'+totalPurchase+'"><a><i class="fa fa-adjust"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-certificate\', '+totalPurchase+');" class="clickable fa-certificate'+totalPurchase+'"><a><i class="fa fa-certificate"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-check\', '+totalPurchase+');" class="clickable fa-check'+totalPurchase+'"><a><i class="fa fa-check"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-times\', '+totalPurchase+');" class="clickable fa-times'+totalPurchase+'"><a><i class="fa fa-times"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-exchange\', '+totalPurchase+');" class="clickable fa-exchange'+totalPurchase+'"><a><i class="fa fa-exchange"></i></a></li>'+
                                                                                '<li onClick="iconChange(\'fa-cog\', '+totalPurchase+');" class="clickable fa-cog'+totalPurchase+'"><a><i class="fa fa-cog"></i></a></li>'+
                                                                            '</ul>'+
                                                                            '<ul class="compose-btn">'+
                                                                                '<li>'+
                                                                                    '<a class="save'+totalPurchase+' btn btn-success btn-xs" onClick="commentProcess(\'sample_1\', '+totalPurchase+')"><i class="fa fa-edit"></i> Add Note</a>'+
                                                                                '</li>'+
                                                                                '<li>'+
                                                                                    '<a class="cancle'+totalPurchase+' btn btn-warning btn-xs" onClick="clickCancle('+totalPurchase+')" style="display: none"><i class="fa fa-times"></i> Cancle</a>'+
                                                                                '</li>'+
                                                                            '</ul>'+
                                                                        '</div>'+
                                                                    '</section>'+
                                                                    '<div style="margin-top:20px !important;" class="mt-lg"> </div>'+
                                                                        '<div id="all_timeline_div" class="all_timeline_div'+totalPurchase+'" data-always-visible="1" data-rail-visible1="1">'+
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
                                    $('#sample_1 tbody tr:first').attr('id');
                                    $('#sample_1 tbody tr:first').attr('id','receipt'+totalPurchase);
                                    $('#sample_1 tr td:last-child').css('display', 'none');
                                    //$('.addPurchase').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                                    $('#addProduct').trigger("reset");
                                    $("html, body").animate({ scrollTop: '0px' }, "slow");
                                    editCalled = 1;
                                    $('#addProduct')[0].reset();
                                    $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                                    $('.noteProduct').addClass("edited");
                                    $('.oldVendorInfo').slideUp("slow");
                                    $("#dateDifference").slideUp("slow");
                                    $(".radioCheck").slideUp("slow");
                                    $('.currencyRate').slideUp("slow");
                                    $('.productTable').find("tr:gt(1)").remove();
                                    $('#radio1').prop('checked', false);
                                    $('#radio2').prop('checked', true);
                                    $('#radio5').prop('checked', false);
                                    $('#radio6').prop('checked', true);
                                    var control = customerSelect[0].selectize;
                                    control.clear(true);
                                    $('.purchaseOption').select2('val', '---');
                                    $('.selectizedTax').select2('val', '---');
                                    $('.warrantySpan').css("display", "none");
                                    $('.checkDescription').css("display", "none");
                                    $('.checkCurrency').text(currencyLocal[1]);
                                    editCalled = 0;
                                    purchaseListId(); 
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
            $('#purchaseUpdate').live('click', function(e) {
                var error = false;
                var title = $('#title').val();
                var vendor = $('.customer').val();
                var invoiceNo = $('#invoiceNo').val();
                var discountCheck = $('#discountCheck').val();
                var currencyCheck = $('input:radio[name=radio6]:checked').val();
                var new_customer = $('.new_customer').val();
                var purchaseCurrency = currencyLocal[1];
                var remarks = $('.remarkProduct').val();

                if (title != '') {
                    $('#titleDiv').addClass('has-success');
                    $('#titleDiv').removeClass('has-warning');
                } else {
                    $('#titleDiv').removeClass('has-success');
                    $('#titleDiv').addClass('has-warning');
                }
                if (remarks != '' && remarks != 'undefined') {
                    $('#remarkDiv').addClass('has-success');
                    $('#titleDiv').removeClass('has-warning');
                } else {
                    $('#remarkDiv').removeClass('has-success');
                    $('#remarkDiv').addClass('has-warning');
                }
                if ($('#poOptional').val() != '') {
                    $('#poOptionalDiv').addClass('has-success');
                    $('#poOptionalDiv').removeClass('has-warning');
                } else {
                    $('#poOptionalDiv').removeClass('has-success');
                    $('#poOptionalDiv').addClass('has-warning');
                }
                if (vendor != '') {
                    $('.invoice-estimate-customer').addClass('has-success');
                    $('.invoice-estimate-customer').removeClass('has-errorr');
                } else {
                    $('.invoice-estimate-customer').removeClass('has-success');
                    $('.invoice-estimate-customer').addClass('has-errorr');
                    error = true;
                }
                if (invoiceNo != '') {
                    $('#invoiceNoDiv').addClass('has-success');
                    $('#invoiceNoDiv').removeClass('has-errorr');
                } else {
                    $('#invoiceNoDiv').removeClass('has-success');
                    $('#invoiceNoDiv').addClass('has-errorr');
                    error = true;
                }                
                var dateFormat = "DD-MM-YYYY";
                var datePick = moment($('#pickDate').val(), dateFormat, true).isValid();
                
                if (datePick) {
                    $('.pickDate').addClass('has-success');
                    $('.invoiceDate').addClass('has-success');
                    $('.pickDate').removeClass('has-error');
                } else {
                    $('.pickDate').removeClass('has-success');
                    $('.pickDate').addClass('has-error');
                    error = true;
                }
                if (discountCheck != '') {
                    $('#discountCheckDiv').addClass('has-success');
                    $('#discountCheckDiv').removeClass('has-warning');
                } else {
                    $('#discountCheckDiv').removeClass('has-success');
                    $('#discountCheckDiv').addClass('has-warning');
                }
                var totalRate = 0;
                if(currencyCheck == "foreign") {
                    if($('#currencyRate').val() != '') {
                        $('#currencyRateDiv').addClass('has-success');
                        $('#currencyRateDiv').removeClass('has-error');
                        totalRate = '<a class="tooltipC">'+
                                        '<span> '+currencyForeign[1]+" "+$("#purchaseTotal").val()+' </span>'+
                                        '<span class="sTooltip"><strong>'+currencyLocal[1]+" "+parseFloat(parseFloat($("#purchaseTotal").val())*parseFloat($('#currencyRate').val())).toFixed(2)+'</strong></span>'+
                                    '</a>';
                    } else {
                        $('#currencyRateDiv').removeClass('has-success');
                        $('#currencyRateDiv').addClass('has-error');
                        error = true;
                    }
                } else {
                    totalRate = currencyLocal[1]+" "+$("#purchaseTotal").val();
                }
                if(new_customer != '') {
                    if($('#customer_email').val() != '') {
                        $('#customer_emailDiv').addClass('has-success');
                        $('#customer_emailDiv').removeClass('has-error');
                    } else {
                        $('#customer_emailDiv').removeClass('has-success');
                        $('#customer_emailDiv').addClass('has-error');
                        error = true;
                    }
                    if($('#new_customer_address_1').val() != '') {
                        $('#new_customer_address_1Div').addClass('has-success');
                        $('#new_customer_address_1Div').removeClass('has-error');
                    } else {
                        $('#new_customer_address_1Div').removeClass('has-success');
                        $('#new_customer_address_1Div').addClass('has-error');
                        error = true;
                    }
                    var userValue = $('#customer_email').val();
                    if(!validateEmail(userValue)) {
                        $('#customer_emailDiv').removeClass('has-success');
                        $('#customer_emailDiv').addClass('has-error');
                        error = true;
                    } else {
                        $.post(base_link+"customer/live_email", {
                            email: userValue
                        }, function(response){
                            if(response == 'exist') {                        
                                $('#customer_emailDiv').removeClass('has-success');
                                $('#customer_emailDiv').addClass('has-error');
                                error = true;
                            } else {                        
                                $('#customer_emailDiv').removeClass('has-error');
                                $('#customer_emailDiv').addClass('has-success');
                            }
                        });
                    }
                }

                var type = '<span class="label label-sm" style="background: #3598DC"> Draft </span>';
                if($('#purchaseDueAmount').val() == 2) {
                    type = '<span class="label label-sm label-success"> Sent </span>';
                } else if($('#purchaseDueAmount').val() == 3) {
                    type = '<span class="label label-sm label-warning"> Viewed </span>';
                } else if($('#purchaseDueAmount').val() == 4) {
                    type = '<span class="label label-sm" style="background: green"> Accepted </span>';
                } else if($('#purchaseDueAmount').val() == 4) {
                    type = '<span class="label label-sm" style="background: red"> Expire </span>';
                } else {
                    type = '<span class="label label-sm" style="background: #3598DC"> Draft </span>';
                }

                var checkCode = []; var checkCodeI = 0;
                $(".checkCode").each(function() {
                    if(($(this).val()) != '') {
                        checkCode[checkCodeI++] = $(this).val();
                        $(this).closest('.checkCodeDiv').addClass('has-success');
                        $(this).closest('.checkCodeDiv').removeClass('has-warning');                        
                    } else {
                        checkCode[checkCodeI++] = $(this).val();
                        $(this).closest('.checkCodeDiv').removeClass('has-success');
                        $(this).closest('.checkCodeDiv').addClass('has-warning');
                    }
                });

                var productC = []; var productI = 0;
                var selectedProduct = '';
                $('[name="product[]"]').each(function() {
                    if($(this).val() == '---') {
                        productC[productI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                        $(this).closest('td').find('.select2-selection').addClass('trueError');
                        error = true;                      
                    } else {
                        productC[productI++] = $(this).val();
                        selectedProduct += $(this).val()+"::";
                        $(this).closest('td').find('.select2-selection').removeClass('trueError');
                        $(this).closest('td').find('.select2-selection').addClass('trueSuccess');
                    }
                });
                $('#productsIds').val(selectedProduct);

                var unitInput = []; var unitInputI = 0;
                $(".unitInput").each(function() {
                    if(($(this).val()) != '') {
                        unitInput[unitInputI++] = $(this).val();
                        $(this).closest('.unitInputDiv').addClass('has-success');
                        $(this).closest('.unitInputDiv').removeClass('has-error');                        
                    } else {
                        unitInput[unitInputI++] = $(this).val();
                        $(this).closest('.unitInputDiv').removeClass('has-success');
                        $(this).closest('.unitInputDiv').addClass('has-error');
                        error = true;
                    }
                });

                var pricePInput = []; var pricePInputI = 0;
                $(".pricePInput").each(function() {
                    if(($(this).val()) != '') {
                        pricePInput[pricePInputI++] = $(this).val();
                        $(this).closest('.priceInputDiv').addClass('has-success');
                        $(this).closest('.priceInputDiv').removeClass('has-error');                        
                    } else {
                        pricePInput[pricePInputI++] = $(this).val();
                        $(this).closest('.priceInputDiv').removeClass('has-success');
                        $(this).closest('.priceInputDiv').addClass('has-error');
                        error = true;
                    }
                });

                var tax = []; var taxI = 0;
                $('[name="tax[]"]').each(function() {
                    if($(this).val() == '---') {
                        tax[taxI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                        $(this).closest('td').find('.select2-selection').addClass('trueWarning');
                    } else {
                        tax[taxI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').addClass('trueWarning');
                        $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                    }
                });

                var taxVat = []; var taxVatI = 0;
                $('[name="taxVat[]"]').each(function() {
                    taxVat[taxVatI++] = $(this).val();
                });

                var totalInput = []; var totalInputI = 0;
                $('[name="totalInput[]"]').each(function() {
                    totalInput[totalInputI++] = $(this).val();
                });

                var warrantyInput = []; var warrantyInputI = 0;
                $('[name="warrantyInput[]"]').each(function() {
                    warrantyInput[warrantyInputI++] = $(this).val();
                });

                var descriptionInput = []; var descriptionInputI = 0;
                $('[name="descriptionInput[]"]').each(function() {
                    descriptionInput[descriptionInputI++] = $(this).val();
                });

                var productNameInput = []; var productNameInputI = 0;
                $('[name="productNameInput[]"]').each(function() {
                    productNameInput[productNameInputI++] = $(this).val();
                });

                var taxNameInput = []; var taxNameInputI = 0;
                $('[name="taxNameInput[]"]').each(function() {
                    taxNameInput[taxNameInputI++] = $(this).val();
                });

                var unitWeight = []; var unitWeightI = 0;
                $('[name="unitWeight[]"]').each(function() {
                    unitWeight[unitWeightI++] = $(this).val();
                });

                var allData = '';
                for (var i = 0; i < checkCode.length; i++) {
                    allData += checkCode[i]+"*"+productC[i]+"*"+unitInput[i]+"*"+pricePInput[i]+"*"+tax[i]+"*"+taxVat[i]+"*"+totalInput[i]+"*"+warrantyInput[i]+"*"+descriptionInput[i]+"*"+productNameInput[i]+"*"+taxNameInput[i]+"*"+unitWeight[i]+"::";
                }

                allData = allData.replace(/(^::)|(::$)/g, "");
                var id = $('#purchaseEditId').val();
                if(!error) {
                    $.ajax({
                        url: base_link+'estimate/updateProduct',
                        type: 'POST',
                        data: $('#addProduct').serialize(),
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
                                        toastr.success(" You successfully updated estimate ", "Update Estimate");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=edit'+ '&title=estimate'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=estimate/viewEstimate/'+totalPurchase,
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
                                if(new_customer == 1) {
                                    var control = customerSelect[0].selectize;
                                    control.removeOption(optionAddedValue);
                                    control.addOption({
                                        value: r.customer,
                                        text: optionAddedValue+' - '+$('#customer_email').val()
                                    });
                                }
                                setTimeout(function(){
                                    $('#receipt'+id).closest('tr').find('td:eq(2)').html(type); 
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #date'+id).text($("#invoiceDate").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #title'+id).text($("#title").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #member'+id).text(r.customer);
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #invoiceNo'+id).text($("#invoiceNo").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #poOptional'+id).text($("#poOptional").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #invoiceDate'+id).text($("#invoiceDate").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #pickDate'+id).text($("#pickDate").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #discountType'+id).text($('input[name="radio2"]:checked', '#addProduct').val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #discountRate'+id).text($("#discountCheck").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #currencyType'+id).text($('input[name="radio6"]:checked', '#addProduct').val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #note'+id).text($(".noteProduct").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #currencyRate'+id).text($("#currencyRate").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #allData'+id).text(allData);
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #cStatus'+id).text($('#purchaseDueAmount').val());
                                    $('#receipt'+id).closest('tr').find('td:eq(4)').text($("#pickDate").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(5)').html(totalRate); 
                                    $('#receipt'+id).closest('tr').find('td:eq(6)').html(r.customer); 
                                    $('#receipt'+id).closest('tr').find('td:eq(7)').text($("#invoiceNo").val()); 
                                    $('#receipt'+id).closest('tr').find('td:eq(8)').text(userNameFull); 
                                    $('#productUpdate').attr('id', 'productSave');
                                    $('#productSave').html('<i class="fa fa-save"></i> Save');
                                    $('#productUpdateNew').attr('id', 'productSaveNew');
                                    $('#productSaveNew').html('<i class="fa fa-newspaper-o"></i> Save & New');
                                    $('#sample_1 tr td:last-child').css('display', 'none');
                                    $('.addPurchase').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                                    $('#addProduct').trigger("reset");
                                    $("html, body").animate({ scrollTop: '0px' }, "slow");
                                    editCalled = 1;
                                    $('#addProduct')[0].reset();
                                    $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                                    $('.noteProduct').addClass("edited");
                                    $('.oldVendorInfo').slideUp("slow");
                                    $("#dateDifference").slideUp("slow");
                                    $(".radioCheck").slideUp("slow");
                                    $('.currencyRate').slideUp("slow");
                                    $('.productTable').find("tr:gt(1)").remove();
                                    $('#radio1').prop('checked', false);
                                    $('#radio2').prop('checked', true);
                                    $('#radio5').prop('checked', false);
                                    $('#radio6').prop('checked', true);
                                    var control = customerSelect[0].selectize;
                                    control.clear(true);
                                    $('.purchaseOption').select2('val', '---');
                                    $('.selectizedTax').select2('val', '---');
                                    $('.warrantySpan').css("display", "none");
                                    $('.checkDescription').css("display", "none");
                                    $('.checkCurrency').text(currencyLocal[1]);
                                    editCalled = 0;
                                    purchaseListId(); 
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
            $('#purchaseUpdateNew').live('click', function(e) {
                var error = false;
                var title = $('#title').val();
                var vendor = $('.customer').val();
                var invoiceNo = $('#invoiceNo').val();
                var discountCheck = $('#discountCheck').val();
                var currencyCheck = $('input:radio[name=radio6]:checked').val();
                var new_customer = $('.new_customer').val();
                var purchaseCurrency = currencyLocal[1];
                var remarks = $('.remarkProduct').val();

                if (title != '') {
                    $('#titleDiv').addClass('has-success');
                    $('#titleDiv').removeClass('has-warning');
                } else {
                    $('#titleDiv').removeClass('has-success');
                    $('#titleDiv').addClass('has-warning');
                }
                if (remarks != '' && remarks != 'undefined') {
                    $('#remarkDiv').addClass('has-success');
                    $('#titleDiv').removeClass('has-warning');
                } else {
                    $('#remarkDiv').removeClass('has-success');
                    $('#remarkDiv').addClass('has-warning');
                }
                if ($('#poOptional').val() != '') {
                    $('#poOptionalDiv').addClass('has-success');
                    $('#poOptionalDiv').removeClass('has-warning');
                } else {
                    $('#poOptionalDiv').removeClass('has-success');
                    $('#poOptionalDiv').addClass('has-warning');
                }
                if (vendor != '') {
                    $('.invoice-estimate-customer').addClass('has-success');
                    $('.invoice-estimate-customer').removeClass('has-errorr');
                } else {
                    $('.invoice-estimate-customer').removeClass('has-success');
                    $('.invoice-estimate-customer').addClass('has-errorr');
                    error = true;
                }
                if (invoiceNo != '') {
                    $('#invoiceNoDiv').addClass('has-success');
                    $('#invoiceNoDiv').removeClass('has-errorr');
                } else {
                    $('#invoiceNoDiv').removeClass('has-success');
                    $('#invoiceNoDiv').addClass('has-errorr');
                    error = true;
                }                
                var dateFormat = "DD-MM-YYYY";
                var datePick = moment($('#pickDate').val(), dateFormat, true).isValid();
                
                if (datePick) {
                    $('.pickDate').addClass('has-success');
                    $('.invoiceDate').addClass('has-success');
                    $('.pickDate').removeClass('has-error');
                } else {
                    $('.pickDate').removeClass('has-success');
                    $('.pickDate').addClass('has-error');
                    error = true;
                }
                if (discountCheck != '') {
                    $('#discountCheckDiv').addClass('has-success');
                    $('#discountCheckDiv').removeClass('has-warning');
                } else {
                    $('#discountCheckDiv').removeClass('has-success');
                    $('#discountCheckDiv').addClass('has-warning');
                }
                var totalRate = 0;
                if(currencyCheck == "foreign") {
                    if($('#currencyRate').val() != '') {
                        $('#currencyRateDiv').addClass('has-success');
                        $('#currencyRateDiv').removeClass('has-error');
                        totalRate = '<a class="tooltipC">'+
                                        '<span> '+currencyForeign[1]+" "+$("#purchaseTotal").val()+' </span>'+
                                        '<span class="sTooltip"><strong>'+currencyLocal[1]+" "+parseFloat(parseFloat($("#purchaseTotal").val())*parseFloat($('#currencyRate').val())).toFixed(2)+'</strong></span>'+
                                    '</a>';
                    } else {
                        $('#currencyRateDiv').removeClass('has-success');
                        $('#currencyRateDiv').addClass('has-error');
                        error = true;
                    }
                } else {
                    totalRate = currencyLocal[1]+" "+$("#purchaseTotal").val();
                }
                if(new_customer != '') {
                    if($('#customer_email').val() != '') {
                        $('#customer_emailDiv').addClass('has-success');
                        $('#customer_emailDiv').removeClass('has-error');
                    } else {
                        $('#customer_emailDiv').removeClass('has-success');
                        $('#customer_emailDiv').addClass('has-error');
                        error = true;
                    }
                    if($('#new_customer_address_1').val() != '') {
                        $('#new_customer_address_1Div').addClass('has-success');
                        $('#new_customer_address_1Div').removeClass('has-error');
                    } else {
                        $('#new_customer_address_1Div').removeClass('has-success');
                        $('#new_customer_address_1Div').addClass('has-error');
                        error = true;
                    }
                    var userValue = $('#customer_email').val();
                    if(!validateEmail(userValue)) {
                        $('#customer_emailDiv').removeClass('has-success');
                        $('#customer_emailDiv').addClass('has-error');
                        error = true;
                    } else {
                        $.post(base_link+"customer/live_email", {
                            email: userValue
                        }, function(response){
                            if(response == 'exist') {                        
                                $('#customer_emailDiv').removeClass('has-success');
                                $('#customer_emailDiv').addClass('has-error');
                                error = true;
                            } else {                        
                                $('#customer_emailDiv').removeClass('has-error');
                                $('#customer_emailDiv').addClass('has-success');
                            }
                        });
                    }
                }

                var type = '<span class="label label-sm" style="background: #3598DC"> Draft </span>';
                if($('#purchaseDueAmount').val() == 2) {
                    type = '<span class="label label-sm label-success"> Sent </span>';
                } else if($('#purchaseDueAmount').val() == 3) {
                    type = '<span class="label label-sm label-warning"> Viewed </span>';
                } else if($('#purchaseDueAmount').val() == 4) {
                    type = '<span class="label label-sm" style="background: green"> Accepted </span>';
                } else if($('#purchaseDueAmount').val() == 4) {
                    type = '<span class="label label-sm" style="background: red"> Expire </span>';
                } else {
                    type = '<span class="label label-sm" style="background: #3598DC"> Draft </span>';
                }

                var checkCode = []; var checkCodeI = 0;
                $(".checkCode").each(function() {
                    if(($(this).val()) != '') {
                        checkCode[checkCodeI++] = $(this).val();
                        $(this).closest('.checkCodeDiv').addClass('has-success');
                        $(this).closest('.checkCodeDiv').removeClass('has-warning');                        
                    } else {
                        checkCode[checkCodeI++] = $(this).val();
                        $(this).closest('.checkCodeDiv').removeClass('has-success');
                        $(this).closest('.checkCodeDiv').addClass('has-warning');
                    }
                });

                var productC = []; var productI = 0;
                var selectedProduct = '';
                $('[name="product[]"]').each(function() {
                    if($(this).val() == '---') {
                        productC[productI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                        $(this).closest('td').find('.select2-selection').addClass('trueError');
                        error = true;                      
                    } else {
                        productC[productI++] = $(this).val();
                        selectedProduct += $(this).val()+"::";
                        $(this).closest('td').find('.select2-selection').removeClass('trueError');
                        $(this).closest('td').find('.select2-selection').addClass('trueSuccess');
                    }
                });
                $('#productsIds').val(selectedProduct);

                var unitInput = []; var unitInputI = 0;
                $(".unitInput").each(function() {
                    if(($(this).val()) != '') {
                        unitInput[unitInputI++] = $(this).val();
                        $(this).closest('.unitInputDiv').addClass('has-success');
                        $(this).closest('.unitInputDiv').removeClass('has-error');                        
                    } else {
                        unitInput[unitInputI++] = $(this).val();
                        $(this).closest('.unitInputDiv').removeClass('has-success');
                        $(this).closest('.unitInputDiv').addClass('has-error');
                        error = true;
                    }
                });

                var pricePInput = []; var pricePInputI = 0;
                $(".pricePInput").each(function() {
                    if(($(this).val()) != '') {
                        pricePInput[pricePInputI++] = $(this).val();
                        $(this).closest('.priceInputDiv').addClass('has-success');
                        $(this).closest('.priceInputDiv').removeClass('has-error');                        
                    } else {
                        pricePInput[pricePInputI++] = $(this).val();
                        $(this).closest('.priceInputDiv').removeClass('has-success');
                        $(this).closest('.priceInputDiv').addClass('has-error');
                        error = true;
                    }
                });

                var tax = []; var taxI = 0;
                $('[name="tax[]"]').each(function() {
                    if($(this).val() == '---') {
                        tax[taxI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                        $(this).closest('td').find('.select2-selection').addClass('trueWarning');
                    } else {
                        tax[taxI++] = $(this).val();
                        $(this).closest('td').find('.select2-selection').addClass('trueWarning');
                        $(this).closest('td').find('.select2-selection').removeClass('trueSuccess');
                    }
                });

                var taxVat = []; var taxVatI = 0;
                $('[name="taxVat[]"]').each(function() {
                    taxVat[taxVatI++] = $(this).val();
                });

                var totalInput = []; var totalInputI = 0;
                $('[name="totalInput[]"]').each(function() {
                    totalInput[totalInputI++] = $(this).val();
                });

                var warrantyInput = []; var warrantyInputI = 0;
                $('[name="warrantyInput[]"]').each(function() {
                    warrantyInput[warrantyInputI++] = $(this).val();
                });

                var descriptionInput = []; var descriptionInputI = 0;
                $('[name="descriptionInput[]"]').each(function() {
                    descriptionInput[descriptionInputI++] = $(this).val();
                });

                var productNameInput = []; var productNameInputI = 0;
                $('[name="productNameInput[]"]').each(function() {
                    productNameInput[productNameInputI++] = $(this).val();
                });

                var taxNameInput = []; var taxNameInputI = 0;
                $('[name="taxNameInput[]"]').each(function() {
                    taxNameInput[taxNameInputI++] = $(this).val();
                });

                var unitWeight = []; var unitWeightI = 0;
                $('[name="unitWeight[]"]').each(function() {
                    unitWeight[unitWeightI++] = $(this).val();
                });

                var allData = '';
                for (var i = 0; i < checkCode.length; i++) {
                    allData += checkCode[i]+"*"+productC[i]+"*"+unitInput[i]+"*"+pricePInput[i]+"*"+tax[i]+"*"+taxVat[i]+"*"+totalInput[i]+"*"+warrantyInput[i]+"*"+descriptionInput[i]+"*"+productNameInput[i]+"*"+taxNameInput[i]+"*"+unitWeight[i]+"::";
                }

                allData = allData.replace(/(^::)|(::$)/g, "");
                var id = $('#purchaseEditId').val();
                if(!error) {
                    $.ajax({
                        url: base_link+'estimate/updateProduct',
                        type: 'POST',
                        data: $('#addProduct').serialize(),
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
                                        toastr.success(" You successfully updated estimate ", "Update Estimate");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=edit'+ '&title=estimate'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=estimate/viewEstimate/'+totalPurchase,
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
                                if(new_customer == 1) {
                                    var control = customerSelect[0].selectize;
                                    control.removeOption(optionAddedValue);
                                    control.addOption({
                                        value: r.customer,
                                        text: optionAddedValue+' - '+$('#customer_email').val()
                                    });
                                }
                                setTimeout(function(){
                                    $('#receipt'+id).closest('tr').find('td:eq(2)').html(type); 
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #date'+id).text($("#invoiceDate").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #title'+id).text($("#title").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #member'+id).text(r.customer);
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #invoiceNo'+id).text($("#invoiceNo").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #poOptional'+id).text($("#poOptional").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #invoiceDate'+id).text($("#invoiceDate").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #pickDate'+id).text($("#pickDate").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #discountType'+id).text($('input[name="radio2"]:checked', '#addProduct').val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #discountRate'+id).text($("#discountCheck").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #currencyType'+id).text($('input[name="radio6"]:checked', '#addProduct').val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #note'+id).text($(".noteProduct").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #currencyRate'+id).text($("#currencyRate").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #allData'+id).text(allData);
                                    $('#receipt'+id).closest('tr').find('td:eq(3) #cStatus'+id).text($('#purchaseDueAmount').val());
                                    $('#receipt'+id).closest('tr').find('td:eq(4)').text($("#pickDate").val());
                                    $('#receipt'+id).closest('tr').find('td:eq(5)').html(totalRate); 
                                    $('#receipt'+id).closest('tr').find('td:eq(6)').html(r.customer); 
                                    $('#receipt'+id).closest('tr').find('td:eq(7)').text($("#invoiceNo").val()); 
                                    $('#receipt'+id).closest('tr').find('td:eq(8)').text(userNameFull); 
                                    $('#productUpdate').attr('id', 'productSave');
                                    $('#productSave').html('<i class="fa fa-save"></i> Save');
                                    $('#productUpdateNew').attr('id', 'productSaveNew');
                                    $('#productSaveNew').html('<i class="fa fa-newspaper-o"></i> Save & New');
                                    $('#sample_1 tr td:last-child').css('display', 'none');
                                    //$('.addPurchase').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                                    $('#addProduct').trigger("reset");
                                    $("html, body").animate({ scrollTop: '0px' }, "slow");
                                    editCalled = 1;
                                    $('#addProduct')[0].reset();
                                    $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
                                    $('.noteProduct').addClass("edited");
                                    $('.oldVendorInfo').slideUp("slow");
                                    $("#dateDifference").slideUp("slow");
                                    $(".radioCheck").slideUp("slow");
                                    $('.currencyRate').slideUp("slow");
                                    $('.productTable').find("tr:gt(1)").remove();
                                    $('#radio1').prop('checked', false);
                                    $('#radio2').prop('checked', true);
                                    $('#radio5').prop('checked', false);
                                    $('#radio6').prop('checked', true);
                                    var control = customerSelect[0].selectize;
                                    control.clear(true);
                                    $('.purchaseOption').select2('val', '---');
                                    $('.selectizedTax').select2('val', '---');
                                    $('.warrantySpan').css("display", "none");
                                    $('.checkDescription').css("display", "none");
                                    $('.checkCurrency').text(currencyLocal[1]);
                                    editCalled = 0;
                                    purchaseListId(); 
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

            $('.noteSubmit').live('click', function(e) {
                $.ajax({
                        url: base_link+'estimate/updateNotePurchase',
                        type: 'POST',
                        data: 'note='+$('.noteProduct').val(),
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
                                        toastr.success(" You successfully update estimate note", "Update Estimate Note");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=update'+ '&title=estimate note'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=estimate/viewEstimate/'+totalPurchase,
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
            });
            $(".productTable").on('keydown', '.numericExpresion', function (e) {
                //Prevent if already dot
                if(e.keyCode == 110 && $(this).val().indexOf('.') != -1 || e.keyCode == 190 && $(this).val().indexOf('.') != -1) {
                    e.preventDefault();
                }
                // Allow: delete, backspace, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 106]) !== -1 ||
                     // Allow: Ctrl+A, Command+A
                    (e.keyCode == 56 && e.shiftKey === true ) ||
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
            $(".productTable").on('keydown', '.numericInteger', function (e) {
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
            $(".productTable").on('keydown', '.numericFloat', function (e) {
                //Prevent if already dot
                if(e.keyCode == 110 && $(this).val().indexOf('.') != -1 || e.keyCode == 190 && $(this).val().indexOf('.') != -1) {
                    e.preventDefault();
                }
                // Allow: delete, backspace, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
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
            function removeLogo(id) {
                if($('#logoName').text() == '') {
                    $('.purchaseLogoDiv').slideUp(1000);
                    $('#purchaseLogo').delay(1200).slideDown();
                    return false;
                } else {
                    $.ajax({
                        url: base_link+'estimate/removeFile',
                        type: 'POST',
                        data: 'identification='+id+'&file='+$('#logoName').text(),
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
                                        toastr.success(" You successfully update estimate loog", "Update Estimate Logo");
                                    }, 1000);
                                }, 500);        
                                $('.purchaseLogoDiv').slideUp(1000);
                                $('#purchaseLogo').delay(1200).slideDown();  
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=update'+ '&title=estimate logo'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=estimate/viewEstimate/'+totalPurchase,
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
            function removeFile(id, liId) {
                $.ajax({
                    url: base_link+'estimate/removeFile',
                    type: 'POST',
                    data: 'file='+id+'&id='+$('#purchaseEditId').val(),
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
                                    toastr.success(" You successfully delete estimate logo", "Delete Estimate Logo");
                                }, 1000);
                            }, 500);               
                            $('#'+liId).remove(); 
                            var str = $('#purchasefiles').val().replace(id, '');
                            $('#purchasefiles').val(str);
                            if($('#purchasefiles').val() == '') {          
                              $('.uploadFirstFile').slideDown("fast");
                            }
                            var activityId = activityListId();
                            var acType = "fa-plus";
                            var acLabel = "label-success";
                            $.ajax({
                                url: base_link+'recent_activity/add_activity/',
                                data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=delete'+ '&title=estimate logo'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=estimate/viewEstimate/'+totalPurchase,
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
            function updateAttachFile() {
                $.ajax({
                    url: base_link+'estimate/updateAttachFile',
                    type: 'POST',
                    data: 'file='+$('#purchasefiles').val()+'&id='+$('#purchaseEditId').val(),
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
            function removeAll() {
                $.ajax({
                    url: base_link+'estimate/removeAll',
                    type: 'POST',
                    data: 'file='+$('#purchasefiles').val(),
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
                        window.location = base_link+'estimate/removeAll/'+$('#purchasefiles').val()+'/'+$('#purchaseEditId').val();
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
            function downloadAll() {
                $.ajax({
                    url: base_link+'estimate/downloadAllZip',
                    type: 'POST',
                    data: 'file='+$('#purchasefiles').val(),
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
                        window.location = base_link+'estimate/downloadAllZip/'+$('#purchasefiles').val();
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
            $(".productTable").on('click', '.deleteButton', function (e) {
                var whichtr = $(this).closest("tr");
                whichtr.remove();   
                $('.knownSortable tr').each(function(idx){
                    $(this).children().first().html(idx + 1);
                });  
                calculateTotal(); 
                //$('.productTable').find("tr:gt(1)").remove();
            });
            $('#uploadFileBtn').click( function() {
                $('#fileUploadDiv').slideToggle("slow");
            });
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
                                                                            '<i onclick="editComment(\'estimate\', '+id+', '+r.commentId+')" class="fa fa-edit permission iconEdit iconMark"></i>'+
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
            }
        </script>
    </body>

</html>