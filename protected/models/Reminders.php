<?php

Yii::import('application.models._base.BaseReminders');

class Reminders extends BaseReminders
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}