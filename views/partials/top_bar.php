<style type="text/css">
    .hide-logo {
        display: none;
    }
    .show-logo {
        display: block;
    }
    .username { height: 30px; }    
    .dropdown .fa-youtube-play {
        color: #E43A45;
        font-size: 25px;
        margin-top: 5px;
    }
    .dropdown .icon-settings {
        color: green;
        font-size: 20px;
        margin-top: 5px;
    }
    .dropdown .icon-layers {
        font-size: 20px;
        margin-top: 5px;
    }
    .page-logo-new a { max-width: 180px; }
</style>
<?php
    if($this->uri->segment(2) != '') {
        $pageFunction = $this->uri->segment(2);
    } else {
        $pageFunction = 'index';        
    }
    $basicSettings = $this->data_model->get_all_info('*', '', 'settings_basic');
    $basicInvoiceEstimate = $this->data_model->get_all_info('*', '', 'settings_invoice_estimate');
    $video = $this->bcare_user->getSpecificVideo($this->uri->segment(1), $pageFunction, "top", 1);
?>
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <div class="menu-toggler sidebar-toggler" style="opacity: 1 !important">
                    </div>
                </div>   
                <a href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url(); ?>assets/layouts/layout4/img/<?php echo $basicSettings[0]->defaultLogo ?>" alt="logo" class="logo-default" style="margin: 25px 0px 0px 0px; cursor: pointer; background: #FFF;" />
                </a>             
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <form class="search-form" action="<?php echo base_url(); ?>search" method="GET">
                        <div class="input-group">
                            <input class="form-control input-sm" placeholder="Search..." name="query" type="text">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide"> </li>
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <!-- START SETTINGS -->
                            <?php 
                                $menus = explode(',', $this->session->userdata('menuSort'));
                                if(in_array("settings", $menus)) {
                                    echo   '<li class="dropdown dropdown-notification">
                                                <a href="'.base_url().'settings/" class="dropdown-toggle">
                                                    <span class="username username-hide-on-mobile"> <i class="icon-settings"></i> </span>
                                                </a>
                                            </li>';
                                }
                            ?>
                            <!-- END SETTINGS -->
                            <!-- START SITE TOUR -->
                            <!-- <li id="siteTour" class="dropdown dropdown-inbox">
                                <a class="dropdown-toggle">
                                    <span class="username username-hide-on-mobile"> <i class="icon-layers"></i> </span>
                                </a>
                            </li> -->
                            <!-- END SITE TOUR -->
                            <!-- END YOUTUBE DROPDOWN --
                            <li id="videoHelp" class="dropdown dropdown-tasks">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> <i class="fa fa-youtube-play"></i> </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <?php if(count($video->allData) > 0) { ?>
                                    <li>
                                        <a href="<?php echo $video->allData[0]->videoLink; ?>" class="cbp-lightbox" data-title="<?php echo $video->allData[0]->videoTitle; ?> <br/>by <?php echo $video->allData[0]->videoBy; ?>">
                                            <i class="fa fa-clipboard "></i> Inpage Video
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <li>
                                        <a href="<?php echo base_url(); ?>videos">
                                            <i class="fa fa-circle-o-notch"></i> Overall Video
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.youtube.com/watch?v=Bu9OiDmxCrQ" target="_blank">
                                            <i class="fa fa-external-link"></i> Youtube Channel
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END YOUTUBE DROPDOWN -->
                            <!-- START USER LOGIN DROPDOWN -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> <?php echo $this->session->userdata('userNameFull'); ?> </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                    <?php
                                        if($this->session->userdata('picture') != "") {
                                            if (file_exists('./assets/uploadedFile/profilePicture/'.$this->session->userdata('picture'))) {
                                                echo '<img id="profile-img" src="'.base_url().'assets/uploadedFile/profilePicture/'.$this->session->userdata('picture').'" class="img-circle" alt="" />';
                                            } else {
                                                echo '<img id="profile-img" alt="" class="img-circle" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" />';
                                            }
                                        } else {
                                            echo '<img id="profile-img" alt="" class="img-circle" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" />';
                                        }
                                    ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <?php 
                                        $teamPermission = 0;
                                        $menus = explode(',', $this->session->userdata('menuSettings'));
                                        if(in_array(10, $menus)) {
                                            echo   '<li>
                                                        <a href="'.base_url().'dashboard">
                                                            <i class="fa fa-dashboard"></i> Dashboard
                                                        </a>
                                                    </li>';
                                        }
                                        if(in_array(7, $menus)) {
                                            $teamPermission = 1;
                                        }
                                    ?>
                                    <li>
                                        <a href="<?php echo base_url(); ?>profile/self">
                                            <i class="icon-user-following"></i> My Profile </a>
                                    </li>
                                    <!-- <li>
                                        <a id="ownLock" href="javascript:;">
                                            <i class="fa fa-lock"></i> Lock Screen </a>
                                    </li> -->
                                    <li>
                                        <a id="ownOpass" href="<?php echo base_url(); ?>profile/self">
                                            <i class="fa fa-key"></i> Change Password </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;" id="trigger_fullscreen">
											<i id="trigger_fullscreen_icon" class="fa icon-size-fullscreen "></i> Full Screen
										</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>login/logout">
                                            <i class="icon-power"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                <span class="sr-only">Toggle Quick Sidebar</span>
                                <i class="icon-logout"></i>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>