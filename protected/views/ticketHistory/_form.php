<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'ticket-history-form',
			'enableAjaxValidation' => false,
			));
?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'tkt_id'); ?>
<?php echo $form->dropDownList($model, 'tkt_id', GxHtml::listDataEx(Tickets::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'tkt_id'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_id'); ?>
<?php echo $form->dropDownList($model, 'tnt_id', GxHtml::listDataEx(Tenants::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'tnt_id'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tkh_date'); ?>
<?php echo $form->textField($model, 'tkh_date'); ?>
<?php echo $form->error($model,'tkh_date'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tkh_title'); ?>
<?php echo $form->textField($model, 'tkh_title', array('maxlength' => 50)); ?>
<?php echo $form->error($model,'tkh_title'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tkh_desc'); ?>
<?php echo $form->textArea($model, 'tkh_desc'); ?>
<?php echo $form->error($model,'tkh_desc'); ?>
</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
