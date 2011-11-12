<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'tickets-form',
			'enableAjaxValidation' => false,
			));
?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'tkt_title'); ?>
<?php echo $form->textField($model, 'tkt_title', array('maxlength' => 50)); ?>
<?php echo $form->error($model,'tkt_title'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tnt_id'); ?>
<?php echo $form->dropDownList($model, 'tnt_id', GxHtml::listDataEx(Tenants::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'tnt_id'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tkt_status'); ?>
<?php echo $form->dropDownList($model, 'tkt_status', GxHtml::listDataEx(TicketCodes::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'tkt_status'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tkt_opendate'); ?>
<?php echo $form->textField($model, 'tkt_opendate'); ?>
<?php echo $form->error($model,'tkt_opendate'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tkt_eta'); ?>
<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tkt_eta',
			'value' => $model->tkt_eta,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
<?php echo $form->error($model,'tkt_eta'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'tkt_closedate'); ?>
<?php echo $form->textField($model, 'tkt_closedate'); ?>
<?php echo $form->error($model,'tkt_closedate'); ?>
</div><!-- row -->

<label><?php echo GxHtml::encode($model->getRelationLabel('ticketHistories')); ?></label>
<?php echo $form->checkBoxList($model, 'ticketHistories', GxHtml::encodeEx(GxHtml::listDataEx(TicketHistory::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
