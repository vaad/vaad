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
		<?php echo $form->label($model, 'st_name'); ?>
		<?php echo $form->textField($model, 'st_name', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'st_slogen'); ?>
		<?php echo $form->textField($model, 'st_slogen', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'st_street'); ?>
		<?php echo $form->textField($model, 'st_street', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'st_street_num'); ?>
		<?php echo $form->textField($model, 'st_street_num', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'st_city'); ?>
		<?php echo $form->textField($model, 'st_city', array('maxlength' => 25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'st_zipcode'); ?>
		<?php echo $form->textField($model, 'st_zipcode', array('maxlength' => 5)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
