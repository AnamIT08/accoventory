                            <style type="text/css">
                                #profile a{
                                    margin: auto;
                                }
                                .profile-image-loading { cursor:pointer;margin-top: 101px;width: 100%; height: 100%; margin-left: 25% !important;}
                                .hidden {display:none;}
                                #profile a {display: table; vertical-align: middle; text-align: center; position: relative;}    
                                #profile span {display: none;}  
                                #profile a:hover span {position: absolute; left: 45%; top: -11%; display: block; text-align: center; background: rgba(67,81,96,0.7); }  
                                span b {font-size: 1.5em; font-weight: normal; padding: 8px 12px; border-radius: 5px; background: #6bbe70; color: #fff; font-family: sans-serif;}   
                                #profile a:hover span b:hover {background: #000;}
                                img {background: #e7e7e7; border: none; vertical-align: bottom; cursor: auto}
                                .activeFile {display: none !important;}
                                #status_msg_div { height: 5px; width: 100%; }
                                #status_msg { width:100%; margin: 0 auto !important; text-align: center; }
                                .error-error{ font-size:15px; padding-top:5px; color:red; font-weight:bold; -webkit-animation-name: blinker; -webkit-animation-duration: 3s; -webkit-animation-timing-function: linear; -webkit-animation-iteration-count: infinite; -moz-animation-name: blinker; -moz-animation-duration: 3s; -moz-animation-timing-function: linear; -moz-animation-iteration-count: infinite; nimation-name: blinker; animation-duration: 3s; animation-timing-function: linear; animation-iteration-count: infinite; }
                                @-moz-keyframes blinker { 0% { opacity: 1.0; } 25% { opacity: 1.0; } 50% { opacity: 0.0; } 100% { opacity: 1.0; } }
                                @-webkit-keyframes blinker { 0% { opacity: 1.0; } 25% { opacity: 1.0; } 50% { opacity: 0.0; } 100% { opacity: 1.0; } }
                                @keyframes blinker { 0% { opacity: 1.0; } 25% { opacity: 1.0; } 50% { opacity: 0.0; } 100% { opacity: 1.0; } }
                                .customIconBtn { width: 40%; height: 35px; margin-bottom: 15px; padding: 8px; font-weight: bold; }
                            </style>
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet bordered">
                                    <!-- SIDEBAR USERPIC -->
                                    <form id="image-form" name="image" enctype="multipart/form-data">
                                        <div id="profile" class="profile-userpic">
                                            <a href="javascript:void(0);">
                                                <?php
                                                    $picture = $this->data_model->get_specific_column('logo', array('id' => $this->uri->segment(3)), 'list_business_member');
                                                    if($this->uri->segment(2) == "customer") {
                                                        if($picture[0]->logo != "") {
                                                            if (file_exists('./assets/uploadedFile/customerPicture/'.$picture[0]->logo)) {
                                                                echo '<img id="user_profile_image" src="'.base_url().'assets/uploadedFile/customerPicture/'.$picture[0]->logo.'" class="img-circle img-responsive profile-image" alt="" />';
                                                            } else {
                                                                echo '<img id="user_profile_image" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" />';
                                                            }
                                                        } else {
                                                            echo '<img id="user_profile_image" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" />';
                                                        }
                                                    } else {
                                                        if($picture[0]->logo != "") {
                                                            if (file_exists('./assets/uploadedFile/vendorPicture/'.$picture[0]->logo)) {
                                                                echo '<img id="user_profile_image" src="'.base_url().'assets/uploadedFile/vendorPicture/'.$picture[0]->logo.'" class="img-circle img-responsive profile-image" alt="" />';
                                                            } else {
                                                                echo '<img id="user_profile_image" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" />';
                                                            }
                                                        } else {
                                                            echo '<img id="user_profile_image" alt="" class="img-circle img-responsive profile-image" src="'.base_url().'assets/uploadedFile/profilePicture/photo3.jpg" />';
                                                        }
                                                    }
                                                ?>
                                                <span id="uploadTrigger" class="img-responsive"><i style="font-size:35px;" class="fa fa-camera"></i></span>
                                                <input name="document"  type="file"  id="file-id" class="activeFile"/>
                                                <input name="userid"  type="hidden"  id="userid" value="<?php echo $this->uri->segment(3); ?>"/>
                                                <input name="userType"  type="hidden"  id="userType" value="<?php echo $this->uri->segment(2); ?>"/>
                                            </a>
                                            <div id="status_msg_div"><div id="status_msg" class="error-error" style="font-size: 12px;"></div></div>
                                        </div>
                                    </form>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"><?php echo $self_info[0]->name; ?> </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <?php 
                                        if($this->uri->segment(2) == 'customer') {
                                    ?>
                                        <div class="profile-userbuttons" style="font-size:13px;">
                                            <?php 
                                                $menus = explode(',', $this->session->userdata('menuSettings'));
                                                if(in_array(1, $menus)) {
                                                    $invoiceTotal = $this->data_model->count_specific_table_array('list_document', array('type' => 'invoice', 'customerId' => $this->uri->segment('3')));
                                                    echo   '<a class="icon-btn customIconBtn uppercase" style="color: #26C281">
                                                                <i style="color: #26C281 !important;" class="icon-note"></i> Invoice
                                                                <span class="badge badge-danger" style="background: #26C281"> '.$invoiceTotal.' </span>
                                                            </a>';
                                                }
                                                if(in_array(2, $menus)) {
                                                    $estimateTotal = $this->data_model->count_specific_table_array('list_document', array('type' => 'estimate', 'customerId' => $this->uri->segment('3')));
                                                    echo   '<a class="icon-btn customIconBtn uppercase" style="color: #C5BF66">
                                                                <i style="color: #C5BF66 !important;" class="icon-pencil"></i> Estimate
                                                                <span class="badge badge-danger" style="background: #C5BF66"> '.$estimateTotal.' </span>
                                                            </a>';
                                                }
                                            ?>
                                        </div>
                                    <?php
                                        } else if($this->uri->segment(2) == 'vendor') { 
                                    ?>
                                        <div class="profile-userbuttons" style="font-size:13px;">
                                            <?php
                                                $menus = explode(',', $this->session->userdata('menuSettings'));
                                                if(in_array(6, $menus)) {
                                                    $purchaseTotal = $this->data_model->count_specific_table_array('list_document', array('type' => 'purchase', 'customerId' => $this->uri->segment('3')));
                                                    echo   '<a class="icon-btn customIconBtn uppercase" style="color: #D05454">
                                                                <i style="color: #D05454 !important;" class="icon-handbag"></i> Bill
                                                                <span class="badge badge-danger" style="background: #D05454"> '.$purchaseTotal.' </span>
                                                            </a>';
                                                }
                                            ?>
                                        </div>
                                    <?php                                           
                                        } else {
                                    ?>
                                        <div class="profile-userbuttons" style="font-size:13px;">
                                            <a class="icon-btn customIconBtn uppercase" style="color: #26C281">
                                                <i style="color: #26C281 !important;" class="icon-note"></i> Invoice
                                                <span class="badge badge-danger" style="background: #26C281"> 4 </span>
                                            </a>
                                            <a class="icon-btn customIconBtn uppercase" style="color: #C5BF66">
                                                <i style="color: #C5BF66 !important;" class="icon-pencil"></i> Estimate
                                                <span class="badge badge-danger" style="background: #C5BF66"> 4 </span>
                                            </a>
                                            <a class="icon-btn customIconBtn uppercase" style="color: #D05454">
                                                <i style="color: #D05454 !important;" class="icon-handbag"></i> Bill
                                                <span class="badge badge-danger" style="background: #D05454"> 4 </span>
                                            </a>
                                            <a class="icon-btn customIconBtn uppercase" style="color: #4B77BE">
                                                <i style="color: #4B77BE !important;" class="icon-directions"></i> Receipt
                                                <span class="badge badge-danger" style="background: #4B77BE"> 4 </span>
                                            </a>
                                        </div>                                    
                                    <?php
                                        }
                                    ?>
                                    <div class="profile-userbuttons">
                                        <button id="userButtonMobile" type="button" disabled="disabled" class="btn btn-default blue-hoki btn-sm customButton"><i class="fa fa-phone"></i> <?php if($self_info[0]->phone != "") { echo $self_info[0]->phone; } else { echo "no mobile no";} ?></button>
                                        <button id="userButtonEmail" type="button" disabled="disabled" class="btn btn-default green-seagreen btn-sm customButton"><i class="fa fa-envelope"></i> <?php if($self_info[0]->email != "") { echo $self_info[0]->email; } else { echo "no email address";} ?></button>
										<a id="userButtonEdit" href="<?php echo base_url().$this->uri->segment(2); ?>/edit/<?php echo $this->uri->segment(3); ?>" target="_blank" type="button" class="btn btn-warning btn-sm customButton customButtonLast" style="text-transform: uppercase !important;"><i class="fa fa-edit"></i> Edit</a>
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                </div>                                
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                <div class="portlet light bordered">
                                    <div>
                                        <h4 class="profile-desc-title">About <?php echo $self_info[0]->name; ?></h4>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-building"></i>
                                            <?php echo $self_info[0]->address1; ?><br/>
                                            <?php echo $self_info[0]->address2; ?>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-globe"></i>
                                            <a href="http://<?php echo $self_info[0]->web; ?>" target="_blank"><?php echo $self_info[0]->web; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>