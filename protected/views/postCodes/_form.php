<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'post-codes-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'code_desc'); ?>
		<?php echo $form->textField($model, 'code_desc', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'code_desc'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('posts')); ?></label>
		<?php echo $form->checkBoxList($model, 'posts', GxHtml::encodeEx(GxHtml::listDataEx(Posts::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
