<?php

Yii::import('application.models._base.BaseTicketHistory');

class TicketHistory extends BaseTicketHistory
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}