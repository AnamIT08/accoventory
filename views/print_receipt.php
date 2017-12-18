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
        <title>Receipt <?php echo $receiptInfo[0]->receiptId ?> | Accoventory .::.SaaS.::. Accounting & Inventory Software - SaaS</title>
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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/systemOwn/plugins/readactor/css/redactor.css" rel="stylesheet" type="text/css" /> 
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <style type="text/css">
            .page-head .page-title {
                width: 100%;
            }
            .invoiceView { 
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
            .invoiceViewBody { 
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
            .table.invoice-estimate-summary tr:last-child {
                background: #eee;
            }
            .table.invoice-estimate-summary tr:last-child td {
                font-weight: 700;
                padding: 2px 7px;
            }
            .table.invoice-estimate-summary tr td:last-child {
                text-align: right;
            }
            .table.invoice-estimate-summary td {
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
            ul.invoice-estimate-history {
                padding-left: 0 !important;
                margin-bottom: 0;
                background: #fff;
            }
            ul.invoice-estimate-history li.sent {
                border-left: 3px solid #555555;
            }
            ul.invoice-estimate-history li.edited {
                border-left: 3px solid #E87E04;
            }
            ul.invoice-estimate-history li.created {
                border-left: 3px solid #3472f7;
            }
            ul.invoice-estimate-history li.activated {
                border-left: 3px solid green;
            }
            ul.invoice-estimate-history li.archived {
                border-left: 3px solid red;
            }
            ul.invoice-estimate-history li.pdf {
                border-left: 3px solid purple;
            }
            ul.invoice-estimate-history li {
                list-style-type: none;
                margin-bottom: 0;
            }
            ul.invoice-estimate-history li p {
                padding: 10px;
                margin-bottom: 0;
                margin: 0 0 0px;
                border-top: 1px solid #eee;
            }
            .help-block { font-weight: 550; color: #555555; display: inline-block !important; }
            a.tooltipC { outline:none; }
            a.tooltipC strong { line-height:15px; }
            a.tooltipC:hover { text-decoration:none; }
            a.tooltipC .sTooltip { z-index:9999; display:none; padding:6px 6px; margin-top:-6px; margin-left:10px; min-width:130px; height:auto; line-height:0px; }
            a.tooltipC:hover .sTooltip{ display:inline-block !important; position:absolute; border:2px solid #FFF; width:auto; height:auto; color:#fff; background:#000; z-index:9999; }
            a.tooltipC .sTooltip { border-radius:5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; -moz-box-shadow: 0px 0px 1px 1px #666; -webkit-box-shadow: 0px 0px 1px 1px #666; box-shadow: 0px 0px 1px 1px #666; opacity: 0.8; }
            .redactor-editor { border-radius: 0px !important; border: none; border-bottom: 2px solid #36C6D3 !important; border-top: none !important; border-left: none !important;border-right: none !important; }
            .modal-header { padding: 5px 10px 0px 20px; }
            .modal-header { padding: 0px 10px 0px 20px; }
            .form-group.form-md-line-input { padding-top: 10px; }
            .ribbonCustom {
                position: absolute;
                left: 10px;
                top: -5px;
                z-index: 1;
                overflow: hidden;
                width: 155px;
                height: 155px;
                text-align: right;
                padding: 2px;
            }
            .ribbonCustom span {
                font-size: 16px;
                font-weight: bold;
                color: #FFF;
                text-transform: uppercase;
                text-align: center;
                line-height: 20px;
                transform: rotate(-45deg);
                -webkit-transform: rotate(-45deg);
                width: 150px;
                display: block;
                background: #79A70A;
                background: linear-gradient(#1CC9B8 0%, #39A7A7 100%);
                box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
                position: absolute;
                top: 27px;
                left: -33px;
                height: 30px;
                padding-top: 4px;
                border: 1px dashed #888;
            }
            .ribbonCustom span::before {
                content: "";
                position: absolute; left: 0px; top: 100%;
                z-index: -1;
                border-left: 3px solid #39A7A7;
                border-right: 3px solid transparent;
                border-bottom: 3px solid transparent;
                border-top: 3px solid #39A7A7;
            }
            .ribbonCustom span::after {
                content: "";
                position: absolute; right: 0px; top: 100%;
                z-index: -1;
                border-left: 3px solid transparent;
                border-right: 3px solid #39A7A7;
                border-bottom: 3px solid transparent;
                border-top: 3px solid #39A7A7;
            }
            .mt-element-ribbon .ribbon.ribbon-vertical-right {
                padding-top: 5px;
                padding-bottom: 5px;
            }
            .ribbon-warning { background: #C49F47 !important; color: #000 !important; }
            .select2-container--bootstrap .select2-selection { border-radius: 0px !important; border: none; border-bottom: 1px solid #C2CAD8 !important; border-top: none !important; border-left: none !important;border-right: none !important; }
            .select2-container .select2-choice .select2-arrow { border-left: none ; }
            .select2-search, .select2-search--dropdown { display:none }
            @media print {
                a[href]:after {
                    content: none !important;
                }
                .col-sm-6 { width: 50%; float: left; }
                .tableLast { width: 50%; float: right; }
            }
        </style>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.png" /> 
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
            <div class="page-content-wrapper" style="margin-top: -8px;">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12" style="margin: 0 auto !important;">
                            <a class="btn btn-primary btn-sm pull-right print" style=" margin-bottom: 20px;"><i class="fa fa-print"></i> Print</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 secondDiv">
                            <div id="invoiceViewBody" class="invoiceView invoiceViewBody mt-element-ribbon">
                                <div class="box-content">            
                                    <div class="row">
                                        <div class="col-xs-6 company-address">                                            
                                            <p id="addressHeight">
                                                <?php echo $basicSettings[0]->companyName ?><br/>
                                                <?php echo $basicSettings[0]->addressLine1 ?><br/>
                                                <?php echo $basicSettings[0]->addressLine2 ?>
                                            </p>
                                        </div>
                                        <div class="col-xs-6 logo-container">
                                            <div class="invoice-logo text-right">
                                                <?php if($basicInvoiceEstimate[0]->defaultLogoSettings != "No") { ?>
                                                    <img style="width: <?php echo $basicInvoiceEstimate[0]->logoSize; ?>px !important; max-height: none;" src="<?php echo base_url(); ?>assets/uploadedFile/system/<?php echo $basicSettings[0]->bDefaultLogo ?>" alt="logo">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="row info-row">
                                        <div class="col-sm-6 customer-address" style="margin-top: -20px">
                                            <p>
                                                <span id="customerName">Team Membar: <b><?php $team = $this->data_model->get_specific_column("name", array("id" => $receiptInfo[0]->teamMember), "list_team"); echo $team[0]->name; ?>  </span><br>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <table class="table invoice-estimate-summary">
                                                <tbody>
                                                    <tr>
                                                        <td>Receipt #: </td>
                                                        <td><?php echo $receiptInfo[0]->receiptId ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Refference #: </td>
                                                        <td><?php if($receiptInfo[0]->refferenceId != "") { echo $receiptInfo[0]->refferenceId; } else { echo "<b>--</b>"; } ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date: </td>
                                                        <td><?php echo date($basicSettings[0]->dateFormate, strtotime($receiptInfo[0]->date)); ?></td>
                                                    </tr> 
                                                    <tr class="amount-due">
                                                        <td><?php echo $receiptInfo[0]->type ?> Category</td>
                                                        <td> 
                                                            <?php 
                                                                $name = $this->data_model->get_all_info('name', array('id' => $receiptInfo[0]->subType), 'settings_income_expense_category');
                                                                echo $name[0]->name;
                                                            ?>
                                                        </td>
                                                    </tr>                                               
                                                    <tr class="amount-due">
                                                        <td>Amount:</td>
                                                        <td> <span class="special-currency-symbol "><?php $currency = explode("- ",$basicSettings[0]->currencySymbol); echo $currency[1]; ?> </span><?php echo $receiptInfo[0]->amount ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-12">
                                            <p>
                                                <label><b>Particular: </b></label><br/>
                                                <span><?php echo $receiptInfo[0]->particular ?></span>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p>
                                                <?php if($receiptInfo[0]->note != "") { ?>
                                                    <label><b>Note: </b></label><br/>
                                                    <span><?php echo $receiptInfo[0]->note ?></span>
                                                <?php } ?>
                                            </p>
                                        </div>
                                        <?php if($this->session->userdata('userNameFull') != '') { ?>
                                            <div class="page-footer-inner pull-right" style="font-size: 11px; margin-bottom: 15px !important; margin-top: 15px;"><?php echo $this->session->userdata('userNameFull'); ?> @ <?php echo addOrdinalNumberSuffix(date('d'))." ".date("F Y H:i:s") ?></div>
                                        <?php } else { ?>
                                            <div class="page-footer-inner pull-right" style="font-size: 11px; margin-bottom: 15px !important; margin-top: 15px;"><?php echo addOrdinalNumberSuffix(date('d'))." ".date("F Y H:i:s") ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-12 bottomButton" style="margin: 0 auto !important; display: none;">
                            <a class="btn btn-primary btn-sm pull-right print" style=" margin-top: 15px 0px 15px 0px;"><i class="fa fa-print"></i> Print</a>
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
        <script type="text/javascript">
            var base_link = '<?php echo base_url(); ?>';
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
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.min.js"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/highcharts.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/modules/data.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/modules/drilldown.js"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/readactor/scripts/redactor.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-select2.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/bootstrap-tour/js/bootstrap-tour.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/charts-highcharts.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->
        <script type="text/javascript">
            // <!-- Start Page Scroll -->
            var scrollCouse = '<?php echo $this->uri->segment(4); ?>';
            var isInstallment = '<?php echo $this->uri->segment(4); ?>';
            if(isInstallment == 'isinstallment') {
                $('.removeStock').remove();
                var button = '<a href="'+base_link+'invoice/viewInvoice/1/installment" class="btn btn green btn-sm"><i class="fa fa-dot-circle-o"></i>Parent Invoice</a>';
                $(button).insertBefore($('.addPayment'));
            }
            var autoScrollHeight = $('.firstDiv').height()+$('.secondDiv').height();
            if(scrollCouse == 'history') {
                var timerID = setInterval(function() {
                    window.scrollBy(0, 25);

                    if( window.pageYOffset >= autoScrollHeight )
                        clearInterval(timerID);
                }, 10);
                //window.scrollBy(0, autoScrollHeight);
            }
            $('#historyBrowse').click(function(){
                var timerID = setInterval(function() {
                    window.scrollBy(0, 25);

                    if( window.pageYOffset >= autoScrollHeight )
                        clearInterval(timerID);
                }, 10);
            });
            $(function(){            
                var $scrollPercentText = $("#scroll-percent");            
                var $window = $(window);
                var documentHeight = $(document).height();
                var windowHeight = $window.height();
                var scrollTop = $window.scrollTop();
                
                $window.on("resize", function(){
                    windowHeight = $window.height();
                }).resize();
                
                $window.on("scroll", function() {                
                    scrollTop = $(window).scrollTop();              
                    var scrollPercent = (scrollTop) / (documentHeight - windowHeight); //gives us the scroll percent range from 0 to 1
                    if(scrollPercent > 0) {
                        $('#scroll-percent').css('display', 'block');
                    } else {
                        $('#scroll-percent').css('display', 'none');
                    }
                    $scrollPercentText.html( Math.round(scrollPercent*100) + "<span>%</span>" ); //gives us the scroll percent range from 0 to 100                
                });
            });
            $('.mailBody').redactor({
                minHeight: 150 // pixels
            });
            // <!-- End Page Scroll -->
            function send_mail_invoice(argument, id) {
                $('#sendModal').modal('show');
            }
            $('#changesList').click(function() {
                  $( ".changesList" ).slideToggle( "slow", function() {
                    // Animation complete.
                  });
            });
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
            $('.print').click(function() {
                var printContents = document.getElementById('invoiceViewBody').innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
                $.ajax({
                    url: base_link+'transaction/updateShort/<?php echo $this->uri->segment(3) ?>/Print',
                    //data: 'statusId=bcra'+activityId+ '&workType=Print',
                    type: "POST",
					dataType: 'json',
					contentType: 'json',
                    success: function(json) {
                    }, 
                    error: function(jqXHR, exception) {
                        if (jqXHR.status === 0) {
                            alert("Oops...", "Not connect.\n Verify Network.", "error");
                        } else if (jqXHR.status == 404) {
                            alert("Oops...", "Requested page not found. [404]", "error");
                        } else if (jqXHR.status == 500) {
                            alert("Oops...", "Internal Server Error [500].", "error");
                        } else if (exception === 'parsererror') {
                            alert("Oops...", "Requested JSON parse failed.", "error");
                        } else if (exception === 'timeout') {
                            alert("Oops...", "Time out error.", "error");
                        } else if (exception === 'abort') {
                            alert("Oops...", "Ajax request aborted.", "error");
                        } else {
                            alert("Oops...", "Uncaught Error.\n" + jqXHR.statusText, "error");
                        }
                    }
                });
            })
            $("body").keydown(function (e) {
                if ((e.keyCode == 80 && ( e.ctrlKey === true || e.metaKey === true ))) {
                    $.ajax({
                        url: base_link+'transaction/updateShort/<?php echo $this->uri->segment(3) ?>/Print',
                        //data: 'statusId=bcra'+activityId+ '&workType=Print',
                        type: "POST",
						dataType: 'json',
						contentType: 'json',
                        success: function(json) {
                        }, 
                        error: function(jqXHR, exception) {
                            if (jqXHR.status === 0) {
                                alert("Oops...", "Not connect.\n Verify Network.", "error");
                            } else if (jqXHR.status == 404) {
                                alert("Oops...", "Requested page not found. [404]", "error");
                            } else if (jqXHR.status == 500) {
                                alert("Oops...", "Internal Server Error [500].", "error");
                            } else if (exception === 'parsererror') {
                                alert("Oops...", "Requested JSON parse failed.", "error");
                            } else if (exception === 'timeout') {
                                alert("Oops...", "Time out error.", "error");
                            } else if (exception === 'abort') {
                                alert("Oops...", "Ajax request aborted.", "error");
                            } else {
                                alert("Oops...", "Uncaught Error.\n" + jqXHR.statusText, "error");
                            }
                        }
                    });
                }
            });
        </script>
    </body>

</html>