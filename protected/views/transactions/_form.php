<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'transactions-form',
			'enableAjaxValidation' => false,
			));
?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'acc_id'); ?>
<?php echo $form->dropDownList($model, 'acc_id', GxHtml::listDataEx(Accounts::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'acc_id'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'prj_id'); ?>
<?php echo $form->dropDownList($model, 'prj_id', GxHtml::listDataEx(Projects::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'prj_id'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'trn_date'); ?>
<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'trn_date',
			'value' => $model->trn_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
<?php echo $form->error($model,'trn_date'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'trn_amount'); ?>
<?php echo $form->textField($model, 'trn_amount'); ?>
<?php echo $form->error($model,'trn_amount'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'trn_debit'); ?>
<?php echo $form->dropDownList($model, 'trn_debit', array('1' => 'הכנסה', '-1' => 'הוצאה')); ?>
<?php echo $form->error($model,'trn_debit'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'trn_reference'); ?>
<?php echo $form->textField($model, 'trn_reference', array('maxlength' => 30)); ?>
<?php echo $form->error($model,'trn_reference'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'trn_desc'); ?>
<?php echo $form->textField($model, 'trn_desc', array('maxlength' => 255)); ?>
<?php echo $form->error($model,'trn_desc'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'trn_cat'); ?>
<?php echo $form->dropDownList($model, 'trn_cat', GxHtml::listDataEx(TrnCatCodes::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'trn_cat'); ?>
</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
