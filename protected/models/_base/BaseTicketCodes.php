<?php

/**
 * This is the model base class for the table "ticket_codes".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TicketCodes".
 *
 * Columns in table "ticket_codes" available as properties of the model,
 * followed by relations of table "ticket_codes" available as properties of the model.
 *
 * @property integer $id
 * @property string $code_desc
 *
 * @property Tickets[] $tickets
 */
abstract class BaseTicketCodes extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'ticket_codes';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TicketCodes|TicketCodes', $n);
	}

	public static function representingColumn() {
		return 'code_desc';
	}

	public function rules() {
		return array(
			array('id', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('code_desc', 'length', 'max'=>30),
			array('code_desc', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, code_desc', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tickets' => array(self::HAS_MANY, 'Tickets', 'tkt_status'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'code_desc' => Yii::t('app', 'Code Desc'),
			'tickets' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('code_desc', $this->code_desc, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}