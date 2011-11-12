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

<?php $this->pageTopTitle =  Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'code_desc',
	),
)); ?>

