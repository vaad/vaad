<div class="view postit">

    
       <?php $name = $data->cnt_first_name . ' ' . $data->cnt_last_name; ?>
    <?php echo GxHtml::link(GxHtml::encode($name), array('view', 'id' => $data->id)); ?>
    <br />
		<?php echo GxHtml::encode(GxHtml::valueEx($data->cntType)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('cnt_phone1')); ?>:
	<?php echo GxHtml::encode($data->cnt_phone1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('cnt_phone2')); ?>:
	<?php echo GxHtml::encode($data->cnt_phone2); ?>
	<br />
	<?php echo GxHtml::encode($data->cnt_email); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('cnt_remarks')); ?>:
	<?php echo GxHtml::encode($data->cnt_remarks); ?>
	<br />
	*/ ?>

</div>