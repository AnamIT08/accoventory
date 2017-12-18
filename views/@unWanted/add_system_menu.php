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
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/jquery-nestable/jquery.nestable.css" rel="stylesheet" type="text/css" />
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

            #menu_form,#sub_menu_form {
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
            .form-group-custom {
                margin-bottom: 10px !important;
            }
            .form-group-custom-select {
                margin-top: 75px;
            }
            .has-sub>ol { display: none; }
            .menuIcon { padding-right: 20px; }
            .editMenu { float: right; cursor: pointer; } .editMenu:hover { color: yellow; }
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
                                        <h5 id="titleBanner" style="font-weight:bold;">Add System Menu</h5>
                                    </div>
                                    <form action="javascript:;" class="login-form" method="post"  id="menu_form" role="form">
                                        <div class="row">
                                            <div class="col-xs-12 form-group-custom">
                                                <div class="form-group form-md-line-input form-md-floating-label" id="menu_name_here_status">
                                                    <input type="text" class="form-control" name="menu_name" autocomplete="off" value="" id="menu_name">
                                                    <label for="menu_name">Menu Name</label>
                                                    <span id="menu_name_msg" class="help-block">Type menu name here...</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group-custom" id="menu_icon_status">
                                                <label class="control-label col-md-12">Select Menu Icon</label>
                                                <div class="col-md-12">
                                                    <select class="bs-select form-control" data-show-subtext="true" data-live-search="true" name="menu_icon" id="menu_icon">
                                                        <option data-icon="fa-search icon-search" value="Select...">Select...</option>
                                                        <?php foreach ($all_icons as $icon) { ?>
                                                            <option data-icon="<?php echo $icon->iconClass; ?>" value="<?php echo $icon->iconClass; ?>"><?php echo $icon->name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div><br/>
                                        <div class="row">
                                            <div class="col-xs-12 form-group-custom">
                                                <div class="form-group form-md-line-input" id="menu_details_here">
                                                    <textarea id="menu_details" class="form-control" name="menu_details" rows="3"></textarea>
                                                    <label for="form_control_1">Menu Details</label>
                                                    <span id="menu_details_msg" class="help-block">Type menu details here...</span>
                                                </div>
                                            </div>
                                        </div><br/>
                                        <div class="row">
                                            <div class="col-sm-12 text-right" style="margin-top:15px;">
                                                <input id="old_id" type="hidden" name="old_id" value="0" />
                                                <button id="add_menu" class="btn blue" type="submit">Add System Menu</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="portlet light profile-sidebar-portlet bordered">
                                    <div class="ibox-title">
                                        <h5 id="titleBanner" style="font-weight:bold;">Add System Sub Menu</h5>
                                    </div>
                                    <form action="javascript:;" class="login-form" method="post"  id="sub_menu_form" role="form">
                                        <div class="row">
                                            <div class="col-xs-12 form-group-custom">
                                                <div class="form-group form-md-line-input form-md-floating-label" id="menu_name_here_status">
                                                    <input type="text" class="form-control" name="menu_name" autocomplete="off" value="" id="menu_name">
                                                    <label for="menu_name">Menu Name</label>
                                                    <span id="menu_name_msg" class="help-block">Enter menu name here...</span>
                                                </div>
                                            </div><br><br>
                                            <div class="form-group form-group-custom">
                                                <label class="control-label col-md-12">Select Icon</label>
                                                <div class="col-md-12">
                                                    <select class="bs-select form-control" data-show-subtext="true" data-live-search="true">
                                                        <option data-icon="fa-search icon-search" value="Select...">Select...</option>
                                                        <option data-icon="fa-glass icon-success">Mustard</option>
                                                        <option data-icon="fa-heart icon-info">Ketchup</option>
                                                        <option data-icon="fa-film icon-default">Relish</option>
                                                        <option data-icon="fa-home icon-warning">Mayonnaise</option>
                                                        <option data-icon="fa-user icon-danger">Barbecue Sauce</option>
                                                    </select>
                                                </div>
                                            </div><br/>
                                            <div class="form-group form-group-custom-select">
                                                <label class="control-label col-md-12">Select Root Menu</label>
                                                <div class="col-md-12">
                                                    <select class="bs-select form-control" data-show-subtext="true" data-live-search="true">
                                                        <option data-icon="fa-search icon-search" value="Select...">Select...</option>
                                                        <option data-icon="fa-glass icon-success">Mustard</option>
                                                        <option data-icon="fa-heart icon-info">Ketchup</option>
                                                        <option data-icon="fa-film icon-default">Relish</option>
                                                        <option data-icon="fa-home icon-warning">Mayonnaise</option>
                                                        <option data-icon="fa-user icon-danger">Barbecue Sauce</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 form-group-custom" id="password_here">
                                                <div class="form-group form-md-line-input form-md-floating-label" id="password_here_status">
                                                    <input type="password" class="form-control" name="password" autocomplete="off" value="" id="password">
                                                    <label for="password">Menu Class Name</label>
                                                    <span id="password_msg" class="help-block">Type menu class name here...</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 form-group-custom" id="password_here">
                                                <div class="form-group form-md-line-input form-md-floating-label" id="password_here_status">
                                                    <input type="password" class="form-control" name="password" autocomplete="off" value="" id="password">
                                                    <label for="password">Menu Function Name</label>
                                                    <span id="password_msg" class="help-block">Type menu function name here...</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 form-group-custom" id="password_here">
                                                <div class="form-group form-md-line-input form-md-floating-label" id="password_here_status">
                                                    <input type="password" class="form-control" name="password" autocomplete="off" value="" id="password">
                                                    <label for="password">Menu Target Location</label>
                                                    <span id="password_msg" class="help-block">Type menu open location here...</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 form-group-custom" id="password_here">
                                                <div class="form-group form-md-line-input">
                                                    <textarea class="form-control" name="memo" rows="3"></textarea>
                                                    <label for="form_control_1">Menu Details</label>
                                                    <span class="help-block">Type menu details here...</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 text-right" style="margin-top:15px;">
                                                <button id="password_submit" class="btn blue" type="submit">Add System Icon</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                <div class="portlet light bordered">
                                    <!-- STAT -->
                                    <div class="row list-separated profile-stat">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 37 </div>
                                            <div class="uppercase profile-stat-text"> System Icon Added </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 37 </div>
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
                                                <div class="caption">
                                                    <i class="icon-bubble font-purple"></i>
                                                    <span class="caption-subject font-purple sbold uppercase">Nestable List 3</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="dd" id="nestable_list_3">
                                                    <ol class="dd-list" id="sorder">
                                                        <?php 
                                                            foreach ($all_menus as $menu) {
                                                                $sub_menus = $this->data_model->get_all_info_where_with_order('*', array('parentId' => $menu->id), 'sortBy', 'ASC', 'login_site_menu');
                                                                $countSubMenu = count($sub_menus);
                                                        ?>
                                                            <li class="dd-item dd3-item has-sub" data-id="<?php echo $menu->id; ?>" id="categories_id_<?php echo $menu->id; ?>">
                                                                <?php if($countSubMenu > 0) { ?>
                                                                <button id="collapse_<?php echo $menu->id; ?>" onClick="collapse(<?php echo $menu->id; ?>)" data-action="collapse" type="button" style="display:none;">Collapse</button>
                                                                <button id="expand_<?php echo $menu->id; ?>" onClick="expand(<?php echo $menu->id; ?>)" data-action="expand" type="button">Expand</button>
                                                                <?php } ?>
                                                                <div class="dd-handle dd3-handle"> </div>
                                                                <div class="dd3-content">
                                                                    <i class="menuIcon <?php echo $menu->menuIcon; ?>"></i>
                                                                    <?php echo $menu->menuTitle; ?>
                                                                    <i class="editMenu fa fa-edit" onClick="editMenu(<?php echo $menu->id; ?>, '<?php echo $menu->menuTitle; ?>', '<?php echo $menu->menuIcon; ?>', '<?php echo $menu->menuDetails; ?>')"></i>
                                                                </div>
                                                                <ol onclick="list_cat(<?php echo $menu->id; ?>);" class="dd-list sorder-ol categories_id_<?php echo $menu->id; ?>">
                                                                    <?php foreach ($sub_menus as $sub_menu) { ?>
                                                                    <li class="dd-item dd3-item" data-id="<?php echo $sub_menu->id; ?>" id="item_id_<?php echo $sub_menu->id; ?>">
                                                                        <div class="dd-handle dd3-handle"> </div>
                                                                        <div class="dd3-content">
                                                                            <i class="menuIcon <?php echo $sub_menu->menuIcon; ?>"></i>
                                                                            <?php echo $sub_menu->menuTitle; ?> 
                                                                            <i class="editMenu fa fa-edit" onClick="editSubMenu(<?php echo $sub_menu->id; ?>, '<?php echo $sub_menu->menuTitle; ?>', '<?php echo $sub_menu->menuIcon; ?>', '<?php echo $sub_menu->menuDetails; ?>')"></i>
                                                                        </div>
                                                                    </li>
                                                                    <?php } ?>
                                                                </ol>
                                                            </li>
                                                        <?php } ?>
                                                    </ol>
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
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
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
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-bootstrap-select.min.js" type="text/javascript"></script>
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
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->
        <script type="text/javascript">
            var base_link = "<?php echo base_url(); ?>";
            var systemClass = '<?php echo $this->uri->segment(1) ?>';
            var systemFunction = '<?php echo $this->uri->segment(2) ?>';
            var listCat = '';
            $('#menu_name').on('keyup', function () {
                var menuName = $('#menu_name').val();
                if(menuName != "") {
                    $('#menu_name_here_status').addClass('has-success');
                    $('#menu_name_here_status').removeClass('has-error');
                    $('#menu_name_msg').text('Type menu name here...');
                }              
            });
            $("#menu_icon").change(function() {
                var menuIcon = $("#menu_icon").val();
                if(menuIcon != "Select...") {
                    $('#menu_icon_status').addClass('has-success');
                    $('#menu_icon_status').removeClass('has-error');
                }
            });
            $('#menu_details').on('keyup', function () {
                var menuName = $('#menu_details').val();
                if(menuName != "") {
                    $('#menu_details_here').addClass('has-success');
                    $('#menu_details_here').removeClass('has-warning');
                    $('#menu_details_msg').text('Type menu details here...');
                }              
            });

            function editMenu(id, menuName, menuIcon, menuDetails) {
                $('#add_menu').text('Update System Menu');
                $('#menu_name').focus();
                $('#menu_name').val(menuName);
                $('#menu_icon').selectpicker('val',menuIcon);
                $('#menu_details').focus();
                $('#menu_details').val(menuDetails);
                $('#old_id').val(id);
            }

            function editSubMenu(id, menuName, menuIcon, menuDetails) {

            }

            $('#add_menu').on('click', function(e) {
                var error = false;
                var old_id = $('#old_id').val();
                var menuName = $('#menu_name').val();
                var menuIcon = $('#menu_icon').val();
                var menuDetails = $('#menu_details').val();

                if(menuName != "") {
                    $('#menu_name_here_status').addClass('has-success');
                    $('#menu_name_here_status').removeClass('has-error');
                } else {
                    $('#menu_name_here_status').removeClass('has-success');
                    $('#menu_name_here_status').addClass('has-error');
                    $('#menu_name_msg').text('System menu name cannot empty');
                    error = true;
                }

                if(menuIcon != "Select...") {
                    $('#menu_icon_status').addClass('has-success');
                    $('#menu_icon_status').removeClass('has-error');
                } else {
                    $('#menu_icon_status').removeClass('has-success');
                    $('#menu_icon_status').addClass('has-error');
                    error = true;
                }

                if(menuDetails != "") {
                    $('#menu_details_here').addClass('has-success');
                    $('#menu_details_here').removeClass('has-warning');
                } else {
                    $('#menu_details_here').removeClass('has-success');
                    $('#menu_details_here').addClass('has-warning');
                    $('#menu_details_msg').text('System menu details empty');
                }

                if(old_id == 0) {
                    if(!error){                    
                        $.ajax({
                            url: base_link+'settings_submit/add_system_menu_submit',
                            type: 'POST',
                            data: $('#menu_form').serialize(),
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
                            url: base_link+'settings_submit/add_system_menu_update',
                            type: 'POST',
                            data: $('#menu_form').serialize(),
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

            function list_cat (argument) {
                listCat = argument;
            }

            function collapse(argument) {
                $('#expand_'+argument).css('display', 'block');
                $('#collapse_'+argument).css('display', 'none');
                $('#categories_id_'+argument).addClass('has-sub');
            }

            function expand(argument) {
                $('#collapse_'+argument).css('display', 'block');
                $('#expand_'+argument).css('display', 'none');
                $('#categories_id_'+argument).removeClass('has-sub');
            }

            $(function() {
                $("#sorder").sortable({ 
                    opacity: 0.6, cursor: 'move', update: function() {
                        var order = $(this).sortable("serialize") + '&action=update'; 
                        $.ajax({
                            type: 'post',
                            url: base_link+"settings_submit/reorder_category_post",
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
                                            setTimeout(function() {
                                                location.reload(true);
                                            }, 1000);
                                        }, 1000);
                                    }, 500);
                                    var acTitle = "Remark new added";
                                    var acType = "fa-edit";
                                    var acLabel = "label-success";
                                    $.ajax({
                                        url: base_link+'recent_activity/add_activity/',
                                        data: 'title='+ acTitle+'&type='+ acType +'&label='+ acLabel+'&userId='+ 'baseId',
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
                    }
                });
            });

            $(function() {
                $(".sorder-ol").sortable({ 
                    opacity: 0.6, cursor: 'move', update: function() {
                        var order = $(this).sortable("serialize") + '&category='+listCat + '&action=update';
                        $.ajax({
                            type: 'post',
                            url: base_link+"settings_submit/reorder_item_post",
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
                                            setTimeout(function() {
                                                location.reload(true);
                                            }, 1000);
                                        }, 1000);
                                    }, 500);
                                    var acTitle = "Remark new added";
                                    var acType = "fa-edit";
                                    var acLabel = "label-success";
                                    $.ajax({
                                        url: base_link+'recent_activity/add_activity/',
                                        data: 'title='+ acTitle+'&type='+ acType +'&label='+ acLabel+'&userId='+ 'baseId',
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
                    }
                });
            });
        </script>
    </body>

</html>