<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('bld_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->bld)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tnt_app_num')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->tntAppNum)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tnt_first_name')); ?>:
	<?php echo GxHtml::encode($data->tnt_first_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tnt_last_name')); ?>:
	<?php echo GxHtml::encode($data->tnt_last_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tnt_password')); ?>:
	<?php echo GxHtml::encode($data->tnt_password); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tnt_birthday')); ?>:
	<?php echo GxHtml::encode($data->tnt_birthday); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('tnt_email')); ?>:
	<?php echo GxHtml::encode($data->tnt_email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tnt_app_phone')); ?>:
	<?php echo GxHtml::encode($data->tnt_app_phone); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tnt_picture')); ?>:
	<?php echo GxHtml::encode($data->tnt_picture); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tnt_mobile')); ?>:
	<?php echo GxHtml::encode($data->tnt_mobile); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tnt_entry_date')); ?>:
	<?php echo GxHtml::encode($data->tnt_entry_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tnt_occupation')); ?>:
	<?php echo GxHtml::encode($data->tnt_occupation); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tnt_is_owner')); ?>:
	<?php echo GxHtml::encode($data->tnt_is_owner); ?>
	<br />
	*/ ?>

</div>