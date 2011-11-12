<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EWebUser
 *
 * @author eli
 */
class LevelLookup{
    const GUEST = 0;
    const TENANT = 1;
    const VAAD   = 5;
    const SITE_VAAD = 10;
    const SITE_ADMIN = 100;
    public static function getLevel( $level) {
        switch ($level) {
            case self::GUEST : return ('אורח'); break;
            case self::TENANT : return ('דייר'); break;
            case self::VAAD : return ('חבר וועד'); break;
            case self::SITE_VAAD : return ('חבר ועד איזורי'); break;
            case self::SITE_ADMIN : return ('מנהל מערכת'); break;
        }
        return false;
    }
}
class EWebUser extends CWebUser {

    protected $_model;
    protected $_bldModel;

    function isVaad() {
        $user = $this->loadUser();
        if ($user)
            return $user->tnt_is_vaad;
        return false;
    }
    function isTenant() {
        $user = $this->loadUser();
        if ($user)
            return true;
        return false;
    }

    function bldName() {
        $bld = $this->loadBuilding();
        if ($bld) 
            return $bld->bld_street . ' ' . $bld->bld_num;
        
        return Yii::app()->name;
    }
    // Load user model.
    protected function loadUser() {
        if ($this->_model === null) {
            $this->_model = Tenants::model()->findByPk($this->id);
        }
        return $this->_model;
    }
    
    protected function loadBuilding() {
        $pk = Yii::app()->params['bld_id'];
        if ($this->_bldModel === null) {
            $this->_bldModel = Buildings::model()->findByPk($pk);
        }
        return $this->_bldModel;
    }
}
?>
