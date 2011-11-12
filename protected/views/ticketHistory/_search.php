<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tkt_id'); ?>
		<?php echo $form->dropDownList($model, 'tkt_id', GxHtml::listDataEx(Tickets::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bld_id'); ?>
		<?php echo $form->dropDownList($model, 'bld_id', GxHtml::listDataEx(Buildings::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tnt_id'); ?>
		<?php echo $form->dropDownList($model, 'tnt_id', GxHtml::listDataEx(Tenants::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tkh_date'); ?>
		<?php echo $form->textField($model, 'tkh_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tkh_title'); ?>
		<?php echo $form->textField($model, 'tkh_title', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tkh_desc'); ?>
		<?php echo $form->textArea($model, 'tkh_desc'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
