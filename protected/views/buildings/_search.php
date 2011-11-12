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
		<?php echo $form->label($model, 'site_id'); ?>
		<?php echo $form->dropDownList($model, 'site_id', GxHtml::listDataEx(Sites::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'is_active'); ?>
		<?php echo $form->dropDownList($model, 'is_active', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bld_street'); ?>
		<?php echo $form->textField($model, 'bld_street', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bld_num'); ?>
		<?php echo $form->textField($model, 'bld_num', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bld_city'); ?>
		<?php echo $form->textField($model, 'bld_city', array('maxlength' => 25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bld_zip'); ?>
		<?php echo $form->textField($model, 'bld_zip', array('maxlength' => 5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bld_num_app'); ?>
		<?php echo $form->textField($model, 'bld_num_app'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bld_min_floor'); ?>
		<?php echo $form->textField($model, 'bld_min_floor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bld_max_floor'); ?>
		<?php echo $form->textField($model, 'bld_max_floor'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
