<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EBreadcrumbs
 *
 * @author eli
 */
Yii::import('zii.widgets.CBreadcrumbs');

class EBreadcrumbs extends CBreadcrumbs {

    //put your code here
    public function run() {
        if (empty($this->links))
            return;

        echo CHtml::openTag($this->tagName, $this->htmlOptions) . "\n";
        $links = array();
        if ($this->homeLink === null) {
            $home = 'לובי';
            $links[] = CHtml::link($home, Yii::app()->homeUrl);
        } else if ($this->homeLink !== false)
            $links[] = $this->homeLink;
        foreach ($this->links as $label => $url) {
            try {
                if (!empty($label)) $label = Yii::t('app', $label);
                if (!is_array($url)) if (!empty($url)) $url = Yii::t('app', $url);
                if (is_string($label) || is_array($url))
                    $links[] = CHtml::link($this->encodeLabel ? CHtml::encode($label) : $label, $url);
                else
                    $links[] = '<span>' . ($this->encodeLabel ? CHtml::encode($url) : $url) . '</span>';
            } catch (Exception $e) {
                
            }
        }
        echo implode($this->separator, $links);
        echo CHtml::closeTag($this->tagName);
    }

}

?>
