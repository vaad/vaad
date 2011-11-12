<?php

Yii::import('application.models._base.BaseAptMaintenance');

class AptMaintenance extends BaseAptMaintenance
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}