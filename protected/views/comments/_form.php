<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'comments-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'post_id'); ?>
		<?php echo $form->dropDownList($model, 'post_id', GxHtml::listDataEx(Posts::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'post_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'author_id'); ?>
		<?php echo $form->dropDownList($model, 'author_id', GxHtml::listDataEx(Tenants::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'author_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'content_text'); ?>
		<?php echo $form->textArea($model, 'content_text'); ?>
		<?php echo $form->error($model,'content_text'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model, 'status'); ?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'create_time',
			'value' => $model->create_time,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'create_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'is_locked'); ?>
		<?php echo $form->checkBox($model, 'is_locked'); ?>
		<?php echo $form->error($model,'is_locked'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
