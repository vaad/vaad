<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n
\$this->breadcrumbs = array(
	\$model->label(2) => array('index'),
	GxHtml::valueEx(\$model),
);\n";
?>

if (Yii::app()->user->isVaad()) {
	$this->menu=array(
			array('label'=>Yii::t('app', 'List') . ' ' . Yii::t('app',$model->label(2)), 'url'=>array('index')),
			array('label'=>Yii::t('app', 'Create') . ' ' . Yii::t('app',$model->label()), 'url'=>array('create')),
			array('label'=>Yii::t('app', 'Update') . ' ' . Yii::t('app',$model->label()), 'url'=>array('update', 'id' => $model-><?php echo $this->tableSchema->primaryKey; ?>)),
			array('label'=>Yii::t('app', 'Delete') . ' ' . Yii::t('app',$model->label()), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model-><?php echo $this->tableSchema->primaryKey; ?>), 'confirm'=>'האם אתה בטוח שברצונך למחוק ?')),
			array('label'=>Yii::t('app', 'Manage') . ' ' . Yii::t('app',$model->label(2)), 'url'=>array('admin')),
			);
} else {
	$this->menu=array(
			array('label'=>Yii::t('app', 'List') . ' ' . Yii::t('app',$model->label(2)), 'url'=>array('index')),
			);
}

?>

<h1><?php echo '<?php'; ?> echo /*Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' .*/ Yii::t('app',GxHtml::encode(GxHtml::valueEx($model))); ?></h1>

<?php echo '<?php'; ?> $this->widget('zii.widgets.CDetailView', array(
			'data' => $model,
			'attributes' => array(
				<?php
				foreach ($this->tableSchema->columns as $column)
				echo $this->generateDetailViewAttribute($this->modelClass, $column) . ",\n";
				?>
				),
			)); ?>

<?php foreach (GxActiveRecord::model($this->modelClass)->relations() as $relationName => $relation): ?>
<?php if ($relation[0] == GxActiveRecord::HAS_MANY || $relation[0] == GxActiveRecord::MANY_MANY): ?>
<h2><?php echo '<?php'; ?> echo Yii::t('app',GxHtml::encode($model->getRelationLabel('<?php echo $relationName; ?>'))); ?></h2>
<?php echo "<?php\n"; ?>
echo GxHtml::openTag('ul');
foreach($model-><?php echo $relationName; ?> as $relatedModel) {
	echo GxHtml::openTag('li');
	echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('<?php echo strtolower($relation[1][0]) . substr($relation[1], 1); ?>/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
	echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
<?php echo '?>'; ?>
<?php endif; ?>
<?php endforeach; ?>
