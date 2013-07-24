<div class='header ui-widget-header'><?php $clang->eT("Data entry"); ?></div>
	<div class='messagebox ui-corner-all'>
		<div class='successheader'><?php $clang->eT("Record Deleted"); ?> (ID: <?php echo $id; ?>)</div>
		<br /><br />
        <input type='submit' value='<?php $clang->eT("Browse responses"); ?>' onclick="window.location='<?php echo $this->createUrl("/admin/responses/sa/index/surveyid/{$surveyid}/all"); ?>';" />
        <br /><br />
    </div>
