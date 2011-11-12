<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('bld_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->bld)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('title')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('content_txt')); ?>:
	<?php echo GxHtml::encode($data->content_txt); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('is_asking')); ?>:
	<?php echo GxHtml::encode($data->is_asking); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('is_offering')); ?>:
	<?php echo GxHtml::encode($data->is_offering); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('phone_num')); ?>:
	<?php echo GxHtml::encode($data->phone_num); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('remarks')); ?>:
	<?php echo GxHtml::encode($data->remarks); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('price_asked')); ?>:
	<?php echo GxHtml::encode($data->price_asked); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('category')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->category0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('creation_date')); ?>:
	<?php echo GxHtml::encode($data->creation_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('update_time')); ?>:
	<?php echo GxHtml::encode($data->update_time); ?>
	<br />
	*/ ?>

</div>