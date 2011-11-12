<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('site_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->site)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('is_active')); ?>:
	<?php echo GxHtml::encode($data->is_active); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bld_street')); ?>:
	<?php echo GxHtml::encode($data->bld_street); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bld_num')); ?>:
	<?php echo GxHtml::encode($data->bld_num); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bld_city')); ?>:
	<?php echo GxHtml::encode($data->bld_city); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bld_zip')); ?>:
	<?php echo GxHtml::encode($data->bld_zip); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('bld_num_app')); ?>:
	<?php echo GxHtml::encode($data->bld_num_app); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bld_min_floor')); ?>:
	<?php echo GxHtml::encode($data->bld_min_floor); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bld_max_floor')); ?>:
	<?php echo GxHtml::encode($data->bld_max_floor); ?>
	<br />
	*/ ?>

</div>