<?php

Yii::import('application.models._base.BaseCommentCodes');

class CommentCodes extends BaseCommentCodes
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}