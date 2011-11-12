<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'contacts-form',
			'enableAjaxValidation' => false,
			));
?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'cnt_type'); ?>
<?php echo $form->dropDownList($model, 'cnt_type', GxHtml::listDataEx(ContactCodes::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'cnt_type'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'cnt_first_name'); ?>
<?php echo $form->textField($model, 'cnt_first_name', array('maxlength' => 20)); ?>
<?php echo $form->error($model,'cnt_first_name'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'cnt_last_name'); ?>
<?php echo $form->textField($model, 'cnt_last_name', array('maxlength' => 20)); ?>
<?php echo $form->error($model,'cnt_last_name'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'cnt_phone1'); ?>
<?php echo $form->textField($model, 'cnt_phone1', array('maxlength' => 20)); ?>
<?php echo $form->error($model,'cnt_phone1'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'cnt_phone2'); ?>
<?php echo $form->textField($model, 'cnt_phone2', array('maxlength' => 20)); ?>
<?php echo $form->error($model,'cnt_phone2'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'cnt_address'); ?>
<?php echo $form->textField($model, 'cnt_address', array('maxlength' => 100)); ?>
<?php echo $form->error($model,'cnt_address'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'cnt_remarks'); ?>
<?php echo $form->textArea($model, 'cnt_remarks'); ?>
<?php echo $form->error($model,'cnt_remarks'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'cnt_email'); ?>
<?php echo $form->textField($model, 'cnt_email', array('maxlength' => 50)); ?>
<?php echo $form->error($model,'cnt_email'); ?>
</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
