<?php
$this->breadcrumbs = array(
    $model->label(2) => array('index'),
    GxHtml::valueEx($model),
);

$this->menu = array(
    array('label' => Yii::t('app', 'List'),'url' => array('index')),
    array('label' => Yii::t('app', 'Create'),'url' => array('create')),
    array('label' => Yii::t('app', 'Update'),'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('app', 'Delete'),'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('app', 'Manage'),'url' => array('admin')),
);
?>

<?php $this->pageTopTitle = GxHtml::encode(GxHtml::valueEx($model)); ?>
<?php $this->pagePortlet =  Yii::t('app', $model->label(2)) ; ?>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array(
            'name' => 'id',
            'header' => 'קוד בנק',
        ),
        'code_desc',
    ),
));
?>

<h2><?php echo Yii::t('app', GxHtml::encode($model->getRelationLabel('accounts'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->accounts as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('accounts/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?>
<h2><?php echo Yii::t('app', GxHtml::encode($model->getRelationLabel('incomes'))); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->incomes as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('incomes/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?>
