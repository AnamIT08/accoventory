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
        <title>Status</title>
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
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/sweetalert.css" rel="stylesheet" type="text/css" >
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        <style type="text/css">
            .page-sidebar-closed .page-content-wrapper .page-content {  margin-left: 0px !important; margin-bottom: 0px; }
            .user-login-5 .login-container > .login-content { margin-top: 50px; }
            .user-login-5 .login-container > .login-content > h3 { color: #4E5A64; }
            .user-login-5 .login-container > .login-content > .login-form { margin-top: 50px; color: #A4AAB2; font-size: 13px; }
            .user-login-5 .login-container > .login-content > .login-form input { margin-bottom: 0px; }
            .inputCustomCss { margin-bottom: 25px; }
            .help-block-2 { margin-top: 25px !important; }
            .alert { margin-left: 5%; }
            .backstretch { border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed page-md">
        <!-- BEGIN HEADER -->
        <?php include('partials/top_bar_status.php'); ?>
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
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="note note-info">
                        <div class="user-login-5">
                            <div class="row bs-reset">
                                <div class="col-md-6 bs-reset">
                                    <div class="login-bg" style="background-image:url(<?php echo base_url(); ?>assets/pages/img/login/bg1.jpg)">
                                    </div>
                                </div>
                                <?php  if($this->uri->segment(3) == 'activation' && $this->uri->segment(4) != '') { ?>
                                    <div class="col-md-6 login-container bs-reset activation">
                                        <div class="login-content">
                                            <h3>Email Activation</h3>

                                            <div id="activation_status" style="margin-top:35px">
                                                <?php if($account_status == "Active") { ?>
                                                    <div class="col-md-5 alert alert-success">
                                                        <strong>Success!</strong> Email address verified. And your account successfully activated.
                                                    </div>
                                                    <script type="text/javascript">
                                                        setTimeout(function(){
                                                            window.location.href = '<?php echo base_url() ?>';
                                                        },5000)
                                                    </script>
                                                <?php } else if($account_status == "Expired") { ?>
                                                    <div class="col-md-5 alert alert-warning">
                                                        <strong>Warmimg!</strong> Your activation code expired. Without verify your account cannot Sign in. Please activate your account with new activation key.
                                                    </div>
                                                    <a id="generateActivation" class="btn blue">Resend activation Link</a>
                                                <?php } else { ?>
                                                    <div class="col-md-5 alert alert-danger">
                                                        <strong>Error!</strong> Please Contact with system administrator.
                                                    </div>
                                                <?php } ?>
                                            </div>                                     
                                        </div>
                                        <div class="login-footer">
                                            <div class="row bs-reset">
                                                <div class="col-xs-12 bs-reset">
                                                    <ul class="login-social">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="icon-social-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="icon-social-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="icon-social-dribbble"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else if($this->uri->segment(3) == 'reset_password' && $this->uri->segment(4) != '') { ?>
                                    <div class="col-md-6 login-container bs-reset resetPassword">
                                        <div class="login-content">
                                            <h3>Reset Your Password</h3>
                                            <p> Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat. Lorem ipsum dolor sit amet, coectetuer adipiscing. </p>
                                            <div id="activation_status" style="margin-top:35px">
                                                <?php if($account_status == "Active") { ?>
                                                    <div class="col-md-5 alert alert-success">
                                                        <strong>Success!</strong> Email address verified. And your account successfully activated.
                                                    </div>
                                                    // <script type="text/javascript">
                                                    //      setTimeout(function(){
                                                    //          window.location.href = '<?php echo base_url() ?>';
                                                    //      },5000);
                                                    // </script>
                                                <?php } else if($account_status == "Expired") { ?>
                                                    <div class="col-md-5 alert alert-warning">
                                                        <strong>Warmimg!</strong> Your reset code expired. Please resend your new reset key.
                                                    </div>
                                                    <a id="generateReset" class="btn blue">Resend reset Link</a>
                                                <?php } else { ?>
                                                    <div class="col-md-5 alert alert-danger">
                                                        <strong>Error!</strong> Please Contact with system administrator.
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <form action="javascript:;" class="login-form" method="post"  id="newSubmit" autocomplete="off">
                                                <div class="row">
                                                    <div class="col-xs-12 inputCustomCss" id="password_here">
                                                        <div class="form-group form-md-line-input form-md-floating-label" id="password_here_status">
                                                            <input type="password" class="form-control" name="password" autocomplete="off" value="" id="password">
                                                            <label for="password">Password</label>
                                                            <span id="password_msg" class="help-block">Type your password here...</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 inputCustomCss" id="new_password_here">
                                                        <div class="form-group form-md-line-input form-md-floating-label" id="new_password_here_status">
                                                            <input type="password" class="form-control" name="new_password" autocomplete="off" value="" id="new_password">
                                                            <label for="new_password">Confirm Password</label>
                                                            <span id="new_password_msg" class="help-block">Type your confirm password here...</span>
                                                            <span id="confirm_msg" class="help-block help-block-2"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 text-right">
                                                        <input type="hidden" class="form-control" name="hidden_key" autocomplete="off" value="<?php echo $this->uri->segment(4); ?>" id="hidden_key">
                                                        <a id="change_password" class="btn blue">Change Password</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="login-footer">
                                            <div class="row bs-reset">
                                                <div class="col-xs-12 bs-reset">
                                                    <ul class="login-social">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="icon-social-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="icon-social-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="icon-social-dribbble"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-md-5 alert alert-danger">
                                        <strong>Info!</strong> Something went wrong. Please Contact with system administrator.
                                    </div>
                                <?php } ?>
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
        <script type="text/javascript">var base_link = '<?php echo base_url(); ?>';</script>
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
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/login-5.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/form-validation-md.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script type="text/javascript">
            var base_link = "<?php echo base_url(); ?>";
            var account_status = '<?php echo $account_status ?>';
            var uri3 = '<?php echo $this->uri->segment(3) ?>';
            var uri4 = '<?php echo $this->uri->segment(4) ?>';
            $('#newSubmit').hide();

            if(uri3 != 'activation' && account_status == 'Active') {
                $('#activation_status').css('display', 'none');
                $('#newSubmit').show();
            } else {
                $('#newSubmit').hide();
            }

            $('#password, #new_password').on('keyup', function () {
                var regx = /^[A-Za-z0-9]+$/;
                if (regx.test($('#password').val())) {
                    $('#password_here_status').removeClass('has-success');
                    $('#password_here_status').addClass('has-error');
                    $('#password_msg').text('Alphanumeric only allowed !');
                } else if (regx.test($('#new_password').val())) {
                    $('#new_password_here_status').removeClass('has-success');
                    $('#new_password_here_status').addClass('has-error');
                    $('#new_password_msg').text('Alphanumeric only allowed !');
                } else if ($('#password').val() == $('#new_password').val()) {
                    $('#password_here_status').addClass('has-success');
                    $('#password_here_status').removeClass('has-error');
                    $('#new_password_here_status').addClass('has-success');
                    $('#new_password_here_status').removeClass('has-error');
                    $('#password_msg').text('Type your password here...');
                    $('#new_password_msg').text('Type your confirm password here...');
                    $('#confirm_msg').text('');
                } else {
                    $('#password_here_status').addClass('has-error');
                    $('#password_here_status').removeClass('has-success');
                    $('#new_password_here_status').addClass('has-error');
                    $('#new_password_here_status').removeClass('has-success');
                    $('#password_msg').text('Type your password here...');
                    $('#new_password_msg').text('Type your confirm password here...');
                    $('#confirm_msg').text('Password & confirm password doesnot match');
                }
            });
            
            $('#change_password').on('click', function(e) {
                var error = false;
                var userPassword = $('#password').val();
                var newUserPassword = $('#new_password').val();
                if(userPassword != "") {
                    var regx = /^[A-Za-z0-9]+$/;
                    if (!regx.test(userPassword)) {
                        $('#password_here_status').addClass('has-success');
                        $('#password_here_status').removeClass('has-error');
                    } else {
                        $('#password_here_status').removeClass('has-success');
                        $('#password_here_status').addClass('has-error');
                        $('#password_msg').text('Alphanumeric only allowed !');
                        error = true;
                    }
                } else {
                    $('#password_here_status').removeClass('has-success');
                    $('#password_here_status').addClass('has-error');
                    $('#password_msg').text('Password cannot empty');
                    error = true;
                }
                if(newUserPassword != "") {
                    var regx = /^[A-Za-z0-9]+$/;
                    if (!regx.test(newUserPassword)) {
                        $('#new_password_here_status').addClass('has-success');
                        $('#new_password_here_status').removeClass('has-error');
                    } else {
                        $('#new_password_here_status').removeClass('has-success');
                        $('#new_password_here_status').addClass('has-error');
                        $('#new_password_msg').text('Alphanumeric only allowed !');
                        error = true;
                    }
                } else {
                    $('#new_password_here_status').removeClass('has-success');
                    $('#new_password_here_status').addClass('has-error');
                    $('#new_password_msg').text('Password cannot empty');
                    error = true;
                }
                if(userPassword == newUserPassword) {
                    $('#password_here_status').addClass('has-success');
                    $('#password_here_status').removeClass('has-error');
                    $('#new_password_here_status').addClass('has-success');
                    $('#new_password_here_status').removeClass('has-error');
                    $('#confirm_msg').text('');
                } else {
                    $('#password_here_status').addClass('has-error');
                    $('#password_here_status').removeClass('has-success');
                    $('#new_password_here_status').addClass('has-error');
                    $('#new_password_here_status').removeClass('has-success');
                    $('#confirm_msg').text('Password & confirm password doesnot match');
                    error = true;
                }

                if(!error){                    
                    $.ajax({
                        url: base_link+'login/forget_password_change',
                        type: 'POST',
                        data: $('form').serialize(),
                        async: false,
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
                                            sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.responseText, "error");
                                        }
                                    }
                                });
                                setTimeout(function(){
                                    window.location.replace(base_link);
                                }, 2000);
                            } else {
                               if(r.response == "failed" && r.statusReport == "systemError") {
                                    sweetAlert("Oops...", "Sumthing went wrong. Please try again later!", "error");
                                    return false
                                } else {
                                    sweetAlert("Oops...", "Sumthing went wrong. Please try again later!", "error");
                                    return false
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
                                sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.responseText, "error");
                            }
                        }
                    });
                    return false;
                }
            });

            $('#generateActivation').on('click', function(e) {
                
                $.ajax({
                    url: base_link+'login/activationCodeResend',
                    type: 'POST',
                    data: 'type='+uri3+'&key='+uri4,
                    async: false,
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
                                        sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.responseText, "error");
                                    }
                                }
                            });
                            setTimeout(function(){
                                window.location.replace(base_link);
                            }, 2000);
                        } else {
                           if(r.response == "failed" && r.statusReport == "systemError") {
                                sweetAlert("Oops...", "Sumthing went wrong. Please try again later!", "error");
                                return false
                            } else {
                                sweetAlert("Oops...", "Sumthing went wrong. Please try again later!", "error");
                                return false
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
                            sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.responseText, "error");
                        }
                    }
                });
            });

            $('#generateReset').on('click', function(e) {
                
                $.ajax({
                    url: base_link+'login/activationCodeResend',
                    type: 'POST',
                    data: 'type='+uri3+'&key='+uri4,
                    async: false,
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
                                        sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.responseText, "error");
                                    }
                                }
                            });
                            setTimeout(function(){
                                window.location.replace(base_link);
                            }, 2000);
                        } else {
                           if(r.response == "failed" && r.statusReport == "systemError") {
                                sweetAlert("Oops...", "Sumthing went wrong. Please try again later!", "error");
                                return false
                            } else {
                                sweetAlert("Oops...", "Sumthing went wrong. Please try again later!", "error");
                                return false
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
                            sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.responseText, "error");
                        }
                    }
                });
            });
        </script>
    </body>

</html>