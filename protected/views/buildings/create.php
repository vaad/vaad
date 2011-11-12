<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' ' . Yii::t('app',$model->label(2)), 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Yii::t('app',$model->label(2)), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create') . ' ' . Yii::t('app',GxHtml::encode($model->label())); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => Yii::t('app','create')));
?>