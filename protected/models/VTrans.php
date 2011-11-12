<?php

Yii::import('application.models._base.BaseVTrans');

class VTrans extends BaseVTrans
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}