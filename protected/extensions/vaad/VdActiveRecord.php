<?php

abstract class VdActiveRecord extends GxActiveRecord {

    public function beforeSave() {
        $bld_id = Yii::app()->params['bld_id'];
        if ($this->isNewRecord)
            $this->bld_id = $bld_id;
        return parent::beforeSave();
    }

    protected function beforeFind() {
        $bld_id = Yii::app()->params['bld_id'];
        $criteria = new CDbCriteria;
        $criteria->condition = "bld_id = $bld_id";
        //$criteria->order = "username ASC";
        $this->dbCriteria->mergeWith($criteria);
        parent::beforeFind();
    }


}

?>
