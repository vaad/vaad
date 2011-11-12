<?php

$this->breadcrumbs = array(
	Sites::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create'),'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage'),'url' => array('admin')),
);
?>

<?php $this->pageTopTitle =  GxHtml::encode(Sites::label(2)); ?>
<?php $this->pagePortlet =  Yii::t('app', Sites::label(2)) ; ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
