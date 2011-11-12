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
			'name' => 'bld',
			'type' => 'raw',
			'value' => $model->bld !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->bld)), array('buildings/view', 'id' => GxActiveRecord::extractPkValue($model->bld, true))) : null,
			),
'prj_title',
'prj_desc',
'prj_approx_cost',
'prj_actual_cost',
'prj_approx_start_date',
'prj_actual_start_date',
'prj_approx_end_date',
'prj_actual_end_date',
				),
			)); ?>

<h2><?php echo Yii::t('app',GxHtml::encode($model->getRelationLabel('transactions'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach($model->transactions as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('transactions/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
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
?>