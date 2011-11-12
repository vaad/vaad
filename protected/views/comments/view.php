<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List'),'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create'),'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update'),'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete'),'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage'),'url'=>array('admin')),
);
?>

<?php $this->pageTopTitle =  /*Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' .*/ GxHtml::encode(GxHtml::valueEx($model)); ?>
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
			'name' => 'post',
			'type' => 'raw',
			'value' => $model->post !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->post)), array('posts/view', 'id' => GxActiveRecord::extractPkValue($model->post, true))) : null,
			),
array(
			'name' => 'author',
			'type' => 'raw',
			'value' => $model->author !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->author)), array('tenants/view', 'id' => GxActiveRecord::extractPkValue($model->author, true))) : null,
			),
'content_text',
'status',
'create_time',
'is_locked:boolean',
	),
)); ?>

