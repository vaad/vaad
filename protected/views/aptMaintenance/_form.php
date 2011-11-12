<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'apt-maintenance-form',
	'enableAjaxValidation' => false,
));
?>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'apt_id'); ?>
		<?php echo $form->dropDownList($model, 'apt_id', GxHtml::listDataEx(Appartments::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'apt_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'start_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'start_date',
			'value' => $model->start_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'start_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model, 'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
