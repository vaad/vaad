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
	$.fn.yiiGridView.update('ads-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->pageTopTitle =  Yii::t('app', 'Manage') . ' ' . Yii::t('app',GxHtml::encode($model->label(2))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'ads-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'title',
		'name',
		//'content_txt',
		array(
					'name' => 'is_asking',
					'value' => '($data->is_asking === 0) ? Yii::t(\'app\', \'No\') : Yii::t(\'app\', \'Yes\')',
					'filter' => array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')),
					),
		/*
		array(
					'name' => 'is_offering',
					'value' => '($data->is_offering === 0) ? Yii::t(\'app\', \'No\') : Yii::t(\'app\', \'Yes\')',
					'filter' => array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')),
					),
		'phone_num',
		'remarks',
		'price_asked',
		array(
				'name'=>'category',
				'value'=>'GxHtml::valueEx($data->category0)',
				'filter'=>GxHtml::listDataEx(AdCatCodes::model()->findAllAttributes(null, true)),
				),
		'creation_date',
		'update_time',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>
