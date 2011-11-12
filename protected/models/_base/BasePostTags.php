<?php

/**
 * This is the model base class for the table "post_tags".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "PostTags".
 *
 * Columns in table "post_tags" available as properties of the model,
 * followed by relations of table "post_tags" available as properties of the model.
 *
 * @property integer $bld_id
 * @property integer $post_id
 * @property integer $tag_id
 *
 * @property Buildings $bld
 * @property Posts $post
 * @property Tags $tag
 */
abstract class BasePostTags extends VdActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'post_tags';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'PostTags|PostTags', $n);
	}

	public static function representingColumn() {
		return array(
			'bld_id',
			'post_id',
			'tag_id',
		);
	}

	public function rules() {
		return array(
			array(' post_id, tag_id', 'required'),
			array('bld_id, post_id, tag_id', 'numerical', 'integerOnly'=>true),
			array('bld_id, post_id, tag_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'bld' => array(self::BELONGS_TO, 'Buildings', 'bld_id'),
			'post' => array(self::BELONGS_TO, 'Posts', 'post_id'),
			'tag' => array(self::BELONGS_TO, 'Tags', 'tag_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'bld_id' => null,
			'post_id' => null,
			'tag_id' => null,
			'bld' => null,
			'post' => null,
			'tag' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('bld_id', $this->bld_id);
		$criteria->compare('post_id', $this->post_id);
		$criteria->compare('tag_id', $this->tag_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
