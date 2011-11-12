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
	$.fn.yiiGridView.update('tickets-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->pageTopTitle = Yii::t('app', 'Manage') . ' ' . Yii::t('app', GxHtml::encode($model->label(2))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php
$btns = '{view}';
if (Yii::app()->user->isVaad()) $btns = '{delete}{update}{view}';

$x = GxHtml::valueEx($model->tnt_id);

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'tickets-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'tnt',
            'value' => GxHtml::valueEx($model->tnt_id),
            'filter' => GxHtml::listDataEx(Tenants::model()->findAllAttributes(null, true)),
        ),
        array(
            'name' => 'tkt_status',
            'value' => 'GxHtml::valueEx($data->tktStatus)',
            'filter' => GxHtml::listDataEx(TicketCodes::model()->findAllAttributes(null, true)),
        ),
        'tkt_opendate',
        'tkt_title',
        /*
          'tkt_eta',
          'tkt_closedate',
         */
        array(
            'class' => 'CButtonColumn',
            'template' => $btns,
        ),
    ),
));
?>
