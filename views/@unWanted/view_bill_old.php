<?php
//echo $this->uri->segment(3); die();
    $color = '';
    $status = '';
    $adjustClass = '';
    $adjustStatus = '';
    $adjustInfo = array();
    $adjustId = array();
    $adjustQty = array();
    $incrementQty = 0;
    $incrementSts = 0;
    if($purchaseInfo[0]->paymentStatus == 0) {
        $color = '#ED6B75'; $status = 'Overdue';
    } else if($purchaseInfo[0]->paymentStatus == 1) {
        $color = '#337AB7'; $status = 'Partial';
    } else {
        $color = '#36C6D3'; $status = 'Paid';
    }

    foreach ($allProductAdjust as $adjustProduct) {
        $adjustQty[$incrementQty++] = $adjustProduct->totalProduct;
        $adjustId[$incrementQty] = $adjustProduct->productId;
        $adjustInfo[$incrementSts++] = $adjustProduct->productId;
        $adjustInfo[$incrementSts++] = $adjustProduct->adjustStatus;
        $adjustInfo[$incrementSts++] = $adjustProduct->adjustProduct;
    }
    $min = $this->data_model->getMinValue('adjustStatus', array('documentId' => $this->uri->segment(3)), 'list_product_adjust');
    //print_r($min[0]->adjustStatus); die();
    if($min[0]->adjustStatus == 0) {
        $adjustClass = 'ribbon-warning'; $adjustStatus = 'Stock  Not Adjust';
    } else if($min[0]->adjustStatus == 1) {
        $adjustClass = 'ribbon-color-info'; $adjustStatus = 'Stock Partly Adjust';
    } else {
        $adjustClass = 'ribbon-success'; $adjustStatus = 'Stock Adjust';
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
        <title>Bill <?php echo $purchaseInfo[0]->documentId ?> | Business Care</title>
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
        <link href="<?php echo base_url(); ?>assets/systemOwn/plugins/bootstrap-tour/css/bootstrap-tour.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/jquery-nestable/jquery.nestable.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/systemOwn/plugins/readactor/css/redactor.css" rel="stylesheet" type="text/css" /> 
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.css" rel="stylesheet" type="text/css" />
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
            ul.Bill-estimate-history li.activated {
                border-left: 3px solid green;
            }
            ul.Bill-estimate-history li.archived {
                border-left: 3px solid red;
            }
            ul.Bill-estimate-history li.pdf {
                border-left: 3px solid purple;
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
                background: <?php echo $color; ?>;
                /*background: linear-gradient(#1CC9B8 0%, #39A7A7 100%);*/
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
                border-left: 3px solid <?php echo $color; ?>;
                border-right: 3px solid transparent;
                border-bottom: 3px solid transparent;
                border-top: 3px solid <?php echo $color; ?>;
            }
            .ribbonCustom span::after {
                content: "";
                position: absolute; right: 0px; top: 100%;
                z-index: -1;
                border-left: 3px solid transparent;
                border-right: 3px solid <?php echo $color; ?>;
                border-bottom: 3px solid transparent;
                border-top: 3px solid <?php echo $color; ?>;
            }
            .mt-element-ribbon .ribbon.ribbon-vertical-right {
                padding-top: 5px;
                padding-bottom: 5px;
            }
            .ribbon-warning { background: #C49F47 !important; color: #000 !important; }
            .ribbon-success { background: #36C6D3 !important; color: #000 !important; }
            .ribbon-color-info { color: #000 !important; }
            .dd3-content { padding: 5px 10px }
            .deleteFileIcon { float: right; font-size: 18px; color: #E87E04 !important; cursor: pointer; margin-right: -8px; }
            a { text-decoration: none !important; }
            .select2-container--bootstrap .select2-selection { border-radius: 0px !important; border: none; border-bottom: 1px solid #C2CAD8 !important; border-top: none !important; border-left: none !important;border-right: none !important; }
            .select2-container .select2-choice .select2-arrow { border-left: none ; }
            .select2-search, .select2-search--dropdown { display:none }
            .calculateAll { color : #000 !important; }            
            .calculateAll:hover { color : #000 !important; }
            .customDD3 { height: auto !important; }
            .normalIcon { color: #E5E5E5 !important; }
            .activeAmount { color: #555555 !important; }
            .Bill-estimate-history li:nth-child(n+5) { display: none; }
            .showhide { height: 25px !important; padding: 5px !important; font-weight: bold; float: right; }
            .newTab > li > a { line-height: 0.7 !important; font-size: 19px !important; padding: 5px 0px !important; }
        </style>
        <link rel="shortcut icon" href="favicon.ico" /> 
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
                        <div class="col-md-12 firstDiv">                            
                            <div class="BillView">
                                <div class="container-fluid">
                                    <div>
                                       <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><?php echo $basicInvoiceEstimate[0]->titlePurchase; ?>: <span class="text-nowrap"><?php echo $purchaseInfo[0]->documentId ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group pull-right" role="group" aria-label="...">
                                        <a data-target="#static" data-toggle="modal" onclick="whichCall('amount')" class="btn btn green-jungle btn-sm"><i class="fa fa-money"></i> Adjust Payment</a>
                                        <a data-target="#static" data-toggle="modal" onclick="whichCall('stock')" class="btn btn purple-plum btn-sm"><i class="icon-handbag"></i> Add Stock</a>
                                        <a href="<?php echo base_url(); ?>product/edit/<?php echo $purchaseInfo[0]->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <a id="historyBrowse" class="liveLink btn grey-steel btn-sm"><i class="fa fa-history"></i> History</a>
                                        <a href="<?php echo base_url(); ?>product/previewBill/<?php echo $purchaseInfo[0]->id ?>" target="_blank" class="liveLink btn grey-mint btn-sm"><i class="fa fa-search"></i> Preview</a>
                                        <a href="<?php echo base_url(); ?>product/pdfBill/<?php echo $purchaseInfo[0]->id ?>/view" target="_blank" class="btn yellow-mint btn-sm"><i class="fa fa-file-pdf-o"></i> Pdf</a>
                                        <a href="<?php echo base_url(); ?>product/printBill/<?php echo $purchaseInfo[0]->id ?>" target="_blank" class="btn btn-primary btn-sm liveLink"><i class="fa fa-print"></i> Print</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 secondDiv">
                            <div class="ribbonCustom">
                                <span><?php echo $status; ?></span>
                            </div>
                            <div class="BillView BillViewBody mt-element-ribbon">
                                <div class="ribbon ribbon-right ribbon-vertical-right ribbon-round <?php echo $adjustClass; ?> ribbon-shadow uppercase">
                                    <?php echo $adjustStatus; ?>
                                </div>
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
                                                        <td>Amount Due:</td>
                                                        <td>
                                                            <span class="special-currency-symbol ">
                                                                <?php 
                                                                    if($purchaseInfo[0]->currencyType == 'local') {
                                                                        $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                        echo $currencySysmbol[1];
                                                                    } else {
                                                                        $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                        echo $currencySysmbol[1];
                                                                    }
                                                                ?>
                                                            </span>
                                                            <span class="dueText"><?php echo ($purchaseInfo[0]->calculateTotal - $purchaseInfo[0]->paidAmount); ?></span>
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
                                                                $totalQty = 0;
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
                                                                        <?php 
                                                                            if($productInfo[0]->code != '') { 
                                                                                echo $productInfo[0]->code;
                                                                            } else { 
                                                                                echo "<b>---</b>"; 
                                                                            }
                                                                        ?>
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
                                                                            $id = array_search($specificTr[1], $adjustInfo);
                                                                            $stock = $adjustInfo[$id+1];
                                                                            $stockColor = '#C49F47';
                                                                            if($stock == 2) {
                                                                                $stockColor = '#36C6D3';
                                                                            } else if( $stock == 1) {
                                                                                $stockColor = '#659BE0';
                                                                            } else {
                                                                                $stockColor = '#C49F47';
                                                                            }
                                                                        ?>
                                                                        <?php $totalQty += $specificTr[2]; echo $specificTr[2]; ?>
                                                                        <?php if($columnSettings[0]->isUnit == 1) { ?>
                                                                            <span style="font-weight: bold" class="checkUnit"><?php echo " &nbsp".$productInfo[0]->unit; ?></span>
                                                                        <?php } ?>
                                                                        <a class="tooltipC">
                                                                            <i class="fa fa-square" style="color: <?php echo $stockColor; ?>; font-size: 15px;"></i>
                                                                            <span class="sTooltip"><strong class="adjustQty<?php echo $specificTr[1]; ?>"><?php echo "Product adjust ".$adjustInfo[$id+2]; ?></strong></span>
                                                                        </a>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <?php echo number_format($specificTr[3], 2); ?>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <?php 
                                                                            if($specificTr[4] != '---') {
                                                                                echo $taxInfo[0]->name." (".$taxInfo[0]->taxRate." %)";
                                                                            }
                                                                        ?>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <?php $subTotal += $specificTr[6]; echo $specificTr[6]; ?>
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
                                                <table class="table Bill-estimate-summary" style="margin-left: -15px; margin-top: 25px;">                                                                  
                                                    <tbody>
                                                        <tr class="total">
                                                            <td>Subtotal:</td>
                                                            <td class="text-right"><?php echo number_format($subTotal, 2); ?></td>
                                                        </tr>
                                                        <tr class="total">
                                                            <?php 
                                                                $discount = 0;
                                                                $discountStyle = '';
                                                                if($purchaseInfo[0]->discountType == "percent") {
                                                                    $discountStyle = "(".$purchaseInfo[0]->discountAmount."%)";
                                                                    $discount = round(($purchaseInfo[0]->discountAmount*$subTotal)/100, 2);
                                                                } else {
                                                                    $discount = $purchaseInfo[0]->discountAmount;
                                                                }
                                                            ?>
                                                            <td>Discount: <?php echo $discountStyle; ?></td>
                                                            <td class="text-right"><?php if($purchaseInfo[0]->discountAmount != 0.00) { echo "- ".$discount; } else { echo "0.00"; }  ?></td>
                                                        </tr>
                                                        <tr class="total">
                                                            <td>Purchase Total:</td>
                                                            <td class="text-right"><?php echo $purchaseInfo[0]->calculateTotal; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paid:</td>
                                                            <td id="paidText" class="text-right">- <?php echo $purchaseInfo[0]->paidAmount; ?></td>
                                                        </tr>
                                                        <tr class="total-row">
                                                            <td>Amount Due:</td>
                                                            <td class="text-right total">
                                                                <span class="special-currency-symbol ">
                                                                    <?php 
                                                                        if($purchaseInfo[0]->currencyType == 'local') {
                                                                            $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                                            echo $currencySysmbol[1];
                                                                        } else {
                                                                            $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                                            echo $currencySysmbol[1];
                                                                        }
                                                                    ?>
                                                                </span> 
                                                                <span class="dueText"><?php echo ($purchaseInfo[0]->calculateTotal - $purchaseInfo[0]->paidAmount); ?></span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-sm-6" style="margin-top: 15px;">
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
                                            <div class="col-sm-6 fileList">
                                                <?php 
                                                    $fileAll = explode("::", $purchaseInfo[0]->attachFile);
                                                    if($purchaseInfo[0]->attachFile != '') {
                                                        $counterUpload = (count($fileAll));
                                                        if($counterUpload > 0) {
                                                ?>
                                                <ul class="dd-list" style="margin-left: 25px;">
                                                    <?php 
                                                        for ($i = 0; $i < count($fileAll); $i++) { 
                                                            $fileExt = explode(".", $fileAll[$i]);
                                                    ?>
                                                            <li id="attachFileLive<?php echo $fileExt[0]; ?>" class="dd-item dd3-item has-sub ui-sortable-handle"><div class="dd3-content">
                                                                <a href="<?php echo base_url();?>/assets/uploadedFile/files/<?php echo $fileAll[$i]; ?>" target="_blank">Attached <?php echo $fileExt[1]; ?> File</a>
                                                                </div>
                                                            </li>
                                                    <?php } ?>
                                                    <?php if($counterUpload > 1) { ?>
                                                    <li class="dd-item dd3-item has-sub ui-sortable-handle downloadAll">
                                                        <div class="dd3-content">
                                                            Download All                                                                    
                                                            <i class="deleteFileIcon fa fa-cloud-download" style="color: green !important" onclick="downloadAll()"></i>
                                                        </div>
                                                    </li> 
                                                    <?php } ?>
                                                </ul>
                                                <?php
                                                        }
                                                    }
                                                ?>                                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="history" class="col-md-12">
                            <div class="BillView">
                                <div class="Bill-estimate-history-header clearfix" style="margin-bottom: 15px;">
                                    <div class="col-sm-6">
                                        <h3 class="titleSub">Bill History</h3>                                        
                                    </div>
                                    <div class="col-sm-6 no-margin-padding">                                        
                                        <div class="btn-group pull-right" role="group" aria-label="...">
                                            <a data-target="#static" data-toggle="modal" onclick="whichCall('amount')" class="btn btn green-jungle btn-sm"><i class="fa fa-money"></i> Adjust Payment</a>
                                            <a data-target="#static" data-toggle="modal" onclick="whichCall('stock')" class="btn btn purple-plum btn-sm"><i class="icon-handbag"></i> Add Stock</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="Bill-estimate-history">
                                    <?php 
                                        foreach ($purchaseHistory as $history) { 
                                            $cssFor = '';
                                            if($history->workType == "Create") {
                                                $cssFor = 'created';
                                            } else if($history->workType == "Update") {
                                                $cssFor = 'edited';
                                            } else if($history->workType == "viewed") {
                                                $cssFor = 'viewed';
                                            } else if($history->workType == "Archive") {
                                                $cssFor = 'archived';
                                            } else if($history->workType == "Active") {
                                                $cssFor = 'activated';
                                            } else if($history->workType == "Print") {
                                                $cssFor = 'sent';
                                            } else if($history->workType == "PDF") {
                                                $cssFor = 'pdf'  ;
                                            }
                                    ?>
                                        <li class="<?php echo $cssFor; ?>">
                                            <p>
                                                <b><?php echo date("d-m-Y H:i:s", strtotime($history->dateTime)); ?>: </b>
                                                <?php 
                                                    if($history->userId == $this->session->userdata('id')) { 
                                                        echo "You ";
                                                    } else {
                                                        echo "Team Member ";
                                                    }
                                                ?> <?php echo strtolower($history->workType); ?> this <?php echo strtolower($history->documentType); ?>.
                                            </p>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <div style="min-height: 35px;">
                                    <a class="dt-button buttons-print btn dark btn-outline showhide"><i class="fa fa-circle"></i><span> Show more</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="BillView" style="padding-bottom: 30px;">
                                <div class="Bill-estimate-history-header clearfix" style="margin-bottom: 15px;">
                                    <div class="col-sm-6">
                                        <h4 class="titleSub">Change Versions</h4>                                        
                                    </div>
                                </div>
                                <?php if(count($purchaseVersion) == 0) { ?>
                                <div><b style="margin: 5px;">No change yet. </b></div>
                                <?php } else { ?>
                                <div><b style="margin: 5px;"><span class="badge badge-warning" style="color: #000; font-weight: bold;"> <?php echo count($purchaseVersion); ?> </span> changes made (<span id="changesList" style="cursor: pointer; color: gray">check here</span>).</b></div>
                                <ul class="Bill-estimate-history changesList" style="margin-top: 25px; display: none;">
                                    <?php foreach ($purchaseVersion as $version) { ?>
                                        <li class="edited">
                                            <p>
                                                <b><?php echo date("d-m-Y H:i:s", strtotime($version->lastChangeDateTime)); ?>: </b>
                                                <?php 
                                                    if($version->lastChangeBy == $this->session->userdata('id')) { 
                                                        echo "You ";
                                                    } else {
                                                        echo "Team Member ";
                                                    }
                                                ?> Changed Last
                                                <a href="<?php echo base_url() ?>product/viewVersion/<?php echo $this->uri->segment(3); ?>/<?php echo $version->id; ?>" target="_blank">
                                                    <span class="label label-sm label-primary"> Check difference with current version.
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                                </a>
                                            </p>
                                        </li>
                                    <?php } ?>
                                </ul>
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
        <!-- BEGIN MODAL -->
        <div class="modal fade in" id="static" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="false">
            <div class="modal-backdrop fade in"></div>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a class="btn dark btn-outline pull-right" style="margin-top: 10px;" data-dismiss="modal">Close</a>
                        <ul class="nav nav-tabs newTab">
                            <li class="active">
                                <a href="#portletPayment" data-toggle="tab"><i class="fa fa-money calculateAll" style="color: #000;"></i> Adjust Payment</a>
                            </li>
                            <li class="">
                            <a href="#portletStock" data-toggle="tab"><i class="fa fa-adjust calculateAll" style="color: #000;"></i> Adjust Stock</a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="portletPayment">
                                <form id="updateAdjust" method="POST" action="" accept-charset="UTF-8">
                                    <div class="modal-header">
                                        <ul class="dd-list" style="margin: 5px; font-size: 17px;">
                                            <li class="dd-item dd3-item has-sub ui-sortable-handle">
                                                <div class="dd3-content customDD3" style=" font-weight: bold !important; color: #2ea8e5 !important">
                                                    <i class="fa fa-money calculateAll" style="color: #000;"></i>
                                                    <span style="color: #E43A45">Amount Due ( <span id="amountDue"><?php echo ($purchaseInfo[0]->calculateTotal - $purchaseInfo[0]->paidAmount); ?></span> )</span>
                                                    <i class="fa fa-reorder" style="color: #000 !important"></i>
                                                    Total Amount ( <span id="totalAmount"><?php echo $purchaseInfo[0]->calculateTotal; ?></span> )
                                                    <i class="fa fa-minus" style="color: #000 !important"></i>
                                                    <span style="color: green">Paid Amount ( <span id="paidAmount"><?php echo $purchaseInfo[0]->paidAmount; ?></span> )</span>
                                                </div>
                                            </li>
                                        </ul> 
                                    </div>
                                    <div class="modal-body">
                                        <div class="row no-margin-padding">
                                            <div class="col-md-12">
                                                <div id="adjustAmountDiv" class="form-group form-md-line-input form-md-floating-label">
                                                    <div class="input-icon">
                                                        <input id="adjustAmount" name="adjustAmount" class="form-control inputModal numericFloat" placeholder="Adjust Amount" value="" type="text">
                                                        <div class="form-control-focus"></div>
                                                        <i class="fa fa-money"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2" style="float: right; text-align: right; margin-top: -40px;">
                                                <span style="font-size: 20px; cursor: pointer;">
                                                    <i id="amountPositive" class="fa fa-plus-square-o normalIcon activeAmount"></i>
                                                    <i id="amountNegative" class="fa fa-minus-square-o normalIcon"></i>
                                                </span>
                                            </div>                                
                                            <div class="col-sm-12" style="margin-top: 10px">
                                                <select title="" aria-hidden="true" id="bankAccount" name="bankAccount" class="form-control select2">
                                                    <!-- <option value="0">Cash on hand</option> -->
                                                    <?php foreach ($listBankAccount as $bankAccount) { ?>
                                                        <option value="<?php echo $bankAccount->id; ?>"><?php echo $bankAccount->title; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>                               
                                            <div class="col-sm-12" style="margin-top: 15px">
                                                <select title="" aria-hidden="true" id="expenseCategory" name="expenseCategory" class="form-control select2">
                                                    <option value="1">Purchase</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 10px">
                                                <div id="noteDiv" class="form-group form-md-line-input form-md-floating-label">
                                                    <div class="input-icon">
                                                        <input id="note" class="form-control" name="note" value="" type="text">
                                                        <label for="form_control_1">Note</label>
                                                        <span class="help-block"></span>
                                                        <i class="icon-book-open"></i>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="row no-margin-padding send-options">
                                            <div class="col-sm-12 no-margin-padding">
                                                <input id="amountSign" type="hidden" name="amountSign" value="" />
                                                <input id="productSign" type="hidden" name="productSign" value="" />
                                                <input id="bankInitial" type="hidden" name="bankInitial" value="<?php echo $lastBank[0]->balance; ?>" />
                                                <input id="bankTotal" type="hidden" name="bankTotal" value="<?php echo $lastBank[0]->totalBalance; ?>" />
                                                <input id="editId" type="hidden" name="editId" value="<?php echo $purchaseInfo[0]->id; ?>" />
                                                <input id="dueAmountOld" type="hidden" name="dueAmountOld" value="<?php echo ($purchaseInfo[0]->calculateTotal - $purchaseInfo[0]->paidAmount); ?>" />
                                                <input id="currentPaidAmount" type="hidden" name="currentPaidAmount" value="<?php echo $purchaseInfo[0]->paidAmount; ?>" />
                                                <input id="currentAdjustStock" type="hidden" name="currentAdjustStock" value="<?php echo $purchaseInfo[0]->stockAdjust; ?>" />
                                                <a id="save" class="send-button pull-left btn btn-primary btn-fill btn-round disable-on-click">
                                                    <i class="fa fa-save"></i>
                                                    &nbsp;Save
                                                </a>
                                                <a class="btn dark btn-outline pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</a>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-sm-9 text-right-sm no-margin-padding"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="portletStock">
                                <form id="updateAdjust" method="POST" action="" accept-charset="UTF-8">
                                    <div class="modal-header">
                                        <ul class="dd-list" style="margin: 5px; font-size: 17px;">
                                            <li class="dd-item dd3-item has-sub ui-sortable-handle">
                                                <div class="dd3-content customDD3" style=" font-weight: bold !important; color: #2ea8e5 !important">
                                                    <i class="fa fa-adjust calculateAll" style="color: #000;"></i>
                                                    <span style="color: #E43A45">Rest Product ( <span id="productDue"><?php echo ($totalQty - $purchaseInfo[0]->stockAdjust); ?></span> )</span>
                                                    <i class="fa fa-reorder" style="color: #000 !important"></i>
                                                    Total Quantity ( <span id="totalProduct"><?php echo $totalQty; ?></span> )
                                                    <i class="fa fa-minus" style="color: #000 !important"></i>
                                                    <span style="color: green">Adjust Quantity ( <span id="paidProduct"><?php echo $purchaseInfo[0]->stockAdjust; ?></span> )</span>
                                                </div>
                                            </li>
                                        </ul> 
                                    </div>
                                    <div class="modal-body">
                                        <div class="row no-margin-padding">
                                            <div class="col-sm-12" style="margin-top: 15px">
                                                <select title="" aria-hidden="true" id="expenseCategory" name="expenseCategory" class="form-control select2">
                                                    <option value="1">Purchase</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 10px">
                                                <div id="adjustStockDiv" class="form-group form-md-line-input form-md-floating-label">
                                                    <div class="input-icon">
                                                        <input id="adjustStock" name="adjustStock" class="form-control numericInteger" placeholder="Adjust Stock" value="" type="text">
                                                        <div class="form-control-focus"></div>
                                                        <i class="fa fa-adjust"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2" style="float: right; text-align: right; margin-top: -40px;">
                                                <span style="font-size: 20px; cursor: pointer;">
                                                    <i id="productPositive" class="fa fa-plus-square-o normalIcon activeAmount"></i>
                                                    <i id="productNegative" class="fa fa-minus-square-o normalIcon"></i>
                                                </span>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 10px">
                                                <div id="noteDiv" class="form-group form-md-line-input form-md-floating-label">
                                                    <div class="input-icon">
                                                        <input id="note" class="form-control" name="note" value="" type="text">
                                                        <label for="form_control_1">Note</label>
                                                        <span class="help-block"></span>
                                                        <i class="icon-book-open"></i>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="row no-margin-padding send-options">
                                            <div class="col-sm-12 no-margin-padding">
                                                <input id="amountSign" type="hidden" name="amountSign" value="" />
                                                <input id="productSign" type="hidden" name="productSign" value="" />
                                                <input id="bankInitial" type="hidden" name="bankInitial" value="<?php echo $lastBank[0]->balance; ?>" />
                                                <input id="bankTotal" type="hidden" name="bankTotal" value="<?php echo $lastBank[0]->totalBalance; ?>" />
                                                <input id="editId" type="hidden" name="editId" value="<?php echo $purchaseInfo[0]->id; ?>" />
                                                <input id="dueAmountOld" type="hidden" name="dueAmountOld" value="<?php echo ($purchaseInfo[0]->calculateTotal - $purchaseInfo[0]->paidAmount); ?>" />
                                                <input id="currentPaidAmount" type="hidden" name="currentPaidAmount" value="<?php echo $purchaseInfo[0]->paidAmount; ?>" />
                                                <input id="currentAdjustStock" type="hidden" name="currentAdjustStock" value="<?php echo $purchaseInfo[0]->stockAdjust; ?>" />
                                                <a id="save" class="send-button pull-left btn btn-primary btn-fill btn-round disable-on-click">
                                                    <i class="fa fa-save"></i>
                                                    &nbsp;Save
                                                </a>
                                                <a class="btn dark btn-outline pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</a>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-sm-9 text-right-sm no-margin-padding"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/highcharts.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/modules/data.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/highcharts/js/modules/drilldown.js"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-select2.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/plugins/readactor/scripts/redactor.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->
        <script type="text/javascript">
            // <!-- Start Page Scroll -->
            $('<audio id="chatAudio"><source src="'+base_link+'assets/uploadedFile/sound/notify.ogg" type="audio/ogg"><source src="'+base_link+'assets/uploadedFile/sound/notify.mp3" type="audio/mpeg"><source src="'+base_link+'assets/uploadedFile/sound/notify.wav" type="audio/wav"></audio>').appendTo('body');
            function setLoadingImage() {
                var loadingImageCollection = ['loading1.gif', 'loading2.gif', 'loading3.gif', 'loading4.gif', 'loading5.gif', 'loading6.gif', 'loading7.gif', 'loading8.gif', 'loading9.gif', 'loading10.gif', 'loading11.gif', 'loading12.gif', 'loading13.gif', 'loading14.gif', 'loading15.gif', 'loading16.gif', 'loading17.gif', 'loading18.gif'];
                var loadingImage = Math.floor(Math.random()*loadingImageCollection.length);
                var ImgSrc = base_link+"assets/uploadedFile/animation/"+loadingImageCollection[loadingImage];
                $('#loading').attr("src", ImgSrc);
            }
            var base_link = "<?php echo base_url(); ?>";
            var userId = <?php echo $this->session->userdata('id'); ?>;
            var currentActivity = '';
            var totalActivity =  "<?php echo $totalActivity; ?>";
            var amountDue = '<?php echo ($purchaseInfo[0]->calculateTotal - $purchaseInfo[0]->paidAmount); ?>';
            var totalAmount = '<?php echo $purchaseInfo[0]->calculateTotal; ?>';
            var paidAmount = '<?php echo $purchaseInfo[0]->paidAmount; ?>';
            var productDue = '<?php echo ($totalQty - $purchaseInfo[0]->stockAdjust); ?>';
            var totalProduct = '<?php echo $totalQty; ?>';
            var adjustProduct = '<?php echo $purchaseInfo[0]->stockAdjust; ?>';
            var scrollCouse = '<?php echo $this->uri->segment(4); ?>';
            var autoScrollHeight = $('.firstDiv').height()+$('.secondDiv').height();
            if(scrollCouse == 'history') {
                var timerID = setInterval(function() {
                    window.scrollBy(0, 25);

                    if( window.pageYOffset >= autoScrollHeight )
                        clearInterval(timerID);
                }, 10);
                //window.scrollBy(0, autoScrollHeight);
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
            function send_mail_Bill(argument, id) {
                $('#sendModal').modal('show');
            }
            $('#changesList').click(function() {
                  $( ".changesList" ).slideToggle( "slow", function() {
                    // Animation complete.
                  });
            });
            function removeFile(id, liId) {
                $.ajax({
                    url: base_link+'product/removeFile',
                    type: 'POST',
                    data: 'file='+id+'&id='+$('#purchaseEditId').val(),
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
                            $('#'+liId).remove(); 
                            var str = $('#purchasefiles').val().replace(id, '');
                            $('#purchasefiles').val(str);
                            if($('#purchasefiles').val() == '') {          
                              $('.uploadFirstFile').slideDown("fast");
                            }
                            var activityId = activityListId();
                            var acType = "fa-plus";
                            var acLabel = "label-success";
                            $.ajax({
                                url: base_link+'recent_activity/add_activity/',
                                data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=update'+ '&title=purchase note'+ '&type='+ acType + '&label='+ acLabel + '&fullLink='+base_link+'product/viewBill/'+totalPurchase,
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
            function downloadAll() {
                $.ajax({
                    url: base_link+'product/downloadAllZip',
                    type: 'POST',
                    data: 'file='+$('#purchasefiles').val(),
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
                        window.location = base_link+'product/downloadAllZip/'+$('#purchasefiles').val();
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
            $('#amountPositive').click(function() {
                $('#amountNegative').removeClass('activeAmount');
                $('#amountPositive').addClass('activeAmount');
                $('#amountSign').val("");
                if($('#adjustAmount').val() > amountDue) {
                   $('#adjustAmount').val(amountDue);
                }
                var current = $('#adjustAmount').val();
                if(current != '') {
                    var sign = $('#amountSign').val();
                    if(sign == '') {
                        var restPaid = parseFloat(paidAmount)+parseFloat(current);
                        var restDue = parseFloat(totalAmount)-parseFloat(restPaid);
                        $('#amountDue').html(restDue.toFixed(2));
                        $('#paidAmount').html(restPaid.toFixed(2));
                        $('#adjustAmountDiv').removeClass('has-error');
                        $('#adjustAmountDiv').addClass('has-success');
                    } else {
                        var negativeValue = sign+current;
                        if(paidAmount == 0.00) {
                            if(negativeValue < 0.00) {
                                $('#adjustAmountDiv').removeClass('has-success');
                                $('#adjustAmountDiv').addClass('has-error');
                                $('#amountDue').html(amountDue);
                                $('#paidAmount').html(paidAmount);
                                return;
                            }
                        } else {
                            if(paidAmount < Math.abs(negativeValue)) {
                                $('#adjustAmountDiv').removeClass('has-success');
                                $('#adjustAmountDiv').addClass('has-error');
                                $('#amountDue').html(amountDue);
                                $('#paidAmount').html(paidAmount); 
                                return;                               
                            } else {
                                var restPaid = parseFloat(paidAmount)+parseFloat(negativeValue);
                                var restDue = parseFloat(totalAmount)-parseFloat(restPaid);
                                $('#amountDue').html(parseFloat(restDue.toFixed(2)));
                                $('#paidAmount').html(parseFloat(restPaid.toFixed(2)));
                                $('#adjustAmountDiv').removeClass('has-error');
                                $('#adjustAmountDiv').addClass('has-success');
                            }
                        }
                    }
                } else {
                    $('#amountDue').html(amountDue);
                    $('#paidAmount').html(paidAmount);
                }
            });
            $('#amountNegative').click(function() {
                $('#amountPositive').removeClass('activeAmount');
                $('#amountNegative').addClass('activeAmount');
                $('#amountSign').val("-");
                if($('#adjustAmount').val() > amountDue) {
                   $('#adjustAmount').val(amountDue);
                }
                var current = $('#adjustAmount').val();
                if(current != '') {
                    var sign = $('#amountSign').val();
                    if(sign == '') {
                        var restPaid = parseFloat(paidAmount)+parseFloat(current);
                        var restDue = parseFloat(totalAmount)-parseFloat(restPaid);
                        $('#amountDue').html(restDue.toFixed(2));
                        $('#paidAmount').html(restPaid.toFixed(2));
                        $('#adjustAmountDiv').removeClass('has-error');
                        $('#adjustAmountDiv').addClass('has-success');
                    } else {
                        var negativeValue = sign+current;
                        if(paidAmount == 0.00) {
                            if(negativeValue < 0.00) {
                                $('#adjustAmountDiv').removeClass('has-success');
                                $('#adjustAmountDiv').addClass('has-error');
                                $('#amountDue').html(amountDue);
                                $('#paidAmount').html(paidAmount);
                                return;
                            }
                        } else {
                            if(paidAmount < Math.abs(negativeValue)) {
                                $('#adjustAmountDiv').removeClass('has-success');
                                $('#adjustAmountDiv').addClass('has-error');
                                $('#amountDue').html(amountDue);
                                $('#paidAmount').html(paidAmount); 
                                return;                               
                            } else {
                                var restPaid = parseFloat(paidAmount)+parseFloat(negativeValue);
                                var restDue = parseFloat(totalAmount)-parseFloat(restPaid);
                                $('#amountDue').html(parseFloat(restDue.toFixed(2)));
                                $('#paidAmount').html(parseFloat(restPaid.toFixed(2)));
                                $('#adjustAmountDiv').removeClass('has-error');
                                $('#adjustAmountDiv').addClass('has-success');
                            }
                        }
                    }
                } else {
                    $('#amountDue').html(amountDue);
                    $('#paidAmount').html(paidAmount);
                }
            });
            $('#productPositive').click(function() {
                $('#productNegative').removeClass('activeAmount');
                $('#productPositive').addClass('activeAmount');
                $('#productSign').val("");
                if($('#adjustStock').val() > productDue) {
                   $('#adjustStock').val(productDue) 
                }
                var current = $('#adjustStock').val();
                if(current != '') {
                    var sign = $('#productSign').val();
                    if(sign == '') {
                        var restPaid = parseFloat(adjustProduct)+parseFloat(current);
                        var restDue = parseFloat(totalProduct)-parseFloat(restPaid);
                        $('#productDue').html(restDue.toFixed(2));
                        $('#paidProduct').html(restPaid.toFixed(2));
                        $('#adjustStockDiv').removeClass('has-error');
                        $('#adjustStockDiv').addClass('has-success');
                    } else {
                        var negativeValue = sign+current;
                        if(adjustProduct == 0.00) {
                            if(negativeValue < 0.00) {
                                $('#adjustStockDiv').removeClass('has-success');
                                $('#adjustStockDiv').addClass('has-error');
                                $('#productDue').html(productDue);
                                $('#paidProduct').html(adjustProduct);
                                return;
                            }
                        } else {
                            if(adjustProduct < Math.abs(negativeValue)) {
                                $('#adjustStockDiv').removeClass('has-success');
                                $('#adjustStockDiv').addClass('has-error');
                                $('#productDue').html(productDue);
                                $('#paidProduct').html(adjustProduct); 
                                return;                               
                            } else {
                                var restPaid = parseFloat(adjustProduct)+parseFloat(negativeValue);
                                var restDue = parseFloat(totalProduct)-parseFloat(restPaid);
                                $('#productDue').html(restDue.toFixed(2));
                                $('#paidProduct').html(restPaid.toFixed(2));
                                $('#adjustStockDiv').removeClass('has-error');
                                $('#adjustStockDiv').addClass('has-success');
                            }
                        }
                    }
                } else {
                    $('#productDue').html(productDue);
                    $('#paidProduct').html(adjustProduct);
                }
            });
            $('#productNegative').click(function() {
                $('#productPositive').removeClass('activeAmount');
                $('#productNegative').addClass('activeAmount');
                $('#productSign').val("-");
                if($('#adjustStock').val() > productDue) {
                   $('#adjustStock').val(productDue) 
                }
                var current = $('#adjustStock').val();
                if(current != '') {
                    var sign = $('#productSign').val();
                    if(sign == '') {
                        var restPaid = parseFloat(adjustProduct)+parseFloat(current);
                        var restDue = parseFloat(totalProduct)-parseFloat(restPaid);
                        $('#productDue').html(restDue.toFixed(2));
                        $('#paidProduct').html(restPaid.toFixed(2));
                        $('#adjustStockDiv').removeClass('has-error');
                        $('#adjustStockDiv').addClass('has-success');
                    } else {
                        var negativeValue = sign+current;
                        if(adjustProduct == 0.00) {
                            if(negativeValue < 0.00) {
                                $('#adjustStockDiv').removeClass('has-success');
                                $('#adjustStockDiv').addClass('has-error');
                                $('#productDue').html(productDue);
                                $('#paidProduct').html(adjustProduct);
                                return;
                            }
                        } else {
                            if(adjustProduct < Math.abs(negativeValue)) {
                                $('#adjustStockDiv').removeClass('has-success');
                                $('#adjustStockDiv').addClass('has-error');
                                $('#productDue').html(productDue);
                                $('#paidProduct').html(adjustProduct); 
                                return;                               
                            } else {
                                var restPaid = parseFloat(adjustProduct)+parseFloat(negativeValue);
                                var restDue = parseFloat(totalProduct)-parseFloat(restPaid);
                                $('#productDue').html(restDue.toFixed(2));
                                $('#paidProduct').html(restPaid.toFixed(2));
                                $('#adjustStockDiv').removeClass('has-error');
                                $('#adjustStockDiv').addClass('has-success');
                            }
                        }
                    }
                } else {
                    $('#productDue').html(productDue);
                    $('#paidProduct').html(adjustProduct);
                }
            });
            $(".showhide").click(function() {
                $(".Bill-estimate-history li:nth-child(n+5)").toggle("slow");
                if($(this).html() == '<i class="fa fa-circle"></i><span> Show more</span>'){
                   $(this).html('<i class="fa fa-circle"></i><span> Hide more</span>');
               } else {
                   $(this).html('<i class="fa fa-circle"></i><span> Show more</span>');
               }
            });
            var whichCallTime = '';
            function whichCall(parameter) {
                if(parameter == 'amount') {
                    whichCallTime = 'amount';
                    $('#static').on('shown.bs.modal', function () {
                        $('#adjustAmount').focus();
                    });
                } else {
                    whichCallTime = 'stock';
                    $('#static').on('shown.bs.modal', function () {
                        $('#adjustStock').focus();
                    });
                }
            }
            $("#adjustAmount").on('keyup', function (e) {
                if($('#adjustAmount').val() > amountDue) {
                   $('#adjustAmount').val(amountDue);
                }
                var current = $('#adjustAmount').val();
                if(current != '') {
                    var sign = $('#amountSign').val();
                    if(sign == '') {
                        var restPaid = parseFloat(paidAmount)+parseFloat(current);
                        var restDue = parseFloat(totalAmount)-parseFloat(restPaid);
                        $('#amountDue').html(restDue.toFixed(2));
                        $('#paidAmount').html(restPaid.toFixed(2));
                        $('#adjustAmountDiv').removeClass('has-error');
                        $('#adjustAmountDiv').addClass('has-success');
                    } else {
                        var negativeValue = sign+current;
                        if(paidAmount == 0.00) {
                            if(negativeValue < 0.00) {
                                $('#adjustAmountDiv').removeClass('has-success');
                                $('#adjustAmountDiv').addClass('has-error');
                                $('#amountDue').html(amountDue);
                                $('#paidAmount').html(paidAmount);
                                return;
                            }
                        } else {
                            if(paidAmount < Math.abs(negativeValue)) {
                                $('#adjustAmountDiv').removeClass('has-success');
                                $('#adjustAmountDiv').addClass('has-error');
                                $('#amountDue').html(amountDue);
                                $('#paidAmount').html(paidAmount); 
                                return;                               
                            } else {
                                var restPaid = parseFloat(paidAmount)+parseFloat(negativeValue);
                                var restDue = parseFloat(totalAmount)-parseFloat(restPaid);
                                $('#amountDue').html(parseFloat(restDue.toFixed(2)));
                                $('#paidAmount').html(parseFloat(restPaid.toFixed(2)));
                                $('#adjustAmountDiv').removeClass('has-error');
                                $('#adjustAmountDiv').addClass('has-success');
                            }
                        }
                    }
                } else {
                    $('#amountDue').html(amountDue);
                    $('#paidAmount').html(paidAmount);
                }
            });
            $("#adjustStock").on('keyup', function (e) {
                if($('#adjustStock').val() > productDue) {
                   $('#adjustStock').val(productDue) 
                }
                var current = $('#adjustStock').val();
                if(current != '') {
                    var sign = $('#productSign').val();
                    if(sign == '') {
                        var restPaid = parseFloat(adjustProduct)+parseFloat(current);
                        var restDue = parseFloat(totalProduct)-parseFloat(restPaid);
                        $('#productDue').html(restDue.toFixed(2));
                        $('#paidProduct').html(restPaid.toFixed(2));
                        $('#adjustStockDiv').removeClass('has-error');
                        $('#adjustStockDiv').addClass('has-success');
                    } else {
                        var negativeValue = sign+current;
                        if(adjustProduct == 0.00) {
                            if(negativeValue < 0.00) {
                                $('#adjustStockDiv').removeClass('has-success');
                                $('#adjustStockDiv').addClass('has-error');
                                $('#productDue').html(productDue);
                                $('#paidProduct').html(adjustProduct);
                                return;
                            }
                        } else {
                            if(adjustProduct < Math.abs(negativeValue)) {
                                $('#adjustStockDiv').removeClass('has-success');
                                $('#adjustStockDiv').addClass('has-error');
                                $('#productDue').html(productDue);
                                $('#paidProduct').html(adjustProduct); 
                                return;                               
                            } else {
                                var restPaid = parseFloat(adjustProduct)+parseFloat(negativeValue);
                                var restDue = parseFloat(totalProduct)-parseFloat(restPaid);
                                $('#productDue').html(restDue.toFixed(2));
                                $('#paidProduct').html(restPaid.toFixed(2));
                                $('#adjustStockDiv').removeClass('has-error');
                                $('#adjustStockDiv').addClass('has-success');
                            }
                        }
                    }
                } else {
                    $('#productDue').html(productDue);
                    $('#paidProduct').html(adjustProduct);
                }
            });
            $("body").on('keydown', '.numericInteger', function (e) {
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
            $("body").on('keydown', '.numericFloat', function (e) {
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
            $('#bankAccount').on('change', function (e) {
                $.ajax({
                    url: base_link+'settings/getBankInfo',
                    type: 'POST',
                    data: 'id='+$(this).val(),
                    async: false,
                    success: function (response) { 
                        r = $.parseJSON(response);
                        $('#bankInitial').val(r.initial);
                        $('#bankTotal').val(r.total);
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
            $('#save').on('click', function (e) {
                var error = false;
                if(whichCallTime == 'amount') {
                    if ($('#adjustAmount').val() != '') {
                        $('#adjustAmountDiv').addClass('has-success');
                        $('#adjustAmountDiv').removeClass('has-error');
                    } else {
                        $('#adjustAmountDiv').removeClass('has-success');
                        $('#adjustAmountDiv').addClass('has-error');
                        error = true;
                    }
                    if ($('#adjustStock').val() != '') {
                        $('#adjustStockDiv').addClass('has-success');
                        $('#adjustStockDiv').removeClass('has-warning');
                    } else {
                        $('#adjustStockDiv').removeClass('has-success');
                        $('#adjustStockDiv').addClass('has-warning');
                    }
                    if ($('#note').val() != '') {
                        $('#noteDiv').addClass('has-success');
                        $('#noteDiv').removeClass('has-warning');
                    } else {
                        $('#noteDiv').removeClass('has-success');
                        $('#noteDiv').addClass('has-warning');
                    }
                } else {
                    if ($('#adjustStock').val() != '') {
                        $('#adjustStockDiv').addClass('has-success');
                        $('#adjustStockDiv').removeClass('has-error');
                    } else {
                        $('#adjustStockDiv').removeClass('has-success');
                        $('#adjustStockDiv').addClass('has-error');
                        error = true;
                    }
                    if ($('#adjustAmount').val() != '') {
                        $('#adjustAmountDiv').addClass('has-success');
                        $('#adjustAmountDiv').removeClass('has-warning');
                    } else {
                        $('#adjustAmountDiv').removeClass('has-success');
                        $('#adjustAmountDiv').addClass('has-warning');
                    }
                    if ($('#note').val() != '') {
                        $('#noteDiv').addClass('has-success');
                        $('#noteDiv').removeClass('has-warning');
                    } else {
                        $('#noteDiv').removeClass('has-success');
                        $('#noteDiv').addClass('has-warning');
                    }
                }

                if(!error) {
                    $.ajax({
                        url: base_link+'product/updateAdjust',
                        type: 'POST',
                        data: $('#updateAdjust').serialize(),
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
                                    data: 'systemId=bcs'+activityId+ '&userId='+userId+ '&workType=create'+ '&title=purchase'+ '&type='+ acType + '&label='+ acLabel + '&fullLink='+base_link+'product/viewBill/'+<?php echo $purchaseInfo[0]->id ?>,
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
                                    $('#static').modal('toggle'); 
                                    $('#updateAdjust')[0].reset();
                                    amountDue = $('#amountDue').text();
                                    paidAmount = $('#paidAmount').text();
                                    productDue = $('#productDue').text();
                                    adjustProduct = $('#paidProduct').text();
                                    $('.dueText').text(amountDue);
                                    $('#paidText').text('- '+parseFloat(paidAmount).toFixed(2));
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
            $('.dark').on('click', function (e) {
                $('#updateAdjust')[0].reset();
                $('.has-success, .has-warning, .has-error, .edited').removeClass('has-success has-warning has-error edited');
            });

        </script>
    </body>

</html> 