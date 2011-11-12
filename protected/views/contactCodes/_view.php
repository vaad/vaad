<div class="view postit">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('code_desc')); ?>:
	<?php echo GxHtml::encode($data->code_desc); ?>
	<br />

</div>