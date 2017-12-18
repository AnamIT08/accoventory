<?php 
    $ControllerActive = $this->uri->segment(1);
    $ControlerClass = 'start active';
    $ControllerFunctionActive = $this->uri->segment(2);
    $ControlerFunctionMenu = 'active';
?>
<style type="text/css">
    .page-header.navbar .top-menu .navbar-nav > li.dropdown > .dropdown-toggle {
        margin: 0;
        padding: 25px 12px 24px;
    }
    .page-sidebar .page-sidebar-menu > li.menuInvoices {
        border-right: 5px solid #26C281 !important;
        cursor: move !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuInvoices.active > a {
        border-left: 3px solid #26C281 !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuEstimates {
        border-right: 5px solid #C5BF66 !important;
        cursor: move !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuEstimates.active > a {
        border-left: 3px solid #C5BF66 !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuCustomers {
        border-right: 5px solid #E87E04 !important;
        cursor: move !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuCustomers.active > a {
        border-left: 3px solid #E87E04 !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuVendors {
        border-right: 5px solid #F36A5A !important;
        cursor: move !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuVendors.active > a {
        border-left: 3px solid #F36A5A !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuTransactions {
        border-right: 5px solid #4B77BE !important;
        cursor: move !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuTransactions.active > a {
        border-left: 3px solid #4B77BE !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuProducts {
        border-right: 5px solid #D05454 !important;
        cursor: move !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuProducts.active > a {
        border-left: 3px solid #D05454 !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuTeam {
        border-right: 5px solid #C5B96B !important;
        cursor: move !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuTeam.active > a {
        border-left: 3px solid #C5B96B !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuReports {
        border-right: 5px solid #9A12B3 !important;
        cursor: move !important;
    }
    .page-sidebar .page-sidebar-menu > li.menuReports.active > a {
        border-left: 3px solid #9A12B3 !important;
    }
</style>
                    <?php 
                        $menus = explode(',', $this->session->userdata('menuSort'));
                        if(count($menus) > 1) {
                    ?>
                            <ul id="menuAll" class="page-sidebar-menu  page-sidebar-menu-closed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                                <?php 
                                    for ($i = 0; $i < count($menus); $i++) { 
                                        if($menus[$i] != "settings" && $menus[$i] != "dashboard") {
                                            $menu = $this->data_model->get_all_info('*', array('baseMenuTitle' => trim($menus[$i]), ' '), 'settings_menu');
                                ?>
                                            <li id="<?php echo ucfirst($menu[0]->baseMenuTitle); ?>" class="nav-item <?php echo ucfirst($menu[0]->baseMenuTitle); ?> <?php if($ControllerActive == $menu[0]->menuLink) {echo $ControlerClass;} ?> menu<?php echo ucfirst($menu[0]->baseMenuTitle); ?>">
                                                <a href="<?php echo base_url(); ?><?php echo $menu[0]->menuLink; ?>/" target="<?php echo $menu[0]->menuTarget; ?>" class="nav-link nav-toggle">
                                                    <i class="<?php echo $menu[0]->menuIcon; ?>" style="color: <?php echo $menu[0]->menuColor; ?>;"></i>
                                                    <span class="title"><?php echo ucfirst($menu[0]->baseMenuTitle); ?></span>
                                                    <?php 
                                                        if($menu[0]->menuTotal == 1) {
                                                        $total = $this->data_model->count_specific_table_array('list_'.$menu[0]->menuTotalWhere.'', array('type' => $menu[0]->menuTypeWhere, 'status' => 1));
                                                    ?>
                                                    <span class="badge badge-success count<?php echo ucfirst($menu[0]->baseMenuTitle); ?>" style="background: <?php echo $menu[0]->menuColor; ?> !important;"> <?php echo $total; ?> </span>
                                                    <?php } ?>
                                                </a>
                                            </li>
                                <?php
                                        }
                                    }
                                ?>
                            </ul>
                    <?php } ?>
<script type="text/javascript">
<?php $menuSs = array("vendor", "transaction","estimate", "customer","product", "report","invoice", "team"); ?>                    
    // var sortMenu = <?php echo json_encode($menuSs); ?>;  
</script>