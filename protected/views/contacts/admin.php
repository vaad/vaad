<?php
$this->breadcrumbs = array(
    $model->label(2) => array('index'),
    Yii::t('app', 'Manage'),
);

$this->menu = array(
    array('label' => Yii::t('app', 'List'),'url' => array('index')),
    array('label' => Yii::t('app', 'Create'),'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('contacts-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->pageTopTitle =  Yii::t('app', 'Manage') . ' ' . Yii::t('app', GxHtml::encode($model->label(2))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'contacts-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'cnt_first_name',
        'cnt_last_name',
        'cnt_phone1',
        'cnt_phone2',
        /*
          'cnt_address',
          'cnt_remarks',
         */
          array(
          'name'=>'cnt_type',
          'value'=>'GxHtml::valueEx($data->cntType)',
          'filter'=>GxHtml::listDataEx(ContactCodes::model()->findAllAttributes(null, true)),
          ),
          'cnt_email',
         
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
