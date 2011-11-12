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
		<?php echo $form->label($model, 'app_num'); ?>
		<?php echo $form->textField($model, 'app_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'app_flat_num'); ?>
		<?php echo $form->textField($model, 'app_flat_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'app_type'); ?>
		<?php echo $form->dropDownList($model, 'app_type', GxHtml::listDataEx(AppCodes::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'start_mnt_date'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'next_mnt_date'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'mnt_gap'); ?>
		<?php echo $form->textField($model, 'mnt_gap'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'mnt_gap_type'); ?>
		<?php echo $form->textField($model, 'mnt_gap_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
