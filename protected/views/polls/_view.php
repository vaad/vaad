<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('bld_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->bld)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('pol_type')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->polType)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('pol_title')); ?>:
	<?php echo GxHtml::encode($data->pol_title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('pol_date')); ?>:
	<?php echo GxHtml::encode($data->pol_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('pol_desc')); ?>:
	<?php echo GxHtml::encode($data->pol_desc); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('pol_exp_date')); ?>:
	<?php echo GxHtml::encode($data->pol_exp_date); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('pol_on_main')); ?>:
	<?php echo GxHtml::encode($data->pol_on_main); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('pol_active')); ?>:
	<?php echo GxHtml::encode($data->pol_active); ?>
	<br />
	*/ ?>

</div>