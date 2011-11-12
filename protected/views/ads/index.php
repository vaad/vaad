<?php

$this->breadcrumbs = array(
	Ads::label(2),
	Yii::t('app', 'Index'),
);

if (Yii::app()->user->isVaad()) {
	$this->menu = array(
			array('label'=>Yii::t('app', 'Create'),'url' => array('create')),
		array('label'=>Yii::t('app', 'Manage'),'url' => array('admin')),
		);
}
?>

<?php $this->pageTopTitle =  GxHtml::encode(Yii::t('app',Ads::label(2))); ?>
<?php $this->pagePortlet =  Yii::t('app', Ads::label(2)) ; ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
