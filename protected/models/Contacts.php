<?php

Yii::import('application.models._base.BaseContacts');

class Contacts extends BaseContacts
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}