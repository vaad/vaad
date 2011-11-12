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
	$.fn.yiiGridView.update('appartments-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->pageTopTitle =  Yii::t('app', 'Manage') . ' ' . Yii::t('app',GxHtml::encode($model->label(2))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'appartments-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'app_num',
		'app_flat_num',
		array(
				'name'=>'app_type',
				'value'=>'GxHtml::valueEx($data->appType)',
				'filter'=>GxHtml::listDataEx(AppCodes::model()->findAllAttributes(null, true)),
				),
		'start_mnt_date',
		/*
		'next_mnt_date',
		'mnt_gap',
		'mnt_gap_type',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>
