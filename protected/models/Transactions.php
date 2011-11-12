<?php

Yii::import('application.models._base.BaseTransactions');

class Transactions extends BaseTransactions
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}