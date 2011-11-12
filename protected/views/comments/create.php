<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List'),'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage'),'url' => array('admin')),
);
?>

<?php $this->pageTopTitle =  Yii::t('app', 'Create') . ' ' . GxHtml::encode($model->label()); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>