<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

if (Yii::app()->user->isVaad()) {
	$this->menu=array(
			array('label'=>Yii::t('app', 'List'),'url'=>array('index')),
			array('label'=>Yii::t('app', 'Create'),'url'=>array('create')),
			array('label'=>Yii::t('app', 'Update'),'url'=>array('update', 'id' => $model->id)),
			array('label'=>Yii::t('app', 'Delete'),'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'האם אתה בטוח שברצונך למחוק ?')),
			array('label'=>Yii::t('app', 'Manage'),'url'=>array('admin')),
			);
} else {
	$this->menu=array(
			array('label'=>Yii::t('app', 'List'),'url'=>array('index')),
			);
}

?>

<?php $this->pageTopTitle =  /*Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' .*/ Yii::t('app',GxHtml::encode(GxHtml::valueEx($model))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php $this->widget('zii.widgets.CDetailView', array(
			'data' => $model,
			'attributes' => array(
				'id',
array(
			'name' => 'bld',
			'type' => 'raw',
			'value' => $model->bld !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->bld)), array('buildings/view', 'id' => GxActiveRecord::extractPkValue($model->bld, true))) : null,
			),
'app_num',
'app_flat_num',
array(
			'name' => 'appType',
			'type' => 'raw',
			'value' => $model->appType !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->appType)), array('appCodes/view', 'id' => GxActiveRecord::extractPkValue($model->appType, true))) : null,
			),
'start_mnt_date',
'next_mnt_date',
'mnt_gap',
'mnt_gap_type',
				),
			)); ?>

<h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('appTaxes'))); ?></h2>
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
?><h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('reminders'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->reminders as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('reminders/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
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