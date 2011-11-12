<?php

$this->breadcrumbs = array(
    $model->label(2) => array('index'),
    GxHtml::valueEx($model),
);

if (Yii::app()->user->isVaad()) {
    $this->menu = array(
        array('label' => Yii::t('app', 'List'),'url' => array('index')),
        array('label' => Yii::t('app', 'Create'),'url' => array('create')),
        array('label' => Yii::t('app', 'Update'),'url' => array('update', 'id' => $model->id)),
        array('label' => Yii::t('app', 'Delete'),'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'האם אתה בטוח שברצונך למחוק ?')),
        array('label' => Yii::t('app', 'Manage'),'url' => array('admin')),
    );
} else {
    $this->menu = array(
        array('label' => Yii::t('app', 'List'),'url' => array('index')),
    );
}
?>

<?php $this->pageTopTitle = /* Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . */ Yii::t('app', GxHtml::encode(GxHtml::valueEx($model))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php

$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        array(
            'name' => 'bld',
            'type' => 'raw',
            'value' => $model->bld !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->bld)), array('buildings/view', 'id' => GxActiveRecord::extractPkValue($model->bld, true))) : null,
        ),
        array(
            'name' => 'acc',
            'type' => 'raw',
            'value' => $model->acc !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->acc)), array('accounts/view', 'id' => GxActiveRecord::extractPkValue($model->acc, true))) : null,
        ),
        array(
            'name' => 'prj',
            'type' => 'raw',
            'value' => $model->prj !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->prj)), array('projects/view', 'id' => GxActiveRecord::extractPkValue($model->prj, true))) : null,
        ),
        'trn_date',
        'calcAmount',
        'trn_reference',
        'trn_desc',
        array(
            'name' => 'trnCat',
            'type' => 'raw',
            'value' => $model->trnCat !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->trnCat)), array('trnCatCodes/view', 'id' => GxActiveRecord::extractPkValue($model->trnCat, true))) : null,
        ),
    ),
));
?>

