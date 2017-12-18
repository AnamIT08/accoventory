<?php
    function addOrdinalNumberSuffix($num) {
        if (!in_array(($num % 100),array(11,12,13))){
            switch ($num % 10) {
                // Handle 1st, 2nd, 3rd
                case 1:  return $num.'st';
                case 2:  return $num.'nd';
                case 3:  return $num.'rd';
            }
        }
        return $num.'th';
    } 
?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
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
        <title>Metronic | User Lock Screen 2</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/fonts.googleapis.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url(); ?>assets/pages/css/lock-2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/sweetalert.css" rel="stylesheet" type="text/css" >
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.png" />
        <style type="text/css">
            .page-lock-img {
                border-radius: 50% !important;
                width: 150px !important;
                margin: 5% !important;
            }
            #codeigniter_profiler { display: none; }
            @font-face {
                font-family: myFirstFont;
                src: url("<?php echo base_url(); ?>assets/systemOwn/font-digital-7/digital-7.ttf");
            }
            .digital { font-size: 15px; }
            .watch, .watchT { font-family: myFirstFont; font-size: 25px; }
            .page-footer-custom, .relogin a { color: #414141 !important; }
            a { text-decoration: none !important; }
            .locked i { font-size: 35px; padding: 10px 0px 0px 0px; float: left;; }
            .lockedSpan { float: left;; font-size: 15px; margin: 10px 10px !important; margin-bottom: 15px !important; }
            .relogin a:hover { color: #F8932E !important; }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="">
        <div class="page-lock">
            <div class="page-logo">
                <a class="brand" href="index.html">
                    <img src="<?php echo base_url(); ?>assets/layouts/layout4/img/<?php echo $basicSettings[0]->defaultLogo ?>" alt="logo" class="logo-default" style="margin: 29px 0px 0px 0px; cursor: pointer;" />    
                </a>
            </div>
            <div class="page-body">
                <?php
                    if($this->session->userdata('picture') != "") {
                        if (file_exists('./assets/uploadedFile/profilePicture/'.$this->session->userdata('picture'))) {
                            echo '<img id="user_profile_image" src="'.base_url().'assets/uploadedFile/profilePicture/'.$this->session->userdata('picture').'" class="page-lock-img img-responsive profile-image" alt="" />';
                        } else {
                            echo '<img id="user_profile_image" alt="" class="page-lock-img img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" />';
                        }
                    } else {
                        echo '<img id="user_profile_image" alt="" class="page-lock-img img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" />';
                    }
                    ?>
                <div class="page-lock-info">
                    <h1><?php echo $this->session->userdata('userNameFull'); ?></h1>
                    <div class="digital">
                        <span class="date">
                            <?php echo addOrdinalNumberSuffix(date('d'))." ".date("F Y") ?>
                        </span><br/>
                        <span class="watch">
                            <?php echo ltrim(date("h:i:s"), 0); ?>
                        </span>
                        <span class="watchT"><?php echo ltrim(date("A"), 0); ?></span>
                    </div>
                    <div class="locked"> <i class="fa fa-lock"></i> </div>
                    <div class="lockedSpan">Your Profile locked now.</div>
                    <form action="javascript:;" class="login-form" method="post" id="newSubmit" autocomplete="off" role="form" style="margin-top: 10px">
                        <div class="input-group input-medium">
                            <input type="password" class="form-control" name="password" placeholder="Secret Key" autocomplete="off" value="" id="password">
                            <input type="hidden" name="redirectUrl" value="<?php echo $redirectUrl; ?>" />
                            <span class="input-group-btn">
                                <button id="login_submit" type="submit" class="btn green icn-only">
                                    <i class="fa fa-key"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                        <div class="relogin">
                            <a href="<?php echo base_url(); ?>login"> Not <?php echo $this->session->userdata('userNameFull'); ?> ? </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="page-footer-custom"><?php echo date('Y'); ?> &copy; <span id="footerCompany"><?php if($basicSettings[0]->companyName != '') { echo $basicSettings[0]->companyName; } else { echo "Company Name"; } ?></span>. Powered by <a href="http://www.businesscare24.com" title="" target="_blank">Busicess Care</a> </div>
        </div>
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
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/lock-2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script type="text/javascript">
            var base_link = "<?php echo base_url(); ?>";
            $('<audio id="chatAudio"><source src="'+base_link+'assets/uploadedFile/sound/notify.ogg" type="audio/ogg"><source src="'+base_link+'assets/uploadedFile/sound/notify.mp3" type="audio/mpeg"><source src="'+base_link+'assets/uploadedFile/sound/notify.wav" type="audio/wav"></audio>').appendTo('body');
            function setLoadingImage() {
                var loadingImageCollection = ['loading16.gif'];
                var loadingImage = Math.floor(Math.random()*loadingImageCollection.length);
                var ImgSrc = base_link+"assets/uploadedFile/animation/"+loadingImageCollection[loadingImage];
                $('#loading').attr("src", ImgSrc);
            }  
            function updateClock () {
                var currentTime = new Date ( );
                var currentHours = currentTime.getHours ( );
                var currentMinutes = currentTime.getMinutes ( );
                var currentSeconds = currentTime.getSeconds ( );
                currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
                currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
                var timeOfDay = '';//( currentHours < 12 ) ? "AM" : "PM";
                currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
                currentHours = ( currentHours == 0 ) ? 12 : currentHours;
                var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
                $(".watch").html(currentTimeString);
            }

            $(document).ready(function() {
               setInterval('updateClock()', 1000);
            });

            $('#login_submit').on('click', function(e) {
                var error = false;
                var userPassword = $('#password').val();
                if(userPassword != "") {
                    var regx = /^[A-Za-z0-9]+$/;
                    if (!regx.test(userPassword)) {
                        $('.input-group').addClass('has-success');
                        $('.input-group').removeClass('has-error');
                    } else {
                        $('.input-group').removeClass('has-success');
                        $('.input-group').addClass('has-error');
                        error = true;
                    }
                } else {
                    $('.input-group').removeClass('has-success');
                    $('.input-group').addClass('has-error');
                    error = true;
                }
                if(!error) {
                    $.ajax({
                        url: base_link+'login/resellerLockCheck',
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
                                    url: base_link+'recent_activity/add_activity/',
                                    data: 'title='+ acTitle+'&type='+ acType +'&label='+ acLabel,
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
                                    window.location.replace(base_link+""+r.redirectUrl);
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
                                        } else {
                                            swal("Cancelled", "Without email vetified you cannot signin here :)", "error");
                                        }
                                    });
                                } else if(r.errorReason == 'mobileError') {
                                    sweetAlert("Oops...", "Your mobile nuber not verified yet. Please contact with syatem authorized person.", "error");
                                } else if(r.errorReason == 'accountDeleteError') {
                                    sweetAlert("Oops...", "Your account delete by admin. Please contact with syatem authorized person.", "error");
                                } else if(r.errorReason == 'accountSuspendError') {
                                    sweetAlert("Oops...", "Your account suspend by admin. Please contact with syatem authorized person.", "error");
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
            });
        </script>
    </body>

</html>