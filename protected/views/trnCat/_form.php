<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'trn-cat-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'cat_desc'); ?>
		<?php echo $form->textField($model, 'cat_desc', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'cat_desc'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('transactions')); ?></label>
		<?php echo $form->checkBoxList($model, 'transactions', GxHtml::encodeEx(GxHtml::listDataEx(Transactions::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
