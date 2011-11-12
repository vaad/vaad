<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'bank-codes-form',
	'enableAjaxValidation' => false,
));
?>
	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'קוד בנק'); ?>
		<?php echo $form->textField($model, 'id'); ?>
		<?php echo $form->error($model,'id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'שם הבנק'); ?>
		<?php echo $form->textField($model, 'code_desc', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'code_desc'); ?>
		</div><!-- row -->

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->