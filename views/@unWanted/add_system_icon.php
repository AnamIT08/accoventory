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
        <title>Metronic | Closed Sidebar</title>
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
        <link href="<?php echo base_url(); ?>assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/sweetalert.css" rel="stylesheet" type="text/css" >
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        <style type="text/css">
            .ibox-title {
                -moz-border-bottom-colors: none;
                -moz-border-left-colors: none;
                -moz-border-right-colors: none;
                -moz-border-top-colors: none;
                background-color: #FFF;
                border-color: #E7EAEC #E7EAEC rgba(0, 0, 0, 1);
                border-image: none;
                border-style: none none dashed;
                border-width: 0px 0px 1px;
                color: inherit;
                margin-bottom: 0px;
                padding: 14px 15px 7px;
                height: 48px;
                margin-top: -30px; 
            }
            #icon_form {
                width: 90%;
                margin: 5%;
            }
            button.btn {
                margin-right: 5px;
            }
            .deleteIcon {
                color: red;
                cursor: pointer !important;
                font-size: 20px;
                position: absolute;;
                margin-left: -15px;
                margin-top: -5px;
            }
            .buttonDiv { position: relative; float: left; margin-top: 15px; margin-left: 5px; }
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
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet bordered">
                                    <div class="ibox-title">
                                        <h5 id="titleBanner" style="font-weight:bold;">
                                            Add System Icon 
                                        </h5>
                                    </div>
                                    <form action="javascript:;" class="login-form" method="post"  id="icon_form" role="form">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group form-md-line-input form-md-floating-label" id="name_here_status">
                                                    <input type="text" class="form-control" name="name" autocomplete="off" value="" id="name">
                                                    <label for="name">Systel Icon Name</label>
                                                    <span id="name_msg" class="help-block">Enter system icon name here...</span>
                                                </div>
                                            </div><br/><br/><br/><br/>
                                            <div class="col-xs-12" id="class_name_here">
                                                <div class="form-group form-md-line-input form-md-floating-label" id="class_name_here_status">
                                                    <input type="text" class="form-control ibacor_fi" data-prefix="fa fa-" readonly="readonly" name="class_name" autocomplete="off" value="" id="class_name">
                                                    <label for="class_name">System Icon Class</label>
                                                    <span id="class_name_msg" class="help-block">Type system icon class here...</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 text-right" style="margin-top:25px;">
                                                <input id="old_id" type="hidden" name="old_id" value="0" />
                                                <button id="class_name_submit" class="btn blue" type="submit">Add System Icon</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                <div class="portlet light bordered">
                                    <!-- STAT -->
                                    <div class="row list-separated profile-stat">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="uppercase profile-stat-title"> <?php echo count($all_icons); ?> </div>
                                            <div class="uppercase profile-stat-text"> System Icon Added </div>
                                        </div>
                                    </div>
                                    <!-- END STAT -->
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- BEGIN PORTLET -->
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption caption-md">
                                                    <i class="icon-bar-chart theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">System Icon List</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-scrollable table-scrollable-borderless">
                                                    <?php   foreach ($all_icons as $icon) { ?>
                                                        <div class="buttonDiv">
                                                            <button type="button" class="btn grey-cascade"><i class="<?php echo $icon->iconClass; ?>" style="color:black;"></i> <?php echo $icon->name; ?> </button><i class="fa fa-times-circle-o deleteIcon" onClick="editIconClass(<?php echo $icon->id; ?>,'<?php echo $icon->name; ?>','<?php echo $icon->iconClass; ?>')" ></i>
                                                        </div>
                                                    <?php   } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END PORTLET -->
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
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
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/profile.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/jquery.prefix-input.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->
        <script type="text/javascript">
            var base_link = "<?php echo base_url(); ?>";
            var systemClass = '<?php echo $this->uri->segment(1) ?>';
            var systemFunction = '<?php echo $this->uri->segment(2) ?>';
            $('#name').on('keyup', function () {
                var nameValue = $('#name').val();
                $('#class_name').val('fa fa-'+nameValue);
                var className = $('#class_name').val(); 

                if(nameValue != "") {
                    $('#name_here_status').addClass('has-success');
                    $('#name_here_status').removeClass('has-error');
                } 
                if(className != "") {
                    $('#class_name_here_status').addClass('has-success');
                    $('#class_name_here_status').removeClass('has-error');
                }              
            });

            $('#class_name_submit').on('click', function(e) {
                var error = false;
                var old_id = $('#old_id').val();
                var nameValue = $('#name').val();
                var className = $('#class_name').val();
                if(nameValue != "") {
                    $('#name_here_status').addClass('has-success');
                    $('#name_here_status').removeClass('has-error');
                } else {
                    $('#name_here_status').removeClass('has-success');
                    $('#name_here_status').addClass('has-error');
                    $('#name_msg').text('System icon name cannot empty');
                    error = true;
                }

                if(className != "") {
                    $('#class_name_here_status').addClass('has-success');
                    $('#class_name_here_status').removeClass('has-error');
                } else {
                    $('#class_name_here_status').removeClass('has-success');
                    $('#class_name_here_status').addClass('has-error');
                    $('#class_name_msg').text('System icon name cannot empty');
                    error = true;
                }

                if(old_id == 0) {
                    if(!error){                    
                        $.ajax({
                            url: base_link+'settings_submit/add_system_icon_submit',
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
                                        window.location.replace(base_link+systemClass+'/'+systemFunction);
                                    }, 2000);
                                } else {
                                    if(r.response == "failed" && r.statusReport == "iconError") {
                                        sweetAlert("Oops...", "This system icon already exists!", "error");
                                        return false
                                    } else if(r.response == "failed" && r.statusReport == "systemError") {
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
                } else {
                    if(!error){                    
                        $.ajax({
                            url: base_link+'settings_submit/add_system_icon_update',
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
                                        window.location.replace(base_link+systemClass+'/'+systemFunction);
                                    }, 2000);
                                } else {
                                    if(r.response == "failed" && r.statusReport == "iconError") {
                                        sweetAlert("Oops...", "This system icon already exists!", "error");
                                        return false
                                    } else if(r.response == "failed" && r.statusReport == "systemError") {
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
                }
            });

            function editIconClass(id, name, class_name) {
                $('#class_name_submit').attr('id', 'update_submit');
                $('#update_submit').text('Update System Icon');
                $("#name").focus();
                $('#old_id').val(id);
                $('#name').val(name);
                $('#class_name').val(class_name);
            }
        </script>
    </body>

</html>