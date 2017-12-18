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
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/sweetalert.css" rel="stylesheet" type="text/css" >
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/overLay.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        <style type="text/css">
			#select2-sample_1_length-e7-container, .select2-selection__rendered {
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
            .modal-body { text-align: center; }
            .generatePassword { border: 1px dashed gray; padding: 5px; text-align: center; border-radius:5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; font-weight: bold; }            
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
                            <?php include('partials/profile_sidebar_team.php'); ?>
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
                                                        <a aria-expanded="false" href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab">Business Info</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form id="profileForm" role="form" action="#">
                                                            <div id="name_here" class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="text" class="form-control" name="name" autocomplete="off" value="<?php echo $self_info->subReseller[0]->userNameFull; ?>" id="name">
                                                                <label for="name">Name</label>
                                                                <span id="name_msg" class="help-block">Type your name here...</span>
                                                            </div>
                                                            <div id="email_here" class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="text" class="form-control" name="email" autocomplete="off" value="<?php echo $self_info->subReseller[0]->userEmail; ?>" id="email">
                                                                <label for="email">Email</label>
                                                                <span id="loadingEmail" style="float: right; display: none;"><i class="fa fa-spinner fa-pulse"></i></span>
                                                                <span id="email_msg" class="help-block">Type your email here...</span>
                                                            </div>
                                                            <div id="skype_here" class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="text" class="form-control" name="skype" autocomplete="off" value="<?php echo $self_info->subReseller[0]->skypeId; ?>" id="skype">
                                                                <label for="skype">Skype</label>
                                                                <span id="loadingSkype" style="float: right; display: none;"><i class="fa fa-spinner fa-pulse"></i></span>
                                                                <span id="skype_msg" class="help-block">Type your skype here...</span>
                                                            </div>
                                                            <div id="mobile_here" class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="text" class="form-control" name="mobile" autocomplete="off" value="<?php echo $self_info->subReseller[0]->userMobileNo; ?>" id="mobile">
                                                                <label for="mobile">Mobile No.</label>
                                                                <span id="loadingMobile" style="float: right; display: none;"><i class="fa fa-spinner fa-pulse"></i></span>
                                                                <span id="mobile_msg" class="help-block">Type your mobile here...</span>
                                                            </div>
                                                            <div id="nid_here" class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="text" class="form-control" name="nid" autocomplete="off" value="<?php echo $self_info->subReseller[0]->nid; ?>" id="nid">
                                                                <label for="nid">NID</label>
                                                                <span id="loadingNID" style="float: right; display: none;"><i class="fa fa-spinner fa-pulse"></i></span>
                                                                <span id="nid_msg" class="help-block">Type your NID here...</span>
                                                            </div>
                                                            <div class="margiv-top-10">
                                                                <input id="newEmail" type="hidden" name="newEmail" value="0" />
                                                                <input id="newMobile" type="hidden" name="newMobile" value="0" />
                                                                <input type="hidden" name="userId" value="<?php echo $self_info->subReseller[0]->id; ?>" />
                                                                <a id="personal" href="javascript:;" class="btn green"> Save Changes </a> 
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <form role="form" action="#">
                                                            <div id="bname_here" class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="text" class="form-control" name="bname" autocomplete="off" value="<?php echo $self_info->subReseller[0]->businessName; ?>" id="bname">
                                                                <label for="bname">Business Name</label>
                                                                <span id="bname_msg" class="help-block">Type your bname here...</span>
                                                            </div>
                                                            <div id="address_here" class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="text" class="form-control" name="address" autocomplete="off" value="<?php echo $self_info->subReseller[0]->contactAddress; ?>" id="address">
                                                                <label for="address">Address</label>
                                                                <span id="address_msg" class="help-block">Type your address here...</span>
                                                            </div>
                                                            <div id="website_here" class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="text" class="form-control" name="website" autocomplete="off" value="<?php echo $self_info->subReseller[0]->webUrl; ?>" id="website">
                                                                <label for="website">Website Url</label>
                                                                <span id="website_msg" class="help-block">Type your website here...</span>
                                                            </div>
                                                            <div class="margiv-top-10">
                                                                <input type="hidden" name="userId" value="<?php echo $self_info->subReseller[0]->id; ?>" />
                                                                <a href="javascript:;" class="btn green"> Save Changes </a>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <form action="#">
                                                            <div id="old_pass_here" class="form-group form-md-line-input form-md-floating-label">
                                                                <input class="form-control" placeholder="" reauired="required" name="old_pass" type="password"> 
                                                                <label for="old_pass">Current Password</label>
                                                                <span id="old_pass_msg" class="help-block">Type your old password here...</span>
                                                            </div>
                                                            <div id="new_pass_here" class="form-group form-md-line-input form-md-floating-label">
                                                                <input id="newPass" class="form-control" placeholder="" reauired="required" name="new_pass" type="password"> 
                                                                <label for="new_pass">New Password</label>
                                                                <span id="new_pass_msg" class="help-block">Type your new password here...</span>
                                                            </div>
                                                            <div id="con_pass_here" class="form-group form-md-line-input form-md-floating-label">
                                                                <input id="conPass" class="form-control" placeholder="" reauired="required" name="con_pass" type="password"> 
                                                                <label for="con_pass">Re-type New Password</label>
                                                                <span id="con_pass_msg" class="help-block">Type your confirm password here...</span>
                                                            </div>
                                                            <div style="margin-bottom:20px;">
                                                                <a id="cRrandom" class="btn btn-default success btn-sm" data-toggle="modal" href="#small"><i class="fa fa-random"></i>Generate Password</a>
                                                            </div>

                                                            <div class="margin-top-10">
                                                                <input type="hidden" name="userId" value="<?php echo $self_info->subReseller[0]->id; ?>" />
                                                                <a href="javascript:;" class="btn green"> Change Password </a>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
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
                    <!-- START PAGE OBERLAY -->                
                    <div id="overlay" style="display: none;">
                        <img id="loading" alt="" class="img-responsive" src="" />
                    </div>
                    <!-- END PAGE OBERLAY --> 
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
        <div class="modal fade bs-modal-sm" id="small" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Generated Password</h4>
                    </div>
                    <div class="modal-body"> <div class="generatePassword"></div> </div>
                    <div class="modal-footer">
                        <button id="closeModal" type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                        <button id="iCopy" type="button" class="btn green iCopy" data-clipboard-action="copy" data-clipboard-target="div.generatePassword">Copy Password</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- END MODAL GENERATED PASSWORD -->
        <!--[if lt IE 9]>
			<script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 
		<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script type="text/javascript">
            var base_link = "<?php echo base_url(); ?>";
            var baseId = <?php echo $this->session->userdata('id'); ?>;
        </script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
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
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-bootpag/jquery.bootpag.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/holder.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/profile.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-general.min.js" type="text/javascript"></script>
		<!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/fileUpload.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/clipboard.min.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->
        <script type="text/javascript">
            function setLoadingImage() {
                var loadingImageCollection = ['loading1.gif', 'loading2.gif', 'loading3.gif', 'loading4.gif', 'loading5.gif', 'loading6.gif', 'loading7.gif', 'loading8.gif', 'loading9.gif', 'loading10.gif', 'loading11.gif', 'loading12.gif', 'loading13.gif', 'loading14.gif', 'loading15.gif', 'loading16.gif', 'loading17.gif', 'loading18.gif'];
                var loadingImage = Math.floor(Math.random()*loadingImageCollection.length);
                var ImgSrc = base_link+"assets/uploadedFile/animation/"+loadingImageCollection[loadingImage];
                $('#loading').attr("src", ImgSrc);
            }
            $('<audio id="chatAudio"><source src="'+base_link+'assets/uploadedFile/sound/notify.ogg" type="audio/ogg"><source src="'+base_link+'assets/uploadedFile/sound/notify.mp3" type="audio/mpeg"><source src="'+base_link+'assets/uploadedFile/sound/notify.wav" type="audio/wav"></audio>').appendTo('body');
            var oldEmail = '<?php echo $self_info->subReseller[0]->userEmail; ?>';
            var oldMobile = '<?php echo $self_info->subReseller[0]->userMobileNo; ?>';
            var existsEmail = false;
            var existsMobile = false;
            var existsSkype = false;
            var existsNID = false;
            var mobileOperator = ['011', '015', '016', '017', '018', '019'];

            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test( $email );
            }
            $('#cRrandom').on('click', function(e) {
                $.ajax({
                    url: base_link+'reseller/generateResellerPassword',
                    type: 'POST',
                    async: false,
                    beforeSend: function() {
                        $('#overlay').css('display', 'block');
                        setLoadingImage();
                    },
                    complete: function() {
                        $('#overlay').css('display', 'none');
                        $('#chatAudio')[0].play();
                    },
                    success: function (status) { 
                        r = $.parseJSON(status);
                        if(r.status == "success") {
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
                                data: 'title='+ acTitle+'&type='+ acType +'&label='+ acLabel,
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
                            $('#newPass').focus();
                            $('#newPass').val(r.result);
                            $('#conPass').focus();
                            $('#conPass').val(r.result);
                            $('.generatePassword').text(r.result);
                        } else {
                            swal.showInputError("Sumthing went wrong. Please try again later!");
                            return false;
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
            $('#iCopy').on('click', function(e) {
                var clipboard = new Clipboard('.iCopy');
                clipboard.on('success', function(e) {
                    $('.modal-title').text('Generated Password Copied').css('color', 'green');
                    setTimeout(function(){
                        $("#closeModal").trigger('click');
                    }, 1500);
                });
                clipboard.on('error', function(e) {
                    $('.modal-body').append('<div class="error-error">Something went wrong.</div>');
                    setTimeout(function(){
                        $("#closeModal").trigger('click');
                    }, 1500);
                });
            });
            $("#email").blur(function() {
                var userValue = $('#email').val();
                if(userValue != "") {
                    if(!validateEmail(userValue)) {
                        $('#email_here').removeClass('has-success');
                        $('#email_here').addClass('has-error');
                        $('#email_msg').text('Type a valid email address');
                    } else {
                        if(userValue != oldEmail) {
                            $('#loadingEmail').css('display', 'inline-block');
                            $.post(base_link+"reseller/liveInputCheck/userEmail", {
                                userInput: $('#email').val()
                            }, function(response){
                                $('#loadingEmail').css('display', 'none');
                                r = $.parseJSON(response);
                                if(r.status == 'success') { 
                                    $('#email_here').addClass('has-success');
                                    $('#email_here').removeClass('has-error');
                                    $('#newEmail').val(1);
                                    existsEmail = false;
                                } else {
                                    existsEmail = true; 
                                    $('#email_here').removeClass('has-success');
                                    $('#email_here').addClass('has-error');
                                    $('#email_msg').text('Email address already exists');
                                }
                            });
                        } else {
                            $('#email_here').addClass('has-success');
                            $('#email_here').removeClass('has-error');
                        }
                    }
                } else {
                    $('#email_here').removeClass('has-success');
                    $('#email_here').addClass('has-error');
                    $('#email_msg').text('Type email here..');
                }
            });
            $("#name").blur(function() {
                var userValue = $('#name').val();
                if(userValue != "") {
                    $('#name_here').addClass('has-success');
                    $('#name_here').removeClass('has-error');
                } else {
                    $('#name_here').removeClass('has-success');
                    $('#name_here').addClass('has-error');
                    $('#name_msg').text('Type your name here..');
                }
            });
            $("#skype").blur(function() {
                var userValue = $('#skype').val();
                if(userValue != "") {
                    $('#loadingSkype').css('display', 'inline-block');
                    $.post(base_link+"reseller/liveInputCheck/skypeId", {
                        userInput: $('#skype').val()
                    }, function(response){
                        $('#loadingSkype').css('display', 'none');
                        r = $.parseJSON(response);
                        if(r.status == 'success') { 
                            $('#skype_here').addClass('has-success');
                            $('#skype_here').removeClass('has-warning');
                            $('#skype_here').removeClass('has-error');
                            existsSkype = false;
                        } else { 
                            existsSkype = true;
                            $('#skype_here').removeClass('has-success');
                            $('#skype_here').addClass('has-error');
                            $('#skype_msg').text('Skype id already exists');
                        }
                    });
                } else {
                    $('#skype_here').removeClass('has-success');
                    $('#skype_here').addClass('has-warning');
                    $('#skype_msg').text('Type your skype id here..');
                }
            });
            $("#mobile").blur(function() {
                var userValue = $('#mobile').val();
                if(userValue != "") {
                    if (!isNaN(parseInt(userValue.charAt(0), 10))) {
                        if(userValue.length == 11) {
                            var foundOperator = $.inArray(userValue.substring(0, 3), mobileOperator);
                            if(foundOperator <= 0) {
                                $('#mobile_here').removeClass('has-success');
                                $('#mobile_here').addClass('has-error');
                                $('#mobile_msg').text('Type a valid operator number');
                            } else {
                                if(userValue != oldMobile) {
                                    $('#loadingMobile').css('display', 'inline-block');
                                    $.post(base_link+"reseller/liveInputCheck/userMobileNo", {
                                        userInput: $('#mobile').val()
                                    }, function(response){
                                        $('#loadingMobile').css('display', 'none');
                                        r = $.parseJSON(response);
                                        if(r.status == 'success') { 
                                            $('#mobile_here').addClass('has-success');
                                            $('#mobile_here').removeClass('has-error');
                                            $('#newMobile').val(1);
                                            existsMobile = false;
                                        } else {
                                            existsMobile = true; 
                                            $('#mobile_here').removeClass('has-success');
                                            $('#mobile_here').addClass('has-error');
                                            $('#mobile_msg').text('Mobile no already exists');
                                        }
                                    });
                                } else {
                                    $('#mobile_here').addClass('has-success');
                                    $('#mobile_here').removeClass('has-error');
                                }
                            }
                        } else {
                            $('#mobile_here').removeClass('has-success');
                            $('#mobile_here').addClass('has-error');
                            $('#mobile_msg').text('Type a valid mobile number');
                        }
                    }
                } else {
                    $('#mobile_here').removeClass('has-success');
                    $('#mobile_here').addClass('has-error');
                    $('#mobile_msg').text('Type mobile no here..');
                }
            });
            $("#nid").blur(function() {
                var userValue = $('#nid').val();
                if(userValue != "") {
                    $('#loadingNID').css('display', 'inline-block');
                    $.post(base_link+"reseller/liveInputCheck/nid", {
                        userInput: $('#nid').val()
                    }, function(response){
                        $('#loadingNID').css('display', 'none');
                        r = $.parseJSON(response);
                        if(r.status == 'success') { 
                            $('#nid_here').addClass('has-success');
                            $('#nid_here').removeClass('has-error');
                            $('#nid_here').removeClass('has-warning');
                            existsNID = false;
                        } else { 
                            existsNID = true;
                            $('#nid_here').removeClass('has-success');
                            $('#nid_here').addClass('has-error');
                            $('#nid_msg').text('NID no already exists');
                        }
                    });
                } else {
                    $('#nid_here').removeClass('has-success');
                    $('#nid_here').addClass('has-warning');
                    $('#nid_msg').text('Type your NID here..');
                }
            });
            $('#personal').on('click', function(e) {
                var error = false;
                var nid = $('#nid').val();
                var mobile = $('#mobile').val();
                var skype = $('#skype').val();
                var name = $('#name').val();
                var email = $('#email').val();
                if(email != "") {
                    if(!validateEmail(email)) {
                        $('#email_here').removeClass('has-success');
                        $('#email_here').addClass('has-error');
                        $('#email_msg').text('Type a valid email address');
                        error = true;
                    } else {
                        $('#email_here').addClass('has-success');
                        $('#email_here').removeClass('has-error');
                    }
                } else {
                    $('#email_here').removeClass('has-success');
                    $('#email_here').addClass('has-error');
                    $('#email_msg').text('Type email here..');
                }
                if(name != "") {
                    $('#name_here').addClass('has-success');
                    $('#name_here').removeClass('has-error');
                } else {
                    $('#name_here').removeClass('has-success');
                    $('#name_here').addClass('has-error');
                    $('#name_msg').text('Type your name here..');
                    error = true;
                }
                if(skype != "") {
                    $('#skype_here').addClass('has-success');
                    $('#skype_here').removeClass('has-warning');
                } else {
                    $('#skype_here').removeClass('has-success');
                    $('#skype_here').addClass('has-warning');
                    $('#skype_msg').text('Type your skype id here..');
                }
                if(mobile != "") {
                    if (!isNaN(parseInt(mobile.charAt(0), 10))) {
                        if(mobile.length == 11) {
                            var foundOperator = $.inArray(mobile.substring(0, 3), mobileOperator);
                            if(foundOperator <= 0) {
                                $('#mobile_here').removeClass('has-success');
                                $('#mobile_here').addClass('has-error');
                                $('#mobile_msg').text('Type a valid operator number');
                                error = true;
                            } else {
                                $('#mobile_here').addClass('has-success');
                                $('#mobile_here').removeClass('has-error');
                            }
                        } else {
                            $('#mobile_here').removeClass('has-success');
                            $('#mobile_here').addClass('has-error');
                            $('#mobile_msg').text('Type a valid mobile number');
                            error = true;
                        }
                    }
                } else {
                    $('#mobile_here').removeClass('has-success');
                    $('#mobile_here').addClass('has-error');
                    $('#mobile_msg').text('Type mobile no here..');
                }
                if(nid != "") {
                    $('#nid_here').addClass('has-success');
                    $('#nid_here').removeClass('has-warning');
                } else {
                    $('#nid_here').removeClass('has-success');
                    $('#nid_here').addClass('has-warning');
                    $('#nid_msg').text('Type your NID here..');
                }
                
                if(!existsEmail && !existsMobile && !existsSkype && !existsNID && !error) {
                    $.ajax({
                        url: base_link+'reseller/resellerProfile',
                        type: 'POST',
                        data: $('#profileForm').serialize(),
                        async: false,
                        beforeSend: function() {
                            $('#overlay').css('display', 'block');
                            setLoadingImage();
                        },
                        complete: function() {
                            $('#overlay').css('display', 'none');
                            $('#chatAudio')[0].play();
                        },
                        success: function (status) { 
                            r = $.parseJSON(status);
                            if(r.status == "success") {
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
                                    data: 'title='+ acTitle+'&type='+ acType +'&label='+ acLabel,
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
                                if(r.status == 'success' && r.statusPart != '') {
                                    sweetAlert("Carefull...", "This changes make impact in your next login", "info");
                                }
                                if(r.status == 'success' && r.statusMsg == 'mobileChange') {
                                    sweetAlert("Carefull...", "This changes make impact in your next login", "info");
                                }
                                $.ajax({
                                    url: base_link + "reseller/setSesstionByAjax/userNameFull",  //Server script to process data
                                    type: 'POST',
                                    data: 'userInput='+name,
                                    success: function (data) {
                                    }
                                });
                                $('.username-hide-on-mobile').html(name);
                                $('.profile-usertitle-name').html(name);
                                $('#userButtonSkype').html('<i class="fa fa-skype"></i>'+skype);
                                $('#userButtonMobile').html('<i class="fa fa-phone"></i>'+mobile);
                                $('#userButtonEmail').html('<i class="fa fa-envelope"></i>'+email);
                                $('#newEmail').val(0);
                                $('#newMobile').val(0);
                            } else {
                                if(r.errorReason == 'cURLdisable') {
                                    sweetAlert("Oops...", "Please check server configuration for cURL.", "error");
                                } else if(r.errorReason == 'cURLexecution') {
                                    sweetAlert("Oops...", "Please check server configuration for cURL execution.", "error");
                                }  else if(r.errorReason == 'systemAuth') {
                                    sweetAlert("Oops...", "System authentication failed. Please contact with API administrator", "error");
                                } else {
                                    sweetAlert("Oops...", "Sumthing went wrong. Please try again later!", "error");
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
        </script>
    </body>

</html>