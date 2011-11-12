<?php

class AccountsController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Accounts'),
		));
	}

	public function actionCreate() {
		$model = new Accounts;


		if (isset($_POST['Accounts'])) {
			$model->setAttributes($_POST['Accounts']);

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
		$model = $this->loadModel($id, 'Accounts');


		if (isset($_POST['Accounts'])) {
			$model->setAttributes($_POST['Accounts']);

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
			$this->loadModel($id, 'Accounts')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Accounts');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Accounts('search');
		$model->unsetAttributes();

		if (isset($_GET['Accounts']))
			$model->setAttributes($_GET['Accounts']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}