<?php

Yii::import('application.models._base.BaseTasks');

class Tasks extends BaseTasks
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}