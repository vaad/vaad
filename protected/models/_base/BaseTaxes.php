<?php

/**
 * This is the model base class for the table "taxes".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Taxes".
 *
 * Columns in table "taxes" available as properties of the model,
 * followed by relations of table "taxes" available as properties of the model.
 *
 * @property integer $bld_id
 * @property string $tax_start_date
 * @property double $tax_amount
 *
 * @property Buildings $bld
 */
abstract class BaseTaxes extends VdActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'taxes';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Taxes|Taxes', $n);
	}

	public static function representingColumn() {
		return 'tax_start_date';
	}

	public function rules() {
		return array(
			array(' tax_start_date, tax_amount', 'required'),
			array('bld_id', 'numerical', 'integerOnly'=>true),
			array('tax_amount', 'numerical'),
			array('bld_id, tax_start_date, tax_amount', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'bld' => array(self::BELONGS_TO, 'Buildings', 'bld_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'bld_id' => null,
			'tax_start_date' => Yii::t('app', 'Tax Start Date'),
			'tax_amount' => Yii::t('app', 'Tax Amount'),
			'bld' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('bld_id', $this->bld_id);
		$criteria->compare('tax_start_date', $this->tax_start_date, true);
		$criteria->compare('tax_amount', $this->tax_amount);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
