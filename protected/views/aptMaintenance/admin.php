<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List'),'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create'),'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('apt-maintenance-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->pageTopTitle =  Yii::t('app', 'Manage') . ' ' . Yii::t('app',GxHtml::encode($model->label(2))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'apt-maintenance-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		array(
				'name'=>'apt_id',
				'value'=>'GxHtml::valueEx($data->apt)',
				'filter'=>GxHtml::listDataEx(Appartments::model()->findAllAttributes(null, true)),
				),
		'start_date',
		'amount',
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>
