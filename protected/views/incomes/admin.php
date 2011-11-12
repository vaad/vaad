<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List'),'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create'),'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('incomes-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->pageTopTitle =  Yii::t('app', 'Manage') . ' ' . Yii::t('app',GxHtml::encode($model->label(2))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'incomes-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(

		array(
				'name'=>'prj_id',
				'value'=>'GxHtml::valueEx($data->prj)',
				'filter'=>GxHtml::listDataEx(Projects::model()->findAllAttributes(null, true)),
				),
		'inc_date',
		'inc_until_date',
		'inc_amount',
		/*
		array(
					'name' => 'inc_paid',
					'value' => '($data->inc_paid === 0) ? Yii::t(\'app\', \'No\') : Yii::t(\'app\', \'Yes\')',
					'filter' => array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')),
					),
		'inc_branch',
		'inc_chk_no',
		'inc_chk_date',
                 */
		array(
				'name'=>'inc_apt_num',
				'value'=>'GxHtml::valueEx($data->incAptNum)',
				'filter'=>GxHtml::listDataEx(Appartments::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'inc_bank',
				'value'=>'GxHtml::valueEx($data->incBank)',
				'filter'=>GxHtml::listDataEx(BankCodes::model()->findAllAttributes(null, true)),
				),
		
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>
