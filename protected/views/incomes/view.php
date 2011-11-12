<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

if (Yii::app()->user->isVaad()) {
	$this->menu=array(
			array('label'=>Yii::t('app', 'List'),'url'=>array('index')),
			array('label'=>Yii::t('app', 'Create'),'url'=>array('create')),
			array('label'=>Yii::t('app', 'Update'),'url'=>array('update', 'id' => $model->id)),
			array('label'=>Yii::t('app', 'Delete'),'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'האם אתה בטוח שברצונך למחוק ?')),
			array('label'=>Yii::t('app', 'Manage'),'url'=>array('admin')),
			);
} else {
	$this->menu=array(
			array('label'=>Yii::t('app', 'List'),'url'=>array('index')),
			);
}

?>

<?php $this->pageTopTitle =  /*Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' .*/ Yii::t('app',GxHtml::encode(GxHtml::valueEx($model))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php $this->widget('zii.widgets.CDetailView', array(
			'data' => $model,
			'attributes' => array(
				'id',
array(
			'name' => 'bld',
			'type' => 'raw',
			'value' => $model->bld !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->bld)), array('buildings/view', 'id' => GxActiveRecord::extractPkValue($model->bld, true))) : null,
			),
array(
			'name' => 'prj',
			'type' => 'raw',
			'value' => $model->prj !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->prj)), array('projects/view', 'id' => GxActiveRecord::extractPkValue($model->prj, true))) : null,
			),
'inc_date',
'inc_until_date',
'inc_amount',
'inc_paid:boolean',
'inc_branch',
'inc_chk_no',
'inc_chk_date',
array(
			'name' => 'incAptNum',
			'type' => 'raw',
			'value' => $model->incAptNum !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->incAptNum)), array('appartments/view', 'id' => GxActiveRecord::extractPkValue($model->incAptNum, true))) : null,
			),
array(
			'name' => 'incBank',
			'type' => 'raw',
			'value' => $model->incBank !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->incBank)), array('bankCodes/view', 'id' => GxActiveRecord::extractPkValue($model->incBank, true))) : null,
			),
				),
			)); ?>

