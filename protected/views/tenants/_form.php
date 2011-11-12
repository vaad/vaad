<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'tenants-form',
			'enableAjaxValidation' => false,
			));
?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'tnt_first_name'); ?>
<?php echo $form->textField($model, 'tnt_first_name', array('maxlength' => 15)); ?>
<?php echo $form->error($model,'tnt_first_name'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_last_name'); ?>
<?php echo $form->textField($model, 'tnt_last_name', array('maxlength' => 15)); ?>
<?php echo $form->error($model,'tnt_last_name'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_is_active'); ?>
<?php echo $form->checkBox($model, 'tnt_is_active'); ?>
<?php echo $form->error($model,'tnt_is_active'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_app_num'); ?>
<?php echo $form->dropDownList($model, 'tnt_app_num', GxHtml::listDataEx(Appartments::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'tnt_app_num'); ?>
</div><!-- row -->
<?php /*
 <div class="row">
<?php echo $form->labelEx($model,'tnt_password'); ?>
<?php echo $form->textField($model, 'tnt_password', array('maxlength' => 60)); ?>
<?php echo $form->error($model,'tnt_password'); ?>
</div><!-- row -->
 * 
 */ ?>
<div class="row">
<?php echo $form->labelEx($model,'tnt_birthday'); ?>
<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tnt_birthday',
			'value' => $model->tnt_birthday,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
<?php echo $form->error($model,'tnt_birthday'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_email'); ?>
<?php echo $form->textField($model, 'tnt_email', array('maxlength' => 60)); ?>
<?php echo $form->error($model,'tnt_email'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_app_phone'); ?>
<?php echo $form->textField($model, 'tnt_app_phone', array('maxlength' => 20)); ?>
<?php echo $form->error($model,'tnt_app_phone'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_picture'); ?>
<?php echo $form->textField($model, 'tnt_picture', array('maxlength' => 255)); ?>
<?php echo $form->error($model,'tnt_picture'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_mobile'); ?>
<?php echo $form->textField($model, 'tnt_mobile', array('maxlength' => 20)); ?>
<?php echo $form->error($model,'tnt_mobile'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_entry_date'); ?>
<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tnt_entry_date',
			'value' => $model->tnt_entry_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
<?php echo $form->error($model,'tnt_entry_date'); ?>
</div><!-- row -->
<?php if (Yii::app()->user->isVaad()) { ?>
<div class="row">
<?php echo $form->labelEx($model,'tnt_prev_debt'); ?>
<?php echo $form->textField($model, 'tnt_prev_debt'); ?>
<?php echo $form->error($model,'tnt_prev_debt'); ?>
</div><!-- row -->
<?php } ?>
<div class="row">
<?php echo $form->labelEx($model,'tnt_occupation'); ?>
<?php echo $form->textField($model, 'tnt_occupation', array('maxlength' => 30)); ?>
<?php echo $form->error($model,'tnt_occupation'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_is_vaad'); ?>
<?php echo $form->checkBox($model, 'tnt_is_vaad'); ?>
<?php echo $form->error($model,'tnt_is_vaad'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_is_owner'); ?>
<?php echo $form->checkBox($model, 'tnt_is_owner'); ?>
<?php echo $form->error($model,'tnt_is_owner'); ?>
</div><!-- row -->
<?php /*
<div class="row">
<?php echo $form->labelEx($model,'tnt_is_site_vaad'); ?>
<?php echo $form->checkBox($model, 'tnt_is_site_vaad'); ?>
<?php echo $form->error($model,'tnt_is_site_vaad'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_is_nbrhd_vaad'); ?>
<?php echo $form->checkBox($model, 'tnt_is_nbrhd_vaad'); ?>
<?php echo $form->error($model,'tnt_is_nbrhd_vaad'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_is_city_vaad'); ?>
<?php echo $form->checkBox($model, 'tnt_is_city_vaad'); ?>
<?php echo $form->error($model,'tnt_is_city_vaad'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_is_admin'); ?>
<?php echo $form->checkBox($model, 'tnt_is_admin'); ?>
<?php echo $form->error($model,'tnt_is_admin'); ?>
</div><!-- row -->
*/ ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
