<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('projects-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->pageTopTitle =  Yii::t('app', 'Manage') . ' ' . Yii::t('app',GxHtml::encode($model->label(2))); ?>
<?php $this->pagePortlet =  Yii::t('app',GxHtml::encode($model->label(2))); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'projects-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'bld_id',
				'value'=>'GxHtml::valueEx($data->bld)',
				'filter'=>GxHtml::listDataEx(Buildings::model()->findAllAttributes(null, true)),
				),
		'prj_title',
		'prj_desc',
		'prj_approx_cost',
		'prj_actual_cost',
		/*
		'prj_approx_start_date',
		'prj_actual_start_date',
		'prj_approx_end_date',
		'prj_actual_end_date',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>
