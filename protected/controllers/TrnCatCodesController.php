<?php

class TrnCatCodesController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TrnCatCodes'),
		));
	}

	public function actionCreate() {
		$model = new TrnCatCodes;


		if (isset($_POST['TrnCatCodes'])) {
			$model->setAttributes($_POST['TrnCatCodes']);

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
		$model = $this->loadModel($id, 'TrnCatCodes');


		if (isset($_POST['TrnCatCodes'])) {
			$model->setAttributes($_POST['TrnCatCodes']);

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
			$this->loadModel($id, 'TrnCatCodes')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TrnCatCodes');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TrnCatCodes('search');
		$model->unsetAttributes();

		if (isset($_GET['TrnCatCodes']))
			$model->setAttributes($_GET['TrnCatCodes']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}