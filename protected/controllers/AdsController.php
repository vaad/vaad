<?php

class AdsController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
			array('allow',
				'actions' => array('index', 'view','list'),
				'users' => array('@'),
				),
			array('allow',
				'actions' => array('minicreate', 'create', 'update', 'admin', 'delete'),
				'expression'=>'$user->isVaad()',
				),
			array('deny',
				'users' => array('*'),
				),
			);
}


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Ads'),
		));
	}

	public function actionCreate() {
		$model = new Ads;


		if (isset($_POST['Ads'])) {
			$model->setAttributes($_POST['Ads']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Ads');


		if (isset($_POST['Ads'])) {
			$model->setAttributes($_POST['Ads']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Ads')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Ads');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Ads('search');
		$model->unsetAttributes();

		if (isset($_GET['Ads']))
			$model->setAttributes($_GET['Ads']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}