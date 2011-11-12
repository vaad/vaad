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
	$.fn.yiiGridView.update('ticket-history-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->pageTopTitle =  Yii::t('app', 'Manage') . ' ' . Yii::t('app',GxHtml::encode($model->label(2))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'ticket-history-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		array(
				'name'=>'tkt_id',
				'header' => 'מספר תקלה',
				'value'=>'GxHtml::valueEx($data->tkt)',
				'filter'=>GxHtml::listDataEx(Tickets::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'tnt_id',
				'value'=>'GxHtml::valueEx($data->tnt)',
				'filter'=>GxHtml::listDataEx(Tenants::model()->findAllAttributes(null, true)),
				),
		'tkh_date',
		'tkh_title',
		/*
		'tkh_desc',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>
