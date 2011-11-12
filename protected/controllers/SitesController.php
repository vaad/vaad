<?php

class SitesController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
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
			'model' => $this->loadModel($id, 'Sites'),
		));
	}

	public function actionCreate() {
		$model = new Sites;


		if (isset($_POST['Sites'])) {
			$model->setAttributes($_POST['Sites']);

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
		$model = $this->loadModel($id, 'Sites');


		if (isset($_POST['Sites'])) {
			$model->setAttributes($_POST['Sites']);

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
			$this->loadModel($id, 'Sites')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Sites');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Sites('search');
		$model->unsetAttributes();

		if (isset($_GET['Sites']))
			$model->setAttributes($_GET['Sites']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}