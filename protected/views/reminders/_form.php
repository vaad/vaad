<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'reminders-form',
			'enableAjaxValidation' => false,
			));
?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'title'); ?>
<?php echo $form->textField($model, 'title', array('maxlength' => 255)); ?>
<?php echo $form->error($model,'title'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'apt_id'); ?>
<?php echo $form->dropDownList($model, 'apt_id', GxHtml::listDataEx(Appartments::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'apt_id'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'reminder_time'); ?>
<?php echo $form->textField($model, 'reminder_time'); ?>
<?php echo $form->error($model,'reminder_time'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'remarks'); ?>
<?php echo $form->textArea($model, 'remarks'); ?>
<?php echo $form->error($model,'remarks'); ?>
</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
