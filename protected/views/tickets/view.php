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
        array('label' => Yii::t('app', 'Manage'),'url' => array('admin')),
    );
}
?>

<?php $this->pageTopTitle = /* Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . */ Yii::t('app', GxHtml::encode(GxHtml::valueEx($model))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php
echo GxHtml::link(GxHtml::encode('סגור תקלה'), array('tenants/view', 'id' => GxActiveRecord::extractPkValue($model->tnt, true)));
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'tkt_opendate',
        array(
            'name' => 'tnt',
            'label' => 'על ידי',
            'type' => 'raw',
            'value' => $model->tnt !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->tnt)), array('tenants/view', 'id' => GxActiveRecord::extractPkValue($model->tnt, true))) : null,
        ),
        array(
            'name' => 'tktStatus',
            'label' => 'סטטוס',
            'type' => 'raw',
            'value' => $model->tktStatus !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->tktStatus)), array('ticketCodes/view', 'id' => GxActiveRecord::extractPkValue($model->tktStatus, true))) : null,
        ),
        'tkt_eta',
        'tkt_closedate',
    ),
));

echo '<br/>';
?>


<h2><?php
echo Yii::t('app', GxHtml::encode($model->getRelationLabel('ticketHistories')));
echo '&nbsp (' . GxHtml::link(GxHtml::encode('הוסף '), array('tenants/view', 'id' => GxActiveRecord::extractPkValue($model->tnt, true)));
echo ')';
?>
</h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->ticketHistories as $relatedModel) {
    echo GxHtml::openTag('li');
    $id = GxActiveRecord::extractPkValue($relatedModel, true);
    
    
    echo GxHtml::link($relatedModel->tkh_title, array('ticketHistory/view', 'id' => $id));
    echo ' (' . $relatedModel->tnt;
   echo ', ' . Yii::t('app','On Date') . ' ' . $relatedModel->tkh_date . ')';
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?>