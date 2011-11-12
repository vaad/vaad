<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List'),'url'=>array('index')),
	array('label' => Yii::t('app', 'Create'),'url'=>array('create')),
	array('label' => Yii::t('app', 'View') , 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage'),'url'=>array('admin')),
);
?>

<?php $this->pageTopTitle =  Yii::t('app', 'Update') . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>