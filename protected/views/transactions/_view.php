<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('bld_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->bld)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('acc_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->acc)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('prj_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->prj)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('trn_date')); ?>:
	<?php echo GxHtml::encode($data->trn_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('trn_amount')); ?>:
	<?php echo GxHtml::encode($data->trn_amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('trn_debit')); ?>:
	<?php echo GxHtml::encode($data->trn_debit == 1 ? 'הכנסה' : 'הוצאה'); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('trn_reference')); ?>:
	<?php echo GxHtml::encode($data->trn_reference); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('trn_desc')); ?>:
	<?php echo GxHtml::encode($data->trn_desc); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('trn_cat')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->trnCat)); ?>
	<br />
	*/ ?>

</div>