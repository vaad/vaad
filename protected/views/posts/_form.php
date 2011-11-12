<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'posts-form',
			'enableAjaxValidation' => false,
			));
?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'title'); ?>
<?php echo $form->textField($model, 'title', array('maxlength' => 128)); ?>
<?php echo $form->error($model,'title'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'content_txt'); ?>
<?php echo $form->textArea($model, 'content_txt'); ?>
<?php echo $form->error($model,'content_txt'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'pst_picture'); ?>
<?php echo $form->textField($model, 'pst_picture', array('maxlength' => 128)); ?>
<?php echo $form->error($model,'pst_picture'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'forum_id'); ?>
<?php echo $form->dropDownList($model, 'forum_id', GxHtml::listDataEx(Forums::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'forum_id'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'author_id'); ?>
<?php echo $form->dropDownList($model, 'author_id', GxHtml::listDataEx(Tenants::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'author_id'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'pst_status'); ?>
<?php echo $form->dropDownList($model, 'pst_status', GxHtml::listDataEx(PostCodes::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'pst_status'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'create_time'); ?>
<?php echo $form->textField($model, 'create_time', array('readonly' => 'yes')); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'update_time'); ?>
<?php echo $form->textField($model, 'update_time', array('readonly' => 'yes')); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'adding_comments'); ?>
<?php echo $form->checkBox($model, 'adding_comments'); ?>
<?php echo $form->error($model,'adding_comments'); ?>
</div><!-- row -->

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
