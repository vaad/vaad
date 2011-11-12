<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'ad-cat-codes-form',
			'enableAjaxValidation' => false,
			));
?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'code_desc'); ?>
<?php echo $form->textField($model, 'code_desc', array('maxlength' => 30)); ?>
<?php echo $form->error($model,'code_desc'); ?>
</div><!-- row -->

<label><?php echo GxHtml::encode($model->getRelationLabel('ads')); ?></label>
<?php echo $form->checkBoxList($model, 'ads', GxHtml::encodeEx(GxHtml::listDataEx(Ads::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
