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
		<?php echo $form->label($model, 'bld_id'); ?>
		<?php echo $form->dropDownList($model, 'bld_id', GxHtml::listDataEx(Buildings::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'cnt_first_name'); ?>
		<?php echo $form->textField($model, 'cnt_first_name', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'cnt_last_name'); ?>
		<?php echo $form->textField($model, 'cnt_last_name', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'cnt_phone1'); ?>
		<?php echo $form->textField($model, 'cnt_phone1', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'cnt_phone2'); ?>
		<?php echo $form->textField($model, 'cnt_phone2', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'cnt_address'); ?>
		<?php echo $form->textField($model, 'cnt_address', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'cnt_remarks'); ?>
		<?php echo $form->textArea($model, 'cnt_remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'cnt_type'); ?>
		<?php echo $form->dropDownList($model, 'cnt_type', GxHtml::listDataEx(ContactCodes::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'cnt_email'); ?>
		<?php echo $form->textField($model, 'cnt_email', array('maxlength' => 50)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
