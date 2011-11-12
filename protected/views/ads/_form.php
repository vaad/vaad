<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'ads-form',
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
<?php echo $form->labelEx($model,'name'); ?>
<?php echo $form->textField($model, 'name', array('maxlength' => 255)); ?>
<?php echo $form->error($model,'name'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'content_txt'); ?>
<?php echo $form->textArea($model, 'content_txt'); ?>
<?php echo $form->error($model,'content_txt'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'is_asking'); ?>
<?php echo $form->checkBox($model, 'is_asking'); ?>
<?php echo $form->error($model,'is_asking'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'is_offering'); ?>
<?php echo $form->checkBox($model, 'is_offering'); ?>
<?php echo $form->error($model,'is_offering'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'phone_num'); ?>
<?php echo $form->textField($model, 'phone_num', array('maxlength' => 15)); ?>
<?php echo $form->error($model,'phone_num'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'remarks'); ?>
<?php echo $form->textArea($model, 'remarks'); ?>
<?php echo $form->error($model,'remarks'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'price_asked'); ?>
<?php echo $form->textField($model, 'price_asked'); ?>
<?php echo $form->error($model,'price_asked'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'category'); ?>
<?php echo $form->dropDownList($model, 'category', GxHtml::listDataEx(AdCatCodes::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'category'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'creation_date'); ?>
<?php echo $form->textField($model, 'creation_date'); ?>
<?php echo $form->error($model,'creation_date'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'update_time'); ?>
<?php echo $form->textField($model, 'update_time'); ?>
<?php echo $form->error($model,'update_time'); ?>
</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
