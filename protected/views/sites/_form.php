<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'sites-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'st_name'); ?>
		<?php echo $form->textField($model, 'st_name', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'st_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'st_slogen'); ?>
		<?php echo $form->textField($model, 'st_slogen', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'st_slogen'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'st_street'); ?>
		<?php echo $form->textField($model, 'st_street', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'st_street'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'st_street_num'); ?>
		<?php echo $form->textField($model, 'st_street_num', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'st_street_num'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'st_city'); ?>
		<?php echo $form->textField($model, 'st_city', array('maxlength' => 25)); ?>
		<?php echo $form->error($model,'st_city'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'st_zipcode'); ?>
		<?php echo $form->textField($model, 'st_zipcode', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'st_zipcode'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('buildings')); ?></label>
		<?php echo $form->checkBoxList($model, 'buildings', GxHtml::encodeEx(GxHtml::listDataEx(Buildings::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->