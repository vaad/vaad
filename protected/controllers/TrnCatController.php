<?php

class TrnCatController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TrnCat'),
		));
	}

	public function actionCreate() {
		$model = new TrnCat;


		if (isset($_POST['TrnCat'])) {
			$model->setAttributes($_POST['TrnCat']);

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
		$model = $this->loadModel($id, 'TrnCat');


		if (isset($_POST['TrnCat'])) {
			$model->setAttributes($_POST['TrnCat']);

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
			$this->loadModel($id, 'TrnCat')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TrnCat');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TrnCat('search');
		$model->unsetAttributes();

		if (isset($_GET['TrnCat']))
			$model->setAttributes($_GET['TrnCat']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}