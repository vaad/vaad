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
	$.fn.yiiGridView.update('trn-cat-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->pageTopTitle =  Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'trn-cat-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'cat_desc',
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>
