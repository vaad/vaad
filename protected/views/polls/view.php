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
array(
			'name' => 'polType',
			'type' => 'raw',
			'value' => $model->polType !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->polType)), array('pollCodes/view', 'id' => GxActiveRecord::extractPkValue($model->polType, true))) : null,
			),
'pol_title',
'pol_date',
'pol_desc',
'pol_exp_date',
'pol_on_main:boolean',
'pol_active:boolean',
				),
			)); ?>

<h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('pollAttendents'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->pollAttendents as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('pollAttendents/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?>