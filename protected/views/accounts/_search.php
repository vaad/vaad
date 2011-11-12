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
		<?php echo $form->label($model, 'acc_type'); ?>
		<?php echo $form->textField($model, 'acc_type', array('maxlength' => 3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'acc_branch'); ?>
		<?php echo $form->textField($model, 'acc_branch', array('maxlength' => 3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'acc_number'); ?>
		<?php echo $form->textField($model, 'acc_number', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'acc_starting_amount'); ?>
		<?php echo $form->textField($model, 'acc_starting_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'acc_remarks'); ?>
		<?php echo $form->textArea($model, 'acc_remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'acc_bank'); ?>
		<?php echo $form->dropDownList($model, 'acc_bank', GxHtml::listDataEx(BankCodes::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
