<?php

class TicketHistoryController extends GxController {

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
			'model' => $this->loadModel($id, 'TicketHistory'),
		));
	}

	public function actionCreate() {
		$model = new TicketHistory;


		if (isset($_POST['TicketHistory'])) {
			$model->setAttributes($_POST['TicketHistory']);

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
		$model = $this->loadModel($id, 'TicketHistory');


		if (isset($_POST['TicketHistory'])) {
			$model->setAttributes($_POST['TicketHistory']);

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
			$this->loadModel($id, 'TicketHistory')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TicketHistory');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TicketHistory('search');
		$model->unsetAttributes();

		if (isset($_GET['TicketHistory']))
			$model->setAttributes($_GET['TicketHistory']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}