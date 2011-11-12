<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('st_name')); ?>:
	<?php echo GxHtml::encode($data->st_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('st_slogen')); ?>:
	<?php echo GxHtml::encode($data->st_slogen); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('st_street')); ?>:
	<?php echo GxHtml::encode($data->st_street); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('st_street_num')); ?>:
	<?php echo GxHtml::encode($data->st_street_num); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('st_city')); ?>:
	<?php echo GxHtml::encode($data->st_city); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('st_zipcode')); ?>:
	<?php echo GxHtml::encode($data->st_zipcode); ?>
	<br />

</div>