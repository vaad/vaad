<?php

Yii::import('application.models._base.BaseAccounts');

class Accounts extends BaseAccounts
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}