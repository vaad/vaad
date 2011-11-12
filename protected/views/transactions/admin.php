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
	$.fn.yiiGridView.update('transactions-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->pageTopTitle = Yii::t('app', 'Manage') . ' ' . Yii::t('app', GxHtml::encode($model->label(2))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'transactions-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'acc_id',
            'header' => 'חשבון',
            'value' => 'GxHtml::valueEx($data->acc)',
            'filter' => GxHtml::listDataEx(Accounts::model()->findAllAttributes(null, true)),
        ),
        array(
            'name' => 'prj_id',
            'header' => 'פרוייקט',
            'value' => 'GxHtml::valueEx($data->prj)',
            'filter' => GxHtml::listDataEx(Projects::model()->findAllAttributes(null, true)),
        ),
        'trn_date',
        //'trn_amount:number:number_format($model->trn_amount*$modal->trn_debit, 2)',
        array(
            'name' => 'trn_amount',
            'value' => '$data->trn_amount * $data->trn_debit',
            'type' => 'number',
            'header' => 'סכום',
            'htmlOptions' => array('class' => 'column_money'),
            'footer' => $model->calcAmount,
        ),
        array(
            'name' => 'trn_cat',
            'header' => Yii::t('app','TrnCatCodes'),
            'value' => 'GxHtml::valueEx($data->trnCat)',
            'filter' => GxHtml::listDataEx(TrnCatCodes::model()->findAllAttributes(null, true)),
        ),
        /*
          'trn_reference',
         */
        'trn_desc',
        /**/
        array(
            'class' => 'CButtonColumn',
        ),
    /**/
    ),
));
?>
