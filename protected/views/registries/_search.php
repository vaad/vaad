<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bld_id'); ?>
		<?php echo $form->dropDownList($model, 'bld_id', GxHtml::listDataEx(Buildings::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tnt_app_num'); ?>
		<?php echo $form->dropDownList($model, 'tnt_app_num', GxHtml::listDataEx(Appartments::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tnt_first_name'); ?>
		<?php echo $form->textField($model, 'tnt_first_name', array('maxlength' => 15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tnt_last_name'); ?>
		<?php echo $form->textField($model, 'tnt_last_name', array('maxlength' => 15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tnt_birthday'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tnt_email'); ?>
		<?php echo $form->textField($model, 'tnt_email', array('maxlength' => 60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tnt_app_phone'); ?>
		<?php echo $form->textField($model, 'tnt_app_phone', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tnt_picture'); ?>
		<?php echo $form->textField($model, 'tnt_picture', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tnt_mobile'); ?>
		<?php echo $form->textField($model, 'tnt_mobile', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tnt_entry_date'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tnt_occupation'); ?>
		<?php echo $form->textField($model, 'tnt_occupation', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tnt_is_owner'); ?>
		<?php echo $form->dropDownList($model, 'tnt_is_owner', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
