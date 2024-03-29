<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n
\$this->breadcrumbs = array(
	\$model->label(2) => array('home'),
	GxHtml::valueEx(\$model) => array('view', 'id' => GxActiveRecord::extractPkValue(\$model, true)),
	Yii::t('app', 'Update'),
);\n";
?>

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' ' . Yii::t('app',$model->label(2)), 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' ' . Yii::t('app',$model->label()), 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' ' . Yii::t('app',$model->label()), 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' ' . Yii::t('app',$model->label(2)), 'url'=>array('admin')),
);
?>

<h1><?php echo '<?php'; ?> echo /*Yii::t('app', 'Update') . ' ' . GxHtml::encode($model->label()) . ' ' .*/ GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php echo "<?php\n"; ?>
$this->renderPartial('_form', array(
		'model' => $model));
?>
