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
        <title>Report | Accoventory .::.SaaS.::. Accounting & Inventory Software - SaaS</title>
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
        <link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-editable/inputs-ext/address/address.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/css/cubeportfolio.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/sweetalert.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url(); ?>assets/systemOwn/css/ad_a_note.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url(); ?>assets/pages/css/portfolio.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.png" /> 
        <style type="text/css">
			#select2-sample_3_length-e7-container, .select2-selection__rendered {
				display: none;
			}
			tr td:first-child {
				cursor: move;
			}
			.table .btn {
			    margin-right: 0px;
			}
			.dropdown-menu-custom {
				min-width: 130px !important;
				max-width: 135px !important;
			}
			.dropdown-submenu > .dropdown-menu {
				left: 0 !important;
			}
			.dropdown-menu-custom-sub {
				min-width: 135px !important;
				max-width: 145px !important;
			}
			.fa {
				margin-right: 5px; 
			}
			tr.details { cursor: default; }
			#innerTable td {
				cursor: default !important;
			}
			.ibox { box-shadow: none; }
			.ibox-content { background: none; }
			.activity-post { border: 1px dashed #e8e8e8; }
			#msg { border-bottom: 1px solid #e8e8e8; }
			#all_timeline_div { border: 1px solid #e8e8e8; border-radius: 5px; padding: 10px; margin-top: 10px; }
			.timeline-item { margin: 0 auto; margin-bottom: 5px; border: 1px solid #e8e8e8; border-radius: 5px; background: #fff; }
			.timeline-item .date { width: 95px; padding-top: 5px; }
			.timeline-item .no-top-border .iconMark { position: absolute; top: -1px; right: -6px; padding: 10px; width: 40px; text-align: center; border-top: 1px solid #e7eaec; border-bottom: 1px solid #e7eaec; border-left: 1px solid #e7eaec; background: #f8f8f8; font-size: 20px; border-top-right-radius: 5px; }
			.no-top-border { width: 87.6% !important; min-height: 95px !important; }
			.avatar { height: 45px; width: 45px; border-radius: 50% !important; border: 2px solid !important; }
			.editCustom { position: absolute !important; top: 5px !important; right: 120px !important; }
			.deleteCustom { position: absolute !important; top: 5px !important; right: 45px !important; }
        	.select2-container--bootstrap .select2-selection { border-radius: 0px !important; border: none; border-bottom: 2px solid #36C6D3 !important; border-top: none !important; border-left: none !important;border-right: none !important; }
            .select2-container .select2-choice .select2-arrow { border-left: none ; }
            .table-scrollable .dropdown-menu { position: relative !important; }
            .btn-outline.yellish { border: 1px solid #555555 !important; color: #555555 !important; font-weight: bold }
            .yellish:hover i { color: red !important; }
            a.tooltipC { outline:none; }
            a.tooltipC strong { line-height:17px; }
            a.tooltipC:hover { text-decoration:none; }
            a.tooltipC .sTooltip { z-index:9999; display:none; padding:6px 6px; margin-top:-20px; margin-left:5px; max-width:175px; height:auto; line-height:0px; }
            a.tooltipC:hover .sTooltip{ display:inline-block !important; position:absolute; border:2px solid #FFF; width:auto; height:auto; color:#EEE; background:#000; z-index:9999; }
            a.tooltipC .sTooltip { border-radius:5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; -moz-box-shadow: 0px 0px 1px 1px #666; -webkit-box-shadow: 0px 0px 1px 1px #666; box-shadow: 0px 0px 1px 1px #666; opacity: 0.8; }     
            /*.btn-outline.dark { border: 1px solid #000000 !important; }
            .btn-outline.yellow { border: 1px solid #C49F47 !important; }
            .btn-outline.green { border: 1px solid #32C5D2 !important; }
            .btn-outline.blue { border: 1px solid #3598DC !important; }
            .more.default { border: 1px solid #000 !important; }*/
            .rightTd {
                text-align: right;
            }
            .table>tfoot>tr>th {
                text-align: right !important;
                padding: 10px 8px !important;
            }
            @media print {
                a[href]:after {
                    content: none !important;
                }
            }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md pace-done page-sidebar-closed">
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
            <div class="page-content-wrapper" style="margin-top: -10px;">
            <div  id="js-grid-juicy-projects" style="display: none"></div>
                <!-- BEGIN CONTENT BODY -->
                <div  id="js-grid-juicy-projects" style="display: none"></div>
                <div class="page-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row InvoiceList">
                        <div class="col-md-12">
                        	<div class="profile-content">
	                            <!-- BEGIN PORTLET -->
	                            <div class="portlet light bordered">
	                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
									<div class="portlet box light bordered">
										<div class="portlet-title" style="padding-left:1.5%; padding-right:1.5%">
											<div class="caption">
												<i class="fa fa-th-list" style="color: #9A12B3;"></i><span class="caption-subject font-blue-madison bold" style="color: #9A12B3 !important;">Generated Report List</span>
											</div>
											<div class="actions">
												<div class="btn-group btn-group-solid">
													<a class="dt-button buttons-print btn dark btn-outline print"><i class="fa fa-print"></i><span>Print</span></a>
													<a class="dt-button btn yellow btn-outline" onclick="tableToExcel('sample_3', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i><span>Excel</span></a>
													<a id="tFull" class="fullscreen fullscreen-recent dt-button buttons-csv buttons-html5 btn blue btn-outline"><i id="tFullIcon" class="fa fa-expand"></i></a>
												</div>
											</div>
										</div>
										<div id="portlet-body" class="portlet-body">
                                            <div style="text-align: center; margin: 10px 0px 25px 0px;">
                                                <span style="font-weight: 600; font-size: 15px;"><?php echo $basicSettings[0]->companyName; ?></span><br/>
                                                <span style="font-weight: normal; font-size: 18px; color: gray">
                                                    <?php echo $dataId[0]->type; ?> 
                                                    By 
                                                    <?php 
                                                        if($dataId[0]->userId != 0) {
                                                            echo $dataId[0]->userName;
                                                        } else {
                                                            echo "all category";
                                                        }
                                                    ?>                                                    
                                                </span><br/>
                                                <span style="color: #000">Reporting period: <?php echo $dataId[0]->startDate." to ".$dataId[0]->endDate; ?></span>
                                            </div>
                                            <div class="table-scrollable">
                                                <table id="table-pagination" class="table table-striped table-hover green">
                                                    <thead>
                                                        <tr style="background-color: #0B5394; color: #FFFFFF">
                                                            <th> # </th>
                                                            <th> Code </th>
                                                            <th> Item </th>
                                                            <th> Status </th>
                                                            <th> Category </th>
                                                            <th> Sub-category </th>
                                                            <th> Stock Balance </th>
                                                            <th> Stock Value </th>
                                                            <th> Purchase Qty </th>
                                                            <th> Purchase Value </th>
                                                            <th> Sold Qty </th>
                                                            <th> Sold Value </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            $stockValue = $purchaseValue = $soldValue = 0;
                                                            $i = 1; foreach ($details as $detail) { ?>
                                                        <tr>
                                                            <td> <?php echo $i++; ?> </td>
                                                            <td> <?php echo $detail->code ?> </td>
                                                            <td> <a href="<?php echo base_url(); ?>product/details/<?php echo $detail->id; ?>" target="_blank">
                                                                    <?php echo $detail->name ?>
                                                                 </a>
                                                            </td>
                                                            <td> 
                                                                <?php  
                                                                    if(($detail->balanceQuantity-$detail->sellingQuantity) == 0) {
                                                                ?>
                                                                        <a class="tooltipC">
                                                                            <span class="label label-sm" style="background: blue"> N/A </span>
                                                                            <span class="sTooltip"><strong>Total Quantity: <?php echo $detail->balanceQuantity-$detail->sellingQuantity." ".$detail->unit; ?><br/> Alert Quantity: <?php echo $detail->alertQuantity." ".$detail->unit; ?></strong></span>
                                                                        </a>
                                                                <?php 
                                                                    } else if(($detail->balanceQuantity-$detail->sellingQuantity) > $detail->alertQuantity) {
                                                                ?>
                                                                        <a class="tooltipC">
                                                                            <span class="label label-sm" style="background: green"> Ok </span>
                                                                            <span class="sTooltip"><strong>Total Quantity: <?php echo $detail->balanceQuantity-$detail->sellingQuantity." ".$detail->unit; ?><br/> Alert Quantity: <?php echo $detail->alertQuantity." ".$detail->unit; ?></strong></span>
                                                                        </a>
                                                                <?php 
                                                                    } else {
                                                                ?>
                                                                        <a class="tooltipC">
                                                                            <span class="label label-sm" style="background: red"> Short </span>
                                                                            <span class="sTooltip"><strong>Total Quantity: <?php echo $detail->balanceQuantity-$detail->sellingQuantity." ".$detail->unit; ?><br/> Alert Quantity: <?php echo $detail->alertQuantity." ".$detail->unit; ?></strong></span>
                                                                        </a>
                                                                <?php
                                                                    } 
                                                                ?>
                                                            </td>
                                                            <td> <?php $category = $this->data_model->get_specific_column("name", array("id" => $detail->category), "settings_product_category"); echo $category[0]->name; ?> </td>
                                                            <td>
                                                                <?php
                                                                    if($detail->category != 1) {
                                                                        if($detail->subCategory != '---') {
                                                                            $subCategory = $this->data_model->get_specific_column("name", array("id" => $detail->subCategory), "settings_product_category"); echo $subCategory[0]->name;
                                                                        } else {
                                                                            echo "<b>---</b>";
                                                                        }
                                                                    } else {
                                                                        echo "<b>---</b>";
                                                                    }
                                                                ?>
                                                            </td>
                                                            <td class="rightTd"> 
                                                                <?php
                                                                    if($detail->purchaseQuantity > 0) { 
                                                                        echo ($detail->balanceQuantity)-$detail->sellingQuantity." <b>(".$detail->purchaseQuantity.")</b> ".$detail->unit;
                                                                    } else {
                                                                        echo ($detail->balanceQuantity)-$detail->sellingQuantity." ".$detail->unit;
                                                                    }
                                                                ?> 
                                                            </td>
                                                            <td class="rightTd"><?php echo number_format(($detail->balanceQuantity-$detail->sellingQuantity)*$detail->lastPurchasePrice, 2); $stockValue+= ($detail->balanceQuantity-$detail->sellingQuantity)*$detail->lastPurchasePrice; ?></td>
                                                            <td class="rightTd">
                                                                <?php
                                                                    $totalPurchase = 0;
                                                                    $productPurchaseInfo = $this->data_model->get_all_info('*', array('productId' => $detail->id, 'type' => 'purchase'), 'list_product_adjust');
                                                                    if(!empty($productPurchaseInfo)) {
                                                                        foreach ($productPurchaseInfo as $key) {
                                                                            $totalPurchase += $key->totalProduct;
                                                                            $purchaseValue+= $productPurchaseValue = $key->purchasePrice*$key->totalProduct;
                                                                        }
                                                                        echo $totalPurchase." ".$detail->unit;
                                                                    } else {
                                                                        echo "<b>---</b>";
                                                                    }
                                                                ?>
                                                            </td>
                                                            <td class="rightTd"><?php if(!empty($productPurchaseInfo)) { echo number_format($productPurchaseValue, 2); } else { echo "<b>---</b>"; } ?></td>
                                                            <td class="rightTd">
                                                                <?php
                                                                    $totalSell = 0;
                                                                    $productSellingInfo = $this->data_model->get_all_info('*', array('productId' => $detail->id, 'type' => 'invoice', 'status' => 1), 'list_product_adjust');
                                                                    if(!empty($productSellingInfo)) {
                                                                        foreach ($productSellingInfo as $key) {
                                                                            $totalSell += $key->totalProduct;
                                                                            $soldValue+= $productSellingValue = $key->SellingPrice*$key->totalProduct;
                                                                        }
                                                                        echo $totalSell." ".$detail->unit;
                                                                    } else {
                                                                        echo "<b>---</b>";
                                                                    }
                                                                ?>
                                                            </td>
                                                            <td class="rightTd"><?php if(!empty($productSellingInfo)) { echo number_format($productSellingValue, 2); } else { echo "<b>---</b>"; } ?></td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                    <!-- <tfoot>
                                                        <tr>
                                                            <td colspan="6"></td>
                                                            <th>Sub Total</th>
                                                            <th class="rightTd"><?php echo number_format($stockValue, 2); ?></th>
                                                            <th>Sub Total</th>
                                                            <th class="rightTd"><?php echo number_format($purchaseValue, 2); ?></th>
                                                            <th>Sub Total</th>
                                                            <th class="rightTd"><?php echo number_format($soldValue, 2); ?></th>
                                                        </tr>
                                                    </tfoot> -->
                                                </table>
                                            </div>
										    <div style="color: gray; margin: 10px 0px; text-align: right">
                                                Generated By
                                                <?php $vendor = $this->data_model->get_specific_column("name", array("id" => $this->session->userdata('id')), "list_team"); echo $vendor[0]->name; ?>
                                                @ <?php echo addOrdinalNumberSuffix(date('d'))." ".date("F Y H:i:s") ?>
                                            </div>
                                        </div>
									</div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
	                            </div>
	                            <!-- END PORTLET -->
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
        <!--[if lt IE 9]>
			<script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 
		<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script type="text/javascript"> 
        	var base_link = "<?php echo base_url(); ?>";
        	var customURL = '';
        </script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/jquery.tabletoCSV.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
		<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
		<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.js"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/moment-with-locales.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.mockjax.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/portfolio-1.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN systemOwn SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/custom_common.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/sweetalert.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/systemOwn/scripts/printThis.js" type="text/javascript"></script>
        <!-- END systemOwn SCRIPTS -->
        <script>
            $('.invoiceListVisible').live('click', function(e) {
                $('.addInvoice').stop(true, true).fadeOut({ duration: 1000, queue: false }).slideUp(1000);
                $('#addInvoice').trigger("reset");
                $("html, body").animate({ scrollTop: '0px' }, "slow");
            });
            $('.invoiceAddVisible').live('click', function(e) {
                $('.addInvoice').stop(true, true).fadeIn({ duration: 1500, queue: false }).css('display', 'none').slideDown(1500);    
                $("html, body").animate({ scrollTop: '0px' }, "slow");
            });
			var counter = 1;					
			function printData(tableName) {
			   var divToPrint=document.getElementById(tableName);
			   newWin= window.open("");
			   newWin.document.write(divToPrint.outerHTML);
			   newWin.print();
			   newWin.close();
			}

			function returnAccess() {}
			var tableToExcel = (function() {
			  var uri = 'data:application/vnd.ms-excel;base64,'
			    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
			    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
			    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
			  return function(table, name) {
			    if (!table.nodeType) table = document.getElementById('table-pagination')
			    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
			    window.location.href = uri + base64(format(template, ctx))
			  }
			})()
			$(function() {
		        $(".ui-sortable").sortable({ 
		        	opacity: 0.5, cursor: 'move', update: function() {
		            var order = $(this).sortable("serialize") + '&action=update'; 
		            console.log("Yes");
						/*
						$.ajax({
							type: 'post',
							url: base_link+"preReportion/reorder_style_post",
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
										}, 1000);
									}, 500);
									var acTitle = "Remark new added";
									var acType = "fa-edit";
									var acLabel = "label-success";
									$.ajax({
										url: base_link+'recent_activity/add_activity/',
										data: 'title='+ acTitle+'&type='+ acType +'&label='+ acLabel+'&userId='+ baseId,
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
						*/
		        	}
		        });
		    });
            var userId = <?php echo $this->session->userdata('id'); ?>;
            var currentActivity = '';
            var totalActivity =  "<?php echo $totalActivity; ?>";
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
            $('.print').click(function() {
                console.log(1);
                var printContents = document.getElementById('portlet-body').innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
                $.ajax({
                    type: 'post',
                    url: base_link + "report/printStatus",
                    data: 'id=<?php echo $this->uri->segment(3); ?>&status=1',
                    success: function(response) {
                        r = $.parseJSON(response);
                        if(r.response == "success") {
                            var activityId = activityListId();
                            var acType = "fa-trash-o";
                            var acLabel = "label-danger";
                            $.ajax({
                                url: base_link+'recent_activity/add_activity/',
                                data: 'systemId=bcra'+activityId+ '&userId='+userId+ '&workType=print'+ '&title=report'+ '&type='+ acType + '&label='+ acLabel + '&fullLink=<?php echo $this->uri->segment(1)."/".$this->uri->segment(2)."/".$this->uri->segment(3); ?>',
                                type: "POST",
								dataType: 'json',
								contentType: 'json',
                                success: function(json) {
                                      
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
                        }
                    }
                });
            });
            $(document).bind("keyup keydown", function(e){
                if(e.ctrlKey && e.keyCode == 80){
                    return false;
                }
            });
		</script>
    </body>

</html>