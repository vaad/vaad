<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'incomes-form',
			'enableAjaxValidation' => false,
			));
?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'prj_id'); ?>
<?php echo $form->dropDownList($model, 'prj_id', GxHtml::listDataEx(Projects::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'prj_id'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'inc_date'); ?>
<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'inc_date',
			'value' => $model->inc_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
<?php echo $form->error($model,'inc_date'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'inc_until_date'); ?>
<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'inc_until_date',
			'value' => $model->inc_until_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
<?php echo $form->error($model,'inc_until_date'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'inc_amount'); ?>
<?php echo $form->textField($model, 'inc_amount'); ?>
<?php echo $form->error($model,'inc_amount'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'inc_paid'); ?>
<?php echo $form->checkBox($model, 'inc_paid'); ?>
<?php echo $form->error($model,'inc_paid'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'inc_branch'); ?>
<?php echo $form->textField($model, 'inc_branch'); ?>
<?php echo $form->error($model,'inc_branch'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'inc_chk_no'); ?>
<?php echo $form->textField($model, 'inc_chk_no'); ?>
<?php echo $form->error($model,'inc_chk_no'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'inc_chk_date'); ?>
<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'inc_chk_date',
			'value' => $model->inc_chk_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
<?php echo $form->error($model,'inc_chk_date'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'inc_apt_num'); ?>
<?php echo $form->dropDownList($model, 'inc_apt_num', GxHtml::listDataEx(Appartments::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'inc_apt_num'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'inc_bank'); ?>
<?php echo $form->dropDownList($model, 'inc_bank', GxHtml::listDataEx(BankCodes::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'inc_bank'); ?>
</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
