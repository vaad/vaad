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
		<?php echo $form->label($model, 'acc_id'); ?>
		<?php echo $form->dropDownList($model, 'acc_id', GxHtml::listDataEx(Accounts::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'prj_id'); ?>
		<?php echo $form->dropDownList($model, 'prj_id', GxHtml::listDataEx(Projects::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'trn_date'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'calcAmount'); ?>
		<?php echo $form->textField($model, 'calcAmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'trn_debit'); ?>
		<?php echo $form->textField($model, 'trn_debit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'trn_reference'); ?>
		<?php echo $form->textField($model, 'trn_reference', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'trn_desc'); ?>
		<?php echo $form->textField($model, 'trn_desc', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'trn_cat'); ?>
		<?php echo $form->dropDownList($model, 'trn_cat', GxHtml::listDataEx(TrnCatCodes::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
