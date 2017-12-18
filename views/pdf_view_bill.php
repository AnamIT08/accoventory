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
       <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
       <!-- END THEME LAYOUT STYLES -->
		<style type="text/css">
			.page-head .page-title {
				width: 100%;
			}
            .BillView { 
                border: 0;
            }
            .BillViewBody { 
                padding: 15px;
                font-weight: 600;
                line-height: 1.5;
                color: #414141;
            }
        </style>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.png" /> 
	</head>
    <!-- END HEAD -->
		

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md  pace-done">
        <!-- BEGIN HEADER -->
        
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12" style="margin-left: -30px !important; margin-right: -40px !important; font-weight: 600">
                <div class="BillView BillViewBody">
                    <div class="row">
                        <div class="col-xs-6" style="float: left;">                                            
                            <p id="addressHeight">
                                <b>Bill To:</b><br/>
                                <?php echo $basicSettings[0]->companyName ?><br/>
                                <?php echo $basicSettings[0]->addressLine1 ?><br/>
                                <?php echo $basicSettings[0]->addressLine2 ?>
                            </p>
                        </div>
                        <div class="col-xs-6 logo-container" style="float: right; margin-top: -95px;">
                            <div class="Bill-logo text-right">
                                <?php if($basicInvoiceEstimate[0]->defaultLogoSettings != "No") { ?>
                                <img style="width: <?php echo $basicInvoiceEstimate[0]->logoSize; ?>px !important; max-height: none;" src="<?php echo base_url(); ?>assets/uploadedFile/system/<?php echo $basicSettings[0]->bDefaultLogo ?>" alt="logo">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 customer-address" style="margin-top: 10px;">
                            <p>
                                <b>Bill From:</b><br/>
                                <?php $customerInfo = $this->data_model->get_specific_column('*', array('id' => $purchaseInfo[0]->customerId), 'list_business_member'); ?>
                                <span id="customerName"><?php echo $customerInfo[0]->name; ?></span><br>
                                <span id="customerAddress"><?php echo $customerInfo[0]->address1; ?></span><br>
                                <span id="customerCity"><?php echo $customerInfo[0]->address2; ?></span>                                                                  
                            </p>
                        </div>
                        <div class="col-sm-6" style="margin-top: -90px; margin-left: 50% !important; text-align: right;">
                            <table class="table Bill-estimate-summary" style="margin-right: -55%">
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
                                                    $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                    $localSymbol = $currencySysmbol[1];
                                                    if($purchaseInfo[0]->currencyType == 'local') {
                                                        $currencySysmbol = explode("-", $basicSettings[0]->currencySymbol);
                                                        echo $currencySysmbol[1]." ".number_format($purchaseInfo[0]->calculateTotalLocal, 2);
                                                    } else {
                                                        $currencySysmbol = explode("-", $basicSettings[0]->foreignCurrencySymbol);
                                                        echo $currencySysmbol[1];
                                                        echo    number_format(($purchaseInfo[0]->calculateTotal - $purchasePaid), 2);
                                                    }
                                                ?>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row line-items-row" style="margin-top: 50px;">                                                                                        
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table line-items" style="width: 98%; margin-left: 15px;">
                                        <thead style=" padding-bottom: 10px;">
                                            <tr>
                                                <th class="col-xs-3" style="padding-left: 0px; padding-bottom: 10px;"><?php echo $columnSettings[0]->itemCode; ?></th>
                                                <th class="col-xs-5" style="padding-left: 0px; padding-bottom: 10px;"><?php echo $columnSettings[0]->name; ?></th>
                                                <th class="col-xs-2" style="padding-right: 0px; padding-bottom: 10px; text-align: right;">Quantity</th>
                                                <th class="col-xs-2" style="padding-right: 0px; padding-bottom: 10px; text-align: right;"><?php echo $columnSettings[0]->priceName; ?></th>
                                                <th class="col-xs-2" style="padding-right: 0px; padding-bottom: 10px; text-align: right;">Tax</th>
                                                <th class="col-xs-2" style="padding-right: 0px; padding-bottom: 10px; text-align: right;"><?php echo $columnSettings[0]->amountName; ?></th>
                                            </tr>
                                        </thead>
                                        <tbody >
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
                                                    <td style="padding-bottom: 5px;">
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
                                                    <td style="padding-bottom: 5px;">
                                                        <?php echo $productInfo[0]->name; ?>
                                                        <?php if($columnSettings[0]->isDescription == 1) { ?>
                                                            <br/><span style="color: gray" class="checkDescription"><?php echo $specificTr[8]; ?></span>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-right" style="padding-bottom: 5px;">
                                                        <?php echo $specificTr[2]; ?>
                                                        <?php if($columnSettings[0]->isUnit == 1) { ?>
                                                            <span style="float: right; font-weight: bold" class="checkUnit"><?php echo $productInfo[0]->unit; ?></span>
                                                        <?php } ?>
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
                                                                echo    number_format(($specificTr[3]), 2);
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
                                                                echo    number_format(($specificTr[6]), 2);
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
                        <div class="row payment-row" style="margin-top: 15px;">
                            <div class="col-sm-5" style="margin-left: 50% !important;">
                                <table class="table Bill-estimate-summary" style="width: 95%">                                                                  
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
                                                        echo    number_format(($subTotal), 2);
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
                                                            echo    number_format(($discount), 2);
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
                                                            echo    number_format((0.00), 2);
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
                                                        echo    number_format(($purchaseInfo[0]->calculateTotal), 2);
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
                                                        echo    number_format(($purchasePaid/$purchaseInfo[0]->currencyRate), 2);
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
                                                            echo    number_format($purchaseInfo[0]->calculateTotal - number_format($purchasePaid/$purchaseInfo[0]->currencyRate, 2), 2);
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
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script type="text/javascript">
            var base_link = '<?php echo base_url(); ?>';
            var userId = '<?php echo $this->session->userdata('id'); ?>';
            if(userId == '') {
                $.get(base_link+"product/statusVendor/<?php echo $this->uri->segment(3); ?>/Purchase/PDF",{
                },
                function(data, status){
                    r = $.parseJSON(data);
                });
            }
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
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
    </body>

</html>