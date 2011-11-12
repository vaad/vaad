<?php

Yii::import('application.models._base.BaseRegistries');

class Registries extends BaseRegistries
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}