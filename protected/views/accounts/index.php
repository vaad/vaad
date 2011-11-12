<?php

$this->breadcrumbs = array(
	Accounts::label(2),
	Yii::t('app', 'Index'),
);

if (Yii::app()->user->isVaad()) {
	$this->menu = array(
			array('label'=>Yii::t('app', 'Create'),'unts::label()), 'url' => array('create')),
		array('label'=>Yii::t('app', 'Manage'),'unts::label(2)), 'url' => array('admin')),
		);
}
?>

<?php $this->pageTopTitle =  GxHtml::encode(Yii::t('app',Accounts::label(2))); ?>
<?php $this->pagePortlet =  Yii::t('app', Accounts::label(2)) ; ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
