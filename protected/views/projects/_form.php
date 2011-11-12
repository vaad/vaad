<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'projects-form',
			'enableAjaxValidation' => false,
			));
?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'prj_title'); ?>
<?php echo $form->textField($model, 'prj_title', array('maxlength' => 50)); ?>
<?php echo $form->error($model,'prj_title'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'prj_desc'); ?>
<?php echo $form->textArea($model, 'prj_desc'); ?>
<?php echo $form->error($model,'prj_desc'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'prj_approx_cost'); ?>
<?php echo $form->textField($model, 'prj_approx_cost'); ?>
<?php echo $form->error($model,'prj_approx_cost'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'prj_actual_cost'); ?>
<?php echo $form->textField($model, 'prj_actual_cost'); ?>
<?php echo $form->error($model,'prj_actual_cost'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'prj_approx_start_date'); ?>
<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'prj_approx_start_date',
			'value' => $model->prj_approx_start_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
<?php echo $form->error($model,'prj_approx_start_date'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'prj_actual_start_date'); ?>
<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'prj_actual_start_date',
			'value' => $model->prj_actual_start_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
<?php echo $form->error($model,'prj_actual_start_date'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'prj_approx_end_date'); ?>
<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'prj_approx_end_date',
			'value' => $model->prj_approx_end_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
<?php echo $form->error($model,'prj_approx_end_date'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'prj_actual_end_date'); ?>
<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'prj_actual_end_date',
			'value' => $model->prj_actual_end_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
<?php echo $form->error($model,'prj_actual_end_date'); ?>
</div><!-- row -->
<?php /*
<label><?php echo GxHtml::encode($model->getRelationLabel('transactions')); ?></label>
<?php echo $form->checkBoxList($model, 'transactions', GxHtml::encodeEx(GxHtml::listDataEx(Transactions::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('incomes')); ?></label>
<?php echo $form->checkBoxList($model, 'incomes', GxHtml::encodeEx(GxHtml::listDataEx(Incomes::model()->findAllAttributes(null, true)), false, true)); ?>
*/ ?>
<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
