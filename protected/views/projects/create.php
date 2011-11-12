<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') , 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') , 'url' => array('admin')),
);
?>

<h1><?php $this->pageTopTitle =  Yii::t('app',GxHtml::encode($model->label())); ?></h1>
<h1><?php $this->pagePortlet =  Yii::t('app',GxHtml::encode($model->label())); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => Yii::t('app','create')));
?>
