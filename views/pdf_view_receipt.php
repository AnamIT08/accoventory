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
       <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
       <!-- END THEME LAYOUT STYLES -->
        <style type="text/css">
            .page-head .page-title {
                width: 100%;
            }
            .invoiceView { 
                border: 0;
            }
            .invoiceViewBody { 
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
                <div class="invoiceView invoiceViewBody">
                    <div class="row">
                        <table class="table invoice-estimate-summary" style="margin-right: -55%;">                                            
                            <tr>
                                <td class="col-xs-6">
                                    <?php echo $basicSettings[0]->companyName ?><br/>
                                    <?php echo $basicSettings[0]->addressLine1 ?><br/>
                                    <?php echo $basicSettings[0]->addressLine2 ?>
                                </td>                                           
                                <td class="col-xs-6" style="float: left !important; position: relative !important;">
                                    <?php if($basicInvoiceEstimate[0]->defaultLogoSettings != "No") { ?>
                                        <img style="margin-top:-35; width: <?php echo $basicInvoiceEstimate[0]->logoSize; ?>px !important; max-height: none;" src="<?php echo base_url(); ?>assets/uploadedFile/system/<?php echo $basicSettings[0]->bDefaultLogo ?>" alt="logo">
                                    <?php } ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 customer-address" style="margin-top: 10px;">
                            <p>
                                <span id="customerName">Team Membar: <b><?php $team = $this->data_model->get_specific_column("name", array("id" => $receiptInfo[0]->teamMember), "list_team"); echo $team[0]->name; ?>  </span><br>
                            </p>
                        </div>
                        <div class="col-sm-6" style="margin-top: -25px; margin-left: 50% !important; text-align: right;">
                            <table class="table invoice-estimate-summary" style="margin-right: -55%; width: 80%">
                                <tbody>
                                    <tr>
                                        <th>Receipt #:</th>
                                        <td><?php echo $receiptInfo[0]->receiptId ?></td>
                                    </tr>
                                    <tr>
                                        <th>Refference #:</th>
                                        <td><?php if($receiptInfo[0]->refferenceId != "") { echo $receiptInfo[0]->refferenceId; } else { echo "<b>--</b>"; } ?></td>
                                    </tr>
                                    <tr>
                                        <th>Date: </th>
                                        <td><?php echo date($basicSettings[0]->dateFormate, strtotime($receiptInfo[0]->date)); ?></td>
                                    </tr> 
                                    <tr class="amount-due">
                                        <th><?php echo $receiptInfo[0]->type ?> Category</th>
                                        <td> 
                                            <?php 
                                                $name = $this->data_model->get_all_info('name', array('id' => $receiptInfo[0]->subType), 'settings_income_expense_category');
                                                echo $name[0]->name;
                                            ?>
                                        </td>
                                    </tr>                                                 
                                    <tr class="amount-due">
                                        <th>Amount:</th>
                                        <td> <span class="special-currency-symbol "> <?php $currency = explode("- ",$basicSettings[0]->currencySymbol); echo $currency[1]; ?> </span> <?php echo number_format($receiptInfo[0]->amount, 2); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
        <script type="text/javascript">
            var base_link = '<?php echo base_url(); ?>';
        </script>
    </body>

</html>