<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('bld_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->bld)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('prj_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->prj)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('inc_date')); ?>:
	<?php echo GxHtml::encode($data->inc_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('inc_until_date')); ?>:
	<?php echo GxHtml::encode($data->inc_until_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('inc_amount')); ?>:
	<?php echo GxHtml::encode($data->inc_amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('inc_paid')); ?>:
	<?php echo GxHtml::encode($data->inc_paid); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('inc_branch')); ?>:
	<?php echo GxHtml::encode($data->inc_branch); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('inc_chk_no')); ?>:
	<?php echo GxHtml::encode($data->inc_chk_no); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('inc_chk_date')); ?>:
	<?php echo GxHtml::encode($data->inc_chk_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('inc_apt_num')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->incAptNum)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('inc_bank')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->incBank)); ?>
	<br />
	*/ ?>

</div>