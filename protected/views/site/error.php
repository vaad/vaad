<?php
$this->pageTitle=Yii::app()->name . ' - שגיאה';
$this->breadcrumbs=array(
	'שגיאה',
);
?>

<h2>שגיאה מספר  <?php echo $code; ?></h2>

<div class="error">
<?php if ($code != 500) { ?>
<?php echo CHtml::encode($message); ?>
    <?php } else { 
        echo "טעות בשמירת הנתונים. רשומה כפולה."; 
        echo "<br>";
        echo "אם הדבר אירע בעת רישום למערכת, זה מראה שכבר נרשמת בעבר. אנא המתן לאישורך על ידי חבר הוועד";
        } ?>
</div>