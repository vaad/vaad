<?php

$this->breadcrumbs = array(
	Buildings::label(2),
	Yii::t('app', 'Index'),
);

if (Yii::app()->user->isVaad()) {
	$this->menu = array(
			array('label'=>Yii::t('app', 'Create') . ' ' . Yii::t('app',Buildings::label()), 'url' => array('create')),
		array('label'=>Yii::t('app', 'Manage') . ' ' . Yii::t('app',Buildings::label(2)), 'url' => array('admin')),
		);
}
?>

<h1><?php echo GxHtml::encode(Yii::t('app',Buildings::label(2))); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 