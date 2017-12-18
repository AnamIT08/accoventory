<?php
	$basicSettings = $this->data_model->get_all_info('*', '', 'settings_basic'); 
?>
		<div class="page-footer">
            <div class="page-footer-inner"> <?php echo date('Y'); ?> &copy; <span id="footerCompany"><?php if($basicSettings[0]->companyName != '') { echo $basicSettings[0]->companyName; } else { echo "Company Name"; } ?></span>. Need support? <a href="https://goo.gl/forms/6Dkowx47gAneVFeG2" title="" target="_blank">Submit issue</a></div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
			<span style="float:right;">Page loaded (<strong>{elapsed_time}</strong> seconds).</span>
        </div>

<script type="text/javascript">
	$('#ownOpass').click(function () {		
		$.post(base_link+"profile/setSesstionPassword",{
		},
	    function(data, status){
	    });
	});
	$('#ownLock').click(function () {		
		$.post(base_link+"profile/unsetSesstionForLock",{
		},
	    function(data, status){
            r = $.parseJSON(data);
            if(r.status == 'success') {
            	location.reload(); 
            }
	    });
	});
	$(document).bind("keyup keydown", function(e){
        if(e.ctrlKey && e.keyCode == 80 || e.ctrlKey && e.keyCode == 83){
            return false;
        }
    });
    $('.modal-scrollable').css('z-index', '2147483645');
</script>