<?php

/**
 * This is the model base class for the table "poll_options".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "PollOptions".
 *
 * Columns in table "poll_options" available as properties of the model,
 * followed by relations of table "poll_options" available as properties of the model.
 *
 * @property integer $id
 * @property integer $poll_id
 * @property integer $bld_id
 * @property integer $po_position
 * @property string $po_title
 *
 * @property PollAttendents[] $pollAttendents
 */
abstract class BasePollOptions extends VdActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'poll_options';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'PollOptions|PollOptions', $n);
	}

	public static function representingColumn() {
		return 'po_title';
	}

	public function rules() {
		return array(
			array('poll_id,  po_title', 'required'),
			array('poll_id, bld_id, po_position', 'numerical', 'integerOnly'=>true),
			array('po_title', 'length', 'max'=>255),
			array('po_position', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, poll_id, bld_id, po_position, po_title', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'pollAttendents' => array(self::HAS_MANY, 'PollAttendents', 'option_selected'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'poll_id' => Yii::t('app', 'Poll'),
			'bld_id' => Yii::t('app', 'Bld'),
			'po_position' => Yii::t('app', 'Po Position'),
			'po_title' => Yii::t('app', 'Po Title'),
			'pollAttendents' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('poll_id', $this->poll_id);
		$criteria->compare('bld_id', $this->bld_id);
		$criteria->compare('po_position', $this->po_position);
		$criteria->compare('po_title', $this->po_title, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}