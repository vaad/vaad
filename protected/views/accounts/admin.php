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
	$.fn.yiiGridView.update('accounts-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->pageTopTitle =  Yii::t('app', 'Manage') . ' ' . Yii::t('app',GxHtml::encode($model->label(2))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'accounts-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'acc_type',
		'acc_branch',
		'acc_number',
		'acc_starting_amount',
		/*
		'acc_remarks',
		array(
				'name'=>'acc_bank',
				'value'=>'GxHtml::valueEx($data->accBank)',
				'filter'=>GxHtml::listDataEx(BankCodes::model()->findAllAttributes(null, true)),
				),
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>
