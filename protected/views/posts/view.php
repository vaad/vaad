<?php
$this->breadcrumbs = array(
    $model->label(2) => array('index'),
    GxHtml::valueEx($model),
);

$this->pageTopTitle = GxHtml::valueEx($model);

$this->menu = array(
    array('label' => Yii::t('app', 'List') , 'url' => array('index')),
    array('label' => Yii::t('app', 'Create'), 'url' => array('create')),
    array('label' => Yii::t('app', 'Update'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('app', 'Delete'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('app', 'Manage'), 'url' => array('admin')),
);
?>


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
            'name' => 'author',
            'type' => 'raw',
            'value' => $model->author !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->author)), array('tenants/view', 'id' => GxActiveRecord::extractPkValue($model->author, true))) : null,
        ),
        array(
            'name' => 'pstStatus',
            'type' => 'raw',
            'value' => $model->pstStatus !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->pstStatus)), array('postCodes/view', 'id' => GxActiveRecord::extractPkValue($model->pstStatus, true))) : null,
        ),
        'title',
        'content_txt',
        'pst_picture',
        'create_time',
        'update_time',
        array(
            'name' => 'forum',
            'type' => 'raw',
            'value' => $model->forum !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->forum)), array('forums/view', 'id' => GxActiveRecord::extractPkValue($model->forum, true))) : null,
        ),
        'adding_comments:boolean',
    ),
));
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
?><h2><?php echo Yii::t('app', GxHtml::encode($model->getRelationLabel('postTags'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->postTags as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('postTags/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?>