<?php

$this->breadcrumbs = array(
	Projects::label(2),
	Yii::t('app', 'Index'),
);

if (Yii::app()->user->isVaad()) {
	$this->menu = array(
			array('label'=>Yii::t('app', 'Create') , 'url' => array('create')),
		array('label'=>Yii::t('app', 'Manage') , 'url' => array('admin')),
		);
}
?>

<h1><?php $this->pageTopTitle =  GxHtml::encode(Yii::t('app',Projects::label(2))); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
