<?php

Yii::import('application.models._base.BaseTaxes');

class Taxes extends BaseTaxes
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}