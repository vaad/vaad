<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('bld_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->bld)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('acc_type')); ?>:
	<?php echo GxHtml::encode($data->acc_type); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('acc_branch')); ?>:
	<?php echo GxHtml::encode($data->acc_branch); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('acc_number')); ?>:
	<?php echo GxHtml::encode($data->acc_number); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('acc_starting_amount')); ?>:
	<?php echo GxHtml::encode($data->acc_starting_amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('acc_remarks')); ?>:
	<?php echo GxHtml::encode($data->acc_remarks); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('acc_bank')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->accBank)); ?>
	<br />
	*/ ?>

</div>