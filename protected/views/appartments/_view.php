<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('bld_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->bld)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('app_num')); ?>:
	<?php echo GxHtml::encode($data->app_num); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('app_flat_num')); ?>:
	<?php echo GxHtml::encode($data->app_flat_num); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('app_type')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->appType)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('start_mnt_date')); ?>:
	<?php echo GxHtml::encode($data->start_mnt_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('next_mnt_date')); ?>:
	<?php echo GxHtml::encode($data->next_mnt_date); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('mnt_gap')); ?>:
	<?php echo GxHtml::encode($data->mnt_gap); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('mnt_gap_type')); ?>:
	<?php echo GxHtml::encode($data->mnt_gap_type); ?>
	<br />
	*/ ?>

</div>