<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('tkt_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->tkt)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bld_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->bld)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tnt_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->tnt)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tkh_date')); ?>:
	<?php echo GxHtml::encode($data->tkh_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tkh_title')); ?>:
	<?php echo GxHtml::encode($data->tkh_title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tkh_desc')); ?>:
	<?php echo GxHtml::encode($data->tkh_desc); ?>
	<br />

</div>