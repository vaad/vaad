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
	$.fn.yiiGridView.update('forums-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->pageTopTitle =  Yii::t('app', 'Manage') . ' ' . Yii::t('app',GxHtml::encode($model->label(2))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'forums-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'forum_name',
		'forum_desc',
		array(
				'name'=>'forum_mngr',
				'value'=>'GxHtml::valueEx($data->forumMngr)',
				'filter'=>GxHtml::listDataEx(Tenants::model()->findAllAttributes(null, true)),
				),
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>
