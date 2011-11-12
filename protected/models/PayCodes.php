<?php

Yii::import('application.models._base.BasePayCodes');

class PayCodes extends BasePayCodes
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}