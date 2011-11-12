<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'polls-form',
			'enableAjaxValidation' => false,
			));
?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'pol_type'); ?>
<?php echo $form->dropDownList($model, 'pol_type', GxHtml::listDataEx(PollCodes::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'pol_type'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'pol_title'); ?>
<?php echo $form->textField($model, 'pol_title', array('maxlength' => 255)); ?>
<?php echo $form->error($model,'pol_title'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'pol_date'); ?>
<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'pol_date',
			'value' => $model->pol_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
<?php echo $form->error($model,'pol_date'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'pol_desc'); ?>
<?php echo $form->textArea($model, 'pol_desc'); ?>
<?php echo $form->error($model,'pol_desc'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'pol_exp_date'); ?>
<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'pol_exp_date',
			'value' => $model->pol_exp_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
<?php echo $form->error($model,'pol_exp_date'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'pol_on_main'); ?>
<?php echo $form->checkBox($model, 'pol_on_main'); ?>
<?php echo $form->error($model,'pol_on_main'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'pol_active'); ?>
<?php echo $form->checkBox($model, 'pol_active'); ?>
<?php echo $form->error($model,'pol_active'); ?>
</div><!-- row -->

<label><?php echo GxHtml::encode($model->getRelationLabel('pollAttendents')); ?></label>
<?php echo $form->checkBoxList($model, 'pollAttendents', GxHtml::encodeEx(GxHtml::listDataEx(PollAttendents::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
