<?php

/**
 * This is the model base class for the table "ticket_history".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TicketHistory".
 *
 * Columns in table "ticket_history" available as properties of the model,
 * followed by relations of table "ticket_history" available as properties of the model.
 *
 * @property integer $id
 * @property integer $tkt_id
 * @property integer $bld_id
 * @property integer $tnt_id
 * @property string $tkh_date
 * @property string $tkh_title
 * @property string $tkh_desc
 *
 * @property Buildings $bld
 * @property Tickets $tkt
 * @property Tenants $tnt
 */
abstract class BaseTicketHistory extends VdActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'ticket_history';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TicketHistory|TicketHistories', $n);
	}

	public static function representingColumn() {
		return array('tkh_title','tkh_date','tnt_id');
	}

	public function rules() {
		return array(
			array('id, tkt_id,  tnt_id, tkh_date', 'required'),
			array('id, tkt_id, bld_id, tnt_id', 'numerical', 'integerOnly'=>true),
			array('tkh_title', 'length', 'max'=>50),
			array('tkh_desc', 'safe'),
			array('tkh_title, tkh_desc', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, tkt_id, bld_id, tnt_id, tkh_date, tkh_title, tkh_desc', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'bld' => array(self::BELONGS_TO, 'Buildings', 'bld_id'),
			'tkt' => array(self::BELONGS_TO, 'Tickets', 'tkt_id'),
			'tnt' => array(self::BELONGS_TO, 'Tenants', 'tnt_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'tkt_id' => null,
			'bld_id' => null,
			'tnt_id' => null,
			'tkh_date' => Yii::t('app', 'Tkh Date'),
			'tkh_title' => Yii::t('app', 'Tkh Title'),
			'tkh_desc' => Yii::t('app', 'Tkh Desc'),
			'bld' => null,
			'tkt' => null,
			'tnt' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('tkt_id', $this->tkt_id);
		$criteria->compare('bld_id', $this->bld_id);
		$criteria->compare('tnt_id', $this->tnt_id);
		$criteria->compare('tkh_date', $this->tkh_date, true);
		$criteria->compare('tkh_title', $this->tkh_title, true);
		$criteria->compare('tkh_desc', $this->tkh_desc, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}