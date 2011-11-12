<?php

class PostCodesController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'PostCodes'),
		));
	}

	public function actionCreate() {
		$model = new PostCodes;


		if (isset($_POST['PostCodes'])) {
			$model->setAttributes($_POST['PostCodes']);

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
		$model = $this->loadModel($id, 'PostCodes');


		if (isset($_POST['PostCodes'])) {
			$model->setAttributes($_POST['PostCodes']);

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
			$this->loadModel($id, 'PostCodes')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('PostCodes');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new PostCodes('search');
		$model->unsetAttributes();

		if (isset($_GET['PostCodes']))
			$model->setAttributes($_GET['PostCodes']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}