<?php
$this->breadcrumbs = array(
    'Admin',
);

$this->breadcrumbs = array(
    Yii::t('app', 'Admin'),
    Yii::t('app', 'Index'),
);

$this->menu = array(
    array('label' => Yii::t('app', 'Incomes') , 'url' => array('/incomes/admin')),
    array('label' => Yii::t('app', 'Transactions') , 'url' => array('/transactions/admin')),
);
?>

<?php $this->pageTopTitle = Yii::t('app','Admin'); ?>

<p>
    מערכת ניהול הבניין. 

</p>
