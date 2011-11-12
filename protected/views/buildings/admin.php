<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . Yii::t('app', $model->label(2)), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . Yii::t('app', $model->label()), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('buildings-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . Yii::t('app',GxHtml::encode($model->label(2))); ?></h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'buildings-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'site_id',
				'value'=>'GxHtml::valueEx($data->site)',
				'filter'=>GxHtml::listDataEx(Sites::model()->findAllAttributes(null, true)),
				),
		array(
					'name' => 'is_active',
					'value' => '($data->is_active === 0) ? Yii::t(\'app\', \'No\') : Yii::t(\'app\', \'Yes\')',
					'filter' => array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')),
					),
		'bld_street',
		'bld_num',
		'bld_city',
		/*
		'bld_zip',
		'bld_num_app',
		'bld_min_floor',
		'bld_max_floor',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>
