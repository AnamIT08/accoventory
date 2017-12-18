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
        <title>Purchase | Business Care</title>
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
        <link href="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/css/cubeportfolio.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
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
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
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
            .bootstrap-switch-container { color: #000 !important; font-weight: 600; }
            .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-success { color: #000 !important; }
            .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-warning { color: #000 !important; }
            .table tbody td .form-md-line-input input { display: inline-block !important; margin-top: 0px !important; }
            .bootstrap-switch-id-currencyChange { float: right; margin-top: -8px; }
            .input-large { max-width: 400px !important; width: 400px !important; }
            .select2-container--bootstrap .select2-selection { border-radius: 0px !important; border: none; border-bottom: 2px solid #36C6D3 !important; border-top: none !important; border-left: none !important;border-right: none !important; }
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
                    <div class="row showChart" style="display: none !important;">
                        <div class="col-md-12">
                            <div class="profile-content">
                                <!-- BEGIN PORTLET -->                                
                                    <div class="portlet box light bordered col-md-4" style="border: 3px solid #e7ecf1 !important;">
                                        <div class="portlet-body">
                                            <div class="col-md-12">
                                                <div id="highchart_5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet box light bordered col-md-4" style="border: 3px solid #e7ecf1 !important;">
                                        <div class="portlet-body">
                                            <div class="col-md-12">
                                                <div id="highchart_6"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet box light bordered col-md-4" style="border: 3px solid #e7ecf1 !important;">
                                        <div class="portlet-body" style="min-height: 233px; color: #B6BEBE; font-size: 16px;">
                                            <div class="col-md-12 uppercase" style="margin-left: 5%; margin-top: 13% !important;"> 
                                                TOTAL OUTSTANDING PAYMENTS <br/>
                                                <span style="font-size: 30px; color: #597B8C; font-weight: 550;">৳ 0.00</span>
                                                <span style="font-size: 22px; font-weight: 400;">BDT</span>
                                            </div>
                                            <div class="col-md-12 uppercase" style="margin-left: 5%;">
                                                AVERAGE DAYS TO PAYMENT <br/>
                                                <span style="font-size: 30px; color: #597B8C; font-weight: 550;">৳ 0.00</span>
                                                <span style="font-size: 22px; font-weight: 400;">BDT</span>
                                            </div>
                                        </div>
                                    </div>
                                <!-- END PORTLET -->
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row addPurchase" style="display: none;">
                        <div class="col-md-12">
                            <div class="profile-content">
                                <!-- BEGIN PORTLET -->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <i class="icon-bar-chart theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold" style="color: #D05454 !important;">Add New Purchase</span>
                                            <span class="caption-helper hide">weekly stats...</span>
                                        </div>
                                        <div style="float: right;">
                                            <a class="btn green-haze btn-sm PurchaseListVisible"><i class="fa fa-list"></i> Purchase List </a>
                                            <a href="javascript:;" class="btn default btn-sm PurchaseListVisible"><i class="fa fa-times"></i> Cancel </a>
                                        </div>
                                    </div>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet box light bordered">
                                        <div id="fileUploadDiv" class="col-sm-6" style="margin-top: 275px; display: none; position: absolute; z-index: 11">
                                            <div class="row">
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-10 newDrop pull-left">
                                                    <form action="<?php echo base_url(); ?>product/file_upload/" class="dropzone dropzone-file-area">                                                                
                                                        <input id="identification" style="display:none;" name="identification" value="purchaseFile" type="hiddin"/>
                                                        <div class="uploadFirst uploadFirstFile">
                                                            <div class="fadeMe"></div>                                                            
                                                            <img class="wave-logo-uploader-dropzone__logo__dropzone__icon" src="<?php echo base_url(); ?>assets/uploadedFile/system/63cc4065e830c9f2e76f19ff398dc73d.svg">
                                                            <div class="wave-logo-uploader-dropzone__logo___dropzone__text"><span class="wv-text wv-text--body"><span class="wave-logo-uploader-dropzone__logo__dropzone__browse-link">Browse</span><span> </span><span> your logo here.</span></span></div>
                                                            <div class="wave-logo-uploader-dropzone__logo__dropzone__hint"><span class="wv-text wv-text--hint"><span>Maximum 500KB in size.</span><br ><span>JPG, PNG, or GIF formats.</span></span></div>
                                                            <div class="wave-logo-uploader-dropzone__logo__dropzone__hint"><span class="wv-text wv-text--hint">Recommended size: 300 x 200 pixels.</span></div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-sm-1"></div>
                                            </div>
                                        </div>
                                        <div id="portlet-body" class="portlet-body">
                                            <div class="row"> 
                                                <div class="col-sm-offset-1 pull-right col-sm-5">
                                                    <div class="row">                                                        
                                                        <div id="purchaseLogo" class="col-sm-11 col-sm-offset-1 pull-left newDrop" style="display: <?php if($basicInvoiceEstimate[0]->defaultLogoSettings != "No" && $basicSettings[0]->bDefaultLogo == "") { echo "block"; } else { echo "none"; } ?>;">
                                                            <form action="<?php echo base_url(); ?>product/file_upload/" class="dropzone dropzone-file-area">                                                                
                                                                <input id="identification" style="display:none;" name="identification" value="purchaseLogo" type="hiddin"/>
                                                                <div class="uploadFirst">
                                                                    <div class="fadeMe"></div>                                                            
                                                                    <img class="wave-logo-uploader-dropzone__logo__dropzone__icon" src="<?php echo base_url(); ?>assets/uploadedFile/system/63cc4065e830c9f2e76f19ff398dc73d.svg">
                                                                    <div class="wave-logo-uploader-dropzone__logo___dropzone__text"><span class="wv-text wv-text--body"><span class="wave-logo-uploader-dropzone__logo__dropzone__browse-link">Browse</span><span> </span><span> your logo here.</span></span></div>
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
                                                                                        echo '<img id="profile-img-system" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" style="width: '.$basicInvoiceEstimate[0]->logoSize.'px !important; max-height:none; padding: 5px; border: 1px dashed #54c7c3; border-radius: 5px;"/>';
                                                                                    }
                                                                                } else {
                                                                                    echo '<img id="profile-img-system" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" style="width: '.$basicInvoiceEstimate[0]->logoSize.'px !important; max-height:none; padding: 5px; border: 1px dashed #54c7c3; border-radius: 5px;"/>';
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
                                                        <div id="uploadFileBtn" class="col-sm-offset-1 col-sm-11" style="font-size: 35px; margin: 15px; cursor: pointer; z-index: 10">
                                                            <div class=" pull-right">
                                                                <span><i class="fa fa-cloud-upload"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                              
                                                <form id="addProduct" role="form" action="#">
                                                    <div class="col-md-6">
                                                        <div class="col-md-offset-1 col-md-11">
                                                            <div id="titleDiv" class="form-group form-md-line-input">
                                                                <input id="title" class="form-control" placeholder="Bill (Optional)" name="title" type="text" value="Bill" style="font-size: 20px" />
                                                                <div class="form-control-focus"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-offset-1 col-md-11" style="margin-top: 50px;">
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
                                                    <div class="col-md-offset-6 col-md-6">                                                   
                                                        <div class="divRightText">
                                                            <div class="col-sm-12">
                                                                <div id="invoiceNoDiv" class="form-group form-md-line-input">
                                                                    <div class="col-md-12">
                                                                        <input id="invoiceNo" class="form-control" name="invoiceNo" placeholder="Purchase #" type="text" value="" />
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
                                                                                    <input class="form-control customInput checkCode" name="checkCode[]" placeholder="<?php echo $columnSettings[0]->itemCode; ?>" value="" type="text">
                                                                                    <span class="form-control-focus"> </span>
                                                                                </span>
                                                                            </span>
                                                                            <?php if($columnSettings[0]->isWarranty == 1) { ?>
                                                                                <br/><span class="warrantySpan" style="color: gray; display: none;"><?php echo $columnSettings[0]->warrantyName; ?>: <span class="checkWarranty"></span></span>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <select style="display: none;" tabindex="-1" class="form-control selectized purchaseOption" placeholder="Select or Add <?php echo $columnSettings[0]->name; ?>" name="product[]">
                                                                                <option value="" selected="selected"></option>
                                                                                <?php foreach ($listProducts as $productList) { ?>
                                                                                    <option value="<?php echo $productList->id; ?>"><?php echo $productList->name; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                            <?php if($columnSettings[0]->isDescription == 1) { ?>
                                                                                <span style="color: gray" class="checkDescription"></span>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <span class="form-group form-md-line-input unitInputDiv">
                                                                                <span class="col-md-12">
                                                                                    <input class="form-control customInput unitInput" name="unitInput[]" placeholder="<?php echo $columnSettings[0]->unitName; ?>" value="1" type="text">
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
                                                                        <td style="padding-top: 10px !important">
                                                                            <span class="form-group">
                                                                                <select style="display: none;" tabindex="-1" class="form-control selectizedTax" placeholder="Add Tax" name="tax[]">
                                                                                    <option value="" selected="selected"></option>
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
                                                                    <th class="text-left">Purchase Total: <span class="checkCurrency" style="float: right;"><?php $currency = explode("-", $basicSettings[0]->currencySymbol); echo $currency[1]; ?></span></th></th>
                                                                    <td class="text-right total pTotal"> 0.00</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 25px;">
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <div class="input-icon">
                                                                <textarea class="form-control noteProduct" type="text" name="noteProduct"><?php echo $anotherSettings[0]->notePurchase; ?></textarea>
                                                                <label for="form_control_1">NOTES</label>                                                            
                                                                <span class="saveDefault" style="display: <?php if($anotherSettings[0]->notePurchase != '') echo "none" ?>">
                                                                    <a class="tooltipC">
                                                                        <i class="fa fa-plus-circle noteSubmit" style="color: #44B6AE; float: right; font-size: 15px; margin:5px;"></i>
                                                                        <span class="sTooltip"><strong>Save as default</strong></span>
                                                                    </a>
                                                                </span>
                                                                <span class="help-block">Appears on each bill. Notes that are visible to your vendor.</span>
                                                                <i class="icon-speech"></i>
                                                            </div>
                                                        </div>
                                                    </div>                                              
                                                    <div class="col-md-12 margiv-top-10"><br/>
                                                        <input id="purchaseSystemCode" name="productSystemCode" value="" type="hidden" />
                                                        <input id="purchaseEditId" name="productEditId" value="" type="hidden" />
                                                        <input id="purchasefiles" name="productfiles" value="" type="hidden" />
                                                        <input id="purchaseTotal" name="productTotal" value="" type="hidden" />
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
                                            <a class="btn default btn-sm clickChart"><i class="fa fa-pie-chart"></i> Show Chart </a>
                                            <a class="btn green-haze btn-sm PurchaseAddVisible"><i class="fa fa-plus"></i> New Purchase </a>
                                            <a href="<?php echo base_url(); ?>settings/others/Product" class="btn yellow-haze btn-sm"><i class="fa fa-plus"></i> Add Product </a>
                                        </div>
                                    </div>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet box light bordered">
                                        <div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
                                            <div class="caption">
                                                <i class="fa fa-th-list" style="color: #D05454;"></i><span class="caption-subject font-blue-madison bold" style="color: #D05454 !important;">Active Purchase List</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group btn-group-solid">
                                                    <!-- <a id="cPage" class="dt-button buttons-print btn gray btn-outline"><i class="fa fa-plus-square-o" style="color: #555555;"></i><span>Current Page</span></a>
                                                    <a id="tTable" class="dt-button buttons-print btn gray btn-outline"><i class="fa fa-plus-square" style="color: #555555;"></i><span>Total Table</span></a> -->
                                                    <a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_1')"><i class="fa fa-print"></i><span>Print</span></a>
                                                    <a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_1', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
                                                    <a class="dt-button buttons-pdf buttons-html5 btn green btn-outline" onClick ="PDFFromHTML();"><i class="fa fa-file-pdf-o"></i><span>PDF</span></a>
                                                    <a class="btn default" href="#" data-toggle="dropdown">
                                                        <i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div id="sample_1_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                                        <label><input type="checkbox" checked data-column="1">Manage</label>
                                                        <label><input type="checkbox" checked data-column="2">Date</label>
                                                        <label><input type="checkbox" checked data-column="3">Purchase ID</label>
                                                        <label><input type="checkbox" checked data-column="4">Total</label>
                                                        <label><input type="checkbox" checked data-column="5">Due</label>
                                                        <label><input type="checkbox" data-column="6">Currency</label>
                                                        <label><input type="checkbox" data-column="7">Vendor</label>
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
                                                            Date
                                                        </th>
                                                        <th>
                                                            Purchase ID
                                                        </th>
                                                        <th>
                                                            Total
                                                        </th>
                                                        <th>
                                                            Due
                                                        </th>
                                                        <th>
                                                            Currency
                                                        </th>
                                                        <th>
                                                            Vendor
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
                                                    <?php foreach ($activePurchase as $activePurchaseResult) { ?>
                                                    <tr id="receipt<?php echo $activePurchaseResult->id; ?>">
                                                        <td>
                                                            <div class="btn-group" style="margin: -5px">
                                                                <button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu" style="position: absolute;">
                                                                    <li>
                                                                        <a href="<?php echo base_url(); ?>product/viewBill/<?php echo $activePurchaseResult->id; ?>" class="liveLink"><i class="fa fa-search" style="color: #26C281;"></i><span>View</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url(); ?>product/viewBill/<?php echo $activePurchaseResult->id; ?>/history" class="liveLink"><i class="fa fa-history" style="color: gray;"></i><span>History</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a onclick="editData('<?php echo $activePurchaseResult->id; ?>')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span>Return & Edit</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url(); ?>product/printBill" class="liveLink"><i class="fa fa-print" style="color: #000000;"></i><span>Print</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a onclick="deleteData('<?php echo $activePurchaseResult->id; ?>')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div> 
                                                        </td>
                                                        <td>
                                                            <span id="date<?php echo $activePurchaseResult->id; ?>"><?php echo date("d-m-Y", strtotime($activePurchaseResult->date)); ?></span>
                                                            <span id="title<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->title; ?></span>
                                                            <span id="member<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->customerId; ?></span>
                                                            <span id="invoiceNo<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->documentId; ?></span>
                                                            <span id="poOptional<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->po; ?></span>
                                                            <span id="invoiceDate<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->date; ?></span>
                                                            <span id="pickDate<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->dueDate; ?></span>
                                                            <span id="discountType<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->discountType; ?></span>
                                                            <span id="discountRate<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->discountAmount; ?></span>
                                                            <span id="currencyType<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->currencyType; ?></span>
                                                            <span id="note<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->noteProduct; ?></span>
                                                            <span id="currencyRate<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->currencyRate; ?></span>
                                                            <span id="allData<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->documentData; ?></span>  
                                                            <span id="attachFile<?php echo $activePurchaseResult->id; ?>" style="display:none;"><?php echo $activePurchaseResult->attachFile; ?></span>                                                       
                                                        </td>
                                                        <td>
                                                            <?php echo $activePurchaseResult->documentId; ?>
                                                        </td>
                                                        <td>
                                                            <?php $currency = explode("-", $basicSettings[0]->currencySymbol); echo $currency[1]; ?> <?php echo $activePurchaseResult->calculateTotal; ?> 
                                                        </td>
                                                        <td>
                                                            <?php echo date("d-m-Y", strtotime($activePurchaseResult->dueDate)); ?>
                                                        </td>
                                                        <td>
                                                            <?php if($activePurchaseResult->currencyType == "local"){ ?>                                                            
                                                            <span class="label label-sm label-success"> Local </span>
                                                            <?php } else { ?>
                                                            <span class="label label-sm label-warning"> Foreign </span>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $activePurchaseResult->customerId; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $activePurchaseResult->createdBy; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $activePurchaseResult->createdDateTime; ?>
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
                                                                        <a id="loadMore" class="btn green-haze btn-sm loadMore" style="float: right;"><i class="fa fa-refresh"></i> Load More </a>
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
                                            <a class="btn default btn-sm clickChart"><i class="fa fa-pie-chart"></i> Show Chart </a>
                                            <a class="btn green-haze btn-sm PurchaseAddVisible"><i class="fa fa-plus"></i> New Purchase </a>
                                            <a href="<?php echo base_url(); ?>settings/others/Product" class="btn yellow-haze btn-sm"><i class="fa fa-plus"></i> Add Product </a>
                                        </div>
                                    </div>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet box light bordered">
                                        <div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
                                            <div class="caption">
                                                <i class="fa fa-th-list" style="color: #D05454;"></i><span class="caption-subject font-blue-madison bold" style="color: #D05454 !important;">Archive Purchase List</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group btn-group-solid">
                                                    <!-- <a id="cPage" class="dt-button buttons-print btn gray btn-outline"><i class="fa fa-plus-square-o" style="color: #555555;"></i><span>Current Page</span></a>
                                                    <a id="tTable" class="dt-button buttons-print btn gray btn-outline"><i class="fa fa-plus-square" style="color: #555555;"></i><span>Total Table</span></a> -->
                                                    <a class="dt-button buttons-print btn dark btn-outline" onclick="printData('sample_11')"><i class="fa fa-print"></i><span>Print</span></a>
                                                    <a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_11', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
                                                    <a class="dt-button buttons-pdf buttons-html5 btn green btn-outline" onClick ="PDFFromHTML();"><i class="fa fa-file-pdf-o"></i><span>PDF</span></a>
                                                    <a class="btn default" href="#" data-toggle="dropdown">
                                                        <i class="fa fa-sliders"></i>More <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div id="sample_11_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                                        <label><input type="checkbox" checked data-column="1">Manage</label>
                                                        <label><input type="checkbox" checked data-column="2">Date</label>
                                                        <label><input type="checkbox" checked data-column="3">Purchase ID</label>
                                                        <label><input type="checkbox" checked data-column="4">Total</label>
                                                        <label><input type="checkbox" checked data-column="5">Due</label>
                                                        <label><input type="checkbox" data-column="6">Currency</label>
                                                        <label><input type="checkbox" data-column="7">Vendor</label>
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
                                                            Date
                                                        </th>
                                                        <th>
                                                            Purchase ID
                                                        </th>
                                                        <th>
                                                            Total
                                                        </th>
                                                        <th>
                                                            Due
                                                        </th>
                                                        <th>
                                                            Currency
                                                        </th>
                                                        <th>
                                                            Vendor
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
                                                    <?php foreach ($inActivePurchase as $inActivePurchaseResult) { ?>
                                                    <tr id="receipt<?php echo $inActivePurchaseResult->id; ?>">
                                                        <td>                                                            
                                                            <div class="btn-group" style="margin: -5px">
                                                                <button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu" style="position: absolute;">
                                                                    <li>
                                                                        <a href="<?php echo base_url(); ?>product/viewBill/<?php echo $inActivePurchaseResult->id; ?>" class="liveLink"><i class="fa fa-search" style="color: #26C281;"></i><span>View</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url(); ?>product/viewBill/<?php echo $inActivePurchaseResult->id; ?>/history" class="liveLink"><i class="fa fa-history" style="color: gray;"></i><span>History</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url(); ?>product/printBill" class="liveLink"><i class="fa fa-print" style="color: #000000;"></i><span>Print</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a onclick="deleteData('<?php echo $inActivePurchaseResult->id; ?>')"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div> 
                                                        </td>
                                                        <td>
                                                            <?php echo date("d-m-Y", strtotime($inActivePurchaseResult->date)); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $inActivePurchaseResult->documentId; ?>
                                                        </td>
                                                        <td>
                                                            <?php $currency = explode("-", $basicSettings[0]->currencySymbol); echo $currency[1]; ?> <?php echo $inActivePurchaseResult->calculateTotal; ?> 
                                                        </td>
                                                        <td>
                                                            <?php echo date("d-m-Y", strtotime($inActivePurchaseResult->dueDate)); ?>
                                                        </td>
                                                        <td>
                                                            <?php if($inActivePurchaseResult->currencyType == "local"){ ?>                                                            
                                                            <span class="label label-sm label-success"> Local </span>
                                                            <?php } else { ?>
                                                            <span class="label label-sm label-warning"> Foreign </span>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $inActivePurchaseResult->customerId; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $inActivePurchaseResult->createdBy; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $inActivePurchaseResult->createdDateTime; ?>
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
                                                                        <a id="loadMore" class="btn green-haze btn-sm loadMore" style="float: right;"><i class="fa fa-refresh"></i> Load More </a>
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
            var currentdate = new Date();
            var getDateTime = currentdate.getFullYear() + "-"
                            + (currentdate.getMonth()+1)  + "-" 
                            + currentdate.getDate() + " "  
                            + (currentdate.getHours() % 12 || 12) + ":"  
                            + currentdate.getMinutes() + ":" 
                            + currentdate.getSeconds();
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
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
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
            $('<audio id="chatAudio"><source src="'+base_link+'assets/uploadedFile/sound/notify.ogg" type="audio/ogg"><source src="'+base_link+'assets/uploadedFile/sound/notify.mp3" type="audio/mpeg"><source src="'+base_link+'assets/uploadedFile/sound/notify.wav" type="audio/wav"></audio>').appendTo('body');
            function setLoadingImage() {
                var loadingImageCollection = ['loading1.gif', 'loading2.gif', 'loading3.gif', 'loading4.gif', 'loading5.gif', 'loading6.gif', 'loading7.gif', 'loading8.gif', 'loading9.gif', 'loading10.gif', 'loading11.gif', 'loading12.gif', 'loading13.gif', 'loading14.gif', 'loading15.gif', 'loading16.gif', 'loading17.gif', 'loading18.gif'];
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
                $("#purchaseSystemCode").val("bcpu"+(currentpurchase));
            }
            purchaseListId();
            var pagePosition = '<?php echo $this->uri->segment(2); ?>';
            if(pagePosition == 'add') {
                $('.addPurchase').stop(true, true).fadeIn({ duration: 1500, queue: false }).css('display', 'none').slideDown(1500);    
                $("html, body").animate({ scrollTop: '0px' }, "slow");
            }
            $('.PurchaseListVisible').live('click', function(e) {
                $('.addPurchase').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                $('#addPurchase').trigger("reset");
                $("html, body").animate({ scrollTop: '0px' }, "slow");
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
            });
            var counter = 1;
            function editData(id) {
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
                $('#title').val($('#receipt'+id).closest('tr').find('td:eq(2) #title'+id).text().trim());
                var dataAll = $('#receipt'+id).closest('tr').find('td:eq(2) #allData'+id).text();
                customerSelect[0].selectize.setValue("44", true);
                var dataArr = dataAll.split('::');
                //$('#tiggerClick').trigger("click");
                var seletizeData = [];
                var j = 0; 
                for (var i = 0; i < dataArr.length; i++) {
                    var seletizeDataInner = [];
                    var l = 0; var m = 0;              
                    var splitData = dataArr[i].split('*');
                    if(i == 0) {
                        seletizeData[j++] = splitData[1];
                        seletizeData[j++] = splitData[4];
                        $('.item'+i).closest('tr').find('.checkCode').val(splitData[0]);
                        $('.item'+i).closest('tr').find('.unitInput').val(splitData[2]);
                        $('.item'+i).closest('tr').find('.pricePInput').val(splitData[3]);
                        $('.item'+i).closest('tr').find('.checkTax').val(splitData[5]);
                        $('.warrantySpan').css("display", "block");
                        $('.item'+i).closest('tr').find('.totalInput').val(splitData[6]);
                        $('.item'+i).closest('tr').find('.warrantySpan').val(splitData[7]);
                        $('.item'+i).closest('tr').find('.checkDescription').val(splitData[8]);
                    } else {
                        addBlankLineForEdit();
                        seletizeDataInner[l++] = splitData[1];
                        seletizeDataInner[l++] = splitData[4];
                        $('.item'+i).closest('tr').find('.checkCode').val(splitData[0]);
                        $('.item'+i).closest('tr').find('.unitInput').val(splitData[2]);
                        $('.item'+i).closest('tr').find('.pricePInput').val(splitData[3]);
                        $('.item'+i).closest('tr').find('.checkTax').val(splitData[5]);
                        $('.warrantySpan').css("display", "block");
                        $('.item'+i).closest('tr').find('.totalInput').val(splitData[6]);
                        $('.item'+i).closest('tr').find('.warrantySpan').val(splitData[7]);
                        $('.item'+i).closest('tr').find('.checkDescription').val(splitData[8]);
                    }
                    selectizedSelect[0].selectize.setValue(seletizeData[0], true);
                    selectizedTaxSelect[0].selectize.setValue(seletizeData[1], true);
                    if(i != 0) {
                        $('.item'+i).find('select.purchaseOption').each(function(key, value){
                            $(this)[0].selectize.setValue(seletizeDataInner[m++], true);
                        });
                        $('.item'+i).find('select.selectizedTax').each(function(key, value){
                            $(this)[0].selectize.setValue(seletizeDataInner[m++], true);
                        });
                    }
                }
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

            function returnAccess() {}
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
                        /*
                        $.ajax({
                            type: 'post',
                            url: base_link+"prePurchaseion/reorder_style_post",
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
            var rowCount = $('.ui-sortable tr').length;
            var trRowId = '';
            function trRow(argument) {
                trRowId = argument;
            }   
            var customerSelect = $('.customer').selectize({
                placeholder: "Select or Add Vendor",
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
                            $('#chatAudio')[0].play();
                        },
                        success: function (response) { 
                            r = $.parseJSON(response);
                            res = r.response;
                            $('.oldVendorInfo').slideDown('fast');
                            $('.new-customer-data').slideUp('fast');
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
                        url: base_link+'product/memeberCount',
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
                            $('#chatAudio')[0].play();
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
                },
                onOptionAdd: function(option){
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
            var selectizedSelect = $('.purchaseOption').selectize({
                placeholder: "Select or Add <?php echo $columnSettings[0]->name; ?>",
                persist: true,
                // create: true,
                sortField: {
                    field: 'text',
                    direction: 'asc'
                },
                hideSelected:true,
                openOnFocus: true,
                selectOnTab: true,
                dropdownParent: null,
                onChange: function (value) {
                    $.ajax({
                        url: base_link+'product/getProductInfo',
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
                            $('#chatAudio')[0].play();
                        },
                        success: function (response) { 
                            r = $.parseJSON(response);
                            $('.'+trRowId).closest('tr').find('.checkCode').val(r.code);
                            $('.'+trRowId).closest('tr').find('.checkDescription').text(r.description);
                            $('.'+trRowId).closest('tr').find('.descriptionInput').val(r.description);
                            $('.'+trRowId).closest('tr').find('.warrantySpan').css("display", "block");
                            $('.'+trRowId).closest('tr').find('.checkWarranty').text(r.warranty);
                            $('.'+trRowId).closest('tr').find('.warrantyInput').val(r.warranty);
                            $('.'+trRowId).closest('tr').find('.checkUnit').text(r.unit);
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
                },
                onOptionAdd: function(option){

                    addedCustomerNames.push(option);
                    $('#unbilledNotice').html('');
                    $('input[name=new_customer]').val('1');

                    var suggestedPurchaseNumber = option.replace(/\W/g, '').toUpperCase().substring(0,5) + '-0001';
                    $('#PurchaseNo').val(suggestedPurchaseNumber);

                },
                onItemAdd: function(item){
                    if(addedCustomerNames.indexOf(item) > -1){
                        $('input[name=new_customer]').val('1');
                    }

                }
            });
            this.PurchaseSelectizeOptions = {
                placeholder: "Select or Add <?php echo $columnSettings[0]->name; ?>",
                persist: true,
                // create: true,
                sortField: {
                    field: 'text',
                    direction: 'asc'
                },
                hideSelected:true,
                openOnFocus: true,
                selectOnTab: true,
                dropdownParent: null,
                onChange: function (value) {
                    $.ajax({
                        url: base_link+'product/getProductInfo',
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
                            $('#chatAudio')[0].play();
                        },
                        success: function (response) { 
                            r = $.parseJSON(response);  
                            $('.'+trRowId).closest('tr').find('.checkCode').val(r.code);
                            $('.'+trRowId).closest('tr').find('.checkDescription').text(r.description);
                            $('.'+trRowId).closest('tr').find('.descriptionInput').val(r.description);
                            $('.'+trRowId).closest('tr').find('.warrantySpan').css("display", "block");
                            $('.'+trRowId).closest('tr').find('.checkWarranty').text(r.warranty);
                            $('.'+trRowId).closest('tr').find('.warrantyInput').val(r.warranty);
                            $('.'+trRowId).closest('tr').find('.checkUnit').text(r.unit);
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
                },
                onOptionAdd: function(option){

                    addedCustomerNames.push(option);
                    $('#unbilledNotice').html('');
                    $('input[name=new_customer]').val('1');

                    var suggestedPurchaseNumber = option.replace(/\W/g, '').toUpperCase().substring(0,5) + '-0001';
                    $('#PurchaseNo').val(suggestedPurchaseNumber);

                },
                onItemAdd: function(item){
                    if(addedCustomerNames.indexOf(item) > -1){
                        $('input[name=new_customer]').val('1');
                    }

                }
            };
            var selectizedTaxSelect = $('.selectizedTax').selectize({
                placeholder: "Add Tax",
                persist: true,
                //create: true,
                sortField: {
                    field: 'text',
                    direction: 'asc'
                },
                hideSelected:true,
                openOnFocus: true,
                selectOnTab: true,
                dropdownParent: null,
                onChange: function (value) {
                    $.ajax({
                        url: base_link+'settings/getTaxInfo',
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
                            $('#chatAudio')[0].play();
                        },
                        success: function (response) { 
                            r = $.parseJSON(response);
                            $('.'+trRowId).closest('tr').find('.checkTax').val(r.rate);
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
                },
                onOptionAdd: function(input) {
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
                //create: true,
                sortField: {
                    field: 'text',
                    direction: 'asc'
                },
                hideSelected:true,
                openOnFocus: true,
                selectOnTab: true,
                dropdownParent: null,
                onChange: function (value) {
                    $.ajax({
                        url: base_link+'settings/getTaxInfo',
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
                            $('#chatAudio')[0].play();
                        },
                        success: function (response) { 
                            r = $.parseJSON(response);
                            $('.'+trRowId).closest('tr').find('.checkTax').val(r.rate);
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
                },
                onOptionAdd: function(input) {
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

                // Destroy selectize temporarily for clone
                $(lastLineItem).find('select.purchaseOption').each(function(key, value){
                    selectedValues[key] = $(this)[0].selectize.getValue();
                    $(this)[0].selectize.destroy();
                });

                $(lastLineItem).find('select.selectizedTax').each(function(key, value){
                    tagValues[key] = $(this)[0].selectize.getValue();
                    $(this)[0].selectize.destroy();
                });

                newLineItem = lastLineItem.clone().attr('data-line-id', newLineId );

                // Re-selectize everything
                $(lastLineItem).find('select.purchaseOption').each(function(key, value){
                    $(this).selectize(self.PurchaseSelectizeOptions);
                });

                $(lastLineItem).find('select.selectizedTax').each(function(key, value){
                    $(this).selectize(self.taxSelectizeOptions);
                });

                // Sync tax options to newly selectized fields; if you don't do this, they revert to original options
                //this.syncTaxOptions();

                // Select the previously selected item
                $(lastLineItem).find('select.purchaseOption').each(function(key, value){
                    $(this)[0].selectize.setValue(selectedValues[key])
                });

                $(lastLineItem).find('select.selectizedTax').each(function(key, value){
                    $(this)[0].selectize.setValue(tagValues[key])
                });

                $(newLineItem).find('select.purchaseOption').each(function(){
                    $(this).selectize(self.PurchaseSelectizeOptions);
                });

                $(newLineItem).find('select.selectizedTax').each(function(){
                    $(this).selectize(self.taxSelectizeOptions);
                });
                newLineItem.insertAfter( lastLineItem );
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
                calculateTotal();
                return newLineItem;
            }

            function addBlankLineForEdit() {
                var lastLineItem = $('tr.'+'item').last();
                var oldLineId = lastLineItem.data('line-id');
                var newLineId = oldLineId+1;
                var newLineItem;
                var selectedValues = new Array();
                var tagValues = new Array();

                // Destroy selectize temporarily for clone
                $(lastLineItem).find('select.purchaseOption').each(function(key, value){
                    selectedValues[key] = $(this)[0].selectize.getValue();
                    $(this)[0].selectize.destroy();
                });

                $(lastLineItem).find('select.selectizedTax').each(function(key, value){
                    tagValues[key] = $(this)[0].selectize.getValue();
                    $(this)[0].selectize.destroy();
                });

                newLineItem = lastLineItem.clone().attr('data-line-id', newLineId );

                // Re-selectize everything
                // $(lastLineItem).find('select.purchaseOption').each(function(key, value){
                //     $(this).selectize(self.PurchaseSelectizeOptions);
                // });

                // $(lastLineItem).find('select.selectizedTax').each(function(key, value){
                //     $(this).selectize(self.taxSelectizeOptions);
                // });

                $(lastLineItem).find('select.purchaseOption').each(function(key, value){
                    $(this).selectize(self.PurchaseSelectizeOptions)
                });

                $(lastLineItem).find('select.selectizedTax').each(function(key, value){
                    $(this).selectize(self.taxSelectizeOptions)
                });

                $(newLineItem).find('select.purchaseOption').each(function(){
                    $(this).selectize(self.PurchaseSelectizeOptions);
                });

                $(newLineItem).find('select.selectizedTax').each(function(){
                    $(this).selectize(self.taxSelectizeOptions);
                });


                newLineItem.insertAfter( lastLineItem );
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
                        /*
                        $.ajax({
                            type: 'post',
                            url: base_link+"prePurchaseion/reorder_style_post",
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
            // $('#active').on('switchChange.bootstrapSwitch', function (event, state) {
            //     if(state) { 
            //         $('#archive').bootstrapSwitch('state', true);
            //         $(".PurchaseList").css('display', 'none'); 
            //         $(".PurchaseListArchive").css('display', 'block'); 
            //     }
            // });
            // $('#archive').on('switchChange.bootstrapSwitch', function (event, state) {
            //     if(!state) {
            //         $('#active').bootstrapSwitch('state', false);
            //         $(".PurchaseList").css('display', 'block'); 
            //         $(".PurchaseListArchive").css('display', 'none');
            //     }
            // });
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
                    $('.discountAmount').html('- '+ parseFloat(discountRate).toFixed(2));
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
                    $('.discountAmount').html('- '+ parseFloat(discountRate).toFixed(2));
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
            $("#discountCheck").keyup(function(){
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
            });
            $(".productTable").on('keyup', '.unitInput', function (e) {
            //$('.unitInput').keyup(function(){
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
            //$('.unitInput').keyup(function(){
                var u_qty = $(this).val();
                //var u_price = $(this).closest('tr').find(".item_price").val().replace(',', '.');
                var u_price = $(this).closest('tr').find(".unitInput").val();
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
                    $('.discountAmount').html('- '+parseFloat(discountRate).toFixed(2));
                    $('.pTotal').html(parseFloat((sum-discountRate)).toFixed(2));
                    $("#purchaseTotal").val($('.pTotal').text());
                }
            } 
            $('#purchaseSave').live('click', function(e) {
                var error = false;
                var title = $('#title').val();
                var vendor = $('.customer').val();
                var invoiceNo = $('#invoiceNo').val();
                var discountCheck = $('#discountCheck').val();
                var currencyCheck = $('input:radio[name=radio6]:checked').val();
                var new_customer = $('.new_customer').val();

                if (title != '') {
                    $('#titleDiv').addClass('has-success');
                    $('#titleDiv').removeClass('has-warning');
                } else {
                    $('#titleDiv').removeClass('has-success');
                    $('#titleDiv').addClass('has-warning');
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
                if(currencyCheck == "foreign") {
                    if($('#currencyRate').val() != '') {
                        $('#currencyRateDiv').addClass('has-success');
                        $('#currencyRateDiv').removeClass('has-error');
                    } else {
                        $('#currencyRateDiv').removeClass('has-success');
                        $('#currencyRateDiv').addClass('has-error');
                        error = true;
                    }
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
                }

                var type = '';
                if($('input[name="radio6"]:checked', '#addProduct').val() == 'local') {
                    type = '<span class="label label-sm label-success"> Local </span>';
                } else {
                    type = '<span class="label label-sm label-warning"> Foreign </span>';
                }

                var checkCode = []; var checkCodeI = 0;
                $(".checkCode").each(function() {
                    if(($(this).val()) != '') {
                        checkCode[checkCodeI++] = $(this).val();
                        $('.checkCodeDiv').addClass('has-success');
                        $('.checkCodeDiv').removeClass('has-warning');                        
                    } else {
                        checkCode[checkCodeI++] = $(this).val();
                        $('.checkCodeDiv').removeClass('has-success');
                        $('.checkCodeDiv').addClass('has-warning');
                    }
                });

                var productC = []; var productI = 0;
                $('[name="product[]"]').each(function() {
                    if($(this).val() == '') {
                        productC[productI++] = $(this).val();
                        $(this).next('.purchaseOption').removeClass('has-success');
                        $(this).next('.purchaseOption').addClass('has-errorr');
                        error = true;                      
                    } else {
                        productC[productI++] = $(this).val();
                        $(this).next('.purchaseOption').removeClass('has-errorr');
                        $(this).next('.purchaseOption').addClass('has-success');
                    }
                });

                var unitInput = []; var unitInputI = 0;
                $(".unitInput").each(function() {
                    if(($(this).val()) != '') {
                        unitInput[unitInputI++] = $(this).val();
                        $('.unitInputDiv').addClass('has-success');
                        $('.unitInputDiv').removeClass('has-error');                        
                    } else {
                        unitInput[unitInputI++] = $(this).val();
                        $('.unitInputDiv').removeClass('has-success');
                        $('.unitInputDiv').addClass('has-error');
                        error = true;
                    }
                });

                var pricePInput = []; var pricePInputI = 0;
                $(".pricePInput").each(function() {
                    if(($(this).val()) != '') {
                        pricePInput[pricePInputI++] = $(this).val();
                        $('.priceInputDiv').addClass('has-success');
                        $('.priceInputDiv').removeClass('has-error');                        
                    } else {
                        pricePInput[pricePInputI++] = $(this).val();
                        $('.priceInputDiv').removeClass('has-success');
                        $('.priceInputDiv').addClass('has-error');
                        error = true;
                    }
                });

                var tax = []; var taxI = 0;
                $('[name="tax[]"]').each(function() {
                    if($(this).val() != '') {
                        tax[taxI++] = $(this).val();
                        $(this).next('.selectizedTax').addClass('has-success');
                        $(this).next('.selectizedTax').removeClass('has-warning');                        
                    } else {
                        tax[taxI++] = $(this).val();
                        $(this).next('.selectizedTax').removeClass('has-success');
                        $(this).next('.selectizedTax').addClass('has-warning');
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

                var allData = '';
                for (var i = 0; i < checkCode.length; i++) {
                    allData += checkCode[i]+"*"+productC[i]+"*"+unitInput[i]+"*"+pricePInput[i]+"*"+tax[i]+"*"+taxVat[i]+"*"+totalInput[i]+"*"+warrantyInput[i]+"*"+descriptionInput[i]+"::";
                }

                allData = allData.replace(/(^::)|(::$)/g, "");
                
                if(!error) {
                    $.ajax({
                        url: base_link+'product/addProduct',
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
                                        toastr.success(" You successfully added new purchase ", "Add purchase");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=purchase'+ '&type='+ acType + '&label='+ acLabel + '&fullLink='+base_link+'transaction/viewpurchase/'+totalPurchase,
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
                                        toastr.info("Your recent activity added...", "Recent Activity");  
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
                                    $('#sample_1').dataTable().fnAddData( 
                                        [ 
                                            '<span class="row-details row-details-close"></span>',
                                            '<div class="btn-group" style="margin: -5px">'+
                                                '<button aria-expanded="false" class="btn btn-sm dark dropdown-toggle" type="button" data-toggle="dropdown"> Manage'+
                                                    '<i class="fa fa-angle-down"></i>'+
                                                '</button>'+
                                                '<ul class="dropdown-menu dropdown-menu-custom btn-group-circle" role="menu">'+
                                                    '<li id="view"'+totalPurchase+'>'+
                                                        '<a href="'+base_link+'transaction/viewpurchase/'+totalPurchase+'"><i class="fa fa-search" style="color: #26C281;"></i><span>View</span></a>'+
                                                    '</li>'+
                                                    '<li id="edit"'+totalPurchase+'>'+
                                                        '<a onclick="editData('+totalPurchase+')" href="javascript:;"><i class="fa fa-edit" style="color: #C49F47;"></i><span> Edit</span></a>'+
                                                    '</li>'+ 
                                                    '<li id="print"'+totalPurchase+'>'+
                                                        '<a href="'+base_link+'transaction/printpurchase/'+totalPurchase+'"><i class="fa fa-print" style="color: #000000;"></i><span>Print</span></a>'+
                                                    '</li>'+
                                                    '<li id="delete"'+totalPurchase+'>'+
                                                        '<a onclick="deleteData('+totalPurchase+')" href="javascript:;"><i class="fa fa-trash-o" style="color: #F1C40F;"></i><span>Archive</span></a>'+
                                                    '</li>'+
                                                '</ul>'+
                                            '</div>',
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
                                            '<span id="allData'+totalPurchase+'" style="display:none;">'+allData+'</span>',
                                            $("#invoiceNo").val(),
                                            0,
                                            0,
                                            type,
                                            r.customer,
                                            userId,
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
                                    $('#sample_1 tbody tr:first').attr('id');
                                    $('#sample_1 tbody tr:first').attr('id','purchase'+totalPurchase);
                                    $('#sample_1 tr td:last-child').css('display', 'none');
                                    $('.addPurchase').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                                    $('#addProduct').trigger("reset");
                                    $("html, body").animate({ scrollTop: '0px' }, "slow");
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
                                    $('.warrantySpan').css("display", "none");
                                    var control = customerSelect[0].selectize;
                                    control.clear(true);
                                    var control = selectizedSelect[0].selectize;
                                    control.clear(true);
                                    var control = selectizedTaxSelect[0].selectize;
                                    control.clear(true);
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
                        url: base_link+'product/updateNotePurchase',
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
                                        toastr.success(" You successfully update purchase note", "Update purchase");
                                    }, 1000);
                                }, 500);
                                var activityId = activityListId();
                                var acType = "fa-plus";
                                var acLabel = "label-success";
                                $.ajax({
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=update'+ '&title=purchase note'+ '&type='+ acType + '&label='+ acLabel + '&fullLink='+base_link+'transaction/viewpurchase/'+totalPurchase,
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
                                        toastr.info("Your recent activity added...", "Recent Activity");  
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
                $.ajax({
                    url: base_link+'product/removeFile',
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
                                    toastr.success(" You successfully update purchase note", "Update purchase");
                                }, 1000);
                            }, 500);        
                            $('.purchaseLogoDiv').slideUp(1000);
                            $('#purchaseLogo').delay(1200).slideDown();  
                            var activityId = activityListId();
                            var acType = "fa-plus";
                            var acLabel = "label-success";
                            $.ajax({
                                url: base_link+'recent_activity/add_activity/',
                                data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=update'+ '&title=purchase note'+ '&type='+ acType + '&label='+ acLabel + '&fullLink='+base_link+'transaction/viewpurchase/'+totalPurchase,
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
                                    toastr.info("Your recent activity added...", "Recent Activity");  
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
            })
        </script>
    </body>

</html>