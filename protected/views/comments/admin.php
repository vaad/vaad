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
	$.fn.yiiGridView.update('comments-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->pageTopTitle =  Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'comments-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		array(
				'name'=>'post_id',
				'value'=>'GxHtml::valueEx($data->post)',
				'filter'=>GxHtml::listDataEx(Posts::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'author_id',
				'value'=>'GxHtml::valueEx($data->author)',
				'filter'=>GxHtml::listDataEx(Tenants::model()->findAllAttributes(null, true)),
				),
		'content_text',
		'status',
		/*
		'create_time',
		array(
					'name' => 'is_locked',
					'value' => '($data->is_locked === 0) ? Yii::t(\'app\', \'No\') : Yii::t(\'app\', \'Yes\')',
					'filter' => array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')),
					),
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>
