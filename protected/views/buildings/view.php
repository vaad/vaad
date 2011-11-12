<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

if (Yii::app()->user->isVaad()) {
	$this->menu=array(
			array('label'=>Yii::t('app', 'List') . ' ' . Yii::t('app',$model->label(2)), 'url'=>array('index')),
			array('label'=>Yii::t('app', 'Create') . ' ' . Yii::t('app',$model->label()), 'url'=>array('create')),
			array('label'=>Yii::t('app', 'Update') . ' ' . Yii::t('app',$model->label()), 'url'=>array('update', 'id' => $model->id)),
			array('label'=>Yii::t('app', 'Delete') . ' ' . Yii::t('app',$model->label()), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'האם אתה בטוח שברצונך למחוק ?')),
			array('label'=>Yii::t('app', 'Manage') . ' ' . Yii::t('app',$model->label(2)), 'url'=>array('admin')),
			);
} else {
	$this->menu=array(
			array('label'=>Yii::t('app', 'List') . ' ' . Yii::t('app',$model->label(2)), 'url'=>array('index')),
			);
}

?>

<h1><?php echo /*Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' .*/ Yii::t('app',GxHtml::encode(GxHtml::valueEx($model))); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
			'data' => $model,
			'attributes' => array(
				'id',
array(
			'name' => 'site',
			'type' => 'raw',
			'value' => $model->site !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->site)), array('sites/view', 'id' => GxActiveRecord::extractPkValue($model->site, true))) : null,
			),
'is_active:boolean',
'bld_street',
'bld_num',
'bld_city',
'bld_zip',
'bld_num_app',
'bld_min_floor',
'bld_max_floor',
				),
			)); ?>

<h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('taxes'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->taxes as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('taxes/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('appartments'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->appartments as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('appartments/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('accounts'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->accounts as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('accounts/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('appTaxes'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->appTaxes as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('appTaxes/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('tenants'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->tenants as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tenants/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('ads'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->ads as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('ads/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('comments'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->comments as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('comments/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('projects'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->projects as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('projects/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('transactions'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->transactions as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('transactions/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('reminders'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->reminders as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('reminders/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('tags'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->tags as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tags/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('tasks'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->tasks as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tasks/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('ticketHistories'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->ticketHistories as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('ticketHistory/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('tickets'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->tickets as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tickets/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('forums'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->forums as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('forums/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('incomes'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->incomes as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('incomes/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('polls'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->polls as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('polls/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('receipts'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->receipts as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('receipts/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('postTags'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->postTags as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('postTags/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('posts'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->posts as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('posts/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('contacts'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->contacts as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('contacts/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('aptMaintenances'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->aptMaintenances as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('aptMaintenance/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?>