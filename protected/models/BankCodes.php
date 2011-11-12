<?php

Yii::import('application.models._base.BaseBankCodes');

class BankCodes extends BaseBankCodes
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}