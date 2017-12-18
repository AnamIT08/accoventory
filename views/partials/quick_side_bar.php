<style type="text/css">
    .feeds li { padding: 5px !important; }
    .loadMoreData:hover { background: #FAFAFA !important; }
</style>
<?php
    $recent = $this->data_model->limitQuery('*', array('userId' => $this->session->userdata('id')), 25, 'history_list_recent_activities');
?>
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                <div class="page-quick-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="quick_sidebar_tab_1 active">
                            <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"><i class="fa fa-history" style="font-size: 20px"></i> Your recent activities...</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active page-quick-sidebar-alerts" id="quick_sidebar_tab_1">
                            <div class="page-quick-sidebar-alerts-list">
                                <ul class="feeds list-items">
                                <?php foreach ($recent as $activity) { ?>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm <?php echo $activity->iconLabel; ?>">
                                                        <i class="fa <?php echo $activity->iconType; ?>"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You <?php echo $activity->workType." ".$activity->docType." "; ?><br/>
                                                        <a href="<?php echo base_url()."".$activity->fullLink; ?>" target="_blank">
                                                            <span class="label label-sm label-primary"> <?php echo $activity->systemId; ?>
                                                                <i class="fa fa-share"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 
                                                <b><span class="timeago" data-livestamp="<?php echo strtotime($activity->systemDateTime); ?>" style="float: right;"></span></b>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/moment-with-locales.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/systemOwn/scripts/livestamp.js" type="text/javascript"></script>
<script type="text/javascript">
var base_link = "<?php echo base_url(); ?>";
var loaded_messages = 0;
$('.page-quick-sidebar-alerts-list').scroll(function(e){
    // grab the scroll amount and the window height
    var scrollAmount = $('.page-quick-sidebar-alerts-list').scrollTop();
    var documentHeight = $('.page-quick-sidebar-alerts-list').height();
    // calculate the percentage the user has scrolled down the page
    var scrollPercent = (scrollAmount / documentHeight) * 100;
    if(scrollPercent > 55) {
        // run a function called doSomething
       doSomething();
    }
    function doSomething() {
        loaded_messages += 25;
        $.get(""+base_link+"transaction/loadMoreData/" + loaded_messages, function(data, status){
            $(".list-items").append(data).fadeIn('slow'); 
        });
    }
});  
</script>