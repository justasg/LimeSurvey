<div class="header"><?php $clang->eT("Add answer");?>: <?php $clang->eT("Question Selection");?></div><br />
<div class="messagebox">
	<?php $clang->eT("Sorry there are no supported question types in this survey.");?>
	<br/><br/><input type="submit" onclick="window.location='<?php echo $this->createUrl("admin/quotas/sa/index/surveyid/$iSurveyId");?>'" value="<?php $clang->eT("Continue");?>"/>
</div>