<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'appartments-form',
	'enableAjaxValidation' => false,
));
?>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'app_num'); ?>
		<?php echo $form->textField($model, 'app_num'); ?>
		<?php echo $form->error($model,'app_num'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'app_flat_num'); ?>
		<?php echo $form->textField($model, 'app_flat_num'); ?>
		<?php echo $form->error($model,'app_flat_num'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'app_type'); ?>
		<?php echo $form->dropDownList($model, 'app_type', GxHtml::listDataEx(AppCodes::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'app_type'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'start_mnt_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'start_mnt_date',
			'value' => $model->start_mnt_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'start_mnt_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'next_mnt_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'next_mnt_date',
			'value' => $model->next_mnt_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'next_mnt_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'mnt_gap'); ?>
		<?php echo $form->textField($model, 'mnt_gap'); ?>
		<?php echo $form->error($model,'mnt_gap'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'mnt_gap_type'); ?>
		<?php echo $form->textField($model, 'mnt_gap_type'); ?>
		<?php echo $form->error($model,'mnt_gap_type'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('appTaxes')); ?></label>
		<?php echo $form->checkBoxList($model, 'appTaxes', GxHtml::encodeEx(GxHtml::listDataEx(AppTaxes::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tenants')); ?></label>
		<?php echo $form->checkBoxList($model, 'tenants', GxHtml::encodeEx(GxHtml::listDataEx(Tenants::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('reminders')); ?></label>
		<?php echo $form->checkBoxList($model, 'reminders', GxHtml::encodeEx(GxHtml::listDataEx(Reminders::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('incomes')); ?></label>
		<?php echo $form->checkBoxList($model, 'incomes', GxHtml::encodeEx(GxHtml::listDataEx(Incomes::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('aptMaintenances')); ?></label>
		<?php echo $form->checkBoxList($model, 'aptMaintenances', GxHtml::encodeEx(GxHtml::listDataEx(AptMaintenance::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
