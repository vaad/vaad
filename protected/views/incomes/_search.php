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
		<?php echo $form->label($model, 'prj_id'); ?>
		<?php echo $form->dropDownList($model, 'prj_id', GxHtml::listDataEx(Projects::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'inc_date'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'inc_until_date'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'inc_amount'); ?>
		<?php echo $form->textField($model, 'inc_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'inc_paid'); ?>
		<?php echo $form->dropDownList($model, 'inc_paid', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'inc_branch'); ?>
		<?php echo $form->textField($model, 'inc_branch'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'inc_chk_no'); ?>
		<?php echo $form->textField($model, 'inc_chk_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'inc_chk_date'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'inc_apt_num'); ?>
		<?php echo $form->dropDownList($model, 'inc_apt_num', GxHtml::listDataEx(Appartments::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'inc_bank'); ?>
		<?php echo $form->dropDownList($model, 'inc_bank', GxHtml::listDataEx(BankCodes::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
