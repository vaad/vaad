<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="span-20">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <div class="span-4 right last">
        <div class="span-4 left last"> 
            <?php
            $login = array(
                array('label' => 'כניסה למערכת', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'יציאה (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
            );
            $this->widget('zii.widgets.CMenu', array(
                'items' => $login,
                'htmlOptions' => array('class' => 'login'),
            ));
            
            ?>
        </div>
        <div id="sidebar">
            <?php
            if (empty($this->pagePortlet)) $this->pagePortlet = $this->pageTopTitle;
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title' => $this->pagePortlet,
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items' => $this->menu,
                'htmlOptions' => array('class' => 'operations'),
            ));
            $this->endWidget();
            ?>
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>