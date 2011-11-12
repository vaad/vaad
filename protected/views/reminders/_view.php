<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('bld_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->bld)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('apt_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->apt)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('reminder_time')); ?>:
	<?php echo GxHtml::encode($data->reminder_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('title')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('remarks')); ?>:
	<?php echo GxHtml::encode($data->remarks); ?>
	<br />

</div>