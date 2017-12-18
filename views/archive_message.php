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
        <title>Invoice <?php echo $purchaseInfo[0]->documentId ?> | Accoventory .::.SaaS.::. Accounting & Inventory Software - SaaS</title>
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
        <link href="<?php echo base_url(); ?>assets/systemOwn/plugins/bootstrap-tour/css/bootstrap-tour.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/overLay.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/jquery.countdown.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT STYLES -->
        <style type="text/css">
            .page-head .page-title {
                width: 100%;
            }
            .BillView { 
                background: #fff !important;
                box-shadow: 0 1px 3px rgba(0,0,0,.1),0 1px 2px rgba(0,0,0,.18);
                margin: 0 0 20px;
                padding: 15px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                -ms-border-radius: 3px;
                -o-border-radius: 3px;
                border-radius: 3px;
                border: 0;
            }
            .nav-tabs > li.active, .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
                border: 0 none;
                border-bottom-color: transparent;
                border-radius: 0;
                color: #414141 !important;
            }
            .nav-tabs > li, .nav-tabs > li > a {
                font-weight: 500;
                letter-spacing: .56px;
                border: 0;
            }
            .nav-tabs > li {
                font-size: 19px;
                padding: 13px 22px;
            }
            .nav-tabs > li.active {
                border-bottom: 3px solid #33d38e;
            }
            .BillViewBody { 
                padding: 50px 50px 20px 50px;
                font-weight: 600;
                line-height: 1.5;
                color: #414141;
            }
            .table {
                width: 100%;
                max-width: 100%;
                margin-bottom: 20px;
                border: none !important;
            }
            .table.Bill-estimate-summary tr:last-child {
                background: #eee;
            }
            .table.Bill-estimate-summary tr:last-child td {
                font-weight: 700;
                padding: 2px 7px;
            }
            .table.Bill-estimate-summary tr td:last-child {
                text-align: right;
            }
            .table.Bill-estimate-summary td {
                padding: 0 7px;
                border-top: 0;
            }
            .line-items { width: 97%; margin-left: 15px; }
            .line-items th {
                background: #eee !important;
                padding: 3px 7px !important;
            }
            .titleSub {
                color: #5e8396;
                font-size: 18px;
                font-weight: 600;
                margin-top:5px;
            }
            ul.Bill-estimate-history {
                padding-left: 0 !important;
                margin-bottom: 0;
                background: #fff;
            }
            ul.Bill-estimate-history li.sent {
                border-left: 3px solid #555555;
            }
            ul.Bill-estimate-history li.edited {
                border-left: 3px solid #E87E04;
            }
            ul.Bill-estimate-history li.payment {
                border-left: 3px solid #E8E8E8;
            }
            ul.Bill-estimate-history li {
                list-style-type: none;
                margin-bottom: 0;
            }
            ul.Bill-estimate-history li p {
                padding: 10px;
                margin-bottom: 0;
                margin: 0 0 0px;
                border-top: 1px solid #eee;
            }
            .help-block { font-weight: 550; color: #555555; display: inline-block !important; }
            a.tooltipCc { outline:none; color: inherit; }
            a.tooltipCc strong { line-height:17px; }
            a.tooltipCc:hover { text-decoration:none; }
            a.tooltipCc .sTooltip { z-index:9999; display:none; padding:6px 6px; margin-top:-40px; margin-left:8px; min-width:100px; height:auto; line-height:0px; right: 35px; }
            a.tooltipCc:hover .sTooltip{ display:inline-block !important; position:absolute; border:2px solid #FFF; width:auto; height:auto; color:#EEE; background:#000; z-index:9999; }
            a.tooltipCc .sTooltip { border-radius:5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; -moz-box-shadow: 0px 0px 1px 1px #666; -webkit-box-shadow: 0px 0px 1px 1px #666; box-shadow: 0px 0px 1px 1px #666; opacity: 0.8; }
            a.tooltipC { outline:none; color: inherit; }
            a.tooltipC strong { line-height:15px; }
            a.tooltipC:hover { text-decoration:none; }
            a.tooltipC .sTooltip { z-index: 9999; display: none; padding: 6px 6px; margin-top: 25px; margin-left: -95px !important; min-width: 100px; height: auto; line-height: 0px; position: relative; }
            a.tooltipC:hover .sTooltip{ display:inline-block !important; position:absolute; border:2px solid #FFF; width:auto; height:auto; color:#fff; background:#000; z-index:9999; }
            a.tooltipC .sTooltip { border-radius:5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; -moz-box-shadow: 0px 0px 1px 1px #666; -webkit-box-shadow: 0px 0px 1px 1px #666; box-shadow: 0px 0px 1px 1px #666; opacity: 0.8; }
            .redactor-editor { border-radius: 0px !important; border: none; border-bottom: 2px solid #36C6D3 !important; border-top: none !important; border-left: none !important;border-right: none !important; }
            .modal-header { padding: 5px 10px 0px 20px; }
            .modal-header { padding: 0px 10px 0px 20px; }
            .form-group.form-md-line-input { padding-top: 10px; }
            
            .page-header-fixed .page-container {
                margin-top: 0px;
            }
            .pace .pace-progress {
                z-index: 10000;
                top: 15px;
                height: 2px;
            }
            .imgDetails { width: 40px !important; background-color:#eae9d4; padding: 3px; -webkit-box-shadow: 0 0 3px rgba(132, 132, 132, .75); -moz-box-shadow: 0 0 3px rgba(132, 132, 132, .75); box-shadow: 0 0 3px rgba(132, 132, 132, .75); -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; }
            .codeText { padding-left: 3px;  }
        </style>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.png" /> 
    </head>
    <!-- END HEAD -->
        

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md  pace-done">
        <!-- BEGIN HEADER -->
        
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6">
                            <div class="BillView">
                                <div class="Bill-estimate-history-header clearfix" style="margin-bottom: 15px;">
                                    <div class="col-sm-6">
                                        <h3 class="titleSub"><?php echo $archive_message." ".$purchaseInfo[0]->documentId ?></h3>                                        
                                    </div>
                                </div>
                                <ul class="Bill-estimate-history">
                                    <li class="created">
                                        <p style="color: gray;"><b>Your <?php echo strtolower($archive_message); ?> is canceled by the system user</b></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php include('partials/footer.php'); ?>
        <!-- END FOOTER -->
        <!-- BEGIN MODAL -->
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
            var base_link = '<?php echo base_url(); ?>';
            var userId = '<?php echo $this->session->userdata('id'); ?>';
        </script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/highcharts.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/modules/data.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/modules/drilldown.js"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/jquery.countdown.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <!-- END systemOwn SCRIPTS -->
        <script type="text/javascript">
            // <!-- Start Page Scroll -->            
            $(function(){            
                $(window).scroll(function(){
                    var scrollPos = $(document).scrollTop();
                    if(scrollPos > 40) { 
                        $('.bottomButton').show("slow");
                    } else {
                        $('.bottomButton').hide("slow");
                    }
                });
            });
            if(userId == '') {
                $.get(base_link+"invoice/statusCustomer/<?php echo $this->uri->segment(3); ?>/Invoice/Viewed",{
                },
                function(data, status){
                    r = $.parseJSON(data);
                });
            }
        </script>
    </body>

</html>