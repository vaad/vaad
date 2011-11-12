<?php

/**
 * This is the model base class for the table "tasks".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Tasks".
 *
 * Columns in table "tasks" available as properties of the model,
 * followed by relations of table "tasks" available as properties of the model.
 *
 * @property integer $id
 * @property integer $bld_id
 * @property integer $tnt_id
 * @property string $tsk_title
 * @property string $tsk_details
 * @property string $tsk_duedate
 * @property integer $tsk_status
 *
 * @property Buildings $bld
 * @property Tenants $tnt
 * @property TaskCodes $tskStatus
 */
abstract class BaseTasks extends VdActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tasks';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Tasks|Tasks', $n);
	}

	public static function representingColumn() {
		return 'tsk_title';
	}

	public function rules() {
		return array(
			array(' tnt_id, tsk_title, tsk_details', 'required'),
			array('bld_id, tnt_id, tsk_status', 'numerical', 'integerOnly'=>true),
			array('tsk_title', 'length', 'max'=>150),
			array('tsk_duedate', 'safe'),
			array('tsk_duedate, tsk_status', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, bld_id, tnt_id, tsk_title, tsk_details, tsk_duedate, tsk_status', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'bld' => array(self::BELONGS_TO, 'Buildings', 'bld_id'),
			'tnt' => array(self::BELONGS_TO, 'Tenants', 'tnt_id'),
			'tskStatus' => array(self::BELONGS_TO, 'TaskCodes', 'tsk_status'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'bld_id' => null,
			'tnt_id' => null,
			'tsk_title' => Yii::t('app', 'Tsk Title'),
			'tsk_details' => Yii::t('app', 'Tsk Details'),
			'tsk_duedate' => Yii::t('app', 'Tsk Duedate'),
			'tsk_status' => null,
			'bld' => null,
			'tnt' => null,
			'tskStatus' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('bld_id', $this->bld_id);
		$criteria->compare('tnt_id', $this->tnt_id);
		$criteria->compare('tsk_title', $this->tsk_title, true);
		$criteria->compare('tsk_details', $this->tsk_details, true);
		$criteria->compare('tsk_duedate', $this->tsk_duedate, true);
		$criteria->compare('tsk_status', $this->tsk_status);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
