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
        <title>Accoventory Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta name="image" property="og:image" content="http://www.accoventory.vertexit.org/img/particle_logo.png" /> 
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/fonts.googleapis.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
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
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/overLay.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.png" /> 
		
		<style type="text/css">
		.form-group.form-md-line-input .help-block {
			position: absolute;
			margin: 2px 0px 0px;
			opacity: 0;
			font-size: 13px;
			margin-top: -30px !important;
		}
		
		.display-block {
			display: block;
		}
        .support-image {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
        }
        .img-sprt {
            margin-top:35px; 
            cursor: pointer;           
        }
        .img-sprt-big {
            cursor: pointer;
            display: none;
            margin-top: 15px !important;
            /*right: -100px !important;*/
        }
		</style>

	</head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset">
                    <div class="login-bg" style="background-image:url(<?php echo base_url(); ?>assets/pages/img/login/bg1.jpg)">
                        <a href="http://accoventory.com"><img class="login-logo" src="<?php echo base_url(); ?>assets/pages/img/login/logo.png" /></a>
                    </div>
                </div>
                <div class="col-md-6 login-container bs-reset">
                    <div class="login-content">
                        <h1>Accoventory Login</h1>
                        <p>Use password supplied by your authority. We recommend to use OTP (one time password) when you are using the system from cyber cafe. </p>
                        <form action="javascript:;" class="login-form" method="post"  id="newSubmit" autocomplete="off" role="form">
                            <div class="row">
								<div class="col-xs-6">
									<div class="form-group form-md-line-input form-md-floating-label" id="username_here_status">
										<input type="text" class="form-control" name="email" autocomplete="off" value="" id="email">
										<label for="email">Email/Phone</label>
										<span id="email_msg" class="help-block">Enter your email or phone no here...</span>
									</div>
								</div>
								<div class="col-xs-6" id="password_here">
									<div class="form-group form-md-line-input form-md-floating-label" id="password_here_status">
										<input type="password" class="form-control" name="password" autocomplete="off" value="" id="password">
										<label for="password">Password</label>
										<span id="password_msg" class="help-block">Type your password here...</span>
									</div>
								</div>
								<div class="col-xs-6 display-hide" id="otp_here">
									<div class="form-group form-md-line-input form-md-floating-label" id="otp_here_status">
										<input type="password" class="form-control" name="otp" autocomplete="off" value="" id="otp">
										<label for="otp">OTP</label>
										<span id="otp_msg" class="help-block">Type your OTP here...</span>
									</div>
								</div>
                            </div>
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Enter any username and password. </span>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="rem-password">
                                        <p>OTP
                                            <input id="opt" type="checkbox" class="rem-checkbox" />
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-8 text-right">
                                    <div class="forgot-password">
                                        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                                    </div>
                                    <input id="isOTP" type="hidden" name="isOTP" value="0" />
                                    <input type="hidden" name="redirectUrl" value="<?php echo $redirectUrl; ?>" />
                                    <a id="login_submit" class="btn blue">Sign In</a>
                                </div>
                            </div>
                        </form>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <form class="forget-form" action="javascript:;" method="post">
                            <h3 class="font-green">Forgot Password ?</h3>
                            <p> Enter your e-mail address below to reset your password. </p>
                            <div class="form-group" id="forget_password_here">
                                <input id="femail" class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="femail" value="" onfocus="if(this.value == 'Type valid email here...') { this.value = ''; }" />
                                <input id="url" class="form-control placeholder-no-fix" type="hidden" autocomplete="off" placeholder="URL" name="baseUrl" value="<?php echo base_url(); ?>" />
                            </div>
                            <div class="form-actions">
                                <button type="button" id="back-btn" class="btn grey btn-default">Back</button>
                                <button id="forget_submit" type="submit" class="btn blue btn-success uppercase pull-right">Submit</button>
                            </div>
                        </form>
                        <!-- END FORGOT PASSWORD FORM -->
                    </div>
                    <div class="col-md-12 bs-reset">
                        <div class="col-md-12">
                            <div class="col-md-offset-2 col-md-10 img-sprt-big">
                                <div class="text-right">
                                    <img class="img-responsive text-right" src="<?php echo base_url(); ?>assets/pages/img/login/customer_support.png" />
                                </div>
                            </div>
                            <div class="col-md-offset-10 col-md-2 text-right">
                                <img class="img-responsive img-sprt text-right" src="<?php echo base_url(); ?>assets/pages/img/login/cs-short.png" />
                            </div>
                        </div>
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-4 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="https://www.facebook.com/bizcare24" target="_blank">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://plus.google.com/105734401234058503451" target="_blank">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCaUCHtxGdidRbnwIoz_hNGw" target="_blank">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-8 bs-reset">
                                <div class="login-copyright text-right">
                                    <?php $basicSettings = $this->data_model->get_all_info('*', '', 'settings_basic'); ?>
                                    <p>Copyright &copy; <span id="footerCompany"><a href="http://accoventory.com">Accoventory</a> <?php echo date('Y'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>		
        <div id="overlay" style="display: none;">
            <img id="loading" alt="" class="img-responsive" src="" />
        </div>
		<script type="text/javascript">
		  var base_link = '<?php echo base_url(); ?>'
		</script>
        <!-- END : LOGIN PAGE 5-1 -->
        <!--[if lt IE 9]>
			<script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 
		<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
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
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/login-5.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/pages/scripts/form-validation-md.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script type="text/javascript">
            var base_link = "<?php echo base_url(); ?>";
            var mobileOperator = ['011', '015', '016', '017', '018', '019'];
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

            function toggleFullScreen() {
              if (!document.fullscreenElement &&    // alternative standard method
                  !document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
                if (document.documentElement.requestFullscreen) {
                  document.documentElement.requestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                  document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) {
                  document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                }
              } else {
                if (document.cancelFullScreen) {
                  document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                  document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                  document.webkitCancelFullScreen();
                }
              }
            }

            $(document).ready(function() {

                $('#trigger_fullscreen').click(function() {
                    toggleFullScreen();
                });
                
                $('#opt').change(function() {
                    if($(this).is(":checked")) {
                        $('#isOTP').val(1);
                        $('#otp_here').removeClass('display-hide');
                        $('#password_here').addClass('display-hide');
                        swal({
                            title: "Generate OTP!",
                            text: "Type your email here to get OTP",
                            type: "input",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            confirmButtonText: "Generate OTP",
                            animation: "slide-from-top",
                            inputPlaceholder: "email@example.com"
                        },
                        function(inputValue){
                            if (inputValue === false) return false;
                            if (inputValue === "") {
                                swal.showInputError("You need to write something!");
                                 return false
                            } else {
                                if(!validateEmail(inputValue)) {
                                    swal.showInputError("You need to write valid email!");
                                    return false;
                                } else {
                                    $.ajax({
                                        url: base_link+'login/generateOTP',
                                        type: 'POST',
                                        data: 'email='+inputValue,
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
                                                swal("Check Email!", " OTP sent in your email", "success");
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
													// dataType: 'json',
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
                                            } else {
                                                if(r.status == "failed" && r.errorReason == "emailNotExist") {
                                                    swal.showInputError("This email doesnot exists!");
                                                    return false
                                                } else if(r.status == "failed" && r.errorReason == "systemError") {
                                                    swal.showInputError("Sumthing went wrong. Please try again later!");
                                                    return false
                                                } else {
                                                    swal.showInputError("Sumthing went wrong. Please try again later!");
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
                                                sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.statusText, "error");
                                            }
                                        }
                                    });
                                }
                            }
                        });
                    } else {
                        $('#isOTP').val(0);
                        $('#password_here').removeClass('display-hide');
                        $('#otp_here').addClass('display-hide');
                    }       
                });

                $("#email").blur(function() {
                    var userValue = $('#email').val();
                    if(userValue != "") {
                        if (!isNaN(parseInt(userValue.charAt(0), 10))) {
                            if(userValue.length == 11) {
                                var foundOperator = $.inArray(userValue.substring(0, 3), mobileOperator);
                                if(foundOperator <= 0) {
                                    $('#username_here_status').removeClass('has-success');
                                    $('#username_here_status').addClass('has-error');
                                    $('#email_msg').text('Type a valid operator number');
                                } else {
                                    $('#username_here_status').addClass('has-success');
                                    $('#username_here_status').removeClass('has-error');
                                }
                            } else {
                                $('#username_here_status').removeClass('has-success');
                                $('#username_here_status').addClass('has-error');
                                $('#email_msg').text('Type a valid mobile number');
                            }
                        } else {
                            if(!validateEmail(userValue)) {
                                $('#username_here_status').removeClass('has-success');
                                $('#username_here_status').addClass('has-error');
                                $('#email_msg').text('Type a valid email address');
                            } else {
                                $('#username_here_status').addClass('has-success');
                                $('#username_here_status').removeClass('has-error');
                            }
                        }
                    } else {
                        $('#username_here_status').removeClass('has-success');
                        $('#username_here_status').addClass('has-error');
                        $('#email_msg').text('Type email or mobile no here..');
                    }
                });

                $("#password").blur(function() {
                    var userValue = $('#password').val();
                    if( userValue != "" ) {
                        var regx = /^[A-Za-z0-9]+$/;
                        if (!regx.test(userValue)) {
                            $('#password_here_status').addClass('has-success');
                            $('#password_here_status').removeClass('has-error');
                        } else {
                            $('#password_here_status').removeClass('has-success');
                            $('#password_here_status').addClass('has-error');
                            $('#password_msg').text('Alphanumeric only allowed !');
                        }
                    } else {
                        $('#password_here_status').removeClass('has-success');
                        $('#password_here_status').addClass('has-error');
                        $('#password_msg').text('Password cannot empty');
                    }
                });

                $("#otp").blur(function() {
                    var userValue = $('#otp').val();
                    if( userValue != "" ) {
                        var regx = /^[A-Za-z0-9]+$/;
                        if (!regx.test(userValue)) {
                            $('#otp_here_status').addClass('has-success');
                            $('#otp_here_status').removeClass('has-error');
                        } else {
                            $('#otp_here_status').removeClass('has-success');
                            $('#otp_here_status').addClass('has-error');
                            $('#otp_msg').text('Alphanumeric only allowed !');
                        }
                    } else {
                        $('#otp_here_status').removeClass('has-success');
                        $('#otp_here_status').addClass('has-error');
                        $('#otp_msg').text('otp cannot empty');
                    }
                });

            });

            $('#login_submit').on('click', function(e) {
                if($('#email').val() == '' || $('#password').val() == '') {
                    return false;
                }
                $('#login_submit').html('Sign In <i id="loadingSpinner" class="fa fa-spinner fa-pulse"></i>');
                e.preventDefault();
                var error = false; 
                var checkOTP = $('#isOTP').val();
                if(checkOTP == 0) {                    
                    var userEmail = $('#email').val();
                    var userPassword = $('#password').val();
                    if(userEmail != "") {
                        if (!isNaN(parseInt(userEmail.charAt(0), 10))) {
                            if(userEmail.length == 11) {
                                var foundOperator = $.inArray(userEmail.substring(0, 3), mobileOperator);
                                if(foundOperator <= 0) {
                                    $('#username_here_status').removeClass('has-success');
                                    $('#username_here_status').addClass('has-error');
                                    $('#email_msg').text('Type a valid operator number');
                                    error = true;
                                } else {
                                    $('#username_here_status').addClass('has-success');
                                    $('#username_here_status').removeClass('has-error');
                                }
                            } else {
                                $('#username_here_status').removeClass('has-success');
                                $('#username_here_status').addClass('has-error');
                                $('#email_msg').text('Type a valid mobile number');
                                error = true;
                            }
                        } else {
                            if(!validateEmail(userEmail)) {
                                $('#username_here_status').removeClass('has-success');
                                $('#username_here_status').addClass('has-error');
                                $('#email_msg').text('Type a valid email address');
                                error = true;
                            } else {
                                $('#username_here_status').addClass('has-success');
                                $('#username_here_status').removeClass('has-error');
                            }
                        }
                    } else {
                        $('#username_here_status').removeClass('has-success');
                        $('#username_here_status').addClass('has-error');
                        $('#email_msg').text('Type email or mobile no here..');
                        error = true;
                    }

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
                    
                    if(!error) {
                        $.ajax({
                            url: base_link+'login/userLoginCheck',
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
                                            toastr.success(" You login now.", "Login");
                                        }, 1000);
                                    }, 500);
                                    var acTitle = "Remark new added";
                                    var acType = "fa-add";
                                    var acLabel = "label-success";
                                    $.ajax({
                                        url: base_link+'recent_activity/login_activity/',
                                        data: 'title='+ acTitle+'&type='+ acType +'&label='+ acLabel,
                                        type: "POST",										
										dataType: 'json',
										// contentType: 'json',
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
                                            toastr.info("", "Recent activity recorded.");  
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
                                        if(r.isDashboard == 1) {
                                            window.location.replace(base_link+""+r.redirectUrl);
                                        } else {
                                            window.location.replace(base_link+"profile/team/"+r.profile);
                                        }
                                    }, 2000);
                                } else {
                                    if(r.errorReason == 'cURLdisable') {
                                        sweetAlert("Oops...", "Please check server configuration for cURL.", "error");
                                    } else if(r.errorReason == 'cURLexecution') {
                                        sweetAlert("Oops...", "Please check server configuration for cURL execution.", "error");
                                    } else if(r.errorReason == 'systemAuth') {
                                        sweetAlert("Oops...", "System authentication failed. Please contact with API administrator", "error");
                                    } else if(r.errorReason == 'emailError') {
                                       swal({
                                            title: "Email not verified.",
                                            text: 'If you not get verification link. <br/>Click "Send Verification Code & wait."',
                                            type: "error",
                                            html: true,
                                            showCancelButton: true,
                                            cancelButtonColor: "#DD6B55",
                                            confirmButtonColor: "#26C281",
                                            confirmButtonText: "Send Verification Code",
                                            cancelButtonText: "No, cancel!",
                                            closeOnConfirm: false,
                                            closeOnCancel: false
                                        },
                                        function(isConfirm){
                                            if (isConfirm) {
                                                $.ajax({
                                                    url: base_link+'login/generateActivationCode',
                                                    type: 'POST',
                                                    data: 'email='+userEmail,
                                                    async: false,
                                                    success: function (status) { 
                                                        r = $.parseJSON(status);
                                                        if(r.status == "success") {
                                                            swal("Sent!", "Please, check spam box in your email.", "success");
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
                                                                    toastr.success(" Activation code already sent in your email.", "Activation");
                                                                }, 1000);
                                                            }, 500);
                                                            var acTitle = "Activation code";
                                                            var acType = "fa-edit";
                                                            var acLabel = "label-success";
                                                            $.ajax({
                                                                url: base_link+'recent_activity/add_activity/',
                                                                data: 'title='+ acTitle+'&type='+ acType +'&label='+ acLabel,
                                                                type: "POST",
																dataType: 'json',
																// contentType: 'json',
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
                                                                    toastr.info("", "Recent activity recorder");  
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
                                                        } else {
                                                            if(r.status == "failed" && r.errorReason == "emailNotExist") {
                                                                swal.showInputError("This email doesnot exists!");
                                                                return false
                                                            } else if(r.status == "failed" && r.errorReason == "systemError") {
                                                                swal.showInputError("Sumthing went wrong. Please try again later!");
                                                                return false
                                                            } else {
                                                                swal.showInputError("Sumthing went wrong. Please try again later!");
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
                                                            sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.statusText, "error");
                                                        }
                                                    }
                                                });
                                            } else {
                                                swal("Cancelled", "Without email vetified you cannot signin here :)", "error");
                                            }
                                        });
                                    } else if(r.errorReason == 'mobileError') {
                                        sweetAlert("Oops...", "Your mobile nuber not verified yet. Please contact with the system, authorized person.", "error");
                                    } else if(r.errorReason == 'accountDeleteError') {
                                        sweetAlert("Oops...", "Your account delete by admin. Please contact with the system, authorized person.", "error");
                                    } else if(r.errorReason == 'accountSuspendError') {
                                        sweetAlert("Oops...", "Your account suspends by admin. Please contact with the system, authorized person.", "error");
                                    } else {
                                        sweetAlert("Oops...", "Your given credentials does not match.", "error");
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
                    var userEmail = $('#email').val();
                    var userOTP = $('#otp').val();
                    if(userEmail != "") {
                        if (!isNaN(parseInt(userEmail.charAt(0), 10))) {
                            if(userEmail.length == 11) {
                                var foundOperator = $.inArray(userEmail.substring(0, 3), mobileOperator);
                                if(foundOperator <= 0) {
                                    $('#username_here_status').removeClass('has-success');
                                    $('#username_here_status').addClass('has-error');
                                    $('#email_msg').text('Type a valid operator number');
                                    error = true;
                                } else {
                                    $('#username_here_status').addClass('has-success');
                                    $('#username_here_status').removeClass('has-error');
                                }
                            } else {
                                $('#username_here_status').removeClass('has-success');
                                $('#username_here_status').addClass('has-error');
                                $('#email_msg').text('Type a valid mobile number');
                                error = true;
                            }
                        } else {
                            if(!validateEmail(userEmail)) {
                                $('#username_here_status').removeClass('has-success');
                                $('#username_here_status').addClass('has-error');
                                $('#email_msg').text('Type a valid email address');
                                error = true;
                            } else {
                                $('#username_here_status').addClass('has-success');
                                $('#username_here_status').removeClass('has-error');
                            }
                        }
                    } else {
                        $('#username_here_status').removeClass('has-success');
                        $('#username_here_status').addClass('has-error');
                        $('#email_msg').text('Type email or mobile no here..');
                        error = true;
                    }
                    if(userOTP != "") {
                        var regx = /^[A-Za-z0-9]+$/;
                        if (!regx.test(userOTP)) {
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
                    if(!error){                    
                        $.ajax({
                            url: base_link+'login/userLoginCheckOTP',
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
                                        url: base_link+'recent_activity/login_activity/',
                                        data: 'title='+ acTitle+'&type='+ acType +'&label='+ acLabel,
                                        type: "POST",
										dataType: 'json',
										// contentType: 'json',
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

                                    setTimeout(function(){
                                        if(r.isDashboard == 1) {
                                            window.location.replace(base_link+""+r.redirectUrl);
                                        } else {
                                            window.location.replace(base_link+"profile/team/"+r.profile);
                                        }
                                    }, 2000);
                                } else {
                                    if(r.errorReason == 'emailError') {
                                       swal({
                                            title: "Email not verified.",
                                            text: 'If you not get verification link. <br/>Click "Send Verification Code & wait."',
                                            type: "error",
                                            html: true,
                                            showCancelButton: true,
                                            cancelButtonColor: "#DD6B55",
                                            confirmButtonColor: "#26C281",
                                            confirmButtonText: "Send Verification Code",
                                            cancelButtonText: "No, cancel!",
                                            closeOnConfirm: false,
                                            closeOnCancel: false
                                        },
                                        function(isConfirm){
                                            if (isConfirm) {
                                                $.ajax({
                                                    url: base_link+'login/generateActivationCode',
                                                    type: 'POST',
                                                    data: 'email='+userEmail,
                                                    async: false,
                                                    success: function (status) { 
                                                        r = $.parseJSON(status);
                                                        if(r.status == "success") {
                                                            swal("Sent!", "Please, check spam box in your email.", "success");
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
																dataType: 'json',
																// contentType: 'json',
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
                                                        } else {
                                                            if(r.status == "failed" && r.errorReason == "emailNotExist") {
                                                                swal.showInputError("This email doesnot exists!");
                                                                return false
                                                            } else if(r.status == "failed" && r.errorReason == "systemError") {
                                                                swal.showInputError("Sumthing went wrong. Please try again later!");
                                                                return false
                                                            } else {
                                                                swal.showInputError("Sumthing went wrong. Please try again later!");
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
                                                            sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.statusText, "error");
                                                        }
                                                    }
                                                });
                                            } else {
                                                swal("Cancelled", "Without email vetified you cannot signin here :)", "error");
                                            }
                                        });
                                    } else if(r.errorReason == 'mobileError') {
                                        sweetAlert("Oops...", "Your mobile nuber not verified yet. Please contact with the system, authorized person.", "error");
                                    } else if(r.errorReason == 'accountDeleteError') {
                                        sweetAlert("Oops...", "Your account delete by admin. Please contact with the system, authorized person.", "error");
                                    } else if(r.errorReason == 'accountSuspendError') {
                                        sweetAlert("Oops...", "Your account suspends by admin. Please contact with the system, authorized person..", "error");
                                    } else if(r.errorReason == 'OTPexpire') {
                                        swal({
                                            title: "OTP Expired",
                                            text: "Generate new OTP",
                                            type: "warning",
                                            showCancelButton: true,
                                            confirmButtonColor: "#DD6B55",
                                            confirmButtonText: "Generate OTP",
                                            cancelButtonText: "Cancle",
                                            closeOnConfirm: false,
                                            closeOnCancel: false
                                        },
                                        function(isConfirm){
                                            if (isConfirm) {
                                                $.ajax({
                                                    url: base_link+'login/generateOTP',
                                                    type: 'POST',
                                                    data: 'email='+userEmail,
                                                    async: false,
                                                    success: function (status) { 
                                                        r = $.parseJSON(status);
                                                        if(r.status == "success") {
                                                            swal("Check Email!", " OTP sent in your email", "success");
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
																dataType: 'json',
																// contentType: 'json',
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
                                                        } else {
                                                            if(r.status == "failed" && r.errorReason == "emailNotExist") {
                                                                swal.showInputError("This email doesnot exists!");
                                                                return false
                                                            } else if(r.status == "failed" && r.errorReason == "systemError") {
                                                                swal.showInputError("Sumthing went wrong. Please try again later!");
                                                                return false
                                                            } else {
                                                                swal.showInputError("Sumthing went wrong. Please try again later!");
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
                                                            sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.statusText, "error");
                                                        }
                                                    }
                                                });
                                            } else {
                                                swal("Cancelled", "Try later :)", "error");
                                            }
                                        });
                                    } else {
                                        sweetAlert("Oops...", "Your given credentials does not match.", "error");
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

            $('#forget_submit').on('click', function(e) {
                e.preventDefault();
                var userEmail = $('#femail').val();
                var error = false;
                if(userEmail != "") {                            
                    if(!validateEmail(userEmail)) {
                        $('#forget_password_here').removeClass('has-success');
                        $('#forget_password_here').addClass('has-error');
                        $('#femail').val('Type valid email here...');
                        $('#femail').css('color','red');
                        setTimeout(function(){
                        $('#femail').css('color', '');
                    }, 3000);
                        error = true;
                    } else {
                        $('#forget_password_here').addClass('has-success');
                        $('#forget_password_here').removeClass('has-error');
                        if(!error){                    
                            $.ajax({
                                url: base_link+'login/forget_password',
                                type: 'POST',
                                data: 'email='+userEmail+'&url='+$('#url').val(),
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
                                            url: base_link+'recent_activity/add_activity_without_toastr/',
                                            data: 'title='+ acTitle+'&type='+ acType +'&label='+ acLabel,
                                            type: "POST",
											// dataType: 'json',
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
                                            window.location.replace(base_link);
                                        }, 2000);
                                    } else {
                                       if(r.status == "failed" && r.errorReason == "emailNotExist") {
                                            sweetAlert("Oops...", "This email doesnot exists!", "error");
                                            return false
                                        } else if(r.status == "failed" && r.errorReason == "systemError") {
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
                                        sweetAlert("Oops...", "Uncaught Error.\n" + jqXHR.statusText, "error");
                                    }
                                }
                            });
                            return false;
                        }
                    }
                } else {
                    $('#forget_password_here').removeClass('has-success');
                    $('#forget_password_here').addClass('has-error');
                    $('#femail').val('Type valid email here...');
                    $('#femail').css('color','red');
                    setTimeout(function(){
                        $('#femail').css('color', '');
                    }, 3000);
                    error = true;
                }
            });
            var enterCount = 1;
            $(document).bind("keydown", function(e){
                if(e.keyCode == 13) {
                    // if(enterCount == 1){
                        $('#login_submit').trigger("click");
                    // }
                    // ++enterCount;
                }
            });
            $( ".img-sprt" ).hover(function() {
                $('.img-sprt-big').toggle();
                $('.img-sprt').toggle();
            });
            $( ".img-sprt-big" ).hover(function() {
                $('.img-sprt-big').toggle();
                $('.img-sprt').toggle();
            });
        </script>
    </body>         
</html>