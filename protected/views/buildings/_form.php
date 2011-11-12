<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'buildings-form',
			'enableAjaxValidation' => false,
			));
?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'site_id'); ?>
<?php echo $form->dropDownList($model, 'site_id', GxHtml::listDataEx(Sites::model()->findAllAttributes(null, true))); ?>
<?php echo $form->error($model,'site_id'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'is_active'); ?>
<?php echo $form->checkBox($model, 'is_active'); ?>
<?php echo $form->error($model,'is_active'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'bld_street'); ?>
<?php echo $form->textField($model, 'bld_street', array('maxlength' => 50)); ?>
<?php echo $form->error($model,'bld_street'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'bld_num'); ?>
<?php echo $form->textField($model, 'bld_num', array('maxlength' => 10)); ?>
<?php echo $form->error($model,'bld_num'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'bld_city'); ?>
<?php echo $form->textField($model, 'bld_city', array('maxlength' => 25)); ?>
<?php echo $form->error($model,'bld_city'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'bld_zip'); ?>
<?php echo $form->textField($model, 'bld_zip', array('maxlength' => 5)); ?>
<?php echo $form->error($model,'bld_zip'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'bld_num_app'); ?>
<?php echo $form->textField($model, 'bld_num_app'); ?>
<?php echo $form->error($model,'bld_num_app'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'bld_min_floor'); ?>
<?php echo $form->textField($model, 'bld_min_floor'); ?>
<?php echo $form->error($model,'bld_min_floor'); ?>
</div><!-- row -->
<div class="row">
<?php echo $form->labelEx($model,'bld_max_floor'); ?>
<?php echo $form->textField($model, 'bld_max_floor'); ?>
<?php echo $form->error($model,'bld_max_floor'); ?>
</div><!-- row -->

<label><?php echo GxHtml::encode($model->getRelationLabel('taxes')); ?></label>
<?php echo $form->checkBoxList($model, 'taxes', GxHtml::encodeEx(GxHtml::listDataEx(Taxes::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('appartments')); ?></label>
<?php echo $form->checkBoxList($model, 'appartments', GxHtml::encodeEx(GxHtml::listDataEx(Appartments::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('accounts')); ?></label>
<?php echo $form->checkBoxList($model, 'accounts', GxHtml::encodeEx(GxHtml::listDataEx(Accounts::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('appTaxes')); ?></label>
<?php echo $form->checkBoxList($model, 'appTaxes', GxHtml::encodeEx(GxHtml::listDataEx(AppTaxes::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('tenants')); ?></label>
<?php echo $form->checkBoxList($model, 'tenants', GxHtml::encodeEx(GxHtml::listDataEx(Tenants::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('ads')); ?></label>
<?php echo $form->checkBoxList($model, 'ads', GxHtml::encodeEx(GxHtml::listDataEx(Ads::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('comments')); ?></label>
<?php echo $form->checkBoxList($model, 'comments', GxHtml::encodeEx(GxHtml::listDataEx(Comments::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('projects')); ?></label>
<?php echo $form->checkBoxList($model, 'projects', GxHtml::encodeEx(GxHtml::listDataEx(Projects::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('transactions')); ?></label>
<?php echo $form->checkBoxList($model, 'transactions', GxHtml::encodeEx(GxHtml::listDataEx(Transactions::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('reminders')); ?></label>
<?php echo $form->checkBoxList($model, 'reminders', GxHtml::encodeEx(GxHtml::listDataEx(Reminders::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('tags')); ?></label>
<?php echo $form->checkBoxList($model, 'tags', GxHtml::encodeEx(GxHtml::listDataEx(Tags::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('tasks')); ?></label>
<?php echo $form->checkBoxList($model, 'tasks', GxHtml::encodeEx(GxHtml::listDataEx(Tasks::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('ticketHistories')); ?></label>
<?php echo $form->checkBoxList($model, 'ticketHistories', GxHtml::encodeEx(GxHtml::listDataEx(TicketHistory::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('tickets')); ?></label>
<?php echo $form->checkBoxList($model, 'tickets', GxHtml::encodeEx(GxHtml::listDataEx(Tickets::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('forums')); ?></label>
<?php echo $form->checkBoxList($model, 'forums', GxHtml::encodeEx(GxHtml::listDataEx(Forums::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('incomes')); ?></label>
<?php echo $form->checkBoxList($model, 'incomes', GxHtml::encodeEx(GxHtml::listDataEx(Incomes::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('polls')); ?></label>
<?php echo $form->checkBoxList($model, 'polls', GxHtml::encodeEx(GxHtml::listDataEx(Polls::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('receipts')); ?></label>
<?php echo $form->checkBoxList($model, 'receipts', GxHtml::encodeEx(GxHtml::listDataEx(Receipts::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('postTags')); ?></label>
<?php echo $form->checkBoxList($model, 'postTags', GxHtml::encodeEx(GxHtml::listDataEx(PostTags::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('posts')); ?></label>
<?php echo $form->checkBoxList($model, 'posts', GxHtml::encodeEx(GxHtml::listDataEx(Posts::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('contacts')); ?></label>
<?php echo $form->checkBoxList($model, 'contacts', GxHtml::encodeEx(GxHtml::listDataEx(Contacts::model()->findAllAttributes(null, true)), false, true)); ?>
<label><?php echo GxHtml::encode($model->getRelationLabel('aptMaintenances')); ?></label>
<?php echo $form->checkBoxList($model, 'aptMaintenances', GxHtml::encodeEx(GxHtml::listDataEx(AptMaintenance::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
