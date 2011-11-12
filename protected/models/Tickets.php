<?php

Yii::import('application.models._base.BaseTickets');

class Tickets extends BaseTickets
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}