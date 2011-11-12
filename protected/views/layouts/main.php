<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/vaad.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div class="container" id="page">
            <div class="span-24">
                <div id="mainmenu" class="menu">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'items' => array(
                            array('label' => 'דיירים', 'url' => array('/tenants')),
                            array('label' => 'תקלות', 'url' => array('/tickets')),
                            array('label' => 'בעלי מקצוע ', 'url' => array('/contacts')),
                            array('label' => 'פרוייקטים', 'url' => array('/projects')),
                            array('label' => 'לובי', 'url' => array('/lobby')),
                            array('label' => 'הצבעות', 'url' => array('/polls')),
                            array('label' => 'פורומים', 'url' => array('/forums')),
                            array('label' => 'מודעות', 'url' => array('/ads')),
                            array('label' => 'ניהול', 'url' => array('/admin')),
                            array('label' => 'עזרה', 'url' => array('/help')),
                        ),
                    ));
                    ?>
                    <?php if (isset($this->breadcrumbs) and 1): ?>
                    <?php
                    $this->widget('EBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                    ));
                    ?><!-- breadcrumbs -->
                <?php endif ?>
                </div><!-- mainmenu -->
            </div>

            <div id="header" class="span-24">
                <div class="span-3 right" id="logo"><?php echo CHtml::encode(Yii::app()->user->bldName()); ?></div>
                <div class="span-19 pagetitle"><?php echo CHtml::encode($this->pageTopTitle); ?></div>
            </div><!-- header -->
            <div class="main-page">
                <?php echo $content; ?>
            </div>
            <div id="fooxter" class="footer">
                Copyright &copy; <?php echo date('Y'); ?>   
                <a href="http://vaadbait-il.com"> וועד הבית </a> כל הזכויות שמורות.<br/>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
