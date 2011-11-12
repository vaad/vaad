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

<?php $this->pageTopTitle =  /* Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . */ Yii::t('app', GxHtml::encode(GxHtml::valueEx($model))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
  
        'tnt_first_name',
        'tnt_last_name',
        array(
            'name' => 'פעיל',
            'type' => 'boolean',
            'value' => $model->tnt_is_active,
        ),
        array(
            'name' => 'דירה מספר',
            'type' => 'raw',
            'value' => $model->tntAppNum !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->tntAppNum)), array('appartments/view', 'id' => GxActiveRecord::extractPkValue($model->tntAppNum, true))) : null,
        ),
        'tnt_birthday',
        'tnt_email',
        'tnt_app_phone',
        'tnt_picture',
        'tnt_mobile',
        'tnt_occupation',
    ),
));
?>

<h2><?php echo Yii::t('app', GxHtml::encode($model->getRelationLabel('posts'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->posts as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('posts/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?>
<h2><?php echo Yii::t('app', GxHtml::encode($model->getRelationLabel('comments'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->comments as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('comments/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?>
<h2><?php echo Yii::t('app', GxHtml::encode($model->getRelationLabel('forums'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->forums as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('forums/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?>
<h2><?php echo Yii::t('app', GxHtml::encode($model->getRelationLabel('tasks'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->tasks as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tasks/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app', GxHtml::encode($model->getRelationLabel('ticketHistories'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->ticketHistories as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('ticketHistory/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app', GxHtml::encode($model->getRelationLabel('tickets'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->tickets as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tickets/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo Yii::t('app', GxHtml::encode($model->getRelationLabel('pollAttendents'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->pollAttendents as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('pollAttendents/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?>