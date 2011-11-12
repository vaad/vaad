<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'accounts-form',
	'enableAjaxValidation' => false,
));
?>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'acc_type'); ?>
		<?php echo $form->textField($model, 'acc_type', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'acc_type'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'acc_bank'); ?>
		<?php echo $form->dropDownList($model, 'acc_bank', GxHtml::listDataEx(BankCodes::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'acc_bank'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'acc_number'); ?>
		<?php echo $form->textField($model, 'acc_number', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'acc_number'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'acc_branch'); ?>
		<?php echo $form->textField($model, 'acc_branch', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'acc_branch'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'acc_starting_amount'); ?>
		<?php echo $form->textField($model, 'acc_starting_amount'); ?>
		<?php echo $form->error($model,'acc_starting_amount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'acc_remarks'); ?>
		<?php echo $form->textArea($model, 'acc_remarks'); ?>
		<?php echo $form->error($model,'acc_remarks'); ?>
		</div><!-- row -->

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
