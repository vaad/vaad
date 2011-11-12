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
	$.fn.yiiGridView.update('registries-grid', {
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
    'id' => 'registries-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'tnt_app_num',
            'value' => 'GxHtml::valueEx($data->tntAppNum)',
            'filter' => GxHtml::listDataEx(Appartments::model()->findAllAttributes(null, true)),
        ),
        'tnt_first_name',
        'tnt_last_name',
        /*
        'tnt_password',
          'tnt_birthday',
          'tnt_email',
          'tnt_app_phone',
          'tnt_picture',
          'tnt_mobile',
          'tnt_entry_date',
          'tnt_occupation',
          array(
          'name' => 'tnt_is_owner',
          'value' => '($data->tnt_is_owner === 0) ? Yii::t(\'app\', \'No\') : Yii::t(\'app\', \'Yes\')',
          'filter' => array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')),
          ),
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
