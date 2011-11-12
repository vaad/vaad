<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'forums-form',
			'enableAjaxValidation' => false,
			));
?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'forum_name'); ?>
<?php echo $form->textField($model, 'forum_name', array('maxlength' => 255)); ?>
<?php echo $form->error($model,'forum_name'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'forum_desc'); ?>
<?php echo $form->textArea($model, 'forum_desc'); ?>
<?php echo $form->error($model,'forum_desc'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'מנהל הפורום'); ?>
<?php echo $form->dropDownList($model, 'forum_mngr', GxHtml::listDataEx(Tenants::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'forum_mngr'); ?>
</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
