
<?php $this->pageTopTitle =  /* Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . */ Yii::t('app', GxHtml::encode(GxHtml::valueEx($model))); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
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