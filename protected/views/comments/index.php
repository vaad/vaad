<?php

$this->breadcrumbs = array(
	Comments::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create'),'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage'),'url' => array('admin')),
);
?>

<?php $this->pageTopTitle =  GxHtml::encode(Comments::label(2)); ?>
<?php $this->pagePortlet =  Yii::t('app', Comments::label(2)) ; ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
