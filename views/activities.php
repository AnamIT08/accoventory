<?php foreach ($activities as $activity) { ?>
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