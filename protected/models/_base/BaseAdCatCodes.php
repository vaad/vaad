<?php

/**
 * This is the model base class for the table "ad_cat_codes".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "AdCatCodes".
 *
 * Columns in table "ad_cat_codes" available as properties of the model,
 * followed by relations of table "ad_cat_codes" available as properties of the model.
 *
 * @property integer $id
 * @property string $code_desc
 *
 * @property Ads[] $ads
 */
abstract class BaseAdCatCodes extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'ad_cat_codes';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'AdCatCodes|AdCatCodes', $n);
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
			'ads' => array(self::HAS_MANY, 'Ads', 'category'),
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
			'ads' => null,
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