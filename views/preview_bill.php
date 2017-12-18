<?php
    $color = '';
    $statusClass= '';
    $status = '';
    $adjustClass = '';
    $adjustStatus = '';
    $adjustInfo = array();
    $adjustId = array();
    $adjustQty = array();
    $infoName = array();
    $liveCalculation = array();
    $incrementQty = 0;
    $incrementSts = 0;
    $incrementCal = 0;
    $dStart = new DateTime(date("Y-m-d"));
    $dEnd  = new DateTime($purchaseInfo[0]->dueDate);
    $dDiff = $dStart->diff($dEnd);
    $diff = $dDiff->format("%R%a");
    $textColor = '';    
    $adjustColor = '';
    // echo number_format($purchasePaid, 2)." > ".$purchaseInfo[0]->calculateTotalLocal; die();
    if($diff > 0) {
        $textColor = '';
        if($purchaseInfo[0]->currencyType == "local") {
            if(number_format($purchasePaid, 2) <= number_format($purchaseInfo[0]->calculateTotalLocal, 2)) {
                if(number_format($purchasePaid, 2) == 0.00) {
                    $statusClass = 'ribbonCustomUnpaid'; $status = 'Unpaid'; $adjustColor = '#ED6B75';
                } else if(number_format($purchasePaid, 2) < number_format($purchaseInfo[0]->calculateTotalLocal, 2)) {
                    $statusClass = 'ribbonCustomPartial'; $status = 'Partial'; $adjustColor = '#337AB7';
                } else {
                    $statusClass = 'ribbonCustomPaid'; $status = 'Paid'; $adjustColor = '#36C6D3';
                }
            } else {
                $statusClass = 'ribbonCustomDue'; $status = '<b style="color: #000 !important">Overpaid</b>'; $adjustColor = '#D91E18';
            }
        } else {
            $foreignPurchasePaid = number_format(number_format($purchasePaid, 2)/$purchaseInfo[0]->currencyRate, 2);
            if(number_format($foreignPurchasePaid, 2) <= number_format($purchaseInfo[0]->calculateTotal, 2)) {
                if(number_format($foreignPurchasePaid, 2) == 0.00) {
                    $statusClass = 'ribbonCustomUnpaid'; $status = 'Unpaid'; $adjustColor = '#ED6B75';
                } else if(number_format($purchasePaid, 2) < number_format($purchaseInfo[0]->calculateTotal, 2)) {
                    $statusClass = 'ribbonCustomPartial'; $status = 'Partial'; $adjustColor = '#337AB7';
                } else {
                    $statusClass = 'ribbonCustomPaid'; $status = 'Paid'; $adjustColor = '#36C6D3';
                }
            } else {
                $statusClass = 'ribbonCustomDue'; $status = '<b style="color: #000 !important">Overpaid</b>'; $adjustColor = '#D91E18';
            }
        }
    } else {
        $textColor = '';
        if($purchaseInfo[0]->currencyType == "local") {
            if($diff == 0) {
                if(number_format($purchasePaid, 2) <= number_format($purchaseInfo[0]->calculateTotalLocal, 2)) {
                    $statusClass = 'ribbonCustomPaid'; $status = 'Paid'; $adjustColor = '#36C6D3';
                } else {
                    $statusClass = 'ribbonCustomUnpaid'; $status = 'Unpaid'; $adjustColor = '#ED6B75';
                }
            } else if($purchaseInfo[0]->paymentStatus == 2) {
                if(number_format($purchasePaid, 2) <= number_format($purchaseInfo[0]->calculateTotalLocal, 2)) {
                    $statusClass = 'ribbonCustomPaid'; $status = 'Paid'; $adjustColor = '#36C6D3';
                } else {
                    $statusClass = 'ribbonCustomDue'; $status = '<b style="color: #000 !important">Overpaid</b>'; $adjustColor = '#D91E18';
                }
            } else {
                $textColor = '#D91E18';
                $statusClass = 'ribbonCustomDue'; $status = 'Overdue'; $adjustColor = '#D91E18';
            }
        } else {
            $foreignPurchasePaid = number_format(number_format($purchasePaid, 2)/$purchaseInfo[0]->currencyRate, 2);
            if($diff == 0) {
                if(number_format($foreignPurchasePaid, 2) <= number_format($purchaseInfo[0]->calculateTotal, 2)) {
                    $statusClass = 'ribbonCustomPaid'; $status = 'Paid'; $adjustColor = '#36C6D3';
                } else {
                    $statusClass = 'ribbonCustomUnpaid'; $status = 'Unpaid'; $adjustColor = '#ED6B75';
                }
            } else if($purchaseInfo[0]->paymentStatus == 2) {
                if(number_format($foreignPurchasePaid, 2) <= number_format($purchaseInfo[0]->calculateTotal, 2)) {
                    $statusClass = 'ribbonCustomPaid'; $status = 'Paid'; $adjustColor = '#36C6D3';
                } else {
                    $statusClass = 'ribbonCustomDue'; $status = '<b style="color: #000 !important">Overpaid</b>'; $adjustColor = '#D91E18';
                }
            } else {
                $textColor = '#D91E18';
                $statusClass = 'ribbonCustomDue'; $status = 'Overdue'; $adjustColor = '#D91E18';
            }
        }
    }
    $overAdjust = 0;
    $isOk = 0;
    foreach ($allProductAdjust as $adjustProduct) {
        $adjustQty[$incrementQty++] = $adjustProduct->totalProduct;
        $adjustId[$incrementQty-1] = $adjustProduct->productId;
        $infoProduct = $this->data_model->get_specific_column("*", array('id' => $adjustProduct->productId), 'list_product_enrollment');
        $infoName[$incrementQty-1] = $infoProduct[0]->name;
        $adjustInfo[$incrementSts++] = $adjustProduct->productId;
        $adjustInfo[$incrementSts++] = $adjustProduct->adjustStatus;
        $adjustInfo[$incrementSts++] = $adjustProduct->adjustProduct;
        $adjustInfo[$incrementSts++] = $adjustProduct->totalProduct;
        $liveCalculation[$incrementCal++] = intval($adjustProduct->productId);
        $liveCalculation[$incrementCal++] = intval($adjustProduct->totalProduct);
        $liveCalculation[$incrementCal++] = intval($adjustProduct->adjustProduct);
        $liveCalculation[$incrementCal++] = ($adjustProduct->totalProduct - $adjustProduct->adjustProduct);
        if($overAdjust < 1) {
            if($adjustProduct->adjustProduct > $adjustProduct->totalProduct) {
                $overAdjust++;                
            }
        }
    }

    $statusArray = array();
    $statusIncrement = 0;
    $min = $this->data_model->get_specific_column('adjustStatus', array('documentId' => $this->uri->segment(3)), 'list_product_adjust');
    foreach ($min as $key) {
        $statusArray[$statusIncrement++] = $key->adjustStatus;
    }
    if($overAdjust < 1) {
        if(in_array(1, $statusArray) == -1) { 
            $adjustClass = 'ribbon-color-info'; $adjustStatus = 'Stock Partly Adjust';
        } else if(in_array(0, $statusArray) && in_array(2, $statusArray)) {
            $adjustClass = 'ribbon-color-info'; $adjustStatus = 'Stock Partly Adjust';
        } else if(in_array(0, $statusArray)) {
            $adjustClass = 'ribbon-warning'; $adjustStatus = 'Stock Not Adjust';
        } else {
            $adjustClass = 'ribbon-success'; $adjustStatus = 'Stock Adjust';
        }
    } else {
        $adjustClass = 'ribbon-error'; $adjustStatus = 'Stock Over Adjust';
    }
    //print_r($adjustInfo); die();
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
        <title>Bill <?php echo $purchaseInfo[0]->documentId ?> | Accoventory .::.SaaS.::. Accounting & Inventory Software - SaaS</title>
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
            ul.Bill-estimate-history li.created {
                border-left: 3px solid #3472f7;
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
            .ribbonCustomDue {
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
            .ribbonCustomDue span {
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
                background: #D91E18;
                /*background: linear-gradient(#1CC9B8 0%, #39A7A7 100%);*/
                box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
                position: absolute;
                top: 27px;
                left: -33px;
                height: 30px;
                padding-top: 4px;
                border: 1px dashed #888;
            }
            .ribbonCustomDue span::before {
                content: "";
                position: absolute; left: 0px; top: 100%;
                z-index: -1;
                border-left: 3px solid #D91E18;
                border-right: 3px solid transparent;
                border-bottom: 3px solid transparent;
                border-top: 3px solid #D91E18;
            }
            .ribbonCustomDue span::after {
                content: "";
                position: absolute; right: 0px; top: 100%;
                z-index: -1;
                border-left: 3px solid transparent;
                border-right: 3px solid #D91E18;
                border-bottom: 3px solid transparent;
                border-top: 3px solid #D91E18;
            }
            .ribbonCustomUnpaid {
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
            .ribbonCustomUnpaid span {
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
                background: #ED6B75;
                /*background: linear-gradient(#1CC9B8 0%, #39A7A7 100%);*/
                box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
                position: absolute;
                top: 27px;
                left: -33px;
                height: 30px;
                padding-top: 4px;
                border: 1px dashed #888;
            }
            .ribbonCustomUnpaid span::before {
                content: "";
                position: absolute; left: 0px; top: 100%;
                z-index: -1;
                border-left: 3px solid #ED6B75;
                border-right: 3px solid transparent;
                border-bottom: 3px solid transparent;
                border-top: 3px solid #ED6B75;
            }
            .ribbonCustomUnpaid span::after {
                content: "";
                position: absolute; right: 0px; top: 100%;
                z-index: -1;
                border-left: 3px solid transparent;
                border-right: 3px solid #ED6B75;
                border-bottom: 3px solid transparent;
                border-top: 3px solid #ED6B75;
            }
            .ribbonCustomPartial {
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
            .ribbonCustomPartial span {
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
                background: #337AB7;
                /*background: linear-gradient(#1CC9B8 0%, #39A7A7 100%);*/
                box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
                position: absolute;
                top: 27px;
                left: -33px;
                height: 30px;
                padding-top: 4px;
                border: 1px dashed #888;
            }
            .ribbonCustomPartial span::before {
                content: "";
                position: absolute; left: 0px; top: 100%;
                z-index: -1;
                border-left: 3px solid #337AB7;
                border-right: 3px solid transparent;
                border-bottom: 3px solid transparent;
                border-top: 3px solid #337AB7;
            }
            .ribbonCustomPartial span::after {
                content: "";
                position: absolute; right: 0px; top: 100%;
                z-index: -1;
                border-left: 3px solid transparent;
                border-right: 3px solid #337AB7;
                border-bottom: 3px solid transparent;
                border-top: 3px solid #337AB7;
            }
            .ribbonCustomPaid {
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
            .ribbonCustomPaid span {
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
                background: #36C6D3;
                /*background: linear-gradient(#1CC9B8 0%, #39A7A7 100%);*/
                box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
                position: absolute;
                top: 27px;
                left: -33px;
                height: 30px;
                padding-top: 4px;
                border: 1px dashed #888;
            }
            .ribbonCustomPaid span::before {
                content: "";
                position: absolute; left: 0px; top: 100%;
                z-index: -1;
                border-left: 3px solid #36C6D3;
                border-right: 3px solid transparent;
                border-bottom: 3px solid transparent;
                border-top: 3px solid #36C6D3;
            }
            .ribbonCustomPaid span::after {
                content: "";
                position: absolute; right: 0px; top: 100%;
                z-index: -1;
                border-left: 3px solid transparent;
                border-right: 3px solid #36C6D3;
                border-bottom: 3px solid transparent;
                border-top: 3px solid #36C6D3;
            }
            .mt-element-ribbon .ribbon.ribbon-vertical-right {
                padding-top: 5px;
                padding-bottom: 5px;
            }
            .ribbon-warning { background: #C49F47 !important; color: #000 !important; }
            .ribbon-success { background: #36C6D3 !important; color: #000 !important; }
            .ribbon-error { background: red !important; color: #FFF !important; }
            .ribbon-color-info { color: #000 !important; }
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
                        <div class="col-md-2 pull-right" style="z-index: 10000;">
                            <div class="BillView" style="padding: 5px;">                                
                                <div class="btn-group" role="group" aria-label="...">
                                    <a href="<?php echo base_url(); ?>product/pdfBill/<?php echo $purchaseInfo[0]->id ?>/view" target="_blank" class="btn yellow-mint btn-sm"><i class="fa fa-file-pdf-o"></i> Pdf</a>
                                    <a href="<?php echo base_url(); ?>product/printBill/<?php echo $purchaseInfo[0]->id ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Print</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div id="ribbonCustom" class="<?php echo $statusClass; ?>">
                                <span id="ribbonCustomText"><?php echo $status; ?></span>
                            </div>
                            <div class="BillView BillViewBody mt-element-ribbon">
                                <div class="ribbon ribbon-right ribbon-vertical-right ribbon-round <?php echo $adjustClass; ?> ribbon-shadow uppercase">
                                    <?php echo $adjustStatus; ?>
                                </div>
                                <div class="box-content">            
                                    <div class="row">
                                        <div class="col-xs-6 company-address">                                            
                                            <p id="addressHeight">
                                                <b>Bill To:</b><br/>
                                                <?php echo $basicSettings[0]->companyName ?><br/>
                                                <?php echo $basicSettings[0]->addressLine1 ?><br/>
                                                <?php echo $basicSettings[0]->addressLine2 ?>
                                            </p>
                                        </div>
                                        <div class="col-xs-6 logo-container">
                                            <div class="Bill-logo text-right">
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
                                                <b>Bill From:</b><br/>
                                                <?php $customerInfo = $this->data_model->get_specific_column('*', array('id' => $purchaseInfo[0]->customerId), 'list_business_member'); ?>
                                                <span id="customerName"><?php echo $customerInfo[0]->name; ?></span><br>
                                                <span id="customerAddress"><?php echo $customerInfo[0]->address1; ?></span><br>
                                                <span id="customerCity"><?php echo $customerInfo[0]->address2; ?></span>                                                                  
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <table class="table Bill-estimate-summary">
                                                <tbody>
                                                    <tr>
                                                        <td>Bill #:</td>
                                                        <td><?php echo $purchaseInfo[0]->documentId; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date:</td>
                                                        <td><?php echo date($basicSettings[0]->dateFormate, strtotime($purchaseInfo[0]->date)); ?></td>
                                                    </tr>                                                
                                                    <tr class="amount-due">
                                                        <td>
                                                            Amount Due:
                                                            <a data-target="#static" data-toggle="modal" onclick="whichCall('amount', '')">
                                                                <i class="dueAdjust fa fa-square" style="color: <?php echo $adjustColor; ?>; font-size: 20px;"></i>
                                                            </a>
                                                        </td>
                                                        <td class="lastTd" style="color: <?php echo $textColor; ?> !important;">
                                                            <span class="special-currency-symbol ">
                                                                <?php 
                                                                    $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                    $localSymbol = $currencySysmbol[1];
                                                                    if($purchaseInfo[0]->currencyType == 'local') {
                                                                        $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                        echo $currencySysmbol[1].' <span class="dueText">'.number_format($purchaseInfo[0]->calculateTotalLocal - $purchasePaid, 2).'</span>';
                                                                    } else {
                                                                        $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                        echo $currencySysmbol[1];
                                                                        echo    '<a class="tooltipC">
                                                                                    <span><span class="dueText">'.number_format($purchaseInfo[0]->calculateTotalLocal - number_format($purchasePaid/$purchaseInfo[0]->currencyRate, 2), 2).'</span></span>
                                                                                    <span class="sTooltip"><strong class="currencyText">'.$localSymbol." ".number_format($purchaseInfo[0]->calculateTotalLocal-$purchasePaid, 2).'</strong></span>
                                                                                </a>';
                                                                    }
                                                                ?>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="row line-items-row">                                                                                        
                                            <div class="col-sm-12">
                                                <div class="table-responsive">
                                                    <table class="table line-items">
                                                        <thead>
                                                            <tr>
                                                                <th class="task col-xs-2"><?php echo $columnSettings[0]->itemCode; ?></th>
                                                                <th class="notes col-xs-3"><?php echo $columnSettings[0]->name; ?></th>
                                                                <th class="rate text-right col-xs-2">Quantity</th>
                                                                <th class="rate text-right col-xs-2"><?php echo $columnSettings[0]->priceName; ?></th>
                                                                <th class="hours text-right col-xs-2">Tax</th>
                                                                <th class="line-total col-xs-2 text-right"><?php echo $columnSettings[0]->amountName; ?></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                $subTotal = 0;
                                                                $totalTr = explode("::", $purchaseInfo[0]->documentData);
                                                                for ($i = 0; $i < count($totalTr); $i++) { 
                                                                    $specificTr = explode("*", $totalTr[$i]);
                                                                    $productInfo = $this->data_model->get_specific_column("*", array('id' => $specificTr[1]), 'list_product_enrollment');
                                                                    if($specificTr[4] != '---') {
                                                                        $taxInfo = $this->data_model->get_specific_column("*", array('id' => $specificTr[4]), 'settings_tax');
                                                                    }
                                                            ?>
                                                                <tr>
                                                                    <td>
                                                                        <span style="display: inline-block;">
                                                                        <?php 
                                                                            if($columnSettings[0]->isProductPicture == 1) { 
                                                                                if($productInfo[0]->picture != '') {
                                                                                    if(file_exists('./assets/uploadedFile/productPicture/'.$productInfo[0]->picture)) {
                                                                                        echo    '<a href="'.base_url().'assets/uploadedFile/productPicture/'.$productInfo[0]->picture.'" class="fancybox-button" data-rel="fancybox-button">'.
                                                                                                    '<img class="imgDetails" class="img-responsive" src="'.base_url().'assets/uploadedFile/productPicture/'.$productInfo[0]->picture.'" alt="">'.
                                                                                                '</a>';
                                                                                    } else {
                                                                                        echo    '<a href="'.base_url().'assets/uploadedFile/productPicture/img1.jpg" class="fancybox-button" data-rel="fancybox-button">'.
                                                                                                    '<img class="imgDetails" class="img-responsive" src="'.base_url().'assets/uploadedFile/productPicture/img1.jpg" alt="">'.
                                                                                                '</a>';
                                                                                    }
                                                                                } else {
                                                                                    echo    '<a href="'.base_url().'assets/uploadedFile/productPicture/img1.jpg" class="fancybox-button" data-rel="fancybox-button">'.
                                                                                                '<img class="imgDetails" class="img-responsive" src="'.base_url().'assets/uploadedFile/productPicture/img1.jpg" alt="">'.
                                                                                            '</a>';
                                                                                }
                                                                            }
                                                                        ?>
                                                                        </span>
                                                                        <span class="codeText"> 
                                                                        <?php 
                                                                            if($productInfo[0]->code != '') { 
                                                                                echo $productInfo[0]->code;
                                                                            } else { 
                                                                                echo "<b> ---</b>"; 
                                                                            }
                                                                        ?>                                                                        
                                                                        </span>
                                                                        <?php if($columnSettings[0]->isWarranty == 1) { ?>
                                                                            <br/><span class="warrantySpan" style="color: gray;"><?php echo $columnSettings[0]->warrantyName; ?>: <span class="checkWarranty"><?php echo $specificTr[7] ?></span></span>
                                                                        <?php } ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $productInfo[0]->name; ?>
                                                                        <?php if($columnSettings[0]->isDescription == 1) { ?>
                                                                            <br/><span style="color: gray" class="checkDescription"><?php echo $specificTr[8]; ?></span>
                                                                        <?php } ?>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <?php
                                                                            for ($j = 0; $j < count($adjustInfo); $j+=4) {
                                                                                // = array_search($specificTr[1], $adjustInfo);
                                                                                if($specificTr[1] == $adjustInfo[$j]) {
                                                                                    $id = $j;
                                                                                    $stock = $adjustInfo[$id+1];
                                                                                    $stockColor = '#C49F47';
                                                                                    if($adjustInfo[$id+2] > $adjustInfo[$id+3]) {
                                                                                        $stockColor = '#FF0000';
                                                                                    } else {
                                                                                        if($stock == 2) {
                                                                                            $stockColor = '#36C6D3';
                                                                                        } else if( $stock == 1) {
                                                                                            $stockColor = '#659BE0';
                                                                                        } else {
                                                                                            $stockColor = '#C49F47';
                                                                                        }
                                                                                    }
                                                                                    break;
                                                                                }
                                                                            }
                                                                        ?>
                                                                        <?php echo $specificTr[2]; ?>
                                                                        <?php if($columnSettings[0]->isUnit == 1) { ?>
                                                                            <span style="font-weight: bold" class="checkUnit"><?php echo " &nbsp".$productInfo[0]->unit; ?></span>
                                                                        <?php } ?>
                                                                        <a class="tooltipC">
                                                                            <i class="qty<?php echo $specificTr[1]; ?> fa fa-square" style="color: <?php echo $stockColor; ?>; font-size: 15px;"></i>
                                                                            <span class="sTooltip"><strong class="adjustQty<?php echo $specificTr[1]; ?>"><?php echo "Product adjust ".$adjustInfo[$id+2]; ?></strong></span>
                                                                        </a>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <?php 
                                                                            $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                            $localSymbol = $currencySysmbol[1];
                                                                            if($purchaseInfo[0]->currencyType == 'local') {
                                                                                $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                                echo $currencySysmbol[1]." ".number_format($specificTr[3], 2);
                                                                            } else {
                                                                                $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                                echo $currencySysmbol[1];
                                                                                echo    '<a class="tooltipC">
                                                                                            <span><span class="spPrice">'.number_format(($specificTr[3]), 2).'</span></span>
                                                                                            <span class="sTooltip"><strong>'.$localSymbol." ".number_format($specificTr[3]*$purchaseInfo[0]->currencyRate, 2).'</strong></span>
                                                                                        </a>';
                                                                            } 
                                                                        ?>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <?php 
                                                                            if($specificTr[4] != '---') {
                                                                                echo $taxInfo[0]->name." (".$taxInfo[0]->taxRate." %)";
                                                                            }
                                                                        ?>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <?php 
                                                                            $subTotal += $specificTr[6]; 
                                                                            $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                            $localSymbol = $currencySysmbol[1];
                                                                            if($purchaseInfo[0]->currencyType == 'local') {
                                                                                $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                                echo $currencySysmbol[1]." ".number_format($specificTr[6], 2);
                                                                            } else {
                                                                                $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                                echo $currencySysmbol[1];
                                                                                echo    '<a class="tooltipC">
                                                                                            <span><span class="priceTotal">'.number_format(($specificTr[6]), 2).'</span></span>
                                                                                            <span class="sTooltip"><strong>'.$localSymbol." ".number_format($specificTr[6]*$purchaseInfo[0]->currencyRate, 2).'</strong></span>
                                                                                        </a>';
                                                                            } 
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row payment-row">
                                            <div class="col-sm-7">
                                                &nbsp;
                                            </div>
                                            <div class="col-sm-5">
                                                <table class="table Bill-estimate-summary" style="margin-left: -15px;">                                                                  
                                                    <tbody>
                                                        <tr class="total">
                                                            <td>Subtotal:</td>
                                                            <td class="text-right">
                                                                <?php 
                                                                    number_format($subTotal, 2); 
                                                                    $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                    $localSymbol = $currencySysmbol[1];
                                                                    if($purchaseInfo[0]->currencyType == 'local') {
                                                                        $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                        echo $currencySysmbol[1]." ".number_format($subTotal, 2);
                                                                    } else {
                                                                        $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                        echo $currencySysmbol[1];
                                                                        echo    '<a class="tooltipC">
                                                                                    <span><span class="subTotal">'.number_format(($subTotal), 2).'</span></span>
                                                                                    <span class="sTooltip"><strong>'.$localSymbol." ".number_format($subTotal*$purchaseInfo[0]->currencyRate, 2).'</strong></span>
                                                                                </a>';
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="total">
                                                            <?php 
                                                                $discount = 0;
                                                                $discountStyle = '';
                                                                if($purchaseInfo[0]->discountType == "percent") {
                                                                    $discountStyle = "(".$purchaseInfo[0]->discountAmount."%)";
                                                                    $discount = number_format(($purchaseInfo[0]->discountAmount*$subTotal)/100, 2);
                                                                } else {
                                                                    $discount = $purchaseInfo[0]->discountAmount;
                                                                }
                                                            ?>
                                                            <td>Discount: <?php echo $discountStyle; ?></td>
                                                            <td class="text-right">
                                                                <?php 
                                                                    if($purchaseInfo[0]->discountAmount != 0.00) { 
                                                                        $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                        $localSymbol = $currencySysmbol[1];
                                                                        if($purchaseInfo[0]->currencyType == 'local') {
                                                                            $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                            echo $currencySysmbol[1]." ".$discount;
                                                                        } else {
                                                                            $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                            echo $currencySysmbol[1];
                                                                            echo    '<a class="tooltipC">
                                                                                        <span><span class="discount">'.number_format(($discount), 2).'</span></span>
                                                                                        <span class="sTooltip"><strong>'.$localSymbol." ".number_format($discount*$purchaseInfo[0]->currencyRate, 2).'</strong></span>
                                                                                    </a>';
                                                                        }
                                                                    } else { 
                                                                        $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                        $localSymbol = $currencySysmbol[1];
                                                                        if($purchaseInfo[0]->currencyType == 'local') {
                                                                            $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                            echo $currencySysmbol[1]." ".number_format(0.00, 2);
                                                                        } else {
                                                                            $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                            echo $currencySysmbol[1];
                                                                            echo    '<a class="tooltipC">
                                                                                        <span><span class="discount">'.number_format((0.00), 2).'</span></span>
                                                                                        <span class="sTooltip"><strong>'.$localSymbol." ".number_format(0.00*$purchaseInfo[0]->currencyRate, 2).'</strong></span>
                                                                                    </a>';
                                                                        }
                                                                    }  ?>
                                                                </td>
                                                        </tr>
                                                        <tr class="total">
                                                            <td>Purchase Total:</td>
                                                            <td class="text-right">
                                                                <?php 
                                                                    $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                    $localSymbol = $currencySysmbol[1];
                                                                    if($purchaseInfo[0]->currencyType == 'local') {
                                                                        $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                        echo $currencySysmbol[1]." ".number_format($purchaseInfo[0]->calculateTotalLocal, 2);
                                                                    } else {
                                                                        $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                        echo $currencySysmbol[1];
                                                                        echo    '<a class="tooltipC">
                                                                                    <span><span class="total">'.number_format(($purchaseInfo[0]->calculateTotal), 2).'</span></span>
                                                                                    <span class="sTooltip"><strong>'.$localSymbol." ".number_format($purchaseInfo[0]->calculateTotal*$purchaseInfo[0]->currencyRate, 2).'</strong></span>
                                                                                </a>';
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paid:</td>
                                                            <td id="paidText" class="text-right"> 
                                                                <?php 
                                                                    $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                    $localSymbol = $currencySysmbol[1];
                                                                    if($purchaseInfo[0]->currencyType == 'local') {
                                                                        $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                        echo $currencySysmbol[1]." ".number_format($purchasePaid, 2);
                                                                    } else {
                                                                        $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                        echo $currencySysmbol[1];
                                                                        echo    '<a class="tooltipC">
                                                                                    <span><span class="paid">'.number_format(($purchasePaid/$purchaseInfo[0]->currencyRate), 2).'</span></span>
                                                                                    <span class="sTooltip"><strong>'.$localSymbol." ".number_format($purchasePaid, 2).'</strong></span>
                                                                                </a>';
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="total-row">
                                                            <td>
                                                                Amount Due:
                                                            </td>
                                                            <td class="text-right total" style="color: <?php echo $textColor; ?> !important;">
                                                                <div class="special-currency-symbol ">
                                                                    <?php 
                                                                        $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                        $localSymbol = $currencySysmbol[1];
                                                                        if($purchaseInfo[0]->currencyType == 'local') {
                                                                            $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                            echo $currencySysmbol[1]." ".number_format($purchaseInfo[0]->calculateTotalLocal - $purchasePaid, 2);
                                                                        } else {
                                                                            $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                            echo $currencySysmbol[1];
                                                                            echo    '<a class="tooltipC">
                                                                                        <span><span class="dueText">'.number_format($purchaseInfo[0]->calculateTotal - number_format($purchasePaid/$purchaseInfo[0]->currencyRate, 2), 2).'</span></span>
                                                                                        <span class="sTooltip"><strong class="currencyText">'.$localSymbol." ".number_format($purchaseInfo[0]->calculateTotalLocal-$purchasePaid, 2).'</strong></span>
                                                                                    </a>';
                                                                        }
                                                                    ?>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-sm-12" style="margin-top: 15px;">
                                                <ul>
                                                    <li><b>Payment Terms:</b> Within <?php echo $purchaseInfo[0]->dateDifference ?> days</li>
                                                    <?php if($purchaseInfo[0]->noteS != "") { ?>
                                                        <li>
                                                            <label><b>Note: </b></label>
                                                            <span><?php echo $purchaseInfo[0]->noteS ?></span>
                                                        </li>
                                                    <?php } ?>
                                                    <?php if($purchaseInfo[0]->attachFile != "") { ?>
                                                        <li>
                                                            <label><b>Attachment: </b></label>
                                                            <span>
                                                                <?php $files = explode("::", $purchaseInfo[0]->attachFile); echo count($files)." document attahed"; ?>                                                                
                                                            </span>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="BillView">
                                <div class="Bill-estimate-history-header clearfix" style="margin-bottom: 15px;">
                                    <div class="col-sm-6">
                                        <h3 class="titleSub">Payment</h3>                                        
                                    </div>
                                <?php $payments = $this->data_model->get_all_info_where_with_order('*', array('documentId' => $this->uri->segment(3), 'docType' => 'purchase', 'type !=' => '', 'status' => 1), 'id', 'DESC', 'list_payment'); ?>
                                </div>
                                <ul class="Bill-estimate-history">
                                    <?php 
                                        if(count($payments) > 0) {
                                            foreach ($payments as $payment) { ?>
                                                <?php if($purchaseInfo[0]->currencyType == "local") { ?>
                                                    <?php if($payment->type == "Expense") { ?>
                                                        <li class="payment">
                                                            <p><?php echo date($basicSettings[0]->dateFormate, strtotime($payment->createdDateTime)); ?> <b style="float: right;"><?php $currency = explode("-", $basicSettings[0]->currencySymbol); echo $currency[1]; ?> <?php echo number_format($payment->adjustAmount, 2); ?></b></p>
                                                        </li>
                                                    <?php } else { ?>
                                                        <li class="payment">
                                                            <p><?php echo date($basicSettings[0]->dateFormate, strtotime($payment->createdDateTime)); ?> <b style="float: right;"><?php $currency = explode("-", $basicSettings[0]->currencySymbol); echo $currency[1]; ?> <?php echo "-".number_format($payment->adjustAmount, 2); ?></b></p>
                                                        </li>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <?php if($payment->type == "Expense") { ?>
                                                        <li class="payment">
                                                            <p>
                                                                <a class="tooltipCc">
                                                                    <span><span class="paid"><?php echo date($basicSettings[0]->dateFormate, strtotime($payment->createdDateTime)); ?> <b style="float: right;"><?php $currency = explode("-", $basicSettings[0]->foreignCurrencySymbol); echo $currency[1]; ?> <?php echo number_format($payment->adjustAmount/$purchaseInfo[0]->currencyRate, 2); ?></b></span></span>
                                                                    <span class="sTooltip"><strong><b style="float: right;"><?php $currency = explode("-", $basicSettings[0]->currencySymbol); echo $currency[1]; ?> <?php echo number_format($payment->adjustAmount, 2); ?></b></strong></span>
                                                                </a>
                                                            </p>
                                                        </li>
                                                    <?php } else { ?>
                                                        <li class="payment">
                                                            <p>
                                                                <a class="tooltipCc">
                                                                    <span><span class="paid"><?php echo date($basicSettings[0]->dateFormate, strtotime($payment->createdDateTime)); ?> <b style="float: right;"><?php $currency = explode("-", $basicSettings[0]->foreignCurrencySymbol); echo $currency[1]; ?> <?php echo "- ".number_format($payment->adjustAmount/$purchaseInfo[0]->currencyRate, 2); ?></b></span></span>
                                                                    <span class="sTooltip"><strong><b style="float: right;"><?php $currency = explode("-", $basicSettings[0]->currencySymbol); echo $currency[1]; ?> <?php echo "- ".number_format($payment->adjustAmount, 2); ?></b></strong></span>
                                                                </a>
                                                            </p>
                                                        </li>
                                                    <?php } ?>
                                                <?php } ?>
                                        <?php } } else { ?>
                                                <li class="created">
                                                    <p style="color: gray;"><b>No payment information</b></p>
                                                </li>
                                        <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-offset-9 col-md-2 pull-right bottomButton" style="display: none">
                            <div class="BillView" style="padding: 5px;">                                
                                <div class="btn-group" role="group" aria-label="...">
                                    <a href="<?php echo base_url(); ?>product/pdfBill/<?php echo $purchaseInfo[0]->id ?>/view" target="_blank" class="btn yellow-mint btn-sm"><i class="fa fa-file-pdf-o"></i> Pdf</a>
                                    <a href="<?php echo base_url(); ?>product/printBill/<?php echo $purchaseInfo[0]->id ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Print</a>
                                </div>
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
        <div class="modal fade in" id="sendModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="false">
            <div class="modal-backdrop fade in"></div>
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="" accept-charset="UTF-8">
                        <input name="_token" value="eo6Cna8Epu8456BO9zR9x5s5p8tev3k2nM5tusIV" type="hidden">
                        <div class="modal-header">
                            <button type="button" class="btn dark btn-outline pull-right" style="margin-top: 10px;" data-dismiss="modal">Close</button>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">Send Bill</li>
                            </ul>
                        </div>
                        <div class="modal-body">
                            <div class="row no-margin-padding">
                                <div class="col-md-12">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <div class="input-icon">
                                            <input class="form-control inputModal" placeholder="Email Address" value="" type="text">
                                            <i class="icon-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <div class="input-icon">
                                            <input class="form-control inputModal" placeholder="Add email subject" value="" type="text">
                                            <i class="fa fa-sticky-note-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 no-margin-padding" style="margin-bottom: -15px;">                                    
                                    <div class="col-md-12">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <div class="input-icon">
                                                <textarea class="form-control mailBody" type="text"></textarea>
                                                <i class="icon-speech"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row no-margin-padding send-options">
                                <div class="col-sm-12 no-margin-padding">
                                    <button type="submit" class="send-button pull-left btn btn-primary btn-fill btn-round disable-on-click">
                                        <i class="fa fa-paper-plane"></i>
                                        &nbsp;Send
                                    </button>
                                    <button type="button" class="btn dark btn-outline pull-left" data-dismiss="modal">Close</button>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-sm-9 text-right-sm no-margin-padding"></div>
                            </div>
                        </div>
                    </form>
                </div>
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
                $.get(base_link+"product/statusVendor/<?php echo $this->uri->segment(3); ?>/Purchase/Viewed",{
                },
                function(data, status){
                    r = $.parseJSON(data);
                });
            }
        </script>
    </body>

</html>