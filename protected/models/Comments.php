<?php

Yii::import('application.models._base.BaseComments');

class Comments extends BaseComments
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}