<?php

Yii::import('application.models._base.BasePolls');

class Polls extends BasePolls
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}