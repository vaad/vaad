<?php

$this->breadcrumbs = array(
	$model->label(2) => array('home'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List'),'url'=>array('index')),
	array('label' => Yii::t('app', 'Create'),'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' ' . Yii::t('app',$model->label()), 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage'),'url'=>array('admin')),
);
?>

<h1><?php echo /*Yii::t('app', 'Update') . ' ' . GxHtml::encode($model->label()) . ' ' .*/ GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>
